<!--begin: Search Form -->
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
            <a href="<?php echo base_url('admin/things_to_do'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                <span>
                    <i class="la la-cart-plus"></i>
                    <span>
                        New Things to do
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
            <th title="Destination">
                Destination
            </th>
            <th title="Headline">
                Headline
            </th>
            <th title="Author">
                Author
            </th>
            <th title="View Count">
                View Count
            </th>
            <th title="Actions">
                Actions
            </th>  
            <th title="Publish">
                Publish
            </th> 
            <th title="link">
                Link
            </th> 
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1; ?>
        <?php foreach ($things as $value) { ?>
            <tr>
                <td>
                    <?php echo $counter; ?>
                </td>
                <td>
                    <?php echo $value->place; ?>
                </td>
                <td>
                    <?php echo $value->article_headline; ?>
                </td>
                <td>
                    <?php echo $value->full_name; ?>
                </td>
                <td>
                    <?php echo $value->views_count; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('admin/things_to_do/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>	
                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deletethings_to_do" id="deletethings_to_do<?php echo $value->id; ?>" data-things_to_do_id="<?php echo $value->id; ?>" title="delete things_to_do "><i class="la la-trash"></i></a>

                </td>
                <td>
                    <?php if (!empty($value->is_published)) { ?>
                        <input data-switch="true" type="checkbox" id="switch_<?php echo (!empty($value->id)) ? $value->id : ''; ?>" checked="checked" data-on-text="Enabled" data-handle-width="70" data-off-text="Disabled" data-on-color="brand" >
                    <?php } else { ?>
                        <span style="width: 110px;">
                            <span class="m-badge m-badge--danger m-badge--wide">Unpublished</span>                                    
                        </span>
                    <?php } ?>

                </td>
                <td>
    <!--                                    <a href="https://www.travelitineraries.in/travel-stories/<?php echo $value->story_head; ?>"><?php echo 'https://www.travelitineraries.in/travel-stories/' . $value->story_head; ?></a>-->

                </td>
            </tr>
            <?php
            $counter++;
        }
        ?>
    </tbody>
</table>
<!--end: Datatable -->