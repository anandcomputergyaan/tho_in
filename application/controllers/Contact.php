<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Contact extends CI_Controller{



//--------------------------------------Inserting Records To Contact Table----------------------------//
	
	public function save_contact_details()
	{
	    $this->load->model('Email_model');
		date_default_timezone_set("Asia/Kolkata");
        $now = date('Y-m-d H:i:s');

		if($this->input->post('submit'))
		{
		       $f_name= $this->input->post('f_name');
                      $e_mail= $this->input->post('e_mail');
                      $mob_no= $this->input->post('mob_no');
                      $comment= $this->input->post('comment');
                      $contacted_on= $now;
		           
		           $subject = "Enquiry from ";
    				$data 	= '
    					 Name : '.$f_name.'
    					 Email : '.$e_mail.'
    					 Contact No : '.$mob_no.'
    					 Comment :'.$comment.'
    					 Time :'.$contacted_on;


		
            $this->Email_model->send_mail('ask@indiatailormade.com','abc@totalholidayoptions.lk',$subject,$data);
		    
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
               redirect(base_url('contact-us'));
			}
		}
	}

//------------------------------------------Contact Us Table List----------------------------------------//
	
	public function contact_list()
	{ 
		$this->load->model('Frontend_model');
		$data = $this->Frontend_model->get_contact_data();

		$this->load->view('admin/contact_list',array('data'=>$data));

	}

//-----------------------------------------Deleting Contact Us Table Data---------------------------------//
	
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

//---------------------------------------Contact Controller Ends Here---------------------------------//


