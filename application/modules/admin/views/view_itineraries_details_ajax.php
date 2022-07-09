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
                <!--<input type="text" class="form-control m-input" name="total_trip_days" id="total_trip_days" placeholder="Total Trip Days" value="<?php //echo (!empty($trip_info->trip_days)) ? $trip_info->trip_days : '';                       ?>"/>--> 
                <div class="input-daterange input-group tripDateRange">
                    <input type="text" class="form-control m-input" id="itinerary_date_start" name="itinerary_date_start" 
                           value="<?php echo (!empty($trip_info->visit_date_from)) ? $trip_info->visit_date_from : $date_start; ?>"
                           />
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-ellipsis-h"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="itinerary_date_end" id="itinerary_date_end"
                           value="<?php echo (!empty($trip_info->visit_date_to)) ? $trip_info->visit_date_to : $date_end; ?>"
                           />
                           <?php $trip_id = (!empty($trip_info->id)) ? $trip_info->id : $trip_id; ?>
                    <input type="hidden" id="trip_id" name="trip_id" value="<?php echo $trip_id; ?>"/>
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
        <!--begin: Message container -->
        <div class="m-portlet__padding-x">
            <!-- Here you can put a message or alert -->
        </div>
        <!--end: Message container -->
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
                                            <input type="hidden" value="<?php echo $counter; ?>" name="dayscount">
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
                                                    <!--<select class="form-control m-select2-ajax" name="from_city_<?php echo $counter; ?>" id="from_city_<?php echo $counter; ?>" >
                                                        <?php foreach ($cities as $city) { ?> 
                                                            <option value="<?php echo $city->name; ?>"
                                                                    <?php echo (!empty($trip_info->destination) && $city->name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                        <?php echo $city->name; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>-->
                                                      <input type="text" name="from_city_<?php echo $counter; ?>" class="form-control"  value="">  
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
                                                        <!--<select class="form-control m-select2-ajax" name="to_city_<?php echo $counter; ?>" id="to_city_<?php echo $counter; ?>" >
                                                            <?php foreach ($cities as $city) { ?> 
                                                                <option value="<?php echo $city->name; ?>"
                                                                        <?php echo (!empty($trip_info->destination) && $city->name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                            <?php echo $city->name; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>-->
                                                          <input type="text" name="to_city_<?php echo $counter; ?>" class="form-control"  value="">
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
                                             <input type="hidden" value="<?php echo $i; ?>" name="dayscount">
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    * Date:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" class="form-control tripDate" id="trip_date<?php echo $i; ?>" name="trip_date<?php echo $i; ?>"  placeholder="Select date" value="<?php
                                                    if(!empty($trip_details[$i]->date)):
                                                        echo $trip_details[$i]->date;
                                                    else:
                                                    if($i == 1){
                                                        echo $date_start;
                                                        } else {
                                                            $j = $i;
                                                            $j = $j - 1;
                                                            echo date('Y-m-d', strtotime($date_start.' +'.$j.'days'));
                                                        }
                                                    
                                                        
                                                    endif;
                                                    ?>"/>
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
                                                       <!-- <select class="form-control m-select2-ajax" name="from_city_<?php echo $i; ?>" id="from_city_<?php echo $i; ?>" >
                                                            <?php foreach ($cities as $city) { ?> 
                                                                <option value="<?php echo $city->name; ?>"
                                                                        <?php echo (!empty($trip_info->destination) && $city->name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                            <?php echo $city->name; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>-->
                                                        <input type="text" name="from_city_<?php echo $i; ?>" class="form-control"  value="<?php echo @$trip_details[$i]->from_city?>">  
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
                                                            <!--<select class="form-control m-select2-ajax" name="to_city_<?php echo $i; ?>" id="to_city_<?php echo $i; ?>" >
                                                                <?php foreach ($cities as $city) { ?> 
                                                                    <option value="<?php echo $city->name; ?>"
                                                                            <?php echo (!empty($trip_info->destination) && $city->name == $trip_info->destination) ? 'selected' : ''; ?>>
                                                                                <?php echo $city->name; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>-->
                                                            <input type="text" name="to_city_<?php echo $i; ?>" class="form-control"  value="<?php echo @$trip_details[$i]->to_city?>">
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
                                                <div class="col-xl-9 col-lg-9">
                                                    <!--<input type="text" name="travel_time_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->travel_time)) ? $trip_details[$i]->travel_time : ''; ?>" />-->
                                                   <!-- <input type="text" name="dayss" id="dayss" > Day-->
                                                    <input type="number" name="hours_<?php echo $i; ?>" id="hours" style="width:20%"> <span style="font-size: 12px;padding: 13px;">Hours</span>
                                                    <input type="number" name="min_<?php echo $i; ?>" id="min" style="width:20%" > <span style="font-size: 12px;padding: 13px;">Min</span>
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Distance:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="number" name="distance_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->distance)) ? $trip_details[$i]->distance : ''; ?>" >
                                                    <span class="m-form__help">
                                                        Distance should be in KMS
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
                                                
                                                  <span class="m-form__help">
                                                          Anywhere i could find a bed
                                                   </span>
                                                   </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    * Food:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="food_<?php echo $i; ?>" class="form-control m-input" placeholder="" value="<?php echo (!empty($trip_details[$i]->food)) ? $trip_details[$i]->food : ''; ?>">
                                               
                                                  <span class="m-form__help">
                                                         Anything that kept me alive
                                                   </span>
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
                                        <input type="hidden" name="itinerary_size" id="itinerary_size" value="<?php echo $days; ?>"/>
                                        <input type="hidden" id="itinerary_details_id" name="itinerary_details_id" value="<?php echo $trip_id; ?>"/>
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
<!--end: Portlet Body-->
<script src="<?php echo base_url() . 'assets/admin/js/wizard.js'; ?>" type="text/javascript"></script>
<script>
    $(document).ready(function () {
     var dates=['<?php echo $date_start;?>','<?php echo $date_end;?>'];
        $('.tripDate').datepicker({
            format: 'yyyy-mm-dd',
            startDate:'<?php echo $date_start;?>',
            endDate: '<?php echo $date_end;?>',
            beforeShowDay: highlightDays,
        });

        function highlightDays(date) {
        for (var i = 0; i < dates.length; i++) {
            if (new Date(dates[i]).toString() == date.toString()) {              
                return [true, 'highlight', tips[i]];
            }
        }
        return [true, ''];
     }
        $(window).bind("load", function () {
            $('.m-select2-ajax').select2({
            });
        });
    })
</script>