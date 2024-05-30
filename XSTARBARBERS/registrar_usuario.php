<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/registrar_ususario.css">

   
    
</head>
<body>
    <div class="wrapper">
        <form action="registro_usuario_be.php" method="POST" onsubmit="return validaCampos();">
            <h1>Registro de Usuario</h1>
            <div class="input-box">
                <input type="text" name="nombre_completo" placeholder="Nombre completo" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button onclick= "registrarse()" submit name="registrar" class="btn">Registrar</button>
         
        </form>
        
    </div>
</body>
</html>