<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Meta_data_model extends CI_Model{
//-------------------------------------Saving To Database-------------------------------------------//
	
	public function save($data)
	{
	 
		 if($this->db->insert('seo_meta_data',$data))
		 {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}

//-----------------------------------------------Get Data From Table----------------------------------//
	
	public function get_data()
	{
		$data = $this->db->get('seo_meta_data');
		return $data->result_array();
	}

//----------------------------------------------Delete From Database---------------------------------//
	
	public function delete_row($id)
	{
		if($this->db->delete('seo_meta_data',array('id'=>$id)))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

//-------------------------------------------Get Data By Id From Table-------------------------------//
	
	public function get_data_by_id($id)
	{
		$data = $this->db->get_where('seo_meta_data',array('id'=>$id));
		 return $data->result_array();
	}



//------------------------------------------Model Ends Here------------------------------------------//


	public function get_search_data($str)
	{
		$data = $this->db->where('url',$str )->get('seo_meta_data');
		if($data = $data->result_array()){
		return($data[0]);
		 }
		 else{
		 	return('');
		 }
	}

}