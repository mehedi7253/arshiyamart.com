@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>Message</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All Request/Message <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
          						
		  <thead>
            <tr style="background:silver; color:black">
            <td>SL</td>
            <td>Name</td>
            <td>Phone<br>
            Email</td>
            <td>Message/Request</td>
      
                
            </tr>
        </thead>				
				
				  <?php
				  
				  		
		 $allproducts_c = DB::table('contact_us')
            ->orderby('id', "DESC")
        ->get();
        	
			
	
				  
				  
				  $i = 1;?>		
								@foreach ($allproducts_c as $allproduct)


      
        <tbody>
            <tr>
                <td>{{ $i++ }}</td>
               
                <td>{{ $allproduct->name}}</td>
                <td>{{ $allproduct->sub}}<br>{{ $allproduct->email}}</td>
                <td>{{ $allproduct->comment}}</td>
                
            </tr>
            
        </tbody>
        

							                    
                       
							
							@endforeach
							
	    </table>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
