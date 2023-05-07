@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add Categories</a> <a href="#" class="current">Edit Category</a> </div>
      <h1>Categories</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Category</h5>
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

              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category/'. $categories->id) }}" name="add_category" id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}



<div class="control-group">
                  <label class="control-label">Menu Serial (হোম পেইজের এই নম্বর অনুযায়ী মেনু সিরিয়াল হবে)</label>
                  <div class="controls">
                    <input type="number" name="oc" id="cat_name" value="{{ $categories->o_c }}">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Category Name</label>
                  <div class="controls">
                    <input type="text" name="cat_name" id="cat_name" value="{{ $categories->name }}">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Category Lavel</label>
                  <div class="controls">
                    <select name="parent_id" style="width:26%">
                      <option value="0">Main Category</option>
                      @foreach ($lavels as $lavel)
                        <option value="{{ $lavel->id }}" @if ($lavel->id == $categories->parent_id)
                          selected
                        @endif>{{ $lavel->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description" >{{ $categories->description }}</textarea>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url" value="{{ $categories->url }}">
                  </div>
                </div>
                
         
                
     
             
                <div class="control-group">
                   <span style="color:blue"> [<a href="https://www.google.com/search?q={{ $categories->name }} icon" target="_blank" style="color:blue">Googel থেকে {{ $categories->name}} এর আইকন ডাউনলোড এখানে ক্লিক করুন</a>]</span>
                  <label class="control-label">Category Icon</label>
                  <div class="controls">
                    <input type="file" name="image" />
                    <input type="hidden" name="p_image" value="{{ $categories->img }}">
                   
                   <label>
                       Filter 
                       <input type="checkbox" name="filter"  checked   value="1" }}>
                       [নোট: Filter এ টিক না দিলে ইমেজ অটো সাইজ হবে না, সেক্ষেত্রে অবশ্যই 100 x 100px ইমেইজ দিতে হবে]
                   </label>
                  </div>
                </div>
        
                
                
                   
                
               
                
       @if($categories->parent_id == 0)         
       
       
       
                <div style="border:1px solid black; padding:5px">   
                
           <h4>For top Category</h4>     
                          
                <div class="control-group">
                  <label class="control-label">Bangar Img </label>
                  <div class="controls">
                    <input type="file" name="image2" />
                    <input type="hidden" name="p_image2" value="{{ $categories->b_img }}">
                   
                  </div>
                </div> 
                
          
                <div class="control-group">
                  <label class="control-label">Make Top Category</label>
                  <div class="controls">
                    <input type="checkbox" name="top" id="enable"   @if ($categories->top == "1") checked  @endif value="1" }}>
                  </div>
                </div>
                
                
                
                
         
             
        
            </div>           
     @else           
                                <input type="hidden" name="p_image2" value="">
    
   @endif   
   
   
   
    <div class="control-group">
                  <label class="control-label">Enable</label>
                  <div class="controls">
                    <input type="checkbox" name="enable" id="enable"   @if ($categories->status == "1") checked  @endif value="1" }}>
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
