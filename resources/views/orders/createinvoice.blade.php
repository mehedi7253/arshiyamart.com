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
    
    
    
    
    
    
    
    
   <?php
   if(isset($_GET['oid']))
   {
       $oid=$_GET['oid'];
       $oid2=$_GET['oid2'];
       
       DB::table('orders')->where('id',$oid)->where('total',$oid2)->update(['user_cancel'=>1
           ]);
           

       
   }
   
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
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard  </h3></a>

<h2 style="color:black; padding:50px 50px; text-align:center"> My All Orders: </h2>
      
      
      
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Order ID</th>
                  <th>Order Placing</th>
                  <th>Invoice Total</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>

            @foreach ($orders as $order)
            
                               
              <tr>
                  <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                   <td>{{ $order->total }}<br>{{ $order->payment_method }}<br><span style="color:red"> {{$order->pincode}}</span></td>
                  
                  <td>{{ $order->order_status }}<br>
                  
                  @if($order->user_cancel < 2) 
                  
                      @if($order->user_cancel != 1)
                     <a href="/orders?oid={{$order->id}}&security=<?php echo uniqid();?>&oid2={{$order->total}}" style="color:red"> Request Cancel </a>
                      @else
                      
                                           <span style="color:red"> Waiting for Cancelation </span>

                     @endif
                 @endif
                 
                  </td>
                  <td> <a href="{{ url('/') }}/invoice/{{$order->id}}/{{$order->total}}"> View Invoice </a></td>

              </tr>
            @endforeach


          </tbody>
   
      </table>

  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
