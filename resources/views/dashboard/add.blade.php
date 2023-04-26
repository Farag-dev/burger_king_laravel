@extends('dashboard.layouts.app')
@section('title')
Add Product
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto">
 <div class="card-body p-3  mx-auto">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control " placeholder="Name" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control " rows="3"  name="desc" id="desc">description</textarea>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control " placeholder="S_price" name="S_price">
                <input type="number" class="form-control " placeholder="M_price" name="M_price">
                <input type="number" class="form-control " placeholder="L_price" name="L_price">
            </div>
            <div class="form-group">
                <label >Category</label>
                <select name="category" class="form-control ">
                    <option value="">select category</option>
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
            <div class="form-group d-block text-center">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Add Product</button>
            </div>


        </form>
    </div>
        </div>
    </div>

</div>


@endsection
