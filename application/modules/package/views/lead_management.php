<style type="text/css">
    .crm_card {
        border: 1px solid #f2f3f8;
        text-align: center;
        border-radius: 7px;
        -webkit-border-radius: 7px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 15px
    }

    .crm_card.active {
        border: 1px solid #62a4e2
    }

    .crm_card .crm_count {
        color: #62a4e2;
        font-size: 1.5rem;
        font-weight: 600;
        line-height: initial
    }

    .crm_card .m-radio {
        margin-bottom: 0;
        font-size: 12px;
        width: 100%;
        padding-left: 10px;
        padding-right: 10px
    }

    .mt_25 {
        margin-top: 25px !important
    }

    .crm_card .m-radio>span {
        margin-right: auto;
        margin-left: auto;
        right: 0
    }

    .lead_details_title {
        font-size: 16px
    }

    .received_leads {
        border-bottom: 1px solid #f2f3f8;
        margin-top: 1rem
    }

    .bootstrap-timepicker-widget .th,
    .bootstrap-timepicker-widget td {
        border: none;
        font-size: 14px
    }

    @media (max-width: 768px) {
        .center_below_768 {
            text-align: center !important
        }

        .mt_below_768 {
            margin-top: 20px !important
        }

        #LeadsTable .row .col-md-4,
        #LeadsTable .row .col-md-2 {
            margin-bottom: 15px
        }
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Lead Management
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">

        <!-- New Code Adding for filters Start-->
        <div class="m-portlet">
            <div class="m-portlet__body m-form">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab active" data-toggle="tab" href="#LeadsTable" id='btn_lead'>
                            Leads Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link itinerariesTab" data-toggle="tab" href="#crm" id='btn_crm'>
                            CRM
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="LeadsTable" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="date" class="form-control" id="fromdate" />
                                    </div>
                                    <div class="col-6">
                                        <input type="date" class="form-control" id="todate" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="platform">
                                    <option selected value="">Platform</option>
                                    <?php
                                    foreach ($platform as $plat) {
                                        echo "<option value='$plat->name'>$plat->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="camp_type">
                                    <option selected value="">Campaign Type</option>
                                    <?php
                                    foreach ($campaigntype as $camp_t) {
                                        echo "<option value='$camp_t->name'>$camp_t->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="destination">
                                    <option selected value="">Destination</option>
                                    <?php
                                    foreach ($destination as $dest) {
                                        echo "<option value='$dest->name'>$dest->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="adgroup">
                                    <option selected value="">Adgroup</option>
                                    <?php
                                    foreach ($adgroup as $adgroup_v) {
                                        echo "<option value='$adgroup_v->name'>$adgroup_v->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--/.row-->
                        <div class="row mt-4">
                            <div class="col-md-2">
                                <select class="form-control" id="sales_status">
                                    <option selected value="">Sales Status</option>
                                    <?php
                                    foreach ($sales_status as $sales_s) {
                                        echo "<option value='$sales_s->name'>$sales_s->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="disposition">
                                    <option selected value="">Disposition</option>
                                    <?php
                                    foreach ($disposition as $disp) {
                                        echo "<option value='$disp->name'>$disp->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="assigned_to">
                                    <option value="me">My Leads</option>
                                    <option value="others">Others Leads</option>
                                    <option selected value="all">All Leads</option>
                                </select>
                            </div>
                            <?php
                            if ($_SESSION['is_admin'] == 1) {
                            ?>
                                <div class="col-md-2">
                                    <select class="form-control" id="assigned_to_user">
                                        <option selected value="">Executive List</option>
                                        <?php
                                        foreach ($executives as $executive) {
                                            echo "<option value='$executive->id'>$executive->name (" . $executive->email . ")</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    Auto Lead Assign is
                                    <input type="radio" <?php if ($auto_assign_leads == 'on') echo 'checked'; ?> name='auto_lead_assign_mechanism' value='on'>On
                                    <input type="radio" <?php if ($auto_assign_leads == 'off') echo 'checked'; ?> name='auto_lead_assign_mechanism' value="off">Off
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!--/.row-->
                        <div class="row mt-4">
                            <div class="col-md-6 center_below_768">
                                <a href="#" id="getClientList" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill">
                                    Apply
                                </a>
                                <a href="javascript:void(0)" id="resetFilter" class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--pill">
                                    Reset
                                </a>
                            </div>
                            <div class="col-md-6 center_below_768 text-right mt-3 mt-sm-0">
                                <a href="#newleadmodal" class="btn btn-secondary m-btn m-btn--icon m-btn--pill" data-toggle="modal">
                                    <i class="fa fa-plus-square-o"></i>
                                    Add New Lead
                                </a>
                                <a href="<?php echo base_url('package/download_packagecsv'); ?>" class="btnSaveTripSummary btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                    <i class="la la-download"></i> CSV
                                </a>

                            </div>
                            <!--begin: Datatable -->
                            <div class="col-md-12 mt-5">
                                <div class="table-responsive" id="client_list_table">
                                </div>
                            </div>
                            <!--end: Datatable -->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/. end tab -->
                    <div class="tab-pane" id="crm" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="crm_card active">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Fresh Lead">
                                        <div class="mt_25">Fresh Lead</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['fresh lead']) ? $disposition_detail['fresh lead'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Interested Call Back">
                                        <div class="mt_25">Interested
                                            Call Back</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['interested call back']) ? $disposition_detail['interested call back'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Not Connected Call Back">
                                        <div class="mt_25">Not Connected
                                            Call Back</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['not connected call back']) ? $disposition_detail['not connected call back'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Busy Call Back">
                                        <div class="mt_25">Busy Call
                                            Back</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['busy call back']) ? $disposition_detail['busy call back'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Not Interested">
                                        <div class="mt_25">Not Interested</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['not interested']) ? $disposition_detail['not interested'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Not Relevant">
                                        <div class="mt_25">Not Relevant</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['not relevant']) ? $disposition_detail['not relevant'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Invalid Contact">
                                        <div class="mt_25">Invalid Contact</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['invalid contact']) ? $disposition_detail['invalid contact'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Hot Lead">
                                        <div class="mt_25">Hot Lead</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['hot lead']) ? $disposition_detail['hot lead'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Sales Closed">
                                        <div class="mt_25">Sales Closed</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['sales closed']) ? $disposition_detail['sales closed'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Destination Changed">
                                        <div class="mt_25">Destination Changed</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['destination changed']) ? $disposition_detail['destination changed'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Duplicate Lead">
                                        <div class="mt_25">Duplicate Lead</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['duplicate lead']) ? $disposition_detail['duplicate lead'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="crm_card">
                                    <label class="m-radio">
                                        <input type="radio" name="crm_details" value="Testing Leads">
                                        <div class="mt_25">Testing Leads</div>
                                        <span></span>
                                        <div class="crm_count">
                                            <?php echo isset($disposition_detail['testing leads']) ? $disposition_detail['testing leads'] : 0; ?>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--/.row -->
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill">
                                    <i class="la la-download"></i> CSV
                                </a>
                            </div>
                            <!--begin: Datatable -->
                            <div class="col-md-12 mt-5">
                                <div class="table-responsive">
                                    <div id="crm_record_view"></div>
                                </div>
                            </div>
                            <!--end: Datatable -->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.end tab -->
                </div>
            </div>
        </div>
        <!-- New Code Adding for filters End-->
    </div>
</div>
<!-- add new lead modal start -->
<div class="modal fade" id="newleadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add a new lead
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="add_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Mobile
                            </label>
                            <input type="number" class="form-control" id="add_mobile">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Email
                            </label>
                            <input type="email" class="form-control" id="add_email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Package
                            </label>
                            <input type="text" class="form-control" id="add_package">
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Destination
                            </label>
                            <select class="form-control" id="add_destination">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($destination as $dest) {
                                    echo "<option value='$dest->name'>$dest->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Platform
                            </label>
                            <select class="form-control" id="add_platform">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($platform as $plat) {
                                    echo "<option value='$plat->name'>$plat->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Sales Status
                            </label>
                            <select class="form-control" id="add_sales_status">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($sales_status as $sales_s) {
                                    echo "<option value='$sales_s->name'>$sales_s->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Disposition
                            </label>
                            <select class="form-control" id="add_disposition">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($disposition as $disp) {
                                    echo "<option value='$disp->name'>$disp->name</option>";
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Campaign Type
                            </label>
                            <select class="form-control" id="add_camp_type">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($campaigntype as $camp_t) {
                                    echo "<option value='$camp_t->name'>$camp_t->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--info m-portlet--head-solid-bg">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Notes
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="form-group">
                                    <textarea class="form-control m-input" rows="3" id="add_call_notes" placeholder="Enter Note"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
                <!--/.row-->
            </div>
            <div class="modal-footer">
                <button type="button" id="add_client" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
<!-- add new lead modal end -->

<!-- edit lead details modal start -->
<div class="modal fade" id="editleadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add notes & Edit status
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="edit_name" readonly>
                            <input type="hidden" class="form-control" id="edit_id">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Mobile
                            </label>
                            <input type="text" class="form-control" id="edit_mobile" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Email
                            </label>
                            <input type="text" class="form-control" id="edit_email" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Package
                            </label>
                            <input type="text" class="form-control" id="edit_package" readonly>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Destination
                            </label>
                            <input type="text" class="form-control" id="edit_destination" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Platform
                            </label>
                            <input type="text" class="form-control" id="edit_platform" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Sales Status
                            </label>
                            <select class="form-control" id="edit_sales_status">
                                <option value="">Sales Status</option>
                                <?php
                                foreach ($sales_status as $sales_s) {
                                    echo "<option value='$sales_s->name'>$sales_s->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Disposition
                            </label>
                            <select class="form-control" id="edit_disposition">
                                <option selected value=''>Select</option>
                                <?php
                                foreach ($disposition as $disp) {
                                    echo "<option value='$disp->name'>$disp->name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">
                                Campaign Type
                            </label>
                            <input type="text" class="form-control" id="edit_camp_type" readonly>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--info m-portlet--head-solid-bg">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Notes
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id='all_notes'></div>
                                <div class="form-group">
                                    <textarea class="form-control m-input" rows="3" id="edit_call_notes" placeholder="Enter Note"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
                <!--/.row-->
            </div>
            <div class="modal-footer">
                <input type='hidden' id='edit_assigned_to'>
                <button type="button" id="edit_client" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
<!-- edit lead details modal end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        current_user_id = "<?= $_SESSION['id'] ?>"
        is_admin = "<?= $_SESSION['is_admin'] ?>"
        getClientList();
    });

    $('#getClientList').click(function() {
        getClientList();
    });

    $('input[type=radio][name=crm_details]').change(function() {
        getCrmData(this.value);
    });

    $('#assigned_to_user').change(function() {
        var array = [];
        $("input:checkbox[name=lead_id]:checked").each(function() {
            array.push($(this).val());
        });
        console.log($('#assigned_to_user').val())
        console.log(array);
        if (array.length == 0) {
            alert('Atleast 1 user should be selected')
        } else {
            if (confirm('Are you sure?')) {
                assignLead(array, $('#assigned_to_user').val());
            }
        }
    });

    $('#add_client').click(function() {
        add_client();
    });

    $('#edit_client').click(function() {
        edit_client();
    });

    $('#resetFilter').click(function() {
        resetFilter();
    });

    function resetFilter() {
        $('#fromdate').val('');
        $('#todate').val('');
        $('#platform').val('');
        $('#camp_type').val('');
        $('#adgroup').val('');
        $('#sales_status').val('');
        $('#disposition').val('');
        $('#assigned_to').val('');
    }

    function add_client() {
        var flag = 1
        if ($('#add_name').val() == '')
            flag = 0
        if ($('#add_email').val() == '')
            flag = 0
        if ($('#add_mobile').val() == '')
            flag = 0
        if ($('#add_package').val() == '')
            flag = 0
        if ($('#add_destination').val() == '')
            flag = 0
        if ($('#add_platform').val() == '')
            flag = 0
        if ($('#add_sales_status').val() == '')
            flag = 0
        if ($('#add_disposition').val() == '')
            flag = 0
        if ($('#add_camp_type').val() == '')
            flag = 0
        if (flag == 1) {

            $.ajax({
                url: base_url + 'package/add_client',
                dataType: 'text',
                type: "post",
                data: {
                    name: $('#add_name').val(),
                    email: $('#add_email').val(),
                    mobile: $('#add_mobile').val(),
                    package: $('#add_package').val(),
                    destination: $('#add_destination').val(),
                    platform: $('#add_platform').val(),
                    sales_status: $('#add_sales_status').val(),
                    disposition: $('#add_disposition').val(),
                    campaigntype: $('#add_camp_type').val(),
                    call_notes: $('#add_call_notes').val(),
                },
                beforeSend: function() {
                    // $(".loader").show();
                },
                success: function(data) {
                    // $(".loader").hide();
                    console.log(data);
                    $('#add_name').val('');
                    $('#add_email').val('');
                    $('#add_mobile').val('');
                    $('#add_package').val('');
                    $('#add_destination').val('');
                    $('#add_platform').val('');
                    $('#add_sales_status').val('');
                    $('#add_disposition').val('');
                    $('#add_camp_type').val('');
                    $('#add_call_notes').val('');
                    $('#newleadmodal').modal('hide');
                    alert(data);
                    location.reload();

                },
            });
        } else
            alert('Please fill all fields');

    }

    function getClientList() {
        $.ajax({
            url: base_url + 'package/gatAllClientList',
            dataType: 'html',
            type: "post",
            data: {
                fromdate: $('#fromdate').val(),
                todate: $('#todate').val(),
                platform: $('#platform').val(),
                camp_type: $('#camp_type').val(),
                destination: $('#destination').val(),
                sales_status: $('#sales_status').val(),
                disposition: $('#disposition').val(),
                adgroup: $('#adgroup').val(),
                assigned_to: $('#assigned_to').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(data) {
                // $(".loader").hide();
                // console.log(data);
                $('#client_list_table').html(data);
            },
        });
    }

    function getCrmData(disp) {
        console.log(disp);
        $.ajax({
            url: base_url + 'package/getCrmData',
            dataType: 'html',
            type: "post",
            data: {
                disp: disp,
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(res) {
                // $(".loader").hide();
                // console.log(res);
                $('#crm_record_view').html(res);
                // return false;
            },
        });
    }

    function edit_client() {

        $.ajax({
            url: base_url + 'package/edit_client',
            dataType: 'text',
            type: "post",
            data: {
                id: $('#edit_id').val(),
                sales_status: $('#edit_sales_status').val(),
                disposition: $('#edit_disposition').val(),
                call_notes: $('#edit_call_notes').val(),
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(data) {
                // $(".loader").hide();
                // console.log(data);return false;
                $('#edit_id').val('');
                $('#edit_sales_status').val('');
                $('#edit_disposition').val('');
                $('#edit_call_notes').val('');
                $('#editleadmodal').modal('hide');
                alert(data);

                var url = window.location.href;
                console.log(url);
                var result = url.split('?');
                window.open(result[0] + '?tab=' + $('.active').attr('id'), "_self")
            },
        });
    }

    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }
    var tab = GetURLParameter('tab');
    jQuery(function() {
        jQuery('#' + tab).click();
    });


    function assignLeadToMe(id) {
        $.ajax({
            url: base_url + 'package/assign_lead_to_me',
            dataType: 'html',
            type: "post",
            data: {
                id: id
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(data) {
                // $(".loader").hide();
                // console.log(data);
                getClientList();
            },
        });
    }


    function assignLead(leads_arr, user_id) {
        $.ajax({
            url: base_url + 'package/assign_lead_to_user',
            dataType: 'html',
            type: "post",
            data: {
                leads_arr: leads_arr,
                user_id: user_id
            },
            beforeSend: function() {
                // $(".loader").show();
            },
            success: function(data) {
                // $(".loader").hide();
                // console.log(data);
                getClientList();
            },
        });
    }

    $('input[type=radio][name=auto_lead_assign_mechanism]').change(function() {
        if (confirm('Are you sure??')) {
            $.ajax({
                url: base_url + 'package/update_auto_assign_lead_mechanism',
                dataType: 'text',
                type: "post",
                data: {
                    auto_assign_leads: this.value,
                },
                beforeSend: function() {
                    // $(".loader").show();
                },
                success: function(data) {
                    alert(data);
                    // $(".loader").hide();
                    // console.log(data);
                },
            });
        }
    });
</script>