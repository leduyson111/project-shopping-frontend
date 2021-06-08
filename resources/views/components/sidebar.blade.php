<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            @foreach ($categories as $category )
                
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        @if ($category->categoryChildrent->count())

                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear_{{ $category->id }}">
                                <span class="badge pull-right">
                                    <i class="fa fa-plus"></i>
                                </span>
                                {{ $category->name }}
                            </a>

                        @else

                        <a  href="{{ asset("/category/$category->slug/$category->id") }}">
                            <span class="badge pull-right"> </span>
                            {{ $category->name }}
                        </a>


                        @endif
                    </h4>
                </div>
                
                <div id="sportswear_{{ $category->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach ($category->categoryChildrent as $categorysChildrent)
                               <li><a href="{{ asset("/category/$categorysChildrent->slug/$categorysChildrent->id") }}">{{ $categorysChildrent->name }} </a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
     
        </div><!--/category-products-->
    
        
    </div>
</div>