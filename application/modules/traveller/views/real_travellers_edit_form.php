<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Edit Real Traveller
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
            <?php if(is_array($editRec) && !empty($editRec)):
                       ?>
            <form class="m-form m-form--fit m-form--label-align-right" id="edittravelProfile" enctype="multipart/form-data">
                <div class="m-portlet__body">

                    <?php if($this->session->userdata('adminStatus') == 0) : ?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Tag
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_tag" id="meta_tag" value="<?php if(is_array($editRec) && !empty($editRec[0]->metatag)): echo $editRec[0]->metatag; endif;?>"/>
                         <span class="m-form__help">
                               Add Text tags that describe your content eg: Leh trip, ladakh trip. (use comma to separate tags, Try to limit to 10 tags).
                            </span>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_description" id="meta_description" value="<?php if(is_array($editRec) && !empty($editRec[0]->metaDesc)): echo $editRec[0]->metaDesc; endif;?>"/>
                         <span class="m-form__help">
                               Describe the content on your page eg: “ Visit Leh on royal Enfield itinerary 9 days “ Try to keep use 160 characters.
                            </span>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            URL
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_url" id="meta_url" value="<?php if(is_array($editRec) && !empty($editRec[0]->url)): echo $editRec[0]->url; endif;?>"/>
                        <span class="m-form__help">
                               Enter a URL Structure eg: leh-ladakh-itinerary . using”-” between words is compulsory.
                            </span>
                        </div>
                    </div> 
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Title
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_title" id="meta_title" value="<?php if(is_array($editRec) && !empty($editRec[0]->meta_title)): echo $editRec[0]->meta_title; endif;?>"/>
                          <span class="m-form__help">
                               This is what will people read if they find this page on google” Give the content a Title, Try to limit to 70 characters.
                            </span>
                        </div>
                    </div>  
                <?php endif;?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Full Name
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="full_name" id="full_name" value="<?php if(is_array($editRec) && !empty($editRec[0]->name)): echo $editRec[0]->name; endif;?>" /> 
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Birthday
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input datepicker-trav" type="text" name="dob" id="" value="<?php if(is_array($editRec) && !empty($editRec[0]->birthday)): echo $editRec[0]->birthday; endif;?>" readonly data-date-format="yyyy-mm-dd"/> 
                        </div>
                    </div> 
                    
                   
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Profession
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="occupation" value="<?php if(is_array($editRec) && !empty($editRec[0]->profession)): echo $editRec[0]->profession; endif;?>" /> 
                        </div>
                    </div> 
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Bio
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <textarea class="form-control m-input" id="about" name="about" rows="3"><?php if(is_array($editRec) && !empty($editRec[0]->bio)): echo $editRec[0]->bio; endif;?></textarea>
                        </div>
                    </div> 
                 
                     
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Email Id
                        </label>
                        <div class="col-lg-10 col-form-label">
                              <input class="form-control m-input" type="text" name="email" id="email" value="<?php if(is_array($editRec) && !empty($editRec[0]->email)): echo $editRec[0]->email; endif;?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Mobile Number
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="mobile" id="mobile" value="<?php if(is_array($editRec) && !empty($editRec[0]->mobile)): echo $editRec[0]->mobile; endif;?>"/>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Linkedin
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="linkedin" id="linkedin" value="<?php if(is_array($editRec) && !empty($editRec[0]->linkdin)): echo $editRec[0]->linkdin; endif;?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Facebook
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="facebook" id="facebook" value="<?php if(is_array($editRec) && !empty($editRec[0]->facebook)): echo $editRec[0]->facebook; endif;?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Twitter
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="twitter" id="twitter" value="<?php if(is_array($editRec) && !empty($editRec[0]->twitter)): echo $editRec[0]->twitter; endif;?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Instagram
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="instagram" id="instagram" value="<?php if(is_array($editRec) && !empty($editRec[0]->instagram)): echo $editRec[0]->instagram; endif;?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Profile Picture
                        </label>
                        <div class="col-lg-10 col-form-label">
                         <div class="cropme" style="width: 600px; height: 480px;">
                            </div> 
                         <input type="hidden" name="" id="realtravthumb"> 
                     
                            <?php if(!empty($editRec[0]->profileImage)):?>
                            <img src="<?php echo base_url()?>assets/frontImage/userprofiles/<?php echo $editRec[0]->profileImage;?>" alt="" style="width:100px;height:100px">
                                <input type="hidden" name="profileImages" value="<?php echo $editRec[0]->profileImage;?>">
                            <?php endif; ?> 
                            <label style="font-size: 12px;color: red;margin-left: 18px;">Note*: "Upload Image in png, jpeg, jpg, gif  format upto 2 MB, try to use the best image to represent your real traveller and also Image size width:500px and Height:400px</label>
                        </div>
                    </div>
                    <input type="hidden" name="editId" value="<?php echo $editRec[0]->id?>">
                    <div class="form-group m-form__group row divAlertStoriesDetails" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                   <?php $ans = $this->uri->segment('3');?>             
                                <input type="hidden" id="profile_id" name="profile_id" value="<?php echo (!empty($ans)) ? $ans : ''; ?>"/>
                                <button type="button" class="btn btn-brand editProfile">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
             <?php endif; ?>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->



        
    </div>
</div>
