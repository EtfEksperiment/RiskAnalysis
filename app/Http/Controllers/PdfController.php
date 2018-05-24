<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PdfController extends Controller
{
	public function index() {
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile(public_path('bil.pdf'));
 
		$text = $pdf->getText();
		echo $text;
	}
}
