@extends('layouts.temp2.master2')
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


   

	<section id="aa-myaccount" style="margin-top:0px; margin-bottom:600px">

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
<h3 style="color:white"><i class="fa fa-home" aria-hidden="true"></i> Home </h3>
												</div>
											</div>
								</div></a>
				@endif	
		
				
				
				
				
				
				
				
				              <a href="{{url('/my-account')}}"> 
				              <h3 style="color:blue; padding:10px 5px; text-align:left;" > <i class="fa fa-home" aria-hidden="true"></i> Home </h3></a>

				
		
		
		
		
		
		
		
		
		
		
		
			<div class="row" style="margin-bottom:100px">

					<div class="col-md-6 col-md-offset-3">
					
		

							
				
				
		<?php
	$up_line_id=Auth::user()->up_line_id;
	$up_line_id_v=Auth::user()->trn;
	$up_line_id_vvv=Auth::user()->video;
	$network_sl=Auth::user()->network_sl;
	$ppppmersi=$up_line_id+$up_line_id_v;
	$my_id=Auth::user()->id;
	$auth_ran=Auth::user()->auth_ran;
	$mnnnnn=Auth::user()->name;
	
	$myiiidd=Auth::user()->j_mobile;
	$permission=Auth::user()->permission;
	$rank=Auth::user()->rank;
	$phone=Auth::user()->phone;
	$email=Auth::user()->email;
	$user=Auth::user()->login_user_name;
	$gender=Auth::user()->gender;
	$nid=Auth::user()->nid;
	$dob=Auth::user()->date_of_birth;
	$father=Auth::user()->father_name;
	$up_line_id=Auth::user()->up_line_id;
	$address=Auth::user()->address;
	$cccccccc=Auth::user()->created_at;
	
	
	;?>	
		
		
             <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
	
@if(!isset($_GET['e']))	


		<h3 style="text-align:center; background:pink; color:white; padding:5px; border-radius:5px">
			        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxARDhAOEBAPEBERDxERDhUPDxAVEA8RFxEXGBYSExYYHSggGBolHRMTIjEhJykrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAwUGBAECB//EADsQAAIBAQQFCgQEBgMAAAAAAAABAgMEBRExEiEiQVEGE2FxgZGhscHRMkJSsmJyguEjJHOSotJDY/D/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A/cQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEdavCCxnKMV0tIrq1/UV8OlPqWC8QLUGeqco38tNL80n6IhfKGtujTXZL3A04MuuUNb6af8AbL3JqfKOXzU4vqk16MDRAqKPKCk/iU4dmK8NfgWNntVOeuE4y6nr7gJgAAAAAAAAAAAAAAAAAAAAAAAACmvW+lDGFPCUsm/lj7sCxtdtp0ljOWHBb31IoLbf1SWKprm1xzn7IqqlRyblJuTebeZ8gezm5PGTbfFttngAAAAAAACeDxWp7sMwALOx33VhgpfxI/i+LsfuaCw3jTq/C8Jb4vVJe5jBFtPFPBrJrNAb4FBdd+ZQrdSn/t7l8mB6AAAAAAAAAAAAAAAAAU1/XloLmoPaktpr5Y+7Agvq986VJ9E5L7Y+5QgAAAAAAAAAAAAAAAAAC2ua9nTapzexuf0fsVIA3qe89M9yfvLBqhN6v+Nvd+H2NCAAAAAAAAAAAAAAc9vtSpU5VHuyXF7kYupUcpOUni28Wy15R2vSqKmsoZ/mfsvUqAAAAAAAASUKMpy0YrF+S4vggIwXtluOK11G5PhHVHvzfgd8LDSWVOHbFN+IGTBrZWOk86cP7UcVpuSD1wbg++PuBnwTWqyzpy0ZrDg9z6mQgAAAAABPflwNhc9t52km/ijsz6+PaY877ltfN1li9mezL0feBrwAAAAAAAAAAI7RVUISm8oxbJCq5R1sKGj9ckuxa/RAZec3JuTzbbfW8zwAAAAAAAks9FzkoRzfcuLfQamx2WNKOjH9T3yfFnByfs+EHVecnhH8qz8fItgAAAAACOvRjOLhJYp+D4rpMtbbK6U3B698XxXE1pX31Z9Ok5b4bS6t67vIDNgAAAAAAA2l12jnKMJ78MJfmWpnUUXJets1KfBqS7Vg/JF6AAAAAAAAAM9ypntU49En4pejNCZjlO/40V/1r7pAVAAAAAAAANbYIYUaa/AvFY+pOQ2KWNKm/wAEfImAAAAAAB5KOKa4prvPQ3qx4AYtrcBJ4tviwAAAAAAWvJueFdr6oSXc0/c1JkLif8zT/V9jNeAAAAAAAAAMxymX8eP9NfdI05neVMNunLjGS7mvcCjAAAAAAABobhr6VPQ3wf8Ai9a9SzMjYrS6U1NdTXFb0auhWjOKlF4p/wDsH0gfYAAAAAcd7V9CjLjLZj25+GJ1zmknJtJJYtvcjL3nbOdnitUY6oLo4vrA5AAAAAAAAd9xL+Zp/q+xmvMrychjaMfphJ+S9TVAAAAAAAAACo5S0saKl9E13PV54FuQ2yjp05w+qLXbu8QMOA008Hqa1PoYAAAAAAB0WO2zpPGL1P4k8mR0KE5vCEXJ9G7re4s6VxSaxlNRe5JY97A7rLe1Keb0Hwll2PI7otPJp9RmLRdlWHy6S4w1+GZy61xXegNk3hnqOO03nSh8yk+ENb78kZjFve33s6aF3VZ5QaXGWyvED23XhOrqezFZRXm+JyFxK4ZaOqonLenF4dj/AGK202WdN4Ti1weafUwIQAAAAAAAX/JalqqVOqK835ovziuez6FCCebWlLrev2O0AAAAAAAAAAAMpygsuhW0l8NTa/V8y9e0rDZ3pY+dpOHzLXB8JGMkmm09TTwae5gAAALW7rocsJ1MYx3L5pLp4Imue7dSq1F0wi/uZcgfNKnGK0YpRXBI+gAAaAA8SPQAB5KKaaaTTzTWKZ6AKW8LmzlS7Y/6v0KVm0Ky9rt005wW2s0vn/cDPAAAdd1WXna0Y4bK2p9S3dupHIay4rFzdPFrbng30LcgLJAAAAAAAAAAAAABQcobuzrwX9RL7vcvzxoDBFhc1i5yelJbMP8AKW5E98XS4PTppuDetLOD9i2sVnVOnGHBa+mW8CcAAAAAAAAAAAAAAAFFftiwfPRWpvCfQ/q7SoNjWpqUXF5STTKGwXRKdRqeKhCWEn9XRH3AkuG7tOXOyWxF7P4pL0Rpz5pwUUopYJLBJbkfQAAAAAAAAAAAAAAAAHmBHOnvRKAOUHRKCZDKDQHyAAAAAAAAAAAPqMGyWNNLpA+IU+JKkegAAAAAAAAAAAAAAAAAAAAAAAAD5cEz4dLpJQBA6TPObfA6ABz82+B6qTJwBEqXSfagkfQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9k=" 
			        style="height:100px; border-radius:50%"/>
			        
			        <br>
			       
			     <b>   <span style="color:black">{{$mnnnnn}}</span></b>
			        
			             
			         <a href="/profile?e=1" style="color:blue"> ( Edit  <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue"></i>)</a>
			    </h3>
 
			
			
		
			
			  
		<table>
		    
            	<table  id="customers">
            	    
          
            	<tr>
            	    <td>Name: </td>
            	    <td> {{$mnnnnn}}</td>
            	</tr>
            	
            	
                    	<tr>
            	    <td>Mobile: </td>
            	    <td> {{$phone}}</td>
            	</tr>    	
            	
            	
                <tr>
            	    <td>Email: </td>
            	    <td> {{$email}}</td>
            	</tr>     	
            	
            	
            	
  <tr>
               
               
               
                
               	<?php

                      
                    
                      $total_ppp_thismonths=DB::table('orders')->where('user_id',$my_id)->where('order_status',"Delivered")->sum('total');
                    
	
	
                    $rank87687=DB::table('rank_promotion2')->get();
	
	
	                foreach ($rank87687 as $rank34){
	                    
	                   if($total_ppp_thismonths   >   $rank34->monthly_value ){
	                   
	                   @$my_rank=$rank34->name;
	                   
	               
	             
                        
	                }
	                    
	                }
	                
	                
	                
	                
	                $rank8768887=DB::table('rank_promotion2')->get();

	
	 foreach ($rank8768887 as $rank34){
	                    
	                   if($total_ppp_thismonths   >   $rank34->monthly_value ){
	                   
	                   @$my_rank=$rank34->rank_name;
	   
                        
                        
	                }
	                    
	                }
	                
	                
	                
	                
	?>
               
               
               
               
               
            	    <td>Rank: </td>
            	    <td> @if(empty($my_rank))
            			এখনো কোন Rank অর্জন হয়নি।
            			@else
            			{{@$my_rank}} 
            			@endif
			        </td>
            </tr>           	
            	       	
            	
            	
            	
             <tr>
            	    <td>Gender </td>
            	    <td> {{$gender}}</td>
            </tr>           	
            	      	
            	
             <tr>
            	    <td>NID </td>
            	    <td> {{$nid}}</td>
            </tr>       	
            	
            	
            <tr>
            	    <td>Date of Birth </td>
            	    <td> {{$dob}} </td>
            </tr>    	
            	
            	
                   	
            <tr>
            	    <td>Father's Name </td>
            	    <td> {{$father}} </td>
            </tr>       	
            	
            	
            	
            	
    	
            	
            	             <tr>
            	    <td>My Joining Date </td>
            	    <td> 
            	     <?php
            	    @$j_date=DB::table('ac_join')->where('user_id',$my_id)->first();
            	    @$ddddddd=date('d/m/Y', strtotime($cccccccc));
            	    @$my_age_ddddddd=date('d/m/Y', strtotime($cccccccc));
            	    ?>
            	    
            	   {{@$ddddddd}} </td>
            </tr>     	
            	
            	
             <tr>
            	    <td>My Joining Age </td>
            	    <td>
        <?php
        
@$hours_in_day   = 24;
@$minutes_in_hour= 60;
@$seconds_in_mins= 60;

@$birth_date     = new DateTime("$cccccccc");
@$current_date   = new DateTime();

$diff           = $birth_date->diff($current_date);

echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day (s)"; echo "<br/>";
//echo $months    = ($diff->y * 12) + $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
//echo $weeks     = floor($diff->days/7) . " weeks " . $diff->d%7 . " day(s)"; echo "<br/>";
//echo $days      = $diff->days . " days"; echo "<br/>";
//echo $hours     = $diff->h + ($diff->days * $hours_in_day) . " hours"; echo "<br/>";
//echo $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " minutest"; echo "<br/>";
//echo $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " seconds"; echo "<br/>";  
        
        ?>
            	     
            	        
            	         </td>
            </tr>     	
            	
            	
                 	
             <tr>
            	    <td>Address </td>
            	    <td> {{$address}} </td>
            </tr>     	
            	       	
           
            	
            	
		</table>	  
			  
			  
			  
			  
			  
			  
			     
			      
			      <a href="/profile?e=2">
			      <h3 style="margin-top:50px; text-align:center;color:blue">Change Password</h3>
			      </a>
			      
			      
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
	@endif
	

	
		@if(isset($_GET['e']))
		
		@if($_GET['e'] ==1)	
			                    <form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my-account') }}" method="post">
								@csrf
								<h3 style="text-align:center">Update Profile: </h3>
		<table>
		    
            	<table  id="customers">
            	    
         
            	    
            	<tr>
            	    <td>Name: </td>
            	     <td><input type="Text" name="name" value="{{$mnnnnn}}" required=""/> </td>
            	</tr>
            	
            	
                    	<tr>
            	    <td>Mobile: </td>
            	    <td><input type="Text" name="mobile" value="{{$phone}}" required=""/> </td>
            	</tr>    	
            	
            	
                <tr>
            	    <td>Email: </td>
            	     <td><input type="Text" name="email" value="{{$email}}" required=""/> </td>
            </tr>           	
            	</tr>     	
            	
            	
            	
        	
            	
            	
            	
             <tr>
            	    <td>Gender </td>
            	      <td><input type="Text" name="gender" value="{{$gender}}"/> </td>
            </tr>           	
            	      	
            	
             <tr>
            	    <td>NID </td>
            	    <td><input type="number" name="nid" value="{{$nid}}" /> </td>
            </tr>       	
            	
            	
            <tr>
            	    <td>Date of Birth </td>
            	   
            	    <td><input type="text" name="date_of_birth" value="{{$dob}}" placeholder="dd-mm-yy"/> </td>
            </tr>    	
            	
            	
                   	
            <tr>
            	    <td>Father's Name </td>
            	    <td><input type="text" name="father_name" value="{{$father}}" /> </td>
            </tr>       	
            	
     	            <tr>
            	    <td>Address </td>
            	    <td><input type="text" name="address" value="{{$address}}" required=""/> </td>
            </tr>
            	
            	
		</table>	  
<button type="submit" class="btn btn-default" style="width:100%; background:silver">Update Profile</button>
							</form>
			      
			      
			      
			      
			      
			      
			      
			      
			      
			      
			      
			      <a href="/profile?e=2">
			      <h3 style="margin-top:100px; text-align:center;color:blue">Change Password</h3>
			      </a>
			      
			      
			      
			      
		@endif		      
			      
	@if($_GET['e'] ==2)			      
			      
			      
			      
			      
	 <div class="row" id="chance_pass" style="margin-bottom:100px; margin:auto;">

				<div class="col-md-12">
					<div class="aa-myaccount-login" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px; margin-top:70px">
					
					
					
						<h3 style="color:red">Change Login Password</h3>
					<form id="passwordForm" name="passwordForm" class="aa-login-form" action="{{ url('/update-user-pwd') }}" method="POST">
						@csrf
						<input type="password" name="current_pwd"  placeholder="Current Password">
						<span id="chkPwd"></span>
						<input type="password" name="new_pwd" id="new_pwd" placeholder="New Password">
						<input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password">
						<button type="submit" class="btn btn-default" style="width:100%; background:silver">Changer Password</button>
					</form>
					
					
				</div>
			</div>
			</div>
			
			
			
			
			
			
			
			
			
			
	@endif
	
		@endif
			    
			    
			    
			
			</div>
			
		


			
			
			
		</div>




<div style="margin-bottom:100px">
    <h1><b></h1>
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


