<li class="header-cart dropdown default-dropdown">
    <a href="{{asset('/cart')}}">

        <div class="header-btns-icon">
            <i class="fa fa-shopping-cart"></i>
            <span class="qty">

                {{session()->has('cart') ? session()->get('cart')->totalQty : 0}}
            </span>

        </div>


    </a>
</li>