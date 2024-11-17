<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }
    # el bucle inicia en 2 y llega hasta la raiz cuadrada (sqrt()) del número para mejorar la eficiencia, Si encontramos un divisor en este rango, el número no es primo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible por otro número aparte de 1 y sí mismo, no es primo
        }
    }
    return true; // Es primo si no tiene divisores
}

// Ejemplo de uso
$numero = 61;
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>
