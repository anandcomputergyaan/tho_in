<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>

<script type="text/javascript">
  function remove()
  {
    var x = confirm('Are you really want to delete ?');

    if(x)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

</script>

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
      Special Tour
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">category</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List   <a href="<?php echo base_url("admin/special_tour"); ?>" class="pull-right"> Create</a></div>
      <div class="panel-body">
        <div  class="row" >
          <div class="col-md-12">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Title</th>
                
                <th>Description</th>
                
      
                <th>Action</th>
              </tr>
              <?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['title']; ?></td>
      
                <td><?php echo $row['description']; ?></td>
             
          


                <td><a href="<?php echo base_url("admin/special_tour/special_tour_edit/".$row['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/special_tour/delete/".$row['id']); ?>">
                    <button class="btn btn-danger  btn-sm" onclick="return remove();"
 ><span class="fa fa-trash"></span></button></a></td>
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