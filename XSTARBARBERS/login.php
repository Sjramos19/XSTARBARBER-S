<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatuble" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin-signup</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <form action="login_usuario_be.php" method="POST">
            <h1>login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="email" required>
                <i class='bx bxs-user'></i>
            </div>


            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>


            <div class="remember-forgot">
                <label><input type="checkbox"> recordar contraseña</label>
                <a href="#">¿olvidaste tu cintraseña?</a>+
            </div>

            <button onclick="registrar()" type="submit" name="Iniciar" class="btn">Iniciar</button>

            <script>
                function registrar() {
                    swal("felicidades", "Usted ya esta registrado en la barberia", "success");
                }
            </script>

            <div class="register-link">
                <p>¿No tiene cuenta?<a href="registrar_usuario.php">Registrar</a></p>

            </div>
        </form>


    </div>

</body>

</html>