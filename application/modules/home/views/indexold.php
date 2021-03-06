  <!-- Begin search -->
            <div class="header-search-output ptb-lg-120">
                <div class="container">
                    <div class="row justify-content-md-center margin-bottom-15px">
                        <div class="col-lg-9 text-center">
                            <div class="margin-bottom-40px">
                                <h1 class="font-weight-700 text-white h2 margin-bottom-15px">Road Trips | Travel Itineraries | Things to do</h1>
                                <h2 class="text-white text-extra-large">Get Itineraries, Travel Stories and Things to do written Real Avid Travellers</h2>
                            </div>
                            <!--  search  -->
                            <div class="input-group input-group-lg margin-top-30px">
                                <input type="text" class="form-control" placeholder="Search for Itineraries and Things to do, stories " aria-label="Text input with dropdown button" id="mainsearch">                                 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary border-0 " type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            
                            <div class="col-lg-12" style="display:none" id="searchmainsearchBox">
						        <div class="dropbox priyanka">
					            	<div class="dropbox_area" id="mainsearchresultappend">
							            
					            	</div>
                                </div>
				        	</div>
                            <!-- // search  -->
                        </div>
                        <!-- // col-lg-6 -->
                    </div><!--// row--> 
                </div> 
            </div>
        <!-- end search -->
    <section class="ptb-lg-70">
        <div class="container">
            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/travel-itineraries-icon.png" alt="Trending Itineraries"><span> Trending Itineraries </span></h3>
                </div>
                <div class="col-lg-1 col-sm-1 text-center">
                    <a href="<?php echo base_url('itineraries');?>" class="btn btn-success btn-sm">Explore</a>
                </div>
            </div>

            <div class="travelers-say-3 margin-0px padding-0px list-unstyled" data-slider-id="1">

                 <?php 
                    $itinerariesRecords = modules::run('itineraries/getitinerairesSimilar');
                    if(is_array($itinerariesRecords)):
                        foreach($itinerariesRecords as $vals){
                ?>
                <!-- Begin item -->
                <div>  
                    <?php if(!empty($vals->listthumbnail)):?>
                                                     <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="d-block"><img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $vals->listthumbnail;?>" alt=""></a> 
                                        <?php 
                                        else: ?>
                                            <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="d-block"><img src="<?php echo base_url();?>uploads/noimages.png" alt=""></a>      
                                        <?php endif; ?>
                        <!-- tourism body -->
                        <div class="showmore">
                            <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="d-block text-medium text-white padding-tb-5px"><?php echo $vals->headline;?></a>
                                    <span class="text-white margin-right-10px"><?php echo $vals->trip_days;?> Days</span> 
                                   <span class="text-white">
                                        <i class="fa fa-map-marker margin-right-5px"></i>
                                       <?php echo modules::run("itineraries/getCityName",$vals->departure);?>
                                    </span> 
                                <div class="padding-tb-5px">
                                    <a class="text-white views margin-right-10px text-up-small" href="javascript:;">
                                        <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $vals->views;?> </a>
                                    <a class="text-white favourite text-up-small" href="javascript:;">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </div> 
                                <div class="margin-top-10px">
                                    <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="btn btn-primary btn-xs">Explore this Itinerary</a>
                                </div>
                        </div> 
                        <!-- tourism body --> 
                </div>
            <?php  } endif;?>
                 <!-- End item -->  
               
            </div> 
        </div>
    </section>



   <section class="ptb-lg-70 background-grey-1">
        <div class="container">

            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/travel-stories-icon.png" alt="Travel Stories"><span> Travel Stories </span></h3>
                </div>
                <div class="col-lg-1 col-sm-1 text-center">
                    <a href="<?php echo base_url('stories');?>" class="btn btn-success btn-sm">Explore</a>
                    
                </div>
            </div>  
            <div class="row">
                <?php 
                    if(is_array($stories)):
                        foreach($stories as $vals) {
                ?>
                <!-- begin item -->
                <div class="col-lg-3 col-sm-6 mt-sm-20"> 
                    <a href="<?php echo base_url()?>stories/detail/<?php echo $vals->meta_url;?>" class="d-block shadow1 background-white margin-bottom-15px">
                      <?php if(empty($vals->storiesImage)) { ?>
                        <img src="<?php echo base_url();?>uploads/nostories.png" alt="">  
                        <?php }  else { ?>
                        <img src="<?php echo base_url();?>assets/frontImage/stories/<?php echo $vals->storiesImage;?>" alt="">  
                        <?php } ?>
                        
                        <div class="padding-15px">
                            <span class="d-block text-capitalize text-medium text-dark font-weight-700"><?php echo $vals->story_head;?></span> 
                            <span class="text-dark">Story By-</span> 
                            <span class="font-weight-700 text-blue"><?php echo modules::run('itineraries/getTravellerName',$vals->real_traveller)?></span> 
                        </div> 
                    </a> 
                </div>
                <!-- end item -->
               <?php } endif;?>
            </div> 
        </div>
    </section>

   <section class="ptb-lg-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sm-mb-30px">
                    <div class="section-title-in text-left">
                        <h3><img src="<?php echo base_url();?>assets/images/things-to-do-icon.png" alt="Explorer Things to do">&nbsp;Explorer <span class="text-blue font-weight-700">Things to do</span></h3>
                        <p class="text-up-small margin-top-8px">Get things to do populated by real travellers, the list keeps updating as and when any of our real traveller discovers new experiences. A Must read before you visit any destination</p>
                        <a href="<?php echo base_url('things_to_do');?>" class="btn btn-success btn-sm">Explore</a>
                    </div>
                </div>
                <?php if(is_array($thingstodo)) :
                            foreach($thingstodo as $vals) { 
                                
                        ?>
                <div class="col-lg-3 col-sm-6"> 
                            <div class="background-white shadow things-to-do-col margin-bottom-15px">  
                                <a href="<?php echo base_url()?>things_to_do/detail/<?php echo $vals->url;?>" class="d-block">
                                    <?php if($vals->profileImage){ ?>
                                      <img src="<?php echo base_url()?>/assets/frontImage/thingstodothumb/<?php echo $vals->profileImage;?>" alt="">
                                    <?php  } else {  ?>
                                    <img src="<?php echo base_url()?>uploads/nothingstodo.png" alt="">
                                    <?php } ?>
                                    
                                    </a> 
                                <!-- tourism body -->
                                <div class="padding-15px show-things-to-do">
                                    <a href="<?php echo base_url()?>things_to_do/detail/<?php echo $vals->url;?>" class="d-block text-medium text-white font-weight-700 padding-tb-5px"><?php echo $vals->articleHeadline;?></a>
                                    <small class="text-small padding-tb-5px">
                                            <a href="#" class="text-white">
                                            <i class="fa fa-map-marker"></i>
                                            <span><?php echo modules::run('itineraries/getCityName',$vals->articleplace);?></span></a>
                                        </small> 
                                        <div class="padding-tb-5px">
                                            <a class="text-white views margin-right-10px text-up-small" href="javascript:;">
                                                <i class="fa fa-eye" aria-hidden="true"></i><?php echo $vals->viewcount;?></a>
                                            <a class="text-white favourite text-up-small margin-right-10px" href="javascript:;">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
                                            <a class="text-white share text-up-small" href="javascript:;">
                                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            </a>
                                            <div class="margin-top-10px">
                                            <a href="<?php echo base_url()?>things_to_do/detail/<?php echo $vals->url;?>" class="btn btn-primary btn-xs">Explorer</a>
                                            </div>
                                        </div>  
                                </div> 
                                <!-- tourism body -->  
                                </div> 
                            </div><!--/.col-->
                
                 <?php  } endif; ?>

            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>


    <?php if(isset($realTraveler) && is_array($realTraveler) && !empty($realTraveler)):?>
     <section class="ptb-lg-70 background-grey-1">
        <div class="container">
            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/real-travellers-icon.png" alt="Real Travellers"><span> Real Travellers </span></h3>
                </div> 
            </div>  
            <div class="row">
                <!-- begin item -->
                <?php foreach($realTraveler as $real){ 
                   if($real->id != 1){
                ?>
                <a href="<?php echo base_url('traveller/travellerDetail/'.$real->url);?>">
                <div class="col-lg-3 col-sm-6 mt-sm-20">
                    <div class="background-white shadow1"> 
                    <div class="real-traveller-thumb"> 
                    	<?php if(!empty($real->profileImage)):?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/<?php echo $real->profileImage;?>" alt=""> 
                        <?php else: ?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles//noimage.png" alt=""> 	
                        <?php endif;?>	
                        </div> 
                        <div class="padding-15px">
                            <p class="margin-bottom-0px text-medium text-dark font-weight-700"><?php echo $real->name?></p>
                            <p class="margin-bottom-0px">
                              <i class="text-grey-2"><?php echo $real->profession?></i>
                            </p> 
                            <p style="min-height:45px;"><?php $counts = strlen($real->bio); echo substr($real->bio,0,65); if($counts > 65){ echo "...";}?></p>  
                            <a href="<?php echo base_url('traveller/travellerDetail/'.$real->url);?>" class="btn btn-success btn-xs">More</a>
                        </div> 
                    </div>
                </div>
                </a>
            <?php } } ?>
                <!-- end item --> 
            </div> 
        </div>
    </section>
    <?php endif; ?>

    <section class="text-grey background-overlay background-img-dark ptb-lg-70" style="background-image: url('<?php echo base_url();?>assets/images/card-count-bg.jpg');">
            <div class="container text-white z-index-2 position-relative text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="count margin-bottom-15px">
                            <h4 class="number text_70 margin-bottom-10px"><?php echo modules::run('home/getTotalCount',"ti_itineraries");?></h4>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/travel-itineraries-icon-white.png" alt="Travel Itineraries"></div>
                            <h6 class="margin-top-10px title">Travel Itineraries</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="count margin-bottom-15px">
                            <h1 class="number text_70 margin-bottom-10px"><?php echo modules::run('home/getTotalCount',"ti_stories");?></h1>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/travel-stories-icon-white.png" alt="Travel Stories"></div>
                            <h6 class="margin-top-10px title">Travel Stories</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="count margin-bottom-15px">
                            <h1 class="number text_70 margin-bottom-10px"><?php echo modules::run('home/getTotalCount',"thingstodo");?></h1>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/things-to-do-icon-white.png" alt="Things to do"></div>
                            <h6 class="margin-top-10px title">Things to do</h6>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
         <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <form id="submitProfilesss">
                <div class="row background-white padding-15px"> 
                    <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Submit your Travel Profile </span></h3>
                         <div class="text-medium margin-top-20px margin-bottom-20px">Become a real traveller and get your itineraries and stories featured here</div>
                    </div> 
                    
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="text" class="form-control" placeholder="Name*" name="username">
                    </div>
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="email" class="form-control" placeholder="Email*" name="email">
                    </div> 
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="tel" class="form-control" placeholder="Mobile*" name="mobile">
                    </div>
                    <div class="col-md-12 margin-bottom-10px">
                        <textarea class="form-control" rows="3" placeholder="Write about how travelled are you?" name="desc"></textarea>
                    </div> 
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary btn-block btn-lg h6" id="submitpro">Submit</button>
                    </div> 
                    
                    <div class="col-sm-12">
                        <div class="alert alert-danger margin-top-10px footertravelerror" style="display:none">
                            <strong>Failure!</strong> Please enter valid details.
                        </div>
                        <div class="alert alert-success margin-top-10px footertravelsuccess" style="display:none">
                             <strong>Success!</strong> Thank you, we will review your profile and get back to you soon.

                         </div>
                    </div> 
                </div><!-- // row-->
                </form>
            </div>
        </section>
         <section class="ptb-lg-70">
            <div class="container">
                 <div class="row margin-bottom-20px">
                    <div class="section-title section-title-center col-lg-12">
                        <h3 class="title h4"><span> Connect with us </span></h3>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 social-icon-box text-center">
                        <a href="https://www.instagram.com/adventourist.in/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/adventourist.in/" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/adventourist_in" target="_blank">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://plus.google.com/u/0/114642601326030302421" target="_blank">
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                        </a>
                        <!--<a href="#" target="_blank">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>-->
                    </div>
                </div>
            </div>
        </section>