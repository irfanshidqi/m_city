<?php
//index.php

// $test = ["haha", "hehe"];
file_put_contents('public' . '../../myfile.json', $json_data);


?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <title>Temanggung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Compass Template
    http://www.templatemo.com/tm-454-compass
    -->
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="{{ asset('csscore/bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('csscore/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/templatemo-misc.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/templatemo-main.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="{{ asset('csscore/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('csscore/js/modernizr.js') }}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
    <style>
        div.title {
            font: 14px/1.85em "Open Sans", Arial, Helvetice Neue, sans-serif;
            margin: 5px;
        }

        /* button menu aanim */
        .example_e:hover {
            color: #fd704e !important;
            font-weight: 700 !important;
            letter-spacing: 3px;
            background: none;
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            transition: all 0.5s ease 0s;
        }

        .example_e {
            font-size: 12px;
            margin: 3px;
            margin-bottom: 20px;

            border: none;
            background: #d6935b;
            color: #ffffff !important;
            font-weight: 100;
            padding: 12px;
            text-transform: uppercase;
            border-radius: 6px;
            display: inline-block;
            transition: all 0.5s ease 0s;
        }

        /* tengah */
        .center {
            margin: auto;

        }

        /* display none */
        .d-none {
            display: none;
        }

        /* box */
        .box {
            background: #f0ece6;
            border-radius: 5px;
            padding: 25px;
        }

        /* bisa klik */
        .bisa-klik:hover {
            opacity: 0.5;
            cursor: pointer;
        }

        /* loading */
        .loader {
            border: 10px solid #f3f3f3;
            border-radius: 50%;
            border-top: 10px solid #3498db;
            width: 40px;
            height: 40px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* iframe responsive */
        .myIframe {
            position: relative;
            padding-bottom: 65.25%;
            padding-top: 30px;
            height: 0;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            border: solid black 1px;
        }

        .myIframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body id="temanggung">

    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header">
                                <span><i class="fa fa-phone"></i>(0293) 496 1389</span>
                                <span><i class="fa fa-envelope"></i>kominfo@temanggungkab.go.id</span>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="right-header text-right">
                                <ul class="social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="logo">
                                <img src="{{ asset('images/temanggung/title.png') }}" height="35">
                                {{-- <h1><a href="#" title="Dreri">Compass</a></h1> --}}
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">
                                <ul>
                                    <li><a href="#about">Weather</a></li>
                                    <li><a href="#contact">Nearby</a></li>
                                    <li><a href="#portfolio">Services</a></li>
                                    <li><a href="#home">Home</a></li>

                                </ul>
                            </div> <!-- /.menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#portfolio">Services</a></li>
                                <li><a href="#contact">Nearby</a></li>
                                <li><a href="#about">Weather</a></li>
                            </ul>
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->

    <div class="flexslider">
        <ul id="focus" class="slides">
            @foreach($slider->result as $sld)
            <li style="height:500px;">
                <img src="http://temanggung.mcity.id/files/content/{{$sld->images}}" alt="" style="position:relative; top:50%; transform:translateY(-50%)">
                <div class="flex-caption">
                    <h2 style="text-shadow: 3px 3px #a9a9a9;">{{$sld->name}}</h2>
                    <span></span>

                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="detail_menu "></div>

    <div id="menunya" class="menu-data "></div>
    <div class="row d-none" id="search_input">
        <div class="col-md-3 col-sm-3">
        </div>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="search" id="search" placeholder="Cari Tempat" class="form-control">
            <div id="remove">
                <ul class="list-group max-height" id="result"></ul>
            </div>
        </div>
        <br>
    </div>
    <div id="loader" class="loader center d-none"></div>



    <div id="portfolio" class="section-content">

        <div class="container">
            <div class="title-section text-center">
                <h2>Our Services</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="owl-carousel owl-loaded owl-drag text-center" id="carousel-lain" style="display: none;">

                    @foreach($det->result as $nn)
                    <div class="col-md-12 bisa-klik box " onclick="data_detail_menu({{ $nn->id }})">
                        @csrf

                        <div class="">
                            {{-- <img src="{{$mn->menu_icon_url}}" height="50" width="50"> --}}
                            <div class="templatemo_service_title">{{$nn->name}}</div>
                        </div>
                    </div>
                    @endforeach

                </div>
                @foreach($menu->result->default as $mn)
                @if($mn->menu_id != 23 && $mn->menu_id != 3 && $mn->menu_id != 19 )



                <div class="col-md-3 col-sm-6 col-xs-6" onclick="data_menu({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                {{-- agenda --}}
                @if($mn->menu_id == 19)

                <div class="col-md-3 col-sm-6 col-xs-6 " onclick="agenda({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
            </div>
            <div class="row">
                @endif{{-- pelayanan publik --}}
                @if($mn->menu_id == 3)

                <div class="col-md-3 col-sm-6 col-xs-6" onclick="pelayanan({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                {{-- galeri --}}
                @if($mn->menu_id == 23)

                <div class="col-md-3 col-sm-6 col-xs-6" onclick="data_gallery(1)">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                @endforeach
            </div> <!-- /.row -->
            <div class="title-section text-center">
                <h2>Layanan Publik</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                {{-- harga pokok --}}
                @foreach($menu->result->more as $mm)
                @if($mm->menu_id == 1 )
                <div class="col-md-3 col-sm-6 col-xs-6" onclick="harga_pokok()">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mm->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                @endforeach
                {{-- Pengaduan --}}
                @foreach($menu->result->more as $mm)
                @if($mm->menu_id == 2 )

                <a target="_blank" href="https://sms.temanggungkab.go.id/layanan.html">

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        @csrf

                        <div class="portfolio-thumb">
                            <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                            <div class="overlay">
                                <div class="inner">
                                    <h4>{{$mm->menu_name}}</h4>
                                    {{-- <span>Design</span> --}}
                                </div>
                            </div> <!-- /.overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.col-md-3 -->
                </a>

                @endif
                @endforeach
                {{-- Layanan Publik semua --}}
                @foreach($menu->result->more as $mm)

                @if($mm->menu_id != 1 && $mm->menu_id != 2 )

                <div class="col-md-3 col-sm-6 col-xs-6" onclick="data_menu({{ $mm->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mm->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif

                @endforeach
            </div>
        </div> <!-- /.container -->
    </div> <!-- /#portfolio -->



    <div id="about" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Weather</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="weather-full">
                    <div id="openweathermap-widget-11"></div>
                </div>
                <div class="weather-mini">
                    <div id="openweathermap-widget-12"></div>
                </div>
            </div> <!-- /.row -->
            {{-- <div class="row">
                <div class="our-team">
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('csscore/images/team/member-1.jpg') }}" alt="Tracy">
            <div class="overlay">
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div> <!-- /.overlay -->
        </div>
        <div class="inner-content">
            <h5>Tracy One</h5>
            <span>Product Developer</span>
            <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
        </div>
    </div> <!-- /.team-member -->
    </div> <!-- /.col-md-4 -->
    <div class="col-md-4 col-sm-6">
        <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('csscore/images/team/member-2.jpg') }}" alt="Mary">
                <div class="overlay">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div> <!-- /.overlay -->
            </div>
            <div class="inner-content">
                <h5>Mary Two</h5>
                <span>Product Designer</span>
                <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
            </div>
        </div> <!-- /.team-member -->
    </div> <!-- /.col-md-4 -->
    <div class="col-md-4 col-sm-6">
        <div class="team-member">
            <div class="member-img">
                <img src="{{ asset('csscore/images/team/member-3.jpg') }}" alt="Julia">
                <div class="overlay">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div> <!-- /.overlay -->
            </div>
            <div class="inner-content">
                <h5>Julia Three</h5>
                <span>Product Manager</span>
                <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
            </div>
        </div> <!-- /.team-member -->
    </div> <!-- /.col-md-4 -->
    </div> <!-- /.our-team -->
    </div> <!-- /.row --> --}}
    </div> <!-- /.container -->
    </div> <!-- /#about -->

    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Nearby</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="owl-carousel owl-loaded owl-drag text-center" id="carousel-lain">

                @foreach($nearby->result as $n)
                <div class="col-md-12 col-sm-10 col-xs-12 paddingbot klik-lain bisa-klik" onclick="data_content({{$n->id}})">
                    <div class="templatemo_servicebox">
                        <img src="http://temanggung.mcity.id/files/content/{{$n->images}}" height="auto" width="100%">
                        <div class="templatemo_service_title">{{$n->name}}</div>
                        {{-- <p>' . $i->district . '</p> --}}
                    </div>
                </div>
                @endforeach

            </div>
        </div> <!-- /.container -->
    </div> <!-- /#contact -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; 2020 Temanggung Smart City</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-angle-up"></i>
                            Back to Top
                        </a>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="{{ asset('csscore/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('csscore/js/plugins.js') }}"></script>
    <script src="{{ asset('csscore/js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('csscore/js/custom.js') }}"></script>
    <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
    <!-- search API menu  -->

    <script>
        $(document).ready(function() {

            // file_put_contents('public/myfile.json', $json_data);

            // localStorage.setItem('myfile')

            $('#search').keyup(function() {

                var datany = $(this).val();

                if (datany != '') {

                    $('#result').html('');

                    var field = $('#search').val();
                    var expression = new RegExp(field, "i");
                    var id_place = $('.id_url');
                    $.getJSON('{{ asset("myfile.json") }}',
                        function(data) {
                            $.each(data, function(key, value) {

                                $.each(value, function(k, v) {
                                    var count = $('.count').length;
                                    if (v.name.search(expression) != -1 || v.category.search(expression) != -1) {
                                        $('#result').append('<li class="list-group-item bisa-klik count" onclick="data_content(' + v.id + ')"><img src="http://temanggung.mcity.id/files/content/' + v.images + '" height="40" width="40" class="img-thumbnail"/>' + v.name + '</li>')
                                        // console.log(count);
                                    }

                                    // if (count > 0){
                                    //    $('#result').append('<li class="list-group-item bisa-klik count">'+'Tempat Tidak Di Temukan''</li>')
                                    // }
                                })
                            })
                        })

                } else {
                    $('#result').html('');


                }

            })
        });
    </script>
    </script>

    <script>
        $('#temanggung').click(function() {
            $('#search').val("");
            $('#remove ul li').remove();
        });
    </script>

    <!-- end search -->
    <script>
        window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
        window.myWidgetParam.push({
            id: 12,
            cityid: '1636884',
            appid: '62a5858da8e76fc807946419cbaf2867',
            units: 'metric',
            containerid: 'openweathermap-widget-12',
        });
        (function() {
            var script = document.createElement('script');
            script.async = true;
            script.charset = "utf-8";
            script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(script, s);
        })();
    </script>

    <!--cuaca script-->
    <script>
        window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
        window.myWidgetParam.push({
            id: 11,
            cityid: '1636884',
            appid: '62a5858da8e76fc807946419cbaf2867',
            units: 'metric',
            containerid: 'openweathermap-widget-11',
        });
        (function() {
            var script = document.createElement('script');
            script.async = true;
            script.charset = "utf-8";
            script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(script, s);
        })();
    </script>

    <script type="text/javascript">
        function initialize() {
            //   var mapOptions = {
            // 	  scrollwheel: false,
            //     zoom: 15,
            //     center: new google.maps.LatLng(13.758468,100.567481)
            //   };

            //   var map = new google.maps.Map(document.getElementById('map-canvas'),
            //       mapOptions);
        }

        function loadScript() {
            //   var script = document.createElement('script');
            //   script.type = 'text/javascript';
            //   script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            //       'callback=initialize';
            //   document.body.appendChild(script);
        }

        window.onload = loadScript;
        //================ owlcarousel ====================
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            })
        });
    </script>
    <script>
        function remove_load() {
            var load = document.getElementById('loader');


            load.classList.add("d-none");

        }

        function data_menu($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            var $this = $(this);

            $('html, body').animate({
                scrollTop: $('#focus').offset().top + 200
            }, 700);
            // alert(id);

            $.ajax({
                url: "{{ route('menu.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {
                    // console.log(data);
                    $('.menu-data').html(data);
                }
            });
            load.classList.remove('d-none');
            // $('#menunya').toggleClass('d-none');

            $('#search_input').removeClass('d-none');
            setTimeout(remove_load, 280);
        }

        function data_detail_menu($id) {

            const id_url = $id;
            // console.log(id_url);
            Swal.fire({
                // title: 'Agenda Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/menu-det/' + id_url + '">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        // function data_detail_menu($id) {
        //     var load = document.getElementById('loader');

        //     var id = $id;
        //     var _token = $('input[name="_token"]').val();
        //     // alert(id);

        //     $.ajax({
        //         url: "{{ route('detailmenu.fetch') }}",
        //         method: "POST",
        //         data: {
        //             _token: _token,
        //             id: id
        //         },
        //         success: function(data) {
        //             $('.detail_menu').html(data);
        //             $("#gone").remove();
        //         }
        //     });

        //     setTimeout(remove_load, 280);
        // }

        function data_content($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            // console.log(id);
            // alert(id);

            $.ajax({
                url: "{{ route('content.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {

                    var json = JSON.parse(data);
                    Swal.fire({
                        title: '<span style="font-size:20px">' + json['result'].name + '<span>',
                        html: '<span style="font-size:17px">' + json['result'].description + '<span>' + '<p> <a href="https://maps.google.com/?q=@' + json['result'].lat + ',' + json['result'].lng + '" target="_blank" >Klik Untuk Buka Maps</a> </p>',
                        imageUrl: 'http://temanggung.mcity.id/files/content/' + json['result'].images,
                        imageWidth: 400,
                        imageHeight: 300,
                        imageAlt: 'Custom image',
                        width: '650px',
                        customClass: {
                            html: 'swal-text',
                        }
                    })

                    $("#gone ").remove();
                    // console.log(data);
                }
            });
            setTimeout(remove_load, 280);
        }

        function harga_pokok() {
            var date_start = '23-12-2019';
            var date_start_submit = '23-12-2019';
            var date_end = '23-12-2019';
            var date_end_submit = '23-12-2019';
            var in_kabupaten = '23';
            var in_pasar = '87';
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('harga.fetch') }}",
                method: "POST",
                data: {
                    date_start: date_start,
                    date_start_submit: date_start_submit,
                    date_end: date_end,
                    date_end_submit: date_end_submit,
                    in_kabupaten: in_kabupaten,
                    in_pasar: in_pasar,
                    _token: _token
                },
                success: function(data) {
                    Swal.fire({
                        title: '<span style="font-size:20px">Harga Pokok<span>',
                        html: data,
                        width: '650px',
                        customClass: {
                            html: 'swal-text',
                        }
                    })
                }
            });
        }

        function agenda() {
            Swal.fire({
                // title: 'Agenda Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/agenda">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function tv() {
            Swal.fire({
                title: 'Temanggung TV',
                html: '<div class="myIframe">' + '<iframe src="/tv-temanggung">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function santunan() {
            Swal.fire({
                title: 'Santunan Warga',
                html: '<div class="myIframe">' + '<iframe src="/santunan-warga">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function ppid() {
            Swal.fire({
                title: 'PPID',
                html: '<div class="myIframe">' + '<iframe src="/ppid">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function hukum() {
            Swal.fire({
                title: 'Produk Hukum',
                html: '<div class="myIframe">' + '<iframe src="/produk-hukum">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function statistik() {
            Swal.fire({
                title: 'Data Statistik',
                html: '<a href="#" class="list-group-item" onclick=(Ipm())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://e-statistik.temanggungkab.go.id/assets/upload_files/file_upload/ipm_2.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 80px;">&nbsp;Indeks Pembangunan Manusia (IPM)<span></div></div></a><br><a href="#" class="list-group-item" onclick=(Inflasi())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://e-statistik.temanggungkab.go.id/assets/upload_files/file_upload/1.ipm.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 80px;">&nbsp;Inflasi<span></div></div></a><br><a href="#" class="list-group-item" onclick=(Pe())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://e-statistik.temanggungkab.go.id/assets/upload_files/file_upload/pe.jpg" alt="mediacenter" style="width:100%;max-width:50px;" /><span style="padding-right: 80px;">&nbsp;Pertumbuhan Ekonomi<span></div></div></a><br><a href="#" class="list-group-item" onclick=(Ntp())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://e-statistik.temanggungkab.go.id/assets/upload_files/file_upload/ntp.jpg" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 80px;">&nbsp;NTP Umum<span></div></div></a><br><a href="#" class="list-group-item" onclick=(Ntpsub())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://e-statistik.temanggungkab.go.id/assets/upload_files/file_upload/pe1.jpg" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 80px;">&nbsp;NTP Subsektor<span></div></div></a>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function Ipm() {
            Swal.fire({
                title: 'Indeks Pembangunan Manusia (IPM)',
                text: 'Kabupaten Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/ipm">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function Inflasi() {
            Swal.fire({
                title: 'Inflasi',
                text: 'Kabupaten Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/inflasi">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function Pe() {
            Swal.fire({
                title: 'Pertumbuhan Ekonomi',
                text: 'Kabupaten Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/pe">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function Ntp() {
            Swal.fire({
                title: 'Nilai Tukar Petani (NTP)',
                text: 'Kabupaten Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/ntp">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function Ntpsub() {
            Swal.fire({
                title: 'Nilai Tukar Petani (NTP) Subsektor',
                text: 'Kabupaten Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/ntpsub">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function pelayanan() {
            Swal.fire({
                title: '<h2>Pelayanan Publik</h2>',
                html: '<div class="container col-lg-12"><div class="row title center"><h4>Berita Temanggung</h4></div><div class="list-group"><a href="https://mediacenter.temanggungkab.go.id/" target="_blank" class="list-group-item"><img src="https://mediacenter.temanggungkab.go.id/asset/logo/Untitled-6.png" alt="mediacenter" style="width:100%;max-width:250px;" /></a><a href="http://hebat.temanggungkab.go.id/" class="list-group-item" target="_blank"><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span>&nbsp;HIMPUNAN BERITA TEMANGGUNG (HEBAT)<span></div></div></a><div class="row title center"><h4>Temanggung TV</h4></div><div class="list-group"><a href="#" class="list-group-item" onclick=(tv())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="https://yt3.ggpht.com/a/AGF-l79iZIy7KdM7O7JRJxVF4EJ-7GzQXaOHiAwA-A=s288-c-k-c0xffffffff-no-rj-mo" alt="mediacenter" style="width:100%;max-width:50px;" /><span style="padding-right: 130px;">&nbsp;TEMANGGUNG TV <span></div></div></a><div class="row title center"><h4>Data Temanggung</h4></div><div class="list-group"><a href="http://gandem.temanggungkab.go.id/fo/" class="list-group-item" target="_blank"><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 80px;">&nbsp;ONE DATA TEMANGGUNG<span></div></div></a><div class="row title center"><h4>Layanan Kependudukan</h4></div><div class="list-group"><a href="http://dindukcapil.temanggungkab.go.id/pelayanan/" class="list-group-item" target="_blank"><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span>&nbsp;Dinas Kependudukan dan Pencatatan Sipil<span></div></div></a><div class="row title center"><h4>Cek Pajak Bumi dan Bangunan</h4></div><div class="list-group"><a href="https://mapatda.temanggungkab.go.id/" class="list-group-item" target="_blank"><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 90px;">&nbsp;BPPKAD TEMANGGUNG<span></div></div></a><div class="row title center"><h4>PPID </h4></div><div class="list-group"><a href="#" class="list-group-item" onclick=(ppid())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 140px;">&nbsp;PPID Temanggung<span></div></div></a><div class="row title center"><h4>Santunan </h4></div><div class="list-group"><a href="#" class="list-group-item" onclick=(santunan())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 140px;">&nbsp;Santunan Temanggung<span></div></div></a><div class="row title center"><h4>Statistik </h4></div><div class="list-group"><a href="#" class="list-group-item" onclick=(statistik())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 140px;">&nbsp;Statistik Temanggung<span></div></div></a><div class="row title center"><h4>Produk Hukum</h4></div><div class="list-group"><a href="#" class="list-group-item" onclick=(hukum())><div class="row"><div class="col-lg-4 col-xs-1"></div><div class="col-lg-4 col-xs-10"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png" alt="mediacenter" style="width:100%;max-width:40px;" /><span style="padding-right: 140px;">&nbsp;Produk Hukum<span></div></div></a></div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        var page = 1;

        function kurang() {
            page--;
            data_gallery(page);
        }

        function tambah() {
            page++;
            data_gallery(page);
        }

        function data_gallery($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('gallery.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {

                    var data = JSON.parse(data);
                    console.log(data);

                    var myImages = data.result.map(function(item) {
                        return "<a target='_blank' href='http://temanggung.mcity.id/files/gallery/" + item.gallery_photo + "'><div class='gallery-item'><div class='content'><img src='http://temanggung.mcity.id/files/gallery/" + item.gallery_photo + "' alt=''><div class='desc'>Pengunggah : " + item.name + "</div></div></div></a>";
                    }).join('');

                    if (data.result.length === 0) {
                        Swal.fire({
                            title: '<span style="font-size:20px">Galeri<span>',
                            text: 'Galeri Kosong',
                            imageAlt: 'Custom image',
                            width: '1000px'
                        })
                    } else {
                        Swal.fire({
                            title: '<span style="font-size:20px">Galeri<span>',
                            html: '<div class="button bisa-klik" onclick="kurang()"><</div><div class="button bisa-klik" onclick="tambah()">></div>' + '<div class="row">' + '<div class="gallery" id="gallery">' + myImages + '</div>' + '</div>',
                            imageAlt: 'Custom image',
                            width: '1000px'
                        })
                    }

                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.klik-lain').click(function(e) {
                // var a = 1;
                // alert(a);
                $.ajax({
                    url: "{{ route('lain.fetch') }}",
                    method: "GET",
                    success: function(data) {
                        // console.log(data);
                        $('.lain-nya').html(data);

                    }
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('.close-lain').on('click', function() {
                $(".carousel-lain").css("display", "none");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.klik-lain').on('click', function() {
                // $('.lain-nya').toggleClass('d-none');
                $("#carousel-lain").toggle();
            });
        });
        $(document).ready(function() {
            $('.navbar-toggle').on('click', function() {
                // $('.lain-nya').toggleClass('d-none');
                $(".navbar-collapse").toggle();
            });
        });
    </script>
</body>

</html>