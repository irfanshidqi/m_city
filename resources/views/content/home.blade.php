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
          <div class="templatemo_titlewrappersmall">Temanggung Gandem</div>
          <nav class="navbar navbar-default templatemo_menu" role="navigation">
            <div class="container-fluid"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div id="top-menu">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="menu" href="#menu">Menu Service</a></li>
                        @foreach($navbar->folders as $nb)
                        <li><a class="menu" href="#menu{{$nb->id}}">{{$nb->name}}</a></li>
                        @endforeach
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
                <img style="height:500px;" src="http://temanggung.mcity.id/files/content/{{$sld->images}}" alt="Slide 1">
                <div class="slider-caption">
                    <div class="templatemo_homewrapper">
                            <div class="templatemo_homebutton">
                                    <img style="width:200px;height:100px;" src="{{asset('images/temanggung/temanggung.png')}}">
                            </div>


                      <div class="templatemo_hometitle">
                          {{$sld->name}}
                        </div>
                      {{-- <div class="templatemo_hometext">{% autoescape off %}
                        {{$sld->description}}
                    {% endautoescape %}</div> --}}
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
<div class="templatemo_servicewrapper" id="menu">
    <div class="container">
        <div class="row">
            <h1>Menu</h1>
            <div id="loader" class="loader center d-none"></div>
            <div class="owl-carousel owl-loaded owl-drag carousel-lain d-none" style="display: none;">

                @foreach($det->result as $mn)
                <div class="paddingbot klik-menu" onclick="data_menu({{ $mn->menu_id }})">
                    @csrf
            
                    <div class="templatemo_servicebox">
                        {{-- <img src="{{$mn->menu_icon_url}}" height="50" width="50"> --}}
                        <div class="templatemo_service_title">{{$mn->name}}</div>
                    </div>
                </div>
                @endforeach
            
              </div>
                        <div class=" menu-data" >

                        </div>

            </div>
            <br>

            @foreach($menu->result->default as $mn)
            <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_menu({{ $mn->menu_id }})">
                @csrf

                <div class="templatemo_servicebox">
                    <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                    <div class="templatemo_service_title">{{$mn->menu_name}}</div>
                </div>
            </div>
            @endforeach
            <div class="col-md-3 col-sm-6 paddingbot klik-lain">
                <div class="templatemo_servicebox">
                    <img src="{{asset('images/temanggung/lainnya.png')}}" height="50" width="50">
                    <div class="templatemo_service_title">Lainnya</div>
                </div>
            </div>

            {{-- <div class="lain-nya d-none">

            </div> --}}
            <h1>Pelayanan Publik</h1>
            {{-- <div id="loader" class="loader center d-none"></div>

            <div class="row">
                <div class=" col-md-4">

                </div>
                <div class=" col-md-5">
                    <div id="top-menu">
                        <div class="collapse navbar-collapse menu-data" id="bs-example-navbar-collapse-9">

                        </div>
                    </div>
                </div>

            </div> --}}
            <br>

            @foreach($menu->result->more as $mn)
            <div class="col-md-3 col-sm-6 paddingbot klik-menu" onclick="data_menu({{ $mn->menu_id }})">
                @csrf

                <div class="templatemo_servicebox">
                    <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                    <div class="templatemo_service_title">{{$mn->menu_name}}</div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->

<div class="templatemo_workwrapper" id="weather">
    <div>
        <div class="">
            <div class="report-container">
                <h2><?php echo $wth->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currenttime); ?></div>
                    <div><?php echo date("jS F, Y", $currenttime); ?></div>
                    <div><?php echo ucwords($wth->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img src="http://openweathermap.org/img/w/<?php echo $wth->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $wth->main->temp_max; ?>°C<span class="min-temperature"><?php echo $wth->main->temp_min; ?>°C</span>
                </div>
                <div class="time">
                    <div>Humidity: <?php echo $wth->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $wth->wind->speed; ?> km/h</div>
                </div>
            </div>
        </div>
    </div>
    <!--work end-->
    <div class="clear"></div>

    <!-- team start -->
    <div class="templatemo_workwrapper" id="menu{{$navbar->folders[2]->id}}">
        <div class="container">
            <div class="row">
                <h1>Nearby</h1>
                <div class="col-md-12 templatemo_workmargin">Suspendisse potenti. Etiam elementum laoreet mauris. Ut rutrum feugiat neque. Suspendisse viverra gravida nulla. Duis sed enim vitae metus nonummy venenatis. Curabitur semper rutrum sapien. Mauris luctus. Aenean elit turpis, volutpat id, facilisis eget, mollis a, est. Nulla eget elit pellentesque enim hendrerit venenatis.</div>
                <div id="w">
                    <div class="crsl-items" data-navigation="navbtns">

                        <div class="crsl-wrap">
                            @foreach ($nearby->result as $n)
                        <div class="crsl-item"><img style="width:100px;" src="http://temanggung.mcity.id/files/content/{{$n->images}}" alt="person 1">
                                <div class="templatemo_team_name">{{$n->name}}</div>
                                {{-- <div class="templatemo_team_post">deskripsi MODAL GAK BISA !</div> --}}
                                <div class="templatemo_social">
                                    {{-- <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                        </ul> --}}
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