<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Itineraries
                </h3>
            </div>            
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content"> 

        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">                     
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Count of
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Itineraries
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo count($trip_info); ?>
                                </span>
                                <!-- <span class="m-widget24__stats m--font-brand float_none">
                                    20 
                                </span> -->  
                            </div>                    
                        </div>
                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Itinerary Per Traveler
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    1349
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Orders-->
                        <div class="m-widget24 text-center">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title m--icon-font-size-lg2">
                                    <a href="<?php echo base_url('admin/view_itineraries_details'); ?>" class="m--font-danger">
                                        <i class="fa fa-plus-square-o m--icon-font-size-lg2"></i> New Itinerary</a>
                                </h4> 
                            </div>      
                        </div>
                        <!--end::New Orders--> 
                    </div> 
                </div>
            </div>
        </div><!--/.m-portlet-->

        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Filters
                        </h3>
                    </div>
                </div> 
            </div>
            <!--end: Portlet Head--> 

            <form id="frmTripSummary" class="m-form">
                <div class="m-portlet__body"> 
                    <div class="form-group m-form__group row">
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Start Point (Departure)<br/>
                                <span class="m-form__help">
                                    Select your Start point
                                </span>
                            </label>
                            <div>
                                <select class="form-control m-select2" id="start_point" name="start_point">
                                    <?php foreach ($cities as $city) { ?> 
                                        <option value="<?php echo $city->city_name; ?>" 
                                                <?php echo (!empty($trip_info->departure) && $city->city_name == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                </select> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-3">
                            <label class="col-form-label">
                                End Point (Destination)<br/>
                                <span class="m-form__help">
                                    Select  your Destinations  
                                </span>
                            </label>
                            <div id="div_end_point">
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
                        </div><!--/.col--> 
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Trip Duration<br/>
                                <span class="m-form__help">
                                    Total Trip Days
                                </span>
                            </label>
                            <div>
                                <input type="text" class="form-control m-input" id="total_trip_days" name="total_trip_days" placeholder="Total Trip Days" 
                                       value="<?php echo (!empty($trip_info->trip_days)) ? $trip_info->trip_days : ''; ?>"
                                       /> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Total Budget<br/>
                                <span class="m-form__help">
                                    Total Budget
                                </span>
                            </label>
                            <div>
                                <input type="text" class="form-control m-input" id="total_budget" name="total_budget" placeholder="Enter Total Trip Budget"
                                       value="<?php echo (!empty($trip_info->budget)) ? $trip_info->budget : ''; ?>"
                                       /> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Suitable for<br/>
                                <span class="m-form__help">
                                    <!--Total Budget-->&nbsp;
                                </span>
                            </label>
                            <div id="div_trip_category">
                                <select class="form-control m-select2" id="trip_category" name="trip_category" placeholder="Enter Total Trip Budget">
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
                        </div><!--/.col--> 
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Theme<br/>
                                <span class="m-form__help">
                                    <!--Total Budget--> &nbsp;
                                </span>
                            </label>
                            <div id="div_trip_type">
                                <select class="form-control m-select2" id="trip_type" name="trip_type" placeholder="Enter Total Trip Budget">
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
                        </div><!--/.col-->
                        <div class="col-md-3">
                            <label class="col-form-label">
                                Real Traveler<br/>
                                <span class="m-form__help">
                                    <!--Total Budget--> &nbsp;
                                </span>
                            </label>
                            <div id="div_transport_mode">
                                <select class="form-control m-select2" id="transport_mode" name="transport_mode" placeholder="Enter Total Trip Budget">
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
                        </div><!--/.col--> 
                        <div class="divAlertTripSummary" style="display:none;"> 
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert"> 
                            </div>
                        </div><!--/.col-->
                        <div class="col-md-12 mt-3">
                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                            <button type="button" class="btn btn-brand btnSearchItineraries m-btn--pill">Search</button>
                            <button type="reset" class="btn btn-success m-btn--pill">Reset Filters</button>
                        </div><!--/.col-->   
                    </div><!--/.row-->

                    <div id="divItineraries">
                        <!--begin: Datatable -->
                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                            <div class="row align-items-center">
                                <div class="col-md-8 order-2 order-xl-1">
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
                                </div><!--/.col-->
                                <div class="col-md-4 order-1 order-xl-2 m--align-right">
                                    <a href="<?php echo base_url('admin/view_itineraries_details'); ?>" class="btn btn-brand btnSaveTripSummary m-btn--pill"> 
                                        Download CSV 
                                    </a>
                                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                                </div><!--/.col-->
                            </div>
                        </div> 
                        <table class="m-datatable" id="html_table" width="100%">
                            <thead>
                                <tr>
                                    <th title="#">
                                        #
                                    </th>
                                    <th title="departure">
                                        Departure
                                    </th>
                                    <th title="destination">
                                        Destination
                                    </th>
                                    <th title="Stay Days">
                                        Stay Days
                                    </th>
                                    <th title="Mode of Transport">
                                        Mode of Transport
                                    </th>
                                    <th title="Budget">
                                        Budget
                                    </th>
                                    <th title="Best time to Visit">
                                        Best time to Visit
                                    </th>
                                    <th title="Suitable">
                                        Suitable
                                    </th>
                                    <th title="Theme">
                                        Theme
                                    </th>
                                    <th title="View Count">
                                        View 
                                    </th>
                                    <th title="Actions">
                                        Actions
                                    </th>
                                    <th title="Link to Website">
                                        Link 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; ?>
                                <?php foreach ($trip_info as $value) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $counter; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->departure; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->destination; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->trip_days; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->mode_of_transport; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->budget; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->month_to_visit; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->category; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->type; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->real_traveller; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>	
                                            <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8" data-container="body" data-toggle="m-tooltip" data-placement="right" title="" data-original-title="Delete" data-itinerary_id="<?php echo $value->id; ?>" id="a_<?php echo $value->id; ?>"><i class="la la-trash"></i></a>  
                                        </td>
                                        <td>
                                            <?php echo $value->trip_days; ?>
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

                </div><!--/. portlet body -->
            </form>
        </div> 
    </div>
</div>
