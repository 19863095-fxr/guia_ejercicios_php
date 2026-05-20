<?php
$palabra = $_POST['palabra'];
$cantidad = strlen($palabra);

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Análisis</h1>";
echo "Palabra ingresada: " . $palabra . "<br><br>";

echo "<b>La palabra contiene: </b>" . $cantidad . " letras.";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio21.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

echo "</body>";
?>