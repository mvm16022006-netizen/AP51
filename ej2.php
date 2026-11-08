<?php

function numRomano($num){
    $romanos = ["I","II","III","IV","V","VI","VII","VIII","IX","X"];

    return ($romanos[$num -1]);
}

$num = 7;
$resultado = numRomano ($num);

echo "El " .  $num . " en romano es: " . $resultado;
?>