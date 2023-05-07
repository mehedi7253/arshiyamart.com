

@extends('layouts.temp2.master')

<title>
    {{ $pro_details->product_name }} @ {{ $pro_details->price  }} Tk.
</title>
  


                            <div style="display: none;">
                            <img class="img-center" src="{{ asset('assets/admin/img/products/large/'.$pro_details->image) }}" alt="">
                          </div>






@section('content')



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

              <input type="hidden" name="product_id" value="{{ $pro_details->id }}">
              <input type="hidden" name="product_name" value="{{ $pro_details->product_name }}">
              <input type="hidden" name="product_code" value="{{ $pro_details->id }}">
              <input type="hidden" name="product_color" value="{{ $pro_details->product_color }}">
              <input type="hidden" name="price" id="price" value="{{ $pro_details->price }}">
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{ $pro_details->product_name }}</h3>
                    <div class="aa-price-block">
                        
                        
                        
                                              <p class="aa-product-avilability">Product Code: <span> {{ $pro_details->id }} </span></p>
                                              
                                              
                                              
                                              
                              @if(!empty($pro_details->p_price))
                                                            <span class="aa-product-price" style="font-size:110%; color:red"><del>Tk {{ $pro_details->p_price }} </del></span>
                              @endif
                      <span class="aa-product-view-price"style="font-size:130%">  TK : {{ $pro_details->price }} 
                
                @if($pro_details->unit !="N/A")

                      ({{ $pro_details->unit }})
                 @endif     
                      </span><br>
  
  
  <br>
  
                             @if($pro_details->product_color !="N/A")
Color: <select name="color" required="">
                                   <option value="">Select color</option>
<?php
$stringc = $pro_details->product_color;

$tagsc = explode(',',$stringc);

foreach($tagsc as $keyc) {    
    echo '<option>'.$keyc.'</option>';    
}
?>  
</select>                              @endif                    
                   
                               @if($pro_details->care !="N/A")
                               <br><br>
                               Size: <select name="size" required="">
                                   <option value="">Select Size</option>
<?php
$string = $pro_details->care;

$tags = explode(',',$string);

foreach($tags as $key) {    
    echo '<option>'.$key.'</option>';    
}
?>  
</select>
                          @endif                  
        <!--              <p class="aa-product-avilability">Avilability: <span>@if($total_stock>0) In Stock @else Out of Stock  @endif</span></p>-->
                    </div>



                    <div class="aa-prod-quantity">

                
                      <label>Quantity:</label>
                <input type="number" name="quantity" value="1" min="1" style="width:60px; font-size:20px"/>
                    </div>
                    <div class="aa-prod-view-bottom" >
                      @if ($total_stock<100)
                      
                      
                      
                      
                        @if($pro_details->stock==1)
                  <div style="background:red; color:white; width:100px; padding:10px; margin-bottom:20px">
                    Stock Off
                  </div>
                     
                        @else
                   <button id="cartBtn" type="submit" class="btn btn-fefault cart" style="background:red; color:white; margin-bottom:20px">
                    <i class="fa fa-shopping-cart"></i>
                    Order Now
                  </button>
                         
                        @endif
                        
                
                  
             
             
             
   <span>
       
    <?php
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
?>

<br>


<?php
echo '<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$actual_link.'&layout=button_count&size=large&mobile_iframe=true&width=100&height=30&appId" width="100" height="30" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
?>        
          
       
   </span>
   
            
               
             
             
             
                  
              
                  
                  
                @endif
                
                
                
                
      
                
                
                
                
                
                
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
           
           
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
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

                        @foreach($rel_product as $allproduct)
                        

                        
                                            
                        <li style="border:0px solid silver;">
    
                          <figure>
                                   <div style="border:1px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$allproduct->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$allproduct->image) }}" alt="Img error"></a>
                       </div>
                          <div class="com_add">
                            <a class="aa-add-card-btn" href="{{ url('/product/'.$allproduct->id) }}" style="height:20%; background:{{$bg_t_c}}; color:white;text-transform: capitalize; ">{{ $allproduct->product_name }}<br>{{ $allproduct->price }} Tk   @if($allproduct->unit !="N/A")
                         
                              ({{ $allproduct->unit }})
            @endif <br>
                            <!--<span style="color:black"><?php $detailsp=$allproduct->description; $detailsp2=substr($detailsp,0,230)?>{!! nl2br($detailsp2) !!} </span>--></a>

                           </div>
                           

                                                    
                            
                            
                              <figcaption>
                              <h4 class="aa-product-title" style="height:50px">{{ $allproduct->product_name }}</h4>
                              @if(!empty($allproduct->p_price))
                                                            <span class="aa-product-price" style="font-size:80%; color:red;"><del>{{ $allproduct->p_price }} Tk</del></span><br>
                              @else
                                                                                          <span class="aa-product-price" style="font-size:80%; color:red;"></span><br>

                              @endif
                              
               <span class="aa-product-price">{{ $allproduct->price }} Tk
           @if($allproduct->unit !="N/A")
                         
                              ({{ $allproduct->unit }})
            @endif                  
                              
                              </span><!-- <span class="aa-product-price"><del>$65.50</del></span> -->
                            </figcaption>
                            
      @if($allproduct->stock==1)
      <?php
      $allproduct1=1;
      ?>
      @else
      <?php
      $allproduct1=0;
      ?>
      @endif
 
 
       @if($allproduct->care !="N/A")
      <?php
      $allproduct2=1;
      ?>
     @else
      <?php
      $allproduct2=0;
      ?>
      @endif
      
      
      
       @if($allproduct->product_color !="N/A")
      <?php
      $allproduct3=1;
      ?>
     @else
      <?php
      $allproduct3=0;
      ?>
      @endif
      
      
      
      
      <?php
      @$allproduct4=$allproduct1+$allproduct2+$allproduct3;
      ?>
                                    
                              @if($allproduct4>0)
                              
                             <div class="" style="background:{{$bg_t_c}};  padding:2px">
                               <a href="{{ url('/product/'.$allproduct->id) }}" style="color:white"> <span class="fa fa-eye"> </span>  
                               Details
                              </a>
                              </div>
                              @else     
                              
                              <div class="" style="background:{{$bg_t_c}};  padding:2px 0px; width:50%; margin-left:-1px; margin-right:1px; float:left">
                             <a href="{{ url('/product/'.$allproduct->id) }}" style="color:white; font-size:80%"><span class="fa fa-eye"></span> 
                              Details
                               </a>
                               </div>
                               
                              <div id="news{{$allproduct->id}}" onclick="newa{{$allproduct->id}}()">
                              <div class="" id="new{{$allproduct->id}}" style="background:red;  padding:2px 0px; width:50%; float:right;margin-right:-1px;">
                               <span class="" style="color:white; font-size:80%"><span class="fa fa-shopping-cart"></span> 
                            <span id="s{{$allproduct->id}}">
                                
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
function newa{{$allproduct->id}}(){
        $.ajax({
            url:'https://{{$urla}}/cart_action.php?pid={{$allproduct->id}}',
                        success:function(response){
                        $('#s{{$allproduct->id}}').html(response);
                        }
        });
        
         $.ajax({
            url:'https://{{$urla}}/cart_message.php',
                        success:function(response){
                        $('#sm{{$allproduct->id}}').html(response);
                  
                        }
                        
        });
        
        
        
        
        var form=document.getElementById('news{{$allproduct->id}}').reset();
        return false;
        
        
        
    } 
</script>



<span id="sm{{$allproduct->id}}"></span>



















                                </div>
                              @endif
                              
                              
                          

                 
           </div>   
      
                          </figure>

                          <!-- product badge -->
                          @if($allproduct->stock==1)
                                                    <span class="aa-badge aa-sale" style="background:red"><a href="{{ url('/product/'.$allproduct->id) }}" style="color:white; font-size:80%">Stock out </a></span>

                          @else
                                                   <!-- <span class="aa-badge aa-sale"><a href="{{ url('/product/'.$allproduct->id) }}" style="color:white; font-size:80%">Available</a></span>-->

                          @endif
                          
                          
                          
                          
                          
                  
                          
                        </li>
                        
                        
                        @endforeach
                         @endforeach
                        <!-- start single product item -->

                      </ul>
 </div>                     
                      <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                    </div>    
    
          </div>
          
          
          
          
          
          
          
          
          
          
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
@endsection
