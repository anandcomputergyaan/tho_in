<?php defined("BASEPATH") OR exit ('No direct script access allowed');


class Home extends CI_Controller{

function __construct(){

parent::__construct();
  $this->load->model('Cat');
  $this->load->model('Slider');
  $this->load->model('Special_tours');
  $this->load->model('packages');
  $this->load->model('Feedback_model');
 
 
/*//  GET URL of current page. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){ 
    $link = "https"; 
}
else{
    $link = "http"; 
}

$link .= "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
      
   $this->load->model('cat');
   $category = $this->cat->all_parent();


   $this->load->model('packages');
   $pack = $this->packages->package_list();

   $this->load->model('meta_data_model');
   $meta = $this->meta_data_model->get_search_data($link);*/

     $parent = $this->Cat->all_categories();
     $country_list = $this->Cat->all_country();
   $this->load->view('frontend/theme/header', array('country' => $country_list, 'category'=>$parent));

}


  public function index()
  {
    $main_slider=$this->Slider->slider_data('main_slider');

    $hot_deatls=$this->Special_tours->get_by_id(1);
    $ids=explode(",",$hot_deatls['package']);
    $hot_deatls=$this->packages->top_packages($ids);

    $most_populer=$this->Special_tours->get_by_id(4);
    $ids=explode(",",$most_populer['package']);
    $most_populer=$this->packages->top_packages($ids);

    $tour_destination=$this->Slider->getdata("tour_destination");

    $Popular_tour_categories=$this->Slider->getdata("Popular_tour_categories");

    $satisfied_customer = $this->Feedback_model->get_data();

    $this->load->view('frontend/index', array('slider' =>$main_slider,'hot_deatls'=>$hot_deatls,'most_populer'=>$most_populer,'tour_destination'=>$tour_destination,'Popular_tour_categories'=>$Popular_tour_categories,'satisfied_customer'=>$satisfied_customer));
  }

  public function contact_us()
  {
    $this->load->view('frontend/contact_us');
  }

  public function about_us()
  {
    $this->load->view('frontend/about_us');
  }




/*

public function booking_conditions(){
$this->load->view('frontend/booking_conditions');
}


public function page404(){
$this->load->view('frontend/404_page');
}
public function page($cat='',$pack='')
{
$category_id = $this->cat->parent_id($cat);
$category_id=@$category_id[0]['id'];
$pack_id = $this->packages->package_id($pack);
$pack_id=$pack_id['id'];
if($category_id =='' || $pack_id ==''){
redirect(base_url('/page404'));
}
$data=$this->packages->get_by_alias($category_id,$pack);
$ids=explode(",",$data['relative']);
$relative_pack=$this->packages->top_packages($ids);
$days = $this->packages->itinerary_days($pack_id);
$this->load->view('frontend/inner_page', array('data' =>$data,'relative_pack'=>$relative_pack,'itineraries'=>$days,));
}*/

    public function search_page()
    {
      $search_data=$this->packages->getdata();
      $this->load->view('frontend/search_page', array('search_data' => $search_data,));

    }

    public function inner_page($id)
    {
      $page_details=$this->packages->get_by_id($id);
      $itinerary_details=$this->packages->itinerary_days($id);

      $ids=explode(",",$page_details['relative']);
      $relatives_Packs=$this->packages->top_packages($ids);     
      $this->load->view('frontend/inner_page',array('page_details' => $page_details,'itinerary_details' => $itinerary_details,'relatives_Packs' => $relatives_Packs,));
    }

    public function search_by_country($alias)
    {
               $country=$this->Cat->county_id($alias);
              $search_data_by_category = $this->packages->s_country($country['id']);
               
        $this->load->view('frontend/search_page', array('search_data' => $search_data_by_category,));  

    }
    
    public function search_by_category($alias)
    {
        $category=$this->Cat->parent_id($alias);
        $search_data_by_category = $this->packages->s_category($category['id']);
        $this->load->view('frontend/search_page', array('search_data' => $search_data_by_category,));
    }




}
