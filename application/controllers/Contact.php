<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');
class Contact extends CI_Controller
{
	
	public function save_contact_details()
	{
		date_default_timezone_set("Asia/Kolkata");
		$now = date('Y-m-d H:i:s');

		if($this->input->post('submit'))
		{
		$data = array(
					'f_name'=> $this->input->post('f_name'),
					'e_mail'=> $this->input->post('e_mail'),
					'mob_no'=> $this->input->post('mob_no'),
					'comment'=> $this->input->post('comment'),
					'contacted_on'=> $now,
					 );

		$insert = $this->db->insert('contact_us',$data);
					
		    if($insert)
			{
			   $this->session->set_flashdata('notify', notify('Thank You.We will contact soon.','Success'));
		        redirect(base_url('Home/contact_us'));
			}
		}
	}


	//--------------------------------Contact Us Table List----------------------------------------//
		public function contact_list()
		{
			$this->load->model('Frontend_model');
			$data = $this->Frontend_model->get_contact_data();
			$this->load->view('admin/contact_list',array('data'=>$data));
		}

	//------------------------------Deleting Contact Us Table Data---------------------------------//
		public function delete($id)
		{
			$delete = $this->db->delete('contact_us',array('id'=>$id));

			if($delete)
			{
				$this->session->set_flashdata('notify', notify('successfully Deleted','Success'));
				redirect(base_url('contact/contact_list'));
			}
		}
}

//------------------------------------Contact Controller Ends Here---------------------------------//