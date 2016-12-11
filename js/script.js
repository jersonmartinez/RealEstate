if (window.addEventListener) {
	window.addEventListener("keydown", compruebaTecla, false);
} else if (document.attachEvent) {
    document.attachEvent("onkeydown", compruebaTecla);
}

var CountKey = 0;

function compruebaTecla(evt){
    var tecla = evt.which || evt.keyCode;
    if (tecla == 17){
    	CountKey++;
    	if (CountKey == 1){
          $("#button_modal_click").click();
        } else if (CountKey > 5){
          /*Aquí cerrará la ventana modal*/
          $("#loginpop").click();
       		CountKey = 0;
       	}
    }
}

$("#StartSession").click(StartSession);
$("#GoControlPanel").click(GoControlPanel);
$("#LogoutNow").click(LogoutNow);

function GoControlPanel(){
  window.location.href="Desktop/html/";
}

function LogoutNow(){
  window.location.href="Desktop/php/logout.php";
}

function StartSession(){
  $.ajax({
    url: "php/test/login.php",
    type: "post",
    data: $("#FormLogin").serialize(),
    success: function(data){
      if (data == "OK"){
        $(".fail").hide();
          $(".ok p").html("Bienvenido, " + $("#exampleInputEmail2").val());
          $(".ok").fadeIn(1000).show();
          setTimeout(Go, 2000);
      } else {
        $(".ok").hide();
        $(".fail p").html(data);
        $(".fail").fadeIn(1000).show();
        setTimeout(fail, 2000);
      }
    }
  });
}

function fail(){
  $(".fail").delay(800).fadeOut(5000);
}

function ok(){
  $(".ok").delay(800).fadeOut(5000);
}

function Go(){
  $(".ok").delay(800).fadeOut(5000);
  window.location.href="Desktop/html/";
}

function form_suscriptions_side(){
  $.ajax({
    url: "php/InsertSuscription.php",
    type: "POST",
    data: $("#form_suscriptions_side").serialize(),
    success: function(data){
      if (data == "OK"){
        $("#email_suscription_").val("");
        $(".OpenModalSuscriptions").click();
      } else if (data == "Exists"){
        $("#email_suscription_").val("");
        $(".OMSuscriptionError").click();
      }
    }
  });
}

$("#sus_send_message").click(function(){
  $.ajax({
    url: "php/sendmail.php",
    type: "POST",
    data: $("#SendMessageSuscriptor").serialize(),
    success: function(data){
      if (data == "OK"){
        $("#sus_fullname").val("");
        $("#sus_email").val("");
        $("#sus_numberphone").val("");
        $("#sus_message").val("");
        alert("Ok");
      } else {
        alert("Ha ocurrido el siguiente error: " + data);
      }
    }
  });
});

$("#exampleInputPassword2").keypress(function(e) {
  if(e.which == 13) {
    // Acciones a realizar, por ej: enviar formulario.
    $('#StartSession').click();
   }
});

$("#email_suscription_").keypress(function(event){
  if (event.which == 13){
    $("#notifynowemail").click();
  }
});