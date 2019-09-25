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
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
      <?php
    echo $this->session->flashdata("notify");
  ?>
    <section class="content-header">
      <h1>
      SEO Meta Data
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SEO Meta Data</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">List   <a href="<?php echo base_url("admin/meta_data"); ?>" class="pull-right"> Add</a></div>
      <div class="panel-body">
        <div  class="row" style="margin-bottom: 10px;" >
     
           <div class=" col-md-1"></div>
           <div class=" col-md-8"><input type="url" id="search_text" placeholder="URL" name="search" class="form-control" required ></div>
            <div class=" col-md-1"> <button type="button" class="btn btn-success" id="search" >Search </button> </div>
              
</div>

                   <!-- Footer 1 part ends here-->
      
        <div  class="row" >
            

          <div class="col-md-12">
            <table class="table table-hover table-bordered" id="table_of_result">
              <tr>
                <th>Sr.No.</th>
                <th>URL</th>
                <th>Title</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
              <?php $i=1;
              foreach($data as $row) { $id = $row['id']; ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['url']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['keyword']; ?></td>
                <td><?php echo $row['description'];?></td>
                <td><a href="<?php echo base_url("admin/meta_data/update/".$row['id']);?>">
                  <button class="btn btn-success  btn-sm"><span class="fa fa-edit"></span></button></a>
                  <a href="<?php echo base_url("admin/meta_data/delete/".$row['id']); ?>">
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
      
        <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper --><script type="text/javascript">
  
$(document).ready(function(){

$('#search').click(function(){

var search = $('#search_text').val();

if(search == ''){
  alert('please insert URL');
}
else{

  $.post('<?php echo base_url('/admin/meta_data/meta_search_list')?>',{str:search } ,function(result){
    
$('#table_of_result').html(result);
  
  });

   
}

}) ;      
});

</script>  