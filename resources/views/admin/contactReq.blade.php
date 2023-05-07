@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Product</a> <a href="{{ url('/admin/view-products') }}" class="current">View Products</a> </div>
      <h1>All Products</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All Categories</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                   
                    <th>Comment</th>
                    <!-- <th>Product Image</th> -->
                    

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($con_reqs as $con_req)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      <td>{{ $con_req->name }}</td>
                      <td>{{ $con_req->email }}</td>
                      <td>{{ $con_req->sub }}</td>
                      <td>{{ $con_req->comment }}</td>
                      
                  
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
