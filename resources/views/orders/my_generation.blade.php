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
      
      
        <?php
                      $au_user=Auth::user()->id;
                      $value_user=Auth::user()->generation_value;
                      
                      $total_dr=DB::table("users")->where('up_line_id', $au_user)->count();
                      $total_allr=DB::table("users")->where('upline_arry', 'like', '%'.$au_user.'%')->count();



?>    
      
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard </h3></a>

<h2 style="color:black; padding:0px 0px 0px 0px; text-align:center"> My Sales Team: </h2>
<h4 style="color:blue; padding:0px 0px; text-align:center"> Earingi Range: {{$value_user}} Generation</h4>
      <br>
      <br>
      
  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
       
            
          
            
              <h3 style="color:red; text-align:center">  My Referral ( {{$total_dr}} )</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Name & Photo</th>


                    <th>Upline Line & Rank</th>   
                    
                    <th>Earning</th>

                    <th>Details</th>
                    
                    

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($viegen as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                        {{$gen->name}}<br>
                       
                      </td>
                      
                      
        
        
        
     <td>
                   Rank=
                   
                   @if($gen->rank==1)
                   Gemeral
                   
                   @endif
                   <br>
                   
                   <?php
                   $upl_id=$gen->up_line_id;
                     $up_name=DB::table("users")->where('id', $upl_id)-> first();

                   ?>

                   
                   
                           <style="color:black">A.Code:</span> <span style="color:red">8820{{$up_name->id}}</span><br>
                </td>  
        
        
        
        
                       
             
                      
                      
                 <td class="center">
                           Cash_B:
                           
                           <?php 
                           
                           $erid=$gen->id;
                       
$er_main=DB::table("ac_main")->where('user_id', $erid)-> get()->sum("amount");
$er_shop=DB::table("ac_shop")->where('user_id', $erid)-> get()->sum("amount");



    ;?>        
                           <span style="color:red">{{@$er_main}}</span><br>
                          Shop_B: <span style="color:red">{{ @$er_shop }}</span><br>

                      </td>
                
                
                     
                      
                      <td class="center">
                          -
                      </td>
                      
                     
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>







  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h3 style="color:red; text-align:center"> My All Generation  ( {{$total_allr}} )</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Name & Photo</th>


<!--                    <th>Upline & Rank</th>   
-->                    
                    <th>Earning</th>

                    <th>Details</th>
                    
                    

                  </tr>
                </thead>
                             <tbody>
                  <?php $i = 1;?>
                   @foreach ($viegen2 as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                        {{$gen->name}}<br>
                       
                      </td>
                      
                      
             
              <td>
                   Rank=
                   
                   @if($gen->rank==1)
                   Gemeral
                   
                   @endif
                   <br>
                   
                   <?php
                   $upl_id=$gen->up_line_id;
                     $up_name=DB::table("users")->where('id', $upl_id)-> first();

                   ?>

                   
                   
                           </span><br><span style="color:black">A.Code:</span> <span style="color:red">8820{{$gen->id}}</span><br>
                </td>  
                      
               <td class="center">
                           Cash_B:
                           
                           <?php 
                           
                           $erid=$gen->id;
                       
$er_main=DB::table("ac_main")->where('user_id', $erid)-> get()->sum("amount");
$er_shop=DB::table("ac_shop")->where('user_id', $erid)-> get()->sum("amount");



    ;?>        
                           <span style="color:red">{{@$er_main}}</span><br>
                          Shop_B: <span style="color:red">{{ @$er_shop }}</span><br>

                      </td>
                
                     
                      
                      <td class="center">
                          Details
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
