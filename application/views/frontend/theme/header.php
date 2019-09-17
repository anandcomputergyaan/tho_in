												<!-- header starts here-->

												<!--Navbar-->
<section class="section_1">
	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/frontend/images/THO_LOGO-260.png');?>" class="THo_logo"></a>

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

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2 to_search" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->
</section>