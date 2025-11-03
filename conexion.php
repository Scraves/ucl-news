<?php
$servername = "localhost";
$username = "root"; // por defecto en XAMPP
$password = ""; // dejar vacío si no pusiste contraseña
$dbname = "pagina-web";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

