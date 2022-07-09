        <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Explore Things To Do</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li> 
                <li class="active text-blue">Explore Things To Do</li>
        </ol>
        </div>
    </section>

    
    <section>
        <div class="container">
            <div class="row justify-content-md-center padding-top-30px"> 
                    <div class="col-lg-8 text-center search_bar"> 
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for Destinations, Itineraries and Things to do" aria-label="Text input with dropdown button" id="searchtext">                                 
                            <span class="input-group-btn">
                                <button class="btn btn-primary border-0 " type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>  
                    <div class="col-lg-12" style="display:none" id="searchBox">
						<div class="dropbox" >
						<div class="dropbox_area" id="resultappend">
							
						</div>
                     </div>
					</div>
                </div><!--/.search -->
            </div><!--/.row -->
            <div class="row padding-tb-30px">  
                <!--  content -->
                <div class="col-lg-12"> 
                    <div class="row">
                        <?php if(is_array($thingstodo)) :
                            foreach($thingstodo as $vals) { 
                                
                        ?>
                        <div class="col-lg-3 col-sm-6 margin-bottom-15px"> 
                             <a href="<?php echo base_url()?>things-to-do/<?php echo $vals->url;?>">
                            <div class="thumb_img">  
                                    <?php if($vals->profileImage){ ?>
                                      <img src="<?php echo base_url()?>/assets/frontImage/thingstodothumb/<?php echo $vals->profileImage;?>" alt="<?php echo $vals->articleHeadline;?>" title="<?php echo $vals->articleHeadline;?>">
                                    <?php  } else {  ?>
                                    <img src="<?php echo base_url()?>uploads/nothingstodo.png" alt="<?php echo $vals->articleHeadline;?>" title="<?php echo $vals->articleHeadline;?>">
                                    <?php } ?> 
                                <!-- tourism body --> 
                                    <div class="thingstodo_title">
                                        <span>
                                            <?php echo $vals->articleHeadline;?>
                                        </span>
                                    </div>

                                    <div class="thingstodo_destination">                                            
                                            <span class="destination">
                                                <span class="location_point">&nbsp;</span><?php echo $vals->articleplace; ?>
                                            </span>
                                        </div> 
                                    <div class="thingstodo_count">    
                                        <span class="views text-large text-white">
                                            <i class="fa fa-eye margin-right-5px" aria-hidden="true"></i><?php echo $vals->viewcount;?>
                                        </span>
                                    </div>

                                           <!--  <a href="<?php //echo base_url()?>things-to-do/detail/<?php //echo $vals->url;?>" class="btn btn-primary btn-xs">Explore</a> --> 
                                <!-- tourism body --> 
                                 </div>  
                             </a>    
                        </div><!--/.col-->
                        <?php  } endif; ?>
                    </div><!--/.row-->
                </div>
                <!-- //  content -->

            </div>
        </div>
    </section>
 