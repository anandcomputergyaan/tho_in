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
      <small>Edit</small>
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
            <form action="../slider_update" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b> Title* :</b></td><td><input type="text" name="tour_title" value="<?php echo $data['tour_title'];?>" class="form-control"  required > </td>
                </tr>
           


            <tr> <td><b>Slider Image* : </b></td><td> 
                    <img src="<?php echo base_url('uploads/slider/main_slider/'.$data['slider_image']);?>" class="img img-lg">
              <input type="file" name="slider_image"  class="form-control"  > </td>
          </tr>

          <tr> <td><b> Slider Alt* :</b></td><td> <input type="text" name="slider_alt" value="<?php echo $data['slider_alt'];?>"class="form-control"  required > </td>
        </tr>


            <tr>
              <td><b> Image Title : </b></td> <td> <input type="text" name="image_title" value="<?php echo $data['image_title'];?>"  class="form-control" required > </td>
            </tr>
            
            <tr>
              <td><b> Link :</b></td><td>  <textarea  name="link" class="form-control" placeholder="Enter Related Link " required  > <?php echo $data['link'];?> </textarea>  </td>
            </tr>
       <input type="hidden" name="id" value="<?php echo $data['id']?>">
       <input type="hidden" name="slider" value="<?php echo $data['slider_image']?>">

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