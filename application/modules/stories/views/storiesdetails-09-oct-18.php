    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4" style="font-size: 25px">
                <?php  if(is_array($storiesDetail)): echo $storiesDetail[0]->story_head; endif;?></h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('stories');?>" class="text-grey-4">Travel Stories</a></li>
                <li class="active text-blue"><?php if(is_array($storiesDetail)): echo $storiesDetail[0]->story_head; endif;?></li>
        </ol>
        </div>
    </section>

     <section class="padding-tb-70px">
        <?php if(is_array($storiesDetail)):
           

            ?>
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 text-center margin-bottom-30px">   
                    <!--<h2 class="title h5"><span><?php echo $storiesDetail[0]->story_head;?></span></h2>  -->
                </div>
                <!-- sidebar -->
               

                <!--  content -->
                <div class="col-lg-8 col-md-8 sticky-content">
                    <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                        <?php if(!empty($storiesDetail[0]->story_video)){ 
                                $storyArray = explode("/",$storiesDetail[0]->story_video);
                               
                        ?>
                        <div class="img-in">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo end($storyArray);?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <?php } else if(!empty($storiesDetail[0]->storiesImage)) {?>
                        <div class="img-in">
                            <img src="<?php echo base_url()?>assets/frontImage/stories/<?php echo $storiesDetail[0]->storiesImage;?>" alt="" style="width:100%">
                        </div>
                        <?php } ?>
                        <div class="padding-30px">
                            <div class="meta margin-bottom-15px"> 
                                <span class="margin-right-10px text-small">Travel Itinerary by :  <span class="text-blue"><?php echo modules::run('itineraries/getTravellerName',$storiesDetail[0]->real_traveller); ?></span></span>
                                 <span class="margin-right-10px text-small">Stay Days :  <span class="text-blue"><?php echo $storiesDetail[0]->stay_days;?> Days</span></span>
                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue"><?php if(!empty($storiesDetail[0]->destination)) { echo modules::run('itineraries/getCityName',$storiesDetail[0]->destination); } else { echo "N/A"; } ?></span></span>
                                <!--<span class="margin-right-10px text-small">Suitable for :  <span class="text-blue"><?php echo $storiesDetail[0]->suitable;?></span></span>
                                <span class="text-small">Theme :  <span class="text-blue"><?php echo $storiesDetail[0]->theme;?></span></span>-->
                            </div> 
                            <?php
                                echo $storiesDetail[0]->story_details;
                            ?> 
                        </div>
                    </div>
                    <!-- /.post --> 


                    <!-- Related Posts -->
                    <div class="background-white box-shadow-2 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px"><span>Related Posts</span></h4>

                        <div class="row">
                             <?php 
                                if($stories):
                                    $i=1;
                                    foreach($stories as $str) { 
                                       
                                        if($i <= 2){
                                ?> 
                            <div class="col-lg-6">
                                  
                                <div class="background-white">
                                    <div class="post-img">
                                        <a href="<?php echo base_url() ?>stories/detail/<?php echo $str->meta_url;?>">
                                              <?php if(empty($str->storiesImage)) { ?>
                                                  <img src="<?php echo base_url();?>uploads/nostories.png" alt="">  
                                              <?php }  else { ?>
                                                   <img src="<?php echo base_url(); ?>assets/frontImage/stories/<?php echo $str->storiesImage;?>"></a>  
                                             <?php } ?>
                                           
                                    </div>
                                    <div class="margin-top-30px">
                                        <a href="<?php echo base_url() ?>stories/detail/<?php echo $str->meta_url;?>" class="d-block text-dark text-uppercase text-medium margin-bottom-10px font-weight-700"><?php echo $str->story_head;?></a>
                                        <span class="margin-right-20px text-extra-small">By : <a href="#" class="text-main-color"> <?php echo modules::run('itineraries/getTravellerName',$str->real_traveller); ?></a></span>
                                        <span class="text-extra-small">Date :  <a href="#" class="text-main-color"><?php echo date('M d, Y',strtotime($str->createdDate))?></a></span>
                                       <!-- <p class="text-grey-2 margin-top-8px">up a land of wild nature, mystical and unexplored. With only 350,000 visitors per year, Madagascar is one of the most well-known but least visited </p>-->
                                    </div>
                                </div>
                          
                            </div>
                              <?php } $i++; } endif;?>
                        </div>
                        <!-- // row -->
                    </div>
                    <!-- // Related Posts -->  
                </div>
                
                 <aside class="col-lg-4 col-md-4 sticky-sidebar">  
                    <div class="widget box-shadow-2">  
                    <!-- Mail list --> 
                        <h4 class="widget-title clearfix"><span>Subscribe</span></h4>
                        <div class="alert alert-success" id="subscribesuccess" style="display: none">
                        </div>
                        <div class="alert alert-danger" id="subscribeerror" style="display: none">
                        </div>

                        <p>Subscribe to get free Trip and Travel Ideas</p>
                        <input class="form-control" type="text" placeholder="Enter your email*" name="subscribe" id="subscribe">
                        <a id="subscribeSave" class="btn btn-block btn-primary margin-top-10px" style="color:#FFF">Get Travel Updates</a> 
                    <!-- //  Mail list --> 
                    <!--/. end summary container-->
                    <div class="summary_container margin-top-30px">
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
                         <div class="table_cell"> 

                            <?php 
                                if(isset($this->session->userdata['adminid']) && !empty($this->session->userdata['adminid'])){
                                $userid = $this->session->userdata['adminid'];
                                $favStories = modules::run('stories/getfavRec',$storiesDetail[0]->id,$userid,1 );
                                if(is_array($favStories) && $favStories[0]->favstatus == 1){
                            ?>
                              <a class="fav added_favorite" id="<?php echo $storiesDetail[0]->id?>" alt="dislike" style="cursor:pointer">
                                <i class="fa fa-heart"></i>
                                <span class="d-block">Unfav</span>
                             </a>
                         <?php } else { ?>
                            <a class="fav" id="<?php echo $storiesDetail[0]->id?>" data-toggle="modal" data-target="#add_to_bucket" alt="like" style="cursor:pointer">
                                <i class="fa fa-heart-o"></i>
                                <span class="d-block">Add Fav</span>
                             </a>
                         <?php } } else {?>
                             <a  class="loginfirst" id="loginclass" data-toggle="modal" data-target="#add_to_bucket" alt="like" style="cursor:pointer">
                                <i class="fa fa-heart-o"></i>
                                <span class="d-block">Add Fav</span>
                             </a>
                         <?php } ?>
                        </div> 
                    </div><!--/. end summary container-->
                    </div>  
                </aside> 
                <!-- //  content --> 
            </div>
        </div>
        <?php else: ?>
            <div>No Detail Found!</div>
        <?php endif; ?>
    </section>
 
 <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <div class="row padding-15px background-white">  
                    <div class="col-lg-6">
                        <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Comment </span></h3> 
                    </div> 
                    <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                        <?php if(is_array($commentstories)):
                           foreach($commentstories as $val) {
                        ?>
                        <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                            <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                            <div class="margin-left-85px">
                                <span class="d-block text-dark text-medium font-weight-700"><?php echo $val->name;?></span> 
                                <p class="margin-top-5px"><?php echo $val->content;?></p>
                            </div>
                        </li> 
                        <?php } 
                        else: ?>
                            <li style="background-color: #ff7d7d;padding: 8px;text-align: center;color: #fff;font-size: 17px;">No Comment found!</li>
                        <?php endif; ?>
                    </ul> 
                    </div><!--/.col-->  
                    <div class="col-lg-6" style="border-left: 1px solid #e2eaed;">
                        <form id="commentid">
                            <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                            <h3 class="title h4">
                             <span> Add Comment </span></h3> 
                        </div>  
                         <div class="alert alert-success" id="commentsuccess" style="display: none">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group col-md-6"> 
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Website" name="website">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Comment" name="content"></textarea>
                        </div> 
                        <input type="hidden" name="storyid" value="<?php echo $storiesDetail[0]->id?>">
                        <button type="button" class="btn btn-primary btn-block btn-lg text-center" id="commentbtn">Send</button> 
                        </form>
                    </div><!--/.col-->              
                </div><!-- // row-->
            </div>
        </section> 