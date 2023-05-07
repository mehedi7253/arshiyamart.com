@extends('layouts.adminLayouts.admin_master2')
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
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-product') }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label"> Select Category </label>
                  <div class="controls">
                    <select name="category_id" id="category_id" style="width:26%" >
                      <?php echo $categories_drop ; ?>
                    </select>
                  </div>
                </div>
                
                
             
                <div class="control-group">
                  <label class="control-label"> Select Position </label>
                  <div class="controls">
                    <select name="position" id="category_id" style="width:26%" required="">
                      <option value="0" disabled selected>Select Position</option>
                      <option value="1">POPULAR</option>
                      <option value="2">Exclusive</option>
                    </select>
                  </div>
                </div>



  <div class="control-group">
                  <label class="control-label">New Arrival (if any)</label>
                  <div class="controls">
                    <input type="checkbox" name="position3" id="status" value="1">
                  </div>
                </div>




  <div class="control-group">
                  <label class="control-label">Special Offer (if any)</label>
                  <div class="controls">
                    <input type="checkbox" name="position2" id="status" value="1">
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label">Product Name</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name" required="">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Product Code</label>
                  <div class="controls">
                    <input type="text" name="product_code" id="product_code" required="">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Product Color (if any) [Ex: Red, Blue]</label>
                  <div class="controls">
                    <input type="text" name="product_color" id="product_color" required="" value="N/A">
                  </div>
                </div>
       
       
       <div class="control-group">
                  <label class="control-label">Product Size (if any) [Ex: 24, 25, 26</label>
                  <div class="controls">
                    <input type="text" name="care" id="product_color" required="" value="N/A">
                  </div>
                </div>
                
      
                
                
                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description" required=""></textarea>
                  </div>
                </div>

              <!--  <div class="control-group">
                  <label class="control-label">Metalial & Care</label>
                  <div class="controls">
                    <textarea name="care" id="care"></textarea>
                  </div>
                </div>
-->
                <div class="control-group">
                  <label class="control-label">Product Sell Price</label>
                  <div class="controls">
                    <input type="number" name="price" id="product_price" required />
                  </div>
                </div>
                
                
                
                <div class="control-group">
                  <label class="control-label" style="color:red">Previous Sell Price (if any)</label>
                  <div class="controls"> 
                    <input type="number" name="p_price" id="product_price">
                  </div>
                </div>
                
                
                
                <div class="control-group">
                  <label class="control-label">Unit (Ex: Kg, Pcs, Set, Etc)</label>
                  <div class="controls">
                    <input type="text" name="unit" id="product_price" required="" value="N/A"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">File upload input</label>
                  <div class="controls">
                    <input type="file" name="image" required="" />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Enable</label>
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
