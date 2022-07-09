<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    HTML Table
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
                                Datatables
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Base
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                HTML Table
                            </span>
                        </a>
                    </li>
                </ul>
            </div>            
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
                                    Total Count of
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Stories
                                </span>
                                <span class="m-widget24__stats m--font-info" id="stories_count">
                                    <?php echo $story->total_stories; ?>
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
                                    Stories Per Traveler
                                </h4><br>
                                <span class="m-widget24__desc" >
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="stories_per_traveller">
                                    <?php echo $story->total_stories; ?>
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
                                <span class="m-widget24__stats m--font-info" id="stories_total_views">
                                    <?php echo $story->total_views_count; ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="m-widget24 text-center">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title m--icon-font-size-lg2">
                                    <a href="<?php echo base_url('admin/edit_stories'); ?>" class="m--font-danger">
                                        <i class="fa fa-plus-square-o m--icon-font-size-lg2"></i> New Stories</a>
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
                                    <?php foreach ($users as $user) { ?> 
                                        <option value="<?php echo $user->login_id; ?>" 
                                                <?php echo (!empty($trip_info->departure) && $user->logid_id == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $user->full_name; ?>
                                        </option>
                                    <?php } ?>
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
                                <input type="hidden" id="max_views" value="<?php echo $views->max_count; ?>" />
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

                        <div class="divAlertTripSummary" style="display:none;"> 
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert"> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-12 mt-3">
                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                            <button type="button" class="btn btn-brand btnSearchStories m-btn--pill">Search</button>
                            <button class="btn btn-success btnSearchStories m-btn--pill">Reset Filters</button>
                        </div><!--/.col--> 

                        <div class="form-group m-form__group row divAlertTripSummary" style="display:none;">
                            <div class="col-lg-1"></div>
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">                            
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions m-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-9 ml-lg-auto">
                                                        <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                                                        <button type="button" class="btn btn-brand btnSearchStories">Search</button>
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                </div>
            </form>
        </div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Datatable initilized from HTML table
                        </h3>
                    </div>
                </div>                
            </div>
            <div class="m-portlet__body" id="divStories">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                            <span>
                                                <i class="la la-search"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="<?php echo base_url('admin/edit_stories'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-cart-plus"></i>
                                    <span>
                                        New Story
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="#">
                                #
                            </th>
                            <th title="Author">
                                Author
                            </th>
                            <th title="Destination">
                                Destination
                            </th>
                            <th title="Headline">
                                Headline
                            </th>
                            <th title="View Count">
                                View Count
                            </th>
                            <th title="Link">
                                Link
                            </th>
                            <th title="Status">
                                Status
                            </th>
                            <th title="Actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($stories as $value) { ?>
                            <tr id="story_<?php echo (!empty($value->id)) ? $value->id : ''; ?>">
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo (!empty($value->full_name)) ? $value->full_name : ''; ?>
                                </td>
                                <td>
                                    <?php echo (!empty($value->destination)) ? $value->destination : ''; ?>
                                </td>
                                <td>
                                    <?php echo (!empty($value->story_head)) ? $value->story_head : ''; ?>
                                </td>
                                <td>
                                    <?php echo (!empty($value->views_count)) ? $value->views_count : ''; ?>
                                </td>
                                <td>
                                    <a href="https://www.travelitineraries.in/travel-stories/<?php echo $value->story_head; ?>"><?php echo 'https://www.travelitineraries.in/travel-stories/' . $value->story_head; ?></a>
                                </td>
                                <td>
                                    <?php if (!empty($value->is_published)) { ?>
        <!--                                        <span style="width: 110px;">
                                                <span class="m-badge m-badge--success m-badge--wide">Published</span>                                    
                                            </span>-->
                                        <input data-switch="true" type="checkbox" id="switch_<?php echo (!empty($value->id)) ? $value->id : ''; ?>" checked="checked" data-on-text="Enabled" data-handle-width="70" data-off-text="Disabled" data-on-color="brand" >
                                    <?php } else { ?>
                                        <span style="width: 110px;">
                                            <span class="m-badge m-badge--danger m-badge--wide">Unpublished</span>                                    
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/edit_stories/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Story"><i class="la la-edit"></i></a>
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deleteStories" id="deleteStory<?php echo $value->id; ?>" data-story_id="<?php echo $value->id; ?>" title="Delete Story"><i class="la la-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                            $counter++;
                        }
                        ?>
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
</div>
