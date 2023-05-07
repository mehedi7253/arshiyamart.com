@extends('layouts.fontLayouts.master')
@section('content')
  <section id="form" style="margin-top:0px;">

    <div class="container">
      <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Checkout</li>
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
        <form  action="{{ url('/checkout') }}" method="post" >
          @csrf
        <div class="col-sm-4 col-sm-offset-1">
          <div class="login-form"><!--login form-->
            <h2>Billing Address</h2>


              <div class="form-group">
								<input name="billing_name" id="billing_name" type="text" @if(!empty($userDetails->name)) value="{{ $userDetails->name }}" @endif placeholder="Billing Name" class="form-control" />
              </div>
              <div class="form-group">
								<input name="billing_address" id="billing_address" type="text" @if(!empty($userDetails->address)) value="{{ $userDetails->address }}" @endif placeholder="Billing Address" class="form-control" />
              </div>
              <div class="form-group">
								<input name="billing_city" id="billing_city" type="text" @if(!empty($userDetails->city)) value="{{ $userDetails->city }}" @endif placeholder="Billing City" class="form-control" />
              </div>
              <div class="form-group">
								<input name="billing_pincode" id="billing_pincode" type="text" @if(!empty($userDetails->pincode)) value="{{ $userDetails->pincode }}" @endif placeholder="Zilla Code" class="form-control" />
              </div>
              <div class="form-group">
								<input name="billing_mobile" id="billing_mobile" type="text" @if(!empty($userDetails->phone)) value="{{ $userDetails->phone }}" @endif placeholder="Mobile" class="form-control" />
              </div>
              <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="copyAddress">
							    <label class="form-check-label" for="copyAddress">Shipping Address same as Billing Address</label>
							</div>


          </div><!--/login form-->
        </div>

        <div class="col-sm-4">
          <div class="signup-form"><!--sign up form-->
            <h2>Shipping Address</h2>


                   <div class="form-group">
     								<input name="shipping_name" id="shipping_name" type="text" @if(!empty($shippingDetails->name)) value="{{ $shippingDetails->name }}" @endif placeholder="Shipping Name" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_address" id="shipping_address" type="text" @if(!empty($shippingDetails->address)) value="{{ $shippingDetails->address }}" @endif placeholder="Shipping Address" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_city" id="shipping_city" type="text" @if(!empty($shippingDetails->city)) value="{{ $shippingDetails->city }}" @endif placeholder="Shipping City" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_pincode" id="shipping_pincode" type="text" @if(!empty($shippingDetails->pincode)) value="{{ $shippingDetails->pincode }}" @endif placeholder="Zilla Code" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_mobile" id="shipping_mobile" type="text" @if(!empty($shippingDetails->mobile)) value="{{ $shippingDetails->mobile }}" @endif placeholder="Mobile" class="form-control" />
                   </div>


              <button type="submit" class="btn btn-default">Checkout</button>

          </div><!--/sign up form-->
        </div>

       </form>
      </div>
    </div>

  </section>
@endsection
