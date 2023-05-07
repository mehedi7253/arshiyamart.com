<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Quotation</title>
<style type="text/css">
<!--
.style2 {font-size: 18px; font-family: Arial, Helvetica, sans-serif; }
.style8 {font-family: Arial, Helvetica, sans-serif}
.style11 {font-size: 16; font-weight: bold; }
.style12 {font-size: 16; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style14 {font-size: 16px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {font-size: 10px}
.style17 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style18 {font-size: 16px}
.style19 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style23 {font-size: 18px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
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

;?> 
    
    
    <?php

      $id =$id;
      $ssq =$inv;

  

  
  
  
      
$sql = "SELECT * FROM orders where id='$id'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
     $user_id=$row['user_id'];
     $user_created_at=$row['created_at'];
           $payment_method=$row['payment_method'];
           $trxid=$row['pincode'];
           $tstatus=$row['order_status'];
           $dddiscount=$row['discount'];
           $pincode=$row['pincode'];
           $vat=$row['extra3'];
           $quick=$row['extra1'];
           $note=$row['extra7'];
           
           
           $shipping_charges=$row['shipping_charges'];

    }














$sql8 = "SELECT * FROM banners where id=8";
$result8 = mysqli_query($conn, $sql8);

 while($row = mysqli_fetch_assoc($result8)) {
     $image8=$row['image'];
      }


$sql16 = "SELECT * FROM banners where id=16";
$result16 = mysqli_query($conn, $sql16);

 while($row = mysqli_fetch_assoc($result16)) {
     $image16=$row['image'];
      }




$sql22 = "SELECT * FROM banners where id=22";
$result22 = mysqli_query($conn, $sql22);

 while($row = mysqli_fetch_assoc($result22)) {
     $image22=$row['image'];
      }




$sql229 = "SELECT * FROM banners where id=9";
$result229 = mysqli_query($conn, $sql229);

 while($row = mysqli_fetch_assoc($result229)) {
     $h1=$row['image'];
      }



$sql2210 = "SELECT * FROM banners where id=10";
$result2210 = mysqli_query($conn, $sql2210);

 while($row = mysqli_fetch_assoc($result2210)) {
     $e1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }


$sql221532 = "SELECT * FROM banners where id=32";
$result221532 = mysqli_query($conn, $sql221532);

 while($row = mysqli_fetch_assoc($result221532)) {
     $w1=$row['image'];
      }

// sql to delete a record

   $results4u = DB::select('select * from users where id = :id', ['id' => $user_id]);

    ;?>
    
    
    
    
        
          
          
@foreach($results4u as $t4u)
<?php
     $user_name=$t4u->name;
      $user_add=$t4u->address;
      $user_phone=$t4u->phone;
?>    
@endforeach
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div style="width:80%; padding:5px; margin:auto; font-size:20px; height:1200px; margin-top:200px">
        
        Date:13/09/2021 <br> <br>

To
Mr. MasadulAlam <br> <br>


Sub: Price Quotation ofSwimming Pool. <br> <br>

Dear Sir/Madam, <br>
With reference to the above-mentioned subject and recent discussion with you, we are pleased to submit herewith our technical and financial offer of Swimming Poolwork for your kind consideration.  <br> <br>

We do believe you will find our offer most competitive in terms of technical, financial and after sales service aspects. We also support our good clients like Private Pool, so many Resorts Swimming Pool as they want.  <br> <br>

Please do not hesitate to call us if you need more information.
With thanks and best regards. <br> <br>




QR Bangladesh Swimming Pool Store 


    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<table width="1000" border="0" align="center">
  <tr>
    <td><div align="center" class="style8"><strong><u>Quotation</u></strong><br />
      <br />
    </div>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image8;?>" alt="<?php echo $image8;?>" width="375" height="125" /></td>
          </tr>
          <tr>
            <td><span class="style2"><span class="style18">Help Line</span>:</span><span class="style23"> <?php echo $h1?></span></td>
          </tr>
          <tr>
            <td><span class="style8">Office/Address: <span class="style17"><?php echo $a1?></span></span></td>
          </tr>
          <tr>
            <td><span class="style8">E-mail:</span><span class="style17"> <?php echo $e1?></span></td>
          </tr>
          <tr>
            <td><span class="style8">Website:</span><span class="style17"> <?php echo $w1?> </span></td>
          </tr>
          </table></td>
          <td width="65%"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="0">
          <tr>
            <td width="21%"><p align="left" class="style2 style18"><span class="style19">Quotation No: <br />
                  <strong><?php echo $id;?></strong></span></p>              </td>
            <td width="33%"><p class="style19">Date:<br />
              <strong><?php echo $user_created_at;?> </strong></p>              </td>
            </tr>
          <tr>
            <td><p class="style19"><span class="style2 style18">Customer Name:<br />

                  <strong><?php echo $user_name;?> </strong></span></p>              </td>
            <td><span class="style19">Contact No:<br />
              <strong><?php echo $user_phone;?> </strong></span></td>
            </tr>
          <tr>
            <td><p class="style19">Payment Method:<br />
                <strong><?php echo $payment_method;?> <br>
               <span style="color:red"> <?php echo $trxid;?></span>
                </strong><br />
                </p>              </td>
            <td><span class="style19">Delivery Method:
            @if($quick == 1)
            <span style="color:green"> Quick Delivery</span>
            @else
          <span style="color:red">  Genaral Delivery </span>
            @endif
            
            
            </span> <br><br>
            <span class="style19">Note: 
            
            @if(empty($note))
            N/A
            @else
             <span style="color:green">{{$note}}</span>
            @endif</span>
            
            
            </td>
            </tr>
          <tr>
            <td height="88"><p class="style19">Delivered by:</p>
              <p class="style19">&nbsp;</p>
              <p class="style19">&nbsp;</p></td>
            <td><span class="style19">Delivery Address:<br />
            <strong><?php echo $user_add;?> </strong></span></td>
            </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Sl</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Img</span></div></td>
        <td width="34%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Description of Goods </span></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Quantity</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Rate</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Amount </span> (TK) </div></td>
      </tr>
      
      
      
      <?php 
      
    $i=1;   
 $sql1 = sprintf("SELECT * FROM orders_products where order_id='$id'");

$result1 = mysqli_query($conn, $sql1);

 while($row1 = mysqli_fetch_assoc($result1)) {
     $product_price=$row1['product_price'];
     $product_qty=$row1['product_qty'];
     $product_name=nl2br($row1['product_name']);
     $product_code=$row1['product_code'];
     $amount_sub=$product_qty*$product_price;
     
     @$tppp+=$amount_sub;
     
 }
 
 
    ;?>
    
    <?php

   $results4 = DB::select('select * from orders_products where order_id = :id', ['id' => $id]);

    ;?>        
          
          
@foreach($results4 as $t4)
      <?php
                        $style=DB::table('products')->where('id',$t4->product_id)->first();
                        ;?>
    <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td style="text-align:center"><img src="{{ asset('assets/admin/img/products/large/'.@$style->image) }}" alt="img" style="max-height:80px;"></td>
        <td><div align="left" class="style8">
                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $t4->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        @$ppppp=$tpp->product_name;  
        @$unit=$tpp->unit;  
        
     ;?>
@endforeach
                            {{ @$ppppp }} [{{ @$unit }}]<br>
                            
                            
                            Code:{{ @$t4->product_id }}  <br>
                            
                        Style No:{{@$style->product_code}}
                            
                            
                            
                            
                            @if(isset($t4->product_size))
                            
                         <span style="color:red">[Size:    
                         
                         
                            <?php   @$color=DB::table('brands4')->where('id',$t4->product_size)->first();
   ?>
      {{@$color->name}}]
                         
                         </span>
                         
                         
                         
                            @endif
                            
                    @if($t4->created_at > "2021-03-29 09:16:50")    
                        @if(isset($t4->prodect_color))
                         <span style="color:blue">[   Color: 
                         
                         <?php   @$color=DB::table('brands3')->where('id',$t4->prodect_color)->first();
   ?>
      {{@$color->name}}
                         
                         
                         ]</span>
                        @endif           
                    @endif  
                      
                      
                      
                            
                            </div></td>
        <td><div align="left" class="style8">
          <div align="center">{{ $t4->product_qty }}</div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="center">{{ $t4->product_price }}</div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="right">{{ $t4->product_price * $t4->product_qty }}</div>
        </div></td>
      </tr>
   
   @endforeach          
          
       <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Total=<br/>
        VAT [+]=
        <br>
        
      
      
      @if($dddiscount >0)
        Honour Discount [-]=<br/>
      @endif  
        
      <span style="font-size:80%">    Delivery Charge [+] = </span><br />
          Grand Total= </div></td>
        <td><div align="right"><span class="style17">
            <?php echo @$tppp;?> Tk<br> 
            
            
            <?php
            if($vat > 0){
                $vat=$vat;
            }else{
                $vat=0;
            }
            
            echo @$vat;?> Tk<br> 
            
             @if($dddiscount >0)
            
            ( - ) <?php echo @$dddiscount;?> Tk<br> 
            @endif
            
          <?php echo $shipping_charges;?> Tk<br> 
          <?php echo @$tppp+$shipping_charges-$dddiscount;?> Tk</span></div></td>
      </tr>
      
      
      
      
      
      
      
      
      
      
      <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Paid=
      
      
    
        
         
        <td><div align="right"><span class="style17">
            
                                 <?php
                          $sum1=DB::table('pgw')->where('invoice_no',$id)->sum('amount');
                          
                          
                          
                          if(empty($pincode)){
                              $sum2=0;
                          }
                          else
                          {
                                                    $sum2=DB::table('pgw')->where('transaction_id',$pincode)->sum('amount');

                          }
                          
                          
                          
                          
                       $paid_amount=$sum1+$sum2;
                      ?>
                      
                      
          {{$paid_amount}}Tk</span></div></td>
      </tr>
      
      
      
      <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Balance =
      
      
    
        
         
        <td><div align="right"><span class="style17">
            
                                
                      
                      
          {{(@$tppp+$shipping_charges-$dddiscount)-$paid_amount}} Tk</span></div></td>
      </tr>
      
      
      
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><div align="center" class="style14">
          <p>&nbsp;</p>
          
          
          <?php
          
     
          $due= (@$tppp+$shipping_charges-$dddiscount)-$paid_amount;
          
          
          ?>
          
    @if($due <=0)      
          <p><span class="style15"><img src="/paid_logo.png" style="width:30%"></span><br />
             </p>

       @else
        <p><span class="style15"><img src="/unpaidlogo.png" style="width:30%"></span><br />
             </p>
       @endif
       
             
        </div></td>
        <td><div align="center"><span class="style8"></span></div></td>
        <td><div align="center" class="style14"><br />
            <span class="style15">----------------------------------------------------</span><br />
            
            
            <?php
            $lksdsjf=DB::table('banners')->where('id',16)->first();
            ;?>
          On Behalf of  {{ $lksdsjf->image }} </div></td>
      </tr>
    </table></td>
  </tr>
</table>























    
    
    
    <div style="width:80%; padding:5px; margin:auto; font-size:20px; height:1200px; margin-top:200px">
        

This price is Including VAT<br>
This price is without any civil Work. Customer will bear the cost of civil work.<br><br><br>

Terms of payment:	TK 30% Advance with work order<br>
			TK 65% Before delivery goods at site<br>
			TK 05% seven days after successfully handover<br>



After Sales Service: Our technical person and necessary spares are available for after sales service. Also maintain Swimming Pool Water chemistry by our expert if needed.<br><br><br>


Warranty: 12 months from the date of installation the machine is under the warranty for any design manufacturing defects. However, any Electronic or Electrical (Short circuit or burn case), Rubber items, disposable items do not come under the preview of the warranty. One year warranty of all machineries except light and transformer.<br><br><br>


Bank Details:<br>
 (1) Standard Bank Limited: -<br>
QR BANGLADESH SWIMMING POOL STORE <br>
 A/C No. 03833000705, Progoti Sarani Branch.<br><br><br><br><br><br>






Sincerely yours<br>
Kaium Ahmed<br>
Consultant<br>
Swimming pool, jacuzzi, fountain, Steam & Sauna.<br><br><br>



    </div>
    
    


















</body>
</html>
