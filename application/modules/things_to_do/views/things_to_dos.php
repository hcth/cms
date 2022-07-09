<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                     Things to do
                </h3>
            </div>            
        </div>
    </div>
    <div class="m-content"> 
    
     <div class="m-portlet m-portlet--mobile">
           <!--  <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Things to do
                        </h3>
                    </div>
                </div>                
            </div> -->
            <div class="m-portlet__body m-form">  
                <ul class="nav nav-tabs" role="tablist">
                    
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#list_of_itineraries" id="list_of_itinerariess">
                            Things to do detail
                        </a>
                    </li> 
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#realtravller">
                            SEO/Article Detail
                        </a>
                    </li> 
                </ul>
                <div class="tab-content">
                     <div class="tab-pane active" id="list_of_itineraries" role="tabpanel">
                        <div> 
                        <div class="col-lg-12 m--align-right mb-4">
                            <a id="thingsformopen" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill text-white">New Thing to add</a></div> 
                
                     <form id="thingsbtnform" style="display:none">
                 <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div> 
                    <div class="form-group m-form__group row">
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

                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Description
                        </label>
                        <div class="col-lg-9">
                            <textarea class="form-control m-input do_validation" id="article_description" rows="5" name="article_description"></textarea>
                            <span class="m-form__help">
                                Please Discribe your Things to do. 
                            </span>
                        </div>
                    </div>

                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Image
                        </label>
                        <div class="col-lg-9">
                            <input type="file" name="thingsImage" id="thingsImage">
                            <span class="m-form__help">
                                Note*: Please Upload the Image in .png, .jpeg, .jpg, .gif format up to 2 MB max, in 600px * 400px ratio. Use an Image that best represents your Story. Incase of Video Copy paste the correct URL in the Story Video Section
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="thingsIds" value="<?php echo $editid;?>">    
                    <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions pr-0 pl-0">
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
                                   <a href="<?php echo base_url('things_to_do/edit_things_to_do/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a> 
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
                    <div class="tab-pane " id="realtravller" role="tabpanel">
                       <div> 
            <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div>
             <form id="thingstodoSEO">
                <div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-md-3">
                            Meta Tags
                        </label>
                        <div class="col-md-9">                            
                            <textarea class="form-control m-input do_validation" id="meta_tags" name="meta_tags" rows="5"><?php if(isset($thingsRecord) && !empty($thingsRecord[0]->metatag)): echo $thingsRecord[0]->metatag; endif;?></textarea>
                            <span class="m-form__help">
                               Add Text tags that describe your content eg: Leh trip, ladakh trip. (use comma to separate tags, Try to limit to 10 tags).
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-md-3">
                            Meta Description
                        </label>
                        <div class="col-lg-9">                            
                            <textarea class="form-control m-input do_validation" id="meta_description" name="meta_description" rows="5"><?php if(isset($thingsRecord) && !empty($thingsRecord[0]->metaDesc)): echo $thingsRecord[0]->metaDesc; endif;?></textarea>
                            <span class="m-form__help">
                               Describe the content on your page eg: “ Visit Leh on royal Enfield itinerary 9 days “ Try to keep use 160 characters.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-md-3">
                            Meta Title
                        </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control m-input do_validation" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="<?php if(isset($thingsRecord) && !empty($thingsRecord[0]->meta_title)): echo $thingsRecord[0]->meta_title; endif;?>">
                             <span class="m-form__help">
                               This is what will people read if they find this page on google” Give the content a Title, Try to limit to 70 characters.
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-md-3">
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
                        <label class="col-form-label col-lg-3">
                            Article Description
                        </label>
                        <div class="col-lg-9">
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
                           <input type="text" class="form-control " id="start_point" name="start_point" value="<?php echo (!empty($thingsRecord[0]->articleplace)  ? $thingsRecord[0]->articleplace : '' )?>">
                         </div>
                    </div>
                    
                     <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3">
                                Article Image
                        </label>
                        <div class="col-lg-9">
                    <input type="file" name="storiesfile" id="storiesImage">
                    <?php if(!empty($thingsRecord[0]->profileImage)){ ?>
                          <img src="<?php echo base_url()?>assets/frontImage/thingstodothumb/<?php echo $thingsRecord[0]->profileImage;?>" style="width:100px;height:100px;">  
                        <?php } ?>
                        <a href="http://demo.thecreatiwitty.com/image-crop/" class="cropImages" target="_blank" >Crop Image</a>
                        <p class="m-form__help">Note*: Please Upload the Image in .png, .jpeg, .jpg, .gif format up to 2 MB max, in 600px * 400px ratio. Use an Image that best represents your Story. Incase of Video Copy paste the correct URL in the Story Video Section</p>
                     </div>
                </div>


                    <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions pr-0 pl-0">
                        <div class="row">
                            <label class="col-form-label col-lg-3"> 
                             </label>
                            <div class="col-lg-9">                                
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
                   
                   <!--/.end tab -->
                </div> 
            </div>
        </div> 
        
        
        <!--begin::Portlet-->
        
        <!--end::Portlet-->
    </div>
</div>