<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
class FrontendContoller extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }


    public function showProducts(Request $request)
    {
        if (!$request->category){
             $products=Product::latest()->get();
             return view('frontend.products', compact('products'));
        }
        $products=Product::where('category',$request->category)->get();
        return view('frontend.products', compact('products'));

    }

    public function singleProduct($id)
    {
        $product=Product::find($id);
        return view('frontend.single_product',compact('product'));
    }


    public function store(Request $request)
    {
        Order::create([
            'user_id'=>auth()->user()->id,
            'product_id'=>$request->product_id,
            'S_meal'=>$request->S_meal,
            'M_meal'=>$request->M_meal,
            'L_meal'=>$request->L_meal,
            'phone'=>$request->phone,
            'comment'=>$request->comment,
            
        ]);
        return redirect()->back();
    }


    public function cart()
    {
        $orders=Order::latest()->where('user_id',auth()->user()->id)->get();
        return view('frontend.cart', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
