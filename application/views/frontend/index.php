<head>
	  <script src="<?php echo base_url('assets/frontend/js/owl.carousel.js');?>"></script>
  <script src="<?php echo base_url('assets/frontend/js/owl.carousel.min.js');?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.carousel.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.theme.default.min.css');?>">
	
</head>
<body>
											<!-- header ends here -->
<style type="text/css">
	<?php $n=count($slider); for ($i=1; $i<=$n; $i++) { ?>

		#carousel-example-1 .carousel-item:nth-child(<?php echo $i;?>){
			background-image: url("<?php echo base_url('uploads/slider/main_slider/'.@$slider[$i-1]['slider_image']);?>");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			filter: brightness(95%);
		}


	<?php } ?>
</style>

<!--Slider Starts here-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<?php $active[0]='active'; for($i=0; $i <$n; $i++) {  ?>
		<li data-target="#carousel-example-1" data-slide-to="<?php echo $i;?>" class="<?php echo @$active[$i];?>">
		</li>
		<?php }?>
	</ol>
	<!--/.Indicators-->
	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<!--First slide-->

		<?php for($i=0; $i <$n ; $i++) {  ?>
		<div class="carousel-item <?php echo @$active[$i];?>">
			<!--Mask-->
			<div class="view">
				<div class="full-bg-img flex-center mask rgba-indigo-light white-text">
					<ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
						<li>
							<h1 class="font-weight-bold text-uppercase"><?php echo $slider[$i]['tour_title']?></h1>
							<a href="<?php echo $slider[$i]['link']?>">View Details</a>
						</li>
					</ul>
				</div>
			</div>
			<!--/.Mask-->
		</div>
		<?php }?>

	</div>
	<!--/.Slides-->
	<!--Controls-->
	<a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>

				
												<!--Hot deal part starts here-->
<section class="section_0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hot_deals_head">
				<h2>Hot Deals</h2><hr>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hot_deals_main">
				
			


					<?php  $j=0; $z=1; $fade='';
					foreach ($hot_deatls as $hot_deatls_value)
					{
					if ($z==1)
					{
					$fade='fade-right';
					}
					if ($z==2)
					{
					$fade='fade-up';
					}
					if ($z==3)
					{
					$fade='fade-left';
					$z=0;
					}
					
					?>

                      <?php if ($j%3==0) {  ?>
                      </div>
                      	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hot_deals_main">
                   <?php }?>
					
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 hot_deals_detail_main" data-aos="<?php echo $fade;?>">
						<img src="<?php echo base_url('uploads/package/'.@$hot_deatls_value['small_size_img']);?>" alt="Tour 1" class="hotdeals_image">
						<div class="top_ribon">
							<span><?php echo $hot_deatls_value['offer'];?></span>
						</div>
						<div class="normal_text">
							<h6><?php echo $hot_deatls_value['title'];?></h6>
						</div>
						<div class="overlay_top">
							<div class="overlay_text">
								<h5><?php echo $hot_deatls_value['title'];?></h5>
								<p><?php echo $hot_deatls_value['duration'];?> Days & <?php echo $hot_deatls_value['duration']-1;?>Night</p>
								<h6><?php echo substr($hot_deatls_value['route'],0,30);?></h6>
								<a href="<?php echo base_url('home/inner_page/'.$hot_deatls_value['id'])?>" target="_blank">Grab Now</a>
							</div>
						</div>
					</div>
					<?php $j++; $z++; }?>


				</div>
			</div>
		</div>
	</div>
</section>

												
												<!--Hot deal part ends here-->												

												<!--Most Popular Tour part starts here-->	
<section class="section_4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 Most_popular_tour_head">
				<h2>Most Popular Tours</h2><hr>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 Most_popular_tour_main">


				<?php  $m=0; $x=1; $m_fade='';
				foreach ($most_populer as $most_populer_value) {
					if ($x==1)
				{
				$m_fade='fade-right';
				}
				if ($x==2)
				{
				$m_fade='fade-left';
				$x=0;
				} 

				?>
				
                 <?php if($m%2==0  and $m!=0){ ?>
                             </div>
                 			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 Most_popular_tour_main">
                 <?php }?>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 popular_tour_details_main" data-aos="<?php echo $m_fade?>">
					<div class="popular_tour_details">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 popular_tour_img">
							<img src="<?php echo base_url('uploads/package/'.@$most_populer_value['small_size_img']);?>">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 popular_tour_text">
							<h5><?php echo $most_populer_value['title']; ?></h5>
							<span>Rs <?php echo $most_populer_value['price']?></span>
							<p><?php echo substr($most_populer_value['details'],0,100); ?>...</p>
							<h6><?php echo $most_populer_value['duration']; ?> Days & <?php echo $most_populer_value['duration']-1; ?> Nights</h6>
							<a href="<?php echo base_url('home/inner_page/'.$most_populer_value['id'])?>" class="explore_tour">Discover</a>
						</div>
					</div>
				</div>
				<?php  $x++; $m++; } ?>


			</div>
		</div>
	</section>
												<!--Most Popular Tour part ends here-->													


												<!--Tour By Destinations part starts here-->												
<section class="section_3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 Famous_trip_head">
				<h2>Popular Tour Categories</h2><hr>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 Famous_trip_main">
				
				<?php foreach ($tour_destination as  $tour_destination_value) {?>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 for_trip_details_main" data-aos="fade-up">
					<div class="for_trip_details">
						<h3><?php echo $tour_destination_value['tour_count'];?><span>Tours</span></h3>
						<img src="<?php echo base_url('uploads/tour_destination/'.$tour_destination_value['image']);?>">
						<h5><?php echo $tour_destination_value['country'];?></h5>
						<p><?php echo substr($tour_destination_value['description'],0,125);?>...</p>
						<a href="<?php echo base_url('home/search_by_country/'.$tour_destination_value['alias']);?>" class="go_to_tour">Read More</a><br><br>
					</div>
				</div>
				<?php } ?>


			</div>
		</div>
	</div>
</section>
												<!--Tour By Destinations part ends here-->												
												

												<!--Popular Tour Categories part starts here-->	
<section class="section_5">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 tour_by_destination_head">
			<h2>Tour By Destination</h2>
			<hr>
		</div>
		
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 tour_by_destination_main">
			<?php $p1=1; $s_cont=count($Popular_tour_categories);  foreach ($Popular_tour_categories as  $Popular_tour_categories_value) {?>
			<div class="mySlides">
				<div class="numbertext"><?php echo $p1." "."/ ".$s_cont ?></div>
				<a href="#"><img src="<?php echo base_url('uploads/slider/Popular_tour_categories/'.$Popular_tour_categories_value['slider_image']);?>"></a>
			</div>

			<?php $p1++; }  ?>
			
			<a class="prev" onclick="plusSlides(-1)">❮</a>
			<a class="next" onclick="plusSlides(1)">❯</a>
			<div class="caption-container">
				<p id="caption"></p>
			</div>

			<div class="row">

				<?php $p=1; foreach ($Popular_tour_categories as  $Popular_tour_categories_value) {?>
				<div class="column">
					<img class="demo cursor" src="<?php echo base_url('uploads/slider/Popular_tour_categories/'.$Popular_tour_categories_value['slider_image']);?>" onclick="currentSlide(<?php echo $i;?>)" alt="<?php echo $Popular_tour_categories_value['tour_title'];?>">
				</div>
				<?php $i++;}  ?>


			</div>
		</div>
	</div>
</section>
												<!--Popular Tour Categories part ends here-->													


												
												<!--Special Offer part starts here-->	
<section class="section_6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 special_offer_head">
				<h2>On Special Offers</h2><hr>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 special_offer_main">
				<div class="col-lg-4 col-md-12 col-sm-12 special_offer_single" data-aos="fade-up" onclick="window.open('https://indiatailormade.com/get-quote/','mywindow');">
					<div class="special_offer_single_part">
						<img src="<?php echo base_url('assets/frontend/images/dis_two.jpg');?>" alt="" title="India">
						<div class="offer_content_left">
							<div class="offer_content_inner_two">
								<div></div>
								<div></div>
							</div>
						</div>
						<h3>Get a <span>20%</span> Discount</h3>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 special_offer_single" data-aos="fade-up" onclick="window.open('https://indiatailormade.com/','mywindow');">
					<div class="special_offer_single_part">
						<img src="<?php echo base_url('assets/frontend/images/dis_one.jpg');?>" alt="" title="India">
						<div class="offer_content_middle">
							<div class="offer_content_inner_one">
								<div></div>
								<div></div>
							</div>
						</div>
						<h3>Get a <span>30%</span> Discount</h3>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 special_offer_single" data-aos="fade-up" onclick="window.open('https://indiatailormade.com/get-quote/','mywindow');">
					<div class="special_offer_single_part">
						<img src="<?php echo base_url('assets/frontend/images/dis_three.jpg');?>" alt="" title="India">
						<div class="offer_content">
							<div class="offer_content_inner">
								<div></div>
								<div></div>
							</div>
						</div>
						<h3>Get a <span>50%</span> Discount</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
			
												<!--Special Offer part ends here-->	


												
												<!--Client Feedback part starts here-->	
<section class="section_7">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 client_head">
		<h2>Our Satisfied Customer Says</h2><hr>
	</div>
	
	<div class="container">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			
			<div class="owl-carousel owl-theme">

				<?php foreach ($satisfied_customer as $satisfied_customer_value) { ?>
				<div class="item aos-init aos-animate" data-aos="fade-left"><iframe width="100%" height="250px" src="<?php echo $satisfied_customer_value['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p>"<?php echo $satisfied_customer_value['comments']; ?>"</p>
					<h4><?php echo $satisfied_customer_value['client_name']; ?></h4>
				</div>
				<?php } ?>


			</div>
		</div>
	</div>
</section>

												
												
<?php $this->load->view('frontend/theme/footer.php');?>										