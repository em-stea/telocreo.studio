
<?php 
include 'config.php';

$db = new PDO($db_dsn, $db_user, $db_pass, $db_options);

/*recibo los datos del formulario*/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje=$_POST['mensaje'];

/*guardo los datos en la db*/
$sql = 'insert into datos (nombre, email) values (?, ?)'; //nombres de las columnas de la db
$sql_params = [$nombre, $email];

$st = $db->prepare($sql);
$st->execute($sql_params);


/*mail destinatario y contenido a recibir*/
$email_to = "emiliastea@hotmail.com"; 
$contenido = "$nombre ha enviado un mensaje desde la web de telocreo.studio<br /> Nombre: $nombre<br />Email: $email<br /> Mensaje: $mensaje";
$asunto = "Consulta desde la Web Telocreo";

//Cabeceras del correo para que no llegue a spam
$header = "MIME-Version: 1.0 \r\n";
$header.= "Content-type: text/html; charset=utf-8 \r\n";

/*función para enviar mail*/
mail($email_to, $asunto, utf8_decode($contenido), $header);

//echo "<script>alert('Mensaje enviado con éxito');document.location='$regresar';</script>";
//echo '<h4>¡Mail enviado exitosamente!</h4>';
header('Location: ' . 'form-success.html');

