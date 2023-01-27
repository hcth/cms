<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
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
            </div> -->           
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">                     
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Count of
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Stories
                                </span>
                                <span class="m-widget24__stats m--font-info" id="stories_count">
                                    <?php echo count($stories); ?>
                                </span>
                                <!-- <span class="m-widget24__stats m--font-brand float_none">
                                    20 
                                </span> -->  
                            </div>                    
                        </div>
                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Stories Per Traveler
                                </h4><br>
                                <span class="m-widget24__desc" >
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="stories_per_traveller">
                                    <?php $id =  $this->session->userdata('id');
                                        echo modules::run('stories/getRealTravellerStoriesCount',$id);
                                    ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Views
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info" id="stories_total_views">
                                    <?php echo modules::run('stories/getAllCounts'); ?>
                                </span> 
                            </div>      
                        </div>
                        <!--end::New Feedbacks--> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="m-widget24 text-center">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title m--icon-font-size-lg2">
                                    <a href="<?php echo base_url('stories/add_stories'); ?>" class="m--font-danger">
                                        <i class="fa fa-plus-square-o m--icon-font-size-lg2"></i> New Stories</a>
                                </h4> 
                            </div>      
                        </div>
                        <!--end::New Orders--> 
                    </div> 
                   
                </div>
            </div>
        </div>
       

        <div class="m-portlet m-portlet--mobile">
          
            <div class="m-portlet__body" id="divStories">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="<?php echo base_url('stories/addstories'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
                                Author
                            </th>
                            <th title="Destination">
                                Destination
                            </th>
                            <th title="Headline">
                                Headline
                            </th>
                            <th title="View Count">
                                View Count
                            </th>
                            <!--<th title="Link">
                                Stay Days
                            </th>
                            <th title="Status">
                                Status
                            </th>-->
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
                        if(isset($stories) && is_array($stories)) { 
                        foreach ($stories as $value) { 
                            
                              if($istraveler == 1 && $value->real_traveller == $rec[0]->id){
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url()?>story/<?php echo $value->meta_url?>" target="_blank"><?php echo $counter; ?></a>
                                </td>
                                <td>
                                   <a href="<?php echo base_url()?>/traveller/travelerInfo/<?php echo modules::run('itineraries/getTravellerUrl',$value->real_traveller); ?>"><?php $realName =  modules::run('itineraries/getTravellerName',$value->real_traveller);
                                    if($realName == "no"){
                                        echo "Team Adventourist";
                                    } else {
                                        echo $realName; 
                                    }
                                   ?></a>
                                </td>
                                <td>
                                    <?php echo $value->destination; ?>
                                </td>
                                <td>
                                   <?php echo $value->story_head; ?>
                                </td>
                                <td>
                                    <?php echo $value->views_count; ?>
                                </td>
                                <!--<td>
                                    <?php echo $value->stay_days; ?>
                                </td>
                                <td>
                                   <?php  
                                        if($value->is_published == '1'):
                                            echo "Published";
                                        else:
                                            echo "Unpublished";
                                        endif;                
                                    ?>  
                                </td>-->
                                <td>
                                    <a href="<?php echo base_url('stories/edit_stories/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Story"><i class="la la-edit"></i></a>
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deleteStories" id="deleteStory<?php echo $value->id; ?>" data-story_id="<?php echo $value->id; ?>" title="Delete Story"><i class="la la-trash"></i></a>
                                </td>
                                                                        <?php 
                                            $isAdmin = $this->session->userdata('istraveler');
                                            if($isAdmin == 1): ?>
                                              <td>
                                                   <?php if($value->status == 2){
                                                    $color = "#f4516c";
                                                    $text = "Unpublished";
                                                } elseif($value->status == 0){
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
                                                if($value->status == '2'){
                                                    $color = "#f4516c";
                                                } elseif($value->status == '0'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>
                                            <select name="storiesPublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="storiesPublished">
                                                <option value="2"  <?php if($value->status == '2'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="0" <?php if($value->status == '0'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="1"  <?php if($value->status == '1'): echo "selected"; endif;?>>Published</option>
                                            </select>    
                                        </td>
                                        <?php endif; ?>   
                            </tr>
                            <?php
                            $counter++;
                        } else if($istraveler != 1){ ?>
                             <tr>
                                <td>
                                    <a href="<?php echo base_url()?>story/<?php echo $value->meta_url?>" target="_blank"><?php echo $counter; ?></a>
                                </td>
                                <td>
                                   <a href="<?php echo base_url()?>/traveller/travelerInfo/<?php echo modules::run('itineraries/getTravellerUrl',$value->real_traveller); ?>"><?php $realName =  modules::run('itineraries/getTravellerName',$value->real_traveller);
                                    if($realName == "no"){
                                        echo "Team Adventourist";
                                    } else {
                                        echo $realName; 
                                    }
                                   ?></a>
                                </td>
                                <td>
                                    <?php echo $value->destination; ?>
                                </td>
                                <td>
                                   <?php echo $value->story_head; ?>
                                </td>
                                <td>
                                    <?php echo $value->views_count; ?>
                                </td>
                                <!--<td>
                                    <?php echo $value->stay_days; ?>
                                </td>
                                <td>
                                   <?php  
                                        if($value->is_published == '1'):
                                            echo "Published";
                                        else:
                                            echo "Unpublished";
                                        endif;                
                                    ?>  
                                </td>-->
                                <td>
                                    <a href="<?php echo base_url('stories/edit_stories/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Story"><i class="la la-edit"></i></a>
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deleteStories" id="deleteStory<?php echo $value->id; ?>" data-story_id="<?php echo $value->id; ?>" title="Delete Story"><i class="la la-trash"></i></a>
                                </td>
                                                                        <?php 
                                            $isAdmin = $this->session->userdata('istraveler');
                                            if($isAdmin == 1): ?>
                                              <td>
                                                   <?php if($value->status == 2){
                                                    $color = "#f4516c";
                                                    $text = "Unpublished";
                                                } elseif($value->status == 0){
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
                                                if($value->status == '2'){
                                                    $color = "#f4516c";
                                                } elseif($value->status == '0'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>
                                            <select name="storiesPublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="storiesPublished">
                                                <option value="2"  <?php if($value->status == '2'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="0" <?php if($value->status == '0'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="1"  <?php if($value->status == '1'): echo "selected"; endif;?>>Published</option>
                                            </select>    
                                        </td>
                                        <?php endif; ?>   
                            </tr>
                            <?php 
                             $counter++;
                            
                        } } }
                        ?>
                    </tbody>
                </table>
            </div>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
</div>
