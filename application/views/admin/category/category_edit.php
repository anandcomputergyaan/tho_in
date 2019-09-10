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
      Category
      <small>edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>
    
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form   <a href="<?php echo base_url("admin/category/category_list"); ?>" class="pull-right"> Back</a></div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-9">
            <form action="../category_update" method="post"  id="form_id" enctype="multipart/form-data">
              <table class="table responsive form-group">
                                                <tr>
                  <td><b> Name<span class="star">*</span>:</b></td><td><input type="text" name="name" required  class="form-control" value="<?php echo $data['name'];?>" onkeyup ="alia(this.value)">
               

                   </td>
                </tr>

                  <tr>
                  <td><b>Alias<span class="star">*</span> :</b></td><td><input type="text" id="aliasname" name="alias" required value="<?php echo $data['alias'];?>" class="form-control">
               

                   </td>
                </tr>
                <tr><td><b>Parent Name :</b></td><td><select name="parent_name"   class="form-control">
     <option value="" > Seletct Parent Name </option>
                    <?php 
                         $i=0;
                    foreach ( $list as $key ){
                    
                     if($key['id']==$data['parent']){
                       $s[$i]="selected";
                     }
                     else{
                      $s[$i]='';
                     }
                          ?>           

                    <option value="<?php echo $key['id'];?>" <?php echo $s[$i];?> >  <?php echo $key['name'];?>  </option>>
                
  <?php $i++; }   ?>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Description<span class="star">*</span> : </b></td>
            <td>
              <textarea  name="description"  class="form-control ckeditor" required  >  <?php echo $data['description']; ?></textarea>
            </td>
          </tr>
          <tr> <td><b> Image<span class="star">*</span>: </b></td><td> <img src="<?php echo base_url().'uploads/category/'.$data['image'] ?>" class="img-responsive img-md">
          
        <input type="file" name="image"  class="form-control"  > </td>
      </tr>
      <tr> <td><b>Alt<span class="star">*</span>:</b></td><td> <input type="text" name="alt" class="form-control" required value="<?php echo $data['alt'];?>"> </td>
    </tr>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>" >
    <input type="hidden" name="image_name" value="<?php echo $data['image'];?>">
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
<script type="text/javascript">
  function alia(str) {
         str = str.toLowerCase();
         str=str.split(" ");
        str =str.join("-");
      document.getElementById("aliasname").value = str;
  }
</script>