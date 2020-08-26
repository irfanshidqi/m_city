<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantunanController extends Controller
{
    public function index()
    {
    	$data['santunan'] = $this->santunan_fetch();
        return view('content.santunan', $data);
    }
    public function santunan_fetch()
    {
        $googleApiUrl = "http://dinsos.temanggungkab.go.id/santunan/santunan/warga";

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
