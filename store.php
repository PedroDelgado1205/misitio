<?php
require 'db.php';

$nombre = $_POST['name'];
$correo = $_POST['email'];

$conexion->exec("INSERT INTO users (name, email) VALUES ('$nombre', '$correo')");
header('Location: index.php');
?>