

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
         
         
         
         
         
         
         @if (Session::has('message_rs'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger" style="background:green;color:white">

                             <strong style="color:wite">{{ session('message_rs') }}</strong>

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
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger" style="background:red">

                        <p style="text-align:center; color:white; font-size:120%; margin-top:30px">আপনার মোবাইল নম্বর দিযে ইতোপূর্বে আমাদের এখানে রেজিষ্ট্রেশন বা শপিং করেছেন; অতএব, অনুগ্রহ করে আপনার এই মোবইল নম্বর দিয়ে লগিন করুন, পাসওয়ার্ড ভুলে গেলে 'Lost your password'  অপশনে ক্লিক করুন। </p>


                          </div>
                        </div>
                  </div>
       

          @endif
                
                
          
          
          
          
          
          
          <form action="{{ url('/sign-in') }}" style="max-width:500px;margin:auto;  width:90%; " method="post" > @csrf
          
          

            <h3 style="text-align:center; border:0px solid gray; padding:10px; margin-bottom:3px; background:orange; color:white; border-radius:4px"> Login Form  </h3>

          
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Mobile Number" name="phone"  required="">
  </div>

  <!--<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>-->
  
     <input type="hidden" name="ref_number" placeholder="Reference Number" style="width:100%" 
                    
                    value="<?php echo @$s_ref;?>">

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required="">
  </div>

  <button type="submit" class="btn" style="font-size:150%">Login</button>
  
                      <p class="aa-lost-password"><a href="{{ url('/fp') }}" style="color:red">Lost your password? (পাসওয়ার্ড ভুলে গেলে এখানে ক্লিক করুন)</a></p>
                      
                      
                      

</form>
<br>
<a href="/login-register">
<div style="max-width:500px;margin:auto; margin-bottom:100px; width:90%;">
      <button type="submit" class="btn2" style=" background:orange; color:white">Signup Now</button>

    
</div>
          </a>
          
          
              
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