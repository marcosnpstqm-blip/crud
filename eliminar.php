<?php
include "conexion.php";

$id = $_GET['id'];

$sql = "DELETE FROM socios WHERE socio_numero = $id";
mysqli_query($conn, $sql);

echo "Socio eliminado correctamente.<br>";
echo "<a href='listar.php'>Volver al listado</a>";
?>
