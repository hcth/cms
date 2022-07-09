
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    List of Itineraries Expert
                </h3>
            </div>            
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content"> 

       
        <div class="m-portlet">
       
            <form id="SubscriberSummary" class="m-form">
                <div class="m-portlet__body"> 
                   

                    <div id="divItineraries">
                        <!--begin: Datatable -->
                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                            <div class="row align-items-center">
                                <div class="col-md-8 order-2 order-xl-1">
                                    <div class="form-group m-form__group row align-items-center">
                                    </div>
                                </div><!--/.col-->
                                <div class="col-md-4 order-1 order-xl-2 m--align-right">
                                    <a href="<?php echo base_url('itinerariesexpert/download_itinerariesexpertcsv'); ?>" class="btn btn-brand btnSaveTripSummary m-btn--pill"> 
                                        Download CSV 
                                    </a>
                                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                                </div><!--/.col-->

                            </div>
                        </div> 
                        <div class="table-responsive">
                        <table  id="adminrights" width="100%">
                            <thead>
                                <tr>
                                    <th title="#">
                                        #
                                    </th>
                                    <th title="Actions">
                                       Headline
                                    </th>
                                    <th title="departure">
                                        Name
                                     <th title="Actions">
                                        Mobile
                                    </th>
                                    <th title="departure">
                                        Email
                                    <th title="Actions">
                                        What to know
                                    </th>

                                    <th title="Actions">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; 
                                if(isset($itinerariesexpert) && is_Array($itinerariesexpert)) :
                                foreach ($itinerariesexpert as $value) { 
                                    ?>
                                    <tr>
                                        <td>
                                           <?php echo $counter; ?>
                                        </td>


                                        <td>
                                            <?php echo $value->headline; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->email; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->mobile; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->whattoknow; ?>
                                        </td>

                                        
                                        <td>
                                            <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only delete_itinerariesexpert"  id="<?php echo @$value->id; ?>" title="Delete Traveler"><i class="la la-trash"></i></a>
                                        </td>
                                        
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
