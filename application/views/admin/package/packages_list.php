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
      Package
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Package</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List <a href="<?php echo base_url("/admin/package")?>" class="pull-right" >Add</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-12">
     
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Tour Route</th>
                <th>Action</th>
              </tr><?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?> <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo @$cat_name[$row['category']]; ?></td>
                <td><?php echo $row['duration']; ?></td>

                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['tour_route_from'] ." to".$row['tour_route_to']; ?></td>
            
                
                <td><a href="<?php echo base_url("admin/package/package_edit/".$row['id']);?>">
                  <button title="Edit" class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/package/delete/".$row['id']); ?>">
                    <button title="delete" class="btn btn-danger  btn-sm" onclick="if(confirm('Are u sure want to delete?')) commentDelete(1);"
><span class="fa fa-trash"></span></button></a>
                   
                   <a href="<?php echo base_url("admin/package/package_view/".$row['id']); ?>">
                    <button title="View" class="btn btn-info  btn-sm"><span class="fa fa-eye"></span></button></a>

                    <a href="<?php echo base_url("admin/Tour_offers/offers_list/".$row['id']); ?>">
                    <button title="Offers" class="btn btn-warning  btn-sm"><span class="fa fa-tags"></span></button></a>
                    

   <!-- <a href="<?php echo base_url("admin/package//package_itinerary/".$row['id']); ?>">
                    <button title="View" class="btn btn-primary  btn-sm">I</button></a>
    -->                    
                  </td>
                    
                  </tr>
                  <?php $i++;} ?>
                </table>
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