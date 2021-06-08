<div class="recommended_items">
    <h2 class="title text-center">recommended items</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($productRecommended  as  $keyRecommended => $productRecommended )
            @if ($keyRecommended  % 3 == 0)
                 <div class="item  {{ $keyRecommended == 0 ? 'active' : ''  }}">
            @endif
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ asset("product-detail/$productRecommended->id") }}"> <img src="{{ config('app.base_url').$productRecommended->feature_image_path }}" alt="" /></a>
                                <h2>{{ number_format($productRecommended->price) }}</h2>
                               <a href="{{ asset("product-detail/$productRecommended->id") }}"> <p>{{ $productRecommended->name }}</p></a>
                                <a data-url="{{ route('addToCart', ['id'=>$productRecommended->id]) }}" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
           @if ($keyRecommended % 3 == 2)
               </div>
            @endif
            @endforeach
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div>