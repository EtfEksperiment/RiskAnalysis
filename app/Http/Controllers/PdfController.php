<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PdfController extends Controller
{
	public function index() {
		echo Pdf::getText('bil.pdf');
	}
}
