<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Stories
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                  <!--<li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>-->
                    <li class="m-nav__item">
                        <a href="<?php echo base_url()?>stories/addstories" class="m-nav__link">
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            SEO Data
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>
            <?php if(is_array($realTravels)):?>
            <form class="m-form m-form--fit m-form--label-align-right" id="frmTravelStoriess" enctype="multipart/form-data">
                <div class="alert-success"></div>
                <div class="alert-danger"></div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Tags
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_tags" name="meta_tags" rows="5"><?php if(!empty($realTravels[0]->meta_tags)) { echo $realTravels[0]->meta_tags; }?></textarea>
                            <span class="m-form__help">
                                Add Text tags that describe your content eg: Leh trip, ladakh trip. (use comma to separate tags, Try to limit to 10 tags)
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_description" name="meta_description" rows="5"><?php if(!empty($realTravels[0]->meta_description)) { echo $realTravels[0]->meta_description; }?></textarea>
                            <span class="m-form__help">
                               “Describe the content on your page eg: “ Visit Leh on royal Enfield itinerary 9 days “ Try to keep use 160 characters
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                         URL
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="meta_url" name="meta_url" placeholder="Enter URL for Page" value="<?php if(!empty($realTravels[0]->meta_url)) { echo $realTravels[0]->meta_url; }?>">
                            <span class="m-form__help">“Enter a URL Structure eg: leh-ladakh-itinerary . using”-” between words is compulsory”</span>
                        </div>
                    </div>
                         <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Title
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_title" name="meta_title" rows="5"><?php echo (!empty($realTravels[0]->meta_title)) ? $realTravels[0]->meta_title : ''; ?></textarea>
                            <span class="m-form__help">
                              “This is what will people read if they find this page on google” Give the content a Title, Try to limit to 70 characters”
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Views Count
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control m-input do_validation" id="views_count" name="views_count" placeholder="Enter Views for page" value="<?php if(!empty($realTravels[0]->views_count)) { echo $realTravels[0]->views_count; }?>">
                             <span class="m-form__help">“Enter a random number”</span>
                        </div>
                    </div>
                   <!-- <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Status
                        </label>
                        <?php $status = [0 => 'Unpublished', 1 => 'Published'] ?>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control m-select2" id="is_published" name="is_published">
                               
                                    <option value="1" <?php if($realTravels[0]->is_published == 1){ echo "selected"; } ?>>Published</option>
                                    <option value="0" <?php if($realTravels[0]->is_published == 0){ echo "selected"; } ?>>Unpublished</option>
                               
                            </select>
                        </div>
                    </div>  -->                  
                </div>
       
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Stories
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
           
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Story Headline
                        </label>
                        <div class="col-lg-10 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input" name="story_head" id="story_head" value="<?php if(!empty($realTravels[0]->story_head)) { echo $realTravels[0]->story_head; }?>"/>
                        </div>
                    </div>                    
                </div>
                <!--<div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Stay Days
                        </label>
                        <div class="col-lg-4 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="stay_days" id="stay_days" value="<?php if(!empty($realTravels[0]->stay_days)) { echo $realTravels[0]->stay_days; }?>"/>
                        </div>
                    </div>                    
                </div> -->              
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Destination
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12" id="div_destination">
                            <select class="form-control m-select2" id="destination" name="destination">
                                <?php if(is_array($storiescities)){ 
                                    foreach($storiescities as $stories){
                                ?>
                                <option value="<?php echo $stories->id;?>"><?php echo $stories->name;?></option>
                                <?php }  } ?>      
                            </select>
                            <input type="hidden" name="hid_destination" id="hid_destination" />
                            <span class="m-form__help">
                                Select your Destinations  
                            </span>
                        </div>
                    </div>                    
                </div>
                <!--<div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Suitable For
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12" id="div_suitable">
                            <?php
                            $trip_category = [
                                'Family' => 'Family',
                                'Friends' => 'Friends',
                                'Honeymoon' => 'Honeymoon',
                                'Solo' => 'Solo',
                                'Weekend' => 'Weekend'
                            ];
                            ?>
                            <select class="form-control m-select2" id="trip_category" name="trip_category[]" multiple="multiple">
                                <?php $suitables = explode(",", $realTravels[0]->suitable); ?>
                                <optgroup label="Trip Category">
                                    <?php foreach ($trip_category as $category) { ?>
                                        <?php foreach ($suitables as $suitable) { ?>
                                            <option value="<?php echo $category; ?>" <?php echo (!empty($suitable) && $category == $suitable) ? 'selected' : ''; ?>>
                                                <?php echo $category; ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </optgroup>                               
                            </select>
                            <input type="hidden" name="hid_suitable" id="hid_suitable" />
                        </div>
                    </div>                    
                </div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Theme
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12" id="div_theme">
                            <?php
                            $trip_types = [
                                'Adventure' => 'Adventure',
                                'Beach' => 'Beach',
                                'Mountains' => 'Mountains',
                                'Forest' => 'Forest',
                                'Nature' => 'Nature',
                                'Urban' => 'Urban',
                                'Rural' => 'Rural',
                                'Others' => 'Others'
                            ];
                            ?>
                            <select class="form-control m-select2" id="trip_type" name="trip_type[]" multiple="multiple">
                                <?php $themes = explode(",", $realTravels[0]->theme); ?>
                                <optgroup label="Trip Type">
                                    <?php foreach ($trip_types as $type) { ?>
                                        <?php foreach ($themes as $theme) { ?>
                                            <option value="<?php echo $type; ?>" <?php echo (!empty($theme) && $type == $theme) ? 'selected' : ''; ?>>
                                                <?php echo $type; ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </optgroup>                               
                            </select>
                            <input type="hidden" name="hid_theme" id="hid_theme" />
                        </div>
                    </div>                    
                </div>-->
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Stories Details
                        </label>
                        <div id="editor" class="editor">
                   <?php if(!empty($realTravels[0]->story_details)) { echo $realTravels[0]->story_details; }?>
                </div>
                    </div>
                </div>
                
                  <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Story Video
                        </label>
                        <div class="col-lg-10 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input" name="story_video" id="story_video" value=" <?php if(!empty($realTravels[0]->story_video)) { echo $realTravels[0]->story_video; }?>"/>
                        </div>
                    </div>                    
                </div>
                
                
                <input type="hidden" name="storyid" value="<?php echo $realTravels[0]->id;?>">
                <div class="m-portlet__body">
                    <label class="col-form-label col-lg-2 col-sm-12">
                            Stories Image
                    </label>
                    <input type="file" name="storiesfile" id="storiesImage"><br/>
                    <label style="font-size: 12px;color: red;margin-left: 18px;">Note*: "Upload Image in png, jpeg, jpg, gif  format upto 2 MB, try to use the best image to represent your Story and also Image size width:600px and Height:400px</label><br/>
                    <?php if(!empty($realTravels[0]->storiesImage)){ ?>
                        <img src="<?php echo base_url()?>assets/frontImage/stories/<?php echo $realTravels[0]->storiesImage; ?>" style="height:150px;width:150px">
                        <input type="hidden" name="storiesImages" value="<?php echo $realTravels[0]->storiesImage;?>">
                        <?php } ?>
                </div>

                <div class="m-portlet__body">
                    <div class="form-group m-form__group row divAlertStoriesDetails" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="button" class="btn btn-brand btnEditSubmitStories">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary btnCancelStories">
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