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
                  <label class="control-label">All User Number: ()<br> বাল্ক SMS পাঠানোর জন্য
                  নিচের বক্সে একটি ক্লিক করলেই সব সিলেক্ট হয়ে যাবে, তারপর কপি করে নিন। 
                  </label>
                  
                </div>
      
                
                <div class="control-group">
                  
                  <div class="controls">
                    <textarea  onClick="this.setSelectionRange(0, this.value.length)"  name="description" id="description" required="" style="width:130px; height:500px">@foreach ($aa_user as $a_u){{$a_u->phone}} @endforeach</textarea>
                  </div>
                </div>

          
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
