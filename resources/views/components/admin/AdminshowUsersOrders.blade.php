<div class="row" align="center">
    <div class="col-md-8 col-md-offset-2" >
        <h1>Users orders</h1>  {{$orders->links()}}

        @foreach($orders as $order)

            <div class="panel panel-default"  style="margin-left: 130px;">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                First Name of user:<strong> {{($order->first_name)}}</strong>
                            </li>
                            <li class="list-group-item">
                                Last Name of user:<strong> {{($order->last_name)}}</strong>
                            </li>
                            <li class="list-group-item">
                                Address of user:<strong> {{($order->address)}}</strong>
                            </li>
                            <li class="list-group-item">
                                Address to deliver:<strong> {{($order->address_delivery)}}</strong>
                            </li>
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