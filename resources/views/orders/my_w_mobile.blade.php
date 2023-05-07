@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);


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
     
      

<?php
                      $main_w=Auth::user()->id;
                      $ma=Auth::user()->name;
                      $total_cash_wallet=DB::table("ac_main")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $wc=DB::table("ac_main_with")->where('user_id', $main_w)->where('status', 1)-> count();
                      
                      

?>


    



     
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard ({{ $ma }}) </h3></a>

     
<h2 style="color:black; padding:20px 50px; text-align:center"> Fund Transfer <br>       <span style="color:red">  Available balance= {{$total_cash_wallet+$total_cash_wallet_w}} </span><br>
 </h2>
       


	@if (Session::has('message_e'))
								<div class="control-group">
										<div class="controls">
												<div class="alert alert-danger" style="background:red; text-align:center ">

														<strong style="color:white;text-align:center">{{ session('message_e') }}</strong>

												</div>
											</div>
								</div>
				@endif	


      
      
     <div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3"> 
      
      
      
      
      <div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px">







        			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my_w_mobile') }}" method="post">
        								@csrf
        	
        	
        															
        							
        	<h3 style="color:blue; text-align:left">Transfer Information:</h3>	
        
        
        
        
        
        <select name="payment_method" style="width:100%; padding:6px;" required>
                               <option value="">Fund Transfer to</option>
        
<!--                <option value="1">Mobile Recharge Wallet</option>
               <option value="2">User Joining Wallet</option>
               <option value="3">Shop Wallet</option>
-->

                
        </select>
        <br><br>
        
        
        <label>Amount ( যত টাকা নিতে ইচ্ছুক) [10% সার্ভিস চার্জ কর্তন হবে]</label><br>
        
            	<input name="amount" type="number"  placeholder="Amount" style="width:100%" max="{{$total_cash_wallet-$total_cash_wallet_w}}">	
        			
        
        		
        
        <button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Confirm & Submit</button>
        							</form>
        
     
 

       




</div>
  




</div></div>


  










  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
