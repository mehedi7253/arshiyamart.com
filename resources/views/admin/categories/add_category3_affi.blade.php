@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Add Affiliator Rank</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Affiliator Rank</h5>
              
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category3_affi') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}



<h6 style="color:red">2 নং এর নোটঃ এ্যাফেলিয়েট Rank  শুধুমাত্র এ্যাফেলিয়েটর কতৃক রেফারকৃত ইউজারদের অর্ডারকৃত ডেলিভারী প্রোডাক্ট এর ক্ষেত্রে গণনার অন্তভূক্ত হবে </h6>

                <div class="control-group">
                  <label class="control-label">1. Rank Name</label>
                  <div class="controls">
                    <input type="text" name="rank_name" id="cat_name">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">2. Total Salse Amount </label>
                  <div class="controls">
                    <input type="number" name="extra1" id="cat_name">
                  </div>
                </div>
                
                
                
                
                  <div class="control-group">
                  <label class="control-label">3. Instant Incentive Amount</label>
                  <div class="controls">
                    <input type="number" name="extra2" id="cat_name">
                  </div>
                </div>     
                
                
                                
                  <div class="control-group">
                  <label class="control-label">4. Award </label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name">
                  </div>
                </div>     
                
                
                
                     
                          <div class="control-group">
                  <label class="control-label">5. Monthly Salary (if any)</label>
                  <div class="controls">
                    <input type="number" name="extra3" id="cat_name">
                  </div>
                </div>     
                        
                   
                   
                   
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Publish" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
