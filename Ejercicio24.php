<?php
$edad_actual = $_POST['edad'];
$edad_futura = $edad_actual + 10;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Proyección de Edad</h1>";
echo "Edad actual ingresada: " . $edad_actual . " años<br><br>";

echo "<b>Dentro de 10 años usted tendrá: </b>" . $edad_futura . " años.";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio24.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>