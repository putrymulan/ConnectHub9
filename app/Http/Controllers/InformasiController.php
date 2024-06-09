<?php

namespace App\Http\Controllers;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InformasiController extends Controller
{
    public function index()
    {
        $information = Informasi::all();

        return view('information.informasi', compact('information'));
    }
    public function cetak()
    {
        $information = Informasi::all();
        $pdf = Pdf::loadview('information.informasi-cetak', compact('information'));
        return $pdf->download('laporan-transaksi.pdf');
    }
}
