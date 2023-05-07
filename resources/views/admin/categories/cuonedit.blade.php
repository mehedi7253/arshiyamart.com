@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Coupon</a> </div>
-->      <h1>Coupon</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Coupon  | <a href="/admin/view_coupon" style="color:blue">view All Coupon</a></h5>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/cuonedit/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label">Coupon Code</label>
                  <div class="controls">
                    <input type="text" name="code" id="cat_name" readonly="" value="{{ $categories->code }}">
                  </div>
                </div>
                
                
                              <div class="control-group">
                <label class="control-label">Discount Type</label>
                <div class="controls">
                  <select name="amount_type" style="width:25%" required="">
                    <option value="{{ $categories->type }}">Select Type</option>
                    <option value="1">Percentage (%)</option>
                    <option value="2">Fixed Tk</option>

                  </select>
                </div>
              </div>
                
                
                
                         
         

              <div class="control-group">
                <label class="control-label">Miminum Shopping </label>
                <div class="controls">
                  <input type="number" name="minimum_shop" id="coupon_code" required="" value="{{ $categories->minimum_shop }}">
                </div>
              </div>
                
                
                


                <div class="control-group">
                  <label class="control-label">Valide Date <span style="color:red">(Formate: YY-MM--DD)</span></label>
                  <div class="controls">
                      
                    <input type="date" name="valide_date" id="cat_name" value="{{ $categories->valide_date }}">
                  </div>
                </div>
                
               
         
         
         
                    <div class="control-group">
                  <label class="control-label">commission</label>
                  <div class="controls">
                    <input type="number" name="commission" id="cat_name" value="{{ $categories->commission }}">
                  </div>
                </div>
                     
         
         
         
         
         

                     
         
                
               
                <div class="control-group">
                  <label class="control-label">Enable (টিক চিহ্ন তুলে দিলে, এই কুপন কোডটি আর কেউ ব্যাবহার করতে পারবেন না)</label>
                  <div class="controls">
                    <input type="checkbox" name="enable" id="enable"   @if ($categories->status == "1") checked  @endif value="1" }}>
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
