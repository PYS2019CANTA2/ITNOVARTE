<?php

// Validación de Jquery en custom.js

$name = '';
$email = '';
$msg = '';
$subject = "Mensaje enviado desde la Web [www.trasladarte.alice-itworld.com]"; 

if($_POST) {
	// recoge todas las entradas y recortes para eliminar los espacios en blanco iniciales y finales
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$msg = trim($_POST['message']);  
	$ip = $_SERVER['REMOTE_ADDR'];

  
	// Cambie aquí su dirección de correo electrónico
	//$to = "vacpcanta@gmail.com";
    $to = "victor.canta@vacp.alice-itworld.com" ;

	// Prepare message
	$message = "Has recibido un correo electrónico de: ".$name. ", " . $email . ".<br />";
	$message .= "Message: <br />".$msg."<br /><br />";
	$message .= "IP: ".$ip."<br />";
	$headers = "From: $email \n";
	$headers .= "Reply-To: $email \n";
	$headers .= "MIME-Version: 1.0 \n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1 \n";

	// Email Sent
	if(mail($to, $subject,$message, $headers)){
		echo "Correo enviado satisfactoriamente.";
	}
	// Error Message
	else{ 
		echo "No se pudo enviar el correo.";
	}
  
}

?>