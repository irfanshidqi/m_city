<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NearbyController extends Controller
{
    public function index()
    {
        $data['nearby'] = $this->nearby();
        return view('content.nearby', $data);
    }

    public function nearby()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=features&act=view&typ=html&take=nearby&lang=id&lat=-7.7585716&long=110.4137619";

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
