<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      Special Tour
      <small>Creat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Special Tour</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form  <a href="<?php echo base_url("admin/special_tour/special_tour_list"); ?>" class="pull-right"> Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-9">
            <form action="special_tour/rec_save" method="post"  id="form_id" >
              
              <table class="table responsive form-group">
                <tr>
                  <td><b> Title<span class="star">*</span>:</b></td><td><input type="text" name="title" required  class="form-control " placeholder=" Enter Title">
                    <span id="show"></span>
                   </td>
                </tr>
            
            <tr>
              <td><b>Description<span class="star">*</span>:</b></td><td>  <textarea  name="description" required class="form-control ckeditor " placeholder="Enter Description" ></textarea>  </td>
            </tr>

            <tr> <td><b>Packages <span class="star">*</span>:</b></td>
<td>
  <?php 

   foreach ($pack as $value) { ?>

 &nbsp; &nbsp; <input type="checkbox" name="packages[]" value="<?php echo $value['id'];?>" ><?php echo $value['title'];} ?> 

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
<!-- ./wrapper -->