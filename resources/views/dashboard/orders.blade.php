@extends('dashboard.layouts.app')
@section('title')
All products
@endsection

@section('content')

<!-- /.card-header -->
 <div class="card-body p-0 " style="overflow-x:auto; ">
     @if (count($orders)>0)


    <table class="table table-striped text-center">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
      <thead>
        <tr>
          
          <th>name</th>
          <th>phone</th>
          <th>meal</th>
          <th>num_S_size</th>
          <th>num_M_size</th>
          <th>num_L_size</th>
          <th>total(LE.)</th>
          <th>comment</th>
          <th>status</th>
          <th>Accept</th>
          <th>Reject</th>
          <th>Complete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($orders as $key => $order)
          <tr>
           
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->S_meal}} </td>
            <td>{{ $order->M_meal }} </td>
            <td>{{ $order->L_meal }} </td>
            <td>{{
             $order->product->S_price * $order->S_meal +
             $order->product->M_price * $order->M_meal +
             $order->product->L_price * $order->L_meal 
             }} (LE.)</td>
            <td>{{ $order->comment}}</td>
            <td>{{ $order->status}}</td>
            <form action="{{ route('changeStatus', ['id'=>$order->id]) }}" method="post">
              @csrf

              <td><input type="submit" name="status" value='accepted' class="btn btn-dark btn-sm" > </td>
              <td><input type="submit" name="status" value='rejected' class="btn btn-danger btn-sm" > </td>
              <td><input type="submit" name="status" value='completed' class="btn btn-success btn-sm" > </td>
            </form>
            
            

          </tr>
@endforeach
      </tbody>
    </table>
@else
    <h1 class="text-center">No orders</h1>
     @endif
     <div class="py-3 mx-3">{{ $orders->links() }}</div>
  </div>

  <!-- /.card-body -->

@endsection
