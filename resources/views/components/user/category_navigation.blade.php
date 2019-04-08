<div class="category-nav show-on-click">
    <span class="category-header">Categories <i class="fa fa-list"></i></span>
    <ul class="category-list">

        @foreach($categories as $category)

            @if($category->parent_id == 0)
        <li class="dropdown side-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$category->category_name}} <i class="fa fa-angle-right"></i></a>
            @component('components.user.subcategories',
            [
                'children' => $category->subcategories,
                'categories' => $categories
            ])
            @endcomponent

        </li>
            @endif
        @endforeach
    </ul>
</div>