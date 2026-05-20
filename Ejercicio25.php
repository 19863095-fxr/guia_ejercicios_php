<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resumen de Información Ingresada</h1>";
echo "<b>Nombre del usuario: </b>" . $nombre . "<br>";
echo "<b>Correo electrónico: </b>" . $correo . "<br>";
echo "<b>Ciudad de residencia: </b>" . $ciudad . "<br>";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio25.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>