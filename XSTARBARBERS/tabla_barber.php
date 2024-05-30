<?php
include 'conexion_barber_be.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hacemos llamado a los inputs del formulario
    $nombres = $_POST['nombres'];
    $apellido_pat = $_POST['apellido_pat'];
    $apellido_mat = $_POST['apellido_mat'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar la instrucción SQL para evitar inyecciones SQL
    $stmt = $conexion->prepare("INSERT INTO registrar_barbero (nombres, apellido_pat, apellido_mat, numero, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombres, $apellido_pat, $apellido_mat, $numero, $email, $password);
    
    // Ejecutar la consulta de inserción
    if ($stmt->execute()) {
        echo '<script>
                alert("Reserva almacenada exitosamente");
                window.location.href = "http://localhost/XSTARBARBERS/login_barber.php";
              </script>';
    } else {
        echo '<script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location.href = "http://localhost/XSTARBARBERS/Barbero-register.php";
              </script>';
    }

    $stmt->close();
}

mysqli_close($conexion);
?>
