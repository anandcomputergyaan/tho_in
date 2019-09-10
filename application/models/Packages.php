<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Packages extends CI_Model{

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
    
    $this->db->select('package.id,package.title,package.alias,package.map_image,package.map_alt,package.duration,package.offer,category.alias as cat_alias')
                ->where_in('package.id',$ids)
                ->from('package')
                ->join('category','package.category=category.id','inner');
    $top=$this->db->get();
    
    return $top->result_array();


}





public function itinerary_days($pack_id){
   $itinerary_day =   $this->db->where('pack_id',$pack_id)
                     ->get('itinerary');
return $itinerary_day->result_array();
}



public function search_pack($str){

   
   $top =   $this->db->select('package.id,package.title,package.search_image,package.map_alt,package.duration,package.offer,package.details,package.route,category.alias as cat_alias')
                     ->like('package.route', $str)
                     ->join('category','package.category=category.id','inner')
                     ->get('package');
return count($top->result_array());


}

   public function limit_row($limit,$start,$str){
    
          $d=$this->db->select('package.id,package.alias,package.title,package.search_image,package.map_alt,package.duration,package.offer,package.details,package.route,category.alias as cat_alias')
                     ->like('package.route', $str)
                     ->join('category','package.category=category.id','inner')
                      ->limit($limit,$start)
                     ->get('package');
            $d=$d->result_array();
         
            return($d);

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

}