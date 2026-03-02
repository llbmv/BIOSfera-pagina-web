<?php

$conn = new mysqli("localhost", "root", "", "empresa_reacondicionamiento");


if ($conn->connect_error) { 
    die("Error de conexión: " . $conn->connect_error); 
}

$nom = $_POST['nombre'] ?? '';
$ape = $_POST['apellido'] ?? '';
$dir = $_POST['direccion'] ?? '';
$pag = $_POST['pago'] ?? ''; 



$sql = "INSERT INTO pedidos (nombre, apellido, direccion, metodo_pago, producto) 
        VALUES ('$nom', '$ape', '$dir', '$pag', 'Laptop Genérica')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='font-family: Arial; text-align: center; margin-top: 50px;'>";
    echo "<h1>¡Registro exitoso!</h1>";
    echo "<p>Gracias $nom $ape, tu pedido se guardó en la tabla.</p>";
    echo "<a href='http://localhost/RETO2/reacondicionado.html'>Volver al formulario</a>";
    echo "</div>";
} else {
    echo "Error en la base de datos: " . $conn->error;
}

$conn->close();
?>
