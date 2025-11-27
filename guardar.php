<?php
include "conexion.php";

$sql = "INSERT INTO socios (socio_numero, nombre, apellido, direccion, localidad, partido, telefono, mail)
        VALUES (
        '{$_POST['socio_numero']}',
        '{$_POST['nombre']}',
        '{$_POST['apellido']}',
        '{$_POST['direccion']}',
        '{$_POST['localidad']}',
        '{$_POST['partido']}',
        '{$_POST['telefono']}',
        '{$_POST['mail']}'
        )";

mysqli_query($conn, $sql);

echo "Socio cargado correctamente.<br>";
echo "<a href='listar.php'>Volver al listado</a>";
?>
