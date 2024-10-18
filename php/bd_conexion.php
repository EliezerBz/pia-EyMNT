<?php
$servername = "82.197.82.40";
$username = "u473285458_soporte_root"; // El usuario correcto
$password = "$.Cisco47*"; // La contraseña asociada al usuario
$dbname = "u473285458_EcoIntercambio"; // El nombre exacto de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
