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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta db</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css">
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #FEF9E7 ;
            margin: 0;
            padding: 20px;
        }

        h1, h2, h3 {
            color:#A04000;
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
            background-color: #FDEBD0 ;
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
</head>
<body>
    <div class="container">
        <h3><a href="XBARBER.php" class="back-button">Ir atrás</a></h3>
        <h2>LISTADO DE RESERVAS</h2>
        <p>Total de reservas: <?php echo $total_reservas; ?></p>

        <div class="form-container">
            <h3>Añadir Reserva</h3>
            <form action="" method="POST">
                <input type="text" name="nombres" placeholder="Nombres" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="time" id="timepicker" name="time" placeholder="Hora" required>
                <input type="text" id="datepicker" name="date" placeholder="Fecha" required>
                <input type="text" name="numero" placeholder="Número de Teléfono" required>
                <textarea name="comentario" placeholder="Comentario" required></textarea>
                <button type="submit" name="add">Añadir Reserva</button>
            </form>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Comentario</th>
                <th>Eliminar</th>
                <th>editar</th>
            </tr>

            <?php
while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $colum['id'] . "</td>";
    echo "<td>" . $colum['nombres'] . "</td>";
    echo "<td>" . $colum['apellidos'] . "</td>";
    echo "<td>" . $colum['time'] . "</td>";
    echo "<td>" . $colum['date'] . "</td>";
    echo "<td>" . $colum['comentario'] . "</td>";
    echo "<td>
            <form action='' method='POST' style='display:inline-block;' onsubmit='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>
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

mysqli_close($conexion);
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
</body>
</html>