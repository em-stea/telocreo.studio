<?php
$conexion = mysqli_connect('localhost', 'root', '', 'telocreo_db') or die(mysql_error($mysqli));

insertar($conexion);

//inserción en base de datos
function insertar($conexion){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $consulta = "INSERT INTO datos(nombre, email) VALUES('$nombre', '$email')";

    //ejecutar consulta
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

}

/*
//validación datos del servidor
$host = "localhost:3306";
$user = "telocreo";
$pass = "";

//conexion con base de datos y servidor
$connection = mysql_connect($host, $user, $pass)

//llamado al input del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];

//verificamos la conexión a base de datos
if(!$connection){
    echo "<h2>No se ha podido conectar con el servidor</h2>" . mysql_error();
}else{
    echo "<h2>Hemos conectado al servidor</h2>"
}
//indicamos el nombre de la base de datos
$datab = "formulario";
//indicamos seleccionar la base de datos
$db = mysqli_select_db($connection, $datab)

if(!$db){
    echo "No se ha podido encontrar la tabla";
}else{
    echo "<h2>Tabla seleccionada</h2>"
}
//insertamos datos de registro a mysql indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO datos (nombre, email) VALUES ($nombre, $email)"

$resultado = mysqli_query($connection,$instruccion_SQL)
*/





/*
//conexion con base de datos y servidor
$link = mysql_connect("localhost:3306", "telocreo", "") or die ("<h2>No se encuentra el servidor</h2>");
$db = mysql_select_db("telocreo", $link) or die("<h2>Error de conexión</h2>")

//obtención de los valores del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];

//obtención de la longitud de un string
$req = (strlng($nombre)*strlng($email)) or die("No se han llenado todos los campos <br><br><a href='freeblioteca-page.html'>")

//se confirma el envío de datos
if ($nombre, $email) {

header("location:pdf/EBOOK.pdf");

die("Gracias, su mensaje se envio correctamente.");

//Ingreso de información a la base de datos
mysql_query("INSERT INTO datos VALUES("", "$nombre", "$email")", $link) or die("<h2>Error de envío</h2>");

echo '<h2>Registro Completo</h2>';
*/
?>