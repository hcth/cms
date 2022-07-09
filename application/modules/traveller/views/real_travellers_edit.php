<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Add Real Traveller
                </h3> 
            </div>
        </div>
    </div>
    <div class="m-content"> 
        <!--begin::Portlet-->
        <div class="m-portlet"> 
            <div class="alert alert-danger" style="text-align:left;display:none;" >ABC</div>
             <div class="alert alert-success" style="text-align:left;display:none;">ABC</div>
            <!--begin::Form-->
            <form id="travelProfile" enctype="multipart/form-data">
                <div class="m-portlet__body m-form">

                    <?php if($this->session->userdata('adminStatus') == 0) : ?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Meta Tag
                        </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control m-input" name="meta_tag" id="meta_tag" value="<?php echo (!empty($users->meta_tags)) ? $users->meta_tags : ''; ?>"/>
                            <span class="m-form__help">
                               Add Text tags that describe your content eg: Leh trip, ladakh trip. (use comma to separate tags, Try to limit to 10 tags).
                            </span>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Meta Description
                        </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control m-input" name="meta_description" id="meta_description" value="<?php echo (!empty($users->meta_description)) ? $users->meta_description : ''; ?>"/>
                        <span class="m-form__help">
                               Describe the content on your page eg: “ Visit Leh on royal Enfield itinerary 9 days “ Try to keep use 160 characters.
                            </span>
                       </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            URL
                        </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control m-input" name="meta_url" id="meta_url" value="<?php echo (!empty($users->meta_url)) ? $users->meta_url : ''; ?>"/>
                         <span class="m-form__help">
                               Enter a URL Structure eg: leh-ladakh-itinerary . using”-” between words is compulsory.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Meta Title
                        </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control m-input" name="meta_title" id="meta_title" value="<?php echo (!empty($users->meta_title)) ? $users->meta_title : ''; ?>"/>
                         <span class="m-form__help">
                               This is what will people read if they find this page on google” Give the content a Title, Try to limit to 70 characters.
                            </span>
                        </div>
                    </div>  
                <?php endif;?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Full Name
                        </label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="full_name" id="full_name" value="<?php echo (!empty($users->full_name)) ? $users->full_name : ''; ?>" /> 
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Birthday
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input datepicker-trav" type="text" name="dob" id="" value="<?php echo (!empty($users->dob)) ? $users->dob : ''; ?>" readonly data-date-format="yyyy-mm-dd"/> 
                        </div>
                    </div> 
                   
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Profession
                        </label>
                        <div class="col-lg-4">
                            <textarea class="form-control m-input" id="occupation" name="occupation" rows="3"><?php echo (!empty($users->occupation)) ? $users->occupation : ''; ?></textarea>
                        </div>
                       
                    </div> 
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Bio
                        </label>
                        <div class="col-lg-4">
                            <textarea class="form-control m-input" id="about" name="about" rows="3"><?php echo (!empty($users->about)) ? $users->about : ''; ?></textarea>
                        </div>
                    </div> 
                   
                     
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Email Id
                        </label>
                        <div class="col-lg-4">
                              <input class="form-control m-input" type="text" name="email" id="email" value="<?php echo (!empty($users->mobile)) ? $users->mobile : ''; ?>"/>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Mobile Number
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input" type="text" name="mobile" id="mobile" value="<?php echo (!empty($users->mobile)) ? $users->mobile : ''; ?>"/>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        
                        <label class="col-form-label col-lg-3">
                            Linkedin
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input" type="text" name="linkedin" id="linkedin" value="<?php echo (!empty($users->linkedin)) ? $users->linkedin : ''; ?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Facebook
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input" type="text" name="facebook" id="facebook" value="<?php echo (!empty($users->facebook)) ? $users->facebook : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Twitter
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input" type="text" name="twitter" id="twitter" value="<?php echo (!empty($users->twitter)) ? $users->twitter : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Instagram
                        </label>
                        <div class="col-lg-4">
                            <input class="form-control m-input" type="text" name="instagram" id="instagram" value="<?php echo (!empty($users->instagram)) ? $users->instagram : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                            Profile Picture
                        </label>
                       <div class="col-lg-9">
                         <div class="cropme" style="width: 600px; height: 480px;">
                            </div> 
                         <input type="hidden" name="" id="realtravthumb"> 
                      </div>
                    </div>
                    <div class="form-group m-form__group row divAlertStoriesDetails" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                        </div>
                    </div> 
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions pr-0 pl-0">
                        <div class="row">
                            <label class="col-form-label col-lg-3"></label>
                            <div class="col-lg-9">   
                           <input type="hidden" id="profile_id" name="profile_id" 
                           <?php $ans = $this->uri->segment('3');
                           ?>
                           value="<?php if(!empty($ans)) { 
                               echo $ans;
                                } else { 
                                echo ""; 
                                }?>"/>
                                <button type="button" class="btn btn-brand saveProfile">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
</div>