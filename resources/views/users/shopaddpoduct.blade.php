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
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:0px 5px; text-align:right;" > < Back to Dashboard  </h3></a>

<h2 style="color:black; padding:0px 50px; text-align:center">Add a new Product </h2>





                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; padding:50px 50px; text-align:center"> {{ session('message_success') }}. Waiting for Approval. (এ্যাপ্রুভ হওয়ার পর আপনার Store এ প্রদর্শিত হবে) </h4>

                                 @endif

<h3 style="color:red;  text-align:center">নোট: কোন প্রোডাক্ট এ্যাড করার পূর্বে সেটি কমন স্টোরে রয়েছে কিনা অনুগ্রহ করে দেখে নিন ।  আপনার কাঙ্খিত প্রোডাক্ট কমন স্টোরে থাকলে সেখান থেকে এ্যাড করুন। </h3> 
      
      <div style="width:350px; height:auto; margin:auto">
          
    
      
       <form class="form-horizontal" method="post" action="{{ url('/addproductmm') }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}

		<?php
		
        $bangladesh_n_p = DB::table('products')
        ->orderby('id', 'DESC')
        ->limit(1)
        ->get();
        
        
        
        
        
          $bangladesh_nn = DB::table('categories')
        ->where('parent_id', 0)
        ->orderby('o_c', 'ASC')
        ->get();
        
        
        
        
        
        
        ?>




              
             
                 <div class="control-group">
                     <span style="color:blue;">প্রোডাক্ট এ্যাড করার সময় ক্যাটাগরি ও অন্য  ভুল হলে,  ভেরিফাই করার পূর্বে কর্তৃপক্ষ তা সংশোধন করে নিবেন।  যদি  আপনার  কাঙ্ক্ষিত ক্যাটাগরি  ও ব্যান্ড না থাকে তাহলে, নিচের স্পেশাল নোট অপশনের ব্যান্ড /ক্যাটাগরির নাম লিখুন
 </span>
                  <label class="control-label"> Select Category </label>
                  <div class="controls">
                    <select name="category_id"  id="mySelect" onchange="ChangeCarList()" style="width:100%" >
@foreach($bangladesh_nn as $bnpn)

<option value="{{$bnpn->id}}" style="color:red">{{$bnpn->name}}</option>
 
<?php
          $bangladesh_ns = DB::table('categories')
        ->where('parent_id', $bnpn->id)
        ->orderby('id', 'DESC')
        ->get();
        ?>
        
        
        @foreach($bangladesh_ns as $bnpnc)

        <option value="{{$bnpnc->id}}" style="color:blue"> -{{$bnpnc->name}}</option>
        
        @endforeach






@endforeach        <option style="color:red; font-size:120%">অন্যান্য (প্রয়োজনে কর্তৃপক্ষ সংযুক্ত করে নিবেন)</option>

</select>
                  </div>
                </div>
                
                
                
                  
                
                
     <div class="control-group">
                  <label class="control-label"> Select Brands <span style="color:red">(if any) </span></label>
                  <div class="controls">
                    <select name="brands" id="category_id" style="width:100%" >
	<?php
		
        $bangladesh_n_p = DB::table('brands')
        ->orderby('id', 'ASC')
        ->get();
        
        
        ?>
		
				<option value="N/A">N/A</option>

	@foreach ($bangladesh_n_p as $bnp)		
			
		
		<option>{{$bnp->name}}</option>
		
			
	@endforeach		                    
	</select>
                  </div>
                </div>            
             
               <!-- <div class="control-group">
                  <label class="control-label"> Select Position </label>
                  <div class="controls">
                    <select name="position" id="category_id" style="width:26%" required="">
                      <option value="0" disabled selected>Select Position</option>
                      <option value="1">POPULAR</option>
                      <option value="2">Exclusive</option>
                    </select>
                  </div>
                </div>-->



  




 


                <div class="control-group">
                  <label class="control-label">Product Name</label>
                  <div class="controls">
                    <input type="text" name="product_name" id="product_name" required="" style="width:100%">
                  </div>
                </div>


  





               <!-- <div class="control-group">
                  <label class="control-label">Product Code</label>
                  <div class="controls">
                    <input type="text" name="product_code" id="product_code" required="">
                  </div>
                </div>-->

                <div class="control-group">
                  <label class="control-label">Product Color (if any) [Ex: Red, Blue]</label>
                  <div class="controls">
                    <input type="text" name="product_color" id="product_color" required="" value="N/A" style="width:100%">
                  </div>
                </div>
       
       
       <div class="control-group">
                  <label class="control-label">Product Size (if any) [Ex: 24, 25, 26</label>
                  <div class="controls">
                    <input type="text" name="care" id="product_color" required="" value="N/A" style="width:100%">
                  </div>
                </div>
                
      
                
                
                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description" required="" style="width:100%"></textarea>
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
                
              
          
          
          
          
                
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="control-group">
                  <label class="control-label">Unit (Ex: Kg, Pcs, Set, Etc)</label>
                  <div class="controls">
                    <input type="text" name="unit" id="product_price" required="" value="N/A" style="width:100%"/>
                  </div>
                </div><br>

     
     
     
     
     
     
     
     
     
     
     
     
     
     
                    <div class="control-group">
                  <label> Special Note (if any) (এই প্রোডাক্ট সম্পর্কে যদি কর্তৃপক্ষ বরাবর কিছু জানানোর থাকলে তা লিখুন)</label>
                  <div class="controls">
                    <textarea name="spnote" id="description" required="" style="width:100%"></textarea>
                  </div>
                </div> 
     
     
     
     
     
     
     
     


                <div class="control-group">
                  <label class="control-label">Product Image <span style="color:red">(W:500px H:600px)</span></label>
                  <div class="controls">
                    <input type="file" name="image" required="" />
                  </div>
                </div>




                
                    <input type="hidden" name="status" id="status" value="1" checked>
                  

                <div class="form-actions"style="margin-top:10px; margin-bottom:20px">
                  <input type="submit" value="Add Product" class="btn btn-success" style="width:100%">
                </div>
              </form>
  </div>
  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>














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







