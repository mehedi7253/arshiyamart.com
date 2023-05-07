@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
      
      
      		
		<?php
	$up_line_id=Auth::user()->up_line_id;
	$my_id=Auth::user()->id;
	$auth_ran=Auth::user()->auth_ran;
	$mnnnnn=Auth::user()->name;
	
	$myiiidd=Auth::user()->j_mobile;
	$permission=Auth::user()->permission;
	$rank=Auth::user()->rank;
	
	
	

                      $m=date('m');
                      $y=date('Y');
                      
                      $total_ppp=DB::table('orders')->where('user_id',$my_id)->sum('total');
                    //  $total_ppp_thismonths=DB::table('orders')->where('user_id',$my_id)->whereYear('created_at',$y)->whereMonth('created_at',$m)->where('order_status',"Delivered")->sum('total');
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
	
	
	
	
	
	
	
	;?>	
		
	
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
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
     
      
      
      
      
        @if (Session::has('bKash'))
                      
                                  
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                    
                                      </h4>

                                 @endif
      
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:left; margin-left:50px;" > <i class="fa fa-home" aria-hidden="true"></i>
 Home </h3></a>
<?php


                      $m=date('m');
                      $y=date('Y');
                      
                      $total_ppp=DB::table('orders')->where('user_id',$my_id)->where('order_status',"Delivered")->sum('total');
                      $total_ppp_thismonths=DB::table('orders')->where('user_id',$my_id)->whereYear('created_at',$y)->whereMonth('created_at',$m)->where('order_status',"Delivered")->sum('total');
                    
	
?>



  





<h2 style="color:black; padding:50px 50px; text-align:center"> My All Orders: </h2>
      
   <div class="row" style="padding:5px">   <span>
         Total: {{$total_ppp}} <br>This Month: {{$total_ppp_thismonths}}
      </span>
      </div>
      
      
      
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Order ID</th>
                  <th>Order Status </th>
                  <th>Invoice Total</th>
                  <th>Amount</th>
                  <th>Actions</th>
                  
              </tr>
          </thead>
          <tbody>

            @foreach ($orders as $order)
            
                               
              <tr>
                  <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at->diffForHumans() }}
                    
                    
                    
                    <br>
                    
  
  
                     <b>   {{ $order->order_status }}</b>

  
          
                    
             <br>
             <br>
             
         <button    data-toggle="modal" data-target="#modal-lg{{$order->id }}">
                  Details Status <br>& Payment 
                </button>
                       
             
                    
                    
                    </td>
                   <td>{{ $order->total }}<br>{{ $order->payment_method }}<br><span style="color:red"> {{$order->pincode}}</span></td>
                  
                  
                  
                  
                  
                  
                  
                  <td>
                      
                      
                      
                      
                  
                      
                      
                      
                      
                 
                  
                  
                  
                   
                      
                      
                      <?php
                     
                      $sum1=DB::table('pgw')->where('invoice_no',$order->id)->sum('amount');
                      
                      if(empty($order->pincode))
                      {
                       $sum2=0;

                      }
                      else{
                      $sum2=DB::table('pgw')->where('transaction_id',$order->pincode)->sum('amount');
                      }
                      
                       $paid_amount=$sum1+$sum2;
                      ?>
                      
  @if($order->order_status != "Delivered")
                    
                     Total Bill: {{$order->total}} <br>
                     Paid : {{$paid_amount}}<br>
                     
                     @if( $paid_amount < $order->total )
                     
                        --- <br>
                     
                      <b> Due: {{$order->total - $paid_amount}}</b><br>
                      
                      
                           @if( $order->total - $paid_amount >0)
                           
                           <?php
                           
                           $due = $order->total - $paid_amount;
                           
                           ?>
                           
                           
                           
              
                                    <a href="/due_paid/{{$order->id}}/{{$order->total}}/{{$paid_amount}}/{{$due}}">
                                      <button style="background:red; color:white">Pay Due</button>   
                                      </a>   
  
                                      
                                      
                            @endif
                    @else
                    <span style="color:green"><b>Invocie Paid</b></span>    
                     @endif
                     
                   
      @endif               
                  
                  
                  
                  
                   
                      
                      
                      
                      </td>
                  <td> 
                  <a href="{{ url('/') }}/invoice/{{$order->id}}/{{$order->total}}"><button> View Invoice </button></a>
                 
                 
                  
                  
                  
                  
                  
                  
                  
		
		
		   <div class="modal fade" id="modal-lg{{$order->id}}" style="z-index:34343">
        <div class="modal-dialog modal-lg">
          <form action="{{ url('/updateb') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">
		          <button type="button" class="btn btn-default" data-dismiss="modal" style="width:70px; background:red; color:white; margin-left:70%"> Close ( X ) </button>
<div class="modal-body">


















<section style="with:95%; margin-left:10px">
    <h4 style="color:black; text-align:center;"> <u>Delivery Statuts</u></h5>
   

       
       
       
          <table  width="100%" border="1" cellspacing="0" cellpadding="5" border="1px">
  <tr>
    <th>SL</th>
    <th>Status</th>
    <th>Date</th>
    <th>Remark/Note</th>
  </tr>
  <?php
  $i=1;
  $order_sta=DB::table('a444')->where('extra8',$order->id)->orderby('id',"ASC")->get();
  $order_sta_c=DB::table('a444')->where('extra8',$order->id)->orderby('id',"ASC")->count();
  ;?>
  
  @foreach($order_sta as $sta)
  <tr>
      <td> {{$i++}}</td>
      
    <td> 
 {{$sta->remark}}</td>
    <td>{{ date('d-M-Y (h:i:s A)', strtotime($sta->created_at)) }}</td>
    <td>
        {{$sta->extra5}}</td>
  </tr>
  @endforeach



  @if ($order_sta_c == 0)
  @if($order->order_status == "In Process")
   <tr>
    <td> 1</td>
      
    <td>Place Order</td>
    <td>{{ date('d-M-Y (h:i:s A)', strtotime($order->created_at)) }}</td>
    <td>Waiting</td>
   </tr>
     
 
 
    <tr>
    <td> 2</td>
      
    <td>Confirm</td>
    <td>-</td>
    <td>-</td>
   </tr>
 
 
 
     <tr>
    <td> 3</td>
      
    <td>Shipment</td>
    <td>-</td>
    <td>-</td>
   </tr>
 
      <tr>
    <td> 4</td>
      
    <td>Delivered</td>
    <td>-</td>
    <td>-</td>
   </tr>
 
 
     
     
   @endif
   @endif



</table>  

</section>

















<section style="font-size:80%">
    <h4 style="color:black; text-align:center;"> <u>Payment Installment</u></h5>
   
    
    
    
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Installment No</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Date</span></div></td>
                <td width="10%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Amount</span></div></td>
<td width="14%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Method</span></div></td>
<td width="25%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Remark</span></div></td>
<td width="25%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Receive By</span></div></td>

      </tr>
      
      <?php
      $i=1;
      
      $paymenter=DB::table('pgw')->where('invoice_no',$order->id)
                    ->orWhere('transaction_id',$order->pincode)->get();
                    
           $paymenter_c=DB::table('pgw')->where('invoice_no',$order->id)
                    ->orWhere('transaction_id',$order->pincode)->count();               
                    
                    
      ;?>
      
      
      @foreach($paymenter as $phis )
        <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td><div align="left" class="style8"> {{ date('d-M-Y (h:i:s A)', strtotime($phis->extra14)) }}</div></td>
           <td><div align="right" class="style8" style="color:blue"> <b>{{$phis->amount}} </b></div></td>
     
        
        <td><div align="left" class="style8">{{$phis->payment_method}} </div></td>
        
        
        
        
        <td><div align="left" class="style8">
            
            @if($phis->payment_method ==  "By_Bank")
           Bank: {{$phis->extra6}}<br>
           Remark:{{$phis->extra5}}
            @endif
            
            
                        @if($phis->payment_method ==  "By_Check")
           {{$phis->extra7}}
            @endif
            
            
            
            
            
            
            </div></td>
            
            
            <td><div align="left" class="style8">
            
            <?php
            
            $rvsdf=$phis->extra1;
            $received_by=DB::table('users')->where('id',$rvsdf)->first();
            ;?>
            {{@$received_by->name}}
            @if(!empty($phis->extra1))
            @endif
            
            </div></td>

      </tr>
     @endforeach 
      

      
        
                      
      
      
      
     
      
      
      
    </table>
    
       
      @if ($paymenter_c == 0) 
      
      <h3> No Payment accept yet.</h3>
      
      @endif
      
    
</section>






























                  
    

</div>
              <div class="modal-footer justify-content-between">
             
              </div>
            </form>
            
            
            
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </td>





















              </tr>
            @endforeach


          </tbody>
   
      </table>
      <?php
      $coupon=1;
      ;?>
      





  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
