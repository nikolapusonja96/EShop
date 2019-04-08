<!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="{{asset('/')}}">
                            <img src="{{asset('./img/logo.png')}}" alt="Logo">
                        </a>
                    </div>
                    <!-- /footer logo -->

                    <p>Best place to find watch you want!</p>

                    <!-- footer social -->
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Fast links</h3>
                    <ul class="list-links">
                        @foreach($menu_podaci as $mfooter)
                        <li><a href="{{asset($mfooter->link_menu)}}">{{$mfooter->name_menu}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Customer Service</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/about_us')}}">About Us</a></li>
                        <li><a href="{{asset('/faq')}}">FAQ</a></li>

                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Categories</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/categories/men_watches')}}">Men's Watches</a></li>
                        <li><a href="{{asset('/categories/women_watches')}}">Women's Watches</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script><a href="{{asset('author')}}"> Nikola Pusonja</a> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->