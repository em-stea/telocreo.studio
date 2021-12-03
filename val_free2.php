<?php
$response = $_POST["g-recaptcha-response"];
 
if(!empty($response))
{
    $secret = "6Lfcp8AUAAAAAJUu26lTL7WZxQM2A6fBVdFAViTc";
    $ip = $_SERVER['REMOTE_ADDR'];
    $respuestaValidación = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
 
    //Si queremos visualizar la información obtenida de la petición a la api de validación de Google para comprobar el estado de esta lo haremos con la función de PHP var_dump
    //var_dump($respuestaValidación);
 
    $jsonResponde = json_decode($respuestaValidación);
    if($jsonResponde->success)
    {
    //entrará aquí cuando todo sea correcto:
    
    @$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['asunto']);
@$mensaje = addslashes($_POST['mensaje']);

$cabeceras = "From: $email\n" 
 . "Reply-To: $email\n";
$asunte = "$asunto"; 
$email_to = "telocreo.studio@gmail.com"; 
$contenido = "$nombre ha enviado un mensaje desde la web www.telocreo.studio\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";


if (@mail($email_to, $asunte ,$contenido ,$cabeceras )) {


header("location:pdf/community.pdf");

die("Gracias, su mensaje se envio correctamente.");
}else{


die("Error: Su informaci�n no pudo ser enviada, por favor intente m�s tarde");
sleep(5);
header('Location: contacto.php');
}
    }
    else
    {
        //Google ha detectado que se trata de un proceso no humano
	header("location:contacto.php?mensaje=humanCaptcha");
	exit();
    }
}
else
{
    //si entra aquí significa que no se ha pulsado el Captcha
    header("location:contacto.php?mensaje=errorCaptcha");
    exit();
}
?>
