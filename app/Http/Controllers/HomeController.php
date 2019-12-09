<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['wth'] = $this->weather();
        $data['navbar'] = $this->navbar();
        $data['menu'] = $this->menu();
        $data['slider'] = $this->slider();
        $data['currenttime'] = time();
        $data['nearby'] = $this->nearby();
        return view('content.home', $data);
    }

    public function navbar()
    {
        $googleApiUrl = "https://www.getpostman.com/collections/c50950bf2dff62ebb500";

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

    public function weather()
    {
        $apiKey = "62a5858da8e76fc807946419cbaf2867";
        $lon = "110.4137619";
        $lat = "-7.7585716";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?lat=" . $lat . "&lon=" . $lon . "&units=metric&appid=" . $apiKey;

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

    public function menu()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=content_menus&lang=id";

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

    public function slider()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=features&act=view&typ=html&take=feature_images&lang=id";

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
    public function fetch_menu(Request $request){
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=category&lang=id&menu_id=".$request->get('id')."";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $string = json_decode($response);

        $output = '';

        $output = '

            <ul class="nav navbar-nav">
                                
             ';
             if(empty($string->result)){
                $output .= '
                <li><a class="menu" href="#">Hasil Tidak Ada</a></li>
    
                                      ';
             }else{
                foreach ($string->result as $i) {

                    $output .= '
                    <li><a class="menu" href="#">' . $i->name . '</a></li>
        
                                          ';
                }
             }

        $output .='</ul>';

        return $output;
    }

    public function fetch_more(Request $request){
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=content_menus&lang=id";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $string = json_decode($response);

        $output = '';

                foreach ($string->result->more as $i) {

                    $output .= '
                    <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_menu('.$i->menu_id.')">
                    <div class="templatemo_servicebox">
                        <img src="'.$i->menu_icon_url.'" height="50" width="50">
                        <div class="templatemo_service_title">' . $i->menu_name . '</div>
                    </div>
                 </div>
        
                                          ';
                
             }

        $output .='</ul>';

        return $output;
    }
}
