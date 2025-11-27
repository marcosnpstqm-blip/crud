<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear socio</title>
</head>
<body>

<h2>Nuevo socio</h2>

<form action="guardar.php" method="POST">
    Número de socio: <input type="number" name="socio_numero" required><br><br>
    Nombre: <input type="text" name="nombre" required><br><br>
    Apellido: <input type="text" name="apellido" required><br><br>
    Dirección: <input type="text" name="direccion"><br><br>
    Localidad: <input type="text" name="localidad"><br><br>
    Partido: <input type="text" name="partido"><br><br>
    Teléfono: <input type="text" name="telefono"><br><br>
    Mail: <input type="email" name="mail"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="listar.php">Volver al listado</a>

</body>
</html>
