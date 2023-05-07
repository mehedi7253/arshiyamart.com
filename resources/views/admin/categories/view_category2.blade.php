@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>Brand</h1>
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

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All Brand <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Brand ID</th>
                    <th>Brand Name</th>
                    {{-- <th>Brand Description</th> --}}
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                      <td>{{ $category->id }}</td>
                      <td>
                          @if($category->parent_id==0)
                          <span style="color:red">
                          {{ $category->name }} 
                          </span>
                          @else
                                     {{ $category->name }}
               
                          @endif
                          
                          </td>
                      {{-- <td>{{ $category->description }}</td> --}}
                      <td class="center">
                        <div class="fr"><a href="{{ url('/admin/edit-category2/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a>
                        </div>
                      </td>
                      
                      <td>
                          <div class="fr">
 <a href="{{ url('/admin/delete-category2/'.$category->id) }}" class="btn btn-danger btn-mini del1">Delete</a>                        </div>
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
