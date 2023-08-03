<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = :id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $usuario = $statement->fetch(PDO::FETCH_OBJ);
}

?>

<!DOCTYPE html>
<html>
<body>
<form action="update.php" method="post">
    Nombre:<br>
    <input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>">
    <br>
    Correo:<br>
    <input type="text" name="correo" value="<?php echo $usuario->correo; ?>">
    <br>
    <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
    <br><br>
    <input type="submit" value="Actualizar">
</form>
</body>
</html>