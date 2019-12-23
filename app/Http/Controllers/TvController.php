<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvController extends Controller
{
    public function index()
    {
        $API_key    = 'AIzaSyDVdHZOTJwAsc1wuLHTI2w0YCnCp9ZjULE';
        $channelID  = 'UCxkCR9tMxd4FBaOvhvQZXmw';
        $maxResults = 12;
        
        $data['video'] = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
        return view('content.temanggung_tv', $data);
    }
}
