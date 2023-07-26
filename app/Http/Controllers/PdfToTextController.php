<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;
class PdfToTextController extends Controller
{

    public function convert()
    {
        $text = (new Pdf())
        ->setPdf(("storage/sample.pdf"))
        ->text();
        return view('pdf_to_text', compact('text'));
    }
}
