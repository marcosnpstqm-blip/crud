<?php
include "conexion.php";

$id = $_POST['id'];

$sql = "UPDATE socios SET
        nombre='{$_POST['nombre']}',
        apellido='{$_POST['apellido']}',
        direccion='{$_POST['direccion']}',
        localidad='{$_POST['localidad']}',
        partido='{$_POST['partido']}',
        telefono='{$_POST['telefono']}',
        mail='{$_POST['mail']}'
        WHERE socio_numero=$id";

mysqli_query($conn, $sql);

echo "Datos actualizados correctamente.<br>";
echo "<a href='listar.php'>Volver al listado</a>";
?>
