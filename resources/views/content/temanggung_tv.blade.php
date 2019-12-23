<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TV Temanggung</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js.bootstrap.min.js"></script>

    <style type="text/css">
    .container{
        padding: 15px;
    }
    .youtube-video h2{
        font-size: 16px;
    }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">

    @foreach($video->items as $item)
{{-- tv temanggung --}}
    @if(isset($item->id->videoId))
            <div class=" col-lg-3 col-sm-4 col-xs-6 youtube-video">
                    <iframe width="220" height="150" src="https://www.youtube.com/embed/{{$item->id->videoId}}" frameborder="0" allowfullscreen></iframe>
                    <h2>{{$item->snippet->title}}</h2>
                </div>
        @endif
    @endforeach
    </div>
</div>

</body>
</html>