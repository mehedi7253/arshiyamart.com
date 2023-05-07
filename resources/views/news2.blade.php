@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<?php

@$nid=Auth::user()->nid;
@$auth_id=Auth::user()->id;
@$up_line_id=Auth::user()->up_line_id;




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
				
					    
					    
					    

		
		
		
	@if($auth_id > 1)	
		





					    
					    
					    <h3 style="color:black; text-align:center; border:1px solid black; border-radius:5px; padding:4px">Create Post</h3>
					    
		<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/') }}/create7" method="post" enctype="multipart/form-data">
								@csrf
								
								
<label>আপনার মন্তব্য লিখুন: </label><br>



    	<textarea name="post" type="text"  placeholder=" Please Write Here..." style="width:100%; height:200px"></textarea>	
			
			

<label> যে প্রোডাক্ট/বিষয়ের মন্তব্য করছেন তার ছবি/স্কিনসর্ট যুক্ত করুন :</label><br>
<input type="file" name="file" required="">

			
			
			
			
			
				
		
<button type="submit" class="btn btn-default" style="width:100%; background:silver; font-size:130%; margin-top:20px">Submit Information</button>
							</form>



</div>






@else

<h2 style="margin-top:100px">Please Login frist... </h2>




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


