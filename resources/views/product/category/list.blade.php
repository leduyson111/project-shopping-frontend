@extends('layouts.master')

@section('title')
Trang chủ
@endsection
@section('css')
<link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
          
            @include('components.sidebar')
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                  
                @foreach ($products as $product )
                      
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ asset("/product-detail/$product->id") }}"><img src="{{ config('app.base_url') . $product->feature_image_path }}" alt="" /> </a>
                                    <h2>{{number_format( $product->price) }} VNĐ</h2>
                                   <a href="{{ asset("/product-detail/$product->id") }}"> <p>{{ $product->name }}</p></a>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                  
                <div class="row">
                    <ul class="pagination">
                         <li class="active"><a href="?page=1">1</a></li>
                        <li><a href="?page=2">2</a></li>
                        <li><a href="?page=3">3</a></li>
                        <li><a href="">&raquo;</a></li> 
                    </ul> 
                </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
	<script src="{{ asset('home/home.js') }}"></script>
@endsection
 
 





 
	
