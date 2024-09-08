<?php

require_once '../vendor/autoload.php';

use App\Controllers\HomeController;

$controller = new HomeController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cantidad'])) {
        $cantidad = $_POST['cantidad'];

        $conversion = $controller->conversionMoneda($cantidad);

        echo "La conversión de $cantidad COP a USD es: $conversion USD";

        $contenido = "La conversión de $cantidad COP a USD es: $conversion USD";
        $controller->generarPDF($contenido);
    }
} else {
    $controller->index();
}
