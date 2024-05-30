<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "registrar_barber");

// Comprobar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta db</title>
    <link rel="stylesheet" href="css/barberos.css">
</head>
<body>
    <div class="container">
        <h3><a href="XBARBER.php"><button class="atras" type="button">Ir atrás</button></a></h3>
        <h2>LISTADO DE BARBEROS</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>

            <?php
            $sql = "SELECT * FROM registrar_barbero";
            $result = mysqli_query($conexion, $sql);

            // Comprobar si la consulta devuelve resultados
            if ($result) {
                // Comprobar si hay filas devueltas
                if (mysqli_num_rows($result) > 0) {
                    while($mostrar = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $mostrar['id'] . "</td>";
                        echo "<td>" . $mostrar['nombres'] . "</td>";
                        echo "<td>" . $mostrar['apellido_pat'] . "</td>";
                        echo "<td>" . $mostrar['apellido_mat'] . "</td>";
                        echo "<td>" . $mostrar['numero'] . "</td>";
                        echo "<td>" . $mostrar['email'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No se encontraron registros</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($conexion) . "</td></tr>";
            }

            // Cerrar la conexión
            mysqli_close($conexion);
            ?>
        </table>
    </div>
</body>
</html>
