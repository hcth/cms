<?php $session = $this->session->userdata['admin']; ?>
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            My Profile
        </title>
        <meta name="description" content="User profile example page">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            var base_url = "<?php echo base_url('admin/'); ?>";            
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;700&family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="<?php echo base_url() . 'css/admin/vendors.bundle.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'css/admin/style.bundle.css'; ?>" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="<?php echo base_url('admin') ?>" class="m-brand__logo-wrapper">
                                        <img alt="" src="<?php echo base_url('images/profile/') . 'images/admin/358_x_37_front_end.png'; ?>">
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
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
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
                            <!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">                                        
                                        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-topbar__userpic">
                                                    <img src="<?php echo base_url('images/profile/') . $session['profile_image']; ?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                                </span>
                                                <span class="m-topbar__username m--hide">
                                                    Nick
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url() . 'images/admin/user_profile_bg.jpg'; ?>); background-size: cover;">
                                                        <div class="m-card-user m-card-user--skin-dark">
                                                            <div class="m-card-user__pic">
                                                                <img src="<?php //echo base_url() . 'images/profile/' . $personal_info->profile_image;                                                            ?>" class="m--img-rounded m--marginless" alt=""/>
                                                            </div>
                                                            <div class="m-card-user__details">
                                                                <span class="m-card-user__name m--font-weight-500">
                                                                    <?php echo $session['full_name']; ?>
                                                                </span>
                                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                    <?php echo $session['email']; ?>
                                                                </a>
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
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="<?php echo base_url('logout'); ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
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
                    <div 
                        id="m_ver_menu" 
                        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
                        data-menu-vertical="true"
                        data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
                        >
                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="<?php echo base_url('admin/profile'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Profile
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="<?php echo base_url('admin/itineraries_details'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Itineraries
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    <?php echo $session['itineraries']; ?>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="<?php echo base_url('admin/things_to_do_view'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Things To Do
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    <?php echo $session['things_to_do']; ?>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="<?php echo base_url('admin/stories'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Stories
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    <?php echo $session['stories']; ?>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" >
                                <a  href="<?php echo base_url('real_travellers'); ?>" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Real Travellers
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    <?php echo $session['users']; ?>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END: Aside Menu -->
                </div>
                <!-- END: Left Aside -->
                <?php echo $content; ?>
            </div>
            <!-- end:: Body -->
            <!-- begin::Footer -->
            <footer class="m-grid__item	m-footer ">
                <div class="m-container m-container--fluid m-container--full-height m-page__container">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                            <span class="m-footer__copyright">
                                2018 &copy; by
                                <a href="<?php echo base_url(); ?>" class="m-link">
                                    Travel Itinearies
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
        <script src="<?php echo base_url() . 'js/admin/vendors.bundle.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'js/admin/scripts.bundle.js'; ?>" type="text/javascript"></script>
        <!--end::Base Scripts -->        
        <!--begin::Page Resources -->
        <?php if ($this->uri->segment(2) == "view_itineraries_details") { ?>
            <script src="<?php echo base_url() . 'js/admin/itineraries_details.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/bootstrap-datepicker.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/wizard.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/dropzone.js'; ?>" type="text/javascript"></script>
        <?php } else if ($this->uri->segment(2) == "itineraries_details") { ?>
            <script src="<?php echo base_url() . 'js/admin/html-table.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>        
            <script>
                $(document).ready(function () {
                    $("body").on("click", ".btnSaveTripSummary", function () {
                        var destination = $("#destination").val();
                        var start_point = $("#start_point").val();
                        var total_trip_days = $("#total_trip_days").val();
                        var total_budget = $("#total_budget").val();
                        var trip_category = $("#trip_category").val();
                        var trip_type = $("#trip_type").val();
                        var transport_mode = $("#transport_mode").val();

                        $.ajax({
                            type: 'POST',
                            url: base_url + 'itineraries_details_ajax',
                            data: {destination: destination, start_point: start_point, total_trip_days: total_trip_days, total_budget: total_budget, trip_category: trip_category, trip_type: trip_type, transport_mode: transport_mode},
                            dataType: 'html',
                            success: function (data) {
                                $("#divStories").html('');
                                $("#divStories").html(data);
                                var datatable = $('.m-datatable').mDatatable({
                                    data: {
                                        saveState: {cookie: false},
                                    },
                                    search: {
                                        input: $('#generalSearch'),
                                    },
                                    columns: [
                                        {
                                            field: 'Deposit Paid',
                                            type: 'number',
                                        },
                                        {
                                            field: 'Order Date',
                                            type: 'date',
                                            format: 'YYYY-MM-DD',
                                        }, {
                                            field: 'Status',
                                            title: 'Status',
                                            // callback function support for column rendering

                                        }, {
                                            field: 'Type',
                                            title: 'Type',
                                            // callback function support for column rendering

                                        },
                                    ],
                                });
                            }
                        });
                    });
                });
            </script>
        <?php } else if ($this->uri->segment(1) == "my-profile") { ?>
            <script src="<?php echo base_url() . 'js/admin/bootstrap-datepicker.js'; ?>" type="text/javascript"></script>            
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/profile.js'; ?>" type="text/javascript"></script>       
        <?php } else if ($this->uri->segment(2) == "things_to_do" || $this->uri->segment(2) == "update_things_to_do") { ?>
            <script src="<?php echo base_url() . 'js/admin/bootstrap-datepicker.js'; ?>" type="text/javascript"></script>  
            <script>
                $(document).ready(function () {
                    $('#m_repeater_1').repeater({
                        initEmpty: false,

                        defaultValues: {
                            //                            'text-input': 'foo'
                        },

                        show: function () {
                            $(this).slideDown();
                        },

                        hide: function (deleteElement) {
                            $(this).slideUp(deleteElement);
                        },
                        isFirstItemUndeletable: true
                    });
                });
            </script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/things_to_do.js'; ?>" type="text/javascript"></script>
        <?php } else if ($this->uri->segment(2) == "things_to_do_view") { ?>
            <script src="<?php echo base_url() . 'js/admin/html-table.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    $("body").on("click", ".btnSearchThings", function () {

                        var author = $("#author").val();
                        var destination = $("#end_point").val();

                        $.ajax({
                            type: 'POST',
                            url: base_url + 'view_things_to_do_ajax',
                            data: {author: author, destination: destination},
                            dataType: 'html',
                            success: function (data) {
                                $("#divThingsToDo").html('');
                                swal({
                                    "title": "",
                                    "text": "The profile has been successfully saved!",
                                    "type": "success",
                                    "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                                });
                                $("#divThingsToDo").html(data);
                                var datatable = $('.m-datatable').mDatatable({
                                    data: {
                                        saveState: {cookie: false},
                                    },
                                    search: {
                                        input: $('#generalSearch'),
                                    },
                                    columns: [
                                        {
                                            field: 'Deposit Paid',
                                            type: 'number',
                                        },
                                        {
                                            field: 'Order Date',
                                            type: 'date',
                                            format: 'YYYY-MM-DD',
                                        }, {
                                            field: 'Status',
                                            title: 'Status',
                                            // callback function support for column rendering

                                        }, {
                                            field: 'Type',
                                            title: 'Type',
                                            // callback function support for column rendering

                                        },
                                    ],
                                });
                            }
                        });
                    });
                });
            </script>

        <?php } else if ($this->uri->segment(1) == "real_travellers") { ?>
            <script src="<?php echo base_url() . 'js/admin/html-table.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    $("body").on("click", ".btnSearchRealTravellers", function () {
                        var city = $("#city").val();
                        var flag = 1;
                        if (city == "") {
                            flag = 0
                        }

                        if (flag == 1) {
                            $.ajax({
                                type: 'POST',
                                url: base_url + 'real_travellers_ajax',
                                data: {city: city},
                                dataType: 'html',
                                success: function (data) {
                                    $("#divrealtravellers").html('');
                                    $("#divrealtravellers").html(data);
                                    var datatable = $('.m-datatable').mDatatable({
                                        data: {
                                            saveState: {cookie: false},
                                        },
                                        search: {
                                            input: $('#generalSearch'),
                                        },
                                        columns: [
                                            {
                                                field: 'Deposit Paid',
                                                type: 'number',
                                            },
                                            {
                                                field: 'Order Date',
                                                type: 'date',
                                                format: 'YYYY-MM-DD',
                                            }, {
                                                field: 'Status',
                                                title: 'Status',
                                                // callback function support for column rendering

                                            }, {
                                                field: 'Type',
                                                title: 'Type',
                                                // callback function support for column rendering

                                            },
                                        ],
                                    });
                                }
                            });
                        }else{
                            alert('Error');
                        }
                    });
                });
            </script>
        <?php } else if ($this->uri->segment(2) == "real_travellers_edit") { ?>
            <script src="<?php echo base_url() . 'js/admin/html-table.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    var datatable1 = $('#table_itineraries').mDatatable({
                        data: {
                            saveState: {cookie: false},
                        },
                        search: {
                            input: $('#itinerariesSearch'),
                        },
                        columns: [
                        ],
                    });

                    var datatable2 = $('#table_stories').mDatatable({
                        data: {
                            saveState: {cookie: false},
                        },
                        search: {
                            input: $('#storiesSearch'),
                        },
                        columns: [
                        ],
                    });
                });
            </script>
        <?php } else if ($this->uri->segment(2) == "stories") { ?>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/html-table.js'; ?>" type="text/javascript"></script>            
            <script src="<?php echo base_url() . 'js/admin/stories.js'; ?>" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    $("body").on("click", ".btnSearchStories", function () {

                        var author = $("#author").val();
                        var destination = $("#end_point").val();

                        $.ajax({
                            type: 'POST',
                            url: base_url + 'stories_ajax',
                            data: {author: author, destination: destination},
                            dataType: 'html',
                            success: function (data) {
                                $("#divStories").html('');
                                $("#divStories").html(data);
                                var datatable = $('.m-datatable').mDatatable({
                                    data: {
                                        saveState: {cookie: false},
                                    },
                                    search: {
                                        input: $('#generalSearch'),
                                    },
                                    columns: [
                                        {
                                            field: 'Deposit Paid',
                                            type: 'number',
                                        },
                                        {
                                            field: 'Order Date',
                                            type: 'date',
                                            format: 'YYYY-MM-DD',
                                        }, {
                                            field: 'Status',
                                            title: 'Status',
                                            // callback function support for column rendering

                                        }, {
                                            field: 'Type',
                                            title: 'Type',
                                            // callback function support for column rendering

                                        },
                                    ],
                                });
                            }
                        });
                    });
                });
            </script>
        <?php } else if ($this->uri->segment(2) == "edit_stories") { ?>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
            <script src="<?php echo base_url() . 'js/admin/stories.js'; ?>" type="text/javascript"></script>
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
        <?php } else { ?>
            <script src="<?php echo base_url() . 'js/admin/bootstrap-datepicker.js'; ?>" type="text/javascript"></script>            
            <script src="<?php echo base_url() . 'js/admin/select2.js'; ?>" type="text/javascript"></script>
        <?php } ?>
        <!--end::Page Resources -->        
    </body>
    <!-- end::Body -->
</html>
