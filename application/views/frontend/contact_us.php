
												<!-- header ends here-->

												<!-- contact us top-1 starts here-->

<section class="section_conatct1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_top_part ">
				<span>Contact Us</span>
			</div>
		</div>
	</div>
</section>												
												
												<!-- contact us top-1 ends here-->

												<!-- contact us top-2 starts here-->

<section class="section_conatct2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_middle_part">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact_middle_parts">
					<!--<img src="<?php echo base_url()."/assets/"?>frontend/images/contact_us/calling.png">
					<h4>Phone</h4>
					<a href="callto:+91 11-25308100">+91 11-25308100</a>-->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact_middle_parts">
					<img src="<?php echo base_url()."/assets/"?>frontend/images/contact_us/emailing.png">
					<h4>Email</h4>
					<a href="mailto:srilanka@totalholidayoptions.lk">srilanka@totalholidayoptions.lk</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact_middle_parts">
					<!--<img src="<?php echo base_url()."/assets/"?>frontend/images/contact_us/location.png">
					<h4>Location</h4>
					<h5>Total Holiday Options</h5>
					<p>97, Ground Floor, Sai Enclave,<br>Sector 23 Dwarka,<br>New Delhi 110077, INDIA</p>-->
				</div>
			</div>
		</div>
	</div>
</section>												
												
												<!-- contact us top-2 ends here-->

												<!-- contact us top-3(form part) starts here-->

<section class="section_conatct3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_form_part">
				<h1>Leave Us Your Info</h1>
				<h5>We will get back to you.</h5>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 contact_form_part_blank">

					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contact_form">
						<form action="contact" method="post" class="needs-validation" novalidate>
							<div class="form-group">
							  <input type="text" class="form-control" id="f_name" placeholder="Your Full Name" name="f_name" pattern="[a-zA-Z0-9\s]+" title="Text Only" required>
							  <div class="valid-feedback">Valid</div>
							  <div class="invalid-feedback">Please Enter Your Full Name...</div>
							</div>
							<div class="form-group">
							  <input type="email" class="form-control" id="e-mail" placeholder="Your Email" name="e_mail" required>
							  <div class="valid-feedback">Valid</div>
							  <div class="invalid-feedback">Please Enter Your Email Id...</div>
							</div>
							<div class="form-group">
							  <input type="text" class="form-control" id="mob_no" placeholder="Your Contact Number" name="mob_no" pattern="[123456789][0-9]{9}" title="Number Only" required>
							  <div class="valid-feedback">Valid</div>
							  <div class="invalid-feedback">Please Enter Your Contact Number...</div>
							</div>
							<div class="form-group">
							  <textarea name="comment" class="form-control" id="pwd" placeholder="Your Message" required></textarea>
							  <div class="valid-feedback">Valid</div>
							  <div class="invalid-feedback">Please Enter Your Message...</div>
							</div>
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit Now</button>
						 </form>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 contact_form_part_blank">

					</div>
			</div>
		</div>
	</div>
</section>												
												
								<!-- contact us top-3(form part) ends here-->												

								<!-- contact us last part(map) starts here-->

<section class="section_conatct4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_map_part">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.095938380317!2d77.05175231455807!3d28.566881693801122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf05e7f2af%3A0x5c66ba4e6e11aacf!2sTotal+Holiday+Options+-+India!5e0!3m2!1sen!2sin!4v1554375853064!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
								<!-- contact us last part(map) starts here-->
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
        else{
        alert('Thank You for Contacting Us . \n'+'We will get back to you shortly ');
    }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>												
									 <!-- Footer 1 part starts here-->													
<?php $this->load->view('frontend/theme/footer'); ?>
								<!-- Footer copyright pa