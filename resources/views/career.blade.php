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
                

            
              
              
              
              
              
              
              <div class="col-md-8">
                <div class="aa-myaccount-register">
                 <h4>Job Opportunities</h4>
                 
                <style>
                .comment{
                    width:100%;
                    padding:10px;
                    color:black;
                    background:silver;
                    border-radius:4px;
                    margin-top:8px;
                }
                </style>
                 
                 
                 <?php
                 
                
                 
                 
                 
                // $sdlfj=DB::table('a111')->where('extra5',$auth_role)->get();
                 $sdlfj=DB::table('rank_promotion')->get();
                 ;?>
                 
                 
                 @foreach($sdlfj as $n2)
                 <div class="comment">
                     
                  
                   <p style="color:black">
                       
                       
                       
                    <b>  Post/Designation:  </b> {{$n2->rank_name}} <br>
                      <b>  Number of Post: </b> {{$n2->extra8}} <br>
                      <b>  Job Type: </b> {{$n2->extra9}} <br>
                                         <b>  Salary: </b> {{$n2->extra5}} <br>
   
                      
                      <b>  Educational qualification : </b> {{$n2->extra6}} <br>
                      <b>  Experience:</b>  {{$n2->extra7}} <br>
                      <b>  Date Line:</b>  {{$n2->extra13}} <br>
                       
                       
                       
                       
                       
                       
                       
                   </p>
                   <a href="/job/create_job_profile.php?job_id={{$n2->id}}">
                   <button> Apply Now</button>
                     </a>
                 </div>
                 @endforeach
                 
                  
                  
          
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
