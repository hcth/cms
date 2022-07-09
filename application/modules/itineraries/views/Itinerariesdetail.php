    <?php if(is_array($itinerariesRecs)):
       
     ?>
     
    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4" style="font-size:20px">
               <?php echo $itinerariesRecs[0]->headline;?></h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('itineraries');?>" class="text-grey-4">Explore Destinations and Itineraries</a></li>
                <li class="active text-blue"><?php echo $itinerariesRecs[0]->headline;?></li>
        </ol>
        </div>
    </section>


    <section class="padding-tb-40px">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center"> 
                        <blockquote class="font-3 text-medium">
                            <h2 class="title h5"><span> About the Itinerary </span></h2>
                       <?php echo $itinerariesRecs[0]->about;?>
                    </blockquote>
                    </div>
                </div><!--/.col--> 
            </div><!-- End row--> 
            <div class="row padding-tb-40px">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="box-shadow">
                    <div class="background-light-blue padding-10px">
                        <span class="travel_profile" style="background-color: #fff;">
                            <?php if(!empty($itinerariesRecs[0]->profileImage)) : ?>
                            <img src="<?php echo base_url()?>assets/frontImage/userprofiles/<?php echo $itinerariesRecs[0]->profileImage;?>" alt="">
                            <?php else: ?>
                             <img src="<?php echo base_url()?>assets/images/noimage.png" alt="">    
                            <?php endif; ?>    
                        </span>
                        <span class="itineary_by padding-left-20px">
                            <h3 class="margin-bottom-0px text-extra-large text-dark font-weight-700">Travel Itinerary by</h3>
                            <?php 
                            //echo "<pre>";
                            //print_r($itinerariesRecs);
                            //exit;
                            if(isset($itinerariesRecs[0]->admin_name) && !empty($itinerariesRecs[0]->admin_name)){ ?>
                                 <a target="_blank"><span class="text-large" style="text-transform:uppercase">
                            <?php echo "Team Adventourist "; //$itinerariesRecs[0]->admin_name;?>
                                     </span></a> 
                           <?php  } else {
                            ?>
                            <a href="<?php echo base_url()?>traveller/travellerDetail/<?php echo $itinerariesRecs[0]->url?>" target="_blank"><span class="text-large"><?php echo $itinerariesRecs[0]->name;?></span></a> 
                            <?php } ?>
                        </span> 
                    </div>
                     <ul class="itineraries_list">
                        <li>
                            <i class="fa fa-road itineary_icon"></i>
                            <span class="margin-left-10px font-weight-700">Total Distance:</span>
                            <span class="margin-left-10px"><?php echo $itinerariesRecs[0]->trip_distance;?></span>
                        </li>
                        <li>
                            <i class="itineary_icon"><img src="<?php echo base_url()?>assets/images/start-point.png" alt=""></i>
                            <span class="margin-left-10px font-weight-700">Start Point:</span>
                            <!--<span class="margin-left-10px">  <?php echo modules::run("itineraries/getCityName",$itinerariesRecs[0]->departure);?></span>-->
                            <span class="margin-left-10px">  <?php echo$itinerariesRecs[0]->departure;?></span>
                        </li>

                        <li>
                            <i class="itineary_icon"><img src="<?php echo base_url()?>assets/images/end-point.png" alt=""></i>
                            <span class="margin-left-10px font-weight-700">Destination:</span>
                            <!--<span class="margin-left-10px">  <?php echo modules::run("itineraries/getCityName",$itinerariesRecs[0]->destination);?></span>-->
                            <span class="margin-left-10px">  <?php echo $itinerariesRecs[0]->destination;?></span>
                        </li>
                        <li>
                            <i class="fa fa-sun-o itineary_icon"></i>
                            <span class="margin-left-10px font-weight-700">Best time to Visit:</span><br/>
                            <?php 
                                $monthsVisit = explode(",",$itinerariesRecs[0]->month_to_visit);
                                if(is_Array($monthsVisit)):
                                    foreach($monthsVisit as $vals) {
                            ?>  
                            <span class="margin-left-10px"><a href="#" class="itineraries_tag"><?php echo $vals;?></a></span>
                            <?php } endif; ?>
                        </li>
                        <li>
                            <i class="fa fa-calendar itineary_icon"></i>
                            <span class="margin-left-10px font-weight-700">Stay Days:</span>
                            <span class="margin-left-10px"><?php echo $itinerariesRecs[0]->trip_days;?> Days</span>
                        </li>                        
                        <li>
                            <i class="fa fa-rupee itineary_icon"></i>
                            <span class="margin-left-10px font-weight-700">Total Budget:</span>
                            <span class="margin-left-10px">INR <?php echo $itinerariesRecs[0]->budget;?></span>
                        </li>
                        <li>
                            <i class="fa fa-bus itineary_icon"></i>
                            <span class="margin-left-10px font-weight-700">Mode of Transports:</span>
                            <span class="margin-left-10px">
                                <?php 
                                    
                                    $modes = explode(",",$itinerariesRecs[0]->mode_of_transport);
                                
                                ?>
                                
                                <?php if(in_array("Car",$modes)) { ?>
                                            <i class="fa fa-car text-large" style="margin-right
                                            :10px;"></i>
                                    <?php  }  if(in_array("Public Transport",$modes)){ ?>
                                    <i class="fa fa-taxi text-large" style="margin-right
                                            :10px;"></i>
                                    <?php  }  if(in_array("Train",$modes)){ ?>
                                    <i class="fa fa-train text-large" style="margin-right
                                            :10px;"></i>
                                    <?php  }  if(in_array("Plane",$modes)){ ?>
                                    <i class="fa fa-plane text-large" style="margin-right
                                            :10px;"></i>
                                    <?php  }  if(in_array("Ship",$modes)){ ?>
                                    <i class="fa fa-ship text-large" style="margin-right
                                            :10px;"></i>
                            <?php  }  if(in_array("Bus",$modes)){ ?>
                                    <i class="fa fa-bus text-large" style="margin-right
                                            :10px;"></i>
                        <?php  }  if(in_array("Bicycle",$modes)){ ?>
                                    <i class="fa fa-bicycle text-large" style="margin-right
                                            :10px;"></i>
                                    <?php }  if(in_array("Lift",$modes)){ ?>
                                    <i class="fa  text-large"></i>
                                    <?php }  if(in_array("Motorcycle",$modes)){ ?>
                                    <i class="fa fa-motorcycle text-large" style="margin-right
                                            :10px;"></i>
                                    <?php }  ?>
                                    
                                    
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-map itineary_icon margin-bottom-10px"></i>
                            <span class="margin-left-10px font-weight-700">Destination Category:</span><br/>
                            <?php $cat = explode(",", $itinerariesRecs[0]->category);
                                if(is_array($cat)):
                                foreach ($cat as $value) { 
                            ?>
                            <a href="#" class="itineraries_tag">
                                <?php echo $value;?></a>
                            <?php } endif; ?>
                        </li>
                        <li>
                            <i class="itineary_icon"><img src="<?php echo base_url()?>assets/images/destination-type.png" alt="Destination Type"></i>
                            <span class="margin-left-10px font-weight-700">Destination Type:</span><br/>
                           <?php $cat = explode(",", $itinerariesRecs[0]->type);
                                if(is_array($cat)):
                                foreach ($cat as $value) { 
                            ?>
                            <a href="#" class="itineraries_tag">
                                <?php echo $value;?></a>
                            <?php } endif; ?>
                           
                        </li>

                    </ul> 
                </div><!--/.shadow--> 
                </div><!--/.col-->
                <div class="col-lg-8 col-sm-12 col-md-6">                      
                   <div id="gallery" class="margin-bottom-30px" style="display:none;">
                    <?php $mediaUpload = modules::run("itineraries/getItinerariesMedia",$itinerariesRecs[0]->itiid);
                            if(is_array($mediaUpload)):
                                foreach ($mediaUpload as $value) {
                                    if($value->upload_type == "image"):
                                
                    ?>
                        <img alt="Preview Image 1"
                             src="<?php echo base_url()?>uploads/<?php echo $value->created_by?>/itineraries/<?php echo $value->filename;?>"
                             <!-- data-image="<?php echo base_url()?>uploads/<?php echo $value->created_by?>/itineraries/<?php echo $value->filename;?>"> -->
                             <?php else: 
                                $video = explode("/",$value->filename);
                                if(is_array($video) && !empty($video[3])):
                                ?>
                        <img alt="Youtube Video"
                             data-type="youtube"
                             data-videoid="<?php echo $video[3]; ?>"
                             data-description="You can include youtube videos easily!">
                             <?php  endif; endif; } endif; ?>
                    </div><!--/.gallery-->  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="summary_container">
                                <div class="table_cell share_button">
                                    <a href="javascript:;">
                                         <i class="fa fa-share-alt"></i> 
                                         <span class="d-block">Share</span> 
                                     </a>
                                        
                                  <div class="share_container" id="share1">
                                         <div class="addthis_inline_share_toolbox_5ga7"></div> 
                                        </div><!--/. End share container -->
                                 </div> 
                                 <div class="table_cell"> 
                                    <?php $id = $this->session->userdata('frontid');
                                        if(!empty($id)):
                                            $favStories = modules::run('itineraries/getBucketList',$itinerariesRecs[0]->itiid,$id,1);
                                            if(is_array($favStories) && $favStories[0]->bucketStatus == 0 || $favStories =="no") {
                                    ?>
                                     <a href="javascript:;" id="<?php echo $itinerariesRecs[0]->itiid;?>" class="bucketLists add_in_bucket" alt="like">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">Add to bucket List</span>
                                     </a>
                                      <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $itinerariesRecs[0]->itiid;?>"  alt="dislike" style="display:none">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">In bucket</span>
                                     </a>
                                     <?php } else { ?>
                                      <a href="javascript:;" id="<?php echo $itinerariesRecs[0]->itiid;?>" class="bucketLists add_in_bucket" alt="like" style="display:none">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">Add to bucket List</span>
                                     </a>
                                     <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $itinerariesRecs[0]->itiid;?>"  alt="dislike">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">In bucket</span>
                                     </a>
                                     <?php } ?>
                                     <?php else : ?>
                                      <a href="javascript:;" id="loginclass">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">Add to bucket List</span>
                                     </a>
                                     <?php endif; ?>
                                </div>
                                <div class="table_cell">
                                 <a href="#" class="views" data-toggle="tooltip" data-placement="top" title=" <?php if(isset($itinerariesRecs[0]->views)){ echo $itinerariesRecs[0]->views; } ?> people have seen this itinerary">
                                     <span><?php if(isset($itinerariesRecs[0]->views)){ echo $itinerariesRecs[0]->views; } ?></span>
                                     <span class="d-block">Views</span>  
                                 </a> 
                             </div>
                             <div class="table_cell">
                                  <a href="javascript:;" data-toggle="modal" data-target=".packaging_checklist">
                                     <i class="fa fa-suitcase"></i> 
                                     <span class="d-block">Things to Pack</span>
                                 </a> 
                                 </div>
                                 <div class="table_cell">  
                                <a href="javascript:;" data-toggle="modal" data-target=".ask_travel_expert">
                                    <i><img src="<?php echo base_url()?>assets/images/enquiry.png" alt="Enquire about this Itinerary"></i>
                                    <span class="d-block">Ask a Travel Expert</span>
                                 </a>
                                 </div>  
                            </div><!--/. end summary container-->
                        </div>
                    </div>
                </div><!--/.col-->
            </div><!-- End row-->  
        </div>
    </div>  
</section> 
<section class="padding-tb-40px background-grey-1">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="text-medium background-white padding-30px">
                     <div class="section-title section-title-center margin-bottom-20px">
                        <h3 class="title h4"><img src="<?php echo base_url()?>assets/images/important-things-icon.png" alt="Important things you should know"><span> Important things you should know </span></h3>
                    </div>
                    <?php echo $itinerariesRecs[0]->imp_things;?>
                </div>
            </div>
        </div><!-- End row-->
    </div>
</section>

  <?php $itiDetails = modules::run("itineraries/getItinerariesDetails",$itinerariesRecs[0]->itiid);
                            if(is_array($itiDetails)):  
?>
<section class="padding-tb-40px background-white">
    <div class="container">
        <div class="row">  
            <div class="col-lg-12">
                <div class="section-title section-title-center margin-bottom-20px">
                    <h3 class="title h4"><img src="<?php echo base_url()?>assets/images/day-wise-itinerary.png" alt="Day wise itinerary"><span> Day wise itinerary </span></h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="vertical_tab">
                <!-- Nav tabs --> 
                    <ul class="tabs col-lg-3" id="test2">
                           <?php if(is_array($itiDetails)) : 
                            $i=1;
                                foreach($itiDetails as $details) { 
                            ?> 
                        <li <?php if($i==1){ echo "class='active'"; } ?> rel="day<?php echo $i;?>" class="itit"> 
                            <span class="d-block font-weight-700 text-extra-large margin-bottom-5px">Day <?php echo $i;?></span>
                            <span class="d-block font-weight-700"><?php echo $details->from_city;?> to <?php echo $details->to_city;?></span> 
                        </li>
                        <?php $i++; } endif; ?>

                    </ul>
                    <!-- Tab panes -->
                    <div  class="tab_container col-lg-9" id="test2_cont">
                         <?php if(is_array($itiDetails)) : 
                            $i=1;
                                foreach($itiDetails as $details) { 
                            ?> 
                        <h3 class="d_active tab_drawer_heading" rel="day<?php echo $i;?>">Day <?php echo $i;?></h3>
                        <article id="day<?php echo $i;?>" class="tab_content" <?php if($i == 1):?>style="display: block;" <?php else: ?>style="display: none;"<?php endif; ?>>
                            <div class="row text-center"> 
                                <div class="col-lg-4 col-sm-4">
                                    <span class="margin-right-5px font-weight-700 text-dark">Mode of Transport:</span>
                                    
                                    <?php if($details->mode_of_transport == "Car") { ?>
                                            <i class="fa fa-car text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Public Transport"){ ?>
                                    <i class="fa fa-taxi text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Train"){ ?>
                                    <i class="fa fa-train text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Plane"){ ?>
                                    <i class="fa fa-plane text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Ship"){ ?>
                                    <i class="fa fa-ship text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Bus"){ ?>
                                    <i class="fa fa-bus text-large"></i>
                                    <?php  } else if($details->mode_of_transport == "Bicycle"){ ?>
                                    <i class="fa fa-bicycle text-large"></i>
                                    <?php } else if($details->mode_of_transport == "Lift" ){ ?>
                                    <i class="fa  text-large"></i>
                                    <?php } else if($details->mode_of_transport == "Motorcycle" ){ ?>
                                    <i class="fa fa-motorcycle text-large"></i>
                                    <?php } else  { ?>
                                    <i class="fa  text-large"></i>
                                    <?php } ?>
                                    <?php echo $details->mode_of_transport;?>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <span class="margin-right-5px font-weight-700 text-dark">Travel Distance:</span>
                                    <span><?php echo $details->distance;?> Km</span>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <span class="margin-right-5px font-weight-700 text-dark">Travel Time:</span>
                                    <span><?php 
                                        if(!empty($details->travel_time)){
                                            $time  = explode("-",$details->travel_time);    
                                            echo @$time[0]." Hours";
                                            if(isset($time[1]) && !empty($time[1])):
                                                echo ", ".@$time[1]." Min";    
                                            endif;    
                                        }
                                    ?></span>
                                </div> 
                            </div><!--/.row-->
                            <div class="row padding-top-30px">
                                <div class="col-sm-12">
                                    <div class="clearfix">
                                        <p class="itineary_details">
                                            <i class="fa fa-info-circle margin-right-10px"></i>
                                            <span class="font-weight-700 text-extra-large">Details</span></p>
                                            <?php echo $details->details;?>
                                     
                                    </div><!--/.clearfix-->

                                    <div class="clearfix margin-top-20px">
                                        <p class="itineary_details">
                                            <i class="fa fa-bed margin-right-10px"></i>
                                            <span class="font-weight-700 text-extra-large">Stay</span></p>
                                        <ol class="padding-left-15px" style="list-style: none !important;">
                                            <li><?php echo $details->stay;?></li>
                                         </ol>
                                    </div><!--/.clearfix-->

                                    <div class="clearfix margin-top-20px">
                                        <p class="itineary_details">
                                            <i class="fa fa-bed margin-right-10px"></i>
                                            <span class="font-weight-700 text-extra-large">Food</span></p>
                                        <ol class="padding-left-15px" style="list-style: none !important;">
                                            <li><?php echo $details->food;?></li>
                                         </ol>
                                    </div><!--/.clearfix-->

                                    <div class="clearfix margin-top-20px">
                                        <p class="itineary_details">
                                            <i class="fa fa-tasks margin-right-10px"></i>
                                            <span class="font-weight-700 text-extra-large">Things to do</span></p>
                                        <ol class="padding-left-15px" style="list-style: none !important;">
                                            <li><?php echo $details->things_to_do;?></li>
                                         </ol>
                                    </div><!--/.clearfix-->

                                </div>
                                <div class="col-lg-7">
                                    <!--<iframe src="https://www.google.com/maps/d/embed?mid=1YGbEQ1cPkd3TSnTEbv6S9ENatDI&hl=en_US" width="100%" height="420"></iframe>-->
                                </div>
                            </div><!--/.row-->
                        </article><!--/.tab-->
                         <?php $i++; } endif; ?>
                    </div> 
                <!-- // Nav tabs --> 
            </div><!-- // vertical tab --> 
            </div><!-- // col --> 
        </div><!--/.row-->
        <div class="row padding-top-50px">
            <div class="col-lg-4 col-sm-4 text-center margin-bottom-15px">
                <div class="box-shadow-2 padding-15px">
                    <h4 class="h6">Share This Itinerary</h4>
                    <p class="d-block text-medium">Let your Friend and family know you want to plan a trip to <?php echo modules::run("itineraries/getCityName",$itinerariesRecs[0]->destination);?></p>
                    <div class="share_button">
                     <div class="table_cell share_button">
                                    <a href="javascript:;">
                                         <i class="fa fa-share-alt"></i> 
                                         <span class="d-block">Share</span> 
                                     </a>
                                        
                                  <div class="share_container" id="share1">
                                         <div class="addthis_inline_share_toolbox_5ga7"></div> 
                                        </div><!--/. End share container -->
                                 </div>
                    <!--<div class="share_container share_container_position">
                         <a href="whatsapp://send" data-text="Travel Itinearies" data-href="http://www.travelitineraries.in/itinerary">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=[Travel&nbsp;Itineraries]&amp;p[summary]=[SUMMARY_GOES_HERE]&amp;p[url]=[http://www.travelitineraries.in/itinerary]&amp;p[images[0]=[IMAGE_GOES_HERE]" onclick="window.open(this.href, 'facebookwindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                            <a href="http://twitter.com/intent/tweet?text=[Travel&nbsp;Itineraries]" onclick="window.open(this.href, 'twitterwindow','left=20,top=20,width=700,height=300,toolbar=0,resizable=1'); return false;">
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://plus.google.com/share?url=[http://www.travelitineraries.in/itinerary]" onclick="window.open(this.href, 'googlepluswindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                            </a>
                            <a href="http://www.linkedin.com/shareArticle?url=[http://www.travelitineraries.in/itinerary]&title=[Travel&nbsp;Itineraries]" onclick="window.open(this.href, 'linkedinwindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div><!--/. End share container -->
                        
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b99785dbe32fdd4"></script>

                    </div><!-- // share button --> 
                </div>
            </div><!-- // col --> 
            <div class="col-lg-4 col-sm-4 text-center margin-bottom-15px">
                <div class="box-shadow-2 padding-15px">
                    <h4 class="h6">Ask Travel Expert</h4>
                    <p class="d-block text-medium">Speak with a Travel Expert to know more about <?php echo modules::run("itineraries/getCityName",$itinerariesRecs[0]->destination);?> itinerary</p>
                    <a href="javascript:;" class="btn btn-info text-medium" data-toggle="modal" data-target=".ask_travel_expert">Connect Now</a>
                </div>
            </div><!-- // col -->
            <div class="col-lg-4 col-sm-4 text-center margin-bottom-15px">
                <div class="box-shadow-2 padding-15px">
                    <h4 class="h6">Explore More</h4>
                    <p class="d-block text-medium">Read things to do and activities you can do around <?php echo modules::run("itineraries/getCityName",$itinerariesRecs[0]->destination);?></p>
                    <a href="<?php echo base_url('things-to-do')?>" target="_blank" class="btn btn-primary text-medium">Read Now</a>
                </div>
            </div><!-- // col -->
        </div><!--/.row-->
    </div>
</section>  
<?php endif; ?>
<section class="ptb-lg-70 background-grey-1">
        <div class="container">
            <div class="row margin-bottom-20px custom_col">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url()?>assets/images/travel-itineraries-icon.png" alt="Similar Itineraries"><span> Similar Itineraries </span></h3>
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
                            if($vals->id != $itinerariesRecs[0]->itiid):
                              
                ?>
                <!-- Begin item -->
                <div>  
                       <?php if(!empty($vals->listthumbnail)):?>
                                                     <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="d-block"><img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $vals->listthumbnail;?>" alt="" style="width:100%"></a> 
                                        <?php 
                                        else: ?>
                                            <a href="<?php echo base_url('itineraries/detail/'.$vals->url);?>" class="d-block"><img src="<?php echo base_url();?>uploads/noimages.png" alt="" style="width:100%"></a>      
                                        <?php endif; ?>
                        <!-- tourism body -->
                        <div class="showmore">
                            <a href="#" class="d-block text-medium text-white padding-tb-5px"><?php echo $vals->headline;?></a>
                                    <span class="text-white margin-right-10px"><?php echo $vals->trip_days;?> Days</span> 
                                   <span class="text-white">
                                        <i class="fa fa-map-marker margin-right-5px"></i>
                                       <?php echo $vals->departure;?>
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
            <?php endif; } endif;?>
                 <!-- End item -->  
            </div> 
        </div>
    </section>


    <section class="ptb-lg-70">
        <div class="container">
           <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url()?>assets/images/travel-stories-icon.png" alt="Travel Stories"><span> Travel Stories </span></h3>
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
                    <a href="<?php echo base_url()?>story/<?php echo $vals->meta_url;?>" class="d-block shadow1 background-white margin-bottom-15px">
                      <?php if(empty($vals->storiesImage)) { ?>
                        <img src="<?php echo base_url();?>uploads/nostories.png" alt="">  
                        <?php }  else { ?>
                        <img src="<?php echo base_url();?>assets/frontImage/stories/<?php echo $vals->storiesImage;?>" alt="">  
                        <?php } ?>
                        
                        <div class="padding-15px">
                            <span class="d-block text-capitalize text-medium text-dark font-weight-700"><?php echo $vals->story_head;?></span> 
                            <span class="text-dark">Story By-</span> 
                            <span class="font-weight-700 text-blue"><?php $storyName =  modules::run('itineraries/getTravellerName',$vals->real_traveller);
                                if($storyName == "no"){
                                    echo "Team Adventourist";
                                } else {
                                    echo $storyName;
                                }
                                
                            ?></span> 
                        </div> 
                    </a> 
                </div>
                <!-- end item -->
               <?php } endif;?>
            </div> 
        </div>
    </section>
    <?php else: ?>
        <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <h2>Oops! No Detail Found!</h2>
    </section>
    <?php endif; ?>
    
    