@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')


 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
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
                
                
              
              
              
              <div class="col-md-12">
                <div class="aa-myaccount-login">
                <h4> Terms and Conditions:</h4>
                 <p style="text-align:justify; font-size:110%">
       <?php
 
 
$results54 = DB::select('select * from banners where id = :id', ['id' => 54]);





    ;?>        
          

@foreach($results54 as $t54)
     <?php 
        $image54=$t54->image;     
     ;?>
@endforeach              
             {!! nl2br($image54) !!}       
                    
                </p>
                  
                  
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
