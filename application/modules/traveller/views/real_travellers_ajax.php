<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
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
        </div>
        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
            <a href="<?php echo base_url('admin/real_travellers_edit'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                <span>
                    <i class="la la-cart-plus"></i>
                    <span>
                        New Profile
                    </span>
                </span>
            </a>
            <div class="m-separator m-separator--dashed d-xl-none"></div>
        </div>
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