   <?php 
                    $res = Modules::run('cms/cmscontent',"home_page_image");
                    if(is_array($res) && !empty($res)){ 
                       if(!empty($res[0]->cmsImage) && $res[0]->cmsImage != ''){
                           $images =  base_url()."assets/frontImage/cms/". @$res[0]->cmsImage;
                       }
                    }    
                ?> 
                
            <div class="header-search-output ptb-lg-120" style="background: url(<?php echo $images ?>) no-repeat center center/cover;">
                <div class="container">
                    <div class="row justify-content-md-center margin-bottom-15px">
                        <div class="col-lg-9 text-center">
                            <div class="margin-bottom-40px">
                                <h1 class="font-weight-700 text-white h2 margin-bottom-15px">Road Trips | Travel Itineraries | Things to do</h1>
                                <h2 class="text-white text-extra-large">Get Itineraries, Travel Stories and Things to do written Real Avid Travellers</h2>
                            </div>
                            <!--  search  -->
                            <div class="input-group input-group-lg margin-top-30px">

                                <input type="text" id="search-full" class="form-control repositories" placeholder="" aria-label="Text input with dropdown button">                                 
                                <span class="input-group-btn">
                                    <button class="btn btn-primary border-0 " type="button" aria-label="Search the Itineraries, Things to do, stories."
                                    ><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            <!-- // search  -->
                        </div>
                        <!-- // col-lg-6 -->
                    </div><!--// row--> 
                </div> 
            </div>
        <!-- end search -->
    <section class="ptb-lg-70" id="itinerariesHomes" style="display:none">
        <div class="container">
            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/travel-itineraries-icon.png" alt="Trending Itineraries" title="Trending Itineraries"><span> Trending Itineraries </span></h3>
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
                                       <?php //echo modules::run("itineraries/getCityName",$vals->departure);?>
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
            <?php  } endif;?>
                 <!-- End item -->  
               
            </div> 
        </div>
    </section>

    <section class="ptb-lg-70 background-grey-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sm-mb-30px">
                    <div class="section-title text-left">
                        <h4><img src="<?php echo base_url();?>assets/images/things-to-do-icon.png" alt="Explore Things to do" title="Explore Things to do">&nbsp;Explore<br> <span class="text-blue font-weight-700">Things to do</span></h4>
                        <p class="text-up-small margin-top-8px">Get things to do populated by real travellers, the list keeps updating as and when any of our real traveller discovers new experiences. A Must read before you visit any destination</p>
                        <a href="<?php echo base_url('things-to-do');?>" class="btn btn-success btn-sm">Explore</a>
                    </div>
                </div>
                <?php if(is_array($thingstodo)) :
                            foreach($thingstodo as $vals) { 
                                
                        ?>
                <div class="col-lg-3 col-sm-6  mt-sm-20"> 
                            <div class="background-white shadow things-to-do-col margin-bottom-15px">  
                                <a href="<?php echo base_url()?>things-to-do/detail/<?php echo $vals->url;?>" class="d-block">
                                    <?php if($vals->profileImage){ ?>
                                      <img src="<?php echo base_url()?>/assets/frontImage/thingstodothumb/<?php echo $vals->profileImage;?>" alt="<?php echo $vals->articleHeadline;?>" title="<?php echo $vals->articleHeadline;?>">
                                    <?php  } else {  ?>
                                    <img src="<?php echo base_url()?>uploads/nothingstodo.png" alt="<?php echo $vals->articleHeadline;?>" title="<?php echo $vals->articleHeadline;?>">
                                    <?php } ?>
                                    
                                    </a> 
                                <!-- tourism body -->
                                <div class="padding-15px">
                                    <a href="<?php echo base_url()?>things-to-do/detail/<?php echo $vals->url;?>" > <span class="d-block text-capitalize text-medium text-dark font-weight-700"><?php echo $vals->articleHeadline;?></span> 
                                    </a>
                                    <!--<small class="text-small padding-tb-5px">
                                            <a href="<?php echo base_url()?>things-to-do/detail/<?php echo $vals->url;?>" class="text-white">
                                            <i class="fa fa-map-marker"></i>
                                            <span><?php echo modules::run('itineraries/getCityName',$vals->articleplace);?></span></a>
                                        </small> -->
                                        <div class="padding-tb-5px">
                                            <a class="views margin-right-10px text-up-small" href="<?php echo base_url()?>things-to-do/detail/<?php echo $vals->url;?>">
                                                <i class="fa fa-eye" aria-hidden="true"></i><?php echo $vals->viewcount;?></a>
                                            <div class="margin-top-10px">
                                            <a href="<?php echo base_url()?>things-to-do/detail/<?php echo $vals->url;?>" class="btn btn-primary btn-xs">Explore</a>
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

   <section class="ptb-lg-70 background-white">
        <div class="container">

            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/travel-stories-icon.png" alt="Travel Stories" title="Travel Stories"><span> Travel Stories </span></h3>
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
                    <a href="<?php echo base_url()?>stories/detail/<?php echo $vals->meta_url;?>" class="d-block box-shadow background-white margin-bottom-15px">
                      <?php if(empty($vals->storiesImage)) { ?>
                        <img src="<?php echo base_url();?>uploads/nostories.png" alt="<?php echo $vals->story_head;?>" title="<?php echo $vals->story_head;?>">  
                        <?php }  else { ?>
                        <img src="<?php echo base_url();?>assets/frontImage/stories/<?php echo $vals->storiesImage;?>" alt="<?php echo $vals->story_head;?>" title="<?php echo $vals->story_head;?>">  
                        <?php } ?>
                        
                        <div class="padding-15px">
                            <span class="d-block text-capitalize text-medium text-dark font-weight-700"><?php echo substr($vals->story_head,0,47); if(strlen($vals->story_head) > 47) { echo "..."; } ?> </span> 
                            <span class="text-dark">Story By-</span> 
                            <span class="font-weight-700 text-blue"><?php $realName =  modules::run('itineraries/getTravellerName',$vals->real_traveller);
                                if($realName == "no"){
                                        echo "Team Adventourist";
                                    } else {
                                        echo $realName; 
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

    <?php if(isset($realTraveler) && is_array($realTraveler) && !empty($realTraveler)):?>
     <section class="ptb-lg-70 background-grey-1">
        <div class="container">
            <div class="row margin-bottom-20px">
                <div class="section-title section-title-center col-lg-11 col-sm-11">
                    <h3 class="title h4"><img src="<?php echo base_url();?>assets/images/real-travellers-icon.png" alt="Real Travellers" title="Real Travellers"><span> Real Travellers </span></h3>
                </div> 
            </div>  
            <div class="row">
                <!-- begin item -->
                <?php foreach($realTraveler as $real){ 
                   if($real->id != 1){
                ?>                
                <div class="col-lg-3 col-sm-6 mt-sm-20">
                    <a href="<?php echo base_url('traveller/travellerDetail/'.$real->url);?>">
                    <div class="background-white shadow1"> 
                    <div class="real-traveller-thumb"> 
                        <?php if(!empty($real->profileImage)):?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/<?php echo $real->profileImage;?>" alt="<?php echo $real->name;?>" title="<?php echo $real->name;?>"> 
                        <?php else: ?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles//noimage.png" alt="<?php echo $real->name;?>" title="<?php echo $real->name;?>">  
                        <?php endif;?>  
                        </div> 
                        <div class="padding-15px">
                            <p class="margin-bottom-0px text-medium text-dark font-weight-700"><?php echo $real->name?></p>
                            <p class="margin-bottom-0px realtraveller_height">
                              <i class="text-grey-2"><?php echo $real->profession?></i>
                            </p> 
                            <p class="realtraveller_height"><?php $counts = strlen($real->bio); echo substr($real->bio,0,65); if($counts > 65){ echo "...";}?></p>  
                            <span class="btn btn-success btn-sm">More</span>
                        </div> 
                    </div>
                    </a>
                </div> 
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
                            <h4 class="number text_70"><?php echo modules::run('home/getTotalCount',"ti_itineraries");?></h4>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/travel-itineraries-icon-white.png" alt="Travel Itineraries" title="Travel Itineraries"></div>
                            <h6 class="margin-top-10px title">Travel Itineraries</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="count margin-bottom-15px">
                            <h2 class="number text_70"><?php echo modules::run('home/getTotalCount',"thingstodo");?></h2>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/things-to-do-icon-white.png" alt="Things to do" title="Things to do"></div>
                            <h6 class="margin-top-10px title">Things to do</h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="count margin-bottom-15px">
                            <h2 class="number text_70"><?php echo modules::run('home/getTotalCount',"ti_stories");?></h2>
                            <div class="icon"><img src="<?php echo base_url();?>assets/images/travel-stories-icon-white.png" alt="Travel Stories" title="Travel Stories"></div>
                            <h6 class="margin-top-10px title">Travel Stories</h6>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
         <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <form id="submitProfilesss" class="row background-white ptb-lg-70">
                <div class="col-lg-6 text-center"> 
                    <img src="<?php echo base_url();?>assets/images/submit-travel-profile.jpg" alt="Real Travller Profile" title="Real Travller Profile" class="img-fluid"> 
                </div><!--/.col-->    
                <div class="col-lg-6"> 
                    <div class="row"> 
                    <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Submit your Travel Profile </span></h3>
                         <div class="text-medium margin-top-10px">Become a real traveller and get your itineraries and stories featured here</div>
                    </div> 
                    
                    <div class="col-md-12 col-sm-12 margin-bottom-10px">
                        <input type="text" class="form-control" placeholder="Name*" name="username">
                    </div>
                    <div class="col-md-6 col-sm-6 margin-bottom-10px">
                        <input type="email" class="form-control" placeholder="Email*" name="email">
                    </div> 
                    <div class="col-md-6 col-sm-6 margin-bottom-10px">
                        <input type="tel" class="form-control" placeholder="Mobile*" name="mobile">
                    </div>
                    <div class="col-md-12 col-sm-12 margin-bottom-10px">
                        <textarea class="form-control" rows="2" placeholder="Write about how travelled are you?" name="desc"></textarea>
                    </div> 
                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-primary btn-block h6" id="submitpro">Submit</button>
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
                </div><!--/.col--> 
                </div><!-- // row-->
                </form>
            </div>
        </section> 

 
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/selectize.bootstrap3.css">
        <script src="<?php echo base_url(); ?>/assets/js/selectize.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/index.js"></script>

                <script>
                // <select id="select-repo"></select>
                $('#search-full').selectize({
                    valueField: 'url',
                    labelField: 'name',
                    searchField: 'name',
                    options: [],
                    create: false,
                    maxItems: 1,
                    render: {
                        option: function(item, escape) {
                            console.log(item);
                            return '<div>' +
                                '<span class="title margin-top-10px">' +
                                    '<span class="name"><i class="icon ' +item.type+ '"></i>' + escape(item.name) + '</span>' +
                                    '<span class="'+(item.by == ''?'hide':'by')+'">' + escape(item.by) + '</span>' +
                                '</span>' +
                                '<span class="description margin-top-10px">' + escape(item.metaDesc) + '</span>' +
                                '<ul class="meta">' +
                                    (item.language ? '<li class="language">' + escape(item.language) + '</li>' : '') +
                                    '<li class="watchers"><span>' + escape(item.watchers) + '</span> watchers</li>' +
                                    '<li class="forks"><span>' + escape(item.forks) + '</span> forks</li>' +
                                '</ul>' +
                            '</div>';
                        }
                    },
                    score: function(search) {
                        var score = this.getScoreFunction(search);
                       // console.log(score);
                        return function(item) {
                            return score(item);
                        };
                    },
                    load: function(query, callback) {
                        if (!query.length) return callback();
                        $.ajax({
                            url: base_url+'/home/getSchemes/',
                            type: 'post',
                            dataType:'json',
                            data:{'query':query},
                            error: function() {
                                callback();
                            },
                            success: function(res) {
                                console.log(res);
                                callback(res);
                            }
                        });
                    },
                     onItemAdd: function (val) {
                      window.open(val, '_blank');
                      return false;
                    }
                });

  </script>