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
      Slider
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form <a href="<?php echo base_url("/admin/slider/main_slider/slider_list")?>" class="pull-right" >Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <br>
            <form action="main_slider/save" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b> Title* :</b></td><td><input type="text" name="tour_title" class="form-control" placeholder=" Enter Tour Title" required > </td>
                </tr>
           


            <tr> <td><b>Slider Image* : </b></td><td> <input type="file" name="slider_image"  class="form-control" required  > </td>
          </tr>

          <tr> <td><b> Slider Alt* :</b></td><td> <input type="text" name="slider_alt" class="form-control" placeholder=" Enter Slider Alt Attribute" required > </td>
        </tr>


            <tr>
              <td><b> Image Title : </b></td> <td> <input type="text" name="image_title" placeholder=" Enter Image Title" class="form-control" required > </td>
            </tr>
            
            <tr>
              <td><b> Link :</b></td><td>  <textarea  name="link" class="form-control" placeholder="Enter Related Link " required  ></textarea>  </td>
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