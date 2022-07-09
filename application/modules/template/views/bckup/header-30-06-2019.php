<!-- <section id="load-screen"> 
        <div class="looding-in background-white padding-tb-200px z-index-99">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 text-center"> 
                        <div class="loading-page">
                            <div class="counter">
                                <div class="text-center"><img src="<?php //echo base_url();?>assets/images/logo-symbol.png" alt=""></div>
                                <div class="margin-tb-30px padding-8px background-white">
                                    <div class="animation padding-2px background-main-color"></div>
                                </div>
                                <div>loading <span class="num">0%</span></div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>
    </section> -->
     <script type="text/javascript">
        var base_url = "<?php echo base_url()?>";
    </script>
    
    <header class="background-white">
        <div id="fixed-header">
        <div class="background-dark padding-tb-5px topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-sm-block">
                        <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><a href="<?php echo base_url('about-us')?>"><i class="fa fa-info-circle padding-right-5px"></i>About Us</a></li>
                            <li class="list-inline-item  padding-right-10px"><a href="<?php echo base_url('contact-us')?>"><img src="<?php echo base_url();?>assets/images/contact-us-icon.png" class="padding-right-5px" alt="contact us" title="contact us"> Contact Us</a></li>
                            <?php $id = $this->session->userdata('frontid');
                           if(isset($id) && !empty($id)) :
                            ?>
                             <li class="list-inline-item  padding-right-10px"><a href="<?php echo base_url()?>home/myprofile"><i class="fa fa-fw fa-sign-out  padding-right-5px"></i>My Profile</a></li>
                            <li class="list-inline-item  padding-right-10px"><a href="<?php echo base_url()?>home/logout"><i class="fa fa-fw fa-sign-out  padding-right-5px"></i>Logout</a></li>
                            <?php else :?>
                            <li class="list-inline-item dropdown">
                                <a class="dropdown-toggle"  href="javascript:;" data-toggle="modal" data-target="#sign_in" >
                                    <i class="fa fa-user-plus padding-right-5px"></i>Login</a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-up-small" href="javascript:;" data-toggle="modal" data-target="#sign_in_real">Real Traveller Login</a>
    <a class="dropdown-item text-up-small" href="javascript:;" data-toggle="modal" data-target="#sign_in">Sign in</a>
    <a class="dropdown-item text-up-small" href="javascript:;" data-toggle="modal" data-target="#sign_up">Sign up</a>
  </div>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin menu--><div class="header-output background-white box-shadow">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="<?php echo base_url();?>" class="d-inline-block margin-tb-10px"><img src="<?php echo base_url();?>assets/images/logo.png" alt="Travel Itineraries" title="Travel Itineraries"></a>
                        <a class="mobile-toggle"  aria-label="Mobile Toggle"><i class="fa fa-navicon"></i></a>
                    </div>
                    <div class="col-lg-9 position-inherit">
                        <ul id="menu-main" class="nav-menu float-right link-padding-tb-20px">
                            <li <?php if(isset($module) && $module == "itineraries") { ?>class="active" <?php } ?>><a href="<?php echo base_url('itineraries');?>"><img src="<?php echo base_url();?>assets/images/travel-itineraries-icon.png" alt="Travel Itineraries" title="Travel Itineraries"> Travel Itineraries
                                                </a>
                                
                            </li>
                            <li <?php if(isset($module) && $module == "things_to_do") { ?>class="active" <?php } ?>><a href="<?php echo base_url('things-to-do'); ?>"><img src="<?php echo base_url();?>assets/images/things-to-do-icon.png" alt="Things to do" title="Things to do"> Things to do
                                                  </a>
                                 
                            </li>

                            <li <?php if(isset($module) && $module == "stories") { ?>class="active" <?php } ?>><a href="<?php echo base_url('stories');?>"><img src="<?php echo base_url();?>assets/images/travel-stories-icon.png" alt="Stories" title="Stories"> Stories
                                                </a>
                                 
                            </li>   

                            <li <?php if(isset($module) && $module == "traveller") { ?>class="active" <?php } ?>><a href="<?php echo base_url('traveller');?>"><img src="<?php echo base_url();?>assets/images/real-travellers-icon.png" alt="Real Travellers" title="Real Travellers"> Real Travellers
                                                </a>
                            </li>
                            <li><a href="<?php echo base_url('itineraries');?>"><img src="<?php echo base_url();?>assets/images/itinerary-builder-icon.png" alt="Itinerary Builder" title="Itinerary Builder"> Itinerary Builder
                                                </a>
                                
                            </li>
                          
                        </ul>
 
                    </div>
                </div>
            </div>
        </div><!-- End menu-->
        </div><!-- /.header menu-->
    </header> 