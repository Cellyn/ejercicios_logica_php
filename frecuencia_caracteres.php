<?php
function calcularFrecuenciaCaracteres($cadena) {
    // Inicializamos un array vacío para almacenar las frecuencias
    $frecuencia = [];

    // Iteramos sobre cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        // Verificamos si el carácter ya existe en el array
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

// Ejemplo de uso
$cadena = "hola mundo";
$frecuencia = calcularFrecuenciaCaracteres($cadena);

// Mostrar el resultado
print_r($frecuencia);
?>
