<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\Producto;


class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $productos = Producto::orderBy('nombre_producto','asc')->get();

        $pdf = PDF::loadView('myPDF', compact('productos'));

        return $pdf->download('itsolutionstuff.pdf');

       /*  $data = [
            'title' => 'Funciona',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf'); */
    }
}
