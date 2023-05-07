@extends('layouts.adminLayouts.admin_master2')
@section('content')
  <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Settings</a> </div>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">

        <div class="span12">
            
            
            <h2>
                
                
                    @if (Session::has('flash_message_success'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-success">

                                   <strong style="color:#000">{{ session('flash_message_success') }}</strong>

                               </div>
                             </div>
                       </div>
               @endif

              @if (Session::has('flash_message_error'))
                       <div class="control-group">
                           <div class="controls">
                               <div class="alert alert-denger">

                                   <strong style="color:#000">{{ session('flash_message_error') }}</strong>

                               </div>
                             </div>
                       </div>
               @endif
            </h2>
            
            
            

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Update Password</h5>
            </div>
            <div class="widget-content nopadding">
          

              <form class="form-horizontal" method="post" action="{{ url('/admin/update-password') }}" name="password_validate" id="password_validate" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="control-group">
                  <label class="control-label">Current Password</label>
                  <div class="controls">
                    <input type="password" name="current_pwd"  required=""/>
                    <span id="chkPassword"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">New Password</label>
                  <div class="controls">
                    <input type="password" name="new_pwd" id="new_pwd" required=""/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm Password</label>
                  <div class="controls">
                    <input type="password" name="confirm_pwd" id="confirm_pwd" required=""/>
                  </div>
                </div>
                
                
                
                
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Update Password" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Update PIN (Current PIN ভুলে গেলে iCT Sky  এর হেল্প লাইন যোগাযোগ করে রিসেট করে নিতে হবে।)</h5>
            </div>
            <div class="widget-content nopadding">
             

              <form class="form-horizontal" method="post" action="{{ url('/admin/update-passwordp') }}" name="password_validate" id="password_validate" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="control-group">
                  <label class="control-label">Current PIN</label>
                  <div class="controls">
                    <input type="password" name="current_pwd"   required=""/>
                    <span id="chkPassword"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">New PIN</label>
                  <div class="controls">
                    <input type="password" name="new_pwd" id="new_pwd" required=""/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm PIN</label>
                  <div class="controls">
                    <input type="password" name="confirm_pwd" id="confirm_pwd" required=""/>
                  </div>
                </div>
                
                <div class="form-actions">
                  <input type="submit" value="Update PIN" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
          
          
          
          
          
          
          
          
          
          
          
        </div>
      </div>
    </div>
  </div>

@endsection
