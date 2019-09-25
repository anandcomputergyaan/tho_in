
<body>											<!--Jassor Slider starts here-->
<section class="section_one">
	<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
					<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url('assets/frontend/images-n/spin.svg')?>" />
				</div>
				<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
					<div>
						<img data-u="image" src="<?php echo base_url('uploads/package/'.$page_details['banner_image']);?>" />
					</div>
					<div>
						<img data-u="image" src="<?php echo base_url('uploads/package/'.$page_details['banner_image_2']);?>" />
					</div>
					<div>
						<img data-u="image" src="<?php echo base_url('uploads/package/'.$page_details['banner_image_3']);?>" />
					</div>

					
				</div>
				<!-- Bullet Navigator -->

				<!-- Arrow Navigator -->
				<div data-u="arrowleft" class="jssora051" style="width:40px;height:40px;top:0px;left:0px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
					</svg>
				</div>
				<div data-u="arrowright" class="jssora051" style="width:40px;height:40px;top:0px;right:0px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
					</svg>
				</div>
			</div>
    <!-- #endregion Jssor Slider End -->

        </div>
    </div>
	</div>
</section>
															<!--Jassor Slider ends here-->
															
															<!--Tour description starts here-->
<section class="section_two">
	<div class="container">
		<div class="row">
		  <div class="flex-row nav-bar mb-1 mt-3 d-md-flex display_flex top_head_category">
				<a href="#tour_short_descriptions" class="btn-anchor">
                    <div class="nav-item mr-0">Tour Description<span class="ml-1"><i class="fa fa-angle-down"></i></span></div>
                </a>
                <a href="#Itnnerary_main" class="btn-anchor">
                    <div class="nav-item mr-0">Itinerary<span class="ml-1"><i class="fa fa-angle-down"></i></span></div>
                </a>
                <a href="#included_main" class="btn-anchor">
                    <div class="nav-item mr-0">Inclusions <span class="ml-1"><i class="fa fa-angle-down"></i></span></div>
                </a>
                <a href="#excluded_main" class="btn-anchor">
                    <div class="nav-item mr-0">Exclusion<span class="ml-1"><i class="fa fa-angle-down"></i></span></div>
                </a>
		 </div>
			
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 tour_info">
				<div class="tour_heading">
					<h1><?php echo $page_details['title'];?></h1>
				</div>
				<div class="tour_short_info_main">
					<div class="tour_short_info_left col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="<?php echo base_url('assets/frontend/'); ?>images-n/time1.png">
						<span><?php echo $page_details['duration'];?> Days <?php echo $page_details['duration']-1;?> nights</span>
					</div>
					<div class="tour_short_info_right col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="<?php echo base_url('assets/frontend/'); ?>images-n/tag1.png">
						<span>Private Car tour</span>
					</div>
				</div>
				<div class="tour_short_description" id="tour_short_descriptions">
					<span><?php echo $page_details['details'];?></span>
				</div>
				<div class="tour_info_short_main">
					<div class="tour_info_short">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_left1">
							<span>Arrival</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_right1">
							<img src="<?php echo base_url('assets/frontend/images-n/arrivals.png'); ?>">
							<span><?php echo $page_details['tour_route_from'] ;?></span>
						</div>
					</div>
					<div class="tour_info_short">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_left1">
							<span>Departure</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_right1">
							<img src="<?php echo base_url('assets/frontend/images-n/departures(2).png');?>">
							<span><?php echo $page_details['tour_route_to']; ?></span>
						</div>
					</div>
					<div class="tour_info_short">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_left1">
							<span>Best time to travel</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_right1">
							<img src="<?php echo base_url('assets/frontend/images-n/time.png'); ?>">
							<span><?php echo $page_details['best_travel_time'];?></span>
						</div>
					</div>
					<div class="tour_info_short tour_info_short_last">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_left1">
							<span>Facilities</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tour_info_short_right1 tour_info_short_right_last">

					<?php foreach ($facilities as $facilities_value): ?>

				
						<img data-u="image" src="<?php echo base_url('uploads/facility/'.$facilities_value['image_icon']);?>" />
					
						
					<?php endforeach ?>
						</div>
					</div>
				</div>
				<div class="itinerary_head" id="Itnnerary_main">
					<h3>itinerary</h3>
				</div>
				
				<div id="Itnnerary_Menu">
					<div class="list-group panel">

			<?php foreach ($itinerary_details as $itinerary_details_value) { ?>			

						<a href="#itinerary<?php echo $itinerary_details_value['day_no']; ?>" class="list-group-item list-group-item-success itenerary_tab collapsed" data-toggle="collapse" data-parent="#Itnnerary_Menu" aria-expanded="false">
							<div class="pull-left"><h5>Day<span><?php echo $itinerary_details_value['day_no']; ?></span></h5></div>
							<div class="t-heading">
								<h4 class="font-lg"><?php echo $itinerary_details_value['title'];?></h4>
								<!-- <p>Behind sooner dining so window excuse he summer.</p> -->
							</div>
							<i class="fa fa-angle-down"></i>
						</a>

						<div class="collapse collapse_redesign" id="itinerary<?php echo $itinerary_details_value['day_no']; ?>" aria-expanded="false" style="height: 0px;">
							<?php echo $itinerary_details_value['description']; ?>

						</div>
<?php }?>



					</div>
				</div>
				<div class="included_head" id="included_main">
						<?php if(!empty($page_details['inclusions'])){?>
					<h3>What's Inclusions</h3>		
					<?php } ?>
				</div> 
				<?php echo $page_details['inclusions'];?>


				<div class="excluded_head" id="excluded_main">
					<?php if(!empty($page_details['exclusion'])){?>
					<h3>What's Excluded</h3>		
					<?php } ?>
				
				</div>
                      <?php echo $page_details['exclusion'] ?>   


			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 tour_short_info">
					<div class="inner_page_right_header">
							<div class="inner_page_discount_top"><?php echo $page_details['offer'] ?></div>
							<div class="inner_page_discount_bottom">
								<span class="inner_page_discount_img"><img src="<?php echo base_url('assets/frontend/images-n/label1.png'); ?>"></span>
								<span class="inner_page_discount_one">From</span>
								<span class="inner_page_discount_two">$<?php echo $page_details['price']?></span>
								
								<span class="inner_page_discount_three">$<?php echo $page_details['price']-$page_details['discounted_price'];?></span><br>
							<span class="inner_page_discount_four">Per Person on twin sharing basis</span>
						</div>
					</div>
					<div class="map_main">
						<img src="<?php echo base_url('uploads/package/'.$page_details['map_image']);?>" >
					</div>
					<div class="inner_page_enq_form">
						<div class="interested_in_form">
							<div class="container">
								   <form action="../../Enquiry/save_enquiry" method="post" role="form" name="quotes_form" id="quotes_form">
								  	<input type="hidden" id="package_id1" name="package_id" value="<?php echo $page_details['id'];?>">  
									<h4>Enquire About This Trip</h4>
									<div class="row">
									  <div class="col-75">
									  	<?php
                                          echo $this->session->flashdata("notify");
                                         ?>
										<input type="text" id="name" name="name" pattern="[a-zA-Z ]+" placeholder="Name*" required="" autocomplete="off">
									  </div>
									</div>
									<div class="row">
									  <div class="col-75">
										<input type="text" id="email" name="email" required="" placeholder="Email*" autocomplete="off">
									  </div>
									</div>
									<div class="row">
									  <div class="col-75">
										<input type="text" id="phone" name="phone" pattern="[123456789][0-9]{9}" maxlength="10" title=" please enter 10 digits" required="" placeholder="Contact Number*" autocomplete="off">
									  </div>
									</div>
									<div class="row">
									  <div class="col-75">
										<input type="text" id="datepicker" name="date" required="" placeholder="Departure Date*" autocomplete="off">
									  </div>
									</div>
									<div class="row">
									  <div class="col-75">
										 <select name="Category">
											<option value="Select Category">Select Category*</option>
											<option value="5* Luxury">5* Luxury</option>						
											<option value="4* Deluxe">4* Deluxe</option>
											<option value="3* Comfort">3* Comfort</option>
										</select>
									  </div>
									</div>
									<div class="row">
									<div class="col-75">
									  <input type="submit" name="submit" id="submit1" value="Submit">
									</div>
									</div>
								  </form>
						  </div>
						</div>
					</div>
					<div class="promo_img">
						<a href="#"><img src="<?php echo base_url('assets/frontend/images-n/sikkim-800-800-ITM.jpg');?>"></a>
					</div>
			</div>
		</div>
	</div>
</section>
															<!--Tour description ends here-->

															<!--Related tours starts here-->
<section class="section_three">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 related_tours_heading">
				<h2 class="related_tours_head">Related Tours</h2>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 related_tours_main">
<?php foreach ($relatives_Packs as $relatives_Packs_value) {?>



				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 related_tours_first">
					<div class="related_tour_part">
						<img src="<?php echo base_url('uploads/package/'.$relatives_Packs_value['small_size_img'])?>">
						<div class="tour__tag" data-tag="Private Car Tour"></div>
						<div class="related_tour_text">
							<h5><?php echo $relatives_Packs_value['title']; ?></h5>
							<div class="for_star">
								<h6><?php echo $relatives_Packs_value['duration']; ?>D/<?php echo $relatives_Packs_value['duration']-1; ?>N</h6>
							<!--	<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>-->
							</div>
							<div class="related_tour_text_right">
								<a href="<?php echo base_url('home/inner_page/'.$relatives_Packs_value['id']);?>">Read more</a>
							</div>
						</div>
					</div>
				</div>

<?php } ?>

			</div>
		</div>
	</div>
</section>
															<!--Related tours ends here-->

															
<!--script for datepicker-->															
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
</script>															
<!--script for jassor slider-->
<script type="text/javascript">
	jQuery(document).ready(function ($) {

		var jssor_1_options = {
		  $AutoPlay: 1,
		  $SlideWidth: 720,
		  $ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		  },
		  $BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$
		  }
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		/*#region responsive code begin*/

		var MAX_WIDTH = 1366;

		function ScaleSlider() {
			var containerElement = jssor_1_slider.$Elmt.parentNode;
			var containerWidth = containerElement.clientWidth;

			if (containerWidth) {

				var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

				jssor_1_slider.$ScaleWidth(expectedWidth);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();

		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		/*#endregion responsive code end*/
	});
</script>
 <?php $this->load->view('frontend/theme/footer.php');?>