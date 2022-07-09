<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Edit rights 
                </h3>
                <!-- <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        <a href="<?php //echo base_url()?>adminrights" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Admin rights 
                            </span>
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <form class="m-form m-form--fit m-form--label-align-right" id="adminform" enctype="multipart/form-data">
              <div class="alert-success"></div>
                <div class="alert-danger"></div>
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4">
                            <label class="col-form-label">
                                Username
                            </label>
                            <div>                           
                               <input type = "hidden" name="id" value="<?php echo $userrights[0]->id;?>" >
                                <input type="text" class="form-control m-input do_validation" id="username" name="username" placeholder="Enter Username" value="<?php echo $userrights[0]->admin_name;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-12">
                            <label class="col-form-label">
                                Rights
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <?php foreach($rights as $val){
                                if (in_array($val->id,$userrights[0]->rights)):
                                    $y = "checked";
                                else:
                                    $y = "";
                                endif;
                                
                                ?>

                                <input type="checkbox" value="<?php echo $val->id;?>" name = "rights_name[]" <?php echo $y?>> <?php echo $val->value;?><br>
                            <?php }?>
                        </div>
                    </div>
                </div>
       
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-brand btneditrights">
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
