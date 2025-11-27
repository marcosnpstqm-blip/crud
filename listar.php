<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de socios</title>
</head>
<body>

<h2>Listado de socios</h2>
<a href="crear.php">Agregar nuevo socio</a><br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>N°</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Mail</th>
        <th>Acciones</th>
    </tr>

<?php
$sql = "SELECT * FROM socios";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['socio_numero']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['apellido']}</td>
            <td>{$row['telefono']}</td>
            <td>{$row['mail']}</td>
            <td>
                <a href='editar.php?id={$row['socio_numero']}'>Editar</a> |
                <a href='eliminar.php?id={$row['socio_numero']}'>Eliminar</a>
            </td>
        </tr>";
}
?>

</table>

</body>
</html>
