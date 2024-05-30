<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['update'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "registrar_barber");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener los datos actualizados del formulario
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellido_pat = $_POST['apellido_pat'];
    $apellido_mat = $_POST['apellido_mat'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    // Consulta para actualizar la reserva
    $query = "UPDATE registrar_barbero SET nombres='$nombres', apellido_pat='$apellido_pat',  apellido_mat='$apellido_mat', numero='$numero', email='$email' WHERE id='$id'";
    
    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)) {
        echo '
        <script> 
        alert("barbero actualizado");
        window.location = "http://localhost/XSTARBARBERS/informacion_barberia.php";
        </script> 
        ';
    } else {
        echo "Error al actualizar al barbero: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "No se ha enviado el formulario de actualización.";
}
?>
