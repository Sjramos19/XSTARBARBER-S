<?php

include 'conexion_reserva.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$time = $_POST['time'];
$date = $_POST['date'];
$numero = $_POST['numero'];
$comentario = $_POST['comentario'];


// Preparar la consulta de inserción
$query = "INSERT INTO reserva_usuario (nombres, apellidos, time, date, numero, comentario)
          VALUES ('$nombres', '$apellidos', '$time', '$date', '$numero', '$comentario')";

// Ejecutar la consulta de inserción
$ejecutar = mysqli_query($conexion, $query);

// Comprobar si la consulta de inserción se ejecutó correctamente
if (!$ejecutar) {
    die("Error en la consulta de inserción: " . mysqli_error($conexion));
}

if ($ejecutar) {
    echo '
    <script> 
    alert("Reserva almacenada exitosamente");
    window.location = "http://localhost/XSTARBARBERS/XBARBER.php";
    </script>
    ';
} else {
    echo '
    <script> 
    alert("Inténtalo de nuevo, usuario no almacenado");
    window.location = "http://localhost/XSTARBARBERS/registrar_usuario.php";
    </script>
    ';
}

mysqli_close($conexion);

?>
