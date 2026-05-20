<?php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$promedio = ($n1 + $n2 + $n3) / 3;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Promedio</h1>";
echo "Nota 1: " . $n1 . "<br>";
echo "Nota 2: " . $n2 . "<br>";
echo "Nota 3: " . $n3 . "<br><br>";


echo "<b>El promedio final es: </b>" . $promedio;
echo "<br><br>";

if ($promedio >= 7) {
    echo "Estado: Aprobado";
} else {
    echo "Estado: Reprobado";
}

echo "<br><br>";
echo "<hr>";
echo "<a href='Ejercicio11.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>