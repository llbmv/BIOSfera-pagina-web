<?php

include("db.php");


$nombre   = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido']; 
$tipo     = $_REQUEST['tipo'];
$mensaje  = $_REQUEST['mensaje'];


$horario = isset($_REQUEST['horario']) ? $_REQUEST['horario'] : 'No aplica';


$dias_final = "No aplica";
if (isset($_REQUEST['dia']) && is_array($_REQUEST['dia'])) {

    $dias_final = implode(", ", $_REQUEST['dia']);
}


$sql = "INSERT INTO opiniones (nombre, apellido, tipo, mensaje, horario, dias) 
        VALUES ('$nombre', '$apellido', '$tipo', '$mensaje', '$horario', '$dias_final')";


if (f_sql($sql)) {
    echo "<h2>¡Registro exitoso!</h2>";
    echo "Gracias $nombre $apellido, tu $tipo ha sido enviada correctamente.";
    echo "<br><a href='reparacion.html'>Volver al formulario</a>";
} else {
    echo "Hubo un error al guardar los datos en MySQL. Verifica las columnas de la tabla.";
}
?>
