<?php $this->load->view('admin/theme/header');?>
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
      Price Request
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Price Request</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Price Request List   <!-- <a href="<?php echo base_url("admin/category"); ?>" class="pull-right"> Add</a> --></div> 
      <div class="panel-body">
        <div  class="row" >
          <div class="col-md-12">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Package Name</th>

                <th>Name</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Departure Date</th>
                <th>Hotel Category</th>
                <th>Action</th>
              </tr>
              <?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['package_name']; ?></td>
                <td><?php echo ucfirst($row['c_name']); ?></td>
                <td><?php echo $row['c_email']; ?></td>
                <td><?php echo $row['c_phone']; ?></td>
                <td><?php echo date('d M,y',strtotime($row['date'])); ?></td>
                <td><?php echo $row['Category']; ?></td>
                  <td><a href="<?php echo base_url("enquiry/delete/".$row['id']); ?>">
                    <button class="btn btn-danger  btn-sm" onclick="return remove();"><span class="fa fa-trash"></span></button></a></td>
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