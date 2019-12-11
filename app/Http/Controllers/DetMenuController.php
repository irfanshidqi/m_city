<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetMenuController extends Controller
{
    public function index()
    {

        $data['det'] = $this->det();

        return view('content.detail_menu', $data);
    }

    public function det()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=category&lang=id&menu_id=0";

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
