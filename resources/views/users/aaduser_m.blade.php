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

     
<h2 style="color:black; padding:20px 50px; text-align:center">Mobile Recharge : </h2>
       
       
       
       
       
       
       
       
      
       
 <section id="aa-myaccount">
   <div class="container">
       
       
     <div class="row" style="width:90%; margin:auto;">
       <div class="col-md-12">
      
      <?php
          $uid=substr($upline_id,0,-1);
          $site_ab=substr($upline_id,-1);
          
          
          if($site_ab==1){$ssssssss="A";};
          if($site_ab==2){$ssssssss="B";};
          

      $user_name=DB::table('users')->where('id',$uid)->first();
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
                
                
                
                
            <?php
    				       $auth_id=Auth::user()->id;
    				       $my_bdt=DB::table('ac_mobile_wallet')->where('user_id',$auth_id)->sum('amount');
    				       ;?>
                
                
                
      <form action="/join2bdts_mobile" style="max-width:500px;margin:auto;  width:100%; margin-bottom:50px" method="post" > 
          
          @csrf
          <h4 style="text-align:center; color:red">আপনার বর্তমান মোবাইল ওয়ালেট  ব্যালেন্স: {{ $my_bdt}} </h4>  
          
          
          
          
          
          
             <div style="width:100%;text-align:center">
    নিচের লগোতে ক্লিক করে সকল অপারেটরের  চলমান অফারগুলো দেখা যাবে:<br>
    (অফার গুলো দেখে তার পর নিচের অপশন থেকে নিদিষ্ট রিচার্জের পরিমাণ লিখে রিচার্জ করুন।)
     
     <br>
     <div class="row">
     
    <a href="https://www.grameenphone.com/personal/plans-offers/offers" style="float left"> <img src="https://payments.grameenphone.com/images/logo.svg" style="border:1px solid silver; border-radius: 4px;  max-height:40px">     </a>   
     
     
     
    
     
         <a href="https://www.banglalink.net/en/prepaid/bundles" style="float left"> <img src="https://logovtor.com/wp-content/uploads/2020/08/banglalink-logo-vector.png" style="border:1px solid silver; border-radius: 4px; max-height:40px">     </a>   

     
         
     
     
         <a href="https://www.bd.airtel.com/en/personal/offers" style="float left"> <img src="https://www.bd.airtel.com/static/images/logo.png" style="border:1px solid silver; border-radius: 4px; height:40px; max-width:60px">     </a>   
         <a href="https://www.robi.com.bd/en/personal/internet/recharge-packs" style="float left"> <img src="https://www.robi.com.bd/static/images/newlogo.svg" style="border:1px solid silver; border-radius: 4px; height:40px; max-width:60px">     </a>   

     
          
     

     
       </div>
          
         </div> 
          
          
          
          
          <h3 style="text-align:center; color:red">আগামী ১০ তারিখ পর্যন্ত  গ্রামীণফোন ব্যাতিত রিচার্জ হবে না। </h3> 
          
          
          
          
          
          
          
           
      
          
          
          
          
          
          
  <div class="input-container">
    <i class="fa fa-money icon"></i>
    <input class="input-field" type="number" placeholder="Recharge Amount" name="amount"   min="20" max="{{$my_bdt}}"  required="">
  </div>






  <div class="input-container">
    <i class="fa fa-mobile icon"></i>
    <input class="input-field" type="number" placeholder="Mobile Number" name="mobile_number"  required="">
  </div>



  <div class="input-container">
          <input type="radio" id="pre" name="sim_type" value="1" required="">&nbsp;
  <label for="pre">Prepaid</label>&nbsp;&nbsp;&nbsp;
  
  
  <input type="radio" id="pot" name="sim_type" value="2" required="">&nbsp;
  <label for="pot">Postpade</label><br>
  </div>





<select name="operator" style="width:100%; padding:6px;" required>
                       <option value="">Select Mobile Operator</option>

    <option value="gp">GrameenPhone </option>
    <option value="sk">Skitto</option>
      <!--  <option value="bl"> Banglalink </option>
        <option value="rb"> Robi</option>
        <option value="at"> Airtel</option>-->
    </select> 

<br>
<br>

  <div class="input-container">
    <i class="fa fa-unlock-alt icon"></i>
    <input class="input-field" type="password" placeholder="Security Password" name="password"  required="">
  </div>


<!--

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I accept cashbaba Privacy Policy. </span><br>











<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I am 18 years old</span><br>




<input type="checkbox" id="vehicle2" name="vehicle2" value="Car" required="">
<span for="vehicle2">I accept the terms and conditions <br> &nbsp;&nbsp;&nbsp; of 'Cash Baba Shop'</span><br>
  -->

          <h4 style="text-align:center; color:red"><b>নোট:  </b>সাবমিট করার পূর্বে আপনার মোবাইল নম্বর ও টাকার পরিমাণ যাচাই করে নিন </h4>  


  <button type="submit" class="btn"><span style="font-size:130%; width:500px; ">Recheck Confirm & Submit</span></button>
  

                      
                      

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
