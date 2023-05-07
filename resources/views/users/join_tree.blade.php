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
        $trrn=$pc->trn;  
        
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
								
								
								
								<div style="height:1200px">
								    -
								    
								    
								</div>
				@endif	
		
				
				
				
				
				
		
			<div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3">
					    
	
	
					    
	@if(@$payment_status==1)	
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Your payment is waiting for approval, please wait. <br>
					    
					   <a href="/my-account" style="color:blue"> << back to Profile</a>
					    </h3>
	@else	
	
	
		
					    

	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
			<?php
			
			$lkfjs=2;
			;?>		    
					    
	@if($lkfjs==2)				    
	

	
	@if(isset($_GET['trn']))
	
	    					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px; margin-top:10px">Joining Form </h3>

	 <div>
	@else
	
	    					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px; margin-top:10px">Join Our Salse Team </h3>



	
					    
					    
					    
					    
	
	
	
	
	
	
					    
					    <div>
					  <p style="color:black; text-align:center; font-size:110%"><b>     আমাদের সেলস টিমে জয়েন করার জন্য প্রথমে আপনাকে একটি প্যাকেজ ক্রয় করে জয়েন করতে হবে।</b><br></p>
	
	@endif
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
						    
						    
						    

	@if(isset($_GET['trn']))


	<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_paymentsss') }}" method="post">
								@csrf
	
								
	@else 
	
						<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/joining_payment') }}" method="post">
								@csrf
								
	@endif
	
				
				
				
				
															
							


	@if(isset($_GET['trn']))
	
	
	        @if($_GET['trn'] < 4)
	    	<input name="trn" type="hidden"  placeholder="TrxID/Money Recpt Number" value="1" required="" >
	    	<input name="video" type="hidden"  placeholder="TrxID/Money Recpt Number" value="1" required="" >
	    	
	    	
	    	
	    	
	    	@else
	        <input name="trn" type="hidden"  placeholder="TrxID/Money Recpt Number" value="1" required="" >
	    	<input name="video" type="hidden"  placeholder="TrxID/Money Recpt Number" value="0" required="" >
	    	@endif
	    	

	
	@endif








							
							
							
							
							
							
							
							
							
	<h3 style="color:blue; text-align:left">Payment Information:</h3>	
<?php
$jjjpp=$_GET['pp'];
;?>


@if($jjjpp > 5)
<select name="package" style="width:100%; padding:6px;" required>
                       

        <option value="{{$jjjpp}}">Package Price {{$jjjpp }}</option>
       
</select>

@else

<select name="package" style="width:100%; padding:6px;" required>
                       <option value="">Select Package</option>

        <option value="100">Package(100Tk)</option>
        <option value="200">Package(200Tk)</option>
        <option value="500">Package(500Tk)</option>
        <option value="1000">Package(1,000Tk)</option>
        <option value="1500">Package(1,500Tk)</option>
        <option value="2000">Package(2,000Tk)</option>
        <option value="4000">Package(4,000Tk)</option>
        <option value="8000">Package(8,000Tk)</option>
        <option value="16000">Package(16,000Tk)</option>
</select> 


<a href="{{url('/')}}/citem/9999" style="color:red"> View our all Product & Package </a>

@endif


<!--
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
</select>-->
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
			




			
                
                
                
   	@if(isset($_GET['trn']))
 
		<h3 style="color:blue; text-align:left">Reference/Upline Information:</h3>	
									<h5 style="color:red; text-align:left">(Collect from your reference/Upline)</h5>									
									    
    
                
<input name="join_auth_code" onchange="ChangeList1()" id="checkid"  type="number"    placeholder="Position  Code"  minlength="4" required="" style="width:100%">         



<div>
    <span id="sm144"></span>
</div>







    @else
<h3 style="color:blue; text-align:left">Reference/Upline Information:</h3>	
									<h5 style="color:red; text-align:left">(Collect from your reference/Upline)</h5>									
									    
    
                
       <input name="up_line_id" type="number"  placeholder="Reference/Up Line ID"  minlength="11" required="" style="width:100%"> <br><br>
<input name="join_auth_code" type="number"  placeholder="Authorisation  Code"  minlength="4" required="" style="width:100%">  



@endif





          


<input type="checkbox" id="tttttttt" name="vehicle1" value="" style="font-size:130%" required="">
<label for="tttttttt"> I have accept CashBaba Shop Term & Condition.</label><br>

 

<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%">Submit Information</button>
							</form>






</div>














@endif


       @endif
















					






















				</div>

			
			
			
			</div>
			
		


			
			
			
		</div>








	</section>


@endsection







<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function ChangeList1(){
    var x = document.getElementById("checkid").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_position.php?dis_id='+x,
                        success:function(response){
                        $('#sm144').html(response);
                        }
                        
        });
        
        

}
</script>
