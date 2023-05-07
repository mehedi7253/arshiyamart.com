@extends('layouts.adminLayouts.admin_master2')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories') }}">View Coupons</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Coupons</a> </div>
    <h1>Coupons</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
      
      
          @if(Session::has('message_success'))

          <div class="controls">
              <div class="alert alert-success">

                  <strong style="color:#000">{{ session('message_success') }}</strong>

              </div>
            </div>
          @endif
          
          
          
            
          @if(Session::has('message_err'))

          <div class="controls">
              <div class="alert alert-success" style="background:red">

                  <strong style="color:white">{{ session('message_err') }}</strong>

              </div>
            </div>
          @endif
              
          
          
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Coupons</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add_coupon') }}" name="add_coupon" id="add_coupon">
              {{ csrf_field() }}


              <div class="control-group">
                <label class="control-label">Coupon Code</label>
                <div class="controls">
                  <input type="text" name="coupon_code" id="coupon_code" required="">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Miminum Shopping <br> (সর্বনিম্ন কত টাকার শপিং করলে প্রয়োজ্য হবে)</label>
                <div class="controls">
                  <input type="number" name="minimum_shop" id="coupon_code" required="">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Discount Type</label>
                <div class="controls">
                  <select name="amount_type" style="width:25%" required="">
                    <option value="">Select Type</option>
                    <option value="1">Percentage (%)</option>
                    <option value="2">Fixed Tk</option>

                  </select>
                </div>
              </div>



              <div class="control-group">
                <label class="control-label">Amount</label>
                <div class="controls">
                  <input type="number" name="amount" id="amount" required="">
                </div>
              </div>







              <div class="control-group">
                  <label class="control-label">Expire Date</label>
                  <div class="controls">
                    <input type="date" name="expiry_date" id="expairDate" required="">
                  </div>
              </div>

  
              <div class="form-actions">
                <input type="submit" value="Validate" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
      
      
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

</script>
@endsection
