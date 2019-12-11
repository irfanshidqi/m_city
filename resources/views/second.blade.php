<!DOCTYPE html>
<!-- 
Temanggung Gandem Template
http://www.templatemo.com/preview/templatemo_426_Temanggung Gandem
-->

<head>
    <title>Temanggung Gandem</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Style Sheets -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('modal/modal.css') }}">

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdown.js') }}"></script>
    <script src="{{ asset('js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tab.js') }}"></script>
    <script src="{{ asset('js/jquery.singlePageNav.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('js/templatemo_custom.js') }}"></script>
    <script src="{{ asset('js/responsiveCarousel.min.js') }}"></script>
    <script src="{{ asset('modal/modal.js') }}"></script>

    <style>
        div.paddingbot:hover {
            opacity: 0.5;
            cursor: pointer;
        }
    </style>
<style>
    .loader {
      border: 10px solid #f3f3f3;
      border-radius: 50%;
      border-top: 10px solid #3498db;
      width: 40px;
      height: 40px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 1s linear infinite;
    }
    
    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style>
    <style>
    .center {
  margin: auto;

}</style>
</head>

<body>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- footer start -->
    <div class="templatemo_footerwrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">Copyright &copy; 2019 <a href="#">Temanggung Smart City</a>
                    <!-- | Design: <a href="http://www.templatemo.com">templatemo</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <script>
        // <!-- scroll to specific id when click on menu -->
        // Cache selectors
        var lastId,
            topMenu = $("#top-menu"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });
        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e) {
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
        });
        // Bind to scroll
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;
            // Get id of current scroll item
            var cur = scrollItems.map(function() {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href=#" + id + "]").parent().addClass("active");
            }
        });
    </script>

    <script>
        function remove_load(){
            var load = document.getElementById('loader');


            load.classList.add("d-none");

        }

        function data_menu($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
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
            setTimeout(remove_load,280);

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
            $('.klik-lain').on('click', function() {
                $('.lain-nya').toggleClass('d-none');

            });
        });
    </script>
</body>

</html>