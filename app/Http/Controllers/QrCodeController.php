<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;
use Illuminate\Http\Response;

class QrCodeController extends Controller


{

    public function generateQRCode()
    {

        $url = 'https://qrcodehosting-8cb4a.web.app/';
        return response(QrCode::size(250)->generate($url));



}
}
