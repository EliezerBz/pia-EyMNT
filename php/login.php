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
                <p>Para unirte a nuestra comunidad por favor Inciar Sesion con tus Credenciales</p>
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
                <<form class="formulario">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" name="nombre" placeholder="Nombre Completo" required>
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="text" name="correo" placeholder="Correo Electronico" required>
                    </label>
                    <label>
                        <i class='bx bxs-key'></i>
                        <input type="password" name="contraseña" placeholder="Contraseña" required>
                    </label>
                    <input type="submit" value="Registrarse">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>

    <!--FORMULARIO DE LOGIN-->
    <div class="continer-form login hide">
    <div class="informacion">
        <div class="txt_welcome">
            <h2>Hola de Nuevo!!!</h2>
            <p>No cuentas con cuenta aun. Registrate aqui!!</p>
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
                <div class="alerta-error">Todos los campos son obligatorios</div>
                <div class="alerta-exito">Te registraste correctamente</div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="/Assets/JS/script.js"></script>

</body>
</html>