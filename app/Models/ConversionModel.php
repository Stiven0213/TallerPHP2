<?php

namespace App\Models;

class ConversionModel {

    public function convertirMoneda($cantidad, $tasa) {
        return $cantidad * $tasa;
    }

    public function calcularIMC($peso, $altura) {
        return $peso / ($altura * $altura);
    }
}
