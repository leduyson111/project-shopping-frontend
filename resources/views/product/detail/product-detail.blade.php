@extends('layouts.master')

@section('css')
<link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection
@section('title')
Trang chủ
@endsection

@section('content')

<section>
    <div class="container">
        <div class="row">
             
            @include('components.sidebar')
            
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ config("app.base_url").$productDetail->feature_image_path }}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($productDetail->productImage as  $key=> $productImage)
                                    <div class="item {{ $key == 0 ? "active"  : ''}}">
                                        <a href=""><img src="{{ config("app.base_url").$productImage->image_path }}" alt=""></a>
                                        </div>
                                    @endforeach
                                </div>
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="/eshopper/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>{{ $productDetail->name }}</h2>
                            <p>Web ID: {{ $productDetail->id }}</p>
                            <img src="/eshopper/images/product-details/rating.png" alt="" />
                            <span>
                                <span>US ${{ number_format($productDetail->price) }}</span>
                                <label>Quantity:</label>
                                <input type="text" value="3" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p>
                                <b>Tag:</b>

                                @foreach ($productDetail->tags as $tagProduct )
                                <a href="#"> #{{ $tagProduct->name }}</a> 
                                @endforeach
                              
                                
                            </p>
                            <p><b>Brand:</b> E-SHOPPER</p>
                            <a href=""><img src="/eshopper/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                           
                            {{-- @foreach ($productDetail->tags as $tagProduct )
                            <li><a href="#tag" data-toggle="tab">{{ $tagProduct->name }}</a></li>
                            @endforeach --}}


                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        {{-- <div class="tab-pane fade" id="tag" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/eshopper/images/home/gallery1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/eshopper/images/home/gallery2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/eshopper/images/home/gallery3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/eshopper/images/home/gallery4.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>{{ $productDetail->created_at }} PM</a></li>
                                </ul>
                                <p> {!! $productDetail->content !!}</p>
                                <p><b>Write Your Review</b></p>
                                
                                <form action="#">
                                    <span>
                                        <input type="text" placeholder="Your Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="/eshopper/images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('home.components.recommended_product')

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
	<script src="{{ asset('home/home.js') }}"></script>
@endsection
 


