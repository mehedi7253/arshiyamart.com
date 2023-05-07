@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>Coupon</h1>
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
              <h5>All Coupon <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
          						
		  <thead>
            <tr style="background:silver; color:black">
            <td>SL</td>
            <td>Code</td>
            <td>Comission</td>
            <td>Mimimun <br>Amount</td>
            <td>Valide Date</td>
            <td>Edit</td>
               
                
            </tr>
        </thead>				
				
				  <?php
				  
				  		
		 $allproducts_c = DB::table('cupon_code')
            ->orderby('id', 'DESC')
        ->get();
        	
			
	
				  
				  
				  $i = 1;?>		
								@foreach ($allproducts_c as $allproduct)


      
        <tbody>
            <tr>
                <td>{{ $i++ }}</td>
                <td>
                    
                    @if($allproduct->status ==2)
                    <span style="color:red">{{ $allproduct->code}} (Disable)</span>
                    @else
                    
                    <span style="color:green">{{ $allproduct->code}} </span>
                    @endif
                    
                    </td>
             
                <td>{{ $allproduct->commission}} 
                @if($allproduct->type == 2)
                TK
                @else
                %
                @endif
                
                </td>
                <td>{{ $allproduct->minimum_shop}}</td>
                <td>{{ $allproduct->valide_date}}</td>
                <td><a href="{{url('/')}}/admin/cuonedit/{{$allproduct->id }}">Edit</a></td>
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
