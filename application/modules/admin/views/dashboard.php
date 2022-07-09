<div class="m-grid__item m-grid__item--fluid m-wrapper">
<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Dashboard
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div>Summary</div>
        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Leads
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $total_lead; ?> 
                                </span> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total leads
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    This Year
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $total_lead_year; ?> 
                                </span>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total leads
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    Last Month
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $total_lead_last_month; ?> 
                                </span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="m-portlet shadow_none bg-transparent">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4 bg-white"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Sales Closed
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    Till Date
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $sales_closed; ?> 
                                </span> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 bg-white"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total leads
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    This Month
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <?php echo $total_lead_this_month; ?> 
                                </span>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>

        <div>Leads & Sales Analytics</div>
        <div class="m-portlet p-4">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row">                      
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="fromdate" placeholder="From Date" value="<?php echo date('Y-m-01'); ?>" >
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="todate" placeholder="To Date" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                        <div class="col-md-3">
                            <a href="javascript:void(0)" id="getstats" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill">
                                Submit
                            </a>
                        </div>  
                </div>
            </div>
        </div>

        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total Leads
                                </h4><br>  
                                <span class="m-widget24__desc">
                                    Count
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_total_lead' ></div>
                                </span> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Open
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    Discussions
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_open_discussion' ></div>
                                    <span id='s_open_discussion_per' class="m--regular-font-size-">(%)</span>
                                </span>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Sales 
                                </h4><br> 
                                <span class="m-widget24__desc">
                                    Closed
                                </span> 
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_sale_closed' ></div>
                                    <span id='s_sale_closed_per' class="m--regular-font-size-">(%)</span>
                                </span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="m-portlet shadow_none bg-transparent">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-4 bg-white"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Sales 
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Lost
                                </span> 
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_sale_lost' ></div>
                                    <span id='s_sale_lost_per' class="m--regular-font-size-">(%)</span> </span> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 bg-white"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total
                                </h4><br>
                                <span class="m-widget24__desc">
                                    On Hold
                                </span>  
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_hold' ></div>
                                    <span id='s_hold_per' class="m--regular-font-size-">(%)</span>
                                </span>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-md-12 col-lg-6 col-xl-4 bg-white"> 
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Invalid Lead
                                </span>  
                                <span class="m-widget24__stats m--font-info">
                                    <div  id='s_invalid' ></div>
                                    <span id='s_invalid_per' class="m--regular-font-size-">(%)</span>
                                </span>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>

        <!-- <div class="m-portlet p-4">
            <div id="container"></div>
        </div> -->
             
    </div><!--/.content-->
</div>


<script src="https://code.highcharts.com/highcharts.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// Highcharts.chart('container', {
//     chart: {
//         type: 'area'
//     },
//     title: {
//         text: ''
//     }, 
//     xAxis: {
//         categories: ['1750', '1800', '1850', '1900', '1950', '1999', '2050'],
//         tickmarkPlacement: 'on',
//         title: {
//             enabled: false
//         }
//     },
//     yAxis: {
//         title: {
//             text: ''
//         },
//         labels: {
//             formatter: function () {
//                 return this.value / 1000;
//             }
//         }
//     },
//     tooltip: {
//         split: true,
//         valueSuffix: ' millions'
//     },
//     plotOptions: {
//         area: {
//             stacking: 'normal',
//             lineColor: '#666666',
//             lineWidth: 1,
//             marker: {
//                 lineWidth: 1,
//                 lineColor: '#666666'
//             }
//         }
//     },
//     exporting: {
//         enabled: false
//     },
//     credits: {
//         enabled: false
//     },
//     series: [{
//         name: 'Total Leads',
//         data: [502, 635, 809, 947, 1402, 3634, 5268]
//     }, {
//         name: 'Open Discussions',
//         data: [106, 107, 111, 133, 221, 767, 1766]
//     }, {
//         name: 'Sales Closed',
//         data: [163, 203, 276, 408, 547, 729, 628]
//     }, {
//         name: 'Sales Lost',
//         data: [18, 31, 54, 156, 339, 818, 1201]
//     }, {
//         name: 'Total hot leads',
//         data: [2, 2, 2, 6, 13, 30, 46]
//     }]
// });

$(document).ready(function() {
	getstats();
});

$('#getstats').click(function() {
	getstats();
});


function getstats(){
	
    $.ajax({
        url : base_url + 'admin/get_lead_stats',
        dataType : 'json',
        type : "post",
        data : {
            fromdate:$('#fromdate').val(),
            todate:$('#todate').val(),
        },		
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(data) {
            // $(".loader").hide();
            $('#s_total_lead').text(data.total_lead);
            
            $('#s_open_discussion').text(data.op_d);
            $('#s_open_discussion_per').text('(' + (data.op_d * 100 / data.total_lead ).toFixed(2) + '%)');
            
            $('#s_sale_closed').text(data.sale_close);
            $('#s_sale_closed_per').text('(' + (data.sale_close * 100 / data.total_lead ).toFixed(2) + '%)');
            
            $('#s_sale_lost').text(data.sale_lost);
            $('#s_sale_lost_per').text('(' + (data.sale_lost * 100 / data.total_lead ).toFixed(2) + '%)');
            
            $('#s_hold').text(data.on_hold);
            $('#s_hold_per').text('(' + (data.on_hold * 100 / data.total_lead ).toFixed(2) + '%)');
            
            $('#s_invalid').text(data.invalid_lead);
            $('#s_invalid_per').text('(' + (data.invalid_lead * 100 / data.total_lead ).toFixed(2) + '%)');
        },
    });
}
</script>