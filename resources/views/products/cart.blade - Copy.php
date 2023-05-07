@extends('layouts.fontLayouts.master')
@section('content')

<section id="cart_items">
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Shopping Cart</li>
      </ol>
    </div>
    <div class="table-responsive cart_info">
      <table class="table table-condensed">
        @if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-success">

                             <strong style="color:#000">{{ session('message_success') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
        @if (Session::has('message_error'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger">

                             <strong style="color:#000">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
        <thead>
          <tr class="cart_menu">
            <td class="image">Item</td>
            <td class="description"></td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php $total_amount= 0 ;?>
          @foreach ($userCart as $cart)
          <tr>
            <td class="cart_product">
              <a href=""><img style="height:150px;width:150px;" src="{{ asset('assets/admin/img/products/'.$cart->image)}}" alt=""></a>
            </td>
            <td class="cart_description">
              <h4><a href="">{{ $cart->product_name }}</a></h4>
              <p>Code: {{ $cart->product_code }}</p>
            </td>
            <td class="cart_price">
              <p>TK. {{ $cart->price }}</p>
            </td>
            <td class="cart_quantity">
              <div class="cart_quantity_button">
                <a class="cart_quantity_up" href="{{ url('/cart/update-quantity/'.$cart->id.'/1') }}"> + </a>
                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" size="2">

                <a class="cart_quantity_down" href="{{ url('cart/update-quantity/'.$cart->id.'/-1') }}"> - </a>
              </div>
            </td>
            <td class="cart_total">
              <p class="cart_total_price">TK. {{ $cart->price*$cart->quantity }}</p>
            </td>
            <td class="cart_delete">
              <a class="cart_quantity_delete" href="{{ url('/cart-delete/'.$cart->id) }}"><i class="fa fa-times"></i></a>
            </td>
          </tr>
          <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</section> <!--/#cart_items-->

<section id="do_action">
  <div class="container">
    <div class="heading">
      <h3>What would you like to do next?</h3>
      <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <form class="" action="{{ url('/cart/apply-coupon') }}" method="post">
          @csrf
          <div class="chose_area">
            <ul class="user_option">
              <li>
                <label>Coupon Code</label>
                <input type="text" name="apply_coupon" >

              </li>
            </ul>
            <button type="submit"  class="btn btn-default check_out">Apply Coupon</button>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <div class="total_area">
          <ul>
            @if (!empty(Session::get('couponAmount')))
              <li>Sub Total <span>TK. <?php echo $total_amount ;?> </span></li>
              <li>Discount Price <span>TK. <?php echo Session::get('couponAmount') ;?> </span></li>
              <li> Total <span>TK. <?php echo $total_amount - Session::get('couponAmount') ;?> </span></li>
            @else
                <li> Total <span>TK. <?php echo $total_amount ;?> </span></li>
            @endif

          </ul>
            <a class="btn btn-default update" href="">Update</a>
            <a class="btn btn-default check_out" href="{{ url('/checkout') }}">Check Out</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#do_action-->

@endsection
