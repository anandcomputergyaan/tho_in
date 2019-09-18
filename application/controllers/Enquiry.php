<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Enquiry extends CI_Controller{


	public function save_enquiry()
	{

	       if($this->input->post('submit'))
	       {
             
			$date = $this->input->post('date');
	        $new_date = date("Y-m-d", strtotime($date));

			$data = array(
                     'package_id'=> $this->input->post('package_id'),
                     'name'=> $this->input->post('name'),
                     'email'=> $this->input->post('email'),
                     'phone'=> $this->input->post('phone'),
                     'date'=> $new_date,
                     'Category'=> $this->input->post('Category'),
			);


			$insert = $this->db->insert('enquiry',$data);

			if($insert)
			{
			  $this->session->set_flashdata('notify', notify('Thank You.We will contact soon.','Success'));	
			  redirect(base_url('Home/inner_page/'.$data['package_id']));
			
			}
			else{
				echo 'Something Went Wrong';


			}
		}

		
	}



	public function enquiry_list()
	{ 
		$this->load->model('frontend_model');
		$data = $this->frontend_model->get_enquiry_data();

		$this->load->view('admin/enquiry_list',array('data'=> $data));

	}


	public function delete($id)
	{
       $delete = $this->db->delete('enquiry',array('id'=>$id));

       if($delete)
       {
       	$this->session->set_flashdata('notify', notify('successfully Deleted','Success'));
       	redirect(base_url('Enquiry/enquiry_list'));
       }
	}


}

