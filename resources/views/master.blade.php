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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- JavaScripts -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/jquery.singlePageNav.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
    <script src="js/responsiveCarousel.min.js"></script>
</head>

<body>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- footer start -->
    <div class="templatemo_footerwrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">Copyright &copy; 2084 <a href="#">Company Name</a>
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
</body>

</html>