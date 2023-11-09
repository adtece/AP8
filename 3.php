<?php

function dameNumero() {
    $combinacion = array();

    while (count($combinacion) < 6) {
        $nuevoNumero = rand(1, 49);

        if (!in_array($nuevoNumero, $combinacion)) {
            $combinacion[] = $nuevoNumero;
        }
    }

    return $combinacion;
}

$dameNumero = dameNumero();

echo "" . implode(", ", $dameNumero);
?>