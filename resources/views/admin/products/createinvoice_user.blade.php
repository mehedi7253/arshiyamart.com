@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
  </div>
    <div class="container-fluid">
         
          
          
          
          
          
          
                
                                                 
 <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg" style="margin-top:20px">
                   Create New User+
                </button>

          
          
          
          
          
          
          
          
          
          
     
                      
          
           
          
          
          
          
          
          
          
          
          
   
      <div class="row-fluid">
        <div class="span12">


  @if (Session::has('message_error'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-denger" style="background:red">

                               <strong style="color:#000">{{ session('message_error') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif









          @if (Session::has('message_s'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif
           
                                      

<?php

if(isset($_GET['did']))
{
   $sllsd=$_GET['did'];
        $userCart = DB::table('users')->where(['id' => $sllsd])->delete();
        echo "<h2>1 User Delete Success</h2>";
}

;?>


          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All User</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Action</th>

                    <th>User Name</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;
                  
                  $coupons=DB::table('users')->orderby('id',"DESC")->get();
                  
                  ?>
                  
                  
                  
                  
                  
                  
                  
       <?php 
                  $user_id = Auth::user()->id;
                  $productds=DB::table('orders_products')->where('status',1)->where('user_id',$user_id)->get();
        ?>





                 @foreach ($productds as $producttt)
            

                   
                   <?php
                   
                   
                   @$t_price+=$producttt->product_price * $producttt->product_qty;
                   ;?>
                   

                  @endforeach           
                  
                  
                  
                  
                  
                  
                  
                  
                  @foreach ($coupons as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                                            <td>
                                                
                                                
 <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{$coupon->id}}" style="margin-top:20px">
                   Select
                </button>
                
                
                
                
          
                 
   <div class="modal fade" id="modal-lg{{$coupon->id}}">
        <div class="modal-dialog modal-lg">
            
            <h4 style="text-align:center">Final Submit</h4>
            
          <form action="{{ url('/admin/adduser_by_inv') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">

 
                  
                  









<h4 style="color:black">Customer Name:  <span style="color:blue"> {{@$coupon->name}} </span><br>

 Mobile Number:<span style="color:blue"> {{@$coupon->phone}}</span><br>

</h4>
<h3 style="color:red">Current Total Invoice Amount: {{@$t_price}}</h3>


<input type="hidden" name="id" placeholder="Total Amount" style="width:95%" value="{{@$coupon->id}}">
<input type="hidden" name="user_mail" placeholder="Total Amount" style="width:95%" value="{{@$coupon->email}}">
<input type="hidden" name="name" placeholder="Total Amount" style="width:95%" value="{{@$coupon->name}}">
<input type="hidden" name="address" placeholder="Total Amount" style="width:95%" value="{{@$coupon->address}}">
<input type="hidden" name="total" placeholder="Total Amount" style="width:95%" value="{{@$t_price}}">
<input type="hidden" name="mobile" placeholder="Total Amount" style="width:95%" value="{{@$coupon->phone}}">



<input type="number" name="shipping_charges" placeholder="Delivery Charges (if any)" style="width:95%"><br>
<input type="number" name="discount" placeholder="Discount (if any)" style="width:95%"><br>


<?php
$qid=Session::get('qid');
;?>
@if($qid > 0)
<input type="hidden" name="pay" placeholder="Cash Diposit" style="width:95%" value="0"><br>
@else
<input type="number" name="pay" placeholder="Cash Diposit" style="width:95%" required=""><br>

@endif



              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Final Submit">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>                
                                
                
                
                
                
                
                
                                                
                                                
                                                
                                                </td>

                   
                      
                      <td>{{ $coupon->name }}</td>
                      <td>{{ $coupon->phone }}</td>
                      <td>{{ $coupon->address }}</td>
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>












       
                 
   <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            
            <h4 style="text-align:center">Create New User</h4>
            
          <form action="{{ url('/admin/adduser_by_a') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">



<input type="text" name="name" placeholder="Customer Name" style="width:95%"><br>

<textarea name="address" placeholder="Address" style="width:95%"></textarea><br>



<input type="email" name="email" placeholder="E-mail (if any)" style="width:95%"><br>
<input type="number" name="mobile" placeholder="Mobile Number" style="width:95%"><br>
<input type="password" name="password" placeholder="password" style="width:95%"><br>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Create User">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>              









@endsection
