<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['id'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "login_register_db");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener el ID de la reserva a editar
    $id = $_POST['id'];

    // Consulta para obtener la información de la reserva a editar
    $query = "SELECT * FROM registrar WHERE id = '$id'";
    $result = mysqli_query($conexion, $query);

    // Verificar si se encontró la reserva
    if(mysqli_num_rows($result) == 1) {
        // Obtener los datos de la reserva
        $reserva = mysqli_fetch_assoc($result);

        // Mostrar el formulario de edición
        ?>
        <html>
            
        <head>
            <title>Editar Reserva</title>
        </head>
        <link rel="stylesheet" href="css/editar_reserva.css">
        <body>
           
            <form action="actualizar_usuario.php" method="POST" class="container">
                  <h2>Editar Usuario</h2>
                <input type="hidden" name="id" value="<?php echo $reserva['id']; ?>">
                <label>Nombre:</label>
                <input type="text" name="nombres" value="<?php echo $reserva['nombre_completo']; ?>"><br>
                <label>Email:</label>
                <input type="text" name="apellidos" value="<?php echo $reserva['email']; ?>"><br>
                <label>Usuario:</label>
                <input type="text" name="time" value="<?php echo $reserva['usuario']; ?>"><br>

                <button type="submit" name="update">Actualizar</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "No se encontró la reserva.";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "No se ha proporcionado un ID para editar.";
}
?>
