<?php
session_start();


  if(count($_POST) > 0 ) 
  {
      // Response from shurjoPay
      $response_encrypted = $_POST['spdata'];
      // shurjoPay response data decryption url
      $shurjopay_decryption_url = 'https://shurjopay.com/merchant/decrypt.php';
      // Request for post data decryption
      //$response_decrypted = file_get_contents($shurjopay_decryption_url."?data=".$response_encrypted);
      
      $payment_url = $shurjopay_decryption_url.'?data='.$response_encrypted;
      $ch = curl_init();   
      curl_setopt($ch,CURLOPT_URL,$payment_url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);    
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      $response_decrypted = curl_exec($ch);
      curl_close ($ch);
      
      // Parse decrypted data
      $response_data = simplexml_load_string($response_decrypted) or die("");



      /****************** Response Data *************

        # Merchant Transaction ID: $response_data->txID;
        # Bank Transaction ID: $response_data->bankTxID;
        # Bank Status: $response_data->bankTxStatus;
        # ShurjoPay response code: $response_data->spCode;
        # ShurjoPay response resone: $response_data->spCodeDes;
        # Customer choosed payment method: $response_data->paymentOption;
        # Payment amount: $response_data->txnAmount

      ***********************************************/
    
$resone= $response_data->spCodeDes;
$payment_method= $response_data->paymentOption;
$amount= $response_data->txnAmount;
$response_code= $response_data->spCode;
$status= $response_data->bankTxStatus;
$transaction_id= $response_data->bankTxID;
$m_transaction_id=$response_data->txID;
$date=date('d-M-Y');




if($status=='SUCCESS'){


       
       
include('../aa_config.php');

  $ll_sels1g="SELECT * from pgw
    where m_transaction_id='$m_transaction_id' and transaction_id='$transaction_id'"; 
    $ll_sqlgs=mysqli_query($conn, $ll_sels1g);
    $g_num=mysqli_num_rows($ll_sqlgs);
    if ($g_num>0)  
    {
        echo 'Have an error, Please contact to help line.';
        
      

        
    }
    else{

  $insert="INSERT INTO pgw (resone, payment_method, amount, response_code, status, transaction_id, m_transaction_id, date)
        VALUES ('$resone', '$payment_method', '$amount', '$response_code', '$status', '$transaction_id', '$m_transaction_id', '$date')";
      if(mysqli_query($conn, $insert))
        {
                              echo '<span style="width:auto; height:30px; font-size:20px; padding:5px 5px;  color:white; border-radius:20px; line-height:15px">Please Wait. Dont close this tab. </span>';

       
       
     

       
      
echo "<script language='JavaScript' type='text/JavaScript'>
window.location='/place-order2/$transaction_id';
</script>";

       
       
       
        };  
        
        
}
}
else
{
    
    
    echo "<script language='JavaScript' type='text/JavaScript'>
window.location='/cart';
</script>";
    
}

}


else{
echo "<script language='JavaScript' type='text/JavaScript'>
window.location='/cart';
</script>";

}

    






?>

<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">      
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
  <!--      
      
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="img">
              <img src="shurjopay-logo.png" alt="" class="center">
              <hr>
            </div>
              
              <table id="regForm" class="table table-hover">
                <?php 

                  if(is_object($response_data)):
                  foreach($response_data as $key => $val):

                ?>
                  <tr>
                    <td class="table-info"><?php echo $key?></td>
                    <td><?php echo $val?></td>
                  </tr>
                <?php

                  endforeach;
                  endif;
                  
                ?>
                <tr><td colspan="2"><a href="/index.php"><b>Back</b></td></tr>
              </table>
            
          </div>
        </div>
      </div>      
    </body>-->
</html>