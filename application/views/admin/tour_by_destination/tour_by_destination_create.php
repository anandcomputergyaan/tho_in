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
      Tour By Destination
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form <a href="<?php echo base_url("dasd")?>" class="pull-right" >Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <br>
            <form action="tour_by_destinations/store" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b> Country <span class="star">*</span> :</b></td><td><input type="text" name="country" class="form-control" placeholder=" Enter Counter" required    onkeyup ="alia(this.value)"   > </td>
                </tr>

                  <tr>
                  <td><b> alias <span class="star">*</span> :</b></td><td><input type="text" name="alias" id="aliasname" class="form-control" placeholder=" Enter Counter" required  > </td>
                </tr>

           <tr>
              <td><b>Description<span class="star">*</span>:</b></td><td><textarea  name="description" class="form-control ckeditor" placeholder="Description" required  ></textarea>  </td>
            </tr>


            <tr> <td><b>Image<span class="star">*</span>: </b></td><td> <input type="file" name="image"  class="form-control" required  > </td>
          </tr>

          <tr> <td><b>Alt* :</b></td><td> <input type="text" name="alt" class="form-control" placeholder=" Enter  Alt Attribute" required> <span style="color:blue;">Note * Image size should be 121*3123 </span></td>
        </tr>


            <tr>
              <td><b> Image Title : </b></td> <td> <input type="text" name="image_title" placeholder=" Enter Image Title" class="form-control"> </td>

            </tr>
            
            <tr>
              <td><b>Tour Count <span class="star">*</span>: </b></td> <td> <input type="text" name="tour_count" placeholder=" Enter number of tour" class="form-control" required > </td>
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
<!-- ./wrapper -->
<script type="text/javascript">
  function alia(str) {
         str = str.toLowerCase();
         str=str.split(" ");
        str =str.join("-");
      document.getElementById("aliasname").value = str;
  }
</script>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/theme/footer');?>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->