$(document).ready(function () {
    var headline = ' Things to do in ';
    $("body").on("keyup", "#points", function () {
        fetch_headline();
    });

    $("body").on("change", "#place", function () {
        fetch_headline();
    });

    $("body").on("click", "#save_article", function () {
        var flag = 0;
        var data = {};
        $('.do_validation').each(function (index, value) {
            if ($(this).val().trim() == '') {
                flag = 1;
                $(this).css('border', '1px solid red');
            } else {
                data[$(this).attr('id')] = $(this).val().trim();
                $(this).css('border', '');
            }
        });

        if (flag == 0) {
            var obj = $(this);
            obj.attr('disabled', 'disabled');
            if (confirm("Sure create article ?") == true) {
                $.ajax({
                    'url': base_url + 'save_article_details',
                    'type': 'post',
                    'dataType': 'json',
                    'data': data,
                    beforeSend: function () {
                        $('#error_msg').html('');
                        $('#loaderimg').remove();
                        obj.html('<img id="loaderimg" src = "' + base_url + '/images/loading.gif"/>');
                    },
                    error: function () {
                        obj.removeAttr('disabled');
                        $('#loaderimg').remove();
                        $('#error_msg').html('<span class="m-form__help" style="color:red">Please try again.</span>');
                    },
                    success: function (response) {
                        obj.removeAttr('disabled');
                        $('#loaderimg').remove();
                        if (response.status == 'success') {
                            $('#error_msg').html('<span class="m-form__help" style="color:green">Saved.</span>');
                            window.location.href = base_url + 'update_things_to_do/' + response.data;
                        } else {
                            $('#error_msg').html('<span class="m-form__help" style="color:red">Please try again.</span>');
                        }
                    }
                });
            } else {
                obj.removeAttr('disabled');
                $('#loaderimg').remove();
            }
        }
    });

    function fetch_headline() {
        var flag = 0;
        var pointer = $('#points').val().trim();
        if (pointer == '') {
            flag = 1;
            $('#points').css('border', '1px solid red');
        } else {
            $('#points').css('border', '');
        }

        var city = $('#place option:selected').val().trim();

        if (city == '') {
            flag = 1;
            $('#place').css('border', '1px solid red');
        } else {
            $('#place').css('border', '');
        }

        if (flag == 0) {
            $('#article_headline').val(pointer + headline + city);
        } else {
            $('#article_headline').val('');
        }
    }

    $("body").on("change", ".upload_image", function () {
        var obj = $(this);
//        var article_id = "<?php echo $id; ?>";
        var article_id = $("#articleId").val();
        var curr_id = obj.data('imageattr');
        $('#form_' + curr_id).ajaxSubmit({
            url: base_url + 'upload_article_image',
            type: 'post',
            data: {
                article_id: article_id,
                curr_id: curr_id
            },
            dataType: 'json',
            beforeSend: function () {
                $('#image_error').remove();
            },
            error: function () {
                obj.after('<span class="m-form__help" style="color:red" id="image_error">Could not upload.</span>');
            },
            success: function (response) {
                $('#image_error').remove();
                if (response.status == 'success') {
                    $('#save_image_' + curr_id).val(response.name);
                    $('#image_preview_' + curr_id).remove();
                    obj.after('<img id="image_preview_' + curr_id + '" src="' + response.img_src + '" style="max-width: 200px; max-height: 125px;"/>');
                } else {
                    obj.after('<span class="m-form__help" style="color:red" id="image_error">Could not upload.</span>');
                }
            }
        });
    });

    $("body").on("click", "#save_article_details", function () {
        var flag = 0;
        var data = {};
        data['id'] = $("#articleId").val();
        $('.do_validation').each(function (index, value) {
            if ($(this).val().trim() == '') {
                flag = 1;
                $(this).css('border', '1px solid red');
            } else {
                if (typeof data[$(this).attr('name')] == 'undefined')
                    data[$(this).attr('name')] = [];
                data[$(this).attr('name')].push($(this).val().trim());
                $(this).css('border', '');
            }
        });

        data['things_to_do_image'] = [];
        $('.save_image').each(function (index, value) {
            data['things_to_do_image'].push($(this).val().trim());
        });

        if (flag == 0) {
            var obj = $(this);
            obj.attr('disabled', 'disabled');
            if (confirm("Sure save article details?") == true) {
                $.ajax({
                    'url': base_url + 'save_article_information',
                    'type': 'post',
                    'dataType': 'json',
                    'data': data,
                    beforeSend: function () {
                        $('#error_msg').html('');
                        $('#loaderimg').remove();
                        obj.html('<img id="loaderimg" src = "' + base_url + '/images/loading.gif"/>');
                    },
                    error: function () {
                        obj.removeAttr('disabled');
                        $('#loaderimg').remove();
                        $('#error_msg').html('<span class="m-form__help" style="color:red">Please try again.</span>');
                    },
                    success: function (response) {
                        obj.removeAttr('disabled');
                        $('#loaderimg').remove();
                        if (response.status == 'success') {
                            $('#error_msg').html('<span class="m-form__help" style="color:green">Saved.</span>');
                            window.location.reload();
                        } else {
                            $('#error_msg').html('<span class="m-form__help" style="color:red">Please try again.</span>');
                        }
                    }
                });
            } else {
                obj.removeAttr('disabled');
                $('#loaderimg').remove();
            }
        }
    });



    $("body").on("click", ".btnSaveThingsToDo", function () {


        var meta_tags = $("#meta_tags").val();
        var meta_description = $("#meta_description").val();
        var views_count = $("#views_count").val();
        var alt_text = $("#alt_text").val();
        var page_url = $("#page_url").val();
        var article_headline = $("#article_headline").val();
        var article_description = $("#article_description").val();
        var place = $("#place").val();
//        var meta_tags = $("#meta_tags").val();

        $('.frmThingsToDo').ajaxSubmit({
            url: base_url + 'save_things_to_do',
            type: 'post',
            data: {
                meta_tags: meta_tags,
                meta_description: meta_description,
                views_count: views_count,
                alt_text: alt_text,
                page_url: page_url,
                article_headline: article_headline,
                article_description: article_description,
                place: place
            },
            dataType: 'json',
            beforeSend: function () {
                $('#image_error').remove();
            },
            error: function () {
                obj.after('<span class="m-form__help" style="color:red" id="image_error">Could not upload.</span>');
            },
            success: function (response) {
                $('#image_error').remove();
                if (response.status == 'success') {
                    $('#save_image_' + curr_id).val(response.name);
                    $('#image_preview_' + curr_id).remove();
                    obj.after('<img id="image_preview_' + curr_id + '" src="' + response.img_src + '" style="max-width: 200px; max-height: 125px;"/>');
                } else {
                    obj.after('<span class="m-form__help" style="color:red" id="image_error">Could not upload.</span>');
                }
            }
        });
    });
    
    
 //    $("#start_point").select2({
 //  ajax: { 
 //   url: base_url+"traveller/getcitysearch",
 //   type: "post",
 //   dataType: 'json',
 //   delay: 250,
 //   data: function (params) {
 //    return {
 //      searchTerm: params.term // search term
 //    };
 //   },
 //   processResults: function (response) {
 //     return {
 //        results: response
 //     };
 //   },
 //   cache: true
 //  }
 // });
 
 
        $("body").on("click", ".btnSeoThings", function () { 
        $(".error").hide();
      var formdata = new FormData($('#thingstodoSEO')[0]);
        $.ajax({
            type:"POST",
            data:$('#thingstodoSEO').serialize() +"&ttdThumb="+$('.cropme > img').attr('src'),
            dataType:'JSON',
           
            url:base_url+"things_to_do/insertSeoData",
            beforeSend: function() {
                ajaxindicatorstart("Please wait.",base_url);
            },
            success:function(res){
                ajaxindicatorstop();
                if(res.status == 1){
                    alert("SEO Data for things to do successfully inserted!");
                     $("#list_of_itinerariess").trigger("click");
                     $("#thingsbtnform").css("display","block");
                     $("html, body").animate({ scrollTop: 0 }, "slow");
                     $("#thingsIds").val(res.id);
                } else if(res.status == 3){
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Please upload correct image! Profile picture is not uploaded!").delay(5000).fadeOut();
                        } else if(res == 4){
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Please upload correct image! Upload the proper size of image").delay(5000).fadeOut();
                        } else{
                    appendMsgs("#thingstodoSEO",res);
                }   
            }
        })
    })

$(".btnThingsdo").on("click",function(){
        $(".error").hide();
        fromrecord = new FormData($('#thingsbtnform')[0]);
         medicine = encodeURIComponent(CKEDITOR.instances.editor.getData() );
        fromrecord.append('article_description',medicine);
        thingsId = $("#thingsIds").val();
        $.ajax({
            type:"POST",
            data:$('#thingsbtnform').serialize() +"&ttdetailThumb="+$('.cropme2 > img').attr('src' )+'&article_description='+medicine,
            dataType:"json",
           
            url:base_url+"things_to_do/insertthingstododata",
            beforeSend: function() {
                ajaxindicatorstart("Please wait.",base_url);
            },
            success:function(res){
                ajaxindicatorstop();
                if(res == 1){
                   $("html, body").animate({ scrollTop: 0 }, "slow");
                   alert("Things to do inserted successfully!");
                   $('#thingsbtnform')[0].reset();
                   window.location.href=base_url+"things_to_do/add_things_to_do_form/"+thingsId+'?ttd=1';
                   
                   
                } else{
                    appendMsgs("#thingsbtnform",res);
                }   
            }
        })
    })
    
    
    $(".btneditThingsdo").on("click",function(){
        $(".error").hide();
        fromrecord = new FormData($('#thingsbtnform')[0]);
        medicine = encodeURIComponent( CKEDITOR.instances.editor.getData() );
        fromrecord.append('article_description',medicine);
        thingsId = $("#thingstodoIds").val();
        $.ajax({
            type:"POST",
            data:$('#thingsbtnform').serialize() +"&ttdetailThumb="+$('.cropme2 > img').attr('src' )+'&article_description='+medicine,
            dataType:"json",
           
            url:base_url+"things_to_do/editthingstododata",
            beforeSend: function() {
                ajaxindicatorstart("Please wait.",base_url);
            },
            success:function(res){
                ajaxindicatorstop();
                if(res == 1){
                   $("html, body").animate({ scrollTop: 0 }, "slow");
                   alert("Things to do updated successfully!");
                   $('#thingsbtnform')[0].reset();
                   window.location.href=base_url+"things_to_do/add_things_to_do_form/"+thingsId+'?ttd=1';
                   
                   
                } else{
                    appendMsgs("#thingsbtnform",res);
                }   
            }
        })
    })


    $(".btnEditSeoThings").on("click",function(){
        $(".error").hide();
        fromrecord = $("#editthingstodoSEO").serialize();
        $.ajax({
            type:"POST",
            data:fromrecord,
            dataType:"json",
            url:base_url+"things_to_do/editSeoData",
            beforeSend: function() {
                ajaxindicatorstart("Please wait.",base_url);
            },
            success:function(res){
                ajaxindicatorstop();
                if(res == 1){
                    alert("things to do updated!");
                     $("#list_of_itinerariess").trigger("click");
                } else{
                    appendMsgs("#editthingstodoSEO",res);
                }   
            }
        })
    })


        function appendMsgs(form,msg,errorClass){
    $('.error').remove();
    if(typeof(msg) == 'object'){
      
    $.each(msg,function(m,k){
        $(form+' input[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
        $(form+' select[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
        $(form+' textarea[name="'+m+'"]').parent('div').append('<span id="'+m+'-error" class="error">'+k+'</span>');
    });
    }
    else{
      if(errorClass != ''){
      $(form+' '+errorClass).html(msg);
      }
    }
}

    $("body").on("change",".thingstodoPublished",function(e){
        e.preventDefault();
        id = $(this).attr('id');
        vals = $(this).val();
        $.ajax({
            type:"POST",
            url:base_url+"things_to_do/updateStatus",
            data:{id:id,vals:vals},
              beforeSend: function() {
                ajaxindicatorstart("Please wait.",base_url);
            },
            success:function(res){
                ajaxindicatorstop();
               if(res == 1){
                    alert("Things to do status updated!");
                    location.reload();     
               } else{
                    alert(res);
               }
            }
        })  

    })


    $("body").on("click", ".deletethings_to_do", function () {
        var story_id = $(this).data('things_to_do_id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: base_url + 'things_to_do/delete_things_to_do',
                    data: {
                        story_id: story_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data==1) {
                            swal(
                                    'Deleted!',
                                    'Things to do deleted.',
                                    'success'
                                    )
                            $("#deletethings_to_do" + story_id).closest('tr').remove();
                            $("#stories_count").text(data.total_stories);
                            $("#stories_per_traveller").text(data.total_stories);
                            $("#stories_total_views").text(data.total_views_count);
                            
                        } else {
                            swal({
                                "title": "",
                                "text": "Error Occured in deleting Story!",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });
                        }
                    }
                });
            } else if (result.dismiss === 'cancel') {
                swal(
                        'Cancelled',
                        'Your things to do is safe :)',
                        'error'
                        )
            }
        });
    });
    
        $("body").on("click", ".deletethings_detail_to_do", function () {
        var story_id = $(this).data('things_to_do_id_detail');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: base_url + 'things_to_do/delete_delete_things_to_do',
                    data: {
                        story_id: story_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data==1) {
                            swal(
                                    'Deleted!',
                                    'Things to do deleted.',
                                    'success'
                                    )
                            $("#things_to_do_id_detail" + story_id).closest('tr').remove();
                            $("#stories_count").text(data.total_stories);
                            $("#stories_per_traveller").text(data.total_stories);
                            $("#stories_total_views").text(data.total_views_count);
                            
                        } else {
                            swal({
                                "title": "",
                                "text": "Error Occured in deleting Story!",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });
                        }
                    }
                });
            } else if (result.dismiss === 'cancel') {
                swal(
                        'Cancelled',
                        'Your things to do is safe :)',
                        'error'
                        )
            }
        });
    });
    
    
    $("#thingsformopen").on("click",function(e){
        e.preventDefault();
         $("#thingsbtnform").css("display","block");
    })

});