<!--begin: Search Form -->
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-md-8 order-2 order-xl-1">
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
        </div><!--/.col-->
        <div class="col-md-4 order-1 order-xl-2 m--align-right">
            <a href="<?php echo base_url('admin/view_itineraries_details'); ?>" class="btn btn-brand btnSaveTripSummary m-btn--pill"> 
                Download CSV 
            </a>
            <div class="m-separator m-separator--dashed d-xl-none"></div>
        </div><!--/.col-->
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
            <th title="departure">
                Departure
            </th>
            <th title="destination">
                Destination
            </th>
            <th title="Stay Days">
                Stay Days
            </th>
            <th title="Mode of Transport">
                Mode of Transport
            </th>
            <th title="Budget">
                Budget
            </th>
            <th title="Best time to Visit">
                Best time to Visit
            </th>
            <th title="Suitable">
                Suitable
            </th>
            <th title="Theme">
                Theme
            </th>
            <th title="View Count">
                View 
            </th>
            <th title="Actions">
                Actions
            </th>
            <th title="Link to Website">
                Link 
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1; ?>
        <?php foreach ($trip_info as $value) { ?>
            <tr>
                <td>
                    <?php echo $counter; ?>
                </td>
                <td>
                    <?php echo $value->departure; ?>
                </td>
                <td>
                    <?php echo $value->destination; ?>
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
                <td>
                    <?php echo $value->real_traveller; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('admin/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>	
                </td>
                <td>
                    <?php echo $value->trip_days; ?>
                </td>


            </tr>
            <?php
            $counter++;
        }
        ?>
    </tbody>
</table>
<!--end: Datatable -->