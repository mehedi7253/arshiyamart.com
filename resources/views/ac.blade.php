<?php
include('aa_config.php');
if (isset($_GET['pid'])) 
{
$pid=$_GET['pid'];


    $ll_sels1g="SELECT * from cart
    where product_id='$pid' and session_id='$ses_id'"; 
    $ll_sqlgs=mysqli_query($conn, $ll_sels1g);
    $g_num=mysqli_num_rows($ll_sqlgs);
    if ($g_num>0)  
    {
                              echo '<span style="width:auto; height:30px; font-size:20px; padding:5px 5px;  color:white; border-radius:20px; line-height:15px"> &#10004 </span>';
    }
    else
    {
           
        $ll_sels1g1="SELECT * from products
        where id='$pid'";
        $sqls=mysqli_query($conn, $ll_sels1g1);
        while ($v=mysqli_fetch_array($sqls)) 
                    {
                    $pname=$v['product_name'];
                    $pcode=$v['product_code'];
                    $pid=$v['id'];
                    $pcolor=$v['product_color'];
                    $price=$v['price'];
                    }

        
        $insert="INSERT INTO  cart (product_id, product_name, product_code, product_color, 	price, 	quantity, session_id)
        VALUES ('$pid','$pname','$pcode','$pcolor','$price','1','$ses_id')";
        if(mysqli_query($conn, $insert))
        {
                              echo '<span style="width:auto; height:30px; font-size:20px; padding:5px 5px;  color:white; border-radius:20px; line-height:15px"> &#10004 </span>';

        };  
        
     
    } 
    
    



} 


;?>




