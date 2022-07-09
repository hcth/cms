<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Cms Pages
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
                    <div class="m-form m-form--label-align-right mb-4">
                        <div class="row align-items-center">                            
                            <div class="col-lg-12 m--align-right">
                                <a href="<?php echo base_url();?>cms/add_page" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"> 
                                    Add Cms Page 
                                </a>
                            </div>
                            
                        </div>
                    </div>  
                    <div class="table-responsive">
                    <table  id="adminrights" width="100%">
                        <thead>
                            <tr>
                                <th title="#">
                                    #
                                </th>
                                <th title="Name">
                                   Page Name
                                </th>
                                <th title="Rights">
                                    Slug
                                </th>
                                 <th title="Rights">
                                    Detail
                                </th>
                                 <th title="Rights">
                                    Image
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
                                      <?php echo $value->page_title
                                      ;?>
                                    </td>          
                                        <td><?php echo $value->slug;?></td>   
                                        <td><?php echo $value->cms_data;?></td>
                                        <td>
                                            <?php if(!empty($value->cmsImage)) { ?>
                                                <img src="<?php echo base_url()?>assets/frontImage/cms/<?php echo $value->cmsImage;?>" style="width:100px;height:100px;">
                                                <?php } else { ?>
                                                <?php } ?>
                                        </td>
                                    <?php if($value->status=='1'):?>
                                    <td>
                                        <a href="<?php echo base_url().'cms/editcms/'.@$value->id; ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Traveler"><i class="la la-edit"></i></a>
                                        <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only delete_cms m-btn--pill"  id="<?php echo @$value->id; ?>" title="Delete Traveler"><i class="la la-trash"></i></a>
                                    </td>
                                    <td>
                                        Active
                                    </td>
                                    <?php else:?>
                                        <td>
                                            <a class="m-portlet__nav-link active_cms btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Traveler" id="<?php echo @$value->id; ?>"><i class="la la-edit"></i></a>
                                        </td>
                                        <td>
                                            Deactive
                                        </td>
                                    <?php endif;?>
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
