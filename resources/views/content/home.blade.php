<!-- menghubungkan ke master -->
@extends('master')

<!-- page main -->
@section('content')
<div id="templatemo_home_page">
    <div class="templatemo_topbar">
        <div class="container">
            <div class="row">
                <div class="templatemo_titlewrapper"><img src="images/templatemo_logobg.png" alt="logo background">
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
                                    <li><a class="menu" href="#menu">Menu</a></li>
                                    @foreach($navbar->folders as $nb)
                                    <li><a class="menu" href="#{{$nb->id}}">{{$nb->name}}</a></li>
                                    @endforeach
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
                    <img src="http://temanggung.mcity.id/files/img/{{$sld->images}}" alt="Slide 1">
                    <p>{{$sld->name}}</p>
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
            <div class="col-md-12 templatemo_marginbot">You can easily <strong>change icons</strong> by looking at guidelines from <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam dapibus leo quis nisl. In lectus. Vivamus consectetuer pede in nisl. Mauris cursus pretium mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
            @foreach($menu->result->default as $mn)
            <div class="col-md-3 col-sm-6 paddingbot">
                <div class="templatemo_servicebox">
                    <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                    <div class="templatemo_service_title">{{$mn->menu_name}}</div>
                </div>
            </div>
            @endforeach
            <div class="col-md-3 col-sm-6 paddingbot">
                <div class="templatemo_servicebox">
                    <img src="{{$mn->menu_icon_url}}" height="50" width="50">
                    <div class="templatemo_service_title">Lainnya</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->
<div class="templatemo_workwrapper" id="templatemo_work_page">
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
    <div class="templatemo_team_wrapper" id="templatemo_team_page">
        <div class="container">
            <div class="row">
                <h1>Nearby</h1>
                <div class="col-md-12 templatemo_workmargin">Suspendisse potenti. Etiam elementum laoreet mauris. Ut rutrum feugiat neque. Suspendisse viverra gravida nulla. Duis sed enim vitae metus nonummy venenatis. Curabitur semper rutrum sapien. Mauris luctus. Aenean elit turpis, volutpat id, facilisis eget, mollis a, est. Nulla eget elit pellentesque enim hendrerit venenatis.</div>
                <div id="w">
                    <div class="crsl-items" data-navigation="navbtns">
                        <div class="crsl-wrap">
                            <div class="crsl-item"><img src="images/team/01.jpg" alt="person 1">
                                <div class="templatemo_team_name">Mauris Luctus</div>
                                <div class="templatemo_team_post">CEO</div>
                                <div class="templatemo_social">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    </ul>
                                </div>
                            </div>
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
    <!-- contact start -->
    <div class="templatemo_contactwrapper" id="templatemo_contact_page">
        <div class="container">
            <div class="row">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="templatemo_contactmap">
            <div id="templatemo_map"></div>
        </div>
        <div class="container templatemo_contactmargin">
            <div class="row">
                <div class="col-md-3">
                    <div class="templatemo_address_title">Mailing Address:</div>
                    No 123, Duis in enim road, Sed sit amet arcu ut quam porttitor.
                    <div class="clear"></div>
                    <div class="templatemo_address_left">Call us:</div>
                    <div class="templatemo_address_right">+001 333 000 1010<br>
                        +002 666 000 2020</div>
                    <div class="clear"></div>
                    <div class="templatemo_address_left">Hot line:</div>
                    <div class="templatemo_address_right">+009 000 999 0000</div>
                    <div class="clear"></div>
                    <div class="templatemo_address_left">Email us:</div>
                    <div class="templatemo_address_right">admin@company.com<br>
                        info@company.com</div>
                </div>
                <form action="#" method="post">
                    <div class="col-md-9">
                        <div class="col-md-4">
                            <input type="text" name="name" id="name" class="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="email" id="email" class="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="subject" id="subject" class="subject" placeholder="Subject">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="1" rows="1" class="message" placeholder="Your message... " id="message"></textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="send" value="Send Message" id="submit" class="button templatemo_sendbtn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact end -->
    @endsection