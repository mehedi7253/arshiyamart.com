@extends('layouts.adminLayouts.admin_master')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product Images</a> </div>
      
      
      
      
           <h4 style="padding:10px">Add More Image :</h4>
      
    </div>

    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">

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

                <div class="widget-title"> 
              <h5 >Product Name: <span style="color:red">{{ $pro_att->product_name}}</span></h5>
            </div>


        
          </div>
        </div>
        
        
        <h6 style="color:red"> একাধিক ইমেইজ যুক্ত করার ক্ষেত্রে প্রতিটি ইমেজের সাইজ সর্বোচ্চ 200 কেবি এর মধ্যে রাখবেন। ( উচ্চতা: 600px  ও প্রস্ত 500px  এর মধ্যে থাকলে সাইট দ্রুত লোড হবে।) </h5>
        <form class="form-horizontal" method="post" action="{{ url('/admin/add-images/'.$pro_att->id) }}" name="add_images" id="add_images" novalidate="novalidate" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="widget-box">
            <input type="hidden" name="product_id" value="{{ $pro_att->id }}">
            <div style="margin:0 auto" class="control-group">
                <div   class="field_wrapper">
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr class="odd gradeX">
                      <td style="width:150px;"> <label  for="image">Choose Product Image</label></td>
                      <td><input type="file" name="image[]" id="image" required="" value="Choose Product Image" multiple ></td>

                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

                <div class="form-actions">
                  <input type="submit" value="Add Image" class="btn btn-success">
                </div>
                
                      <div id="breadcrumb" style="margin-left:10px"><span style="color:red"> <b>Quick Link:</b>  </span><a href="{{ url('/admin/add-attribute/') }}/{{ $pro_att->id}}"class="current" style="color:blue">Manager Stock</a> <a href="{{ url('/admin/add-product') }}" class="current" style="color:blue">+ Add New Product</a> </div>
              </div>
          </form>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>All Attributges Record</h5>
        </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product ID</th>
                  <th>Image</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>


                <?php $i = 1;?>
                 @foreach ($productImage as $pro_img)
                  <tr class="gradeX">
                    <td>{{ $i++ }}</td>
                    <td style="width:100px;">{{ $pro_img->product_id }}</td>
                    <td class="center">
                         <img style="height:200px;width:200px;" src="{{ asset('assets/admin/img/products/'.$pro_img->image) }}" alt="">
                         </td>

                    <td class="center">
                      <a <?php /*id="delImg" href="{{ url('/admin/delete-image/'.$pro_img->id) }}" */?> rel="{{ $pro_img->id }}" rel1="delete-image" href="javascript:" class="btn btn-danger btn-mini del">Delete</a>

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
  </div>

@endsection
