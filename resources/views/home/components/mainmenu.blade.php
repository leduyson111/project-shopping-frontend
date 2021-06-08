<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="{{ asset('/') }}" class="active">Home</a></li>
        @foreach ($categoriesLimit as  $categoriesParent )
            
        <li class="dropdown"><a href="#">{{ $categoriesParent->name }}<i class="fa fa-angle-down"></i></a>
          

            @include('home.components.childrent_menu' ,['categoriesParent'=>$categoriesParent])

        </li> 
      
        @endforeach
       
        <li><a href="404.html">404</a></li>
        <li><a href="contact-us.html">Contact</a></li>
    </ul>
</div>