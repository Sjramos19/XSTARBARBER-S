<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "reserva");

// Comprobar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener la fecha y hora actual
$fecha_actual = date("Y-m-d");
$hora_actual = date("H:i:s");

// Consulta para eliminar reservas pasadas
$sql = "DELETE FROM reserva_usuario WHERE date < '$fecha_actual' OR (date = '$fecha_actual' AND time < '$hora_actual')";

$result = mysqli_query($conexion, $sql);

if ($result) {
    echo "Reservas expiradas eliminadas exitosamente.";
} else {
    echo "Error al eliminar reservas expiradas: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
