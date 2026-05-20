<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;
$total = $subtotal;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Factura Comercial</h1>";
echo "Cliente: " . $cliente . "<br>";
echo "Producto: " . $producto . "<br>";
echo "Cantidad: " . $cantidad . "<br>";
echo "Precio Unitario: $" . $precio . "<br><br>";

echo "---------------------------------------<br>";
echo "Subtotal: $" . $subtotal . "<br>";
echo "<b>Total a Pagar: $</b>" . $total . "<br>";
echo "---------------------------------------<br><br>";

echo "<hr>";
echo "<a href='Ejercicio18.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";

echo "</body>";
?>