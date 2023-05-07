@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
      <h1>User</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif
           
                                       <a href="{{ url('/admin/add-bulk') }}">           <h4 style="color:red">Click here to Copy All Mobile Number (for Bulk SMS)</h4>
</a>

<?php

if(isset($_GET['did']))
{
   /*$sllsd=$_GET['did'];
        $userCart = DB::table('users')->where(['id' => $sllsd])->delete();
        echo "<h2>1 User Delete Success</h2>";*/
        
        echo "<h2>নিরাপত্তার জন্য এই ফিচারটি আপাতত বন্ধ রাখা হয়েছে।</h2>";
}

;?>
 

<?php

if(isset($_GET['af_edit']))
{
    $sllsde=$_GET['id'];
        $userCart = DB::table('users')->where(['id' => $sllsde])->update([
            'affiliate_com'=>$_GET['comission'],	
            ]);
        echo "<h2>Affiliate Update Success</h2>";
        
    
}

;?>









<?php

if(isset($_GET['rl_edit']))
{
    $sllsde=$_GET['id'];
        $userCart = DB::table('users')->where(['id' => $sllsde])->update([
            'admin'=>$_GET['role'],	
            ]);
        echo "<h2>Roll Update Success</h2>";
        
    
}

;?>







@if(!isset($_GET['affiliate']))
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

                    <th>User Info</th>
                    <th>purchase Info</th>
                    <th>User Wallet
                    
                    </th>
                    
                    
                    <th>Address</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  @foreach ($coupons as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                                            <td><a href="?did={{$coupon->id}}" style="color:red">Delete</a></td>

                   
                      
                      <td>{{ $coupon->name }}<br>
                      {{ $coupon->phone }}
                      </td>
                      
                      <?php
                      $m=date('m');
                      $y=date('Y');
                      $total_ppp=DB::table('orders')->where('user_id',$coupon->id)->sum('total');
                      
                      $total_ppp_thismonths=DB::table('orders')->where('user_id',$coupon->id)->whereYear('created_at',$y)->whereMonth('created_at',$m)->sum('total');
                      ?>
                      
                      
                      <td>
                          Total: {{$total_ppp}}<br>
                          This Months: {{$total_ppp_thismonths}}
                          
                      </td>
                      
                      
                      <td>   
                      <?php
                      
                      $wallet1=DB::table('ac_main')->where('user_id',$coupon->id)->sum('amount');
                      $wallet2=DB::table('ac_shop')->where('user_id',$coupon->id)->sum('amount');
                      
                      
                      
                      
                      ?>
                      Cash: {{$wallet1}}<br>
                      Shop: {{$wallet2}}<br>
                                                <button class="btn btn-sm btn-primary" style="background:red; color:white; border-radius:5px" data-toggle="modal" data-target="#modal-lg{{ $coupon->id }}">
                                                 
                                                 <a href="{{url($coupon->id)}}/" style="color:white">Add Fund</a>  

                                                </button>
                                                
                                                
                                                
                                                
                                                
<div class="modal fade" id="modal-lg{{ $coupon->id }}">
        <div class="modal-dialog modal-lg">
          <form action="add_fund_a" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">

<!--<div class="text-center">

<select name="type" required="">
    <option value="">Select Wallet</option>
    <option value="1">Cash Wallet</option>
    <option value="2">Shop Wallet</option>
</select>

</div>-->
<sapn style="color:red">ওয়ালেটে ব্যালেন্স দেওয়ার পর আর তা রিমুভ করা যাবে না। তাই সতর্কতার সহিত নিশ্চিত  দিতে হবে।</span>
<label> Name:  <span style="color:red">{{ $coupon->name }}</span></label>
<label> Mobile No:  <span style="color:red">{{ $coupon->phone }}</span></label>





<div style="width:40%; float:left">
    
<div style="width:20%; float:left">
     <input type="radio" id="cash" name="fund_type" value="1" required="">
</div>


<div style="width:80%; float:left">
    <label for="cash">Cash Wallet</label>
</div>
    
    
   
    
    
</div>


<div style="width:40%; float:left">
    <div style="width:20%; float:left">
        <input type="radio" id="shop" name="fund_type" value="2" required="">
        </div>
       <div style="width:80%; float:left">
           <label for="shop">Shop Wallet</label>
        </div> 
    
     
     
</div>
<!--



<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Shop Wallet</label><br>

-->





<br><br>

<input type="number" name="amount" placeholder="Amount" requred="">
<input type="hidden" name="id" value="{{$coupon->id}}" requred="">

<br>
                  
<input type="password" name="pin" placeholder="PIN" requred="">

                  
    

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Add Fund">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>                                   
                                                
                                                
                      </td>
                      
                      
                      
                      
                      
                      <td>{{ $coupon->address }}</td>
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
     @endif     
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
    

@if(isset($_GET['affiliate']))
<?php
$roll=$_GET['affiliate'];
;?>
@if($roll == "All"))


          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All Affiliate</h5>
              
              <h5>কোন ইউজারকে এ্যাপ্রুভ করার সময়  ইংরেজীতে শুধু কমিশনের পরিমাণ লিখতে হবে, যেমন: 5 ( % বা tk লেখার প্রয়োজন নেই)
              
              
              </h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                  
                    <th>User Info</th>
                    <th>User Join</th></th>
                    <th>Earning Info</th>
                 <th>Action</th>
                    
                    
                    
              
                   
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  
                  $coupons333=DB::table('users')->where('affiliate_com','!=','0')->orderby('id',"DESC")->get();
                  
                  
                  
                  
                  
                  $i=1;?>
                  @foreach ($coupons333 as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
-
                   
                      
                      <td>{{ $coupon->name }}<br>
                      {{ $coupon->phone }} <br>
                      Status: 
                      @if($coupon->affiliate_com > 0)
                     <span style="color:green"> <b> Active</b></span>
                      @else
                     <span style="color:red"> <b>Pending</b></span>
                      @endif
                      
                      
                      </td>
                      
                      
                      <td>
                          
                          
                          @if($coupon->affiliate_com > 0)
                          <?php
                           $a_counts=DB::table('users')->where('ref_upline', 'like', '%'.$coupon->id.'%')->count();
                           $a_counts_v=DB::table('users')->where('affiliate_com','>','0')->where('ref_upline', 'like', '%'.$coupon->id.'%')->count();

                          ;?>
                        Total Join: <b>{{$a_counts}}  জন </b><br>
                      Approved: <b>{{$a_counts_v}} জন</b>
                       </td>
                        @else
                        0
                        @endif
                      
                      
                      
                      <td>
                           <?php
                           
                      
                      $wallet1=DB::table('ac_main')->where('user_id',$coupon->id)->sum('amount');
                      $wallet2=DB::table('ac_shop')->where('user_id',$coupon->id)->sum('amount');
                      
                      
                      
                      
                      ?>
                      Cash: {{$wallet1}}<br>
                      Shop: {{$wallet2}}<br>
                      </td>
                      
                      
                      <td>
                          
                          
                          <form action="" method="get">
                            @csrf
                         @if($coupon->affiliate_com > 0) 
                         <input type="number" name="comission" required="" placeholder="Comission" value="{{ $coupon->affiliate_com }}"><br>
                          <input type="hidden" name="affiliate" value="1">
                          <input type="hidden" name="id" value="{{ $coupon->id }}">
                          
                          
                         <button type="submit" style="background:green; color:white" name="af_edit">
                         Edit
                         </button>
                         @endif
                         
                         
                         @if($coupon->affiliate_com < 0)
                                               
                           <input type="number" name="comission" required="" placeholder="Comission" ><br>
                          <input type="hidden" name="affiliate" value="All">
                          <input type="hidden" name="id" value="{{ $coupon->id }}">                     
                                               
                                               
                         <button type="submit" style="background:red;color:white" name="af_edit">
                         Approve
                         </button>
                         @endif
                     
                            </form>
                     
                     
                     
                     
                      </td>
                      
                      
                      
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
     @endif           
     @endif           
          
          
          
          
          
          
          
          
          
          
          
          
          
                    
          
    

@if(isset($_GET['affiliate']))
<?php
$roll=$_GET['affiliate'];
;?>
@if($roll == "roll")

   <h4>কোন ইউজারকে Sub Admin তৈরী করার পর সে,  এ্যাডমিনের ন্যায়   Site URL/admin/login থেকে লগিন করবেন।)
              
              
              </h4>
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>User Role</h5>
              
           
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                  
                    <th>User Info</th>
                    <th>Role</th>
                 <th>Action</th>
                    
                    
                    
              
                   
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  
                  $coupons333=DB::table('users')->where('id','>',1)->orderby('id',"DESC")->get();
                  
                  
                  
                  
                  
                  $i=1;?>
                  @foreach ($coupons333 as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
-
                   
                      
                      <td>{{ $coupon->name }}<br>
                      {{ $coupon->phone }} <br>
                      {{ $coupon->email }}
                     
                      
                      
                      </td>
                      
                      
                        <td>
                        
                        
                    
                      
                      @if($coupon->admin > 0)
                     <span style="color:green"> <b> Sub Admin</b></span>
                      @else
                     <span style="color:red"> <b>General User</b></span>
                      @endif
                      
                      
                      </td>
                      
                      
                      
                      <td>
                          
                          
                         
                        
                        
                         
                         
                         @if($coupon->admin == 1)
                          <form action="" method="get">
                            @csrf
                                              
                            <input type="hidden" name="role" required="" value="0"><br>
                            <input type="hidden" name="affiliate" value="roll">
                            <input type="hidden" name="id" value="{{ $coupon->id }}">                     
                                               
                                               
                            <button type="submit" style="background:red;color:white" name="rl_edit">
                            Make as General User
                            </button>
                          
                     
                            </form>
                         
                         @endif
                         
                         
                         
                         
                         
                         
                         @if($coupon->admin != 1)
                            <form action="" method="get">
                            @csrf
                                              
                            <input type="hidden" name="role" required="" value="1"><br>
                            <input type="hidden" name="affiliate" value="roll">
                            <input type="hidden" name="id" value="{{ $coupon->id }}">                     
                                               
                                               
                            <button type="submit" style="background:green;color:white" name="rl_edit">
                           Make as Sub Admin
                            </button>
                          
                     
                            </form>
                         @endif
                                       
                         
                          
                     
                     
                     
                     
                      </td>
                      
                      
                      
                      
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
     @endif           
     @endif           
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        </div>
      </div>
    </div>
  </div>

@endsection
