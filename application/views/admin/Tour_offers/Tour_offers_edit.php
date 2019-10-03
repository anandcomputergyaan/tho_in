<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <style type="text/css">
    
  </style>

  <section class="content">
    <section class="content-header">
      <h1>
 Tour Offer
      <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tour Offer</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form <a href="<?php echo base_url("admin/Tour_offers/offers_list/".$data['tour_id'])?>" class="pull-right" >Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <br>
            <form action="../tour_offer_update" method="post"  id="form_id" enctype="multipart/form-data" >
              <table class="table responsive form-group">
                <tr>
                  <td><b>OfferName<span class="star">*</span> :</b></td><td><input type="text" name="offer_name" class="form-control" value="<?php echo $data['offer_name'];?>" required > </td>
                </tr>
           


            <tr> <td><b>OfferImage<span class="star">*</span>  : </b></td><td> <img src="<?php echo base_url('uploads/slider/Tour_offers/'.$data['offer_image']);?>" class="img img-lg"> <input type="file" name="offer_image"  class="form-control"> </td>
          </tr>

          <tr> <td><b> Alt<span class="star">*</span>  :</b></td><td> <input type="text" name="alt" class="form-control" value="<?php echo $data['alt'];?>" required > </td>
        </tr>


            <tr>
              <td><b>Image Title:</b></td> <td> <input type="text" name="image_title" value="<?php echo $data['image_title'];?>" class="form-control" > </td>
            </tr>

<?php if($data['status']==1)
      {
        $active='selected';
      }
      elseif ($data['status']==0) {
        $inactive='selected';
      }
      else{
           $select="selected";        
      }


?>
            <tr>
              <td><b> Status <span class="star">*</span>  : </b></td> <td> <select name="status" required class="form-control" value="<?php echo $data['status'];?>">status
                                                       <option value=""  >Select status</option> 
                                                       <option value="1" <?php echo @$active;?>> Active </option> 
                                                       <option value="0" <?php echo @$inactive;?> >Inactive</option> 
                                             </select>
               </td>
            </tr>

            <input type="hidden" name="off_image" value="<?php echo $data['offer_image'];?>">
            <input type="hidden" name="id" value="<?php echo $data['id'];?>">   
            <input type="hidden" name="tour_id" value="<?php echo $data['tour_id'];?>">   
       
       
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