jQuery(document).ready(function () {
  trvaler = $(".saveProfile");
  edittrvaler = $(".editProfile");
  
  // state change city frunction

  $("#state").on("change",function(){
    stateVal = $(this).val();

        $.ajax({
        type:"POST",
        data:{state:stateVal},
        url:base_url+"traveller/getCityFromState",
       eforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
            $("#city").html(res);
        }
    })
  })

  // Login Action code
  trvaler.on("click",function(e){
    e.preventDefault();
    var formdata = new FormData($('#travelProfile')[0]);

    $.ajax({
        type:"POST",
        data:$('#travelProfile').serialize() +"&realtravthumb="+$('.cropme > img').attr('src'),
        url:base_url+"traveller/travelerInsert",
       
          beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            if(res == 1){
               // window.location.href= base_url+"traveler/viewtraveler";
                $(".alert-success").css("display","block");
                $(".alert-success").html("Real traveler Added!").delay(5000).fadeOut();
                $("#travelProfile")[0].reset();
                window.location.href=base_url+"traveller/viewtraveler";
            }  else if(res == 3){
                $(".alert-danger").css("display","block");
                $(".alert-danger").html("Something went wrong! Profile picture is not uploaded!").delay(5000).fadeOut();
            } else if(res == 4){
                $(".alert-danger").css("display","block");
                 $(".alert-danger").html("Something went wrong! Upload the proper size of image").delay(5000).fadeOut();
            } else { 
               appendMsgs("#travelProfile",res);
            }
        }
    })
  });

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


  // Edit  Action code
  edittrvaler.on("click",function(e){
    e.preventDefault();
    var formdata = new FormData($('#edittravelProfile')[0]);

    $.ajax({
        type:"POST",
        data:$('#edittravelProfile').serialize() +"&realtravthumb="+$('.cropme > img').attr('src'),
        url:base_url+"traveller/traveleredit",
        dataType:'JSON',
        
          beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            if(res == 1){
                $(".alert-success").css("display","block");
                $(".alert-success").html("Real traveler Edited!").delay(5000).fadeOut();
                window.location.href=base_url+"traveller/viewtraveler";
            }  else if(res == 3){
                $(".alert-danger").css("display","block");
                $(".alert-danger").html("Something went wrong! Profile picture is not uploaded!").delay(5000).fadeOut();
            }  else if(res == 4){
                $(".alert-danger").css("display","block");
                 $(".alert-danger").html("Something went wrong! Upload the proper size of image").delay(5000).fadeOut();
            } else { 
               appendMsgs("#edittravelProfile",res);
            }
        }
    })
  });


  $(".deletereal_travellerss").on("click",function(){
    var confirms = confirm("Are you sure you want to delete!");
    if (confirms == true) {
        deleteId = $(this).attr('id');

        $.ajax({
        type:"POST",
        data:{deleteid : deleteId},
        url:base_url+"traveller/deleteRecord",
        success:function(res){
            if(res == 1){
               window.location.reload();
            }  else if(res == 3){
                $(".alert-danger").css("display","block");
                $(".alert-danger").html("Something went wrong! Profile picture is not uploaded!");
            } else { 
               appendMsgs("#edittravelProfile",res);
            }
        }
    })
    } 
  })

    $(".profilestatus").on("change",function(){
      vals = $(this).val();
      id = $(this).attr('id');
       if(vals == '2'){
            statusName = "Published";
        } else if(vals == '0'){
            statusName = "Unpublished";
        } else {
            statusName = "Waiting for Admin Approval";
        }
      $.ajax({
        type:"POST",
        url:base_url+"traveller/profilestatus",
        data:{statusValue:vals,id:id},
       beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
                         alert("Real Traveller "+statusName+" Succesfully !");
          location.reload();
        }
      })

  })


 $("#places_travelled").select2({
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