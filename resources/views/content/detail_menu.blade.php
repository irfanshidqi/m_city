<!-- menghubungkan ke master -->
@extends('master')

<!-- page main -->
@section('content')

<!-- header start -->
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
                        <li><a class="menu" href="#menu">Menu Service</a></li>
                        {{-- @foreach($navbar->folders as $nb)
                        <li><a class="menu" href="#menu{{$nb->id}}">{{$nb->name}}</a></li>
                        @endforeach --}}
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


  </div>
  <!-- header end -->
  <div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="menu">
    <div class="container">
        <div class="row">
            <h1>Menu</h1>
            {{-- <div class="button_cont" align="center"><a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Add Call to Action</a></div> --}}
            <div id="loader" class="loader center d-none"></div>

            {{-- <div class="col-md-12 templatemo_marginbot">You can easily <strong>change icons</strong> by looking at guidelines from <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam dapibus leo quis nisl. In lectus. Vivamus consectetuer pede in nisl. Mauris cursus pretium mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div> --}}

                        <div class=" menu-data" >

                        </div>

            </div>
            <br>


            {{-- <div class="col-md-3 col-sm-6 paddingbot klik-lain">
                <div class="templatemo_servicebox">
                    <img src="{{asset('images/temanggung/lainnya.png')}}" height="50" width="50">
                    <div class="templatemo_service_title">Lainnya</div>
                </div>
            </div> --}}

            <div class="lain-nya d-none">

            </div>


        </div>
    </div>
</div>
<!-- service end -->
<div class="clear"></div>



    @endsection