<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      Itinerary Days
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Itinerary</li>
      </ol>
    </section>

   

    <div class="panel panel-info">
      <div class="panel-heading">Itinerary Days <!-- <a href="<?php echo base_url("admin/settings/"); ?>" class="pull-right"> Back</a>  --></div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <form action="../itinerary_save" method="post"  id="form_id" >              
              <table class="table responsive form-group">

                <input type="hidden" name="pack_id" value="<?php echo $id;?>"   >
           
        
        <tr class="social_icon_fields">
          <td><b> Day 1:</b></td>
          <td>
            <textarea type="text" name="day[]" class="form-control ckeditor" id='editor1' placeholder="Enter details" required ></textarea>
            <br>
          </td><td class="col-md-2"><button class="btn btn-primary btn-sm" onclick="add_more();"><i class="fa fa-plus"></i></button></td>
        </tr>
         
          
        <tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
      </table>
    </form>
  </div>
</div>
</div></div>
</section>

<script>
  function add_more(){
    var count = $(".social_icon_fields").length;
    var n = count+1;
    var html = "";
    html += '<tr class="social_icon_fields">'+'<td><b> Day'+ n+'</b></td>'+'<td>'+'<textarea type="text"  name="day[]" id="editor2" class="form-control ckeditor" placeholder="Enter Icon" required>'
          +'</textarea>'+'<br>'
          +'</td>'+'<td class="col-md-2">'+'<button class="btn btn-danger btn-sm" onclick="remove(this);">'+'<i class="fa fa-minus">'+'</i>'+'</button>'+'</td>'+'</tr>';
        $(".social_icon_fields:last").after(html);
        return false;
      
  }

  function remove(ele){
    $(ele).parent().parent().fadeOut(5000).remove();
  }
</script>

</div>
<?php $this->load->view('admin/theme/footer');?>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>

