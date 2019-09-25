<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');
class Slider extends CI_Model{

/* this model use for */




	public function save($data,$table){
	 
		 if($this->db->insert($table,$data))
		 {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}

   public function getdata($table)
   {
   	$result=$this->db->get($table);
   	return $result->result_array(); 
   }


    public function getdata_by_id($table,$id)
    {
     $result = $this->db->where('tour_id',$id)->get($table);
     return $result->result_array();
   }


   public function delete_row($id,$table)
   {
     	if($this->db->delete($table, array('id' => $id,))){
     		return true;

     	}
     	else{
     		return false;
     	}
   }

   public function get_by_id($id,$table){
   	$row=$this->db->get_where($table,array('id'=> $id));
         $row=$row->result_array();
      return($row[0]);    

   }


public function update_slider($data,$id,$table){
   
            $this->db->where('id', $id);
         if($this->db->update($table, $data)){
            return true;
         }
         else{
            return false;
         }



   }

   public function slider_data($table){

      $result = $this->db->get($table);
       return $result->result_array();
   }

   public function user_login($data,$date,$table){

      $row=$this->db->select("id,user_name")->get_where($table,array('user_name'=> $data['user_name'],'password'=>$data['password']));
      $row=$row->result_array();
      $this->db->set('last_login',$date)->where('id',$row[0]['id'])->update('user');

      return($row[0]);    

   }

    public function pack_id($id,$table)
     {
         $day=$this->db->get_where($table,array('pack_id'=> $id));
         $day=$day->result_array();
         return($day);    

      }
      
      public function update_itinerary($data,$table)
      {
        $this->db->where('pack_id', $data['pack_id'])->where('day_no',$data['day_no']);
         if($this->db->update($table, $data))
           {
            return true;
           }

         else{
            return false;
             }
      }
      
            public function facility()
      {

          $list=$this->db->select('id,name')
                   ->get('facilities')
                   ->result_array();
         return $list;
      }

      public function selected_facility($ids){
               $ids = array_values($ids);
      $selected=$this->db->select('name,image_icon')
                         ->where_in('id',$ids)
                         ->get('facilities')
                         ->result_array();
      return $selected;

      }






}