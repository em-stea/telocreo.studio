
<?php
include 'config.php';

$db = new PDO($db_dsn, $db_user, $db_pass, $db_options);

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$sql = 'insert into datos (nombre, email) values (?, ?)'; //nombres de las columnas de la db
$sql_params = [$nombre, $email];

$st = $db->prepare($sql);
$st->execute($sql_params);

//header('Location: ' . 'form-success.php');
header('Location: ' . 'pdf/Ebook-BuyerPersona.pdf');


// fin


?>