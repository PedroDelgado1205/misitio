<?php
require 'db.php';

$usuarios = $conexion->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);
//$datos = $conexion->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<body>
    <ul>
        <?php foreach($usuarios as $usu): ?>
            <li>
                <?php echo($usu->name." ".$usu->email) ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>