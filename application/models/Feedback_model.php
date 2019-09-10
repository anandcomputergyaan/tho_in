<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Feedback_model extends CI_Model{

	public function save($data)
	{
	 
		 if($this->db->insert('client_feedback',$data))
		 {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}

	public function get_data()
	{
		$data = $this->db->get('client_feedback');
		return $data->result_array();
	}

	public function delete_row($id)
	{
		if($this->db->delete('client_feedback',array('id'=>$id)))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_data_by_id($id)
	{
		$data = $this->db->get_where('client_feedback',array('id'=>$id));
		 return $data->result_array();
	}

	public function info()
	{
		$data = $this->db->get('client_feedback');
		return $data->result_array();
	}


}