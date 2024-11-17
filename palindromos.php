<?php
function esPalindromo($cadena) {
    // Elimina espacios, signos de puntuación y convierte a minúsculas
    $cadena_limpia = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($cadena));
    
    //recorremos la cadena en reversa y la guardamos invertida en una nueva cadena
    $cadena_invertida = "";
    for($i = strlen($cadena_limpia)-1; $i >= 0; $i--) {
        $cadena_invertida.=substr($cadena_limpia,$i,1);
    }
    
    //comparamos la cadena limpia con la invertida
    return $cadena_limpia === $cadena_invertida;
}

// Ejemplos de uso
$texto1 = "Anita lava la tina";
$texto2 = "Hola Mundo";

// evaluamos y mostramos el resultado segun sea el caso
echo esPalindromo($texto1) ? "\"$texto1\" es un palíndromo." : "\"$texto1\" no es un palíndromo.";
echo "\n";
echo esPalindromo($texto2) ? "\"$texto2\" es un palíndromo." : "\"$texto2\" no es un palíndromo.";
?>
