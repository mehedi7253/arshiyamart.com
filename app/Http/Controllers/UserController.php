<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banner;
use App\Product;
use App\Coupon;
use Illuminate\Support\Facades\Input;
use Image;
use App\ProductImage;

use App\Category;
use Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


 







   public function shoporder(){
        

      return view('users.shoporder');
    }
    
    
    
       public function shopproduct(){
        

      return view('users.shopproduct');
    }
    
    
    
    
    
    
     
           public function shopaddpoduct(){
        

      return view('users.shopaddpoduct');
    }
    
    
    
    
    
       public function shopwallet(){
        

      return view('users.shopwallet');
    }
    
    
    
    
    
        
       public function shopwithdraw(){
        

      return view('users.shopwithdraw');
    }
    
    
    
    
    
        public function profile(Request $request){
        return view ('users.profile');
    }
    
    
    
    
    
    
    
    
           public function shopallproduct(Request $request){
        
 if ($request->isMethod('post')) {
     $ctg=$request->ctg;
           return view('users.shopallproduct')->with(compact('ctg'));

 }else
 {
           return view('users.shopallproduct');

 }
    }
    
  
  
       public function shopallproduct2(Request $request){
        
 if ($request->isMethod('post')) {
     $ctg=$request->ctg;
           return view('users.shopallproduct2')->with(compact('ctg'));

 }else
 {
           return view('users.shopallproduct2');

 }
    }
      
    










    public function logReg(){
        

       
        
        
        
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.logReg')->with(compact('categories'));
    }


      public function p(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.p')->with(compact('categories'));
    }


      public function fp(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.fp')->with(compact('categories'));
    }


 public function logRegj(){
        

      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.logRegj')->with(compact('categories'));
    }

 



 













      public function t(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.t')->with(compact('categories'));
    }



      public function about(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.about')->with(compact('categories'));
    }


      public function fq(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.fq')->with(compact('categories'));
    }






 public function invoice($id,$inv){
     
     
      return view('users.invoice',['id'=>$id, 'inv'=>$inv]);
    }
    
    public function quotation($id,$inv){
     
     
      return view('users.quotation',['id'=>$id, 'inv'=>$inv]);
    } 
    

 public function invoice_re($id,$inv){
     
     
      return view('users.invoice_re',['id'=>$id, 'inv'=>$inv]);
    }





 public function invoicee($id,$inv){
     
     
      return view('users.invoice_e',['id'=>$id, 'inv'=>$inv]);
    }



 public function createb(){
     
     
      return view('users.createb');
    }




 public function refund(){
     
     
      return view('users.refund');
    }








public function updateb(Request $request){
      if($request->isMethod('post')){
        $data = $request->all();
       
                $user_id = Auth::user()->id;
		        $myshop= DB::table('shops')->where('owner_user_id',$user_id)->first();
		        @$shop_id=$myshop->id;
		      

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
          'logo' => $filename
        ]);
        return back()->with('message_success','Update Store successfully');
      }}
      



















 public function create2(Request $request){
     
     
      Session::put('business_name',"");
     
     $user_id = Auth::user()->id;
     
     
     
     
        
     
     
       if ($request->hasFile('file2')) {

          $image = Input::file('file2');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename2  = rand(111,99999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/shops/'.$filename2;
            Image::make($image)->resize(200,200)->save($large_image_path);
          }
        
            }
     
     
     
           if ($request->hasFile('file3')) {

          $image = Input::file('file3');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename3  = rand(111,99999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/shops/'.$filename3;
            Image::make($image)->resize(400,400)->save($large_image_path);
          }
        
            }
            else
            {
                $filename3="";
            }
     
     
     
     
     
     
     
     
     
     
     
      DB::table('shops')->insert([
                          'dist'         => $request->dis,
                          'ps'          => $request->ps,
                          'po'          => $request->location,
                          'address'          => $request->address,
                          'shop_name'   =>  $request->business_name,
                          'owner_user_id'   =>  $user_id,
                          'logo'   =>  $filename2,
                          'nid'   =>  $filename3,
                          
                          'helpline'   =>  $request->helpline
                        
                        
                            ]);
          
          
                         return back()->with('message_b', 'Success! Wait for approval.!');
 
     // return view('users.account')->with('message_sus', 'Success! Wait for approval.');
    }









 public function create7(Request $request){
     
     $user_id = Auth::user()->id;
     
     $date=date('d-M-Y');
     
     
            if ($request->hasFile('file')) {

          $image = Input::file('file');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,99999999999).'.'.$extension;
            $large_image_path ='admin/news/'.$filename;

            Image::make($image)->resize(400,400)->save($large_image_path);

            
          }
        
            }
     
     
      DB::table('news')->insert([
                          'post'         => $request->post,
                          'user_id'   =>  $user_id,
                          'image'   =>  $filename,
                          'date'   =>  $date,
                          
                          'status'   =>  1
                        
                        
                            ]);
          
          

     // return view('users.account')->with('message_sus', 'Success! Wait for approval.');
                              return view('news')->with('message_b', 'Success! You can see it apter approval.!');

    }








 


    public function my_generation(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      
      $viegen = DB::table('users')->where('up_line_id',$user_id)->get();
      
      
      $c=$user_id;
      
            $viegen2 = DB::table('users')->where('upline_arry', 'like', '%'.$c.'%')->get();
      
            return view('orders.my_generation')->with(compact('viegen','viegen2','categories'));

      
     

     
    }
    





    public function my_l(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      
            $viegen_shop = DB::table('ac_shop')->where('user_id',$user_id)->get();
            $viegen_main = DB::table('ac_main')->where('user_id',$user_id)->get();
            
            
      
            return view('orders.my_l')->with(compact('viegen_shop','viegen_main','categories'));

     
    }



    
    
    public function userReg3(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        $product = new Coupon;
       
        $product->name    = $data['name'];
        $product->mobile    = $data['mobile'];
        $product->address   = $data['address'];
        $product->note   = $data['note'];




$ssm=$data['mobile'];
$ssn=$data['name'];





       if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,999999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/ppp/large/'.$filename;

            Image::make($image)->resize(800,1200)->save($large_image_path);
            $product->image = $filename;
          }
        }else {
          $product->image = '';
        }


      
    //Send SMS
    
    
           $adds6 = Banner::where('id', 32)->first();
           $urrl32= $adds6->image;
           
           
           $adds31 = Banner::where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = Banner::where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = Banner::where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = Banner::where('id', 35)->first();
           $sender= $adds35->image;  
    
    
    
    
    
    
 
    
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$ssm", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"Dear $ssn, your medicine order received. We will contact soon. Thanks, $urrl32"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);
         
   
    

         
         
         
         
         
         
         
         
                 
                        
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$number31", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"$ssn Place a Medicine order, Mobile: $ssm . Please check Admin Panel.  Thanks"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);        
        
          
        
        
         $product->save();
      
      
         $categories = Category::with('categories')->where(['parent_id'=>0])->get();
     return redirect('/medicine2')->with('message_error','Success! Your prescription received. Wi will delivery soon as your requirement.');
      }
      
      
      
       
      
      
    }









 
    public function orders_res_send2(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        

DB::table('coupons7')->where('id',$data['r_id'])->update([
      'admin_price'    => $data['admin_price'],
      'admin_note'    => $data['admin_note'],
    
    
    ]);
         return back()->with('message_error','Sending Success!');






        
      }}
        
       
       




    
    public function orders_res_send(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        
        $auth_id= Auth::user()->id;
        
       
       
       
/*         if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/shops/'.$filename;

            Image::make($image)->resize(150,150)->save($large_image_path);

          }
        }
       
       */
       
       
       
       
       
  
  
        if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,999999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/ppp/large/'.$filename;

            Image::make($image)->resize(800,1200)->save($large_image_path);
 
          }
        }else {
          $product->image = '';
        }
       
       
       
       
       
       
       
         DB::table('coupons7')->insert([
          
                 
                  
       
        'd_price'    => $data['d_price'],
        'product_type'    => $data['product_type'],
        'personal_note'    => $data['personal_note'],
       'image'    => $filename,
        
        
        
        'user_id'    => $auth_id,
        'product_id'    => $data['product_id'],
        'invoice_no'    => $data['invoice_no'],


      ]);
       














      

      
      
         $categories = Category::with('categories')->where(['parent_id'=>0])->get();
     return back()->with('message_error','Success! আপনার পুন:বিক্রয় এর আবেদনটি সফলভাবে পাঠানো হয়েছে। অনুগ্রহ করে এ্যাপ্রুভ হওয়া পর্যন্ত অপেক্ষা করুন।.');
      }
      
      
      
       
      
      
    }





























  public function my_w(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $user_name = Auth::user()->name;

           if ($request->isMethod('post')) {
        $data = $request->all(); 
          
          
          
          
                                $total_cash_wallet=DB::table("ac_main")->where('user_id', $user_id)-> get()->sum("amount");
          
          
                                $wc=DB::table("ac_main_with")->where('user_id', $user_id)->where('status', 1)-> count();
if($data['amount'] > $total_cash_wallet )
{
    
}
else{
          if($wc>0)
          {
                          return view('orders.my_w')->with(compact('categories'));

          }
          else
              {
                DB::table('ac_main_with')->insert([
                          'user_id'         => $user_id,
                          'amount'          => $data['amount'],
                          'remark'          => $user_name,
                          'sender_number'   => $data['sender_number'],
                          'payment_method'   => $data['payment_method'],
                          'status'          => 1,
                     
                            ]);
                            

                  
              }
                            
                        
}         
                        
                        
      
            return view('orders.my_w')->with(compact('categories'));

           }
     
            

                              return view('orders.my_w')->with(compact('categories'));




}
















  public function my_g(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $user_name = Auth::user()->name;

           if ($request->isMethod('post')) {
        $data = $request->all(); 
          
          
          
                                $wc=DB::table("ac_main_with")->where('user_id', $user_id)->where('status', 1)-> count();

          if($wc>0)
          {
                          return view('orders.my_g')->with(compact('categories'));

          }
          else
              {
                DB::table('ac_main_with')->insert([
                          'user_id'         => $user_id,
                          'amount'          => $data['amount'],
                          'remark'          => $user_name,
                          'sender_number'   => $data['sender_number'],
                          'payment_method'   => $data['payment_method'],
                          'status'          => 1,
                     
                            ]);
                            

                  
              }
                            
                        
                        
                        
                        
      
            return view('orders.my_g')->with(compact('categories'));

           }
     
            

                              return view('orders.my_g')->with(compact('categories'));




}






  public function my_g2(Request $request, $id){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $user_name = Auth::user()->name;
      $upline = Auth::user()->up_line_id;

           if ($request->isMethod('post')) {
        $data = $request->all(); 
          
          
          
                                $wc=DB::table("ac_gift")->where('user_id', $user_id)->where('status', 1)-> count();

          if($wc>0)
          {
                          return view('orders.my_g')->with(compact('categories'));

          }
          else
              {
                DB::table('ac_gift')->insert([
                      'user_id'      => $user_id,
                      'amount'    => $data['package'],
                      'remark'    => "",
                      'payment_method'   => $data['payment_method'],
                      'trx_id'           => $data['trx_id'],
                      'sender_number'   => $data['sender_number'],
                      'upline_id'   => $upline,
                      'name'   => $user_name,
              
                      'status'        => 1,
                     
                            ]);
                            

                return back()->with('message_error', 'Success !');

              }
                            
                        
                        
                         //return view('orders.my_g')->with(compact('categories','gigt_id'));
                    
                return back()->with('message_error', 'Success !');


           }
     
            
$gigt_id=$id;
                              return view('orders.my_g2')->with(compact('categories','gigt_id'));




}








public function my_gg(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $user_name = Auth::user()->name;
      $upline = Auth::user()->up_line_id;

           if ($request->isMethod('post')) {
        $data = $request->all(); 
          
          
          
                                $wc=DB::table("ac_gift")->where('user_id', $user_id)->where('status', 1)-> count();

          if($wc>0)
          {
                          return view('orders.my_g')->with(compact('categories'));

          }
          else
              {
                DB::table('ac_gift')->insert([
                      'user_id'      => $user_id,
                      'amount'    => $data['package'],
                      'remark'    => "",
                      'payment_method'   => $data['payment_method'],
                      'trx_id'           => $data['trx_id'],
                      'sender_number'   => $data['sender_number'],
                      'upline_id'   => $upline,
                      'name'   => $user_name,
              
                      'status'        => 1,
                     
                            ]);
                            

                return back()->with('message_error', 'Success !');

              }
                            
                        
                        
                                                       return view('orders.my_g')->with(compact('categories'));


           }
     
            
                              return view('orders.my_g')->with(compact('categories'));




}

























  public function my_r(Request $request){
$categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $user_name = Auth::user()->name;
      $upline = Auth::user()->up_line_id;

           if ($request->isMethod('post')) {
        $data = $request->all(); 
          
          
          
                                $wc=DB::table("ac_join_r")->where('user_id', $user_id)->where('status', 1)-> count();

          if($wc>0)
          {
                          return view('orders.my_r')->with(compact('categories'));

          }
          else
              {
                DB::table('ac_join_r')->insert([
                      'user_id'      => $user_id,
                      'amount'    => $data['package'],
                      'remark'    => "",
                      'payment_method'   => $data['payment_method'],
                      'trx_id'           => $data['trx_id'],
                      'sender_number'   => $data['sender_number'],
                      'upline_id'   => $upline,
                      'name'   => $user_name,
              
                      'status'        => 1,
                     
                            ]);
                            

                  
              }
                            
                        
                        
                        
                        
      
            return view('orders.my_r')->with(compact('categories'));

           }
     
            
                              return view('orders.my_r')->with(compact('categories'));




}














public function userReg2(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        $ssm=$data['pphone'];
        $users_count =  User::where(['phone' => $data['pphone']])->count();
        if ($users_count<1) {
          return redirect('/login-register')->with('message_error','Phone Number not registred yet.');
        }else {
        @$random_password = rand(100000, 999999);
        $new_password = bcrypt($random_password);


           $adds6 = Banner::where('id', 32)->first();
           $urrl32= $adds6->image;
            
           
           $adds31 = Banner::where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = Banner::where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = Banner::where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = Banner::where('id', 35)->first();
           $sender= $adds35->image;  
    
    





         $url2 = "$apiurl?api_key=$apikey&type=text";
                    $smsdata = array(
                    'contacts' =>"$ssm", //Here will be client's mobile number
                    'senderid' =>"$sender",
                    'msg' =>" আপনার  নতুন  পাসওয়ার্ড:  $random_password"
                    );
                    $ch = curl_init(); // Initialize cURL
                    curl_setopt($ch, CURLOPT_URL, $url2);
                    curl_setopt($ch, CURLOPT_ENCODING, '');
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
                    curl_exec($ch);

        //Update Password
        
  
            
            
            
        User::where('phone',$data['pphone'])->update(['password'=>$new_password]);    
            
     return redirect('/login-registerj')->with('message_rs','Password Reset, New Password send to your mobile by SMS.');

          
        }

      }
    }
    
    
    
    
    
    
    
    









    public function login(Request $request){
      if ($request->isMethod('post')) {
          
          if(isset($request->user_type)){
              $value=$request->user_type;
               Session::put('dashboard',$value); 
              
          }else{
              Session::put('dashboard',1); 
          }
          
          
        $data = $request->all();

        if (Auth::attempt(['phone' => $data['phone'], 'password' => $data['password']])) {
          Session::put('fontSession' , $data['phone']);
          
          $cartCount = Product::cartCount();

          
          if($cartCount>0)
          {               return redirect('/cart');

          }
          else
          {               return redirect('/my-account');

          }
          
         
          
          
          
          
        }else {
          return back()->with('message_error', 'Mobile Number or Password is invalid !');
        }
      }
    }

    
    public function account(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $user_id = Auth::user()->id;
      $user_details = User::find($user_id);
      if ($request->isMethod('POST')) {
        $data = $request->all();
        if(empty($data['name'])){
                return redirect()->back()->with('flash_message_error','Please enter your Name to update your account details!');
            }

            if(empty($data['address'])){
                $address= '';
            }else{
                 $address=$data['address'];
            }
            
            
            
            

            if(empty($data['gender'])){
                $gender = '';
            }else{
                  $gender =$data['gender'];
            }



            if(empty($data['nid'])){
               $nid= '';
             }else{
                 $nid= $data['nid'];
             }
             



            if(empty($data['father_name'])){
               $father_name = '';
             }else{
                  $father_name = $data['father_name'];
             }
             
             

          if(empty($data['date_of_birth'])){
               $date_of_birth='';
            }else{
                 $date_of_birth=$data['date_of_birth'];
            }
            
            
            
            
            


            if(empty($data['mobile'])){
                $data['mobile'] = '';
            }

            $user = User::find($user_id);
            $user->name = $data['name'];
            
            
            //$user->state = $data['state'];
            //$user->country = $data['country'];
            $user->phone = $data['mobile'];
            $user->date_of_birth = $date_of_birth;
            $user->nid = $nid;
            $user->gender = $gender;
            $user->email = $data['email'];
            $user->address = $address;
            $user->father_name = $father_name;
            $user->save();
            return redirect()->back()->with('message_success','Your account details has been successfully updated!');

      }
      return view('users.account')->with(compact('user_details','categories'));
    }








    public function join(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $user_id = Auth::user()->id;
      $up_line_id = Auth::user()->	check_code;
      $rank = Auth::user()->	rank;


      $user_details = User::find($user_id);
      if ($request->isMethod('POST')) {
        $data = $request->all();
       
               

//up line arry
 $upline_date= User::where('id', $up_line_id)->first();
 $upline_arry= $upline_date->upline_arry;
 $down_line_number= $upline_date->down_line_number;
 
 
 $up_arry="$upline_arry $up_line_id";
//up arry end


	@$cell_no2=$data['j_mobile'];
	$cell_no = filter_var($cell_no2, FILTER_SANITIZE_NUMBER_INT);
	
	
	
	                $reference_check = DB::table('ac_join')->where(['user_id'=>$user_id])->where(['status'=>2])->first();
                    $amount_j=$reference_check->amount;

	
	
	if($amount_j<2000)
	{
	    	$income_v=0;

	}
	elseif($amount_j == 2000){
	$income_v=7;
	}
	elseif($amount_j == 4000){
	  $income_v=14;  
	}
	elseif($amount_j >= 8000){
	    $income_v=21; 
	}
	
	if($rank<1){
	if($cell_no>1111111111){
            $user = User::find($user_id);
            $user->j_name = $data['j_name'];
            $user->nid = $data['nid'];
            $user->j_mobile = $cell_no;
            $user->father_name = $data['father_name'];
            $user->country = $data['country'];
            $user->home_district = $data['home_district'];
            $user->p_address = $data['p_address'];
            $user->date_of_birth = $data['date_of_birth'];
            $user->education = $data['education'];
            $user->nomini = $data['nomini'];
            $user->nomimi_address = $data['nomimi_address'];
            
            $user->upline_arry = $up_arry;
            $user->generation_value = $income_v;
            
            
            //up line update
            $user->up_line_id =$up_line_id;
            $user->join_auth_code = "";
            $user->rank = 1; 
            $user->save();
           
           
           

                $user_u = User::find($up_line_id);
                $user_u->down_line_number = $down_line_number+1;
                $user_u->save();

                        
            //reference_comission
            
            
            
            
            $down_line_number2=DB::table('users')->where(['up_line_id'=>$up_line_id])->count();
            
            
            
            $down_line_number=$down_line_number2-1;
            
            
            
            
            
            
            
                //Direct Referral
                if($down_line_number<1){
                $rc1=$amount_j/100*15;
                DB::table('ac_main')->insert([
                      'user_id'         => $up_line_id,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                }
                elseif($down_line_number==1){
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
                }
                 
                 
                 
                 
                 
                 
                //lavel-1
                $uuuuuuuu = DB::table('users')->where(['id'=>$up_line_id])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                $rc12=$amount_j/100*5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=1){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (1 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
              else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (1 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }    
                          
                
                
                
                
                
                
                
                //lavel-2
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                
                $rc12=$amount_j/100*4;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=2){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (2 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (2 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }    
                        









             
                        
                        
                        
                //lavel-3
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*3;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=3){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (3 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (3 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }      
                }    
                        
                        
                        
                        
                //lavel-4
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*2;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=4){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (4 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (4 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }     
                }    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                //lavel-5
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*1;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=5){
                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (5 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (5 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }      
                }    
                        
                        
                        
                        
                        
                        
                //lavel-6
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                
                
                
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*1;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=6){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (6 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (6 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }      
                }    
                
                
                
                
                
                
                
                //lavel-7
                 $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->up_line_id;
                
                
                $g_v= DB::table('users')->where(['id'=>$f_pu_line])->first();
                 $generation_value=$g_v->generation_value;
                   
                
                
                
                
                if($f_pu_line>0){
                $rc12=$amount_j/100*.5;
                $rc1=$rc12/100*80;
                $rc2=$rc12/100*20;
if($generation_value>=7){

                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc1,
                      'remark'          => "Referral Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (7 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
}
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (7 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }  
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
                          'remark'          => "Referral Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    
                    DB::table('ac_shop')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc2,
                          'remark'          => "Referral Commission (8 G)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                            
                    }
                    else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (8 G_F)",
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
                      'remark'          => "Referral Commission (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (9 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (9 G_F)",
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
                      'remark'          => "Referral Commission (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (10 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (10 G_F)",
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
                      'remark'          => "Referral Commission (11 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (11 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (11 G_F)",
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
                      'remark'          => "Referral Commission (12 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (12 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }    
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (12 G_F)",
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
                      'remark'          => "Referral Commission (13 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (13 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (13 G_F)",
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
                      'remark'          => "Referral Commission (14 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (14 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (14 G_F)",
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
                      'remark'          => "Referral Commission (15 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (15 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (15 G_F)",
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
                      'remark'          => "Referral Commission (16 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (16 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (16 G_F)",
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
                      'remark'          => "Referral Commission (17 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (17 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (17 G_F)",
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
                      'remark'          => "Referral Commission (18 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (18 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                } 
                
                
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (18 G_F)",
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
                      'remark'          => "Referral Commission (19 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (19 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                } 
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (19 G_F)",
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
                      'remark'          => "Referral Commission (20 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (20 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (20 G_F)",
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
                      'remark'          => "Referral Commission (21 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                
                DB::table('ac_shop')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc2,
                      'remark'          => "Referral Commission (21 G)",
                      'sender_number'   => $user_id,
                      'status'          => 1,
                 
                        ]);
                        
                }   
                else
                    {
                         DB::table('ac_main')->insert([
                          'user_id'         => 1001,
                          'amount'          => $rc12,
                          'remark'          => "Referral Commission (21 G_F)",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
                    }
                   
                }
                
                
                
                
                
                
        
            
            
            //end_ref_comission
            
            
            
            
            
            
            
            
            
            
            
            return redirect()->back()->with('message_s','Joining Success!');

      }
                          return redirect()->back()->with('message_e','Your phone number or other information is invalid!');
}
          
      }
      return view('users.join_team')->with(compact('user_details','categories'));
    }






























    public function joining_payment(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $user_id = Auth::user()->id;
      $j_name = Auth::user()->name;
      $phone = Auth::user()->phone;


      if ($request->isMethod('POST')) {
        $data = $request->all();
        if(empty($data['trx_id'])){
                return redirect()->back()->with('flash_message_error','Please enter your TrxID !');
            }
            else
            {
                
                
                
                $up_line_id=$data['up_line_id'];
                
                
                
            
                
                
                
                
                
                $join_auth_code2=$data['join_auth_code'];
                $join_auth_code=substr($join_auth_code2,4);
                
                
                
                

                $reference_check = DB::table('users')->where(['j_mobile'=>$up_line_id])->where(['id'=>$join_auth_code])->count();
                
                $check_p = DB::table('ac_join')->where(['user_id'=>$user_id])->where(['status'=>1])->count();
                
                
                 
                
                
                
                
                
                
                
                
               if($check_p>0)
               {
                                            return redirect()->back()->with('message_e','Already your payment is waiting..!');

               }
                else{
                
                if($join_auth_code >= $user_id)
                {
                         return redirect()->back()->with('message_e','Authorized ID is Invalid!');
                }  
                    
               else{ 
                   if($reference_check>0){
                       
                        $u_name = User::where('id', $join_auth_code)->first();
                        $upname= $u_name->name; 
                       
                       
                       
                      DB::table('ac_join')->insert([
                      'user_id'      => $user_id,
                      'amount'    => $data['package'],
                      'remark'    => "",
                      'payment_method'   => $data['payment_method'],
                      'trx_id'           => $data['trx_id'],
                      'sender_number'   => $data['sender_number'],
                      'upline_id'   => $data['up_line_id'],
                      'name'   => $j_name,
                      'mobile'   => $phone,
                      'up_name'   => $upname,
                      'uuuse'   => 2,
                      
                      'status'        => 1,
                 
                        ]);
                        
                        
                        $user = User::find($user_id);
                        $user->check_code =$join_auth_code;
                        $user->up_line_name =$upname;
                        $user->save();

                        
                        
                        
                 }
                 else{
                     return redirect()->back()->with('message_e','Uplink ID or Authorized ID is Invalid!');
                 }
               }
                } 
                return redirect()->back()->with('message_success','Thanks, Your Information is submit successfully!');
                        
                }

            }
      
      return view('users.join_team')->with(compact('user_details','categories'));
    }

























    public function joining_payment_ttt(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      
           $upname = Auth::user()->name;


      if ($request->isMethod('POST')) {
      $data = $request->all();
        
      $user_id = $data['m_userid'];
      $j_name = $data['m_j_name'];
      $phone = $data['m_phone'];
      $join_auth_code=$data['join_auth_code'];
      
      
        
       
                
                $check_p = DB::table('ac_join')->where(['user_id'=>$user_id])->where(['status'=>1])->count();
      
                
               if($check_p>0)
               {
      return view('users.joining_payment_ttt')->with(compact('categories'));

               }
                else{
    
                 
                       
                       
                       
                      DB::table('ac_join')->insert([
                      'user_id'      => $user_id,
                      'amount'    => $data['package'],
                      'remark'    => "",
                      'payment_method'   => $data['payment_method'],
                      'trx_id'           => $data['trx_id'],
                      'sender_number'   => $data['sender_number'],
                      'upline_id'   => $data['up_line_id'],
                      'name'   => $j_name,
                      'mobile'   => $phone,
                      'up_name'   => $upname,
                      'uuuse'   => 2,
                      
                      'status'        => 1,
                 
                        ]);
                        
                        
                        $user = User::find($user_id);
                        $user->check_code =$join_auth_code;
                        $user->up_line_name =$upname;
                        $user->save();

                        
                        
              
      return view('users.joining_payment_ttt')->with(compact('categories'));
                        
                }

            }
      
      return view('users.joining_payment_ttt')->with(compact('categories'));
    }













































    public function joining_payment_check(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $user_id = Auth::user()->id;
      $j_name = Auth::user()->name;
      $phone = Auth::user()->phone;


      if ($request->isMethod('POST')) {
        $data = $request->all();
        
        $uid=$data['member_number'];
        if(empty($data['member_number'])){
                return redirect()->back()->with('flash_message_error','Please enter Mobile Number!');
            }
            else
            {
                
/*                $mem_check = DB::table('users')->where('id', $data['member_number'])->get();
*/                

      return view('users.join_team_2')->with(compact('categories','uid'));
    }
}
}





























    public function uplink_payment(Request $request){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $user_id = Auth::user()->id;
      $my_up = Auth::user()->up_line_id;
      
      
      $user_details = User::find($user_id);
      if ($request->isMethod('POST')) {
        $data = $request->all();

$up_line_id=$data['up_line_id'];


$join_auth_code2=$data['join_auth_code'];
$join_auth_code=substr($join_auth_code2,4);




$total_delevery=7;

$reference_check = DB::table('users')->where(['j_mobile'=>$up_line_id],['id'=>$join_auth_code])->count();

if($my_up<1)
{
if($reference_check>=$user_id)
{
     return redirect()->back()->with('message_e','Uplink ID or Authorized ID in Invalid!');
}
else{
if($total_delevery>0)
    {
            $user = User::find($user_id);
            $user->up_line_id =$join_auth_code;
            $user->join_auth_code = $up_line_id;
            $user->rank = 1;
            $user->save();
            
            
            
            
            //reference_comission
            /*
                //lavel-1
                
                //lavel-2
                
                //lavel-3
                
                //lavel-4
                
                //lavel-5
                
                //lavel-6
                
                //lavel-7
                
                //lavel-8
                
                //lavel-9
                
                //lavel-10
                
                //lavel-11
                
                //lavel-12
                
                //lavel-13
                
                //lavel-14
                
                //lavel-15
                
                //lavel-16
                
                //lavel-17
                
                //lavel-18
                
                //lavel-19
                
                //lavel-20
                
                //lavel-21
                
                
                
        
            
            */
            //end_ref_comission
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            return view('users.account')->with('message_success','Thanks, Your joining is complete!')->with(compact('user_details','categories'));

     
     
     
      }
     else
     {
                     return redirect()->back()->with('message_e','Uplink ID or Authorized ID in Invalid!');

     }
}  
}    
      
      return view('users.join_team')->with(compact('user_details','categories'));
    }
                      

}



















    public function chkUserPassword(Request $request){
    $data = $request->all();
    /*echo "<pre>"; print_r($data); die;*/
    $current_password = $data['current_pwd'];
    $user_id = Auth::User()->id;
    $check_password = User::where('id',$user_id)->first();
    if(Hash::check($current_password,$check_password->password)){
        echo "true"; die;
    }else{
        echo "false"; die;
    }
    }


    public function upPass(Request $request){
      if($request->isMethod('post')){
        $data = $request->all();

        $old_pwd = User::where('id',Auth::User()->id)->first();
        $current_pwd = $data['current_pwd'];
        if(Hash::check($current_pwd,$old_pwd->password)){
            // Update password
            $new_pwd = bcrypt($data['new_pwd']);
            User::where('id',Auth::User()->id)->update(['password'=>$new_pwd]);
            return redirect()->back()->with('message_success',' Password updated successfully!');
        }else{
           return redirect()->back()->with('message_error','Current Password is incorrect!');
        }
      }
    }




    public function adduser_by_a(Request $request){
        
      if ($request->isMethod('post')) {
        $data = $request->all();
        
        $ppp=bcrypt($data['password']);
        
    $user_check=DB::table('users')->where('phone',$request->mobile)->count();
    $user_check2=DB::table('users')->where('email',$request->email)->count();
    
    
    
    if($user_check2>0){
                 return redirect()->back()->with('message_error','This Phone Number or E-mail Already Used');
    }
    elseif($user_check>0){
                 return redirect()->back()->with('message_error','This Phone Number or E-mail Already Used');
    }
    else{
            DB::table('users')->insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->mobile,
            'password'=>$ppp,
            
            ]);
                           return redirect('admin/createinvoice_user')->with('message_s','sssssssss');

    }
    
    
    
    


}}



    public function userReg(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();  
          
          
          
          
          
          
      $s_otp=Session::get('otp');    
      $otp=$data['opt'];    
        
if($s_otp != $otp){
    


    return back()->with('message_oto','OTP is Invalid (আপনার SMS এ প্রাপ্ত সঠিক OTP প্রদান করুন)');
            
}
else
{

      $upppp=Session::get('ppp');
      $unnnn=Session::get('nnn');
      $eee=Session::get('eee');
      $rrr=Session::get('rrr');
      $sss=Session::get('sss');
      $aaa_ff_app=Session::get('dashboard');
      
      
      

        $users_count =  User::where(['phone' => $upppp])->count();
        if ($users_count>0) {
          return back()->with('message_error','Phone Number already exists');
        }else {
          $user = new User;

          $user->name = $unnnn;
          $user->phone = $upppp;

          $pp=$upppp;
          
          
     

if($rrr > 0)
{
    $s_ref=$rrr;
    $user->ref_upline =$s_ref; 
    
    
    
    									$viyyyyyy= DB::table('users')->where('id',$s_ref)->first();
    									$uppp_rankk=$viyyyyyy->rank;

    
    
    
    
    if($uppp_rankk>0)
    {
            $user->affiliate_block =$s_ref; 

    }
    
    
       if($aaa_ff_app == 2)
    {
            $user->affiliate_com = -1; 

    } 
    










//up line arry
 $ref_upline2= User::where('id', $s_ref)->first();
 $ref_upline= $ref_upline2->ref_upline;
 
 
 
    if(!empty($ref_upline))
    {
         $ref_up_arry="$s_ref $ref_upline";

    }
    else{
                 $ref_up_arry="$s_ref";

    }

     $user->ref_upline_arry =$ref_up_arry; 


//up arry end

}



     
     
     
          
          
       if(empty($eee))
       {
             $adds6 = Banner::where('id', 32)->first();

            $urrl32= $adds6->image;
            
           $user->email =''.$pp.'@'.$urrl32.'';
       }
       else
       {
                     $user->email = $eee;
       }
          $user->password = bcrypt($sss);
          
          
          
          
          
         //Send SMS
    
    
           $adds6 = Banner::where('id', 32)->first();
           $urrl32= $adds6->image;
           
           
           $adds31 = Banner::where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = Banner::where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = Banner::where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = Banner::where('id', 35)->first();
           $sender= $adds35->image;  
    
    
    
    
    
    
 /*   
    
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$upppp", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"Congratulation! Dear $unnnn, your registration is successful!, Thanks, $urrl32"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);*/
         
        
          
          
          
          
          $user->save();
          
          
          if (Auth::attempt(['phone' => $upppp, 'password' => $sss])) {
            Session::put('fontSession' , $sss);
            
            

                      $cartCount = Product::cartCount();
            
                      if($cartCount>0)
                      {              return redirect('/cart')->with('message_success','Account created successfully');
            
                      }
                      else
                      {               
                                        return redirect('/my-account')->with('message_success','Account created successfully');
            
                      }
                      
          }



        }
        //echo "<pre>";print_r($users_count);die;
        
        
        
        
        
        
        
        
        
        
        
        
        
}
        

      }

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function checkMail(Request $request){
      $data = $request->all();
      $users_count =  User::where(['email' => $data['email']])->count();
      if ($users_count>0) {
        echo "false";
      }else {
        echo "true";die;
      }
    }

    public function logout(){
      Auth::logout();
      Session::forget('fontSession');
      Session::forget('session_id');
      return redirect('/');
    }

    public function upAccount(){

    }
}
