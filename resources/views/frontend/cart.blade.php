@extends('frontend.layouts.app')
@section('title')
    cart
@endsection
@section('content')

<section class="cart container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
      <h4>Your Cart</h4>
       <hr class="mx-auto">
    </div>
    @if (count($orders)>0)

    <table class="pt-5">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

@foreach ($orders as $order)
<tr>
            <td>
              <div class="product-info">
                <img src="{{ Storage::url($order->product->image) }}">
                <div>
                  <p>{{ $order->product->name }}</p>
                  <small>S: {{ $order->product->S_price }} (LE.) M: {{ $order->product->M_price }} (LE.) L:{{ $order->product->L_price }} (LE.)</small>
                  <br>

                </div>
              </div>
            </td>

            <td>
                <h4>{{ $order->S_meal + $order->M_meal + $order->L_meal }}</h4>
            </td>

            <td>
              <span class="product-price"> <h5>
                S: {{ $order->product->S_price  * $order->S_meal }} (LE.) M: {{ $order->product->M_price* $order->M_meal }} (LE.) L:{{ $order->product->L_price* $order->L_meal }} (LE.)
                <br/>
                {{
                    $order->product->S_price * $order->S_meal +
                    $order->product->M_price * $order->M_meal +
                    $order->product->L_price * $order->L_meal
                    }} (LE.)
             </h5></span>
            </td>
          </tr>

@endforeach
  </table>



    <div class="cart-total">
      <table>
        <tr>
          <td>Total</td>
          <?php
           $var=0
          ?>
          @foreach ($orders as $order)

<?php
$var=$var+($order->product->S_price * $order->S_meal +$order->product->M_price * $order->M_meal +$order->product->L_price * $order->L_meal)
    ?>          @endforeach
         <td>
            {{$var  }}(LE.)
          </td>


        </tr>
      </table>
    </div>


    <div class="checkout-container">
      <form>
        <input type="submit" class="btn checkout-btn" value="Checkout" name="">
      </form>
    </div>
    @else
    <h2 style="text-align: center; color:rgb(255, 153, 0)">no orders in your cart!</h2>
    @endif






  </section>
@endsection
