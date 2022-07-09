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
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text">
                The Metronic Datatable component supports initialization from HTML table. It also defines the schema model of the data source. In addition to the visualization, the Datatable provides built-in support for operations over data such as sorting, filtering and paging performed in user browser(frontend).
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
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Start Point (Departure)
                        </label>
                        <div class="col-lg-3 col-md-9 col-sm-12">
                            <select class="form-control m-select2" id="start_point" name="start_point">
                                <?php foreach ($cities as $city) { ?> 
                                    <option value="<?php echo $city->city_name; ?>" 
                                            <?php echo (!empty($trip_info->departure) && $city->city_name == $trip_info->departure) ? 'selected' : ''; ?>>
                                                <?php echo $city->city_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <span class="m-form__help">
                                Select your Start point
                            </span>
                        </div>
                        <label class="col-form-label col-lg-3 col-sm-12">
                            End Point (Destination)
                        </label>
                        <div class="col-lg-3 col-md-9 col-sm-12" id="div_end_point">
                            <select class="form-control m-select2" id="select_counts" name="select_counts"  >
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
                            <span class="m-form__help">
                                Select  your Destinations  
                            </span>
                        </div>
                    </div>



                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            End Point (Destination)
                        </label>
                        <div class="col-lg-3 col-md-9 col-sm-12" id="div_end_point">
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
                            <span class="m-form__help">
                                Select  your Destinations  
                            </span>
                        </div>
                    </div>






                    <div class="form-group m-form__group row divAlertTripSummary" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">                            
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                                <button type="button" class="btn btn-brand btnSaveTripSummary">Search</button>
                                <button type="reset" class="btn btn-brand btnSaveTripSummary">Reset</button>

                            </div>
                        </div>
                    </div>
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
            <div class="m-portlet__body">
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
                            <a href="<?php echo base_url('admin/stories_details'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-cart-plus"></i>
                                    <span>
                                        New Profile
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
                            <th title="Name">
                                Name
                            </th>
                            <th title="City">
                                City
                            </th>
                            <th title="Profile Completion">
                                Profile Completion
                            </th>
                            <th title="Publish">
                                Publish
                            </th>
                            <th title="Link to Profile">
                                Link to Profile
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($users as $value) { ?>
                            <tr>
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo $value->full_name; ?>
                                </td>
                                <td>
                                    <?php echo $value->city; ?>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/stories_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>	
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
