@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
-->      <h1>Brands</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Brands</h5>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category2/'. $categories->id) }}" name="add_category"  novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label">Brand Name</label>
                  <div class="controls">
                    <input type="text" name="cat_name" id="cat_name" value="{{ $categories->name }}">
                  </div>
                </div>
                
                                    <input type="hidden" name="p_image2" id="parent_id" value="0">

               
         
                
               
                <div class="control-group">
                  <label class="control-label">Enable</label>
                  <div class="controls">
                    <input type="checkbox" name="enable" id="enable"   @if ($categories->status == "1") checked  @endif value="1" }}>
                  </div>
                </div>
                
                
                
                <div style="border:1px solid black; padding:5px">   
          <h4>For Home Page Show</h4>
                <div class="control-group">
                  <label class="control-label">Make our Brands & Partners</label>
                  <div class="controls">
                    <input type="checkbox" name="top" id="enable"   @if ($categories->top == "1") checked  @endif value="1" }}>
                  </div>
                </div>
                
                
                
                
        
                <div class="control-group">
                  <label class="control-label">Brands Icon</label>
                  <div class="controls">
                    <input type="file" name="image" />
                    <input type="hidden" name="p_image" value="{{ $categories->img }}">
                   
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
