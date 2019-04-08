@if($message = session()->get('message'))
    <script>
        alert('Product has been added to cart successfully!');
    </script>

@endif
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">




                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Bracelet Type</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/categories/men_watches/omega/bracelet_type/steel')}}">Steel</a></li>
                        <li><a href="{{asset('/categories/men_watches/omega/bracelet_type/leather')}}">Leather</a></li>
                        <li><a href="{{asset('/categories/men_watches/omega/bracelet_type/rubber')}}">Rubber</a></li>
                        <li><a href="{{asset('/categories/men_watches/omega/bracelet_type/titanium')}}">Titanium</a></li>
                        <li><a href="{{asset('/categories/men_watches/omega/bracelet_type/gold')}}">Gold</a></li>
                    </ul>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->

                <div class="aside">
                    <h3 class="aside-title">Filter by Brand</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/categories/men_watches/omega')}}">Omega</a></li>
                        <li><a href="{{asset('/categories/men_watches/rolex')}}">Rolex</a></li>
                        <li><a href="{{asset('/categories/men_watches/ulysse_nardin')}}">Ulysse Nardin</a></li>

                    </ul>
                </div>
                <!-- /aside widget -->


            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">


                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            {{$men_omega_gold->links()}}
                        </div>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->

                <div id="store">
                    <!-- row -->
                    <div class="row" >
                        <!-- Product Single -->
                        @foreach($men_omega_gold as $gold)
                            <div class="col-md-4 col-sm-6 col-xs-6 ">
                                <div class="product product-single">
                                    <div class="product-thumb">

                                        <a href="{{asset('/product/'.$gold->id_product)}}"> <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
                                        <img src="{{asset($gold->img_product)}}" alt="{{$gold->description_img_product}}">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">${{$gold->price_product}}</h3>

                                        <h2 class="product-name">
                                            <a href="{{asset('/product/'.$gold->id_product)}}">{{$gold->name_product}}</a>
                                        </h2>
                                        <div class="product-btns">

                                            <a href="{{asset('/addToCart/'.$gold->id_product)}}">
                                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /Product Single -->
                        @endforeach
                        <div class="clearfix visible-sm visible-xs"></div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->

            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->