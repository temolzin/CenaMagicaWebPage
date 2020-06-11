<?php
	$nombre = $_POST["Nombre"];
	$email = $_POST["Email"];
	$asunto = $_POST["Asunto"];
	$mensaje = $_POST["Mensaje"];

	if(!isset($nombre) || !isset($email) || !isset($asunto) || !isset($mensaje)){
		$texto = "Nombre: ".$nombre." \n \n "." Email: ".$email." \n \n ". " Mensaje: ". $mensaje . 
		" \n Mensaje enviado desde la página de Cena Mágica."
		mail("skaineitor@hotmail.com",$asunto." (Página Web Cena Mágica)", $texto);
	    echo '<div class="alert alert-success alert-dismissable text-center">
	    <button type="button" class="close" data-dismiss="alert">&times;</button>
	    <strong>¡Éxito!</strong> La encuesta ha sido envíada satisfactoriamente.
	    </div>';
    } else { 
        echo '<div class="alert alert-danger alert-dismissable text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Error!</strong> No se ha podido enviar la encuesta. Intenta más tarde.
        </div>';
?>