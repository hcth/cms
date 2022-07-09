   <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
               Package</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li><a href="<?php echo base_url('/');?>" class="text-grey-4">Home</a></li> 
                <li class="active text-blue">Package</li>
        </ol>
        </div>
    </section>
     
     <section class="text-medium">
         <div class="container text-center">
            <div class="padding-tb-30px row"> 
                <div class="alert alert-danger registererror" style="display:none">
                   
                </div>
                <div class="alert alert-success registersuccess" style="display:none">
                   
                </div>
            <div class="col-lg-12 margin-top-20px">
                <form id="packageform">
                      <div class="text-medium">
                        <div class="form-group margin-bottom-20px"> 
                            <input type="text" class="form-control" placeholder="Name" name="name"> 
                        </div>
                        <div class="form-group margin-bottom-20px"> 
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email"> 
                        </div>
                        <div class="form-group margin-bottom-20px"> 
                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone"> 
                        </div>
                        <div class="form-group margin-bottom-20px"> 
                            <select class="form-control" name="package" id="package">
                                <option value="">Select Package</option>
                                <option value="Package 1">Package 1</option>
                                <option value="Package 2">Package 2</option>
                                <option value="Package 3">Package 3</option>
                            </select> 
                        </div>
                        <input type="hidden" id="landing" name="landing" value="<?php echo $destination; ?>" />
                        <input type="hidden" id="platform" name="platform" value="<?php echo $platform; ?>" />
                        <input type="hidden" id="campaigntype" name="campaigntype" value="<?php echo $ct; ?>" />
                        <input type="hidden" id="adgroup" name="adgroup" value="<?php echo $ad; ?>" />
                        <div class="form-group">
                            <a  class="btn btn-primary btn-block btn-lg" id="savePackage" style="color:#fff">Save</a>
                        </div> 
                      </div>
                </form>
            </div>
            </div><!-- End row-->  
        </div>
    </section>
 