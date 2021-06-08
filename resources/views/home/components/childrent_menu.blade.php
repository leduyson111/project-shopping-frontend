@if ($categoriesParent->categoryChildrent->count())
    <ul role="menu" class="sub-menu">
        @foreach ($categoriesParent->categoryChildrent as $categoriesChildrent) 
         <li>
             <a href="{{ asset("category/$categoriesChildrent->slug/$categoriesChildrent->id") }}">{{ $categoriesChildrent->name }}</a>
             @if ($categoriesChildrent->categoryChildrent->count())
                 @include('home.components.childrent_menu' , ['categoriesParent' =>$categoriesChildrent])
             @endif
        </li>
        @endforeach 
    </ul>
@endif