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
       Tour By Destination 
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">  Tour By Destination </li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List <a href="<?php echo base_url("/admin/tour_by_destinations")?>" class="pull-right" >Add</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-12">
     
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Country</th>
                <th>Alisa</th>

                <th>Description</th>
                <th>Tour Count</th>

                <th>Image</th>
                <th> Alt </th>
                <th> Image Tilte</th>
           
      
                <th>Action</th>
              </tr><?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?> <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['alias']; ?></td>
 
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['tour_count']; ?></td>
                <td><img src="<?php echo base_url('uploads/tour_destination/'.$row['image']);?>" class="img img-lg"></td>
                <td> <?php echo $row['alt']; ?> </td>
                <td> <?php echo $row['image_title']; ?> </td>
     
                
                <td><a href="<?php echo base_url("admin/tour_by_destinations/tour_destination_edit/".$row['id']);?>">
                  <button title="Edit" class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/tour_by_destinations/delete/".$row['id']); ?>">
                    <button title="delete" class="btn btn-danger  btn-sm" onclick="return remove();"><span class="fa fa-trash"></span></button></a>
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