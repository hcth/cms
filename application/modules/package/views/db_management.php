
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css'>
<!-- begin: page content -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    DB Management
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
                                <select class="form-control" id='db_type'>
                                    <option value="destination">Destination</option>
                                    <option value="platform">Platform</option>
                                    <option value="campaigntype">Campaign Type</option>
                                    <option value="sales_status">Sales Status</option>
                                    <option value="disposition">Disposition</option>
                                    <option value="adgroup">Ad-Group</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <input type="text" id='db_value' class="form-control" placeholder="Enter Variable Here">
                                <input type="hidden" id='db_id' value=''> 
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!-- <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill">
                                    Add a variable <i class="la la-plus"></i>
                                </a>  -->
                                <div id='add'>
                                    <button type="button" id="add_data" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                        Add a variable
                                    </button>
                                </div>
                                <div id='edit' style='display:none'>
                                    <button type="button" id="edit_data" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                        Edit Variable
                                    </button>
                                </div> 
                            </div> 
                        </div>
                    </div>                                
                    <div class="col-md-2 col-lg-2 text-right center_below_768"> 
                            <a href="#"
                            class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill">
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

<!-- extra added by milind -->
<script src="bootstrap-timepicker.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>

<style type="text/css"> 
    @media (max-width: 768px){
        .center_below_768{text-align: center !important;}
        .mt_below_768{margin-top: 20px !important;}
        #LeadsTable .row .col-md-4, #LeadsTable .row .col-md-2{
            margin-bottom: 15px;
        }
    }
</style>
<script> 
$(document).ready(function() {
    get_db_data();
});

$('#add_data').click(function() {
	add_data();
});

$('#edit_data').click(function() {
	edit_data();
});

$('#db_type').change(function() {
    get_db_data();
});

function add_data(){
	
    $.ajax({
        url : base_url + 'package/add_data',
        dataType : 'text',
        type : "post",
        data : {
            db_type        :$('#db_type').val(),
            db_value       :$('#db_value').val(),
        },		
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(data) {
            // $(".loader").hide();
            // console.log(data);
            $('#db_value').val('');
            alert(data);
            get_db_data();
        },
    });
}

function edit_data(){
    $.ajax({
        url : base_url + 'package/edit_data',
        dataType : 'text',
        type : "post",
        data : {
            db_type :$('#db_type').val(),
            db_value:$('#db_value').val(),
            db_id   :$('#db_id').val(),
        },		
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(data) {
            // $(".loader").hide();
            // console.log(data);
            $('#db_id').val('');
            $('#db_value').val('');
            $('#edit').hide();
            $('#add').show();

            alert(data);
            get_db_data();

        },
    });
}

function get_db_data(){
    $.ajax({
        url : base_url + 'package/get_db_data',
        dataType : 'text',
        // dataType : 'html',
        type : "post",
        data : {
            db_type:$('#db_type').val(),
        },
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(res) {
            // $(".loader").hide();
            // console.log(res);
            $('.db_table_div').html(res);
        },
    });
}
</script> 
<!-- extra added by milind -->