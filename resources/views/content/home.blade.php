<!-- menghubungkan ke master -->
@extends('master')

<!-- page main -->
@section('content')
<style>
    .d-none {
        display: none;
    }
</style>
<!-- header start -->
<div id="templatemo_home_page">
    <div class="templatemo_topbar">
        <div class="container">
            <div class="row">
                <div class="templatemo_titlewrapper"><img src="{{ asset('images/templatemo_logobg.png') }}" alt="logo background">
                    <div class="templatemo_title"><span>Temanggung Gandem</span></div>
                </div>
                <div class="clear"></div>
                <div class="templatemo_titlewrappersmall"><span>Temanggung Gandem</span></div>

                <nav class="navbar navbar-default templatemo_menu" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div id="top-menu">
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a class="menu" href="#menu">Menu Service</a></li>
                                    <li><a class="menu" href="#">Home</a></li>
                                    <li><a class="menu" href="#nearby">Nearby</a></li>
                                    <li><a class="menu" href="#weather">Weather</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="templatemo_headerimage">
        <div class="flexslider">
            <ul class="slides">
                @foreach($slider->result as $sld)
                <li>
                    @if($sld->images != 0)

                    <img style="height:500px;" src="http://temanggung.mcity.id/files/content/{{$sld->images}}" alt="Slide 1">
                    @endif
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <div class="templatemo_homebutton">
                                <img style="width:200px;height:100px;" src="{{asset('images/tittle.png')}}">
                            </div>
                            <div class="templatemo_hometitle">
                                {{$sld->name}}
                            </div>

                        </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- header end -->
<div class="clear"></div>
<!-- service start -->
<div class="detail_menu">

</div>
<div class="templatemo_servicewrapper" id="menu">
    <div class="container">
        <div class="row">
            <h1>Menu</h1>
        </div>
        <br>

        @foreach($menu->result->default as $mn)
        @if($mn->menu_id != 23 && $mn->menu_id != 3 && $mn->menu_id != 19 )


        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_menu({{ $mn->menu_id }})">
            @csrf

            <div class="templatemo_servicebox">
                <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mn->menu_name}}</div>
            </div>
        </div>

        @endif
        {{-- agenda --}}
        @if($mn->menu_id == 19)
        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="agenda({{ $mn->menu_id }})">
            <div class="templatemo_servicebox">
                <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mn->menu_name}}</div>
            </div>
        </div>

        @endif{{-- pelayanan publik --}}
        @if($mn->menu_id == 3)
        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="pelayanan({{ $mn->menu_id }})">
            <div class="templatemo_servicebox">
                <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mn->menu_name}}</div>
            </div>
        </div>

        @endif
        {{-- galeri --}}
        @if($mn->menu_id == 23)
        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_gallery(1)">
            <div class="templatemo_servicebox">
                <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mn->menu_name}}</div>
            </div>
        </div>

        @endif
        @endforeach

        {{-- lainnya --}}
        <div class="col-md-3 col-sm-6 paddingbot klik-lain">
            <div class="templatemo_servicebox">
                <img src="{{asset('images/temanggung/lainnya.png')}}" height="50" width="50">
                <div class="templatemo_service_title">Lainnya</div>
            </div>
        </div>

        <div class=" menu-data">

        </div>

        <div id="loader" class="loader center d-none"></div>
        <div class="owl-carousel owl-loaded owl-drag" id="carousel-lain" style="display: none;">

            @foreach($det->result as $nn)
            <div class="paddingbot klik-menu" onclick="data_detail_menu({{ $nn->id }})">
                @csrf

                <div class="templatemo_servicebox">
                    {{-- <img src="{{$mn->menu_icon_url}}" height="50" width="50"> --}}
                    <div class="templatemo_service_title">{{$nn->name}}</div>
                </div>
            </div>
            @endforeach

        </div>

        <h1>Layanan Publik</h1>

        <br>
        {{-- harga pokok --}}
        @foreach($menu->result->more as $mm)
        @if($mm->menu_id == 1 )
        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="harga_pokok()">
            @csrf

            <div class="templatemo_servicebox">
                <img src="{{$mm->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mm->menu_name}}</div>
            </div>
        </div>
        @endif
        @endforeach
        {{-- Pengaduan --}}
        @foreach($menu->result->more as $mm)
        @if($mm->menu_id == 2 )
        <a target="_blank" href="https://sms.temanggungkab.go.id/layanan.html">
            <div class="col-md-3 col-sm-6 paddingbot klik-menu">
                @csrf

                <div class="templatemo_servicebox">
                    <img src="{{$mm->menu_icon_url}}" height="50" width="50">
                    <div class="templatemo_service_title">{{$mm->menu_name}}</div>
                </div>
            </div>
        </a>
        @endif
        @endforeach
        {{-- Layanan Publik semua --}}
        @foreach($menu->result->more as $mm)

        @if($mm->menu_id != 1 && $mm->menu_id != 2 )
        <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_menu({{ $mm->menu_id }})">
            @csrf

            <div class="templatemo_servicebox">
                <img src="{{$mm->menu_icon_url}}" height="50" width="50">
                <div class="templatemo_service_title">{{$mm->menu_name}}</div>
            </div>
        </div>
        @endif

        @endforeach
    </div>

</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->
<div class="container templatemo_contactmargin">
    <div class="row">
        <div class="col-md-6" style="padding: 0px; margin-left: -10%">
            <img src="https://openweathermap.org/themes/openweathermap/assets/img/new-history-forecast-bulk.png">
        </div>
        <div class="col-md-6" style="padding-left: 6%; margin-top: 2%">
            <div class="templatemo_address_title">
                <h3>Status Cuaca Temanggung</h3>
            </div>
            <h5>Prakiraan Cuaca Temanggung - <span style="font-weight: bold"><?php echo date("jS F, Y", $currenttime); ?></span></h5>
            <div class="clear"></div>
            <div class="templatemo_address_title" style="font-size: 150%; margin-bottom: 10px">
                <img src="http://openweathermap.org/img/w/<?php echo $wth->weather[0]->icon; ?>.png" class="weather-icon" style="width: 12%"><?php echo ucwords($wth->weather[0]->description); ?>
            </div>
            <div class="clear"></div>
            <div class="weather-forecast">
                <i class="fa fa-fire" style="font-size: 20px; color: orangered"></i>&ensp;
                <span class="min-temperature"> <?php echo $wth->main->temp_min; ?>°C - <?php echo $wth->main->temp_max; ?>°C</span>
                &ensp;&ensp;
                <i class="fa fa-tint" style="font-size: 20px; color: deepskyblue"></i>&ensp;
                <span class="min-temperature"> <?php echo $wth->main->humidity; ?>%</span>
                &ensp;&ensp;
                <i class="fa fa-stack-overflow" style="font-size: 20px"></i>&ensp;
                <span class="min-temperature"> <?php echo $wth->wind->speed; ?> km/h</span>
            </div>
        </div>
    </div>
</div>
<!--work end-->
<div class="clear"></div>

<!-- team start -->
<div class="templatemo_servicewrapper" id="nearby">
    <div class="container">
        <div class="row">
            <h1>Lokasi Terdekat</h1>
            <br>
            <div id="w">
                <div class="crsl-items" data-navigation="navbtns">

                    <div class="crsl-wrap">
                        @foreach ($nearby->result as $n)
                        <div class="crsl-item bisa-klik" onclick="data_content({{$n->id}})">
                            {{-- @if($n->images != 0) --}}
                            <img style="width:180px;" src="http://temanggung.mcity.id/files/content/{{$n->images}}" alt="person 1">

                            {{-- @endif --}}
                            <div class="templatemo_team_name">{{$n->name}}</div>
                            <div class="templatemo_social">

                            </div>
                        </div>
                        @endforeach

                    </div>

                    <!-- @end .crsl-wrap -->
                </div>
                <!-- @end .crsl-items -->
            </div>
            <div class="clear"></div>
            <nav class="slidernav">
                <div id="navbtns" class="clearfix"><a href="#" class="previous"><img src="images/slideitmoo_back.png" alt="previous"></a> <a href="#" class="next"><img src="images/slideitmoo_forward.png" alt="next"></a></div>
            </nav>
        </div>
        <script>
            $(function() {
                $('.crsl-items').carousel({
                    visible: 4,
                    itemMinWidth: 180,
                    itemEqualHeight: 370,
                    itemMargin: 9,
                });
                $("a[href=#]").on('click', function(e) {
                    e.preventDefault();
                });
            });
        </script>
    </div>
</div>
<!-- team end -->
<div class="clear"></div>


@endsection