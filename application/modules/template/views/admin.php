<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo @$title; ?>
    </title>
    <meta name="description" content="User profile example page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        var base_url = "<?php echo base_url(); ?>";
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->

    <?php
    $frontid = $this->session->userdata('frontid');
    if (!empty($frontid)) { ?>
        <link href="<?php echo base_url() . 'assets/sb-admin.css'; ?>" rel="stylesheet" type="text/css" />

    <?php  } else { ?>
        <link href="<?php echo base_url() . 'assets/admin/vendors.bundle.css'; ?>" rel="stylesheet" type="text/css" />

    <?php } ?>
    <link href="<?php echo base_url() . 'assets/admin/style.bundle.css'; ?>" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default m-aside-left--fixed">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->
        <header class="m-grid__item    m-header " data-minimize-offset="200" data-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="<?php echo base_url('admin') ?>" class="m-brand__logo-wrapper">
                                    <img alt="" src="<?php echo base_url('assets/admin/images/') . 'logo-white.svg'; ?>" width="180">
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
                                       ">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                <!--  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                            <span></span>
                                        </a> -->
                                <!-- END -->
                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <!-- END: Horizontal Menu -->
                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic">
                                                <img src="<?php echo base_url('assets/admin/images/nouser.png'); ?>" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                            </span>
                                            <span class="m-topbar__username m--hide">
                                                Nick
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="<?php //echo base_url() . 'images/profile/' . $personal_info->profile_image;                                                                                 
                                                                        ?>" class="m--img-rounded m--marginless" alt="" />
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">
                                                                <?php
                                                                $istraveler = $this->session->userdata('istraveler');
                                                                if (isset($istraveler) && $istraveler == 1) :
                                                                    echo $rec[0]->name;
                                                                else :
                                                                    echo $rec[0]->admin_name;
                                                                endif;       ?>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">
                                                                    Section
                                                                </span>
                                                            </li>


                                                            <?php $istraveler = $this->session->userdata('istraveler');
                                                            if (isset($istraveler) && $istraveler == 1) :
                                                            ?>
                                                                <li class="m-nav__item">
                                                                    <a href="<?php echo base_url('traveller/travelerInfo'); ?>" class="m-nav__link">
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
                                                            <?php endif; ?>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <a href="<?php echo base_url('admin/logout'); ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                    <?php
                    if ($this->session->userdata('adminRoles')) :
                        $rights = $this->session->userdata('adminRoles');
                        $admin_Status = $this->session->userdata('adminStatus');

                        if (!empty($rights)) {
                            $rightsArray = explode(",", $rights);
                        }
                    endif;
                    ?>
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
                        <?php $frontid = $this->session->userdata('frontid'); ?>

                        <?php
                        if ($istraveler != 1 && empty($frontid)) : ?>
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('admin/dashboard'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon flaticon-dashboard"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                DashBoards
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($istraveler != 1 && $admin_Status == '0') : ?>
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('adminrights'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon flaticon-dashboard"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Admin Management
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($istraveler == 1 || isset($rightsArray) && in_array('2', $rightsArray)) : ?>
                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="<?php echo base_url('itineraries/viewItineraries'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-map-location"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Itineraries
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($istraveler != 1 && isset($rightsArray) && in_array('11', $rightsArray)) : ?>
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('itinerariesexpert'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon la la-ticket"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Itineraries Expert List
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($istraveler != 1) : ?>
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('package/listpackage'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon la la-ticket"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Lead Management
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('package/db_management'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon la la-ticket"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                DB Management
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item" aria-haspopup="true">
                                <a href="<?php echo base_url('package/feedback'); ?>" class="m-menu__link">
                                    <i class="m-menu__link-icon la la-ticket"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Feedback Management
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->
            <!-- begin: page content -->
            <?php echo $this->load->view($module . "/" . $viewfile); ?>
            <!-- end: page content -->
        </div>
        <!-- end:: Body -->
        <!-- begin::Footer -->
        <footer class="m-grid__item m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                        <span class="m-footer__copyright">
                            2018 &copy; by
                            <a href="<?php echo base_url(); ?>" class="m-link">
                                Adventourist
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end::Footer -->
    </div>
    <!-- end:: Page -->
    <!-- begin::Scroll Top -->
    <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->
    <!--begin::Base Scripts -->



    <script src="<?php echo base_url() . 'assets/admin/js/vendors.bundle.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() . 'assets/admin/js/scripts.bundle.js'; ?>" type="text/javascript"></script>



    <!--end::Base Scripts -->
    <?php if (isset($module) && $module == "itineraries" || $module == "traveller" || $module == "stories" || $module == "things_to_do" || $module == "adminrights"  || $module == "cms" || $module == "communication" || $module == "users" || $module == "realtraveller" || $module == "itinerariesexpert" || $module == "package") : ?>
        <script src="<?php echo base_url() . 'assets/admin/js/datatable.js'; ?>" type="text/javascript"></script>

        <script src="<?php echo base_url() . 'assets/admin/js/common.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/js/select2.js'; ?>" type="text/javascript"></script>
        <link href="<?php echo base_url() . 'assets/admin/select2.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/admin/datatable.min.css'; ?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url() . 'assets/admin/js/bootstrap-datepicker1.js' ?>" type="text/javascript"></script>
        <!--  <script src="<?php //echo base_url() . 'assets/admin/js/select2.js'
                            ?>" type="text/javascript"></script> -->

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>


    <?php endif; ?>
    <?php if (isset($module) && $module == "itineraries" || $module == "stories" || $module == "things_to_do" || $module == "cms") : ?>
        <!--ckeditor-->
        <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
        <!--<script src=" https://cdn.ckeditor.com/4.9.2/standard-all/ckeditor.js"></script>-->

        <script src="<?php echo base_url(); ?>assets/ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ckeditor/samples/css/samples.css">
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#itinerariesTables').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                        extend: 'csvHtml5',
                        title: 'Itinerary listings',

                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6],
                        }
                    }, ]



                });
                $('#thingsTable').DataTable({
                    responsive: true
                });


                // Apply the search
                table.columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change clear', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            });
        </script>
        <script>
            /*CKEDITOR.replace( 'editor1', {
            extraAllowedContent: 'style;*[id,rel](*){*}'
        });*/
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            CKEDITOR.replace('editor3');
            CKEDITOR.replace('editor4');
            CKEDITOR.replace('editor5');
            CKEDITOR.replace('editor6');
            CKEDITOR.replace('editor7');
        </script>
        <script>
            initSample();
            //initSample1();
            // initSample2();
            // initSample3();
        </script>

        <script src="<?php echo base_url(); ?>assets/admin/js/wizard.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/dropzone.js" type="text/javascript"></script>
        <!--ckeditor-->

    <?php endif; ?>
    <?php if (isset($module) && $module == "cms" || $module == "adminrights" || $module == "communication" || $module == "users" || $module == "realtraveller" || $module == "itinerariesexpert" || $module == "package") : ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#adminrights').DataTable({
                    responsive: true
                });

            });
        </script>
    <?php endif; ?>

    <?php if (isset($module) && $module == "traveller") : ?>
        <link href="<?php echo base_url() . 'assets/admin/datepicker.css'; ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() . 'assets/admin/js/bootstrap-datepicker.js' ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#itinerariesTable').DataTable();
                $('#travellers').DataTable();
                $('.datepicker').datepicker('Y-m-d');
                $('.datepicker-trav').datepicker({
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    autoclose: true,
                    changeMonth: true,
                    changeYear: true,
                    orientation: "bottom left",
                    templates: {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                });


            });
        </script>
        <script src="<?php echo base_url() . 'assets/admin/js/traveler.js' ?>" type="text/javascript"></script>
    <?php endif; ?>

    <?php if (isset($module) && $module == "stories") : ?>
        <link href="<?php echo base_url() . 'assets/admin/datepicker.css'; ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() . 'assets/admin/js/bootstrap-datepicker.js' ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#storiesTable').DataTable({
                    responsive: true
                });

            });
        </script>
        <script src="<?php echo base_url() . 'assets/admin/js/stories.js' ?>" type="text/javascript"></script>
    <?php endif; ?>


    <?php if (isset($module) && $module == "itineraries") : ?>
        <link href="<?php echo base_url() . 'assets/admin/bootstrap-multiselect.css'; ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() . 'assets/admin/js/itineraries_details.js' ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/js/bootstrap-multiselect.js' ?>" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $("#ckeditorReset").click(function() {
                    CKEDITOR.instances.editor.setData('');
                    CKEDITOR.instances.editor1.setData('');
                    CKEDITOR.instances.editor2.setData('');
                })

                $("#resetfood").click(function() {
                    CKEDITOR.instances.editor3.setData('');
                    CKEDITOR.instances.editor4.setData('');
                    CKEDITOR.instances.editor5.setData('');
                    CKEDITOR.instances.editor6.setData('');
                })
                if ($('.btnSearchItineraries').length == 1) {
                    $("#slider-range").slider({
                        range: true,
                        min: 0,
                        max: 90000,
                        values: [0, 0],
                        slide: function(event, ui) {
                            $("#total_budget").val("" + ui.values[0] + " - " + ui.values[1]);
                        }
                    });
                    $("#total_budget").val("" + $("#slider-range").slider("values", 0) +
                        " - " + $("#slider-range").slider("values", 1));

                }
            });
        </script>
    <?php endif; ?>
    <?php if (isset($module) && $module == "things_to_do") : ?>
        <script src="<?php echo base_url() . 'assets/admin/js/things_to_do.js' ?>" type="text/javascript"></script>

    <?php endif; ?>
    <!--end::Page Resources -->






    <script>
        /* if in tab mode */
        $("ul.tabs li").click(function() {
            var ulID = $(this).parent('ul').attr('id');
            $("#" + ulID + "_cont .tab_content").hide();
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();

            $("#" + ulID + " li").removeClass("active");
            $(this).addClass("active");

            $(".tab_drawer_heading").removeClass("d_active");
            $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

        });
        /* if in drawer mode */
        $(".tab_drawer_heading").click(function() {
            var ulID = $(this).parent('div').attr('id');
            $("#" + ulID + " .tab_content").slideUp();

            var d_activeTab = $(this).attr("rel");
            $("#" + d_activeTab).slideDown();

            $("#" + ulID + " .tab_drawer_heading").removeClass("d_active");
            $(this).addClass("d_active");

            $("ul.tabs li").removeClass("active");
            $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
        });
    </script>
    <link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/jquery-ui.css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jcrop-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jcrop-style-example.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.Jcrop.css">


    <script src="<?php echo base_url(); ?>/assets/js/jquery.SimpleCropper.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.Jcrop.js"></script>

    <script>
        $('.cropme').simpleCropper();
        cropper.getCroppedCanvas().toDataURL('image/jpeg')

        <?php if (isset($_GET['ttd'])) { ?>
            $(document).ready(function() {
                $("#list_of_itinerariess").trigger("click");
                $("#thingsbtnform").css("display", "block");
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
            });

        <?php } ?>
        $('body').on('click', '.reset-form', function() {
            var form = $(this).closest('form')
            console.log(form);
            $(form).trigger('reset')
            $('.multiselect-selected-text').text('None selected')
            $('.multiselect-selected-text').parent().attr('title', 'None selected')

        })
    </script>


</body>
<!-- end::Body -->

</html>