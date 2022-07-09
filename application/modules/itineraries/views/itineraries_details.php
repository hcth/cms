<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader">
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
                                    <?php if (isset($count) && !empty($count)) : echo $count;
                                    else : echo 0;
                                    endif; ?>
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
        </div>
        <!--/.m-portlet-->

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
                        <div class="col-md-6 mt-2">
                            <label class="col-form-label">
                                Destination<br />
                                <span class="m-form__help">
                                    Select your Destination
                                </span>
                            </label>
                            <div>
                                <input type="text" class="form-control form-control-sm-1" placeholder="Enter Itinerary Destination" id="cityName" name="cityName">

                            </div>
                        </div>
                        <!--/.col-->

                        <!-- <div class="col-md-3 mt-2">
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
                        <div class="col-md-3 mt-2">
                            <label class="col-form-label">
                                Total Budget<br />
                                <span class="m-form__help">
                                    Total Budget
                                </span>
                            </label>
                            <div>
                                <input type="text" class="form-control m-input" id="total_budget" name="total_budget" placeholder="Enter Total Trip Budget" />
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-md-6 mt-2">
                            <label class="col-form-label">
                                Suitable for
                            </label>
                            <div id="div_trip_category">
                                <select class="form-control sel2-box mt-2" multiple id="trip_category" name="suitable" placeholder="Enter Total Trip Budget">
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
                        </div>
                        <!--/.col-->
                        <div class="col-md-6 mt-2">
                            <label class="col-form-label">
                                Theme
                            </label>
                            <div id="div_trip_type">
                                <select class="form-control sel2-box" id="trip_type" multiple name="theme" placeholder="Enter Total Trip Budget">
                                    <optgroup label="Trip Type">
                                        <option value="Adventure">Adventure</option>
                                        <option value="Beach">Beach</option>
                                        <option value="Mountains">Mountains</option>
                                        <option value="Forest"></option>
                                        <option value="Nature">Nature</option>
                                        <option value="Urban">Urban</option>
                                        <option value="Rural">Rural</option>
                                        <option value="Others">Others</option>
                                    </optgroup>
                                </select>
                                <input type="hidden" name="hid_trip_type" id="hid_trip_type" />
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="divAlertTripSummary" style="display:none;">
                            <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-md-12 mt-3">
                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>" />
                            <button type="button" class="btn btn-brand btnSearchItineraries m-btn--pill">Search</button>
                            <button type="reset" class="btn btn-success m-btn--pill reset-form">Reset Filters</button>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->

                    <div id="divItineraries">
                        <!--begin: Datatable -->
                        <div class="m-form m-form--label-align-right m--margin-bottom-30">

                        </div>
                        <div class="table-responsive">
                            <table id="itinerariesTables" width="100%">
                                <thead>
                                    <tr>
                                        <th title="#">
                                            #
                                        </th>
                                        <th title="destination">
                                            Destination
                                        </th>
                                        <th title="Stay Days">
                                            Days
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
                                    if (isset($itinerariesAllRecord) && is_Array($itinerariesAllRecord)) :
                                        foreach ($itinerariesAllRecord as $value) { ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>itinerary/<?php echo $value->url; ?>" target="_blank"><?php echo $counter; ?></a>
                                                </td>
                                                <td>
                                                    <?php
                                                    // echo modules::run('itineraries/getCityName',$value->destination);
                                                    echo @$value->destination;

                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->trip_days; ?>
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
                                                    <a href="<?php echo base_url('itineraries/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>
                                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8" data-itinerary_id="<?php echo $value->id; ?>" id="a_<?php echo $value->id; ?>"><i class="la la-trash"></i></a>
                                                </td>


                                                <?php
                                                $isAdmin = $this->session->userdata('istraveler');
                                                if ($isAdmin == 1) : ?>
                                                    <td>
                                                        <?php if ($value->status == '0') {
                                                            $color = "#f4516c";
                                                            $text = "Unpublished";
                                                        } elseif ($value->status == '1') {
                                                            $color = "#f79706";
                                                            $text = "Waiting for Admin Approval";
                                                        } else {
                                                            $color = "#218838";
                                                            $text = "Published";
                                                        } ?>
                                                        <strong style="color:<?php echo $color; ?>"><?php echo $text; ?></strong>

                                                    </td>
                                                <?php else : ?>
                                                    <td>

                                                        <?php
                                                        if ($value->status == '0') {
                                                            $color = "#f4516c";
                                                        } elseif ($value->status == '1') {
                                                            $color = "#f79706";
                                                        } else {
                                                            $color = "#218838";
                                                        }

                                                        ?>



                                                        <select name="statuspublished" id="<?php echo $value->id; ?>" style="background:<?php echo $color; ?>" class="profilestatus">
                                                            <option value="0" <?php if ($value->status == '0') : echo "selected";
                                                                                endif; ?>>Unpublished</option>
                                                            <option value="1" <?php if ($value->status == '1') : echo "selected";
                                                                                endif; ?>>Waiting for Admin Approval</option>
                                                            <option value="2" <?php if ($value->status == '2') : echo "selected";
                                                                                endif; ?>>Published</option>
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
                                <tfoot>
                                    <tr>
                                        <th title="#">
                                            #
                                        </th>
                                        <th title="destination">
                                            Destination
                                        </th>
                                        <th title="Stay Days">
                                            Days
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
                                        <th title="Actions">
                                            Actions
                                        </th>
                                        <th title="Actions">
                                            Status
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--end: Datatable -->
                    </div>

                </div>
                <!--/. portlet body -->
            </form>
        </div>
    </div>
</div>