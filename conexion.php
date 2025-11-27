<?php
$conn = mysqli_connect("localhost", "root", "", "sociosdb");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
