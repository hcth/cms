   <?php if(is_array($thingstodo)) : ?>
    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container">  
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Things to do details</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('things_to_do');?>" class="text-grey-4">Explore things to do</a></li>
                <li class="active text-blue"><?php echo @$thingstodo[0]->articleHeadline;?></li>
        </ol>
        </div>
    </section>


    <section class="padding-tb-40px">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title h5">
                        <?php echo @$thingstodo[0]->articleHeadline;?></h2>
                </div>
                <div class="col-lg-6 margin-bottom-10px">
                         <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                        <span class="font-weight-500 v_align_m">Share</span> <span class="addthis_inline_share_toolbox_5ga7 d-inline-block v_align_m"></span>

                    </div><!-- /.col -->
                     <div class="col-lg-6 text-right margin-bottom-10px">
                        <a href="javascript:;" data-toggle="modal" data-target="#add_to_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span>Add to bucket List</span>
                         </a>
                         <!--<a href="javascript:;" class="added_in_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span>In bucket</span>
                         </a>-->                         
                    </div><!-- /.col -->
                <div class="col-lg-12"> 
                    <blockquote class="font-3 text-medium"> 
                        <?php echo @$thingstodo[0]->articleDesc;?>
                    </blockquote> 
                </div><!--/.col--> 
            </div><!-- End row-->  
        </div>
    </div>  
</section>  
<section class="padding-tb-40px background-grey-2">
    <div class="container">
        <div class="row">   
            <div class="col-lg-12">
                <div class="vertical_tab">
                <!-- Nav tabs --> 
                    <ul class="tabs col-lg-3" id="test2">
                        <?php if(is_array($thingsDetails)):
                            $i=1;
                           foreach($thingsDetails as $vals) { 
                        ?>
                        <li <?php if($i==1){  echo "class='active'";  } ?> rel="things<?php echo $i; ?>"> 
                            <span class="d-block font-weight-700"><?php echo $i; ?> - <?php echo $vals->name;?></span> 
                        </li>
                  
                        <?php $i++; } endif; ?>
                    </ul>
                    <!-- Tab panes -->
                    <div  class="tab_container col-lg-9" id="test2_cont">
                         <?php if(is_array($thingsDetails)):
                            $i=1;
                           foreach($thingsDetails as $vals) { 
                        ?>
                        <h3 class="d_active tab_drawer_heading" rel="things<?php echo $i; ?>"><?php echo $i; ?> - <?php echo $vals->name;?></h3>
                        <article id="things<?php echo $i; ?>" class="tab_content" <?php if($i==1) { ?>style="display: block;"<?php } ?>> 
                                <div class="row"> 
                                    <div class="col-lg-12"> 
                                        <h3 class="text-uppercase text-medium font-weight-600"><?php echo $vals->headline;?></h3>
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
                        </article><!--/.tab-->
                      <?php $i++; } endif; ?>
                    </div> 
                <!-- // Nav tabs --> 
            </div><!-- // vertical tab --> 
            </div><!-- // col --> 
        </div><!--/.row-->
        <div class="row margin-top-20px">
            <div class="col-lg-12 text-center">
                <a href="<?php echo base_url('itineraries');?>" class="btn btn-primary btn_d_inline_block">
                     View Full Trip Itinerary
                 </a>

                <!-- <div class="summary_container">
                    <div class="table_cell share_button">
                        <a href="javascript:;">
                             <i class="fa fa-share-alt"></i> 
                             <span class="d-block">Share</span> 
                         </a>
                         <div class="share_container">
                             <a href="whatsapp://send" data-text="Travel Itinearies" data-href="http://www.travelitineraries.in/itinerary">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </a>
                                <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=[Travel Itineraries]&amp;p[summary]=[SUMMARY_GOES_HERE]&amp;p[url]=[http://www.travelitineraries.in/itinerary]&amp;p[images[0]=[IMAGE_GOES_HERE]" onclick="window.open(this.href, 'facebookwindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                </a>
                                <a href="http://twitter.com/intent/tweet?text=[Travel Itineraries]" onclick="window.open(this.href, 'twitterwindow','left=20,top=20,width=700,height=300,toolbar=0,resizable=1'); return false;">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </a>
                                <a href="https://plus.google.com/share?url=[http://www.travelitineraries.in/itinerary]" onclick="window.open(this.href, 'googlepluswindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                </a>
                                <a href="http://www.linkedin.com/shareArticle?url=[http://www.travelitineraries.in/itinerary]&amp;title=[Travel Itineraries]" onclick="window.open(this.href, 'linkedinwindow','left=20,top=20,width=700,height=500,toolbar=0,resizable=1'); return false;">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                     </div> 
                     <div class="table_cell"> 
                         <a href="javascript:;" data-toggle="modal" data-target="#add_to_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span class="d-block">Add to bucket List</span>
                         </a>
                         <a href="javascript:;" class="added_in_bucket">
                            <i class="fa fa-bitbucket"></i>
                            <span class="d-block">In bucket</span>
                         </a>
                    </div> 
                </div> --> 
            </div>
        </div><!--/.row--> 
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
                        
                              
                ?>
                <!-- Begin item -->
                <div>  
                       <?php if(!empty($vals->listthumbnail)):?>
                                                     <a href="#" class="d-block"><img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $vals->listthumbnail;?>" alt="" style="width:100%"></a> 
                                        <?php 
                                        else: ?>
                                            <a href="#" class="d-block"><img src="<?php echo base_url();?>uploads/noimages.png" alt="" style="width:100%"></a>      
                                        <?php endif; ?>
                        <!-- tourism body -->
                        <div class="showmore">
                            <a href="#" class="d-block text-medium text-white padding-tb-5px"><?php echo $vals->headline;?></a>
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
    <?php if(is_array($getThingsRecord) && count($getThingsRecord) != 1) { ?>
    <section class="ptb-lg-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sm-mb-30px">
                    <div class="section-title-in text-left">
                        <h4><img src="<?php echo base_url()?>assets/images/things-to-do-icon.png" alt="Explorer Things to do">&nbsp;Explorer<br> <span class="text-blue font-weight-700">Things to do</span></h4>
                        <p class="text-up-small margin-top-8px">Get things to do populated by real travellers, the list keeps updating as and when any of our real traveller discovers new experiences. A Must read before you visit any destination</p>
                        <a href="<?php echo base_url('things_to_do');?>" class="btn btn-success btn-sm">Explore</a>
                    </div>
                </div>
                <?php if(is_array($getThingsRecord)):
                    foreach($getThingsRecord as $val){    
                        if($val->id != $thingstodo[0]->id){
                ?>
                <div class="col-lg-3 col-sm-6"> 
                    <div class="background-white shadow things-to-do-col margin-bottom-15px">  
                        
                        <a href="#" class="d-block">
                            <img src="<?php echo base_url()?>uploads/nothingstodo.png" alt="">
                        </a> 
                        <!-- tourism body -->
                        <div class="padding-15px show-things-to-do">
                            <a href="#" class="d-block text-medium text-white font-weight-700 padding-tb-5px"><?php echo $val->articleHeadline;?></a>
                            <small class="text-small padding-tb-5px">
                                    <a href="#" class="text-white">
                                    <i class="fa fa-map-marker"></i>
                                    <span><?php echo modules::run('itineraries/getCityName',$val->articleplace);?></span></a>
                                </small> 
                                <div class="padding-tb-5px">
                                    <a class="text-white views margin-right-10px text-up-small" href="javascript:;">
                                        <i class="fa fa-eye" aria-hidden="true"></i><?php echo $val->viewcount;?></a>
                                    <a class="text-white favourite text-up-small margin-right-10px" href="javascript:;">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                   <!-- <a class="text-white share text-up-small" href="javascript:;">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>-->
                                    <div class="margin-top-10px">
                                    <a href="#" class="btn btn-primary btn-xs">Explorer</a>
                                    </div>
                                </div>  
                        </div> 
                        <!-- tourism body -->  
                        </div> 
                </div>
                <?php } } endif;?>
            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>
    <?php } ?>