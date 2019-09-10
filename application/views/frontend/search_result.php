<?php $this->load->library('pagination'); ?>												
<section class="section_search">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search_page_heading">
				<h1>Search Result: <?php echo $str;?></h1>
			</div>


<?php 
if(empty($result)){ ?>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<h2> Sorry No Result Found ! ! !</h2>					
			</div>

 
<?php }
else{

foreach ($result as $value) { ?>


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search_page_main">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 search_page_left">
					<img src="<?php echo base_url('uploads/package/'.$value["search_image"]); ?>">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 search_page_right">
					<div class="search_page_text">
						<h4><?php echo $value['title'] ;?></h4>
						<h5><i class="fa fa-map-marker"> </i> <?php echo $value['route']?> </h5>
						<p> <?php echo substr($value['details'],0,150);?>...</p>
						<a href="<?php echo base_url($value['cat_alias']."/".$value['alias']);?>"> View This Tour </a>
					</div>
					
				</div>	
			</div>




<?php } } ?>
		


	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 for_pagination ">
	 	<ul class="pagination justify-content-center">
						  <?php echo $links ;?> 

						  <!-- <ul class="pagination justify-content-center">
							<li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
							<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li> -->
						  </ul>
					</div>
			 	</div>
	</div>
</section>
												<!-- search page part ends here-->

<?php $this->load->view('frontend/theme/footer.php');?>