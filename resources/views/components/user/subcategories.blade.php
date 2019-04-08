<div class="custom-menu">
    <div class="row">

        <div class="col-md-2">
            @isset($children)
               @if(count($children)>0)
                    <ul class="list-links">

                        <li>
                            <h3 class="list-links-title">Brand</h3>
                        </li>
                        <hr width = "100px">
                        @foreach($children as $child)
                            <li><a href="{{asset($child->category_path)}}">{{$child->category_name}}</a>

                            </li>

                        @endforeach
                    </ul>
                @endif
            @endisset
        </div>
    </div>
</div>