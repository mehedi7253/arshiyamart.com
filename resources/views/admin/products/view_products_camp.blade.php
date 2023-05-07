@extends('layouts.adminLayouts.admin_master2')
@section('content')







<?php
                @$campd=DB::table('users')->where('id',1)->first();
                $aj_date=date('Y-m-d');
                ;?>
                 @if(!empty($campd->extra13))
                 @if($aj_date > $campd->extra13 )
                 <?php
                       $allproducts_end=DB::table('products')->where('position2',1)->get();
                 ?>
                    @foreach($allproducts_end as $cend)
                       
                        @if($cend->p_price > $cend->price)
                        <?php
                         DB::table('products')->where('id',$cend->id)->update([
                             'position2'=>"",
                             'price'=>$cend->p_price,
                             'p_price'=>"",
                             'offer'=>"",
                             ]);
                        ?>
                        @else
                        
                        <?php
                         DB::table('products')->where('id',$cend->id)->update([
                             'position2'=>"",
                             'p_price'=>"",
                             'offer'=>"",
                             ]);
                        ?>
                        
                        @endif
                        
                        
                    @endforeach
                 
                 
                 @endif
                 @endif
          











  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Product</a> <a href="{{ url('/admin/view-products') }}" class="current">View Products</a> </div>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

 
<h4 style="color:blue; text-align:center"><span style="color:blue">Campaign:</span>
</h4>
<div style="font-size:130%; text-align:center; width:90%; margin:auto">
Campaign ও Special এর পার্থক্য হলো : উভয় প্রোডাক্ট এ ডিসকাউন্ট আছে, কিন্তু Campaign এর অন্তভুক্ত প্রোডাক্টগুলো নির্দিষ্ট সময় পর, ডিসকাউন্ট উঠে যাবে, পূর্বের প্রাইজে চলে আসবে। 
<span style="color:red">
    বিষয়টি ক্লিয়ার হওয়ার জন্য অনুগ্রহ করে একটি প্রোডাক্ট ক্যাম্পিং  ও টাইম সেট করে টেস্ট করে দেখার অনুরোধ রইল।
</span>


<br>নিচের অপশন থেকে Campaign টাইম সেট করা যাবে, আর কোন প্রোডাক্টকে ক্যাম্পিং এ 

যুক্ত করতে হলে View Product > Edit অপশনে থেকে ক্যাম্পিং ও ডিসকাউন্ট সেট করতে হবে। 
</div>

<div style="width:280px; padding:10px; border:1px dashed black; margin:auto">
    <h5 style="text-align:center">Update Campaign Date</h5>
    
<form action="" method="get">
    @csrf
    <input type="date" name="ud"  style="width:270px;" required=""><br>
        
        <input type="submit" value="Update Campaign Date" style="width:275px;">
</form>

</div>

<?php



if(isset($_GET['ud'])){


                    DB::table('users')->where('id',1)->update([
                    'extra13'=>$_GET['ud'],
                    ]);



}






@$camp=DB::table('users')->where('id',1)->first();
$date=date('Y-m-d');
;?>



<h4 style="color:blue; text-align:center">

@if(empty($camp->extra13))
 এখন  পর্যন্ত কোন ক্যাম্পিং এর সময় নির্ধারণ করা হয়নি।

@else
 {{ @$camp->extra13}} তারিখ পর্যন্ত ক্যাম্পিং চলবে। 
 
 
 
 
 
        @if($date > $camp->extra13 )
    <span style="color:red">    (ক্যাম্পিং এর মেয়াদ শেষ হয়েছে।)
        </span> 
        
        @else
        
        
        <?php
        $date=date_create("$camp->extra13");
 $end_d=date_format($date,"M d, Y d H:i:s");
//Jan 5, 2024 15:37:25
        ;?>
         <p id="demo" style="color:red"></p>
        
        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{$end_d}}").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + " দিন " + hours + "ঘন্ট "
          + minutes + " মিনিট " + seconds + " সে.";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
        
        @endif
        
        
        
        
        
        
        
        
@endif
</h4>


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
