jQuery(document).ready(function () {
  login = $(".loginsign");
  jq = "jQuery";
  
  // Login Action code
  login.on("click",function(e){
    e.preventDefault();

    passwordLogin = $("#loginPassword").val();
    if(passwordLogin != '') {  
    var pass = SHA1(passwordLogin);
    $("#loginPassword").val(pass);
    }
    formUrl = $("#loginform").attr('action');
    loginData = $("#loginform").serializeArray();
    loginData.push({name:'isAjax',value:1});
    
    $.ajax({
        type:"POST",
        data:loginData,
        url:formUrl,
        dataType:"JSON",
        success:function(res){
            if(res == 1){
                window.location.href= base_url+"admin/dashboard";
            } else if(res == 2){
                $("#loginform")[0].reset();
                $("#failureMessage").css("display","block");
                $("#failureMessage").html("Enter valid login credential");   
            } else {
               appendMsgs("#loginform",res);
            }
        }
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


  });
});