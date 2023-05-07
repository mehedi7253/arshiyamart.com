@extends('layouts.adminLayouts.admin_master')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product</a> </div>
      <h1>Products</h1>
    </div>

    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Product</h5>
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
              @if (Session::has('message_error'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-danger">

                                   <strong style="color:#000">{{ session('message_error') }}</strong>

                               </div>
                             </div>
                       </div>
               @endif
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-banner') }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="control-group">
                  <label class="control-label">Banner Image</label>
                  <div class="controls">
                    <input type="file" name="image" />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Title</label>
                  <div class="controls">
                    <input type="text" name="title" id="product_name">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Link</label>
                  <div class="controls">
                    <input type="text" name="b_link" id="product_code">
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label">Status</label>
                  <div class="controls">
                    <input type="checkbox" name="status" id="status" value="1">
                  </div>
                </div>

                <div class="form-actions">
                  <input type="submit" value="Add Product" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
