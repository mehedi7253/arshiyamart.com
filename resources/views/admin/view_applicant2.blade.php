@extends('layouts.adminLayouts.admin_master2')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>Applicant</h1>
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
           
              
              
              
              
              
              
              
              
              
              
              
              

<?php
$results999 = DB::select('select * from banners where id = :id', ['id' => 999]);





    ;?>        
          
          
@foreach($results999 as $t999)
     <?php 
        $uuu=$t999->image;     
        $ddd=$t999->link;     
        $ppp=$t999->title;     
  
   
   ?>
@endforeach 
   
   
   
 <?php  
$servername = "localhost";
$username = $uuu;
$password = $ppp;
$dbname = $ddd;


$conn = mysqli_connect($servername, $username, $password, $dbname);



$aid=$_GET['aid'];

    
    


@$log="SELECT * FROM job_profile where  sl='$aid'";
@$log20=mysqli_query($conn,$log);

while ($v=mysqli_fetch_array($log20)) 
{

@$n_1=$v['n_1'];
@$n_2=$v['n_2'];
@$n_3=$v['n_3'];
@$n_4=$v['n_4'];
@$n_5=$v['n_5'];
@$n_6=$v['n_6'];
@$n_7=$v['n_7'];
@$n_8=$v['n_8'];
@$n_9=$v['n_9'];
@$n_10=$v['n_10'];
@$n_11=$v['n_11'];
@$n_12=$v['n_12'];
@$n_13=$v['n_13'];
@$n_14=$v['n_14'];
@$n_15=$v['n_15'];
@$n_16=$v['n_16'];
@$n_17=$v['n_17'];
@$n_18=$v['n_18'];
@$n_19=$v['n_19'];
@$n_20=$v['n_20'];
@$n_21=$v['n_21'];
@$n_22=$v['n_22'];
@$n_23=$v['n_23'];
@$n_24=$v['n_24'];
@$n_25=$v['n_25'];
@$n_26=$v['n_26'];
@$n_27=$v['n_27'];
@$n_28=$v['n_28'];
@$n_29=$v['n_29'];
@$n_30=$v['n_30'];
@$n_31=$v['n_31'];
@$n_32=$v['n_32'];
@$n_33=$v['n_33'];
@$n_34=$v['n_34'];
@$n_35=$v['n_35'];
@$n_36=$v['n_36'];
@$n_37=$v['n_37'];
@$n_38=$v['n_38'];
@$n_39=$v['n_39'];
@$n_40=$v['n_40'];
@$n_41=$v['n_41'];
@$n_42=$v['n_42'];
@$n_43=$v['n_43'];
@$n_44=$v['n_44'];
@$n_45=$v['n_45'];
@$n_46=$v['n_46'];
@$n_47=$v['n_47'];
@$n_48=$v['n_48'];
@$n_49=$v['n_49'];
@$n_50=$v['n_50'];
@$n_51=$v['n_51'];
@$n_52=$v['n_52'];
@$n_53=$v['n_53'];
@$n_54=$v['n_54'];
@$n_55=$v['n_55'];
@$img=$v['img'];


}


?>


              
              
              
              
              
              
              
              
              
              
              
              
          

										<div class="personal_info">
											<h5 style="text-align:center">Applicant Information<br>
											                            <img style="max-height:200px; border-radius:100px" src="{{ asset('job/image/'.$img)}}" alt="">

											
											
											<br>
											
											<?php echo $n_1 ;?>
											</h5>
										
										
										
										
										
										
									<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>	
										
										
										
										
								
	<table id="customers">
  <tr>
    <td>Applicant’s Name</td>
    <td><?php echo $n_1 ;?></td>
  </tr>


  <tr>
    <td>Father’s Name</td>
    <td><?php echo $n_2 ;?></td>
  </tr>



  <tr>
    <td>Mother’s Name</td>
    <td><?php echo $n_3 ;?></td>
  </tr>



  <tr>
    <td>Date of Birth</td>
    <td><?php echo $n_4 ;?></td>
  </tr>

  <tr>
    <td>Gender</td>
    <td><?php echo $n_5 ;?></td>
  </tr>






  <tr>
    <td>Nationality</td>
    <td><?php echo $n_6 ;?></td>
  </tr>



  <tr>
    <td>Religion</td>
    <td><?php echo $n_7 ;?></td>
  </tr>



  <tr>
    <td>Important Document (<?php echo $n_8 ;?>)</td>
   <td><?php echo $n_9 ;?></td>
  </tr>


 

  <tr>
    <td>Marital Status</td>
    <td><?php echo $n_10 ;?></td>
  </tr>



  <tr>
    <td>Freedom Fight Quota</td>
    <td><?php echo $n_11 ;?></td>
  </tr>





  <tr>
    <td>Home District</td>
    <td><?php echo $n_12 ;?></td>
  </tr>


  <tr>
    <td>Present Address</td>
    <td>
         <?php echo $n_13 ;?>, 
     
         <?php echo $n_16 ;?> (<?php echo $n_17 ;?>),
         
           <?php echo $n_15 ;?>,
         
         Dist: <?php echo $n_14 ;?>.
         
        
        </td>
  </tr>






  <tr>
    <td>Permanent Address</td>
    <td>
         <?php echo $n_18 ;?>, 
     
         <?php echo $n_21 ;?> (<?php echo $n_22 ;?>),
         
           <?php echo $n_20 ;?>,
         
         Dist: <?php echo $n_19 ;?>.
         
        
        </td>
  </tr>







  <tr>
    <td>Mobile Number</td>
    <td><?php echo $n_23 ;?></td>
  </tr>





  <tr>
    <td>Email</td>
    <td><?php echo $n_24 ;?></td>
  </tr>





  <tr>
    <td>SSC or Equivalent Level</td>
    <td>
        
        
        Examination: <?php echo $n_25 ;?><br>
        Board: <?php echo $n_26 ;?><br>
        Roll: <?php echo $n_27 ;?><br>
        Result: <?php echo $n_28 ;?><br>
        Group: <?php echo $n_29 ;?><br>
        Passing Year: <?php echo $n_30 ;?><br>
        
        </td>
  </tr>







  <tr>
    <td>HSC or Equivalent Level</td>
    <td>
        
        
        Examination: <?php echo $n_31 ;?><br>
        Board: <?php echo $n_32 ;?><br>
        Roll: <?php echo $n_33 ;?><br>
        Result: <?php echo $n_34 ;?><br>
        Group: <?php echo $n_35 ;?><br>
        Passing Year: <?php echo $n_36 ;?><br>
        
        </td>
  </tr>







  <tr>
    <td>Graduation Label (If Any)</td>
    <td>
        Examination: <?php echo $n_37 ;?><br>
        University/Institute: <?php echo $n_41 ;?><br>
        Result: <?php echo $n_38 ;?><br>
        Subject: <?php echo $n_39 ;?><br>
        Course Duration: <?php echo $n_42 ;?><br>
        
        Passing Year: <?php echo $n_40 ;?><br>
        
        </td>
  </tr>








  <tr>
    <td>Masters Label (If Any)</td>
    <td>
        Examination: <?php echo $n_43;?><br>
        
        University/Institute: <?php echo $n_47 ;?><br>
        Result: <?php echo $n_44 ;?><br>
        Subject: <?php echo $n_45 ;?><br>
        Course Duration: <?php echo $n_48 ;?><br>
        
        Passing Year: <?php echo $n_46 ;?><br>
        
        </td>
  </tr>






  <tr>
    <td>Computer Skill (if any)</td>
    <td><?php echo $n_54 ;?></td>
  </tr>




  <tr>
    <td>Other Skill (if any)</td>
    <td><?php echo $n_55 ;?></td>
  </tr>






</table>
							
								
		
								






		<!--	<div class="personal_info">
				<h5>Professional Experience (If Any)</h5>
			

			<label>Total Experience</label>
			<select name="n_49">
                    <option selected="selected" value="0">Select One</option>
			          <option value="B. Ed">B. Ed</option>
			          <option value="M. Ed">M. Ed</option>
			          <option value="MPhil">MPhil</option><option value="Ph. D">Ph. D</option>
			          <option value="BP. Ed">BP. Ed</option>
             </select><br>



			<label>Present Job Discription</label>
			<textarea name="n_50" class="col-sm-12"><?php echo $n_50 ;?></textarea>

			<label>Designation/Post Name</label>
			<input type="text" name="n_51" value="<?php echo $n_51 ;?>">

			<label>Organization Name</label>
			<input type="text" name="n_52" value="<?php echo $n_52 ;?>">

			<label>Responsibilities</label>
			<textarea name="n_53" class="col-sm-12"><?php echo $n_53 ;?></textarea>
<br>
</div>-->

	




										





						
              
              
              
              
              
              
              
              
              





          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
