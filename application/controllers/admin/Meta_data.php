<?php defined('BASEPATH') OR exit('No direct script Accesss allowed');
class Meta_data extends CI_Controller{

public function index()
{
$this->load->view('admin/seo_meta_data/meta_data_form');
}

//----------------------------------Insert Function-------------------------------------------------//

public function rec_save()
{  

	date_default_timezone_set("Asia/Kolkata");
    $now = date('Y-m-d H:i:s');
   
   if($this->input->post('submit'))
   {
	$data = array(
             'url'=> $this->input->post('url'),
             'title'=> $this->input->post('title'),
             'keyword'=> $this->input->post('keyword'),
             'description'=> $this->input->post('description'),
               'alias'=> $this->input->post('alias'),
             'created_at'=> $now,
	);

	$this->load->model('Meta_data_model');
	if($this->Meta_data_model->save($data))
	{
	$this->session->set_flashdata('notify', notify('successfully','Success'));
	
    redirect(base_url("admin/meta_data/meta_data_list"));
      
    }
}

else
{
	$this->index();
}

}

//-------------------------------------------Meta Data List-----------------------------------//

public function meta_data_list()
{
	$this->load->model('Meta_data_model');
	$data = $this->Meta_data_model->get_data();

	$this->load->view('admin/seo_meta_data/meta_data_list',array('data'=>$data));

}

//-------------------------------------------Delete Function---------------------------------------//

public function delete($id)
{    
	$this->load->model('Meta_data_model');
	if($this->Meta_data_model->delete_row($id))
	{
		redirect(base_url("admin/meta_data/meta_data_list"));
	
	}
}

//----------------------------------------Update Page-----------------------------------------------//

public function update($id)
{
	$this->load->model('Meta_data_model');
	$data = $this->Meta_data_model->get_data_by_id($id);

	$this->load->view('admin/seo_meta_data/meta_data_edit',array('data' => $data[0]));
}

//----------------------------------------Update Meta Data-------------------------------------------//

public function update_data($id)
{  
	date_default_timezone_set("Asia/Kolkata");
    $now = date('Y-m-d H:i:s');

	if($this->input->post('submit'))
	{
       $data = array(
                'id'=>$this->input->post('id'),
                'url'=>$this->input->post('url'),
                'title'=>$this->input->post('title'),
                'keyword'=>$this->input->post('keyword'),
                'description'=> $this->input->post('description'),
                  'alias'=> $this->input->post('alias'),
                'updated_at'=>$now,

                 );

       $this->db->set('url',$data['url']);
       $this->db->set('title',$data['title']);
       $this->db->set('keyword',$data['keyword']);
       $this->db->set('description',$data['description']);
           $this->db->set('alias',$data['alias']);
       $this->db->set('updated_at',$data['updated_at']);
       $this->db->where('id',$id);
       $update = $this->db->update('seo_meta_data');
       if($update)
       {
       	redirect(base_url('admin/meta_data/meta_data_list'));
       }
	}
	else
	{
		$this->update($id);
	}
}


//--------------------------------------Controller Ends Here---------------------------------------//

public function meta_search_list()
{
  $str=$this->input->post('str');
  $this->load->model('meta_data_model');
  $data = $this->meta_data_model->get_search_data($str);
    if(empty($data)){
      echo"<tr><th>Sr.No.</th><th>URL</th><th>Title</th><th>Keywords</th><th>Description</th><th>Action</th></tr><tr><td><td></tr><tr><td> <center ><b > No Result<td></center><td></tr>";
      
    }
    else{
              echo"<tr><th>Sr.No.</th><th>URL</th><th>Title</th><th>Keywords</th><th>Description</th><th>Action</th></tr><tr>";

                 echo"<td>".'1'."</td><td>".$data['url']."</td><td>".$data['title']."</td><td>".$data['keyword']."</td><td>".$data['description']."</td><td>"; 
               
               echo "<a href='".base_url('admin/meta_data/update/'.@$data['id'])." '>

                  <button class='btn btn-success btn-sm'><span class='fa fa-edit'></span></button></a>";

               echo "<a href='".base_url('admin/meta_data/delete/'.@$data['id'])." '>

                  <button class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></button></a></td></tr>";
                  
    }
}
}