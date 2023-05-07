@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-banners') }}">View products</a> <a href="{{ url('/admin/add-banner') }}" class="current">Add Banner</a> </div>
      <h1>Banners</h1>
    </div>

    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span8">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Setting</h5>
              

              
              
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

              @foreach ($e_banners as $e_banner)


              <form class="form-horizontal" method="post" action="{{ url('/admin/edit-banners/'.$e_banner->id) }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
                {{ csrf_field() }}



    @if($e_banner->id==38)
    
    
    
    <h6 style="text-align:center; color:blue">থীম পরিবর্তন করার পর, হোম পেইজে গিয়ে রিফ্রেস দিলেই নতুন থীমটি দেখা যাবে 
    </h6>
    @endif










                <div class="control-group">
                  <label class="control-label">Status</label>
                  <div class="controls">
                    <input type="text" name="title" id="product_name" value="{{ $e_banner->title }}" class="span11" readonly="">
                  </div>
                </div>



@if($e_banner->id==37)


                <h6 style="color:{{$e_banner->image}}">নিচের কালার বক্স  এর উপর ক্লিক নির্বাচন করে বাহিরের যে জায়গায় ক্লিক করুন ও Update ক্লিক করুন)</h6>
                
 <div class="control-group">
                  <label class="control-label">Select Color:</label>
                  <div class="controls">
                 
                   <input type="color" id="favcolor" name="current_image" value=""><br><br>

                 
                 
                 
                 

                  </div>
                </div>


@else
       @if(empty($e_banner->status))
       
       
       @if($e_banner->status2 > 0)
                <div class="control-group">
                  <label class="control-label">URL /Link (if any)   [With https://]</label>
                  <div class="controls">
                 
                      <input type="url" name="b_link" value="{{ $e_banner->link }}">
                   
                  </div>
                </div>
       
       @endif
       
                
       
                <div class="control-group">
                  <label class="control-label">Banner Image</label>
                  <div class="controls">
                    <input type="file" name="image" />
                    @if(!empty($e_banner->image))
                      <input type="hidden" name="current_image" value="{{ $e_banner->image }}">
                    @endif
                  </div>
                </div>

    @else
    
    
    
    
    @if($e_banner->id==38)
    
    
    <?php
    $c_them=DB::table('banners')->where('id',38)->first();
    $c_them=$c_them->image;
    if(empty($c_them)){
        $c_them=1;
    }
    else
    {
        $c_them=$c_them;
    }
    ;?>

    
    
        <div class="control-group">
                  <label class="control-label">Select Theam</label>
                  <div class="controls">
                 <select name="current_image" required="">
<?php
 $affi=DB::table('banners')->where('id',1002)->first();
 ?>
        @if($affi->image == 2)
                     <option value="11" @if($c_them == 11) selected @endif>Theam-11 (Affiliate Friend)</option>
        @endif

                     
                     <option value="1" @if($c_them < 2) selected @endif >Theam-1(Standard)</option>
                     <option value="2" @if($c_them == 2) selected @endif>Theam-2 (classic)</option>
                     <option value="3" @if($c_them == 3) selected @endif>Theam-3 (Stylo)</option>
                     
                     <option value="" disabled="">Theam-4(comming soon)</option>
                     <option value="" disabled="">Theam-5(comming soon)</option>
                     <option value="" disabled="">Theam-6(comming soon)</option>
                     <option value="" disabled="">Theam-7(comming soon)</option>
                     <option value="" disabled="">Theam-8(comming soon)</option>
                     <option value="" disabled="">Theam-9(comming soon)</option>
                     <option value="" disabled="">Theam-10(comming soon)</option>

                    
                 </select>




                  </div>
    </div>
    
    
    
    
    
    
    
    
    
    @else

    <div class="control-group">
                  <label class="control-label">Text</label>
                  <div class="controls">
                 
                      <textarea name="current_image">{{ $e_banner->image }}</textarea>
                   
                  </div>
    </div>
                
     @endif           
                
                
                

    @endif

@endif






<!--                <div class="control-group">
                  <label class="control-label">Link</label>
                  <div class="controls">
                    <input type="text" name="b_link" id="product_code" value="{{ $e_banner->link }}" class="span11">
                  </div>
                </div>
-->
<!--
                <div class="control-group">
                  <label class="control-label">Status</label>
                  <div class="controls">
                    <input type="checkbox" name="status" id="status" value="1" @if($e_banner->status == 1) checked @endif >
                  </div>
                </div>-->

                <div class="form-actions">
                  <input type="submit" value="Update " class="btn btn-success">
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="span4">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Banner Image</h5>
            </div>
            <img style="width: 100%;" src="{{ asset('assets/admin/img/banners/'.$e_banner->image)}}" alt="">
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
