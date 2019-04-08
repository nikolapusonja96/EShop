
<div class="container">
    <!-- home wrap -->
    <div class="home-wrap">
        <!-- home slick -->
        <div id="home-slick">
            <!-- banner -->
            @foreach($podaci as $p)
            <div class="banner banner-1">
                <img src="{{$p->path}}" alt="{{$p->alt }}">
            </div>
            @endforeach
            <!-- /banner -->
        </div>
        <!-- /home slick -->
    </div>
    <!-- /home wrap -->
</div>