@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Add Circular</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Circular</h5>
              
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category3_mont') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}



<h6 style="color:red"> বাংলাদেশ সরকারের “শ্রম আইন, ২০০৬
 (Labour Court)” নীতিমালা অনুযায়ী বুঝে শুনে সার্কুলার দেওয়ার পরামর্শ রইল। অস্বাভিক তেবন, প্রলোভন, সার্কুলারের নামে অর্থ বানিজ্য  দন্ডনীয় অপরাধ। (মাসিক নির্ধারিত বেতনের পর ওভার টাইম ও কমিশন দেওয়া যাবে, তবে শুধু কাজের উপর কমিশন নির্ভর বেতন   আইন অনুযায়ী গ্রহণযোগ্য নয়, তবে কিছু কিছু কাজের ক্ষেত্রে গ্রহণ যোগ্য । যা বিস্তারিত নীতিমালা জেনে নেওয়ার পরামর্শ রইল।
 
 
 )। আজীবন সুন্দরভাবে বিজনেস করার জন্য সকল প্রকার টেম্পারিং থেকে মুক্ত থাকুন, সুন্দর একটি ব্রান্ড তৈরী করুন। </h6>

                <div class="control-group">
                  <label class="control-label">Post Name</label>
                  <div class="controls">
                    <input type="text" name="rank_name" id="cat_name">
                  </div>
                </div>
                
                
                <div class="control-group">
                  <label class="control-label">Number of Post</label>
                  <div class="controls">
                    <input type="text" name="extra8" id="cat_name">
                  </div>
                </div>
                
                
                
                  <div class="control-group">
                  <label class="control-label">Job Type</label>
                  <div class="controls">
                  <select name="extra9" style="width:25%">
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>

                  </select>
                

                  </div>
                </div>   
                
                
                
                
                
                
                  <div class="control-group">
                  <label class="control-label">Monthly Salary</label>
                  <div class="controls">
                    <input type="text" name="extra5" id="cat_name">
                  </div>
                </div>     
                
                
                
                
                             
                  <div class="control-group">
                  <label class="control-label">Educational Qualification</label>
                  <div class="controls">
                      <textarea name="extra6"></textarea>
                  </div>
                </div>     
                   
                   
                   
                   
                   
                              
                             
                  <div class="control-group">
                  <label class="control-label">Exprience (if any)</label>
                  <div class="controls">
                        <textarea name="extra7"></textarea>
                      </div>
                </div>         
                   
                   
                   
                   
                   
                   
                   
                   
                                          
                             
                  <div class="control-group">
                  <label class="control-label">Date Line (আবেদনের সময়সীমা)</label>
                  <div class="controls">
<input type="date" name="extra13">
</div>
                </div>         
                          
                   
                
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Publish Circular" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
