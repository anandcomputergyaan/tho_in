<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Packages extends CI_Model{

public function search_pack($str)
{
       $rows=$this->db->select('offer,search_image,title,alias,route,duration,id,price_include')
                   ->like('title',$str)
                   ->get('package')
                   ->result_array();
           return $rows;
}







  public function save($data){
	 
		 if($this->db->insert('package',$data))
		 {
		 	$last_id = $this->db->select('id')->limit(1)->order_by('id','desc')->get('package');
          return $last_id->result_array();

		 }
		 else{
		 	return false;
		 }
	}

  public function getdata(){
   	$table = $this->db->get('package');
   	 return $table->result_array();
    
   }


  public function delete_row($id){
   	if($this->db->delete('package', array('id' => $id,))){
   		return true;

   	}
   	else{
   		return false;
   	}


   }

  public function get_by_id($id){
   	 $row=$this->db->get_where('package',array('id'=> $id));
         $row=$row->result_array();
      return($row[0]);    

   }

  public function update_package($data,$id){
   
            $this->db->where('id', $id);
         if($this->db->update('package', $data)){
            return true;
         }
         else{
            return false;
         }

     }

  public function package_list(){
      $this->db->select('id,title,alias,category');
      $table = $this->db->get('package');
      return $table->result_array();

   }

  public function top_packages($ids)
    {
      $ids = array_values($ids);
      $selected=$this->db->select('offer,details,small_size_img,title,alias,route,duration,id,price')
                         ->where_in('id',$ids)
                         ->get('package');
      return $selected->result_array();
    }




  public function itinerary_days($pack_id){
   $itinerary_day =   $this->db->where('pack_id',$pack_id)
                     ->get('itinerary');
   return $itinerary_day->result_array();
}


  public function all_pack($str=false){
   
   $top =  $this->db->select('package.id,package.alias,package.title,package.search_image,package.map_alt,package.duration,package.offer,package.details,package.route,category.alias as cat_alias')
                     ->join('category','package.category=category.id','inner')
                     ->get('package');
    return count($top->result_array());


}

  public function all_limit_row($limit,$start){
    
      $d= $this->db->select('package.id,package.alias,package.title,package.search_image,package.map_alt,package.duration,package.offer,package.details,package.route,category.alias as cat_alias')
                 ->join('category','package.category=category.id','inner')
                 ->limit($limit,$start)
                 ->get('package');
        $d=$d->result_array();
     
        return($d);

}


  public function get_by_alias($category_id,$pack){
      $row=$this->db->get_where('package',array('category'=>$category_id,'alias'=>$pack,));
         $row=$row->result_array();
      return(@$row[0]);    

   }


  public function package_id($pack){
      $row=$this->db->select('id')->get_where('package',array('alias'=>$pack,));
         $row=$row->result_array();
      return(@$row[0]);    

   }



  public function s_category($id)
  {
    $rows=$this->db->select('offer,search_image,title,alias,route,duration,id,price_include')
                   ->where('category',$id)
                   ->get('package')
                   ->result_array();
           return $rows;

  }


  public function s_country($id)
  {
    $rows=$this->db->select('offer,search_image,title,alias,route,duration,id,price_include')
                   ->where('country',$id)
                   ->get('package')
                   ->result_array();
           return $rows;

  }



  public function images($id)
  {
      $data=$this->db->select('id,banner_image,banner_alt,banner_image_2,banner_alt_2,banner_image_3,banner_alt_3,map_image,map_alt,small_size_img,small_img_alt,search_image,search_alt')
      ->where('id',$id)
      ->get('package')
      ->result_array();
      return $data[0];

  }

          public function image_update($image,$id,$col_name){
        $this->db->set("$col_name",$image)
                 ->where('id',$id)
                 ->update('package');
              return true;   
      }








}