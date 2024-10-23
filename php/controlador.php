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
        $sql = $conn->query("SELECT * FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'");

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
                window.location.href = '/Interfaces/bloqueado.html';
            </script>";
        }
    }
}
/*
//Borrr codigo
session_start();
include("bd_conexion.php"); // Incluir la conexión a la base de datos

// Inicializa los intentos fallidos en la sesión si no existe
if (!isset($_SESSION['intentos_fallidos'])) {
    $_SESSION['intentos_fallidos'] = 0;
}

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["correo"]) || empty($_POST["password"])) {
        echo "<script>
            alert('Todos los campos son obligatorios');
        </script>";
    } else {
        $correo = trim($_POST["correo"]);
        $contraseña = trim($_POST["password"]);

        // Consulta SQL asegurándote de que los datos coincidan
        $sql = $conn->query("SELECT * FROM Usuario WHERE correo='$correo' AND contraseña='$contraseña'");

        if (!$sql) {
            die("Error en la consulta SQL: " . $conn->error);
        }

        if ($sql->num_rows > 0) {
            // Reiniciar los intentos fallidos si el login es exitoso
            $_SESSION['intentos_fallidos'] = 0;
            header("Location: /Interfaces/PrincipalPage.html");
            exit();
        } else {
            // Incrementar el contador de intentos fallidos
            $_SESSION['intentos_fallidos']++;

            // Comprobar si ya se han hecho 5 intentos fallidos
            if ($_SESSION['intentos_fallidos'] >= 5) {
                // Reiniciar el contador de intentos fallidos antes de redirigir
                $_SESSION['intentos_fallidos'] = 0;
                echo "<script>
                    window.location.href = '/Interfaces/bloqueado.html';
                </script>";
            } else {
                echo "<script>
                    alert('Usuario no registrado o contraseña incorrecta. Intentos fallidos: {$_SESSION['intentos_fallidos']}');
                    window.location.href = '/php/login.php';
                </script>";
            }
        }
    }
}
*/
?>
