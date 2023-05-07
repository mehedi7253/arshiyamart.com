@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif

<?php

$nid=Auth::user()->nid;
$auth_id=Auth::user()->id;
$up_line_id=Auth::user()->up_line_id;




$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]); 
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);


$payment_check = DB::select('select * from ac_join where user_id = :user_id', ['user_id' => $auth_id]);




?>

 @foreach($results12 as $t12)
     <?php 
        $bkash=$t12->image;   
        
     ;?>
@endforeach




 @foreach($payment_check as $pc)
     <?php 
        $payment_status=$pc->status;     
        $pin=$pc->trx_id;     
     ;?>
@endforeach






@foreach($results13 as $t13)
     <?php 
        $rocket=$t13->image;     
     ;?>
@endforeach

@foreach($results14 as $t14)
     <?php 
        $nagad=$t14->image;     
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


















     
<h2 style="color:red; padding:20px 50px; text-align:center"> Buy Gift Card </span><br>
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


      
      
      




	
				
				

					
					
					
					
					
					
					
	




<div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3">





  





 <div>


<span style="color:blue"><b>পেমেন্ট পদ্ধতিঃ </b><br></span>
বিকাশ নম্বর: {{$bkash}} (পার্সনাল)।<br>
রকেট নম্বর: {{$rocket}} (পার্সনাল)।<br>
নগদ নম্বর: {{$nagad}} (পার্সনাল)।<br>
ব্যাংক এ্যাকাউন্ট নম্বর: 111-222-333-4444 (এ্যাকাউন্টের নাম: Cash Baba Online Shop, ব্যাংক: ডাচ বাংলা ব্যাংক)<br>
<span style="color:red">উল্লেখিত নম্বরে আপনার প্যাকেজের কাঙ্খিত মূল্য পরিশোধ করতে হবে। <br></span>

<span style="color:blue"><b>নোটঃ </b><br></span>
বিকাশ/রকেট/নগদে পে করলে নিচের বক্স TrxID লিখুন। যদি ক্যাশ পেমেন্ট হয়, তাহলে প্রাপ্ত মানি রিসিপ্ট নম্বর লিখতে হবে ও  ব্যাংক পেমেন্ট হয় তাহলে টাকা প্রদানের স্লিপ নম্বর লিখতে হবে। 
					        
					    </div>









<div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px">



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my_gg') }}" method="post">
<!--			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment') }}" method="post">
-->								@csrf
	
	
															
							
	<h3 style="color:blue; text-align:center">Payment Information:</h3>	


<label style="font-size:150%; color:red; text-align:center"> Amount: {{ $gigt_id+2000}}.00 BDT</label><br><br>



<select name="payment_method" style="width:100%; padding:6px;" required>
                       <option value="">Payment Method</option>

        <option value="bKash">bKash</option>
        <option value="Rockate">Rockate</option>
        <option value="Nagod">Nagod</option>
        <option value="Bank_Payment">Bank Payment</option>
        
        <option value="Cash_Payment">Cash Payment</option>
        
        
</select>
<br><br>

    	<input name="package" type="hidden"  placeholder="Sender Number" style="width:100%" value="{{ $gigt_id}}">	





<label> TrxID:  (বিকা-রকেট-নগদ এ পে করার পর SMS এ যে TrxID পেযেছেন)</label><br>


    	<input name="trx_id" type="text"  placeholder="TrxID/Money Recpt Number" minlength="8" required="" >	
			
			


<label> যে নম্বর থেকে পে করেছেন (শুধু  মাত্র বিকাশ/রকেট/নগদের জন্য)</label><br>
    	<input name="sender_number" type="number"  placeholder="Sender Number" style="width:100%" minlength="11">	
			



<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
							</form>



</div>
        



       
</div>


</div>


</div>
  




</div>


  










  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
