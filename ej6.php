<?php

include "texto.php";

function contarPalabra($texto, $palabra) {
    return substr_count(strtolower($texto), strtolower($palabra));
}

function palabraAMayusculas($texto, $palabra) {
    return str_ireplace($palabra, strtoupper($palabra), $texto);
}

?>

<form method="get">
    <label>Palabra a buscar:</label>
    <input type="text" name="palabra">
    <button type="submit">Buscar</button>
</form>

<?php

if (isset($_GET['palabra']) && $_GET['palabra'] != "") {
    $palabra = $_GET['palabra'];
    $coincidencias = contarPalabra($texto, $palabra);

    if ($coincidencias > 0) {
        echo "<p>La palabra \"" . $palabra . "\" existe. Se han encontrado " . $coincidencias . " coincidencias.</p>";
        echo "<p>" . nl2br(palabraAMayusculas($texto, $palabra)) . "</p>";
    } else {
        echo "<p>La palabra \"" . $palabra . "\" no existe en el texto.</p>";
    }
}

?>