<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
                     
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">       
        <div class="m-portlet" id="div_trip_summary">

            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Things to do Edit
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>
            <!--end: Portlet Head-->
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
  <form id="thingsbtnform">
                 <div class="alert alert-danger" style="text-align:left;display:none;" ></div>
             <div class="alert alert-success" style="text-align:left;display:none;"></div> 
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                           Name
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                             <input type="text" class="form-control m-input do_validation" id="things_names" name="things_names" placeholder="Things Name" value="<?php echo @$editrecords[0]->name; ?>">
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
                            <input type="text" class="form-control m-input do_validation" id="things_headline" name="things_headline" placeholder="Things Headline" value="<?php echo @$editrecords[0]->headline; ?>">
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
                            <textarea class="form-control m-input do_validation editor" id="editor" rows="5" name="article_description"><?php echo @$editrecords[0]->description; ?></textarea>
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
                            <div class="cropme cropme2" style="width: 540px; height: 616px;">
                            </div> 
                         <input type="hidden" name="" id="ttdetailThumb"> 
                           <img src="<?php echo '/assets/frontImage/thingstodo/'. @$editrecords[0]->thingsimage; ?>" height=100 width=100> 

                        </div>
                    </div>
                    <input type="hidden" id="thingsIds"  name="thingsIds" value="<?php echo $thingsid;?>">    
                        <input type="hidden" id="thingstodoIds"  name="thingstodoIds" value="<?php echo @$editrecords[0]->thingstodo;?>">    
                    
                    <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions pr-0 pl-0">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                                
                                <button type="button" class="btn btn-brand btneditThingsdo">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            
        </div>

  
            
        </div>
    </div>

