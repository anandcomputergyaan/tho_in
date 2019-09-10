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
      Client Feedback
      <small>edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Client Feedback</li>
      </ol>
    </section>
    
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Client Feedback Update <a href="<?php echo base_url("admin/client_feedback/client_feedback_list"); ?>" class="pull-right"> Back</a></div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <form action="../update_data/<?php echo $data['id'];?>" method="post"  id="form_id" enctype="multipart/form-data">
              <table class="table responsive form-group">
            <tr> <td><b> Client Name <span style="color: red;">*</span> : </b></td><td> <input type="text" name="client_name" value="<?php echo $data['client_name'];?>" class="form-control" required placeholder="Enter Client Name"  > </td>
          </tr>
          <tr> <td><b> Country <span style="color: red;">*</span> :</b></td><td><input type="text" name="country" value="<?php echo $data['country'];?>" class="form-control" required placeholder="Enter Country">
        </tr>
        <tr>
          <td><b> Comments <span style="color: red;">*</span> :</b></td>
          <td>
            <textarea rows="4" cols="4" name="comments" class="form-control" required placeholder="Enter Comments"><?php echo $data['comments'];?></textarea>
          </td>
        </tr>
        <tr> <td><b> Youtube video link <span style="color: red;">*</span> : </b></td><td> <input type="url" name="video_link" value="<?php echo $data['video_link'];?>" class="form-control" required placeholder="Enter video link here"  > </td>
          </tr>

        <input type="hidden" name="id" value="<?php echo $data['id'];?>" >

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