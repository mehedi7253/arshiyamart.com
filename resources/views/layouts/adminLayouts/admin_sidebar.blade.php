<?php $url = url()->current(); ?>
<!--sidebar-menu-->


<div id="sidebar">
    
    <a href="{{ url('/admin/dashboard') }}" class="visible-phone"><i class="fa fa-bars" aria-hidden="true"></i>
 Admin <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i></a>
 
 
  <ul>
      
       
      
 
      <?php
      $user_id = Auth::user()->id;
      ?>
 @if($user_id > 1)
  
 
     <li <?php if (preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/dashboard') }}" style="color:white"><i class="fa fa-line-chart" aria-hidden="true"></i>
  <span>Dashboard</span></a> </li>
  
  
       <li> <a href="{{ url('/admin/view-orders') }}" style="color:white"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Orders</span></a>

    </li> 
    
    
     <li> <a href="{{ url('/admin/createinvoice') }}" style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i><span>Create Invoce</span></a>

    </li> 
    
  
   
     <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-archive" aria-hidden="true"></i>
 <span>Products</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i>
</a>
      <ul>
          
             <li><a href="{{ url('/admin/add-product') }}"><i class="fa fa-plus-square" aria-hidden="true"></i>
 Add Product</a></li>
             
        <li><a href="{{ url('/admin/view-products') }}"><i class="fa fa-eye" aria-hidden="true"></i>
 View Products</a></li>
 
 
 
 
 
 
 <?php
       $ml_md = DB::table('banners')
       ->where(['id' => 1010])
        ->first();
 ;?>
     
        
          
@if($ml_md->image == 1)

<li><a href="{{ url('/admin/view-products2') }}"><i class="fa fa-eye" aria-hidden="true"></i>
 Approve Products</a></li>
 
 @endif 
        
        
        
        
<li><a href="{{ url('/admin/view-products_dis') }}"><i class="fa fa-gift" aria-hidden="true"></i>
 Discount </a></li>
 
 
         <li><a href="{{ url('/admin/view-products_camp') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i>
 Campaign</a></li>
         
        
        
        
        
        
        
@if(!empty($md->image))
   
        <li><a href="{{ url('/admin/add-productm') }}"><i class="fa fa-medkit" aria-hidden="true"></i>
Add Medicine</a></li>
                <li><a href="{{ url('/admin/view-productsm') }}"><i class="fa fa-eye" aria-hidden="true"></i>
View Medicine</a></li>

        
@endif
      </ul>
      
      
      
      
      
    </li>  
    
    
  
      
      

 
 
 
 
  

 
 
 
 
 
 
 
 
 
 
 
     <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Categories</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i></a>
      <ul >
        <li><a href="{{ url('/admin/view-categories') }}">View Category</a></li>
        <li><a href="{{ url('/admin/add-category') }}">Add Category</a></li>
        <li><a href="{{ url('/admin/add-categoryc') }}">Add Child Category</a></li>

      </ul>
    </li>

 
     
        <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Brands</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories2') }}">View Brands</a></li>
        <li><a href="{{ url('/admin/add-category2') }}">Add Brands</a></li>

      </ul>
    </li>  
    


        <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Supplier</span></a>   
      <ul>
        <li><a href="{{ url('/admin/view-categories2s') }}">View Supplier</a></li>
        <li><a href="{{ url('/admin/add-category2s') }}">Add Supplier</a></li>

      </ul>
    </li>  





    
<li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Color Library </span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories3') }}">View Color</a></li>
        <li><a href="{{ url('/admin/add-category3') }}">Add Color</a></li>

      </ul>
</li>  
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Size Library</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories4') }}">View Size</a></li>
        <li><a href="{{ url('/admin/add-category4') }}">Add Size</a></li>

      </ul>
    </li>  
    
    
    
 
 
 
 
 
 
 
 
 
 
 
 
 <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-user" aria-hidden="true"></i>
 <span>All Users</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-coupons') }}">View User</a></li>
        <li><a href="{{ url('/admin/view-coupons?affiliate=All') }}">View Affiliate</a></li>
        <li><a href="{{ url('/admin/createinvoice_user') }}">Add New User</a></li>

       
       
       
      @if($ml_md->image == 1)

        <li><a href="{{ url('/admin/view-couponsm') }}">View Merchant</a></li>
      @endif


      <?php
      $user_id = Auth::user()->id;
      ?>
@if($user_id < 2)
  
        <li><a href="{{ url('/admin/view-coupons?affiliate=roll') }}">User Role</a></li>
        
@endif



      </ul>
    </li> 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 @else
 
    <li <?php if (preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/dashboard') }}" style="color:white"><i class="fa fa-line-chart" aria-hidden="true"></i>
  <span>Dashboard</span></a> </li>
    
     
    
   <li> <a href="{{ url('/admin/view-orders') }}" style="color:white"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Orders</span></a>

    </li> 
    
    
       <li> <a href="{{ url('/admin/createinvoice') }}" style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i><span>Create Invoce</span></a>

    </li> 
    
    
    
  <?php 
	$m_1003=DB::table('banners')->where('id',1003)->first();
	$all_C=DB::table('categories')->where('parent_id',0)->get();
	
?>
@if( $m_1003->image == 1 )   
    
    
         <li class="submenu" style="background:#33A8FF; color:white"> <a href="#" style="color:white"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Quotation</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i></a>
      <ul>
          {{--!
          <li><a href="{{ url('/admin/createinvoice') }}?qid=999999999999">Create Quotation</a></li>
          !--}}
          <li><a href="{{ url('/admin/view-quotation') }}">View Quotation</a></li>
        
      
          @foreach($all_C as $cct)
        <li><a href="{{ url('/admin/createinvoice_qrp') }}?qid={{$cct->id}}">{{$cct->name}}</a></li>
        
        
        
       
         @endforeach
         



      </ul>
      
      
    </li>
 @endif
    
    
    
    
    
    
    
    
    
    
    
    	<?php
		
        $md = DB::table('banners')
       ->where(['id' => 1008])
        ->first();
        
        
         $ml_md = DB::table('banners')
       ->where(['id' => 1010])
        ->first();
        
        
      ;?>
        
         @if(!empty($md->image))
    
    
    
    
    
    
    
    
    
  <li> <a href="{{ url('/admin/view-coupons2') }}"style="color:white"><i class="fa fa-medkit" aria-hidden="true"></i>
<span>Medicine Orders</span></a>
    </li> 
    @endif
      <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-archive" aria-hidden="true"></i>
 <span>Products</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i>
</a>
      <ul>
         <li><a href="{{ url('/admin/add-product') }}"><i class="fa fa-plus-square" aria-hidden="true"></i>
 Add Product</a></li>
 
 
 <li><a href="{{ url('/admin/view-products') }}"><i class="fa fa-eye" aria-hidden="true"></i>
 View Products</a></li>
       
             
        
        
            @if($ml_md->image == 1)

<li><a href="{{ url('/admin/view-products2') }}"><i class="fa fa-eye" aria-hidden="true"></i>
 Approve Products</a></li>
 
 @endif 
          
        
        
        
                <li><a href="{{ url('/admin/view-products_dis') }}"><i class="fa fa-gift" aria-hidden="true"></i>
 Discount </a></li>
 
 
         <li><a href="{{ url('/admin/view-products_camp') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i>
 Campaign</a></li>
         
        
        
        
              @if(!empty($md->image))
   
        <li><a href="{{ url('/admin/add-productm') }}"><i class="fa fa-medkit" aria-hidden="true"></i>
Add Medicine</a></li>
                <li><a href="{{ url('/admin/view-productsm') }}"><i class="fa fa-eye" aria-hidden="true"></i>
View Medicine</a></li>

        
@endif
      </ul>
      
      
      
      
      
    </li>  
    
    
  
  
  
  
  
  
  <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-archive" aria-hidden="true"></i>
 <span style="color:yellow">Basic Inventory</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i>
</a>
      <ul>
        <li><a href="{{ url('/admin/view_stock') }}"><i class="fa fa-eye" aria-hidden="true"></i>
 Stock</a></li>
        <li><a href="{{ url('/admin/view_report') }}"><i class="fa fa-plus-square" aria-hidden="true"></i>
 Report (P/L)</a></li>
      </ul>

    </li>  
  
  
  
  
  @if( $m_1003->image == 1 )   
    
  <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-archive" aria-hidden="true"></i>
 <span style="color:yellow">Basic ERP </span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i>
</a>
      <ul>
          <li><a href="/admin/add-feature1"><i class="fa fa-eye" aria-hidden="true"></i>
 Bank</a></li>
        
         <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
 Daily Cost</a></li>
        
          <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
 Salary</a></li>
 
          <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
 Asset</a></li>
 
 
      </ul>
    </li>  
  
  
  
  @endif
  
  
  
    
    
    <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Categories</span> <i class="fa fa-angle-double-down" style="color:white"aria-hidden="true" ></i></a>
      <ul >
        <li><a href="{{ url('/admin/view-categories') }}">View Category</a></li>
        <li><a href="{{ url('/admin/add-category') }}">Add Category</a></li>
        <li><a href="{{ url('/admin/add-categoryc') }}">Add Child Category</a></li>

      </ul>
    </li>



 









<li class="submenu"> <a href="#" style="color:white"><i class="fa fa-user" aria-hidden="true"></i>
 <span>All Users</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-coupons') }}">View User</a></li>
        <li><a href="{{ url('/admin/view-coupons?affiliate=All') }}">View Affiliate</a></li>
        
       
       
       
      @if($ml_md->image == 1)

        <li><a href="{{ url('/admin/view-couponsm') }}">View Merchant</a></li>
      @endif


      <?php
      $user_id = Auth::user()->id;
      ?>
@if($user_id < 2)
  
        <li><a href="{{ url('/admin/view-coupons?affiliate=roll') }}">User Role</a></li>
        <li><a href="{{ url('/admin/createinvoice_user') }}">Add New User</a></li>
        
@endif



      </ul>
    </li> 
    
    
    
    
    
    
    
    <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-cog" aria-hidden="true"></i>
 <span>Site Setting</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-banners') }}">Genaral Setting</a></li>
        <li><a href="{{ url('/admin/view-banners') }}?a=1">Live Chat</a></li>
        <li><a href="{{ url('/admin/view-banners') }}?a=2">VAT Setting</a></li>
        <li><a href="{{ url('/admin/view-banners') }}?a=3">Delivery Charge</a></li>
        <li><a href="{{ url('/admin/view-banners') }}?a=4">Script Setting</a></li>





      </ul>
    </li>
   
   
   
     
        <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Brands</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories2') }}">View Brands</a></li>
        <li><a href="{{ url('/admin/add-category2') }}">Add Brands</a></li>

      </ul>
    </li>  
    
    
    
    
    
            <li class="submenu"> <a href="#" style="color:pink"><i class="fa fa-th-large" aria-hidden="true"></i>
<span>Supplier</span></a>   
      <ul>
        <li><a href="{{ url('/admin/view-categories2s') }}">View Supplier</a></li>
        <li><a href="{{ url('/admin/add-category2s') }}">Add Supplier</a></li>

      </ul>
    </li>  

<li style="color:pink"><a href="/admin/add-feature1" style="color:pink"><i class="fa fa fa-bank" aria-hidden="true" style="color:pink"></i>
 Bank</a></li>
    
    
    
    
    
            <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Color Library </span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories3') }}">View Color</a></li>
        <li><a href="{{ url('/admin/add-category3') }}">Add Color</a></li>

      </ul>
    </li>  
    
    
    
    
    
    
    
            <li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Size Library</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-categories4') }}">View Size</a></li>
        <li><a href="{{ url('/admin/add-category4') }}">Add Size</a></li>

      </ul>
    </li>  
    
    
    
    
    
    
            
<li class="submenu"> <a href="#" style="color:white"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Coupon </span></a>
      <ul>
                  <li><a href="{{ url('/admin/add_coupon') }}">Add Coupon</a></li>

                    <li><a href="{{ url('/admin/view_coupon') }}">View Coupon</a></li>

      </ul>
      
      
   <!--    <ul>
        <li><a href="{{ url('/admin/add-category3_mont') }}">Add Rank- (Monthly)</a></li>

        <li><a href="{{ url('/admin/view-categories3_mont') }}">View Rank- (Monthly)</a></li>

      </ul>-->
</li>  
    
    
    
    
    
    
    
    
    
    
    
    
    
     
        
<li class="submenu"> <a href="#" style="color:pink"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Rank/Promotion </span></a>
      <ul>
                  <li><a href="{{ url('/admin/add-category3_ins') }}">Add user Rank</a></li>

        <li><a href="{{ url('/admin/view-categories3_ins') }}">View user rank</a></li>

   
        <li><a href="{{ url('/admin/add-category3_affi') }}">Affiliate Rank</a></li>

        <li><a href="{{ url('/admin/view-categories3_affi') }}">View Affiliate Rank</a></li>

      </ul>
      
      
 
   
      
      
</li>  
    
    
    
    
    
    
    
   <li class="submenu"> <a href="#" style="color: #33ff33"><i class="fa fa-th-large" aria-hidden="true"></i>

 <span>Career/Job </span></a> 
              <ul>
        <li><a href="/admin/add-category3_mont">Add Circular</a></li>

        <li><a href="/admin/view-categories3_mont">View Circular</a></li>
        <li><a href="/admin/view_applicant">View Applicant</a></li>

      </ul>
  </li>    
    
    
    
    
    
    
<li> <a href="/app/bbb.php" style="color:yellow"><i class="fa fa-download" aria-hidden="true"></i><span>Daily DB BackUp</span></a>

    </li> 
    
    
    
    
    
    
    
    
     <li> <a href="{{ url('/admin/view_payment2') }}" style="color:white"><i class="fa fa-credit-card" aria-hidden="true"></i>
 <span>Withwraw Approve</span></a>
    </li>
   
    
    
    
    
    
    
    
    
   <!-- 
    
    <li style="background:green; color:white"> <a href="{{ url('/admin/view_payment') }}" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>Payment Approve</span></a>
    </li>
    
    
    
    
    
    
    
    
    
    
    
    
        <li style="background:green; color:white"> <a href="{{ url('/admin/pin_payment') }}" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>Generate PIN</span></a>
    </li>
   
   
    
    <li style="background:green; color:white"> <a href="{{ url('/admin/view_payment_r') }}" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>R-Perchance Approve</span></a>
    </li>

 <li style="background:green; color:white"> <a href="{{ url('/admin/view_genaration') }}" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>Generation View</span></a>
    </li>

   
   
 
    <li style="background:green; color:white"> <a href="{{ url('/admin/view_payment_g') }}" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>Gift Card</span></a>
    </li>



    <li style="background:green; color:white"> <a href="#" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>All Transaction</span></a>
    </li>


    <li style="background:green; color:white"> <a href="#" style="color:white"><i class="icon icon-th-list" style="color:white"></i> <span>Total Summary</span></a>
    </li>




-->



<!--   <li > <a href="{{ url('https://www.tawk.to/') }}" target="_blank"><i class="icon icon-th-list"></i> <span>Live Chat</span></a>

    </li>
-->

    <li > <a href="http://ictsky.com/service/sms" target="_blank"><i class="icon icon-th-list"></i> <span>Send SMS</span></a>

    </li>




<li > <a href="http://ictsky.com/service/marketing" target="_blank"><i class="icon icon-th-list"></i> <span>Advertise/Marketing</span></a>

    </li>



 <li > <a href="http://ictsky.com/renew" target="_blank"><i class="icon icon-th-list"></i> <span>Domain/Hosting Renew</span></a>

    </li>


 <li > <a href="http://ictsky.com/update" target="_blank"><i class="icon icon-th-list"></i> <span>Update/Upgrade</span></a>

    </li>    

 <li > <a href="http://ictsky.com/service" target="_blank"><i class="icon icon-th-list"></i> <span>Developer Help Line</span></a>

    </li>


@endif


  </ul>
</div>
<!--sidebar-menu-->
