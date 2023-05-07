@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">






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























          @if (Session::has('message_error'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success" style="background:red">

                               <strong style="color:#000">{{ session('message_error') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif








 <?php 
                  $user_id = Auth::user()->id;
                  $productds=DB::table('orders_products')->where('status',1)->where('user_id',$user_id)->get();
                  $productdccc=DB::table('orders_products')->where('status',1)->where('user_id',$user_id)->count();
                
                
                
                                  
                                  

$i = 1;



$not_ids = DB::table('orders_products')->where('status',1)->where('user_id',$user_id)->pluck('product_id')->all();



if(isset($_GET['qid'])){
      Session::put('qid', $_GET['qid']);
}else{
     Session::put('qid', "");
}

$qid=Session::get('qid');



?>





 @foreach ($productds as $producttt)
            

                   
                   <?php
                   
                   
                   @$t_price+=$producttt->product_price * $producttt->product_qty;
                   ;?>
                   

                  @endforeach
                  
                  









              <h3>Invoice Iime: {{@$productdccc}} | Total Amount: {{@$t_price}}    <a href="createinvoice_user"><button style="background:green; color:white;">Confirm & Next >> </button>   </a> 
              
              <a href=""><button style="background:red; color:white; margin-left:50px"> Cancel All </button></a>
              </h3> 
              
              
              
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
      
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             

              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    
                    <th>Product  Rate & Qty </th>
                      
                    <th> Amount</th>
                    <th> Action</th>


                  </tr>
                </thead>
                <tbody>
                 
                   @foreach ($productds as $productt)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td>
                          
                          {{$productt->product_name}}
                      </td>
                       <td>
                      
                      
                          {{$productt->product_price}} x 
                          {{$productt->product_qty}}

                 
                </td>    
                      
                    
                      
                <td>
                   {{$productt->product_price * $productt->product_qty}}
                   
                   
                   <?php
                   @$t_price+=$productt->product_price * $productt->product_qty;
                   ;?>
                   
                </td>
                
    <td>
                
                
                
               <a href="/admin/createinvoice/{{$productt->id}}">  <button>Cancel</button> </a>
                  
                  
                  
                  
                  
                  
                </td>
                      
                    </tr>
                  @endforeach
                  
                  
                  





                </tbody>
            
              </table>
         
        





















          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            </div>
            <div class="widget-content nopadding">
                
           <form action="/admin/c_invoice_qr" method="POST">
                              @csrf           
                
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th><b>Product Name & Description</b></th>
                    <th>Product Image</th>
                    <th>Warranty</th>
                    <th>Unit</th>
                    <th>Rate</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  
                  
@if(isset($_GET['qid']))
<?php
if($_GET['qid']==999999999999){
$productss=DB::table('products')
->whereNotIn('id',$not_ids)
->whereNull('shop_id')->where('category_id','<',99999)
->get();
}
else{
   $productss=DB::table('products')
->where('category_id',$_GET['qid'])
->whereNull('shop_id')->whereNotIn('id',$not_ids)->where('category_id','<',99999)
->get(); 
}

/*DB::table('orders_products')->insert([
    'user_id'=>$user_id,
    'product_id'=>$request->id,
    'product_qty'=>$request->qty,
    'product_price'=>$request->product_price,
    'product_name'=>$request->product_name,
    'status'=>1
    ]);

*/



?>
@else
<?php
$productss=DB::table('products')
->whereNull('shop_id')->where('category_id','<',99999)
->whereNotIn('id',$not_ids)
->get();
?>
@endif
                  
                  
                  
                  
                   @foreach ($productss as $product)
                                         
                    <tr class="gradeX">
                      
                        
                        
                        
                      <td><h4 style="text-align:center">{{ $i++ }}</h4>
                    <!--  <input type="checkbox" id="yn" name="yn[]" value="1" 
                      style="width: 40px;
                            height: 40px; font-size:50px; background:green" checked>-->
                      </td>
                      <td>
                          

                              
                              <input type="text"  name='product_name[]' required="" value="{{$product->product_name}}"  style="width:300px"><br>
                              <textarea type="text"  name='description[]' required="" style="width:300px; height:200px" >{{$product->description}}</textarea>
                              <input type="hidden"  name='id[]' required="" value="{{$product->id}}" style="width:45px">
                              
                              
        
                          

                           </td>
                      
                       
                      
                      <td>
                        @if (!empty($product->image))
                            <img style="max-width:100px;" src="{{ asset('assets/admin/img/products/large/'.$product->image)}}" alt="">
                        @endif</td>
                      <td><input type="text"  name='warranty[]' required="" value="{{ $product->warranty }}" style="width:80px">
                      </td>
                
                              <td><input type="text"  name='unit[]' required="" value="{{ $product->unit }}" style="width:80px">
                      </td>
                
            <td><input type="text"  name='product_price[]' required="" value="{{ $product->price }}" style="width:80px">
                      </td>
            
            
            
                <td> 
                
                 <input type="number" name="qty[]"  placeholder="Qty"  required="" style="width:80px"><br>
               
                
                </td>

                      
                    </tr>
                    
                    
                    
                  @endforeach

                </tbody>
                
              </table> 
              
              <input type="submit" value="Add to Quotation" style="width:100px; float:right"> 
                </form>
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
