<?php

function esc(string $texto): string {
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function formatearFecha(string $fecha): string {
    $meses = [
        'enero','febrero','marzo','abril','mayo','junio',
        'julio','agosto','septiembre','octubre','noviembre','diciembre'
    ];

    $timestamp = strtotime($fecha);
    $dia = date('j', $timestamp);
    $mes = $meses[date('n', $timestamp) - 1];
    $anio = date('Y', $timestamp);

    return "$dia de $mes de $anio";
}

function extracto(string $texto, int $max = 100): string {
    if (strlen($texto) > $max) {
        return substr($texto, 0, $max) . '...';
    }
    return $texto;
}