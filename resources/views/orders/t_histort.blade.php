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

<h2 style="color:black; padding:50px 50px; text-align:center"> My All Transaction: </h2>
      
      
      
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Sl</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Remark</th>
              </tr>
          </thead>
          <tbody>

            @foreach ($orders as $order)
            
                               
              <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                 

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
