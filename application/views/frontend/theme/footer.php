<!-- go to top button starts here-->
<button onclick="topFunction()" id="go_to_top" title="Go to top" style="display: block;"><i class="fa fa-arrow-circle-up"></i></button>
											<!-- go to top button ends here-->

<section class="section9">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_top_1">
				<footer>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<ul class="footer_left_1">
							<li>Quick Links</li>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="<?php echo base_url('about-us');?>">About Us</a></li>
				
							<li><a href="<?php echo base_url('booking-conditions');?>">Booking Conditions</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<ul class="footer_middle_1">
							<li>Contact</li>
							<!--<li>97 ,Ground Floor, Sai Enclave, Sector 23,Dwarka, New Delhi 110077, India</li>
							<li>Call: +91 11-25308100</li>-->
							<li><a href="mailto:srilanka@totalholidayoptions.lk">srilanka@totalholidayoptions.lk</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<ul class="footer_right_1">
							<li>Connect With Us</li>
							<li><a href="https://www.facebook.com/TOTALHOLIDAYOPTIONS" target="_blank"><img src="<?php echo base_url("assets/frontend/images/social media/facebook-logo.png")?>" onmouseover="this.src='<?php echo base_url("assets/frontend/images/social media/facebook-originals.png")?>'" onmouseout="this.src='<?php echo base_url("assets/frontend/images/social media/facebook-logo.png")?>'" border="0" title="Facebook" alt="Facebook Logo"></a></li>
							<li><a href="http://www.twitter.com/thoworldwide" target="_blank"><img src="<?php echo base_url("assets/frontend/images/social media/twitter-logo.png")?>" onmouseover="this.src='<?php echo base_url("assets/frontend/images/social media/twitter-original.png")?>'"
onmouseout="this.src='<?php echo base_url("assets/frontend/images/social media/twitter-logo.png")?>'" border="0" title="Twitter" alt="Twitter Logo"></a></li>
						
					</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<ul class="footer_right_2">
							<li>Newsletter</li>
							<li>
								 
								  <input type="email"  id='newsletter_bar' placeholder="Your Email Address" name="newsletter_bar">
								  
								  <button type="button" id="send_email" >Send</button>
			                      
							</li>
							<span id='msg'></span>
						</ul>
					</div>
				</footer>
			</div>
		</div>
	</div>
</section>											
											

<script type="text/javascript">
	
$(document).ready(function(){

$('#send_email').click(function(){
var email = $('#newsletter_bar').val();

$.post('<?php echo base_url('/newsletter')?>', { str : email } , function(result){
	 $('#msg').html(result);
});


}) ;      
});

</script> 										<!-- Footer 1 part ends here-->
											<!-- Footer affliation part starts here-->
											
<!--<section class="section10">
	<div class="container-fluid">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 affiliation_part">
			<img src="<?php echo base_url("assets/frontend/images/affliation.jpg")?>">
		</div>
	</div>
</section>	-->

											<!-- Footer affliation part ends here-->
																						<!-- Footer copyright part starts here-->
<section class="section11">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 copyright_part">
				<p>© 2014 - 2019 TOTAL HOLIDAY OPTIONS. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</section>
											<!-- Footer copyright part ends here-->
