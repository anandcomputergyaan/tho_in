<?php $this->load->view('admin/theme/header');?>
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

<div class="content-wrapper">
  <section class="content">
  <?php echo $this->session->flashdata("notify"); ?>
    <section class="content-header">
      <h1>
      Facility
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Facility</li>
      </ol>
    </section>
    <div class="panel panel-info">
      <div class="panel-heading">List<a href="<?php echo base_url('admin/Facilities')?>" class="pull-right"> Add</a></div>
      <div class="panel-body">
        <div  class="row" >
          <div class="col-md-12">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Sr.No.</th>
                <th>Name</th> 
                <th>Description</th>
                <th>Image</th>
                <th>Alt Attribute</th>
                <th>Action</th>
              </tr>
              <?php $i=1;
              foreach($data as $row){ ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>            
                <td><?php echo $row['description']; ?></td>
                <td><img src="<?php echo base_url().'uploads/facility/'.$row['image_icon'] ?>" class="img-responsive img-md"></td>
                <td><?php echo $row['alt']; ?></td>
                <td><a href="<?php echo base_url("admin/Facilities/facility_edit/".$row['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/Facilities/delete/".$row['id']); ?>">
                    <button class="btn btn-danger  btn-sm" onclick="return remove();"><span class="fa fa-trash"></span></button></a></td>
              </tr>
                  <?php $i++;} ?>
                </table>
              </div>
            </div></div>
          </section>
        </div>
        <?php $this->load->view('admin/theme/footer');?>
        <div class="control-sidebar-bg"></div>
      </div>
