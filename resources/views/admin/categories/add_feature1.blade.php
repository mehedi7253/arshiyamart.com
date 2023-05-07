@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Add Bank</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Bank</h5>
              
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-feature1') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}




                <div class="control-group">
                  <label class="control-label">1. Bank Name</label>
                  <div class="controls">
                    <input type="text" name="remark" id="cat_name">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">2. A/C No:</label>
                  <div class="controls">
                    <input type="number" name="extra8" id="cat_name">
                  </div>
                </div>
                
                
                
                
                  <div class="control-group">
                  <label class="control-label">3. Opening Amount </label>
                  <div class="controls">
                    <input type="number" name="extra3" id="cat_name">
                  </div>
                </div>     
                
                
                                
                  <div class="control-group">
                  <label class="control-label">4. Remark </label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name">
                  </div>
                </div>      
                
                
                
                     
                   
                   
                   
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Publish" class="btn btn-success">
                </div>
              </form>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
               <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All Affiliate Rank <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                  
                    <th>SL</th>
                    <th>Bank</th>
                    <th>Deposit</th>
                    <th>Withdraw</th>
                    <th>Balance</th>
                    <th>Edit</th>

                  </tr>
                </thead>
                <tbody><?php $i=1;
                
                $categories=DB::table('a333')->get();
                
                ?>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                      <td>{{ $i++}}</td>
                      <td>{{ $category->remark}}<br>A/C:{{ $category->extra8 }}<br>Opening Amount: {{$category->extra3 }}<br>Remark:{{$category->extra5 }}</td>
<?php
$total_d=DB::table('pgw')->where('payment_method',"By_Bank")->where('extra6',$category->id)->sum('amount');
$total_diposit=$total_d+$category->extra3 + 0;
$total_w= 0;
$total_b=$total_diposit - 0;

;?>
                      <td>{{$total_diposit }}</td>
                      <td>{{$total_w}}</td>
                      <td>
                          
                          {{ $total_b }}
                          
                          
                          </td>
     
                      
                        
                        
                        
                        
                        
                        
                      <td class="center">
                        <div class="fr"><a href="{{ url('/admin/edit-feature1/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a>
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
  </div>

@endsection










