@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<?php

$nid=Auth::user()->nid;
$auth_id=Auth::user()->id;
$up_line_id=Auth::user()->up_line_id;




$rank=Auth::user()->rank;
$affiliate_block=Auth::user()->affiliate_block;




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


   

	<section id="aa-myaccount" style="margin-top:0px;">

		<div class="container"  style="width:90%; margin:auto;">
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
				
				
					@if (Session::has('message_s'))
					<a href="{{ url('/my-account') }}">

								<div class="control-group">
										<div class="controls">
												<div class="alert alert-danger" style="background:green; text-align:center ">
														<strong style="color:white;text-align:center">{{ session('message_s') }}<br></strong>
<h3 style="color:white">Go to DashBoard >></h3>
												</div>
											</div>
								</div></a>
				@endif	
		
				
				
				
				
				<a href="{{ url('/my-account') }}">

								<div class="control-group">
										<div class="controls">
												<div class="alert alert-danger" style="background:green; text-align:center ">
						
						
						
														<strong style="color:white;text-align:center">আপনার পেমেন্ট এর তথ্য সফলভাবে পাঠানো হয়েছে, Approved এর জন্য অক্ষেমান রয়েছে। <br></strong>
<h3 style="color:white">Go to DashBoard >></h3>

												</div>
											</div>
								</div></a>
		
		
			
			
			
			</div>
			
		


			
			
			
		</div>








	</section>


@endsection








