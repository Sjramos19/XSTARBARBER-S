<?php

include 'conexion_barber_be.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];



$query = "INSERT INTO admin (usuario, email, password)
          VALUES('$usuario', '$email', '$password')";


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
    <script> 
    
    alert("Usuario almacenado exitosamente");
    window.location = "http://localhost/XSTARBARBERS/login_admin.php";
    
    </script>
    ';
} else {
echo '
    <script> 

    alert("Intentalo de nuevo, usuario no almacenado");
    window.location = "http://localhost/XSTARBARBERS/register_admin.php";
    
    </script>
';
}

mysqli_close($conexion);

?>