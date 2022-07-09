<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader_Th_title m-subheader__title--separator">
                    Things to do
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>Home
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Things to do
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            SEO Data
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>

            <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Tags
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_tags" name="meta_tags" rows="5"></textarea>
                            <span class="m-form__help">
                                Enter comma seperated. eg. tag1, tag2, ...
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Meta Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">                            
                            <textarea class="form-control m-input do_validation" id="meta_description" name="meta_description" rows="5"></textarea>
                            <span class="m-form__help">
                                Enter Description
                            </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Views Count
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="views_count" name="views_count" placeholder="Enter Views for page">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Alt Text For Images
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="alt_text" name="alt_text" placeholder="Enter Text for Images">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            URL
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="page_url" name="page_url" placeholder="Enter URL for Page">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Article Details
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>
            <!--end: Portlet Head-->
            <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">                    
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Article Headline
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input do_validation" id="article_headline" name="article_headline" placeholder="article_headline">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Article Description
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control m-input do_validation" id="article_description" rows="5"></textarea>
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
                            <select class="form-control m-select2 do_validation" id="place" name="place">
                                <?php foreach ($cities as $city) { ?> 
                                    <option value="<?php echo $city->city_name; ?>">
                                        <?php echo $city->city_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>                
            </form>
        </div>
        <!--End::Main Portlet-->        
    </div>

    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Things To Do
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                </div>
            </div>
            <!--end: Portlet Head-->
            <form class="m-form m-form--fit m-form--label-align-right frmThingsToDo" enctype="multipart/form-data">
                <div class="m-portlet__body">                    
                    <div id="m_repeater_1">
                        <div class="" id="m_repeater_1">
                            <div data-repeater-list="things_to_do" class="">
                                <div data-repeater-item class="form-group m-form__group row align-items-center">
                                    <div class="col-lg-2">
                                        <label>
                                            Name:
                                        </label>
                                        <input type="text" class="form-control" placeholder="Things to do" name="things_to_do_name" id="things_to_do_name"/>
                                        <span class="m-form__help">
                                            Please select Name
                                        </span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="">
                                            Headline:
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter headline" name="headline" id="headline"/>
                                        <span class="m-form__help">
                                            Please enter Headline
                                        </span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>
                                            Description:
                                        </label>
                                        <textarea class="form-control m-input do_validation" id="description" name="description" rows="5"></textarea>
                                        <span class="m-form__help">
                                            Please Enter Description
                                        </span>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>
                                            Views:
                                        </label>
                                        <input class="form-control m-input" type="file" name="images_things" id="images_things">
                                        <span class="m-form__help">
                                            Please upload image
                                        </span>
                                    </div>
                                    <div class="col-lg-2    ">
                                        <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
                                            <span>
                                                <i class="la la-trash-o"></i>
                                                <span>
                                                    Delete
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-form__group form-group row">                                    
                            <div class="col-lg-2">
                                <div data-repeater-create="" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            Add Things To Do
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">                                
                                <button type="button" class="btn btn-brand btnSaveThingsToDo">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12" id="error_msg"></div>                
            </form>
        </div>
        <!--End::Main Portlet-->        
    </div>
</div>