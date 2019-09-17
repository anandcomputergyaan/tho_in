<?php defined('BASEPATH') OR exit('No dirrect script Accesss allowed');
class Package extends CI_Controller{

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
        $this->load->view('admin/package/packages',array('data' =>$parent,'pack'=>$package,'countrt_data'=>$country_list));
      }



    public function rec_save()
    {
      
    $config['upload_path']          = './uploads/package';
    $config['allowed_types']        = 'gif|jpg|png';
    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('banner_image')){
    $error=array('error'=>$this->upload->display_errors());
    }
    else{
    $data=array('data'=>$this->upload->data());
    }
    if(!$this->upload->do_upload('map_image')){
    $error2=array('error2'=>$this->upload->display_errors());
    }
    else{
    $data2=array('data2'=>$this->upload->data());
    }
    
         if(!$this->upload->do_upload('search_image')){
    $error3=array('error3'=>$this->upload->display_errors());
    }

    else{
    $data3=array('data3'=>$this->upload->data());
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
    'map_image' =>$data2['data2']['file_name'],
    'map_alt' =>$this->input->post('map_alt'),
    'search_image' =>$data3['data3']['file_name'],
    'search_alt' =>$this->input->post('search_alt'),
    'price_include' => $p1,
    'relative' =>$relative,
    'created_on'=>$date,
    );

print_r($data);
exit('exit');
    if($last_id=$this->Packages->save($data)){
$packid=$last_id[0]['id'];

    $day=$this->input->post('day[]');
        $n=1;
       $day = $this->input->post('day[]');
           foreach ($day as $val) {
               $data = array('pack_id' =>$packid,
                              'description'=>$val,
                               'day_no' =>$n, 
                                          );
                              $n++;
              $this->Slider->save($data,'itinerary');   
           }

    redirect(base_url("admin/package/package_list"));
    }



    }


    public function package_list(){
   $parent = $this->Cat->all_categories();

$list = array();
foreach ($parent as $key) {
    $list[$key['id']]=$key['name'];
}
    $table=$this->Packages->getdata();
    $this->load->view('admin/package/packages_list', array('data' => $table,'cat_name'=>$list));
    }

    public function delete($id){
 
    if($this->Packages->delete_row($id)){
    redirect(base_url("admin/package/package_list"));
    }
    else{
    }
    }


    public function package_edit($id){
   
   
   $relative_pack = $this->Special_tours->package();
   $parent = $this->Cat->all_categories();
   $days_details = $this->Slider->pack_id($id,'itinerary');

    if($data=$this->Packages->get_by_id($id)){
    $this->load->view('admin/package/packages_edit',array('data' =>$data,'list'=>$parent,'relative'=>$relative_pack,'days'=>$days_details, ));
    }
    }



    public function package_update(){
    $id=$this->input->post('id');
    $config['upload_path']          = './uploads/package';
    $config['allowed_types']        = 'gif|jpg|png';
    $this->load->library('upload',$config);
    
    if(empty($_FILES['banner_image']['name'])){
    $data['data']['file_name']=$this->input->post('banner');
    }
    else{
    if(!$this->upload->do_upload('banner_image')){
    $error=array('error'=>$this->upload->display_errors());
    }
    else{
    $data=array('data'=>$this->upload->data());
    }
    }
    
    if(empty($_FILES['map_image']['name'])){
    $data2['data2']['file_name']=$this->input->post('map');
    }
    else{
    if(!$this->upload->do_upload('map_image')){
    $error2=array('error2'=>$this->upload->display_errors());
    }
    else{
    $data2=array('data2'=>$this->upload->data());
    }
    }
    
    if(empty($_FILES['search_image']['name'])){
    $data3['data3']['file_name']=$this->input->post('search');
    }
    else{
    if(!$this->upload->do_upload('search_image')){
    $error3=array('error3'=>$this->upload->display_errors());
    }
    else{
    $data3=array('data3'=>$this->upload->data());
    }
    }
    
    date_default_timezone_set('Asia/kolkata');
    $date=date('y-m-d H:i:s');
    $p1=implode("-", $this->input->post('price_include[]'));
     $relative=implode(",", $this->input->post('relative[]'));

     $data = array('title' =>$this->input->post('name'),
      'alias'=> $this->input->post('alias'),
    'category' =>$this->input->post('category'),
    'duration' =>$this->input->post('duration'),
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
    'map_image' =>$data2['data2']['file_name'],
    'map_alt' =>$this->input->post('map_alt'),
    
    'search_image' =>$data3['data3']['file_name'],
    'search_alt' =>$this->input->post('search_alt'),
    'price_include' => $p1,
    'relative' =>$relative,
    'update_on'=>$date,
    );


    if($this->Packages->update_package($data,$id)){
          $packid=$id;

   
        $n=1;
       $day = $this->input->post('day[]');
           foreach ($day as $val) {
               $data = array('pack_id' =>$packid,
                              'description'=>$val,
                               'day_no' =>$n, 
                                          );
            $n++;
            $this->Slider->update_itinerary($data,'itinerary');   
           }
    redirect(base_url("admin/package/package_list"));
    }
    }


    public function package_view($id){

   $parent = $this->Cat->all_categories();

      $relative_pack = $this->Special_tours->package();
   $days_details = $this->Slider->pack_id($id,'itinerary');

    if($data=$this->Packages->get_by_id($id)){
    $this->load->view('admin/package/packages_view',array('data' =>$data,'list'=>$parent,'relative'=>$relative_pack,'days'=>$days_details,));
    }
    }



    public function package_itinerary($id){

    $this->load->view('admin/package/itinerary',array('id' =>$id,));
    }
    
      public function itinerary_save(){
    
        $n=1;
       $day = $this->input->post('day[]');
       $id= $this->input->post('pack_id');

           foreach ($day as $val) {
               $data = array('pack_id' =>$id,
                              'description'=>$val,
                               'day_no' =>$n, 
                                          );
            $n++;
            $this->Slider->save($data,'itinerary');
             
           }
    redirect(base_url("admin/package/package_list"));

    }




}