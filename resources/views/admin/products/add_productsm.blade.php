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
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-productm') }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}

		<?php
		
        $bangladesh_n_p = DB::table('products')
        ->orderby('id', 'DESC')
        ->limit(1)
        ->get();
        
        
        ?>




             
                
           





                <div class="control-group">
                  <label class="control-label">Medicine Name</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name" required="">
                  </div>
                </div>


 
                <div class="control-group">
                  <label class="control-label">Company Name</label>
                  <div class="controls">
                    <input type="text" name="brands" id="product_name" required="">
                  </div>
                </div>







               <!-- <div class="control-group">
                  <label class="control-label">Product Code</label>
                  <div class="controls">
                    <input type="text" name="product_code" id="product_code" required="">
                  </div>
                </div>-->

  
                
                
                <div class="control-group">
                  <label class="control-label">Description (যেমন কত পাওয়ার, কার্যকারীতা ইত্যাদি যদি থাকে)</label>
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
                  <label class="control-label">Medicine Price</label>
                  <div class="controls">
                    <input type="number" name="price" id="product_price" required />
                  </div>
                </div>
                
                
  <div class="control-group">
                  <label class="control-label" style="color:red">Special Offer (Discount )</label>
                  <div class="controls">
                    <input type="number" name="offer" id="status"><span style="color:red">%</span>
                  </div>
                </div>



                
                <div class="control-group">
                  <label class="control-label">Unit (Ex: এক পাতা, এক বক্স, একটি)</label>
                  <div class="controls">
                    <input type="text" name="unit" id="product_price" required="">
                  </div>
                </div>

         

                    <input type="hidden" name="status" id="status" value="1" checked>
                 

                <div class="form-actions">
                  <input type="submit" value="Add Medicine" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_child_id.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>


