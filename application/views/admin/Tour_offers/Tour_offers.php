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
 Tour Offer
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tour Offer</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form <a href="<?php echo base_url("admin/Tour_offers/offers_list/".$tour_id)?>" class="pull-right" >Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <br>
            <form action="../store" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b> Offer Name <span class="star">*</span> :</b></td><td><input type="text" name="offer_name" class="form-control" placeholder=" Enter Offer Name" required > </td>
                </tr>
           


            <tr> <td><b>Offer Image<span class="star">*</span>  : </b></td><td> <input type="file" name="offer_image"  class="form-control" required  > </td>
          </tr>

          <tr> <td><b> Alt<span class="star">*</span>  :</b></td><td> <input type="text" name="alt" class="form-control" placeholder=" Enter  Alt Attribute" required > </td>
        </tr>


            <tr>
              <td><b> Image Title : </b></td> <td> <input type="text" name="image_title" placeholder=" Enter Image Title" class="form-control" > </td>
            </tr>


            <tr>
              <td><b> Status<span class="star">*</span>  : </b></td> <td> <select name="status" required class="form-control">
                                                       <option value="">Select status</option> 
                                                       <option value="1">Active</option> 
                                                       <option value="0">Inactive</option> 
                                             </select>
               </td>
            </tr>
     <input type="hidden" name="tourId" value="<?php echo $tour_id;?>"> 
            
       
       
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