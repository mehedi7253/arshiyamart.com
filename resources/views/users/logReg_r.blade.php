@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')


 <!-- Cart view section -->
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
                         <div class="alert alert-danger" style="background:red">

                             <strong style="color:#000">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
                 @if (Session::has('message_error'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger" style="background:red">

                              <strong style="color:#000">{{ session('message_error') }}</strong>

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
          @else
          
                           <p style="text-align:center; color:red; font-size:120%; margin-top:30px">আপনি আমাদের এখানে নতুন হলে, শুধুমাত্র প্রথমবার অর্ডার করার পূর্বে  রেজিষ্ট্রেশন করুন, পরবর্তীতে সরাসরি অর্ডার করতে পারবেন।</p>

          @endif
                
                
                
                
              
              
              
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
              </div>
              
              
              
              
              
              
 
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

<!--                    <label for="">Reference Number  (if any)</label>
-->                    <input type="hidden" name="ref_number" placeholder="Reference Number" style="width:100%" 
                    
                    value="<?php echo @$s_ref;?>">


                    <label for="">Password<span>*</span></label>
                    <input type="password" id="myPassword" name="pass" placeholder="Password" required>
                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Register</button>
                  </form>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
     
     
     
   </div>
 </section>
 <!-- / Cart view section -->
@endsection
