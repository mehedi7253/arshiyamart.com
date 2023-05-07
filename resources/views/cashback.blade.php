@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')



<?
$results37 = DB::select('select * from banners where id = :id', ['id' => 37]);

?>

@foreach($results37 as $t37)
     <?php 
        $image37=$t37->image;     
     ;?>
@endforeach



<?php

     $bg_t_c=$image37;
       
?> 

  <section id="aa-product">
    <div class="container">
      <div class="row">
          
          


        <div class="col-md-12">
            
            
             
          
                
            
          <div class="row" style="margin-top:30px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
          
   <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;"  ><span style="  text-transform: capitalize;
">Cash Back Offred Product</span>

</a></li></ul>
              
                  
          
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                          
                          
                          <?php
                                  	            $allproducts = DB::table('products')->where('cash_back','>',0)->where('status',1)->get();
?>
                          
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver;">

                           
                          <figure>                                            

                              
                              
                          @if($product->offer > 0)    
                                   <div style="border:1px solid {{$bg_t_c}};">       
                                   <div style="position:absolute; background:red; color:white;   border-bottom-right-radius: 50px;  padding:10px;;
"> {{$product->offer}} % </div>

@endif


@if($product->cash_back > 0)   

                                   <div style="border:1px solid {{$bg_t_c}};">       
                                   <div style="position:absolute; background:red; color:white;   border-bottom-right-radius: 50px;  padding:10px;;
"> {{$product->cash_back}} % </div>

@endif
                                   
    
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" alt="Img error"></a>
                       </div>
                     
                           

                                                    
                            
                            
                              <figcaption>
                              <h4 class="aa-product-title" style="height:50px">{{ $product->product_name }}</h4>
                              @if(!empty($product->p_price))
                                                            <span class="aa-product-price" style="font-size:80%; color:red;"><del>{{ $product->p_price }} Tk</del></span><br>
                              @else
                                                                                          <span class="aa-product-price" style="font-size:80%; color:red;"></span><br>

                              @endif
                              
                          <span class="aa-product-price">{{ $product->price }} Tk
           @if($product->unit !="N/A")
                         
                              ({{ $product->unit }})
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
      $product2=1;
      ?>
     @else
      <?php
      $product2=0;
      ?>
      @endif
      
      
      
       @if($product->product_color !="N/A")
      <?php
      $product3=1;
      ?>
     @else
      <?php
      $product3=0;
      ?>
      @endif
      
      
      
      
      <?php
      @$product4=$product1+$product2+$product3;
      ?>
                                    
                              @if($product4>0)
                              
                             <div class="" style="background:{{$bg_t_c}};  padding:2px">
                               <a href="{{ url('/product/'.$product->id) }}" style="color:white"> <span class="fa fa-eye"> </span>  
                               View Details
                              </a>
                              </div>
                              @else     
                              
                              <div class="" style="background:{{$bg_t_c}};  padding:2px 0px; width:50%; margin-left:-1px; margin-right:1px; float:left">
                             <a href="{{ url('/product/'.$product->id) }}" style="color:white; font-size:80%"><span class="fa fa-eye"></span> 
                              Details
                               </a>
                               </div>
                               
                              <div class="my-btn" id="news{{$product->id}}" onclick="newapppp{{$product->id}}()" type="button">
                              <div class=""  id="newlo{{$product->id}}" style="background:red;  padding:2px 0px; width:50%; float:right;margin-right:-1px;">
                               <span class="" style="color:white; font-size:80%"><span class="fa fa-shopping-cart"></span> 
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



<span id="sm11{{$product->id}}"></span>



















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
                        <!-- start single product item -->

                      </ul>
                      <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    
                    <!-- / women product category -->

                  </div>
                  <!-- quick view modal -->
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-slider">
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="{{ asset('assets/temp2') }}/img/view-slider/large/polo-shirt-1.png">
                                              <img src="{{ asset('assets/temp2') }}/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{ asset('assets/temp2') }}/img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="{{ asset('assets/temp2') }}/img/view-slider/medium/polo-shirt-1.png">
                                          <img src="{{ asset('assets/temp2') }}/img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{ asset('assets/temp2') }}/img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="{{ asset('assets/temp2') }}/img/view-slider/medium/polo-shirt-3.png">
                                          <img src="{{ asset('assets/temp2') }}/img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{ asset('assets/temp2') }}/img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="{{ asset('assets/temp2') }}/img/view-slider/medium/polo-shirt-4.png">
                                          <img src="{{ asset('assets/temp2') }}/img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>     	


@endsection