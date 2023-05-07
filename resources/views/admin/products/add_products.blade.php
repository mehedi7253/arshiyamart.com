@extends('layouts.adminLayouts.admin_master2')
@section('content')

   
 <body onLoad="myFunctionld()">

<script>
function myFunctionld(){    

          sessionStorage.setItem("c_price", 0); 
          sessionStorage.setItem("p_price", 0);
          sessionStorage.setItem("discount", 0);

          
           
  
} 
</script>
 



  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product</a> </div>
      <h1>Products</h1>
    </div>

    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Product</h5>
            </div>
            <div class="widget-content nopadding">
              @if (Session::has('message_success'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-success">

                                   <strong style="color:#000">{{ session('message_success') }}</strong>

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
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-product') }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}

		<?php
		
        $bangladesh_n_p = DB::table('products')
        ->orderby('id', 'DESC')
        ->limit(1)
        ->get();
        
        
        ?>



<span style="color:red">প্রোডাক্ট এ্যাড করার পূর্বে ক্যাটাগরি ও ব্যান্ড (যদি থাক) যু্ক্ত করে নিতে হবে। আর গুগল থেকে ডাউনলোড করে  হুবাহু  কোন ছবি দেওয়া যাবে না, একটু এডিট করে নিতে হবে</span>
              
             
                 <div class="control-group">
                  <label class="control-label"> Select Category </label>
                  <div class="controls">
                    <select name="category_id"  id="mySelect" onChange="ChangeCarList()" style="width:26%" required>
                      <?php echo $categories_drop ; ?>
                    </select>
                  </div>
                </div>
                
                
                
                  <div class="control-group">
                  <label class="control-label"> Select Child Category <span style="color:red">(if any) </label>
                  <div class="controls">
                    <select name="child_id" id="sm14" style="width:26%" >
                    </select>
                  </div>
                </div>  
                
                
     <div class="control-group">
                  <label class="control-label"> Select Brands <span style="color:red">(if any) </span></label>
                  <div class="controls">
                    <select name="brands" id="category_id" style="width:26%" >
	<?php
		
        $bangladesh_n_p = DB::table('brands')
        ->orderby('name', 'ASC')
        ->get();
        
        
        ?>
		
				<option value="N/A">N/A</option>

	@foreach ($bangladesh_n_p as $bnp)		
			
		
		<option>{{$bnp->name}}</option>
		
			
	@endforeach		                    
	</select>
                  </div>
                </div>            
             
             
             
             
             
             
             
        <div class="control-group">
                  <label class="control-label"> Select Supplier <span style="color:red">(if any) </span> <br>(এই অপশনটি ক্রেতাগণ দেখবেন না, এটা শুধুমাত্র ব্যাক্তিগত নোট রাখার জন্য)</label>
                  <div class="controls">
                    <select name="supplier" id="category_id" style="width:26%" >
	<?php
		
        $bangladesh_n_p = DB::table('brands5')
        ->orderby('name', 'ASC')
        ->get();
        
        
        ?>
		
				<option value="N/A">N/A</option>

	@foreach ($bangladesh_n_p as $bnp)		
			
		
		<option>{{$bnp->name}}</option>
		
			
	@endforeach		                    
	</select>
                  </div>
                </div>    
                
                
                
             
             
             
             
             
               <div class="control-group">
 <label class="control-label" style="color:blue">CAMPAIGN  (if any)</label>
                  <div class="controls">
                    <select name="position2" id="category_id" style="width:26%">
                      <option value="">Select Position</option>
                      <option value="1">Add to Campaign Product</option>
                    </select>
                  </div>
                </div>




<!--
  <div class="control-group">
                  <label class="control-label" style="color:red">Cash Back (if any)</label>
                  <span style="color:red">একই প্রডাক্ট এর ক্ষেত্রে ক্যাশব্যাক ও অফার একসাথে চালানো যাবে না</span>
                  
                  <div class="controls">
                    <input type="number" name="cash_back" id="status"><span style="color:red">%</span>
                  </div>
                </div>
-->

                <div class="control-group">
                  <label class="control-label">Product Name</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name" required="">
                  </div>
                </div>




                <div class="control-group">
                  <label class="control-label">Style No: <span style="color:red">(if any) </span></label>
                  <div class="controls">
                    <input type="text" name="product_style" id="product_name" value="N/A" required="">
                  </div>
                </div>





                
                            
                <div class="control-group">
                  <label class="control-label" style="color:red">Grantee (if any)</label>
                  <div class="controls"> 
                    <input type="text" name="grantee" id="">
                  </div>
                </div>
            
         
         
         
         
         
                <div class="control-group">
                  <label class="control-label" style="color:red">Warranty (if any)</label>
                  <div class="controls"> 
                    <input type="text" name="warranty" id="">
                  </div>
                </div>



<!--  <div class="control-group">
                  <label class="control-label">New Arrival <span style="color:red">(if any)</span></label>
                  <div class="controls">
                    <input type="checkbox" name="position3" id="status" value="1">
                  </div>
                </div>


  <div class="control-group">
                  <label class="control-label">Popular Product <span style="color:red">(if any)</span></label>
                  <div class="controls">
                    <input type="checkbox" name="position" id="status" value="1">
                  </div>
                </div>

-->




               <!-- <div class="control-group">
                  <label class="control-label">Product Code</label>
                  <div class="controls">
                    <input type="text" name="product_code" id="product_code" required="">
                  </div>
                </div>-->

<!--                <div class="control-group">
                  <label class="control-label">Product Color (if any) [Ex: Red, Blue]</label>
                  <div class="controls">
                    <input type="text" name="product_color" id="product_color" required="" value="N/A">
                  </div>
                </div>-->
       
       <input type="hidden" name="instructor[]" value="N/A">
 <!--      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


                   <div class="control-group">
                  <label class="control-label">Product Color (if any)</label>
                  <div class="controls">
                   
                   
                   
                   
                            <select  data-placeholder="Begin typing a name to filter..." multiple class="chosen-select" name="instructor[]" required="">
    <option value="N/A">N/A</option>
<option>Red</option>
<option>Orange</option>
<option>Yellow</option>
<option>Green</option>
<option>Blue</option>
<option>Cyan</option>
<option>Purple</option>
<option>White</option>
<option>Black</option>
<option>Brown</option>
<option>Magenta</option>
<option>Tan</option>
<option>Olive</option>
<option>Maroon</option>
<option>Navy</option>
<option>Aquamarine</option>
<option>Turquoise</option>
<option>Silver</option>
<option>Lime</option>
<option>Teal</option>
<option>Indigo</option>
<option>Violet</option>
<option>Pink</option>
<option>Gray</option>
<option>Off White</option>
<option>Navy Blue</option>
<option>Baby Pink</option>

  </select>


<script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>
                   
                   
                   
                   
                   
                  </div>
                </div>
           
           
           
           
           
           -->
           
           
           
           
           
           
       
       
      
                
                
                
<!--            <div class="control-group">
                  <label class="control-label">Product Size (if any) [Ex: 24, 25, 26</label>
                  <div class="controls">
                    <input type="text" name="care" id="product_color" required="" value="N/A">
                  </div>
                </div>
                -->
                           
                
                
      
                
                
                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description" required=""></textarea>
                  </div>
                </div>

              <!--  <div class="control-group">
                  <label class="control-label">Metalial & Care</label>
                  <div class="controls">
                    <textarea name="care" id="care"></textarea>
                  </div>
                </div>
-->



                <div class="control-group">
                  <label class="control-label">Product Sell Price</label>
                  <div class="controls">
                    <input type="number" name="price" id="c_price" onKeyUp="cprice()"required />
                  </div>
                </div>
                
                
                
                
   <div class="control-group">
                  <label class="control-label" style="color:blue">Discount by TK</label>
                  <div class="controls">
                    <input type="number" name="offertk"  >
                  </div>
   </div>
   
   
                
                

  <div class="control-group">
                  <label class="control-label" style="color:red">Special Offer (Discount )</label>
                  <div class="controls">
                    <input type="number" name="offer" id="discount2"  onkeyup="discount()"><span style="color:red">%</span>
                  </div>
   </div>
                
                
                <div class="control-group">
                  <label class="control-label" style="color:red">Previous Sell Price (if any)</label>
                  <div class="controls"> 
                    <input type="number" name="p_price" id="p_price"  onkeyup="pprice()">
                  </div>
                </div>
              
          
          
          
          
         <?php
 $affi=DB::table('banners')->where('id',1002)->first();
 ?>
        @if($affi->image == 2)
        
                        
                <div class="control-group" style="background:#FFF5EE">
                  <label class="control-label">Affiliate Comission (Tk)</label>
                  <div class="controls">
                    <input type="number" name="extra11" id="product_price" required="" value="N/A"/>
                  </div>
                </div>
          @else
                              <input type="hidden" name="extra11" id="product_price"  value=""/>

        @endif    
          
          
          
          
          
          
          

              
                
                <div class="control-group">
                  <label class="control-label">Unit (Ex: Kg, Pcs, Set, Etc)</label>
                  <div class="controls">
                    <input type="text" name="unit" id="product_price" required="" value="N/A"/>
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
                    <input type="number" name="down_payment" id="p_price">
                  </div>
                </div>
                
                
                  <div class="control-group">
                  <label class="control-label">Number of Installment</label>
                  <div class="controls">
                    <input type="number" name="number_installment" id="p_price">
                  </div>
                </div>
                
                
                 <div class="control-group">
                  <label class="control-label">Per Installment Amount</label>
                  <div class="controls">
                    <input type="number" name="inttallment_amount" id="p_price">
                  </div>
                </div>
                
                
                
                               <div class="control-group">
 <label class="control-label" style="color:blue">Installment Type</label>
                  <div class="controls">
                    <select name="extra9" id="category_id" style="width:26%">
                      <option value="">Select Type</option>
                      <option value="Monthly">Monthly</option>
                      <option value="Weekly">Weekly</option>
                    </select>
                  </div>
                </div>


                
                
                
                
                
                
                
             </div>    
                  <br>
                  
    @else
                        <input type="hidden" name="down_payment" id="p_price">
                        <input type="hidden" name="number_installment" id="p_price">
                        <input type="hidden" name="inttallment_amount" id="p_price">
                        <input type="hidden" name="extra9" id="p_price">



    
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
                    <textarea name="meta_key" id="description" required=""></textarea>
                  </div>
                </div>
                
                
                  <div class="control-group">
                  <label class="control-label">Meta Description</label>
                  <div class="controls">
                    <textarea name="meta_description" id="description" required=""></textarea>
                  </div>
                </div>
             </div>   
                
                
                
                
                
                
                
       
                
                
                
                
                
                
                
                <br>
                
                <div style="border:1px dashed blue">
                         
                <h5 style="text-align:center; color:red"> অতিরিক্ত ডেলিভারী চার্জ (যদি থাকে)[ এটা শুধুমাত্র ভারী প্রোডাক্ট এর ক্ষেত্রে ব্যবহার করুন- যেমন ফ্রিজ, টিভি, আলমিরা ইত্যাদি]</h5>
                <div class="control-group">
                  <label class="control-label">in City</label>
                  <div class="controls">
                    <input type="number" name="extra3" id="p_price">
                  </div>
                </div>
                
                
                  <div class="control-group">
                  <label class="control-label">Out City</label>
                  <div class="controls">
                    <input type="number" name="extra4" id="p_price">
                  </div>
                </div>
             </div>    
                
                
                
                
                
         
                
                
                
                
                
                
                
                
                
                
                

                <div class="control-group">
                  <label class="control-label">Product Image <span style="color:red">(W:500px H:600px)</span></label>
                  <div class="controls">
                    <input type="file" name="image" required=""/>
                  </div>
                </div>
                
              
                <div class="control-group">
                  <label class="control-label">Video Unique Code  <span style="color:red">
                      (if any)
                      
                      
                    </span></label>
                  <div class="controls">
                    <input type="text" name="video" id="product_price"/>
                    
                    <details>
  <summary style="color:blue"> (এখানে ক্লিক করে নিয়ম জেনে নিন)</summary>
  <p>
      Youtube  থেকে কাঙ্ক্ষিত ভিডিও এর শেয়ার বাটনে ক্লিক করার পর এমন একটি ( https://youtu.be/b37nXCRrvW) লিংক পাওয়া যাবে, উক্ত লিংকের শেষের  b37nXCRrvW এমন অংশটুকু কপি করে  এখানে ( উপরে বক্সে) পেস্ট করতে হবে।
      উল্লেখ্য যে, প্রোডাক্ট এর ভিডিও পূর্বে youtube এ আপলোড না থাকলে আগে আপলোড করে নিতে হবে <p>
</details>
                  </div>
                </div>
                 
                

                <div class="control-group">
                  <label class="control-label">Enable</label>
                  <div class="controls">
                    <input type="checkbox" name="status" id="status" value="1" checked>
                  </div>
                </div>
                
                
        
        
                
             
                <div class="control-group">
                  <label class="control-label">Home Page Show</label>
                  <div class="controls">
                    <input type="checkbox" name="extra10" id="status" value="1">
                  </div>
                </div>
                
                
                   
                
                
               <div class="control-group">
                  <label class="control-label" style="color:blue">Manage Stock</label>
                  <div class="controls">
                    <input type="checkbox" name="stock_m" id="status" value="1">
                  </div>
                </div>
            
                
            
                 <div class="control-group">
                  <label class="control-label" style="color:blue">Add Multi Image</label>
                  <div class="controls">
                    <input type="checkbox" name="image_m" id="status" value="1" >
                  </div>
                </div>
                
                
                
     
	 
	 
<?php
$r_countrtt=DB::table('banners')->where('id',1012)->first();
;?> 



@if($r_countrtt->image == "1");
	 
	                  <div class="control-group">
                  <label class="control-label" style="color:blue">Allow Re-Sale</label>
                  <div class="controls">
                    <input type="checkbox" name="image_r" id="status" value="1">
                  </div>
                </div>
                
 @else
    <input type="hidden" name="image_r" id="status" value="">
@endif	 
	 
	 
	 
	 
	 
	 
	 
	            

                <div class="form-actions">
                  <input type="submit" value="Add Product" class="btn btn-success">
                </div>
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
        
            var p_price= parseInt(c_price) + parseInt(c_price)/100*parseInt(discount);
            
                                   document.getElementById("p_price").value =p_price;
        

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


