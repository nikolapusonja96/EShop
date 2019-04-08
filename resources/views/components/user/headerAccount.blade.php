<li class="header-account dropdown default-dropdown">
    @if(!session()->has('user'))



        <div class="header-btns-icon">
            <i class="fa fa-user-o"></i>
        </div>

    <a href="{{asset('/login')}}" class="text-uppercase">Login</a><br/>
    <a href="{{asset('/signup')}}" class="text-uppercase">Join</a>

</li>

    @else


                <!-- Account -->
                <li class="header-account dropdown default-dropdown">

                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>
                        </div>

                    </div>
                    <ul class="custom-menu">
                        <li>
                            <a href="{{asset('/user-profile/'.session()->get('user')->id_user)}}">
                                <i class="fa fa-user-o"></i> My Account
                            </a>
                        </li>

                        <li>
                            <a href="{{asset('/user-orders/'.session()->get('user')->id_user)}}">
                                <i class="fa fa-shopping-cart"></i> My Orders
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('/logout')}}"><i class="fa fa-unlock-alt"></i> Logout</a>
                        </li>
                    </ul>
                </li>

    @endif