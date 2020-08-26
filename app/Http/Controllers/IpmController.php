<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpmController extends Controller
{
    public function index()
    {
        $data['ipm'] = $this->ipm_fetch();
        return view('content.ipm', $data);
    }
    public function ipm_fetch()
    {
        $googleApiUrl = "https://e-statistik.temanggungkab.go.id/Frontend/api_ipm";

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
