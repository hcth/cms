$(document).ready(function () {
    $("body").on("click", ".saveProfile", function () {

        var select_arr = new Array();

        $('.select2-selection__choice').each(function () {
            select_arr.push($(this).attr('title').trim());
        });

        $("#hid_places_travelled").val(select_arr.toString());

        $.ajax({
            type: 'POST',
            url: base_url + 'saveProfile',
            data: $(".frmProfile").serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.status == "success") {
                    swal({
                        "title": "",
                        "text": "The profile has been successfully saved!",
                        "type": "success",
                        "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                    });
                } else {
                }
            }
        });
    });

});