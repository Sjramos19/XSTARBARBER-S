<?php
// Verificar si se ha enviado un ID para editar
if(isset($_POST['update'])) {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "12345678", "login_register_db");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar con la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Obtener los datos actualizados del formulario
    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
  

    // Consulta para actualizar la reserva
    $query = "UPDATE registrar SET nombre_completo='$nombre_completo', email='$email', usuario='$usuario' WHERE id='$id'";
    
    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)) {
        echo '
        <script> 
        alert("Usuario actualizado");
        window.location = "http://localhost/XSTARBARBERS/informacion_barberia.php";
        </script> 
        ';
    } else {
        echo "Error al actualizar la usuario: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "No se ha enviado el formulario de actualización.";
}
?>
