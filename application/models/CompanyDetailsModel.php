<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyDetailsModel extends CI_Model{


   public function getdata()
   {
   	$data = $this->db->get('company_details')->result_array();
   	 return $data[0];
   
   }


   public function update_company_details($data,$id)
   {
   
            $this->db->where('id', $id);
         if($this->db->update('company_details', $data)){
            return true;
         }
         else{
            return false;
         }
   }









} 