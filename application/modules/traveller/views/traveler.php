    <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Real Travellers</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li>
                <li class="active text-blue">Real Travellers</li>
        </ol>
        </div>
    </section>


    <section class="padding-tb-40px">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center"> 
                            <blockquote class="font-3 text-medium">
                                <h2 class="title h5 margin-bottom-15px"><span>Real Travellers, Non Commercial Itineraries</span></h2>
                            Meet our real travellers. People from all walks of life who love to travel, who share their itineraries and experiences via this platform, currently some of them will even plan your trips if you choose to experience destinations through travelitineraries.in. Go ahead access the travel itineraries gold mine for free, as a return gift you may choose to plan your trips through travelitineraries.in and its partner real travellers 
                        </blockquote>
                        </div>
                    </div><!--/.col--> 
                </div> 
            <div class="row padding-tb-30px">                 
                 <!-- begin item -->
                <?php if(isset($realtraveller) && is_array($realtraveller) && !empty($realtraveller)) : 
                    foreach ($realtraveller as  $value) {
                        if($value->id != 1){
                ?> 
                <div class="col-lg-3 col-sm-6 margin-bottom-30px">
                    <a href="<?php echo base_url('traveller/travellerDetail/'.$value->url);?>">
                        <div class="background-white box-shadow border_radius_15"> 
                        <figure class="real-traveller-thumb"> 
                            <?php if(!empty($value->profileImage)):?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/<?php echo $value->profileImage;?>" alt="<?php echo $value->name?>"> 
                        <?php else: ?>
                        <img src="<?php echo base_url();?>assets/frontImage/userprofiles/noimage.png" alt="<?php echo $value->name?>">     
                        <?php endif;?>
                        </figure> 
                        <div class="padding-20px">
                            <p class="margin-bottom-0px text-large text-black prata"><?php echo $value->name;?></p>
                            <p class="realtraveller_height text-grey-2">
                              <?php echo $value->profession;?>
                            </p>
                            <p class="margin-bottom-5px text-up-small text-dark"><span class="margin-right-5px text-black">Bio:- </span><?php $counts = strlen($value->bio); echo substr($value->bio,0,65); if($counts > 65){ echo "...";}?></p>
                            <p>
                                <span class="text-black margin-right-5px">Places Travelled:- </span>
                                <span>
                                    <?php $cityrec =  modules::run('itineraries/getCityName',$value->travelplace);
                                        if($cityrec != '-'){
                                           $cityrecArray = explode(",",$cityrec);
                                        } else {
                                            $cityrecArray = "";     
                                        }
                                    ?>
                                    <?php if(is_array($cityrecArray)){
                                        foreach($cityrecArray as $vals){
                                        ?>
                                    <span class="text-dark margin-right-8px"><?php echo $vals;?></span>
                                    <?php } }?>
                                </span>
                            </p> 
                            <span>Read more</span> 
                        </div> 
                    </div>
                    </a>
                </div>
                <?php } } else : ?>
                <div><h5>No Real Traveller!</h5></div>
                <?php endif; ?>
                <!-- end item --> 
               

            </div><!-- End row-->  
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
        