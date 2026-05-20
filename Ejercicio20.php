<?php
$num = $_POST['numero'];
$suma_acumulada = 0;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado de la Suma Consecutiva</h1>";
echo "Número ingresado: " . $num . "<br><br>";

for ($i = 1; $i <= $num; $i++) {
    $suma_acumulada = $suma_acumulada + $i;
}

echo "<b>La suma de los números desde 1 hasta " . $num . " es: </b>" . $suma_acumulada;
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio20.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

echo "</body>";
?>