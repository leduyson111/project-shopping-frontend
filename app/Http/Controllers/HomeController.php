<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(SliderModel $sliderModel , CategoryModel $categoryModel, ProductModel $productModel)
    {
        $this->slider = $sliderModel;
        $this->category = $categoryModel;
        $this->product = $productModel;
    }
    
    public function index(){
        $sliders =   $this->slider->latest()->get();
       $categories= $this->category ->where('parent_id', 0)->get();
       $products = $this->product->latest()->take(6)->get();
       $productRecommended = $this->product->latest('view_count' , 'desc')->take(12)->get();
       $categoriesLimit= $this->category ->where('parent_id', 0)->take(3)->get();
        return view('home.home', compact('sliders', 'categories', 'products', 'productRecommended' ,'categoriesLimit'));
    }

    public function productDetail($id){
        $productRecommended = $this->product->latest('view_count' , 'desc')->take(12)->get();
        $categoriesLimit= $this->category ->where('parent_id', 0)->take(3)->get();
        $categories= $this->category ->where('parent_id', 0)->get();

        $productDetail = $this->product->find($id);


        return view('product.detail.product-detail' , compact('categoriesLimit','productRecommended' ,'productDetail',  'categories'));

    }

    public function addToCart($id){
       
        $carts = session()->get('cart');
        $product = $this->product->find($id);

        if(isset($carts[$id])){
            $carts[$id]['quantity'] = $carts[$id]['quantity'] +1;
            
        }else{
            $carts[$id] = [
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity' =>1,
                'feature_image_path'=>$product->feature_image_path

            ];
        }
        session()->put('cart' ,$carts);

        return response()->json([
            'code'=>200,
            'message' => 'success'

        ] , 200);

    }

    public function cart(){
        $categoriesLimit= $this->category ->where('parent_id', 0)->take(3)->get();

        $carts = session()->get('cart');
        return view('carts.cart',compact('categoriesLimit', 'carts'));
        
    }

    public function updateCart(Request $request){


        if($request->id && $request->quantity){

            $carts  = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;

            session()->put('cart', $carts);
            $carts  = session()->get('cart');

            $cartCompondent  = view('carts.cart_component',compact('carts'))->render();
            return response()->json(['cartCompondent'=>$cartCompondent, 'code' =>200], 200);

        }



    }

    public function deleteCart(Request $request){

        if($request->id){

            $carts  = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts  = session()->get('cart');

            $cartCompondent  = view('carts.cart_component',compact('carts'))->render();
            return response()->json(['cartCompondent'=>$cartCompondent, 'code' =>200], 200);

        }


    }

  
}
