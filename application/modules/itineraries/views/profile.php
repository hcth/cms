<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    My Profile
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
	<div class="m-portlet ">
	<div class="m-portlet__body  m-portlet__body--no-padding">
		<div class="row m-row--no-padding m-row--col-separator-xl">
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::Total Profit-->
				<div class="m-widget24">					 
				    <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            Total Frofit
				        </h4><br>
				        <span class="m-widget24__desc">
				            All Customs Value
				        </span>
				        <span class="m-widget24__stats m--font-brand">
				            $18M 
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Change
						</span>
						<span class="m-widget24__number">
							78%
					    </span>
				    </div>				      
				</div>
				<!--end::Total Profit-->
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Feedbacks-->
				<div class="m-widget24">
					 <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            New Feedbacks
				        </h4><br>
				        <span class="m-widget24__desc">
				            Customer Review
				        </span>
				        <span class="m-widget24__stats m--font-info">
				            1349
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Change
						</span>
						<span class="m-widget24__number">
							84%
					    </span>
				    </div>		
				</div>
				<!--end::New Feedbacks--> 
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Orders-->
				<div class="m-widget24">
					<div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            New Orders
				        </h4><br>
				        <span class="m-widget24__desc">
				            Fresh Order Amount
				        </span>
				        <span class="m-widget24__stats m--font-danger">
				            567
				        </span>		
				        <div class="m--space-10"></div>
						<div class="progress m-progress--sm">
							<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Change
						</span>
						<span class="m-widget24__number">
							69%
			            </span>
				    </div>		
				</div>
				<!--end::New Orders--> 
			</div>
			<div class="col-md-12 col-lg-6 col-xl-3">
				<!--begin::New Users-->
				<div class="m-widget24">
					 <div class="m-widget24__item">
				        <h4 class="m-widget24__title">
				            New Users
				        </h4><br>
				        <span class="m-widget24__desc">
				            Joined New User
				        </span>
				        <span class="m-widget24__stats m--font-success">
				            276 
				        </span>		
				        <div class="m--space-10"></div>
				        <div class="progress m-progress--sm">
							<div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="m-widget24__change">
							Change
						</span>
						<span class="m-widget24__number">
							90%
						</span>
				    </div>		
				</div>
				<!--end::New Users--> 
			</div>
		</div>
	</div>
</div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="<?php echo base_url() . 'images/profile/' . $personal_info->profile_image; ?>" alt=""/>
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">
                                    <?php echo (!empty($personal_info->full_name)) ? $personal_info->full_name : ''; ?>
                                </span>
                                <a href="" class="m-card-profile__email m-link">
                                    <?php echo (!empty($personal_info->email)) ? $personal_info->email : ''; ?>
                                </a>
                            </div>
                        </div>
                        <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                            <li class="m-nav__separator m-nav__separator--fit"></li>
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">
                                    Section
                                </span>
                            </li>
                            <li class="m-nav__item">
                                <a href="<?php echo base_url('my-profile'); ?>" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                        <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">
                                                My Profile
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!--<div class="m-portlet__body-separator"></div>-->                        
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                        <i class="flaticon-share m--hide"></i>
                                        Update Profile
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                        Messages
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right frmProfile">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">
                                                1. Personal Details
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Full Name
                                        </label>
                                        <div class="col-7">
                                            <input type="text" class="form-control m-input" name="full_name" id="full_name" value="<?php echo (!empty($personal_info->full_name)) ? $personal_info->full_name : ''; ?>" /> 
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            DOB
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="dob" id="dob" value="<?php echo (!empty($personal_info->dob)) ? $personal_info->dob : ''; ?>" /> 
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Occupation
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="occupation" value="<?php echo (!empty($personal_info->occupation)) ? $personal_info->occupation : ''; ?>" /> 
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Bio
                                        </label>
                                        <div class="col-7">
                                            <textarea class="form-control m-input" id="about" name="about" rows="3"><?php echo (!empty($personal_info->about)) ? $personal_info->about : ''; ?></textarea>
                                            <span class="m-form__help">
                                                If you want your invoices addressed to a company. Leave blank to use your full name.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Places Travelled
                                        </label>
                                        <div class="col-7">
                                            <select class="form-control m-select2" id="places_travelled" name="places_travelled" multiple="multiple">
                                                <?php $places_travelled = explode(",", $personal_info->places_travelled); ?>
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
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Phone No.
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="mobile" id="mobile" value="<?php echo (!empty($personal_info->mobile)) ? $personal_info->mobile : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">
                                                2. Address
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Address
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="address" id="address" value="<?php echo (!empty($personal_info->address)) ? $personal_info->address : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            City
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="city" id="city" value="<?php echo (!empty($personal_info->city)) ? $personal_info->city : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            State
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="state" id="state" value="<?php echo (!empty($personal_info->state)) ? $personal_info->state : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Postcode
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="postcode" id="postcode" value="<?php echo (!empty($personal_info->postcode)) ? $personal_info->postcode : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">
                                                3. Social Links
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Linkedin
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="linkedin" id="linkedin" value="<?php echo (!empty($personal_info->linkedin)) ? $personal_info->linkedin : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Facebook
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="facebook" id="facebook" value="<?php echo (!empty($personal_info->facebook)) ? $personal_info->facebook : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Twitter
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="twitter" id="twitter" value="<?php echo (!empty($personal_info->twitter)) ? $personal_info->twitter : ''; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Instagram
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" name="instagram" id="instagram" value="<?php echo (!empty($personal_info->instagram)) ? $personal_info->instagram : ''; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-7">
                                                <input type="hidden" id="profile_id" name="profile_id" value="<?php echo $personal_info->login_id ?>" />
                                                <button type="button" class="btn btn-accent m-btn m-btn--air m-btn--custom saveProfile">
                                                    Save changes
                                                </button>
                                                &nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_2"></div>
                        <div class="tab-pane " id="m_user_profile_tab_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>