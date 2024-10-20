<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_BETA</title>
    <link rel="stylesheet" href="../Assets/CSS/LogReg.css">
</head>
<body>
    <div class="continer-form register">
        <div class="informacion">
            <div class="txt_welcome">
                <h2>Bienvenido</h2>
                <p>Para unirte a la beta cerrada, con tus credenciales</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-login">
            <div class="forms-childs">
                <h2>Crear Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-microsoft'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>O usa tu email para registrarte</p>
                <form class="formulario" method="post" action="controlador_reg.php">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Nombre Completo" name="regusrname">
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="text" placeholder="Correo Electronico" name="regcorreo">
                    </label>
                    <label>
                        <i class='bx bxs-key'></i>
                        <input type="password" placeholder="Contraseña" name="regcontraseña">
                    </label>
                    <label>
                        <i class='bx bxs-key'></i>
                        <input type="password" placeholder="Confirmar Contraseña" name="regconfcontraseña">
                    </label>
                    <input type="submit" value="Registrarse" name="btnregistrar">
                </form>
            </div>
        </div>
    </div>

    <!--FORMULARIO DE LOGIN-->
    <div class="continer-form login hide">
        <div class="informacion">
            <div class="txt_welcome">
                <h2>Hola de Nuevo!!!</h2>
                <p>No cuentas con cuenta aun. Registrate a la beta aqui!!</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-login">
            <div class="forms-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-microsoft'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>O Inicia Sesión con tu correo</p>
                <form method="post" action="controlador.php" class="formulario" id="login-form">
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="text" name="correo" placeholder="Correo Electronico" id="email" required>
                    </label>
                    <label>
                        <i class='bx bxs-key'></i>
                        <input type="password" name="password" placeholder="Contraseña" id="password" required>
                    </label>
                    <input type="submit" name="btningresar" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <script src="/Assets/js/script.js"></script>
</body>
</html>
