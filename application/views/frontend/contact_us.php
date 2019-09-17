<!DOCTYPE html>
<html lang="en">
<head>
	<title>Total Holiday Options</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Total Holiday Options India">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/THo_fevicon_icon.png');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/contact_styles.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/main_styles.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/responsive_styles.css');?>">
</head>
<body>

												<!--contact banner starts here-->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search_head">
				<h1>Contact Us</h1>
			</div>
		</div>
	</div>
</section>
												<!--contact banner ends here-->

												<!--contact second part starts here-->												
<section class="contkt_main">
	<div class="container">
		<div class="row">												
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contakt_form">
				<form action="#" class="needs-validation" novalidate>
					<div class="form-group">
					  <input type="text" class="form-control" id="f_name" placeholder="Your Full Name" name="f_name" pattern="[a-zA-Z0-9\s]+" title="Text Only" required>
					  <div class="valid-feedback">Valid</div>
					  <div class="invalid-feedback">Please Enter Your Full Name...</div>
					</div>
					<div class="form-group">
					  <input type="email" class="form-control" id="e-mail" placeholder="Your Email" name="e-mail" required>
					  <div class="valid-feedback">Valid</div>
					  <div class="invalid-feedback">Please Enter Your Email Id...</div>
					</div>
					<div class="form-group">
					  <input type="text" class="form-control" id="mob_no" placeholder="Your Contact Number" name="mob_no" pattern="[0-9]+" title="Number Only" required>
					  <div class="valid-feedback">Valid</div>
					  <div class="invalid-feedback">Please Enter Your Contact Number...</div>
					</div>
					<div class="form-group">
					  <textarea name="comment" class="form-control" id="pwd" placeholder="Your Message" required></textarea>
					  <div class="valid-feedback">Valid</div>
					  <div class="invalid-feedback">Please Enter Your Message...</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit Now</button>
				 </form>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contakt_right">
				<div class="contakt_right_one">
					<img src="<?php echo base_url('assets/frontend/images/calling.png');?>">
					<h5>Phone</h5>
					<a href="tel:+91 11 2530 8100">+91 11 2530 8100</a>
				</div>
				<div class="contakt_right_two">
					<img src="<?php echo base_url('assets/frontend/images/emailing.png');?>">
					<h5>Email</h5>
					<a href="mailto:india@totalholidayoptions.in" target="_blank">india@totalholidayoptions.in</a>
				</div>
				<div class="contakt_right_three">
					<img src="<?php echo base_url('assets/frontend/images/location.png');?>">
					<h5>Address</h5>
					<p>TOTAL HOLIDAY OPTIONS PVT Ltd <br> B. No. 97, Ground Floor, Sai Enclave,<br> Behind PF Office, Sector 23 Dwarka,<br>New Delhi 110077, India</p>
				</div>
			</div>
		</div>
	</div>
</section>			
												<!--contact second part ends here-->

<!--for form validation-->
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>				
	
</section>											

 <?php $this->load->view('frontend/theme/footer.php');?>