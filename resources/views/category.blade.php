@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

     
           
           
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






     
     
     
     
     
  
  
     
     
     
     
     
     
     
     
   

     
     
     
     
     
     
     
     
     
     
     
     
       
  
  
    <section id="aa-product" style="margin-top:90px;">
    <div class="container">
      <div class="row">
          
          


        <div class="col-md-12" style="padding:7px">
            
            
            
   
                                 
 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active" ><a href="#men" data-toggle="tab" style="background:{{$bg_t_c}}; color:white;   border-top-right-radius: 8px; border-top-left-radius: 8px;"  ><span >All Category</span>

</a></li></ul>
              
              
               

                    
                  
                  <div class="tab-content" style="margin-top:-20px; padding:10px; height:auto; border:1px solid {{$bg_t_c}}; border-radius:5px">

                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-top:-15px;" >
		
		
		
		
		<?php
		
        $bangladesh_n_p = DB::table('categories')
       ->where(['parent_id' => 0])
        ->orderby('o_c', 'DESC')
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
                <span class="fa fa-truck"></span>
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
                <span class="fa fa-clock-o"></span>
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
                <span class="fa fa-phone"></span>
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













