<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InflasiController extends Controller
{
    public function index()
    {
        $data['inflasi'] = $this->Inflasi_fetch();
        return view('content.inflasi', $data);
    }
    public function Inflasi_fetch()
    {
        $googleApiUrl = "https://e-statistik.temanggungkab.go.id/Frontend/api_inflasi";

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
