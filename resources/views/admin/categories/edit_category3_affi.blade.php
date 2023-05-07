@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
-->      <h1>Affiliator Rank</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit  Circular</h5>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category3_affi/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


            
                    
                    
                    
                    
           <div class="control-group">
                  <label class="control-label">Rank Name</label>
                  <div class="controls">
                    <input type="text" name="rank_name" id="cat_name" value="{{ $categories->remark }}" required="">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">Total Referall Sale Amount </label>
                  <div class="controls">
                    <input type="text" name="extra1" id="cat_name" value="{{ $categories->extra1 }}" required="">
                  </div>
                </div>
                
                
              
                       
                <div class="control-group">
                  <label class="control-label">Instant Incentive </label>
                  <div class="controls">
                    <input type="text" name="extra2" id="cat_name" value="{{ $categories->extra2 }}" required="">
                  </div>
                </div>
                
                       
                          <div class="control-group">
                  <label class="control-label">Award </label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name" value="{{ $categories->extra5 }}" >
                  </div>
                </div>    
              
              
              
              
              
                   
                          <div class="control-group">
                  <label class="control-label">Monthly Salary (if any) </label>
                  <div class="controls">
                    <input type="text" name="extra3" id="cat_name" value="{{ $categories->extra3 }}" >
                  </div>
                </div>      
              

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
