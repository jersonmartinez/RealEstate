window.onload = function(){
	$("#QuizePonerleID").click();
}

function GoMainNow(){
	window.open(window.location.protocol + "//" + window.location.host + "/RealEstate", '_blank');
}

function SubirFotos(){	
	var archivos = document.getElementById("archivos");
	var archivo = archivos.files;
	
	var archivos = new FormData();
	
	for(i=0; i<archivo.length; i++){
		archivos.append('archivo'+i,archivo[i]);
	}
	
	$.ajax({
		url:'build/upload_img.php', 
		type:'POST',
		contentType:false,
		data:archivos, 
		processData:false, 
		cache:false 
	}).done(function(msg){
		MensajeFinal(msg);
	});
}

function MensajeFinal(msg){
	$('.mensage').html(msg);
	$('.mensage').show('slow');

	show_img_tmp();
}

function NewMessage(msg){
	$('.mensage').html(msg);
	$('.mensage').show('slow');
}

function show_img_tmp(){
	$.ajax({
		url:'build/show_tmp_img.php', 
		contentType:false,
		data:archivos, 
		processData:false, 
		cache:false 
	}).done(function(msg){
		NewMessage(msg);
	});
}

function OpenModalChangeIMG(){
	$(".change-img_perfil").click();
}

function upload_img_perfil(){
	var formData = new FormData($("#Form_SendImgPerfil")[0]);

	$.ajax({
    	url: "build/upload_img_perfil.php",
    	type: "POST",
    	data: formData,
    	contentType: false,
    	processData: false,
    	success: function(data){
	      OutMessageImgPerfil(data);
    	}
  	});
}

//This is to upload the perfil image of the agent.
function upload_agent_img_perfil(){
	var newformData = new FormData($("#NewForm_SendAgentImgPerfil")[0]);

	$.ajax({
    	url: "build/upload_agent_img_perfil.php",
    	type: "POST",
    	data: newformData,
    	contentType: false,
    	processData: false,
    	success: function(data){
			$(".show_agent_img_perfil").html(data);
			$(".show_agent_img_perfil").delay(800).fadeIn(2000);
    	}
  	});
}

var global_url_img;

function OutMessageImgPerfil(msg){
	$('.show_img_perfil').html(msg);
	$(".show_img_perfil").delay(800).fadeIn(2000);
	global_url_img = msg;
}

function ListenerClickOkImgPerfil(){
	if (global_url_img == ""){
		alert("No pasa nada");
	} else {
		$(".add_new_img_perfil").html(global_url_img);
		$("#ChangeImgPerfil").click();
		setTimeout(OpenA, 500);
	}
}

function OpenA(){
	$(".dpd-menu-open").click();
}

function addAgentNow(){
	$(".add-agent-now").click();
}

function RegisterAgent(){
	$("#names").val($("#id_names").val());
	$("#lastnames").val($("#id_lastnames").val());

	$("#email_address").val($("#id_email_address").val());
	$("#location").val($("#id_location").val());
	$("#description").val($("#id_description").val());

	$("#phone_claro").val($("#id_phone_claro").val());
	$("#phone_movistar").val($("#id_phone_movistar").val());

	$("#path_img").val($("#id_path_img").val());

	$.ajax({
	    url: "build/RegisterAgent.php",
	    type: "POST",
	    data: $("#AllDataAgents").serialize(),
	    success: function(data){
	    	if (data == "OK"){
		    	$("#id_names").val("");
		    	$("#id_lastnames").val("");
		    	$("#id_email_address").val("");
		    	$("#id_location").val("");
		    	$("#id_description").val("");
		    	$("#id_phone_claro").val("");
		    	$("#id_phone_movistar").val("");
		    	$("#id_path_img").val("");

		    	$("#names").val("");
		    	$("#lastnames").val("");
		    	$("#email_address").val("");
		    	$("#location").val("");
		    	$("#description").val("");
		    	$("#phone_claro").val("");
		    	$("#phone_movistar").val("");
		    	$("#path_img").val("");

		    	$(".show_agent_img_perfil").html("");

		    	$("#AddAgent").click();

		    	ReloadAgentList();
		    	ReloadAgentSelect();

	    	}
	    }
  	});
}

function ReloadAgentList(){
	$.ajax({
	    url: "build/Agent_list.php",
	    success: function(data){
   			$("#tbody_listAgents").html(data);    		
	    }
  	});
}

function ReloadAgentSelect(){
	$.ajax({
	    url: "build/SelectAgentList.php",
	    success: function(data){
   			$("#select_agent").html(data);    		
	    }
  	});
}

function OnItemClickTrAgent(value){
	var names 			= value.getElementsByTagName("td")[0].innerHTML;
	var lastnames 		= value.getElementsByTagName("td")[1].innerHTML;
	var phone_claro 	= value.getElementsByTagName("td")[2].innerHTML;
	var phone_movistar 	= value.getElementsByTagName("td")[3].innerHTML;
	var email 			= value.getElementsByTagName("td")[4].innerHTML;
	var location 		= value.getElementsByTagName("td")[5].innerHTML;

	$("#ValueAgentByEmail").val(email);

	$(".show-optionsAgent").click();
	//$("#MyAgentNames").html(names + " " + lastnames);

	$.ajax({
	    url: "build/ShowDataAgentByEmail.php",
	    type: "POST",
	    data: $("#ShowDataAgentByEmail").serialize(),
	    success: function(data){
   			$(".ContentDataAgent").html(data); 
   			var nameAgent = $("#show_names").val().split(" ")[0];
   			var lastnameAgent = $("#show_lastnames").val().split(" ")[0];
   			$("#MyAgentNames").html("Información del agente " + nameAgent.charAt(0).toUpperCase() + nameAgent.slice(1) + " " + lastnameAgent.charAt(0).toUpperCase() + lastnameAgent.slice(1));   		
	    }
  	});

	//Aquí continuamos, agrega ahora un formulario en el modal, ajax, php, opciones de eliminar y actualizar.
}

function CallWindowModalDeleteAgent(){
	$(".deleteAgentmodal").click();
}

function upload_agent_img_perfil_change(){
	var newformData = new FormData($("#Change_SendAgentImgPerfil")[0]);

	$.ajax({
    	url: "build/upload_agent_img_perfil.php",
    	type: "POST",
    	data: newformData,
    	contentType: false,
    	processData: false,
    	success: function(data){
			$(".show_agent_img_perfil_change").html(data);
			$(".show_agent_img_perfil_change").delay(800).fadeIn(2000);
    	}
  	});
}

function UpdateAgentNow(){
	$("#true_names").val($("#show_names").val());
	$("#true_lastnames").val($("#show_lastnames").val());

	$("#true_email_address").val($("#show_email_address").val());
	$("#true_location").val($("#show_location").val());
	$("#true_description").val($("#show_description").val());

	$("#true_phone_claro").val($("#show_phone_claro").val());
	$("#true_phone_movistar").val($("#show_phone_movistar").val());

	$("#true_path_img").val($("#show_path_img").val());

	$.ajax({
	    url: "build/UpdateAgent.php",
	    type: "POST",
	    data: $("#AllDataAgentsUpdate").serialize(),
	    success: function(data){
	    	if (data == "OK"){
		    	$("#ShowOptionsAgent").click();
		    	ReloadAgentList();

		    	setTimeout(function(){
		    		window.location.reload();
	    		}, 500);
	    	}
	    }
  	});
}

function DeleteAgent(){
	$.ajax({
	    url: "build/DeleteAgent.php",
	    type: "POST",
	    data: $("#IDAgentsDelete").serialize(),
	    success: function(data){
	    	if (data == "OK"){
	    		$("#DeleteAgentModal").click();
	    		setTimeout(function(){
		    		$("#ShowOptionsAgent").click();
	    		}, 300);
		    	ReloadAgentList();
		    	setTimeout(function(){
		    		window.location.reload();
	    		}, 500);
	    	}
	    }
  	});
}

function OptionsImageSelected(value){
	//Verificar esto en el servidor. Considero que hay que cambiar el valor.
	var newData = value.src.split("/");

	$("#MyImgSelectedOptions").html(newData[8]);
	$("#MyNameImgDelete").val(newData[8]);

	document.getElementById("ImgAmplia").src = value.src;
	
	$(".ImgSelectedOptions").click();
}

function DeleteImgWriteArticle(){
	$.ajax({
	    url: "build/DeleteImgWriteArticle.php",
	    type: "POST",
	    data: $("#NameImgToDelete").serialize(),
	    success: function(data){
	    	if (data == "OK"){
	    		$("#ImgSelectedOptions").click();
	    		show_img_tmp();
	    	}
	    }
  	});
}

function ConvertToDolar(value){
	var result = 0.0,
		valor_dolar = $(value).val(),
		valor_cordoba = $("#cantidad_cordoba").val(),
		conversion = $("#cantidad_dolar").val();

	if (conversion != ""){
		result = (valor_dolar * conversion);
		$("#cantidad_cordoba").val(result);
	}
}

function ConvertToCordoba(value){
	var result = 0.0,
		valor_dolar = $(value).val(),
		valor_cordoba = $("#cantidad_cordoba").val(),
		conversion = $("#cantidad_dolar").val();

	if (conversion != ""){
		result = (valor_dolar / conversion);
		$("#precio_dolar").val(result);
	}
}

function ConvertToCD(value){
	var result = 0.0,
		Top = $("#precio_dolar").val(),
		Iam = $(value).val(),
		Bottom = $("#cantidad_cordoba").val();

	if (Top != "" && Bottom == ""){
		result = (Top * Iam);
		$("#cantidad_cordoba").val(result);
	} else if (Bottom != "" && Top == "") {
		result = (Bottom * Iam);
		$("#precio_dolar").val(result);
	}
}

function PreviewArticle(){

	$("#art_title").val($("#title_publish").val());
	$("#art_content").val($(".trumbowyg-editor").html());
	$("#art_price").val($("#precio_dolar").val());
	$("#art_department").val($("#departamento_local").val());
	$("#art_city").val($("#ciudad_local").val());
	$("#art_local_address").val($("#direccion_local").val());
	
	$("#art_agent").val($("#select_agent").val());
	$("#art_business_type").val($("#select_business_type").val());
	$("#art_property_type").val($("#select_property_type").val());
	$("#art_property_state").val($("#select_property_state").val());
	$("#art_bed_room").val($("#select_bed_room").val());
	$("#art_living_room").val($("#select_living_room").val());
	$("#art_parking").val($("#select_parking").val());
	$("#art_kitchen_now").val($("#select_kitchen_now").val());

	if ($("#art_title").val() == "" || $("#art_content").val() == "" || $("#art_price").val() == "" || 
		$("#art_department").val() == "" || $("#art_city").val() == "" || $("#art_local_address").val() == "" ||
		$("#art_agent").val() == "" || $("#art_business_type").val() == "" || $("#art_property_type").val() == "" || 
		$("#art_property_state").val() == "" || $("#art_bed_room").val() == "" || $("#art_living_room").val() == "" || 
		$("#art_parking").val() == "" || $("#art_kitchen_now").val() == ""){
		$(".RelleneTodosLosDatos").click();
	} else {
		$.ajax({
		    url: "build/AddArticle.php",
		    type: "POST",
		    data: $("#ArtSendData").serialize(),
		    success: function(data){
		    	if (data == "OK"){
		    		$("#MyInfoArtAddYes").html("Post: " + $("#art_title").val());
		    		$(".InfoArtAddYes").click();
		    	}
		    }
	  	});
	}
}

function AddNewPropertyType(){
	$(".AddNewTypePropertyNow").click();
}

$("#SendDataTagPropertyType").submit(function( event ) {
  TestSendData();
  $("#writeTagProperty_type").val("");
  event.preventDefault();
});

// Esto comentado sin funciona!.
// $("#writeTagProperty_type").unbind("keyup").keyup(function(e){ 
//     var code = e.which; // recommended to use e.which, it's normalized across browsers
    
//     if(code==13){
//         if ($("#writeTagProperty_type").val() == ""){
//         	alert("Debes ingresar algun dato!.");
//         } else {
//         	$(".setDataTagPropertyType").html($(".setDataTagPropertyType").html() + "<span class='label label-primary' style='font-size: 16px; margin: 5px 10px 0 0; display: inline-table;' />" + $("#writeTagProperty_type").val() + "</span>");
//         }
//         return false;
//     }
// });

function TestSendData(){
	$.ajax({
	    url: "build/PropertyTypeEnterData.php",
	    type: "POST",
	    data: $("#SendDataTagPropertyType").serialize(),
	    success: function(data){
   			$(".setDataTagPropertyType").html(data);    		
	    }
  	});
}

function DeleteTagPropertyType(value){
	$("#DelTagPT").val(value);

	$.ajax({
	    url: "build/PropertyTypeDel.php",
	    type: "POST",
	    data: $("#SendDataDeletePropertyType").serialize(),
	    success: function(data){
   			$(".setDataTagPropertyType").html(data);    		
	    }
  	});
}

function getPropiertyTypeBox(){
	$.ajax({
		url:'build/getPropiertyTypeBox.php', 
		contentType:false,
		data:archivos, 
		processData:false, 
		cache:false 
	}).done(function(msg){
		$("#select_property_type").html(msg);
	});
}

//Pendiente... -- Ya está solucionado!.

function OnItemClickTrArticle(value){
	var id_art 		= value.getElementsByTagName("td")[0].innerHTML;
	var title 		= value.getElementsByTagName("td")[1].innerHTML;
	var price 		= value.getElementsByTagName("td")[2].innerHTML;
	var city 		= value.getElementsByTagName("td")[3].innerHTML;
	var names_agent = value.getElementsByTagName("td")[4].innerHTML;
	var dsec 		= value.getElementsByTagName("td")[5].innerHTML;

	$("#ValueArticleByID").val(id_art);

	$(".show-optionsArticle").click();
	$("#InsertTitleArticle").val(title);

	$.ajax({
	    url: "build/ShowDataArticleByID.php",
	    type: "POST",
	    data: $("#ShowDataArticleByID").serialize(),
	    success: function(data){
   			$("#trumbowyg-demo").text(data);    		
   			$(".trumbowyg-editor").html(data);    		
	    }
  	});
  	
  	LoadImgArticle();
  	ShowDataArtAll();
}

//Ejecutando el cargado de la imágenes.
function LoadImgArticle(){
	$.ajax({
	    url: "build/showImgArticleID.php",
	    type: "POST",
	    data: $("#ShowDataArticleByID").serialize(),
	    success: function(data){
   			NewMessage(data); 		
	    }
  	});
}

function SelectImgArticle(value){
	//Verificar esto en el servidor. Considero que hay que cambiar el valor.
	var newData = value.src.split("/");

	$("#MySelectImgArticle").html(newData[8]);
	$("#MynImgDel").val(newData[8]);

	document.getElementById("ImgArtBig").src = value.src;
	
	$(".SelectImgArticle").click();
}

function DelImgArtNow(){
	$("#newidimgdel").val($("#ValueArticleByID").val());

  	$.ajax({
	    url: "build/DelImgArtNow.php",
	    type: "POST",
	    data: $("#SendImgtoDeleteNow").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#SelectImgArticle").click();
	    		LoadImgArticle();
	    	}		
	    }
  	});
  	$(".exit_default").click();
}

function UploadPhotos(){	
	var archivos = document.getElementById("archivos");
	var archivo = archivos.files;
	
	var archivos = new FormData();
	
	for(i=0; i<archivo.length; i++){
		archivos.append('archivo'+i,archivo[i]);
	}
	
	$.ajax({
		url:'build/UploadPhotos.php', 
		type:'POST',
		contentType:false,
		data:archivos, 
		processData:false, 
		cache:false 
	}).done(function(msg){
		LoadImgArticle();
	});
}

function ShowDataArtAll(){
	$.ajax({
	    url: "build/ShowDataArtAll.php",
	    type: "POST",
	    data: $("#ShowDataArticleByID").serialize(),
	    success: function(data){
			$("#step3-2").html(data);
	    }
  	});
}

function UpdateListItemArt(){
	$("#Send_ValueArticleByID").val($("#ValueArticleByID").val());
	
	$("#Send_InsertTitleArticle").val($("#InsertTitleArticle").val());
	$("#Send_trumbowyg-demo").val($("#trumbowyg-demo").val());
	
	$("#Send_precio_dolar").val($("#precio_dolar").val());
	$("#Send_departamento_local").val($("#departamento_local").val());
	$("#Send_ciudad_local").val($("#ciudad_local").val());
	$("#Send_direccion_local").val($("#direccion_local").val());
	
	$("#Send_select_agent").val($("#select_agent").val());
	
	$("#Send_select_business_type").val($("#select_business_type").val());
	$("#Send_select_property_type").val($("#select_property_type").val());
	$("#Send_select_property_state").val($("#select_property_state").val());
	
	$("#Send_select_bed_room").val($("#select_bed_room").val());
	$("#Send_select_living_room").val($("#select_living_room").val());
	$("#Send_select_parking").val($("#select_parking").val());
	$("#Send_select_kitchen_now").val($("#select_kitchen_now").val());

	$("#Send_coord_latitude").val($("#coord_latitude").val());
	$("#Send_coord_longitude").val($("#coord_longitude").val());

	$.ajax({
	    url: "build/UpdateAllArticle.php",
	    type: "POST",
	    data: $("#SendAllDataUpdateArt").serialize(),
	    success: function(data){
			if (data == "OK"){
				$(".InfoArtUpdateYes").click();
			}
	    }
  	});

}

function DelArtModal(){
	$(".DelArtModal").click();
}

function DelArtModalImage(){
	$(".DelArtModalImage").click();
}

function DelArtNow(){
  	$.ajax({
	    url: "build/DelArtModal.php",
	    type: "POST",
	    data: $("#ShowDataArticleByID").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#DelArtModal").click();
	    		setTimeout(function(){
	    			window.location.href="./articles";
	    		}, 100);
	    	}		
	    }
  	});
}

function ChgEmailModal(value){
	if (value == "close"){
		$("#MenuConfig").click();
	}
	$(".ChgEmail").click();
}

function ApplyChgEmail(){
	$.ajax({
	    url: "build/ApplyChgEmail.php",
	    type: "POST",
	    data: $("#ChgEAdressFrom").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#ChgEmail").click();
	    		setTimeout(function(){
	    			$("#h5_email").html($("#new_email_address").val());
	    			$("#pEmail_user").html($("#new_email_address").val());
	    			$("#new_email_address").val("");
	    			OpenA();
	    		}, 100);
	    	}		
	    }
  	});
}

function ChgUserPerfil(value){
	if (value == "close"){
		$("#MenuConfig").click();
	}
	$(".ChgUserPerfil").click();
}

function ApplyChgUserName(){
	$.ajax({
	    url: "build/ApplyChgUserName.php",
	    type: "POST",
	    data: $("#ChgUserPerfilForm").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#ChgUserPerfil").click();
	    		setTimeout(function(){
	    			$("#h5_username").html($("#new_user_perfil").val());
	    			$(".username").html($("#new_user_perfil").val());

	    			$(".dpd-menu-open").html("<i class='fa fa-user fa-2x' style='margin-right: 10px'></i>" + $("#new_user_perfil").val() + "<span class='caret'></span>");
	    			$("#new_user_perfil").val("");
	    			OpenA();
	    		}, 100);
	    	} else if (data == "Fail") {
	    		$(".Incrustar").html("<div class='row'><div class='col-xs-12'><br/><div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Advertencia!</strong> Está intentando agregar un nombre de usuario que ya existe, intente con otro.</div></div></div>");
	    	}
	    }
  	});
}

function MenuConfig(){
	$(".MenuConfig").click();
}

function ChgPasswordModal(value){
	if (value == "close"){
		$("#MenuConfig").click();
	}
	$(".ChgPasswordModal").click();
}

function ApplyChgPW(){
	$.ajax({
	    url: "build/ApplyChgPW.php",
	    type: "POST",
	    data: $("#ChgPassPerfilForm").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#ChgPasswordModal").click();
	    		$("#new_passwordUser").val("");
	    		$("#repeat_new_passwordUser").val("");
	    	} else {
	    		$(".Incrustar_password").html("<div class='row'><div class='col-xs-12'><br/><div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Advertencia!</strong>," + " " + data + "</div></div></div>");
	    	} 
	    }
  	});
}

function CreateUserNow(){
	$(".CreateUserNow").click();
}

function CreateTheUser(){
	$.ajax({
	    url: "build/CreateTheUser.php",
	    type: "POST",
	    data: $("#SendEnterNewUser").serialize(),
	    success: function(data){
   			if (data == "OK"){
	    		$("#CreateUserNow").click();
	    		$("#Enter_UserName").val("");
	    		$("#Enter_Email").val("");
	    		$("#Enter_PassWord").val("");
	    		$("#Enter_RepeatPassWord").val("");
	    	} else {
	    		$(".Incrustar_User").html("<div class='row'><div class='col-xs-12'><br/><div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Advertencia!</strong>," + " " + data + "</div></div></div>");
	    	} 
	    }
  	});
}

function OnItemClickTrUser(value){
	var username 		= value.getElementsByTagName("td")[0].innerHTML;
	var email 			= value.getElementsByTagName("td")[1].innerHTML;
	var date_log 		= value.getElementsByTagName("td")[2].innerHTML;
	var date_log_unix 	= value.getElementsByTagName("td")[3].innerHTML;
	var password 		= value.getElementsByTagName("td")[4].innerHTML;

	$(".Details_username").click();

	$("#MyDetails_username").html("Usuario / "+username);

	$("#DataDel_UserName").val(username);
	$("#nombre_de_usuario").val(username);

	$("#DataDel_Email").val(email);
	$("#DataDel_Publish").val(date_log);

	if ($("#objt_username").val() == username){
		$(".modal_footer_ya").html("<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>");
	} else {
		$(".modal_footer_ya").html("<button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button><button type='button' class='btn btn-primary' onclick='javascript: OpenModalDeleteLie();'>Eliminar usuario</button>");
	}

	$.ajax({
	    url: "build/ShowImgPerfilUser.php",
	    type: "POST",
	    data: $("#ShowImgPerfilUser").serialize(),
	    success: function(data){
   			$(".insert_img_user").html(data);    		
	    }
  	});
}

function OpenModalDeleteLie(){
	$(".OpenModalDeleteLie").click();
}

function DelUserShure(){
	$.ajax({
	    url: "build/DelUserShure.php",
	    type: "POST",
	    data: $("#ShowImgPerfilUser").serialize(),
	    success: function(data){
   			if (data == "OK"){
   				$("#OpenModalDeleteLie").click();
	   			setTimeout(function(){
	   				$("#Details_username").click();
	   			}, 200); 

	   			setTimeout(function(){
	   				window.location.href="./users";
	   			}, 300);
   			}
	    }
  	});
}

function OpenListSuscriptions(){

	$.ajax({
	    url: "build/GetSuscriptions.php",
	    success: function(data){
   			$(".modal_suscriptions_char").html(data);    		
	    }
  	});

	$(".OpenListSuscriptions").click();
}

function MarcarAhora(value){
	$(value).addClass("disabled");
	
	$("#AhiVaElEmail").val($("#email_of_the_suscription").val());

	$.ajax({
	    url: "build/AssignViewedSuscription.php",
	    type: "POST",
	    data: $("#SendEmailOfTheSuscription").serialize(),
	    success: function(data){
   			if (data == "OK"){
				$(".list-group li.disabled .badge").html("Visto");
   			}   		
	    }
  	});

}

function loadAboutUs(){
	$.ajax({
	    url: "build/ShowAboutUs.php",
	    success: function(data){
	    	$("#trumbowyg-demo").text(data);
   			$(".trumbowyg-editor").html(data);  		
	    }
  	});
}

function AddNowAboutUs(){

	$("#write_aboutUs").val($(".trumbowyg-editor").html());

	$.ajax({
	    url: "build/AddNowAboutUs.php",
	    type: "POST",
	    data: $("#FormAddNowAboutUs").serialize(),
	    success: function(data){
	    	if (data == "OK"){
	    		$(".OpenModalAboutUs").click();
	    	} else {
	    		$(".OMAboutUsError").click();
	    	}
	    }
  	});
}

function LoadFormAboutContact(){
	$.ajax({
	    url: "build/UpdateAboutContact.php",
	    type: "POST",
	    data: $("#FormAddAboutContact").serialize(),
	    success: function(data){
	    	if (data == "OK"){
	    		$(".OpenModalContactUs").click();
	    	} else {
	    		$(".OpenModalContactUsError").click();
	    	}
	    }
  	});
}

function LoadMessage(id_art){
	$("#IdMessage").val(id_art);

	$.ajax({
	    url: "build/GetMessage.php",
	    type: "POST",
	    data: $("#SendIdMessage").serialize(),
	    success: function(data){
	    	if (data == "Fail"){
	    		$(".OpenModalMessageError").click();
	    	} else {
	    		$(".ShowMessageBox").html(data);
	    		$(".OpenMessage").click();
	    		GetMessageAnswer();
	    		$(".close_modal_now").click();
	    	}
	    }
  	});
}

function SendMessageAnswer(){
	if ($("#answer_message").val() == ""){
		$(".HeyHopeOneMoment").click();
		return;
	}

	$.ajax({
	    url: "build/SendMessageAnswer.php",
	    type: "POST",
	    data: $("#SendAnswerMessage").serialize(),
	    success: function(data){
	    	if (data == "OK"){
	    		$(".MessageSuccessError").html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>¡Éxito!.</strong> El mensaje se ha enviado correctamente.</div>").fadeIn(1000);
	    		$("#answer_message").val("");
	    		GetMessageAnswer();
	    	} else {
	    		$(".MessageSuccessError").html("<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>¡Up's!.</strong> El mensaje no se ha podido enviar, recargue la página e inténtelo nuevamente.</div>");
	    	}
	    }
  	});
}

function GetMessageAnswer(){
	$.ajax({
	    url: "build/LoadMessagesAnswer.php",
	    type: "POST",
	    data: $("#SaveDataIdMessage").serialize(),
	    success: function(data){
	    	$(".WriteMessagesAnswer").html(data);	
	    }
  	});
}

function CallModalMessage(){
	$.ajax({
	    url: "build/view_all_messages.php",
	    success: function(data){
	    	$(".view_all_messages").html(data);	
	    }
  	});
	$(".ShowMSGSended").click();
}

function UpdateFavoriteMessage(){
	$.ajax({
	    url: "build/UpdateFavoriteMessage.php",
	    type: "POST",
	    data: $("#ChangeIconFavoriteForm").serialize(),
	    success: function(data){
	    	$(".ChangeIconFavorite").html(data);	
	    }
  	});
}

function CallModalMessageFav(){
	$.ajax({
	    url: "build/view_all_messages_favorite.php",
	    success: function(data){
	    	$(".view_all_messages_favorite").html(data);	
	    }
  	});
	$(".ShowMSGSendedFav").click();
}