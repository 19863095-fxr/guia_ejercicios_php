<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 1.8) + 32;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado de la Conversión</h1>";
echo "Temperatura ingresada: " . $celsius . " °C<br><br>";

echo "<b>El equivalente es: </b>" . $fahrenheit . " °F";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio15.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>