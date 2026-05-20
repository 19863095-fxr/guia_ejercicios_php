<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

$suma = $num1 + $num2;

echo"<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Cálculo</h1>";
echo "Primer número ingresado: " . $num1;
echo "<br>";
echo "Segundo número ingresado: " . $num2;
echo "<br><br>";

echo "<b>El resultado de la suma es: </b>" . $suma;
echo "<br><br>";
echo "<hr>";
echo "<a href='Ejercicio2.html'>Regresar al formulario</a>";
echo"<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>