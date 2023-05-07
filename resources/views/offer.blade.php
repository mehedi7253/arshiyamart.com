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





<?php
if (empty(Auth::check())){
$af_show="none";
}
else
{
  $user_show = Auth::user()->affiliate_com;  
  if($user_show > 0){
      $af_show="show";
  }else{
       $af_show="none";
  }
}

    ;?>        
    
    
      
<style>
    #affiliate{
        display:{{$af_show}};
    }
    
</style>





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
          







<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:30px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
          
   <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;"  ><span style="  text-transform: capitalize;
"><i class="fa fa-bullhorn" aria-hidden="true" style="font-size:140%; color:white"></i> Campaign Products</span>

</a></li></ul>
              
                  
          
@isset($_GET['camping'])
          @if(!empty($campd->extra13))
                 @if($aj_date < $campd->extra13 )
                 
                        <?php
                        $date=date_create("$campd->extra13");
                        $end_d=date_format($date,"M d, Y d H:i:s");
                        //Jan 5, 2024 15:37:25
                        ;?>
                         <p id="demo" style="color:white; background:red; text-align:center; width:250px; margin:auto; margin-bottom:20px; border-top-left-radius:20px;border-bottom-right-radius:20px">
                             
                             
                         </p>
                        
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
                        
        
          @endif
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                          
                          
                          <?php
                          
                          if(isset($_GET['camping']))
                          {
                             $ccccc=$_GET['camping']; 
                              if($ccccc==1){
                                  
                                  
                                  
                                 
                                  $allproducts = DB::table('products')->where('position2',1)->get();
                                  
                                  
                              }
                              
                                if($ccccc==2){
                                  
                                  $allproducts = DB::table('products')->where('position3',1)->get();
                                  
                                  
                              }
                                                          
                              
                              
                          }
                          else{
                          
                                  	            $allproducts = DB::table('products')->where('offer','>',0)->where('category_id','<',99999)->where('status',1)->get();
                          }
?>
                          
                        @foreach($allproducts as $product)
                        
                        
                                     
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                              
                              
                              
                                   <div style="border:0px solid {{$bg_t_c}};">          
                                   
                                   
                                   
                                   
                                   
                                        
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
                          <div class="com_add">
                            <a class="aa-add-card-btn" href="{{ url('/product/'.$product->id) }}" style="height:20%; overflow: hidden; background:{{$bg_t_c}}; color:white;text-transform: capitalize; ">{{ $product->product_name }}
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
                              
                              
                              
                      
                         @if($product->extra11 > 0)
                                                     <br><span style="font-size:80%; background:green;color:white; padding:2px;border-radius:4px" id="affiliate"> Comission: {{$product->extra11}}</span>

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
                              
                         <!--     <div class="" style="background:{{$bg_t_c}};  padding:2px 0px; width:50%; margin-left:-1px; margin-right:1px; float:left">
                             <a href="{{ url('/product/'.$product->id) }}" style="color:white; font-size:80%"><span class="fa fa-eye"></span> 
                              Details
                               </a>
                               </div>-->
                               
                              <div class="my-btn" id="news{{$product->id}}" onclick="newapppp{{$product->id}}()" type="button" style="">
                              <div class=""  id="newlo{{$product->id}}" style="background:{{$bg_t_c}}; text-align:center; margin:auto;  padding:2px 0px; width:70%; border-radius:5px; ">
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



<span id="sm11{{$product->id}}" style="font-size:90%;margin-top:-2px"></span>



















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