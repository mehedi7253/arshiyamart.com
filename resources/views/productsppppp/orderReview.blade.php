<html oncontextmenu="return false">

<script type="text/javascript">
  

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}


</script> 
@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')


  <section id="cart_items checkout" style="width:90%; margin:auto">
		<div class="container" style="margin-bottom:100px">
    <div class="shopper-informations">
      <div class="row">
      </div>
    </div>
    
    <?php
                      $main_w=Auth::user()->id;
                      $total_cash_wallet=DB::table("ac_main")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $tsw=$total_shop_wallet-$total_shop_wallet_w;

?>

    <?php
    
    
          $user_idd = Auth::user()->id;

    
    
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);

$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);
$results6 = DB::select('select * from banners where id = :id', ['id' => 6]);


    ;?>        
          
          
   
   
          
          
@foreach($results12 as $t12)
     <?php 
       $h12=$t12->image;     
     ;?>
@endforeach

@foreach($results13 as $t13)
     <?php 
         $h13=$t13->image;     
     ;?>
@endforeach
   
 
 @foreach($results14 as $t14)
     <?php 
        $h14=$t14->image;     
     ;?>
@endforeach
     
   
      
 @foreach($results22 as $t22)
     <?php 
        $h22=$t22->image;     
     ;?>
@endforeach
     
      
    
    
    
    
    
    
    
    


      

        
   @foreach($results6 as $t6)
     <?php 
        $h6=$t6->image;     
     ;?>
@endforeach  
    
  
    
    
    
    <div class="checkout-area" style="margin-top:100px;">
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
                  <h2 style="text-align:center">Please Review & Final Submit</h2>
                  <h4 style="text-align:center; color:red">নিচের সব কিছু পূনরায় দেখে Final Submit করুন</h4>



              <div class="col-sm-6 col-sm-offset-0 ">
                <div class="login-form"><!--login form-->
                  <h3><u>Product Delivery Address</u></h3>


                    <div class="form-group">
      								{{ $userDetails->name }}
                    </div>
                    
                    
                                        
                    <div class="form-group">
      								{{ $userDetails->phone }}
                    </div>
                    
                    <div class="form-group">
      								{{ $userDetails->address }}
                    </div>
                    
                    
 
<?php
$dcity=$userDetails->city;
$dmmm=$userDetails->pincode;

  if($dcity==26)
  {
      $dddd=$h22;
  }
  else
  {
      $dddd=$h6;
  }
  ;?>  



                </div><!--/login form-->
              </div>



            </div>
    </div>

            <div class="review-payment">
          				<h3><u>Review Orders</u></h3>
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
          								<a href=""><img src="{{ asset('assets/admin/img/products/large/'.$cart->image)}}" style="height:50px" alt=""></a>
          							</td>
          							<td class="cart_description">
          								<h4>
          								

                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $cart->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        $ppppp=$tpp->product_name;     
     ;?>
@endforeach
                            {{ $ppppp }} 
          								
          								
          								</h4>
          								<p>Product Code: {{ $cart->product_code }}
          								
          								
          						 @if(isset($cart->product_code))
                        
                                             <br>   <small><span style="color:red">Size: {{ $cart->size }}</span></small>

                        @endif		
          								</p>
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
          						 
          						 <td>-</td>
          						 <td>-</td>   
          						 <td>-</td>  
          						 <td> <b> Total Amount=<br>
          						 Delivery Charge=<br>
          						 Grand Total=</b></td> 
          							
          										
          										<td><b>{{ $total_amount }} TK<br>
          										{{$dddd}} TK<br>
          										{{ $grand_total = $total_amount + $dddd }} TK</b></td>
          						</tr>
          								
          								
          								
          								</table>
          							
          						
          					</tbody>
          				</table>
          			</div>
          			<form action="{{ url('/place-order') }}" method="post">
                  {{ csrf_field() }}
          				<input type="hidden" name="grand_total" value="{{ $grand_total }}">
          				<input type="hidden" name="shipping_charge" value="{{ $dddd }}">
          			
          			
          			
          			
          				<div class="payment-options" style="margin-left:30px">
          					<span>
          						<label style="color:red"><strong><b></b></strong></label><br>
          					</span>
          					
          					@if($dmmm==1)
          					<input type="radio" id="male" name="payment_method" value="COD" required=""checked>
                            <label for="male" >Cash On Delivery (পণ্য হাতে পেয়ে টাকা প্রদান)</label><br>
  
          					@elseif($dmmm==2)
  <input type="radio" id="female" name="payment_method" value="bKash" required="" checked>
  <label for="female">bKash (বিকাশে প্রদান)</label><br>
  
  
  
  <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
  
  Please send money to: <span style="color:red"><?php echo $h12 ;?> </span>  (personal).  
  <br>Amount: <span style="color:red">{{$grand_total}}</span>
  <br>Reference No: <span style="color:red">{{$user_idd}}</span>
  <br> <span style="color:red"> টাকা পাঠানোর পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
   <div class="form-group">
								<input name="trxid" id="billing_name" required="" type="text" placeholder="bKash Trax ID" class="form-control" style="width:80%" minlength="8"/>
              </div>
  
  
  
  
  
  
  
            					@elseif($dmmm==3)

  <input type="radio" id="other" name="payment_method" value="Rocket" required="" checked>
  <label for="other">Rocket (রকেটে প্রদান)</label>			<br> 
  
  
  <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
  
  Please send money to: <span style="color:red"><?php echo $h13 ;?> </span>  (personal).  
  <br>Amount: <span style="color:red">{{$grand_total}}</span>
  <br>Reference No: <span style="color:red">{{$user_idd}}</span>
  <br> <span style="color:red"> টাকা পাঠানোর পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
   <div class="form-group">
								<input name="trxid" id="billing_name" required="" type="text" placeholder="Rocket Trax ID" class="form-control" style="width:80%" minlength="8"/>
              </div>
              
              
              
              
            					@elseif($dmmm==4)
        					
   <input type="radio" id="Nagad"  name="payment_method" value="Nagad" required="" checked>
  <label for="Nagad">Nagad (নগদে  প্রদান)</label>        		<br>		
          					
     
     <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
  
  Please send money to: <span style="color:red"><?php echo $h14 ;?> </span>  (personal).  
  <br>Amount: <span style="color:red">{{$grand_total}}</span>
  <br>Reference No: <span style="color:red">{{$user_idd}}</span>
  <br> <span style="color:red"> টাকা পাঠানোর পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
   <div class="form-group">
								<input name="trxid" id="billing_name" required="" type="text" placeholder="bKash Trax ID" class="form-control" style="width:80%" minlength="8"/>
              </div>
              
              
       @elseif($dmmm==6)
        					

 
              
              
          					
                    					@elseif($dmmm==5)
					
    <input type="radio" id="shop_wallet"  name="payment_method" value="shop_wallet" required="" checked>
  <label for="shop_wallet">My Shop Wallet</label>        					<br>
          					         					
          	
          	<br>Your bill Amount is: <span style="color:red">{{$grand_total}}</span><br>
          	 <b>Your Shop Balance=<span style="color:red">{{$tsw=$total_shop_wallet-$total_shop_wallet_w}}</span></b></b>
          	 
          	 
 @if($grand_total > $tsw)         	 
<br>Status: <span style="color:red">Your are not eligible.</span>
          	  <br> <span style="color:red; font-size:130%"> আপনি শপিং ওয়ালেট থেকে বিল পরিশোধ করার উপযুক্ত নয়। (অনুগ্রহ করে অন্য Payment Method নির্বাচন করুন)।</span>
@endif
          	
          					
          					
          	@endif				
          					
          					
          		
          				
          					
          				
          				</div>
          				
          					<span style="float:right;">
          			@if($dmmm !=6)	
          			
          			@if($dmmm==5)	    
          					  @if($grand_total <= $tsw)
          						<button type="submit" class="aa-browse-btn"   style="float:right; width:100%">Confirm & Final Submit</button>
          						@else
          						<a href="{{url('/')}}/checkout">
          						<h3 style="color:blue"><< Go Back & Change Payment Methode</h3>
          						</a>
          						
          						@endif
          			 @else
          			           						<button type="submit" class="aa-browse-btn"   style="float:right; width:100%">Confirm & Final Submit</button>

          			 @endif
          		@endif				
          						
          					</span>
          			</form>
          			
          		@if($dmmm==6)		
          		
      <?php
      Session::put('grand_total', $grand_total);
      Session::put('shipping_charge', $dddd);

   

      ;?>    		
          		
          		 
   
          		
          		
          		
          		
          		
          	<form id="regForm" method="post" action="{{url('/')}}/sslp/sp.php">
          	    
          	    
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<label for="vehicle1"> <i class="fa fa-credit-card" aria-hidden="true" style="font-size:150%; color:red"></i> <i class="fa fa-mobile" aria-hidden="true" style="font-size:150%; color:blue"></i> Card or Mobile Banking </label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car" required="">
<label for="vehicle2"> I have <a href="/t"  style="color:blue"> received Trams & Condition.</a></label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat" required="">
<label for="vehicle3"> I have received <a href="/r" style="color:blue"> Refund & Teturn policy.</a></label><br>
              
   
          	    
          	    
          	    
          	    
                <div class="tab">
                  <p><input type="hidden" placeholder="Enter Payment Amount ( i.e 2 tk)" id="pamount" name="pamount" value="{{$grand_total}}" required ></p>
                </div>                
                <center>
                    
                    <button type="submit" id="submit" name="submit"  class="aa-browse-btn"   style="float:right; width:100%">Confim & Submit</button>
                </center>                
                </div>
              </form>
          		@endif	
          			
		</div>
	
	</section> <!--/#cart_items-->
@endsection
