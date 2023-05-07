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
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: bKash. <br>
                                      Please send money to: <?php echo $h12 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('bKash') }}. <br>
                                      Thanks. </span>
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: DBBL. <br>
                                      Please Deposit to: <?php echo $h13 ;?> <br>
                                      
                                      
                                      {{ session('Rocket') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: Nagad. <br>
                                      Please send money to:<?php echo $h14 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('Nagad') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard  </h3></a>



<?php
                      $main_w=Auth::user()->id;
                      /*$ma=Auth::user()->name;
                      $total_cash_wallet=DB::table("ac_main")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      
                      
                      $wc=DB::table("ac_main_with")->where('user_id', $main_w)->where('status', 1)-> count();
                      */
                      

?>


<?php
 $user_id = Auth::user()->id;

 $orders33=DB::table('users')->where('id', $user_id)->first();

$af_cc=$orders33->affiliate_com;

;?>



<h2 style="color:black; padding:50px 50px; text-align:center"> My All Affiliate: </h2>
      
      
      
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Purchase Amount</th>
                 
              </tr>
          </thead>
          <tbody>


<?php


$user_id = Auth::user()->id;
$orders=DB::table('users')->where('ref_upline', 'like', '%'.$user_id.'%')->get();


;?>





<?php $i = 1;?>
            @foreach ($orders as $order)
            
                               
              <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$order->name}}</td>
                  
                  
                  <?php
                 $pamount1= DB::table('orders')->where('user_id',$order->id)->where('order_status',"Delivered")->sum('shipping_charges');
                 $pamount= DB::table('orders')->where('user_id',$order->id)->where('order_status',"Delivered")->sum('total');
                  ;?>
                  
                  <td>{{$pamount-$pamount1}}</td>
                 
                   
              </tr>
            @endforeach


          </tbody>
   
      </table>
<h5 style="color:red"> * Purchase Amount প্রোডাক্ট ডেলিভারী হওয়ার পর সো করবে এবং ডেলিভারী চার্জ ব্যাতিত শুধু মাত্র প্রোডাক্ট এর নীড মূল্য প্রয়োজ্য হবে </h5>
  </div>
</section><!--/#do_action-->





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
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
