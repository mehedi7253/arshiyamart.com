@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

  <section id="aa-product">

    <div class="container">

    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h2 style="text-align:center">Shops by Brands</h2>
    	</div>

      <div class="row" >

        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
 <hr>
              
              
               

                    
                  
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="men">
                        
                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-bottom:10px; margin-top:20px;">
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('brands')
       ->where(['top' => 1])
        ->orderby('id', 'ASC')
        ->get();
        
        
        ?>
		
	@foreach ($bangladesh_n_p as $bnp)		
		
			<div   style="margin-top:5px; float:left">
				   	<a href="{{url('/')}}/search2/{{$bnp->name}}"> 
    				   	<div style="float:left; width:120%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; border:0px solid gray">
    				        @if(!empty($bnp->img))
    				        <img src="{{url('/')}}/assets/admin/img/category_icon/{{$bnp->img}}">
    				        @else
<i class="fa fa-paper-plane" aria-hidden="true" style="font-size:100%"></i>



@endif
    				        
    				        <br>
    				     <span style="font-size:60%"> {{$bnp->name}}</span> 
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