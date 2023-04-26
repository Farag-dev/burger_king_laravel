@extends('frontend.layouts.app')
@section('title')
    details
@endsection
@section('content')
<section class="food_section layout_padding">
    <div class="container">



 <div class="heading_container heading_center">
        <h2>
          {{ $product->category }}
        </h2>
      </div>
<div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-12 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img style="width:200px" src="{{ Storage::url($product->image) }}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    {{ $product->name }}
                  </h4>
                  <p>
                    {{ $product->desc }}
                  </p>
                  <div class="options">
                    <h5>
                        S: {{ $product->S_price }} (LE.) M: {{ $product->M_price }} (LE.) L:{{ $product->L_price }} (LE.)
                     </h5>
                    <a href="{{ route('cart') }}">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-12 all">
              <div class="box">
                  <div class="detail-box">
              @if (Auth::check())
                <form action="{{ route('makeorder') }}" method="post">
                    @csrf
                    <h4 style=" margin-top: 10px;"> name : {{ auth()->user()->name }}</h4>
                    <div class="form-group " style="display: flex; margin-top: 10px; background: none;color:white; ">
                        <input type="text" style="background-color:rgba(0, 0, 0, 0.6);" placeholder="Phone" name="phone" class="form-control">
                        <input type="number"style="background-color:rgba(0, 0, 0, 0.6);"value="0" placeholder="S_meal" name="S_meal" class="form-control">
                        <input type="number"style="background-color:rgba(0, 0, 0, 0.6);"value="0"  placeholder="M_meal" name="M_meal" class="form-control">
                        <input type="number"style="background-color:rgba(0, 0, 0, 0.6);"value="0"  placeholder="L_meal" name="L_meal"class="form-control">
                    </div>
                    <div class="form-group " style=" margin-top: 10px; background: none;color:white; ">
                        <textarea name="comment" style="background-color:rgba(0, 0, 0, 0.6);" class="form-control" rows="3" >Write other additions you want</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                    </div>
                    {{-- <div class="form-group">
                        <input type="hidden" name="total" value="{{$order->product->S_price * $order->S_meal +$order->product->M_price * $order->M_meal +$order->product->L_price * $order->L_meal}}">
                    </div> --}}

                        <button type="submit" class="btn btn-warning">Add to cart</button>



                </form>
              @else
            <h5 style=" margin-top: 10px;"><a href="{{ route('login') }}" style="color: white; text-decoration:underline;">login for making order</a></h5>
              @endif
            </div>
          </div>
              </div>



        </div>
      </div>



    </div>
  </section>

  <!-- end food section -->
@endsection
