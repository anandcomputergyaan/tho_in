<?php defined("BASEPATH") OR exit ('No direct script access allowed');


class Search extends CI_Controller{

   public function page()
   {
   	$this->load->model('Packages');

      $str = $this->input->post('search_bar');
    $result=$this->Packages->search_pack($str);
    



   $this->load->model('Cat');
   $category = $this->Cat->all_parent();


   $this->load->model('Packages');
   $pack = $this->Packages->package_list();

   $this->load->view('frontend/theme/header', array('row' => $category, 'list'=>$pack,'str'=>$str,));
   $this->load->view('frontend/search_result', array('result' => $result,));

	}




}
