<?php 

	//recogemos datos
			//$code = $_SESSION['code'];
			$code = "dasdasdaersada7asdtasudgtas6dgasd76asgtduasd6";
			$mailHost 		= "smtp.gmail.com";
			$mailFrom 		= "agoraproject001@gmail.com";
			$mailPort 		= 587;
			$mailUserName 	= "agoraproject001@gmail.com";
			$mailPass		= "rita1234rita1234";
			$destinatario = "lazyapply@gmail.com";
			$tittle = "Mensaje de Registro";
			$mensaje = '
						<!doctype html>
		<html lang="es">

<head>
	<title></title>
</head>
<body>
	<strong> Bienvenido a Agora</strong><br>
	<p>Este mensaje se ha generado de forma automatica. Haga click en el siguiente <a href="127.0.0.1/agora/autentificacionMail.php?code='.$code.'" target="_blank" >enlace</a> para autentificar su cuenta.
	Una vez sea autentificada, el administrador del sistema deverá validar su cuenta.
	Gracias por usar Agora.</p>
</body>
</html>
						';

			echo "titulo = ".$tittle.'<br>';
			echo "destino = ".$destinatario.'<br>';
			echo "Mensaje = ".$mensaje.'<br>';

// incluimos la librería en nuestra página
require_once "class.phpmailer.php";
// create a new mail
$mail = new PHPMailer();

// dirección de envío
$mail->From = $mailFrom;
// nombre y asunto 
$mail->FromName = "Agora Project";
$mail->Subject = $tittle;
// a través de este host (si no se especifica coge el de php.ini)
$mail->Host = $mailHost;
// Puerto para enviar (si no se especifica coge el de php.ini, 25 por defecto)
$mail->Port = $mailPort;
// Activamos la validación pr SMTP
$mail->IsSMTP(); 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
//Usuario del propietario del mail
$mail->Username = $mailUserName;
//Password del propietario del mail
$mail->Password = $mailPass;
// Servicio de envío
$mail->Mailer = "smtp";

// Dirección del destinatario
$mail->AddAddress($destinatario);
// con copia oculta a
$mail->AddBCC($destinatario);

// activamos el contenido HTML en caso de que haya que activarlo
$mail->IsHTML(TRUE);

// Texto HTML
$mail->Body = $mensaje;
// Y esto es como alternativa en texto plano.
$mail->AltBody = "Título\n\n Hola Mundo";

//Para adjuntar algún fichero
//@$mail->AddAttachment($attach);

// Y ahora enviar y comprobar el envío
if($mail->Send())
{
echo "El correo se ha enviado correctamente";

}else{
echo "Problemas en el envío, contacte con el administrador";
}

?>