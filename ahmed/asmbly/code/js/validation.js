$(function(){
    $('.form__text--tx').on('input', function() {
      var input=$(this);
      var is_filled=input.val();
      if(is_filled){input.removeClass("--invalid").addClass("--valid");}
      else{input.removeClass("--valid").addClass("--invalid");}
    });
  
    $('.form__text--em').on('input', function() {
      var input=$(this);
      var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      var is_email=re.test(input.val());
      if(is_email){input.removeClass("--invalid").addClass("--valid");}
      else{input.removeClass("--valid").addClass("--invalid");}
    });
  
    $('.form__text--ta').keyup(function(event) {
      var input=$(this);
      var content=$(this).val();
      console.log(content);
      if(content){input.removeClass("--invalid").addClass("--valid");}
      else{input.removeClass("--valid").addClass("--invalid");}	
    });
  
    $(".form__submit").click(function(event){
      var form_data=$(".form").serializeArray();
      var error_free=true;
      for (element in form_data){
        var element=$(".form__text");
        var valid=element.hasClass("--valid");
        var error_element=$("span", element.parent());
        if (!valid){error_element.removeClass("--error").addClass("--error-show"); error_free=false;}
        else{error_element.removeClass("--error-show").addClass("--error");}
      }
      if (!error_free){
        event.preventDefault(); 
      }
      else{
        alert('Thanks for the message, I will get back to you soon.');
      }
    });
  });