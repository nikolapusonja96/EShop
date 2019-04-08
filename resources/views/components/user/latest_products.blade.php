<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Latest Products</h2>
                </div>
            </div>
            <!-- section title -->

            <!-- Product Single -->

            @foreach($products as $product)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                        </div>
                        <a href="{{asset('/product/'.$product->id_product)}}"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
                        <img src="{{$product->img_product}}" alt="{{$product->description_img_product}}">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">${{$product->price_product}}</h3>

                        <h2 class="product-name"><a href="{{asset('/product/'.$product->id_product)}}">{{$product->name_product}}</a></h2>


                        <div class="product-btns">

                            <a href="{{asset('/addToCart/'.$product->id_product)}}">
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            @if($message = session()->get('message'))
                <script>
                    alert('Product has been added to cart successfully!');
                </script>

        @endif
            <!-- /Product Single -->
        </div>
        <!-- /row -->




    </div>
    <!-- /container -->
</div>