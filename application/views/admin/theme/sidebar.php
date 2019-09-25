  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/"?>dist/img/admin-with-cogwheels.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user_name'); ?></p>
          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
    <!--     <li class="header">MAIN NAVIGATION</li> -->
        <li class="active treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
          
        </li>

 <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url("admin/category/category_list"); ?>"><i class="fa fa-circle-o"></i> Category List </a></li>
            <li><a href="<?php echo base_url("admin/category")?>"><i class="fa fa-circle-o"></i> Add Category</a></li>
          </ul>
        </li>

 <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Packages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url("/admin/package/package_list")?>"><i class="fa fa-circle-o"></i> Packages List </a></li>
            <li><a href="<?php echo base_url("admin/package")?>"><i class="fa fa-circle-o"></i>Add Packages</a></li>
          </ul>
        </li>

<!--  <li>
         <a href="<?php echo base_url("/admin/special_tour/special_tour_list")?>" >
           <i class="fa fa-circle"></i> <span>Special Tour</span>
         </a>
     
       </li> -->
             <li class="treeview">
                  <a href="#"><i class="fa fa-circle"></i> <span>Home Content</span>

                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/slider/main_slider/slider_list');?>"><i class="fa fa-circle-o"></i> Main Slider</a></li>

                    <li><a href="<?php echo base_url('admin/special_tour/special_tour_edit/1');?>"><i  class="fa fa-circle-o"></i>HOT Deals</a></li>

                    <li><a href="<?php echo base_url('admin/special_tour/special_tour_edit/4');?>"><i  class="fa fa-circle-o"></i>Most Populer Tours</a></li>

                    <li><a href="<?php echo base_url('admin/slider/Popular_tour_categories/slider_list');?>"><i  class="fa fa-circle-o"></i> Populer Tour Categories</a></li>

                    <li><a href="<?php echo base_url('admin/special_tour/special_tour_edit/5');?>"><i  class="fa fa-circle-o"></i>On Special Offers</a></li>

                    <li><a href="<?php echo base_url('admin/tour_by_destinations/tour_destination_list');?>"><i  class="fa fa-circle-o"></i>Tour By Destination</a></li>



                    <li><a href="<?php echo base_url("admin/client_feedback/client_feedback_list")?>"><i class="fa fa-circle-o"></i>Our Satisfield Custommer Says</a></li>

                  </ul>
                
                </li>

        <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Frontend Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url("/Enquiry/enquiry_list")?>"><i class="fa fa-circle-o"></i>Enquiry List </a></li>
            <li><a href="<?php echo base_url("Contact/contact_list")?>"><i class="fa fa-circle-o"></i>Contact List</a></li>
          </ul>
        </li>

        <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Company Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url("/admin/CompanyDetails")?>"><i class="fa fa-circle-o"></i>Add Details</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url("/admin/Facilities/facility_list")?>" >
            <i class="fa fa-circle"></i> <span>Facilities</span>
          </a>
      
        </li>


 <!-- <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
         
            <li><a href="#"><i class="fa fa-circle-o"></i> General Setting</a></li>
            
       
          </ul>
        </li> -->
         <li>
          <a href="<?php echo base_url("/admin/meta_data/meta_data_list")?>" >
            <i class="fa fa-circle"></i> <span>SEO Meta data</span>
          </a>
      
        </li>

                 
<!-- <li class=" treeview">
          <a href="">
            <i class="fa fa-circle"></i> <span>Frontend Forms Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url("enquiry/enquiry_list")?>"><i class="fa fa-circle-o"></i>Price Request List</a></li>
            <li><a href="<?php echo base_url("quotes/quotes_list")?>"><i class="fa fa-circle-o"></i>Quotes list</a></li>
            <li><a href="<?php echo base_url("contact/contact_list")?>"><i class="fa fa-circle-o"></i>Contact list</a></li>
          </ul>
        </li>
 -->




     
      <!--   <li class="header">LABELS</li> -->
     



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

