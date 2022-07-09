
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Leads
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
                                <div class="col-md-12 m--align-right">
                                    <a href="<?php echo base_url('package/download_packagecsv'); ?>" class="btnSaveTripSummary btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
                                    <th title="Package">
                                        Destination
                                    </th>
                                    </th>
                                     <th title="Package">
                                        Platform
                                    </th>
                                    </th>
                                     <th title="Package">
                                       Campaign Type	
                                    </th>
                                    </th>
                                     <th title="Package">
                                        Ad Group
                                    </th>
                                    <th title="Package">
                                        Date
                                    </th>
                                    <th title="Name">
                                        Name
                                    </th>
                                    <th title="Email">
                                        Email
                                    </th>
                                     <th title="Mobile">
                                        Mobile
                                    </th>
                                    <th title="Package">
                                        Package Selected
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $counter = 1; 
                                if(isset($package_detail) && is_Array($package_detail)) :
                                foreach ($package_detail as $value) {                                     ?>
                                    <tr>
                                        <td>
                                           <?php echo $counter; ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $value->landing; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->platform; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->campaigntype; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->adgroup; ?>
                                        </td>
                                         <td>
                                            <?php echo $value->created_date; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->name; ?>
                                        </td>
                                         <td>
                                            <?php echo $value->email; ?>
                                        </td>

                                        <td>
                                            <?php echo $value->phone; ?>
                                        </td>
                                       
                                        <td>
                                            <?php echo $value->package; ?>
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
