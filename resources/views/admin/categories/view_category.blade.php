@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
      <h1>Categories</h1>
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
              <h5>All Categories <span style="color:red; font-size:20px">(Red Color is Main Category)</span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    {{-- <th>Category Description</th> --}}
                    <th>Parents Category</th>
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
                          {{ $category->name }} ({{$category->o_c}})
                          </span>
                          @else
                                     {{ $category->name }}
               
                          @endif
                          
                          </td>
                      {{-- <td>{{ $category->description }}</td> --}}
                      <td>
                          
                          
                                                       

                           
                           @if($category->parent_id < 1)
                           
                           
                          - 
                          
                           @else
                               <?php
                               
                               $mm_iidd62=$category->parent_id;
                               if($mm_iidd62>0)
                               {
                              $mm_iidd624=$category->parent_id;
                              
                              
                               $ccciidd=DB::table('categories')
                               ->where('id', $mm_iidd624)
                               ->get();
                               }
                           ?>
                                    
@foreach ($ccciidd as $p)

@if (isset($p->name))
<span style="color:red">Main Category:</span> {{ $p->name }}
@else
Main Catagory Deleted

@endif


@endforeach
                          
                          
                         @endif
                          
                          </td>
                      <td class="center">
                        <div class="fr"><a href="{{ url('/admin/edit-category/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a>
                        </div>
                      </td>
                   
                      <td>
                          <div class="fr">
 <a <?php /*id="delCat" href="{{ url('/admin/delete-category/'.$category->id) }}"*/?> rel="{{ $category->id }}" rel1="delete-category" href="javascript:" class="btn btn-danger btn-mini del1">Delete</a>                        </div>
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
