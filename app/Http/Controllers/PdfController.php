<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generate_pdf()
    {
        $data = "Md Kamrul Hasan";
        $pdf = Pdf::loadView('pdfInvoice', compact('data'));
        return $pdf->stream('Invoice Pdf');
    }

    public function download_pdf()
    {
        $data = "Md Kamrul Hasan";
        $pdf = Pdf::loadView('pdfInvoice', compact('data'));
        return $pdf->download('Invoice Pdf');
    }
}
