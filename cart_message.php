<?php
session_start();
$ses_id=session_id();

include('aa_config.php');



$ll_sels1g="SELECT id,session_id from cart
where session_id='$ses_id'"; 
$result5 = mysqli_query($conn, $ll_sels1g);

$cart_count222=mysqli_num_rows($result5);




if($cart_count222<1)
{
    $cart_count22=0;
}
else
{
    $cart_count22=$cart_count222;
}


?>


<?php 


echo '<span style="color:black; font-size:80%"> Successful!  <a href="/cart" style="color:blue"><b>View Cart ('.$cart_count22.')</b></a></span>';
;?>