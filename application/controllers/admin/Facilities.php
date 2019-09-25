<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Facilities extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model('Slider');
    $ses=$this->session->userdata('user_name');
    if(empty($ses))
    {
    redirect(base_url('/login'));
    }
  }


//-----------------------------------Facilities View--------------------------------------------//
  public function index()
  {
    $this->load->view('admin/facilities/facility');
  }
  

//----------------------------------Save Facilities Function-----------------------------------//
  public function save()
  {
  
    $config['upload_path']='./uploads/facility';
    $config['allowed_types']='gif|jpg|png|jpeg';

    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('image_icon'))
      {
        $error=array('error'=>$this->upload->display_errors());
      }
    else{
          $img_data = array('data'=>$this->upload->data());
        }

    date_default_timezone_set('Asia/Kolkata');
    $date_time=date('y-m-d:H:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];

    $data = array('name' =>$this->input->post('name'),
                  'description'=>$this->input->post('description'),
                  'alt'=>$this->input->post('alt'),
                  'image_icon'=>$img_data['data']['file_name'],
                  'ip'=>$ip,
                  'created_at'=>$date_time,
                  );
                  

    if($this->Slider->save($data,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully saved data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));
    }

  }


//-----------------------------------------Fetch Facilities List--------------------------------//
  public function facility_list()
  {
    $data=$this->Slider->getdata('facilities');
    return $this->load->view('admin/facilities/facility_list',array('data'=>$data,));
  }


//----------------------------------------Facilities Edit Function------------------------------//
  public function facility_edit($id)
  {
    $data=$this->Slider->get_by_id($id,'facilities');
    return $this->load->view('admin/facilities/facility_edit',array('data'=>$data,));
  }


//----------------------------------------Facilities Update Function----------------------------//
  public function facility_update($id)
  {
    if(empty($_FILES['image_icon']['name']))
    {
      $img_data['data']['file_name']=$this->input->post('old_image_icon');
    }
    else{
          $config['upload_path']='./uploads/facility';
          $config['allowed_types']='gif|jpg|png|jpeg';

          $this->load->library('upload',$config);
          if(!$this->upload->do_upload('image_icon'))
            {
              $error=array('error'=>$this->upload->display_errors());
            }
          else{
                $img_data = array('data'=>$this->upload->data());
              }
        }

    date_default_timezone_set('Asia/Kolkata');
    $date_time=date('y-m-d:H:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];

    $data = array('name' =>$this->input->post('name'),
                  'description'=>$this->input->post('description'),
                  'alt'=>$this->input->post('alt'),
                  'image_icon'=>$img_data['data']['file_name'],
                  'ip'=>$ip,
                  'created_at'=>$date_time,
                  );

    if($this->Slider->update_slider($data,$id,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully updated data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));

    }

  }


//------------------------------------Facilities Delete Function-----------------------------------//
  public function delete($id)
  {
    if($this->Slider->delete_row($id,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully deleted data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));
    }
  }

}

//--------------------------------------Controller Ends Here---------------------------------------//