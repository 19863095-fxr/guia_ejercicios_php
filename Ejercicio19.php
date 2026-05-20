<?php
$num = $_POST['numero'];

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Tabla de Multiplicar del " . $num . "</h1>";

for ($i = 1; $i <= 10; $i++) {
    $multiplicacion = $num * $i;
    echo $num . " x " . $i . " = " . $multiplicacion . "<br>";
}

echo "<br><br>";
echo "<hr>";
echo "<a href='Ejercicio19.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>