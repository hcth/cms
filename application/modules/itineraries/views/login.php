<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>
            Adventourist | Admin Panel
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            var base_url = "<?php echo base_url(); ?>";
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link href="<?php echo base_url() . 'assets/admin/vendors.bundle.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/admin/style.bundle.css'; ?>" rel="stylesheet" type="text/css" />
    </head>
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<?php echo base_url() . 'assets/admin/images/bg-3.jpg'; ?>);">
                <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="<?php echo base_url('admin') ?>">
                                <img src="<?php echo base_url() . 'assets/admin/images/358_x_37_front_end.png'; ?>">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <form class="m-login__form m-form" action="<?php echo base_url('admin/login'); ?>" method="post" id="loginform">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input"   type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="loginPassword">
                                </div>
                                <div class="form-group m-form__group">
                                    <span class="error" id="failureMessage" style="display:none"></span>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary loginsign">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?php echo base_url() . 'assets/admin/js/vendors.bundle.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/js/scripts.bundle.js'; ?>" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        <script src="<?php echo base_url() . 'assets/admin/js/sha1.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/js/login.js'; ?>" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>
