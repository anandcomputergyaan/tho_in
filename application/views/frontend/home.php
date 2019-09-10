





							<?php $n=count($slid);  ?>



												<!-- 1st slider starts here-->
<section class="section2">
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
<?php $active[0]='active'; for($i=0;$i<$n; $i++){ ?>


	<li data-target="#demo" data-slide-to="<?php echo $i ;?>" class="<?php echo @$active[$i];?>"  ></li>

<?php } ?>
	
		

	  </ul>
		  <div class="carousel-inner">

		  	<?php for($i=0;$i<$n; $i++){ ?>
<div class="carousel-item <?php echo @$active[$i];?>">
			<a href="<?php echo $slid[$i]['link']?>">  <img src="<?php echo base_url('uploads/slider/main_slider/'.$slid[$i]['slider_image']);?>" alt="<?php echo $slid[$i]['slider_alt']?>"></a>
			  <div class="carousel-caption">
				<h1> <?php echo $slid[$i]['tour_title'] ;?> </h1>
					  <div class="search_container">

						<form action="<?php echo base_url("search");?>" method="get" >
						  <input type="text" name="search_bar"  placeholder="Where To Go.." required >
						  <button type="submit" name="submit" >Let's Go</button>
						</form>

					  </div>
			  </div>   
			</div>
		

<?php } ?>

		

		  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
	</div>
</section>
											<!-- 1st slider ends here-->

																						<!-- Core value part starts here-->
<section class="section3">
	<h2 class="core_value">Our Core Values</h2>
		<div class="container">
			<div class="row">
			    <div class="col-md-4 col-sm-12 col-xs-12">	
					<h4>Customization</h4>
					<p>Most of our trips can be customized based on your need. We make sure in each tour we have detailed day by day itinerary that describes each day's activities.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h4>Trust and Integrity</h4>
					<p>Aspired to be a reliable and approachable tour operator that produces sensible its guarantees, one thing that has been lauded by customers and business specialists alike.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h4>Value for Money</h4>
					<p>To provide the best services, we're backed up by our own network of offices and teams in local destinations.We strive to offer exceptionally good value, but never cut corners or sacrifice quality to be cheapest.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h4>Customer</h4>
					<p>Our focus, thoughts and actions will always have the best interests of our customers first.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h4>Quality services</h4>
					<p>We believe in providing access to brilliant itineraries under different kind of travel with best deals and hassle free booking.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h4>Excellence</h4>
					<p>We focus on the best servies and results for our internal and external clients.</p>
				</div>
			</div>
		</div>
</section>
											<!-- Core value part ends here-->





											<!-- Featured collection part starts here-->
<section class="section4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 Featured_collection">
				<h1>Featured Collections</h1>
					<div id="demo1" class="carousel slide" data-ride="carousel">
					  <!-- The slideshow -->
					  <div class="carousel-inner">

					  <?php $ad=1;  $f=count($slid1); $a1[0]="active"; for ($i=0; $i<$f; $i++) { ?>
					   
					  	<div class="carousel-item <?php echo @$a1[$i];?>">
						  <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 slider_left_img_part"><img src="<?php echo base_url('uploads/slider/featured_collections/'.$slid1[$i]['slider_image']);?>" alt="<?php echo $slid2[$i]['slider_alt'];?>"></div>
						  <div class="carousel-caption over_slider col-md-4 col-lg-4 col-sm-12 col-xs-12">
							<h2 class="over_slider_heading"><?php echo $slid1[$i]['tour_title'];?></h2>
							 <div class="tour_short_info">
								<h6>Duration: <span class="tour_days"><?php echo $slid1[$i]['duration'];?>  Days</span></h6>
   
	

	                         <h6 class="to_bring_inline">Destinations: <?php echo substr($slid1[$i]['destination'],0,75);?>...<!--<span id="destination_dots<?php echo $ad;?>">...</span><span id="plus_more<?php echo$ad;?>"> <?php foreach ($route as $route_value) {
                                      				if ($route_value!=$route[0]){
                                      					echo "-".$route_value;
                                      				}
                                      			
								}?>-->
									
								</span></h6><!--
								<button onclick="myFunction('my_more_btn<?php echo$ad;?>','plus_more<?php echo$ad?>','destination_dots<?php echo$ad;?>')" id="my_more_btn<?php echo$ad;?>"> +more</button>-->
							 </div>
							 <div class="tour_more_details"><a href="<?php echo $slid1[$i]['link'];?>">More Details</a></div>
						  </div> 
						</div>



					<?php $ad++; }    ?>



					  </div>					  
					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
				  </div>
				  <div class="explore_all_tours_btn">
					<div class="explore_all_btn"><a href="<?php echo base_url('explore-all'); ?>">Explore All Tours<i class="fa fa-long-arrow-right"></i></a></div>
				  </div>

			</div>
		</div>
	</div>
</section>

											<!-- Featured collection part ends here-->
																						<!-- Trending part starts here-->
<section class="section5">
	<div class="container">
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 trending_part">
					<h1>Trending</h1>
					<div id="demo2" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
					  	  <?php  $t=count($slid2); $a2[0]="active"; for ($i=0; $i<$f; $i++) { ?>
						<li data-target="#demo2" data-slide-to="<?php echo $i;?>" class="<?php echo @$a2[$i];?>" ></li>

					<?php }?>
					  </ul>
					  <div class="carousel-inner to_change_overflow">

					  	  <?php  for ($i=0; $i<$t; $i++) { ?>

						<div class="carousel-item <?php echo @$a2[$i];?> ">
						  <img src="<?php echo base_url('uploads/slider/trending/'.$slid2[$i]['slider_image']);?>" alt="<?php echo $slid2[$i]['slider_alt'];?>">
						  <div class="carousel-caption col-lg-12 col-md-12 col-sm-12 col-xs-12 trending_part_above">
							<div class="trending_part_above_left col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<h3><?php echo $slid2[$i]['tour_title'];?></h3>
							<p><i class="fa fa-map-marker"></i>
							<?php echo substr($slid1[$i]['destination'],0,50)?>...
						                  	               <!--<?php $route2 = explode("-",@$slid1[$i]['destination']);?>
                                                                 <  ?php foreach ($route2 as $route_value) { echo " - ".$route_value;}?>--></p>
							</div>
							<div class="trending_part_above_right col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="trending_part_tour_duration"><p> <?php echo $slid2[$i]['duration'];?> Days &amp; <?php echo --$slid2[$i]['duration'];?> Night</p></div>
							<div class="trending_part_tour_details"><a href="<?php echo $slid2[$i]['link']?>">View Details<i class="fa fa-long-arrow-right"></i></a></div>
							</div>
						  </div>   
						</div>

					<?php } ?>

					  </div>
					  
					</div>
					 <a class="carousel-control-prev to_hide_prev" href="#demo2" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next to_hide_next" href="#demo2" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>
			</div>
		</div>
	</div>
</section>
											<!-- Trending part ends here-->
											<!-- Experiences part starts here-->
<section class="section6">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<h1 class="experience_heading">Experiences</h1>
					<div class="experience-slider-wrapper">
					<div id="carousel">
						 <?php  $e=count($slid3);  for ($i=0; $i<$e; $i++) { ?>
						 <a href="<?php echo $slid3[$i]['link'];?>">
						     
					  <img src="<?php echo base_url('uploads/slider/experiences/'.$slid3[$i]['slider_image']);?>" title="<?php echo $slid3[$i]['image_title']?>" alt="<?php echo $slid3[$i]['slider_alt']?>">
					   <div class="over_carousel_texts ">
					        <h5> <?php echo $slid3[$i]['tour_title']; ?></h5>
					       <h6> Read More</h6>
					    </div>
					  
					  <?php }?>

						  
						 
								
								<div class="water_wheel_nav">
									<a href="#" id="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a href="#" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
					  
					</div>
					</div>
			</div>
		</div>
	</div>
</section>


									<!-- Top destinations of 2019 part starts here-->
<section class="section7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_destinations_2019">
			  <h1>Top Destinations Of 2019</h1>
<?php foreach ($top_pack as $value) { ?>

	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 top_destinations_left1">
					<img src="<?php echo base_url().'uploads/package/'.$value['map_image'] ?>" title="" alt="<?php echo$value['map_alt']; ?>">
						<div class="top_destinations_2019_text">
							<h5><?php echo$value['title']; ?></h5>
							<p><?php echo$value['duration']; ?> Days/<?php echo --$value['duration']; ?> Nights</p>
							<a href="<?php echo base_url($value['cat_alias'].'/'.$value['alias']);?>"><span>View<br>Details</span></a>
						</div>
				</div>


<?php } ?>
				




			</div>
		</div>
	</div>
</section>


											<!-- Top destinations of 2019 part ends here-->
																						<!-- client's feedback part starts here-->

<section class="section8">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 client_feedback_part">
			<h1>Client's Feedback</h1>
				
				<?php foreach ($feedback as $key) { ?>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="client_feedback_parts">
						<p><?php echo $key['comments'];?></p>
						<span><h5><?php echo $key['client_name'];?></h5><i class="fa fa-quote-right"></i></span>
					</div>
				</div>
				
				<?php } ?>

			</div>
		</div>
	</div>
</section>
		




<script>
function myFunction(btnText,moreText,dots) {
  var dots = document.getElementById(dots);
  var moreText = document.getElementById(moreText);
  var btnText = document.getElementById(btnText);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "+ more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "- less"; 
    moreText.style.display = "inline";
  }

}
</script>
<!--code for flex slider-->	
<!--<script>
    $(function () {
        $('.carousel').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 1100,
            itemMargin: 5
        });
    });
</script>-->
<!--for waterwheel carousel-->
<script>
$(document).ready(function () {
  var carousel = $("#carousel").waterwheelCarousel({
	separation:					200,
	separationMultiplier:		0.8,
	horizonOffset:              0,
	horizonOffsetMultiplier:    1,
	sizeMultiplier:             0.7,
	opacityMultiplier:          0.9,
	horizon:                    0,
	flankingItems:              3,
	autoPlay: 					5000,
	movedToCenter: function ($newCenterItem) {$newCenterItem.next('.over_carousel_texts').show();},
movingFromCenter: function ($oldCenterItem) {$oldCenterItem.next('.over_carousel_texts').hide();},

  });

  $('#prev').bind('click', function () {
    carousel.prev();
    return false
  });

  $('#next').bind('click', function () {
    carousel.next();
    return false;
  });
});
</script>
<!--for go to top button-->
											


	

											<?php $this->load->view('frontend/theme/footer.php'); ?>
