<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct( CategoryModel $categoryModel , ProductModel $productModel)
    {
        $this->category = $categoryModel;
        $this->product = $productModel;
    }
    

    public function index($slug , $categoryId){
        $categories= $this->category ->where('parent_id', 0)->get();
        $categoriesLimit= $this->category ->where('parent_id', 0)->take(3)->get();

        $products = $this->product->where('category_id' , $categoryId)->paginate(12);
        return view('product.category.list' ,compact('categoriesLimit' ,'products', 'categories'));
    }
}
