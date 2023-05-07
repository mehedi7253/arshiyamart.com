@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >View Resell Product</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
      <h1>All Re-Seller Product</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">


<?php
if(isset($_GET['send_fund'])){
    
                            $coupons7 = DB::table('coupons7')->where('id',$_GET['send_fund'])->first();
    if($coupons7->status < 5){
                            DB::table('ac_main')->insert([
                            'user_id'         => $coupons7->user_id,
                            'amount'          => $coupons7->admin_price,
                            'remark'          => 700,
                            'sender_number'   => "",
                          
                            'status'          => 2,
                     
                            ]);
    
    
    
DB::table('coupons7')->where('id',$_GET['send_fund'])->update([
    'status'=>5,
    ]);

    
    }
    
}


?>




























          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Resell Products:</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>User Information</th>
                    <th>Site Product</th>
                    <th>Customer Old</th>
                    <th>Remark</th>
                    
                                       

                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  
                  
                  <?php
                        $coupons7 = DB::table('coupons7')->orderby('id','DESC')->get();
                  ;?>
                  
                  @foreach ($coupons7 as $re_sale)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                    
                    
                    
                    
                     
                      <td>
                          
                          
                          
                      <?php
                      $pr_info=DB::table('users')->where('id',$re_sale->user_id)->first();
                      ;?>
                      
                      

                      
                      {{$pr_info->name}}<br>
                      {{$pr_info->phone}}<br>
                      {{$pr_info->address}}<br>
                      
                      

                      
                      </td>
                       
                     
                      <td>
                      
                     
                      
                      
                      
                      <?php
                      $p_info=DB::table('products')->where('id',$re_sale->product_id)->first();
                      ;?>
                      
                      
                      <img src="{{ asset('assets/admin/img/products/large/'.$p_info->image) }}" style="height:100px"><br>
                      
                      
                      
                    
                      
                      
                      {{ $p_info->product_name}}
                     
         
               
               </td>           
               <td>         
               
                                     <img src="{{ asset('assets/admin/img/ppp/large/'.$re_sale->image) }}" style="height:100px"><br>



        
                      <br>ধরণ:
                      @if($re_sale->product_type ==2)
                      নতুন
                      @endif
                      
                         
                      @if($re_sale->product_type ==1)
                      ব্যাবহৃত
                      @endif
                      
                         <br>ক্রয় মূল্য:
                      {{ $p_info->	price}}
                      
                      
                      
                      <br>কাঙ্খিত মূল্য:
                      {{$re_sale->d_price}} <br>

                      
                      
           
                      </td>
              
                   
                      <td>
                     
                      
                      <br>
                      
               @if($re_sale->status ==3)
                <span style="color:red"> User Accept This Price</span> <br>
               @endif
              
                      
                      
                      
                      
                      
                      
                      User:  <span style="color:blue"> {{$re_sale->personal_note}} </span><br>
              @if(empty($re_sale->admin_price))        
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{$re_sale->id}}">
                   Set Price
                </button>
               @else
                
               Admin:  <span style="color:blue">{{$re_sale->admin_note}}</span><br>
               
               
               @if($re_sale->status == 3)
                
                
                  Status:  <span style="color:green">Customer Agree to: {{$re_sale->admin_price}}</span><br>
                
                <a href="?send_fund={{$re_sale->id}}">
                
                
                <button>
                   Product Receivred & Add Fund
                </button>
                
                </a>
                
                
               @endif
              
                
                      
               @endif       
          
          
               @if($re_sale->status ==5)
               <span style="color:green"> Completed </span>

               @endif
          
          
          
          
          
          
<div class="modal fade" id="modal-lg{{$re_sale->id}}" style="z-index:9999999">
        <div class="modal-dialog modal-lg">
         
         
         
          <form action="/orders_res_send2" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">




     <input type="hidden" id="cash" name="r_id" value="{{$re_sale->id}}" required="">









<label>Product Information: </label>

<h5>কাস্টমারের কাঙ্খিত মূল্য: {{ $re_sale->d_price}}</h5>


 <input type="number" id="cash" name="admin_price" placeholder="Admin Price" required="">


<br>
      
    



<div style="width:100%">
    <label>এ্যাডমিন কমেন্ট</label>
<textarea name="admin_note" style="width:95%" required=""></textarea>


                  
       </div>   








              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Send">
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

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
