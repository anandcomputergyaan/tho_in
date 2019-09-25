<?php defined("BASEPATH") OR exit ('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('Cat');
      $this->load->model('Slider');
      $this->load->model('Special_tours');
      $this->load->model('packages');
      $this->load->model('Feedback_model');
      $this->load->model('CompanyDetailsModel');

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
    $Popular_tour_categories=$this->Slider->getdata("popular_tour_categories");
    $satisfied_customer = $this->Feedback_model->get_data();

    $this->load->view('frontend/index', array('slider' =>$main_slider,'hot_deatls'=>$hot_deatls,'most_populer'=>$most_populer,'tour_destination'=>$tour_destination,'Popular_tour_categories'=>$Popular_tour_categories,'satisfied_customer'=>$satisfied_customer));
  }


  public function contact_us()
  {
    $company_details = $this->CompanyDetailsModel->getdata();
    $this->load->view('frontend/contact_us',array('company_details'=>$company_details));
  }


  public function about_us()
  {
    $this->load->view('frontend/about_us');
  }
 

  public function search_page()
  {
    $search_data=$this->packages->getdata();
    $this->load->view('frontend/search_page', array('search_data' => $search_data,));
  }


    public function inner_page($id)
    {
      $page_details=$this->packages->get_by_id($id);
      $itinerary_details=$this->packages->itinerary_days($id);

      $relative_ids=explode(",",$page_details['relative']);
      $relatives_Packs=$this->packages->top_packages($relative_ids);

      $facility_ids=explode("-",$page_details['price_include']);
      $facilities=$this->Slider->selected_facility($facility_ids); 

      $this->load->view('frontend/inner_page',array('page_details' => $page_details,'itinerary_details' => $itinerary_details,'relatives_Packs' => $relatives_Packs,'facilities'=>$facilities));
    }

    public function search_by_country($alias)
      {
        $i=0;
        $facilities= array();

        $country=$this->Cat->county_id($alias);
        $search_data_by_country = $this->packages->s_country($country['id']);

        foreach ($search_data_by_country as $search_data_by_country_value)
          {
            $facility_ids=explode("-",$search_data_by_country_value['price_include']);
            $facilities[$i]=$this->Slider->selected_facility($facility_ids);
            $i++;
          }

        $this->load->view('frontend/search_page', array('search_data' => $search_data_by_country,'facilities'=>$facilities));
      }


    public function search_by_category($alias)
    {
       $i=0;
        $facilities= array();
        
        $category=$this->Cat->parent_id($alias);
        $search_data_by_category = $this->packages->s_category($category['id']);

     foreach ($search_data_by_category as $search_data_by_category_value)
       {
         $facility_ids=explode("-",$search_data_by_category_value['price_include']);
         $facilities[$i]=$this->Slider->selected_facility($facility_ids);
         $i++;
       }

        $this->load->view('frontend/search_page', array('search_data' => $search_data_by_category,'facilities'=>$facilities));
    }


}