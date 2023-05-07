@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')

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
				if(isset($_GET['cid'])){
				    $b_imgg =DB::table('categories')->where('id', $_GET['cid'])->first();
           $banarimg= $b_imgg->b_img;
                      $banarimgv= $b_imgg->name;   

           $parents_id=$_GET['cid'];
			
			
			
			
		 $allproducts_c = DB::table('products')
       ->where(['parent_id' => $_GET['cid']])
        ->orderby('id', 'ASC')
        ->paginate(28);
        	
			
			 $allproducts_count = DB::table('products')
       ->where(['parent_id' => $_GET['cid']])
        ->count();
			
				}
				else{
				    
				   $b_imggg =DB::table('categories')->where('id', $_GET['scid'])->first();
           $banarid= $b_imggg->parent_id; 
				               $banarimg_n= $b_imggg->name; 

				    
				  $b_imgg =DB::table('categories')->where('id', $banarid)->first();
           $banarimg= $b_imgg->b_img;   
           $banarimgv= $b_imgg->name;   
           
				  $parents_id = $banarid;
				  
				   
				  
				  
				  
				  
			 $allproducts_c = DB::table('products')
       ->where(['category_id' => $_GET['scid']])
        ->orderby('id', 'ASC')
        ->paginate(28);
        	  
 $allproducts_count = DB::table('products')
       ->where(['category_id' => $_GET['scid']])
        ->count();


					  
				}
				
				
				;?>					  
				
				@if(isset($banarimg))
				
				<div class="mob_add" style="margin-top:-162px">
				    												<div style="width:100%; max-height:150px; text-align:center; float:left"><img src="{{url('/')}}/assets/admin/img/category_icon/{{$banarimg}}" style="width:100%; max-height:130px"></div>

				</div>
								<div class="com_add" style="margin-top:-200px">
				    												<div style="width:100%; max-height:250px; text-align:center; float:left"><img src="{{url('/')}}/assets/admin/img/category_icon/{{$banarimg}}" style="width:100%; max-height:250px"></div>

				</div>


                @endif 
					
					
						                      <div style="margin-left:5%; margin-top:202px; padding-top:20px"> <span style="color:green"> <i class="fa fa-arrow-left" aria-hidden="true" style="color:red"></i><a href="{{('/')}}"> <b>Back to Top Category</b></a></span> </div>

					

	
	                      <h3 style="text-align:center;"> <span style="color:green">----- <b>{{ $banarimgv }}</b> -----</span> </h3>


          


        <div class="col-md-12">
            
            
             
          
                
            


            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
<!-- <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;"  ><span >Top Category</span>

</a></li></ul>
              -->
              
               

                      
               
                  
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="men">
                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-bottom:50px; margin-top:20px; margin:auto; text-align:center">
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('categories')
       ->where(['parent_id' => $parents_id])
        ->orderby('id', 'ASC')
        ->get();
        
        
        
        $ccc= DB::table('categories')
       ->where(['parent_id' => $parents_id])
        ->count();
        
        ?>
		
		
	@foreach ($bangladesh_n_p as $bnp)		
		<!--	<div class="col-md-2 col-sm-4 col-xs-4"  style="margin-top:5px; float:left" >


	
				   	<a href="{{url('/')}}/products2/{{$bnp->name}}?scid={{$bnp->id}}"> 
    				   	<div style="float:left; width:110%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; border:1px solid gray">
    				        @if(!empty($bnp->img))
    				        <img src="{{url('/')}}/assets/admin/img/category_icon/{{$bnp->img}}" style="max-width:100%;border-radius:4px;">
    				        @else
<img src="https://ictsky.com/image/catagory_con.png" style="max-width:100%;border-radius:4px;">



@endif
    				        
    				        <br>
    				     <span style="font-size:60%; color:green"> <b> {{$bnp->name}}</b></span> 
                </div>
					</a>
				</div>	
-->




			    
			    
			    @if($ccc<5)
			 			<div class="col-md-1 col-sm-3 col-xs-3 col-md-offset-2"  style="margin-top:5px;">
			 @else
			 			<div class="col-md-1 col-sm-3 col-xs-3"  style="margin-top:5px;">

			 @endif
			    
			    
			    
				   	<a href="{{url('/')}}/products/{{$bnp->name}}?scid={{$bnp->id}}"> 
    				   	<div style="float:left; width:auto; height:80px; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; border:0px solid gray; margin:auto; text-align:center">
    				        @if(!empty($bnp->img))
    				        <img src="{{url('/')}}/assets/admin/img/category_icon/{{$bnp->img}}" style="max-width:60%;border-radius:4px;">
    				       <br>
    				     <div style="font-size:60%; height:32px;  color:black; overflow: hidden;">  {{$bnp->name}}</div> 
    				        @else
 
<img src="https://ictsky.com/image/catagory_con.png" style="max-width:60%;border-radius:4px;">
    				       <br>
    				     <div style="font-size:60%; height:32px;  color:black; overflow: hidden;">  {{$bnp->name}}</div> 

@endif
    				        
    				        
                </div>
					</a>
				</div>	
		
			    
			    
			    
			    
				
		
		
			
	@endforeach		
			
			
			
			
		
			
			
                        
             </div>           
                        
        </div>                
                        	<hr>
                      
                    </div>
                  


                 
              </div>
            </div>
          </div>
   
  <!-- / Products section -->				

<!-- product category -->

<section id="aa-product-category">
    	@if(isset($_GET['scid']))
    	
    	 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;"  ><span >{{ $banarimg_n }}</span>

</a></li></ul>
@endif




<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 

                <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">




<!--	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-9 col-sm-8 col-md-push-2">
				<div class="aa-product-catg-content">
	

								
	

				
					
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">-->
                        @foreach($allproducts_c as $product)
                        
               
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
                        <!-- start single product item -->

                      </ul>
                      <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
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
														<a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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

      <div class="text-center">
          <?php
          $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          if(isset($_GET['page']))
          {
              $pagg=$_GET['page']+1;
              $paggb=$_GET['page']-1;
              if($paggb>0)
              {
                  $paggs=$paggb;
              }
              else
                            {
                  $paggs=1;
              }
              
              
              
              $tpage=$allproducts_count/30;
              $tpage_r=round($allproducts_count/30);
              
              
              
               if($paggb>0){
              echo '<a href="'.$actual_link.'&page='.$paggb.'" style="background:red; color:white;padding:2px; border-radius:3px"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
 Back  </a>';
              }
              
              
              if($tpage > $pagg-1){
                  
              echo '<span style="color:gray">  [Page: '.$_GET['page'].' out of '.$tpage_r.'] </span>';
              echo '<a href="'.$actual_link.'&page='.$pagg.'" style="background:red; color:white;padding:2px; border-radius:3px"> Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
  </a>';
              }
              
             

          }
          else
          {
             $pagg=2;
             if($allproducts_count>28)
            {
                echo '<a href="'.$actual_link.'&page='.$pagg.'" style="background:red; color:white;padding:2px; border-radius:3px">View More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
</a>';
            }
 
          }
          ;?>
          
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
      </div>
		</div>
	</div>
</section>



<!-- / product category -->

<?php
if(empty($ca_id)){
    echo '<h3 style="margin-bottom:250px; margin-left:100px; color:green"></h3>';
}

			?>		
					
	<div class="col-md-12 col-sm-12 col-xs-12" style="float:left">
												<div class="aa-product-view-slider" style="margin-bottom:200px">
																	
			<?php
			if(!isset($_GET['cid'])){
    			if(!isset($show))
    			{
/*    			    echo '<h2 style="margin-bottom:250px">Sorry! No product added yet in this category.</h2>';
*/    			}
			}

			?>			

						
@if(isset($_GET['cid']))						
 <?php 			       
$cid=$_GET['cid'];			       
$resultscid = DB::select('select * from categories where parent_id = :id', ['id' => $cid]);
     
     
     
    $total_shipping = DB::table('categories')->where('parent_id', $cid)->count();
 	if($total_shipping<1){
 	    if(!isset($show)){
 	    
    			
/*    			    echo '<h2 style="margin-bottom:250px">No product or  Sub Category added yet in this category.</h2>';
*/ 	    }
                
 	    }
  if($total_shipping>0)
                {
/*                 echo '<div style="text-align:center"><h2 style="margin-bottom:20px; test-align:center">Subcategories:</h2></div>';
*/            
                }
                
   ;?>  
    
          
          
@foreach($resultscid as $ccc)
     <?php 
/*     echo '<div style="text-align:center;margin-bottom:5px;"><a href="'.$ccc->url.'/?scid='.$ccc->id.'" style="width:300px;  font-size:120%; border-radius:5px; padding:10px; color:white; text-align:center; margin:auto; display:inline-block;  background:'.$bg_t_c.'"><span >'.$ccc->name.'</span></a></div>';
*/
     
     ;?>	    
			    
@endforeach			    
			    
			    








@endif					
												</div>
											</div>	






@endsection
