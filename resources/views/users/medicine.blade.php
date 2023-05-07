@extends('layouts.temp2.master2')
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
                
                <p style="text-align:center; color:green; font-size:120%"><b>আপনার প্রেসক্রিপশন এর ছবি তুলে সংযুক্ত করুন ও Note বক্সে চাহিদা/পরিমাণ লিখে সাবমিট করুন। (দ্রুত সময়ে আপনার নিকট কাঙ্খিত মেডিসিন পৌছে যাবে।</b></p>
              
            
              
              
              
              
              
              
              <div class="col-md-8">
                <div class="aa-myaccount-register">
                 <h4>Medicine Order</h4>
                 <form id="registation" name="registation" action="{{ url('/medicine3') }}" method="post" class="aa-login-form"  enctype="multipart/form-data">
                {{ csrf_field() }}

                  
                    
                    
                    
                    
                    <label for="">Full Name <span>*</span></label>
                    <input type="text" name="name" placeholder="Full Name" required>
                    
                    <label for="">Mobile Number <span>*</span></label>
                    <input type="number" name="mobile" placeholder="Mobile Number" required="" style="width:100%">
                    
                    <label for="">Delivery Address <span>*</span></label><br>
<textarea id="w3review" name="address" rows="3" cols="50" required="" style="width:100%"></textarea><br>


                  <label for="">Note (Requirement) <span>*</span></label><br>
<textarea id="w3review" name="note" rows="4" cols="50" required="" style="width:100%"></textarea>

   <label for="" style="color:green"><b>Prescription Image (Brows or Take a photo)</b><span>*</span></label><br>
<div class="controls"> 
                    <input type="file" name="image" required=""/>
                  </div>
               
                  <br>
                  
  
                   
                  
                    <button type="submit" class="aa-browse-btn" style="float:right; width:100%">Submit</button>
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
