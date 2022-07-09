
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    List of Subscribers
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
                        <div class="m-form m-form--label-align-right mb-4">
                            <div class="row align-items-center"> 
                                <div class="col-lg-12 m--align-right">
                                    <a href="<?php echo base_url('communication/download_communicationcsv'); ?>" class="btnSaveTripSummary btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"> 
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
                                    <th title="departure">
                                        Email
                                     <th title="Actions">
                                        Status
                                    </th>
                                    <th title="Actions">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; 
                                if(isset($subscribe_email) && is_Array($subscribe_email)) :
                                
                                foreach ($subscribe_email as $value) { 
                                    if($value->status =='1')
                                    {
                                        $status =  'Subscriber';
                                    }
                                    elseif($value->status =='0')
                                    {
                                        $status =  'Unsubscribed';
                                    }
                                    ?>
                                    <tr>
                                        <td>
                                           <?php echo $counter; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->email; ?>
                                        </td>
                                        <td>
                                            <?php echo $status; ?>
                                        </td>
                                        <td>
                                            <?php if($value->status =='1'):
                                            ?>
                                            <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only delete_subscribers m-btn--pill"  id="<?php echo @$value->id; ?>" title="Delete Traveler"><i class="la la-trash"></i></a>
                                            <?php elseif($value->status =='0'):?>   

                                                <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only add_subscribers m-btn--pill"  id="<?php echo @$value->id; ?>" title="Edit Traveler"><i class="fa fa-thumbs-up"></i></a>
    
                                            <?php endif;?>
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
