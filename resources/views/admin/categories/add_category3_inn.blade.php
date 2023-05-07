@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories2') }}">View Categories</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Category</a> </div>
-->      <h1>Notice</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
              
          
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Notice</h5>
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-category3_inn') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}


                <div class="control-group">
                  <label class="control-label">Subject/Title</label>
                  <div class="controls">
                    <input type="number" name="title" id="cat_name">
                  </div>
                </div>
                

<div class="control-group">
                  <label class="control-label">Youtube Video URL (if any)</label>
                  <div class="controls">
                    <input type="Text" name="url" id="cat_name">
                  </div>
                </div>



               <div class="control-group">
                <select name="role">
				 <option value="">Select User Group</option>
				 <option value="111">All User</option>
				<option value="1">Dealer</option>
				<option value="2">Mo</option>
				<option value="3">AM</option>	
				<option value="4">NSM</option>	
				<option value="5">ED</option>								
				
								<option value="6">Thana</option>		
				
											<option value="7">District</option>		
															<option value="8">Division</option>
				
				
                  </select>
                </div>
                
              
              
              
                    <div class="control-group">
                  <label class="control-label">Notice</label>
                  <div class="controls">
                    <textarea name="notice"></textarea>
                  </div>
                </div>
                
                       
              
              
              
              
              
                <div class="form-actions">
                  <input type="submit" value="Submit" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
