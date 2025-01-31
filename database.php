<?php
$host = "localhost"; // Servidor de MySQL
$user = "root"; // Usuario (por defecto en XAMPP)
$password = ""; // Contraseña (vacía por defecto en XAMPP)
$dbname = "tiendita"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
