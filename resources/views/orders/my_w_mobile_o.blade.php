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
                      $total_cash_wallet=DB::table("ac_join_rccc")->where('user_id', $main_w)->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $wc=DB::table("ac_main_with")->where('user_id', $main_w)->where('status', 1)-> count();
                      
                      

?>


    



     
				              <a href="{{url('/my-account')}}">   
					              <h3 style="color:blue; padding:10px 5px; text-align:left;" > <i class="fa fa-home" aria-hidden="true"></i> Home </h3></a>
				              </a>

                       
                       @if (Session::has('message_s'))
                      
                                  <h4 style="background:red; color:white; margin-top:100px; padding:4px; text-align:center"> {{ session('message_s') }} </h4>

                                 @endif                 
                                 
<h3 style="color:black; padding:20px 50px; text-align:center"> Fund Transfer to Other User <br>
(Registration Wallet)
 </h3>
       

<div style="color:black; padding:20px 50px; text-align:center"><span style="color:red">  Available Registration  balance:  {{$total_cash_wallet}} </span>
 </div>
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







        			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my_w_mobile_o') }}" method="post">
        								@csrf
        	
        	
        															
        							

        
        
        <label>User ID </label><br>
        
            	<input name="user_id" type="text"  placeholder="User ID" style="width:100%" required>	
        			
        
        <br>
        
        
        <label>Amount </label><br>
        
            	<input name="amount" type="number"  placeholder="Amount" style="width:100%" min="20" max="{{$total_cash_wallet}}" required>	
        			
        
        		
        
        <button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit</button>
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
