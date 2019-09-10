		
</script>
<script type="text/javascript">
	
	$(document).ready(function(){

    $('#Price_form').validate({
    	rules:{
    		    c_pack:{
    		    	required:true
    		    },
				c_name:{
					required:true
				},
				c_email:{
					required:true
				},
				 c_phone:{
					required:true
				},
				c_date:{
					required:true
				},
				category:{
					required:true
				}
    	},
    	message:{
                 c_pack:{
					required:"please enter"
				},
					c_name:{
					required:"please enter"
				},
				c_email:{
					required:"please enter"
				},
				 c_phone:{
					required:"please enter"
				},
				c_date:{
					required:"please enter"
				},
				category:{
					required:"please enter"
				}
    	},

    	submitHandler:function(form){
var c_pack =$('#c_pack').val(); 
var c_name = $('#c_name').val();
var c_email = $('#c_email').val();
var c_phone = $('#c_phone').val();
var datepicker = $('#datepicker').val(); 
var category =$('#category').val();

    		

    
    		 
    $.post('<?php echo base_url('enquiry/price_request');?>',/*
 REQUEST */  	{ 	c_pack: c_pack,
    		c_name :c_name,
			c_email :c_email,
			c_phone : c_phone,
			date :datepicker,
			category : category

    	},
				function(result){

				alert(result);
setInterval('refreshPage()',500);
                
    });		 

    		

    		
    	}
    });
	});
function refreshPage(){
	location.reload();
}

	
		</script>

		<script>
		$( function() {
		$( "#datepicker" ).datepicker({
		showOtherMonths: true,
		selectOtherMonths: true
		});
		} );
			$( function() {
		$( "#departure_date" ).datepicker({
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


	<section class="section_inner1">
	<div class="container-fluid inner_page_first">
		<div class="row">
			<div class="col-lg-12 marquee_parts">
				<div class="inner_page_top_image"><img src="<?php echo base_url('/uploads/package/'.$data['banner_image']);?>"></div>
					<div class="inner_page_top_header col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1><?php echo $data['title'];?></h1>
						<marquee  behavior="scroll" direction="left"><p><?php echo $data['marquee'];?></p></marquee>
					</div>
					<div class="inner_page_right_header col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="inner_page_discount_top">10% Off</div>
						<div class="inner_page_discount_bottom">
							<span class="inner_page_discount_img"><img src="images/label1.png"></span>
							<span class="inner_page_discount_one">From</span>
							<span class="inner_page_discount_two">$356</span>
							<span class="inner_page_discount_three">$314</span><br>
							<span class="inner_page_discount_four">Per Person on twin sharing basis</span>
						</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	<br clear="all">
</section>
												<!-- inner page top ends here-->

												<!-- inner page part 2 starts here-->
<section class="section_inner2">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 inner2_left">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 inner2_left1">
					<span><img src="<?php echo base_url("assets/frontend/images/time.png") ?>"><?php echo $data['duration'];?> Days <?php echo --$data['duration'];?> Nights</span>
					<span><img src="<?php echo base_url("assets/frontend/images/departures.png") ?>"><?php echo $data['tour_route_from'];?></span>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 inner2_left2">
					<span><img src="<?php echo base_url("assets/frontend/images/calendar1.png") ?>">Availability: <?php echo date('M y',strtotime($data['availability_from']));?> - <?php echo date('M y',strtotime($data['availability_to']));?> </span>
					<span><img src="<?php echo base_url("assets/frontend/images/arrivals.png") ?>"><?php echo $data['tour_route_to'];?></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner2_right22">
												<div id="Booking_form" class="tabcontent_left">
							<a href="#modalPrice" data-toggle="modal">Price On Request</a>
						</div>

                           <div class="modal fade" id="modalPrice">
							<div class="modal-dialog">
								<div class="modal-content">
									
									<div class="modal-header">
										<h4 class="modal-title">Request For Price</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									
						<div class="modal-body">
							<form role="form" name="Price_form" id="Price_form">

								<div id="message"></div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 to_give_padding">
										<input type="text" id="c_pack" name="c_pack"  value="<?php echo $data['title'];?>" readonly >

										<input type="text" id="c_name" name="c_name" placeholder="Full Name*" autocomplete="off" pattern="[a-zA-Z0-9\s]+" title="Text Only" required>
										<input type="email" id="c_email" name="c_email" placeholder="Email*" autocomplete="off" required>
										<input type="text" id="c_phone" name="c_phone" placeholder="Contact Number*" autocomplete="off" pattern="[0-9]+" title="Number Only" required>
										<input type="text" id="datepicker" name="c_date" required="" placeholder="Departure Date*" autocomplete="off" required>
										<select id="category" name="category" class="hotel_categ" required>
											<option value="">Select Hotel Category</option>
											<option value="5* Luxury">5* Luxury</option>
											<option value="4* Deluxe">4* Deluxe</option>
											<option value="3* Comfort">3* Comfort</option>
										</select>

									<input type="submit" name="submit" id="submit_price">
										
									</div>
										</form>
									</div>
									</div>
								</div>
							</div>
						</div>


			</div>
		</div>
	</div>
</section>
												<!-- inner page part 2 ends here-->
																								
												<!-- inner page part 3 starts here-->
<section class="section_inner3">
	<div class="itinery_portion">
		<div class="container">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 itinery_left">

					 <!-- Nav tabs -->
					  <ul class="nav nav-tabs">
						<li class="nav-item">
						  <a class="nav-link active" data-toggle="tab" href="#menu_details">Details</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu_ininerary">Itinerary</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu_inclusion">Inclusions</a>
						</li>
						<?php if(!empty($data['exclusion'])){ ?>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu_exclusion">Exclusion</a>
						</li>
					<?php } if(!empty($data['essential_information'])){ ?>
						<li class="nav-item">
						  <a class="nav-link" data-toggle="tab" href="#menu_essential_info">Essential Informations</a>
						</li>
				 <?php }?>	
					  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
					<div id="menu_details" class="container tab-pane active"><br>
					  <div class="same_line">
						<img src="<?php echo base_url("assets/frontend/images/description.png"); ?>">
						<h4>Tour Overview</h4>
					  </div>
					  <p><?php echo $data['details'];?></p>
					</div>
					<div id="menu_ininerary" class="container tab-pane fade"><br>
						<div class="same_line">
						   <img src="<?php echo base_url("assets/frontend/images/destinations.png"); ?>">
					       <h4>Itinerary Details</h4>
					   </div>
					  <p><?php echo $data['itinerary'];?></p>

 <?php 
foreach ( $itineraries as $days) { ?>


						<button class="accordion">Day <?php echo $days['day_no'];?></button>
							<div class="panel">
							  <?php echo $days['description'];?>
							</div>



 <?php } ?>


						





						
					</div>
					<div id="menu_inclusion" class="container tab-pane fade"><br>
					  <h4>Inclusions Details</h4>
					  <?php echo $data['inclusions'];?>
					  
					</div>
					<div id="menu_exclusion" class="container tab-pane fade"><br>
					  <h4>Exclusion Details</h4>
					 <?php echo $data['exclusion'];?>
					  
					</div>
					<div id="menu_essential_info" class="container tab-pane fade"><br>
					  <h4>Essential Information Details</h4>
					  <?php echo $data['essential_information'];?>
					  
					</div>
				  </div>
				  
			</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 tour_highlight_main">
							<div class="container">
								  <div class="tour_highlight">
									<h4>Why Book With Us?</h4>
									<span><img src="<?php echo base_url("assets/frontend/images/money-bag.png"); ?>"><p>Best Price Guarantee.</p></span>
									<span><img src="<?php echo base_url("assets/frontend/images/support.png"); ?>"><p>24/7 Customer Support.</p></span>
									<span><img src="<?php echo base_url("assets/frontend/images/star.png"); ?>"><p>Hand-picked Tours & Activities.</p></span>
									<span><img src="<?php echo base_url("assets/frontend/images/travel-insurance.png"); ?>"><p>Hassle Free Booking.</p></span>
								</div>
						  </div>
					  </div>
		</div>
	</div>
	<br clear="all">
</section>
											<!-- inner page part 3 ends here-->
											
											<!-- inner page part 4 related tours ends here-->
											<!-- inner page part 3 ends here-->
											
											
											<!-- inner page part 4 related tours starts here-->											
<section class="section_inner4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 related_tours_heading">
				<h1>Related Tours</h1>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 related_tours">

<?php foreach ($relative_pack as $key) { ?>

	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 related_tour_left_parts">
					<div class="related_tour_part">
						<img src="<?php echo base_url().'uploads/package/'.$key['map_image']; ?>">
						<div class="top_ribon">
							<span><?php echo $key['offer']; ?> Off</span>
						</div>
						<div class="related_tour_text">
							<h5><?php echo $key['title']; ?></h5>
							<h6><?php echo $key['duration']; ?>D/<?php echo --$key['duration']; ?>N</h6>
							<div class="related_tour_text_right">
								<a href="<?php echo base_url($key['cat_alias']."/".$key['alias']);?>">View Details</a>
							</div>
						</div>
					</div>					
				</div>
	
<?php } ?>
				


			</div>
		</div>
	</div>
</section>




		

</script>
<!--for booking and enquiry button-->
<!-- <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script> -->
<!-- Itinerary Accordion script-->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>										
											<!-- inner page part 4 related tours ends here-->
											
<?php $this->load->view('frontend/theme/footer.php');  ?>