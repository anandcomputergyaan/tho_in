<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      Packages
      <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Packages</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form  <a href="<?php echo base_url("/admin/package/package_list")?>" class="pull-right" >Back</a></div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <br>
            <form action="../package_update" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
               <tr>
                  <td><b> Title<span class="star">*</span>:</b></td><td><input type="text" name="name" class="form-control" required value="<?php echo $data['title'];?>"  onkeyup="alia(this.value)" > </td>
                </tr>

                 <tr>
                  <td><b>Alias<span class="star">*</span> :</b></td><td><input type="text" name="alias" class="form-control"  required id="aliasname" value="<?php echo $data['alias'];?>" > </td>
                </tr>
                <tr> <td><b>Category :</b></td><td> <select name="category"  class="form-control"required  >
                  <option value="" > Select Parent Name </option>

                     <?php 
                         $i=0;
                    foreach ( $list as $key ){
                    
                     if($key['id']==$data['category']){
                       $s[$i]="selected";
                     }
                     else{
                      $s[$i]='';
                     }

                          ?>           

                    <option value="<?php echo $key['id'];?>" <?php echo $s[$i];?> >  <?php echo $key['name'];?>  </option>>
                
  <?php $i++; }   ?>
              </select> </td>
            </tr>
            <tr>
              <td> <b>Duration<span class="star">*</span>:</b></td> <td> <input type="number" name="duration" required  value="<?php echo $data['duration'];?>" class="form-control"> </td>
            </tr>
            <tr>
              <td> <b> Availability<span class="star">*</span>:</b></td> <td><b>From</b> <input type="date" name=" availability_from" placeholder="Enter from" id="route" required value="<?php echo $data['availability_from'];?>"> <b>To</b><input type="date" name="availability_to" placeholder="  To" id="route" required value="<?php echo $data['availability_to'];?>"></td>              
            </tr>
            <tr>
              <td><b> Marquee :</b> </td> <td> <input type="text" name="marquee" required  value="<?php echo $data['marquee'];?>" class="form-control" > </td>
            </tr>

            <tr>
              <td><b> Discounted Offer:</b> </td> <td> <input type="text" name="offer" required  value="<?php echo $data['offer'];?>" class="form-control" > </td>
            </tr>

            <tr>
              <td><b> Discounted Price:</b> </td> <td> <input type="number" required  name="discounted_price" value="<?php echo $data['discounted_price'];?>"  class="form-control"> </td>
            </tr>
            <tr>
              <td><b> Price :</b> </td> <td> <input type="number" name="price" required  value="<?php echo $data['price'];?>" class="form-control"> </td>
            </tr>
             <tr>
              <td> <b>Tour Route :</b></td> <td><b>From</b> <input type="text" name="tour_route_from" placeholder="Enter from" id="route" required value="<?php echo $data['tour_route_from'];?>"> <b>To</b><input type="text" name="tour_route_to" placeholder="And To" id="route" required value="<?php echo $data['tour_route_to'];?>"></td>              
            </tr>
            <tr>
              <td> <b> Route :</b></td> <td><input type="text" name="route" placeholder="Enter from" class="form-control" required value="<?php echo $data['route'];?>" > </td>              
            </tr>
             <tr>
              <td><b> Itinerary :</b> </td> <td> <textarea type="text" name="itinerary" placeholder="Enter Itinerary" class="form-control ckeditor" required><?php echo $data['itinerary'];?></textarea> </td>
            </tr>
            
                 <?php foreach ($days as $i_day) {?>
                  <tr><td><b>Itinerary Day <?php echo $i_day['day_no']?></b></td> <td>
                   <textarea type="text" name="day[]" class="form-control ckeditor"  placeholder="Enter details" required > <?php echo $i_day['description'];?></textarea>

                   </td>
             </tr>
               <?php   } ?>
               <tr><td>


</tr>
           <tr>
              <td><b>Details<span class="star">*</span>:</b></td><td>  <textarea  name="details" class="form-control ckeditor"  placeholder="Enter details " required  ><?php echo $data['details'];?></textarea>  </td>
            </tr>
            <tr>
              <td><b>Exclusion<span class="star">*</span>:</b></td><td>  <textarea  name=" exclusion" class="form-control ckeditor"  placeholder="Enter exclusion  " required  ><?php echo $data['exclusion'];?></textarea> </td>
            </tr>
            <tr>
              <td><b>Inclusions<span class="star">*</span>:</b></td><td>  <textarea  name="inclusions" class="form-control ckeditor"  placeholder=" inclusions Hear" required ><?php echo $data['inclusions'];?></textarea>  </td>
            </tr>
           <tr>
              <td><b>Essential Information<span class="star">*</span>:</b></td><td>  <textarea  name="essential_information" class="form-control ckeditor"  placeholder=" Essential Information" required  ><?php echo $data['essential_information'];?></textarea>  </td>
            </tr>
            <tr> <td><b>Banner Image<span class="star">*</span>: </b></td><td><img src="<?php echo base_url().'uploads/package/'.$data['banner_image'] ?>" class="img-responsive img-md">
          <input type="file" name="banner_image"  class="form-control" > </td>
        </tr>
        <tr> <td><b> Banner Alt<span class="star">*</span>:</b></td><td>
        
      <input type="text" name="banner_alt" class="form-control" value="<?php echo $data['banner_alt'];?>" > </td>
    </tr>
    <tr> <td><b>  Map Image<span class="star">*</span>: </b></td><td>
    <img src="<?php echo base_url().'uploads/package/'.$data['map_image'] ?>"  class="img-responsive img-md">
  <input type="file" name="map_image"  class="form-control"  > </td>
</tr>
<tr> <td><b>Map Alt<span class="star">*</span>:</b></td><td> <input type="text" name="map_alt"required class="form-control" value="<?php echo $data['map_alt'];?>"> </td>
</tr>
<tr>  <td> <b>  Search Image<span class="star">*</span>: </b></td>
  <td>  <img src="<?php echo base_url().'uploads/package/'.$data['search_image'] ?>"  class="img-responsive img-md"><input type="file" name="search_image"  class="form-control"  ></td>
      
</tr>
      
      <tr> <td><b>Search Alt<span class="star">*</span> : </b></td><td> <input type="text" name="search_alt" class="form-control" placeholder=" Enter Search Alt Attribute" value="<?php echo $data['search_alt'];?>" required > </td>
    </tr>
<?php
$info = array();
$info = explode("-",$data['price_include']);
$meal= $accommodation= $Transport= $tour_guide= $sightseeing=" ";
foreach ($info as $key ) {
switch ($key) {
case 'meal':
$meal="checked";
break;
case 'accommodation':
$accommodation="checked";
break;
case 'Transport':
$Transport="checked";
break;
case 'tour_guide':
$tour_guide="checked";
break;
case 'Sightseeing':
$sightseeing="checked";
break;
}
# code...
}
?>
<tr> <td><b> Price Include </b></td>
<td>
<input type="checkbox" name="price_include[]" value="meal" <?php echo $meal; ?> > Meal
<input type="checkbox" name="price_include[]" value="accommodation" <?php echo $accommodation; ?> >Accommodation
<input type="checkbox" name="price_include[]" value="Transport" <?php echo $Transport ;?> > Transport
<input type="checkbox" name="price_include[]" value="tour_guide" <?php echo $tour_guide;?> > Tour Guide
<input type="checkbox" name="price_include[]" value="Sightseeing" <?php echo $sightseeing ;?> >Sightseeing
</td>
</tr>

<tr> <td><b> Relative Packages<span class="star">*</span></b></td>
<td>
  <?php $pr=explode(',', $data['relative']); foreach ($relative as $r_pack) { 



if (in_array($r_pack['id'],$pr))
  {
    $chec="checked";
  }
else
  {
  $chec="";
  }

    ?>

<input type="checkbox" name="relative[]" value="<?php echo $r_pack['id']; ?>" <?php echo $chec;?> ><?php echo $r_pack['title']; ?>

  
  <?php }  ?>
</td>
</tr>





<input type="hidden" name="id" value="<?php echo $data['id'];?>" >
<input type="hidden" name="banner" value="<?php echo $data['banner_image'];?>" >
<input type="hidden" name="map" value="<?php echo $data['map_image'];?>" >
<tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
</table>
</form>
</div>
</div>
</div></div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/theme/footer');?>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
  function alia(str) {
         str = str.toLowerCase();
         str=str.split(" ");
        str =str.join("-");
      document.getElementById("aliasname").value = str;
  }
</script>