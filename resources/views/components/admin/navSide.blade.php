<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img width="120" height="140" style="border-radius: 100px;" src="{{asset('/img/slika_admin.jpg')}}" class="user-image img-responsive" alt="adm"/>
            </li>

            @foreach($menus as $menu)

                @if($menu->parent_id == 0)
                    <li class="category-nav show-on-click">
                        <a href="{{asset($menu->link_menu)}}">{{$menu->name_menu}} <i class="fa fa-angle-right"></i></a>
                        @component('components.admin.submenus',
                        [
                            'children' => $menu->submenus,
                            'menus' => $menus
                        ])
                        @endcomponent

                    </li>
                @endif
            @endforeach
        </ul>
    </div>

</nav>
