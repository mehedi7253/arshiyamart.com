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
                      
                    $total_cash_wallet=DB::table("shops_account")->where('shop_id', $main_w)->where('status', 2)->get()->sum("amount");

                      
                      
                      $wc=DB::table("shops_account")->where('shop_id', $main_w)->where('status', 1)-> count();
                      
                      

?>


    



     
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard  </h3></a>

     
<h2 style="color:black; padding:20px 50px; text-align:center">Marchant Withdraw <br>       <span style="color:red">  Available balance= {{$total_cash_wallet}} </span><br>
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





@if($wc>1)


<h5 style="color:black; padding:20px 50px; text-align:center">      <span style="color:green"> আপনার একটি Withdraw  এর আবেদন সফলভাবে  সম্পন্ন হয়েছে। যা অপেক্ষমান রয়েছে,  এটি সম্পন্ন হওয়ার পর আপনি পুনরায় Withdraw করতে পারবেন। </span><br>
 </h5>
@else


        @if($total_cash_wallet>499)
        			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my_w') }}" method="post">
        								@csrf
        	
        	
        															
        							
        	<h3 style="color:blue; text-align:left">Withdraw Information:</h3>	
        
        
        
        
        
        <select name="payment_method" style="width:100%; padding:6px;" required>
                               <option value="">Withdraw Method</option>
        
                <option value="bKash">bKash</option>
                <option value="Rockate">Rockate</option>
                <option value="Nagod">Nagod</option>
                <option value="Cash_Payment">Cash Payment</option>
                
                
        </select>
        <br><br>
        
        
        <label>Amount ( যত টাকা নিতে ইচ্ছুক )</label><br>
        
            	<input name="amount" type="number"  placeholder="Amount" style="width:100%" max="{{$total_cash_wallet+$total_cash_wallet_w}}">	
        			
        <label> যে নম্বরে নিতে ইচ্ছুক (শুধু মাত্র বিকাশ/রকেট/নগদের ক্ষেত্রে)</label><br>
        
        
            	<input name="sender_number" type="text"  placeholder="bKash/Rocket/Nagad Number" minlength="8">	
        			
        			
        
        
        
        <button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
        							</form>
        
        @else
        <h5 style="color:black; padding:20px 50px; text-align:center">      <span style="color:green">  আপনার ব্যালেন্স  100/- টাকার  কম হলে আপনি Withdraw করতে পারবেন না।। </span><br>
         </h5>
               
        
        @endif



       

@endif



</div>
  




</div></div>


  










  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
