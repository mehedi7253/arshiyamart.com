@extends('layouts.adminLayouts.admin_master')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product Attribute</a> </div>
      <h1>Product Attribute</h1>
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

            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Product Attribute</h5>
            </div>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Details</th>

                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Product Name</td>
                  <td>{{$pro_att->product_name}}</td>

                </tr>
                <tr class="even gradeA">
                  <td>Product Code</td>
                  <td>{{$pro_att->product_code}}</td>

                </tr>
                <tr class="even gradeA">
                  <td>Product Color</td>
                  <td>{{$pro_att->product_color}}</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <form class="form-horizontal" method="post" action="{{ url('/admin/add-attribute/'.$pro_att->id) }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="widget-box">
            <input type="hidden" name="product_id" value="{{ $pro_att->id }}">
            <div class="control-group">
                <div class="field_wrapper">
                  <div>
                      <input required="" type="text" name="sku[]" id="sku" placeholder="SKU"/>
                      <input required type="text" name="size[]" id="size" placeholder="Size"/>
                      <input required type="text" name="price[]" id="price" placeholder="Price"/>
                      <input required type="text" name="stock[]" id="stock" placeholder="Stock"/>
                      <a href="javascript:void(0);" class="add_button" title="Add field">Add Field</a>
                  </div>
                </div>
              </div>

                <div class="form-actions">
                  <input type="submit" value="Add Attribute" class="btn btn-success">
                </div>
              </div>
          </form>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>All Attributges Record</h5>
        </div>
          <div class="widget-content nopadding">
          <form class="" action="{{ url('/admin/edit-attribute/'.$pro_att->id) }}" method="post">
            {{ csrf_field() }}
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Attribute ID</th>
                  <th>SKU</th>
                  <th>Size</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Actions</th>


                </tr>
              </thead>
              <tbody>




                <?php $i = 1;?>
                 @foreach ($pro_att['attribute'] as $attribute)
                  <tr class="gradeX">
                    <td>{{ $i++ }}</td>
                    <td style="width:200px;"> <input type="hidden" name="attrId[]" value="{{ $attribute->id }}"> {{ $attribute->id }}</td>
                    <td>{{ $attribute->sku }}</td>
                    <td>{{ $attribute->size }}</td>
                    <td > <input style="width:60px;" type="text" name="attrPrice[]" value="{{ $attribute->price }}"> </td>
                    <td > <input style="width:60px;" type="text" name="attrStock[]" value="{{ $attribute->stock }}"> </td>
                    <td class="center">

                          <input type="submit" class="btn btn-primary btn-mini" name="submit" value="Update">
                         <a <?php /*id="delattribute" href="{{ url('/admin/delete-attribute/'.$attribute->id) }}" */?> rel="{{ $attribute->id }}" rel1="delete-attribute" href="javascript:" class="btn btn-danger btn-mini del">Delete</a>

                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
            </form>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
