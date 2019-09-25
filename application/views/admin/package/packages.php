<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      Packages
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Packages</li>
      </ol>
    </section>
    
    <div class="panel panel-info">
      <div class="panel-heading">Form <a href="<?php echo base_url("/admin/package/package_list")?>" class="pull-right" >Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-1"> </div>
          <div class="col-md-11">
            <br>
            <form action="package/rec_save" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b> Title<span class="star">*</span> :</b></td><td><input type="text" name="name" class="form-control" placeholder=" Enter Title" required onkeyup="alia(this.value)" > </td>
                </tr>
                
                <tr>
                  <td><b>Alias<span class="star">*</span> :</b></td><td><input type="text" name="alias" class="form-control"  required id="aliasname" > </td>
                </tr>
                <tr> <td><b>Country<span class="star">*</span></b></td><td> <select name="country"  class="form-control" required>
                <option value="" > Select Country Name </option>
                <?php foreach ( $country_data as $countries ){ ?>
                <option value="<?php echo $countries['id'];?>">  <?php echo $countries['country'];?>  </option>
                <?php  } ?>
              </select> </td>
            </tr>
            <tr> <td><b>Category<span class="star">*</span></b></td><td> <select name="category"  class="form-control">
            <option value="" required > Select Parent Name </option>
            <?php foreach ( $data as $key ){ ?>
            <option value="<?php echo $key['id'];?>">  <?php echo $key['name'];?>  </option>
            <?php  } ?>
          </select> </td>
        </tr>
        <tr>
          <td><b> Duration <span class="star">*</span>: </b></td> <td> <input type="number" name="duration" placeholder="Enter Duration" class="form-control" required > </td>
        </tr>
        <tr>
          <td><b>Best Time to Travel <span class="star">*</span>: </b></td> <td> <input type="text" name="best_travel_time" placeholder="Enter Best Time to Travel" class="form-control" required > </td>
        </tr>
        <tr>
          <td> <b> Availability <span class="star">*</span>:</b></td> <td><b>From</b> <input type="date" name=" availability_from" placeholder="Enter from" id="route" required > <b>To</b><input type="date" name="availability_to" placeholder="  To" id="route" required></td>
        </tr>
        <tr>
          <td><b> Marquee :</b> </td> <td> <input type="text" name="marquee" placeholder="Enter marquee" class="form-control" required  > </td>
        </tr>
        <tr>
          <td><b> Discounted  Offer :</b> </td> <td> <input type="text" name="offer" placeholder="Enter Discounted  Offer  " class="form-control" required  > </td>
        </tr>
        <tr>
          <td><b> Discounted Price :</b> </td> <td> <input type="number" name="discounted_price" placeholder="Enter New Price" class="form-control" required > </td>
        </tr>
        <tr>
          <td><b> Price :</b> </td> <td> <input type="number" name="price" placeholder="Enter New Price" class="form-control" required > </td>
        </tr>
        <tr>
          <td> <b>Tour Route <span class="star">*</span>:</b></td> <td><b>From</b> <input type="text" name="tour_route_from" placeholder="Enter from" id="route" required > <b>To</b><input type="text" name="tour_route_to" placeholder="And To" id="route" required></td>
        </tr>
        <tr>
          <td> <b> Route<span class="star">*</span> :</b></td> <td> <input type="text" name="route" placeholder="Enter from" class="form-control" required > </td>
        </tr>
        <tr>
          <td><b> Itinerary<span class="star">*</span>:</b> </td> <td> <textarea type="text" name="itinerary" placeholder="Enter Itinerary " class=" form-control ckeditor" required ></textarea> </td>
        </tr>
        
        <tr class="social_icon_fields">
          <td><b> Day 1:</b></td>
          <td>
            <textarea type="text" name="day_title[]" class="form-control"  placeholder="Enter Title " required ></textarea>
            <br>
            <textarea type="text" name="day[]" class="form-control"  placeholder="Enter  details " required ></textarea>
            <br>
            </td><td class="col-md-2"><button type="button" class="btn btn-primary btn-sm" onclick="add_more();"><i class="fa fa-plus"></i></button></td>
          </tr>
          
          <tr>
            <td><b>Details<span class="star">*</span>:</b></td><td>  <textarea id="ckeditor1"  name="details" class="form-control ckeditor" placeholder="Enter details " required  ></textarea>  </td>
          </tr>
          <tr>
            <td><b>Exclusion<span class="star">*</span>:</b></td><td>  <textarea  name=" exclusion" class="form-control ckeditor"  placeholder="Enter exclusion  " required  ></textarea> </td>
          </tr>
          <tr>
            <td><b>Inclusions<span class="star">*</span>:</b></td><td>  <textarea  name="inclusions" class="form-control ckeditor"  placeholder=" inclusions Hear" required  ></textarea>  </td>
          </tr>
          <tr>
            <td><b>Essential Information<span class="star">*</span>:</b></td><td>  <textarea  name="essential_information" class="form-control ckeditor"  placeholder=" Essential Information" required  ></textarea>  </td>
          </tr>
          <tr> <td><b>Banner Image 1<span class="star">*</span>: </b></td><td> <input type="file" name="banner_image"  class="form-control" required  > </td>
        </tr>
        <tr> <td><b> Banner Alt 1<span class="star">*</span>:</b></td><td> <input type="text" name="banner_alt" class="form-control" placeholder=" Enter Banner Alt Attribute" required > </td>
      </tr>
      <tr> <td><b>Banner Image 2<span class="star">*</span>: </b></td><td> <input type="file" name="banner_image_2"  class="form-control" required> </td>
    </tr>
    <tr> <td><b> Banner Alt 2<span class="star">*</span>:</b></td><td> <input type="text" name="banner_alt_2" class="form-control" placeholder=" Enter Banner Alt Attribute" required > </td>
  </tr>
  <tr> <td><b>Banner Image 3<span class="star">*</span>: </b></td><td> <input type="file" name="banner_image_3"  class="form-control" required> </td>
</tr>
<tr> <td><b> Banner Alt 3<span class="star">*</span>:</b></td><td> <input type="text" name="banner_alt_3" class="form-control" placeholder=" Enter Banner Alt Attribute" required> </td>
</tr>
<tr> <td><b>  Map Image<span class="star">*</span>: </b></td><td> <input type="file" name="map_image"  class="form-control" required  > </td>
</tr>
<tr> <td><b>Map Alt<span class="star">*</span>:</b></td><td> <input type="text" name="map_alt" class="form-control" placeholder=" Enter Map Alt Attribute" required > </td>
</tr>
<tr>
  <td><b>Small size Image<span class="star">*</span>:</b></td><td><input type="file" name="small_size_img" class="form-control" required></td>
</tr>
<tr>
  <td><b>Small Image Alt<span class="*">*</span>:</b></td><td><input type="text" name="small_img_alt" class="form-control" placeholder="Enter Image Alt Attribute" required></td>
</tr>
<tr> <td><b>  Search Image<span class="star">*</span>: </b></td><td> <input type="file" name="search_image"  class="form-control" required  > </td>
</tr>
<tr> <td><b>Search Alt<span class="star">*</span>:</b></td><td> <input type="text" name="search_alt" class="form-control" placeholder=" Enter Search Alt Attribute" required > </td>
</tr>
<tr> <td><b> Price Include </b></td><td>
<?php foreach ($facility as$facility_value) { ?>

<input type="checkbox" name="price_include[]" value="<?php echo $facility_value['id']?>" class="icheckbox_flat-green"> <?php echo $facility_value['name']?>

<?php }?>
</td>
</tr>
<tr> <td><b> Relative</b></td>
<td>
<?php
foreach ($pack as $value) { ?>
<input type="checkbox" name="relative[]" value="<?php echo $value['id'];?>" >
<?php echo $value['title']; } ?>
</td>
</tr>
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
<script>
function add_more(){
var count = $(".social_icon_fields").length;
var n = count+1;
var html = "";
html += '<tr class="social_icon_fields">'+'<td><b> Day'+ n+'</b></td>'+'<td>'+'<textarea type="text"  name="day_title[]" id="editor2" class="form-control ckeditor" placeholder="Enter Title" required>'
+'</textarea>'+'<br>'+'<textarea type="text"  name="day[]" id="editor2" class="form-control ckeditor" placeholder="Enter details" required>'
+'</textarea>'+'<br>'
+'</td>'+'<td class="col-md-2">'+'<button class="btn btn-danger btn-sm" onclick="remove(this);">'+'<i class="fa fa-minus">'+'</i>'+'</button>'+'</td>'+'</tr>';
$(".social_icon_fields:last").after(html);
return false;
location.reload();
}
function remove(ele){
$(ele).parent().parent().fadeOut(5000).remove();
}
</script>
<!-- ./wrapper -->
<script type="text/javascript">
function alia(str) {
str = str.toLowerCase();
str=str.split(" ");
str =str.join("-");
document.getElementById("aliasname").value = str;
}
</script>