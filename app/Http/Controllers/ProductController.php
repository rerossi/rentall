<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    public function create()
    {
        return view('product.create')->with('categories', Category::all());

    }

    public function store(Request $request)
    {

        $image = "storage/". $request->file('image')->store('itens');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $image,
        ]);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with(['product' => $product, 'categories' => Category::all()]);
    }

    public function update(Product $product, Request $request)
    {
        if($request->image){
            $image = "storage/". $request->file('image')->store('itens');

            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'image' => $image,
            ]);
        }
        else{
            $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            ]);
        }
        return redirect(route('product.index', $product->id));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'));
    }

    public function trash(){

        return view('product.trash')->with('products', Product::onlyTrashed()->get());

    }

    public function restore($product_id){
        $product = Product::onlyTrashed()->where('id', $product_id)->first();
        $product->restore();
        return redirect(route('product.index'));
    }
}
