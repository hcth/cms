<!--begin: Portlet Head-->
<div class="m-portlet__head p-4">
 
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
                        <input type="hidden" name="itinerary_size" id="itinerary_size" value="<?php echo $days; ?>"/>
                                        <input type="hidden" id="itinerary_details_id" name="itinerary_details_id" value="<?php echo $trip_id; ?>"/>
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
                                                * Headline: 
                                            </label>
                                            <div class="col-xl-9 col-lg-9">
                                                <div class="input-group m-input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-map-marker"></i>
                                                        </span>
                                                    </div>
                                                    
                                                    <input type="text" name="from_city_<?php echo $counter; ?>" class="form-control"  value="<?php echo (!empty($trip_details[$i]->from_city)) ? $trip_details[$i]->from_city : ''; ?>">
                                                </div>
                                                <span class="m-form__help">
                                                    We'll never share your email with anyone else
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
                                                    * Headline:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group m-input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-map-marker"></i>
                                                            </span>
                                                        </div>

                                                          <input type="text" name="from_city_<?php echo $i; ?>" class="form-control"  value="">
                                                    </div>
                                                    <span class="m-form__help">
                                                        We'll never share your email with anyone else
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


                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                             </div> 
                            <!--end: Form Wizard Step 1-->
                        
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
<!-- <script src='/assets/admin/js/wizard.js' type="text/javascript"></script> -->
<script> <?php include(FCPATH.'assets/admin/js/wizard.js');?></script>
<script>
    $(document).ready(function () {
        $('.tripDate').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            startDate: Date(),
            todayHighlight: true,
            orientation: "bottom left",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });

        $(window).bind("load", function () {
            $('.m-select2-ajax').select2({
            });
        });
    })
</script>
