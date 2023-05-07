@extends('layouts.temp2.master')
@section('content')








	@include('layouts.temp2.nav')
  


<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
      
   
   
   
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
     
      
      
      
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard  </h3></a>

<h3 style="color:black; padding:10px 50px; text-align:center"> All Product (Common Sotre): </h3>


                     @if (Session::has('message_success'))
                      
                                  <h2 style="color:green;  padding:5px 5px; text-align:center"> {{ session('message_success') }} </h2>

                                 @endif
      

<h4 style="color:red;  text-align:center">যে সকল প্রোডাক্ট আপনার সংগ্রহে নেই বা   চলমান বাজারমূল্যে দ্রুত সংগ্রহ করে দিতে পারবেন না, সেসকল প্রোডাক্ট অনুগ্রহ করে আপনার স্টোরে এ্যাড করবেন না। </h4>



<div class="text-center" width="90">
<form id="account_Form" class="aa-login-form" name="accountForm" action="{{url('/')}}/shopallproduct2" method="post" enctype="multipart/form-data">
								@csrf
	
	
	 <?php
                    $aa_dist=DB::table('categories')->where('parent_id',0)->orderby('id','ASC')->get();
                   ;?>
           														
							

<select name="ctg" style="width:40%; padding:6px;"  required="">
                       <option value="">Select Category</option>

@foreach ($aa_dist as $dist)
    <option value="{{$dist->id}}">{{$dist->name}}</option>
@endforeach</select>

							






<input type="submit"  style="width:15%; background:silver; font-size:130%;" value="Search">
</form>

</div>
<div class="text-center" width="90">
 <?php

if(isset($ctg))
{
    $ctg2=$ctg;
}
else
{
            $ctg2=Session::get('ctgs');

}



if(!isset($_GET['page']))
{
 $ctgs=$ctg2;
          Session::put('ctgs', $ctg2);

}
else
{
        $ctgs=Session::get('ctgs');
}

      
      




    
      $orders=DB::table('products')->where('parent_id',$ctgs)
                                              ->where('category_id','<',99999)

            ->paginate(30);
 




;?>

 
 
    <?php
    if(isset($ctgs))
    {
        
         $aadfsdf_sddist=DB::table('categories')->where('id',$ctgs)->first();
       $skldfj= $aadfsdf_sddist->name;
        echo '<h4 style="color:green">Category: '.$skldfj.'</h4>' ;
    }
    ?>
    
</div>


    <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
              <tr>
                  <th>Product ID</th>
                  
                  <th>Category</th>
                  <th>Name</th>
                  <th>Details</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>





            @foreach ($orders as $order)
            
                               
              <tr>
                  <td>{{$order->id}}</td>
                  <td>
                      <?php
                      $pidd=$order->parent_id;
                      $pidd2=$order->category_id;
                      
                      
                                  $ordersr=DB::table('categories')
                                  ->where('id',$pidd)
                                  ->first();
                                  
                                  
                                  
                                  $ordersr2=DB::table('categories')
                                  ->where('id',$pidd2)
                                  ->first();

                      ?>
                      
                      {{@$ordersr->name}}<b> > </b> {{@$ordersr2->name}}</td>
                  
                    <td><img src="{{url('/')}}/assets/admin/img/products/large/{{$order->image}}" style="width:50px"><br>{{$order->product_name}}</td>
                   <td>{{$order->description}}</td>
                  
                  <td> 
                  
                  <?php
                  $user_id = Auth::user()->id;

		      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->first();
		      @$shop_statu=$myshop->id;
                  
                  
                  		      $myshoper= DB::table('s_product')->where('shop_id',$shop_statu)->where('product_id',$order->id)->get()->count();

                  
                  
                  
                  
                  ?>
                  @if($myshoper>0)
               <span style="color:green">  Stored (স্টোরে সংযুক্ত হয়েছে)</span>
                  @else
                  
                  <form  method="post" action="{{ url('/addproductmmm') }}" name="add_products">
                {{ csrf_field() }}
                <p>Common Price: {{$order->price}}</p>
                
                
                <input type="hidden" name="pid" value="{{$order->id}}">
                <input type="hidden" name="c_id" value="{{$pidd}}">
                <input type="hidden" name="sub_c_id" value="{{$pidd2}}">
                <input type="hidden" name="child_id" value="{{$order->child_id}}">
                
                
                
                <input type="number" name="price" placeholder="Your Price" required="">
<input type="submit" value="Add to my Store"/>
</form>
@endif



</td>









 






              </tr>
            @endforeach


          </tbody>
   
      </table>
      <div class="text-center">
          {!! $orders->links(); !!}

          
      </div>
  </div>
</section><!--/#do_action-->

@endsection

<script>
    
</script>
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
