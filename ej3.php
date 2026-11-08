<?php

function dameNumero() {
    return rand(1, 49);
}

$combinacion = [];

while (count($combinacion) < 6) {
    $numero = dameNumero();

    if (!in_array($numero, $combinacion)) {
        $combinacion[] = $numero;
    }
}

echo "Tu combinación de la primitiva es: " . implode(", ", $combinacion);

?>