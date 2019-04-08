<div class="section">
    <!-- container -->
    <div class="container">
        <div class="col-md-12">
            <div class="section-title">
                <h2 class="title">NEW COLLECTION</h2>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- banner -->
            @foreach($collection as $collect)
            <div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="{{asset($collect->path_collection)}}">
                    <img src="{{$collect->image_collection}}" alt="{{$collect->alt_image}}">
                    <div class="banner-caption text-center">
                        <h2 class="white-color">{{$collect->text_collection}}</h2>
                    </div>
                </a>
            </div>
            <!-- /banner -->
            @endforeach

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>