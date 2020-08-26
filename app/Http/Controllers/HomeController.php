<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['json_data'] = $this->test();
        $data['wth'] = $this->weather();
        $data['navbar'] = $this->navbar();
        $data['menu'] = $this->menu();
        $data['slider'] = $this->slider();
        $data['currenttime'] = time();
        $data['nearby'] = $this->nearby();
        $data['det'] = $this->det();

        return view('home', $data);
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
        $lon = "110.176743";
        $lat = "-7.315922";
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

    public function fetch_menu(Request $request)
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=category&lang=id&menu_id=" . $request->get('id') . "";

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

            <div class="button_cont" align="center">
                               
             ';
        if (empty($string->result)) {
            $output .= '
                <a class="example_e" href="#"  rel="nofollow noopener">Tidak Ada</a>';
        } else {
            foreach ($string->result as $i) {

                $output .= '
                    <a class="example_e" onclick="data_detail_menu(' . $i->id . ')">' . $i->name . '</a>';
            }
        }

        $output .= '</div>';

        return $output;
    }

    public function fetch_more(Request $request)
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
        $string = json_decode($response);

        $output = '';

        foreach ($string->result->more as $i) {

            $output .= '
                    <div class="col-md-3 col-sm-3 paddingbot klik-menu" onclick="data_menu(' . $i->menu_id . ')">
                    <div class="templatemo_servicebox">
                        <img class="gambar_content" src="' . $i->menu_icon_url . '" height="50" width="50">
                        <div class="templatemo_service_title">' . $i->menu_name . '</div>
                    </div>
                 </div>
        
                                          ';
        }

        $output .= '</ul>';

        return $output;
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
    public function test()
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=content_multicat&lang=id";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        return $response;
    }
    public function fetch_detailMenu(Request $request)
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=content_multicat&lang=id&cat_id=" . $request->get('id') . "";

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
        $output = '
        <div class="row">
            <h2 style="text-align: center;">Hasil Pencarian</h2>
        </div>
        <br>
            <div class="templatemo_servicewrapper" id="detail_menu">
                <div class="container">
      
             ';
        if (empty($string->result)) {
            $output .= '
                <a class="example_e" href="#"  rel="nofollow noopener">Tidak Ada</a>';
        } else {
            $n = 1;
            foreach ($string->result as $i) {
                if ($n % 5 == 1) {

                    $output .= '
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12 paddingbot klik-lain bisa-klik" onclick="data_content(' . $i->id . ')">
                            <div class="templatemo_servicebox">
                                <img src="http://temanggung.mcity.id/files/content/' . $i->images . '" height="auto" width="100%">
                                <div class="templatemo_service_title">' . Str::limit($i->name, 20) . '</div>
                                <p>' . $i->district . '</p>
                            </div>
                        </div>';
                } else if ($n % 5 == 0) {
                    $output .= '
                        </div>';
                } else {
                    $output .= '
                        <div class="col-md-3 col-sm-3 col-xs-12 paddingbot klik-lain bisa-klik" onclick="data_content(' . $i->id . ')">
                            <div class="templatemo_servicebox">
                                <img src="http://temanggung.mcity.id/files/content/' . $i->images . '" height="auto" width="100%">
                                    <div class="templatemo_service_title">' . Str::limit($i->name, 20) . '</div>
                                <p>' . $i->district . '</p>
                            </div>
                        </div>';
                }
                $n++;
            }
        }

        $output .= '
            </div>
        </div>';

        return $output;
    }
    public function fetch_content(Request $request)
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=content&act=view&typ=html&take=content_multicat&lang=id&id=" . $request->get('id') . "";

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
        $dsc = json_encode($string->result->description);
        $output = '';

        $output = '
        <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    
        ';

        $output .= '

          <div class="w3-center"><br>
            <span onclick="document.getElementById(\'id01\').style.display=\'none\';" class="w3-button w3-xlarge w3-hover-red w3-display-topright"</span>
            <h5>' . $string->result->category . '</h5>
            <h3>' . $string->result->name . '</h3>
            <img src="http://temanggung.mcity.id/files/content/' . $string->result->images . '" height="100" width="100">
          </div>
    
            <div class="w3-section">
              <label><b>Deskripsi</b></label>
              ' . $dsc . '
            </div>
          ';

        $output .= '
    
        </div>
      </div>
    </div>
      
             ';

        return $response;
    }

    public function fetch_gallery(Request $request)
    {
        $googleApiUrl = "http://temanggung.mcity.id/index.php?mod=m.services&sub=gallery&act=view&typ=html&page=" . $request->get('id') . "";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
    public function harga_pokok(Request $request)
    {
        $start = $request->get('date_start');
        $start_sub = $request->get('date_start_submit');
        $end = $request->get('date_end');
        $end_sub = $request->get('date_end_submit');
        $kab = $request->get('in_kabupaten');
        $pas = $request->get('in_pasar');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://hargajateng.org/get_harian/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "date_start=" . $start . "&date_start_submit=" . $start_sub . "&date_end=" . $end . "&date_end_submit=" . $end_sub . "&in_kabupaten=" . $kab . "&in_pasar=" . $pas . "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
