@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>My orders</h1>  {{$orders->links()}}

        @foreach($orders as $order)

        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                         <li class="list-group-item">
                            Name of the product:<strong> {{($item['item']->name_product)}}</strong>
                             <span class="badge" style="float:right;">
                             {{($item['qty'])}} Units
                        </span>
                         </li>
                        <li class="list-group-item">
                            Price of the product: <strong> ${{($item['item']->price_product)}}</strong>
                        </li>

                        @endforeach
                </ul>
            </div>
            <div class="panel-footer">
                <span class="badge" style="align:right;">Total Price: <strong style="color:white;">${{$order->cart->totalPrice}}</strong></span>
            </div>
        </div>
        @endforeach
    </div>
</div>