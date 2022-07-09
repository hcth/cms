 <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                <?php echo @$realtravellerDetail[0]->name;?></h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('traveller');?>" class="text-grey-4">Real Travellers</a></li>
                <li class="active text-blue"><?php echo @$realtravellerDetail[0]->name;?></li>
        </ol>
        </div>
    </section>
     <section class="padding-tb-40px">
        <div class="container">
            <div class="row"> 
                <!-- sidebar -->
                <aside class="col-lg-4 col-md-4 sticky-sidebar">  
                    <?php if(isset($realtravellerDetail) && is_array($realtravellerDetail)):

                    ?>
                    <div class="widget box-shadow border_radius_15"> 
                        <figure>
                             <?php if(!empty($realtravellerDetail[0]->profileImage)):?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/<?php echo $realtravellerDetail[0]->profileImage;?>" alt="<?php echo $realtravellerDetail[0]->name;?>"> 
                        <?php else: ?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/noimage.png" alt="<?php echo $realtravellerDetail[0]->name;?>">     
                        <?php endif;?>
                        </figure>
                        <div class="itineary_by padding-15px">
                            <!-- <h3 class="margin-bottom-0px text-extra-large text-dark font-weight-700">Real Traveller</h3> -->
                            <p class="margin-bottom-0px text-large text-black prata"><?php echo $realtravellerDetail[0]->name;?></p> 
                            <p class="margin-bottom-5px text-grey-2">
                              <?php echo $realtravellerDetail[0]->profession;?>
                            </p> 
                            <p class="margin-bottom-5px"><span class="text-dark margin-right-5px">Bio:-</span><?php echo $realtravellerDetail[0]->bio;?></p>
                            <p>
                                <span class="text-dark margin-right-5px">Places Travelled:-</span>
                                <span class="font-weight-700">
                                    <?php $cityrec =  modules::run('itineraries/getCityName', $realtravellerDetail[0]->travelplace);

                                        if($cityrec != '-'){
                                           $cityrecArray = explode(",",$cityrec);
                                        } else {
                                            $cityrecArray = "";
                                        }
                                    ?>
                                    <?php if(is_array($cityrecArray)){
                                        foreach($cityrecArray as $vals){
                                        ?>
                                    <span class="text-blue margin-right-8px"><?php echo $vals;?></span>
                                    <?php } }?>
                                </span>
                            </p>
                        </div>  
                    </div>  
                <?php endif; ?>
                </aside> 

                <!--  content -->
                <div class="col-lg-8 col-md-8 sticky-content">
                        <?php 
                        if(isset($finalarray) && is_Array($finalarray)) { 
                            foreach($finalarray as $rec) {
                            if($rec->type=='itenaries')
                            {
                        ?>
                    <!-- post -->
                    <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                       
                        <div class="img-ins"> <?php if(!empty($rec->listthumbnail)):?>
                            <a href="<?php echo base_url('itinerary/'.$rec->url);?>" class="d-block"><img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $rec->listthumbnail;?>" alt=""></a> 
                                        <?php 
                                        else: ?>
                                            <a href="#" class="d-block"><img src="<?php echo base_url();?>uploads/noimages.png" alt=""></a>      
                                        <?php endif; ?>
                                    </div>
                        <div class="padding-30px">
                            <a href="<?php echo base_url('itinerary/'.$rec->url);?>"><span class="d-block text-capitalize text-large text-dark font-weight-700 margin-bottom-10px"><?php echo $rec->headline;?> </span>
                            <!--<div class="d-block text-up-small text-grey-4 margin-bottom-15px">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar accumsan</div>-->
                            <div class="meta"> 
                                 <span class="margin-right-10px text-small">Stay Days :  <span class="text-blue"><?php echo $rec->trip_days;?> Days</span></span>
                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue"> <?php echo modules::run("itineraries/getCityName",$rec->departure);?></span></span>
                                <span class="margin-right-10px text-small">Suitable for :  <span class="text-blue"><?php echo $rec->category;?></span></span>
                                <span class="text-small">Theme :  <span class="text-blue"><?php echo $rec->type;?></span></span>
                            </div></a>
                            <div class="summary_container_1 margin-top-15px">
                                 <div class="table_cell share_button">
                                    <a href="javascript:;">
                                         <i class="fa fa-share-alt"></i> 
                                         <span class="d-block">Share</span> 
                                     </a>
                                     <div class="share_container">
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
                                 </div> 
                                 <!-- <div class="table_cell"> 
                                    <?php $id = $this->session->userdata('frontid');
                                        if(!empty($id)):
                                            $favStories = modules::run('itineraries/getBucketList',$rec->itiid,$id,1);
                                            if(is_array($favStories) && $favStories[0]->bucketStatus == 0) {
                                    ?>
                                     <a href="javascript:;" id="<?php echo $rec->itiid;?>" class="bucketLists add_in_bucket" alt="like">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">Add to bucket List</span>
                                     </a>
                                      <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $rec->itiid;?>"  alt="dislike" style="display:none">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">In bucket</span>
                                     </a>
                                     <?php } else { ?>
                                      <a href="javascript:;" id="<?php echo $rec->itiid;?>" class="bucketLists add_in_bucket" alt="like" style="display:none">
                                        <i class="fa fa-bitbucket"></i>
                                        <span class="d-block">Add to bucket List</span>
                                     </a>
                                     <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $rec->itiid;?>"  alt="dislike">
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
                                </div> -->
                                <div class="table_cell">
                                 <a href="#" class="views" data-toggle="tooltip" data-placement="top" title="" data-original-title=" 23 people have seen this itinerary">
                                     <span> <?php echo $rec->views;?></span>
                                     <span class="d-block">Views</span>  
                                 </a> 
                             </div>                             
                                 <!-- <div class="table_cell">  
                                    <a href="<?php //echo base_url('itinerary/'.$rec->url);?>" class="btn btn-primary explore_itinerary">Explore this itinerary</a>
                                 </div> -->  
                            </div><!--/. end summary container-->
                        </div>
                    </div>
                    <!-- /.post -->
                        <?php }
                        else
                        {
                            // echo "<pre>";
                            // print_r($rec);
                            // echo "</pre>";
                        ?>
                            <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                                <?php if(!empty($rec->story_video)){ 
                                        $storyArray = explode("/",$rec->story_video);
                                       
                                ?>
                                <div class="img-in">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo end($storyArray);?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <?php } else if(!empty($rec->storiesImage)) {?>
                                <div class="img-in">
                                   <a href="<?php echo base_url('stories/'.$rec->meta_url);?>"> <img src="<?php echo base_url()?>assets/frontImage/stories/<?php echo $rec->storiesImage;?>" alt=""></a>
                                </div>
                                <?php } ?> 
                                    <div class="row padding-tb-15px">
                                        <div class="col-lg-9">
                                            <a href="<?php echo base_url('stories/'.$rec->meta_url);?>"><span class="d-block text-large text-dark"><?php echo $rec->story_head;?> </span>
                                            <!--<div class="d-block text-up-small text-grey-4 margin-bottom-15px">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar accumsan</div>-->

                                            <div class="meta"> 
                                                 <span class="margin-right-10px text-small">Travel Story By : <span class="text-blue"><?php echo modules::run('itineraries/getTravellerName',$rec->real_traveller); ?></span></span>
                                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue"><?php if(!empty($rec->destination)) { echo modules::run('itineraries/getCityName',$rec->destination); } else { echo "N/A"; } ?></span></span>
                                               
                                               <!--  <span class="text-small"><?php //echo date('M d, Y',strtotime($rec->createdDate))?></span> -->
                                            </div>
                                          </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="summary_container_1">
                                                 <div class="table_cell share_button">
                                                    <a href="javascript:;">
                                                         <i class="fa fa-share-alt"></i>&nbsp;Share
                                                     </a>
                                                     <div class="share_container">
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
                                                 </div> 
                                                 <!-- <div class="table_cell"> 
                                                    <?php $id = $this->session->userdata('frontid');
                                                        if(!empty($id)):
                                                            $favStories = modules::run('itineraries/getBucketList',$rec->itiid,$id,1);
                                                            if(is_array($favStories) && $favStories[0]->bucketStatus == 0) {
                                                    ?>
                                                     <a href="javascript:;" id="<?php echo $rec->itiid;?>" class="bucketLists add_in_bucket" alt="like">
                                                        <i class="fa fa-bitbucket"></i>
                                                        <span class="d-block">Add to bucket List</span>
                                                     </a>
                                                      <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $rec->itiid;?>"  alt="dislike" style="display:none">
                                                        <i class="fa fa-bitbucket"></i>
                                                        <span class="d-block">In bucket</span>
                                                     </a>
                                                     <?php } else { ?>
                                                      <a href="javascript:;" id="<?php echo $rec->itiid;?>" class="bucketLists add_in_bucket" alt="like" style="display:none">
                                                        <i class="fa fa-bitbucket"></i>
                                                        <span class="d-block">Add to bucket List</span>
                                                     </a>
                                                     <a href="javascript:;" class="added_in_bucket bucketLists" id="<?php echo $rec->itiid;?>"  alt="dislike">
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
                                                </div> -->
                                                <div class="table_cell">
                                                 <a href="#" class="views" data-toggle="tooltip" data-placement="top" title="" data-original-title=" 23 people have seen this itinerary">
                                                     <i class="fa fa-eye" aria-hidden="true"></i><?php echo $rec->views_count;?>
                                                 </a> 
                                             </div>                             
                                                 <!-- <div class="table_cell">  
                                                    <a href="<?php echo base_url('story/'.$rec->meta_url);?>" class="btn btn-primary explore_itinerary">Explore this story</a>
                                                 </div>  --> 
                                            </div><!--/. end summary container-->
                                        </div>
                                    </div> 
                            </div>
                        <?php
                        }
                        } } else { ?>
                        <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                            <h3>Sorry, I am exploring new destinations. Will share my itineraries and stories soon!</h3>
                        </div>
                        <?php } ?>
                 
                    <!-- pagination 
                    <ul class="pagination pagination-md">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>
                    <!-- // pagination -->

                </div>
                <!-- //  content -->

            </div>
        </div>
    </section>
 

    <!-- <section class="ptb-lg-70 background-grey-1">
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
                </div> 
                </form>
            </div>
        </section> -->
       