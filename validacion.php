<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$email_to = "hola@telocreo.studio"; 
$asunto = "Consulta desde la Web Telocreo";
$contenido = "$nombre ha enviado un mensaje desde la web www.telocreo.studio\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";


if(mail($email_to, $asunto, $contenido)){
   header("location:test-page.html");
}
/*
if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $header = 'From: noreply@example.com' . "\r\n";
        $header = 'Reply-to : noreply@example.com' . "\r\n";
        $header = 'X-Mailer: PHP/'. phpversion();
        $email = @mail($email, $mensaje, $header);
        if ($mail) {
            echo '<h4>¡Mail enviado exitosamente!</h4>';
        }
    }
}



$response = $_POST["g-recaptcha-response"];
 
if(!empty($response))
{
    $secret = "6Ld-ZcIUAAAAANSt2ML8AUKpWwnw6LODXCLIWtqr";
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
@$mensaje = addslashes($_POST['mensaje']);


$cabeceras = "From: $email\n" 
 . "Reply-To: $email\n";
$asunto = "Consulta desde la Web Telocreo"; 
$email_to = "emiliastea@hotmail.com"; 
$contenido = "$nombre ha enviado un mensaje desde la web www.telocreo.studio\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";


if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {


header("location:index.html?mensaje=mensajeenviado");

die("Gracias, su mensaje se envio correctamente.");
}else{


die("Error: Su informaci�n no pudo ser enviada, por favor intente m�s tarde");
sleep(5);
header('Location: index.html');
}
    }
    else
    {
        //Google ha detectado que se trata de un proceso no humano
	header("location:index.html?mensaje=humanCaptcha");
	exit();
    }
}
else
{
    //si entra aquí significa que no se ha pulsado el Captcha
    header("location:index.html?mensaje=errorCaptcha");
    exit();
}*/
?>