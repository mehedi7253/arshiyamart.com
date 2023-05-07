@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<?php

$nid=Auth::user()->nid;
$auth_id=Auth::user()->id;
$up_line_id=Auth::user()->up_line_id;




$rank=Auth::user()->rank;
$affiliate_block=Auth::user()->affiliate_block;


	$business_count=DB::table('shops')->where('owner_user_id',$auth_id)->count();


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
session_start();
    $_SESSION['m']="3"
;?>

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
												<div class="alert alert-danger" style="background:green; text-align:center">
														<strong style="color:white;text-align:center">{{ session('message_s') }}<br></strong>
<h3 style="color:white">Go to DashBoard >></h3>
												</div>
											</div>
								</div></a>
				@endif	
		
				
				
									    
					    
   <a href="{{url('/my-account?skip=1')}}">    <h4 style="color:blue; padding:10px 5px; text-align:right; margin-left:50px;" > <i class="fa fa-home" aria-hidden="true"></i>
 Skip   & Back to Home </h4></a>
		
				
				
		
			<div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3">
					    
	
	

		
					    

	
	
	
	
	
	
	
	
	
	

					    	@if (Session::has('message_b'))
					    						<a href="{{ url('/my-account') }}">

								<div class="control-group">
										<div class="controls">
												<div class="alert alert-success" style="background:green; color:white; text-align:center ">

														<strong style="color:white;text-align:center">{{ session('message_b') }}</strong>
														<h3 style="color:white">Go to DashBoard >></h3>


												</div>
											</div>
								</div>
								</a>
				@endif	
				
					    

		
		
	@if($business_count < 1)	
		

<?php
$b_session=Session::get('business_name');
?>	    

@if(empty($b_session))
					    
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Create Your Own Store/Shop/Business </h3>
					    <div>
					  <p style="color:black; text-align:center; font-size:110%"><b> আপনি যদি একজন উদ্যোক্ত হয়ে থাকেন, তাহলে  এখানে আপনি শপ/স্টোর ওপেন করে আপনার প্রডাক্টসমূহ বিক্রয় করতে পারবেন। </b><br></p>
@else




    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Complete Your Business/Store Information </h3>
    <div>
    
@endif					
					
					
					  <p style="color:red; text-align:center; font-size:110%"><b> আপনার বিজনেসকে যেন সবাই সহজে খুজে পান এবং লোকেশন অনুযায়ী অটো ট্রাকিং হয়ে কাস্টমারের নিকট সহজে পৌছে যেতে পারেন সে জন্য যথাযথভাবে নিচের তথ্য প্রদান করুন</b><br></p>
					        
					    </div>
					    
					    
					    
					    
					    
						<div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px">



			<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/') }}/create2" method="post" enctype="multipart/form-data">
								@csrf
	
	
	 <?php
                    $aa_dist=DB::table('all_dist')->orderby('dist_name','ASC')->get();
                   ;?>
           														
							
							
				<label> আপনার  বিজনেস/ প্রতিষ্ঠানের নাম</label><br>



    	<input name="business_name" type="text"  placeholder="Business/ Store Name" style="width:100%" minlength="3" value="{{$b_session}}">	
			
			
		<?       $user_id = Auth::user()->id;
 ?>	
			

	<input name="oid" type="hidden"  placeholder="ii" style="width:100%" value="{{ $user_id}}">	
						
							
							
							
	<h3 style="color:blue; text-align:left"> আপনার জেলা নির্বাচন করুন </h3>	

<select name="dis" style="width:100%; padding:6px;" id="mySelect" onchange="ChangeCarList()"  required>
                       <option value="">Select Distrct</option>

@foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach</select>
<br>
							
	<h3 style="color:blue; text-align:left"> আপনার থানা/উপজেলা  নির্বাচন করুন</h3>	

<select name="ps" id="sm14" style="width:100%; padding:6px;" required>
                       <option value="">Select P.S/Thana</option>
  </select>

<br>



<label> এরিয়া (ইউনিয়ন/পোস্ট অফিস/নিকটবর্তী  পরিচিত স্থান )</label><br>



    	<input name="location" type="text"  placeholder=" Business Location" style="width:100%" minlength="3">


<label>গ্রাম/রাস্তা (বাড়ি/শপ নং যদি থাকে):  (বিজনেস/শপ কোন মার্কেটে অবস্থিত হলে তার নামও এখানে লিখুন)</label><br>



    	<input name="address" type="text"  placeholder="Vill/Road/House No (if any) " style="width:100%" minlength="3">	
				
		

<label>হেল্প লাইন নম্বর: </label><br>



    	<input name="helpline" type="text"  placeholder=" Helpline" style="width:100%" minlength="11">





<label> জাতীয় পরিচয়পত্র সংযুক্ত করুন :</label><br>
<input type="file" name="file3" required="">




<br>

<label>লগো :(পরবর্তীতে পরিবর্তন করা যাবে) </label><br>
<input type="file" name="file2" required="">


<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> <span style="color:red"> আমি বাংলাদেশ সরকার  তথা   ভোক্তা অধিদপ্তর এর নির্দেশনা মোতাবেক বৈধ ব্যবসা   পরিচালনা করিতে বাধ্য থাকিবো।  </span></span><br>






<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%; margin-top:100px">Submit Information</button>
							</form>



</div>




@else


			
	<?php 		
		Session::put('business_name',"");
			
		echo '<meta http-equiv="refresh" content="0;URL=/my-account?store=1" />';
		
	?>	



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
function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_ps.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>


