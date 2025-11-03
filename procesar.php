<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Verificar si el correo ya existe
    $check = "SELECT * FROM datos WHERE correo='$correo'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "<script>alert('El correo ya está registrado.'); window.location.href='sign-in.html';</script>";
    } else {
        $sql = "INSERT INTO datos (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href='log-in.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

