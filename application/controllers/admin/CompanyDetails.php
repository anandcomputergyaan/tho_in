<?php defined('BASEPATH') OR exit('No direct script Accesss allowed');

class CompanyDetails extends CI_Controller
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
     $this->load->model('CompanyDetailsModel');
     $data = $this->CompanyDetailsModel->getdata();
     $this->load->view('admin/company_details',array('data'=>$data));
      
  }


  public function details_update()
  {

    $id= $this->input->post('id');

    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $data = array('name' =>$this->input->post('name'),
                  'phone'=> $this->input->post('phone'),
                  'fax'=> $this->input->post('fax'),
                  'landline'=>$this->input->post('landline'),
                  'email'=> $this->input->post('email'),
                  'address'=> $this->input->post('address'),
                  'facebook'=> $this->input->post('facebook'),
                  'google_plus'=> $this->input->post('google_plus'),
                  'linkedin'=> $this->input->post('linkedin'),
                  'rss'=> $this->input->post('rss'),
                  'youtube'=> $this->input->post('youtube'),
                  'twitter'=> $this->input->post('twitter'),
                  'instagram'=> $this->input->post('instagram'),
                  'updated_on'=>$date,
                  );

    // print_r($data);
    $this->load->model('CompanyDetailsModel');
    if($this->CompanyDetailsModel->update_company_details($data,$id))
    {
      $this->session->set_flashdata('notify', notify('successfully updated','Success'));
      redirect(base_url("admin/CompanyDetails"));
    }
    else{
          echo " Failed to update";
        }

  }


}