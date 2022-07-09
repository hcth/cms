 <div class="content-wrapper">
        <div class="container-fluid padding-tb-70px">
            <div class="row margin-bottom-15px">
                <div class="col-lg-12">
                    <h4 class="h5 page_title">Dashboard</h4>
                </div>  
            </div><!-- ./row -->
            <div class="row"> 
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 margin-bottom-30px">
                                <div class="background-white box-shadow text-center padding-10px">
                                <div class="user_profile">
                                    <img src="<?php echo base_url();?>assets/images/default-profile.jpg" alt=""> 
                                </div>
                                
                                <?php 
                                    $frontid = $this->session->userdata('frontid');
                                    $record = modules::run('home/getUserRecord',$frontid);
                                    if(is_array($record)){
                                ?>
                                
                                <div class="form-group margin-tb-5px font-weight-700"> 
                                    <?php echo @$record[0]->name;?>
                                </div>
                                <div class="form-group margin-bottom-5px"> 
                                   <?php echo @$record[0]->email;?>
                                </div> 
                              <!--  <div class="form-group margin-bottom-5px"> 
                                    xxxxxxxxxx
                                </div>
                                <div class="form-group margin-bottom-5px"> 
                                    xx/xx/xx
                                </div> --->
                                
                                <?php } ?>
                               <!--<div class="form-group"> 
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook-square text-title-large text-green margin-right-5px" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter-square text-title-large text-green margin-right-5px" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa fa-google-plus-square text-title-large text-green" aria-hidden="true"></i>
                                    </a> 
                                </div>-->
                                <div>
                                	<a href="#" class="btn btn-xs btn-primary">Edit Profile</a>
                                </div>
                            </div><!-- ./shadow -->
                        </div><!-- ./col -->
                        <div class="col-lg-8"> 
                            <div class="row">
                                <!--<div class="col-lg-6"> 
                                  <div class="small-box">
                                     <a href="my-bucket-list.html">
                                        <span class="number">14</span> 
                                        <span class="title">Trip in your bucket list</span>
                                    </a>
                                     <div class="icon">
                                        <i class="fa fa-bitbucket"></i>
                                    </div>
                                  </div> 
                                </div><!-- ./col --> 
                                <div class="col-lg-6"> 
                                  <div class="small-box">
                                     <a href="my-bucket-list.html">
                                        <span class="number">23</span> 
                                        <span class="title">Things you want to do</span>
                                    </a>
                                     <div class="icon">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                  </div> 
                                </div><!-- ./col -->
                                <div class="col-lg-6"> 
                                  <div class="small-box">
                                     <a href="my-bucket-list.html">
                                        <span class="number"><?php 
                                        $storiesRec = modules::run('stories/getStoriesFavs',$this->session->userdata('frontid'),1);
                                        echo $storiesRec;
                                        ?></span> 
                                        <span class="title">Favorite Stories</span>
                                    </a>
                                     <div class="icon">
                                        <i class="fa fa-bookmark"></i>
                                    </div>
                                  </div> 
                                </div><!-- ./col -->
                            </div><!--/.row-->
                        </div><!--/.col-->
                        </div><!-- ./row -->   
                </div><!-- ./col --> 
            </div><!-- ./row -->
        </div><!--/. container-fluid-->
    </div><!