<?php defined("BASEPATH") OR exit ('No direct script access allowed');


class Home extends CI_Controller{

function __construct(){

parent::__construct();
 
//  GET URL of current page. 
  
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
   $meta = $this->meta_data_model->get_search_data($link);
   
   $this->load->view('frontend/theme/header', array('row' => $category, 'list'=>$pack, 'meta_data'=>$meta, ));

}




  public function index()
  {
      $this->load->model('slider');
      $slid=$this->slider->slider_data('main_slider');
      $slid1=$this->slider->slider_data('featured_collections');

      $slid3=$this->slider->slider_data('experiences');
       
      $this->load->model('special_tours');
      $top_d=$this->special_tours->getdata();
      $ids=explode(",",$top_d[0]['package']);
      $top_pack=$this->packages->top_packages($ids);


      $this->load->model('feedback_model');
      $feedback=$this->feedback_model->info();  


      $this->load->view('frontend/home', array('slid' =>$slid,'slid1' =>$slid1,'slid2' =>$slid2,'slid3' =>$slid3,'top_pack'=>$top_pack,'feedback'=>$feedback, ));
	}

 


 	public function contact_us(){
          $this->load->view('frontend/contact_us');

 	}

 		public function about_us(){


$this->load->view('frontend/about_us');

 	}


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


  }

    public function search_page()
    {
      $this->load->model('packages');


      $str = $this->input->get('search_bar');


    


            $this->load->library('pagination');
            $config = array();
            $config['base_url']= base_url()."/home/search_page";
            $config['total_rows'] = $this->packages->search_pack($str);
            $config['per_page']= 2;
            $config['uri_segment']=3;
            $config['prev_link']='Previous';
            $config['next_link']='Next';
            $config['reuse_query_string']=true;

           


            $this->pagination->initialize($config);
            $page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;
            $result = $this->packages->limit_row($config['per_page'], $page, $str);
            
            $links = $this->pagination->create_links();


   $this->load->view('frontend/search_result', array('result' => $result,'str'=>$str,'links'=>$links,));

  }
  
   public function all_toures()
    {
      $this->load->model('packages');
   $str="Explore All Tours";
            $this->load->library('pagination');
            $config = array();
            $config['base_url']= base_url()."/home/all_toures";
            $config['total_rows'] = $this->packages->all_pack($str);
            $config['per_page']= 2;
            $config['uri_segment']=3;
            $config['prev_link']='Previous';
            $config['next_link']='Next';
            $config['reuse_query_string']=true;

            $this->pagination->initialize($config);
            $page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;
            $result = $this->packages->all_limit_row($config['per_page'], $page);
            
            $links = $this->pagination->create_links();

   $this->load->view('frontend/search_result', array('result' => $result,'str'=>$str,'links'=>$links,));
  }

 	
 





}
