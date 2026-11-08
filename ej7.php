<?php

include "texto.php";

function numCaracteres($texto) {
    $sinEspacios = str_replace([" ", "\n"], "", $texto);
    return strlen($sinEspacios);
}

function numPalabras($texto) {
    return str_word_count($texto);
}

function numFrases($texto) {
    return substr_count($texto, ".");
}

function numParrafos($texto) {
    return count(explode("\n", $texto));
}

function promedioLetrasPorPalabra($texto) {
    $palabras = str_word_count($texto, 1);
    $letras = 0;

    foreach ($palabras as $palabra) {
        $letras += strlen($palabra);
    }

    return $letras / count($palabras);
}

function promedioPalabrasPorFrase($texto) {
    return numPalabras($texto) / numFrases($texto);
}

function promedioFrasesPorParrafo($texto) {
    return numFrases($texto) / numParrafos($texto);
}

function letraModa($texto) {
    $letras = str_split(strtolower(str_replace([" ", "\n", ".", ",", ";"], "", $texto)));
    $repeticiones = array_count_values($letras);
    arsort($repeticiones);
    return array_key_first($repeticiones);
}

function palabraModa($texto) {
    $palabras = str_word_count(strtolower($texto), 1);
    $repeticiones = array_count_values($palabras);
    arsort($repeticiones);
    return array_key_first($repeticiones);
}

echo "Número de caracteres (sin espacios ni saltos de línea): " . numCaracteres($texto) . "<br>";
echo "Número de palabras: " . numPalabras($texto) . "<br>";
echo "Número de frases: " . numFrases($texto) . "<br>";
echo "Número de párrafos: " . numParrafos($texto) . "<br>";
echo "Promedio de letras por palabra: " . round(promedioLetrasPorPalabra($texto), 2) . "<br>";
echo "Promedio de palabras por frase: " . round(promedioPalabrasPorFrase($texto), 2) . "<br>";
echo "Promedio de frases por párrafo: " . round(promedioFrasesPorParrafo($texto), 2) . "<br>";
echo "Letra moda: " . letraModa($texto) . "<br>";
echo "Palabra moda: " . palabraModa($texto) . "<br>";

?>