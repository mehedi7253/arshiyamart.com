@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')
 @include('layouts.temp2.slider')
   
     
              
           
<?php
$results1 = DB::select('select * from banners where id = :id', ['id' => 1]);
$results2 = DB::select('select * from banners where id = :id', ['id' => 2]);
$results3 = DB::select('select * from banners where id = :id', ['id' => 3]);
$results4 = DB::select('select * from banners where id = :id', ['id' => 4]);
$results5 = DB::select('select * from banners where id = :id', ['id' => 5]);
$results23 = DB::select('select * from banners where id = :id', ['id' => 23]);
$results24 = DB::select('select * from banners where id = :id', ['id' => 24]);
$results25 = DB::select('select * from banners where id = :id', ['id' => 25]);
$results39 = DB::select('select * from banners where id = :id', ['id' => 39]);
$results37 = DB::select('select * from banners where id = :id', ['id' => 37]);


$results58 = DB::select('select * from banners where id = :id', ['id' => 58]);


$results55 = DB::select('select * from banners where id = :id', ['id' => 55]);
$results56 = DB::select('select * from banners where id = :id', ['id' => 56]);
$results57 = DB::select('select * from banners where id = :id', ['id' => 57]);
    ;?>        
      



          
@foreach($results55 as $t55)
     <?php 
        $image55=$t55->image;     
        $url55=$t55->link;  
     ;?>
@endforeach


@foreach($results56 as $t56)
     <?php 
        $image56=$t56->image;     
        $url56=$t56->link;  
     ;?>
@endforeach



@foreach($results57 as $t57)
     <?php 
        $image57=$t57->image;     
        $url57=$t57->link;  
     ;?>
@endforeach


@foreach($results58 as $t58)
     <?php 
        $image58=$t58->image;     
        $url58=$t58->link;  
     ;?>
@endforeach

   
 
        
          
@foreach($results4 as $t4)
     <?php 
        $image4=$t4->image;     
        $url4=$t4->link;  
     ;?>
@endforeach




@foreach($results1 as $t1)
     <?php 
        $image1=$t1->image;     
        $url1=$t1->link;  
     ;?>
@endforeach


@foreach($results2 as $t2)
     <?php 
        $image2=$t2->image;     
        $url2=$t2->link;  
     ;?>
@endforeach


@foreach($results3 as $t3)
     <?php 
        $image3=$t3->image;     
        $url3=$t3->link;  
     ;?>
@endforeach




@foreach($results37 as $t37)
     <?php 
        $image37=$t37->image;     
     ;?>
@endforeach




@foreach($results5 as $t5)
     <?php 
        $image5=$t5->image;   
                $url5=$t5->link;  

     ;?>
@endforeach

@foreach($results39 as $t39)
     <?php 
        $image39=$t39->image;     
     ;?>
@endforeach



<?php

     $bg_t_c=$image37;
       
?> 











               
       

















        
       

<body onload="myFunctionld()">




<?php
if(isset($_GET['dis'])){
    
    $s_dis=$_GET['dis'];
    $s_ps=$_GET['ps'];
    
    Session::put('s_dis', $s_dis);
    Session::put('s_ps', $s_ps);

}


        $s_dis = Session::get('s_dis');



;?>




<!--




<script>
                
                function myFunctionld(){ 
                    $('#modal-lg111').modal('show');
                  }
</script>
            
                
   <div class="modal fade" id="modal-lg111" style="z-index:309483; display:block">
        <div class="modal-dialog modal-lg">                              
          <div class="modal-content">
              <div class="modal-body" style="text-align:center">
                             
                                
                                
                                
                                
                      

                 <a href="{{$url4}}">
                 <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image4;?>" style="width:100%">
                 </a>
          
              
              
             
                                
                                
                                
                                
                          

              </div>
              <div class="modal-footer justify-content-between">
                <type="button" class="btn btn-default" data-dismiss="modal"> Skip </button>
              </div>
          </div>
        </div>
      </div>
      
      
      
      
      
    


-->








<section id="aa-product">
    <div class="container">
      <div class="row">
       <div class="col-md-12" style="padding:7px">
           

<div class="mob_add" style="margin-top:-26px"




<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<div class="w3-content w3-section" style="height:150px; width:100%; float:left;">
 <a href="<?php echo $url1;?>">  <img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image1;?>" style="height:150px;width:100%"></a>
 <a href="<?php echo $url2;?>">  <img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image2;?>" style="height:150px;width:100%"></a>
 <a href="<?php echo $url3;?>">  <img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image3;?>" style="height:150px;width:100%"></a>
  
  
  
  
  <a href="<?php echo $url55;?>"><img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image55;?>" style="height:150px;width:100%"></a>

  
     <a href="<?php echo $url56;?>"><img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image56;?>" style="height:150px;width:100%"></a>

   <a href="<?php echo $url57;?>"> <img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image57;?>" style="height:150px;width:100%"></a>

   <a href="<?php echo $url58;?>"> <img class="mySlides" src="{{url('/')}}/assets/admin/img/banners/<?php echo $image58;?>" style="height:150px;width:100%"></a>
  
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>




</div>
</div>

           
 </div>          
 </div>          
 </div>          
</section>     
     
     
     
     




      <?php
     $bannerss=DB::table('banners')->where('id',1016)->first();
     ;?>

            {{@$bannerss->image}}





<section id="aa-product">
    <div class="container">
      <div class="row">
    
    
<div class="col-md-12 mob_add" style="padding:7px;margin-top:0px">
           
<div style="width:100%; margin:auto; color:white">
    <span style="background:{{ $bg_t_c }}; padding:10px 0px 0px 0px; line-hight:auto; font-size:110%; margin-bottom:10px; margin-top:-10px">
                    <marquee>
<?php echo $image39;?>
</marquee>
    </span>      
 </div>

 </div> 
 
 
 
 
 <div class="col-md-12 com_add" style="padding:7px;margin-top:-30px">
           
<div style="width:100%; margin:auto; color:white">
    <span style="background:{{ $bg_t_c }}; padding:10px 0px 0px 0px; line-hight:auto; font-size:110%; margin-bottom:10px; margin-top:-10px">
                    <marquee>
<?php echo $image39;?>
</marquee>
    </span>      
 </div>

 </div> 
 
 
 
 
 
 </div>          
 </div>          
</section>     
     
     
     
     
     
  
  
     
     
     
     
     
     
     
     
   

     
     
     
     
     
     
     
     
     
     
     
     
       
  
  
    <section id="aa-product" style="margin-top:10px;">
    <div class="container">
      <div class="row">
          
          


        <div class="col-md-12" style="padding:7px">
            
            
            
   
                                 
 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-top-right-radius: 8px; border-top-left-radius: 8px;"  ><span >Top Category</span>

</a></li></ul>
              
              
               

                    
                  
                  <div class="tab-content" style="margin-top:-20px; padding:10px; height:auto; border:1px solid {{$bg_t_c}}; border-radius:5px">

                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-top:-15px;" >
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('categories')
       ->where(['top' => 1])
        ->orderby('o_c', 'ASC')
        ->get();
        
        
        ?>
		
		
		<?php
		
        $md = DB::table('banners')
       ->where(['id' => 1008])
        ->first();
      ;?>
        
         
         @if(!empty($md->image))
			<div class="col-3 col-md-2 col-sm-4 col-xs-4"  style="margin-top:5px; float:left;  padding:6px;" >
				   	<a href="{{url('/')}}/medicine"> 
    				   	<div style="float:left; width:100%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        
    				        <img src="https://milimishi.com/img/catagory_con.png" style="max-width:100%;border-radius:4px;">
    				        



		        
    				        <br>
    				     <div style="font-size:70%; height:40px;     overflow: hidden;
"> Medicine Delivery</div> 
                </div>
					</a>
				</div>
		@endif
        
        
        
		
	
	
	
	@foreach ($bangladesh_n_p as $bnp)		
			
			<div class="col-3 col-md-2 col-sm-4 col-xs-4"  style="margin-top:5px; float:left;  padding:6px;" >
				   	<a href="{{url('/')}}/products/{{$bnp->name}}?cid={{$bnp->id}}"> 
    				   	<div style="float:left; width:100%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        @if(!empty($bnp->img))
    				        <img src="{{url('/')}}/assets/admin/img/category_icon/{{$bnp->img}}" style="max-width:100%;border-radius:4px;">
    				        @else
<img src="https://ictsky.com/image/catagory_con.png" style="max-width:100%;border-radius:4px;">



@endif
    				        
    				        
    				        <div style="font-size:70%; height:40px;     overflow: hidden;
"> {{$bnp->name}}</div> 
                </div>
					</a>
				</div>	
		
		
			
	@endforeach		
			
			
			
			
			
			
			
                        
             </div>           
                        
                        
                        
                      



        
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  
  
     
     
     
     
     
     
     
     
    
  
  
  
   
  
    <section id="aa-product" style="margin-top:10px;">
    <div class="container">
      <div class="row">
          
          


        <div class="col-md-12" style="padding:7px">
            
            
            
   
                                 
 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-top-right-radius: 8px; border-top-left-radius: 8px;"  ><span >Shop by Brands</span>

</a></li></ul>
              
              
               

                    
                  
                  <div class="tab-content" style="padding:10px; margin-top:-20px; border:1px solid {{$bg_t_c}};border-radius:5px">
                    <div class="tab-pane fade in active" id="men">
                        
                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-bottom:0px; margin-top:0px;">
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('brands')
       ->inRandomOrder()->where(['top' => 1])
        ->orderby('id', 'ASC')
        ->limit(11)
        
        ->get();
        
        
        
        

        
         $bcccc = DB::table('brands')->where(['top' => 1])->count();
        ?>
		
	@foreach ($bangladesh_n_p as $bnp)		
		
			<div class="col-3 col-md-1 col-sm-3 col-xs-3"  style="margin-top:5px; float:left;  padding:6px;" >
				   	<a href="{{url('/')}}/search2/{{$bnp->name}}"> 
    				   	<div  style=" float:left;  padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        @if(!empty($bnp->img))
    				        <img src="{{url('/')}}/assets/admin/img/category_icon/{{$bnp->img}}" style="width:75px">
    				        @else
<i class="fa fa-paper-plane" aria-hidden="true" style="font-size:100%"></i>



@endif
    				        
    				        <br>
    				     <div style="font-size:60%; height:30px;     overflow: hidden;
"> {{$bnp->name}}</div> 
                </div>
					</a>
				</div>	
		
		
	@endforeach				

		<div   style="margin-top:15px; float:left; margin-left:10px">
				   	<a href="{{url('/')}}/brands"> 
				   	    				     <span style="width:100%;font-size:100%; text-align:center; color:blue"> {{$bcccc}}+ Brands</span> <br>

    				   	<div style="float:left; width:100%; margin-left:0px; padding: 1px 1px; background:#FFFFFF;  font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        <img src="{{url('/')}}/admin/img/view_all.png" style="width:80px;border-radius:8px">
    				       
                        </div>
					</a>
				</div>		
				
				
				
				
	
				</div>           
                        
                        
                        
                      
                    </div>
                  

                  </div>
               
                 
       
          </div>
        </div>
      </div>
    </div>
  </section> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
  
  
     
     
     
     
   	<?php 
	$m_prmi=DB::table('banners')->where('id',1010)->first();
	
	?>	
		
	@if($m_prmi->image == 1)
     
    <section id="aa-product" style="margin-top:50px">
    <div class="container">
      <div class="row">
          
          


        <div class="col-md-12">
            
            
             
          
                
            
          <div class="row">
        
   
                                 
 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-top-right-radius: 8px; border-top-left-radius: 8px;"  ><span >Shop by Store</span>

</a></li></ul>
              
              
               

                    
                        
                        
                              
                  <div class="tab-content" style="padding:10px; margin-top:-20px; border:1px solid {{$bg_t_c}};border-radius:5px">
                    <div class="tab-pane fade in active" id="men">
                        
                        
                        
                        
                      			

		
				<div class="row" style="margin-bottom:0px; margin-top:0px;">

		
		<?php
		
        $bangladesh_n_p = DB::table('shops')
        ->inRandomOrder()
       ->where(['status' => 2])
        ->orderby('id', 'ASC')
            ->limit(11)
    
        ->get();
        
                 $bccccs = DB::table('shops')->where(['status' => 2])->count();

        ?>
		
	@foreach ($bangladesh_n_p as $bnp)		
		
			<div class="col-3 col-md-1 col-sm-3 col-xs-3"  style="margin-top:5px; float:left;  padding:6px;" >
				   	<a href="{{url('/')}}/shop/{{$bnp->id}}"> 
<div  style=" float:left; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        @if(!empty($bnp->logo))
    				        <img src="{{url('/')}}/assets/admin/img/shops/{{$bnp->logo}}" style="height:80px; border-radius:2px">
    				     





    				     
    				        @else
<i class="fa fa-paper-plane" aria-hidden="true" style="font-size:100%"></i>



@endif
    				        
    				        <br>
    				        <div style="font-size:60%; background:#AAB7B8; color:white;  height:30px;line-height:30px;     overflow: hidden;
"> {{$bnp->shop_name}}</div> 
                </div>
					</a>
				</div>	
		
		
	@endforeach				

				
		<div   style="margin-top:15px; float:left; margin-left:10px">
				   	<a href="{{url('/')}}/shops"> 
				   					   	    				     <span style="width:100%;font-size:100%; text-align:center; color:blue"> {{$bccccs}}+ Shops</span> <br>

    				   	<div style="float:left; width:100%; margin-left:0px; padding: 1px 1px; background:#FFFFFF;  font-size:120%; color:black; border-radius:4px;text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    				        <img src="{{url('/')}}/admin/img/view_all.png" style="width:80px">
    				       
                        </div>
					</a>
				</div>					
				
				
				
	
				</div>           
                        
                        
                        
                      
                    </div>
                  

                  </div>
               
                 
              </div>
         
        </div>
      </div>
    </div>
  </section>
     
    @endif   
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

  
  
  
  
  
  
  
  
  <div class="com_add">
   <section id="aa-product" style="margin-top:5px;margin-bottom:-30px">
    <div class="container">
             <div class="row">
      <div class="col-md-12" style="padding:7px"> 
        
                
          <div class="com_add" style="width:100%;  margin-bottom:10px;">
              
              
            <div class="aa-banner-area" style="height:200px;width:49%; float:left; border:1px silver solid">
                <a href="{{$url4}}">
                <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image4;?>" alt=" banner img" style="height:200px; width:100%">
                </a>
          </div>
          
          
          
               <div class="aa-banner-area" style="height:200px;width:50%; float:right; border:1px silver solid">
                                   <a href="{{$url5}}">

                <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image5;?>" alt=" banner img" style="height:200px; width:100%">
                </a>
          </div>       
          
          </div>                   
        
        
        
        
      
    </div>
    </div>
    </div>
  </section>
  </div>  
  
  
  
  
  
  
  
  
  
  
  <div class="mob_add">
   <section id="aa-product" style="margin-top:5px; margin-bottom:-30px">
    <div class="container">
        
      <div class="row">
      <div class="col-md-12" style="padding:7px">
                
          <div class="mob_add" style="width:100%;  margin-bottom:10px;">
              
              
            <div class="aa-banner-area" style="height:110px;width:49%; float:left; border:1px silver solid">
                <a href="{{$url4}}">
                <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image4;?>" alt=" banner img" style="height:100px; width:100%">
                </a>
          </div>
          
          
          
               <div class="aa-banner-area" style="height:110px;width:50%; float:right; border:1px silver solid">
                                   <a href="{{$url5}}">

                <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image5;?>" alt=" banner img" style="height:100px; width:100%">
                </a>
          </div>       
          
          </div>                   
        
        
        
        
      
    </div>
    </div>
    </div>
  </section>
  </div>  
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
<!-- Camp start !-->
 <section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
                   
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
          
          
          
          
          
          
     <?php

     
      
      $allproducts=DB::table('products')->where('position2',1)->inRandomOrder()->limit(15)->get();
      
      
      $ct1=DB::table('products')->where('position2',1)->count();
      ;?>    
     
     @if(@$ct1 > 0)     
       <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white"> <i class="fa fa-bullhorn" aria-hidden="true" style="font-size:140%; color:yellow"></i> Campaign Product  
                    </span>

        </a></li></ul> 
        
        
                
            
                
                
                <h4 style="color:blue; text-align:center">
                
                @if(!empty($campd->extra13))
                 @if($aj_date < $campd->extra13 )
                 
                        <?php
                        $date=date_create("$campd->extra13");
                        $end_d=date_format($date,"M d, Y d H:i:s");
                        //Jan 5, 2024 15:37:25
                        ;?>
                         <p id="demo" style="color:white; background:red; width:250px; margin:auto; margin-bottom:20px; border-top-left-radius:20px;border-bottom-right-radius:20px">
                             
                             
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
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
                               
                               
                               
                               
                               
                              <div class="" id="news_c{{$product->id}}" onclick="newapppp_c{{$product->id}}()" type="button" style="cursor: alias">
                              <div class=""  id="newlo_c{{$product->id}}" style="background:{{$bg_t_c}}; text-align:center; margin:auto;  padding:2px 0px; width:100%; border-radius:0px; ">
                               <span class="" style="color:white; font-size:100%"><span class="fa fa-shopping-cart"></span> 
                            <span id="so_c{{$product->id}}">
                                
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


function newapppp_c{{$product->id}}(){
        $.ajax({
            url:'https://{{$urla}}/cart_action.php?pid={{$product->id}}',
                        success:function(response){
                        $('#so_c{{$product->id}}').html(response);
                        }
        });
        
         $.ajax({
            url:'https://{{$urla}}/cart_message.php',
                        success:function(response){
                        $('#sm11_c{{$product->id}}').html(response);
                  
                        }
                        
        });
        
        
        
        
        var form=document.getElementById('newlo_c{{$product->id}}').reset();
        return false;
        
        
        
    } 
</script>


<div style="margin-top:-5px; width:100%; float:left">
<span id="sm11_c{{$product->id}}" style="font-size:90%;margin-top:-2px"></span>
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
                        

<?php 
      $all_ccount=DB::table('products')->where('position2',1)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in this Campaign</h5><br>
				   	<a href="{{url('/')}}/offer?camping=1"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  <!--  Camp end  -->

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
<!-- Dis start !-->
 <section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
     <?php

     
      
      $allproducts=DB::table('products')->where('offer','>',0)->inRandomOrder()->limit(15)->get();
      
      
      $ct1=DB::table('products')->where('offer','>',0)->count();
      ;?>    
     
     @if(@$ct1 > 0)     
       <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white"> <i class="fa fa fa-gift" aria-hidden="true" style="font-size:140%; color:yellow"></i> Special Discount  
                    </span>

        </a></li></ul>            

    @endif   
          
          
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
                               
                               
                               
                               
                               
                              <div class="" id="news_d{{$product->id}}" onclick="newapppp_d{{$product->id}}()" type="button" style="cursor: alias">
                              <div class=""  id="newlo_d{{$product->id}}" style="background:{{$bg_t_c}}; text-align:center; margin:auto;  padding:2px 0px; width:100%; border-radius:0px; ">
                               <span class="" style="color:white; font-size:100%"><span class="fa fa-shopping-cart"></span> 
                            <span id="so_d{{$product->id}}">
                                
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


function newapppp_d{{$product->id}}(){
        $.ajax({
            url:'https://{{$urla}}/cart_action.php?pid={{$product->id}}',
                        success:function(response){
                        $('#so_d{{$product->id}}').html(response);
                        }
        });
        
         $.ajax({
            url:'https://{{$urla}}/cart_message.php',
                        success:function(response){
                        $('#sm11_d{{$product->id}}').html(response);
                  
                        }
                        
        });
        
        
        
        
        var form=document.getElementById('newlo_d{{$product->id}}').reset();
        return false;
        
        
        
    } 
</script>


<div style="margin-top:-5px; width:100%; float:left">
<span id="sm11_d{{$product->id}}" style="font-size:90%;margin-top:-2px"></span>
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
                        

<?php 
      $all_ccount=DB::table('products')->where('offer','>',0)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in Special Discount</h5><br>
				   	<a href="{{url('/')}}/offer?camping=1"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  <!--  Dis end  -->
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
 
<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
     <?php
      $ct1=DB::table('categories')->where('parent_id',0)->where('o_c',1)->first();
      
      $allproducts=DB::table('products')->where('parent_id',@$ct1->id)->where('extra10',1)->inRandomOrder()->limit(15)->get();
      ;?>    
     
     @if(@$ct1->id > 0)     
    <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white">{{@$ct1->name}}</span>

   </a></li></ul>            
       @endif   
          
          
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
                        
                        
                        
<?php 
      $all_ccount=DB::table('products')->where('parent_id',@$ct1->id)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in {{@$ct1->name}} Category</h5><br>
				   	<a href="{{url('/')}}/products/{{@$ct1->name}}?cid={{@$ct1->id}}"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  <!-- / Products section -->
  <!-- banner section -->
  
  
  
  
  
  <!-- popular section -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     
 
<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
     <?php
      $ct1=DB::table('categories')->where('parent_id',0)->where('o_c',2)->first();
      
      $allproducts=DB::table('products')->where('parent_id',@$ct1->id)->where('extra10',1)->inRandomOrder()->limit(15)->get();
      ;?>    
     
     @if(@$ct1->id > 0)     
    <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white">{{@$ct1->name}}</span>

   </a></li></ul>            
       @endif   
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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




<?php 
      $all_ccount=DB::table('products')->where('parent_id',@$ct1->id)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in {{@$ct1->name}} Category</h5><br>
				   	<a href="{{url('/')}}/products/{{@$ct1->name}}?cid={{@$ct1->id}}"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif




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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     
 
<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
      <?php
      $ct1=DB::table('categories')->where('parent_id',0)->where('o_c',3)->first();
      
      $allproducts=DB::table('products')->where('parent_id',@$ct1->id)->where('extra10',1)->inRandomOrder()->limit(15)->get();
      ;?>    
     
     @if(@$ct1->id > 0)     
    <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white">{{@$ct1->name}}</span>

   </a></li></ul>            
       @endif   
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
<?php 
      $all_ccount=DB::table('products')->where('parent_id',@$ct1->id)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in {{@$ct1->name}} Category</h5><br>
				   	<a href="{{url('/')}}/products/{{@$ct1->name}}?cid={{@$ct1->id}}"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  
  
  
  
  
  
  
  
  
  
  
       
 
<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
          
          
      <?php
      $ct1=DB::table('categories')->where('parent_id',0)->where('o_c',4)->first();
      
      $allproducts=DB::table('products')->where('parent_id',@$ct1->id)->where('extra10',1)->inRandomOrder()->limit(15)->get();
      ;?>    
     
     @if(@$ct1->id > 0)     
    <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white">{{@$ct1->name}}</span>

   </a></li></ul>            
       @endif   
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
<?php 
      $all_ccount=DB::table('products')->where('parent_id',@$ct1->id)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in {{@$ct1->name}} Category</h5><br>
				   	<a href="{{url('/')}}/products/{{@$ct1->name}}?cid={{@$ct1->id}}"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  
  
       
 
<section id="aa-product-category">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-8 col-md-push-0">
            
            
             
          
                
            
          <div class="row" style="margin-top:40px">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 
                <!-- start prduct navigation -->
                
   
          
              
          
      <?php
      $ct1=DB::table('categories')->where('parent_id',0)->where('o_c',5)->first();
      
      $allproducts=DB::table('products')->where('parent_id',@$ct1->id)->where('extra10',1)->inRandomOrder()->limit(15)->get();
      ;?>    
     
     @if(@$ct1->id > 0)     
    <ul class="nav nav-tabs aa-products-tab" style="background:{{$bg_t_c}};" >
                    <li class="active" ><a href="#men" data-toggle="tab"><span style="color:white">{{@$ct1->name}}</span>

   </a></li></ul>            
       @endif   
          
          
          
    
                
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active items" id="men" >
                        
                      <ul class="aa-product-catg">
                        @foreach($allproducts as $product)
                        
                        
                        <li style="border:0px solid silver; background:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:5px">
    
                          <figure>
                                   <div style="border:0px solid {{$bg_t_c}};">          
               
                      <div style="width:70%; margin:auto; padding:2px; ">
                            <a class="aa-product-img" href="{{ url('/product/'.$product->id) }}"><img src="{{ asset('assets/admin/img/products/large/'.$product->image) }}" style="background:white"  alt="Img error"></a>
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
<?php 
      $all_ccount=DB::table('products')->where('parent_id',@$ct1->id)->count();
;?>
@if(@$all_ccount > 15)
<li style="margin-top:100px"><h5> {{$all_ccount}}+ Products in {{@$ct1->name}} Category</h5><br>
				   	<a href="{{url('/')}}/products/{{@$ct1->name}}?cid={{@$ct1->id}}"> 

<span style="background:red;color:white; height:40px; border:0px; padding:10px; border-radius:5px">View All</span>
</a>

</li>
@endif
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
                                  <a href="#" class="aa-add-to-cart-btn">Buy Now</a>
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
  
  
  
  
  
  
  
     
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


  
  
  
  

  <!-- / Products section -->
  
  
  
  


  

  
  
  
  
  
     
 
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

;?> 


   <?php
$date=date('d-M-y');


$select_v="SELECT h_count from v_count where sl='1'";
$lsdk=mysqli_query($conn, $select_v);
while ($vvv=mysqli_fetch_array($lsdk))
{
@$p_coutn=$vvv['h_count'];
}




@$fcn=@$p_coutn+1;
$sqlf = "UPDATE v_count SET h_count='$fcn' where sl= 1";
$qqry=mysqli_query($conn, $sqlf);




$select_v2="SELECT *from v_count where sl=2";
$lsdk2=mysqli_query($conn, $select_v2);
while ($vvv2=mysqli_fetch_array($lsdk2))
{
@$p_coutn2=$vvv2['h_count'];
@$date2=$vvv2['date'];
}


if (@$date2!=$date)
{
$fcn2=@$p_coutn2+1;
$sqlf2 = "UPDATE v_count SET h_count='1', date='$date' where sl= 2";
$qqry2=mysqli_query($conn, $sqlf2);
}
else
{
$fcn2=$p_coutn2+1;
$sqlf2 = "UPDATE v_count SET h_count='$fcn2', date='$date' where sl= 2";
$qqry2=mysqli_query($conn, $sqlf2);
}



?>
  
  
  
  
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck" style="color:white"></span>
                <h4>Regular Shipping</h4>
                 <P>@foreach($results23 as $t23)
{!! nl2br($t23->image) !!}
@endforeach
</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o" style="color:white"></span>
                <h4>Fast Shipping</h4>
                 <P>@foreach($results24 as $t24)
{!! nl2br($t24->image) !!}
@endforeach
</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone" style="color:white"></span>
                <h4>SUPPORT</h4>
                
                <P>@foreach($results25 as $t25)
{!! nl2br($t25->image) !!}
@endforeach
</P>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->










 </body>





@endsection













