@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      <?php
 $carry_limit=DB::table('users')->where('trn',1)->get();
;?>

@foreach ($carry_limit as $limit)
<?php   $l=$limit->joining_amount *12; ?>
<?php   $l2=$limit->joining_amount *10; ?>
     
 @if($limit->joining_amount = 1000)   
    @if($limit->laft_c > $l)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'laft_c'=>12000
        ]);
    ;?>
    @endif
    
    
    @if($limit->right_c > $l)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'right_c'=>12000
        ]);
    ;?>
    @endif
    
    
    
    @if($limit->laft_c2 > $l)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'laft_c'=>12000
        ]);
    ;?>
    @endif
    
    
    @if($limit->right_c2 > $l)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'right_c'=>12000
        ]);
    ;?>
    @endif
    
    
    
@else
    @if($limit->laft_c > $l2)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'laft_c'=>$l2
        ]);
    ;?>
    @endif
    
    
    @if($limit->right_c > $l2)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'right_c'=>$l2
        ]);
    ;?>
    @endif
    
    
    
    @if($limit->laft_c2 > $l2)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'laft_c'=>$l2
        ]);
    ;?>
    @endif
    
    
    @if($limit->right_c2 > $l2)
    <?php
    DB::table('users')->where('id',$limit->id)->update([
        'right_c'=>$l2
        ]);
    ;?>
    @endif
@endif



    


@endforeach

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);


    ;?>        
          
          
<?php
$token=uniqid();

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
     
      
      
      
      
        @if (Session::has('bKash'))
                      
                                  
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: bKash. <br>
                                      Please send money to: <?php echo $h12 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('bKash') }}. <br>
                                      Thanks. </span>
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: DBBL. <br>
                                      Please Deposit to: <?php echo $h13 ;?> <br>
                                      
                                      
                                      {{ session('Rocket') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: Nagad. <br>
                                      Please send money to:<?php echo $h14 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('Nagad') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
      
        <?php
                      $au_user=Auth::user()->id;
                      $value_user=Auth::user()->generation_value;
                      
                      $total_dr=DB::table("users")->where('up_line_id', $au_user)->count();
                      $total_allr=DB::table("users")->where('upline_arry', 'like', '%'.$au_user.'%')->count();



?>    
      
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard </h3></a>





 <style>
    
    .tree{
        width:300px;
        background:silver;
        padding:10px;
        color:black;
        border-radius:5px;
        float:left;
        margin-top:5px;
        margin-left:5px;
        
        
    }
</style>













<!--<div class="text-center" style="margin-bottom:10px">
    <h3 style="text-align:center"><b><u>My Team</u></b></h3>
    <?php
    $ab=3;
    ;?>
    
    @if($ab==2)
    <form action="{{url('/')}}/my_generation?tree=1" method="get">
        @csrf
        <input type="hidden" name="tree" value="1">
        
        
        <select name="upiid"; style="height:30px; width:400px">
            
            
            
           <?php 
        
            
          $upline2=Auth::user()->id;
          
         
             $upline3=DB::table("users")->where('up_line_id_ab', $upline2)->where('site_ab', 1)->first();
       @$upline=$upline3->id;
          
         
         echo '<option value="'.@$upline3->id.'">'.@$upline3->name.'</option>';
       

            do{
                      
                    $ewrewrwerwerr=DB::table("users")->where('up_line_id_ab', $upline)->first();
                    if(@$ewrewrwerwerr->id > 0)
                    {
                             echo '<option value="'.@$ewrewrwerwerr->id.'">'.@$ewrewrwerwerr->name.'</option>';
                    }
                

                    @$upline=$ewrewrwerwerr->id;
    
            }while
            
            ( $upline != NULL );
         
         
         
           
/*
            $upline=1008;    

            do{
                      
                    $ewrewrwerwerr=DB::table("users")->where('up_line_id_ab', $upline)->first();
                    if(@$ewrewrwerwerr->id > 0)
                    {
                             echo '<option value="'.@$ewrewrwerwerr->id.'">'.@$ewrewrwerwerr->name.'</option>';
                    }
                

                    @$upline=$ewrewrwerwerr->id;
    
            }while
            
            ( $upline != NULL );
        */
        
                       

            ?>
            
            
            
                       

                
           
            
        </select>
        
        
   <input type="submit" value="A Site Search">
   </form>
    
    
    
    
    
    
    
    <br>
    
    
    
    
    <form action="{{url('/')}}/my_generation?tree=1" method="get">
        @csrf
        <input type="hidden" name="tree" value="1">
        
        
        <select name="upiid"; style="height:30px; width:400px">
            
            
            
           <?php 
        
            
          $upline=Auth::user()->id;
          $i=1;
         while($i <10  ){
    $upline33=DB::table("users")->where('up_line_id_ab', $upline)->get();
    
    foreach ($upline33 as $upline3){
        
            $upline33=DB::table("users")->where('up_line_id_ab', $upline)->get();
          
    @$upline=$upline3->id;
          
         echo '<option value="'.@$upline3->id.'">'.@$upline3->name.'</option>';
                         }
        $i++;
         }

          /*  do{
                      
                    $ewrewrwerwerr=DB::table("users")->where('up_line_id_ab', $upline)->first();
                  
                  
                    if(@$ewrewrwerwerr->id > 0)
                    {
                             echo '<option value="'.@$ewrewrwerwerr->id.'">'.@$ewrewrwerwerr->name.'</option>';
                    }
                

                    @$upline=$ewrewrwerwerr->id;
    
    
    
            }while
            
            ( $upline != NULL );*/
         
         
         
           
/*
            $upline=1008;    

            do{
                      
                    $ewrewrwerwerr=DB::table("users")->where('up_line_id_ab', $upline)->first();
                    if(@$ewrewrwerwerr->id > 0)
                    {
                             echo '<option value="'.@$ewrewrwerwerr->id.'">'.@$ewrewrwerwerr->name.'</option>';
                    }
                

                    @$upline=$ewrewrwerwerr->id;
    
            }while
            
            ( $upline != NULL );
        */
        
                       

            ?>
            
            
            
                       

                
           
            
        </select>
        
        
   <input type="submit" value="B Site Search">
   </form>
    
    
  @endif  
    
    
    
    
    
    
    
    

    </div>-->

<!--<div style="font-size:200%">

    <a href="/my_generation?tree=1"><i class="fa fa-list-alt" aria-hidden="true"></i></a> &nbsp;	  &nbsp;	
<span onclick="goBack()"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></span> &nbsp;	 &nbsp;	
<span onclick="goForward()"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>

<script>
function goBack() {
  window.history.back();
}


function goForward() {
  window.history.forward();
}
</script>
</div>
-->

















@if(isset($_GET['tree']))

    @if(isset($_GET['upiid']))
    
    
   









<?php

 $pppppps =$_GET['upiid'];
 
 
                     $up_nadme=DB::table("users")->where('id', $pppppps)-> first();


;?>

<div class="text-center" style="margin-bottom:100px">
    

    <div class="tree" style="background:green; color:white"><b>({{@$up_nadme->name}})</b><br>
    User: {{@$up_nadme->login_user_name}}<br>
    
    (A Site Carry=
    @if(@$up_nadme->laft_c < 1 )
    0
    @else
    {{@$up_nadme->laft_c}}
    @endif
     | (B Site Carry=
      @if(@$up_nadme->right_c < 1 )
    0
    @else
    {{@$up_nadme->right_c}}
    @endif
     
     )
     
     
     <br>
     
     
      (A Site Carry=
    @if(@$up_nadme->laft_c2 < 1 )
    0
    @else
    {{@$up_nadme->laft_c2}}
    @endif
     | (B Site Carry=
      @if(@$up_nadme->right_c2 < 1 )
    0
    @else
    {{@$up_nadme->right_c2}}
    @endif
     
     )
    </div>
    
    

    <div class="tree" style="background:#62D2F5; color:black"><b>
        
        <?php
        if(@$up_nadme->a_site > 0)
        {
                                         @$aup_nadme=DB::table("users")->where('id', @$up_nadme->	a_site)-> first();
                                        
                                        
                                         echo '<a href="/my_generation?security_token_number='.$token.'&tree=1&upiid='.@$up_nadme->a_site.'">';
                                         echo '<span style="color:white">A Site: </span>';
                                         echo @$aup_nadme->name;
                                         echo '<br>';
                                         
                                               echo @$aup_nadme->login_user_name;
                                         echo '<br>';                                   

                                         
                                         echo 'A site Carry: '.@$aup_nadme->laft_c.'';
                                         echo '|';
                                         echo 'B site Carry: '.@$aup_nadme->right_c.'';
                                         echo '</a>';
                                         
                                         
                                         
                                         
                                                                                  echo '<br>';
                                         echo 'A site Carry: '.@$aup_nadme->laft_c2.'';
                                         echo '|';
                                         echo 'B site Carry: '.@$aup_nadme->right_c2.'';
                                         echo '</a>';

        }
        else
        {
echo '<a href="/join2bdt/'.@$up_nadme->id.'1"><span style="font-size:18px">+ Position Code:<br> 8820'.@$up_nadme->id.'1</span></a>';
        }

        
        ;?>
        
        
        
        
    </div>

    <div class="tree" style="background:pink; color:black">
        <?php
        if(@$up_nadme->b_site > 0)
        {
                                         @$aup_nadme=DB::table("users")->where('id', @$up_nadme->	b_site)-> first();
                                         
                                          echo '<a href="/my_generation?security_token_number='.$token.'&tree=1&upiid='.@$up_nadme->b_site.'">';
                                         echo '<span style="color:white">B Site: </span>';
                                         echo @$aup_nadme->name;
                                         echo '<br>';
                                         
                                               echo @$aup_nadme->login_user_name;
                                         echo '<br>';                                   
                                         
                                         
                                         echo 'A site Carry: '.@$aup_nadme->laft_c.'';
                                         echo '|';
                                         echo 'B site Carry: '.@$aup_nadme->right_c.'';
                                           echo '</a>';
                                           
                                           
                                                  echo '<br>';
                                         echo 'A site Carry: '.@$aup_nadme->laft_c2.'';
                                         echo '|';
                                         echo 'B site Carry: '.@$aup_nadme->right_c2.'';
                                           echo '</a>';                                  
                                           

        }
        else
        {
echo '<a href="/join2bdt/'.@$up_nadme->id.'2"><span style="font-size:18px">+ Position Code:<br> 8820'.@$up_nadme->id.'2</span></a>';
        }

        
        ;?>
    
    
</div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    @else
<style>
    
    .tree{
        width:300px;
        background:silver;
        padding:10px;
        color:black;
        border-radius:5px;
        float:left;
        margin-top:5px;
        margin-left:5px;
        
        
    }
</style>
<?php

 $pppppps = Auth::user()->id;
 
 
                     $up_nadme=DB::table("users")->where('id', $pppppps)-> first();


;?>

<div class="text-center" style="margin-bottom:100px">
    

    
    <div class="tree" style="background:green; color:white"><b>You ({{$up_nadme->name}})<br>
    
    <span style="color:pink">
    {{$up_nadme->login_user_name}}
    
    
    
    </span>
    </b><br>
    (A Site Carry=
    @if($up_nadme->laft_c < 1 )
    0
    @else
    {{$up_nadme->laft_c}}
    @endif
     | (B Site Carry=
      @if($up_nadme->right_c < 1 )
    0
    @else
    {{$up_nadme->right_c}}
    @endif
     
     )<br>
        (A Site Carry=
    @if($up_nadme->laft_c2 < 1 )
    0
    @else
    {{$up_nadme->laft_c2}}
    @endif
     | (B Site Carry=
      @if($up_nadme->right_c2 < 1 )
    0
    @else
    {{$up_nadme->right_c2}}
    @endif
     
     )
    </div>
    
    

    <div class="tree" style="background:#62D2F5; color:black"><b>
        
        <?php
        if($up_nadme->a_site > 0)
        {
                                         $aup_nadme=DB::table("users")->where('id', $up_nadme->	a_site)-> first();
                                        
                                        
                                         echo '<a href="/my_generation?security_token_number='.$token.'&tree=1&upiid='.$up_nadme->a_site.'">';
                                         echo '<span style="color:white">A Site: </span>';
                                         echo @$aup_nadme->name;
                                         
                                         
                                         echo '<br>';
                                         echo @$aup_nadme->login_user_name;
                                         
                                         
                                         
                                         echo '<br>';
                                         echo 'A site Carry: '.@$aup_nadme->laft_c.'';
                                         echo '|';
                                         echo 'B site Carry: '.@$aup_nadme->right_c.'';
                                         echo '</a>';
                                         
                                                                                  echo '<br>';
                                         echo 'A site Carry2: '.@$aup_nadme->laft_c2.'';
                                         echo '|';
                                         echo 'B site Carry2: '.@$aup_nadme->right_c2.'';
                                         echo '</a>';

        }
        else
        {
echo '<a href="/join2bdt/'.$up_nadme->id.'1"><span style="font-size:18px">+ Position Code:<br> 8820'.$up_nadme->id.'1</span></a>';
        }

        
        ;?>
        
        
        
        
    </div>

    <div class="tree" style="background:pink; color:black">
        <?php
        if($up_nadme->b_site > 0)
        {
                                         $aup_nadme=DB::table("users")->where('id', $up_nadme->	b_site)-> first();
                                         
                                          echo '<a href="/my_generation?security_token_number='.$token.'&tree=1&upiid='.$up_nadme->b_site.'">';
                                         echo '<span style="color:white">B Site: </span>';
                                         echo $aup_nadme->name;
                                         echo '<br>';
                                          echo $aup_nadme->login_user_name;
                                         
                                          echo '<br>';
                                         
                                         echo 'A site Carry: '.$aup_nadme->laft_c.'';
                                         echo '|';
                                         echo 'B site Carry: '.$aup_nadme->right_c.'';
                                           echo '</a>';
                                           
                                           
                                           
                                                                                 echo '<br>';
                                         echo 'A site Carry2: '.$aup_nadme->laft_c2.'';
                                         echo '|';
                                         echo 'B site Carry2: '.$aup_nadme->right_c2.'';
                                           echo '</a>';   

        }
        else
        {
echo '<a href="/join2bdt/'.$up_nadme->id.'2"><span style="font-size:18px">+ Position Code:<br> 8820'.$up_nadme->id.'2</span></a>';
        }

        
        ;?>
    
    
</div>




    @endif






























@else




                  
       









    <?php $i = 1;
                  $id=$id;
                  $au_user=$id;
                  $viegen2=DB::table('users')->where('upline_arry', 'like', '%'.$id.'%')->get();
                  $total_allr=DB::table('users')->where('upline_arry', 'like', '%'.$id.'%')->count();
                  
                  $total_allreee=DB::table('users')->where('id',$id)->first();
                  
                  
                  
                  ?>
                  
                  
                  
                  
      <h2 style="color:black; padding:0px 0px 0px 0px; text-align:center"> My Sales Team: </h2>
      
      
                 
        
      
      <br>
      <br>
      
  <div class="widget-box" style="height:600px;text-align:center">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            
       
            <?php
          $total_dr=DB::table('users')->where('up_line_id_ab',$au_user)->count();

            ?>
              <h3 style="color:red; text-align:center"><b> {{$total_allreee->name}}</b> এর টীম </h3>
            </div>
            
            
<div style="text-align:left; font-size:200%;">                  
                  
                 <a href="/my_generation"><i class="fa fa-list-alt" aria-hidden="true"></i></a> &nbsp;	  &nbsp;	
<span onclick="goBack()"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></span> &nbsp;	 &nbsp;	
<span onclick="goForward()"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>

<script>
function goBack() {
  window.history.back();
}


function goForward() {
  window.history.forward();
}
</script> 
                  
</div>   
            
            
            <?php $i = 1;
            
            $viegen33=DB::table('users')->where('up_line_id_ab',$au_user)->get();
            $x = 'A';

            
            ?>
                   @foreach ($viegen33 as $gen)
            
            	<div class="col-md-3" style="margin-top:5px; ">
				   	<a href="/my_generatio_details/{{$gen->id}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:red; font-size:120%; color:black; border-radius:8px;text-align:center">
    				         <?php
    				       $down_count= DB::table('users')->where('upline_arry', 'like', '%'.$gen->id.'%')->count();
    				        ?>
    				        <i class="fa fa-users" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
  <span style="color:white; color:white">Team: {{$x++}}<span style="color:black"> [{{$down_count}}]</span></span>
    <br>
    						<span style="color:white; font-size:70%">{{$gen->name}}<br>
    					Auth ID: 8820{{$gen->id}}
    					</span></div>
					</a>
				</div> 
				
				
			
				
				
            @endforeach
            	
				@if($total_dr < 3)
					<div class="col-md-3" style="margin-top:5px; ">
				   	<a href="/join2bdt/{{$au_user}}?id={{$au_user}}"> 
    				   	<div style="width:100%; padding: 30px 10px; background:green; font-size:120%; color:black; border-radius:8px;text-align:center">
    				        
    				        <i class="fa fa fa-plus" aria-hidden="true" style="font-size:50px; color:white; "></i><br>
    
    					<span style="color:white">Add  Member
    					</span></div>
					</a>
				</div> 
				@endif
				
            
            
            
          </div>

            
                  
   
                  
                  
                  
                  
                  
                  
                  
  <div class="widget-box;" style="display:none" >
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h3 style="color:red; text-align:center">  <b> {{$total_allreee->name}} এর টীম  ( {{$total_allr}}  জন) </b></h3> 
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Name & Photo</th>


<!--                    <th>Upline & Rank</th>   
-->                    
                    <th>Earning</th>

                    <th>Details</th>
                    <th>Add</th>
                    
                    

                  </tr>
                </thead>
                             <tbody>
              
                   @foreach ($viegen2 as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                        {{$gen->name}}<br>
                       
                      </td>
                      
                      
             
              <td>
                   Rank=
                   
                   @if($gen->rank==1)
                   Gemeral
                   
                   @endif
                   <br>
                   
                   <?php
                   $upl_id=$gen->up_line_id;
                     $up_name=DB::table("users")->where('id', $upl_id)-> first();

                   ?>

                   
                   
                           </span><br><span style="color:black">A.Code:</span> <span style="color:red">8820{{$gen->id}}</span><br>
                </td>  
                      
               <td class="center">
                           Cash_B:
                           
                           <?php 
                           
                           $erid=$gen->id;
                       
$er_main=DB::table("ac_main")->where('user_id', $erid)-> get()->sum("amount");
$er_shop=DB::table("ac_shop")->where('user_id', $erid)-> get()->sum("amount");



    ;?>        
                           <span style="color:red">{{@$er_main}}</span><br>
                          Shop_B: <span style="color:red">{{ @$er_shop }}</span><br>

                      </td>
                
                     
                      
               <td class="center">
                         <a href="/join2bdt/{{$erid}}?id={{$erid}}"> Add User</a>
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
