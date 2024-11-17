<?php

function generarFibonacci($n) {
    $serie_fibonacci = [];
    // primeros términos de la serie
    if ($n >= 1) $serie_fibonacci[] = 0;
    if ($n >= 2) $serie_fibonacci[] = 1;

    // Generamos los siguientes números de la serie hasta completar los n términos
    for ($i = 2; $i < $n; $i++) {
        $serie_fibonacci[] = $serie_fibonacci[$i - 1] + $serie_fibonacci[$i - 2];
    }

    return $serie_fibonacci;
}

// Imprimir los primeros n términos de la serie Fibonacci
$n = 10; // modificar este valor para generar más o menos términos de la serie
$fibonacci = generarFibonacci($n);
echo implode(", ", $fibonacci);
/* utilizamos implode para convertir el arreglo a cadena, separando cada elemento por coma, en este caso
* sintaxis: implode(separator, array)
*/
?>