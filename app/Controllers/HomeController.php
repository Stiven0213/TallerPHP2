<?php

namespace App\Controllers;

use App\Models\ConversionModel;
use Dompdf\Dompdf;
use GuzzleHttp\Client;

class HomeController
{

    private $conversionModel;

    public function __construct()
    {
        $this->conversionModel = new ConversionModel();
    }

    public function index()
    {
        require_once '../app/Views/home.php';
    }

    public function obtenerTasaCambio($monedaBase = 'COP', $monedaObjetivo = 'USD')
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.exchangerate-api.com/v4/latest/' . $monedaBase);
        $data = json_decode($response->getBody(), true);
        return $data['rates'][$monedaObjetivo];
    }

    public function conversionMoneda($cantidad)
    {
        $tasa = $this->obtenerTasaCambio(); 
        return $this->conversionModel->convertirMoneda($cantidad, $tasa);
    }

    public function generarPDF($contenido)
    {
        $dompdf = new Dompdf(); 
        $dompdf->loadHtml($contenido); 
        $dompdf->setPaper('A4', 'portrait'); 
        $dompdf->render(); 
        $dompdf->stream("document.pdf", ["Attachment" => false]);
    }
}
