
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    List of Itineraries
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
                                   <?php if(isset($count) && !empty($count)): echo $count; else: echo 0; endif;?>
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
                                    <a href="<?php echo base_url('itineraries/addItineraries'); ?>" class="m--font-danger">
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
                                    <?php if(isset($city) && is_array($city)) :
                                        foreach($city as $cityrec) { 
                                    ?>
                                       <option value="<?php echo $cityrec->id;?>"><?php echo $cityrec->name;?></option>
                                    <?php } endif; ?>   
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
                                     <?php if(isset($city) && is_array($city)) :
                                        foreach($city as $cityrec) { 
                                    ?>
                                       <option value="<?php echo $cityrec->id;?>"><?php echo $cityrec->name;?></option>
                                    <?php } endif; ?>   
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
                                <input type="text" class="form-control m-input" id="total_budget" name="total_budget" placeholder="Enter Total Trip Budget"/> 
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
                                        <option value="Family">Family</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Honeymoon">Honeymoon</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Weekend">Weekend</option>
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
                                        <option value="Adventure">Adventure</option>
                                        <option value="Beach">Beach</option>
                                        <option value="Mountains">Mountains</option>
                                        <option value="Forest"></option>
                                        <option value="Naure">Naure</option>
                                        <option value="Urban">Urban</option>
                                        <option value="Rural">Rural</option>
                                        <option value="Others">Others</option>
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
                                        <option value="Car">Car</option>
                                        <option value="Public Transport">Public Transport</option>
                                        <option value="Train">Train</option>
                                        <option value="Plane">Plane</option>
                                        <option value="Ship"> Ship</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Bicycle">Bicycle</option>
                                        <option value="Lift">lift</option>
                                        <option value="Motorcycle">Motorcycle</option>
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
                        <div class="table-responsive">
                        <table  id="itinerariesTables" width="100%">
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
                                        Days
                                    </th>
                                    <th title="Mode of Transport">
                                        Transport
                                    </th>
                                    <th title="Budget">
                                        Budget
                                    </th>
                                    <th title="Best time to Visit">
                                     time to Visit
                                    </th>
                                    <th title="Suitable">
                                        Suitable
                                    </th>
                                    <th title="Theme">
                                        Theme
                                    </th>
                                   <!-- <th title="View Count">
                                        View 
                                    </th>-->
                                    <th title="Actions">
                                        Actions
                                    </th>
                                     <th title="Actions">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; 
                                if(isset($itinerariesAllRecord) && is_Array($itinerariesAllRecord)) :
                              foreach ($itinerariesAllRecord as $value) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url();?>itineraries/detail/<?php echo $value->url;?>" target="_blank"><?php echo $counter; ?></a>
                                        </td>
                                        <td>
                                            <?php echo modules::run('itineraries/getCityName',$value->departure); ?>
                                        </td>
                                        <td>
                                             <?php echo modules::run('itineraries/getCityName',$value->destination); ?>
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
                                        <!--<td>
                                            <?php echo $value->views; ?>
                                        </td>-->
                                        <td>
                                            <a href="<?php echo base_url('itineraries/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>	
                                            <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8" data-container="body" data-toggle="m-tooltip" data-placement="right" title="" data-original-title="Delete" data-itinerary_id="<?php echo $value->id; ?>" id="a_<?php echo $value->id; ?>"><i class="la la-trash"></i></a>  
                                        </td>
                                        

                                        <?php 
                                            $isAdmin = $this->session->userdata('istraveler');
                                            if($isAdmin == 1): ?>
                                              <td>
                                                   <?php if($value->status == '0'){
                                                    $color = "#f4516c";
                                                    $text = "Unpublished";
                                                } elseif($value->status == '1'){
                                                     $color = "#f79706";
                                                     $text = "Waiting for Admin Approval";
                                                }else {
                                                     $color = "#218838";
                                                     $text = "Published";
                                                } ?>
                                                <strong style="color:<?php echo $color;?>"><?php echo $text;?></strong>

                                              </td>  
                                        <?php  else: ?>
                                             <td>
                                            <?php 
                                                if($value->status == '0'){
                                                    $color = "#f4516c";
                                                } elseif($value->status == '1'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>
                                            <select name="statuspublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="profilestatus">
                                                <option value="0"  <?php if($value->status == '0'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="1" <?php if($value->status == '1'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="2"  <?php if($value->status == '2'): echo "selected"; endif;?>>Published</option>
                                            </select>    
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php
                                    $counter++;
                                } 
                            else : ?>
                            <tr>No Record found!</tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        </div>
                        <!--end: Datatable -->
                    </div>

                </div><!--/. portlet body -->
            </form>
        </div> 
    </div>
</div>
