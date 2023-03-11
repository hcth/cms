<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Real Traveller Profile
                </h3> 
            </div>
        </div>
    </div>
    <div class="m-content"> 
        <!--begin::Portlet-->
        <div class="m-portlet"> 
            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" id="frmTravelStories" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Tag
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_tag" id="meta_tag" value="<?php echo (!empty($users->meta_tags)) ? $users->meta_tags : ''; ?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_description" id="meta_description" value="<?php echo (!empty($users->meta_description)) ? $users->meta_description : ''; ?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            URL
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="meta_url" id="meta_url" value="<?php echo (!empty($users->meta_url)) ? $users->meta_url : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Full Name
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input type="text" class="form-control m-input" name="full_name" id="full_name" value="<?php echo (!empty($users->full_name)) ? $users->full_name : ''; ?>" /> 
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Birthday
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="dob" id="dob" value="<?php echo (!empty($users->dob)) ? $users->dob : ''; ?>" /> 
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            City
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="city" id="city" value="<?php echo (!empty($users->city)) ? $users->city : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            State
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="state" id="state" value="<?php echo (!empty($users->state)) ? $users->state : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Profession
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="occupation" value="<?php echo (!empty($users->occupation)) ? $users->occupation : ''; ?>" /> 
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Bio
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <textarea class="form-control m-input" id="about" name="about" rows="3"><?php echo (!empty($users->about)) ? $users->about : ''; ?></textarea>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Places Travelled
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select class="form-control m-select2" id="places_travelled" name="places_travelled" multiple="multiple">
                                <?php $places_travelled = explode(",", $users->places_travelled); ?>
                                <?php foreach ($cities as $city) { ?> 
                                    <?php foreach ($places_travelled as $places) { ?>
                                        <option value="<?php echo $city->city_name; ?>" 
                                                <?php echo (!empty($places) && $city->city_name == $places) ? 'selected' : ''; ?>>
                                                    <?php echo $city->city_name; ?>
                                        </option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="hid_places_travelled" id="hid_places_travelled" />
                            <span class="m-form__help">
                                Select places you travelled so far.
                            </span>
                        </div>
                    </div> 
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Profile Picture
                        </label>
                        <div class="col-lg-10 col-form-label">
                            <img src="<?php echo base_url('images/profile/Atul/') . '200_Atul_13648.jpg'; ?>" alt=""> 
                        </div>
                    </div>
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2">
                            Email Id
                        </label>
                        <div class="col-lg-10 col-form-label">
                            abc@gmail.com
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Mobile Number
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="mobile" id="mobile" value="<?php echo (!empty($users->mobile)) ? $users->mobile : ''; ?>"/>
                        </div>
                    </div> 

              <!--   
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Address
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="address" id="address" value="<?php //echo (!empty($users->address)) ? $users->address : ''; ?>"/>
                        </div>          
                </div> -->  
               <!--   
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Postcode
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="postcode" id="postcode" value="<?php echo (!empty($users->postcode)) ? $users->postcode : ''; ?>"/>
                        </div>        
                </div> --> 
                    <div class="form-group m-form__group row">
                        
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Linkedin
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="linkedin" id="linkedin" value="<?php echo (!empty($users->linkedin)) ? $users->linkedin : ''; ?>"/>
                        </div>
                    </div>  
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Facebook
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="facebook" id="facebook" value="<?php echo (!empty($users->facebook)) ? $users->facebook : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Twitter
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="twitter" id="twitter" value="<?php echo (!empty($users->twitter)) ? $users->twitter : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-2 col-sm-12">
                            Instagram
                        </label>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input class="form-control m-input" type="text" name="instagram" id="instagram" value="<?php echo (!empty($users->instagram)) ? $users->instagram : ''; ?>"/>
                        </div>
                    </div> 
                    <div class="form-group m-form__group row divAlertStoriesDetails" style="display:none;">
                        <div class="col-lg-1"></div>
                        <div class="alert  col-lg-6 col-md-9 col-sm-12 divMsgTripDetails" role="alert">                            
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                                
                                <input type="hidden" id="profile_id" name="profile_id" value="<?php echo (!empty($this->uri->segment('3'))) ? $this->uri->segment('3') : ''; ?>"/>
                                <button type="button" class="btn btn-brand saveProfile">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->



        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Itineraries
                        </h3>
                    </div>
                </div>                
            </div>
            <div class="m-portlet__body">  
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#list_of_itineraries">
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
                    <div class="tab-pane active" id="list_of_itineraries" role="tabpanel">
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
                <table id="table_stories" class="table nowrap" width="100%">
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
                        <?php foreach ($stories as $value) { ?>
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
                        ?>
                    </tbody>
                </table>
                <!--end: Datatable -->
                    </div> <!--/.end tab -->
                </div> 
            </div>
        </div> 
    </div>
</div>