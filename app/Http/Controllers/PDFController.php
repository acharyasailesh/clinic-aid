<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;

class PDFController extends Controller
{
    //
    public function index()
    {

        $pdf=PDF::loadView('test');
        return $pdf->stream('test.pdf');
    }
}
