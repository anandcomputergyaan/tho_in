<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class main_slider extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $table="main_slider";
        $ses=$this->session->userdata('user_name');
            if(empty($ses))
            {
               redirect(base_url('/login'));
            }
        $this->load->model('slider');
    }


    public function index()
    {
        $this->load->view('admin/sliders/main_slider/main_slider');
    }


    public function save()
    {
        $config['upload_path']          = './uploads/slider/main_slider';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload',$config);
            if(!$this->upload->do_upload('slider_image'))
            {
               $error=array('error'=>$this->upload->display_errors());
            }
            else
                {
                  $data=array('data'=>$this->upload->data());
                }

        date_default_timezone_set('Asia/kolkata');
        $date=date('y-m-d H:i:s');

        $data = array('tour_title' =>$this->input->post('tour_title'),
                      'slider_image' =>$data['data']['file_name'],
                      'slider_alt' =>$this->input->post('slider_alt'),
                      'image_title' => $this->input->post('image_title'),
                      'link' => $this->input->post('link'),
                      'created_on'=>$date,
                     );

        if($this->slider->save($data,'main_slider'))
        {
          $this->session->set_flashdata('notify', notify('successfully saved','Success'));
           redirect(base_url("admin/slider/main_slider/slider_list"));
        }
    }


    public function slider_list()
    {
        $data=$this->slider->getdata("main_slider");
        $this->load->view('admin/sliders/main_slider/main_slider_list', array('data' => $data,));
    }


    public function delete($id)
    {
        if($this->slider->delete_row($id,"main_slider"))
        {
          $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
          redirect(base_url("admin/slider/main_slider/slider_list"));
        }
       
    }


    public function slider_edit($id)
    {
        if($data=$this->slider->get_by_id($id,"main_slider"))
        {
          $this->load->view('admin/sliders/main_slider/main_slider_edit',array('data' =>$data,));
        }
    }


    public function slider_update()
    {
        $id=$this->input->post('id');
        $config['upload_path']          = './uploads/slider/main_slider';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload',$config);

            if(empty($_FILES['slider_image']['name']))
            {
              $data['data']['file_name']=$this->input->post('slider');
            }
             else
                {
                    if(!$this->upload->do_upload('slider_image'))
                    {
                       $error=array('error'=>$this->upload->display_errors());
                    }
                    else
                        {
                          $data=array('data'=>$this->upload->data());
                        }
                }

        $data = array('tour_title' =>$this->input->post('tour_title'),
                      'slider_image' =>$data['data']['file_name'],
                      'slider_alt' =>$this->input->post('slider_alt'),
                      'image_title' => $this->input->post('image_title'),
                      'link' => $this->input->post('link'),
                      'updated_on'=>$date,
                      );

        if($this->slider->update_slider($data,$id,"main_slider"))
        {
          $this->session->set_flashdata('notify', notify('successfully updated','Success'));
           redirect(base_url("admin/slider/main_slider/slider_list"));
        }
    }
  
}