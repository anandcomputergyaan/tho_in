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
Tour Offers
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tour Offers</li>
      </ol>
    </section>

    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List <a href="<?php echo base_url("/admin/Tour_offers/add_offer/".$tour_id)?>" class="pull-right" >Add</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-12">
     
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Offer Name</th>
                <th>Offer Image</th>
                <th> Alt </th>
                <th> Image Tilte</th>
           
      
                <th>Action</th>
              </tr><?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?> <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['offer_name']; ?></td>
 

                <td><img src="<?php echo base_url('uploads/slider/Tour_offers/'.$row['offer_image']);?>" class="img img-lg"></td>
                <td> <?php echo $row['alt']; ?> </td>
                <td> <?php echo $row['image_title']; ?> </td>
     
                
                <td><a href="<?php echo base_url("admin/Tour_offers/tour_offer_edit/".$row['id']);?>">
                  <button title="Edit" class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/Tour_offers/delete/".$row['id']."/".$tour_id); ?>">
                    <button title="delete" class="btn btn-danger  btn-sm" onclick="if(confirm('Are u sure want to delete?')) commentDelete(1);"><span class="fa fa-trash"></span></button></a>
                   </td>
                    
                  </tr>
                  <?php $i++;} ?>
                </table>
              </div>
              
            </div><a href="<?php echo base_url("/admin/package/package_list")?>" class="btn btn-success pull-right" >Back</a>

          </div>

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