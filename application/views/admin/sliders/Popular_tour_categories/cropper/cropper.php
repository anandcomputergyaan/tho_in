<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<?php $this->load->view('admin/theme/header');?>
<?php $this->load->view('admin/theme/sidebar');?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/cropper/css/cropper.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/cropper/css/main.css'); ?>">

<script>
function goBack() {
window.history.back();
}
</script>

<body>
  <div class="content-wrapper">
    <section class="content">
      <section class="content-header">
        <h1>
        Crop Image
        <small>edit</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li class="active">Crop Image</li>
        </ol>
      </section>
      <style>strong{color:red;}</style>
      <!-- Main content -->
      <section class="content box box-info">
        <div class="row">
          <div class="col-lg-12 margin-tb">
            
            
          </div>
        </div>
        <div class="container">
          <div class="main_cropper_box" style="width:80%; margin:auto;">
            <div class="col-md-12">
              <!-- <h3>Demo:</h3> -->
              <div class="img-container">
                   <img id="image" src="<?php echo base_url('uploads/slider/Popular_tour_categories/'.$data['slider_image']);?>" alt="Picture">
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 docs-buttons">
                <!-- <h3>Toolbar:</h3> -->
                
                <label class="btn btn-success btn-upload" for="inputImage" title="Upload image file">
                  <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image">
                    
                    Import Image
                  </span>
                </label>
                <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Crop">
                  Crop
                </span>
                </button>
                <button class="btn btn-primary pull-right" data-toggle="tooltip" title="Go Back" onclick="goBack()">Go Back</button>
                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body"></div>
                      <div class="modal-footer">
                        <a  style="display: none;" class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                            <form method="post" action="<?php echo base_url('admin/slider/Popular_tour_categories/cropper_store/'.$data['id']); ?>">
                          
                          <input type="hidden" id="facility_image_data" name="facility_image_data" value="">
                          
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                          <input type="submit" name="submit_and_save" class="btn btn-success" value="Save">
                          
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- /.modal -->
                  
                  </div>
                  <!-- /.docs-buttons -->
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </body>
    <?php $this->load->view('admin/theme/footer');?>
    <script src="<?php echo base_url('assets/cropper/js/cropper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/cropper/js/jquery-cropper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/cropper/js/main.js') ; ?>"></script>