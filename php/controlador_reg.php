<?php
include("bd_conexion.php"); // Incluir la conexión a la base de datos

if(!empty($_POST["btnregistrar"])){
    if (empty($_POST["regusrname"]) || empty($_POST["regcorreo"]) || empty($_POST["regcontraseña"]) || empty($_POST["regconfcontraseña"])) {
        echo "<script>
            console.log('Campos necesarios prueba JS');
        </script>";
    }else{
        $nombre=$_POST["regusrname"];
        $correo=$_POST["regcorreo"];
        $contraseña=$_POST["regcontraseña"];
        $sql=$conn->query("INSERT INTO usuarios(nombre,correo,contraseña) Values('$nombre','$correo','$contraseña' )");
        if ($sql==1) {
            echo "<script>
            alert('Usuario Registrado con Exito.');
            window.location.href = 'login.php';
        </script>";
        } else {
            die("Error en la consulta SQL: " . $conn->error);
        }
        
    }
}
?>