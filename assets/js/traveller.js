$(document).ready(function(){

jQuery("#realforms").click(function(e){
  e.preventDefault();
  $(".error").hide();
   passwordLogin = $("#realpassword").val();
    if(passwordLogin != '') {  
    var pass = SHA1(passwordLogin);
    $("#realpassword").val(pass);
    }

  formData = jQuery("#realform").serialize();
  $.ajax({
    type:"POST",
    url:base_url+"traveller/login",
    dataType:"JSON",
    data:formData,
     beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
      if(res == 1){
                window.location.href= base_url+"traveller/travelerInfo";
            } else if(res == 3){
                $("#realform")[0].reset();
                $(".registererror").css("display","block");
                $(".registererror").html("Enter valid login credential");   
            } else if(res == 2){
                $("#realform")[0].reset();
                $(".registererror").css("display","block");
                $(".registererror").html("Kindly verify your mail to login!");   
            }  else {
               appendMsgs("#realform",res);
            }
        }
  })
})
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

$("body").on("click","#subscribeSave",function(){
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
            $("#subscribesuccess").css('display','block');
            $("#subscribesuccess").css('font-size','13px');
            $("#subscribesuccess").html("Email id Subscribe Successfully!.").delay(5000).fadeOut();;
          } else if(res == 2){
            $("#subscribeerror").css('display','block');
            $("#subscribeerror").css('font-size','13px');
            $("#subscribeerror").html("Something went wrong! Enter valid email-id.").delay(5000).fadeOut();;
          } else {
             $("#subscribeerror").css('display','block');
             $("#subscribeerror").css('font-size','13px');
            $("#subscribeerror").html("Something went wrong! Email id already subscribe.").delay(5000).fadeOut();;
          }
      }
    })
})


$("body").on("click",".fav",function(){
   
    id = $(this).attr('id');
    type = $(this).attr('alt');
    $.ajax({
      type:"POST",
      url:base_url+"stories/favStories",
      data:{id:id,type:type},
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
          if(res == 1){
            if(type=="like"){
                $(".summary_container a i").removeClass('fa-heart-o');
                $(".summary_container a i").addClass('fa-heart');  
                $("#"+id).attr('alt','dislike');
                $("#"+id).addClass('added_favorite');
                $('.d-block').text('Un-fav');
            } else{
                $(".summary_container a i").addClass('fa-heart-o');
                $(".summary_container a i").removeClass('fa-heart');  
              $("#"+id).removeClass('added_favorite');
               $("#"+id).attr('alt','like');
               $('.d-block').text('fav');
            }
            //location.reload();
          } 
      }
    })
})

$("body").on("click","#commentbtn",function(){
    $record = $("#commentid").serialize();
    $.ajax({
      type:"POST",
      url:base_url+"stories/addcomment",
      data:$record,
      dataType:"json",
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
          if(res == 1){
            $(".error").remove();
            $("#commentsuccess").css('display','block');
            $("#commentsuccess").html("Thank you! Your comment will appear soon!").delay(5000).fadeOut();
            $("#commentid")[0].reset();
          } 
         else if(res == 2){
            $(".error").remove();
            $("#commenterror").css('display','block');
            $("#commenterror").html("Kindly login first.").delay(5000).fadeOut();
            $("#commentid")[0].reset();
          } else {
            appendMsgs("#commentid",res);
          }
      }
    })
})

$("body").on("click",".likeitineraries",function(){
        id = $(this).attr('id');
    type = $(this).attr('alt');
    $.ajax({
      type:"POST",
      url:base_url+"itineraries/favItineraries",
      data:{id:id,type:type},
      beforeSend: function() {
                     ajaxindicatorstart("Please wait.",base_url);
                    },
                    success:function(res){
                        ajaxindicatorstop();
          if(res == 1){
            if(type=="like"){
                $("#"+id+" i").removeClass('fa-heart-o');
                $("#"+id+" i").addClass('fa-heart');  
                $("#"+id).attr('alt','dislike');
              
            } else{
                $("#"+id+" i").addClass('fa-heart-o');
                $("#"+id+" i").removeClass('fa-heart');  
               $("#"+id).attr('alt','like');
            }
            //location.reload();
          } 
      }
    })
})


$("body").on("click","#loginclass",function(){
       alert("Something went wrong! Kindly login first.");
})

$("body").on("click",".bucketLists",function(){
        itinerariesId = $(this).attr('id');
        type = $(this).attr('alt');
        title = $(this).attr('title');
        
        if(title == undefined){
            tables = 1;
        } else {
            tables = 2;
        }
        $.ajax({
          type:"POST",
          url:base_url+"itineraries/favBucketList",
          data:{id:itinerariesId,type:type,tables:tables},
          beforeSend: function() {
                         ajaxindicatorstart("Please wait.",base_url);
                        },
                        success:function(res){
                            ajaxindicatorstop();
              if(res == 1){
                if(type=="like"){
                    $(".add_in_bucket").hide();
                    $(".added_in_bucket").show();
                } else{
                    $(".added_in_bucket").hide();
                    $(".add_in_bucket").show();
                }
                //location.reload();
              } 
          }
        })
})


})