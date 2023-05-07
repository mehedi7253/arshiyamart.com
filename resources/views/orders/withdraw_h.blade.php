@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);


    ;?>        
          
          
@foreach($results12 as $t12)
     <?php 
       $h12=$t12->image;     
     ;?>
@endforeach

@foreach($results13 as $t13)
     <?php 
         $h13=$t13->image;     
     ;?>
@endforeach
   
 
 @foreach($results14 as $t14)
     <?php 
        $h14=$t14->image;     
     ;?>
@endforeach
     
   
      
 @foreach($results22 as $t22)
     <?php 
        $h22=$t22->image;     
     ;?>
@endforeach
     
      
				              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > <i class="fa fa-home" aria-hidden="true"></i>  Back to Dashboard </h3></a>

  
  
  
  



<?php
if(isset($_GET['t'])){
    $t=$_GET['t'];
}


?>
@if( $t == 1)


  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
            <?php $i = 1;?>
                 <?php
      	$main_w=Auth::user()->id;
			        
			        $incommmmming=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','>',0)->get();
			        $incommmmming2=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','>',0)->sum('amount');
			        ?>
            
             <h3 style="text-align:center">Transfar In ({{$incommmmming2}})</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    

                  </tr>
                </thead>
                     <tbody>
                  

                  
      
                  
                  
                  
                  
                   @foreach ($incommmmming as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
     <span style="color:blue">{{ date('d-M-Y', strtotime($gen->created_at)) }}</span>                      
                      </td>
                      
                            <td class="center">
                        {{$gen->amount}}
                      
                      </td>                 
                
                
                         <td class="center">
                      Transfar in Form: 
                      
                        <span style="color:blue">{{@$gen->sender_number}}</span>

                     
                      </td>   
                      
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>      
              </table>
            </div>
          </div>


@endif




















@if( $t == 2)


  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
            <?php $i = 1;?>
                 <?php
      	$main_w=Auth::user()->id;
			        
			        $incommmmming=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','<',0)->get();
			        $incommmmming2=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','<',0)->sum('amount');
			        ?>
            
             <h3 style="text-align:center">Transfar Out ({{$incommmmming2*(-1)}})</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    

                  </tr>
                </thead>
                     <tbody>
                  

                  
      
                  
                  
                  
                  
                   @foreach ($incommmmming as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
     <span style="color:blue">{{ date('d-M-Y', strtotime($gen->created_at)) }}</span>                      
                      </td>
                      
                            <td class="center">
                        {{($gen->amount)*(-1)}}
                      
                      </td>                 
                
                
                         <td class="center">
                      Transfar to: 
                      
                        <span style="color:blue">{{@$gen->sender_number}}</span>
                     
                      </td>   
                      
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>      
              </table>
            </div>
          </div>


@endif


















@if( $t == 3)


  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
            <?php $i = 1;?>
                 <?php
      	$main_w=Auth::user()->id;
			        
			        $incommmmming=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','<',0)->get();
			        $incommmmming2=DB::table('ac_join_rccc')->where('user_id',$main_w)->where('remark',"209")->where('amount','<',0)->sum('amount');
			        ?>
            
             <h3 style="text-align:center">Company Transfer In ({{$incommmmming2}})</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    

                  </tr>
                </thead>
                     <tbody>
                  

                  
      
                  
                  
                  
                  
                   @foreach ($incommmmming as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
     <span style="color:blue">{{ date('d-M-Y', strtotime($gen->created_at)) }}</span>                      
                      </td>
                      
                            <td class="center">
                        {{($gen->amount)}}
                      
                      </td>                 
                
                
                         <td class="center">
                      Transfar in From: 
                      
                        <span style="color:blue">Company</span>
                     
                      </td>   
                      
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>      
              </table>
            </div>
          </div>


@endif

























@if( $t == 4)


  <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
            <?php $i = 1;?>
                 <?php
      	$main_w=Auth::user()->id;
			        
			        $incommmmming=DB::table('ac_main_with')->where('user_id',$main_w)->get();
			        $incommmmming2=DB::table('ac_main_with')->where('user_id',$main_w)->where('status',2)->sum('amount');
			        ?>
            
             <h3 style="text-align:center">Withdraw ( Success: {{$incommmmming2}})</h3>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                      
                    <th>No</th>
                     <th>Date</th>

                    <th>Amount</th>

                    <th>Remark</th>   
                    
                    

                  </tr>
                </thead>
                     <tbody>
                  

                  
      
                  
                  
                  
                  
                   @foreach ($incommmmming as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
     <span style="color:blue">{{ date('d-M-Y', strtotime($gen->created_at)) }}</span>                      
                      </td>
                      
                            <td class="center">
                        {{($gen->amount)}}
                      
                      </td>                 
                
                
                         <td class="center">
@if(status ==1)                      
                        <span style="color:blue">Pendintg</span>
@endif


@if(status ==2)                      
                        <span style="color:blue">Sueecss</span>
@endif


                      </td>   
                      
                      </td>     
                      
                    </tr>
                  @endforeach

                </tbody>      
              </table>
            </div>
          </div>


@endif


















  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
