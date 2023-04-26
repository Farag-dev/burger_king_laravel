@extends('dashboard.layouts.app')
@section('title')
Edit Product
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto">
 <div class="card-body p-3  mx-auto">
        <form action="{{ route('products.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="{{ $product->name }}" class="form-control "  name="name" id="name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control " rows="3"  name="desc" id="desc">{{ $product->desc }}</textarea>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control " value="{{ $product->S_price }}"  name="S_price">
                <input type="number" class="form-control " value="{{ $product->M_price }}"  name="M_price">
                <input type="number" class="form-control " value="{{ $product->L_price }}"  name="L_price">
            </div>
            <div class="form-group">
                <label >Category</label>
                <select name="category" class="form-control ">
                    <option value="{{ $product->category }}">{{ $product->category }}</option>
                    <option value="Burger">Burger</option>
                    <option value="Pizza">Pizza </option>
                    <option value="Prinks">Drinks</option>
                    <option value="Fries">Fries</option>
                    <option value="Pasta">Pasta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control "  name="image" id="image">
            </div>
            <img src="{{ Storage::url($product->image) }}" width="100px" class="my-3" alt="">
            <div class="form-group d-block text-center">
                <button type="submit" class="btn btn-lg btn-primary btn-block">update Product</button>
            </div>


        </form>
    </div>
        </div>
    </div>

</div>


@endsection
