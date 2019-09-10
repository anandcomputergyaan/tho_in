<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      SEO Meta Data
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SEO Meta Data</li>
      </ol>
    </section>
   

    <div class="panel panel-info">
      <div class="panel-heading">SEO Meta Data <a href="<?php echo base_url("admin/meta_data/meta_data_list"); ?>" class="pull-right"> Back</a></div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-8">
            <form action="meta_data/rec_save" method="post"  id="form_id" >
              
              <table class="table responsive form-group">
            <tr> <td><b> URL <span style="color: red;">*</span> : </b></td><td> <input type="url" name="url" class="form-control" required placeholder="Enter URl"  > </td>
          </tr>
          <tr> <td><b> Title <span style="color: red;">*</span> :</b></td><td><input type="text" name="title" onkeyup="handleInput2(this.value)" class="form-control" required placeholder="Enter Title"></td><td><span id="spanId2"></span></td>
        </tr>
         <tr> <td><b> Keyword <span style="color: red;">*</span> :</b></td><td><input type="text" name="keyword" onkeyup="handleInput(this.value)" class="form-control" required placeholder="Enter Keyword"></td><td><span id="spanId"></span></td>
        </tr>
        <tr>
          <td><b> Description <span style="color: red;">*</span> :</b></td>
          <td>
            <textarea rows="4" cols="4" name="description" onkeyup="handleInput3(this.value)" class="form-control" required placeholder="Enter Description"></textarea>
          </td><td><span id="spanId3"></span></td>
        </tr>
        
         <tr> <td><b> alias <span style="color: red;">*</span> : </b></td><td> <input type="text" name="alias" class="form-control" required placeholder="Enter Alias"  > </td>
          </tr>
        <tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
      </table>
    </form>
  </div>
</div>
</div></div>
</section>

</div>

<!---------------------------------------Script For Keywords Count--------------------------------->

 <script>
        function handleInput(value){
          if(value.length<60){ 
            document.getElementById("spanId").style.color = "blue";
          }
          else
            { 
            document.getElementById("spanId").style.color = "red";
          }
              var res = value.split(",");
            $('#spanId').html(res.length);
        }

//--------------------------------------Script For Title Characters Count---------------------------------//
        
         function handleInput2(value){
          if(value.length<55){ 
            document.getElementById("spanId2").style.color = "blue";
          }
          else
            { 
            document.getElementById("spanId2").style.color = "red";
          }
             
            $('#spanId2').html(value.length);
        }

//-------------------------------------Script For Description Characters Count--------------------------//
        
        function handleInput3(value){
          if(value.length<156){
            document.getElementById("spanId3").style.color = "blue";
          }
          else
          {
            document.getElementById("spanId3").style.color = "red";
          }

           $('#spanId3').html(value.length);
        }
    </script>


<!----------------------------------------------Script Ends Here-------------------------------------------->




<?php $this->load->view('admin/theme/footer');?>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
