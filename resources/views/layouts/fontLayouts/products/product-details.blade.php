@extends('layouts.temp2.master')

<title>
    {{ $pro_details->product_name }} @ {{ $pro_details->price  }} Tk.
</title>
  
<meta name="Description" content="{{ $pro_details->meta_description }}" />
      <meta name="keywords" content="{{ $pro_details->meta_key }}">

                            <div style="display: none;">
                            <img class="img-center" src="{{ asset('assets/admin/img/products/large/'.$pro_details->image) }}" alt="">
                          </div>


      <?php 
      session_start();
if(isset($_GET['ref']))
{

    $ref22=$_GET['ref']; 
    $ref=substr($ref22,4);
    
    $_SESSION['s_ref']=$ref;

}
if(!empty($_SESSION['s_ref']))
{
        $s_ref=$_SESSION['s_ref']; 

}
?>
    


@section('content')
<body onload="myFunctionld()">
 

  @include('layouts.temp2.nav')
  

  
  <!-- catg header banner section -->
  {{-- <section id="aa-catg-head-banner">
   <img src="{{ asset('assets/temp2') }}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Men </h2>
        {{-- <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Product</a></li>
          <li class="active">T-shirt</li>
        </ol> --}}
      {{-- </div>
     </div>
   </div>
 </section> --}} 
  <!-- / catg header banner section -->







<?php

$results37 = DB::select('select * from banners where id = :id', ['id' => 37]);

    ;?>        
          




@foreach($results37 as $t37)
     <?php 
        $image37=$t37->image;     
     ;?>
@endforeach




	    
<?php

     $bg_t_c=$image37;
       
?> 


<?php
$urla=$_SERVER['SERVER_NAME'];
?>


  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="aa-product-view-slider">
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">

                        <div class="simpleLens-big-image-container" ><a data-lens-image="{{ asset('assets/admin/img/products/small/'.$pro_details->image) }}" class="simpleLens-lens-image"style="width:100%; height:100%"><img src="{{ asset('assets/admin/img/products/small/'.$pro_details->image) }}" class="simpleLens-big-image"></a></div>

                      </div>

                      <div class="simpleLens-thumbnails-container">
                        <ul>
                          <li style="display:inline-block">
                            <a data-big-image="{{ asset('assets/admin/img/products/small/'.$pro_details->image) }}"data-lens-image="{{ asset('assets/admin/img/products/small/'.$pro_details->image) }}" class="simpleLens-thumbnail-wrapper" href="#">
                              <img src="{{ asset('assets/admin/img/products/small/'.$pro_details->image) }}" style="height: 50px;width: 30px;display: block">
                            </a>
                          </li>
                          @foreach ($pro_att_img as $product_img)
                          <li style="display:inline-block"><a data-big-image="{{ asset('assets/admin/img/products/'.$product_img->image) }}"data-lens-image="{{ asset('assets/admin/img/products/'.$product_img->image) }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="{{ asset('assets/admin/img/products/'.$product_img->image) }}" style="height: 50px;width: 30px;display: block">
                          </a>
                        </li>
                        @endforeach
                        </ul>


                      </div>

                    </div>
                  </div>
                </div>
                <form class="cartForm" name="cartForm" action="{{ url('/add-cart') }}" method="post">
              {{ csrf_field() }}
              
              @if($pro_details->offer > 0)
              <?php
              $oooo=$pro_details->offer;
              ?>
              @else
               <?php
              $oooo=0;
              ?>
              
              @endif

<script>
function myFunctionld(){    

          sessionStorage.setItem("color1", 0);
          sessionStorage.setItem("size1", 0);
          sessionStorage.setItem("offer", {{$oooo}});

          
          

}
</script>


              <input type="hidden" name="product_id" value="{{ $pro_details->id }}">
              <input type="hidden" name="product_name" value="{{ $pro_details->product_name }}">
              <input type="hidden" name="product_code" value="{{ $pro_details->id }}">
              
              
              
              
              
              
<!--              <input type="hidden" name="product_color" value="{{ $pro_details->product_color }}">
-->              <input type="hidden" name="price" id="price" value="{{ $pro_details->price }}">
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{ $pro_details->product_name }}</h3>
                    <div class="aa-price-block">
                        
                        
                        
                                              <p class="aa-product-avilability">Product Code: <span>NCB{{ $pro_details->id }} </span></p>
                                              

                                              
                                              
        <?php
                                              $size_co=DB::table('products_attributes')->where('product_id',$pro_details->id)->count();
                                              $size_co_stock=DB::table('products_attributes')->where('product_id',$pro_details->id)->sum('stock');

        ;?>                                       
                                                  <input type="hidden" name="re_sale" value="{{ $pro_details->re_sale }}">
         
                                                  
                                          <span style="font-size:150%">   
                                             @if($pro_details->stock!=1)  
                                             
                                                
                                                @if($size_co > 0)
                                                  @if($size_co_stock > 0)
                                                        Stock: <span style="color:green">       Available</span><br>
                                                          <?php
                                                          $ssstoc=1;
                                                          ?>
                                                        @else
                                                        Stock: <span style="color:red">         Unavailable</span><br>
                                                           <?php
                                                          $ssstoc=2;
                                                          ?>
                                                       
                                                   @endif   
                                               @else
                                                  Stock: <span style="color:green">       Available</span><br>
                                                   <?php
                                                          $ssstoc=1;
                                                          ?>
                                               @endif
                                               
                                               
                                               
                                               
                                               
                                             @else
                                             Stock: <span style="color:red">         Unavailable</span><br>
                                                          <?php
                                                          $ssstoc=2;
                                                          ?>
                                             @endif
                                            </span>    
                                              
                                              @if(!empty($pro_details->grantee))             
                        <sapn> <i class="fa fa-check" aria-hidden="true" style="color:green"></i>
 <b>Grantee:</b> <span style="color:red">{{$pro_details->grantee}}</span></sapn><br>
 @endif
 
 @if(!empty($pro_details->warranty))   
                        <sapn><i class="fa fa-check" aria-hidden="true" style="color:green"></i>
 <b>Warranty:</b> <span style="color:red"> {{$pro_details->warranty}}</sapn></sapn><br><br>
  @endif               
                     
                                              
                                              
                                              
                 
                           
 @if($size_co == 0)
        
                   <input type="hidden" name="price" id="price" value="{{ $pro_details->price }}">

                                              
                @if(!empty($pro_details->p_price))
                <span class="aa-product-price" style="font-size:110%; color:red"><del>Tk {{ $pro_details->p_price }} </del></span>
                              @endif
                      <span class="aa-product-view-price"style="font-size:130%">  TK : {{ $pro_details->price }} 
                @if($pro_details->unit !="N/A")

                      ({{ $pro_details->unit }})
                 @endif     
                      </span><br>
  
  @endif
  
  
           
                                              
                                
                           @if($size_co > 0)
                          
                      <label><span style="font-size:150%" id="qtyy233">
                          
@if($pro_details->offer > 0)
                <span class="aa-product-price" style="font-size:102%; color:red"><del>Tk {{ $pro_details->p_price }} </del></span>
                
                 <span class="aa-product-view-price"style="font-size:100%">  TK : {{ $pro_details->price  }} 

@else
                      <span class="aa-product-view-price"style="font-size:100%">  TK : {{ $pro_details->price  }} 

@endif
                @if($pro_details->unit !="N/A")

                      ({{ $pro_details->unit }})
                 @endif     
                   </span><br>                        

                          
                      <label>Quantity: </label>
                      <input type="text" name="quantity7333" value="1" min="1" max="20" style="width:60px; font-size:20px" id="Qtyy" />
                      </span></label>
                      
                      
                    <div class="aa-prod-quantity">

      
                                  

                      
                <input type="hidden" name="quantity333" value="1" min="1" max="20" style="width:60px; font-size:20px" id="Qtyy" />
                
                   
                
                    </div>  
                      
 @else
   
                    <div class="aa-prod-quantity">

                
                      <label>Quantity: </label>
                      
                      
                <input type="number" name="quantity" value="1" min="1" max="20" style="width:60px; font-size:20px" id="Qtyy" required/>
                
                   
                
                    </div>  
  @endif
                    
                   
              
               
              
              
              
              
              
              
              
                   
                   
                   
                   <?php
                   
                   $size_co=DB::table('products_attributes')->where('product_id',$pro_details->id)->where('stock','>',0)->count();
                   
                   $size_all=DB::table('products_attributes')->where('product_id',$pro_details->id)->where('stock','>',0)->groupBy('size')->get();
                   
                   
                   ;?>
                   
                   
                               @if($size_co>0)
                               <br>
                               Available Size: 
         
         
         
         
         
                               
         
@foreach($size_all as $keyc)  <sapn style="background:silver; color:balck; padding:2px; margin-left:5px; border-radius:4px"> 
    <input type="radio" id="C{{$keyc->size}}" onchange="Size{{$keyc->size}}()" name="size" value="{{$keyc->size}}" required="">
  
  
  
<label for="C{{$keyc->size}}">
   <?php   @$color=DB::table('brands4')->where('id',$keyc->size)->first();
   ?>
      {{@$color->name}}
      </label>
      
      </sapn>

  <script>
    
function Size{{$keyc->size}}(){
         var size1 = document.getElementById("C{{$keyc->size}}").value;
         document.getElementById("Qtyy").value ='';
         
         
         
         var color1 = sessionStorage.getItem("color1");
         var offer = sessionStorage.getItem("offer");
         
         sessionStorage.setItem("size1", size1);




  $.ajax({
               url:'https://{{$urla}}/cart_action_avilable.php?pid={{$pro_details->id}}&pcolor='+color1+'&offer='+offer+'&psize='+size1,
                        success:function(response){
                        $('#qtyy233').html(response);


                                                
                        }
                        
        });


    
}
    
</script>
  
@endforeach                            
                               
                               
                            
                          @endif        
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
<!--     Color_work                     
-->                          
                          
                          
                          
   
                   <?php
                   
                   $size_co=DB::table('products_attributes')->where('product_id',$pro_details->id)->where('stock','>',0)->count();
                   
                   $size_all=DB::table('products_attributes')->where('product_id',$pro_details->id)->where('stock','>',0)->groupBy('sku')->get();

                   
                   ;?>
                   
                   
                               @if($size_co>0)
                               <br>
                               Available Color: 
         
         
         
         
         
                               
         
@foreach($size_all as $keyc)  <sapn style="background:; color:{{$keyc->sku}}; padding:2px; margin-left:5px; border-radius:4px"> 
    <input type="radio" id="C{{$keyc->sku}}" onchange="Size{{$keyc->sku}}()" name="product_color" value="{{$keyc->sku}}" required="">
  <label for="C{{$keyc->sku}}">
   <?php   @$color=DB::table('brands3')->where('id',$keyc->sku)->first();
   ?>
      {{@$color->name}}
      </label>
  </sapn>

  <script>
    
function Size{{$keyc->sku}}(){
         var color1 = document.getElementById("C{{$keyc->sku}}").value;
         document.getElementById("Qtyy").value ='';
         
         
         
         var size1 = sessionStorage.getItem("size1");
                  var offer = sessionStorage.getItem("offer");

         sessionStorage.setItem("color1", color1);
          



  $.ajax({
               url:'https://{{$urla}}/cart_action_avilable.php?pid={{$pro_details->id}}&pcolor='+color1+'&offer='+offer+'&psize='+size1,
                        success:function(response){
                        $('#qtyy233').html(response);
                      
                        }
                        
        });


    
}
    
</script>
  
@endforeach                            
                               
                               
                            
                          @endif                                    
                          
                          
                          
                          
                          
                          
                          
                          
                          
        <!--              <p class="aa-product-avilability">Avilability: <span>@if($total_stock>0) In Stock @else Out of Stock  @endif</span></p>-->
                    </div>

  @if (Session::has('message_error'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-danger">

                                   <strong style="color:#000">{{ session('message_error') }}</strong>

<a href="/cart" style="color:blue"> View Cart Page</a>
                               </div>
                             </div>
                       </div>
               @endif     
                       
                       
                       
                       
           @if (Session::has('message_sss'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-danger" style="background:white">

                                   <strong style="color:black">{{ session('message_sss') }}</strong>

<a href="/cart" style="color:#2B08F0"> View Cart Page</a>
                               </div>
                             </div>
                       </div>
               @endif                 

                   
                    <div class="aa-prod-view-bottom" >
                      @if ($total_stock<1000000)
                      
                      
                      
                      
                        @if($ssstoc==2)
                  <div style="background:red; color:white; width:100px; float:left; padding:10px; margin-bottom:20px">
                    Stock Off
                  </div>
                  
                              
                              <a href="/contact-us?id={{$pro_details->id}}&product_name={{$pro_details->product_name}}">
                              
                              <div style="background:green; color:white; width:100px; padding:10px; margin-left:30px; float:left; margin-bottom:20px; text-align:center">
                    Request 
                  </div>      
                  
                  </a>
                  
                  
                     
                        @else
                  <input name="order_bt" id="cartBtn" type="submit" class="btn btn-fefault cart" value="Order Now"
                    
                     style="background:#66C2F1; color:black; margin-bottom:20px; width:40%"
                  /> 
                         
                         
                         
                       <button name="cart_bt"  id="cartBtn" type="submit"class="btn btn-fefault cart" style="background:red; color:white; margin-bottom:20px;width:40%">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                  </button>       
                         
                        @endif
                        
                
                  
             
             
             
   <span>
       
    <?php
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
?>

<br>


<?php
/*
echo '<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$actual_link.'&layout=button_count&size=large&mobile_iframe=true&width=100&height=30&appId" width="100" height="30" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';

*/
?>        
          
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-611cbc9831857c72"></script>



<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
   
   </span>
   
            
               
             
             
             
                  
              
                  
                  
                @endif
                
                
    
    
    
    
                
       @if (!empty(Auth::check()))    
             <?php
               $main_iiddss=Auth::user()->id;
               $main_nnn=Auth::user()->name;
               $affiliate_com=Auth::user()->affiliate_com;
             ;?>
             
            @if($affiliate_com > 0)
            <div class="text-center" style="border:1px dashed black; border-radius:4px">
                <h4 style="color:blue">Hi <b>{{$main_nnn}}!</b> your Affiliate Link</h4>
                
                <h4 id="hhhe" style="display:none;color:white; background:green; padding:0px 0px; text-align:center; text-align:center">লিংক কপি হয়েছে, এখন বন্ধুদের শেয়ার করুন। 


</h4>
                
          <input type="text" value="{{url('/product')}}/{{$pro_details->id}}?ref=8820{{$main_iiddss}}" style="width:98%; font-size:80%" id="myInputc">
            <h4 onclick="myFunctioncaf()" style="width:100%;  background:silver; border-radius:6px"> Copy Affiliate Link <br> (এখানে ক্লিক করে কপি করুন) 
            </h4>
         
            

         
</div>
            <script>
 
function myFunctioncaf() {
 var copyText = document.getElementById("myInputc");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  
  
     $("#hhhe").show();
  
}
</script>
            
            @endif
             
             
             @endif
    
    
                
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
           
           
           
           
           
           
           
      @if(!empty($pro_details->extra5))         
           
                  
           <div class="row com_add" style="text-align:center">
               <h4>Product Video</h4>
                <iframe width="500" height="350" src="https://www.youtube.com/embed/{{$pro_details->extra5}}" 
                 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen></iframe>
                   
           </div>
              
           
           
           
                      
           <div class="row mob_add" style="text-align:center">
                              <h4>Product Video</h4>

                <iframe width="300" height="200" src="https://www.youtube.com/embed/{{$pro_details->extra5}}" 
                 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen></iframe>
                   
           </div>
   @endif       

           
           
           
           
           
                       
            
                
           
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Product Description</a></li>
                <!-- <li><a href="#review" data-toggle="tab">Reviews</a></li> -->
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>{!! nl2br($pro_details->description) !!}</p>
                  
                 
                 
               @if(!empty($pro_details->brand))  
                 
                @if($pro_details->brand !="N/A")
                 <p>Brand: {{ $pro_details->brand }}</p>
                 @endif       

                 
              @endif    
                  
                </div>

              </div>
            </div>
            
          
          
          
           <?php
                     
                                          //foreach ($relatedProducts->chunk(10) as $rel_product)


            ?>
                     
          
          
          
       <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
               <div class="col-lg-12 col-md-10 col-sm-10 col-md-push-0">
   @if (!empty($relatedProducts))
 <hr>
              <h4 style="color:red; text-align:center"> Related Products </h4>
              <hr>
         @endif  
                      <ul class="aa-product-catg">
                      
                    
                    
                     @foreach ($relatedProducts->chunk(10) as $rel_product)

                        @foreach($rel_product as $product)
                        

                                       
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" alt="Img error"></a>
                       </div>
                          <div class="com_add">
                            <a class="aa-add-card-btn" href="{{ url('/product/'.$product->id) }}" style="height:20%; background:{{$bg_t_c}}; color:white;text-transform: capitalize; ">{{ $product->product_name }}<br>{{ $product->price }} Tk   @if($product->unit !="N/A")({{ $product->unit }})@endif<br>
                            <!--<span style="color:black"><?php $detailsp=$product->description; $detailsp2=substr($detailsp,0,230)?>{!! nl2br($detailsp2) !!} </span>--></a>

                           </div>
                           

                                                    
                            
                            
                              <figcaption>
                              <h4 class="aa-product-title" style="height:50px">{{ $product->product_name }}</h4>
                              @if(!empty($product->p_price))
                                                            <span class="aa-product-price" style="font-size:80%; color:red;"><del>{{ $product->p_price }} Tk</del></span><br>
                              @else
                                                                                          <span class="aa-product-price" style="font-size:80%; color:red;"></span><br>

                              @endif
                              
                          <span class="aa-product-price" style="color:black">{{ $product->price }} Tk
           @if($product->unit !="N/A")
                         
                            <span style="font-size:80%">  ({{ $product->unit }})</span>
            @endif                  
                              
                              </span><!-- <span class="aa-product-price"><del>$65.50</del></span> -->
                            </figcaption>
                            
      @if($product->stock==1)
      <?php
      $product1=1;
      ?>
      @else
      <?php
      $product1=0;
      ?>
      @endif
 
 
       @if($product->care !="N/A")
      <?php
      $product2=0;
      ?>
     @else
      <?php
      $product2=0;
      ?>
      @endif
      
      
      
       @if($product->product_color !="N/A")
      <?php
      $product3=0;
      ?>
     @else
      <?php
      $product3=0;
      ?>
      @endif
      
      
      
      
      <?php
      @$product4=$product1+$product2+$product3;
      ?>
                                    
                              @if($product4 > 0)
                              
                             <div class="" style="background:{{$bg_t_c}};  padding:2px">
                               <a href="{{ url('/product/'.$product->id) }}" style="color:white"> <span class="fa fa-eye"> </span>  
                               Details
                              </a>
                              </div>
                              @else     
                              
                              <a href="{{ url('/fav?f='.$product->id) }}">
                                  <div class="" style="background:{{$bg_t_c}};  padding:1px 0px; width:15%; margin-left:-1px; margin-right:1px; float:left">
                                   <span style="color:white; font-size:80%"><span class="fa fa-heart-o"></span> 
                                   </span>
                                   </div>
                               </a>
                              
                              
                              <div class="" style="background:{{$bg_t_c}};  padding:1px 0px; width:35%; margin-left:5px;border-left:1px solid white; border-right:1px solid white; margin-right:1px; float:left">
                             <a href="{{ url('/product/'.$product->id) }}" style="color:white; font-size:65%"><span class="fa fa-eye"></span> 
                              Details
                               </a>
                               </div>
                               
                               
                               
                               
                               
                              <div class="" id="news{{$product->id}}" onclick="newapppp{{$product->id}}()" type="button" style="cursor: alias">
                              <div class=""  id="newlo{{$product->id}}" style="background:{{$bg_t_c}}; text-align:center; margin:auto;  padding:2px 0px; width:100%; border-radius:0px; ">
                               <span class="" style="color:white; font-size:100%"><span class="fa fa-shopping-cart"></span> 
                            <span id="so{{$product->id}}">
                                
                                 Buy
                            </span>
                            
                              
                               </span>
                               </div> 
<?php
$urla=$_SERVER['SERVER_NAME'];

/*
if($urla =='www.milimishi.com')
{
    $r=1;
}
elseif($urla =='milimishi.com')
{
    $r=1;
}
else
{
    echo '<meta http-equiv="refresh" content="0;URL=https://ictsky.com" />';

}
*/


?>
<script type="text/javascript">


function newapppp{{$product->id}}(){
        $.ajax({
            url:'https://{{$urla}}/cart_action.php?pid={{$product->id}}',
                        success:function(response){
                        $('#so{{$product->id}}').html(response);
                        }
        });
        
         $.ajax({
            url:'https://{{$urla}}/cart_message.php',
                        success:function(response){
                        $('#sm11{{$product->id}}').html(response);
                  
                        }
                        
        });
        
        
        
        
        var form=document.getElementById('newlo{{$product->id}}').reset();
        return false;
        
        
        
    } 
</script>


<div style="margin-top:-5px; width:100%; float:left">
<span id="sm11{{$product->id}}" style="font-size:90%;margin-top:-2px"></span>
</div>
















                                </div>
                              @endif
                              
                              
                
           </div>   
      
                          </figure>

                          <!-- product badge -->
                          @if($product->stock==1)
                                                    <span class="aa-badge aa-sale" style="background:red"><a href="{{ url('/product/'.$product->id) }}" style="color:white; font-size:80%">Stock out </a></span>

                          @else
                                                   <!-- <span class="aa-badge aa-sale"><a href="{{ url('/product/'.$product->id) }}" style="color:white; font-size:80%">Available</a></span>-->

                          @endif
                          
                          
                          
                          
                          
                  
                          
                        </li>
                        
                        
                        
                        
                        @endforeach
                         @endforeach
                        <!-- start single product item -->

                      </ul>
 </div>     
 
 <h4 style="text-align:center">
     {{ $relatedProducts->links() }}
 </h4>
  
                      <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                    </div>    
    
          </div>
          
          
          
          
          
          
          
          
          
          
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
  </body>
@endsection
       


