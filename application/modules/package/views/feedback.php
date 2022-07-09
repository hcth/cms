<!-- begin: page content -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">
                    Feedbacks
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content"> 
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__body m-form">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 col-md-5 col-sm-4">
                                <input type="date" class="form-control" id="from_date"
                                    placeholder="From Date" />
                            </div>
                            <div class="col-6 col-md-5 col-sm-4">
                                <input type="date" class="form-control" id="to_date"
                                    placeholder="To Date" />
                            </div>
                            <div class="col-12 col-md-2 col-sm-4 center_below_768 mt-3 mt-md-0" id="submit">
                                <a href="javascript:void(0)" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill">
                                    Submit
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 text-right center_below_768 mt-4 mt-sm-0">
                        <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--pill">
                            <i class="la la-download"></i> CSV
                        </a>
                    </div> -->
                </div>
                    <!--begin: Datatable --> 
                <div class="table-responsive" id='feedback_div'>
                    
                </div> 
                <!--end: Datatable -->
            </div>
        </div>
    </div>
</div>
<!-- end: page content -->
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

<script> 
$(document).ready(function() {
    get_db_data();
});

$('#submit').click(function() {
    get_db_data();
});

function get_db_data(){
    $.ajax({
        url : base_url + 'package/get_feedback_data',
        // dataType : 'text',
        dataType : 'html',
        type : "post",
        data : {
            from_date:$('#from_date').val(),
            to_date:$('#to_date').val(),
        },
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(res) {
            // $(".loader").hide();
            // console.log(res);
            $('#feedback_div').html(res);
        },
    });
}
</script> 