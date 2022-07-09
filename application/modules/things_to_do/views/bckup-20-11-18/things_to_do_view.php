<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
                     
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">       
        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">                     
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total things to do article
                                </h4><br>
                                <span class="m-widget24__desc">
                                    count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="total_article">
                                    <?php echo $thingsCount; ?>
                                </span>
                                <!-- <span class="m-widget24__stats m--font-brand float_none">
                                    20 
                                </span> -->  
                            </div>                    
                        </div>
                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total things
                                </h4><br>
                                <span class="m-widget24__desc" >
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="total_things">
                                    <?php echo $thingsCount; ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Views
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="things_to_do__total_views">
                        <?php if(isset($thingstodo) && is_array($thingstodo)){
                            $count = 0;
                        foreach ($thingstodo as $value) { 
                            $count = $count + $value->viewcount;
                        }}
                        echo $count;
                        ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="m-widget24 text-center">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title m--icon-font-size-lg1">
                                    <a href="<?php echo base_url('things_to_do/add_things_to_do_form'); ?>" class="m--font-danger">
                                        <i class="fa fa-plus-square-o m--icon-font-size-lg2"></i> New Things to do</a>
                                </h4> 
                            </div>      
                        </div>
                        <!--end::New Orders--> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="m-portlet" id="div_trip_summary">

            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Filters
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>
            <!--end: Portlet Head-->
            <form class="m-form m-form--fit m-form--label-align-right" id="frmTripSummary">
                <div class="m-portlet__body">                   
                    <div class="form-group m-form__group row">
                        <div class="col-md-4">
                            <label class="col-form-label">
                                Author<br/>
                                <span class="m-form__help">
                                    Select your Start point
                                </span>
                            </label>
                            <div>
                                <select class="form-control m-select2" id="author" name="author">
                                    <?php 
                                    if(is_array($users)){
                                    foreach ($users as $user) { ?> 
                                        <option value="<?php echo $user->login_id; ?>" 
                                                <?php echo (!empty($trip_info->departure) && $user->logid_id == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $user->full_name; ?>
                                        </option>
                                    <?php }  } ?>
                                </select>

                            </div>                        
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">
                                View Count<br/>
                                <span class="m-form__help">
                                    Select Range 
                                </span>
                            </label>               
                            <div class="m-ion-range-slider">
                                <input type="hidden" id="max_views" value="<?php echo 0 ?>" />
                                <input type="hidden" id="m_slider_3"/>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">
                                Destination<br/>
                                <span class="m-form__help">
                                    Select  your Destinations  
                                </span>
                            </label>
                            <div  id="div_end_point">
                                <select class="form-control m-select2" id="end_point" name="end_point"  >
                                    <?php $destinations = explode(",", $trip_info->destination); ?>
                                    <?php 
if(is_array($cities)){
                                    foreach ($cities as $city) { ?>
                                        <?php foreach ($destinations as $destination) { ?>
                                            <option value="<?php echo $city->city_name; ?>"
                                                    <?php echo (!empty($destination) && $city->city_name == $destination) ? 'selected' : ''; ?>>
                                                        <?php echo $city->city_name; ?>
                                            </option>
                                        <?php } ?>
                                    <?php } }?>
                                </select>
                                <input type="hidden" name="hid_end_point" id="hid_end_point" />
                            </div>
                        </div>

                        <div class="divAlertTripSummary" style="display:none;"> 
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert"> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-12 mt-3">
                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                            <button type="button" class="btn btn-brand btnSearchThings m-btn--pill">Search</button>
                            <button class="btn btn-success btnSearchThings m-btn--pill">Reset Filters</button>
                        </div><!--/.col--> 

                        <div class="form-group m-form__group row divAlertTripSummary" style="display:none;">
                            <div class="col-lg-1"></div>
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">                            
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <div class="m-portlet__body" id="divThingsToDo">
                <!--begin: Datatable -->
                <div class="table-responsive">
                <table  id="thingsTable" width="100%">
                    <thead>
                        <tr>
                            <th title="#">
                                #
                            </th>
                            <th title="Article Headline">
                                Article Headline
                            </th>
                            <th title="Article Description">
                                Article Description
                            </th>
                            <th title="Place Name">
                                Place Name
                            </th>
                            <th title="View Count">
                                View Count
                            </th>
                            <th title="Actions">
                                Actions
                            </th>  
                            <th title="Publish">
                                Publish
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; 
                        if(isset($thingstodo) && is_array($thingstodo)){?>
                        <?php foreach ($thingstodo as $value) { ?>
                            <tr>
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo $value->articleHeadline; ?>
                                </td>
                                <td>
                                    <?php echo $value->articleDesc; ?>
                                </td>
                                <td>
                                   <?php echo modules::run("itineraries/getCityName",$value->articleplace);?>
                                </td>
                                <td>
                                    <?php echo $value->viewcount; ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('things_to_do/add_things_to_do_form/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>  
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deletethings_to_do" id="deletethings_to_do<?php echo $value->id; ?>" data-things_to_do_id="<?php echo $value->id; ?>" title="delete things_to_do "><i class="la la-trash"></i></a>

                                </td>
                                <td>
                                            <?php 
                                                if($value->is_published == '2'){
                                                    $color = "#f4516c";
                                                } elseif($value->is_published == '0'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>
                                            <select name="thingstodoPublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="thingstodoPublished">
                                                <option value="2"  <?php if($value->is_published == '2'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="0" <?php if($value->is_published == '0'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="1"  <?php if($value->is_published == '1'): echo "selected"; endif;?>>Published</option>
                                            </select>    
                                </td>
                            </tr>
                            <?php
                            $counter++;
                        } }
                        ?>
                    </tbody>
                </table>
                </div>
                <!--end: Datatable -->
            </div>
        </div>

  
            
        </div>
    </div>

