<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader_Th_title m-subheader__title--separator">
                    Add things to do
                </h3>

            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet">
            <!--begin: Portlet Head-->
            <!--end: Portlet Head
            <form class="m-form m-form--fit m-form--label-align-right">-->
            <div class="m-portlet__body">
                <?php
                if (!empty($article_details)) {
                    $counter = $article_details[0]->points;
                    $id = $article_details[0]->id;
                    if ($counter > 0) {
                        $things_to_do = json_decode($article_details[0]->things_to_do, TRUE);
                        $things_to_do_headline = json_decode($article_details[0]->things_to_do_headline, TRUE);
                        $things_to_do_description = json_decode($article_details[0]->things_to_do_description, TRUE);
                        $things_to_do_image = json_decode($article_details[0]->things_to_do_image, TRUE);
                        for ($i = 0; $i < $counter; $i++) {
                            ?>
                            <div class="form-group m-form__group row">
                                <input type="hidden" name="articleId" id="articleId" value="<?php echo $id; ?>"/>
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    <?php echo ($i + 1) . ')  Thing to do'; ?>
                                </label>
                                <div class="col-lg-3 col-md-9 col-sm-12">
                                    <input type="text" class="form-control m-input do_validation" id="things_to_do_<?php echo $i; ?>" name="things_to_do" placeholder="Things to do" value="<?php echo $things_to_do[$i]; ?>">
                                </div>
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Headline
                                </label>
                                <div class="col-lg-3 col-md-9 col-sm-12">
                                    <input type="text" class="form-control m-input do_validation" id="headline_<?php echo $i; ?>" name="things_to_do_headline" placeholder="Headline" value="<?php echo $things_to_do_headline[$i]; ?>">
                                </div>
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Description
                                </label>
                                <div class="col-lg-3 col-md-9 col-sm-12">
                                    <textarea class="form-control m-input do_validation" id="description_<?php echo $i; ?>" rows="5" name="things_to_do_description"><?php echo $things_to_do_description[$i]; ?></textarea>
                                </div>
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Image
                                </label>
                                <div class="col-lg-3 col-md-9 col-sm-12">
                                    <form id="form_<?php echo $i; ?>">
                                        <input type="file" class="form-control m-input upload_image" id="image_<?php echo $i; ?>" data-imageattr="<?php echo $i; ?>" name="image_<?php echo $i; ?>" placeholder="Things to do">
                                        <?php if ($things_to_do_image[$i] != '') { ?>
                                            <img id="image_preview_<?php echo $i; ?>" src="/images/things_to_do_articles/<?php echo $things_to_do_image[$i]; ?>" style="max-width: 200px; max-height: 125px;"/>
                                            <input type="hidden" class="save_image" name= "things_to_do_image" id="save_image_<?php echo $i; ?>" value="<?php echo $things_to_do_image[$i]; ?>">
                                        <?php } else { ?>
                                            <input type="hidden" class="save_image" name= "things_to_do_image" id="save_image_<?php echo $i; ?>" value="">
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>

                    <?php } else { ?>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-sm-12">
                                0 Pointer - Nothing can be added
                            </label>							
                        </div>
                    <?php } ?>					
                <?php } else { ?>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Invalid article selected
                        </label>
                    </div>
                <?php } ?>            
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <input id="save_article_details" class="btn btn-brand" type="button" value="Save" />
                            <button type="reset" class="btn btn-secondary">
                                Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" id="error_msg"></div>
            <!--</form>-->
        </div>
        <!--End::Main Portlet-->        
    </div>
</div>