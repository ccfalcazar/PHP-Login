$(document).ready(function(){
    $("#btn-login").click(function(){
      var username = $("#UserName").val();
      var password = $("#Password").val();

      $.ajax({
        type: "POST",
        url: "Login/PHP/validate.php",
        data: {UserName: username, Password: password},
        success: function(response){
          document.getElementById('message').innerHTML = "";  
          $("#message").prepend(response);
          
          if(response.includes("Successful"))
          {
            location.href = "welcome.php";
          }
        }
      })
    });
  });