<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Real Travellers List
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
                                    Real Travelers
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                   <?php if(isset($realTravelerRec) && is_array($realTravelerRec)): 
                                        echo count($realTravelerRec);
                                    else:
                                        echo 0;
                                    endif;
                                   ?>
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
                                    <?php echo 0; ?>
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
                                    <?php echo 0; ?>
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
                                    <a href="<?php echo base_url('traveller/addtraveler'); ?>" class="m--font-danger">
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
        <div class="m-portlet" id="div_trip_summary">
            <!--begin: Portlet Head-->
           <!-- <div class="m-portlet__head">
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
                <!--<div class="m-portlet__body">                   
                    <div class="form-group m-form__group row">
                       <!-- <div class="col-md-4">
                            <label class="col-form-label">
                                City<br/>
                                <span class="m-form__help">
                                    Select Real Travellers Cities
                                </span>
                            </label>
                            <div>
                                <select class="form-control m-select2" id="city" name="city">
                                    <?php 
                                        foreach ($cities as $city) { ?> 
                                        <option value="<?php echo $city->city_name; ?>"
                                                <?php echo (!empty($trip_info->departure) && $city->city_name == $trip_info->departure) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                </select> 
                            </div> 
                        </div><!--/.col--> 
                        <!--<div class="col-md-4">
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
                       <!-- <div class="col-md-4">
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
                        <!--<div class="col-md-12 mt-3"> 

                            <input type="hidden" id="trip_details_id" name="trip_details_id" value="<?php echo (!empty($trip_info->id)) ? $trip_info->id : ''; ?>"/>
                            <button type="button" class="btn btn-brand btnSearchRealTravellers m-btn--pill">Apply Filter</button>
                            <button type="reset" class="btn btn btn-info btnSearchRealTravellers m-btn--pill">Reset Filters</button> 
                        </div><!--/.col                   
                    </div>                  
                </div>
                <!--begin: Datatable -->
                <div class="m-portlet__body" id="divrealtravellers"> 
                    <div class="m-form m-form--label-align-right">
                        <div class="row align-items-center mb-4">
                            <!-- <div class="col-xl-4 order-2 order-xl-1"> -->
                                <!--<div class="form-group m-form__group row align-items-center">
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
                                </div>-->
                            <!-- </div> -->

                            <div class="col-lg-12 m--align-right">
                                <a href="<?php echo base_url();?>traveller/exports_data" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"> 
                                    Download list  
                                </a>
                            </div>
                            
                        </div>
                    </div>  
                    <div class="table-responsive">
                    <table  id="travellers" width="100%">
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
                                <th title="email">
                                    Email 
                                </th>
                                <th title="mobile">
                                   Mobile
                                </th>
                                <th title="profession">
                                    Profession
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
                            <?php
                            if(isset($realTravelerRec) && is_array($realTravelerRec)): 
                            foreach ($realTravelerRec as $value) { 
                               
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>traveller/travellerDetail/<?php echo $value->url;?>" target="_blank"><?php echo $counter; ?></a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url()?>traveller/travelerInfo/<?php echo $value->url;?>" target="_blank"><?php echo $value->name;?></a>
                                    </td>
                                     <td>
                                        <?php echo getcitybyId($value->city); ?>
                                    </td>
                                    <td>
                                        <?php echo $value->email; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->mobile; ?>
                                    </td>
                                    <td>
                                       <?php echo $value->profession; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('traveller/editTraveler/'.$value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Traveler"><i class="la la-edit"></i></a>
                                        <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only deletereal_travellerss"  id="<?php echo $value->id; ?>" title="Delete Traveler"><i class="la la-trash"></i></a>
                                    </td>
                                    <td>
                                        <?php 
                                            if($value->isPublished == '0'){
                                                $color = "#f4516c";
                                            } elseif($value->isPublished == '1'){
                                                 $color = "#f79706";
                                            }else {
                                                 $color = "#218838";
                                            }

                                        ?>
                                        <select name="statuspublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="profilestatus">
                                            <option value="0"  <?php if($value->isPublished == '0'): echo "selected"; endif;?>>Unpublished</option>
                                            <option value="1" <?php if($value->isPublished == '1'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                            <option value="2"  <?php if($value->isPublished == '2'): echo "selected"; endif;?>>Published</option>
                                        </select>
                                            <!--<span style="width: 110px;">
                                                <?php if($value->status == '0') :
                                                    $style = "m-badge--danger";
                                                    $title = "Unpublished";
                                                else :
                                                    $style = "m-badge--success";
                                                    $title = "Published";
                                                 endif; ?>
                                                <span class="m-badge m-badge--wide <?php echo $style; ?>"><?php echo $title;?></span>                                    
                                            </span>-->
                                        
                                    </td>
                                </tr>
                                <?php
                                $counter++;
                            } else: ?>
                            <tr>No record found!</tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    </div>
                    <!--end: Datatable -->
                </div><!--/. m-portlet body --> 
            </form>
        </div> 
    </div>
</div>
