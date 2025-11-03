<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM datos WHERE nombre='$nombre' AND correo='$correo' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Inicio de sesión exitoso.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Nombre, correo o contraseña incorrectos.'); window.location.href='log-in.html';</script>";
    }
}

$conn->close();
?>
