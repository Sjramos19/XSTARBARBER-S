<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['id'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "reserva");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener el ID de la reserva a editar
    $id = $_POST['id'];

    // Consulta para obtener la información de la reserva a editar
    $query = "SELECT * FROM reserva_usuario WHERE id = '$id'";
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
           
            <form action="actualizar_reserva.php" method="POST" class="container">
                  <h2>Editar Reserva</h2>
                <input type="hidden" name="id" value="<?php echo $reserva['id']; ?>">
                <label>Nombres:</label>
                <input type="text" name="nombres" value="<?php echo $reserva['nombres']; ?>"><br>
                <label>Apellidos:</label>
                <input type="text" name="apellidos" value="<?php echo $reserva['apellidos']; ?>"><br>
                <label>Hora:</label>
                <input type="time" name="time" value="<?php echo $reserva['time']; ?>"><br>
                <label>Fecha:</label>
                <input type="text" name="date" value="<?php echo $reserva['date']; ?>"><br>
                <label>Comentario:</label>
                <textarea name="comentario"><?php echo $reserva['comentario']; ?></textarea><br>

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
