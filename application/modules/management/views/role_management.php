<link href="<?php echo base_url() . 'assets/css/vijay2.css'; ?>" rel="stylesheet" type="text/css" />
<style>
      .modal-confirm.show{display:block;}
      .mb-10{margin-bottom: 10px !important;}
      .container-m-auto{margin: 0 auto; width: 500px;}           
   </style>
<!-- begin: page content -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Role Management
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">

        <!-- <div class="m-portlet">
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div id='add'>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 text-right center_below_768">
                        <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill">
                            <i class="la la-download"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__body m-form">
                <div class="row">
                <div class="col-md-12">
                    <div class="heading-flex">
                        <h2 class="mt-6 xsmt-5">Create New Role</h2>         
                        <!-- <button type="button" class="btn btn-info m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air add-sell" data-toggle="modal" data-target="#m_modal_6"><i class="la la-plus"></i> Role Creation</button>                                                       -->
                        <button type="button" class="btn btn-info m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air add-sell" data-toggle="modal" data-target="#create-role-modal"><i class="la la-plus"></i> Role Creation</button>
                    </div>  
                </div>

                    <!--begin: Datatable -->
                    <div class="col-md-12 mt-2">
                        <div class="db_table_div">

                        </div>
                    </div>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: page content -->

<!-- All Modal Start -->

<!-- Role Create Modal Start -->
<div class="modal fade" id="create-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
                <section class="signup-step-container">
                    <div class="container">
                        <div class="card container-m-auto">
                            <div class="row mt-3">
                                <div class="col-md-12 mx-0">
                                    <div class="border-box userDetails">
                                        <div class="heading-form mb-30">Role Creation</div>
                                        <div class="border-box-body">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <input type="text" id='role_name' class="form-control">
                                                        <p class="error-text" id='error_role_name'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="mb-10"> <label>Tool List</label>
                                                        </div>
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='module_group' value='admin'>
                                                                Admin
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='module_group' value="team_lead">
                                                                Team Lead
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='module_group' value='executive'>
                                                                Executive
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="mb-10"> <label>Lead Allocate</label>
                                                        </div>
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" selected='selected' name='assign_leads' value="1">
                                                                Yes
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='assign_leads' value='0'>
                                                                No
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Menu List </label>
                                                        <select class="form-control " id="modules" multiple="multiple">
                                                            <option value="admin/dashboard">Admin Dashboard</option>
                                                            <option value="adminrights">Admin Management</option>
                                                            <option value="itineraries/viewItineraries">Itineraries</option>
                                                            <option value="itinerariesexpert">Itineraries Expert List</option>
                                                            <option value="package/listpackage">Lead Management</option>
                                                            <option value="package/db_management">DB Management</option>
                                                            <option value="package/feedback">Feedback Management</option>
                                                            <option value="management/role_management">Role Management</option>
                                                            <option value="management/user_management">User Management</option>
                                                        </select>
                                                        <p class="error-text" id='error_modules'></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" id='create_role' class="trigger-btn btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill mt-15">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Role Create Modal End -->

<!-- Role Create Success Modal Start -->
<div id="role-success-modal" class="modal-new modal fade">
    <div class="modal-dialog modal-confirm show">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon-box">
                    <img src="<?= base_url() ?>assets/images/sucess-icon.svg">
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
                <p class="text-center">New Role has been Created. Great Success!.</p>
                <div class="text-center mt-2">
                    <button class="btn btn-success" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Role Create Success Modal End -->

<!-- Delete Role Modal Start -->
<div id="role-delete-modal" class="modal-new modal fade">
    <div class="modal-dialog modal-cancel">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon-box">
                    <img src="<?= base_url() ?>assets/images/close-icon-popup.svg">
                </div>
                <h4 class="modal-title w-100">Are you sure?!</h4>
                <p class="text-center">Once deleted, you will not be able to recover this imaginary file!.</p>
                <div class="text-center mt-2">
                    <button class="btn btn-secondary" data-dismiss="modal">No, cancel it!</button>
                    <button class="btn btn-danger ml-1" id='role-delete' value=''>Yes, I am sure!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Role Modal End -->

<!-- Role Edit Modal Start -->
<div class="modal fade" id="edit-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
                <section class="signup-step-container">
                    <div class="container">
                        <div class="card container-m-auto">
                            <div class="row mt-3">
                                <div class="col-md-12 mx-0">
                                    <div class="border-box userDetails">
                                        <div class="heading-form mb-30">Role Edit</div>
                                        <div class="border-box-body">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <input type="text" id='edit_role_name' class="form-control">
                                                        <p class="error-text" id='error_edit_role_name'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="mb-10"> <label>Tool List</label>
                                                        </div>
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='edit_module_group' value='admin'>
                                                                Admin
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='edit_module_group' value="team_lead">
                                                                Team Lead
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='edit_module_group' value='executive'>
                                                                Executive
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="mb-10"> <label>Lead Allocate</label>
                                                        </div>
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='edit_assign_leads' value="1">
                                                                Yes
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                                <input type="radio" name='edit_assign_leads' value='0'>
                                                                No
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Menu List </label>
                                                        <select class="form-control " id="edit_modules" multiple="multiple">
                                                            <option value="admin/dashboard">Admin Dashboard</option>
                                                            <option value="adminrights">Admin Management</option>
                                                            <option value="itineraries/viewItineraries">Itineraries</option>
                                                            <option value="itinerariesexpert">Itineraries Expert List</option>
                                                            <option value="package/listpackage">Lead Management</option>
                                                            <option value="package/db_management">DB Management</option>
                                                            <option value="package/feedback">Feedback Management</option>
                                                            <option value="management/role_management">Role Management</option>
                                                            <option value="management/user_management">User Management</option>
                                                        </select>
                                                        <p class="error-text" id='error_edit_modules'></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id='edit_id'>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" id='edit_role' class="trigger-btn btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill mt-15">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Role Edit Modal End -->

<!-- Role Edit Success Modal Start -->
<div id="role-edit-success-modal" class="modal-new modal fade">
    <div class="modal-dialog modal-confirm show">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon-box">
                    <img src="<?= base_url() ?>assets/images/sucess-icon.svg">
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
                <p class="text-center">Role updated. Great Success!.</p>
                <div class="text-center mt-2">
                    <button class="btn btn-success" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Role Edit Success Modal End -->
<!-- All Modal End -->

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        get_all_roles();
    });

    $('input[type=radio][name=module_group]').change(function() {

        let arrModule = [];
        if (this.value == 'admin') {
            arrModule = [
                'admin/dashboard',
                'adminrights',
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
                'management/role_management',
                'management/user_management',
            ];
        } else if (this.value == 'team_lead') {
            arrModule = [
                'admin/dashboard',
                'adminrights',
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
            ];
        } else if (this.value == 'executive') {
            arrModule = [
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
            ];
        }
        $("#modules option:selected").prop("selected", false);
        arrModule.forEach(function(module_v) {
            $("#modules option[value='" + module_v + "']").prop("selected", true);
        });
    });

    $('input[type=radio][name=edit_module_group]').change(function() {

        let arrModule = [];
        if (this.value == 'admin') {
            arrModule = [
                'admin/dashboard',
                'adminrights',
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
                'management/role_management',
                'management/user_management',
            ];
        } else if (this.value == 'team_lead') {
            arrModule = [
                'admin/dashboard',
                'adminrights',
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
            ];
        } else if (this.value == 'executive') {
            arrModule = [
                'itineraries/viewItineraries',
                'itinerariesexpert',
                'package/listpackage',
                'package/db_management',
                'package/feedback',
            ];
        }
        $("#edit_modules option:selected").prop("selected", false);
        arrModule.forEach(function(module_v) {
            $("#edit_modules option[value='" + module_v + "']").prop("selected", true);
        });
    });

    $('#create_role').click(function() {

        $("#error_role_name").hide();
        $("#error_modules").hide();
        var flag = 1
        if ($('#role_name').val() == '') {
            $("#error_role_name").text("This field is required.");
            $("#error_role_name").show();
            flag = 0
        }
        if ($('#modules').val() == '') {
            $("#error_modules").text("This field is required.");
            $("#error_modules").show();
            flag = 0
        }
        if (flag) {
            create_role();
        }
    });

    function create_role() {

        $.ajax({
            url: base_url + 'management/create_role',
            dataType: 'json',
            type: "post",
            data: {
                role_name: $('#role_name').val(),
                assign_leads: $('input[name="assign_leads"]:checked').val(),
                modules: $('#modules').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                console.log(res);
                $('#create-role-modal').modal('hide');
                $('#role_name').val('')
                $('input[name=assign_leads]').prop('checked', false);
                $('input[name=module_group]').prop('checked', false);
                $('#modules').val('')

                if (res.status == 'success') {
                    $('#role-success-modal').modal('show');
                    get_all_roles();
                } else {
                    alert(res.msg);
                }
            },
        });
    }

    $('#role-delete').click(function() {
        delete_role(this.value);
    });

    function delete_role(id) {
        $.ajax({
            url: base_url + 'management/delete_role',
            dataType: 'json',
            type: "post",
            data: {
                id: id,
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                $('#role-delete-modal').modal('hide');
                $('#role-delete').val('');

                alert(res.msg);
                get_all_roles();
            },
        });
    }

    $('#edit_role').click(function() {

        $("#error_edit_role_name").hide();
        $("#error_edit_modules").hide();

        var flag = 1
        if ($('#edit_role_name').val() == '') {
            $("#error_edit_role_name").text("This field is required.");
            $("#error_edit_role_name").show();
            flag = 0
        }
        if ($('#edit_modules').val() == '') {
            $("#error_edit_modules").text("This field is required.");
            $("#error_edit_modules").show();
            flag = 0
        }
        if (flag) {
            edit_role();
        }
    });

    function edit_role() {

        $.ajax({
            url: base_url + 'management/edit_role',
            dataType: 'json',
            type: "post",
            data: {
                id: $('#edit_id').val(),
                role_name: $('#edit_role_name').val(),
                assign_leads: $('input[name="edit_assign_leads"]:checked').val(),
                modules: $('#edit_modules').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                console.log(res);
                $('#edit-role-modal').modal('hide');
                $('#edit_role_name').val('')
                $('input[name=edit_assign_leads]').prop('checked', false);
                $('input[name=edit_module_group]').prop('checked', false);
                $('#edit_modules').val('')

                if (res.status == 'success') {
                    $('#role-edit-success-modal').modal('show');
                    get_all_roles();
                } else {
                    alert(res.msg);
                }
            },
        });
    }

    function get_all_roles() {
        $.ajax({
            url: base_url + 'management/get_all_roles',
            dataType: 'text',
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                $('.db_table_div').html(res);
            },
        });
    }
</script>

