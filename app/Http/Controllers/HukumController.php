<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HukumController extends Controller
{
    public function index()
    {
    	$data['hukum'] = $this->hukum_fetch();
        return view('content.produk_hukum', $data);
    }
    public function hukum_fetch()
    {
        $googleApiUrl = "http://jdih.temanggungkab.go.id/download/jdih";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        return json_decode($response);
    }
}
