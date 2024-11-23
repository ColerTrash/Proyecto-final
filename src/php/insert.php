<?php
include('conexion.php');

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$direccion = $_POST['Direccion'];
$descripcion = $_POST['Descripcion'];

$sql = "insert into contacto (nombre, apellido, email, direccion, descripcion) values ('$nombre','$apellido','$email','$direccion','$descripcion');";

$result = mysqli_query($cone,$sql);
Echo "Enviado correctamente";
sleep(2);
header('location: http://localhost/proyecto%20final/src/php/contacto.php');

?>