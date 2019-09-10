<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Dashboard extends CI_Controller{

   public function index()
   {

        $ses=$this->session->userdata('user_name');
if(empty($ses)){
		redirect(base_url('/login'));
}else{
	$this->load->view('dashboard');


	}

}
}




