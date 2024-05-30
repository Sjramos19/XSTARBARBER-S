
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/register_admin.css">
</head>
<body>
    <div class="container">
        <form class="registro-form" action="admin.php" method="POST">
            <h2>Registro de Usuario</h2>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn">Registrarse</button>
        </form>
    </div>
</body>
</html>