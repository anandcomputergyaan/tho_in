  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<style> 
.error{
    color:red;
}
</style>
   </head>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <!-- Main content -->
<body style="overflow: hidden;">
  <section class="content">

    <!-- /.row (main row) -->
    <div  class="row" >
      <div class="col-md-4"> </div>
      <div class="col-md-4"  style="margin-top: 10%; border-radius: 19px;box-shadow: 5px 10px #5f9ea075;"  >
        <center><p style="background: #3ebfc3;padding: 11px;border-radius: 0;color: #fff;border-top-left-radius: 10px;border-top-right-radius: 10px;text-transform: uppercase;font-weight: 500;letter-spacing: 1px;"> Sign In</p> </center>
      <form action="login/sign_in" method="post"  id="form_id">
        <table class="table responsive form-group">
          <tr>
            <td><b>Username* :</b></td><td><input type="text" name="user_name" class="form-control" placeholder="Admin" ></td>
          </tr>
          <tr> <td><b>Password* : </b></td><td> <input type="Password" name="password" class="form-control" placeholder=" Password" >  </td> 
          </tr>
          <tr><td colspan="2"> <button  name="login" class="btn btn-success pull-right" style="float:right;"> Login</button></td></tr>
         </table>
      </form>

      </div>
        <div class="col-md-4"> </div>
    </div>
  </section>
</body>
 <script type="text/javascript">
   
 $('document').ready( function(){
  
  $('#form_id').validate({
    rules:{
      user_name:{
        required:true,
    
      },
      password:{
        required:true,
        minlength:8,
        maxlength:24

      }
    },
    messages:{

              email:{
                required:"please enter user name "
          
              },
              password:{
                required:"please enter password ",
                minlength:"your must be at least 8 characters long ",
                maxlength:" no more then 24 characters long"
              }

    },
    submitHandler:function(form){
      form.submit();
    }

  });
 });
 </script>