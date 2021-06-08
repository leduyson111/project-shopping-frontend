@extends('layouts.master')

@section('css')
<link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection


@section('title')
Trang chủ
@endsection

@section('content')

<section id="cart_items">
  @include('carts.cart_component' )
</section>

<!--/#cart_items-->

<!--/#do_action-->



@endsection

@section('js')
	<script src="{{ asset('home/home.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script> --}}

@endsection
 

 




 


 