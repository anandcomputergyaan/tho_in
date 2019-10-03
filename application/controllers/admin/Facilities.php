<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Facilities extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model('Slider');
    $ses=$this->session->userdata('user_name');
    if(empty($ses))
    {
    redirect(base_url('/login'));
    }
  }


//-----------------------------------Facilities View--------------------------------------------//
  public function index()
  {
    $this->load->view('admin/facilities/facility');
  }
  

//----------------------------------Save Facilities Function-----------------------------------//
  public function save()
  {
  
    $config['upload_path']='./uploads/facility';
    $config['allowed_types']='gif|jpg|png|jpeg';

    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('image_icon'))
      {
        $error=array('error'=>$this->upload->display_errors());
      }
    else{
          $img_data = array('data'=>$this->upload->data());
        }

    date_default_timezone_set('Asia/Kolkata');
    $date_time=date('y-m-d:H:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];

    $data = array('name' =>$this->input->post('name'),
                  'description'=>$this->input->post('description'),
                  'alt'=>$this->input->post('alt'),
                  'image_icon'=>$img_data['data']['file_name'],
                  'ip'=>$ip,
                  'created_at'=>$date_time,
                  );
                  

    if($this->Slider->save($data,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully saved data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));
    }

  }


//-----------------------------------------Fetch Facilities List--------------------------------//
  public function facility_list()
  {
    $data=$this->Slider->getdata('facilities');
    return $this->load->view('admin/facilities/facility_list',array('data'=>$data,));
  }


//----------------------------------------Facilities Edit Function------------------------------//
  public function facility_edit($id)
  {
    $data=$this->Slider->get_by_id($id,'facilities');
    return $this->load->view('admin/facilities/facility_edit',array('data'=>$data,));
  }


//----------------------------------------Facilities Update Function----------------------------//
  public function facility_update($id)
  {
    if(empty($_FILES['image_icon']['name']))
    {
      $img_data['data']['file_name']=$this->input->post('old_image_icon');
    }
    else{
          $config['upload_path']='./uploads/facility';
          $config['allowed_types']='gif|jpg|png|jpeg';

          $this->load->library('upload',$config);
          if(!$this->upload->do_upload('image_icon'))
            {
              $error=array('error'=>$this->upload->display_errors());
            }
          else{
                $img_data = array('data'=>$this->upload->data());
              }
        }

    date_default_timezone_set('Asia/Kolkata');
    $date_time=date('y-m-d:H:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];

    $data = array('name' =>$this->input->post('name'),
                  'description'=>$this->input->post('description'),
                  'alt'=>$this->input->post('alt'),
                  'image_icon'=>$img_data['data']['file_name'],
                  'ip'=>$ip,
                  'created_at'=>$date_time,
                  );

    if($this->Slider->update_slider($data,$id,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully updated data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));

    }

  }


//------------------------------------Facilities Delete Function-----------------------------------//
  public function delete($id)
  {
    if($this->Slider->delete_row($id,'facilities'))
    {
      $this->session->set_flashdata('notify', notify('successfully deleted data','Success'));
      redirect(base_url('admin/Facilities/facility_list'));
    }
  }

  //----------------------------------------Facilities Edit Function------------------------------//




  public function facility_cropper($id)
  {
      $data=$this->Slider->get_by_id($id,'facilities');

    return $this->load->view('admin/facilities/cropper/cropper',array('current_facility'=>$data,));
  }


public function cropper_store($id){
    $image = $this->generateImage( $this->input->post("facility_image_data"));

    // scale image size start 
    
    list($txt, $ext) = explode(".", $image);
    $filePath = "uploads/facility/".$image;
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
      
      $this->Slider->image_update($image,'image_icon',$id,'facilities');
      print_r($image);    
}


public function generateImage($img)
{

    $folderPath = "uploads/facility/";
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

//--------------------------------------Controller Ends Here---------------------------------------//