<?php
$precio_base = $_POST['precio'];
$iva = $precio_base * 0.13;
$total_con_iva = $precio_base + $iva;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Cálculo de Impuestos</h1>";
echo "Precio base (sin IVA): $" . $precio_base . "<br><br>";

echo "IVA (13%): $" . $iva . "<br>";
echo "<b>Total a pagar (IVA incluido): $</b>" . $total_con_iva;
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio23.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

?>