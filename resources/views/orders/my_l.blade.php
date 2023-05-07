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
     
      

     
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:left; margin-left:50px;" > <i class="fa fa-home" aria-hidden="true"></i>
 Home </h3></a>

     
<h2 style="color:black; padding:20px 50px; text-align:center"> My Wallet : </h2>
       

      <div style="margin-left:50px">
          
          
   




<?php
                      $main_w=Auth::user()->id;
                      $total_cash_wallet=DB::table("ac_main")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");

?>


                
      </div>

      
      
      
      
      
      
      
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color:red; text-align:center">Cash Wallet ({{$total_cash_wallet+$total_cash_wallet_w}})</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    
                    

                  </tr>
                </thead>
            <tbody>
                  <?php $i = 1;?>
                   @foreach ($viegen_main as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                   
                        {{ date('d-M-Y (h:i:s A)', strtotime($gen->created_at)) }}
                      
                      </td>
                      
                            <td class="center">
                        {{$gen->amount}}
                      
                      </td>                 
                
                
                         <td class="center">
                             
     @if($gen->amount < 0)  
     <span style="color:red">Withdraw</span>
     @else
                        
                       @if($gen->remark ==700) 
                       Product <br>Re-Sale
                       @endif
                       
                       
                       @if($gen->remark !=700) 
                       Bonus
                       @endif
                       
                      
                      <br>
                      
                      <?php
                      $ppppiii=$gen->sender_number;
                      $uname=DB::table("users")->where('id', $ppppiii)->first();
                      @$n=$uname->name;
                      ?>
                      
                        <span style="color:blue">{{@$n}}</span>
       @endif               
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>

















  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color:red; text-align:center"> Bonus Wallet  ( {{$total_shop_wallet + $total_shop_wallet_w}} )</h5>
            </div>
            <div class="widget-content nopadding">
              
              
                           <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    
                    

                  </tr>
                </thead>
            <tbody>
                  <?php $i = 1;?>
  @foreach ($viegen_shop as $gen)
  <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                   
                        {{ date('d-M-Y (h:i:s A)', strtotime($gen->created_at)) }}
                      
                      </td>
                      
                            <td class="center">
                        {{$gen->amount}}
                      
                      </td>                 
                
                
                         <td class="center">
                             
     @if($gen->amount < 0)  
     <span style="color:red">Withdraw</span>
     @else
                        
                       @if($gen->remark ==700) 
                       Product <br>Re-Sale
                       @endif
                       
                       
                       @if($gen->remark !=700) 
                       Bonus
                       @endif
                       
                      
                      <br>
                      
                      <?php
                      $ppppiii=$gen->sender_number;
                      $uname=DB::table("users")->where('id', $ppppiii)->first();
                      @$n=$uname->name;
                      ?>
                      
                        <span style="color:blue">{{@$n}}</span>
       @endif               
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>
              </table> 
              
              
              
              
              
              
              
              
              
             
            </div>
          </div>










  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
