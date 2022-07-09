<!DOCTYPE html>
<html lang="en-US">
<head>
   <title>
        <?php 
          if(isset($title) && !empty($title)){ 
            echo $title;
        } else if(isset($realtravellerDetail[0]->meta_title) && !empty($realtravellerDetail[0]->meta_title)){
            echo $realtravellerDetail[0]->meta_title; 
        } else if(isset($storiesDetail[0]->meta_title) && !empty($storiesDetail[0]->meta_title)){
             echo $storiesDetail[0]->meta_title; 
        } else if(isset($thingstodo[0]->meta_title) && !empty($thingstodo[0]->meta_title)){
             echo $thingstodo[0]->meta_title; 
        }else { 
            echo "Adventourist Website"; 
        }
        ?>
    </title>
    <meta name="description" content="<?php 
         if(isset($descriptions) && !empty($descriptions)){
            echo $descriptions;
        } else if(isset($realtravellerDetail[0]->metaDesc) && !empty($realtravellerDetail[0]->metaDesc)){
            echo $realtravellerDetail[0]->metaDesc; 
        } else if(isset($thingstodo[0]->metaDesc) && !empty($thingstodo[0]->metaDesc)){
             echo $thingstodo[0]->metaDesc; 
        }  else if(isset($storiesDetail[0]->meta_description) && !empty($storiesDetail[0]->meta_description)){
            echo $storiesDetail[0]->meta_description; 
        }  else{ 
            echo "Adventourist Meta Description"; 
        }
        ?>">
    <meta name="keyword" content="<?php
        if(isset($keywords) && !empty($keywords)){
            echo $keywords;
        } else if(isset($realtravellerDetail[0]->metatag) && !empty($realtravellerDetail[0]->metatag)){
            echo $realtravellerDetail[0]->metatag; 
        }  else  if(isset($storiesDetail[0]->meta_tags) && !empty($storiesDetail[0]->meta_tags)){
            echo $storiesDetail[0]->meta_tags; 
        }  else  if(isset($thingstodo[0]->metatag) && !empty($thingstodo[0]->metatag)){
            echo $thingstodo[0]->metatag; 
        }   else { 
            echo "Adventourist Meta Tag"; 
        }
        ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sb-admin.css">
</head>  
<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top box-shadow background-white" id="mainNav">
        <a class="navbar-brand" href="<?php echo base_url('/');?>">
            <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav background-white" id="exampleAccordion">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>home/myprofile">
                        <i class="fa fa-dashboard fa-lg margin-right-5px"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li> 
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>home/bucketlist">
                        <i class="fa fa-bus fa-lg margin-right-5px"></i>
                        <span class="nav-link-text">My Itineraries</span>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>home/bucketlist">
                        <i class="fa fa-bus fa-lg margin-right-5px"></i>
                        <span class="nav-link-text">My Bucket List</span>
                    </a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="margin-right-5px">
                            <img src="<?php echo base_url();?>assets/images/itinerary-builder-icon.png" width="16" alt="Itinerary Builder">
                        </i>
                        <span class="nav-link-text">Itinerary Builder</span>
                    </a>
                </li>   -->             
            </ul> 
            <!-- begin profile -->
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item dropdown">
                    <span class="margin-top-5px d-inline-block text-blue-dark margin-right-15px">
                        <img src="<?php echo base_url();?>assets/images/default-profile.jpg" class="height-30px border-radius-30" alt="">
                        <?php $frontName = $this->session->userdata('frontName');
                            echo $frontName;
                        ?>
                    </span>
                </li> 
                <li class="nav-item">
                    <a class="nav-link text-blue-dark" href="<?php echo base_url()."home/logout";?>">
                        <i class="fa fa-fw fa-sign-out"></i>Logout
                    </a>
                </li>
            </ul><!-- end profile -->
        </div>
    </nav>

     <?php $this->load->view($module."/".$viewFile);?>
    <footer class="sticky-footer text-center text-white">
        <div class="container">
            <div class="text-center">
                <span class="text-light-green"><img src="<?php echo base_url();?>assets/images/logo-symbol.png" alt="Travel Itineraries" width="30"> travel itineraries</span><span class="margin-right-10px margin-left-10px">|</span>&copy; Copyright 2019 by Travel Itineraries.&nbsp;&nbsp;All rights Reserved. 
            </div>
        </div>
    </footer> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/sticky-sidebar.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/.js"></script> 

    <!-- begin tab -->
    <script> 
      /* if in tab mode */
        $("ul.tabs li").click(function() {
          var ulID = $(this).parent('ul').attr('id');
          $("#" + ulID + "_cont .tab_content").hide();
          var activeTab = $(this).attr("rel"); 
          $("#"+activeTab).fadeIn();        
            
          $("#" + ulID + " li").removeClass("active");
          $(this).addClass("active");

          $(".tab_drawer_heading").removeClass("d_active");
          $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
          
        });
    /* if in drawer mode */
        $(".tab_drawer_heading").click(function() {
          var ulID = $(this).parent('div').attr('id');
          $("#" + ulID + " .tab_content").slideUp();
          
          var d_activeTab = $(this).attr("rel"); 
          $("#" + d_activeTab).slideDown();
          
          $("#" + ulID + " .tab_drawer_heading").removeClass("d_active");
          $(this).addClass("d_active");
          
          $("ul.tabs li").removeClass("active");
          $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
        }); 
    </script>
    <!-- end tab -->

</body>

</html>
