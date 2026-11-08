<?php

include "datos.php";

function edadHumana($edad) {
    return 31 + 16 * log($edad);
}

function sobrePeso(&$datos) {
    $contador = 0;

    foreach ($datos as $perro) {
        $edad = edadHumana($perro['edad']);

        if ($edad >= 60) {
            $limite = 7;
        } elseif ($edad < 40) {
            $limite = 3;
        } else {
            $limite = 6;
        }

        if ($perro['peso'] >= $limite) {
            $contador++;
        }
    }

    return $contador;
}

$conSobrepeso = sobrePeso($data);
$total = count($data);
$porcentaje = $conSobrepeso / $total * 100;

echo "Perros con sobrepeso: " . $conSobrepeso . " de " . $total . "<br>";
echo "Porcentaje de perros con sobrepeso: " . round($porcentaje, 2) . " %";

?>