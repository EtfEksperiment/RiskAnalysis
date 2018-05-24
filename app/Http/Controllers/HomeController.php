<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bilansstanja');
    }

    public function getPdf() {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile(public_path('bil.pdf'));
        
        header("Content-Type: text/text; charset=UTF-8");
        header('Content-disposition: attachment;filename="pdf.txt"'); 
        echo $pdf->getText();
    }
}
