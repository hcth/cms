<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Itineraries Details
                </h3>  
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">  
        <!--begin::Portlet-->
        <div class="m-portlet"> 
            <div class="m-portlet__body m-form">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab active" data-toggle="tab" href="#div_seo_data" id="nav_seo_data">
                            SEO Data
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#div_trip_details" id="nav_trip_details">
                            Trip Details
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#div_trip_summary" id="nav_trip_summary">
                            Trip Summary
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#div_packaging_list" id="nav_packaging_list">
                            Packaging List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#div_trip_gallery" id="nav_trip_gallery">
                            Trip Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#div_itineary_details" id="nav_itineary_details">
                            Itineary Details
                        </a>
                    </li>

                </ul>
                <input type="hidden" id="trip_id" name="trip_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                <div class="tab-content">
                    <div class="tab-pane active" id="div_seo_data" role="tabpanel">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Meta Tags 
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" name="meta_tags" id="meta_tags" rows="5"><?php echo (!empty($trip_info->meta_tags)) ? $trip_info->meta_tags : ''; ?></textarea> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Meta Description 
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" name="meta_description" id="meta_description" rows="5"><?php echo (!empty($trip_info->meta_description)) ? $trip_info->meta_description : ''; ?></textarea> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                View Count 
                            </label>
                            <div class="col-md-9">
                                <input type="text" name="" class="form-control" name="views" id="views" value="<?php echo (!empty($trip_info->views)) ? $trip_info->views : ''; ?>"> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                URL 
                            </label>
                            <div class="col-md-9">
                                <input type="text" name="" class="form-control" name="url" id="url" value="<?php echo (!empty($trip_info->url)) ? $trip_info->url : ''; ?>">
                            </div>
                        </div>
                        <div class="m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="button" class="btn btn-brand btnSaveSeoData" data-next_step="nav_trip_details">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/. end tab -->
                    <div class="tab-pane" id="div_trip_details" role="tabpanel">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Itinerary Headline<br/>
                                <span class="m-form__help m--font-info">
                                    Give your itineray a name, Try to include the destination in your headline
                                </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" name="itinerary_headline" id="itinerary_headline" rows="5" placeholder="Name your Trip Eg: 15 days in natures arms in Leh and Himachal"><?php echo (!empty($trip_info->headline)) ? $trip_info->headline : ''; ?></textarea> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                About the Trip / Destination<br/>
                                <span class="m-form__help m--font-info">
                                    Try to define the destination and your trip
                                </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" name="about_itinerary" id="about_itinerary" rows="5" placeholder="Write about your trip here"><?php echo (!empty($trip_info->about)) ? $trip_info->about : ''; ?></textarea>

                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Important Things to know<br/>
                                <span class="m-form__help m--font-info">
                                    Describe in detail Specific things that travellers must know when they are visiting this destination
                                </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" name="imp_things" id="imp_things" rows="5" placeholder="Eg: Travellers must carry a dry bag, Beware of thiefs, should take medicies for altutude sickness"><?php echo (!empty($trip_info->imp_things)) ? $trip_info->imp_things : ''; ?></textarea>  
                            </div>
                        </div>
                        <div class="form-group m-form__group row divAlertTripDetails" style="display:none;">
                            <div class="col-lg-1"></div>
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                            </div>
                        </div>
                        <div class="m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="button" class="btn btn-brand btnSaveTripDetails" data-next_step="nav_trip_summary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.end tab --> 
                    <div class="tab-pane" id="div_trip_summary" role="tabpanel">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Start Point (Departure)<br/>
                                <span class="m-form__help m--font-info">
                                    Select your Start point
                                </span>
                            </label>
                            <div class="col-md-9">
                                <select class="form-control m-select2" id="start_point" name="start_point">
                                    <?php foreach ($cities as $city) { ?> 
                                        <option value="<?php echo $city->city_name; ?>" 
                                                <?php echo (!empty($trip_info->departure) && $city->city_name == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                End Point (Destination)<br/>
                                <span class="m-form__help m--font-info">
                                    Select Destinations you have covered in this itinerary
                                </span>
                            </label>
                            <div class="col-md-9" id="div_end_point">
                                <select class="form-control m-select2" id="end_point" name="end_point" multiple="multiple">
                                 
                <?php $destinations = explode(",",$trip_info->destination); ?>
                                    <?php foreach ($cities as $city) { ?>
                                        <?php foreach ($destinations as $destination) { ?>
                                            <option value="<?php echo $city->city_name; ?>"
                                                    <?php echo (!empty($destination) && $city->city_name == $destination) ? 'selected' : ''; ?>>
                                                        <?php echo $city->city_name; ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="hid_end_point" id="hid_end_point" /> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Best Season to Visit
                            </label>
                            <div class="col-md-9" id="div_season_to_visit">
                                <?php
                                $months = [
                                    'January' => 'January',
                                    'February' => 'February',
                                    'March' => 'March',
                                    'April' => 'April',
                                    'May' => 'May',
                                    'June' => 'June',
                                    'July' => 'July',
                                    'August' => 'August',
                                    'September' => 'September',
                                    'October' => 'October',
                                    'November' => 'November',
                                    'December' => 'December',
                                ];
                                ?>
                                <select class="form-control m-select2" id="season_to_visit" name="season_to_visit" multiple="multiple">
                                    <?php $months_to_visit = explode(",", $trip_info->month_to_visit); ?>
                                    <?php foreach ($months as $month) { ?>
                                        <?php foreach ($months_to_visit as $month_to_visit) { ?>
                                            <option value="<?php echo $month; ?>"
                                                    <?php echo (!empty($month_to_visit) && $month == $month_to_visit) ? 'selected' : ''; ?>>
                                                        <?php echo $month; ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="hid_season_to_visit" id="hid_season_to_visit" />
                                <!--</div>-->
                            </div>
                        </div>
                        <!-- <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Visit Dates<br/>
                                <span class="m-form__help m--font-info">
                                    Pick date range for your trip
                                </span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-daterange input-group tripDateRange">
                                    <input type="text" class="form-control m-input" id="visit_date_start" name="visit_date_start" 
                                           value="<?php echo (!empty($trip_info->visit_date_from)) ? $trip_info->visit_date_from : ''; ?>"
                                           />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-ellipsis-h"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="visit_date_end" id="visit_date_end"
                                           value="<?php echo (!empty($trip_info->visit_date_to)) ? $trip_info->visit_date_to : ''; ?>"
                                           />
                                </div> 
                            </div>
                        </div> -->
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Total Trip Days<br/>
                                <span class="m-form__help m--font-info">
                                    Please give specific name for Itineraries.
                                </span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-input" id="total_trip_days" name="total_trip_days" placeholder="Total Trip Days" readonly="readonly"
                                       value="<?php echo (!empty($trip_info->trip_days)) ? $trip_info->trip_days : ''; ?>"/> 
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Total Budget
                                <span class="m-form__help m--font-info">
                                    Please give specific name for Itineraries.
                                </span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-input" id="total_budget" name="total_budget" placeholder="Enter Total Trip Budget"
                                       value="<?php echo (!empty($trip_info->budget)) ? $trip_info->budget : ''; ?>"
                                       />
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Trip / Destination Category
                            </label>
                            <div class="col-md-9" id="div_trip_category">
                                <select class="form-control m-select2" id="trip_category" name="trip_category" multiple="multiple">
                                    <optgroup label="Trip Category">
                                        <option value="Family"
                                                <?php echo (!empty($trip_info->category) && "Family" == $trip_info->category) ? 'selected' : ''; ?>>
                                            Family</option>
                                        <option value="Friends"
                                                <?php echo (!empty($trip_info->category) && "Friends" == $trip_info->category) ? 'selected' : ''; ?>>
                                            Friends</option>
                                        <option value="Honeymoon"
                                                <?php echo (!empty($trip_info->category) && "Honeymoon" == $trip_info->category) ? 'selected' : ''; ?>>
                                            Honeymoon</option>
                                        <option value="Solo"
                                                <?php echo (!empty($trip_info->category) && "Solo" == $trip_info->category) ? 'selected' : ''; ?>>
                                            Solo</option>
                                        <option value="Weekend"
                                                <?php echo (!empty($trip_info->category) && "Weekend" == $trip_info->category) ? 'selected' : ''; ?>>
                                            Weekend</option>
                                    </optgroup>                               
                                </select>
                                <input type="hidden" name="hid_trip_category" id="hid_trip_category" />
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Trip / Destination Type
                            </label>
                            <div class="col-md-9" id="div_trip_type">
                                <select class="form-control m-select2" id="trip_type" name="trip_type" multiple="multiple">
                                    <optgroup label="Trip Type">
                                        <option value="Adventure"
                                                <?php echo (!empty($trip_info->type) && "Adventure" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Adventure</option>
                                        <option value="Beach"
                                                <?php echo (!empty($trip_info->type) && "Beach" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Beach</option>
                                        <option value="Mountains"
                                                <?php echo (!empty($trip_info->type) && "Mountains" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Mountains</option>
                                        <option value="Forest"
                                                <?php echo (!empty($trip_info->type) && "Forest" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Forest</option>
                                        <option value="Nature"
                                                <?php echo (!empty($trip_info->type) && "Nature" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Nature</option>
                                        <option value="Urban"
                                                <?php echo (!empty($trip_info->type) && "Urban" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Urban</option>
                                        <option value="Rural"
                                                <?php echo (!empty($trip_info->type) && "Rural" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Rural</option>
                                        <option value="Others"
                                                <?php echo (!empty($trip_info->type) && "Others" == $trip_info->type) ? 'selected' : ''; ?>>
                                            Others</option>
                                    </optgroup>                               
                                </select>
                                <input type="hidden" name="hid_trip_type" id="hid_trip_type" />
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Mode of Transport
                            </label>
                            <div class="col-md-9" id="div_transport_mode">
                                <select class="form-control m-select2" id="transport_mode" name="transport_mode" multiple="multiple">
                                    <optgroup label="Transport Mode">
                                        <option value="Car"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Car" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Car</option>
                                        <option value="Public Transport"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Public Transport" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Public Transport</option>
                                        <option value="Train"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Train" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Train</option>
                                        <option value="Plane"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Plane" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Plane</option>
                                        <option value="Ship"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Ship" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Ship</option>
                                        <option value="Bus"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Bus" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Bus</option>
                                        <option value="Bicycle"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Bicycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Bicycle</option>
                                        <option value="Lift"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Lift" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                            Lift</option>
                                        <option value="Motorcycle"
                                                <?php echo (!empty($trip_info->mode_of_transport) && "Motorcycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>                                        
                                            Motorcycle</option>
                                    </optgroup>
                                </select>
                                <input type="hidden" name="hid_transport_mode" id="hid_transport_mode" />
                            </div>
                        </div>
                        <div class="form-group m-form__group row divAlertTripSummary" style="display:none;">
                            <div class="col-lg-1"></div>
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">                            
                            </div>
                        </div>
                        <div class="m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="button" class="btn btn-brand btnSaveTripSummary"  data-next_step="nav_packaging_list">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.end tab -->
                    <div class="tab-pane" id="div_packaging_list" role="tabpanel">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Food
                                <span class="m-form__help m--font-info">
                                    Please give specific name for Itineraries.
                                </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" id="food" name="food" rows="3"><?php echo (!empty($trip_info->food)) ? $trip_info->food : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Accessories
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" id="accessories" name="accessories" rows="3"><?php echo (!empty($trip_info->accessories)) ? $trip_info->accessories : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Clothes
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" id="clothes" name="clothes" rows="5"><?php echo (!empty($trip_info->clothes)) ? $trip_info->clothes : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Medicines
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control m-input" id="medicines" name="medicines" rows="3"><?php echo (!empty($trip_info->medicines)) ? $trip_info->medicines : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group m-form__group row divAlertPackagingList" style="display:none;">
                            <div class="col-lg-1"></div>
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgPackagingList" role="alert">                            
                            </div>
                        </div>
                        <div class="m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="button" class="btn btn-brand btnSavePackagingList" data-next_step="nav_trip_gallery">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.end tab -->
                    <div class="tab-pane" id="div_trip_gallery" role="tabpanel">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Add Video URL
                            </label>
                            <div class="col-md-9">
                                <?php $video_url = ""; ?>
                                <?php
                                if (!empty($trip_uploads)) {
                                    foreach ($trip_uploads as $upload) {
                                        if ($upload->upload_type == "video") {
                                            $video_url = $upload->filename;
                                        }
                                    }
                                }
                                ?>
                                <textarea rows="1" cols="5" class="form-control" name="video_url" id="video_url"><?php echo (!empty($video_url)) ? $video_url : ''; ?></textarea>
                                <!-- <div class="m-dropzone dropzone m-dropzone--primary" action="<?php //echo base_url('admin/upload_video');                                         ?>" id="m-dropzone-two">
                                    <div class="m-dropzone__msg dz-message needsclick">
                                        <h3 class="m-dropzone__msg-title">
                                            Drop files here or click to upload.
                                        </h3>
                                        <span class="m-dropzone__msg-desc">
                                            Only videos files are allowed for upload
                                        </span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-3">
                                Add Images
                            </label>
                            <div class="col-md-9">
                                <div class="m-dropzone dropzone m-dropzone--success" action="<?php echo base_url('admin/upload_image'); ?>" id="m-dropzone-three">
                                    <div class="m-dropzone__msg dz-message needsclick">
                                        <h3 class="m-dropzone__msg-title">
                                            Drop files here or click to upload.
                                        </h3>
                                        <span class="m-dropzone__msg-desc">
                                            Only image files are allowed for upload
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="button" class="btn btn-brand btnSaveTripGallery" data-next_step="nav_itineary_details">Save</button>
                                        <button type="reset" class="btn btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.end tab -->
                    <div class="tab-pane" id="div_itineary_details" role="tabpanel">
                        <!--Begin::Main Portlet-->
                        <div class="m-portlet m-portlet--full-height" id="itineraries_details_html" style="display:block;">
                            <?php if (!empty($trip_details)) { ?>
                                <!--begin: Portlet Head-->
                                <div class="m-portlet__head p-4">
                                    <div class="m-portlet__head-caption"> 
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-md-3">
                                                Visit Dates<br/>
                                                <span class="m-form__help m--font-info">
                                                    Pick date range for your trip
                                                </span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-daterange input-group tripDateRange" >
                                                    <input type="text" class="form-control m-input" id="itinerary_date_start" name="itinerary_date_start" 
                                                           value="<?php echo (!empty($trip_info->visit_date_from)) ? $trip_info->visit_date_from : ''; ?>"
                                                           />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-ellipsis-h"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="itinerary_date_end" id="itinerary_date_end"
                                                           value="<?php echo (!empty($trip_info->visit_date_to)) ? $trip_info->visit_date_to : ''; ?>"
                                                           />
                                                </div>                                               
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                                <!--end: Portlet Head-->
                                <!--begin: Portlet Body-->
                                <div class="m-portlet__body m-portlet__body--no-padding">
                                    <!--begin: Form Wizard-->
                                    <div class="m-wizard m-wizard--3 m-wizard--success m-wizard--step-first" id="m_wizard">
                                        <div class="row m-row--no-padding">
                                            <div class="col-xl-3 col-lg-12">
                                                <!--begin: Form Wizard Head -->
                                                <div class="m-wizard__head">
                                                    <!--begin: Form Wizard Progress -->
                                                    <div class="m-wizard__progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                        </div>
                                                    </div>
                                                    <!--end: Form Wizard Progress --> 
                                                    <!--begin: Form Wizard Nav -->
                                                    <div class="m-wizard__nav">
                                                        <div class="m-wizard__steps">  
                                                            <?php $days = $trip_info->trip_days ?>
                                                            <?php if (!empty($trip_details)) { ?>
                                                                <?php
                                                                for ($i = 0; $i < count($trip_details); $i++) {
                                                                    $counter = $trip_details[$i]->day_no;
                                                                    ?>
                                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_<?php echo $counter; ?>">
                                                                        <div class="m-wizard__step-info">
                                                                            <a href="#" class="m-wizard__step-number">
                                                                                <span>
                                                                                    <span>
                                                                                        <?php echo $counter; ?>
                                                                                    </span>
                                                                                </span>
                                                                            </a>
                                                                            <div class="m-wizard__step-line">
                                                                                <span></span>
                                                                            </div>
                                                                            <div class="m-wizard__step-label">
                                                                                <?php echo 'Day - ' . $counter; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if (count($trip_details) != $days) { ?>
                                                                <?php for ($i = count($trip_details) + 1; $i <= $days; $i++) { ?>
                                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_<?php echo $i; ?>">
                                                                        <div class="m-wizard__step-info">
                                                                            <a href="#" class="m-wizard__step-number">
                                                                                <span>
                                                                                    <span>
                                                                                        <?php echo $i; ?>
                                                                                    </span>
                                                                                </span>
                                                                            </a>
                                                                            <div class="m-wizard__step-line">
                                                                                <span></span>
                                                                            </div>
                                                                            <div class="m-wizard__step-label">
                                                                                <?php echo 'Day - ' . $i; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <!--end: Form Wizard Nav -->
                                                </div>
                                                <!--end: Form Wizard Head -->
                                            </div>
                                            <div class="col-xl-9 col-lg-12">
                                                <!--begin: Form Wizard Form-->
                                                <div class="m-wizard__form">

                                                    <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" novalidate="novalidate" method="post">
                                                        <!--begin: Form Body -->
                                                        <div class="m-portlet__body m-portlet__body--no-padding">
                                                            <!--begin: Form Wizard Step 1-->
                                                            <?php
                                                            for ($i = 0; $i < count($trip_details); $i++) {
                                                                $counter = $trip_details[$i]->day_no;
                                                                ?>
                                                                <div class="m-wizard__form-step <?php if ($counter == 1) { ?>m-wizard__form-step--current<?php } ?>" id="m_wizard_form_step_<?php echo $counter; ?>">
                                                                    <div class="m-form__section m-form__section--first">
                                                                        <div class="m-form__heading">
                                                                            <h3 class="m-form__heading-title">
                                                                                Day - <?php echo $counter; ?>
                                                                            </h3>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Date:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input type="text" class="form-control tripDate" id="trip_date<?php echo $counter; ?>" name="trip_date<?php echo $counter; ?>"  placeholder="Select date" value="<?php echo (!empty($trip_details[$i]->date)) ? $trip_details[$i]->date : ''; ?>"/>
                                                                                <span class="m-form__help">
                                                                                    Please enter valid date
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * From:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <div class="input-group m-input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">
                                                                                            <i class="la la-map-marker"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <select class="form-control m-select2-ajax" name="from_city_<?php echo $counter; ?>" id="from_city_<?php echo $counter; ?>" >
                                                                                        <?php foreach ($cities as $city) { ?> 
                                                                                            <option value="<?php echo $city->city_name; ?>"
                                                                                                    <?php echo (!empty($trip_info->destination) && $city->city_name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                                                        <?php echo $city->city_name; ?>
                                                                                            </option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <span class="m-form__help">
                                                                                    We'll never share your email with anyone else
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * To:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group m-input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text">
                                                                                                <i class="la la-map-marker"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                        <select class="form-control m-select2-ajax" name="to_city_<?php echo $counter; ?>" id="to_city_<?php echo $counter; ?>" >
                                                                                            <?php foreach ($cities as $city) { ?> 
                                                                                                <option value="<?php echo $city->city_name; ?>"
                                                                                                        <?php echo (!empty($trip_info->destination) && $city->city_name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                                                            <?php echo $city->city_name; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="m-form__help">
                                                                                    We'll never share your email with anyone else
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Mode Of Transport:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group m-input-group">
                                                                                        <select class="form-control m-select2-ajax" name="mode_of_transport_<?php echo $counter; ?>" id="mode_of_transport_<?php echo $counter; ?>">
                                                                                            <optgroup label="Transport Mode">
                                                                                                <option value="Car"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Car" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Car</option>
                                                                                                <option value="Public Transport"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Public Transport" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Public Transport</option>
                                                                                                <option value="Train"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Train" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Train</option>
                                                                                                <option value="Plane"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Plane" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Plane</option>
                                                                                                <option value="Ship"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Ship" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Ship</option>
                                                                                                <option value="Bus"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Bus" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Bus</option>
                                                                                                <option value="Bicycle"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Bicycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Bicycle</option>
                                                                                                <option value="Lift"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Lift" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                    Lift</option>
                                                                                                <option value="Motorcycle"
                                                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "Motorcycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>                                        
                                                                                                    Motorcycle</option>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="m-form__help">
                                                                                    We'll never share your email with anyone else
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Travel Time:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input type="text" name="travel_time_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->travel_time)) ? $trip_details[$i]->travel_time : ''; ?>" />
                                                                                <span class="m-form__help">
                                                                                    Street address, P.O. box, company name, c/o
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                Distance:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input type="text" name="distance_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->distance)) ? $trip_details[$i]->distance : ''; ?>" >
                                                                                <span class="m-form__help">
                                                                                    Appartment, suite, unit, building, floor, etc
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Details:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <textarea class="form-control m-input" id="details_<?php echo $counter; ?>" name="details_<?php echo $counter; ?>" rows="5" placeholder="Eg. We left hotel at 5am so see the sunrise..."><?php echo (!empty($trip_details[$i]->details)) ? $trip_details[$i]->details : ''; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Stay:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input type="text" name="stay_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->stay)) ? $trip_details[$i]->stay : ''; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Food:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input type="text" name="food_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->food)) ? $trip_details[$i]->food : ''; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                * Things to do:
                                                                            </label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <textarea class="form-control m-input" id="things_to_do_<?php echo $counter; ?>" name="things_to_do_<?php echo $counter; ?>" rows="3"><?php echo (!empty($trip_details[$i]->things_to_do)) ? $trip_details[$i]->things_to_do : ''; ?></textarea>
                                                                            </div>
                                                                        </div>                                                    
                                                                    </div>
                                                                </div>
                                                            <?php } ?>

                                                            <?php if (count($trip_details) != $days) { ?>
                                                                <?php for ($i = count($trip_details) + 1; $i <= $days; $i++) { ?>
                                                                    <div class="m-wizard__form-step <?php if ($i == 1) { ?>m-wizard__form-step--current<?php } ?>" id="m_wizard_form_step_<?php echo $i; ?>">
                                                                        <div class="m-form__section m-form__section--first">
                                                                            <div class="m-form__heading">
                                                                                <h3 class="m-form__heading-title">
                                                                                    Day - <?php echo $i; ?>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Date:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <input type="text" class="form-control tripDate" id="trip_date<?php echo $i; ?>" name="trip_date<?php echo $i; ?>"  placeholder="Select date" value="<?php echo (!empty($trip_details[$i]->date)) ? $trip_details[$i]->date : ''; ?>"/>
                                                                                    <span class="m-form__help">
                                                                                        Please enter valid date
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * From:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <div class="input-group m-input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text">
                                                                                                <i class="la la-map-marker"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                        <select class="form-control m-select2-ajax" name="from_city_<?php echo $i; ?>" id="from_city_<?php echo $i; ?>" >
                                                                                            <?php foreach ($cities as $city) { ?> 
                                                                                                <option value="<?php echo $city->city_name; ?>"
                                                                                                        <?php echo (!empty($trip_info->destination) && $city->city_name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                                                            <?php echo $city->city_name; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <span class="m-form__help">
                                                                                        We'll never share your email with anyone else
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * To:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group m-input-group">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="la la-map-marker"></i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <select class="form-control m-select2-ajax" name="to_city_<?php echo $i; ?>" id="to_city_<?php echo $i; ?>" >
                                                                                                <?php foreach ($cities as $city) { ?> 
                                                                                                    <option value="<?php echo $city->city_name; ?>"
                                                                                                            <?php echo (!empty($trip_info->destination) && $city->city_name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                                                                <?php echo $city->city_name; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span class="m-form__help">
                                                                                        We'll never share your email with anyone else
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Mode Of Transport:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group m-input-group">
                                                                                            <select class="form-control m-select2-ajax" name="mode_of_transport_<?php echo $i; ?>" id="mode_of_transport_<?php echo $i; ?>">
                                                                                                <optgroup label="Transport Mode">
                                                                                                    <option value="Car"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Car" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Car</option>
                                                                                                    <option value="Public Transport"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Public Transport" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Public Transport</option>
                                                                                                    <option value="Train"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Train" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Train</option>
                                                                                                    <option value="Plane"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Plane" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Plane</option>
                                                                                                    <option value="Ship"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Ship" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Ship</option>
                                                                                                    <option value="Bus"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Bus" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Bus</option>
                                                                                                    <option value="Bicycle"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Bicycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Bicycle</option>
                                                                                                    <option value="Lift"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Lift" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>
                                                                                                        Lift</option>
                                                                                                    <option value="Motorcycle"
                                                                                                            <?php echo (!empty($trip_info->mode_of_transport) && "Motorcycle" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>                                        
                                                                                                        Motorcycle</option>
                                                                                                </optgroup>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span class="m-form__help">
                                                                                        We'll never share your email with anyone else
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Travel Time:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <input type="text" name="travel_time_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->travel_time)) ? $trip_details[$i]->travel_time : ''; ?>" />
                                                                                    <span class="m-form__help">
                                                                                        Street address, P.O. box, company name, c/o
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    Distance:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <input type="text" name="distance_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->distance)) ? $trip_details[$i]->distance : ''; ?>" >
                                                                                    <span class="m-form__help">
                                                                                        Appartment, suite, unit, building, floor, etc
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Details:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <textarea class="form-control m-input" id="details_<?php echo $i; ?>" name="details_<?php echo $i; ?>" rows="5" placeholder="Eg. We left hotel at 5am so see the sunrise..."><?php echo (!empty($trip_details[$i]->details)) ? $trip_details[$i]->details : ''; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Stay:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <input type="text" name="stay_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->stay)) ? $trip_details[$i]->stay : ''; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Food:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <input type="text" name="food_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->food)) ? $trip_details[$i]->food : ''; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                                                    * Things to do:
                                                                                </label>
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <textarea class="form-control m-input" id="things_to_do_<?php echo $i; ?>" name="things_to_do_<?php echo $i; ?>" rows="3"><?php echo (!empty($trip_details[$i]->things_to_do)) ? $trip_details[$i]->things_to_do : ''; ?></textarea>
                                                                                </div>
                                                                            </div>                                                    
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <!--end: Form Wizard Step 1-->                                                                                                                                                                        
                                                        </div>
                                                        <!--end: Form Body -->
                                                        <!--begin: Form Actions -->
                                                        <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                                            <div class="m-form__actions">
                                                                <div class="row">
                                                                    <div class="col-lg-6 m--align-left">
                                                                        <a href="javascript:void(0);" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
                                                                            <span>
                                                                                <i class="la la-arrow-left"></i>
                                                                                &nbsp;&nbsp;
                                                                                <span>
                                                                                    Back
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-6 m--align-right">
                                                                        <a href="javascript:void(0);" class="btn btn-primary m-btn m-btn--custom m-btn--icon saveItineraryDetails" data-wizard-action="submit">
                                                                            <span>
                                                                                <i class="la la-check"></i>
                                                                                &nbsp;&nbsp;
                                                                                <span>
                                                                                    Submit
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-success m-btn m-btn--custom m-btn--icon saveItineraryDetails" data-wizard-action="next">
                                                                            <span>
                                                                                <span>
                                                                                    Save &amp; Continue
                                                                                </span>
                                                                                &nbsp;&nbsp;
                                                                                <i class="la la-arrow-right"></i>
                                                                            </span>
                                                                        </a>
                                                                        <input type="hidden" name="itinerary_size" id="itinerary_size" value="<?php echo (!empty($trip_info->trip_days)) ? $trip_info->trip_days : ''; ?>"/>
                                                                        <input type="hidden" id="itinerary_details_id" name="itinerary_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end: Form Actions -->
                                                    </form>
                                                </div>
                                                <!--end: Form Wizard Form-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard-->
                                </div>
                            <?php } ?>
                        </div>
                        <!--End::Main Portlet-->
                    </div><!--/.end tab -->
                </div>
            </div>
        </div>
        <!--end::Portlet-->  



        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--full-height">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Itineraries Details
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed"  role="tab" id="accordion_seo_data" data-toggle="collapse" href="#accordion_seo_data_body" aria-expanded=" false">
                            <span class="m-accordion__item-title">
                                SEO Data
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_seo_data_body" class="" role="tabpanel" aria-labelledby="accordion_seo_data" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item--> 
                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="accordion_trip_details" data-toggle="collapse" href="#accordion_trip_details_body" aria-expanded="false">
                            <span class="m-accordion__item-title">
                                Trip Details
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_trip_details_body" class=" " role="tabpanel" aria-labelledby="accordion_trip_details" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item--> 
                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="accordion_trip_summary" data-toggle="collapse" href="#accordion_trip_summary_body" aria-expanded="false">
                            <span class="m-accordion__item-title">
                                Trip Summary
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_trip_summary_body" class=" " role="tabpanel" aria-labelledby="accordion_trip_summary" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="accordion_div_packaging_list" data-toggle="collapse" href="#accordion_div_packaging_list_body" aria-expanded="false">
                            <span class="m-accordion__item-title">
                                Packaging List
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_div_packaging_list_body" class=" " role="tabpanel" aria-labelledby="accordion_div_packaging_list" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="accordion_div_trip_gallery" data-toggle="collapse" href="#accordion_div_trip_gallery_body" aria-expanded="false">
                            <span class="m-accordion__item-title">
                                Trip Gallery
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_div_trip_gallery_body" class=" " role="tabpanel" aria-labelledby="accordion_div_trip_gallery" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="accordion_div_itineary_details" data-toggle="collapse" href="#accordion_div_itineary_details_body" aria-expanded="false">
                            <span class="m-accordion__item-title">
                                Itineary Details
                            </span>
                            <span class="m-accordion__item-mode"> 
                            </span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="accordion_div_itineary_details_body" class=" " role="tabpanel" aria-labelledby="accordion_div_itineary_details" data-parent="#m_accordion_1">
                            <span>

                            </span>
                        </div>
                    </div>
                    <!--end::Item-->

                </div>
                <!--end::Section-->
            </div>
        </div>
        <!--end::Portlet-->



    </div>
</div>
<!--<script src="<?php // echo JSURL . 'js/admin/jquery.min.js';                  ?>" type="text/javascript"></script>-->
