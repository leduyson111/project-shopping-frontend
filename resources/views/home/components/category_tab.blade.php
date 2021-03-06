<div class="category-tab">
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categories as $indexCategory => $categoryItem)
            <li class="{{ $indexCategory == 0 ? 'active' : '' }}">
                <a href="#category_tab_{{ $categoryItem->id }}" data-toggle="tab">{{ $categoryItem->name  }}</a>
            </li>
            @endforeach
           
        </ul>
    </div>
    <div class="tab-content">
        @foreach ($categories as $indexCategoryProduct => $categoryItemProduct)
        <div class="tab-pane fade {{ $indexCategoryProduct == 0 ? 'active in' : '' }} " id="category_tab_{{ $categoryItemProduct->id }}" >
            @foreach ($categoryItemProduct->products as $productItemTabs )
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                         <a href="{{ asset("product-detail/$productItemTabs->id") }}">  <img src="{{ config('app.base_url').$productItemTabs->feature_image_path }}" alt="" /></a> 
                            <h2> {{ $productItemTabs->price }} vnđ  </h2>
                            <a href="{{ asset("product-detail/$productItemTabs->id") }}"> <p>{{ $productItemTabs->name }}</p> </a>
                            <a data-url="{{ route('addToCart', ['id'=>$productItemTabs->id]) }}" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        
        @endforeach
       
    </div>
</div>