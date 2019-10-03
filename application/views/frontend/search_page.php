
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/new_search_styles.css')?>">

<body>
<section id="content">
            <div class="container">
                <div id="main">
                    <div class="row add-clearfix image-box style1 tour-locations">
                        
                     <?php $i=0; foreach ($search_data as $search_data_value) { ?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <article class="box">
                                <figure>
                                    <a href="<?php echo base_url('home/inner_page/'.$search_data_value['id']);?>" class="hover-effect">
                                        <img src="<?php echo base_url('uploads/package/'.$search_data_value['search_image']);?>" alt="">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h4 class="box-title"><?php echo $search_data_value['title'];?></h4>
                                    <hr>
                                    <ul class="features check">
										<!--<li><img src="images/sun1.png" class="mr-2">10 Days <span><img src="images/moon.png" class="mr-2">09 Nights</span></li>-->
                                        <li>	<?php  foreach ($facilities[$i] as $facilities_value) { ?>
							
								
										<img src="<?php echo base_url('uploads/facility/'.$facilities_value['image_icon']);?>" title="" >
								
	                            
							
							         	<?php }?>



                                        	<!-- <img src="images/sight-see1.png" class="mr-4" title="Sight Seeing"><img src="images/bell-covering-hot-dish.png" class="mr-4" title="Meal"><img src="images/car-front1.png" class="mr-4" title="Car"><img src="images/guides.png" class="mr-4" title="Tour Guide"><img src="images/wifi.png" class="mr-4" title="Wifi"> -->
                                        </li>
                                         <hr>                                       
                                        <li style=" font-size: 15px;color: #111;"><img src="<?php echo base_url('assets/frontend/images/locate2.png') ?>" title="Tour Route" class="mr-2"><?php echo substr($search_data_value['route'],0,35)?><a tabindex="0" class="btn to_modify_design btn-sm" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="" data-content="<?php echo substr($search_data_value['route'],40,100)?>">+ more</a></li>
                                    </ul>
                                    <hr>
                                    <div class="text-center">
                                        <div class="time">
                                            <img src="<?php echo base_url('assets/frontend/images/clock-circular-outlines.png') ?>" class="mr-1">
                                            <span><?php echo $search_data_value['duration'];?> Days / <?php echo $search_data_value['duration']-1;?> Nights</span>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url('home/inner_page/'.$search_data_value['id']);?>" class="button btn-small full-width">BOOK NOW</a>
                                </div>
                            </article>
                        </div>
                      <?php $i++; } ?>
                       
                    </div>
                </div>
            </div>
        </section>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
$('.popover-dismiss').popover({
  trigger: 'focus'
})
</script>
</body>
</html>

 <?php $this->load->view('frontend/theme/footer.php');?>	