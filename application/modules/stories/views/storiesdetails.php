    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Travel Stories by Real Travelers
            </h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('stories');?>" class="text-grey-4">Travel Stories</a></li>
                <li class="active text-blue"><?php if(is_array($storiesDetail)): echo substr($storiesDetail[0]->story_head,0,50); if(strlen($storiesDetail[0]->story_head) > 50) { echo "..."; } endif;?></li>
        </ol>
        </div>
    </section>

     <section class="padding-tb-40px">
        <?php if(is_array($storiesDetail)):
           

            ?>
        <div class="container">
            <div class="row"> 
               <!--  <div class="col-lg-12 text-center margin-bottom-30px">   
                    <h2 class="title h5"><span><?php //echo $storiesDetail[0]->story_head;?></span></h2>
                </div> -->

                <!-- sidebar -->
               

                <!--  content -->
                <div class="col-lg-8 col-md-8">
                    <div class="margin-bottom-15px">
                        <h2 class="title h5">
                            <?php  if(is_array($storiesDetail)): echo $storiesDetail[0]->story_head; endif;?>
                        </h2>
                     </div>
                     <div class="row">
                         
                      
                     </div>
                    <div class="blog-entry background-white margin-bottom-35px box-shadow-2 borderbt_none">
                        <?php 
                        if($storiesDetail[0]->story_video != ""){ 
                                $storyArray = explode("/",$storiesDetail[0]->story_video);
                               
                        ?>
                        <div >
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo end($storyArray);?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <?php } else if(!empty($storiesDetail[0]->storiesImage)) {?>
                        <div >
                            <img src="<?php echo base_url()?>assets/frontImage/stories/<?php echo $storiesDetail[0]->storiesImage;?>" alt="<?php echo $storiesDetail[0]->destination; ?>" style="width:100%">
                        </div>
                        <?php } ?>
                        <div class="padding-tb-30px custom_text_editor_para">
                            <div class="meta margin-bottom-15px"> 
                                <span class="margin-right-10px text-small">Travel Story :  <span class="text-blue"><?php
                                    $realName =  modules::run('itineraries/getTravellerName',$storiesDetail[0]->real_traveller); 
                                  if($realName == "no"){
                                        echo "Team Adventourist";
                                    } else {
                                        echo $realName; 
                                    }
                                
                                ?></span></span>
                                 <!--<span class="margin-right-10px text-small">Stay Days :  <span class="text-blue"><?php echo $storiesDetail[0]->stay_days;?> Days</span></span>-->
                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue"><?php if(!empty($storiesDetail[0]->destination)) { echo $storiesDetail[0]->destination; } else { echo "N/A"; } ?></span></span>
                                <!--<span class="margin-right-10px text-small">Suitable for :  <span class="text-blue"><?php echo $storiesDetail[0]->suitable;?></span></span>
                                <span class="text-small">Theme :  <span class="text-blue"><?php echo $storiesDetail[0]->theme;?></span></span>
                                <span class="text-small"><?php echo date('M d, Y',strtotime($storiesDetail[0]->createdDate))?></span>-->
                            </div> 
                                <span class="font-weight-500 v_align_m">Share</span> <span class="addthis_inline_share_toolbox_5ga7 d-inline-block v_align_m"></span>                            <?php
                                echo $storiesDetail[0]->story_details;
                            ?> 
                        </div>
                    </div>
                    <!-- /.post --> 


                    <!-- Related Posts -->
                    <!--<div class="background-white box-shadow-2 margin-bottom-35px padding-30px">
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
                                        <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>">
                                              <?php if(empty($str->storiesImage)) { ?>
                                                  <img src="<?php echo base_url();?>uploads/nostories.png" alt="">  
                                              <?php }  else { ?>
                                                   <img src="<?php echo base_url(); ?>assets/frontImage/stories/<?php echo $str->storiesImage;?>"></a>  
                                             <?php } ?>
                                           
                                    </div>
                                    <div class="margin-top-30px">
                                        <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>" class="d-block text-dark text-uppercase text-medium margin-bottom-10px font-weight-700"><?php echo $str->story_head;?></a>
                                        <span class="margin-right-20px text-extra-small">By : <a href="#" class="text-main-color"> <?php echo modules::run('itineraries/getTravellerName',$str->real_traveller); ?></a></span>
                                        <span class="text-extra-small">Date :  <a href="#" class="text-main-color"><?php echo date('M d, Y',strtotime($str->createdDate))?></a></span>
                                       <!-- <p class="text-grey-2 margin-top-8px">up a land of wild nature, mystical and unexplored. With only 350,000 visitors per year, Madagascar is one of the most well-known but least visited </p>
                                    </div>
                                </div>
                          
                            </div>
                              <?php } $i++; } endif;?>
                        </div>
                      
                    </div>
                    <!-- // Related Posts -->  
                </div>
                
                 <aside class="col-lg-4 col-md-4">  
                    <!-- <div class="widget box-shadow-2">  
                        <h4 class="widget-title clearfix"><span>Subscribe</span></h4>
                        <div class="alert alert-success" id="subscribesuccess" style="display: none">
                        </div>
                        <div class="alert alert-danger" id="subscribeerror" style="display: none">
                        </div>

                        <p>Subscribe to get free Trip and Travel Ideas</p>
                        <input class="form-control" type="text" placeholder="Enter your email*" name="subscribe" id="subscribe">
                        <a id="subscribeSave" class="btn btn-block btn-primary margin-top-10px" style="color:#FFF">Get Travel Updates</a> 
                    </div>   -->
                    <div class="widget box-shadow-2">  
                        <h4 class="widget-title">
                            <span>Related Posts</span></h4>
                         <ul class="last-posts">
                              <?php 
                                if($stories):
                                    $i=1;
                                    foreach($stories as $str) { 
                                        if($i <= 2){
                                ?> 
                            <li class="clearfix">
                                <span class="margin-bottom-10px btn-block"> <?php if(empty($str->storiesImage)) { ?>
                                                  <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>"><img src="<?php echo base_url();?>uploads/nostories.png" alt=""></a>  
                                              <?php }  else { ?>
                                                   <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>"><img src="<?php echo base_url(); ?>assets/frontImage/stories/<?php echo $str->storiesImage;?>"></a>  
                                             <?php } ?></span>
                                <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>" class="text-up-small text-black"><?php echo $str->story_head ?></a>
                                <!--<span class="text-extra-small">Date :  <a href="<?php echo base_url() ?>story/<?php echo $str->meta_url;?>" class="text-main-color"><?php echo date('M d, Y',strtotime($str->createdDate))?></a></span> -->
                            </li>
                           <?php } $i++; } endif;?>
                        </ul>  
                    </div>
                </aside> 
                <!-- //  content --> 
            </div>
        </div>
        <?php else: ?>
            <div>No Detail Found!</div>
        <?php endif; ?>
    </section>
 
 <!-- <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <div class="row padding-15px background-white">  
                    <div class="col-lg-6">
                        <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title">Comments</h3> 
                    </div> 
                    <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                        <?php if(is_array($commentstories)):
                           foreach($commentstories as $val) {
                        ?>
                        <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                            <img src="<?php echo base_url();?>assets/images/default-profile.jpg" class="float-left margin-right-20px margin-bottom-20px" alt="" width="50">
                            <div class="margin-left-60px">
                                <span class="text-dark text-medium font-weight-700"><?php echo $val->name;?></span> 
                                <p class="margin-top-5px"><?php echo $val->content;?></p>
                            </div>
                        </li> 
                        <?php } 
                        else: ?>
                            <li style="background-color: #ff7d7d;padding: 8px;text-align: center;color: #fff;font-size: 17px;">No Comment found!</li>
                        <?php endif; ?>
                    </ul> 
                    </div>  
                    <div class="col-lg-6" style="border-left: 1px solid #e2eaed;">
                        <form id="commentid">
                            <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                            <h3 class="title">Add Comment</h3> 
                        </div>  
                         <div class="alert alert-success" id="commentsuccess" style="display: none">
                        </div>
                        <div class="alert alert-danger" id="commenterror" style="display: none">
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
                            <textarea class="form-control" rows="3" placeholder="Comment" name="content"></textarea>
                        </div> 
                        <input type="hidden" name="storyid" value="<?php echo $storiesDetail[0]->id?>">
                        <button type="button" class="btn btn-primary btn-block btn-lg text-center" id="commentbtn">Send</button> 
                        </form>
                    </div>             
                </div>
            </div>
        </section>  -->

        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e46a8c3eb84eb00123923c2&product=inline-share-buttons&cms=sop' async='async'></script>