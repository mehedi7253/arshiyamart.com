@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Rank & Comission (Ins)</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
              <span style="color:red; font-size:140%">নোট: 
                        মোট  ক্রয়ের উপর কোন কমিশন দিতে চাইলে এটা সেট করতে হবে। (দিতে না চাইলে এখানে কিছু করার প্রযোজন  নেই)। উল্লেখ্য যে, অত্র কমিশন শপ ওয়ালেটে জমা হবে, যা দিয়ে কাস্টমার পুনরায় শপিং করতে পারবেন।

            </span><span style="color:blue; font-size:120%">
            <br>
             
              ১। কাস্টমার/ইউজার মোট কত টাকার ক্রয় করলে Rank /উপাধি দিবেন, সেটা এখানে লিখতে হবে। (ক্রেতা ২/৩মাসে বা যত দিন পর এই পরিমাণ টাকার প্রোডাক্ট ক্রয় করবেন, তখনই উপাধি অর্জন করবেন। 
            <br>   ২। Rank/উপাধি: যেমন Silver, Gold, Platinum, Diamond ইত্যাদি। বা Executive, Senior Executive ... ইত্যাদি ইত্যাদি.. 
            
            
          
          <br> ৩। Incentive (ইন্সট্যান্ট কমিশন)  Rank অর্জন করার পর শুধু মাত্র ১বার পাবেন। 
          <br> ৪। Discount : শতকরা হিসাবে  হবে। যেমন ডিসকাউন্ট বক্সে ২ লিখলে, অত্র Rank অর্জন করার পর থেকে তিনি যত ক্রয় করবেন, ইনভয়েজ এমাউন্ট এর উপর ঠিক তত % ডিসকাউন্ট পাবেন। (লাইফ টাইম)
 যদি কোন শতকরা সিকাউন্ট না দিতে আগহী হন, তাহলে এখানে 0 লিখতে হবে, তাহলে শুধু ইন্সট্যান্ট কমিশন পাবেন, কিন্ত ক্রয়ের উপর কোন কমিশন পাবেন না।           
          
         <span style="color:red"> [এখানে একক ক্রয়ের উপর Rank  ও কমিশন বিধায় এটা MLM হিসাবে গন্য হবে না। ই-কমার্স সাইটে MLM সাইট হিসাবে ব্যাবহার করা সরকারী ভাবে নিষিদ্ধ]</span>
          
          
         </span>
          
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Monthly Comission</h5>
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category3_ins') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label">1. Shopping Amount <br> (মোট  ক্রয়)</label>
                  <div class="controls">
                    <input type="number" name="monthly_value" id="cat_name">
                  </div>
                </div>
                

<div class="control-group">
                  <label class="control-label">2. Rank (উপাধি)</label>
                  <div class="controls">
                    <input type="Text" name="rank" id="cat_name">
                  </div>
                </div>



               <div class="control-group">
                  <label class="control-label"> 3. Incentive (ইন্সট্যান্ট কমিশন)</label>
                  <div class="controls">
                    <input type="number" name="comission" id="cat_name">
                  </div>
                </div>
                
              
              
              
                    <div class="control-group">
                  <label class="control-label"> 4. Discount (in any)  <br> (ইংরেজীতে শুধু সংখ্যা লিখতে হবে, % লেখার প্রযোজন নেই।)</label>
                  <div class="controls">
                    <input type="number" name="comission2" id="cat_name" max="50">
                  </div>
                </div>
                
                       
              
             
             
             
                
                
                
                              
                    <div class="control-group">
                  <label class="control-label"> 5. Gift/Award (in any)  </label>
                  <div class="controls">
                    <input type="text" name="comission3" id="cat_name" max="50">
                  </div>
                </div>
                 
              
              
              
                                  <div class="control-group">
                  <label class="control-label"> 6. Monthly Salary/Comission  (খালি রাখতে চাইলে এটাতে  0 লিখতে হবে) </label>
                  <div class="controls">
                    <input type="number" name="comission4" id="cat_name" max="50" required="">  
                    <select name="comission5" required="">
                        <option value="">Salary Type</option>
                        <option value="1">Fixed Tk</option>
                        <option value="2">Persent</option>
                        <option value="3">N/A (if Salary is 0 )</option>
                        </select>
                  </div>
                </div>
              
              
              
              
              
              
              
              
                <div class="form-actions">
                  <input type="submit" value="Validate" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
