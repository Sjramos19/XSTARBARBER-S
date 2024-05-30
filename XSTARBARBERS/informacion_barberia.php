<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de la barberia</title>
    <link rel="stylesheet" href="css/informacion_barberia.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swp");


body {
    font-family: Arial, sans-serif;
    background: url(logo-barber-scaled.jpg) ;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 50px auto;
    padding: 20px;
    background-color: #FEF5E7 ;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

.atras {
    background-color: #e78b21;
    color: white;
    padding: 10px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-decoration: none;
}

.atras:hover {
    background-color: #503c25;
}

h3 {
    text-align: left;
}
  


h1, h2, h3 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #e78b21;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.back-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #e78b21;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.back-button:hover {
    background-color: #694c2a;
}

.form-container {
    margin-bottom: 20px;
}

.form-container form {
    display: flex;
    flex-direction: column;
}

.form-container input, .form-container textarea {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.form-container button {
    padding: 10px;
    background-color: #e78b21;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-container button:hover {
    background-color: #694c2a;
}

</style>
<body>
<section>

<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "12345678", "login_register_db");

// Comprobar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
    <div class="container">
    <h3><a href="XBARBER.php"><button class="atras" type="button">Ir atrás</button></a></h3>
        <h2>LISTADO DE USUARIOS</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre completo</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>

            <?php
            $sql = "SELECT * FROM registrar";
            $result = mysqli_query($conexion, $sql);

            // Comprobar si la consulta devuelve resultados
            if ($result) {
                // Comprobar si hay filas devueltas
                if (mysqli_num_rows($result) > 0) {
                    while($mostrar = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $mostrar['id'] . "</td>";
                        echo "<td>" . $mostrar['nombre_completo'] . "</td>";
                        echo "<td>" . $mostrar['usuario'] . "</td>";
                        echo "<td>" . $mostrar['email'] . "</td>";
                        echo "<td>
            <form action='' method='POST' style='display:inline-block;'>
                <input type='hidden' name='id' value='" . $mostrar['id'] . "'>
                <button type='submit' name='delete' style='background-color:#e74c3c;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Eliminar</button>
            </form>
          </td>";
          echo "<td>
          <form action='editar_usuario.php' method='POST' style='display:inline-block;'>
              <input type='hidden' name='id' value='" . $mostrar['id'] . "'>
              <button type='submit' name='edit' style='background-color:#3498db;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Editar</button>
          </form>
        </td>";
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


</section>
    
<section>

<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "12345678", "registrar_barber");

// Comprobar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
    <div class="container">
       
        <h2>LISTADO DE BARBEROS</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Eliminar</th>
                <th>Editar</th>

            </tr>

            <?php
            $conexion = mysqli_connect("localhost", "root", "12345678", "registrar_barber");

            // Comprobar la conexión
            if (!$conexion) {
                die("Error de conexión: " . mysqli_connect_error());
            }

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
                        echo "<td>
            <form action='' method='POST' style='display:inline-block;'>
                <input type='hidden' name='id' value='" . $mostrar['id'] . "'>
                <button type='submit' name='delete' style='background-color:#e74c3c;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Eliminar</button>
            </form>
          </td>";
          echo "<td>
          <form action='editar_barber.php' method='POST' style='display:inline-block;'>
              <input type='hidden' name='id' value='" . $mostrar['id'] . "'>
              <button type='submit' name='edit' style='background-color:#3498db;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Editar</button>
          </form>
        </td>";
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
</section>

<section>

<?php
include 'conexion_reserva.php';

// Verificar si se ha enviado un formulario para agregar o eliminar una reserva
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        // Hacemos llamado a los inputs del formulario
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $numero = $_POST['numero'];
        $comentario = $_POST['comentario'];

        // Insertamos datos de registro en la base de datos
        $instruccion_SQL = "INSERT INTO reserva_usuario (nombres, apellidos, time, date, numero, comentario)
                            VALUES ('$nombres', '$apellidos', '$time', '$date', '$numero', '$comentario')";
        $resultado = mysqli_query($conexion, $instruccion_SQL);
        if (!$resultado) {
            die("Error al insertar los datos: " . mysqli_error($conexion));
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        // Eliminamos la reserva seleccionada de la base de datos
        $delete_SQL = "DELETE FROM reserva_usuario WHERE id = '$id'";
        $resultado = mysqli_query($conexion, $delete_SQL);
        if (!$resultado) {
            die("Error al eliminar los datos: " . mysqli_error($conexion));
        }
    }
}

// Consulta a la tabla para contar las reservas
$consulta = "SELECT COUNT(*) AS total_reservas FROM reserva_usuario";
$result = mysqli_query($conexion, $consulta);

if (!$result) {
    die("No se ha podido realizar la consulta: " . mysqli_error($conexion));
}

$total_reservas = mysqli_fetch_assoc($result)['total_reservas'];

// Consulta a la tabla para obtener los datos
$consulta = "SELECT * FROM reserva_usuario";
$result = mysqli_query($conexion, $consulta);

if (!$result) {
    die("No se ha podido realizar la consulta: " . mysqli_error($conexion));
}
?>

</head>

    <div class="container">
    <h2>LISTADO DE RESERVA</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Comentario</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>

            <?php
 $sql = "SELECT * FROM reserva_usuario";
 $result = mysqli_query($conexion, $sql);

 // Comprobar si la consulta devuelve resultados
 if ($result) {
     // Comprobar si hay filas devueltas
     if (mysqli_num_rows($result) > 0) {
        while ($colum = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $colum['id'] . "</td>";
            echo "<td>" . $colum['nombres'] . "</td>";
            echo "<td>" . $colum['apellidos'] . "</td>";
            echo "<td>" . $colum['time'] . "</td>";
            echo "<td>" . $colum['date'] . "</td>";
            echo "<td>" . $colum['comentario'] . "</td>";
            echo "<td>
            <form action='' method='POST' style='display:inline-block;'>
                <input type='hidden' name='id' value='" . $colum['id'] . "'>
                <button type='submit' name='delete' style='background-color:#e74c3c;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Eliminar</button>
            </form>
          </td>";

    echo "<td>
            <form action='editar_reserva.php' method='POST' style='display:inline-block;'>
                <input type='hidden' name='id' value='" . $colum['id'] . "'>
                <button type='submit' name='edit' style='background-color:#3498db;color:white;border:none;padding:5px 10px;border-radius:5px;cursor:pointer;'>Editar</button>
            </form>
          </td>";

    echo "</tr>";
        
         }
     } else {
         echo "<tr><td colspan='6'>No se encontraron registros</td></tr>";
     }
 } else {
     echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($conexion) . "</td></tr>";
 }
            ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/i18n/jquery-ui-i18n.min.js"></script>
<script>
    $(function() {
        // Configurar idioma en español para DatePicker
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);

        // Inicializar Datepicker
        $("#datepicker").datepicker({
            minDate: 0 // Impedir seleccionar fechas anteriores a hoy
        });
    });
</script>
</section>


</body>
</html>