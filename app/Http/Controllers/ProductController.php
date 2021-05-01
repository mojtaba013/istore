<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function index()
    {
        $data=Product::all();
        //return view('index',['data'=>$data]);
        return view('product.index',compact('data'));
        //return view('index',$data);
        //dd($data);
    }


    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);
        Product::create($request->all());
        return Redirect::to('Product.index');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
