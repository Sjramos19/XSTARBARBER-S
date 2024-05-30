<?php

session_start();

include 'conexion_barber_be.php';

$email = $_POST['email'];
$password = $_POST['password'];



// Ejecutar la consulta SQL
$validar_login = mysqli_query($conexion, "SELECT * FROM admin WHERE email='$email' and password='$password'");

// Verificar si la consulta se ejecutó correctamente
if (!$validar_login) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

// Verificar si se encontraron resultados
if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $email;
    header("Location:http://localhost/XSTARBARBERS/informacion_barberia.php");
    exit;
} else {
    echo '
    <script> 
    alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "http://localhost/XSTARBARBERS/login_admin.php";
    </script> 
    ';
    exit;
}
