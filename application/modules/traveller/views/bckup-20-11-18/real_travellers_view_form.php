<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        
    </div>
    <div class="m-content"> 
    
     <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Real Traveller Information
                        </h3>
                    </div>
                </div>                
            </div>
            <div class="m-portlet__body">  
                <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#realtravller">
                            Real Traveller
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#list_of_itineraries">
                            List of Itineraries
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#list_of_stories">
                            List of Stories
                        </a>
                    </li> 
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="realtravller" role="tabpanel">
                       <div class="m-portlet"> 
            <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div>
            <!--begin::Form-->
            <?php if(is_array($editRec) && !empty($editRec)):
                       ?>
            <form class="m-form m-form--fit m-form--label-align-right" id="edittravelProfile" enctype="multipart/form-data">
                <div class="m-portlet__body">

                    <?php if($this->session->userdata('adminStatus') == 0) : ?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Tag
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_tag" id="meta_tag" value="<?php if(is_array($editRec) && !empty($editRec[0]->metatag)): echo $editRec[0]->metatag; endif;?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_description" id="meta_description" value="<?php if(is_array($editRec) && !empty($editRec[0]->metaDesc)): echo $editRec[0]->metaDesc; endif;?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            URL
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_url" id="meta_url" value="<?php if(is_array($editRec) && !empty($editRec[0]->url)): echo $editRec[0]->url; endif;?>"/>
                        </div>
                    </div> 
                <?php endif;?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Full Name : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <label class="col-form-label col-lg-10 col-sm-12">
                                <?php if(is_array($editRec) && !empty($editRec[0]->name)): echo $editRec[0]->name; endif;?></label> 
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Birthday : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                              <label class="col-form-label col-lg-10 col-sm-12"><?php if(is_array($editRec) && !empty($editRec[0]->birthday)): echo $editRec[0]->birthday; endif;?></label> 
                        </div>
                    </div> 
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            State : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select  class="form-control" name="state" id="state" disabled="disabled">
                                <option value="">Select the State</option> 
                                <?php if(is_array($state)):
                                    foreach($state as $staterecord) { 
                                        if($staterecord->id == $editRec[0]->state):
                                            $selected = "selected";
                                        else:
                                            $selected ="";
                                       endif;
                                 ?>
                                <option value="<?php echo $staterecord->id;?>" <?php echo $selected;?>><?php echo $staterecord->name;?></option>
                                <?php  } endif; ?>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            City : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select  class="form-control" name="city" id="city" disabled="disabled">
                                <?php if(is_array($city)):
                                    foreach($city as $staterecord) { 
                                        if($staterecord->id == $editRec[0]->city):
                                            $selected = "selected";
                                        else:
                                            $selected ="";
                                       endif;
                                 ?>
                                <option value="<?php echo $staterecord->id;?>" <?php echo $selected;?>><?php echo $staterecord->name;?></option>
                                <?php  } endif; ?>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Profession : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                           <label class="col-form-label col-lg-10 col-sm-12"><?php if(is_array($editRec) && !empty($editRec[0]->profession)): echo $editRec[0]->profession; else: echo "-"; endif;?></label>
                        </div>
                    </div> 
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Bio:
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                           <label class="col-form-label col-lg-10 col-sm-12"><?php if(is_array($editRec) && !empty($editRec[0]->bio)): echo $editRec[0]->bio; else: echo "-"; endif;?></label>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Places Travelled :
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select class="form-control m-select2" id="places_travelled" name="places_travelled[]" multiple="multiple" disabled="disabled">
                                <?php 
                                if(is_array($city)) :
                                foreach ($city as $cities) {
                                    if(!empty($editRec[0]->travelplace)):   
                                        $records = explode(",",$editRec[0]->travelplace);
                                        if(is_array($records)):
                                            foreach($records as $rec){
                                            if($cities->id == $rec):
                                                $selected = "selected";
                                                break;
                                            else:
                                                $selected = "";
                                            endif;   
                                          }  
                                        endif;
                                    endif;    
                                    ?> 
                                    <option value="<?php echo $cities->id; ?>" <?php if(isset($selected)): echo $selected; endif;?>><?php echo $cities->name;?></option>
                                <?php } endif; ?>
                            </select>
                            <input type="hidden" name="hid_places_travelled" id="hid_places_travelled" />
                            <span class="m-form__help">
                                Select places you travelled so far.
                            </span>
                        </div>
                    </div> 
                     
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Email Id
                        </label>
                        <div class="col-lg-10 col-form-label">
                             <label class="col-form-label col-lg-10 col-sm-12"><?php if(is_array($editRec) && !empty($editRec[0]->email)): echo $editRec[0]->email; endif;?></label>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Mobile Number :
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <label class="col-form-label col-lg-10 col-sm-12"><?php if(is_array($editRec) && !empty($editRec[0]->mobile)): echo $editRec[0]->mobile; else: echo "-"; endif;?></label>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Linkedin : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                           <label class="col-form-label col-lg-10 col-sm-12"><a target="_blank" href="<?php if(is_array($editRec) && !empty($editRec[0]->linkdin)): echo $editRec[0]->linkdin; endif;?>"><?php if(is_array($editRec) && !empty($editRec[0]->linkdin)): echo $editRec[0]->linkdin; else: echo "-"; endif;?></a></label>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Facebook : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                           <label class="col-form-label col-lg-10 col-sm-12"><a href="<?php if(is_array($editRec) && !empty($editRec[0]->facebook)): echo $editRec[0]->facebook; endif;?>" target="_blank"><?php if(is_array($editRec) && !empty($editRec[0]->facebook)): echo $editRec[0]->facebook; else: echo "-"; endif;?></a></label>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Twitter : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <label class="col-form-label col-lg-10 col-sm-12"><a href="<?php if(is_array($editRec) && !empty($editRec[0]->twitter)): echo $editRec[0]->twitter; endif;?>" target="_blank"><?php if(is_array($editRec) && !empty($editRec[0]->twitter)): echo $editRec[0]->twitter; else: echo "-"; endif;?></a></label>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Instagram : 
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <label class="col-form-label col-lg-10 col-sm-12"><a href="<?php if(is_array($editRec) && !empty($editRec[0]->instagram)): echo $editRec[0]->instagram; endif;?>" target="_blank"><?php if(is_array($editRec) && !empty($editRec[0]->instagram)): echo $editRec[0]->instagram; else: echo "-"; endif;?></a></label>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Profile Picture
                        </label>
                        <div class="col-lg-10 col-form-label">
                           
                            <?php if($editRec[0]->profileImage):?>
                            <img src="<?php echo base_url()?>assets/frontImage/userprofiles/<?php echo $editRec[0]->profileImage;?>" alt="" style="width:100px;height:100px">
                            <?php endif; ?> 
                       
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Profile Status
                        </label>
                        <div class="col-lg-10 col-form-label">
                           
                            <?php if($editRec[0]->isPublished == '0'){
                                echo "<strong>Unpublished</strong>";
                              }else if($editRec[0]->isPublished == '2'){
                                echo "<strong>Published</strong>";
                              } else {
                                echo "<strong>Waiting for Admin approval</strong>";
                            } ?> 
                        </div>
                    </div>
                    <input type="hidden" name="editId" value="<?php echo $editRec[0]->id?>">
                    <div class="form-group m-form__group row divAlertStoriesDetails" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                   <?php $ans = $this->uri->segment('3');?>             
                                <input type="hidden" id="profile_id" name="profile_id" value="<?php echo (!empty($ans)) ? $ans : ''; ?>"/>
                                <a href="<?php echo base_url('traveller/editTraveler/'.$editRec[0]->id); ?>"><button type="button" class="btn btn-brand">
                                    Edit
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
             <?php endif; ?>
            <!--end::Form-->
        </div>
                    </div><!--/. end tab -->
                    <div class="tab-pane" id="list_of_itineraries" role="tabpanel">
                        <!--begin: Datatable -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">  
                                        <div class="col-md-4">
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" class="form-control m-input" placeholder="Search..." id="itinerariesSearch">
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                                    <span>
                                                        <i class="la la-search"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div> 
                                    </div> 
                            </div> 
                            <?php if (!empty($trip_info)) { ?>
                                <table id="table_itineraries" class="tableData" width="100%">
                                    <thead>
                                        <tr>
                                            <th title="#">
                                                #
                                            </th>
                                            <th title="Itinerary Headline">
                                                Itinerary Headline
                                            </th>
                                            <th title="About the Trip">
                                                About the Trip
                                            </th>
                                            <th title="Important Things to know">
                                                Important Things to know
                                            </th>
                                            <th title="Actions">
                                                Actions
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
                                                    <?php echo $value->headline; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->about; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->imp_things; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>  
                                                </td>
                                            </tr>
                                            <?php
                                            $counter++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php } ?>
                            <!--end: Datatable -->
                    </div><!--/. end tab -->
                    <div class="tab-pane" id="list_of_stories" role="tabpanel">
                        <!--begin: Datatable -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">  
                        <div class="col-md-4">
                            <div class="m-input-icon m-input-icon--left">
                                <input type="text" class="form-control m-input" placeholder="Search..." id="storiesSearch">
                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                    <span>
                                        <i class="la la-search"></i>
                                    </span>
                                </span>
                            </div>
                        </div>                
                    </div>
                </div>  
                <table id="table_stories" class="tableData" width="100%">
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
                            <th title="Link">
                                Link
                            </th>
                            <th title="Status">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        <?php 
                        if(isset($stories) && is_array($stories)):        
                            foreach ($stories as $value) { ?>
                            <tr>
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo $value->full_name; ?>
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
                                <td>
                                    <a href="https://www.travelitineraries.in/travel-stories/<?php echo $value->story_head; ?>"><?php echo 'https://www.travelitineraries.in/travel-stories/' . $value->story_head; ?></a>
                                </td>
                                <td>
                                    <?php if (!empty($value->is_published)) { ?>
                                        <span style="width: 110px;">
                                            <span class="m-badge m-badge--success m-badge--wide">Published</span>                                    
                                        </span>
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
                        endif;
                        ?>
                    </tbody>
                </table>
                <!--end: Datatable -->
                    </div> <!--/.end tab -->
                </div> 
            </div>
        </div> 
        
        
        <!--begin::Portlet-->
        
        <!--end::Portlet-->
    </div>
</div>