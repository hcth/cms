$(document).ready(function(){


    // Append validation message function
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

$("#searchtext").keyup(function(){
    serText = $(this).val();
    count = $(this).val().length;
    if(count > 3){
        $.ajax({
            type:"POST",
            url:base_url+"things_to_do/getSearchRec",
            data:{searchtext:serText},
             beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
                $("#searchBox").css("display","block");
                $("#resultappend").html(res);
            }
        })
    }
})


// $("#searchititext").keyup(function(){
//     serText = $(this).val();
//     count = $(this).val().length;
//     if(count > 3){
//         $.ajax({
//             type:"POST",
//             url:base_url+"itineraries/getSearchRec",
//             data:{searchtext:serText},
//              beforeSend: function() {
//                      ajaxindicatorstart("Please wait.",base_url);
//                     },
//             success:function(res){
//             ajaxindicatorstop();
//                 $("#searchItinerariesBox").css("display","block");
//                 $("#itinerariesresultappend").html(res);
//             }
//         })
//     }
// })


$("#mainsearch").keyup(function(){
    serText = $(this).val();
    count = $(this).val().length;
    if(count > 3){
        $.ajax({
            type:"POST",
            url:base_url+"home/getSearchRec",
            data:{searchtext:serText},
             beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
                $("#searchmainsearchBox").css("display","block");
                $("#mainsearchresultappend").html(res);
            }
        })
    }
})


$("body").on("click",".subscription",function(){
  $(".alert").css("display","none")
    subEmail = $("#subscribe").val();
    $.ajax({
      type:"POST",
      url:base_url+"home/subscribeEmail",
      data:{subEmail:subEmail},
       beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".footersubsuccess").css("display","block");
            $(".footersubsuccess").html("Thank you! Email id Subscribe Successfully!.").delay(5000).fadeOut();
            $("#subscribe").val('');
          } else if(res == 2){
            $(".footersuberror").css("display","block");
            $(".footersuberror").html("Something went wrong! Enter valid email-id.").delay(5000).fadeOut();
          } else {
            $(".footersuberror").css("display","block");
            $(".footersuberror").html("Something went wrong! Email id already subscribe.").delay(5000).fadeOut();
          }
      }
    })
})


$("body").on("click","#submitpro",function(){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#submitProfilesss").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/submitProfiles",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".footertravelsuccess").css("display","block");
            $(".footertravelsuccess").html("Thank you! Travel profile inserted!.").delay(5000).fadeOut();
            $("#submitProfilesss")[0].reset();
          }  else if(res == 3) {
              $(".footertravelerror").css("display","block");
            $(".footertravelerror").html("Something went wrong! Email id is already exists.").delay(5000).fadeOut();

            } else {
           appendMsgs("#submitProfilesss",res);
          }
      }
    })
})


$("body").on("click","#changepasswords",function(){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#changepasswordss").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/submitChangePassword",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
            alert(res);
            return false;
          if(res == 1){
            $(".footertravelsuccess").css("display","block");
            $(".footertravelsuccess").html("Congratulation! Password has been updated!.").delay(5000).fadeOut();
            $("#changepasswordss")[0].reset();
          }  else if(res == 3) {
              $(".footertravelerror").css("display","block");
            $(".footertravelerror").html("Something went wrong!.").delay(5000).fadeOut();

            } else {
           appendMsgs("#changepasswordss",res);
          }
      }
    })
})



$("body").on("click","#submitfeed",function(){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#submitfeedback").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/submitfeedbacks",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".footertravelsuccess").css("display","block");
            $(".footertravelsuccess").html("Thank you! we will review your details and get back to you soon.").delay(5000).fadeOut();
            $("#submitfeedback")[0].reset();
          }  else if(res == 3) {
              $(".footertravelerror").css("display","block");
            $(".footertravelerror").html("Something went wrong! Email id is already exists.").delay(5000).fadeOut();

            } else {
           appendMsgs("#submitfeedback",res);
          }
      }
    })
})


$("body").on("click","#expertitineraries",function(){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#itinerariesExperts").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/expertitineraries",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".askoursuccess").css("display","block");
            $(".askoursuccess").html("Thank you, We have received your query and will get back to you shortly!").delay(5000).fadeOut();
            $("#itinerariesExperts")[0].reset();
          }  else if(res == 3) {
              $(".askourerror").css("display","block");
            $(".askourerror").html("Something went wrong! Email id is already exists.").delay(5000).fadeOut();

            } else {
           appendMsgs("#itinerariesExperts",res);
          }
      }
    })
})

$("body").on("click","#expertitinerariesnew",function(){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#itinerariesExpertsnew").serialize();
      $('#checkbox-error').hide();
      if ($('#itncheck').is(":checked") === false){
        $('#checkbox-error').show();
        return false;
      }
      $.ajax({
      type:"POST",
      url:base_url+"home/expertitineraries",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".askoursuccess").css("display","block");
            $(".askoursuccess").html("Thank you, We have received your query and will get back to you shortly!.").delay(5000).fadeOut();
            $("#itinerariesExpertsnew").trigger("reset");

            $("#itinerariesExperts")[0].reset();
          }  else if(res == 3) {
              $(".askourerror").css("display","block");
            $(".askourerror").html("Something went wrong! Email id is already exists.").delay(5000).fadeOut();

            } else {
           appendMsgs("#itinerariesExpertsnew",res);
          }
      }
    })
})

$("body").on("click","#signupForm",function(e){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#signup").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/signup",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".registersuccess").css("display","block");
            $(".registersuccess").html("Thank you! Registration done successfully.").delay(5000).fadeOut();
            $("#signup")[0].reset();
          }  else if(res == 3) {
              $(".registererror").css("display","block");
            $(".registererror").html("Something went wrong! Email id is already exists.").delay(5000).fadeOut();
            } else {
           appendMsgs("#signup",res);
          }
      }
    })
});


$("body").on("click","#forgotForm",function(e){
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#forgotup").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/forgotup",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();

          if(res == 1){
            $(".registersuccess").css("display","block");
            $(".registersuccess").html("Thank you! Please check your mail to change password").delay(5000).fadeOut();
            $("#forgotup")[0].reset();
          }  else if(res == 3) {
              $(".registererror").css("display","block");
            $(".registererror").html("Something went wrong! Email id is not exists.").delay(5000).fadeOut();
            } else {
           appendMsgs("#forgotup",res);
          }
      }
    })
});




$("body").on("click","#savePackage",function(e){
    e.preventDefault();
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#packageform").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"package/savepackage",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
            if(res == 1){
              //  $(".registersuccess").css("display","block");
                //$(".registersuccess").html("Thank you! We will get back to you.").delay(5000).fadeOut();
                //$("#packageform")[0].reset();
            window.location.href=base_url+"package/thankyou";

            }
            else {
                appendMsgs("#packageform",res);
            }
          }
    })
});

$("body").on("click","#savePackagess",function(e){
    e.preventDefault();
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#packageform").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"package/savepackage/1",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
            if(res == 1){
              //  $(".registersuccess").css("display","block");
                //$(".registersuccess").html("Thank you! We will get back to you.").delay(5000).fadeOut();
                //$("#packageform")[0].reset();
            window.location.href=base_url+"package/thankyou1";

            }
            else {
                appendMsgs("#packageform",res);
            }
          }
    })
});

$("body").on("click","#savePackagesss",function(e){
    e.preventDefault();
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#packageform").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"package/savepackage/2",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
            if(res == 1){
              //  $(".registersuccess").css("display","block");
                //$(".registersuccess").html("Thank you! We will get back to you.").delay(5000).fadeOut();
                //$("#packageform")[0].reset();
            window.location.href=base_url+"package/thankyou2";

            }
            else {
                appendMsgs("#packageform",res);
            }
          }
    })
});



$("body").on("click","#savePackagessss",function(e){
    e.preventDefault();
  $(".alert").css("display","none");
  $(".error").hide();
      dataRecord = $("#packageform").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"package/savepackage/3",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
            if(res == 1){
              //  $(".registersuccess").css("display","block");
                //$(".registersuccess").html("Thank you! We will get back to you.").delay(5000).fadeOut();
                //$("#packageform")[0].reset();
            window.location.href=base_url+"package/thankyou3";

            }
            else {
                appendMsgs("#packageform",res);
            }
          }
    })
});


$(document).on('click','#signupgoogleForm',function(event){
    alert(11);
   event.preventDefault();
});

$("body").on("click","#signin",function(){
  $(".alert").css("display","none");
  $(".error").hide();

   passwordLogin = $("#signpassword").val();
    if(passwordLogin != '') {
    var pass = SHA1(passwordLogin);
    $("#signpassword").val(pass);
    }

      dataRecord = $("#signform").serialize();
      $.ajax({
      type:"POST",
      url:base_url+"home/signin",
      data:dataRecord,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
            success:function(res){
            ajaxindicatorstop();
          if(res == 1){
            $(".signsuccess").css("display","block");
            $(".signsuccess").html("Thank you! Login done successfully.").delay(5000).fadeOut();
            location.reload();
          }  else if(res == 3) {
            $(".signerror").css("display","block");
            $(".signerror").html("Something went wrong! Enter valid login credential.").delay(5000).fadeOut();
            } else {
           appendMsgs("#signform",res);
          }
      }
    })
})


function ajaxindicatorstop() {
    $('#resultLoading .bg').height('100%');
    $('#resultLoading').fadeOut(500);
    $('body').css('cursor', 'default');
}

function ajaxindicatorstart(text,url) {

    if ($('body').find('#resultLoading').attr('id') != 'resultLoading') {
        $('body').append('<div id="resultLoading" style="display:none"><div><img src="'+url+'assets/images/loader.png"><div id="divtext">' + text + '</div></div><div class="bg"></div></div>');
    }
    else {
        $("#divtext").html(text)
    }

    $('#resultLoading').css({
        'width': '100%',
        'height': '100%',
        'position': 'fixed',
        'z-index': '10000000',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto'
    });

    $('#resultLoading .bg').css({
        'background': '#000000',
        'opacity': '0.7',
        'width': '100%',
        'height': '100%',
        'position': 'absolute',
        'top': '0'
    });

    $('#resultLoading>div:first').css({
        'width': '100%',
        'height': '75px',
        'text-align': 'center',
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto',
        'font-size': '16px',
        'z-index': '10',
        'color': '#ffffff'

    });

    $('#resultLoading .bg').height('100%');
    $('#resultLoading').fadeIn(1000);
    $('body').css('cursor', 'wait');
}



})
