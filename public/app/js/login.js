$(document).ready(function() {
	
	$("#divAlertError").hide();
	
	$("#btnLogIn").click(function(){
		
		var sData = $("#frmLogIn").serialize();
		
		$.ajax({
			url:"ajax/ajx.login.checkin.php",
			type:"POST",
			data: sData,			
			success:function(sRespuesta){
				var oJson = $.parseJSON(sRespuesta);
				if(oJson.b){
					$("#divAlertError").hide();
					window.location.href = "/{{  }}/";
				}else{
					$("#divAlertError").show();
				}
			}
		});
		
	});
});
