<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<div class="content-wrapper">
<section class="content">
  <section class="content-header">
    <h1>
    Facilitiy
    <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Facilitiy</li>
    </ol>
  </section>
  <div class="panel panel-info">
    <div class="panel-heading">Form  <a href="<?php echo base_url('admin/Facilities/facility_list'); ?>" class="pull-right"> Back</a> </div>
    <div class="panel-body">
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-9">
            <form action="../facility_update/<?php echo $data['id'];?>" method="post"  id="form_id" enctype="multipart/form-data">
              <table class="table responsive form-group">
                <tr>
                  <td><b> Name<span class="star">*</span>:</b></td><td><input type="text" name="name" required  class="form-control"  value="<?php echo $data['name'];?>" >
                </td>
              </tr>
              <tr>
                <td><b>Description:</b></td><td><textarea  name="description" class="form-control ckeditor" placeholder="Enter Description "><?php echo $data['description'];?> </textarea>  </td>
              </tr>
              <tr> <td><b> Image Icon <span class="star">*</span>: </b></td><td> <input type="file" name="image_icon" class="form-control"  id="image_icon" > 
                <img src="<?php echo base_url('uploads/facility/'.$data['image_icon'])?>" class="img img-lg ">
                <input type="hidden" name="old_image_icon" value="<?php echo $data['image_icon'];?>" >
              </td>
            </tr>
            <tr> <td><b>Alt<span class="star">*</span>:</b></td><td> <input type="text" name="alt" class="form-control" value="<?php echo $data['alt']?>" > </td>
          </tr>
          <tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
        </table>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</div>
<?php $this->load->view('admin/theme/footer');?>
