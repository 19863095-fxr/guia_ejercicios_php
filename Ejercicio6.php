<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Datos Recibidos</h1>";
echo "El nombre ingresado es: " . $nombre;
echo "<br>";
echo "La edad ingresada es: " . $edad . " años";
echo "<br><br>";
echo "<hr>";
echo "<a href='Ejercicio6.html'>Regresar al formulario</a>";
echo"<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>