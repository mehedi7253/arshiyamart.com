<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
      
     public function updateb(Request $request){
      if($request->isMethod('post')){
        $data = $request->all();
       
              
		        @$shop_id=$data['id'];
		      

         if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/shops/'.$filename;

            Image::make($image)->resize(150,150)->save($large_image_path);

          }
        }else {
          $filename = $data['p_image'];
        }


        DB::table('shops')->where('id', $shop_id)->update([
          'shop_name' => $data['shop_name'],
          'address' => $data['address'],
          'helpline' => $data['helpline'],
          'commissio' => $data['commissio'],
          'logo' => $filename
        ]);
        return back()->with('message_success','Update Store successfully');
      }}
      
     
     
     
     
     
     
     
     
     
     
     

    public function view_payment(Request $request){

      $viewpayment = DB::table('ac_join')->get();
      return view('admin.joining_payment.joining_payment',compact('viewpayment'));
    }
    
    
    
      public function view_applicant(){
      return view('admin.view_applicant');
    }
    
         public function view_applicant2(){
      return view('admin.view_applicant2');
    }
     
    
    
      public function view_payment_r(Request $request){

      $viewpayment = DB::table('ac_join_r')->get();
      return view('admin.joining_payment.joining_payment_r',compact('viewpayment'));
    }
      
    
    
    
        public function view_payment_g(Request $request){

      $viewpayment = DB::table('ac_gift')->get();
      return view('admin.joining_payment.gift_payment',compact('viewpayment'));
    }
    
    
    

    
    
    
    
    

            public function adduser_by_inv(Request $request){
                
                $qid=Session::get('qid');
if($qid > 0){
    $sttus=1;
    $extra10=1;
}else{
        $sttus="";
         $extra10="";

}


if(!empty($request->discount)){
    $discount=$request->discount;
}else{
     $discount=0;
}



if(!empty($request->shipping_charges)){
    $shipping_charges=$request->shipping_charges;
}else{
     $shipping_charges=0;
}


if(!empty($request->shipping_charges)){
    $shipping_charges=$request->shipping_charges;
}else{
     $shipping_charges=0;
}


if(!empty($request->total)){
    $total2=$request->total;
}else{
     $total2=0;
}





$total=$total2+$shipping_charges-($discount);
                
                $user_id = Auth::user()->id;
                
                DB::table('orders')->insert([
                'user_id'=>$request->id,
                'user_mail'=>$request->user_mail,
                'name'=>$request->name,
                'address'=>$request->address,
                'mobile'=>$request->mobile,
                'shipping_charges'=>$request->shipping_charges,
                'order_status'=>'In Process',
                'payment_method'=>'Official Bill',
                'total'=>$total,
                'pay_amount'=>$request->pay,
                'extra11'=>$sttus,
                'discount'=>$request->discount,
                'created_at'=>now(),
                'extra10'=>$extra10,
                
                ]);


              $new_id=DB::table('orders')->max('id');
                DB::table('orders_products')->where('user_id',$user_id)->where('status',1)->update([
                    'order_id'=>$new_id,
                    'status'=>2,
                    
                    ]);

if($request->pay > 0){
    $date=date('d-M-Y');
     DB::table('pgw')->insert([
                          'invoice_no'         => $new_id,
                          'amount'          => $request->pay,
                          'payment_method'  => "Direct_Pay",
                          'm_transaction_id'   =>"",
                          'transaction_id'   => "",
                          'resone'   => "",
                          'response_code'   => "",
                          'status'   => "",
                          'response_code'   => "",
                          'date'          => $date,
                     
                            ]);
}




if($sttus > 0){
         return redirect('admin/view-quotation');

}else{
      return redirect('admin/view-orders');

}


    }
    
    
    
    
    
    
    
    
    
    
    
    public function view_payment2(Request $request){

      $viewpayment = DB::table('ac_main_with')->get();
      return view('admin.joining_payment.joining_payment2',compact('viewpayment'));
    }
    
    
    
    
    
        public function pin_payment(Request $request){

 if ($request->isMethod('POST')) {
        $data = $request->all();
        
        
        DB::table('pin')->insert([
                      'full_pin'         => sdfsdf,
                    
                      'status'          => 1,
                 
                        ]); 
        
        
        
        $viewpayment = DB::table('pin')->get();
      return view('admin.joining_payment.pin_payment',compact('viewpayment'));
      
      
               //return redirect()->back()->with('message_success','Pin Create Successfully!');
              

 }









      $viewpayment = DB::table('pin')->get();
      return view('admin.joining_payment.pin_payment',compact('viewpayment'));
    }
    
    
    
    
    
    
    
    
    public function view_genaration(Request $request){

      $viegen = DB::table('users')->where('rank','1')->get();
      return view('admin.joining_payment.generation',compact('viegen'));
    }




    public function view_genaration_u(Request $request, $id){
        
        
          if ($request->isMethod('POST')) {
            $data = $request->all();
            
            $sid=$data['id'];
            $user = User::find($sid);
            $user->j_name = $data['j_name'];
            $user->name = $data['j_name'];
            
            
            $user->nid = $data['nid'];
            $user->j_mobile = $data['j_mobile'];
            $user->phone = $data['j_mobile'];
            $user->email = $data['email'];
            
            $user->father_name = $data['father_name'];
           // $user->country = $data['country'];
            $user->home_district = $data['home_district'];
            $user->p_address = $data['p_address'];
            $user->date_of_birth = $data['date_of_birth'];
            $user->education = $data['education'];
            $user->nomini = $data['nomini'];
            $user->nomimi_address = $data['nomimi_address'];
            $user->save();

        
                if(!empty($data['password']))
        {
            $user = User::find($sid);
            $user->password = bcrypt($data['password']);
            $user->save();
            

        }
        
        
          /*$userd = DB::select('select * from user where up_line_id = :up_line_id', ['up_line_id' => $sid]);
            $userd->up_line_name = $data['j_name'];
            $userd->save();
        
    */
        
        
        
        
                                return redirect()->back()->with('message_s','successfully updated!');
          }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

      $user_detailss = DB::table('users')->where('id',$id)->first();
      return view('admin.joining_payment.view_genaration_u',compact('user_detailss'));
    }










     
      public function delete_pay($id){
      DB::table('ac_join')->where('id',$id)->delete();
      //echo "<pre>"; print_r($data); die;
      return back()->with('message_success','Deleted Successfully');
    }

     
     
     
     
     
      public function app_pay($id){
        DB::table('ac_join')->where('id',$id)->update([
          'status'=>2
        ]);

      return back()->with('message_success','Approved Successfully');
    }
   
      
      
      
      
      
      
      
   public function app_pay_p($id){
            

DB::table('users')->where('id',$id)->update([
          'permission'=>1
        ]);


       $coupons=DB::table('users')->whereNull('rank')->where('id','>',10)->get();

      return view('admin.coupons.view_coupon',compact('coupons'));
    }   
      
      
      
      
        public function app_pay_g($id){
            
        
                    
                    $status_p=DB::table('ac_gift')->where('id',$id)->first();
                    $status=$status_p->status;
                    $up_line_id=$status_p->upline_id;
                    $user_id=$status_p->user_id;
                    $amount_j=$status_p->amount;
                    
                    
                    
                    
                    
                    
                    
                    
                    
        DB::table('ac_gift')->where('id',$id)->update([
          'status'=>2
        ]);
        
        
          DB::table('users')->where('id',$user_id)->update([
          'my_gift_card'=>1
        ]);      
        
        
        
        
                 $gg_v= DB::table('users')->where(['id'=>$up_line_id])->first();
                 $gg_value=$gg_v->my_gift_card;
                
        
        
        
        
        
        if($status < 2)
        {
        
        
                    //reference_comission
            
                //Direct Referral
                if($gg_value>0){
                $rc1=$amount_j/100*8;
                DB::table('ac_main')->insert([
                      'user_id'         => $up_line_id,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                } else
                    {                $rc1=$amount_j/100*8;

                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc1,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                
                
                
                
                
                
                
                
                
/*                elseif($down_line_number==1){
                $rc1=$amount_j/100*20;
                DB::table('ac_main')->insert([
                      'user_id'         => $up_line_id,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                }
                elseif($down_line_number>=2){
                $rc1=$amount_j/100*25;
                DB::table('ac_main')->insert([
                      'user_id'         => $up_line_id,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                }*/
                 
                 
                 
                 
                 
                 
                //lavel-1
                $uuuuuuuu = DB::table('users')->where(['id'=>$up_line_id])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
  $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;               
                
                $rc12=$amount_j/100*2;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;







if($gg_value>0){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                
}
else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                
                
                
                
                //lavel-2
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
  $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;          
                
                
                $rc12=$amount_j/100*1.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
} else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                         
                        
                        
                        
                        
                        
                //lavel-3
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
    $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;               
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*1;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                  else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                      
                }      
                        
                        
                //lavel-4
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
    $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;               
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.80;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                    
                        
                }     
                        
                        
                        
                        
                        
                        
                //lavel-5
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
   $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.7;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                   else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                     
                }      
                        
                        
                        
                        
                //lavel-6
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
    $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;               
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                }
                
                
                
                
                
                //lavel-7
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
     $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card;              
                if($f_pu_line>0){
                $rc12=$amount_j/100*.25;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                }
                
                
                
                
                
                
                
                //lavel-8
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
  $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card; 
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.25;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;



if($gg_value>0){
                    DB::table('ac_main')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc1,
                          'remark'          => "Gift Card perces Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    
                    DB::table('ac_shop')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc2,
                          'remark'          => "Gift Card perces Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                            
                    }
                   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                }
                
                
                
                
                
                
                //lavel-9
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
  $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card; 
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.25;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission  (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission  (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                
                } 
                
                
                
                
                
                
                
                
                
                
                //lavel-10
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
  $gg_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
  $gg_value=$gg_v->my_gift_card; 
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.25;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($gg_value>0){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Gift Card perces Commission (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Gift Card perces Commission  (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Gift Card Flash Commission",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                
                
                }
                
                
                
                
                
                
                
        
        
        
        
        }
        
        
        
        
        
        
        
        
        
        
        
        

      return back()->with('message_success','Gift Card Approved Successfully');
    }
      
   
   
   
   
   
   
   
     
     
     
     public function app_pay2($id){
        DB::table('ac_main_with')->where('id',$id)->update([
          'status'=>2
        ]);
        
        
        
        
        $uuuuuuuu = DB::table('ac_main_with')->where(['id'=>$id])->first();
                
                $rc1=$uuuuuuuu->amount;
                $rc12=$rc1-($rc1*2);
                $f_pu_line=$uuuuuuuu->user_id;

                
                
    
        
        
        
          DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc12,
                      'remark'          => "Withdraw",
                      'sender_number'   => 1,
                      'status'          => 1,
                 
                        ]);
        
        
        

      return back()->with('message_success','Approved Successfully');
    }
     
     
     
     
     
     
     
     
     
     
     
     
     
        public function app_pay_r($id){
            
        
                    
                    $status_p=DB::table('ac_join_r')->where('id',$id)->first();
                    $status=$status_p->status;
                    $up_line_id=$status_p->upline_id;
                    $user_id=$status_p->user_id;
                    $amount_j=$status_p->amount;
                    
                    
                    
                    
                    
                    
                    
                    
                    
        DB::table('ac_join_r')->where('id',$id)->update([
          'status'=>2
        ]);
        
/*        
          DB::table('users')->where('id',$user_id)->update([
          'my_gift_card'=>1
        ]);      
        */
        
        
        
                 $gg_v= DB::table('users')->where(['id'=>$up_line_id])->first();
                 $gg_value=$gg_v->my_gift_card;
                
        
        
        
        
        
        if($status < 2)
        {
        
        ///Re P
        
        
            
                //Direct Referral
                
                $rc1=$amount_j/100*15;
                DB::table('ac_main')->insert([
                      'user_id'         => $user_id,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission",
                      'sender_number'   => "Me",
                      'status'          => 1,
                 
                        ]);
                
    
                 
                 
            
            
            
            
                 
                 
     
                 
                $rc1=$amount_j/100*5;
                DB::table('ac_main')->insert([
                      'user_id'         => $up_line_id,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission",
                      'sender_number'   => "$user_id",
                      'status'          => 1,
                 
                        ]);
                  
                 
                 
                 
                //lavel-1
                $uuuuuuuu = DB::table('users')->where(['id'=>$up_line_id])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                $rc12=$amount_j/100*5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase  Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase  Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                
                
                
                
                
                
                
                
                //lavel-2
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                $rc12=$amount_j/100*4;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase  Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase l Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                        
                        
                        
                        
                        
                //lavel-3
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                if($f_pu_line>0){
                $rc12=$amount_j/100*3;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase  Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                        
                        
                        
                        
                //lavel-4
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                if($f_pu_line>0){
                $rc12=$amount_j/100*2;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                //lavel-5
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                if($f_pu_line>0){
                $rc12=$amount_j/100*1;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                        
                        
                        
                        
                        
                        
                //lavel-6
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                if($f_pu_line>0){
                $rc12=$amount_j/100*1;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                
                
                
                
                
                
                
                //lavel-7
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                
                
                
                
                
                
                
                
                //lavel-8
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;



if($generation_value>=8){
                    DB::table('ac_main')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc1,
                          'remark'          => "Re-Purchase Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    
                    DB::table('ac_shop')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc2,
                          'remark'          => "Re-Purchase Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                            
                    }
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (8 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                }
                
                
                
                
                
                
                //lavel-9
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;

if($generation_value>=9){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (9 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                } 
                
                
                
                
                
                
                
                
                
                
                //lavel-10
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=10){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (10 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                
                
                
                
                
                //lavel-11
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=11){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (11 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (11 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (11 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                }   
                
                
                
                
                
                
                
                
                
                
                
                //lavel-12
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                

                
                
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                 
                
                

                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=12){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (12 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (12 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (12 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                }
                
                
                
                
                
                
                //lavel-13
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
               
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                  

                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=13){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (13 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (13 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (13 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                //lavel-14
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
               
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;

                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=14){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (14 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (14 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (14 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                
                }
                
                
                
                
                
                //lavel-15
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=15){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (15 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (15 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (15 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                }
                
                
                
                
                //lavel-16
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                
               
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                  
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=16){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (16 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (16 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (16 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                //lavel-17
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=17){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (17 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (17 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (17 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                
                
                //lavel-18
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=18){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (18 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (18 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                } 
                
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (18 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                
                
                //lavel-19
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=19){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (19 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (19 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                } 
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (19 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                
                }
                
                
                
                
                
                //lavel-20
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=20){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (20 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (20 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (20 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                
                //lavel-21
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                 
                 $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=21){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Re-Purchase Commission (21 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Re-Purchase Commission (21 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Re-Purchase Commission (21 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
        //Re p End
                   
                
                
                
        
        
        
        
        }
        
        
        
        
        
        
        
        
        
        
        
        

      return back()->with('message_success','Gift Card Approved Successfully');
    }
      
   
   
   
   
   
   
   
     
     
     
     
     
     
     
     
     
     
     
     
     
    public function login(Request $request)
    {
        if($request->isMethod('post')){

          $data = $request->input();
          if(Auth::attempt(['email'=>$data['email'] , 'password'=>$data['password'],'admin'=>1])){
            //return Redirect::
            return redirect('/admin/dashboard');
          }else {
            return redirect('/admin/login')->with('flash_message_error','User Name or Password is invalid');
          }
        }

        return view('admin.admin_login');
    }

    public function dashboard(){
      return View('admin.dashboard');
    }

    public function logout(){
        return redirect('/admin/login');
    }
    public function settings(){
        return view('admin.settings');
    }

    public function chkPassword(Request $request){
      $data = $request->all();
      $current_password = $data['current_pwd'];
      $check_password = User::where(['admin' => '1'])->first();
      if(Hash::check($current_password,$check_password->password)){
        echo "true"; die;
      }else {
        echo "false";die;
      }
    }





    public function updatePsw(Request $request){
        $a_iiiddd5=Auth::user()->id;
        
      if($request->isMethod('post')){
        $data = $request->all();
        $check_password   = User::where(['id'=> Auth::user()->id])->first();
        $current_password = $data['current_pwd'];
        if(Hash::check($current_password,$check_password->password)){
          $password = bcrypt($data['new_pwd']);

          User::where('id', $a_iiiddd5)->update([
              'password'=>$password,
              ]);
              
          return redirect('/admin/settings')->with('flash_message_success','Password update successfully');
        }else{
          return redirect('/admin/settings')->with('flash_message_error','Incorrect current password');
        }
      }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function updatePswp(Request $request){
        $a_iiiddd5=Auth::user()->id;
        
      if($request->isMethod('post')){
        $data = $request->all();
        $check_password   = User::where(['id'=> Auth::user()->id])->first();
        $current_password = $data['current_pwd']; 
        if($current_password == $check_password->nid){
          $new_pin= $data['new_pwd'];

          User::where('id', $a_iiiddd5)->update([
              'nid'=>$new_pin,
              ]);
              
          return redirect('/admin/settings')->with('flash_message_success','PIN update successfully');
        }else{
          return redirect('/admin/settings')->with('flash_message_error','Incorrect current PIN');
        }
      }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    


    public function contactReq(){
        $con_reqs = DB::table('contact_us')->orderBy('id','DESC')->get();
        return view('admin.contactReq')->with(compact('con_reqs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
