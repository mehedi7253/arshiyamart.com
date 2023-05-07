@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')



<!-- product category -->

<?php
        $mms=0;

;?>

@if(isset($_GET['f']))

<?php
$session_id = Session::getId();


$find_p=DB::table('a222')->where('extra1',$_GET['f'])->where('remark',$session_id)->count();

if($find_p == 0)
{
    DB::table('a222')->insert([
        'extra1' =>$_GET['f'],
        'remark' =>$session_id
        ]);
        $mms=1;
}
else{
        $mms=3;

}

;?>

@endif







@if(isset($_GET['d']))

<?php
$session_id = Session::getId();

    DB::table('a222')->where('extra1',$_GET['d'])->where('remark',$session_id)->delete();
        $mms=2;


;?>

@endif




<section id="aa-product-category">
	<div class="container">
		<div class="row">
		    
		    					<h3 style="text-align:center; color:red; margin-top:50px"> Your Favourite Product List: </h3>
		    					<div style="text-align:center; color:blue">কোন প্রোডাক্ট Favourite করে রাখলে, পরবর্তীতে সেটা আপনি খুব  সহজে এখানে খুজে পাবেন। <br> যে প্রোডাক্টগুলো আপনার মাঝে মধ্যেই প্রয়োজন হয়, বা এখন ক্রয় না করে পরবর্তীতে ক্রয় করতে আগ্রহী সেগুলো Favourite করে রাখুন।</div>
		    					<hr>
		    					
		    					 @if($mms == 1)
		    					 <div style="text-align:center; color:white; background:green">Successfully add a product to your Favourite List</div>
		    					 <hr>
		    					 @endif
		    					 
		    					 @if($mms == 2)
		    					 <div style="text-align:center; color:white; background:red">Successfully Delete a product from your Favourite List</div>
		    					 <hr>
		    					 @endif
		    					 
		    					 
		    					 @if($mms == 3)
		    					 <div style="text-align:center; color:black; background:pink">Already Added</div>
		    					 <hr>
		    					 @endif		    					 
		    					 
		    					 
		    					 
		    					 
		    					 
		    					 
		    					 

			<div class="col-lg-12 col-md-9 col-sm-8 col-md-push-2">
				<div class="aa-product-catg-content">
				
<?php

$results37 = DB::select('select * from banners where id = :id', ['id' => 37]);

    ;?>        
          




@foreach($results37 as $t37)
     <?php 
        $image37=$t37->image;     
     ;?>
@endforeach




	    
<?php
if($image37=="red")
{
     $bg_t_c="#EE4532";
}
elseif($image37=="yellow")
{
   $bg_t_c="#FFFF00";
}
elseif($image37=="bridge")
{
   $bg_t_c="#FF6666";
}

elseif($image37=="dark-red")
{
   $bg_t_c="#970001";
}

elseif($image37=="green")
{
   $bg_t_c="#3FC35F";
}

elseif($image37=="orange")
{
   $bg_t_c="#FF871C";
}

elseif($image37=="lite-blue")
{
   $bg_t_c="#37C6F5";
}


elseif($image37=="purple")
{
   $bg_t_c="#C762CB";
}

elseif($image37=="default")
{
   $bg_t_c="#FF6666";
}










else
{
    $bg_t_c="#FF2851";
}
       
?> 				
				
			<!--		<div class="aa-product-catg-head">
						<div class="aa-product-catg-head-left">
							<form action="" class="aa-sort-form">
								<label for="">Sort by</label>
								<select name="">
									<option value="1" selected="Default">Default</option>
									<option value="2">Name</option>
									<option value="3">Price</option>
									<option value="4">Date</option>
								</select>
							</form>
							<form action="" class="aa-show-form">
								<label for="">Show</label>
								<select name="">
									<option value="1" selected="12">12</option>
									<option value="2">24</option>
									<option value="3">36</option>
								</select>
							</form>
						</div>
						<div class="aa-product-catg-head-right">
							<a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
							<a id="list-catg" href="#"><span class="fa fa-list"></span></a>
						</div>
					</div>
					-->
					
					<div class="tab-pane fade in active" id="men" style="margin-top:0px">
						<ul class="aa-product-catg">
							<!-- start single product item -->
							
							<?php
							$session_id = Session::getId();
							
							$find_p=DB::table('a222')->where('remark',$session_id)->get();
							?>
							
							
							@foreach($find_p as $pid)
                                
							
							
							<?php
							$allproducts=DB::table('products')->where('id', $pid->extra1)->get();


							?>
							
						
							
							
							@foreach ($allproducts as $product)


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
                              
                             
                             <a href="{{ url('/fav?d='.$product->id) }}">
                              <div class="" style="background:{{$bg_t_c}};  padding:1px 0px; width:15%; margin-left:5px;border-right:1px solid white; margin-right:1px; float:left">
                             <span style="color:white; font-size:75%"><span class="fa fa-trash"></span> 
                               </span>
                               </div>
                             </a>
                             
                             
                              <div class="" style="background:{{$bg_t_c}};  padding:1px 0px; width:35%; margin-left:5px;border-right:1px solid white; margin-right:1px; float:left">
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
                        
                        
							
<?php
@$show=@$product->id;
?>
									
							
							
							<!-- start single product item -->
							@endforeach
							@endforeach
						</ul>
						
						
						
						
						
						
						
			<?php
			if(!isset($show))
			{
			    echo '<h3 style="margin-bottom:250px">Sorry! No product found to your Favourite List".</h3>';
			}
			?>			
						
						
						
						
						
						
						
						
						
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
																		<a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
																				<img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
																		</a>
																</div>
														</div>
														<div class="simpleLens-thumbnails-container">
																<a href="#" class="simpleLens-thumbnail-wrapper"
																	 data-lens-image="img/view-slider/large/polo-shirt-1.png"
																	 data-big-image="img/view-slider/medium/polo-shirt-1.png">
																		<img src="img/view-slider/thumbnail/polo-shirt-1.png">
																</a>
																<a href="#" class="simpleLens-thumbnail-wrapper"
																	 data-lens-image="img/view-slider/large/polo-shirt-3.png"
																	 data-big-image="img/view-slider/medium/polo-shirt-3.png">
																		<img src="img/view-slider/thumbnail/polo-shirt-3.png">
																</a>

																<a href="#" class="simpleLens-thumbnail-wrapper"
																	 data-lens-image="img/view-slider/large/polo-shirt-4.png"
																	 data-big-image="img/view-slider/medium/polo-shirt-4.png">
																		<img src="img/view-slider/thumbnail/polo-shirt-4.png">
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
						</div>
						<!-- / quick view modal -->
					</div>
					{{-- <div class="aa-product-catg-pagination">
						<nav>
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div> --}}
				</div>
			</div>
		<!--	<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
				<aside class="aa-sidebar">
					<div class="aa-sidebar-widget">
						<h3>Category</h3>
						<ul class="aa-catg-nav">
							<li><a href="#">Men</a></li>
							<li><a href="">Women</a></li>
							<li><a href="">Kids</a></li>
							<li><a href="">Electornics</a></li>
							<li><a href="">Sports</a></li>
						</ul>
					</div>
					
					
				</aside>
			</div>
-->
		</div>
	</div>
</section>
<!-- / product category -->







@endsection
