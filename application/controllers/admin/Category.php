<?php defined('BASEPATH') OR exit('No direct script Accesss allowed');
class Category extends CI_Controller{
        function __construct() {
        parent::__construct();
       
        $ses=$this->session->userdata('user_name');
if(empty($ses)){
		redirect(base_url('/login'));
}

          
    }
public function index()
{
   $this->load->model('Cat');
   $parent = $this->Cat->all_parent();
  
$this->load->view('admin/category/category',array('data' => $parent,));
}



public function rec_save(){
$config['upload_path']          = './uploads/category';
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
$ip=$_SERVER['REMOTE_ADDR'];
$data = array('name' =>$this->input->post('name'),
'alias'=> $this->input->post('alias'),
'parent'=> $this->input->post('parent_name'),
'description'=>$this->input->post('description'),
'image'=> $data['data']['file_name'],
'alt'=> $this->input->post('alt'),
'created_on'=>$date,
'ip'=>$ip,
);
$this->load->model('Cat');
if($this->Cat->save($data)){
	$this->session->set_flashdata('notify', notify('successfully','Success'));
	
redirect(base_url("admin/category/category_list"));
}
}


public function category_list(){
$this->load->model('Cat');

$data=$this->Cat->getdata();
$cat_names=$this->Cat->all_parent();
$list = array();
foreach ($cat_names as $key) {

 $list[$key['id']]=$key['name'];

}

$this->load->view('admin/category/category_list',array('data' => $data,'cat_names' => $list, ));
}



public function delete($id){
$this->load->model('Cat');
if($this->Cat->delete_row($id)){
redirect(base_url("admin/category/category_list"));
}
else{
}
}


public function category_edit($id){
$this->load->model('Cat');

   $parent = $this->Cat->all_parent();

if($data=$this->Cat->get_by_id($id)){
$this->load->view('admin/category/category_edit',array('data' => $data,'list'=>$parent, ));
}
}


public function category_update(){
$id= $this->input->post('id');
if(empty($_FILES['image']['name'])){
$data['data']['file_name']=$this->input->post('image_name');
}
else{
$config['upload_path']          = './uploads/category';
$config['allowed_types']        = 'gif|jpg|png';
$this->load->library('upload',$config);
if(!$this->upload->do_upload('image')){
$error=array('error'=>$this->upload->display_errors());
}
else{
$data=array('data'=>$this->upload->data());
}
}
date_default_timezone_set('Asia/kolkata');
$date=date('y-m-d H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];
$data = array('name' =>$this->input->post('name'),
'alias'=> $this->input->post('alias'),
'parent'=> $this->input->post('parent_name'),
'description'=>$this->input->post('description'),
'image'=> $data['data']['file_name'],
'alt'=> $this->input->post('alt'),
'update_on'=>$date,
'ip'=>$ip,
);
print_r($data);
$this->load->model('Cat');
if($this->Cat->update_category($data,$id)){
redirect(base_url("admin/category/category_list"));
}
else{
echo " unsuccess update";
}
}


public function already(){
	$str=$this->input->post('q');
	echo$str;
}


}