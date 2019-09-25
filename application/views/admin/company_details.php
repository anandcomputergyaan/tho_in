<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<div class="content-wrapper">
  <section class="content">
    <?php
    echo $this->session->flashdata("notify");
    ?>
    <section class="content-header">
      <h1>
      Company Details
      <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Company Details</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
       <div class="panel-heading">Form  <!-- <a href="<?php echo base_url("admin/special_tour/special_tour_list"); ?>" class="pull-right"> Back</a> --> </div> 
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-9">
            <form action="CompanyDetails/details_update" method="post"  id="form_id" >
              
              <table class="table responsive form-group">
                <tr>
                  <td><b> Name<span class="star">*</span>:</b></td><td><input type="text" value="<?php echo $data['name'];?>" name="name" required  class="form-control" placeholder=" Enter Name">
                </td>
              </tr>
              
              <tr>
                <td><b>Phone<span class="star">*</span>:</b></td><td><input type="text" value="<?php echo $data['phone'];?>" name="phone" required  class="form-control" placeholder=" Enter Phone">
                </td>
              </tr>

              <tr>
                <td><b> Fax:</b></td><td><input type="text" value="<?php echo $data['fax'];?>" name="fax"  class="form-control" placeholder=" Enter Fax">
                </td>
              </tr>

              <tr>
                <td><b> Landline:</b></td><td><input type="text" value="<?php echo $data['landline']?>" name="landline"  class="form-control" placeholder=" Enter Landline">
                </td>
              </tr>

              <tr>
                  <td><b> Email<span class="star">*</span>:</b></td><td><input type="email" value="<?php echo $data['email'];?>" name="email" required  class="form-control" placeholder=" Enter Email">
                </td>
              </tr>

              <tr>
                  <td><b> Address<span class="star">*</span>:</b></td><td><textarea name="address" class="form-control"> <?php echo $data['address'];?></textarea>
                </td>
              </tr>

              <tr>
                  <td><b> Facebook :</b></td><td><input type="url" value="<?php echo $data['facebook'];?>" name="facebook"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> Google+ :</b></td><td><input type="url" value="<?php echo $data['google_plus'];?>" name="google_plus"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> LinkedIn :</b></td><td><input type="url" value="<?php echo $data['linkedin'];?>" name="linkedin"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> RSS :</b></td><td><input type="url" value="<?php echo $data['rss'];?>" name="rss"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> YouTube :</b></td><td><input type="url" value="<?php echo $data['youtube'];?>" name="youtube"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> Twitter :</b></td><td><input type="url" value="<?php echo $data['twitter'];?>" name="twitter"  class="form-control">
                </td>
              </tr>
              <tr>
                  <td><b> Instagram :</b></td><td><input type="url" value="<?php echo $data['instagram'];?>" name="instagram"  class="form-control">
                </td>
              </tr>
              <input type="hidden" name="id" value="<?php echo $data['id'];?>">
              <tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
            </table>
          </form>
        </div>
      </div>
    </div></div>
  </section>
</div>
<?php $this->load->view('admin/theme/footer');?>
<div class="control-sidebar-bg"></div>
</div>