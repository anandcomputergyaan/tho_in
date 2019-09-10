<?php defined('BASEPATH') OR exit ('No Direct script access');
/**
 * 
 */
class Tour_offers extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$ses=$this->session->userdata('user_name');
		if(empty($ses))
		{
		redirect(base_url('/login'));
        }

         $this->load->model('Slider');
	}

	public function add_offer($id)
		{
	      $this->load->view('admin/Tour_offers/Tour_offers', array('tour_id' =>$id,));      	 
		}

	public function store()
	{
		$tour_id=$this->input->post('tourId');
	    $config['upload_path']   = './uploads/slider/Tour_offers';
	    $config['allowed_types']  = 'gif|jpg|png';
	    $this->load->library('upload',$config);
	    if(!$this->upload->do_upload('offer_image')){
	    $error=array('error'=>$this->upload->display_errors());
	    }
	    else{
	    $data=array('data'=>$this->upload->data());
	    }
	  
	    date_default_timezone_set('Asia/kolkata');
	    $date=date('y-m-d H:i:s');

	  
	    $data = array('offer_name' =>$this->input->post('offer_name'),
	    'offer_image' =>$data['data']['file_name'],
	    'alt' =>$this->input->post('alt'),
	    'tour_id'=>$tour_id,
	    'image_title' => $this->input->post('image_title'),
	    'Status' => $this->input->post('status'),
	    'created_at'=>$date,
	    );



	       if($this->Slider->save($data,'tour_offers')){
	        redirect(base_url("admin/Tour_offers/offers_list/".$tour_id));

	        }

    }

    public function offers_list($id)
    {
    $table=$this->Slider->getdata_by_id("tour_offers",$id);
    $this->load->view('admin/Tour_offers/Tour_offers_list', array('data'=>$table,'tour_id'=>$id,));
    }

    public function delete($id,$tour_id){
     
        if($this->Slider->delete_row($id,$tour_id,"tour_offers")){
          redirect(base_url("admin/Tour_offers/offers_list/".$tourId));
        }
     }



    public function tour_offer_edit($id)
    {
	    if($data=$this->Slider->get_by_id($id,"tour_offers")){
	    $this->load->view('admin/Tour_offers/Tour_offers_edit',array('data' =>$data,));
	    }
    }

   public function tour_offer_update()
	{
      $id=$this->input->post('id');
      $tourId=$this->input->post('tour_id');

	    $config['upload_path']   = './uploads/slider/Tour_offers';
	    $config['allowed_types']  = 'gif|jpg|png';
	    $this->load->library('upload',$config);

	

		  if(empty($_FILES['offer_image']['name'])){
	    $data['data']['file_name']=$this->input->post('off_image');
	        }
	    else{
		    if(!$this->upload->do_upload('offer_image')){
		    $error=array('error'=>$this->upload->display_errors());
		    }
		    else{
		    $data=array('data'=>$this->upload->data());
		    }
	    }
	  
	    date_default_timezone_set('Asia/kolkata');
	    $date=date('y-m-d H:i:s');

	  
	    $data = array('offer_name' =>$this->input->post('offer_name'),
	    'offer_image' =>$data['data']['file_name'],
	    'alt' =>$this->input->post('alt'),
	    'image_title' => $this->input->post('image_title'),
	    'Status' => $this->input->post('status'),
	    'updated_at'=>$date,
	    );


	       if($this->Slider->update_slider($data,$id,'tour_offers')){
	        redirect(base_url("admin/Tour_offers/offers_list/".$tourId));
	        }

	        

    }






        
      
	




}
