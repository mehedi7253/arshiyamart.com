@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<style>
body {font-family: Arial, Helvetica, sans-serif;
    
    
    
        background-image: url(''); 

}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn2 {
  background-color: green;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

















<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
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
     
      

     
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;"> < Back to Dashboard </h3></a>

     
<h2 style="color:black; padding:20px 50px; text-align:center"> Add Member : </h2>
       
       
       
       
       
       
       
       
      
       
 <section id="aa-myaccount">
   <div class="container">
       
       
     <div class="row" style="width:90%; margin:auto;">
       <div class="col-md-12">
      
      <?php
      $user_name=DB::table('users')->where('id',$upline_id)->first();
      $uid=$upline_id;
      ?>
                
                
                
                
                
                 @if (Session::has('message_success'))
                     <div class="controls">
                         <div class="alert alert-danger" style="background:red;color:white">

                             <strong style="color:white">{{ session('message_success') }}</strong>

                         </div>
                       </div>
         @endif
                
                             @if (Session::has('message_already'))
                     <div class="controls">
                         <div class="alert alert-danger" style="background:red;color:white">

                             <strong style="color:white">{{ session('message_already') }}</strong>

                         </div>
                       </div>
         @endif    
                 
                 @if (Session::has('message_bal'))
                     <div class="controls">
                         <div class="alert alert-danger" style="background:red;color:white">

                             <strong style="color:white">{{ session('message_bal') }}</strong>

                         </div>
                       </div>
         @endif
                
                
                
                
      <form action="/join2bdts" style="max-width:500px;margin:auto;  width:100%; margin-bottom:50px" method="post" > 
          
          @csrf
          <h4 style="text-align:center; color:red"><b>নোট:  </b>নতুন ইউজার Signup করানোর  পূর্বে  Sponsor ঠিক আছে কি না অনুগ্রহ করে দেখে নিন।   Signup  করানোর সময়  ভুল   Sponsor  এর নিচে জয়েন  করলে  তা আর সমাধান যোগ্য নয়। </h4>  
  <h2 style="text-align:center; border:0px solid gray; margin-bottom:3px; background:dodgerblue; color:white; border-radius:4px"> Placement: <br><span style="color:yellow"> {{$user_name->name}} <br>
  </span><span style="color:white; font-family: Arial, Helvetica, sans-serif; font-size:70%">Sponsor BG Code: {{$user_name->network_sl}} </span></h2>







 <label style="text-align:center; color:blue">বিনিয়োগের পরিমাণ (সর্বনিন্ম 2000) [ইংরেজিতে লিখতে হবে]</label>
  <div class="input-container">
      
     
    <i class="fa fa-user icon"></i>

    <input class="input-field" type="number" placeholder="Investment Amount" name="package" min="2000"  required="">
  </div>











  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Member Login UserName" name="user_n"  required="">
  </div>




    <input class="input-field" type="hidden" placeholder="User Name" name="site_ab" value="1" required="">
    <input class="input-field" type="hidden" placeholder="User Name" name="upline_id" value="{{$uid}}" required="">



  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Member Full Name" name="name"  required="">
  </div>
  
  <div class="input-container">
    <i class="fa fa-phone-square icon"></i>
    <input class="input-field" type="number" placeholder="Mobile Number" name="pphone"  required="">
  </div>




  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass" required="" value="">
  </div>




    <input class="input-field" type="hidden" placeholder="Sponsor GB Code" name="sponsor" required="" value="{{$user_name->network_sl}}">




<!--

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I accept cashbaba Privacy Policy. </span><br>











<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I am 18 years old</span><br>




<input type="checkbox" id="vehicle2" name="vehicle2" value="Car" required="">
<span for="vehicle2">I accept the terms and conditions <br> &nbsp;&nbsp;&nbsp; of 'Cash Baba Shop'</span><br>
  -->



  <button type="submit" class="btn"><span style="font-size:130%; width:500px; ">Confirm & Signup</span></button>
  

                      
                      

</form>
      
      
      
      
      
      </div>
      </div>
      </div>
      </section>
      
      
      
       
       
       
       
       
       
       
       
       
       
 </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
