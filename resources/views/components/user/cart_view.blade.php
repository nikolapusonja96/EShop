@if(session()->has('cart'))
<div class="row" align="center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
            @foreach($products as $product)
            <li class="list-group-item">
                <span class="badge">{{$product['qty']}}</span>
                <strong>{{$product['item']->name_product}}</strong>
                <img src="{{$product['item']->img_product}}" alt="{{$product['item']->description_img_product}}" width="30" height="40"/>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                        Action<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{asset('/reduce/'.$product['item']->id_product)}}">Remove one product</a>
                        </li>
                        <li>
                            <a href="{{asset('/removeAll/'.$product['item']->id_product)}}">Remove All</a>
                        </li>
                    </ul>
                </div>
                <br/>
                <span class="label label-success">Total price: ${{$product['price']}}</span>

            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row" align="center">
    <strong>Total price of cart: ${{$totalPrice}}</strong>
</div>

<div class="row" align="center">
    <a href="{{asset('/checkout')}}">
         <button class="primary-btn" style="margin-left: 540px; margin-top: 0;">Checkout <i class="fa fa-arrow-circle-right"></i></button>
    </a>
</div>
@else
<div class="row" align="center">
    <img src="{{asset('img/emptycart.jpg')}}" alt="emptyCart" width="300" height="300"/>
</div>
    @endif
@if(session()->has('message'))
    <div class="alert alert-danger">
        {{session()->get('message')}}
        <a href="{{asset('/login')}}"></a>
    </div>
@endif



