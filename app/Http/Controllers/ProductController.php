<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\updateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::paginate(5);
        return view('dashboard.all',compact('products'));
    }

    public function create()
    {
        return view('dashboard.add');
    }

    public function store(StoreRequest $request)
    {
        $path=$request->image->store('public/pics');
        Product::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'S_price'=>$request->S_price,
            'M_price'=>$request->M_price,
            'L_price'=>$request->L_price,
            'category'=>$request->category,
            'image'=>$path
        ]);

        return redirect()->route('products')->with('status','product added successfully!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('dashboard.edit',compact('product'));
    }


    public function update(updateRequest $request, $id)
    {
        $product=Product::find($id);
        if($request->has('image')){
            $path=$request->image->store('public/pics');
        }else{
            $path=$product->image;
        }
        $product->name=$request->name;
        $product->desc=$request->desc;
        $product->S_price=$request->S_price;
        $product->M_price=$request->M_price;
        $product->L_price=$request->L_price;
        $product->category=$request->category;
        $product->image=$path;
        $product->save();

        return redirect()->route('products')->with('status','product updated successfully');
    }

    public function destroy($id)
    {
        $product=Product::find($id)->delete();
        return redirect()->route('products')->with('status','product Deleted successfully');
    }
}
