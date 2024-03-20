<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Barryvdh\DomPDF\PDF;
use Dompdf\Adapter\PDFLib;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $produtos = Produtos::where('id', $id)->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('crud.gerar-pdf', ['produtos' => $produtos])->setPaper('a4', 'landscape');

        return $pdf->download('produto_' . $id . '.pdf');
    }
}
