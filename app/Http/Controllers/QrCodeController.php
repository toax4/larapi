<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Generator;

class QrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $data = 'Je suis un QR Code';

        $qrcode = new Generator();
        $qrcode->size(200);
        $qrcode->format('png');
        $qrcode->style('round');

        if (!file_exists(public_path('temp'))) {
            mkdir(public_path('temp'));
        }

        $path = 'temp/'.time().'_qrcode.png';
        $qrcode->generate($data, public_path($path));

        return json_encode(['data' => $data, 'path' => $path]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function email()
    {
        $data = 'adrien.bock83@gmail.com';

        $qrcode = new Generator();
        $qrcode->size(200);
        $qrcode->email($data, 'bonjour', 'body body');

        return view('qrcode', ['qrcode' => $qrcode, 'data' => $data]);
    }
}
