 @extends('layouts.fontLayouts.master')
@section('content')


  <section id="cart_items">
		<div class="container">

      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Order Review</li>
        </ol>
      </div><!--/breadcrums-->

      <div class="shopper-informations">
        <div class="row">
        </div>
      </div>
            <div class="row">
              @if (Session::has('message_success'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-danger">

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

              <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                  <h2>Billing Address</h2>


                    <div class="form-group">
      								{{ $userDetails->name }}
                    </div>
                    <div class="form-group">
      								{{ $userDetails->address }}
                    </div>
                    <div class="form-group">

      								{{ $userDetails->city }}
                    </div>
                    <div class="form-group">
      								{{ $userDetails->pincode }}
                    </div>
                    <div class="form-group">
      								{{ $userDetails->phone }}
                    </div>



                </div><!--/login form-->
              </div>

              <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                  <h2>Shipping Address</h2>


                         <div class="form-group">
           								{{ $shippingDetails->name }}
                         </div>
                         <div class="form-group">
           								{{ $shippingDetails->address }}
                         </div>
                         <div class="form-group">
           								{{ $shippingDetails->city }}
                         </div>
                         <div class="form-group">
           								{{ $shippingDetails->pincode }}
                         </div>
                         <div class="form-group">
           								{{ $shippingDetails->mobile }}
                         </div>

                </div>
              </div>

            </div>
            <div class="review-payment">
          				<h2>Review & Final Submit</h2>
          			</div>

          			<div class="table-responsive cart_info">
          				<table class="table table-condensed">
          					<thead>
          						<tr class="cart_menu">
          							<td class="image">Item</td>
          							<td class="description"></td>
          							<td class="price">Price</td>
          							<td class="quantity">Quantity</td>
          							<td class="total">Total</td>
          						</tr>
          					</thead>
          					<tbody>
          						<?php $total_amount = 0; ?>
          						@foreach($userCart as $cart)
          						<tr>
          							<td class="cart_product">
          								<a href=""><img style="width:130px;" src="{{ asset('assets/admin/img/products/'.$cart->image)}}" alt=""></a>
          							</td>
          							<td class="cart_description">
          								<h4><a href="">{{ $cart->product_name }}</a></h4>
          								<p>Product Code: {{ $cart->product_code }}</p>
          							</td>
          							<td class="cart_price">
          								<p> {{ $cart->price }} TK</p>
          							</td>
          							<td class="cart_quantity">
          								<div class="cart_quantity_button">
          									{{ $cart->quantity }}
          								</div>
          							</td>
          							<td class="cart_total">
          								<p class="cart_total_price"> {{ $cart->price*$cart->quantity }} TK</p>
          							</td>
          						</tr>
          						<?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
          						@endforeach
          						<tr>
          							<td colspan="4">&nbsp;</td>
          							<td colspan="2">
          								<table class="table table-condensed total-result">
          									<tr>
          										<td>Cart Sub Total</td>
          										<td>{{ $total_amount }} TK</td>
          									</tr>
          									<tr class="shipping-cost">
          										<td>Shipping Cost (+)</td>
          										<td>0 TK</td>
          									</tr>
          									<tr class="shipping-cost">
          										<td>Discount Amount (-)</td>
          										<td>
          											@if(!empty(Session::get('couponAmount')))
          												 {{ Session::get('couponAmount') }} TK
          											@else
          												 0
          											@endif
          										</td>
          									</tr>
          									<tr>
          										<td>Grand Total</td>
          										<td><span> {{ $grand_total = $total_amount - Session::get('couponAmount') }} TK</span></td>
          									</tr>
          								</table>
          							</td>
          						</tr>
          					</tbody>
          				</table>
          			</div>
          			<form name="paymentForm" id="paymentForm" action="{{ url('/place-order') }}" method="post">
                  {{ csrf_field() }}
          				<input type="hidden" name="grand_total" value="{{ $grand_total }}">
          				<div class="payment-options">
          					<span>
          						<label><strong>Select Payment Method:</strong></label>
          					</span>
          					<span>
          						<label><input type="radio" name="payment_method" id="COD" value="COD"> <strong>COD</strong></label>
          					</span>
          					<span>
          						<label><input type="radio" name="payment_method" id="Paypal" value="Paypal"> <strong>Paypal</strong></label>
          					</span>
          					<span style="float:right;">
          						<button type="submit" class="btn btn-default" onclick="return selectPaymentMethod();">Place Order</button>
          					</span>
          				</div>
          			</form>
		</div>
	</section> <!--/#cart_items-->
@endsection
