<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Quotes extends CI_Controller{


//-------------------------------------Save Quotes Data-----------------------------------------------//
	
	public function save_quotes_data()
	{
	    $this->load->model('Email_model');

		$date = $this->input->post('dep_date');
        $new_date = date("Y-m-d", strtotime($date));

        date_default_timezone_set("Asia/Kolkata");
        $now = date('Y-m-d H:i:s');
        

                     $destination= $this->input->post('destination');
                     $dep_date= $new_date;
                     $no_of_travellers= $this->input->post('no_of_travellers');
                     $name = $this->input->post('name');
                     $home_country= $this->input->post('home_country');
                     $email= $this->input->post('email');
                     $contact_no= $this->input->post('contact_no');
                     $msg_box= $this->input->post('msg_box');
                     $created_on= $now;
                     

                    $subject = "Qoutes from";
    				$data 	= '
    				  Destination : '.$destination.'
    				  Departure Date: '.$dep_date.'
    				  Travellers NO: '.$no_of_travellers.'
    				  Name : '.$name.'
    				  Country :'.$home_country.'
    				  Email : '.$email.'
    				  Contact No: '.$contact_no.'
    				  Message: '.$msg_box;
    					 
    		


		
            $this->Email_model->send_mail('ask@indiatailormade.com','abc@totalholidayoptions.lk',$subject,$data);




			$data = array(
                     'destination'=> $this->input->post('destination'),
                     'dep_date'=> $new_date,
                     'no_of_travellers'=> $this->input->post('no_of_travellers'),
                     'name'=> $this->input->post('name'),
                     'home_country'=> $this->input->post('home_country'),
                     'email'=> $this->input->post('email'),
                     'contact_no'=> $this->input->post('contact_no'),
                      'msg_box'=> $this->input->post('msg_box'),
                     'created_on'=> $now,
			);
		
			$insert = $this->db->insert('quotes',$data);
			if($insert)
			{
				echo "successfully saved quotes data";
			}
			else{
				echo" please try again";
			}

		
	}


//-------------------------------------Show Quotes Data List-------------------------------------------//
	
	public function quotes_list()
	{ 
		$this->load->model('frontend_model');
		$data = $this->frontend_model->get_quotes_data();

		$this->load->view('admin/quotes_list',array('data'=> $data));

	}


//------------------------------------Deleting a Row--------------------------------------------------//
	
	public function delete($id)
	{
       $delete = $this->db->delete('quotes',array('id'=>$id));

       if($delete)
       {
       	$this->session->set_flashdata('notify', notify('successfully Deleted','Success'));
       	redirect(base_url('quotes/quotes_list'));
       }
	}




//-------------------------------------Quotes Controller Ends Here-------------------------------------//

 
 public  function rec()
 {
 	$this->load->helper('form');
 	$this->load->model('Email_model');

 	if(!empty($email=$this->input->post('str'))){

             $this->load->library('form_validation');
             $this->form_validation->set_rules('str','email','required|valid_email');

if ($this->form_validation->run()) {
	 		  date_default_timezone_set("Asia/Kolkata");
        $now = date('Y-m-d H:i:s');
        $email= $this->input->post('str');
                
        $subject = "Newslatter from";
        $data1 	= '
        Email : '.$email.'
        Time:'.$now;
    		


		
 $this->Email_model->send_mail('ask@indiatailormade.com','abc@totalholidayoptions.lk',$subject,$data1);

$data = array(
             'email'=> $email,
             'created_on'=> $now,
			);

			$insert = $this->db->insert('newsletter',$data);

			if($insert)
			{
				echo "Successfully We Contact Soon... ";
			}
	
}
else{
	echo "Please Enter Valid Email Id";
}


 		
 	}
 	
 	else{
	echo "Please Enter Your Email id";
}
 	
 }


}
