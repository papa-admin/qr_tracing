<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{
    //

    public function generate($uniq_id){

        $image = base64_encode(file_get_contents(public_path('/images/individual/'.$uniq_id.'.png')));
        $pdf = PDF::loadview('pdf.qrpdf',['image'=>$image]);
        return $pdf->stream('qrcode.pdf');
    }
}
