<?php
$servername = "127.0.0.1:3306";
$username = "u473285458_soporte_root"; // El usuario correcto
$password = "$.Cisco47*"; // La contraseña asociada al usuario
$dbname = "u473285458_EcoIntercambio"; // El nombre exacto de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    // Si hay un error, enviar el mensaje de error a la consola del navegador usando JavaScript
    echo "<script>console.log('Conexión fallida: " . addslashes($conn->connect_error) . "');</script>";
} else {
    // Si la conexión es exitosa
    echo "<script>console.log('Conexión exitosa');</script>";
}
?>
