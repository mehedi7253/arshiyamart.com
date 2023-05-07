@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Size</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Size</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category4') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}
<span style="color:red">Size Library</span>

                <div class="control-group">
                  <label class="control-label">Size </label>
                  <div class="controls">
                    <input type="text" name="cat_name" id="cat_name">
                  </div>
                </div>
                
                                    <input type="hidden" name="parent_id" value="0" id="cat_name">

                
                
                
                <div class="control-group">
                  <label class="control-label">Enable</label>
                  <div class="controls">
                    <input type="checkbox" name="status" id="status" value="1" checked>
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Submit" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
