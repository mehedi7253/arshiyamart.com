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
 $userDetailsnee=DB::table('delivery_addresses')->where('user_id',$main_w)->first();
 
 if($userDetailsnee->extra1 == 1){
     $extra=30;
 }else{
     $extra=0;
 }
 
 
 
 $c_citys=DB::table('banners')->where('id',1014)->first();
 $c_cityccc=DB::table('banners')->where('id',1014)->count();
if($c_cityccc >0 ){
    $c_city=$c_citys->image;
}else
{
        $c_city=26;

}
 



$dcity=$userDetails->city;
$dmmm=$userDetails->pincode;





  if($dcity==$c_city)
  {
      $dddd=$h22+$extra;
  }
  else
  {
      $dddd=$h6+$extra;
  }
  
  
  
  
  ;?>  

<?php
$check_pa=DB::table('banners')->where('id',1011)->first();
if($check_pa->image == 1){
    $gw_link='sslp';
    
}

elseif($check_pa->image == 2){
    $gw_link='surjo'; 
}
else{
        $gw_link=''; 
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
          							<td class="image">SL</td>
          							<td class="description">Product</td>
          							<td class="quantity">Quantity</td>
          							<td class="total">Total</td>
          						</tr>
          					</thead>
          					<tbody>
          						<?php $sl=1; $total_amount = 0; ?>
          						@foreach($userCart as $cart)
          						<tr>
          							<td>{{$sl}}</td>
          							<td class="cart_description">
          							              								<a href=""><img src="{{ asset('assets/admin/img/products/large/'.$cart->image)}}" style="height:50px" alt=""></a>

          								<h6>
          								

                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $cart->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        $ppppp=$tpp->product_name;     
     ;?>
@endforeach
                            {{ $ppppp }} 
          								
          								
          								</h6>
          								<p style="font-size:80%">Product Code: {{ @$cart->product_code }}<br>
          								
          								
          								<?php
                        $style=DB::table('products')->where('id',@$cart->product_code)->first();
                        ;?>
                        Style No:{{@$style->product_code}}<br>
                        
          			
          								Product Style: {{ @$cart->product_code }}<br>
          								
          								Product Color: 
          								   <?php   @$color=DB::table('brands3')->where('id',$cart->product_color)->first();
   ?>
      {{@$color->name}}
          								
          							
          								
          						 @if(isset($cart->product_code))
                        
                                             <br>   <small><span style="color:red">Size: 
                                             
          								 <?php   @$color=DB::table('brands4')->where('id',$cart->size)->first();
   ?>
      {{@$color->name}}
                                             
                                             
                                             </span></small>

                        @endif	
                        <br>
                        Price: {{ $cart->price }} TK
          								</p>
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
          						 
    <?php
                                    $vat2=DB::table('banners')->where('id',70)->first();      
                                    
                                    if($vat2->image >0){
                                        $vat=$vat2->image;
                                         $vat_a=$total_amount/100*$vat;
                                    }else{
                                         $vat=0;
                                         $vat_a=0;
                                    }
                                    
                                   

                      ;?>       						 <td colspan="3" style="text-align:right"> <b> Total Amount =<br>
          						 
          						 VAT ({{$vat}})% [+]=<br>
          						 
<?php
$discount_ss=Session::get('discount_ss');
?>

@if(!empty($discount_ss))  


        <?php
         $coupon_dis=Session::get('coupon_dis');
         ?>                 
                    
                    
    @if(!empty($coupon_dis))
    Coupon Discount [-] =<br>
    @else
    Promotional Discount [-] =<br>
    @endif

@endif        						 
          						 
          					@if($extra >0) Quick @endif	 Delivery Charge =<br>
          						 Grand Total =</b></td> 
          							
          										
          										<td><b>{{ $total_amount }} TK<br>
          										{{$vat_a}} TK
          										<br>
          										



@if(!empty($discount_ss)) 


{{$discount_ss}} TK


<br>
@else
<?php
$discount_ss=0;
?>
@endif  
          										
          										
          										{{$dddd}}  TK <br>
          									


          										
          										<?php
          										@$grand_total = round(($total_amount + $dddd+$vat_a)-$discount_ss);
          										
          										echo(round(@$grand_total));
          									?>	
          									
          										
          										
          										TK</b></td>
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
          						<label style="color:red"><strong><b>Your Payment Method:</b></strong></label><br>
          					</span>
          					
          					@if($dmmm==1)
          					
          					
         <?php
         
          $c_o_d=DB::table('banners')->where('id',1018)->first();
         
         ;?> 					
          					@if($c_o_d->image == 1)
          				             <input type="radio" id="female" name="payment_method" value="COD" required="" checked>
                                  <label for="female">bKash (বিকাশে প্রদান)</label><br>
                                  
                                  
                                  
                                  <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
                                  বিকাশের পেমেন্ট অপশন নির্বাচন করুন এবং নিচের নম্বরে পেমেন্ট নির্বাচন করুন। : <span style="color:red"><?php echo $h12 ;?> </span>  . 
                                  <br>পরিমাণ: <span style="color:red">{{$dddd}} (শুধুমাত্র ডেলিভারী চার্জ)</span>
                                  <br>রেফারেন্স নং: <span style="color:red">{{$user_idd}}</span><br>
                                  যদি Counter Number চায় তাহলে 0 লিখুন<br>
                                  <br> <span style="color:red"> টাকা পেমেন্ট করার পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
                                   <div class="form-group">
                                								<input name="trxid" id="billing_name" required="" type="text" placeholder="bKash Trax ID" class="form-control" style="width:80%" minlength="8"/>
                                     </div>
                            @else
                            	<input type="radio" id="male" name="payment_method" value="COD" required=""checked>
                                <label for="male" >Cash On Delivery (পণ্য হাতে পেয়ে টাকা প্রদান)</label><br>
                            @endif
                            
                            
                            
                            
  
  
  			@elseif($dmmm==9)
           					<input type="radio" id="male" name="payment_method" value="Pay_Later" required=""checked>
                            <label for="male" >Pay Later(24  ঘন্টার মধ্যে পে করতে হবে)</label><br>
  
  
  
  
          					@elseif($dmmm==2)
  <input type="radio" id="female" name="payment_method" value="bKash" required="" checked>
  <label for="female">bKash (বিকাশে প্রদান)</label><br>
  
  
  
  <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
  বিকাশের পেমেন্ট অপশন নির্বাচন করুন এবং নিচের নম্বরে পেমেন্ট নির্বাচন করুন। : <span style="color:red"><?php echo $h12 ;?> </span>  . 
  <br>পরিমাণ: <span style="color:red">{{$grand_total}}</span>
  <br>রেফারেন্স নং: <span style="color:red">{{$user_idd}}</span><br>
  যদি Counter Number চায় তাহলে 0 লিখুন<br>
  <br> <span style="color:red"> টাকা পেমেন্ট করার পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
   <div class="form-group">
								<input name="trxid" id="billing_name" required="" type="text" placeholder="bKash Trax ID" class="form-control" style="width:80%" minlength="8"/>
              </div>
  
  
  
  
  
  
  
            					@elseif($dmmm==3)

  <input type="radio" id="other" name="payment_method" value="Rocket" required="" checked>
  <label for="other">Rocket (রকেটে প্রদান)</label>			<br> 
  
  
  <b><span style="color:blue">Payment Instruction (পেমেন্ট করার পদ্ধতি):</b><br></span>
  
  Please pay to: <span style="color:red"><?php echo $h13 ;?> </span>  . 
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
  
  Please pay to: <span style="color:red"><?php echo $h14 ;?> </span>  
  <br>Amount: <span style="color:red">{{$grand_total}}</span>
  <br>Reference No: <span style="color:red">{{$user_idd}}</span>
  <br> <span style="color:red"> টাকা পাঠানোর পর SMS এর মাধ্যেমে যে TraxID পেয়েছেন তা নিচের বক্সে লিখুন।</span>
   <div class="form-group">
								<input name="trxid" id="billing_name" required="" type="text" placeholder="bKash Trax ID" class="form-control" style="width:80%" minlength="8"/>
              </div>
              
              
       @elseif($dmmm==6)
        					
  <label for="Nagad"><i class="fa fa-credit-card" aria-hidden="true" style="font-size:150%; color:red"></i> <i class="fa fa-mobile" aria-hidden="true" style="font-size:150%; color:blue"></i> (Card or Mobile Banking)</label>        		<br>		
          					
   
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
          			@if($dmmm !=10)	
          			@if($dmmm !=6)	
          			@if($dmmm !=7)
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
          		@endif				
          			@endif				
          					</span>
          			</form>
          			
          			
          			
          			
          			
          			
          			
          			
          			
          		@if($dmmm==6)		
          		
      <?php
      Session::put('grand_total', $grand_total);
      Session::put('shipping_charge', $dddd);

   

      ;?>    		
          		
          		 
   
          		
          		
          		
          		
          		
          	<form id="regForm" method="post" action="{{url('/')}}/{{$gw_link}}/sp.php">
                <div class="tab">
                  <p><input type="hidden" placeholder="Enter Payment Amount ( i.e 2 tk)" id="pamount" name="pamount" value="{{$grand_total}}" required ></p>
                </div>                
                <center>
                    
                    <button type="submit" id="submit" name="submit"  class="aa-browse-btn"   style="float:right; width:100%">Confim & Submit</button>
                </center>                
                </div>
              </form>
          		@endif	
          		
          		
          		
          			@if($dmmm==7)		
          		
      <?php
      Session::put('grand_total', $grand_total);
      Session::put('shipping_charge', $dddd);

   

      ;?>    		
          		
          		    		 		<?php
          	$tem_inv_number=uniqid();
          		
          		?>
          		
          	<form id="regForm" method="post" action="{{url('/')}}/nagad/process.php">
                <div class="tab">
                  <p>
                      
                      <input type="hidden" placeholder="Enter Payment Amount ( i.e 2 tk)" id="pamount" name="amount" value="{{$grand_total}}" required >
                  
                         <input type="hidden" placeholder="Enter Payment Amount ( i.e 2 tk)" id="pamount" name="invoice_no" value="{{ $tem_inv_number }}" required >
                  
                  </p>
                </div>                
                <center>
                    
                    <button type="submit" id="submit" name="submit"  class="aa-browse-btn"   style="float:right; width:100%">Confim & Submit</button>
                </center>                
                </div>
              </form>
          		@endif		
          			
          		
          		
          		
          		@if($dmmm==10)		
          		
      <?php
      Session::put('grand_total', $grand_total);

      Session::put('shipping_charge', $dddd);

   $p10=round($grand_total/100*10);






      ;?>    		
          		
          		 
   
          		
          		
          		
          	<form id="regForm" method="post" action="{{url('/')}}/{{$gw_link}}/sp.php">
                <div class="tab">
                    <label>র্বতমানে আপনি যত টাকা পে করতে আগ্রহী: (সর্বনিন্ম  10% ({{$p10}}) টাকা পেমেন্ট করতে হবে)</label>
                  <p><input type="number" placeholder="Amount" id="pamount" name="pamount" min="{{$p10}}" value="" required></p>
                </div>                
                <center>
                    
                    <button type="submit" id="submit" name="submit"  class="aa-browse-btn"   style="float:right; width:100%">Confim & Submit</button>
                </center>                
                </div>
              </form>
          		@endif
          		
          		
          		
          		
          		 
          		  
          		
          		<?php
          		      Session::put('vat', $vat_a);
          		      
          		;?>
          		
          		
          			
		</div>
	
	</section> <!--/#cart_items-->
@endsection
