<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Stories
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Stories
                            </span>
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

            <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Tags
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_tags" name="meta_tags" rows="5"><?php echo (!empty($stories->meta_tags)) ? $stories->meta_tags : ''; ?></textarea>
                            <span class="m-form__help">
                                Enter comma seperated. eg. tag1, tag2, ...
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_description" name="meta_description" rows="5"><?php echo (!empty($stories->meta_description)) ? $stories->meta_description : ''; ?></textarea>
                            <span class="m-form__help">
                                Enter Description
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta URL
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="meta_url" name="meta_url" placeholder="Enter URL for Page" value="<?php echo (!empty($stories->meta_url)) ? $stories->meta_url : ''; ?>">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Views Count
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="views_count" name="views_count" placeholder="Enter Views for page" value=<?php echo (!empty($stories->views_count)) ? $stories->views_count : ''; ?>>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Status
                        </label>
                        <?php $status = [0 => 'Unpublished', 1 => 'Published'] ?>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control m-select2" id="is_published" name="is_published">
                                <?php foreach ($status as $key => $value) { ?>
                                    <option value="<?php echo $key; ?>" 
                                            <?php echo (!empty($stories->is_published) && $key == $stories->is_published) ? 'selected' : ''; ?>>
                                                <?php echo $value; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>                    
                </div>
            </form>
        </div>
    </div>

    <div class="m-content">
        <!--begin::Portlet-->
        <div class="m-portlet">
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
            <form class="m-form m-form--fit m-form--label-align-right" id="frmTravelStories" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Story Headline
                        </label>
                        <div class="col-lg-10 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input" name="story_head" id="story_head" value="<?php echo (!empty($stories->story_head)) ? $stories->story_head : ''; ?>"/>
                        </div>
                    </div>                    
                </div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Stay Days
                        </label>
                        <div class="col-lg-4 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="stay_days" id="stay_days" value="<?php echo (!empty($stories->stay_days)) ? $stories->stay_days : ''; ?>"/>
                        </div>
                    </div>                    
                </div>               
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Destination
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12" id="div_destination">
                            <select class="form-control m-select2" id="destination" name="destination">
                                <?php $destinations = explode(",", $stories->destination); ?>
                                <?php foreach ($cities as $city) { ?>
                                    <?php foreach ($destinations as $destination) { ?>
                                        <option value="<?php echo $city->city_name; ?>"
                                                <?php echo (!empty($destination) && $city->city_name == $destination) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="hid_destination" id="hid_destination" />
                            <span class="m-form__help">
                                Select your Destinations  
                            </span>
                        </div>
                    </div>                    
                </div>
                <div class="m-portlet__body">
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
                            <select class="form-control m-select2" id="trip_category" name="trip_category" multiple="multiple">
                                <?php $suitables = explode(",", $stories->suitable); ?>
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
                            <select class="form-control m-select2" id="trip_type" name="trip_type" multiple="multiple">
                                <?php $themes = explode(",", $stories->theme); ?>
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
                </div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Stories Details
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <textarea data-upload="<?php echo base_url('admin/upload_stories'); ?>" id="summernote" name="summernote"><?php echo (!empty($stories->story_details)) ? $stories->story_details : ''; ?></textarea>
                        </div>
                    </div>
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
                                <input type="hidden" name="story_id" id="story_id" value="<?php echo (!empty($this->uri->segment('3'))) ? $this->uri->segment('3') : ''; ?>"/>
                                <button type="button" class="btn btn-brand btnSubmitStories">
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
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
</div>