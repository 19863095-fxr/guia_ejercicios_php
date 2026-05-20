<?php
$monto = $_POST['monto'];

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Pago</h1>";
echo "Monto original de la compra: $" . $monto . "<br><br>";

if ($monto > 100) {
    $descuento = $monto * 0.10;
    $total_final = $monto - $descuento;
    
    echo "¡Felicidades! Aplica a un descuento del 10% por compras mayores a $100.<br>";
    echo "Descuento aplicado: $" . $descuento . "<br>";
    echo "<b>Total a pagar con descuento: $</b>" . $total_final;
} else {
    echo "No aplica descuento (compras menores o iguales a $100).<br>";
    echo "<b>Total a pagar: $</b>" . $monto;
}

echo "<br><br>";
echo "<hr>";
echo "<a href='Ejercicio17.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.html'>Regresar al menú principal</a>";
?>