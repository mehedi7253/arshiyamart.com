@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')
  <section id="form">



    <div class="shopper-informations">
      <div class="row">
      </div>
    </div>
          <div class="row" style="width:80%; margin:auto;">

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
          
          
         
                           
                           @if(!isset(Auth::user()->id))
          
        <form  action="{{ url('/checkout2') }}" method="post" >
            @else
                    <form  action="{{ url('/checkout') }}" method="post" >
@endif
            
            
          @csrf
        <div class="col-sm-6 col-sm-offset-3" style="margin-bottom:100px; margin-top:50px">
          <div class="login-form"><!--login form-->
            <h3>Product Delivery Address</h3>


              <div class="form-group">
								<input name="billing_name" id="billing_name" required="" type="text" @if(!empty($userDetails->name)) value="{{ $userDetails->name }}" @endif placeholder="Your Name" class="form-control" />
              </div>
              
               <div class="form-group">
								<input name="billing_mobile" id="billing_mobile" required="" type="number" @if(!empty($userDetails->phone)) value="{{ $userDetails->phone }}" @endif placeholder="Mobile" class="form-control" />
              </div>
              
              
               <div class="form-group">
                   <?php
                    $aa_dist=DB::table('all_dist')->orderby('dist_name','ASC')->get();
                   ;?>
<select name="dcity" required="">
    <option value="">Select Delivery City</option>
    @foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach
</select>                  
              </div>

              
       <!--       
        <div class="form-group">
                   
<select name="tps" required="">
    <option value="">Select P.S/Upzilla</option>
   
    <option value=""></option>
   
</select>                  
              </div>       
              -->
              
              
              
              
              <div class="form-group">
              <textarea name="billing_address" id="billing_address" type="text" style="width:100%" required="" placeholder="Delivery Address (without Dist & P.S)">@if(!empty($userDetails->address)) {{ $userDetails->address }} @endif</textarea>    
                  
              </div>
              




                           
          

    <div class="form-group">
<label style="color:blue">Select Payment Method:</label> <br>


<input type="radio" id="pg" name="dmmm" value="6" required="">
<label for="pg"><i class="fa fa-credit-card" aria-hidden="true" style="font-size:150%; color:red"></i> <i class="fa fa-mobile" aria-hidden="true" style="font-size:150%; color:blue"></i> (Card or Mobile Banking)</label><br>

<input type="radio" id="cod" name="dmmm" value="1" required=""> 
<label for="cod">COD (পণ্য হাতে পেয়ে টাকা প্রদান)</label><br>


<input type="radio" id="sw" name="dmmm" value="5" required="">
<label for="sw">My Shop Wallet</label>


</div>

                           
          
         <!--  <div class="form-group">
<select name="dmmm" required="">
    <option value="">Select Payment Method</option>
    <option value="1">COD (পণ্য হাতে পেয়ে টাকা প্রদান)</option>
    <option value="2">bKash (বিকাশে প্রদান)</option>
    <option value="3">Rocket (রকেটে প্রদান)</option>
    <option value="4">Nagad (নগদে  প্রদান)</option>
    <option value="5">My Shop Wallet</option>
</select>                    
              </div>-->
              
                           
          
          
          
              


                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Next</button>


<!--              <button type="submit" class="btn btn-default">Checkout</button>
-->


          </div><!--/login form-->
        </div>

       <!-- <div class="col-sm-4">
          
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



          </div>        </div>-->

       </form>
      </div>

  </section>
@endsection
