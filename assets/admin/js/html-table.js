//== Class definition

var DatatableHtmlTableDemo = function () {
    //== Private functions

    // demo initializer
    var demo = function () {

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

        $('#m_form_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#m_form_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#m_form_status, #m_form_type').selectpicker();

    };

    return {
        //== Public functions
        init: function () {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function () {
    DatatableHtmlTableDemo.init();
});