@extends('layouts.adminLayouts.admin_master2')
@section('content')



  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Child Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
      <h1>Child Categories</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
          
  <?php
  if(isset($_GET['did']))
{
   $sllsd=$_GET['did'];
        $userCart = DB::table('child_category')->where(['id' => $sllsd])->delete();
        echo "<h2>1  Delete Success</h2>";
}

  
  ;?>        
          <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Child Category</h5>
              <h5 style="color:red">[নোটঃ যে সকল ক্যাটাগরির সাব ক্যাটাগরি আছে, শুধুমাত্র সেই সকল সাব ক্যাটাগরির চাইন্ড ক্যাটাগরিত তৈরী করা যাবে]</h5>
      
              
              
              
              
              
              
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/add-categoryc') }}" name="add_category" id="add_category" novalidate="novalidate">
                {{ csrf_field() }}

             	 <?php
                    $aa_dist=DB::table('categories')->where('parent_id',0)->orderby('id','ASC')->get();
                   ;?>
                <div class="control-group">
                  <label class="control-label">Main Category</label>
                  <div class="controls">
                    <select name="main_id" style="width:26%" id="mySelect" onchange="ChangeCarList()" required="">
                      <option value="">Select Main Category</option>
                     @foreach ($aa_dist as $dist)
    <option value="{{$dist->id}}">{{$dist->name}}</option>
    @endforeach
                    </select>
                  </div>
                </div>
               

                               <div class="control-group">
                  <label class="control-label">Sub Category</label>
                  <div class="controls">
                    <select name="sub_id" style="width:26%" id="sm14" required="">
                      <option value="">Select Sub Category</option>
                     
                    </select>
                  </div>
                </div>
                
                
                
                
                   <div class="control-group">
                  <label class="control-label">Child Category Name</label>
                  <div class="controls">
                    <input type="text" name="name" id="cat_name" required>
                  </div>
                </div>
                
                
                
                
                <div class="form-actions">
                  <input type="submit" value="Create" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
          
          
          
          
          
          
          
          
          
          

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
              <h5>All Child Categories <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Child Name</th>
                    <th>Main-Sub Category</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    
                    
                    
                    <?php
                     $categories=DB::table('child_category')->orderby('id', 'DESE')
                               ->get();
                    ;?>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                      <td>{{$category->id}}</td>
                      <td>
                         {{$category->name}}
                          
                          </td>
                      <td>
                          
                          
                          <?php
                          $c_id=$category->main_id;
                          $s_id=$category->sub_id;
                          
                          $categories=DB::table('categories')
                          ->where('id',$c_id)
                               ->first();
                          
                        $categories2=DB::table('categories')
                          ->where('id',$s_id)
                               ->first();
                          
                          
                          
                          
                          ?>
                          
                          {{@$categories->name}} > {{@$categories2->name}} >                          {{@$category->name}}

                          
                                                       

                          
                          </td>
                      <td class="center">
                        <div class="fr"><a href="{{url('/')}}/admin/add-categoryc?did={{$category->id}}" class="btn btn-denser btn-mini">Delete</a>
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












<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_child.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>

