@extends('layouts.master')

@section('css')
<link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection


@section('title')
Trang chủ
@endsection

@section('content')
<!--slider-->
@include('home.components.slider')
<!--/slider-->

<section>
	<div class="container">
		<div class="row">
		@include('components.sidebar')
			
			<div class="col-sm-9 padding-right">
				<!--features_items-->
				@include('home.components.featuresitems')
				<!--features_items-->
				@include('home.components.category_tab')
				<!--/category-tab-->
				
				<!--recommended_items-->
				@include('home.components.recommended_product')
				<!--/recommended_items-->
			</div>
		</div>
	</div>
</section>


@endsection

@section('js')
	<script src="{{ asset('home/home.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script> --}}

@endsection
 

 
