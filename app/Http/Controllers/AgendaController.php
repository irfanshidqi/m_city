<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('content.agenda');
    }

    public function event()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=event&act=view&typ=html&take=eventByMonthYear";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $agenda = json_decode($response, true);

        foreach($agenda['result'] as $e){
            $data[] = array(
                'id' => $e['id'],
                'title' => $e['name'],
                'start' => $e['startDate'],
                'end' =>$e['endDate'],
                'lat' =>$e['lat'],
                'lng' =>$e['lng'],
                'description' =>$e['description'],
                'rating' =>$e['rating'],
                'category' =>$e['category'],
                'images' =>$e['images'],


            );

        }

        $res = json_encode($data);

        return $res;
    }
}
