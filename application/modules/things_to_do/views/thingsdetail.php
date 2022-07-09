   <?php if(is_array($thingstodo)) : 
  
   ?>
    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container">  
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Explore Things To Do</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('things-to-do');?>" class="text-grey-4">Explore Things To Do</a></li>
                <li class="active text-blue"><?php echo @$thingstodo[0]->articleHeadline;?></li>
        </ol>
        </div>
    </section>


    <section class="padding-tb-40px">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12 margin-bottom-15px">
                    <h2 class="title h5">
                        <?php echo @$thingstodo[0]->articleHeadline;?></h2>
                </div> 
                <!-- <div class="col-lg-6 margin-bottom-10px"> 
                        <span class="font-weight-500 v_align_m">Share</span> <span class="addthis_inline_share_toolbox_5ga7 d-inline-block v_align_m"></span>

                    </div> 
                     <div class="col-lg-6 text-right margin-bottom-10px">
                        <a href="javascript:;" data-toggle="modal" data-target="#add_to_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span>Add to bucket List</span>
                         </a>
                         <a href="javascript:;" class="added_in_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span>In bucket</span>
                         </a>                         
                    </div> -->

                <div class="col-lg-12"> 
                    <blockquote class="font-3 text-medium"> 
                        <?php echo @$thingstodo[0]->articleDesc;?>
                    </blockquote> 
                </div><!--/.col--> 
                <div class="col-lg-12">
                    <span class="font-weight-500 v_align_m">Share</span> <span class="addthis_inline_share_toolbox_5ga7 d-inline-block v_align_m"></span>
                </div>
            </div><!-- End row-->  
        </div> 
</section>  

<section class="padding-tb-40px pt-0">
    <div class="container">
        <div class="row">   
            <div class="col-lg-12">
                <!-- <div class="vertical_tab"> -->
                <!-- Nav tabs --> 
                    <?php /*<ul class="tabs col-lg-3" id="test2">
                        <?php if(is_array($thingsDetails)):
                            $i=1;
                           foreach($thingsDetails as $vals) { 
                        ?>
                        <li <?php if($i==1){  echo "class='active'";  } ?> rel="things<?php echo $i; ?>"> 
                            <span class="d-block font-weight-700"><?php echo $i; ?> - <?php echo $vals->name;?></span> 
                        </li>
                  
                        <?php $i++; } endif; ?>
                    </ul> */ ?>
                    <!-- Tab panes -->
                    <!-- <div  class="tab_container col-lg-9" id="test2_cont"> -->
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                         <?php if(is_array($thingsDetails)):
                            $i=1;
                           foreach($thingsDetails as $vals) { 
                        ?>


                        <article class="card">
                            <div class="card-header" role="tab"> 
                                <a data-toggle="collapse" data-parent="#things<?php echo $i; ?>" href="#things<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne" class="d-block text-medium">
                                    <?php echo $i; ?> - <?php echo $vals->name;?><i class="more-less fa fa-plus"></i></a> 
                            </div>
                            <div id="things<?php echo $i; ?>" class="collapse hide" role="tabpanel" aria-labelledby="headingOne">  
                                <div class="card-block padding-20px">          
                                     <div class="row"> 
                                            <div class="col-lg-12"> 
                                                <h3 class="text-extra-large margin-bottom-15px text-dark"><?php echo $vals->headline;?></h3>
                                                <p class="margin-bottom-15px"><?php echo $vals->description;?></p> 
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-center margin-bottom-10px">
                                                    <?php if(!empty($vals->thingsimage)) : ?>
                                                    <img src="<?php echo base_url()?>assets/frontImage/thingstodo/<?php echo $vals->thingsimage;?>" alt=""> 
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div> 
                                </div> 
                            </div>
                        </article>


                       <?php /* <h3 class="d_active tab_drawer_heading" rel="things<?php echo $i; ?>"><?php echo $i; ?> - <?php echo $vals->name;?></h3>
                        <article id="things<?php echo $i; ?>" class="tab_content" <?php if($i==1) { ?>style="display: block;"<?php } ?>> 
                                <div class="row"> 
                                    <div class="col-lg-12"> 
                                        <h3 class="text-large margin-bottom-10px text-dark"><?php echo $vals->headline;?></h3>
                                        <p><?php echo $vals->description;?></p> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-center margin-bottom-10px">
                                            <?php if(!empty($vals->thingsimage)) : ?>
                                            <img src="<?php echo base_url()?>assets/frontImage/thingstodo/<?php echo $vals->thingsimage;?>" alt=""> 
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div> 
                        </article> */?>

                      <?php $i++; } endif; ?>
                    </div> 
                <!-- // Nav tabs --> 
            <!-- </div> -->
            <!-- // vertical tab --> 
            </div><!-- // col --> 
        </div><!--/.row-->

        <!-- <div class="row margin-top-20px">
            <div class="col-lg-12 text-center"> 
                <div class="summary_container">
                    <div class="table_cell">
                       <span class="font-weight-500 v_align_m">Share</span> <span class="addthis_inline_share_toolbox_5ga7 d-inline-block v_align_m"></span>
                    </div> 
                </div> 
            </div>
        </div> --> 
    </div>
</section>  

<?php else: ?>
<section class="padding-tb-40px">
    <p>Oops! No things to detail found!</p>
</section>
<?php endif; ?>
<!--<section class="ptb-lg-70 background-white">
            <div class="container">
                <div class="row padding-15px">  
                    <div class="col-lg-6">
                        <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Comment </span></h3> 
                    </div> 
                    <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                        <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                            <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                            <div class="margin-left-85px">
                                <span class="d-block text-dark text-medium font-weight-700">Rabie Elkheir </span> 
                                <p class="margin-top-5px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                            </div>
                        </li> 
                        <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                            <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                            <div class="margin-left-85px">
                                <span class="d-block text-dark text-medium font-weight-700">Rabie Elkheir </span> 
                                <p class="margin-top-5px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                            </div>
                        </li>
                    </ul> 
                    </div> 
                    <div class="col-lg-6">
                        <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Add Comment </span></h3> 
                    </div>  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6"> 
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Website">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                    </div> 
                    <button type="button" class="btn btn-primary btn-block btn-lg text-center">Send</button> 
                    </div><             
                </div>
            </div>
        </section> -->
  <?php if(is_array($getThingsRecord) && count($getThingsRecord) != 1) { ?>
    <section class="ptb-lg-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sm-mb-30px">
                    <div class="section-title">
                        <h3 class="title">Explore - <span class="text-grey">Things to do</span></h3>
                        <p class="text-up-small text-grey-2 margin-top-8px">Get things to do populated by real travellers, the list keeps updating as and when any of our real traveller discovers new experiences. A Must read before you visit any destination</p>
                        <?php /*
                        <a href="<?php echo base_url('things_to_do');?>" class="btn btn-success btn-sm">Explore</a>*/
                        ?>
                    </div>
                </div>
                <?php if(is_array($getThingsRecord)):
                    foreach($getThingsRecord as $val){    
                        if($val->id != $thingstodo[0]->id){
                ?>
                <div class="col-lg-3 col-sm-6 mt-sm-20">                           
                    <a href="<?php echo base_url()?>things-to-do/<?php echo $val->url;?>">
                        <div class="thumb_img">
                         <?php if($val->profileImage){ ?>
                                  <img src="<?php echo base_url()?>/assets/frontImage/thingstodothumb/<?php echo $val->profileImage;?>" alt="">
                                <?php  } else {  ?>
                                <img src="<?php echo base_url()?>uploads/nothingstodo.png" alt="">
                                <?php } ?> 
                        <div class="thingstodo_title">
                            <span>
                                <?php echo $val->articleHeadline;?> 
                            </span>
                        </div>
                        <div class="thingstodo_destination">                                            
                            <span class="destination">
                                <span class="location_point">&nbsp;</span><?php echo $val->articleplace ; ?>
                            </span>
                        </div>  
                        <div class="thingstodo_count">    
                            <span class="views text-large text-white">
                                <i class="fa fa-eye margin-right-5px" aria-hidden="true"></i><?php echo $val->viewcount;?>
                            </span>
                        </div> 
                           <!-- <a class="text-white share text-up-small" href="javascript:;">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>-->

                            <!-- <div class="margin-top-10px">
                            <a href="<?php //echo base_url()?>things-to-do/detail/<?php //echo $val->url;?>" class="btn btn-primary btn-xs">Explore</a>
                            </div> --> 
                            </div>
                    </a>  
                </div>
                <?php } } endif;?>
            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>
    <?php } ?>
<section class="ptb-lg-70">
        <div class="container">
            <div class="row margin-bottom-20px align_item_center">
                <div class="section-title col-lg-10 col-md-10 col-sm-10">
                    <h3 class="title">Similar Itineraries</h3>
                    <div class="text-large margin-top-8px text-grey-2 font-weight-300">Get things to do populated by real travellers, the list keeps updating as and when any of our real travellers discover new experiences. A must-read before you visit any destination</div>
                </div> 
                 <div class="col-lg-1 col-md-1 col-sm-1">
                    <a href="<?php echo base_url('itineraries');?>" class="text-black">Explore All</a> 
                </div>
            </div>

            <div class="owl_carousel_similar owl-carousel owl-theme">
                <?php 
                    $itinerariesRecords = modules::run('itineraries/getitinerairesSimilar');
                    if(is_array($itinerariesRecords)):
                       
                        foreach($itinerariesRecords as $vals){
                        
                              
                ?>
                <!-- Begin item -->
                <div class="item">  
                       <?php if(!empty($vals->listthumbnail)):?>
                                                     <a href="<?php echo base_url('itinerary/'.$vals->url);?>">
                                                     <div class="thumb_img"><img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $vals->listthumbnail;?>" alt=""></div> 
                                        <?php 
                                        else: ?>
                                            <img src="<?php echo base_url();?>uploads/noimages.png" alt="">     
                                        <?php endif; ?>
                        <!-- tourism body --> 
                                    <div class="title_position">
                                        <span><?php echo $vals->headline;?></span> 
                                    </div>
                                    <div class="location_position">
                                        <!-- <i class="fa fa-map-marker margin-right-5px"></i> -->
                                        <span class="location_point">&nbsp;</span>
                                       <?php //echo modules::run("itineraries/getCityName",$vals->departure);?>
                                        <?php echo $vals->destination;?>
                                    </div>
                                    <div class="itineary_count">    
                                      <span class="views text-medium text-white">
                                          <i class="fa fa-eye margin-right-5px" aria-hidden="true"></i><?php echo $vals->views;?>
                                      </span>
                                    </div>
                                   <div class="days_position">   
                                        <?php echo $vals->trip_days;?> Days                                      
                                    </div> 
                                </a>
                        <!-- tourism body --> 
                </div>
            <?php  } endif;?>
                 <!-- End item -->  
            </div> 
        </div>
    </section> 