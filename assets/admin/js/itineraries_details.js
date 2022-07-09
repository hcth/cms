$(document).ready(function () {
    $("body").on("click", ".btnSaveSeoData", function () {
        var formRecord = $("#seodata").serialize();
        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/itinerarySeoData',
            data:formRecord,
            dataType: 'json',
            beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                if (data == 1) {
                    $(".alert-success").css("display","block");
                    $(".alert-success").html("SEO data inserted successfully!").delay(2000).fadeOut();
                    $('#nav_seo_data').css('background','#ccc');
                    setTimeout(function(){ $("#nav_trip_details").trigger("click"); }, 2000);

                } else {
                    appendMsgs("#seodata",data);
                }
            }
        });

    });

    $("body").on("click", ".btnSaveTripDetails", function () {

        heading = CKEDITOR.instances.editor.getData();
        about = CKEDITOR.instances.editor1.getData();
        things = CKEDITOR.instances.editor2.getData();

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/itineraryTripDetail',
            data:{
                heading:heading,
                about:about,
                things:things
            },
            dataType: 'json',
            beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                if (data == 1) {
                    $(".alert-success").css("display","block");
                    $(".alert-success").html("Trip data updated successfully!").delay(2000).fadeOut();
                    $('#nav_trip_details').css('background','#ccc');
                    setTimeout(function(){ $("#nav_trip_summary").trigger("click"); }, 2000);
                } else {
                    appendMsgs("#itineraydetails",data);
                }
            }
        });
    });

    $("body").on("click", ".btnSaveTripSummary", function () {

        var formdata = new FormData($('#itinerarysummary')[0]);
        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/itinerarysummary',
            data: $('#itinerarysummary').serialize() +"&itinerariesThumb="+$('.cropme > img').attr('src'),
            dataType: 'json',
           
            beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
               if (data == 1) {
                   $(".alert-success").css("display","block");
                    $(".alert-success").html("Trip Summary updated successfully!").delay(2000).fadeOut();
                    $('#nav_trip_summary').css('background','#ccc');
                    setTimeout(function(){ $("#nav_trip_gallery").trigger("click"); }, 2000);
                } if(data == 3){
                    $("#uploaderror").html("Something went worng! thumbnail not uploaded!");
                } else {
                    appendMsgs("#itinerarysummary",data);
                }
            }
        });
    });

    $("body").on("click", ".btnSavePackagingList", function () {

        food = CKEDITOR.instances.editor3.getData();
        cloths = CKEDITOR.instances.editor4.getData();
        accessories = CKEDITOR.instances.editor5.getData();
        medicine = CKEDITOR.instances.editor6.getData();

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/itineraryPackageList',
            data: {
                food: food,
                accessories: accessories,
                clothes: cloths,
                medicines: medicine,
            },
            dataType:'json',
             beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                /*alert(data);
                return false;*/
               if (data == 1) {
                    $(".alert-success").css("display","block");
                    $(".alert-success").html("Trip Package List updated successfully!").delay(2000).fadeOut();
                    $('#nav_packaging_list').css('background','#ccc');
                    setTimeout(function(){ $("#nav_trip_gallery").trigger("click"); }, 2000);
                } else {
                    appendMsgs("#packagingList",data);
                }
            }
        });
    });


        $("body").on("click", ".btnSaveTripGallery", function () {
            $videoURl = $("#videoURL").serialize();
        $.ajax({
            type: 'POST',
           url: base_url + 'itineraries/SaveTripGallery',
            data: $videoURl,
            dataType: 'json',
           beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                if (data.status == "success") {

                    $(".alert-success").css("display","block");
                    $(".alert-success").html("Trip Gallery updated successfully!").delay(2000).fadeOut();
                    $('#nav_trip_gallery').css('background','#ccc');
                      $(".divAlertTripSummary").show();
                    setTimeout(function(){ $("#nav_itineary_details").trigger("click"); }, 2000);

                } else {
                    $(".divAlertTripSummary").show();
                    $(".divMsgTripSummary").removeClass('alert-success')
                    $(".divMsgTripSummary").addClass('alert-danger');
                    $(".divMsgTripSummary").html('<strong>Something went wrong!</strong>');
                }
            }
        });
    });



    $("body").on("blur", "#total_trip_days", function () {
        var date_start = $("#visit_date_start").val();
        var date_end = $("#visit_date_end").val();
        var trip_id = $("#trip_id").val();
        if (true) {
                  var diffDays = $(this).val();
                $.ajax({
                    url: base_url + "itineraries/get_daywise_itineraries_details",
                    data: {days: diffDays, trip_id: trip_id},
                    type: 'POST',
                    dataType: 'html',
                    success: function (data) {
                        $("#itineraries_details_html").show();
                        $("#itineraries_details_html").html(data);
                        $("#itinerary_details_id").val(trip_id);
                        $('.tripDateRange').datepicker({
                            todayHighlight: true,
                            format: 'yyyy-mm-dd',
                            autoclose: true,
                            templates: {
                                leftArrow: '<i class="la la-angle-left"></i>',
                                rightArrow: '<i class="la la-angle-right"></i>'
                            }
                        });
                    }
                });

        }
    });

    $("body").on("change", "#itinerary_date_end", function () {
        var date_start = $("#itinerary_date_start").val();
        var date_end = $("#itinerary_date_end").val();
        var trip_id = $("#trip_id").val();
//        return false;
        if (date_start != "" && date_end != "") {
            var date1 = new Date(date_start);
            var date2 = new Date(date_end);
            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            $("#total_trip_days").val(diffDays);
            if (diffDays > 0) {
                $.ajax({
                    url: base_url + "itineraries/get_daywise_itineraries_details",
                    data: {days: (diffDays + 1), trip_id: trip_id, date_start: date_start, date_end: date_end},
                    type: 'POST',
                    dataType: 'html',
                    success: function (data) {
                        $("#itineraries_details_html").show();
                        $("#itineraries_details_html").html(data);
                        $("#itinerary_details_id").val(trip_id);
                        $('.tripDateRange').datepicker({
                            todayHighlight: true,
                            format: 'yyyy-mm-dd',
                            autoclose: true,
                            templates: {
                                leftArrow: '<i class="la la-angle-left"></i>',
                                rightArrow: '<i class="la la-angle-right"></i>'
                            }
                        });
                    }
                });
            }
        }
    });

    $("body").on("click", ".saveItineraryDetails", function () {
        //
        if($(this).attr('data-wizard-action') == 'submit'){
            console.log('final step');
           return false;

        }

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/saveItineraryDetails',
            data: $("#m_form").serialize(),
            dataType: 'html',
             beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(data){
            ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
                if (data.status == "success") {
                    $("#trip_summary_id").val(data.trip_summary_id);
                } else {
                    appendMsgs("#m_form",data);
                    return false;
                }
            },
            error:function(){
                ajaxindicatorstop();
            }
        });
    });

    $("body").on("click", ".removeImg", function (e) {
        e.preventDefault();
        id = $(this).attr('id');

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/deleteItinerariesImage',
            data: {id:id},
            success: function (data) {
                if (data == 1) {
                    alert("Image deleted!");
                     $('#'+id).hide();
                    $('#'+id).find('img').hide();
                } else {
                    alert("Something went wrong,Image not deleted!");
                }
            }
        });
    });

    $("body").on("click", ".removeImgs", function (e) {
        e.preventDefault();
        $(this).closest('.dz-preview').hide();
        id = $(this).attr('id');

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/deleteItinerariesImages',
            data: {id:id},
            success: function (data) {
                if (data == 1) {
                    alert("Image deleted!");
                     $(this).hide();

                } else {
                    alert("Something went wrong,Image not deleted!");
                }
            }
        });
    });



    $('.tripDate').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        orientation: "bottom left",
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    });

    $('.tripDateRange').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    });

    $("body").on("click", ".btnSearchItineraries", function () {
        var destination = $("#cityName").val();
        var start_point = $("#start_point").val();
        var total_trip_days = $("#total_trip_days").val();
        var total_budget = $("#total_budget").val();
        var trip_category = $("#trip_category").val();
        var trip_type = $("#trip_type").val();
        var transport_mode = $("#transport_mode").val();

        $.ajax({
            type: 'POST',
            url: base_url + 'itineraries/itineraries_details_ajax',
            data: {cityName: destination, start_point: start_point, trip_days: total_trip_days,
             budget: total_budget, suitable: trip_category, 
             theme: trip_type, transport_mode: transport_mode},
            dataType: 'html',
            success: function (data) {
                $("#divItineraries").html('');
                $("#divItineraries").html(data);
                  var table =     $('#itinerariesTables').DataTable({
                         dom: 'Bfrtip',
                         buttons: [
                            {
                                extend: 'csvHtml5',
                                title: 'Itinerary listings',

                                exportOptions: {
                                    columns: [1,2,3,4,5,6 ],
                                }
                            },
                          ]



                  }  );
                  ajaxindicatorstop();

               
            },
             beforeSend: function() {
                             ajaxindicatorstart("Please wait.",base_url);
            }
        });
    });

    $('body').on('click','.m_sweetalert_demo_8',function (e) { 
        var itinerary_id = $(this).data('itinerary_id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: base_url + 'itineraries/delete_itineraries',
                    data: {
                        itinerary_id: itinerary_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == "success") {
                            $("#a_" + itinerary_id).closest('tr').remove();
                            swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    )
                        } else {

                        }
                    }
                });
            }
        });
    });

        function appendMsgs(form,msg,errorClass){
    $('.error').remove();
    if(typeof(msg) == 'object'){

    $.each(msg,function(m,k){
        $(form+' input[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
        $(form+' select[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
        $(form+' textarea[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
        $(form+' number[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
    });
    }
    else{
      if(errorClass != ''){
      $(form+' '+errorClass).html(msg);
      }
    }
}

    $('#itinerariesTables tbody').on('change', '.profilestatus', function () {
  //  $(".profilestatus").on("change",function(){
      vals = $(this).val();
      id = $(this).attr('id');

      $.ajax({
        type:"POST",
        url:base_url+"itineraries/profilestatus",
        data:{statusValue:vals,id:id},
                   beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          alert("Itinerary status has been changed!");
          location.reload();
        }
      })

  })


 $("#start_point").select2({
  ajax: {
   url: base_url+"traveller/getcitysearch",
   type: "post",
   dataType: 'json',
   delay: 250,
   data: function (params) {
    return {
      searchTerm: params.term // search term
    };
   },
   processResults: function (response) {
     return {
        results: response
     };
   },
   cache: true
  }
 });

  $("#end_point").select2({
  ajax: {
   url: base_url+"traveller/getcitysearch",
   type: "post",
   dataType: 'json',
   delay: 250,
   data: function (params) {
    return {
      searchTerm: params.term // search term
    };
   },
   processResults: function (response) {
     return {
        results: response
     };
   },
   cache: true
  }
 });



 $('#season_to_visit').multiselect({
                includeSelectAllOption: true
 });
  $('#trip_category').multiselect({
                includeSelectAllOption: true
 });
  $('#trip_type').multiselect({
                includeSelectAllOption: true
 });
  $('#transport_mode').multiselect({
                includeSelectAllOption: true
 });


});
