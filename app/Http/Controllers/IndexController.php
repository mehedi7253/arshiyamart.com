<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;  
use Session;
       
use App\Banner;
use DB; 
      
/*     UPDATE `products` SET `extra10`= 1  WHERE id > 0
*/  


/*
  এই সাইটের সকল সোর্স কোড iCT Sky  এর স্বত্বাধীকারি, এটি ডোমেইন এর জন্য  একক ব্যবহারের অনুমতি/লাইসেন্স  প্রদান করা হয়েছে। তাই, iCT Sky এর অনুমতি ব্যতিত অত্র সোর্স কোর্ডগুলোর বিক্রয়/অন্য ডোমেইন এর ব্যবহার করিলে আইনগত ব্যবস্থা গ্রহণ করা হবে। উল্লেখ্য যে, iCT Sky সোর্স কোর্ডগুলো অনুমোদিত ডোমেইন ব্যাতিত অন্য কোথাও ব্যবহার করা হলে সাথে সাথে iCT Sky এর সার্ভারে নোটিফিকেশন চলে যায়, ফলে সে অনুযায়ী আইনি ব্যবস্থা / কায্যকরি ব্যবস্থা গ্রহণ করা হয়। 
 
 */
 
 
 
  /*
  এই সাইটের সকল সোর্স কোড iCT Sky  এর স্বত্বাধীকারি, এটি ডোমেইন এর জন্য  একক ব্যবহারের অনুমতি/লাইসেন্স  প্রদান করা হয়েছে। তাই, iCT Sky এর অনুমতি ব্যতিত অত্র সোর্স কোর্ডগুলোর বিক্রয়/অন্য ডোমেইন এর ব্যবহার করিলে আইনগত ব্যবস্থা গ্রহণ করা হবে। উল্লেখ্য যে, iCT Sky সোর্স কোর্ডগুলো অনুমোদিত ডোমেইন ব্যাতিত অন্য কোথাও ব্যবহার করা হলে সাথে সাথে iCT Sky এর সার্ভারে নোটিফিকেশন চলে যায়, ফলে সে অনুযায়ী আইনি ব্যবস্থা / কায্যকরি ব্যবস্থা গ্রহণ করা হয়। 
 
 */
 
  
   /*
  এই সাইটের সকল সোর্স কোড iCT Sky  এর স্বত্বাধীকারি, এটি ডোমেইন এর জন্য  একক ব্যবহারের অনুমতি/লাইসেন্স  প্রদান করা হয়েছে। তাই, iCT Sky এর অনুমতি ব্যতিত অত্র সোর্স কোর্ডগুলোর বিক্রয়/অন্য ডোমেইন এর ব্যবহার করিলে আইনগত ব্যবস্থা গ্রহণ করা হবে। উল্লেখ্য যে, iCT Sky সোর্স কোর্ডগুলো অনুমোদিত ডোমেইন ব্যাতিত অন্য কোথাও ব্যবহার করা হলে সাথে সাথে iCT Sky এর সার্ভারে নোটিফিকেশন চলে যায়, ফলে সে অনুযায়ী আইনি ব্যবস্থা / কায্যকরি ব্যবস্থা গ্রহণ করা হয়। 
 
 */
 
 
 
 
 
class IndexController extends Controller
{
    public function index(){
      //$allproducts = Product::get();
     // $allproducts = Product::orderBy('id','DESC')->get();
     
     
   if (empty($session_id)) {
          
          session_start();
     $ses_id=session_id();
       // $session_id = str_random(40);
       $session_id=session_id();
        Session::put('session_id',$session_id);
      }   
     
     
     
       /*
  এই সাইটের সকল সোর্স কোড iCT Sky  এর স্বত্বাধীকারি, এটি ডোমেইন এর জন্য  একক ব্যবহারের অনুমতি/লাইসেন্স  প্রদান করা হয়েছে। তাই, iCT Sky এর অনুমতি ব্যতিত অত্র সোর্স কোর্ডগুলোর বিক্রয়/অন্য ডোমেইন এর ব্যবহার করিলে আইনগত ব্যবস্থা গ্রহণ করা হবে। উল্লেখ্য যে, iCT Sky সোর্স কোর্ডগুলো অনুমোদিত ডোমেইন ব্যাতিত অন্য কোথাও ব্যবহার করা হলে সাথে সাথে iCT Sky এর সার্ভারে নোটিফিকেশন চলে যায়, ফলে সে অনুযায়ী আইনি ব্যবস্থা / কায্যকরি ব্যবস্থা গ্রহণ করা হয়। 
 
 */
     
   
$urla=$_SERVER['SERVER_NAME'];

  /*
  এই সাইটের সকল সোর্স কোড iCT Sky  এর স্বত্বাধীকারি, এটি ডোমেইন এর জন্য  একক ব্যবহারের অনুমতি/লাইসেন্স  প্রদান করা হয়েছে। তাই, iCT Sky এর অনুমতি ব্যতিত অত্র সোর্স কোর্ডগুলোর বিক্রয়/অন্য ডোমেইন এর ব্যবহার করিলে আইনগত ব্যবস্থা গ্রহণ করা হবে। উল্লেখ্য যে, iCT Sky সোর্স কোর্ডগুলো অনুমোদিত ডোমেইন ব্যাতিত অন্য কোথাও ব্যবহার করা হলে সাথে সাথে iCT Sky এর সার্ভারে নোটিফিকেশন চলে যায়, ফলে সে অনুযায়ী আইনি ব্যবস্থা / কায্যকরি ব্যবস্থা গ্রহণ করা হয়। 
 
 */
 
  
   
    $c_them=DB::table('banners')->where('id',38)->first();
    $c_them=$c_them->image;
    if(empty($c_them)){
        $c_them="index";
    }
    elseif($c_them == 1)
    {
        $c_them="index";
    }
    
        elseif($c_them == 2)
    {
        $c_them="index2";
    }
    
    
            elseif($c_them == 3)
    {
        $c_them="index3";
    }
    
    
                elseif($c_them == 4)
    {
        $c_them="index4";
    }
    
                elseif($c_them == 5)
    {
        $c_them="index5";
    }
    
                elseif($c_them ==6)
    {
        $c_them="index6";
    }
                elseif($c_them == 7)
    {
        $c_them="index7";
    }
    
                    elseif($c_them == 8)
    {
        $c_them="index8";
    }
                    elseif($c_them == 9)
    {
        $c_them="index9";
    }
                    elseif($c_them == 10)
    {
        $c_them="index10";
    }
    
    elseif($c_them == 11)
    {
        $c_them="index11";
    }
    
    else{
                $c_them="index";

    }
    



 
 
 if($urla =='www.arshiyamart.com')
{
     return view($c_them);
}
elseif($urla =='arshiyamart.com')
{
    return view($c_them);
}
else
{
    echo '<meta http-equiv="refresh" content="0;URL=https://ictsky.com/service/licence.php?client=arshiyamart&n=1&user='.$urla.'" />';

}
 
 
 
 
 
 
 
 
 
 
 
 
 
      
 
 
 
     
     
     
     
      //$allproducts = Product::inRandomOrder()->where('status',1) ->limit(16)->get();
         //  $allproducts = Product::where('position3',1)->orderby('id','DESC')->limit(16)->get();

      
     // $allproducts = Product::where('status',1)->orderby('id','DESC')->limit(16)->get();
    //  $allproductsf = Product::inRandomOrder()->where('position2',1) ->limit(16)->get();
      
      
      
      
      

    //  $categories = Category::with('categories')->where(['parent_id'=>0])->get();

     // $populer = Product::inRandomOrder()->where('Position',1) ->limit(12)-> get();
     // $featured = Product::inRandomOrder()->where('Position',2) ->limit(12)->get();

     // $banners = Banner::where('status', 1)->get();

      // echo "<pre>";print_r($banners);die;

     
    }











    public function contactus(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('contactus')->with(compact('categories'));
    }
    
    
    public function contact_us(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        $contact = DB::table('contact_us')->insert([
          'name' =>$data['name'],
          'email' =>$data['email'],
          'sub' =>$data['sub'],
          'comment' =>$data['comment']
        ]);

        return back()->with('message_success','আপনার অনুরোধটি সফলভাবে পাঠানো হয়েছে। খুব শীঘ্রই আমাদের হেল্প সেন্টার থেকে আপনার সাথে যোগাযোগ করা হবে। !');;
      }
    }
    
    
       
       public function medicine(){
     $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.medicine')->with(compact('categories'));
    }
     
 
     public function fav(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('fav');
    }
 
    public function brands(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('brands');
    }
 
 
  
    public function category(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('category');
    }
 
 
 
 
 
   
    public function career(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('career');
    }
 
 
 
  
     public function news(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('news');
    }
 
 
      public function news2(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('news2');
    }
 
 
 
 
 
 
 
 
 
  public function offer(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('offer');
    }
 
 
  public function cashback(){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('cashback');
    }
 
 
 
 
   public function shops(Request $request){
     //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
     if(isset($request->ps))
     {
      $r_dis=$request->dis;
     $r_ps=$request->ps;
     
      return view('shops')->with(compact('r_ps'));      
     }

      else{
                return view('shops');

      }
    }
 
 
 
 
 
 
 
        public function medicine2(){
     $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.medicine2')->with(compact('categories'));
    }
    
    
    
    
            public function track_order(){
     $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      return view('users.track_order')->with(compact('track_order'));
    }
    
    
    
    
    
    
    
}
