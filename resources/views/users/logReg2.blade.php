@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')


 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
       
       
     <div class="row" style="width:80%; margin:auto;">
       <div class="col-md-12">
           
           
          
        <div class="aa-myaccount-area">
                            @if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger">

                             <strong style="color:#000">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
                 @if (Session::has('message_error'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger">

                              <strong style="color:#000">{{ session('message_error') }}</strong>

                          </div>
                        </div>
                  </div>
          @endif
            <div class="row">
                
                
                 <p style="text-align:center; color:red; font-size:120%">আপনি আমাদের এখানে নতুন হলে, শুধুমাত্র প্রথমবার অর্ডার করার পূর্বে  রেজিষ্ট্রেশন করুন, পরবর্তীতে সরাসরি অর্ডার করতে পারবেন।</p>
              
              
              
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login </h4>
                 <form action="{{ url('/sign-in') }}" class="aa-login-form" name="login" id="loginForm" method="post" >@csrf
                  <label for="">Mobile Number<span>*</span></label>
                   <input type="text" placeholder="Phone Number" name="phone" required>
                   <label for="">Password<span>*</span></label>
                    <input name="password" type="password" placeholder="Password" required>
                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Login</button>
                    {{-- <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label> --}}
                    <p class="aa-lost-password"><a href="{{ url('/fp') }}" style="color:red">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              
              
              
              
              
              
              <div class="col-md-6">
                <div class="aa-myaccount-register">
                 <h4>Register</h4>
                 <form id="registation" name="registation" action="{{ url('/user-register') }}" method="post" class="aa-login-form">@csrf
                    <label for="">Full Name <span>*</span></label>
                    <input type="text" name="user_name" placeholder="Full Name" required>
                    
                    <label for="">Mobile Number <span>*</span></label>
                    <input type="text" name="pphone" placeholder="Mobile Number" required>
                    
                    <label for="">Email address (if any) <span></span></label>
                    <input type="email" name="email" placeholder="Email">

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
