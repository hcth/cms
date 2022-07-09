    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Travel Stories by Real Travelers</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>  
                <!-- <li class="active text-blue">Travel Stories by Real Travelers</li> -->
                <li class="active text-blue">Travel Stories</li>
        </ol>
        </div>
    </section>
     <section>
        <div class="container">
            <div class="row padding-tb-40px">  
                <!--  content -->
                <div class="col-lg-12"> 
                    <div class="row">
                       <?php 
                        if(is_array($stories)):
                        foreach($stories as $vals) {
                        ?>  
                <!-- begin item -->
                <div class="col-lg-4 col-md-4 col-sm-6 margin-bottom-15px"> 
                        <a href="<?php echo base_url()?>story/<?php echo $vals->meta_url;?>" class="d-block background-white margin-bottom-15px border_radius_10">
                    <div class="thumb_img">
                          <?php if(empty($vals->storiesImage)) { ?>
                            <img src="<?php echo base_url();?>uploads/nostories.png" alt="<?php echo $vals->story_head;?>" title="<?php echo $vals->story_head;?>">  
                            <?php }  else { ?>
                            <img src="<?php echo base_url();?>assets/frontImage/stories/<?php echo $vals->storiesImage;?>" alt="<?php echo $vals->story_head;?>" title="<?php echo $vals->story_head;?>">  
                            <?php } ?>
                             
                                <div class="stories_title_position">
                                    <span><?php echo substr($vals->story_head,0,47); if(strlen($vals->story_head) > 47) { echo "..."; } ?></span></div>
                    </div>
                        </a> 
                    <div class="margin-top-30px margin-bottom-15px">
                        <span class="travel_stories_profile">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="text-grey-2">Story By -</span> 
                        <span class="text-black font-weight-400"><?php $realName =  modules::run('itineraries/getTravellerName',$vals->real_traveller);
                            if($realName == "no"){
                                    echo "Team Adventourist";
                                } else {
                                    echo $realName; 
                                }
                        ?></span> 
                        <p class="text-grey-5 margin-top-15px"> <?php echo substr(strip_tags($vals->story_details),0,72).'...'; ?></p>
                    </div>  
                </div>
            <?php } endif; ?>
            </div><!-- row -->
                </div>
                <!-- //  content -->

            </div>
        </div>
    </section>
 