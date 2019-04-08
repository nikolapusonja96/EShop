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
                    <h3 class="aside-title">Filter by Brand</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/rolex')}}">Rolex</a></li>
                        <li><a href="{{asset('/omega')}}">Omega</a></li>

                    </ul>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by Gender</h3>
                    <ul class="list-links">
                        <li><a href="{{asset('/categories/men_watches')}}">Men</a></li>
                        <li><a href="{{asset('/categories/women_watches')}}">Women</a></li>
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

                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By Price:</span>
                            <a href="{{asset('/store/ASC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-up"></i></a>
                            <a href="{{asset('/store/DESC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                          {{$all_products->links()}}
                        </div>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->

                <div id="store">
                    <!-- row -->
                    <div class="row" >
                        <!-- Product Single -->
                        @foreach($all_products as $all_product)
                        <div class="col-md-4 col-sm-6 col-xs-6 ">
                            <div class="product product-single">
                                <div class="product-thumb">

                                    <a href="{{asset('/product/'.$all_product->id_product)}}"> <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
                                    <img src="{{asset($all_product->img_product)}}" alt="{{$all_product->description_img_product}}">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">${{$all_product->price_product}}</h3>

                                    <h2 class="product-name">
                                        <a href="{{asset('/product/'.$all_product->id_product)}}">{{$all_product->name_product}}</a>
                                    </h2>
                                    <div class="product-btns">

                                        <a href="{{asset('/addToCart/'.$all_product->id_product)}}">
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