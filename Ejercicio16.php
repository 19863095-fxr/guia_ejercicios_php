<?php
// 1. CAPTURAR DATOS
$empleado = $_POST['empleado'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$salario_total = $horas * $pago;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Recibo de Pago</h1>";
echo "Empleado: " . $empleado . "<br>";
echo "Horas trabajadas: " . $horas . " horas<br>";
echo "Pago por hora: $" . $pago . "<br><br>";

echo "<b>El salario total a pagar es: $</b>" . $salario_total;
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio16.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>