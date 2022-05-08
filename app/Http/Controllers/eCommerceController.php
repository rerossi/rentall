<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class eCommerceController extends Controller
{
    public function index(){

        return view('index')->with('products', Product::all());

    }

    public function searchCategory(Category $category){
        return view('store.search')->with(['products' => $category->Products, 'title' => $category->name]);
    }

}
