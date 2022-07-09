<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Real Travellers
                </h3>
                <!-- <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php //echo base_url('my-profile');           ?>" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Real Travellers
                            </span>
                        </a>
                    </li>
                </ul> -->
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
                                    Real Travelers
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $users_count->total; ?>
                                </span>                           
                            </div>                    
                        </div>
                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Itineraries
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $itineraries_count->total; ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Orders-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Stories
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-danger">
                                    <?php echo $stories_count->total; ?>
                                </span>   
                            </div>      
                        </div>
                        <!--end::New Orders--> 
                    </div> 
                </div>
            </div>
        </div><!--/.m-portlet-->


        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">                     
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Itinerary Per Traveler
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    20
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
                                    Stories per Traveler
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    100
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
                                    <a href="<?php echo base_url('admin/real_travellers_edit'); ?>" class="m--font-danger">
                                        <i class="fa fa-plus-square-o m--icon-font-size-lg2"></i> New Real Traveller 
                                    </a>
                                </h4> 
                            </div>      
                        </div>
                        <!--end::New Orders--> 
                    </div>
                </div>
            </div>
        </div><!--/.m-portlet-->

        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">                     
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title m--icon-font-size-lg2 mt-4">
                                    <a href="#" class="m--font-success"><i class="fa fa-user-plus m--icon-font-size-lg2"></i> Invite New Real Traveller</a>
                                </h4><br>
                                <span class="m-widget24__desc">

                                </span>
                                <span class="m-widget24__stats m--font-info">

                                </span>
                                <!-- <span class="m-widget24__stats m--font-brand float_none">
                                    20 
                                </span> -->  
                            </div>                    
                        </div>
                        <!--end::Total Profit-->
                    </div>  
                </div>
            </div>
        </div><!--/.m-portlet-->


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
            </div>
            <!--end: Portlet Head-->
            <form class="m-form">
                <div class="m-portlet__body">                   
                    <!--                    <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">
                                                Total Real Travellers : <?php echo count($users); ?>
                                            </label>
                                            <label class="col-form-label col-lg-3 col-sm-12">
                                                Total Itineraries : <?php echo count($itineraries); ?>
                                            </label>
                                            <label class="col-form-label col-lg-3 col-sm-12">
                                                Total Stories : <?php echo count($stories); ?>
                                            </label>
                                            <label class="col-form-label col-lg-3 col-sm-12">
                                                Total Things To Do : <?php echo count($things_to_do); ?>
                                            </label>
                                        </div>-->
                    <div class="form-group m-form__group row">
                        <div class="col-md-4">
                            <label class="col-form-label">
                                City<br/>
                                <span class="m-form__help">
                                    Select Real Travellers Cities
                                </span>
                            </label>
                            <div>
                                <select class="form-control m-select2" id="city" name="city">
                                    <?php foreach ($cities as $city) { ?> 
                                        <option value="<?php echo $city->city_name; ?>"
                                                <?php echo (!empty($trip_info->departure) && $city->city_name == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                </select> 
                            </div> 
                        </div><!--/.col--> 
                        <div class="col-md-4">
                            <label class="col-form-label">
                                Count of Itineraries<br/>
                                <span class="m-form__help">
                                    Enter Count
                                </span>
                            </label>
                            <div class="m-ion-range-slider">
                                <input type="hidden" id="max_views" value="<?php echo $views->max_count; ?>" />
                                <input type="hidden" id="m_slider_3"/>                                
                            </div>
                        </div><!--/.col--> 
                        <div class="col-md-4">
                            <label class="col-form-label">
                                Profile Completion<br/>
                                <span class="m-form__help">
                                    Range
                                </span>
                            </label>
                            <div class="m-ion-range-slider">
                                <input type="hidden" id="Profile_Completion" value="<?php echo $views->max_count; ?>" />
                                <input type="hidden" id="m_slider_9"/>                                
                            </div>
                        </div><!--/.col-->  
                        <div class="col-md-12 mt-3"> 

                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                            <button type="button" class="btn btn-brand btnSearchRealTravellers m-btn--pill">Apply Filter</button>
                            <button type="reset" class="btn btn btn-info btnSearchRealTravellers m-btn--pill">Reset Filters</button> 
                        </div><!--/.col-->                    
                    </div>                    
                    <div class="form-group m-form__group row divAlertTripSummary" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripSummary" role="alert">                            
                        </div>
                    </div> 
                </div>
                <!--begin: Datatable -->
                <div class="m-portlet__body" id="divrealtravellers"> 
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30" >
                        <div class="row align-items-center">
                            <div class="col-xl-4 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-12">
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
                            <div class="col-xl-8 order-1 order-xl-2 m--align-right">
                                <a href="<?php echo base_url('admin/real_travellers_edit'); ?>" class="btn btn btn-info m-btn--pill"> 
                                    New Profile
                                </a> 
                                <a href="#" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"> 
                                    Download list  
                                </a>
                            </div>
                        </div>
                    </div>  
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
                                <th title="Count of Itineraries ">
                                    Itineraries 
                                </th>
                                <th title="Count of Stories">
                                    Stories
                                </th>
                                <th title="things_to_do">
                                    things_to_do
                                </th>
                                <th title="Profile Completion">
                                    Profile Completion
                                </th>
                                <th title="Action">
                                    Action
                                </th>
                                <th title="Publish">
                                    Publish
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
                                        <a href="<?php echo base_url('admin/real_travellers_edit/' . $value->login_id); ?>"><?php echo $value->full_name; ?></a>
                                    </td>
                                    <td>
                                        <?php echo $value->city; ?>
                                    </td>
                                    <td>
                                        <?php echo (!empty($user_details[$value->login_id]['itineraries'])) ? $user_details[$value->login_id]['itineraries'] : 0; ?>
                                    </td>
                                    <td>
                                        <?php echo (!empty($user_details[$value->login_id]['stories'])) ? $user_details[$value->login_id]['stories'] : 0; ?>
                                    </td>
                                    <td>
                                        <?php echo (!empty($user_details[$value->login_id]['things_to_do'])) ? $user_details[$value->login_id]['things_to_do'] : 0; ?>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/real_travellers_edit/' . $value->login_id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Story"><i class="la la-edit"></i></a>
                                        <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deletereal_travellers" id="deletereal_travellers<?php echo $value->login_id; ?>" data-real_travellers_id="<?php echo $value->login_id; ?>" title="Delete Story"><i class="la la-trash"></i></a>
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


                                </tr>
                                <?php
                                $counter++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <!--end: Datatable -->
                </div><!--/. m-portlet body --> 
            </form>
        </div> 
    </div>
</div>
