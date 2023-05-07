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
                
                
                 <p style="text-align:center; color:red; font-size:120%">আপনি রেজিষ্ট্রেশন করার সময় যে মোবাইল নম্বর ব্যবহার করেছেন, সেই নম্বরটি নিচের বক্সে লিখুন। SMS এর মাধ্যমে আপনার নতুন পাসওয়ার্ড পেয়ে যাবেন।</p>
              
              
              
              <div class="col-md-12">
                <div class="aa-myaccount-login">
                <h4>Password Reset </h4>
                 <form action="{{ url('/user-register2') }}" class="aa-login-form" name="login" id="loginForm" method="post" >@csrf
                  <label for="">Mobile Number<span>*</span></label>
                   <input type="text" placeholder="Phone Number" name="pphone" required>
                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Reset Password</button>
                    {{-- <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label> --}}
                    <p class="aa-lost-password"><a href="{{ url('/login-register')}}" style="color:red">Remember Password?</a></p>
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
