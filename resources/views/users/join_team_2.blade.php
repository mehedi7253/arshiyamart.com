@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<?php

$nid=Auth::user()->nid;
$auth_id=Auth::user()->id;
$auth_phone=Auth::user()->phone;
$up_line_id=Auth::user()->up_line_id;
$rank=Auth::user()->rank;




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
		
				
				
				
				
				
		
			<div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3">
					    
	
	
					    
	@if(@$payment_status==1)	
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Your payment is waiting for approval, please wait.<br></h3>
	@endif	
	
	
		
					    

	
	
	
	
	
	
	
	
	
	
		@if(empty($payment_status))
		    
					    	@if (Session::has('message_e'))
								<div class="control-group">
										<div class="controls">
												<div class="alert alert-danger" style="background:red; text-align:center ">

														<strong style="color:white;text-align:center">{{ session('message_e') }}</strong>

												</div>
											</div>
								</div>
				@endif	
				
					    
					    
					    
		
		
		
@if(isset($uid))  		
	    <?php 
                    $mem_check = DB::table('users')->where('phone', $uid)->first();
                    
                      
                    @$block_m=$mem_check->affiliate_block;
                    @$rank_m=$mem_check->rank;
                    @$name_m=$mem_check->name;
                    @$sm_id_m=$mem_check->id;
                    @$phone_m=$mem_check->phone;

    
    ;?>
    
 
    @if(empty($sm_id_m))
        	 <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">  এই মোবাইল নম্বর Cash Baba Shop এ  এখনো রেজিষ্ট্রেশন হয়নি।  </h3>
    @elseif($rank_m>0)
    
    	 <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">এই মোবাইল নম্বরের মেস্বরটি ইতোমধ্যে কোন টিমে জয়েন করেছেন। </h3>

    @else
           
           @if($block_m>0)
            @if($block_m !=$auth_id)
    	    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px"> উক্ত মোবাইল নম্বরের ব্যাক্তিটি ইতোমধ্যে অন্য কোন টিমের রেফারেন্স হিসাবে জয়েন করেছেন বিধায় আপনি তাকে জয়েন করাতে পারবেন না।  </h3>
            @else
            
            
            
            
            
            
  
    
    
                      <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Ad a member to my Team </h3>
					    
	
	
	
	
	
	
					    
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



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment_ttt') }}" method="post">
								@csrf
	





	<h3 style="color:blue; text-align:left">User Information:</h3>	

									



<label><h3 style="color:red">User Name: {{$name_m}}</h3></label>
<label><h3 style="color:red">Mobile Name: {{$uid}}</h3></label>





<input name="up_line_id" type="hidden"  placeholder="Reference/Up Line ID"  value="{{$auth_id}}"  required="" style="width:100%"> 
<input name="join_auth_code" type="hidden"  placeholder="Authorisation  Code" value="{{$auth_phone}}"   required="" style="width:100%">




<input name="m_userid" type="hidden"  placeholder="Reference/Up Line ID" value="{{$sm_id_m}}"  required="" style="width:100%"> 
<input name="m_j_name" type="hidden"  placeholder="Authorisation  Code" value="{{$name_m}}"   required="" style="width:100%">
<input name="m_phone" type="hidden"  placeholder="Authorisation  Code" value="{{$phone_m}}"   required="" style="width:100%">
	
															
							
	<h3 style="color:blue; text-align:left">Payment Information:</h3>	

<select name="package" style="width:100%; padding:6px;" required>
                       <option value="">Select Package</option>

        <option value="500">Package-1(500Tk)</option>
        <option value="1000">Package-1(1,000Tk)</option>
        <option value="1500">Package-1(1,500Tk)</option>
        <option value="2000">Package-1(2,000Tk)</option>
        <option value="4000">Package-2(4,000Tk)</option>
        <option value="8000">Package-3(8,000Tk)</option>
        <option value="20000">Package-3(20,000Tk)</option>
        <option value="30000">Package-3(30,000Tk)</option>
        <option value="50000">Package-3(50,000Tk)</option>
</select>
<br><br>



<select name="payment_method" style="width:100%; padding:6px;" required>
                       <option value="">Payment Method</option>

        <option value="bKash">bKash</option>
        <option value="Rockate">Rockate</option>
        <option value="Nagod">Nagod</option>
        <option value="Bank_Payment">Bank Payment</option>
        
        <option value="Cash_Payment">Cash Payment</option>
        
        
</select>
<br><br>


<label> TrxID:  (বিকা-রকেট-নগদ এ পে করার পর SMS এ যে TrxID পেযেছেন)</label><br>


    	<input name="trx_id" type="text"  placeholder="TrxID/Money Recpt Number" minlength="8" required="" >	
			
			


<label> যে নম্বর থেকে পে করেছেন (শুধু  মাত্র বিকাশ/রকেট/নগদের জন্য)</label><br>
    	<input name="sender_number" type="number"  placeholder="Sender Number" style="width:100%" minlength="11">	
			





<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
							</form>



</div>
            
            
            
            
            
            
            
             @endif 
    @else
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                      <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Ad a member to my Team </h3>
					    
	
	
	
	
	
	
					    
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



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment_ttt') }}" method="post">
								@csrf
	





	<h3 style="color:blue; text-align:left">User Information:</h3>	

									



<label><h3 style="color:red">User Name: {{$name_m}}</h3></label>
<label><h3 style="color:red">Mobile Name: {{$uid}}</h3></label>





<input name="up_line_id" type="hidden"  placeholder="Reference/Up Line ID"  value="{{$auth_phone}}"  required="" style="width:100%"> 
<input name="join_auth_code" type="hidden"  placeholder="Authorisation  Code" value="{{$auth_id}}"   required="" style="width:100%">




<input name="m_userid" type="hidden"  placeholder="Reference/Up Line ID" value="{{$sm_id_m}}"  required="" style="width:100%"> 
<input name="m_j_name" type="hidden"  placeholder="Authorisation  Code" value="{{$name_m}}"   required="" style="width:100%">
<input name="m_phone" type="hidden"  placeholder="Authorisation  Code" value="{{$phone_m}}"   required="" style="width:100%">
	
															
							
	<h3 style="color:blue; text-align:left">Payment Information:</h3>	

<select name="package" style="width:100%; padding:6px;" required>
                       <option value="">Select Package</option>

        <option value="500">Package-1(500Tk)</option>
        <option value="1000">Package-1(1,000Tk)</option>
        <option value="1500">Package-1(1,500Tk)</option>
        <option value="2000">Package-1(2,000Tk)</option>
        <option value="4000">Package-2(4,000Tk)</option>
        <option value="8000">Package-3(8,000Tk)</option>
        <option value="20000">Package-3(20,000Tk)</option>
        <option value="30000">Package-3(30,000Tk)</option>
        <option value="50000">Package-3(50,000Tk)</option>
</select>
<br><br>



<select name="payment_method" style="width:100%; padding:6px;" required>
                       <option value="">Payment Method</option>

        <option value="bKash">bKash</option>
        <option value="Rockate">Rockate</option>
        <option value="Nagod">Nagod</option>
        <option value="Bank_Payment">Bank Payment</option>
        
        <option value="Cash_Payment">Cash Payment</option>
        
        
</select>
<br><br>


<label> TrxID:  (বিকা-রকেট-নগদ এ পে করার পর SMS এ যে TrxID পেযেছেন)</label><br>


    	<input name="trx_id" type="text"  placeholder="TrxID/Money Recpt Number" minlength="8" required="" >	
			
			


<label> যে নম্বর থেকে পে করেছেন (শুধু  মাত্র বিকাশ/রকেট/নগদের জন্য)</label><br>
    	<input name="sender_number" type="number"  placeholder="Sender Number" style="width:100%" minlength="11">	
			





<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
							</form>



</div>
            
    
    
    
    
    
    
    
             
             
             
            @endif 
           
    @endif

@endif    
    
    
    

@if(!isset($uid))
	
		
		
	@if($rank>=1)

   
    
    
	
	 <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Add a member to my Salse Team </h3>
					    







					    
					    <div>
<span style="color:blue; text-align:center; width:100%; magin:auto"><b>লক্ষণীয়ঃ</b><br></span>

যারা ইতোপূর্বে  Cash Baba Shop এ ‍সাধারণ ক্রেতা হিসাবে রেজিষ্ট্রেশেন  করেছেন, তাদেরকে আপনার টিমে জয়েন করাতে পাবেন। যদি ইউজার নতুন হয়ে থাক তাহলে আগে Cash Baba Shop এ ‍সাধারণ ক্রেতা হিসাবে রেজিষ্ট্রেশন করিয়ে নিতে হবে।

					    </div>
					    
					    
					    
					    
					    
						<div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px">



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment_check') }}" method="post">
								@csrf
	
	
															
	
	
	

<label> Member Mobile Number</label><br>
    	<input name="member_number" type="number"  placeholder="Sender Number" style="width:100%" minlength="11">	
			



<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Search Member</button>
							</form>



</div>

	
	@endif
		
		@endif	
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
	@if($rank<1)				    
					    
					    
					    
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Join Our Salse Team </h3>
					    
	
	
	
	
	
	
					    
					    <div>
					  <p style="color:black; text-align:center; font-size:110%"><b>     আমাদের সেলস টিমে জয়েন করার জন্য প্রথমে আপনাকে একটি প্যাকেজ ক্রয় করে জয়েন করতে হবে।</b><br></p>
<span style="color:blue"><b>লক্ষণীয়ঃ</b><br></span>

প্রথম কাঙ্খিত প্যাকেজ সিলেট করে পেমেন্ট সম্পন্ন করুন, পেমেন্ট এ্যাপ্রুভ হওয়ার পর আপনার ব্যাক্তিগত তথ্য প্রদানের ফর্ম দেখতে পাবেন। ব্যক্তিগত তথ্য প্রদানের জন্য আপনার আপনার মোবাইলে একটি SMS পাবেন। তারপর থেকে আপনি অন্যান্ন কার্যক্রম পরিচানা করতে পারবেন।<br>


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



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment') }}" method="post">
								@csrf
	
	
															
							
	<h3 style="color:blue; text-align:left">Payment Information:</h3>	

<select name="package" style="width:100%; padding:6px;" required>
                       <option value="">Select Package</option>

        <option value="500">Package-1(500Tk)</option>
        <option value="1000">Package-1(1,000Tk)</option>
        <option value="1500">Package-1(1,500Tk)</option>
        <option value="2000">Package-1(2,000Tk)</option>
        <option value="4000">Package-2(4,000Tk)</option>
        <option value="8000">Package-3(8,000Tk)</option>
        <option value="20000">Package-3(20,000Tk)</option>
        <option value="30000">Package-3(30,000Tk)</option>
        <option value="50000">Package-3(50,000Tk)</option>
</select>
<br><br>



<select name="payment_method" style="width:100%; padding:6px;" required>
                       <option value="">Payment Method</option>

        <option value="bKash">bKash</option>
        <option value="Rockate">Rockate</option>
        <option value="Nagod">Nagod</option>
        <option value="Bank_Payment">Bank Payment</option>
        
        <option value="Cash_Payment">Cash Payment</option>
        
        
</select>
<br><br>


<label> TrxID:  (বিকা-রকেট-নগদ এ পে করার পর SMS এ যে TrxID পেযেছেন)</label><br>


    	<input name="trx_id" type="text"  placeholder="TrxID/Money Recpt Number" minlength="8" required="" >	
			
			


<label> যে নম্বর থেকে পে করেছেন (শুধু  মাত্র বিকাশ/রকেট/নগদের জন্য)</label><br>
    	<input name="sender_number" type="number"  placeholder="Sender Number" style="width:100%" minlength="11">	
			

	<h3 style="color:blue; text-align:left">Reference/Upline Information:</h3>	
									<h5 style="color:red; text-align:left">(Collect from your reference/Upline)</h5>	
									
									
<input name="up_line_id" type="number"  placeholder="Reference/Up Line ID"  minlength="11" required="" style="width:100%"> <br><br>
<input name="join_auth_code" type="number"  placeholder="Authorisation  Code"  minlength="4" required="" style="width:100%">



<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
							</form>



</div>






@endif









@endif

















	@if(@$payment_status==2)	
				    
					    
					    
	    @if($nid<100)	


	@if (Session::has('message_e'))
								<div class="control-group">
										<div class="controls">
												<div class="alert alert-danger" style="background:red; text-align:center ">

														<strong style="color:white;text-align:center">{{ session('message_e') }}</strong>

												</div>
											</div>
								</div>
				@endif	
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Join Our Salse Team </h3>


 <div style="color:black; text-align:center; font-size:110%"><b>
					       আপনার পেমেন্ট এ্যাপ্রুভ হয়েছে। অনুগ্রহ করে নিচের তথ্য সমূহ পূরণ করে আপানার প্রফাইল সম্পন্ন করুন। । 
					        
					        
					  </b>  </div>



<div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:50px">

						<h3 style="color:blue; text-align:left">Personal Informaton:</h3>
							<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/join') }}" method="post">
								@csrf
								
								
								<input name="j_name" type="text"  value="{{ $user_details->name }}" placeholder="Full Name" required="">
								
		
			<input name="nid" type="number"   placeholder="National ID/Birth Reg. Number"  minlength="10" required="" style="width:100%">		<br><br>			
							<input type="number" name="j_mobile"  placeholder="Mobile"  minlength="11"  value="{{ $user_details->phone }}" required="" style="width:100%">	<br><br>
							
							<input name="father_name" type="text"  placeholder="Father's/Husband Name" required="">
							
							
				  <select name="country" style="width:100%; padding:6px;" required="">			
							
   <option value="">Select Country</option>
      <option value="Bangladesh" style="background:green; color:white">Bangladesh</option>

   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh" style="background:green; color:white">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>

						
				</select>		<br><br>
						
													<input name="home_district" type="text"  placeholder="District/State" required="">

						
						<!--
						                 <select name="home_district" style="width:100%; padding:6px;" required>
                       <option value="">Select District</option>
										
<option value="Dhaka" style="background:green; color:white">Dhaka</option>
<option value="Bagerhat">Bagerhat</option>

        <option value="Bandarban">Bandarban</option>
        <option value="Barguna">Barguna</option>
        <option value="Barisal">Barisal</option>
        <option value="Bhola">Bhola</option>
        <option value="Bogra">Bogra</option>
        <option value="Brahmanbaria">Brahmanbaria</option>
        <option value="Chandpur">Chandpur</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Chuadanga">Chuadanga</option>
        <option value="Comilla">Comilla</option>
        <option value="Cox’sBazar">Cox’sBazar</option>
<option value="Dhaka" style="background:green; color:white">Dhaka</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Feni">Feni</option>
        <option value="Gaibandha">Gaibandha</option>
        <option value="Gazipur">Gazipur</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Habiganj">Habiganj</option>
        <option value="Jaipurhat">Jaipurhat</option>
        <option value="Jamalpur">Jamalpur</option>
        <option value="Jessore">Jessore</option>
        <option value="Jhalokati">Jhalokati</option>
        <option value="Jhenaidah">Jhenaidah</option>
        <option value="Khagrachari">Khagrachari</option>
        <option value="Khulna">Khulna</option>
        <option value="Kishoreganj">Kishoreganj</option>
        <option value="Kurigram">Kurigram</option>
        <option value="Kushtia">Kushtia</option>
        <option value="Lakshmipur">Lakshmipur</option>
        <option value="Lalmonirhat">Lalmonirhat</option>
        <option value="Madaripur">Madaripur</option>
        <option value="Magura">Magura</option>
        <option value="Manikganj">Manikganj</option>
        <option value="Maulvibazar">Maulvibazar</option>
        <option value="Meherpur">Meherpur</option>
        <option value="Munshiganj">Munshiganj</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Naogaon">Naogaon</option>
        <option value="Narail">Narail</option>
        <option value="Narayanganj">Narayanganj</option>
        <option value="Narsingdi">Narsingdi</option>
        <option value="Natore">Natore</option>
        <option value="Nawabganj">Nawabganj</option>
        <option value="Netrokona">Netrokona</option>
        <option value="Nilphamari">Nilphamari</option>
        <option value="Noakhali">Noakhali</option>
        <option value="Pabna">Pabna</option>
        <option value="Panchagarh">Panchagarh</option>
        <option value="Patuakhali">Patuakhali</option>
        <option value="Pirojpur">Pirojpur</option>
        <option value="Rajbari">Rajbari</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Rangamati">Rangamati</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Satkhira">Satkhira</option>
        <option value="Shariatpur">Shariatpur</option>
        <option value="Sherpur">Sherpur</option>
        <option value="Sirajganj">Sirajganj</option>
        <option value="Sunamganj">Sunamganj</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Tangail">Tangail</option>
        <option value="Thakurgaon">Thakurgaon</option>
										
									
                    </select>	
							<br>	<br>-->
								<textarea type="text" name="p_address" placeholder="Permanent Address" style="width:100%"  minlength="11" required=""></textarea>
					
								
								
								
							<input type="text" name="date_of_birth" placeholder="Date of birth (dd/mm/yy)" required="">
								
						
							<input type="text" name="education" placeholder="Education (Last Certificate)" required="">
												
								
		<hr>
											
								
								
								<h3 style="color:blue; text-align:left">Nomini  Informaton:</h3>	
								
								<input name="nomini" type="text"  placeholder="Nomini Name & Relation" required="">
								
									<textarea type="text" name="nomimi_address" placeholder="Nomini Mobile & Address" style="width:100%"  minlength="16" required=""></textarea>
								
								
								
								<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:110%">Confirm & Submit</button>
							</form>
					</div><!--/login form-->
					
					
					
					
					
@endif						
@endif	





















				</div>

			
			
			
			</div>
			
		


			
			
			
		</div>








	</section>


@endsection








