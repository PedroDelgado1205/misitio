<?php
$host = "localhost";
$db   = "test";
$user = "root";
$pass = "pemildebra";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo("Servidor en orden");
    // $conexion->exec("insert into users (name, email) values('qwerty','qwerty');");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>