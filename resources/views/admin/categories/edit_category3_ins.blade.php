@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
-->      <h1>Edit Rank</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Rank</h5>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category3_ins/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label">Shopping Amount</label>
                  <div class="controls">
                    <input type="number" name="monthly_value" id="cat_name" value="{{ $categories->monthly_value }}">
                  </div>
                </div>
                
                                   
                                   
           
                <div class="control-group">
                  <label class="control-label">Rank</label>
                  <div class="controls">
                    <input type="text" name="rank" id="cat_name" value="{{ $categories->rank_name }}">
                  </div>
                </div>
                                        
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                       
                <div class="control-group">
                  <label class="control-label">Instant Comission</label>
                  <div class="controls">
                    <input type="number" name="comission" id="cat_name" value="{{ $categories->comission }}">
                  </div>
                </div>
                
                
                
                
                                         
                                       
                <div class="control-group">
                  <label class="control-label">Shopping Comission (শুধু ইংরেজীতে সংখ্যা লিখতে হবে, % লেখার প্রয়োজন নেই) </label>
                  <div class="controls">
                    <input type="number" name="comission2" id="cat_name" value="{{ $categories->comission2 }}">%
                  </div>
                </div>          
                
                
                
                
                
                
                     <div class="control-group">
                  <label class="control-label"> Gift/Award (in any)  </label>
                  <div class="controls">
                    <input type="text" name="comission3" id="cat_name" max="50" value="{{ $categories->extra5 }}">
                  </div>
                </div>
                 
              
              
              
                                  <div class="control-group">
                  <label class="control-label"> Monthly Salary/Comission  (খালি রাখতে চাইলে এটাতে  0 লিখতে হবে) </label>
                  <div class="controls">
                    <input type="number" name="comission4" id="cat_name" max="50" required="" value="{{ $categories->extra3 }}">  
                    <select name="comission5" required="">
                        
@if($categories->extra1 == 1)
<option value="1">Fixed</option>
@endif

@if($categories->extra1 == 2)
                        <option value="2">Persent</option>
@endif

@if($categories->extra1 == 3)
                        <option value="3">N/A (if Salary is 0 )</option>
@endif

                        <option value="">Select Type</option>
                        <option value="1">Fixed Tk</option>
                        <option value="2">Persent</option>
                        <option value="3">N/A (if Salary is 0 )</option>
                        </select>
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
