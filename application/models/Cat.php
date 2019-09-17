<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Cat extends CI_Model{

	public function save($data)
	{
	 
		 if($this->db->insert('category',$data))
		 {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}

   public function getdata(){

   	$table = $this->db->get('category');
   	 return $table->result_array();
    
   }


   public function delete_row($id){
   	if($this->db->delete('category', array('id' => $id,))){
   		return true;

   	}
   	else{
   		return false;
   	}

   }

   public function get_by_id($id){
   	$row=$this->db->get_where('category',array('id'=> $id,));
      $row= $row->result_array();
      return($row[0]);    

   }

   public function update_category($data,$id){
   
            $this->db->where('id', $id);
         if($this->db->update('category', $data)){
            return true;
         }
         else{
            return false;
         }
   }



   public function all_parent()
   {   

      $this->db->select('id,name,alias')->where('parent',"");
      $info =$this->db->get('category');
      return $info->result_array();

   }
   
   public function parent_id($cat)
   {   
     $info = $this->db->select('id')
                       ->where('alias',$cat)
                       ->get('category')
                       ->result_array();
      return $info[0];
   }

   public function all_categories()
   {   
      $this->db->select('id,name,alias')->where_not_in('parent',"");
      $all_c =$this->db->get('category');
      return $all_c->result_array();
   }


   public function all_country()
   {
     $country_list=$this->db->select('id,country,alias')->get('tour_destination');
     $country_list=$country_list->result_array();
     return($country_list);
   }

   public function county_id($alias){
     $country_id=$this->db->select('id')
               ->where('alias',$alias)
               ->get('tour_destination')
               ->result_array();
               return $country_id[0];

   }




}