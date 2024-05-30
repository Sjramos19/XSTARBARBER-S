<?php

// Conexión a la base de datos 
$conexion = mysqli_connect("localhost", "root", "", "registrar_barber");

// Verificamos la conexión de la base de datos
if (!$conexion) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
}

// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hacemos llamado a al input del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $numero = $_POST['numero'];
    $comentario = $_POST['comentario'];

    // Insertamos datos de registro a MySQL utilizando sentencias preparadas
    $stmt = mysqli_prepare($conexion, "INSERT INTO reservas (nombres, apellidos, time, date, numero, comentario) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssss', $nombres, $apellidos, $time, $date, $numero, $comentario);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Datos insertados correctamente</h3>";
    } else {
        echo "Error al insertar datos: " . mysqli_stmt_error($stmt);
    }

    // Cerramos la sentencia
    mysqli_stmt_close($stmt);
}

// Cerramos la conexión
mysqli_close($conexion);

?>
