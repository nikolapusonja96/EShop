@if($message = session()->get('message'))
    <script>
        alert('Product has been added to cart successfully!');
    </script>

@endif
@foreach($single_product as $product)
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            @if($product->parent_id == 0)
                @if($product->category_id == 1)
                     <li><a href="{{asset('/women_watches')}}">{{$product->category_name}}</a></li>
                    <li><a>{{$product->brand_product}}</a></li>
                     <li class="active">{{$product->name_product}}</li>
                @endif
                @if($product->category_id == 2)
                    <li><a href="{{asset('/men_watches')}}">{{$product->category_name}}</a></li>
                        <li><a>{{$product->brand_product}}</a></li>

                    <li class="active">{{$product->name_product}}</li>
                @endif
            @endif
        </ul>
    </div>
</div>
<!--{{$product->img_product}}-->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                        <div class="product-view">
                            <img width="200" height="670" src="{{asset($product->img_product)}}" alt="{{$product->description_img_product}}"/>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <h1 class="product-name"><i>{{$product->name_product}}</i></h1>
                        <i>
                            <strong style="color:darkorange">Price:</strong>
                        </i>
                        <h4 style="color:midnightblue">${{$product->price_product}}</h4>
                        <i>
                            <strong style="color:darkorange">Brand:</strong>
                        </i>
                        <h4 style="color:midnightblue"> {{$product->brand_product}}</h4>
                        <i>
                            <strong style="color:darkorange">Bracelet:</strong>
                        </i>
                        <h4 style="color:midnightblue"> {{$product->bracelet}}</h4>
                        <i>
                            <strong style="color:darkorange">Bracelet color:</strong>
                        </i>
                        <h4 style="color:midnightblue"> {{$product->bracelet_color}}</h4>
                        <i>
                            <strong style="color:darkorange">Date added at:</strong>
                        </i>
                        <h4 style="color:midnightblue"> {{$product->date_added_at}}</h4>





                        <div class="product-btns">

                             <a href="{{asset('/addToCart/'.$product->id_product)}}">
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                             </a>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endforeach
<!-- /section -->
