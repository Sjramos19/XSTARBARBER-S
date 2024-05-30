<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['id'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "registrar_barber");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener el ID de la reserva a editar
    $id = $_POST['id'];

    // Consulta para obtener la información de la reserva a editar
    $query = "SELECT * FROM registrar_barbero WHERE id = '$id'";
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
           
            <form action="actualizar_barber.php" method="POST" class="container">
                  <h2>Editar barbero</h2>
                <input type="hidden" name="id" value="<?php echo $reserva['id']; ?>">
                <label>Nombres:</label>
                <input type="text" name="nombres" value="<?php echo $reserva['nombres']; ?>"><br>
                <label>Apellido paterno:</label>
                <input type="text" name="apellido_pat" value="<?php echo $reserva['apellido_pat']; ?>"><br>
                <label>Apellido Materno:</label>
                <input type="text" name="apellido_mat" value="<?php echo $reserva['apellido_mat']; ?>"><br>
                <label>email:</label>
                <input type="text" name="email" value="<?php echo $reserva['email']; ?>"><br>
                <label>numero:</label>
                <input type="text" name="numero" value="<?php echo $reserva['numero']; ?>"><br>

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
