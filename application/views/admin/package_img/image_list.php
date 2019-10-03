<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <?php
    echo $this->session->flashdata("notify");
    ?>
    <section class="content-header">
      <h1>
       Images 
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Images</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List   <a href="<?php echo base_url("admin/category"); ?>" class="pull-right"> Add</a></div>
      <div class="panel-body">
        <div  class="row" >
          <div class="col-md-12">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th> Name</th>
                <th>Image</th>
          
                <th>Alt Attribut</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>First Banner </td>
                <td><a href="<?php echo base_url('admin/package/cropper_image/first_banner/'.$data['id']); ?>"> <img src="<?php echo base_url().'uploads/package/'.$data['banner_image'] ?>" class="img-responsive img-md"> </a></td>
                <td><?php echo $data['banner_alt'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
              <tr>
                <td>2</td>
                <td> Second Banner </td>
                <td><a href="<?php echo base_url('admin/package/cropper_image/secound_banner/'.$data['id']); ?>"><img src="<?php echo base_url().'uploads/package/'.$data['banner_image_2'] ?>" class="img-responsive img-md"></a></td>
                <td><?php echo $data['banner_alt_2'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
              <tr>
                <td>3</td>
                <td>Third Banner </td>
                <td> <a href="<?php echo base_url('admin/package/cropper_image/third_banner/'.$data['id']); ?>"> <img src="<?php echo base_url().'uploads/package/'.$data['banner_image_3'] ?>" class="img-responsive img-md"></a></td>
                <td><?php echo $data['banner_alt_3'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
              <tr>
                <td>4</td>
                <td> Map Image</td>
                <td><a href="<?php echo base_url('admin/package/cropper_image/map_image/'.$data['id']); ?>"><img src="<?php echo base_url().'uploads/package/'.$data['map_image'] ?>" class="img-responsive img-md"></a></td>
                <td><?php echo $data['map_alt'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
              <tr>
                <td>5</td>
                <td>  Small Size Image</td>
                <td><a href="<?php echo base_url('admin/package/cropper_image/small_image/'.$data['id']); ?>"><img src="<?php echo base_url().'uploads/package/'.$data['small_size_img'] ?>" class="img-responsive img-md"></a></td>
                <td><?php echo $data['small_img_alt'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
              <tr>
                <td>6</td>
                <td>Search Image</td>
                <td><a href="<?php echo base_url('admin/package/cropper_image/search_image/'.$data['id']); ?>"><img src="<?php echo base_url().'uploads/package/'.$data['search_image'] ?>" class="img-responsive img-md"></a></td>
                <td><?php echo $data['search_alt'];?></td>
                <td>
                  <a href="<?php echo base_url("admin/package/category_edit/".$data['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                </td>
              </tr>
              
            
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