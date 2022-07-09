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
                            Things to do
                        </h3>
                    </div>
                </div>                
            </div>
            <div class="m-portlet__body">  
                <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#realtravller">
                            SEO/Article Detail
                        </a>
                    </li> 
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#list_of_itineraries" id="list_of_itinerariess">
                            Things to do detail
                        </a>
                    </li> 
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="realtravller" role="tabpanel">
                       <div class="m-portlet"> 
            <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div>
             <form class="m-form m-form--fit m-form--label-align-right" id="thingstodoSEO">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Tags
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_tags" name="meta_tags" rows="5"><?php if(isset($thingsRecord) && !empty($thingsRecord[0]->metatag)): echo $thingsRecord[0]->metatag; endif;?></textarea>
                            <span class="m-form__help">
                               Add Text tags that describe your content eg: Leh trip, ladakh trip. (use comma to separate tags, Try to limit to 10 tags).
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_description" name="meta_description" rows="5"><?php if(isset($thingsRecord) && !empty($thingsRecord[0]->metaDesc)): echo $thingsRecord[0]->metaDesc; endif;?></textarea>
                            <span class="m-form__help">
                               Describe the content on your page eg: “ Visit Leh on royal Enfield itinerary 9 days “ Try to keep use 160 characters.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Title
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="<?php if(isset($thingsRecord) && !empty($thingsRecord[0]->meta_title)): echo $thingsRecord[0]->meta_title; endif;?>">
                             <span class="m-form__help">
                               This is what will people read if they find this page on google” Give the content a Title, Try to limit to 70 characters.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Views Count
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control m-input do_validation" id="views_count" name="views_count" placeholder="Enter Views for page" value="<?php if(isset($thingsRecord) && !empty($thingsRecord[0]->viewcount)): echo $thingsRecord[0]->viewcount; endif;?>">
                              <span class="m-form__help">
                               Enter a random number.
                            </span>
                        </div>
                    </div>
                    <!--<div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Alt Text For Images
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="alt_text" name="alt_text" placeholder="Enter Text for Images">
                        </div>
                    </div>-->
                   <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            URL
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="meta_url" name="meta_url" placeholder="Enter URL for Page" value="<?php if(isset($thingsRecord) && !empty($thingsRecord[0]->url)): echo $thingsRecord[0]->url; endif;?>">
                               <span class="m-form__help">
                               Enter a URL Structure eg: leh-ladakh-itinerary . using”-” between words is compulsory.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Article Headline
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="article_headline" name="article_headline" placeholder="article_headline" value="<?php if(isset($thingsRecord) && !empty($thingsRecord[0]->articleHeadline)): echo $thingsRecord[0]->articleHeadline; endif;?>">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Article Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control m-input do_validation" id="article_description" rows="5" name="article_description"><?php if(isset($thingsRecord) && !empty($thingsRecord[0]->articleDesc)): echo $thingsRecord[0]->articleDesc; endif;?></textarea>
                            <span class="m-form__help">
                                Please give some information about article.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">                        
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Place
                        </label>
                         <div class="col-lg-4 col-md-9 col-sm-12">
                                    <?php 
                                        if(!empty($thingsRecord[0]->articleplace)):
                                        $startPoint = modules::run('itineraries/getCityNameForSelect',$thingsRecord[0]->articleplace);
                                    endif;
                                    ?>
                                    <select class="form-control m-select2" id="start_point" name="start_point">
                                       <?php 
                                        if(is_Array($startPoint)){?>
                                            <option value="<?php echo $startPoint[0]->id; ?>" selected><?php echo $startPoint[0]->name; ?></option>
                                        <?php }
                                       ?>
                                    </select> 
                                </div>
                    </div>
                    
                     <div class="m-portlet__body">
                    <label class="col-form-label col-lg-2 col-sm-12">
                            Things to do Image
                    </label>
                    <input type="file" name="storiesfile" id="storiesImage">
                    <?php if(!empty($thingsRecord[0]->profileImage)){ ?>
                          <img src="<?php echo base_url()?>assets/frontImage/thingstodothumb/<?php echo $thingsRecord[0]->profileImage;?>" style="width:100px;height:100px;">  
                        <?php } ?>
                        <a href="http://demo.thecreatiwitty.com/imagecropper/" class="cropImages">Crop Image</a>
                    <label style="font-size: 12px;color: red;margin-left: 18px;">Note*: "Upload Image in png, jpeg, jpg, gif  format upto 2 MB, try to use the best image to represent your things to do and also Image size width:600px and Height:650px</label>
                </div>


                    <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                                
                                <button type="button" class="btn btn-brand btnSeoThings">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                    </div><!--/. end tab -->
                    <div class="tab-pane" id="list_of_itineraries" role="tabpanel">
                        <div class="m-portlet"> 
                        <div style="display: block;width: 20%;background: #065784;float: right;padding: 7px;margin: 13px;text-align: center;border-radius: 13px;">
                            <a id="thingsformopen" style="color:#fff;text-decoration: none;">New Thing to add</a></div>
                       
                
                
                     <form class="m-form m-form--fit m-form--label-align-right" id="thingsbtnform" style="display:none">
                 <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div>
                <div class="m-portlet__body" >
                    <div class="form-group m-form__group row" style="margin: 50px;">
                        <label class="col-form-label col-lg-3 col-sm-12">
                           Name
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                             <input type="text" class="form-control m-input do_validation" id="things_names" name="things_names" placeholder="Things Name">
                            <span class="m-form__help">
                                Enter comma seperated. eg. tag1, tag2, ...
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Headline
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <input type="text" class="form-control m-input do_validation" id="things_headline" name="things_headline" placeholder="Things Headline">
                            <span class="m-form__help">
                                Enter Description
                            </span>
                        </div>
                    </div>
                </div>

                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control m-input do_validation" id="article_description" rows="5" name="article_description"></textarea>
                            <span class="m-form__help">
                                Please give some information about article.
                            </span>
                        </div>
                    </div>

                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Image
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="file" name="thingsImage" id="thingsImage">
                            <span class="m-form__help">
                                Please give some information about article.
                            </span>
                        </div>
                    </div>
                    
                    <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                                
                                <button type="button" class="btn btn-brand btnThingsdo">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
             <div class="table-responsive">
                <table  id="thingsTable" width="100%">
                    <thead>
                        <tr>
                            <th title="#">
                                #
                            </th>
                            <th title="Article Name">
                                Article Name
                            </th>
                            <th title="Name">
                                Name
                            </th>
                            <th title="Heading">
                                Heading
                            </th>
                            <th title="Description">
                                Description
                            </th>
                            <th title="Actions">
                                Actions
                            </th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; 
                        if(isset($thingsDetailRecord) && is_array($thingsDetailRecord)){?>
                        <?php foreach ($thingsDetailRecord as $value) {
                            
                        ?>
                            <tr>
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo modules::run('Things_to_do/getArticleName',$value->thingstodo); ?>
                                </td>
                                <td>
                                    <?php echo $value->name; ?>
                                </td>
                                <td>
                                   <?php echo $value->headline; ?>
                                </td>
                                <td>
                                    <?php echo $value->description; ?>
                                </td>
                                <td>
                                   <!-- <a href="<?php echo base_url('things_to_do/add_things_to_do_form/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>  -->
                                    <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8 deletethings_detail_to_do" id="things_to_do_id_detail<?php echo $value->id; ?>" data-things_to_do_id_detail="<?php echo $value->id; ?>" title="delete things_to_do "><i class="la la-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                            $counter++;
                        } }
                        ?>
                    </tbody>
                </table>
                </div>
        </div>
                    </div><!--/. end tab -->
                   <!--/.end tab -->
                </div> 
            </div>
        </div> 
        
        
        <!--begin::Portlet-->
        
        <!--end::Portlet-->
    </div>
</div>