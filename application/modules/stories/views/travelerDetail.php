 <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Real Travellers Itinearies</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li><a href="<?php echo base_url('traveller');?>" class="text-grey-4">Real Travellers</a></li>
                <li class="active text-blue">Real Travellers Itinearies</li>
        </ol>
        </div>
    </section>
     <section class="padding-tb-70px">
        <div class="container">
            <div class="row"> 
                <!-- sidebar -->
                <aside class="col-lg-4 col-md-4 sticky-sidebar">  
                    <?php if(isset($realtravellerDetail) && is_array($realtravellerDetail)):

                    ?>
                    <div class="widget box-shadow-2"> 
                        <figure>
                             <?php if(!empty($realtravellerDetail[0]->profileImage)):?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/<?php echo $realtravellerDetail[0]->profileImage;?>" alt=""> 
                        <?php else: ?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles//noimage.png" alt="">     
                        <?php endif;?>
                        </figure>
                        <div class="itineary_by">
                            <h3 class="margin-bottom-0px text-extra-large text-dark font-weight-700">Travel Itinerary by</h3>
                            <span class="text-large text-blue"><?php echo $realtravellerDetail[0]->name;?></span> 
                            <p class="margin-bottom-5px">
                              <i class="text-grey-2"><?php echo $realtravellerDetail[0]->profession;?></i>
                            </p> 
                            <p class="margin-bottom-5px"><span class="text-dark margin-right-5px">Profession:-</span><?php echo $realtravellerDetail[0]->bio;?></p>
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

                    <!-- post -->
                    <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                        <div class="img-in"><img src="images/real-travellers-itinerary-1.jpg" alt=""></div>
                        <div class="padding-30px">
                            <span class="d-block text-capitalize text-large text-dark font-weight-700 margin-bottom-10px">Lorem Ipsum Dolor Sit amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt </span>
                            <div class="d-block text-up-small text-grey-4 margin-bottom-15px">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar accumsan</div>
                            <div class="meta"> 
                                <span class="margin-right-10px text-small">Travel Itinerary by :  <span class="text-blue">Chirag Joshi</span></span>
                                 <span class="margin-right-10px text-small">Stay Days :  <span class="text-blue">6 Days</span></span>
                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue">name of place</span></span>
                                <span class="margin-right-10px text-small">Suitable for :  <span class="text-blue">Solo</span></span>
                                <span class="text-small">Theme :  <span class="text-blue">Adventure</span></span>
                            </div>
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
                                        </div><!--/. End share container -->
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
                                <div class="table_cell">
                                 <a href="#" class="views" data-toggle="tooltip" data-placement="top" title="" data-original-title=" 23 people have seen this itinerary">
                                     <span>23</span>
                                     <span class="d-block">Views</span>  
                                 </a> 
                             </div>                             
                                 <div class="table_cell">  
                                    <a href="travel-itinearies.html" class="btn btn-primary explore_itinerary">Explore this itinerary</a>
                                 </div>  
                            </div><!--/. end summary container-->
                        </div>
                    </div>
                    <!-- /.post -->

                     <!-- post -->
                    <div class="blog-entry background-white margin-bottom-35px box-shadow-2">
                        <div class="img-in"><img src="images/real-travellers-itinerary-2.jpg" alt=""></div>
                        <div class="padding-30px">
                            <span class="d-block text-capitalize text-large text-dark font-weight-700 margin-bottom-10px">Lorem Ipsum Dolor Sit amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt </span>
                            <div class="d-block text-up-small text-grey-4 margin-bottom-15px">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar accumsan</div>
                            <div class="meta"> 
                                <span class="margin-right-10px text-small">Travel Itinerary by :  <span class="text-blue">Atul Thorat</span></span>
                                 <span class="margin-right-10px text-small">Stay Days :  <span class="text-blue">10 Days</span></span>
                                <span class="margin-right-10px text-small">Destination :  <span class="text-blue">name of place</span></span>
                                <span class="margin-right-10px text-small">Suitable for :  <span class="text-blue">Solo</span></span>
                                <span class="text-small">Theme :  <span class="text-blue">Adventure</span></span>
                            </div>
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
                                        </div><!--/. End share container -->
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
                                <div class="table_cell">
                                 <a href="#" class="views" data-toggle="tooltip" data-placement="top" title="" data-original-title=" 23 people have seen this itinerary">
                                     <span>23</span>
                                     <span class="d-block">Views</span>  
                                 </a> 
                             </div>                             
                                 <div class="table_cell">  
                                    <a href="travel-itinearies.html" class="btn btn-primary explore_itinerary">Explore this itinerary</a>
                                 </div>  
                            </div><!--/. end summary container-->
                        </div>
                    </div>
                    <!-- /.post -->
                    

                    <!-- pagination -->
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
 

     <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <div class="row background-white padding-15px"> 
                    <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Submit your Travel Profile </span></h3>
                         <div class="text-medium margin-top-20px margin-bottom-20px">Become a real traveller and get your itineraries and stories featured here</div>
                    </div> 
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="text" class="form-control" placeholder="Name*" name="">
                    </div>
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="email" class="form-control" placeholder="Email*" name="">
                    </div> 
                    <div class="col-md-4 col-sm-4 margin-bottom-10px">
                        <input type="tel" class="form-control" placeholder="Mobile*" name="">
                    </div>
                    <div class="col-md-12 margin-bottom-10px">
                        <textarea class="form-control" rows="3" placeholder="Write about how travelled are you?"></textarea>
                    </div> 
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary btn-block btn-lg h6">Submit</button>
                    </div> 
                    <div class="col-sm-12">
                        <div class="alert alert-danger margin-top-10px">
                            <strong>Failure!</strong> Please enter valid details.
                        </div>
                        <div class="alert alert-success margin-top-10px">
                             <strong>Success!</strong> Thank you, we will review your profile and get back to you soon.

                         </div>
                    </div> 
                </div><!-- // row-->
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
                        <a href="#" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
