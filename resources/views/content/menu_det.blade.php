
<?php
//index.php

// $test = ["haha", "hehe"];
file_put_contents( 'public' . '../../myfile.json', $json_data);


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Agenda Temanggung</title>
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
<!--     <link rel="stylesheet" href="{{ asset('myfile.json') }}">
 -->
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
 <body>
  <br />

  @csrf
  <br />
  <div class="id_url" data-menu="{{request()->route('id')}}"></div>
  <div class="container">
<!--   <div align="center">
      <input type="text" name="search" id="search" placeholder="Cari Tempat" class="form-control">
  </div>
  <ul class="list-group" id="result"></ul>
  <br> -->
   <div class="menu-det"></div>
  </div>
 </body>

 <script src="{{ asset('csscore/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('csscore/js/plugins.js') }}"></script>
 <script src="{{ asset('csscore/js/jquery.lightbox.js') }}"></script>
 <script src="{{ asset('csscore/js/custom.js') }}"></script>
<!--  <script>
   $(document).ready(function(){

    // file_put_contents('public/myfile.json', $json_data);

    // localStorage.setItem('myfile')

      $('#search').keyup(function(){

        var datany = $(this).val();

        if(datany != ''){

            $('#result').html('');

            var field =  $('#search').val();
            var expression = new RegExp(field, "i");
            var id_place = $('.id_url');
              $.getJSON('{{ asset("myfile.json") }}',
                     function(data){
                      $.each(data, function(key, value){

                        $.each(value, function(k, v){
                          var count = $('.count').length;
                            if (v.name.search(expression) != -1 ) 
                            {
                              $('#result').append('<li class="list-group-item bisa-klik count" onclick="data_content('+v.id+')"><img src="http://temanggung.mcity.id/files/content/'+v.images+'" height="40" width="40" class="img-thumbnail"/>'+v.name+'</li>')
                              // console.log(count);
                            } 

                            // if (count > 0){
                            //    $('#result').append('<li class="list-group-item bisa-klik count">'+'Tempat Tidak Di Temukan''</li>')
                            // }
                        })
                      })
                    }) 

        }else{
            $('#result').html('');


          }

      })
   });
 </script> -->
 <script>
    $(document).ready(function(){

        var id = $('.id_url').data('menu');
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{ route('test.fetch') }}",
            method: "POST",
            data: {
                    _token: _token,
                    id: id
                },
            success:function(data){
                // console.log(data);
                // $('.menu-det').html(data);
    // localStorage.setItem('myfile')

            }

        });

        $.ajax({
            url: "{{ route('detailmenu.fetch') }}",
            method: "POST",
            data: {
                    _token: _token,
                    id: id
                },
            success:function(data){
                // console.log(data);
                $('.menu-det').html(data);
            }

        });
    });
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
            // setTimeout(remove_load, 280);
        }
  </script>
</html>