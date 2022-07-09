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
                <div class="tab-content">
                    <div class="tab-pane active" id="div_seo_data" role="tabpanel">
                        <form id="seodata">
                            <div class="alert-success"></div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Meta Tags 
                                </label>
                                <div class="col-md-9">
                                    <textarea class="form-control m-input" name="meta_tags" id="meta_tags" rows="5"><?php if(isset($itineraries) && $itineraries->meta_tags): echo $itineraries->meta_tags; endif;?></textarea> 
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Meta Description 
                                </label>
                                <div class="col-md-9">
                                    <textarea class="form-control m-input" name="meta_description" id="meta_description" rows="5"><?php if(isset($itineraries) && $itineraries->meta_description): echo $itineraries->meta_description; endif;?></textarea> 
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    View Count 
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="viewcount" class="form-control" name="views" id="views" value="<?php if(isset($itineraries) && $itineraries->views): echo $itineraries->views; endif;?>"> 
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    URL 
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="url" class="form-control" name="url" id="url" value="<?php if(isset($itineraries) && $itineraries->url): echo $itineraries->url; endif;?>">
                                </div>
                            </div>
                             <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Meta title 
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="meta_title" class="form-control" name="meta_title" id="url" value="<?php if(isset($itineraries) && $itineraries->meta_title): echo $itineraries->meta_title; endif;?>">
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

                        </form>
                    </div><!--/. end tab -->


                    <div class="tab-pane" id="div_trip_details" role="tabpanel">

                        <form id="itineraydetails">
                            <div class="alert-success"></div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Itinerary Headline<br/>
                                    <span class="m-form__help m--font-info">
                                        Give your itineray a name, Try to include the destination in your headline
                                    </span>
                                </label>
                                
                                <div class="col-md-9">
                                     <div id="editor" class="editor">
                                        <?php if(isset($itineraries) && $itineraries->headline): echo $itineraries->headline; endif;?>
                                    </div>
                                    <input type="hidden" name="heading">
                                   <!-- <textarea class="form-control m-input" name="itinerary_headline" id="itinerary_headline" rows="5" placeholder="Name your Trip Eg: 15 days in natures arms in Leh and Himachal"><?php if(isset($itineraries) && $itineraries->headline): echo $itineraries->headline; endif;?></textarea> -->
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
                                    <div id="editor1" class="editor1">
                                    <?php if(isset($itineraries) && $itineraries->about): echo $itineraries->about; endif;?>
                                    </div>
                                    <input type="hidden" name="about">
                                    <!--<textarea class="form-control m-input" name="about_itinerary" id="about_itinerary" rows="5" placeholder="Write about your trip here"><?php if(isset($itineraries) && $itineraries->about): echo $itineraries->about; endif;?></textarea>-->

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
                                    <div id="editor2" class="editor2">
                                    <?php if(isset($itineraries) && $itineraries->imp_things): echo $itineraries->imp_things; endif;?>
                                    </div>
                                    <input type="hidden" name="things">
                                   <!-- <textarea class="form-control m-input" name="imp_things" id="imp_things" rows="5" placeholder="Eg: Travellers must carry a dry bag, Beware of thiefs, should take medicies for altutude sickness"><?php if(isset($itineraries) && $itineraries->imp_things): echo $itineraries->imp_things; endif;?></textarea>  -->
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
                        </form>
                    </div><!--/.end tab --> 

                    <div class="tab-pane" id="div_trip_summary" role="tabpanel">
                        <form id="itinerarysummary">
                            <div class="alert-success"></div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                    
                                    Start Point (Departure)<br/>
                                    <span class="m-form__help m--font-info">
                                        Select your Start point
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <?php 
                                        if(!empty($itineraries->departure)):
                                        $startPoint = modules::run('Itineraries/getCityNameForSelect',$itineraries->departure);
                                    endif;
                                    ?>
                                    <select class="form-control m-select2" id="start_point" name="start_point">
                                       <?php 
                                        if(is_Array($startPoint)){?>
                                            <option value="<?php echo $startPoint[0]->id; ?>" selected><?php echo $startPoint[0]->name; ?></option>
                                        <?php }
                                       ?>
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
                                    <?php 
                                        if(!empty($itineraries->destination)):
                                        $endPoint = modules::run('Itineraries/getCityNameForSelect',$itineraries->destination);
                                    endif;
                                    ?>
                                    <select class="form-control m-select2" id="end_point" name="end_point[]" multiple="multiple">
                                         <?php 
                                        if(is_Array($endPoint)){
                                            foreach($endPoint as $vals){
                                        ?>
                                            <option value="<?php echo $vals->id; ?>" selected><?php echo $vals->name; ?></option>
                                        <?php } } ?>
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
                                        'All' => 'All',
                                    ];
                                    ?>
                                    <select class="form-control" id="season_to_visit" name="season_to_visit[]" multiple="multiple">
                                        <?php $months_to_visit = explode(",", $itineraries->month_to_visit);
                                        ?>
                                        <?php foreach ($months as $month) { ?>
                                               
                                                <option value="<?php echo $month; ?>" <?php  if(in_array($month,$months_to_visit)) { echo "selected"; } ?>>
                                                    <?php echo $month; ?>
                                                </option>
                                           
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" name="hid_season_to_visit" id="hid_season_to_visit" />
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Visit Dates<br/>
                                    <span class="m-form__help m--font-info">
                                        Pick date range for your trip
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-daterange input-group tripDateRange">
                                        <input type="text" class="form-control m-input" id="visit_date_start" name="visit_date_start" 
                                        value="<?php echo (!empty($itineraries->visit_date_from)) ? $itineraries->visit_date_from : ''; ?>"
                                        readonly/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-ellipsis-h"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="visit_date_end" id="visit_date_end"
                                        value="<?php echo (!empty($itineraries->visit_date_to)) ? $itineraries->visit_date_to : ''; ?>"
                                       readonly />
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Total Trip Days<br/>
                                    <span class="m-form__help m--font-info">
                                        Please give specific name for Itineraries.
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control m-input" id="total_trip_days" name="total_trip_days" placeholder="Total Trip Days" readonly="readonly"
                                    value="<?php if(isset($itineraries) && $itineraries->trip_days): echo $itineraries->trip_days; endif;?>"/> 
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
                                    value="<?php if(isset($itineraries) && $itineraries->budget): echo $itineraries->budget; endif;?>"     
                                    />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-md-3">
                                    Trip / Destination Category
                                </label>
                                <div class="col-md-9" id="div_trip_category">
                                    <select class="form-control" id="trip_category" name="trip_category[]" multiple="multiple">
                                        <?php   
                                        $catRec = explode(",",$itineraries->category);
                                        ?>
                                        <optgroup label="Trip Category">
                                            <option value="Family"
                                            <?php if(is_array($catRec) && in_array("Family", $catRec)):
                                            echo "selected"; endif; ?>>
                                        Family</option>
                                        <option value="Friends"
                                        <?php if(is_array($catRec) && in_array("Friends", $catRec)):
                                        echo "selected"; endif; ?>>
                                    Friends</option>
                                    <option value="Honeymoon"
                                    <?php if(is_array($catRec) && in_array("Honeymoon", $catRec)):
                                    echo "selected"; endif; ?>>
                                Honeymoon</option>
                                <option value="Solo"
                                <?php if(is_array($catRec) && in_array("Solo", $catRec)):
                                echo "selected"; endif; ?>>
                            Solo</option>
                            <option value="Weekend"
                            <?php if(is_array($catRec) && in_array("Weekend", $catRec)):
                            echo "selected"; endif; ?>>
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
                <select class="form-control " id="trip_type" name="trip_type[]" multiple="multiple">
                    <?php   
                    $type = explode(",",$itineraries->type);
                    ?>
                    <optgroup label="Trip Type">
                        <option value="Adventure"
                        <?php if(is_array($type) && in_array("Adventure", $type)):
                        echo "selected"; endif; ?>>
                    Adventure</option>
                    <option value="Beach"
                    <?php if(is_array($type) && in_array("Beach", $type)):
                    echo "selected"; endif; ?>>
                Beach</option>
                <option value="Mountains"
                <?php if(is_array($type) && in_array("Mountains", $type)):
                echo "selected"; endif; ?>>
            Mountains</option>
            <option value="Forest"
            <?php if(is_array($type) && in_array("Forest", $type)):
            echo "selected"; endif; ?>>
        Forest</option>
        <option value="Naure"
        <?php if(is_array($type) && in_array("Naure", $type)):
        echo "selected"; endif; ?>>
    Nature</option>
    <option value="Urban"
    <?php if(is_array($type) && in_array("Urban", $type)):
    echo "selected"; endif; ?>>
Urban</option>
<option value="Rural"
<?php if(is_array($type) && in_array("Rural", $type)):
echo "selected"; endif; ?>>
Rural</option>
<option value="Others"
<?php if(is_array($type) && in_array("Others", $type)):
echo "selected"; endif; ?>>
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
        <select class="form-control " id="transport_mode" name="transport_mode[]" multiple="multiple">
            <?php   
            $transport = explode(",",$itineraries->mode_of_transport);
            ?>
            <option value="Car"
            <?php if(is_array($transport) && in_array("Car", $transport)):
            echo "selected"; endif; ?>>
        Car</option>
        <option value="Public Transport"
        <?php if(is_array($transport) && in_array("Public Transport", $transport)):
        echo "selected"; endif; ?>>
    Public Transport</option>
    <option value="Plane"
    <?php if(is_array($transport) && in_array("Plane", $transport)):
    echo "selected"; endif; ?>>
Train</option>
<option value="Plane"
<?php if(is_array($transport) && in_array("Plane", $transport)):
echo "selected"; endif; ?>>
Plane</option>
<option value="Ship"
<?php if(is_array($transport) && in_array("Ship", $transport)):
echo "selected"; endif; ?>>
Ship</option>
<option value="Bus"
<?php if(is_array($transport) && in_array("Bus", $transport)):
echo "selected"; endif; ?>>
Bus</option>
<option value="Bicycle"
<?php if(is_array($transport) && in_array("Bicycle", $transport)):
echo "selected"; endif; ?>>
Bicycle</option>
<option value="Lift"
<?php if(is_array($transport) && in_array("Lift", $transport)):
echo "selected"; endif; ?>>
Motorcycle</option>
<option value="Motorcycle"
<?php if(is_array($transport) && in_array("Motorcycle", $transport)):
echo "selected"; endif; ?>>                                        
Motorcycle</option>

</select>
<input type="hidden" name="hid_transport_mode" id="hid_transport_mode" />
</div>
</div>

<div class="form-group m-form__group row">
    <label class="col-form-label col-md-3">
        Thumbnail Images
    </label>
    <div class="col-md-9" id="div_transport_mode">
        <input type="file" name="userfile" id="itinerariesThumb" class="itinerariesThumb"><br/>
        <span style="font-size: 11px;font-weight: bold;">Note- Size of thumbnail : 370px(width) - 250px(Height)</span>
        <div class="error" id="uploaderror"></div>
    </div>
    
  <?php if(isset($itineraries->listthumbnail) && !empty($itineraries->listthumbnail)){ ?>
    <input type="hidden" name="listthumbmails" value="<?php echo $itineraries->listthumbnail; ?>">
    <img src="<?php echo base_url()?>uploads/itinerariesthumb/<?php echo $itineraries->listthumbnail;?>" style="height:100px;width:100px"/>
 <?php } ?>
    
    
    
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
</form>
</div><!--/.end tab -->
<div class="tab-pane" id="div_packaging_list" role="tabpanel">
    <form id="packagingList">
         <div class="alert-success"></div>
        <div class="form-group m-form__group row">
            <label class="col-form-label col-md-3">
                Food
                <span class="m-form__help m--font-info">
                    Please give specific name for Itineraries.
                </span>
            </label>
            <div class="col-md-9">
                <div id="editor3" class="editor3">
                    <?php if(isset($itineraries) && !empty($itineraries->food)): echo $itineraries->food; endif;?>
                </div>
                <input type="hidden" name="food">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label class="col-form-label col-md-3">
                Accessories
            </label>
            <div class="col-md-9">
                <div id="editor4" class="editor4">
                    <?php if(isset($itineraries) && !empty($itineraries->accessories)): echo $itineraries->accessories; endif;?>
                </div>
                <input type="hidden" name="accessories">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label class="col-form-label col-md-3">
                Clothes
            </label>
            <div class="col-md-9">
                <div id="editor5" class="editor5">
                    <?php if(isset($itineraries) && !empty($itineraries->clothes)): echo $itineraries->clothes; endif;?>
                </div>
                <input type="hidden" name="clothes">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label class="col-form-label col-md-3">
                Medicines
            </label>
            <div class="col-md-9">
                <div id="editor6" class="editor6">
                    <?php if(isset($itineraries) && !empty($itineraries->medicines)): echo $itineraries->medicines; endif;?>
                </div>
                <input type="hidden" name="medicines">
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
    </form>
</div><!--/.end tab -->

<div class="tab-pane" id="div_trip_gallery" role="tabpanel">
    <?php 
    $itid = $this->session->userdata('itinerariesId');
    if(isset($itid) && !empty($itid)): 
        $itinerariesRec = modules::run('itineraries/getVideoImageRec',$itid);
endif;
?>
<form id="videoURL">
     <div class="alert-success"></div>
    <div class="form-group m-form__group row">
        <label class="col-form-label col-md-3">
            Add Video URL
        </label>
        <div class="col-md-9">
            <?php $video_url = ""; ?>
            <?php
            if (!empty($itinerariesRec) && is_array($itinerariesRec)) {
                foreach ($itinerariesRec as $upload) {
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
</form>
<div class="form-group m-form__group row">
    <label class="col-form-label col-md-3">
        Add Images
    </label>
    <div class="col-md-9">
        <div class="m-dropzone dropzone m-dropzone--success" action="<?php echo base_url('itineraries/upload_image'); ?>" id="m-dropzone-three">
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
    <?php 
        if(isset($itinerariesRec) && is_array($itinerariesRec)):
    ?>
    <label class="col-form-label col-md-3">
        Images:
    </label>
    <div  class="col-md-9">
        <?php foreach($itinerariesRec as $rec) {
            if($rec->upload_type == "image"):
        ?>
            <div id="<?php echo $rec->id;?>" style="width: 190px;float: left;"> 
            <img src="<?php echo base_url()?>uploads/<?php echo $rec->created_by;?>/itineraries/<?php echo $rec->filename;?>" style="width:150px;height:150px;margin-top:10px;padding:10px;" >
            <a id="<?php echo $rec->id;?>" class="removeImg" style="cursor:pointer">Remove File</a>
            </div>
        <?php endif; } ?>
        
       <?php  if (!empty($itinerariesRec) && is_array($itinerariesRec)) {
                foreach ($itinerariesRec as $upload) {
                    if ($upload->upload_type == "video") {
                        $video_url = $upload->filename; ?>
                    <!--<iframe width="150" height="150" style="margin-top:10px;padding:10px;" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>--><?php
                    }
                }
            } ?>
    </div>
    <?php endif; ?>    
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
                                    <div class="input-daterange input-group tripDateRange">
                                        <input type="text" class="form-control m-input" id="visit_date_start" name="visit_date_start" 
                                        value="<?php echo (!empty($itineraries->visit_date_from)) ? $itineraries->visit_date_from : ''; ?>"
                                        readonly />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-ellipsis-h"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="visit_date_end" id="visit_date_end"
                                        value="<?php echo (!empty($itineraries->visit_date_to)) ? $itineraries->visit_date_to : ''; ?>"
                                        readonly />
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
                                        <?php $days = $itineraries->trip_days ?>
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
                                                                    <?php foreach ($cities as $city) { 

                                                                            if($city->name == $trip_details[$i]->from_city):
                                                                                   $selected =  "selected";
                                                                            else:
                                                                                    $selected = "";
                                                                            endif;    
                                                                        ?> 
                                                                        <option value="<?php echo $city->name; ?>" <?php echo $selected;?>><?php echo $city->name; ?></option><?php } ?>
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
                                                                            <?php foreach ($cities as $city) { 

                                                                                 if($city->name == $trip_details[$i]->to_city):
                                                                                   $selected =  "selected";
                                                                            else:
                                                                                    $selected = "";
                                                                            endif;  

                                                                                ?> 
                                                                                <option value="<?php echo $city->name; ?>" <?php echo $selected;?>><?php echo $city->name; ?></option>
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
        <option value="Car" <?php if($trip_details[$i]->mode_of_transport == "Car") : echo "selected"; endif;?>>Car</option>
            <option value="Public Transport" <?php if($trip_details[$i]->mode_of_transport == "Public Transport") : echo "selected"; endif;?>>Public Transport</option>
                <option value="Train" <?php if($trip_details[$i]->mode_of_transport == "Train") : echo "selected"; endif;?>>Train</option>
                    <option value="Plane" <?php if($trip_details[$i]->mode_of_transport == "Plane") : echo "selected"; endif;?>>Plane</option>
                        <option value="Ship" <?php if($trip_details[$i]->mode_of_transport == "Ship") : echo "selected"; endif;?>>Ship</option>
                            <option value="Bus" <?php if($trip_details[$i]->mode_of_transport == "Bus") : echo "selected"; endif;?>>Bus</option>
                             <option value="Bicycle" <?php if($trip_details[$i]->mode_of_transport == "Bicycle") : echo "selected"; endif;?>>Bicycle</option>
                                <option value="Lift" <?php if($trip_details[$i]->mode_of_transport == "Lift") : echo "selected"; endif;?>>Lift</option>
                                    <option value="Motorcycle" <?php if($trip_details[$i]->mode_of_transport == "Motorcycle") : echo "selected"; endif;?>>Motorcycle</option>
                                    <option value="None" <?php if($trip_details[$i]->mode_of_transport == "None") : echo "selected"; endif;?>>None</option>
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
                                                                     <?php  if(!empty($trip_details[$i]->travel_time)) {
                                                                     $travelTime = explode("-",$trip_details[$i]->travel_time); 
                                                                    
                                                                     } ?>
                                                <div class="col-xl-9 col-lg-9">
                                                    <!--<input type="text" name="travel_time_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->travel_time)) ? $trip_details[$i]->travel_time : ''; ?>" />-->
                                                  <input type="number" name="hours_<?php echo $counter; ?>" id="hours" style="width:20%" value="<?php echo @$travelTime[0];?>"> <span style="font-size: 12px;padding: 13px;">Hours</span>
                                                    <input type="number" name="min_<?php echo $counter; ?>" id="min" style="width:20%" value="<?php echo @$travelTime[1];?>"> <span style="font-size: 12px;padding: 13px;">Min</span>
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
                                                                    <span class="m-form__help">
                                                                           Anywhere i could find a bed
                                                                        </span>
                                                                </div>
                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                                        * Food:
                                                                    </label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <input type="text" name="food_<?php echo $counter; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->food)) ? $trip_details[$i]->food : ''; ?>">
                                                                    </div>
                                                                    <span class="m-form__help">
                                                                            Anything that kept me alive
                                                                        </span>
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
                                                                                        <option value="<?php echo $city->city_name; ?>"</option>
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
                                                                                        <span class="input-group-text"></span>
                                                                                    </div>
                                                                                    <select class="form-control m-select2-ajax" name="to_city_<?php echo $i; ?>" id="to_city_   <?php echo $i; ?>" >
                                                                                        <?php foreach ($cities as $city) { ?>>
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
                                                                                    <optgroup label="Transport Mode"></option>
                                                                                        <option value="Public Transport"option value="Train">rain</option>
                                                                                        <option value="Plane">Plane</option>
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
                                                                    <option value="None"
                                                                        <?php echo (!empty($trip_info->mode_of_transport) && "None" == $trip_info->mode_of_transport) ? 'selected' : ''; ?>>                                        
                                                                    None</option>
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
                                                <?php  if(!empty($trip_info[$i]->travel_time)) { $travelTime = explode(",",$trip_info[$i]->travel_time); } ?>
                                                <div class="col-xl-9 col-lg-9">
                                                    <!--<input type="text" name="travel_time_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->travel_time)) ? $trip_details[$i]->travel_time : ''; ?>" />-->
                                                  <input type="number" name="hours_<?php echo $i; ?>" id="hours" style="width:20%" value="<?php echo $travelTime[0];?>"> <span style="font-size: 12px;padding: 13px;">Hours</span>
                                                    <input type="number" name="min_<?php echo $i; ?>" id="min" style="width:20%" value="<?php echo $travelTime[1];?>"> <span style="font-size: 12px;padding: 13px;">Min</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Distance:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="number" name="distance_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->distance)) ? $trip_details[$i]->distance : ''; ?>" >
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
                                                 <span class="m-form__help">
                                                    Anywhere i could find a bed
                                                 </span>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    * Food:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="food_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->food)) ? $trip_details[$i]->food : ''; ?>">
                                                </div>
                                                  <span class="m-form__help">
                                                         Anything that kept me alive
                                                   </span>
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
                                        <a href="javascript:void(0);" class="btn btn-success m-btn m-btn--custom m-btn--icon saveItineraryDetails" data-wizard-action="submit">
                                            <span>
                                                <i class="la la-check"></i>
                                                &nbsp;&nbsp;
                                                <span>
                                                    Submit
                                                </span>
                                            </span>
                                        </a>
                                         <input type="hidden" name="itinerary_size" id="itinerary_size" value="<?php echo (!empty($itineraries->trip_days)) ? $itineraries->trip_days : ''; ?>"/>
                                        <a href="javascript:void(0);" class="btn btn-success m-btn m-btn--custom m-btn--icon saveItineraryDetails" data-wizard-action="next">
                                            <span>
                                                <span>
                                                    Save &amp; Continue
                                                </span>
                                                &nbsp;&nbsp;
                                                <i class="la la-arrow-right"></i>
                                            </span>
                                        </a>
                                        <input type="hidden" name="itinerary_size" id="itinerary_size" value="<?php echo (!empty($itineraries->trip_days)) ? $itineraries->trip_days : ''; ?>"/>
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
</div>
</div>