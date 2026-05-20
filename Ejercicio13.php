<?php
// 1. CAPTURAR DATOS
$lado = $_POST['lado'];
$perimetro = $lado * 4;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Cálculo</h1>";
echo "Valor del lado ingresado: " . $lado . " cm<br><br>";
echo "<b>El perímetro del cuadrado es: </b>" . $perimetro . " cm";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio13.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

echo "</body>";
?>