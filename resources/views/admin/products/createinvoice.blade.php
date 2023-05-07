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
                  
                  









              <h3>Invoice Iime: {{@$productdccc}} | Total Amount: {{@$t_price}}    <a href="createinvoice_user"><button> Next </button>   </a> 
              
              <a href=""><button style="float:right; background:red; color:white"> Cancel All </button></a>
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
              <h3>All Products:</h3>
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color:red"> নিচের তালিকা থেকে পরিমাণ (Qty) দিয়ে   ইনভয়েজ  প্রডাক্ট  যুক্ত করুন।</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Select</th>
                    
                    <th>Product Image <br> Name</th>
                    <th>Product Code <br> Color <br> Price</th>



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
                      <td>{{ $i++ }}</td>
                      <td>
                          
                          <form action="/admin/c_invoice" method="POST">
                              @csrf
                              
                              <input type="number"  name='product_price' required="" min="1" value="{{$product->price}}" style="width:150px">
                              <input type="hidden"  name='product_name' required="" value="{{$product->product_name}}" style="width:55px">
                              <input type="hidden"  name='id' required="" value="{{$product->id}}" style="width:45px">
                              
                              <input type="number" name="qty"  placeholder="Qty" min="1" required="" style="width:45px">
                              
                              
                              <input type="submit" value="Add Product">
                              
                          </form>
                          
                          

                           </td>
                      
                       
                      
                      <td style="width:200px;">
                        @if (!empty($product->image))
                            <img style="height:70px;" src="{{ asset('assets/admin/img/products/large/'.$product->image)}}" alt="">
                        @endif <br>{{ $product->product_name }}</td>
                      <td>{{ $product->product_code }}<br>{{ $product->product_color }}<br>BDT: {{ $product->price }}  
                      
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
