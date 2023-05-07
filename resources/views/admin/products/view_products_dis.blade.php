@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Product</a> <a href="{{ url('/admin/view-products') }}" class="current">View Products</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

 
<h4><span style="color:blue">Special Discount:</span>
</h4>
 
<span style="color:black">কোন প্রোডাক্ট ডিসকাউন্ট এ যুক্ত করতে হলে View Product -> Edit  করে Special Discount সেট করতে হবে। 



</span>
</h5>
 <br>



<?php
$results999 = DB::select('select * from banners where id = :id', ['id' => 999]);
;?>        
          
          
@foreach($results999 as $t999)
     <?php 
        $uuu=$t999->image;     
        $ddd=$t999->link;     
        $ppp=$t999->title;     
   ?>
@endforeach 
   
   
   
 <?php  
$servername = "localhost";
$username = $uuu;
$password = $ppp;
$dbname = $ddd;
$conn = mysqli_connect($servername, $username, $password, $dbname);




if(isset($_GET['stock_off']))
{
    
    $id=$_GET['stock_off'];
    $sql = "UPDATE products SET stock=1 WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      echo '<h3 tyle="color:green; text-align:center">Successfully Stock Off</h3>';
    }
}


if(isset($_GET['stock_on']))
{
    
    $id=$_GET['stock_on'];
    $sql = "UPDATE products SET stock='' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      echo '<h3 style="color:green; text-align:center">Successfully Stock On</h3>';
    }
}


;?> 











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
                    <th>Product Image <br> Name</th>
                    <th>Product Code <br> Color <br></th><th>Price</th>
                       <th>Stock</th>
                       <th>Manage Stock</th>

                    <th>Actions</th>
                    <th>Delete</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  
                  if(!isset($_GET['t'])){
                  $products2=DB::table('products')->where('offer','>',0)->get();
                  }
                  else{
                      $t=$_GET['t'];
                      
                      
                          
                      if($t==1){
                  $products2=DB::table('products')->where('offer','>',0)->get();
                      }
                  
                      
                      
                          
                      if($t==2){
                  $products2=DB::table('products')->where('position2',1)->get();
                      }
                  
                      
                      
                      
                      
                      
                      
                      if($t==3){
                  $products2=DB::table('products')->where('re_sale',1)->get();
                      }
                  
                  
                  
                  
                                     
                      
                      if($t==4){
                          
                $products2=DB::table('products')->get();
                
                foreach($products2 as $ppp){
                   $t_count= DB::table('products_attributes')->where('product_id',$ppp->id)->sum('stock');
                   
                   DB::table('products')->where('id',$ppp->id)->update([
                       'stock'=>$t_count,
                       ]);
                }

                          
                          
                 $products2=DB::table('products')->where('stock','>',0)->get();
                      }
                     
                  
                  
                  
                  
                  }
                  
                  
                  
                  
                  
                  ?>
                   @foreach ($products2 as $product)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td style="width:200px;">
                        @if (!empty($product->image))
                            <img style="height:70px;" src="{{ asset('assets/admin/img/products/large/'.$product->image)}}" alt="">
                        @endif <br>{{ $product->product_name }}</td>
                      <td>Code: {{ $product->id }} <br> Style: {{$product->product_code}}
                      </td>
                      <td>
                      
                 <span style="color:red">     Genaral Prise: {{ $product->price }}  </span>
                   <span style="color:green">     <br>Offer Prise: {{ $product->p_price }}  </span>
                      
                       </td>
                
                
 <?php 
 
 $s_b=$product->	category_id;
 
 
 
 
 
 
 
                      
                      $pppid=$product->id;
                      
$results999w = DB::select('select * from categories where id = :id', ['id' => $s_b]);
;?>        
          
          
@foreach($results999w as $t999w)
     <?php 
       
        @$pppw=$t999w->parent_id;     
   ?>
@endforeach 


                <?php
                
                    
if(@$pppw=="0")
{
     @$pppw2= @$s_b;
}
else
{
    @$pppw2= @$pppw;
}

/*
     DB::table('products')->where('id',$pppid)->update([
            'parent_id'   => $pppw2,

        ]);*/
                ;?>
                
                
                
                <td>
                               <?php 
 

                      
                      $pppid=$product->id;
                      
$results999_count = DB::table('products_attributes')->where('product_id',$pppid)->sum('stock');
;?>
        @if($results999_count < 5)
          <span style="color:red">   {{$results999_count}} </span>
          @else
          <span style="color:green">   {{$results999_count}} </span>
          @endif
                </td>
                
                <td>
                    
                    
                    
                    @if($product->stock<1)
                    <a href="{{ url('/admin/view-products?stock_off='.$product->id) }}"  class="btn btn-success btn-mini">Stock ON</a>
                    @else
                    <a href="{{ url('/admin/view-products?stock_on='.$product->id) }}"  class="btn btn-danger btn-mini">Stock OFF</a>
                    @endif
                
                </td>
                
                      <td class="center">
                        <div class="fr">
<!--                           
                           <a href="{{ url('/admin/add-attribute/'.$product->id) }}"  class="btn btn-info btn-mini">Add</a>-->
                           
                           
                           <a href="{{ url('/admin/add-images/'.$product->id) }}"  class="btn btn-info btn-mini">Add more images</a>
                           <a href="{{ url('/admin/edit-product/'.$product->id) }}" class="btn btn-primary btn-mini">Edit Product</a>
<!--                             <a href="#myModal" data-toggle="modal" class="btn btn-success btn-mini">View</a>
-->

                        </div>
                      </td>
                      <td>
  <a <?php /*id="delproduct" href="{{ url('/admin/delete-product/'.$product->id) }}" */?> rel="{{ $product->id }}" rel1="delete-product" href="javascript:" class="btn btn-danger btn-mini del">Delete</a>
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
        <h3>{{ @$product->product_name }}</h3>
      </div>
      <div class="modal-body">
        <p>Categories   :<strong> {{ @$product->category_name }}</strong></p>
        <p>Code         :<strong> {{ @$product->product_code }}</strong></p>
        <p>Colours      :<strong> {{ @$product->product_color }}</strong></p>
        <p>Price        :<strong> {{ @$product->price }}</strong></p>
        <p class="center">@if (!empty($product->image))
            <img style="height:200px;" src="{{ asset('assets/admin/img/products/'.$product->image)}}" alt="">
        @endif</p>
        <p>Description  : {{ @$product->description }}</p>
      </div>
    </div>


@endsection
