<?php defined('BASEPATH') OR exit ('No direct script Access allowed ');

class Tour_by_destinations extends CI_Controller
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


	public function index()
	{
	  $this->load->view('admin/tour_by_destination/tour_by_destination_create');
	}


	public function store()
	{
		$config['upload_path']          = './uploads/tour_destination';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('image'))
		{
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

		if($this->Slider->save($data,'tour_destination'))
		{
		 $this->session->set_flashdata('notify', notify('successfully saved','Success'));
		  redirect(base_url("admin/tour_by_destinations/tour_destination_list"));
		}
	}


	public function tour_destination_list()
	{
		$table=$this->Slider->getdata("tour_destination");
		$this->load->view('admin/tour_by_destination/tour_by_destination', array('data' => $table,));
	}


	public function delete($id)
	{
		if($this->Slider->delete_row($id,"tour_destination"))
		{
		  $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
		  redirect(base_url("admin/tour_by_destinations/tour_destination_list"));
		}
	}


	public function tour_destination_edit($id)
	{
		if($data=$this->Slider->get_by_id($id,"tour_destination"))
		{
		  $this->load->view('admin/tour_by_destination/tour_by_destination_Edit',array('data' =>$data,));
		}
	}


	public function updated()
	{
		$id=$this->input->post('id');
		$config['upload_path']  = './uploads/tour_destination';
		$config['allowed_types']  = 'gif|jpg|png|jpeg';

		$this->load->library('upload',$config);
		if(empty($_FILES['image']['name']))
		{
		  $data['data']['file_name']=$this->input->post('slide');
		}
		else{
				if(!$this->upload->do_upload('image'))
				{
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
		  $this->session->set_flashdata('notify', notify('successfully updated','Success'));
		  redirect(base_url("admin/tour_by_destinations/tour_destination_list"));
	    }
	}

   
   public function image_cropper($id)
	{
		if($data=$this->Slider->get_by_id($id,"tour_destination"))
		{
		  $this->load->view('admin/tour_by_destination/cropper/cropper',array('data' =>$data,));
		}
	}

	public function cropper_store($id){
	    $image = $this->generateImage( $this->input->post("facility_image_data"));

	    // scale image size start 
	    
	    list($txt, $ext) = explode(".", $image);
	    $filePath = "uploads/tour_destination/".$image;
	    $max_width = 1200;
	    $width = $this->getWidth($filePath);
	    $height = $this->getHeight($filePath);

	    if ($width > $max_width)
	    {
	        $scale = $max_width/$width;
	        $uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);
	    }
	     else {
	            $scale = 1;
	            $uploaded = $this->resizeImage($filePath,$width,$height,$scale, $ext);
	           } 
	      
	      $this->Slider->image_update($image,'image',$id,'tour_destination');
	      print_r($image);    
	}


	public function generateImage($img)
	{

	    $folderPath = "uploads/tour_destination/";
	    $image_parts = explode(";base64,", $img);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	    $image_base64 = base64_decode($image_parts[1]);
	    $file_name = 'facility_img_'.time() . '.jpg';
	    $file =$folderPath.$file_name;
	    file_put_contents($file, $image_base64);
	    return $file_name;

	}


	public function resizeImage($image,$width,$height,$scale, $ext) {
	    $newImageWidth = ceil($width * $scale);
	    $newImageHeight = ceil($height * $scale);
	    $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
	    switch ($ext) {
	        case 'jpg':
	        case 'jpeg':
	            $source = imagecreatefromjpeg($image);
	            break;
	        case 'gif':
	            $source = imagecreatefromgif($image);
	            break;
	        case 'png':
	            $source = imagecreatefrompng($image);
	            break;
	        default:
	            $source = false;
	            break;
	    }   
	    imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
	    imagejpeg($newImage,$image,90);
	    chmod($image, 0777);
	    return $image;
	}

	/*  Function to get image height. */
	public function getHeight($image) {
	    $sizes = getimagesize($image);
	    $height = $sizes[1];
	    return $height;
	}

	/* Function to get image width */
	public function getWidth($image) {
	    $sizes = getimagesize($image);
	    $width = $sizes[0];
	    return $width;
	}


}