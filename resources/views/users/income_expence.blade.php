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


   

	<section id="aa-myaccount" style="margin-top:0px; margin-bottom:1600px">

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
		
				
				
				
				
				
				
				
				              <a href="{{url('/my-account')}}">   
					              <h3 style="color:blue; padding:10px 5px; text-align:left;" > <i class="fa fa-home" aria-hidden="true"></i> Home </h3></a>
				              </a>

				
		
		
		
		
		
		
		
		
		
		
		
			<div class="row" style="margin-bottom:20px">

					<div class="col-md-6 col-md-offset-3">
					
		

			
 
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
  background-color: #00AF7F;
  color: white;
}
</style>


 
              <h3 style="color:blue; text-align:center; margin-top:20px"><b> Income & Expense Summary</b></h3>
            
                        <h4 style="color:blue; text-align:left;"> Income Wallet:</h4>
            
            
            <?php
               	
               	//direc referel
      	 $main_w=Auth::user()->id;
      	 $main_rank=Auth::user()->rank;
      	$total_shop_wallet_r1=DB::table("ac_shop")->where('user_id', $main_w)->where('remark', 0)->where('amount','>',0)->sum("amount");
      	$total_shop_wallet_r2=DB::table("ac_main")->where('user_id', $main_w)->where('remark', 0)->where('amount','>',0)->sum("amount");
      
      
      	$refer_count=DB::table("ac_main")->where('user_id', $main_w)->where('remark', 0)->where('amount','>',0)->count();
 ?>    
      

            
            
            
            
            
            
            
            
            
            
            
            
        
            
            
            
            
            	<table  id="customers">
            	<tr>
			        <th>SL</th>
			        <th>Income Type</th>
			        <th>Amount</th>
			        <th>Details</th>
			    </tr>
			    
			    
			    
			    <tr>
			        <td>1</td>
			        <td>Reffel Income</td>
			        <td style="text-align:right">{{$total_shop_wallet_r1+$total_shop_wallet_r2}}</td>
			        <td><a href="/my_l?sv=0&svn=Referral%20Bonus" style="color:blue"> View </a></td>
			    </tr>  
			    
			    
			    <tr>
			        <td>2</td>
			        <td>Genaration Income</td>
			        
			        
	
             	<?php
      	 $main_w=Auth::user()->id;
      	$total_shop_wallet_r1b=DB::table("ac_shop")->where('user_id', $main_w)->where('remark','>','0')->where('remark','<','11')->sum("amount");
      	$total_shop_wallet_r2b=DB::table("ac_main")->where('user_id', $main_w)->where('remark','>','0')->where('remark','<','11')->sum("amount");
      	?>      			        
			        <td style="text-align:right">{{$total_shop_wallet_r1b+$total_shop_wallet_r2b}}</td>
			        <td><a href="/my_l?sv=11&svn=Genenation Bonus" style="color:blue"> View </a></td>
			    </tr>  
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
				     <tr>
			        <td>3</td>
			        <td>Rank Incentive</td>
			        
           <?php
      	$main_w=Auth::user()->id;
      	$total_shop_wallet_r17=DB::table("ac_shop")->where('user_id', $main_w)->where('remark',17)->sum("amount");
      	$total_shop_wallet_r27=DB::table("ac_main")->where('user_id', $main_w)->where('remark',17)->sum("amount");
      	?>            
			        
			        <td style="text-align:right">{{$total_shop_wallet_r17+$total_shop_wallet_r27}}</td>
			        <td><a href="/my_l?sv=17&svn=Rank-Reward" style="color:blue"> View </a></td>
			    </tr>  
			    	    
			    	    
			    	    
			    	    
			    	    
			    	    
			    	    
			    	    
			    	    
			    	    
			     <tr>
			        <td>4</td>
			        <td>Monthly Share Profit</td>
			        
		         <?php
      	$main_w=Auth::user()->id;
      	$total_shop_wallet_r16=DB::table("ac_shop")->where('user_id', $main_w)->where('remark',16)->sum("amount");
      	$total_shop_wallet_r26=DB::table("ac_main")->where('user_id', $main_w)->where('remark',16)->sum("amount");
      	?>    	        
			        
			        <td style="text-align:right">{{$total_shop_wallet_r16+$total_shop_wallet_r16}}</td>
			        <td><a href="/my_l?sv=16&svn=Monthly Salary" style="color:blue"> View </a></td>
			    </tr>  
			    
			    
			    
	
						    	    
			     <tr>
			        <td>5</td>
			        <td>Founder Profite</td>
			        
	        
			        
			        <td style="text-align:right">0</td>
			        <td><a href="" style="color:blue"> View </a></td>
			    </tr>      
			    
			    
			    
			    	    
			     <tr>
			        <th>-</th>
			      
			        <th><b>Total=</b></th>
			          
			          
			     <?php
			     $total_income=
			     ($total_shop_wallet_r16+$total_shop_wallet_r16)+
			     ($total_shop_wallet_r17+$total_shop_wallet_r27)+
			     ($total_shop_wallet_r1b+$total_shop_wallet_r2b)+
			     ($total_shop_wallet_r1+$total_shop_wallet_r2);
			     
			     ?>     
			          
			          
			          <th style="text-align:right"><b> {{$total_income}} </b></th>
			          
			          
			        <th> - </th>
			   
			    </tr>  
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    </table>
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    <br>
			    <br>
			    <br>
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			<h4 style="color:blue; text-align:left;"> Registration Wallet:</h4>
            
            
            
            	<table  id="customers">
            	<tr>
			        <th>SL</th>
			        <th>Expense Type</th>
			        <th>Amount</th>
			        <th>Details</th>
			    </tr>	  
			    
			    
		       <tr>
			        <td>1</td>
			        
			        <?php
			        
			        $incommmmming=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','>',0)->sum('amount');
			        ?>
			        
			        <td>Balance In</td>
			        <td>{{$incommmmming}}</td>
			        <td><a href="/withdraw_h?t=1" style="color:blue">View</a></td>
			    </tr>	  
			    	    
			    
			    <td>2</td>
			        
			        <?php
			        
			        $out_going=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','<',0)->sum('amount');
			        ?>
			        
			        <td>Balance Out</td>
			        <td>{{$out_going*(-1)}}</td>
			        <td><a href="/withdraw_h?t=2" style="color:blue">View</a></td>
			    </tr>	  
			    
			    
				<tr>
			        <td>3</td>
			        
			        <?php
			        
			        $out_going_com=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"210")->where('amount','>',0)->sum('amount');
			        ?>
			        
			        <td> Balance In From Company</td>
			        <td>{{$out_going_com}}</td>
			        <td><a href="/withdraw_h?t=3" style="color:blue">View</a></td>
			    </tr>
			    
						
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    </table>
			    
			    
			    
			    
		
		
		
		
			    
			    
			<h4 style="color:blue; text-align:left; margin-top:40px"> Shop Wallet:</h4>
            
            
            
            	<table  id="customers">
            	<tr>
			        <th>SL</th>
			        <th>Expense Type</th>
			        <th>Amount</th>
			        <th>Details</th>
			    </tr>	  
			    
			    
			    			    
				<tr>
			        <td>1</td>
			        <td>Own Transfar to Shop Wallet</td>
			        <td>00</td>
			        <td>Details</td>
			    </tr>	    
			    
			    
			    
			 		    			    
				<tr>
			        <td>2</td>
			        <td>Company In</td>
			        <td>00</td>
			        <td>Details</td>
			    </tr>	       
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    </table>
		
		
		
		
		
		
		
		
		
		
		
		
			    
			    
			    
			    
	<h4 style="color:blue; text-align:left; margin-top:20px"> Expense:</h4>
            
            
            
            	<table  id="customers">
            	<tr>
			        <th>SL</th>
			        <th>Expense Type</th>
			        <th>Amount</th>
			        <th>Details</th>
			    </tr>
			    
			    
			    
			    <tr>
			        <td>1</td>
			        <td>Withdraw</td>
			        <?php
			       
			        $w1= DB::table('ac_main_with')->where('user_id',$main_w)->where('status',2)->sum('amount');
			        
			       
			       $w2= DB::table('ac_main')->where('user_id',$main_w)->where('remark',111)->sum('amount');
			       
			       
			       
				    $w3= DB::table('ac_main')->where('user_id',$main_w)->where('remark',12)->sum('amount');
			       		       
			       
			       
			       
			       
			       
			       
			       
			       
			        
			        ?>
			        
			        
			        
			        
			        <td style="text-align:right">{{$w1 *-1}}</td>
			        <td><a href="/withdraw_h?t=4" style="color:blue">View</a></td>
			    </tr>  
			    
			 
			 
			 
				 <tr>
			        <td>2</td>
			        <td>Transfar to Shop Wallet</td>
			        <td style="text-align:right">{{$w2 *-1}}</td>
			        <td><a href="#" style="color:blue"> View </a></td>
			    </tr>  
			    	 
			 

			 
			 
			<tr>
			        <td>-</td>
			        <td><b>Total=</b></td>
			        <td style="text-align:right"><b>00</b></td>
			        <td> -- </td>
			    </tr>   
			    
			    
			    
	</table>		    
			    
			    
		
		
		
		
	            <table  id="customers" style="margin-top:30px">
            	<tr>
            	    
            	    <?php
            	      $w_c_t= DB::table('ac_main')->where('user_id',$main_w)->sum('amount');
            	      
            	      $w_s_t= DB::table('ac_shop')->where('user_id',$main_w)->sum('amount');
			        
            	    ?>
            	    
			        <th colspan="3">Current Cash Balance =</th>
			    
			        <th>{{$w_c_t}}</th>
			    </tr>
			    </table>
		
		 <?php
               	
               	//direc referel
      	 $main_w=Auth::user()->id;
      	$bb1=DB::table("ac_main")->where('user_id', $main_w)->sum("amount");
      	$bb2=DB::table("ac_shop")->where('user_id', $main_w)->sum("amount");
      	$bb3=DB::table("ac_join_rccc")->where('user_id', $main_w)->where('status',2)->sum("amount");
      	
		?>
		
		  <table  id="customers" style="margin-top:10px;">
            	<tr>
			        <th colspan="3">Registration Balance =</th>
			    
			        <th>{{$bb3}}</th>
			    </tr>
			    </table>
		
		
			
			
			
			
			
				  <table  id="customers" style="margin-top:10px; margin-bottom:20px">
            	<tr>
			        <th colspan="3">Current Shop Balance =</th>
			    
			        <th>{{$w_s_t}}</th>
			    </tr>
			    </table>	
			
			
			
			
			
			    
			    
			    
			
			</div>
			
		


			
			
			
		</div>




<div style="margin-bottom:20px">
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


