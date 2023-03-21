<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda_telefonica;
use App\Models\telefone;
use PDF;

class PdfController extends Controller
{
   public function  gerapdf(){
    $relatorio = Agenda_Telefonica::all();
    $relatorio = Telefone::all();
    $pdf = PDF::loadView('pdf', compact('relatorio'));

    return $pdf->setPaper('a4')->stream('Agenda');

   }
}
