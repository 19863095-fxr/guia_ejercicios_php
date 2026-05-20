<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$resultado = "";

if ($num1 > $num2) {
    $resultado = "El primer numero (" . $num1 . ") es mayor que el segundo numero (" . $num2 . ").";
} elseif ($num2 > $num1) {
    $resultado = "El segundo numero (" . $num2 . ") es mayor que el primer numero (" . $num1 . ").";
} else {
    $resultado = "Ambos numeros son iguales (" . $num1 . ").";
}

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado de la Comparacion</h1>";
echo "Numero 1 ingresado: " . $num1;
echo "<br>";
echo "Numero 2 ingresado: " . $num2;
echo "<br><br>";

echo "<b>Respuesta: </b>" . $resultado;
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio7.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menu principal</a>";
?>