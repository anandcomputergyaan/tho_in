<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');

class Package extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Slider');
    $this->load->model('Packages');
    $this->load->model('Cat');
    $this->load->model('Special_tours');
    $ses=$this->session->userdata('user_name');
      if(empty($ses))
      {
        redirect(base_url('/login'));
      }
  }


  public function index()
  {
    $parent = $this->Cat->all_categories();
    $country_list = $this->Cat->all_country();
    $package = $this->Special_tours->package();
     $facility=$this->Slider->facility();

    $this->load->view('admin/package/packages',array('data' =>$parent,'pack'=>$package,'country_data'=>$country_list,'facility'=>$facility));
  }


  public function rec_save()
  {
    $config['upload_path']          = './uploads/package';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';

    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('banner_image'))
    {
      $error=array('error'=>$this->upload->display_errors());
    }
    else{
          $data=array('data'=>$this->upload->data());
        }

    if(!$this->upload->do_upload('banner_image_2'))
    {
      $error2=array('error2'=>$this->upload->display_errors());
    }
    else{
          $data2=array('data2'=>$this->upload->data());
        }

    if(!$this->upload->do_upload('banner_image_3'))
    {
      $error3=array('error3'=>$this->upload->display_errors());
    }
    else{
          $data3=array('data3'=>$this->upload->data());
        }

    if(!$this->upload->do_upload('map_image'))
    {
      $error4=array('error4'=>$this->upload->display_errors());
    }
    else{
          $data4=array('data4'=>$this->upload->data());
        }

    if(!$this->upload->do_upload('small_size_img'))
    {
      $error5=array('error5'=>$this->upload->display_errors());
    }
    else{
          $data5=array('data5'=>$this->upload->data());
        }

    if(!$this->upload->do_upload('search_image'))
    {
      $error6=array('error6'=>$this->upload->display_errors());
    }
    else{
          $data6=array('data6'=>$this->upload->data());
        }

    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $p1=implode("-", $this->input->post('price_include[]'));
    $relative=implode(",", $this->input->post('relative[]'));

    $data = array('title' =>$this->input->post('name'),
                  'alias'=> $this->input->post('alias'),
                  'category' =>$this->input->post('category'),
                  'country' =>$this->input->post('country'),
                  'duration' =>$this->input->post('duration'),
                  'best_travel_time'=>$this->input->post('best_travel_time'),
                  'availability_from' =>$this->input->post('availability_from'),
                  'availability_to' =>$this->input->post('availability_to'),

                  'marquee' =>$this->input->post('marquee'),
                  'offer' =>$this->input->post('offer'),
                  'discounted_price' =>$this->input->post('discounted_price'),
                  'price' =>$this->input->post('price'),
                  'tour_route_from' =>$this->input->post('tour_route_from'),
                  'tour_route_to' =>$this->input->post('tour_route_to'),
                  'route' =>$this->input->post('route'),

                  'itinerary' =>$this->input->post('itinerary'),
                  'details' =>$this->input->post('details'),
                  'exclusion' =>$this->input->post('exclusion'),
                  'inclusions' =>$this->input->post('inclusions'),
                  'essential_information'=>$this->input->post('essential_information'),
                  'banner_image' =>$data['data']['file_name'],
                  'banner_alt' =>$this->input->post('banner_alt'),
                  'banner_image_2'=>$data2['data2']['file_name'],
                  'banner_alt_2'=>$this->input->post('banner_alt_2'),
                  'banner_image_3'=>$data3['data3']['file_name'],
                  'banner_alt_3'=>$this->input->post('banner_alt_3'),
                  'map_image' =>$data4['data4']['file_name'],
                  'map_alt' =>$this->input->post('map_alt'),
                  'small_size_img'=>$data5['data5']['file_name'],
                  'small_img_alt'=>$this->input->post('small_img_alt'),
                  'search_image' =>$data6['data6']['file_name'],
                  'search_alt' =>$this->input->post('search_alt'),
                  'price_include' => $p1,
                  'relative' =>$relative,
                  'created_on'=>$date,
                  );
    

    if($last_id=$this->Packages->save($data))
    {
      $packid=$last_id[0]['id'];
      $day=$this->input->post('day[]');
      $n=1;
      $day_title = $this->input->post('day_title[]');

      $i=0;
      foreach ($day as $day_val)
      {
        $data = array('pack_id' =>$packid,
                      'title'=>$day_title[$i],
                      'description'=>$day_val,
                      'day_no' =>$n,
                      );
        $n++;
       
        $this->Slider->save($data,'itinerary');

        $i++;
      }
      $this->session->set_flashdata('notify', notify('successfully saved','Success'));
      redirect(base_url("admin/package/package_list"));

    }

  }


  public function package_list()
  {
    $parent = $this->Cat->all_categories();
    $list = array();

    foreach ($parent as $key)
    {
      $list[$key['id']]=$key['name'];
    }

    $data=$this->Packages->getdata();
    $this->load->view('admin/package/packages_list', array('data' => $data,'cat_name'=>$list));
  }


  public function delete($id)
  {
    if($this->Packages->delete_row($id))
    {
      $this->session->set_flashdata('notify', notify('successfully deleted','Success'));
      redirect(base_url("admin/package/package_list"));
    }

  }


  public function package_edit($id)
  {
      $facility=$this->Slider->facility();
    $relative_pack = $this->Special_tours->package();
    $parent = $this->Cat->all_categories();
    $days_details = $this->Slider->pack_id($id,'itinerary');
    $country_list = $this->Cat->all_country();

    if($data=$this->Packages->get_by_id($id))
    {
      $this->load->view('admin/package/packages_edit',array('data' =>$data,'list'=>$parent,'relative'=>$relative_pack,'days'=>$days_details,'country_data'=>$country_list,'facility'=>$facility));
    }

  }


  public function package_update()
  {
    $id=$this->input->post('id');
    $config['upload_path']          = './uploads/package';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';

    $this->load->library('upload',$config);

    if(empty($_FILES['banner_image']['name']))
    {
      $data['data']['file_name']=$this->input->post('banner');
    }
    else{
          if(!$this->upload->do_upload('banner_image'))
          {
           $error=array('error'=>$this->upload->display_errors());
          }
          else{
                $data=array('data'=>$this->upload->data());
              }
        }

    if(empty($_FILES['banner_image_2']['name']))
    {
      $data2['data2']['file_name']=$this->input->post('banner_2');
    }
    else{
          if(!$this->upload->do_upload('banner_image_2'))
          {
            $error2=array('error2'=>$this->upload->display_errors());
          }
          else{
                $data2=array('data2'=>$this->upload->data());
              }
        }

    if(empty($_FILES['banner_image_3']['name']))
    {
      $data3['data3']['file_name']=$this->input->post('banner_3');
    }
    else{
          if(!$this->upload->do_upload('banner_image_3'))
          {
            $error3=array('error3'=>$this->upload->display_errors());
          }
          else{
                $data3=array('data3'=>$this->upload->data());
              }
        }

    if(empty($_FILES['map_image']['name']))
    {
      $data4['data4']['file_name']=$this->input->post('map');
    }
    else{
          if(!$this->upload->do_upload('map_image'))
          {
            $error4=array('error4'=>$this->upload->display_errors());
          }
          else{
                $data4=array('data4'=>$this->upload->data());
              }
        }

    if(empty($_FILES['small_size_img']['name']))
    {
      $data5['data5']['file_name']=$this->input->post('small_img');
    }
    else{
          if(!$this->upload->do_upload('small_size_img'))
          {
            $error5=array('error5'=>$this->upload->display_errors());
          }
          else{
                $data5=array('data5'=>$this->upload->data());
              }
        }

    if(empty($_FILES['search_image']['name']))
    {
      $data6['data6']['file_name']=$this->input->post('search');
    }
    else{
          if(!$this->upload->do_upload('search_image'))
          {
            $error6=array('error6'=>$this->upload->display_errors());
          }
          else{
                $data6=array('data6'=>$this->upload->data());
              }
        }

    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');

    $p1=implode("-", $this->input->post('price_include[]'));
    $relative=implode(",", $this->input->post('relative[]'));

    $data = array('title' =>$this->input->post('name'),
                  'alias'=> $this->input->post('alias'),
                  'category' =>$this->input->post('category'),
                  'country' =>$this->input->post('country'),
                  'duration' =>$this->input->post('duration'),
                  'best_travel_time'=>$this->input->post('best_travel_time'),
                  'availability_from' =>$this->input->post('availability_from'),
                  'availability_to' =>$this->input->post('availability_to'),

                  'marquee' =>$this->input->post('marquee'),
                  'offer' =>$this->input->post('offer'),
                  'discounted_price' =>$this->input->post('discounted_price'),
                  'price' =>$this->input->post('price'),
                  'tour_route_from' =>$this->input->post('tour_route_from'),
                  'tour_route_to' =>$this->input->post('tour_route_to'),
                  'route' =>$this->input->post('route'),

                  'itinerary' =>$this->input->post('itinerary'),
                  'details' =>$this->input->post('details'),
                  'exclusion' =>$this->input->post('exclusion'),
                  'inclusions' =>$this->input->post('inclusions'),
                  'essential_information'=>$this->input->post('essential_information'),
                  'banner_image' =>$data['data']['file_name'],
                  'banner_alt' =>$this->input->post('banner_alt'),
                  'banner_image_2' =>$data2['data2']['file_name'],
                  'banner_alt_2' =>$this->input->post('banner_alt_2'),
                  'banner_image_3' =>$data3['data3']['file_name'],
                  'banner_alt_3' =>$this->input->post('banner_alt_3'),
                  'map_image' =>$data4['data4']['file_name'],
                  'map_alt' =>$this->input->post('map_alt'),
                  'small_size_img'=>$data5['data5']['file_name'],
                  'small_img_alt'=>$this->input->post('small_img_alt'),

                  'search_image' =>$data6['data6']['file_name'],
                  'search_alt' =>$this->input->post('search_alt'),
                  'price_include' => $p1,
                  'relative' =>$relative,
                  'update_on'=>$date,
                  );

    if($this->Packages->update_package($data,$id))
    {
      $packid=$id;
      $n=1;
      $day = $this->input->post('day[]');
      $day_title = $this->input->post('day_title[]');

      $i=0;
      foreach ($day as $val)
      {
        $data = array('pack_id' =>$packid,
                      'title'=>$day_title[$i],
                      'description'=>$val,
                      'day_no' =>$n,
                      );
        $n++;
        $this->Slider->update_itinerary($data,'itinerary');
        $i++;
      }
      $this->session->set_flashdata('notify', notify('successfully updated','Success'));
      redirect(base_url("admin/package/package_list"));

    }

  }


  public function package_view($id)
  {
    $parent = $this->Cat->all_categories();
    $relative_pack = $this->Special_tours->package();
    $days_details = $this->Slider->pack_id($id,'itinerary');
    $country_list = $this->Cat->all_country();

    if($data=$this->Packages->get_by_id($id))
    {
      $this->load->view('admin/package/packages_view',array('data' =>$data,'list'=>$parent,'relative'=>$relative_pack,'days'=>$days_details,'country_data'=>$country_list));
    }

  }


  public function package_itinerary($id)
  {
    $this->load->view('admin/package/itinerary',array('id' =>$id,));
  }


  public function itinerary_save()
  {

    $n=1;
    $day = $this->input->post('day[]');
    $id= $this->input->post('pack_id');

    foreach ($day as $val)
    {
      $data = array('pack_id' =>$id,
                    'description'=>$val,
                    'day_no' =>$n,
                    );
      $n++;
      $this->Slider->save($data,'itinerary');

    }

    redirect(base_url("admin/package/package_list"));
  }


    public function packages_images($id)
    {
      $data=$this->Packages->images($id);   
      $this->load->view('admin/package_img/image_list', array('data'=>$data));
    }

    public function cropper_image($which_image,$id)
    {  
      
      switch($which_image){
        case 'first_banner':
              $images="banner_image";         
           break;
        case 'secound_banner':
              $images="banner_image_2";  
           break;
        case 'third_banner':
              $images="banner_image_3";  
           break;
        case 'map_image':
              $images="map_image";  
           break;
        case 'small_image':
              $images="small_size_img";  
           break;
        case 'search_image':
              $images="search_image";  
           break;

        default:  

      }

       $data=$this->Packages->images($id); 
       $this->load->view('admin/package_img/cropper/cropper', array('current_facility'=>$data,'image_name'=>$images));                           
    }


    public function cropper_store($id){
        $image = $this->generateImage( $this->input->post("facility_image_data"));
        $column_name=$this->input->post('col_name');

        // scale image size start 
        
        list($txt, $ext) = explode(".", $image);
        $filePath = "uploads/package/".$image;
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
          
          $this->Packages->image_update($image,$id,$column_name);
          print_r($image);    
    }

    public function generateImage($img)
    {

        $folderPath = "uploads/package/";
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file_name = 'package_img_'.time() . '.jpg';
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