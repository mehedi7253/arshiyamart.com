@extends('layouts.temp2.master2')
@section('content')
	@include('layouts.temp2.nav')

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
				
		
		
				
	<?php 		
	if(isset($_GET['skip'])){
	    Session::put('business_name',"");
	}
	?>		
		

		
				
			
	<?php 		
			$b_session=Session::get('business_name');
			if(!empty($b_session)){
			      echo '<meta http-equiv="refresh" content="0;URL=/createb" />';
			}
			
			
		$af_dashboard=Session::get('dashboard');
			if($af_dashboard == 2){
			      echo '<meta http-equiv="refresh" content="0;URL=/my-account?affilite=1" />';
			}
				
			
	?>		
			
				
				
		 <?php 
session_start();
if(isset($_SESSION['m']))
{
    
    if($_SESSION['m']<3)
{
        echo '<meta http-equiv="refresh" content="0;URL=/createb" />';
}

}  
    ?>
    		
				
				
				
				
				
				
		<?php
	$up_line_id=Auth::user()->up_line_id;
	$my_id=Auth::user()->id;
	$auth_ran=Auth::user()->auth_ran;
	$mnnnnn=Auth::user()->name;
	
	$myiiidd=Auth::user()->j_mobile;
	$permission=Auth::user()->permission;
	$rank=Auth::user()->rank;
	$affiliate_com=Auth::user()->affiliate_com;
	
	;?>	
		
	
	@if(isset($_GET['affilite_app']))
	<?php
	DB::table('users')->where('id',$my_id)->update([
	'affiliate_com'=>-1,
	]);
	?>
	<meta http-equiv="refresh" content="0;URL=/my-account?affilite=1" />
	@endif
	
	
	
	
	
	<?php
	 $m=date('m');
                      $y=date('Y');
                      
                      $total_ppp=DB::table('orders')->where('user_id',$my_id)->sum('total');
                      $total_ppp_total_tk=DB::table('ac_main')->where('user_id',$my_id)->sum('amount');
                     // $total_ppp_thismonths=DB::table('orders')->where('user_id',$my_id)->whereYear('created_at',$y)->whereMonth('created_at',$m)->where('order_status',"Delivered")->sum('total');
                      $total_ppp_thismonths=DB::table('orders')->where('user_id',$my_id)->where('order_status',"Delivered")->sum('total');
                    
	
	
                    $rank87687=DB::table('rank_promotion2')->get();
	
	
	                foreach ($rank87687 as $rank34){
	                    
	                   if($total_ppp_thismonths   >   $rank34->monthly_value ){
	                   
	                   @$my_rank=$rank34->name;
	                 //  $comission_check=DB::table('ac_main')->where('user_id',$my_id)->whereYear('created_at',$y)->whereMonth('created_at',$m)->where('remark',$rank34->id)->count();
	                   $comission_check=DB::table('ac_shop')->where('user_id',$my_id)->where('remark',$rank34->id)->count();
	                   
	                   
	                   if($comission_check < 1 ){
	                       if($rank34->comission > 0){
	                   DB::table('ac_shop')->insert([
                      'user_id'         => $my_id,
                      'amount'          => $rank34->comission,
                      'remark'          => $rank34->id,
                      'sender_number'   => '',
                      'status'          => 2,
                 
                        ]);
                        
                                                DB::table('users')->where('id',$my_id)->update(['promotional_dis'=>$rank34->comission2]);

	                   }
	                   }
                        
	                }
	                    
	                }
	
	
	
	
	
	
	
	
	
	
	
	
	                    $rank8768887=DB::table('rank_promotion2')->get();

	
	 foreach ($rank8768887 as $rank34){
	                    
	                   if($total_ppp_thismonths   >   $rank34->monthly_value ){
	                   
	                   @$my_rank=$rank34->rank_name;
	   
                        
                        
	                }
	                    
	                }
	
	
	
	
	
	
	
	
	
	
	
	
	;?>    
	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	
	
	
	
<?php 
    $_SESSION['s_ref']="";
    
    
    	if(isset($_GET['store'])){
    	    
    	    Session::put('dashboard',3);
    	}
    	elseif(isset($_GET['affilite'])){
    	    
    	    Session::put('dashboard',2);
    	}elseif(isset($_GET['main'])){
    	    
    	    Session::put('dashboard',1);
    	}else
    	{
    	    $dashboard=Session::get('dashboard');
    	    if($dashboard < 1)
    	    Session::put('dashboard',1); 
    	}
    	
    	
    	
    
    
    $dashboard=Session::get('dashboard');
    
   
    
;?>
		
		
		
		
		
		
		
		
		
		@if($my_id>1)		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@if($dashboard==3)		
		
		
		<div class="row">
		<div style="float:right">
		    
		    
	<div style="float:right; margin-left:40px ">
	    <a href="/my-account?main=1">
		    	      <i class="fa fa-th-large" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue; float:right">  My Dashbord </span><br><br>
	    </a>

</div> 	    
<!--<div style="float:right; margin-left:40px ">
		    	      <img src="/batch.PNG" style="height:30px;float:left">  <span style="color:blue; float:right"> {{@$my_rank}}</span><br><br>
	    

</div> 	-->





<!--<div style="float:right; margin-left:40px">
      <img src="/taka.png" style="height:20px;float:left">  <span style="color:blue; float:right"> {{$total_ppp_total_tk}}</span>
</div><br>-->
		  
		</div>	</div>
<br>		


		
		
		
		
		
		
		
		
		
		
		
				<?php
		
		      $user_id = Auth::user()->id;

		      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->first();
		      @$shop_statu=$myshop->status;
?>
	@if(isset($myshop))	
		<p style="text-align:center"><span style="color:gray">  <img src="{{url('/')}}/assets/admin/img/shops/{{$myshop->logo}}" style="height:25px; border-radius:5px"> {{ $myshop->shop_name}} </span>
		
		                 <button    data-toggle="modal" data-target="#modal-lg{{$myshop->id }}">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button>
		
		
		
		
		
		   <div class="modal fade" id="modal-lg{{ $myshop->id }}" style="z-index:34343">
        <div class="modal-dialog modal-lg">
          <form action="{{ url('/updateb') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">
		          <button type="button" class="btn btn-default" data-dismiss="modal" style="width:50px; background:red; color:white; margin-left:80%">  X </button>

              <div class="modal-body">

<div class="text-center"> <img src="{{url('/')}}/assets/admin/img/shops/{{$myshop->logo}}" style="max-height:50px; border-radius:8px"></div>

<label>Store Name: </label>
<input type="text" name="shop_name" value="{{ $myshop->shop_name }}" style="width:95%">
<input type="hidden" name="p_image" value="{{ $myshop->logo }}" style="width:95%">

       


       
       
                  
 <label>Change Logo </label>
<input type="file" name="image">                          
                  
                  
                  
    

              </div>
              <div class="modal-footer justify-content-between">
             
                <input type="submit" class="btn btn-primary" value="Update Information">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<span style="color:red"> @if($myshop->status !=2) (Waiting for Approvel) <br>এপ্রুভ হওয়ার পর আপনি মার্সেন্ট ড্যাশবোর্ড দেখতে পাবেন @endif </span></p>
	@endif	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
@if($shop_statu==2)









		<h3 style="text-align:center; color:blue;  border-raius:5px">Store Dashboard</h3>

				
		<div class="row" style="margin-bottom:50px; margin-top:20px">
				
				
		
			<?php
			$sizze="col-3 col-md-4 col-sm-4 col-xs-6";
			?>
			
			
			
			
			

				<div class="{{$sizze}}" style="margin-top:5px;">			
				   	<a href="{{url('/')}}/shoporder"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">My Orders</span></div>
					</a>
				</div> 
				 
				
				
				<div class="{{$sizze}}" style="margin-top:5px;">	
				   	<a href="{{url('/')}}/shopproduct"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    					<span style="color:white">My Products</span></div>
					</a>
				</div>
				
				
				
				<div class="{{$sizze}}" style="margin-top:5px;">	
				   	<a href="{{url('/')}}/shopwallet"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-money" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Marchant Wallet</span></div>
					</a>
				</div>

				<div class="{{$sizze}}" style="margin-top:5px;">	
				   	<a href="{{url('/')}}/shopwithdraw"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-credit-card" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Withdraw</span></div>
					</a>
				</div>
				
				

</div>
<hr>
@endif
@endif	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	@if($dashboard==1)				
		
		<div class="row">
		<div style="float:right">
		    
	<?php
	      $user_id = Auth::user()->id;
	      $affiliate_com = Auth::user()->affiliate_com;
	      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->count();
?>
@if($myshop>0)	    
	<div style="float:right; margin-left:40px ">
	    <a href="/my-account?store=1">
		    	      <i class="fa fa-th-large" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue; float:right">  Store Dashbord</span><br><br>
	    </a>
	    
	     

</div> 	

@endif



@if($affiliate_com != 0)
<div class="row">
<div style="float:right; margin-left:40px ">
	    <a href="/my-account?affilite=1">
		    	      <i class="fa fa-th-large" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue; float:right">  Affiliate Dashbord</span><br><br>
	    </a>
	    
	     

</div> 
</div>
@endif



<!--<div style="float:right; margin-left:40px ">
		    	      <img src="/batch.PNG" style="height:30px;float:left">  <span style="color:blue; float:right"> {{@$my_rank}}</span><br><br>
	    

</div> 	-->





<!--<div style="float:right; margin-left:40px">
      <img src="/taka.png" style="height:20px;float:left">  <span style="color:blue; float:right"> {{$total_ppp_total_tk}}</span>
</div><br>-->
		  
		</div>	</div>
<br>		
		
		

		
		
		
		
			
		<h3 style="text-align:center; color:blue;  border-raius:5px">	{{$mnnnnn}}  
		
		<a href="/profile"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:120%; margin-left:10px"></i></a>
		
		<br>
		<span style="font-size:60%; color:green">
			(My Rank: <b>
			
			@if(empty($my_rank))
			এখনো কোন Rank অর্জন হয়নি)
			@else
			{{@$my_rank}} )
			@endif
			</b>
		</span>
		
		</h3>
	
	
	
		<div class="row">
<div style="float:right; margin-left:40px ">
	    <a href="/my-account?affilite=1">
		    	      <i class="fa fa-th-large" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue; font-size:80%; float:right">  Affiliate Dashbord</span><br><br>
	    </a>
	    
	     

</div> 
</div>




















































		<h4 style="text-align:center; color:red;  border-raius:5px; font-family: Arial, Helvetica, sans-serif;">Dashboard</h4>
		
		
		
		
				
				
		<div class="row" style="margin-bottom:50px; margin-top:20px">
			
			
			<?php
			$sizze="col-3 col-md-4 col-sm-4 col-xs-6";
			?>
			
			
			
			
			

				<div class="{{$sizze}}" style="margin-top:5px;">
			
				   	<a href="{{url('/')}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Start <br> Shopping</span></div>
					</a>
				</div>
				
				
				
								
			<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{url('/fav')}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-heart-o" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white; font-size:80%">My Favorite<br>  Product</span></div>
					</a>
				</div>
				
				
				
				
					
				
			<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{url('/orders')}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-list" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">My <br> Orders</span></div>
					</a>
				</div>
				
				
				
						
					
			<?php
                  $re_co=DB::table('banners')->where('id',1012)->first();
                  ;?>
                  @if($re_co->image =="1")
			
		
				
					
				<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{url('/orders_res')}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-retweet" aria-hidden="true" style="font-size:50px; color:black; "></i><br>
    
    					<span style="color:black">Re-Sales</span></div>
					</a>
				</div>
							
				
			@endif	
				
				
				
				
		
			
			
			
			
			
		@if($up_line_id<1)			
			
			
			
				<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{ url('/my_l/?gnid=1') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-money" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Wallet <br> ({{ $total_ppp_total_tk }})</span></div>
					</a>
				</div>		
			
								
					


				
								<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{ url('/profile') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-user" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">My <br>Profile </span></div>
					</a>
				</div>		
				
				
				
				
				
				
				
				
				
				
				
		@endif		
			
			
			
			
				                            <?php $i=1;
                                                
                                                $categories=DB::table('rank_promotion2')->get();
                                                $categories_ccc=DB::table('rank_promotion2')->count();
                                                
                                                ?>
				@if($categories_ccc >0)
				<div class="col-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px" >
				   	
				   	
                            <div class="widget-box"style="margin-top:5px; border:1px dashed black; border-radius:4px; background: #f0f5f5">
                                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                          <h5 style="color:blue; font-size:20px; text-align:center"> Rank & Comission </h5>
                                        </div>
                                        <div class="widget-content nopadding" style="overflow-x: scroll;">
                                          <table class="table table-bordered data-table">
                                            <thead>
                                              <tr >
                                                <th style="text-align:center; font-size:80%" style="text-align:center">SL <br>No</th>
                                                <th style="text-align:center; font-size:80%">Shopping <br> Amount</th>
                                                <th style="text-align:center; font-size:80%">Rank <br> Name</th>
                                                <th style="text-align:center; font-size:80%">Instant Incentive <br>
                                                  (One Time)</td></th>
                                                <th style="text-align:center; font-size:80%"> Purchase Comission <br>(Life time)</th>
                                                <th style="text-align:center; font-size:80%"> Award <br> Gift</th>
                                                <th style="text-align:center; font-size:80%">Monthly <br> Honour</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                                
                                              @foreach ($categories as $category)
                                                <tr class="gradeX">
                                                  <td style="text-align:center">{{ $i++ }}</td>
                                                  <td style="text-align:center">{{ $category->monthly_value }}</td>
                                                  <td style="text-align:center">{{ $category->rank_name }}</td>
                                                  <td style="text-align:center">{{ $category->comission }}<br>
                                                  </td>
                                                  <td style="text-align:center">{{ $category->comission2 }} %</td>
                                                 
                                                 
                                                   <td>{{ $category->extra5 }} </td>
                      <td>{{ $category->extra3 }} 
                      
                      @if($category->extra1 == 1)
                      TK
                      @endif
                      
                                            @if($category->extra1 == 2)
                      %
                      @endif
                                                 
                                               
                                                </tr>
                                              @endforeach
                            
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
				   	
				   	
				</div>		
				@endif 
				
@endif
				
		
		
	<?php 
	$business_count=DB::table('shops')->where('owner_user_id',$my_id)->count();
	$m_prmi=DB::table('banners')->where('id',1010)->first();
	
	?>	
		
	@if($m_prmi->image == 1)
		
@if($business_count < 1)
				<!--	<div class="" style="margin-top:5px;">
				   	<a href="{{ url('/createb') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-briefcase" aria-hidden="true" style="font-size:50px; color:white;"></i><br>
    
    					<span style="color:white">Create <br>Shop/Business</span></div>
					</a>
				</div>			-->
		
@endif		
				
	@endif
			
			
					
			</div>
						
				
@endif				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
	@if($dashboard==2)				
				
				
				
				
			
		<div class="row">
		<div style="float:right">
		    
	<?php
	      $user_id = Auth::user()->id;
	      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->count();
?>
@if($myshop>0)	    
	<div style="float:right; margin-left:40px ">
	    <a href="/my-account?main=1">
		    	      <i class="fa fa-th-large" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue; float:right">  My Dashbord</span><br><br>
	    </a>

</div> 	

@endif
<!--<div style="float:right; margin-left:40px ">
		    	      <img src="/batch.PNG" style="height:30px;float:left">  <span style="color:blue; float:right"> {{@$my_rank}}</span><br><br>
	    

</div> 	-->





<!--<div style="float:right; margin-left:40px">
      <img src="/taka.png" style="height:20px;float:left">  <span style="color:blue; float:right"> {{$total_ppp_total_tk}}</span>
</div><br>-->
		  
		</div>	</div>
<br>		
		
		

		
		
		
	@if($affiliate_com > 0)	
		<?php
		Session::put('dashboard',"");
		?>
			
		<h3 style="text-align:center; color:blue;  border-raius:5px">	Affiliate Dashboard  
		</h3>
		
		
		
		
		
		
		
		
		
		



<div style="border:1px dashed black; padding:4px">



<h4 style="color:black; padding:0px 0px; text-align:center; text-align:center">নিচের লিংকটি Copy করে বন্ধুদের নিকট শেয়ার করুন: 


</h4>

<!--<textarea onClick="this.setSelectionRange(0, this.value.length)"  style="width:60%; height:50px; background:silver; color:black" ></textarea>
-->



<h4 id="hhhe" style="display:none;color:white; background:green; padding:0px 0px; text-align:center; text-align:center">লিংক কপি হয়েছে, এখন বন্ধুদের শেয়ার করুন। 


</h4>

<?php
                      $main_w=Auth::user()->id;

?>

<div class="text-center">
<input type="text" value="{{url('/login-register')}}?ref=8820{{$main_w}}" style="width:410px" id="myInputc"><br>
<button onclick="myFunctionc()" style="width:410px">Copy My Link(এখানে ক্লিক করে কপি করুন)</button>
</div>


<?php
 $user_id = Auth::user()->id;

 $orders33=DB::table('users')->where('id', $user_id)->first();

$af_cc=$orders33->affiliate_com;

;?>


<h4 style="text-align:center; color:blue">
[এই লিংকের মাধ্যমে জয়েনকৃত সকল ইউজারগন  আপনার Affiliate হিসাবে গন্য হবেন, <br> এবং তারা  আজীবন যত টাকার পন্য ক্রয় করবেন আপনি সম্মানি হিসাবে তার {{$af_cc}} % কমিশন পাবেন।]
</h4>


		
		
	</div>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="row" style="margin-bottom:50px; margin-top:20px">
		<div   style="width:96%; margin-left:3%">
			
			
			<?php
			$sizze="col-3 col-md-4 col-sm-4 col-xs-6";
			?>
			
			
			<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{url('/invite')}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-users" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    						<span style="color:white">My <br>Affiliates  </span></div>
					</a>
			</div>	
			
			
			
				<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{ url('/my_l/?gnid=1') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-money" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Wallet <br> ({{ $total_ppp_total_tk }})</span></div>
					</a>
				</div>		

			
					<div class="{{$sizze}}" style="margin-top:5px;">
				   	<a href="{{ url('/my_w') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#A7B6A1; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-credit-card" aria-hidden="true" style="font-size:50px; color:white;"></i><br>
    
    					<span style="color:white">Balance <br>Withdraw</span></div>
					</a>
				</div>	
				
			</div>	
			</div>	
			
			
			
			
			
			
		
		
		
		
		
		
		
		<?php $i=1;
                                                
                                                $categories=DB::table('a222')->whereNotNull('extra5')->orderby('id',"ASC")->get();
                                                
                                                DB::table('a222')->whereNull('extra5')->delete();
                                                
                                                
                                                $categories_ccc=DB::table('a222')->whereNotNull('extra5')->count();
                                                
                                                ?>
				@if($categories_ccc >0)
				<div class="col-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px" >
				   	
				   	
                            <div class="widget-box"style="margin-top:5px; border:1px dashed black; border-radius:4px; background: #f0f5f5">
                                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                          <h5 style="color:blue; font-size:20px; text-align:center">Affiliate Rank & Comission </h5>
                                        </div>
                                        <div class="widget-content nopadding" style="overflow-x: scroll;">
                                          <table class="table table-bordered data-table">
                                            <thead>
                                              <tr >
                                                <th style="text-align:center; font-size:80%" style="text-align:center">SL <br>No</th>
                                                <th style="text-align:center; font-size:80%">Rank <br> Name</th>
                                                <th style="text-align:center; font-size:80%">Affiliator Sale <br>
                                                 </td></th>
                                                <th style="text-align:center; font-size:80%"> Instant Incentive</th>
                                                <th style="text-align:center; font-size:80%"> Award <br> Gift</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                                
                                              @foreach ($categories as $category)
                                                <tr class="gradeX">
                                                  <td style="text-align:center">{{ $i++ }}</td>
                                                  <td style="text-align:center">   <span style="color:red">    {{ $category->remark }} </span></td>
                                                  <td style="text-align:center">
                                                     {{ $category->extra1/2500 }} টি প্রোডাক্ট  <br>
                                                      
                                         <span style="color:blue">             ({{ $category->extra1 }} টাকা ) </span></td>
                                                  <td style="text-align:center">{{ $category->extra2 }}</td>
                                                  <td>{{ $category->extra5 }} </td>
         
                                                 
                                               
                                                </tr>
                                              @endforeach
                            
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
				   	
				   	
				</div>		
				@endif 
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			
		@elseif($affiliate_com < 0)	
		
		<?php
		Session::put('dashboard',"");
		?>
		
		
		       <div class="row" style="height:400px">
		            <h4 style="text-align:center; color:green">প্রিয় ইউজার,  <br> এ্যাফিলিয়েট হতে আহগ্রহ প্রকাশ করার জন্য আপনাকে ধন্যবাদ। <br>
                 আপনার আবেদনটি অপেক্ষমাণ রয়েছে, অনুগ্রহ করে অপেক্ষা করুন। (এপ্রুভ হওয়ার পর আপনি আপনার  এ্যাফিলিয়েট ড্যাশবোড দেখতে পাবেন)। 
                 <br>
                 
                 <br>
                 <a href="/my-account?main=1">
                                  <i class="fa fa-home" aria-hidden="true" style="color:blue; margin-right:5px"></i>  <span style="color:blue;"> Back to Home</span><br><br>
</a>
                 </h4>
                 
                 
		       </div>
                
         @else      
         		<?php
		Session::put('dashboard',"");
		?>
         
         
         
         
         <?php
         $affi=DB::table('banners')->where('id',1002)->first();
         ;?>
         
         
         
         
         
         @if($affi->image==1)
         
         
                 
                 <h4 style="text-align:center; margin-top:100px; margin-bottom:100px">প্রিয় ইউজার, এ্যাফিলিয়েট সুবিধা গ্রহণ করার জন্য আপনাকে যে কোন একটি প্রোডাক্ট ক্রয় করতে হবে।
                 </h4>
                          
                          
         
         @else
         
         
         
         
         
         
         
         
		
			      <form action="" style="max-width:500px;margin:auto;  width:90%; " method="GET" > 
                                    @csrf
                    
                          
                       <h3 style="text-align:center">Affiliate Registration
                 </h3>
                      
                          
                          
                          
                          <input type="hidden" name="affilite_app" value="100">
                          
                          
                          
                          
                       
                 <h4 style="text-align:center">প্রিয় ইউজার, এ্যাফিলিয়েট হতে আহগ্রহ প্রকাশ করার জন্য আপনাকে ধন্যবাদ
                 </h4>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                              
                                           <button type="submit" class="btn"><span style="font-size:110%; margin-top:7px" >Apply Now</span></button>
                      <br> <br>

                                          
                                          
                    
                    </form>
			
			@endif
			
		@endif		
				
				
				
				
				
				
				
				
				
@endif				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
	@if($up_line_id>1)		
		
		<hr>
		
		

		
		
	<!--	<h3 style="text-align:center; color:blue;  border-raius:5px">	Team Dashboard </h3>
		<h4 style="text-align:center; color:red;  border-raius:5px; font-family: Arial, Helvetica, sans-serif;">	My ID: {{$myiiidd}} 			        (Authorized Code: 8820{{$my_id}})</h4>
		
		<div class="row" style="margin-bottom:50px; margin-top:20px">
				
				
				<div class="col-md-3" style="margin-top:5px">
				   	<a href="#"> 
    				   	<div style="width:100%; padding: 30px 10px; background:red; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-user" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    				    
    						<span style="color:white; ">View My Profile</span></div>
					</a>
				</div>	
					
				
				
				
				
				<div class="col-md-3" style="margin-top:5px">
				   	<a href="{{ url('/my_generation') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:BLUE; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-users" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    				<span style="color:white; ">	My Sales Team </span></div>
					</a>
				</div>
				
				
		
		<div class="col-md-3" style="margin-top:5px">
				   	<a href="{{ url('/my_l') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#ff00bf; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-money" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    						<span style="color:white; ">My Wallet Ledger </span></div>
					</a>
				</div>	
				
		
		
		
				
				<div class="col-md-3" style="margin-top:5px">
				   	<a href="{{ url('/my_w') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:GREEN; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-credit-card" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white; ">Withdraw</span></div>
					</a>
				</div>		
				
				
				
				
						
					
					
	

				
				
						<div class="col-md-3" style="margin-top:5px">
				   	<a href="{{ url('/my_g') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#ff0080; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-gift" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    						<span style="color:white; ">Buy Gift Card</span></div>
					</a>
				</div>	
				
					
				<div class="col-md-3" style="margin-top:5px">
				   	<a href="#"> 
    				   	<div style="width:100%; padding: 30px 10px; background:green; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-exchange" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    						<span style="color:white; ">Fund Transfer</span></div>
					</a>
				</div>	
						
				
			
				
				
				
				
				<div class="col-md-3" style="margin-top:5px">
				   	<a href="#"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#9900cc; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-clock-o" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    						<span style="color:white; ">Transuction History</span></div>
					</a>
				</div>							
							<div class="col-md-3" style="margin-top:5px">
				   	<a href="{{ url('/my_r') }}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:#00ff00; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa-upload" aria-hidden="true" style="font-size:50px; color:black; "></i><br>
    
    						<span style="color:black; ">Product Re-Purchase</span></div>
					</a>
				</div>		
					
					
					
					
					
					
					
					
					
			</div>			
			-->
			
			


@endif		
		
		
		
		
				
				
				
				
				
				
				
				
				
<!--		
			<div class="row" style="margin-bottom:100px">

					<div class="col-md-6">
						<div class="aa-myaccount-register" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px">

						<h3 style="color:red">Update shopping account</h3>
							<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/my-account') }}" method="post">
								@csrf
								<input name="name" type="text"  value="{{ $user_details->name }}" placeholder="Name">
								<input type="email" value="{{ $user_details->email }}" required=""/>
								<input type="text" name="address" value="{{ $user_details->address }}" placeholder="Adress">
					
								<input type="text" name="mobile" value="{{ $user_details->phone }}" placeholder="Mobile">
								<button type="submit" class="btn btn-default" style="width:100%; background:silver">Update Profile</button>
							</form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="aa-myaccount-login" style="background:#EAEDED; padding:10px; border-radius:8px; margin-top:10px; margin-top:70px">
						<h3 style="color:red">Change login Password</h3>
					<form name="passwordForm" class="aa-login-form" action="{{ url('/update-user-pwd') }}" method="POST">
						@csrf
						<input type="password" name="current_pwd" placeholder="Current Password">
						<span id="chkPwd"></span>
						<input type="password" name="new_pwd" id="new_pwd" placeholder="New Password">
						<input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password">
						<button type="submit" class="btn btn-default" style="width:100%; background:silver">Update</button>
					</form>
				</div>
			</div>
			
			
			</div>-->
			
		
		
		
		

@if($permission==1)	

@if($rank < 1)


		
			<div class="row" style="padding:20px;">
				<div class="col-md-4 col-md-offset-4">
<h5 style="text-align:center">
						<a href="{{ url('/join') }}"  style="font-size:150%; color:red; text-align:center">
						    

						    Add a person to my Team 

						    

		    
						    
						    </a></h5>

<a href="{{ url('/join') }}"><img src="{{ url('/assets/ew.gif') }}" style="width:95%; text-align:center"/></a>
				</div>
			</div>

@endif
@endif







@if($rank >= 1)


		
			<div class="row" style="padding:20px;">
				<div class="col-md-4 col-md-offset-4">
<h5 style="text-align:center" >
						<a href="{{ url('/join') }}"  style="font-size:150%; color:white; text-align:center; background:green; border: 1px solid black; border-radius:8px; padding:20px">
						    

						    Add member to my Team 

						    

		    
						    
						    </a></h5>

				</div>
			</div>

@endif














			
			
			
		</div>








	</section>


<script>
function myFunctionc() {
  var copyText = document.getElementById("myInputc");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  
  
     $("#hhhe").show();
  
  
  
}
</script>

@endsection
