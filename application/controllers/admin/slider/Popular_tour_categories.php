<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Popular_tour_categories extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $ses=$this->session->userdata('user_name');
            if(empty($ses))
            {
              redirect(base_url('/login'));
            }

        $this->load->model('Slider');
    }


    public function index()
    {
       $this->load->view('admin/sliders/Popular_tour_categories/Popular_tour_categories');
    }


    public function save()
    {
        $config['upload_path']          = './uploads/slider/Popular_tour_categories';
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

        if($this->Slider->save($data,'popular_tour_categories'))
        {
          $this->session->set_flashdata('notify', notify('successfully saved','Success'));
           redirect(base_url("admin/slider/Popular_tour_categories/slider_list"));
        }

    }


    public function slider_list()
    {
        $data=$this->Slider->getdata("popular_tour_categories");
        $this->load->view('admin/sliders/Popular_tour_categories/Popular_tour_categories_list', array('data' => $data,));
    }


    public function delete($id)
    {
        if($this->Slider->delete_row($id,"popular_tour_categories"))
        {
          $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
           redirect(base_url("admin/slider/Popular_tour_categories/slider_list"));
        }
   
    }


    public function slider_edit($id)
    {
        if($data=$this->Slider->get_by_id($id,"popular_tour_categories"))
        {
           $this->load->view('admin/sliders/Popular_tour_categories/Popular_tour_categories_edit',array('data' =>$data,));
        }
    }


    public function slider_update()
    {
        $id=$this->input->post('id');
        $config['upload_path']          = './uploads/slider/Popular_tour_categories';
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

        if($this->Slider->update_slider($data,$id,"popular_tour_categories"))
        {
          $this->session->set_flashdata('notify', notify('successfully updated','Success'));
           redirect(base_url("admin/slider/Popular_tour_categories/slider_list"));
        }
    }
    
}