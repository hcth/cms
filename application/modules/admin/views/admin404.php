<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            404 | Error Page
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="<?php echo CSSURL . 'css/admin_1/vendors.bundle.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo CSSURL . 'css/admin_1/style.bundle.css'; ?>" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid  m-error-6" style="background-image: url(<?php echo IMAGESURL . '/admin_1/bg6.jpg'; ?>);">
                <div class="m-error_container">
                    <div class="m-error_subtitle m--font-light">
                        <h1>
                            Oops...
                        </h1>
                    </div>
                    <p class="m-error_description m--font-light">
                        Looks like something went wrong. We're working on it                        
                    </p>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?php echo JSURL . 'js/admin_1/vendors.bundle.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo JSURL . 'js/admin_1/scripts.bundle.js'; ?>" type="text/javascript"></script>
        <!--end::Base Scripts -->
    </body>
    <!-- end::Body -->
</html>
