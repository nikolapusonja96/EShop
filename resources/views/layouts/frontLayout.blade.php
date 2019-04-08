<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    @include('components.user.head')
</head>

<body>
<!-- HEADER -->
<header>
    <!-- top Header -->
    @include('components.user.topHeader')
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            @include('components.user.headerLeft')
            @include('components.user.headerRight')
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('components.user.navigation')
<!-- /NAVIGATION -->

<!-- HOME -->
<div id="home">
    <!-- container -->
    @yield('slider')
    <!-- /container -->
</div>
<!-- /HOME -->

<!-- section -->
@yield('section_top')
<!-- /section -->

<!-- section -->
@yield('section_bottom')
<!-- /section -->

<!-- FOOTER -->
<footer id="footer" class="section section-grey">
@include('components.user.footer')
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
