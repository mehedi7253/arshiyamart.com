@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

  <section id="aa-product">

    <div class="container">

    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h2 style="text-align:center">Customer Review</h2>
    	</div>
    	


      <div class="row" >
          

        <div class="col-md-12">
          <div class="row">
              
              
              
              
					    	@if (Session::has('message_b'))
					    						<a href="{{ url('/my-account') }}">

								<div class="control-group">
										<div class="controls">
												<div class="alert alert-success" style="background:green; color:white; text-align:center ">

														<strong style="color:white;text-align:center">{{ session('message_b') }}</strong>


												</div>
											</div>
								</div>
								</a>
				@endif	
				
              
              
              
              
              
              
              
              
    <h3 style="float:right"><a href="{{url('/')}}/news2">  +Add Review</a></h3>
          
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
      
               

                    
                  
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="men";>
                        
                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-bottom:10px; margin-top:20px;">
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('news')
       ->where(['status' => 2])
        ->orderby('id', 'DESC')
        ->get();
        
        
        ?>
		
	@foreach ($bangladesh_n_p as $bnp)		
		
			<div   style="margin-top:5px; width:100%; float:left; margin-bottom:40px" >
				   	<a href="#"> 
    				   	<div style="float:left; width:120%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; border:0px solid gray">
    				        @if(!empty($bnp->image))
    				        <img src="{{url('/')}}/admin/news/{{$bnp->image}}" style="max-height:300px; float:left">
    				        
    				            				     <span style="padding:20px; font-size:60%; float:left; font-size:122%;  text-align: justify;"><span style="color:red">
    				            				         
    				            				        
    				            				         <?php
                          
                             $sllsd1=$bnp->user_id;
        $userCarte = DB::table('users')->where(['id' => $sllsd1])->first();
                          ;?>
                          {{ $userCarte->name }}
    				            				         
    				            				         
    				            				         
    				            				         
    				            				         </span>({{$bnp->date}})<br>{{$bnp->post}} </span> 

    				       

                            @endif
    				        
                </div>
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


      </div>

      
     </div>
    </section>     	


@endsection