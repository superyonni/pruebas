<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Asegúrate de haber instalado previamente el paquete "barryvdh/laravel-dompdf" para poder usar PDF

class ExportController extends Controller
{
    public function exportarPDF()
    {
        // Lógica para generar el PDF de exportación
        $data = [
            // Datos que deseas incluir en el PDF
        ];

        $pdf = PDF::loadView('export.pdf', $data);

        return $pdf->download('exportacion.pdf');
    }
}
