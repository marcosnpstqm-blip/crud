<?php
include "conexion.php";

if (!isset($_GET['id'])) {
    die("No se recibió el ID del socio.");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM socios WHERE socio_numero = $id";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) === 0) {
    die("El socio no existe.");
}

$datos = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar socio</title>
</head>
<body>

<h2>Editar socio</h2>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $datos['socio_numero']; ?>">

    Nombre: <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>"><br><br>
    Apellido: <input type="text" name="apellido" value="<?php echo $datos['apellido']; ?>"><br><br>
    Dirección: <input type="text" name="direccion" value="<?php echo $datos['direccion']; ?>"><br><br>
    Localidad: <input type="text" name="localidad" value="<?php echo $datos['localidad']; ?>"><br><br>
    Partido: <input type="text" name="partido" value="<?php echo $datos['partido']; ?>"><br><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $datos['telefono']; ?>"><br><br>
    Mail: <input type="email" name="mail" value="<?php echo $datos['mail']; ?>"><br><br>

    <button type="submit">Actualizar</button>

</form>

<a href="listar.php">Volver</a>

</body>
</html>
