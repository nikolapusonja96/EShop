 @isset($children)
     @if(count($children)>0)
         <ul class="nav nav-second-level">
             @foreach($children as $child)
                 <li><a href="{{asset($child->link_menu)}}">{{$child->name_menu}}</a></li>

             @endforeach
         </ul>
     @endif
 @endisset


