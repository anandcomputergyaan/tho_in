<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Special_tours extends CI_Model{

public function save($data)
	{
	 
		 if($this->db->insert('tour_special',$data))
		 {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}

   public function getdata(){
   	$table = $this->db->where_not_in('status',4)->get('tour_special');
   	 return $table->result_array();
   
   }

   public function package(){
          
 $this->db->select('id,title');
 $pack = $this->db->get('package');
        return $pack->result_array();
       
   }

public function delete_row($id){

$this->db->set('status',4)->where('id',$id);
if($this->db->update('tour_special')){
	return true;
}

}


   public function get_by_id($id){
   	$row=$this->db->get_where('tour_special',array('id'=> $id,));
      $row= $row->result_array();
      return($row[0]);    

   }


   public function update_special_tour($data,$id){
   
            $this->db->where('id', $id);
         if($this->db->update('tour_special', $data)){
            return true;
         }
         else{
            return false;
         }
   }









} 