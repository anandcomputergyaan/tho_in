												<!-- header starts here-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Total Holiday Options</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Total Holiday Options India">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images-n/THo_fevicon_icon.png'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/inner_styles.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/responsive_styles.css'); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/about_styles.css');?>">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo base_url('assets/frontend/js/jquery-1.11.3.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/frontend/js/jssor.slider-27.5.0.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/frontend/js/gijgo.min.js'); ?>" type="text/javascript"></script>
    <link href="<?php echo base_url('assets/frontend/css/gijgo.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/main_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/search_styles.css'); ?>">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


    
</head>
												<!--Navbar-->
<section class="section_1">
	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="http://thoindia.totalholidayoptions.lk/home"><img src="<?php echo base_url('assets/frontend/images/tho_logo.png');?>" class="THo_logo" alt="LOGO"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('home');?>">Home
              <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('home/about_us');?>">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">World Tours</a>
		  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
        
        <?php foreach ($country as $country_value){ ?> 
        <a class="dropdown-item" href="<?php echo base_url('home/search_by_country/'.$country_value['alias']) ; ?>"><?php echo $country_value['country']; ?></a>
        <?php }?>

        </div>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tour Category</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink2">
          
          <?php foreach ($category as $category_value){ ?>

          <a class="dropdown-item" href="<?php echo base_url('home/search_by_category/'.$category_value['alias']); ?>"><?php echo $category_value['name']; ?></a>

          <?php }?>
          
          </div>  
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('home/contact_us');?>">Contact Us</a>
          </li>
      </ul>
      <!-- Links -->

<form action="<?php echo base_url('search/page');  ?>" method="post"  class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2 to_search" name="search_bar"  type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->
</section>