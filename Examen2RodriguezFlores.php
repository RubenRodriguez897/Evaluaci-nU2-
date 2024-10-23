<?php
/* CBTIS 89 
   Programa que almacena los precios de 5 artículos en un arreglo
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

// Almacena datos en un arreglo
$arrayPrecios = array(540, 405, 708, 700, 1000);
$arrayIVA = array ();
$arraySubtotal = array();
$arrayDescuentos = array();
$arrayTotal = array();

$longitud = count($arrayPrecios);

// Calcular operaciones
for ($i = 0; $i < $longitud; $i++) {
    $arrayTotal[$i] = $arrayPrecios[$i] - $arrayDescuentos[$i];
    $arraySubtotal[$i] = $arrayPrecios[$i] +  $arrayIVA[$i];
    $arrayIVA[$i] = $arrayPrecios[$i] * (0.16);
    $arrayDescuentos[$i] = $arraySubtotal[$i] * (0.10);

}

echo "ARREGLO PRECIOS <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayPrecios[$i];
    echo "<br>";
}
echo "<br>";

echo "ARREGLO IVA <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayIVA[$i];
    echo "<br>";
}
echo "<br>";

echo "ARREGLO SUBTOTAL <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arraySubtotal[$i];
    echo "<br>";
}
echo "<br>";

echo "ARREGLO DESCUENTOS <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayDescuentos[$i];
    echo "<br>";
}
echo "<br>";

echo "ARREGLO TOTAL <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayTotal[$i];
    echo "<br>";
}
echo "<br>";
?>