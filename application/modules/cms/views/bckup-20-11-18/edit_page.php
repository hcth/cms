<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    edit cms 
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        <a href="<?php echo base_url()?>cms" class="m-nav__link">
                            <span class="m-nav__link-text">
                                cms
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <form class="m-form m-form--fit m-form--label-align-right" id="editpageform" enctype="multipart/form-data">
              <div class="alert-success"></div>
                <div class="alert-danger"></div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Page Title
                        </label>
                        <div class="col-lg-4 col-md-10 col-sm-12">                           
                           
                            <input type="hidden" class="form-control m-input do_validation" id="id" name="id" placeholder="Enter Page Title" value="<?php echo $cms_data[0]->id;?>" readonly="">
                            <input type="text" class="form-control m-input do_validation" id="title"  placeholder="Enter Page Title" value="<?php echo $cms_data[0]->page_title;?>" readonly="">
                        </div>
                    </div>
                    <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Cms Page Details
                        </label>
                        <div id="editor" class="editor">
                            <?php print_r(htmlspecialchars_decode($cms_data[0]->cms_data));?>
                        </div>
                    </div>
                </div>
                </div>
       
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-10 ml-lg-auto">
                                <button type="button" class="btn btn-brand btneditcms">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary btnCancelStories">
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
    </div>
</div>
