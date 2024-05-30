<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['update'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "reserva");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener los datos actualizados del formulario
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $comentario = $_POST['comentario'];

    // Consulta para actualizar la reserva
    $query = "UPDATE reserva_usuario SET nombres='$nombres', apellidos='$apellidos', time='$time', date='$date', comentario='$comentario' WHERE id='$id'";
    
    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)) {
        echo '
        <script> 
        alert("Reserva actualizada");
        window.location = "http://localhost/XSTARBARBERS/tabla_reserva.php";
        </script> 
        ';
    } else {
        echo "Error al actualizar la reserva: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "No se ha enviado el formulario de actualización.";
}
?>
