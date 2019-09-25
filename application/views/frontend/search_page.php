
<body>												<!--search div starts here-->
<section>
	<div class="container" style=" margin-top: 70px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search_head">
				<h1>Search Result For :<span> Golden triangle Tours</span></h1>
			</div>


			<?php $i=0; foreach ($search_data as $search_data_value) { ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search_container">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 search_container_left">
					<div class="search_container_img">
						<img src="<?php echo base_url('uploads/package/'.$search_data_value['search_image']);?>">
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 search_container_right">
					<div class="search_container_text">
						<h3><?php echo $search_data_value['title'];?></h3>
						<div class="day_and_night">
							<div class="no_of_days d-flex">
								<img src="<?php echo base_url('assets/frontend/images/sun.png') ?> ">
								<h4 class="ml-2"><?php echo $search_data_value['duration'];?>Days</h4>
							</div>
							<div class="no_of_nights d-flex">
								<img src="<?php echo base_url('assets/frontend/images/moon1.png') ?>">
								<h4 class="ml-2"><?php echo $search_data_value['duration']-1;?>nights</h4>
							</div>
						</div>
						<div class="tour_location d-flex">
							<img src="<?php echo base_url('assets/frontend/images/world.png') ?>">
							<h4 class="ml-2"><?php echo $search_data_value['route']?></h4>
						</div>
						<div class="tour_descript d-inline-flex">
						    
						<?php  foreach ($facilities[$i] as $facilities_value) { ?>
							<img src="<?php echo base_url('uploads/facility/'.$facilities_value['image_icon']); ?>">
							<h4 class="ml-2 mr-2"><?php echo $facilities_value['name']; ?></h4>
							<?php }?>
							
						</div>
						<div class="tour_btn">
							<a href="<?php echo base_url('home/inner_page/'.$search_data_value['id']);?>">Explore Now</a>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; } ?>


		</div>
	</div>
</section>
	
 <?php $this->load->view('frontend/theme/footer.php');?>	