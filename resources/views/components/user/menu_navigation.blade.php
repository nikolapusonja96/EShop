<div class="menu-nav">

    <ul class="menu-list">
        @foreach($menu_podaci as $mp)
        <li>
            <a href="{{asset($mp->link_menu)}}">{{$mp->name_menu}}</a>
        </li>
        @endforeach
    </ul>
</div>