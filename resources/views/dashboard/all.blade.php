@extends('dashboard.layouts.app')
@section('title')
All products
@endsection

@section('content')

 <!-- /.card-header -->
 <div class="card-body p-0">
     @if (count($products)>0)


    <table class="table table-striped">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>name</th>
          <th>image</th>
          <th>S_price</th>
          <th>M_price</th>
          <th>L_price</th>
          <th>category</th>
          <th>desc</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $key => $product)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->name }}</td>
            <td><img src="{{ Storage::url($product->image) }}" width="50px" alt="{{ $product->name }}"></td>
            <td>{{ $product->S_price}} (LE)</td>
            <td>{{ $product->M_price }} (LE)</td>
            <td>{{ $product->L_price }} (LE)</td>
            <td>{{ $product->category}}</td>
            <td>{{ $product->desc}}</td>
            <td><a href="{{ route('products.edit', ['id'=>$product->id]) }}" class="btn btn-sm text-center"><i class="fa fa-edit text-warning"></i></a></td>
            <td class="text-center">
              <button  class="text-center"style="background:none;border:none;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">
                  <i class="fa fa-trash text-center text-danger"></i>
              </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <form action="{{ route('products.destroy', ['id'=>$product->id]) }}" method="post">

                  @csrf
                  @method('DELETE')
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Approved</h5>

                  </div>
                  <div class="modal-body">
                  Are you sure delete {{ $product->name }}
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger"> Delete</button>
                  </div>
                  </div>
                  </div>

              </form>
               </div>
              </td>
          </tr>
@endforeach
      </tbody>
    </table>
@else
    <h1 class="text-center">No Products</h1>
     @endif
     <div class="py-3 mx-3">{{ $products->links() }}</div>
  </div>

  <!-- /.card-body -->

@endsection
