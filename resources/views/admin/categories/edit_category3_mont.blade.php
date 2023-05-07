@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
-->      <h1>Circular</h1>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category3_mont/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


            
                    
                    
                    
                    
           <div class="control-group">
                  <label class="control-label">Post Name</label>
                  <div class="controls">
                    <input type="text" name="rank_name" id="cat_name" value="{{ $categories->rank_name }}" required="">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">Number of Post</label>
                  <div class="controls">
                    <input type="text" name="extra8" id="cat_name" value="{{ $categories->extra8 }}" required="">
                  </div>
                </div>
                
                
                
                  <div class="control-group">
                  <label class="control-label">Job Type</label>
                  <div class="controls">
                  <select name="extra9" style="width:25%" required="">
                      
                    <option value="">Job Type</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>

                  </select>
                

                  </div>
                </div>   
                
                
                
                
                
                
                  <div class="control-group">
                  <label class="control-label">Monthly Salary</label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name"  value="{{ $categories->extra5 }}" required="">
                  </div>
                </div>     
                
                
                
                
                             
                  <div class="control-group">
                  <label class="control-label">Educational Qualification</label>
                  <div class="controls">
                      <textarea name="extra6" required="">{{ $categories->extra6 }}</textarea>
                  </div>
                </div>     
                   
                   
                   
                   
                   
                              
                             
                  <div class="control-group">
                  <label class="control-label">Exprience (if any)</label>
                  <div class="controls">
                        <textarea name="extra7" required="">{{ $categories->extra7 }}</textarea>
                      </div>
                </div>         
                   
                   
                   
                   
                   
                   
                   
                   
                                          
                             
                  <div class="control-group">
                  <label class="control-label">Date Line (আবেদনের সময়সীমা)</label>
                  <div class="controls">
<input type="date" name="extra13" value="{{ $categories->extra13 }}" required="">
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
