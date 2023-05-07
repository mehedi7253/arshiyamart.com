@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
-->      <h1>Edit Bank</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit  Bank</h5>
            </div>
            <div class="widget-content nopadding">
              @if (Session::has('message_success'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-success">

                                   <strong style="color:#000">{{ session('message_success') }}</strong>

                               </div>
                             </div>
                       </div>
               @endif

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-feature1/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


            
                    
      


                <div class="control-group">
                  <label class="control-label">1. Bank Name</label>
                  <div class="controls">
                    <input type="text" name="remark" id="cat_name" value="{{ $categories->remark }}">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">2. A/C No:</label>
                  <div class="controls">
                    <input type="number" name="extra8" id="cat_name" value="{{ $categories->extra8 }}">
                  </div>
                </div>
                
                
                
                
                  <div class="control-group">
                  <label class="control-label">3. Opening Amount </label>
                  <div class="controls">
                    <input type="number" name="extra3" id="cat_name" value="{{ $categories->extra3 }}">
                  </div>
                </div>     
                
                
                                
                  <div class="control-group">
                  <label class="control-label">4. Remark </label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name" value="{{ $categories->extra3 }}">
                  </div>
                </div>      
                
                
                
                     	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
                    
                                       
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Update" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
