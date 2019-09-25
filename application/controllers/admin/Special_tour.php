<?php defined('BASEPATH') OR  exit('No direct script access allowed');

class Special_tour extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Special_tours');
    $ses=$this->session->userdata('user_name');
    if(empty($ses))
    {
      redirect(base_url('/login'));
    }
  }


  public function index()
  {
    $package = $this->Special_tours->package();
    $this->load->view('admin/special_tour/special_tour',array('pack'=>$package,));
  }


  public function rec_save()
  {
    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $package_ids=implode(",", $this->input->post('packages[]'));

    $data = array('title' =>$this->input->post('title'),
                  'description'=>$this->input->post('description'),
                  'package'=>$package_ids,
                  'created_on'=>$date,
                  );

    if($this->Special_tours->save($data))
    {
      $this->session->set_flashdata('notify', notify('successfully saved','Success'));
      redirect(base_url("admin/special_tour/special_tour_list"));
    }

  }


  public function special_tour_list()
  {
    $data=$this->Special_tours->getdata();
    $this->load->view('admin/special_tour/special_tour_list',array('data' => $data,));
  }


  public function delete($id)
  {
    if($this->Special_tours->delete_row($id))
    {
      $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
      redirect(base_url("admin/special_tour/special_tour_list"));
    }
  }


  public function special_tour_edit($id)
  {
    $list = array();
    $pack = $this->Special_tours->package();

    if($data=$this->Special_tours->get_by_id($id))
    {
      $every =explode(",",$data['package']);
      $this->load->view('admin/special_tour/special_tour_edit',array('data' =>$every ,'pack'=>$pack,'info'=>$data , ));
    }
  }



  public function special_tour_update()
  {
    $id=$this->input->post('id');
    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $package_ids=implode(",", $this->input->post('packages[]'));
    $data = array('title' =>$this->input->post('title'),
                  'description'=>$this->input->post('description'),
                  'package'=>$package_ids,
                  'update_on'=>$date,
                  );

    if($this->Special_tours->update_special_tour($data,$id))
    {
      $this->session->set_flashdata('notify', notify('successfully updated','Success'));
      redirect(base_url("admin/special_tour/special_tour_edit/".$id));
    }
    
  }


}