@extends('layouts.temp2.master2')
@section('content')
@include('layouts.temp2.nav')


 <!-- Cart view section -->
 
 
 




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head>
<body>
    
    

    
    



 
 <section id="aa-myaccount">
   <div class="container">
       
       
     <div class="row" style="width:90%; margin:auto;">
       <div class="col-md-12">
           
    <?php
    
    
           $adds6 =DB::table('banners')->where('id', 32)->first();
           $url= $adds6->image;
    
    ;?>       
<?php 
session_start();
if(isset($_GET['ref']))
{

    $ref22=$_GET['ref']; 
    $ref=substr($ref22,4);
    
    $_SESSION['s_ref']=$ref;

}

if(!empty($_SESSION['s_ref']))
{
        $s_ref=$_SESSION['s_ref']; 

}
else
{
   $s_ref="";  
}
;?>
        <div class="aa-myaccount-area">
                            @if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger" style="background:red;color:white">

                             <strong style="color:wite">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
                 @if (Session::has('message_error'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger" style="background:red; color:white">

                              <strong style="color:white">{{ session('message_error') }}</strong>

                          </div>
                        </div>
                  </div>
          @endif
            <div class="row" style="margin-top:-40px">
                
                <?php
                $ppppppp=URL::previous();
                $ppcccc=substr("$ppppppp",-2);
                ?>
                
                
                
                @if ($ppcccc=="t2")
                  <!--<div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger" style="background:red">

                        <p style="text-align:center; color:white; font-size:120%; margin-top:30px">আপনার মোবাইল নম্বর দিযে ইতোপূর্বে আমাদের এখানে রেজিষ্ট্রেশন বা শপিং করেছেন; অতএব, অনুগ্রহ করে আপনার এই মোবইল নম্বর দিয়ে লগিন করুন, পাসওয়ার্ড ভুলে গেলে 'Lost your password'  অপশনে ক্লিক করুন। </p>


                          </div>
                        </div>
                  </div>-->
          @else
          
<!--                           <p style="text-align:center; color:red; font-size:120%; margin-top:30px">আপনি আমাদের এখানে নতুন হলে, শুধুমাত্র প্রথমবার অর্ডার করার পূর্বে  রেজিষ্ট্রেশন করুন, পরবর্তীতে সরাসরি অর্ডার করতে পারবেন।</p>
-->
          @endif
                
                
          
          
          
          
          
          
      <form action="{{ url('/') }}" style="max-width:500px;margin:auto;  width:90%; " method="post" > 
          
          @csrf
  <h2 style="text-align:center; border:0px solid gray; margin-bottom:3px; background:dodgerblue; color:white; border-radius:4px">Marchant Sign UP </h2>

  
  
  
  
  
  
  
  
  
  			
				<label> আপনার নাম</label><br>



    	<input name="user_name" type="text"  placeholder="Your Full Name"  style="width:100%" required="">	
			
  
  
  
  
  
  
  
  
  
  
   <?php
                    $aa_dist=DB::table('all_dist')->orderby('dist_name','ASC')->get();
                   ;?>
           														
							
							
				<label> আপনার  বিজনেস/ প্রতিষ্ঠানের নাম</label><br>



    	<input name="business_name" type="text"  placeholder="Business/ Store Name" style="width:100%" minlength="3">	
			
			
	
			


							
							
							
<h3 style="color:blue; text-align:left"> আপনার জেলা নির্বাচন করুন </h3>	

<select name="dis" style="width:100%; padding:6px;" id="mySelect" onchange="ChangeCarList()"  required>
                       <option value="">Select Distrct</option>

@foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach</select>
<br>
							
	<h3 style="color:blue; text-align:left"> আপনার থানা/উপজেলা  নির্বাচন করুন</h3>	

<select name="ps" id="sm14" style="width:100%; padding:6px;" required>
                       <option value="">Select P.S/Thana</option>
  </select>

<br>



<label> এরিয়া (ইউনিয়ন/পোস্ট অফিস/নিকটবর্তী  পরিচিত স্থান )</label><br>



    	<input name="location" type="text"  placeholder=" Business Location" style="width:100%" minlength="3">


<label>গ্রাম/রাস্তা (বাড়ি/শপ নং যদি থাকে):  (বিজনেস/শপ কোন মার্কেটে অবস্থিত হলে তার নামও এখানে লিখুন)</label><br>



    	<input name="address" type="text"  placeholder="Vill/Road/House No (if any) " style="width:100%" minlength="3">	
				
		





<label> জাতীয় পরিচয়পত্র সংযুক্ত করুন :</label><br>
<input type="file" name="file3" required="">



<br>



<label> ট্রেড লাইসেন্স সংযুক্ত করুন (যদি থাকে) :</label><br>
<input type="file" name="file">



<br>

<label>লগো :(পরবর্তীতে পরিবর্তন করা যাবে) </label><br>
<input type="file" name="file2" required="">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <br>
  
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Mobile Number" name="pphone"  required="">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="Email (if any)" name="email" value="">
  </div>
  
     <input type="hidden" name="ref_number" placeholder="Reference Number" style="width:100%" 
                    
                    value="<?php echo @$s_ref;?>">

  
  <div class="input-container">
    <input class="input-field" type="password" placeholder="Password" name="pass" required="" value="">
  </div>





<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> <span style="color:red"> আমি বাংলাদেশ সরকার  তথা   ভোক্তা অধিদপ্তর এর নির্দেশনা মোতাবেক বৈধ ব্যবসা   পরিচালনা করিতে বাধ্য থাকিবো।  </span></span><br>




  <button type="submit" class="btn"><span style="font-size:130%">REGISTER</span></button>
  
                      <p class="aa-lost-password" style="margin-top:10px"><a href="{{ url('/login-registerj') }}" style="color:red">Have an Account? Plese Login here.</a></p>
                      
                      
                      

</form>
<br>

          
          
          
          
          
          
          
          
          
          
          
          
          
                
                
              
              
             <!-- 
              <div class="col-md-6">
                <div class="aa-myaccount-login" style="background:#DAF7A6; padding:10px; border-radius:8px; margin-top:10px">
                    
                <span style="color:blue; font-size:150%">Welcome to {{$url}}!</span>
                <h4 style="color:red; text-align:center"> Please Login</h4>
                 <form action="{{ url('/sign-in') }}" class="aa-login-form" name="login" id="loginForm" method="post" >@csrf
                  <label for="">Mobile Number<span>*</span></label>
                   <input type="number" placeholder="Phone Number" name="phone" required="" style="width:100%">
                   <label for="">Password<span>*</span></label>
                    <input name="password" type="password" placeholder="Password" required>
                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Login</button>
                    {{-- <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label> --}}
                    <p class="aa-lost-password"><a href="{{ url('/fp') }}" style="color:red">Lost your password?</a></p>
                  </form>
                </div>
              </div>-->
              
              
              
              
              
              
 <!--
              <div class="col-md-6">
                                  <div class="aa-myaccount-register"  style="background:#DAF7A6; padding:10px; border-radius:8px; margin-top:10px">
                 <h4>Register</h4>
                 <form id="registation" name="registation" action="{{ url('/user-register') }}" method="post" class="aa-login-form">@csrf
                    <label for="">Full Name <span>*</span></label>
                    <input type="text" name="user_name" placeholder="Full Name" required>
                    
                    <label for="">Mobile Number  <span>(Be carefully)*</span></label>
                    <input type="number" name="pphone" placeholder="Mobile Number" required="" style="width:100%">
                    
                    <label for="">Email address (if any) <span></span></label>
                    <input type="email" name="email" placeholder="Email (if any)">

                  <input type="hidden" name="ref_number" placeholder="Reference Number" style="width:100%" 
                    
                    value="<?php echo @$s_ref;?>">


                    <label for="">Password<span>*</span></label>
                    <input type="password" id="myPassword" name="pass" placeholder="Password" required>
                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Register</button>
                  </form>
                </div>
              </div>-->
              
            </div>
         </div>
       </div>
     </div>
     
     
     
   </div>
 </section>
 <!-- / Cart view section -->










</div>
</body>
</html>
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



