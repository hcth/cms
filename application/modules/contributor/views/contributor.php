   <section class="background-grey-2 padding-tb-20px text-center clearfix">
        <div class="container"> 
            <h1 class="font-weight-700 text-blue float-md-left h4">
                Become a Contributor</h1>
            <ol class="breadcrumb no-background float-md-right margin-bottom-0px">
                <li class="margin-bottom-10px"><a href="<?php echo base_url();?>" class="text-grey-4">Home</a></li> 
                <li class="active text-blue">Become a Contributor</li>
        </ol>
        </div>
    </section>


     
     <section class="text-medium">
        <div class="container">
            <div class="row padding-tb-30px"> 
                <div class="col-lg-6">
                    <?php 
                    $res = Modules::run('cms/cmscontent',"contributor");
                    if(is_array($res) && !empty($res)){
                     echo $res[0]->cms_data;   
                    }    
                ?> 
                </div><!-- End col-->
                <div class="col-lg-6">
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
                </div><!-- // row-->
                </form>
                </div> 
            </div><!-- End row-->  
        </div>
    </section>
 