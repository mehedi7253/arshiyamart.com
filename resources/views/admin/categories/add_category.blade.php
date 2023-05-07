@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
      <h1>Categories</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Category</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}

<span style="color:red">কোন ক্যাটাগরিকে টপ ক্যাগরি করতে চাইলে, ক্যাটাগরি এ্যাড করার পর View Category থেকে আইকন ও ব্যানার যুক্ত করতে হবে</span>
                <div class="control-group">
                  <label class="control-label">Category Name</label>
                  <div class="controls">
                    <input type="text" name="cat_name" id="cat_name">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Category Lavel</label>
                  <div class="controls">
                    <select name="parent_id" style="width:26%">
                      <option value="0">Main Category</option>
                      @foreach ($lavels as $lavel)
                        <option value="{{ $lavel->id }}">{{ $lavel->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
               

                <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url">
                  </div>
                </div>
                
                <div class="form-actions">
                  <input type="submit" value="Create" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
