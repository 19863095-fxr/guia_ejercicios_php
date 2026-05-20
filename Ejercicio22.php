<?php
$dolares = $_POST['dolares'];
$euros = $dolares * 0.92;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado de la Conversión</h1>";
echo "Cantidad ingresada: $" . $dolares . " USD<br><br>";

echo "<b>El equivalente es: </b>" . $euros . " EUR";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio22.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

echo "</body>";
?>