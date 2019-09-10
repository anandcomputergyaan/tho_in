<?php  defined('BASEPATH') OR exit('No direct  script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	

	public function index(){
		$this->load->view('login');
	}

    public function sign_in(){

			date_default_timezone_set('Asia/kolkata');
			$last_login = date('Y/m/d H:i:s');
			$data = array('user_name'=>$this->input->post('user_name'),
			'password' =>SHA1($this->input->post('password')),
			);
			$this->load->model('Slider');
			$info = $this->Slider->user_login($data,$last_login,"user");


if(empty($info)){
	redirect(base_url('/login'));
	}
	else{
	  $this->session->set_userdata($info);
	  redirect(base_url("/dashboard"));
	}
}

   
 public function logout(){
 $this->session->unset_userdata($info);
 $this->session->sess_destroy();
redirect(base_url('/login'));
 } 

    } 




