<?php
require 'db.php';

if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['correo'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $query = "UPDATE users SET name = :nombre, email = :correo WHERE id = :id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $statement->bindParam(':correo', $correo, PDO::PARAM_STR);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}

header('Location: index.php');
?>