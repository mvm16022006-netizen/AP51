<?php

function diferenciaEdad ($edad1, $edad2){
    $diferencia = $edad1 - $edad2;

    return abs($diferencia);
}

$resultado = diferenciaEdad(17,40);
echo "La diferencia de edad es de " . $resultado . " años";
?>