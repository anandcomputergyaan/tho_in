<?php defined("BASEPATH") OR exit ('No direct script access allowed');

class Search extends CI_Controller
{
   public function page()
   {
      $this->load->model('Packages');
      $this->load->model('Cat');
      $this->load->model('Slider');

     $str = $this->input->post('search_bar');
     $result=$this->Packages->search_pack($str);

       $parent = $this->Cat->all_categories();
      $country_list = $this->Cat->all_country();
      $this->load->view('frontend/theme/header', array('country' => $country_list, 'category'=>$parent));

   $i=0;
        $facilities= array();

           foreach ($result as $search_data_by_category_value)
             {
               $facility_ids=explode("-",$search_data_by_category_value['price_include']);
               $facilities[$i]=$this->Slider->selected_facility($facility_ids);
               $i++;
             }

$this->load->view('frontend/search_page', array('search_data' => $result,'facilities'=>$facilities));


   }
   
}