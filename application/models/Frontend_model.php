<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Frontend_model extends CI_Model{

//****************************************Get Enquiry Table Data***************************************//
   public function get_price_request(){

   	$data = $this->db->get('price_request');
   	 return $data->result_array();
    
   }

   //************************************Get Quotes Table Data*****************************************//

   public function get_quotes_data(){

      $data = $this->db->get('quotes');
       return $data->result_array();
    
   }

//***************************************Get Contact_us Table Data************************************//
   public function get_contact_data(){

     $data = $this->db->get('contact_us');
     return $data->result_array();
   }


}

//****************************************Frontend Model Ends Here************************************//