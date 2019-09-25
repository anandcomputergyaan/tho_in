<section class="section_9">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 top_footer_main">
					<div class="col-lg-3 col-md-12 col-xs-12 col-sm-12 footer_left_one">
						<ul>
							<div class="footer_head_1">Quick Links<hr></div>
							<li><a href="<?php echo base_url('home');?>">Home</a></li>
							<li><a href="<?php echo base_url('home/about_us');?>">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-xs-12 col-sm-12 footer_left_two">
						<ul>
							<div class="footer_head_2">Quick Links<hr></div>
							<!--<li>Email:<a href="mailto:india@totalholidayoptions.in">india@totalholidayoptions.in</a></li>
							<li>Call: +91 11 25308100 </li>-->
							<li><a href="#">Brochures</a></li>
							<li><a href="#">Our Network</a></li>
							<li><a href="#">Booking Conditions</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-xs-12 col-sm-12 footer_left_three">
						<ul>
							<div class="footer_head_3">Connect with Us<hr></div>
							<li><a href="#"><img src="<?php echo base_url('assets/frontend/images/facebook-letter-logo-big.png');?>" onmouseover="this.src='<?php echo base_url('assets/frontend/images/facebook-logo-orange.png');?>'"onmouseout="this.src='<?php echo base_url('assets/frontend/images/facebook-letter-logo-big.png');?>'"border="0" class="footer_fb" title="Facebook" alt="Facebook"/></a></li>
							<li><a href="#"><img src="<?php echo base_url('assets/frontend/images/twitter-small-1.png')?>" onmouseover="this.src='<?php echo base_url('assets/frontend/images/twitter-orange.png');?>'"onmouseout="this.src='<?php echo base_url('assets/frontend/images/twitter-small-1.png');?>'"border="0" class="footer_twitter" title="Twitter" alt="Twitter"/></a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-12 col-xs-12 col-sm-12 footer_left_four">
						<ul>
							<div class="footer_head_4">Newsletter<hr></div>
							<li><input type="text" placeholder="Your Email Address...">
							<button type="submit"><i class="fa fa-search"></i></button></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</section>
												<!--Footer Top part ends here-->

												<!--Footer Affiliation starts here-->	
<section class="section_10">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 affiliation_main">
					<img src="<?php echo base_url('assets/frontend/images/Affliation_img.jpg'); ?>">
				</div>
			</div>
		</div>
</section>
												<!--Footer Affiliation ends here-->

												<!--Footer copyright starts here-->	
<section class="section_11">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 copyright_main">
					<p>© 2014-2019 TOTAL HOLIDAY OPTIONS. All Rights Reserved.</p>
				</div>
			</div>
		</div>
</section>
												<!--Footer copyright ends here-->

                                                <!--got to top button-->												
<i class="fa fa-arrow-circle-up" onclick="topFunction()" id="topBtn" title="Go to top" style="display: block;"></i>	




<!--script for testimonial feedback slider-->
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    slideSpeed : 2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})
</script>
<!--script for go to top button-->
<script>
// When the user scrolls down 30px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!--script for animation-->
<script>
  AOS.init();
</script>												
<!--script for tour by destination slider-->												
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!--to change slider on targeted time-->
<script>
 $("#carousel-example-1").carousel({interval: 4000});
</script>
<!--to change background color of navbar on scrolling-->
<script>
 $(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
</script>

<!--script to make Sticky navbar-->
<script>
$(document).ready(function () {
	// Custom function which toggles between sticky class (is-sticky)
	var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
		var stickyHeight = sticky.outerHeight();
		var stickyTop = stickyWrapper.offset().top;
		if (scrollElement.scrollTop() >= stickyTop) {
			stickyWrapper.height(stickyHeight);
			sticky.addClass("is-sticky");
		}
		else {
			sticky.removeClass("is-sticky");
			stickyWrapper.height('auto');
		}
	};

	// Find all data-toggle="sticky-onscroll" elements
	$('[data-toggle="sticky-onscroll"]').each(function () {
		var sticky = $(this);
		var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
		sticky.before(stickyWrapper);
		sticky.addClass('sticky');

		// Scroll & resize events
		$(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
			stickyToggle(sticky, stickyWrapper, $(this));
		});

		// On page load
		stickyToggle(sticky, stickyWrapper, $(window));
	});
});
</script>			
<script><!--script to make clickable dropdown hoverable in header-->
$('ul.navbar-nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
</body>
</html>											