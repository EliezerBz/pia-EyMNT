<?php
include("bd_conexion.php"); // Incluir la conexión a la base de datos

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["correo"]) || empty($_POST["password"])) {
        echo "<script>
            alert('Todos los campos son obligatorios');
            //window.location.href = 'login.php'; // Redirige de nuevo al login si hay campos vacíos
        </script>";
    } else {
        $correo = trim($_POST["correo"]);
        $contraseña = trim($_POST["password"]);

        // Comprobar que los datos se están recibiendo correctamente
        echo "Correo ingresado: $correo <br>";
        echo "Contraseña ingresada: $contraseña <br>";
        
        // Consulta SQL asegurándote de que los datos coincidan
        $sql = $conn->query("SELECT * FROM Usuario WHERE correo='$correo' AND contraseña='$contraseña'");

        // Verificar si la consulta se ejecutó correctamente
        if (!$sql) {
            die("Error en la consulta SQL: " . $conn->error);
        }

        // Comprobar si se encontraron registros
        if ($sql->num_rows > 0) {
            echo "Usuario encontrado. Redirigiendo a la página principal...";
            header("Location: /Interfaces/PrincipalPage.html");
            exit();
        } else {
            echo "<script>
                alert('Usuario no registrado o contraseña incorrecta. Por favor, regístrate.');
                window.location.href = 'registro.php';
            </script>";
        }
    }
}
?>