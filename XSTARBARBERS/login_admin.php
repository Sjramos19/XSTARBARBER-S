<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swp");

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(admin.jpeg);
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    background-color:transparent;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #d4c70b;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #d1930e;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #8a5b1680;
}

.forgot-password {
    text-align: center;
    margin-top: 20px;
}

.forgot-password a {
    color: #f8cf18;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

.btn-1 {
    margin: 1px;
    width: 100%;
    padding: 10px;
    background-color: #d1930e;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-1:hover {
    background-color: #8a5b1680;
}

.forgot-password {
    text-align: center;
    margin-top: 20px;
}

.forgot-password a {
    color: #f8cf18;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}
</style>

<body>
    <div class="container">
        <form action="verflogin_admin_be.php" method="POST" class="login-form">
            <h2>Iniciar Sesión</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Ingresa su email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
            </div>

            <button type="submit" class="btn">Iniciar Sesión</button>

            <div class="forgt-password">
                <p>¿No tiene cuenta?<a href="register_admin.php">Registrate</a></P>
            </div>
            <div class="forgot-password">
                <a href="#">¿Olvidaste tu contraseña?</a>

            </div>
        </form>
    </div>
</body>

</html>