<?php
session_start();
$ses_id=session_id();

include('../aa_config.php');
 
$jj=$_GET['dis_id'];





$sels1="SELECT * from child_category where 	sub_id='$jj'";
  $sqls=mysqli_query($conn, $sels1);

 while ($v=mysqli_fetch_array($sqls)) 
                    {
$ps=$v['id'];
$name=$v['name'];
@$thana.='<option value="'.$ps.'">'.$name.'</option>';
}


echo '<option value="">Select Child Category</option>';

echo $thana;
;?>