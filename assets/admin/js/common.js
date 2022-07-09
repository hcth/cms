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


function ajaxindicatorstop() {
    $('#resultLoading .bg').height('100%');
    $('#resultLoading').fadeOut(500);
    $('body').css('cursor', 'default');
}
$(".btnSubmitrights").click(function(){
    $(".error").hide();
    var formRecord = $("#adminform").serialize();
    $.ajax({
        type: 'POST',
        url: base_url + 'adminrights/rightsadd',
        data:formRecord,
        dataType: 'JSON',
        beforeSend: function() {
                 ajaxindicatorstart("Please wait.",base_url);
                },
        success:function(response){
        
        ajaxindicatorstop();
                
        $("html, body").animate({ scrollTop: 0 }, "slow");
            if(response==1){
               
                $(".alert-success").css("display","block");
                $(".alert-success").html("Admin data inserted successfully!").delay(2000).fadeOut();
                $('#nav_seo_data').css('background','#ccc');
                setTimeout(function(){ $("#nav_trip_details").trigger("click"); }, 2000);
                document.getElementById("adminform").reset();
            } else {
                $("input[name="+response.token_name+"]").val(response.token);
                $("#error").html(response.errmsg);
                appendMsgs('#adminform',response,'.setError');
            }
        }
    });

});


$(".btneditrights").click(function(){
    $(".error").hide();
    var formRecord = $("#adminform").serialize();
    $.ajax({
        type: 'POST',
        url: base_url + 'adminrights/rightsedit',
        data:formRecord,
        dataType: 'JSON',
        beforeSend: function() {
                 ajaxindicatorstart("Please wait.",base_url);
                },
        success:function(response){
        
        ajaxindicatorstop();
      
        $("html, body").animate({ scrollTop: 0 }, "slow");
            if(response == '1'){
               
                $(".alert-success").css("display","block");
                $(".alert-success").html("Admin data updated successfully!").delay(2000).fadeOut();
                $('#nav_seo_data').css('background','#ccc');
                setTimeout(function(){ $("#nav_trip_details").trigger("click"); }, 2000);
                document.getElementById("adminform").reset();
            } else {
                $("input[name="+response.token_name+"]").val(response.token);
                $("#error").html(response.errmsg);
                appendMsgs('#adminform',response.msg,'.setError');
            }
        }
    });

});


$(document).on("click",".delete_admin",function(){
    var confirms = confirm("Are you sure you want to delete!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},
            url:base_url+"adminrights/deleteadmin",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});



$(".btnSubmitcms").click(function(){
    $(".error").hide();
    var formdata = new FormData($('#pageform').get(0));   
    pagedata = CKEDITOR.instances.editor.getData();
    formdata.append('storiesDesc',pagedata);
    $.ajax({
        type:"POST",
        data:formdata,
        url: base_url + 'cms/pageadd',
        cache: false,
        dataType:'JSON',
        contentType: false,
        processData: false,
       beforeSend: function() {
         ajaxindicatorstart("Please wait.",base_url);
        },
     success:function(response){
        
        ajaxindicatorstop();

      
        $("html, body").animate({ scrollTop: 0 }, "slow");
            if(response == '1'){               
                $(".alert-success").css("display","block");
                $(".alert-success").html("Admin data updated successfully!").delay(2000).fadeOut();
                $('#nav_seo_data').css('background','#ccc');
                setTimeout(function(){ $("#nav_trip_details").trigger("click"); }, 2000);
                document.getElementById("pageform").reset();
            } else {
                $("input[name="+response.token_name+"]").val(response.token);
                $("#error").html(response.errmsg);
                appendMsgs('#pageform',response,'.setError');
            }
        }
    });

});



$(".btneditcms").click(function(){
    $(".error").hide();
    var formdata = new FormData($('#editpageform').get(0));   
    pagedata = CKEDITOR.instances.editor.getData();
    formdata.append('storiesDesc',pagedata);
    $.ajax({
        type:"POST",
        data:formdata,
        url: base_url + 'cms/page_edit',
        cache: false,
        dataType:'JSON',
        contentType: false,
        processData: false,
       beforeSend: function() {
         ajaxindicatorstart("Please wait.",base_url);
        },
     success:function(response){
        
        ajaxindicatorstop();
      
        $("html, body").animate({ scrollTop: 0 }, "slow");
            if(response == '1'){               
                $(".alert-success").css("display","block");
                $(".alert-success").html("Admin data updated successfully!").delay(2000).fadeOut();
                $('#nav_seo_data').css('background','#ccc');
                setTimeout(function(){ $("#nav_trip_details").trigger("click"); }, 2000);
                document.getElementById("editpageform").reset();
            } else {
                $("input[name="+response.token_name+"]").val(response.token);
                $("#error").html(response.errmsg);
                appendMsgs('#editpageform',response,'.setError');
            }
        }
    });

});



$(document).on("click",".delete_cms",function(){
    var confirms = confirm("Are you sure you want to delete!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},
            url:base_url+"cms/delete_cms",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});


$(document).on("click",".active_cms",function(){
    var confirms = confirm("Are you sure you want to active!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},
            url:base_url+"cms/active_cms",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});


$(document).on("click",".delete_subscribers",function(){
    var confirms = confirm("Are you sure you want to delete!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},
            url:base_url+"communication/deletesubscriber",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});


$(document).on("click",".add_subscribers",function(){
    var confirms = confirm("Are you sure you want to active!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},

            url:base_url+"communication/subscribeit",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});



$(document).on("click",".delete_users",function(){
    var confirms = confirm("Are you sure you want to delete!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},
            url:base_url+"users/deleteuser",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});


$(document).on("click",".active_users",function(){
    var confirms = confirm("Are you sure you want to active!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},

            url:base_url+"users/activateuser",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});


$(document).on("click",".delete_realtravellers",function(){
    var confirms = confirm("Are you sure you want to Delete the traveller!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},

            url:base_url+"realtraveller/deleterealtraveller",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});



$(document).on("click",".delete_itinerariesexpert",function(){
    var confirms = confirm("Are you sure you want to Delete the Itinerariesexpert data!");
    if (confirms == true) {
        deleteId = $(this).attr('id');
        $.ajax({
            type:"POST",
            data:{deleteid : deleteId},

            url:base_url+"itinerariesexpert/delete_itinerariesexpert",
            success:function(res){
                if(res == 1){
                   window.location.reload();
                } 
            }
        });
    }
    else{
        location.reload();
    }
});



function appendMsgs(form,msg,errorClass){
  //$('.error').remove();
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
