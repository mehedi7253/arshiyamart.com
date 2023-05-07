@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      
      
      
   
   
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);


    ;?>        
          
          
@foreach($results12 as $t12)
     <?php 
       $h12=$t12->image;     
     ;?>
@endforeach

@foreach($results13 as $t13)
     <?php 
         $h13=$t13->image;     
     ;?>
@endforeach
   
 
 @foreach($results14 as $t14)
     <?php 
        $h14=$t14->image;     
     ;?>
@endforeach
     
   
      
 @foreach($results22 as $t22)
     <?php 
        $h22=$t22->image;     
     ;?>
@endforeach
     
      
      
      
      
        @if (Session::has('bKash'))
                      
                                  
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                    
                                      </h4>

                                 @endif
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard  </h3></a>

<h2 style="color:black; padding:50px 50px; text-align:center"> All Product (My Store): </h2>
     <p style="text-align:right">
    
    <a href="{{url('/shopallproduct')}}"><sapn style="color:blue; padding:8px; background:silver; border-radius:5px;" >  + Add product from Common Store </sapn>  </a>  <br><br>
    <a href="{{url('/shopaddpoduct')}}"><sapn style="color:blue; padding:8px; background:silver; border-radius:5px; margin-top:15px" > + Add New Product </sapn> </a> 
      
     </p> 
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>SL</th>
                  <th>Product ID</th>
                  <th>Img<br> Name</th>
                  <th>Deatils</th>
                                    <th>Edit</th>

              </tr>
          </thead>
          <tbody>

<?php
$sl=1;
$atuth_id=Auth::user()->id;
            $orders=DB::table('shops')->where('owner_user_id',$atuth_id)->first();
            
            
            
$atuth_sid=$orders->id;




            $orders=DB::table('s_product')->where('shop_id',$atuth_sid)->get();


;?>



            @foreach ($orders as $order)
    
    
    
    
    		<?php
		
		        	            $allproductsk = DB::table('products')->where('id',$order->product_id)->where('status',1)->get();

		
		
		  ;?>					

	


							@foreach ($allproductsk as $allproduct)
    
    
    
    
    
            
                               
              <tr>
                  <td>{{$sl++}}</td>
                    <td>
                      <?php
                      $pidd=$allproduct->parent_id;
                      $pidd2=$allproduct->category_id;
                      
                      
                                  $ordersr=DB::table('categories')
                                  ->where('id',$pidd)
                                  ->first();
                                  
                                  
                                  
                                  $ordersr2=DB::table('categories')
                                  ->where('id',$pidd2)
                                  ->first();

                      ?>
                      
                      
                                             

                      
                      {{$ordersr->name}}<b> > </b> {{$ordersr2->name}} <br>
                      (ID: {{$allproduct->id}} )
                      </td>
                  
                
                  
                    <td>
                        <img src="{{url('/')}}/assets/admin/img/products/large/{{$allproduct->image}}" style="width:50px"><br>{{$allproduct->product_name}}<br>Price: {{$order->price}}
                    
                    
                             <br>  <button data-toggle="modal" data-target="#modal-lgv{{$allproduct->id }}">
                            <i class="fa fa-eye" aria-hidden="true"></i> 
                            Details</button>
                    
                    
                    
                    		
		
                        		   <div class="modal fade" id="modal-lgv{{ $allproduct->id }}" style="z-index:34343">
                                <div class="modal-dialog modal-lg">
                                  <form action="#" method="post" enctype="multipart/form-data">
                                      @csrf
                                  <div class="modal-content">
                        		          <button type="button" class="btn btn-default" data-dismiss="modal" style="width:50px; background:red; color:white; margin-left:80%">  X </button>
                        
                                      <div class="modal-body">
                        
                     
                     
                                                  <p>{!! nl2br($allproduct->description) !!}</p>
                                          
                            
                        
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                     
<!--                                        <input type="submit" class="btn btn-primary" value="Update Information">
-->                                      </div>
                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div> 
		
		
                    
                    
                    
                    
                    
                    </td>
         
               
       
                  
                  
                  
                       
                       

               
                      
                  
                  
                  
                  
                  <td><button data-toggle="modal" data-target="#modal-lge{{$allproduct->id }}">Eidt</button>
                  
                  
                  
                  
                        		   <div class="modal fade" id="modal-lge{{ $allproduct->id }}" style="z-index:34343">
                                <div class="modal-dialog modal-lg">
                                  <form action="#" method="post" enctype="multipart/form-data">
                                      @csrf
                                  <div class="modal-content">
                        		          <button type="button" class="btn btn-default" data-dismiss="modal" style="width:50px; background:red; color:white; margin-left:80%">  X </button>
                        
                                      <div class="modal-body">
                        
                     
                     
                                                 
                                          
                            
                        
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                     
                                      <input type="submit" class="btn btn-primary" value="Update Information">
                                      </div>
                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div> 
		
                  </td>
                  <td> <button data-toggle="modal" data-target="#modal-lgd{{$allproduct->id }}">Delete</button>
                  
                  
                        		   <div class="modal fade" id="modal-lgd{{ $allproduct->id }}" style="z-index:34343">
                                <div class="modal-dialog modal-lg">
                                  <form action="#" method="post" enctype="multipart/form-data">
                                      @csrf
                                  <div class="modal-content">
                        		          <button type="button" class="btn btn-default" data-dismiss="modal" style="width:50px; background:red; color:white; margin-left:80%">  X </button>
                        
                                      <div class="modal-body">
                        
                     
                     <h4 style="color:blue">Product Name: {{$allproduct->product_name}}</h4>
                     <hr>
                     <h4 style="color:red">আপনি কি নিশ্চিত? এই প্রোডাক্টটি ডিলেট করতে ইচ্ছুক!</h4>
                                               
                                          
                            
                        
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                     
                                      <input type="submit" class="btn btn-primary" value="Confirm & Delete">
                                   </div>
                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div> 
		
                  </td>
                  

              </tr>
            @endforeach

            @endforeach

          </tbody>
   
      </table>

  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
