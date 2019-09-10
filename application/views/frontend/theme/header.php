


 <!DOCTYPE html>
<html lang="en">
<head>
<title>Total Holiday Options</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php echo @$meta_data['description']?>">
	<meta name="keyword" content="<?php echo @$meta_data['keyword']?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url("/assets/frontend/images/THo_fevicon_icon.png");?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/main-styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/responsive.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"?>frontend/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"?>frontend/css/bootstrap.min.css">

	<script src="<?php echo base_url()."assets/"?>frontend/js/3.3.1-jquery.min.js"></script>

	<script src="<?php echo base_url()."assets/"?>frontend/js/popper.min.js"></script>

	<script src="<?php echo base_url()."assets/"?>frontend/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/"?>frontend/js/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()."assets/"?>frontend/js/jquery.waterwheelCarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/inner_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/search_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/about_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/"?>frontend/css/booking_styles.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"?>frontend/css/jquery-ui.css">

<link rel="stylesheet" href="<?php echo base_url()."assets/"?>frontend/css/animate.min.css">
<script src="<?php echo base_url()."assets/"?>frontend/js/jquery-ui.js"></script>

   <script src="<?php echo base_url()."assets/"?>frontend/js/jquery.validate.min.js"></script>

   <style type="text/css">
     form .error{
color: red;


     }
   </style>



	<script>
		$( function() {
		$( "#datepicker2" ).datepicker({
		showOtherMonths: true,
		selectOtherMonths: true
		});
		} );
		</script>
		<style>
		#ui-datepicker-div{
		position: fixed;
		top: auto;
		left: auto;
		z-index: 99999 !important;
		display: block;
		}
		</style>


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

<script>

	//script to make clickable dropdown hoverable in header 

$('ul.navbar-nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu.show').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu.show').stop(true, true).delay(200).fadeOut(500);
});
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("go_to_top").style.display = "block";
  } else {
    document.getElementById("go_to_top").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>
<script type="text/javascript">
	
	$(document).ready(function(){

    $('#reused_form').validate({
    	rules:{
    		     destination:{
					required:true
				},
				dep_date:{
					required:true
				},
				no_of_travellers:{
					required:true
				},
				name:{
					required:true
				},
				home_country:{
					required:true
				},
				email:{
					required:true
				},
				contact_no:{

					required:true
				}
    	},
    	message:{
					destination:{
						required:"please fill "
					},
					dep_date:{
						required:"please fill "
					},
					no_of_travellers:{
						required:"please fill "
					},
					name:{
						required:"please fill "
					},
					home_country:{
						required:"please fill "
					},
					email:{
						required:"please fill "
					},
					contact_no:{
						required:"please fill "
					}
    	},

    	submitHandler:function(form){
    	var destination_c = $('#destination').val();
    	var dep_date_c = $('#datepicker2').val();
    	var no_of_travellers_c =$('#no_of_travellers').val();
    	var name_c = $('#name').val();
    	var home_country_c = $('#home_country').val();
    	var email_c = $('#email').val();
    	var contact_no_c = $('#contact_no').val();
    		var msg_box_c = $('#msg_box').val();
    	
    		 
    $.post('<?php echo base_url('quotes');?>',
    	{ destination: destination_c,
				dep_date: dep_date_c,
				no_of_travellers: no_of_travellers_c,
				name: name_c,
				home_country: home_country_c,
				email: email_c,
				msg_box:msg_box_c,
				contact_no: contact_no_c},
				function(result){

				$('#reused_form').html(result);
setInterval('refreshPage()',500);
                
    });		 
    		
    	}

    });


	});


function refreshPage(){
	location.reload();
}

</script>


</head>
<!--script to make Sticky navbar-->




<body>
	

						<!-- header starts here-->

<section class="section1">
	<header class="page-header">

<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/frontend/images/THO-logo.png") ?>" alt="Logo"></a></div>
						<!--<div class="phone"><img src="<?php echo base_url("assets/frontend/images/call.png");?>" alt="Call"><a href="callto:+91 11 2530 8100">+91 11 2530 8100</a></div>-->
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item social_list_item1" title=""><a href="https://www.facebook.com/TOTALHOLIDAYOPTIONS" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>							    
								<li class="social_list_item social_list_item2" title=""><a href="http://www.twitter.com/thoworldwide" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><button data-toggle="modal" data-target="#free_quotes">Get Free Quotes</button></div>
						</div>	
					</div>
									
<div class="modal fade" id="free_quotes">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title">Get Free Quotes</h4>

	<button type="button" class="close" data-dismiss="modal">×</button>
</div>
<div class="modal-body">
	<form  id="reused_form" >
		<div class="form-group">

			<input type="text" name="destination" id="destination" class="form-control" placeholder="Enter Destination" autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="datepicker2"
			name="dep_date" placeholder="Enter Departure Date" autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="number"  id="no_of_travellers" class="form-control"
			name="no_of_travellers" placeholder="Enter No. Of Travellers" autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control"
			name="name" id="name" placeholder="Enter Full Name"   autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control"
			name="home_country" id="home_country" placeholder="Enter Home Country" autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="email" class="form-control"
			name="email" id="email" placeholder="Enter Email" autocomplete="off" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control"
			name="contact_no" id="contact_no"  placeholder="Enter Contact No." autocomplete="off" >
		</div>
		<div class="form-group">
			<textarea name="msg_box" class="form-control" id="msg_box" placeholder="Enter Your Message" autocomplete="off"></textarea>
		</div>


		<input type="hidden" name="submit">
		<button  type="submit" name="submit"  class="btn btn-lg btn-success btn-block" >Submit</button>

	<span id='span'></span>
	</form>

	
</div>
</div>
</div>
</div>

  
</div>
									
				</div>
			</div>			
		





	
		<div style="clear:both"></div>
		<nav class="navbar navbar-expand-md navbar-dark sticky-top" data-toggle="sticky-onscroll">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						  <li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url();?>">Home</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('about-us');?>">About Us</a>
						  </li>


		<?php 
foreach ($row as  $value) {   
	$value['id']

   ?>

						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $value['name']; ?> </a>
								<ul class="dropdown-menu">
                                      
                                    <?php  foreach ($list as $key) {
                                    	if($key['category']==$value['id']){ ?>

<a href="<?php echo base_url($value['alias']."/".$key['alias']);?>"> <li>  <?php echo $key['title'];?>  </li></a>
                                 

                                    <?php	}
                                    }  ?>
									
								
								
								</ul> 
						  </li>

<?php } ?>


						  <li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('contact-us');?>">Contact Us</a>
						  </li>
					</ul>
				</div>			
		</nav>		
	</header>
</section>
												<!-- header ends here-->
												
