<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPIDController extends Controller
{
    public function index()
    {
    	$data['ppid'] = $this->ppid_fetch();
        return view('content.ppid', $data);
    }
    public function ppid_fetch()
    {
        $googleApiUrl = "https://ppid.temanggungkab.go.id/frontend/api_berkala";

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
