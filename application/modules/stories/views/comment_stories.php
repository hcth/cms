<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <!--<div class="m-subheader ">
        <div class="d-flex align-items-center">
            <!--<div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    HTML Table
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Datatables
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Base
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                HTML Table
                            </span>
                        </a>
                    </li>
                </ul>
            </div>         
        </div>
    </div>
    <!-- END: Subheader -->

     <div class="m-subheader">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Comment Stories List
                </h3> 
            </div>
        </div>
    </div>
    <div class="m-content"> 
        <div class="m-portlet m-portlet--mobile"> 
            <div class="m-portlet__body" id="divStories"> 
                <!--begin: Search Form -->
                <div class="m-form">
                    <div class="row align-items-center">

                        <!-- <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    
                                </div>
                            </div>
                        </div> -->

                        <!--<div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="<?php echo base_url('story/addstories'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-cart-plus"></i>
                                    <span>
                                        New Story
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>-->
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <div class="table-responsive">
                <table  id="storiesTable" width="100%">
                    <thead>
                        <tr>
                            <th title="#">
                                #
                            </th>
                            <th title="Author">
                                Story Name
                            </th>
                            <th title="Destination">
                                Name
                            </th>
                            <th title="Headline">
                                Email
                            </th>
                            <th title="View Count">
                                Website
                            </th>
                            <!--<th title="Link">
                                Stay Days
                            </th>-->
                            <th title="Status">
                                Content
                            </th>
                            <th title="Actions">
                                Actions
                            </th>
                             <th title="Actions">
                                Admin Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; 
                        if(isset($commentRec) && is_array($commentRec)) { 
                        foreach ($commentRec as $value) { 
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url()?>story/<?php echo modules::run('story/getStoriesUrl',$value->storyid); ?>" target="_blank"><?php echo $counter; ?></a>
                                </td>
                                <td>
                                   <?php echo modules::run('stories/getStoriesName',$value->storyid); ?>
                                </td>
                                <td>
                                    <?php echo $value->name; ?>
                                </td>
                                <td>
                                   <?php echo $value->email; ?>
                                </td>
                                <td>
                                    <?php echo $value->website; ?>
                                </td>
                                <td>
                                    <?php echo $value->content; ?>
                                </td>
                               
                                <td>
                                    <!--<a href="<?php echo base_url('story/edit_story/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Story"><i class="la la-edit"></i></a>-->
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deleteComment" id="deleteStory<?php echo $value->id; ?>" data-story_id="<?php echo $value->id; ?>" title="Delete Comment"><i class="la la-trash"></i></a>
                                </td>
                                                                        <?php 
                                            $isAdmin = $this->session->userdata('istraveler');
                                            if($isAdmin == 1): ?>
                                              <td>
                                                   <?php if($value->is_published == 2){
                                                    $color = "#f4516c";
                                                    $text = "Unpublished";
                                                } elseif($value->is_published == 0){
                                                     $color = "#f79706";
                                                     $text = "Waiting for Admin Approval";
                                                }else {
                                                     $color = "#218838";
                                                     $text = "Published";
                                                } ?>
                                                <strong style="color:<?php echo $color;?>"><?php echo $text;?></strong>

                                              </td>  
                                        <?php  else: ?>
                                             <td>
                                            <?php 
                                                if($value->is_published == '2'){
                                                    $color = "#f4516c";
                                                } elseif($value->is_published == '0'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>
                                            <select name="commentPublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="commentPublished">
                                                <option value="2"  <?php if($value->is_published == '2'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="0" <?php if($value->is_published == '0'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="1"  <?php if($value->is_published == '1'): echo "selected"; endif;?>>Published</option>
                                            </select>    
                                        </td>
                                        <?php endif; ?>   
                            </tr>
                            <?php
                            $counter++;
                        } }
                        ?>
                    </tbody>
                </table>
            </div>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
</div>
