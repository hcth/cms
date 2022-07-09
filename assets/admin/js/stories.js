$(document).ready(function () {
    $('#summernote').summernote({
        height: 200
    });

    $("body").on("click", ".btnCancelStories", function () {
        location.href = base_url + 'stories';
    });

    $("body").on("click", ".deleteStories", function () {
        var story_id = $(this).data('story_id');
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
                    url: base_url + 'stories/deleteStories',
                    data: {
                        story_id: story_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data==1) {
                            swal(
                                    'Deleted!',
                                    'Story deleted.',
                                    'success'
                                    )
                            $("#deleteStory" + story_id).closest('tr').remove();
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
                        'Your story is safe :)',
                        'error'
                        )
            }
        });
    });
    
    
     $("body").on("click", ".deleteComment", function () {
        var story_id = $(this).data('story_id');
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
                    url: base_url + 'stories/deleteComment',
                    data: {
                        story_id: story_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data==1) {
                            swal(
                                    'Deleted!',
                                    'Comment deleted.',
                                    'success'
                                    )
                            $("#deleteStory" + story_id).closest('tr').remove();
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
                        'Your story is safe :)',
                        'error'
                        )
            }
        });
    });
    
    

    $("body").on("click", ".btnSubmitStories", function () {
        $(".error").hide();
      var formdata = new FormData($('#frmTravelStoriess')[0]);
       medicine = encodeURIComponent(CKEDITOR.instances.editor.getData());
        formdata.append('storiesDesc',medicine);
	console.log(medicine);
                $.ajax({
                    type:"POST",
                    data:$('#frmTravelStoriess').serialize() +"&storiesThumb="+$('.cropme > img').attr('src')+"&storiesDesc="+medicine,
                    url:base_url+"stories/saveStories",
                    dataType:'JSON',
                    
                   beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        if(res == 1){
                           // window.location.href= base_url+"traveler/viewtraveler";
                            $(".alert-success").css("display","block");
                            alert("Story submitted succesfully, your story will appear on the webiste post admin approval");
                            $("#frmTravelStoriess")[0].reset();
                            window.location.href = base_url+'stories/addstories';
                        }  else if(res == 3){
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Please upload correct image! Profile picture is not uploaded!").delay(5000).fadeOut();
                        } else if(res == 4){
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Please upload correct image! Upload the proper size of image").delay(5000).fadeOut();
                        } else { 
                           appendMsgs("#frmTravelStoriess",res);
                        }
                    }
                })


    });

    $("body").on("click", ".btnEditSubmitStories", function () {
        $(".error").hide();
      var formdata = new FormData($('#frmTravelStoriess')[0]);
       medicine = encodeURIComponent(CKEDITOR.instances.editor.getData());
        formdata.append('storiesDesc',medicine);
                $.ajax({
                    type:"POST",
                    data:$('#frmTravelStoriess').serialize() +"&storiesThumb="+$('.cropme > img').attr('src')+"&storiesDesc="+medicine,
                    url:base_url+"stories/saveeditStories",
                    dataType:'JSON',
                    
                    beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        if(res == 1){
                           // window.location.href= base_url+"traveler/viewtraveler";
                            $(".alert-success").css("display","block");
                            alert("Service Updated!");
                           // $("#frmTravelStoriess")[0].reset();
                            window.location.href = base_url+'stories/addstories';
                        }  else if(res == 3){
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Something went wrong! Profile picture is not uploaded!").delay(5000).fadeOut();
                        } else if(res == 4){
                            $(".alert-danger").css("display","block");
                            $(".alert-danger").html("Something went wrong! Upload the proper size of image").delay(5000).fadeOut();
                        } else { 
                           appendMsgs("#frmTravelStoriess",res);
                        }
                    }
                })
    });


    $("body").on("change",".storiesPublished",function(e){
        e.preventDefault();
        id = $(this).attr('id');
        vals = $(this).val();
        
        if(vals == '2'){
            statusName = "Unpublished";
        } else if(vals == '1'){
            statusName = "Published";
        } else {
            statusName = "Waiting for Admin Approval";
        }

        $.ajax({
            type:"POST",
            url:base_url+"stories/updateStoriesStatus",
            data:{id:id,vals:vals},
           beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
               if(res == 1){
                    alert("Stories "+statusName+" Succesfully !");
                    location.reload();     
               } else{
                    alert(res);
               }
            }
        })  

    })
    
        $("body").on("change",".commentPublished",function(e){
        e.preventDefault();
        id = $(this).attr('id');
        vals = $(this).val();
        $.ajax({
            type:"POST",
            url:base_url+"stories/updateCommentStatus",
            data:{id:id,vals:vals},
           beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
               if(res == 1){
                    alert("Comment status updated!");
                    location.reload();     
               } else{
                    alert(res);
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

     $("#destination").select2({
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




});
