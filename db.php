<?php
function f_sql($consulta) {
  
    $conexion = mysqli_connect("localhost", "root", "", "empresa_reacondicionamiento");


    $resultado = mysqli_query($conexion, $consulta);

 
    mysqli_close($conexion);

    return $resultado;
}
?>
