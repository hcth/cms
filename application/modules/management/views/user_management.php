<!-- begin: page content -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    User Management
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div id='add'>
                                    <button type="button" class="btn btn-info m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air add-sell" data-toggle="modal" data-target="#create-user-modal"><i class="la la-plus"></i> User Creation</button>
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
        </div>

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__body m-form">
                <div class="row">
                    <!--begin: Datatable -->
                    <div class="col-md-12">
                        <div class="table-responsive db_table_div">

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

<!-- User Create Modal Start -->
<div class="modal fade" id="create-user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <div class="heading-form mb-30">User Creation</div>
                                        <div class="border-box-body">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" id='user_name' class="form-control">
                                                        <p class="error-text" id='error_user_name'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Email</label>
                                                        <input type="text" id='user_email' class="form-control">
                                                        <p class="error-text" id='error_user_email'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Mobile</label>
                                                        <input type="text" id='user_mobile' class="form-control">
                                                        <p class="error-text" id='error_user_mobile'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Password</label>
                                                        <input type="text" id='user_password' class="form-control">
                                                        <p class="error-text" id='error_user_password'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Menu List </label>
                                                        <select class="form-control " id='role'>
                                                            <?php
                                                            foreach ($all_roles as $role) {
                                                                echo "<option value='$role->id'>$role->name</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <p class="error-text" id='error_role'></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" id='create_user' class="trigger-btn btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill mt-15">Submit</a>
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
<!-- User Create Modal End -->

<!-- User Create Success Modal Start -->
<div id="user-success-modal" class="modal-new modal fade">
    <div class="modal-dialog modal-confirm show">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon-box">
                    <img src="<?= base_url() ?>assets/images/sucess-icon.svg">
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
                <p class="text-center">New User has been Created. Great Success!.</p>
                <div class="text-center mt-2">
                    <button class="btn btn-success" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Create Success Modal End -->

<!-- Delete User Modal Start -->
<div id="user-delete-modal" class="modal-new modal fade">
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
                    <button class="btn btn-danger ml-1" id='user-delete' value=''>Yes, I am sure!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete User Modal End -->

<!-- User Edit Modal Start -->
<div class="modal fade" id="edit-user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <div class="heading-form mb-30">User Creation</div>
                                        <div class="border-box-body">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" id='edit_name' class="form-control">
                                                        <p class="error-text" id='error_edit_name'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Email</label>
                                                        <input type="text" id='edit_email' class="form-control">
                                                        <p class="error-text" id='error_edit_email'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Mobile</label>
                                                        <input type="text" id='edit_mobile' class="form-control">
                                                        <p class="error-text" id='error_edit_mobile'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>User Password</label>
                                                        <input type="text" id='edit_password' class="form-control">
                                                        <p class="error-text" id='error_edit_password'></p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Role List </label>
                                                        <select class="form-control " id='edit_role'>
                                                            <?php
                                                            foreach ($all_roles as $role) {
                                                                echo "<option value='$role->id'>$role->name</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <p class="error-text" id='error_edit_role'></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id='edit_id'>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" id='edit_user' class="trigger-btn btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill mt-15">Submit</a>
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
<!-- User Edit Modal End -->

<!-- User Edit Success Modal Start -->
<div id="user-edit-success-modal" class="modal-new modal fade">
    <div class="modal-dialog modal-confirm show">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon-box">
                    <img src="<?= base_url() ?>assets/images/sucess-icon.svg">
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
                <p class="text-center">User updated. Great Success!.</p>
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
        get_all_users();
    });

    $('#create_user').click(function() {

        $("#error_user_name").hide();
        $("#error_user_mobile").hide();
        $("#error_user_email").hide();
        $("#error_user_password").hide();
        $("#error_role").hide();

        var flag = 1
        if ($('#user_name').val() == '') {
            $("#error_user_name").text("This field is required.");
            $("#error_user_name").show();
            flag = 0
        }
        if ($('#user_mobile').val() == '') {
            $("#error_user_mobile").text("This field is required.");
            $("#error_user_mobile").show();
            flag = 0
        }
        if ($('#user_email').val() == '') {
            $("#error_user_email").text("This field is required.");
            $("#error_user_email").show();
            flag = 0
        }
        if ($('#user_password').val() == '') {
            $("#error_user_password").text("This field is required.");
            $("#error_user_password").show();
            flag = 0
        }
        if ($('#role').val() == '') {
            $("#error_role").text("This field is required.");
            $("#error_role").show();
            flag = 0
        }
        if (flag) {
            create_user();
        }

    });

    function create_user() {

        $.ajax({
            url: base_url + 'management/create_user',
            dataType: 'json',
            type: "post",
            data: {
                user_name: $('#user_name').val(),
                user_mobile: $('#user_mobile').val(),
                user_email: $('#user_email').val(),
                user_password: $('#user_password').val(),
                role: $('#role').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                console.log(res);
                $('#create-user-modal').modal('hide');
                $('#user_name').val('')
                $('#user_mobile').val('')
                $('#user_email').val('')
                $('#user_password').val('')
                $('#role').val('')

                if (res.status == 'success') {
                    $('#user-success-modal').modal('show');
                    get_all_users();
                } else {
                    alert(res.msg);
                }
            },
        });
    }

    $('#user-delete').click(function() {
        delete_user(this.value);
    });

    function delete_user(id) {
        $.ajax({
            url: base_url + 'management/delete_user',
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
                $('#user-delete').val('');
                $('#user-delete-modal').modal('hide');

                alert(res.msg);
                get_all_users();
            },
        });
    }

    $('#edit_user').click(function() {

        $("#error_edit_name").hide();
        $("#error_edit_mobile").hide();
        $("#error_edit_email").hide();
        $("#error_edit_password").hide();
        $("#error_edit_role").hide();

        var flag = 1
        if ($('#edit_name').val() == '') {
            $("#error_edit_name").text("This field is required.");
            $("#error_edit_name").show();
            flag = 0
        }
        if ($('#edit_mobile').val() == '') {
            $("#error_edit_mobile").text("This field is required.");
            $("#error_edit_mobile").show();
            flag = 0
        }
        if ($('#edit_email').val() == '') {
            $("#error_edit_email").text("This field is required.");
            $("#error_edit_email").show();
            flag = 0
        }
        if ($('#edit_password').val() == '') {
            $("#error_edit_password").text("This field is required.");
            $("#error_edit_password").show();
            flag = 0
        }
        if ($('#edit_role').val() == '') {
            $("#error_edit_role").text("This field is required.");
            $("#error_edit_role").show();
            flag = 0
        }
        if (flag) {
            edit_user();
        }
    });

    function edit_user() {

        $.ajax({
            url: base_url + 'management/edit_user',
            dataType: 'json',
            type: "post",
            data: {
                id: $('#edit_id').val(),
                user_name: $('#edit_name').val(),
                user_mobile: $('#edit_mobile').val(),
                user_email: $('#edit_email').val(),
                user_password: $('#edit_password').val(),
                role: $('#edit_role').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                console.log(res);
                $('#edit-user-modal').modal('hide');
                $('#edit_id').val('')
                $('#edit_name').val('')
                $('#edit_mobile').val('')
                $('#edit_email').val('')
                $('#edit_password').val('')
                $('#edit_role').val('')
                if (res.status == 'success') {
                    $('#user-edit-success-modal').modal('show');
                    get_all_users();
                } else {
                    alert(res.msg);
                }
            },
        });
    }

    function get_all_users() {
        $.ajax({
            url: base_url + 'management/get_all_users',
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