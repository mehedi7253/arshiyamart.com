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
  background: green;
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
  background-color: red;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn2 {
  background-color: red;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
  color:white;
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
if(isset($_GET['m']))
{

    $ref22=$_GET['m']; 

    $_SESSION['m']=$ref22;

}  
    ?>
    
    
    
    
    
    
    
<?php 
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
                
                
          





<?php
$adf=10;
;?>



<?php
if(isset($_GET['pphone'])){
    
    
           $adds6 = DB::table('banners')->where('id', 32)->first();
           $urrl32= $adds6->image;
           
           
           $adds31 = DB::table('banners')->where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = DB::table('banners')->where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = DB::table('banners')->where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = DB::table('banners')->where('id', 35)->first();
           $sender= $adds35->image;  
    
           $adds3510 = DB::table('banners')->where('id', 10)->first();
           $email10= $adds3510->image; 
    
    
    
    
    
    
     
    
    
   $number31=$_GET['pphone'];
   
   
   $otp=rand(111111,999999);
   
      Session::put('ppp', $_GET['pphone']);
      Session::put('nnn', $_GET['user_name']);
      Session::put('eee', $_GET['email']);
      Session::put('rrr', $_GET['ref_number']);
      Session::put('sss', $_GET['pass']);
      if(isset($_GET['business_name']))
      {
            Session::put('business_name', $_GET['business_name']);
      }
    
      
      Session::put('otp', $otp);
      
      
      
      
      
             if(isset($_GET['user_type'])){
              $value=$_GET['user_type'];
               Session::put('dashboard',$value); 
              
          }else{
              Session::put('dashboard',1); 
          }
      
      
      
      
      
      
      
      
      if(empty($_GET['email'])){
                $user_cccc=DB::table('users')->where('phone',$number31)->count();

      }
      else
      {
      $user_cccc=DB::table('users')->where('phone',$_GET['pphone'])->orWhere('email',$_GET['email'])->count();
      }
      
      
      
      
      
      
      if($user_cccc < 1)
      {
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$number31", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"আপনার ওটিপি : $otp "
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);        
        
  //main Function
 }     
      
      

   
    
    
    
}




;?>


<?php
/* $sss=Session::get('sss');
 
 echo $sss;*/
;?>


@if(!isset($_GET['pphone']))







      <form action="/login-register" style="max-width:500px;margin:auto;  width:90%; " method="GET" > 
                @csrf

      
      <?php
      
      
      if(isset($_GET['m']))
{
    echo'<h3>প্রিয় উদ্দ্যোক্তা! মার্সেন্ট হতে আহগ্রহ প্রকাশ করার জন্য আপনাকে ধন্যবাদ।</h3>';
}
      ;?>
      
          
  <h3 style="text-align:center; border:0px solid gray; padding:10px; margin-bottom:3px; background:orange; color:white; border-radius:4px"> SIGN UP </h3>
  
  
  @if(isset($_GET['m']))
  <div class="input-container">
    <i class="fa fa-briefcase  icon"></i>
    <input class="input-field" type="text" placeholder="Business/Store Name" name="business_name"  required="">
  </div>
  @endif
  
  
  
  
  
  
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Your Full Name" name="user_name"  required="">
  </div>
  
  
  
  
  <div class="input-container">
    <i class="fa fa-phone-square icon"></i>
    <input class="input-field" type="text" placeholder="Mobile Number" name="pphone"  required="">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email (if any)" name="email" value="">
  </div>
  
     <input type="hidden" name="ref_number" placeholder="Reference Number" style="width:100%" 
                    
                    value="<?php echo @$s_ref;?>">

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass" required="" value="">
  </div>






<!--

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I accept terms and conditions. </span><br>

-->







  <button type="submit" class="btn"><span style="font-size:110%; margin-top:7px" >REGISTER</span></button>
  <br> <br>
                      <p class="aa-lost-password" style="margin-top:10px"><a href="{{ url('/login-registerj') }}" style="color:red">আপনি কি ইতোমধ্যে রেজিষ্ট্রেশন করেছেন? তাহলে এখানে ক্লিক করে লগিন করুন। <sapn style="color:blue">Login here</span></a></p>
                      
                      
                      

</form>

















 @else
          
 @if($user_cccc < 1)         
          
          
      <form action="{{ url('/user-register') }}" style="max-width:500px;margin:auto;  width:90%; " method="post" > 
      
      
          @csrf
  <h3 style="text-align:center; border:0px solid gray; padding:10px; margin-bottom:3px; background:red; color:white; border-radius:4px">OTP Check </h3>
  
  				    		<h4 style="margin-top:20px;  color:blue;  text-align:center;"><b>আপনার মোবাইল নম্বরে  OTP কোর্ড পাঠানো হয়েছে, অনুগ্রহ করে  কোর্ডটি প্রদান করুন।  </b></h4>

  
          @if (Session::has('message_oto'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger" style="background:silver; color:black">

                              <strong style="color:white">{{ session('message_oto') }}</strong>

                          </div>
                        </div>
                  </div>
          @endif
  <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="text" placeholder="OTP (Recerived by SMS)" name="opt"  required="">
  </div>

  




<!--

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
<span for="vehicle1"> I accept terms and conditions. </span><br>

-->







  <button type="submit" class="btn"><span style="font-size:110%; margin-top:7px" >Confirm & Submit</span></button>
  <br> <br>
                      <p class="aa-lost-password" style="margin-top:10px"><a href="{{ url('/login-register') }}" style="color:red">মোবাইলে OTP না পেলে অনুগ্রহ এখানে ক্লিক  করে পুনরায় চেষ্টা করুন।</a></p>
                      
                      
                      

</form>
@else



        <?php
        $reg_type=Session::get('dashboard'); 
        $nunn=Session::get('nnn');
        ?>
        
        
                    @if($reg_type == 3)
                    
                    
                                          <p class="aa-lost-password" style="margin-top:10px; color:red; text-align:center"> সম্মানিত উদ্যোক্তা! <br>
                                          
                                          আপনার মোবাইল নম্বর /ইমেইল দিয়ে ইতোপূর্বে  আমাদের  এখানে  ইউজার হিসাবে রেজিষ্ট্রেশন করা হয়েছে, 
                                          
                                        আপনি যদি   এই মোবাইল নম্বর / ইমেইল দিয়েই  Business / Store রেজিষ্ট্রেশন করতে আগ্রহী হন, তাহলে
                                          
                                          অনুগ্রহ করে  এখানে ক্লিক করে <a href="{{ url('/login-registerj') }}" style="color:blue">  <u> লগিন করুন  </u> </a>  বা পাসওয়ার্ড ভুলে গেলে  <a href="{{ url('/fp') }}" style="color:blue"> 

                                        <u>
                                        পাসওয়ার্ড পুনরুদ্ধার                      </u> </a>
                                         এ ক্লিক করুন।</a></p>
                    
                     
                     
                     
                     
                     
                                                               <p class="aa-lost-password" style="margin-top:10px; color:black; text-align:center">  অথবা <br>
                                          
                                          অন্য নম্বর/ইমেইল দিযে নতুনভাবে রেজিষ্ট্রেশন করতে এখানে 
                                          
                                          ক্লিক করুন <a href="{{ url('/login-register?m=1') }}" style="color:blue">  <u>  Create Business/Store </u> </a></p>
                    
                     
                     
                     
                     
                    @elseif($reg_type == 2)
                    
                                       <p class="aa-lost-password" style="margin-top:10px; color:red; text-align:center"> প্রিয় {{$nunn}} <br>
                                          
                                          আপনার মোবাইল নম্বর /ইমেইল দিয়ে ইতোপূর্বে  আমাদের  এখানে  ইউজার হিসাবে রেজিষ্ট্রেশন করা হয়েছে, 
                                          
                                        আপনি যদি   এই মোবাইল নম্বর / ইমেইল দিয়েই  Affiliate  রেজিষ্ট্রেশন করতে আগ্রহী হন, তাহলে
                                          
                                          অনুগ্রহ করে  এখানে ক্লিক করে <a href="{{ url('/login-registerj') }}" style="color:blue">  <u> লগিন করুন  </u> </a>  বা পাসওয়ার্ড ভুলে গেলে  <a href="{{ url('/fp') }}" style="color:blue"> 

                                        <u>
                                        পাসওয়ার্ড পুনরুদ্ধার                      </u> </a>
                                         এ ক্লিক করুন।</a></p>
                    @else
                    
                     
                     
                      <p class="aa-lost-password" style="margin-top:10px; color:red; text-align:center"> প্রিয় ইউজার! <br>
                                          
                                          আপনার মোবাইল নম্বর /ইমেইল দিয়ে ইতোপূর্বে  আমাদের  এখানে রেজিষ্ট্রেশন করা হয়েছে, 
                                          
                                          অনুগ্রহ করে  এখানে ক্লিক করে <a href="{{ url('/login-registerj') }}" style="color:blue">  <u> লগিন করুন  </u> </a>  বা পাসওয়ার্ড ভুলে গেলে  <a href="{{ url('/fp') }}" style="color:blue"> 

                                        <u>
                                        পাসওয়ার্ড পুনরুদ্ধার                      </u> </a>
                                         এ ক্লিক করুন।</a></p>
                     
                     
                     
                     
                     
                    @endif
                    
                    
                    
                    
















@endif

@endif










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








