<?php defined('BASEPATH') OR exit('No direct script Accesss allowed');

class Client_feedback extends CI_Controller
{

  function __construct() 
  {
    parent::__construct();
    $ses=$this->session->userdata('user_name');
      if(empty($ses))
      {
        redirect(base_url('/login'));
      }
  }


  public function index()
  {
    $this->load->view('admin/client_feedback/client_feedback');
  }

 
  public function rec_save()
  {
    date_default_timezone_set("Asia/Kolkata");
    $now = date('Y-m-d H:i:s');

      if($this->input->post('submit'))
      {
        $data = array(
                      'client_name'=> $this->input->post('client_name'),
                      'country'=> $this->input->post('country'),
                      'comments'=> $this->input->post('comments'),
                      'video_link'=> $this->input->post('video_link'),
                      'created_at'=> $now,
                      );

        $this->load->model('Feedback_model');
        if($this->Feedback_model->save($data))
        {
          $this->session->set_flashdata('notify', notify('successfully','Success'));
          redirect(base_url("admin/client_feedback/client_feedback_list"));
        }
      }
      else
        {
          $this->index();
        }
  }


  //---------------------------------------Client Feedback List-----------------------------------//
  public function client_feedback_list()
  {
    $this->load->model('Feedback_model');
    $data = $this->Feedback_model->get_data();
    $this->load->view('admin/client_feedback/client_feedback_list',array('data'=>$data));
  }


  //-----------------------------------------Delete Function---------------------------------------//
  public function delete($id)
  {
    $this->load->model('Feedback_model');
    if($this->Feedback_model->delete_row($id))
    {
      $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
      redirect(base_url("admin/client_feedback/client_feedback_list"));
    }
  }


  //-------------------------------------Update Page-----------------------------------------------//
  public function update($id)
  {
    $this->load->model('Feedback_model');
    $data = $this->Feedback_model->get_data_by_id($id);
    $this->load->view('admin/client_feedback/client_feedback_edit',array('data' => $data[0]));
  }


  //-----------------------------------Update Date-------------------------------------------------//
  public function update_data($id)
  {
    date_default_timezone_set("Asia/Kolkata");
    $now = date('Y-m-d H:i:s');

    if($this->input->post('submit'))
    {
      $data = array(
                    'id'=>$this->input->post('id'),
                    'client_name'=>$this->input->post('client_name'),
                    'country'=>$this->input->post('country'),
                    'comments'=>$this->input->post('comments'),
                    'video_link' => $this->input->post('video_link'),
                    'updated_at'=>$now,
                    );

      $this->db->set('client_name',$data['client_name']);
      $this->db->set('country',$data['country']);
      $this->db->set('comments',$data['comments']);
      $this->db->set('video_link',$data['video_link']);
      $this->db->set('updated_at',$data['updated_at']);
      $this->db->where('id',$id);
      $update = $this->db->update('client_feedback');

      if($update)
      {
        $this->session->set_flashdata('notify', notify('successfully updated','Success'));
        redirect(base_url("admin/client_feedback/client_feedback_list"));
      }
    }
    else
      {
        $this->update($id);
      }
  }


}

//--------------------------------------Controller Ends Here---------------------------------------//