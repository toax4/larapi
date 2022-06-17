<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Barryvdh\DomPDF\PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $company = Company::find(2);

        $data = [
            'company' => $company,
            'ebillets' => $company->ebillets,
        ];

        $pdf = app('dompdf.wrapper');
        // $pdf = PDF::loadView('myPDF', $data);
        $pdf->loadView('myPDF', $data);

        return $pdf->download('test.pdf');
    }
}
