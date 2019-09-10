<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Enquiry extends CI_Controller{


//---------------------------------------Inserting Records To Enquiry Table----------------------------//
	public function price_request()
	{

		$this->load->model('Email_model');  
		$date = $this->input->post('date');
        $new_date = date("Y-m-d", strtotime($date));

	    $package_name = $this->input->post('c_pack');
                     $name= $this->input->post('c_name');
                     $email= $this->input->post('c_email');
                     $phone= $this->input->post('c_phone');
                     $date= $new_date;
                     $Category= $this->input->post('category');


                    $subject = "Enquiry from ";
    				$data 	= '
    					 Name : '.$name.'
    					 Email : '.$email.'
    					 Tour : '. $package_name.'
    					 Departure Date :'.$date.'
    					 Hotel Category :'.$Category;


		
            $this->Email_model->send_mail('ask@indiatailormade.com','abc@totalholidayoptions.lk',$subject,$data);

			$data = array(
                     'package_name'=> $this->input->post('c_pack'),
                     'c_name'=> $this->input->post('c_name'),
                     'c_email'=> $this->input->post('c_email'),
                     'c_phone'=> $this->input->post('c_phone'),
                     'date'=> $new_date,
                     'Category'=> $this->input->post('category'),
			);


			$insert = $this->db->insert('price_request',$data);

			if($insert)
			{
				echo "successfully Send  We Contact Us  ";
			
			}
			else{
				echo 'Something Wrong';


			}

		
	}

// 	public function price_request()
// 	{
// 		$date = $this->input->post('date');
//         $new_date = date("Y-m-d", strtotime($date));

	
		
// 			$data = array(
//                      'package_name'=> $this->input->post('c_pack'),
//                      'c_name'=> $this->input->post('c_name'),
//                      'c_email'=> $this->input->post('c_email'),
//                      'c_phone'=> $this->input->post('c_phone'),
//                      'date'=> $new_date,
//                      'Category'=> $this->input->post('category'),
// 			);

// 			$insert = $this->db->insert('price_request',$data);

// 			if($insert)
// 			{
// 				echo "successfully Send  We Contact Us  ";
// 			}
// 			else{
// echo 'Something Wrong';

// 			}

		
// 	}

//------------------------------------------Enquiry Table List----------------------------------------//
	
	public function enquiry_list()
	{ 
		$this->load->model('Frontend_model');
		$data = $this->Frontend_model->get_price_request();

		$this->load->view('admin/price_request_list',array('data'=> $data));

	}

//-----------------------------------------Deleting Enquiry Table Data---------------------------------//
	
	public function delete($id)
	{
       $delete = $this->db->delete('price_request',array('id'=>$id));

       if($delete)
       {
       	$this->session->set_flashdata('notify', notify('successfully Deleted','Success'));
       	redirect(base_url('enquiry/enquiry_list'));
       }
	}

}

//---------------------------------------Enquiry Controller Ends Here---------------------------------//


