<?php defined('BASEPATH') OR exit ('No direct script Access allowed ');
/**

 */
class Tour_by_destinations extends CI_Controller
{
	
	function __construct()
	{
	    parent::__construct();
               $ses=$this->session->userdata('user_name');
if(empty($ses)){
        redirect(base_url('/login'));
}
          $this->load->model('Slider');
	}


	public function index(){

     $this->load->view('admin/tour_by_destination/tour_by_destination_create');      
	 
	}

	public function store(){
    $config['upload_path']          = './uploads/tour_destination';
    $config['allowed_types']        = 'gif|jpg|png';
    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('image')){
    $error=array('error'=>$this->upload->display_errors());
    }
    else{
    $data=array('data'=>$this->upload->data());
    }
    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $data = array('country' =>$this->input->post('country'),
    'image' =>$data['data']['file_name'],
    'alt' =>$this->input->post('alt'),
    'alias' =>$this->input->post('alias'),
    'image_title' => $this->input->post('image_title'),
    'description'=>$this->input->post('description'),
    'tour_count' => $this->input->post('tour_count'),    
    'created_on'=>$date,
    );
   

	    if($this->Slider->save($data,'tour_destination')){

	        redirect(base_url("admin/tour_by_destinations/tour_destination_list"));

	    }


	}

    public function tour_destination_list(){
    $table=$this->Slider->getdata("tour_destination");
    $this->load->view('admin/tour_by_destination/tour_by_destination', array('data' => $table,));
    }

    public function delete($id){
	    if($this->Slider->delete_row($id,"tour_destination")){
	redirect(base_url("admin/tour_by_destinations/tour_destination_list"));
	    }
    }


    public function tour_destination_edit($id){
	    if($data=$this->Slider->get_by_id($id,"tour_destination")){
	    $this->load->view('admin/tour_by_destination/tour_by_destination_edit',array('data' =>$data,));
	    }
    }

    public function updated(){
	    $id=$this->input->post('id');
	    $config['upload_path']  = './uploads/tour_destination';
	    $config['allowed_types']  = 'gif|jpg|png';
	    $this->load->library('upload',$config);

	    if(empty($_FILES['image']['name'])){
	    $data['data']['file_name']=$this->input->post('slide');
	    }
	    else{
		    if(!$this->upload->do_upload('image')){
		    $error=array('error'=>$this->upload->display_errors());
		    }
		    else{
		    $data=array('data'=>$this->upload->data());
		    }
	    }
	  
	    date_default_timezone_set('Asia/kolkata');
	    $date=date('y-m-d H:i:s');

	  
	    $data = array('country' =>$this->input->post('country'),
	    'image' =>$data['data']['file_name'],
	    'alt' =>$this->input->post('alt'),
	    'alias' =>$this->input->post('alias'),
	    'image_title' => $this->input->post('image_title'),
	    'description'=>$this->input->post('description'),
	    'tour_count' => $this->input->post('tour_count'),    
	     'updated_on'=>$date,
	    );
	   

	   if($this->Slider->update_slider($data,$id,"tour_destination"))
	   { 
	        redirect(base_url("admin/tour_by_destinations/tour_destination_list"));
       }


	}








}

