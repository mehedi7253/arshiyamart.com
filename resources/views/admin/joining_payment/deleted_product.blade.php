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
              <h5 style="color:red">ডিলেট অপশন বা কোন অপশন কাজ না করলে গুগল ক্রম ব্রাউজার ব্যবহার করতে হবে।</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th>Product Color</th>
                    {{-- <th>Product description</th> --}}
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($products as $product)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td style="width:200px;">{{ $product->product_name }}</td>
                      <td>{{ $product->product_code }}</td>
                      <td>{{ $product->product_color }}</td>
                      {{-- <td>{{ $product->description }}</td> --}}
                      <td>{{ $product->price }}</td>
                      <td style="width:150px;">

                        @if (!empty($product->image))
                            <img style="height:70px;" src="{{ asset('assets/admin/img/products/large/'.$product->image)}}" alt="">
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">
                           <a href="#myModal" data-toggle="modal" class="btn btn-success btn-mini">View</a>
<!--                           
                           <a href="{{ url('/admin/add-attribute/'.$product->id) }}"  class="btn btn-info btn-mini">Add</a>-->
                           
                           
                           <a href="{{ url('/admin/add-images/'.$product->id) }}"  class="btn btn-info btn-mini">Add Images</a>
                           <a href="{{ url('/admin/edit-product/'.$product->id) }}" class="btn btn-primary btn-mini">Edit</a>
                           <a <?php /*id="delproduct" href="{{ url('/admin/delete-product/'.$product->id) }}" */?> rel="{{ $product->id }}" rel1="delete-product" href="javascript:" class="btn btn-danger btn-mini del">Delete</a>

                        </div>
                      </td>
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

    <div id="myModal" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>{{ $product->product_name }}</h3>
      </div>
      <div class="modal-body">
        <p>Categories   :<strong> {{ $product->category_name }}</strong></p>
        <p>Code         :<strong> {{ $product->product_code }}</strong></p>
        <p>Colours      :<strong> {{ $product->product_color }}</strong></p>
        <p>Price        :<strong> {{ $product->price }}</strong></p>
        <p class="center">@if (!empty($product->image))
            <img style="height:200px;" src="{{ asset('assets/admin/img/products/'.$product->image)}}" alt="">
        @endif</p>
        <p>Description  : {{ $product->description }}</p>
      </div>
    </div>


@endsection
