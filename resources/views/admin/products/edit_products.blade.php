@extends('layouts.adminLayouts.admin_master2')
@section('content')
<body onload="myFunctionld()">
    
    
     
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-products') }}" class="current">Edit Product</a> </div>
      <h1>Products</h1>
    </div> 
      
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Product</h5>
            </div>
            <div class="widget-content nopadding">
              @if (Session::has('message_success'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-success">
 
                                   <strong style="color:#000">{{ session('message_success') }} </strong>

<a href="/admin/view-products" style="color:blue"> View All Product </a>
                               </div>
                             </div>
                       </div>
               @endif 
              @if (Session::has('message_error'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-danger">

                                   <strong style="color:#000">{{ session('message_error') }}</strong>

                               </div>
                             </div>
                       </div>
               @endif
              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}" name="edit_products" id="edit_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}




@if(!empty($productDetails->shop_id))
(মার্সেন্ট এর আপলোডকৃত প্রোডাক্টগুলো  এ্যাপ্রুভ করার পূর্বে, ইমেইজ ভাল করে দেখে নিতে হবে, প্রয়োজনে এডিট করার প্রয়োজন হলে করে নিতে হবে)।<br>
                    <input type="hidden" name="ss_status" value="{{ $productDetails->status }}">

@endif
@if(!empty($productDetails->spnote))
<span style="color:blue">Note: {{$productDetails->spnote}}</span>
@endif



@if(!empty($productDetails->shop_id))
                    <input type="hidden" name="shop_id" value="{{ $productDetails->shop_id }}">
@endif  










                <div class="control-group">
                  <label class="control-label"> Select Category </label>
                  <div class="controls">
                    <select name="category_id" id="category_id" id="mySelect" onchange="ChangeCarList()"  style="width:26%">
                      <?php echo $categories_drop ; ?>
                    </select>
                  </div>
                </div>
                
       
       
       	<?php
		
        $bangladesh_n_p4 = DB::table('child_category')
        ->orderby('id', 'ASC')
        ->get();
        
        
        
             $bangladesh_n_p44 = DB::table('child_category')
        ->where('id', $productDetails->child_id)
        ->first();
        
        
        
        
        
        
        

        
        ?>
       
       
                  <div class="control-group">
                  <label class="control-label"> Select Child Category <span style="color:red">(if any) </label>
                  <div class="controls">
                    <select name="child_id" id="sm14" style="width:26%" >
                       		@if($productDetails->child_id >0)
		<option value="{{$productDetails->child_id}}">{{$bangladesh_n_p44->name}}</option>
		@else
 <option value="">Select Child Category</option>

		@endif


	@foreach ($bangladesh_n_p4 as $bnp4)		
			
		
		<option value="{{$bnp4->id}}">{{$bnp4->name}}</option>
		
			
	@endforeach	
                    </select>
                  </div>
                </div>  
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    <div class="control-group">
                  <label class="control-label"> Select Brands <span style="color:red">(if any) </span></label>
                  <div class="controls">
                    <select name="brands" id="category_id" style="width:26%" >
	<?php
		
        $bangladesh_n_p = DB::table('brands')
        ->orderby('id', 'ASC')
        ->get();
        
        

        
        ?>
        
		@if(!empty($productDetails->brand))
		<option value="{{$productDetails->brand}}">{{$productDetails->brand}}</option>
		@else
										<option value="N/A">N/A</option>

		@endif




	@foreach ($bangladesh_n_p as $bnp)		
			
		
		<option>{{$bnp->name}}</option>
		
			
	@endforeach		                    
	</select>
                  </div>
                </div>           
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
         
    <div class="control-group">
                  <label class="control-label"> Select supplier <span style="color:red">(if any) </span></label>
                  <div class="controls">
                    <select name="supplier" id="category_id" style="width:26%" >
	<?php
		
        $bangladesh_n_p = DB::table('brands5')
        ->orderby('id', 'DESC')
        ->get();
        
        

        
        ?>
        
        
        
        
		@if(!empty($bangladesh_n_p->supplier))
		<option value="{{$productDetails->supplier}}">{{$productDetails->brand}}</option>
		@else
										<option value="N/A">N/A</option>

		@endif




	@foreach ($bangladesh_n_p as $bnp)		
			
		
		<option>{{$bnp->name}}</option>
		
			
	@endforeach		                    
	</select>
                  </div>
                </div>           
       
       
       
       



<!--

  <div class="control-group">
      
                  <label class="control-label" style="color:red">Cash Back (if any)</label>
                  <span style="color:red">একই প্রডাক্ট এর ক্ষেত্রে ক্যাশব্যাক ও অফার একসাথে চালানো যাবে না</span>
                  
                  <div class="controls">
                    <input type="number" name="cash_back" id="status"><span style="color:red" value="{{ $productDetails->cash_back }}">%</span>
                  </div>
                </div>
     
            
                -->
    
                
                
                
                
                <div class="control-group">
                  <label class="control-label">Product Name</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name" value="{{ $productDetails->product_name }}">
                  </div>
                </div>

   
   
   
   
    <div class="control-group">
                  <label class="control-label">Campaing Product <span style="color:red">(if any)</span></label>
                  <div class="controls">
                    <input type="checkbox" name="position2" id="status" @if ($productDetails->position2 == "1") checked  @endif value="1">
                  </div>
                </div>

<!-- 
  <div class="control-group">
                  <label class="control-label">Popular Product <span style="color:red">(if any)</span></label>
                  <div class="controls">
                    <input type="checkbox" name="position" id="status" value="1" @if ($productDetails->position == "1") checked  @endif value="1">
                  </div>
                </div>
-->
   
   
   
   
   
   
   
   
   
   

              
                    <input type="hidden" name="product_color" id="product_color" value="N/Z" required="">
                



   
                    <input type="hidden" name="care" id="product_color" value="" required="">
           
            




                <div class="control-group">
                  <label class="control-label" style="color:red">Grantee (if any)</label>
                  <div class="controls"> 
                    <input type="text" name="grantee" id="" value="{{ $productDetails->grantee }}">
                  </div>
                </div>
            
         
         
         
         
         
                <div class="control-group">
                  <label class="control-label" style="color:red">Warranty (if any)</label>
                  <div class="controls"> 
                    <input type="text" name="warranty" id="" value="{{ $productDetails->warranty }}">
                  </div>
                </div>








                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description">{{ $productDetails->description }}</textarea>
                  </div>
                </div>

     
       <script>
function myFunctionld(){    

          sessionStorage.setItem("c_price", {{ $productDetails->price }});
          sessionStorage.setItem("p_price", {{ $productDetails->offer }});
          sessionStorage.setItem("discount", {{ $productDetails->p_price }});

          
          

}
</script>
         
                

                <div class="control-group">
                  <label class="control-label">Product Sell Price</label>
                  <div class="controls">
                    <input type="text" name="price" id="c_price" onkeyup="cprice()"  value="{{ $productDetails->price }}" />
                  </div>
                </div>
            
            
            
              <div class="control-group">
                  <label class="control-label" style="color:red">Special Offer (Discount ) </label>
                  
                  <div class="controls">
                    <input type="number" name="offer"  id="discount2"  onkeyup="discount()" value="{{ $productDetails->offer }}">%
                  </div>
            </div>
            
            
            
            
            
            
            
            
                <div class="control-group">
                  <label class="control-label" style="color:red">Privious Sell Price (if any)</label>
                  <div class="controls"> 
                    <input type="number" name="p_price" id="p_price"  onkeyup="pprice()"  value="{{ $productDetails->p_price }}">
                  </div>
                </div>
                            
            
            
             <?php
 $affi=DB::table('banners')->where('id',1002)->first();
 ?>
        @if($affi->image == 2)
        
                        
                <div class="control-group" style="background:#FFF5EE">
                  <label class="control-label">Affiliate Comission (Tk)</label>
                  <div class="controls">
                    <input type="number" name="extra11" id="product_price" required="" value="{{ $productDetails->extra11 }}"/>
                  </div>
                </div>
          @else
                              <input type="hidden" name="extra11" id="product_price"  value=""/>

        @endif    
            
                
                
                  <div class="control-group">
                  <label class="control-label">Unit (Kg, Pcs Etc)</label>
                  <div class="controls">
                    <input type="text" name="unit" id="product_price" value="{{ $productDetails->unit }}" />
                  </div>
                </div>              
                
                
                
                
                                     
<?php
                    $installment=DB::table('banners')->where('id','1019')->first();
;?>         
                
     @if($installment->image == 1)            
                
              
                <div style="border:1px dashed red">
                         
                <h5 style="text-align:center; color:blue"> Intallment (কিস্তি যদি থাকে)।</h5>
                <div class="control-group">
                  <label class="control-label">Down Payment</label>
                  <div class="controls">
                    <input type="number" name="down_payment" id="p_price" value="{{ $productDetails->extra6 }}" >
                  </div>
                </div>
                
                
                  <div class="control-group">
                  <label class="control-label">Number of Installment</label>
                  <div class="controls">
                    <input type="number" name="number_installment" id="p_price" value="{{ $productDetails->extra7 }}" >
                  </div>
                </div>
                
                
                 <div class="control-group">
                  <label class="control-label">Per Installment Amount</label>
                  <div class="controls">
                    <input type="number" name="inttallment_amount" id="p_price" value="{{ $productDetails->extra8 }}" >
                  </div>
                </div>
                
                
                
           <div class="control-group">
 <label class="control-label" style="color:blue">Installment Type</label>
                  <div class="controls">
                    <select name="extra9" id="category_id" style="width:26%">
                      <option value="">Select Type</option>
                      <option value="Monthly" @if($productDetails->extra9 == "Monthly") selected="" @endif>Monthly</option>
                      <option value="Weekly" @if($productDetails->extra9 == "Weekly") selected="" @endif>Weekly</option>
                    </select>
                  </div>
                </div>

                
                
                
                
                
             </div>    
                  <br>
                  
    @else
                        <input type="hidden" name="down_payment" id="p_price" value="{{ $productDetails->extra6 }}" >
                        <input type="hidden" name="number_installment" id="p_price" value="{{ $productDetails->extra7 }}" >
                        <input type="hidden" name="inttallment_amount" id="p_price" value="{{ $productDetails->extra8 }}" >
                        <input type="hidden" name="extra9" id="p_price" value="{{ $productDetails->extra9 }}" >



    
    @endif         
                      
                
                
                
                
                
                
                                
                
             <div style="border:1px dashed black">
                         
          <details style="padding:10px">
  <summary style="color:blue"> (এখানে ক্লিক করে  বিস্তারিত জেনে নিন)</summary>
  <p style="font-size:120%">
                      For Googe SEO (এই অপশনগুলো না বুঝলো আপাতত প্রয়োজন নেই, SEO সম্পর্কে সাম্যক জ্ঞান অর্জন করে তারপর আপডেট করলেই হবে।
                      <br>তবে, এতটুকু জেনে রাখুন, গুগল SEO ছাড়াও, আপনার সাইটে  ইউজারগণ সার্চ করার সময় যে ওয়ার্ড বা শব্দগুলো লেখেন, তাই Keyword, বর্তমানে নিচের কিওয়ার্ড বক্সে এমন কিছু  আনুমানিক কিওয়ার্ড লিখে রাখুন, যা এই প্রোডাক্টটি খুজে পেতে চাইলে সেই কিওয়ার্ড লিখে সার্চ করবে।  
                      



<p>
</details>               
                         
                                  <div class="control-group">
                  <label class="control-label">Meta Keyword <br>(প্রতি Keyword এর মাঝে কমা , দিতে হবে।)</label>
                  <div class="controls">
                    <textarea name="meta_key" id="description" required="">{{$productDetails->meta_key}}</textarea>
                  </div>
                </div>
                 
                
                  <div class="control-group">
                  <label class="control-label">Meta Description</label>
                  <div class="controls">
                    <textarea name="meta_description" id="description" required="">{{$productDetails->meta_description}}</textarea>
                  </div>
                </div>
             </div>   
                
                
                
             <br>
             
               <div style="border:1px dashed black">
                         
                <h5 style="text-align:center; color:red"> অতিরিক্ত ডেলিভারী চার্জ (যদি থাকে)[ এটা শুধুমাত্র ভারী প্রোডাক্ট এর ক্ষেত্রে ব্যবহার করুন- যেমন ফ্রিজ, টিভি, আলমিরা ইত্যাদি]</h5>
                <div class="control-group">
                  <label class="control-label">in City</label>
                  <div class="controls">
                    <input type="number" name="extra3" id="p_price" value="{{ $productDetails->extra3 }}" >
                  </div>
                </div>
                
                
                  <div class="control-group">
                  <label class="control-label">Out City</label>
                  <div class="controls">
                    <input type="number" name="extra4" id="p_price" value="{{ $productDetails->extra4 }}" >
                  </div>
                </div>
             </div>    
                
                
                
                
                
                
                
                
                

                <div class="control-group">
                  <label class="control-label">File upload input</label>
                  <div class="controls">
                    <input type="file" name="image" />
                    <input type="hidden" name="current_img" value="{{ $productDetails->image }}">
                    @if (!@empty ($productDetails->image))

                      <div class="del-right" style="float:right;padding-right:30px;">
                        <a href="{{ asset('assets/admin/img/products/small/'.$productDetails->image) }}"><img style="height:60px;" src="{{ asset('assets/admin/img/products/small/'.$productDetails->image) }}" alt=""> <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">| Delete</a>
                      </a></div>

                    @endif
                  </div>
                </div>







	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	     <div class="control-group">
                  <label class="control-label">Video Unique Code  <span style="color:red">
                      (if any)
                      
                      
                    </span></label>
                  <div class="controls">
                    <input type="text" name="video" id="product_price" value="{{ $productDetails->extra5 }}"/>
                    
                    <details>
  <summary style="color:blue"> (এখানে ক্লিক করে নিয়ম জেনে নিন)</summary>
  <p>
      Youtube থেকে শেয়ার বাটনে ক্লিক করার পর  https://youtu.be/b37nXCRrvW0  একটি লিংক পাওয়া যাবে, উক্ত লিংকের শেষের  b37nXCRrvW এমন অংশটুকু কপি করে  এখানে ( উপরে বক্সে) পেস্ট করতে হবে।
      উল্লেখ্য যে, প্রোডাক্ট এর ভিডিও পূর্বে youtube এ আপলোড না থাকলে আগে উপলোড করে নিতে হবে <p>
</details>
                  </div>
                </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 

                

<?php
$r_countrtt=DB::table('banners')->where('id',1012)->first();
;?> 



@if($r_countrtt->image == "1");


                <div class="control-group">
                  <label class="control-label">Re-Sale</label>
                  <div class="controls">
                    <input type="checkbox" name="re_sale" id="enable"   @if ($productDetails->re_sale == "1") checked  @endif value="1" >
                  </div>
                </div>

@else

 <input type="hidden" name="re_sale" id="enable"   @if ($productDetails->re_sale == "1") checked  @endif value="1" >
@endif


                <div class="control-group">
                  <label class="control-label">Enable</label>
                  <div class="controls">
                    <input type="checkbox" name="enable" id="enable"   @if ($productDetails->status == "1") checked  @endif value="1" >
                  </div>
                </div>
                
                
                
  
  
  
  
                <div class="control-group">
                  <label class="control-label">Home Page Show</label>
                  <div class="controls">
                    <input type="checkbox" name="extra10" id="enable"   @if ($productDetails->extra10 == "1") checked  @endif value="1" >
                  </div>
                </div>
                 
  
  
  
  
  
                
                
               @if(!empty($productDetails->shop_id))
                   <div class="form-actions">
                  <input type="submit" value="Update & Approved" class="btn btn-success">
                </div>
               
               @else
 
                

                <div class="form-actions">
                  <input type="submit" value="Update" class="btn btn-success">
                </div>
                
               @endif 
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">

function cprice(){
         var c_price = document.getElementById("c_price").value;
              sessionStorage.setItem("c_price", parseInt(c_price));
              var discount=  sessionStorage.getItem("discount", parseInt(discount));
              var p_price=  sessionStorage.getItem("p_price", parseInt(p_price));

if(discount>0){
    
                var p_price= parseInt(c_price) + parseInt(c_price)/100*parseInt(discount);
            
                                   document.getElementById("p_price").value =p_price;
    
}

else if(p_price>0)
{

             /*Note Find Discount */
              
        var lav= parseInt(p_price)-parseInt(c_price);
        var lavpersent= parseInt(lav) / parseInt(c_price)*100;
                                          
                                          
                                           document.getElementById("discount2").value =lavpersent;

        
    
}
              
         
}












function pprice(){
         var p_price = document.getElementById("p_price").value;
              sessionStorage.setItem("p_price", parseInt(p_price));
              
              var c_price=  sessionStorage.getItem("c_price", parseInt(c_price));
              var discount=  sessionStorage.getItem("discount", parseInt(discount));
         
         






 if(discount> 0){
         var c_price= parseInt(p_price)-parseInt(p_price)/100*parseInt(discount);
    
                       document.getElementById("c_price").value =c_price;

               }
               
             else if(c_price>0)
 {
        var lav= parseInt(p_price)-parseInt(c_price);
        var lavpersent= parseInt(lav) / parseInt(c_price)*100;
                                          
                                          
                                           document.getElementById("discount2").value =lavpersent;

         
 }
     
 

 
     
                
}







function discount(){
         var discount = document.getElementById("discount2").value;
                       sessionStorage.setItem("discount", parseInt(discount));
                                   var c_price=  sessionStorage.getItem("c_price", parseInt(c_price));
                                   var p_price=  sessionStorage.getItem("p_price", parseInt(p_price));





if(c_price> 0)
{
        if(discount >0){
            var p_price= parseInt(c_price) + parseInt(c_price)/100*parseInt(discount);
            
                                   document.getElementById("p_price").value =p_price;
                        }else
                        {
                                                               document.getElementById("p_price").value ="";

                        }
        

}   
else if(p_price>0)
{
    
      var c_price= parseInt(p_price) - parseInt(p_price)/100*parseInt(discount);
            
                                   document.getElementById("c_price").value =c_price;
    
}
      
         
         
}













function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_child_id.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>


