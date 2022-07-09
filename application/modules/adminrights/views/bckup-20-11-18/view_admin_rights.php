<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    admin rights
                </h3>
            </div>            
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">

        <div class="m-portlet" id="div_trip_summary">
            <form class="m-form">
                <!--begin: Datatable -->
                <div class="m-portlet__body" id="divrealtravellers"> 
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30" >
                        <div class="row align-items-center">
                            <div class="col-xl-4 order-2 order-xl-1">
                               </div>

                            <div class="col-xl-8 order-1 order-xl-2 m--align-right">
                                <a href="<?php echo base_url();?>adminrights/add_rights" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"> 
                                    Add User 
                                </a>
                            </div>
                            
                        </div>
                    </div>  
                    <table  id="adminrights" width="100%">
                        <thead>
                            <tr>
                                <th title="#">
                                    #
                                </th>
                                <th title="Name">
                                    Name
                                </th>
                                <th title="Rights">
                                    Rights
                                </th>
                                <th title="Action">
                                    Action
                                </th>
                                <th title="Publish">
                                    Status
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            <?php
                            if(isset($adminRec) && is_array($adminRec)): 
                            foreach ($adminRec as $value) { 
                               
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url()?>traveller/travellerDetail/<?php echo @$value->url;?>" target="_blank"><?php echo $counter; ?></a>
                                    </td>
                                    <td>
                                      <?php echo $value->admin_name;?>
                                    </td>          
                                        <td><?php  echo Modules::run('adminrights/viewrights',$value->rights);?></td>   
                                    <td>
                                        <a href="<?php echo base_url().'adminrights/editrights/'.@$value->id; ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Traveler"><i class="la la-edit"></i></a>
                                        <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only delete_admin"  id="<?php echo @$value->id; ?>" title="Delete Traveler"><i class="la la-trash"></i></a>
                                    </td>
                                    <td>
                                        Active
                                    </td>
                                </tr>
                                <?php
                                $counter++;
                            } else: ?>
                            <tr>No record found!</tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!--end: Datatable -->
                </div><!--/. m-portlet body --> 
            </form>
        </div> 
    </div>
</div>
