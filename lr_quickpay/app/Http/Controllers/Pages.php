<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\model\user\Feedback;
use App\model\user\Support;
use App\model\user\Register;
use App\model\Recharge;
use App\model\user\Booking;
use DB;
use Validator;
use Crypt;
use Mail;

class Pages extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/kolkata');
    }
    public function index()
    {
        return view('index');
    }
    
    public function aboutus()
    {
        return view('aboutus');
    }
    
    public function faqs()
    {
        return view('faqs');
    }
    
    public function contactus()
    {
        return view('contactus');
    }
    
    public function support(Request $s)
    {
        if($s->get('send'))
        {
            $v = $this->validate($s, [
               'name' => "required|regex:/^[a-zA-Z ]+$/",
                'mobile' => "required|numeric|digits:10",
                'subject' => "required",
                "email" => "required|email",
                "message"=>"required"
               ],
                 [
                "name.required" => "Enter The Name",
                 "name.regex" => "Enter Only Charcter",
                "mobile.required" => "Enter Mobile Number",
                "mobile.required" => "Enter Mobile Number",
                "mobile.numeric" => "Enter Only Number",
                "mobile.digits" => "Enter Only 10 Digit",
                "subject.required" => "Select City",
                'message.required'=>'Please Enter Feedback.',
                "email.required" => "Enter The Email",
                "email.email" => "Please Enter Valid Email",
               ]);
            
          $data=new Support(); 
          $data->name=$s->name;
          $data->email=$s->email;
          $data->mobile=$s->mobile;
          $data->subject=$s->subject;
          $data->message=$s->message;
          if($data->save())
          {
              $data['error']="Request Accept";
          }
           
        }
        return view('support', compact('data'));
    }
    
    public function tc()
    {
        return view('tandc');
    }
    
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    
    public function rechargepartner()
    {
        return view('rechargepartner');
    }
    
    public function partnerwithus()
    {
        return view('partner-with-us');
    }
    
    public function booking()
    {
        return view('booking');
    }
    
    public function show()
    {
        return view('show');
    }
    public function booking_now($id, Request $r)
    {
        $msg['id']=$id;
        if($r->get('book'))
        {
            if(session()->get("user")!="")
            {
                $new=DB::select("select * from tbl_movie_time where time_id=".$id);
                $new=$new[0];
                $movi=DB::select("select * from tbl_movie where movie_id=".$new->movie_id)[0];
                $date=date("Y-m-d",strtotime($new->date));
                $time=date('h:i A',strtotime($new->time));

                $data=new Booking(); 
                 $data->register_id=$r->session()->get("user");
                 $data->time_id=$id;
                 $data->no_of_seat=$r->session()->get("total");
                 $data->seat_no=$r->session()->get("seat");
                 $data->status="1";
                 $data->date=$date;
                 if($data->save())
                 {
                     return redirect('Success-Booking');
                 }
            }
            else {
                
                echo "NOT Login user";
                die;
            }
        }
        
       return view('book_now')->with($msg);
    }
    
    public function seat($id, Request $r)
    {
        $msg['id']=$id;
       
        if($r->add)
        {
            return redirect("/Book-Now/".$id);
        }
         session()->forget("seat");
        return view('seatselect')->with($msg);
    }
    
  
    public function profile(Request $ch)
    {
        
        if($ch->get('change'))
        {
            
            $a = Register::find(session()->get('user'));
            $filename=$a->path;
           
            
            $this->validate($ch, [

              "photo"=>"required|mimes:jpeg,png,jpg|max:2048",
            ],[
             
                'photo.required'=>'Please Select Photo.',
              
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',   
                ]);
              
              
            $id=$a->register_id;
            $b=(int)$id-1;
//            echo $a;die;
            $image=$ch->file('photo');
             $ex=$image->getClientOriginalExtension();
             $size=$image->getClientSize();
            
            $name="photo_$b.".$ex;
        
             $serverpath="public/assets/userprofile/";
           
            if($filename != "")
            {
            unlink($filename);
            }
             $a->path=$serverpath.$name;
            $image->move($serverpath,$name);            
            if($a->save())
            {
                $data['success']=" Add Succesfully.";
            }
           
         }
        return view('profile');
    }
    
    public function loginregister()
    {
        return view('login_register');
    }
    public function logout(Request $a)
    {
        
         $a = Register::find(session()->get('user'));
         $a['last_login']=session()->get('user_last_login');
        $a->save();
        session()->forget('user');
        session()->forget('user_last_login');
    
        return redirect('/');
    }
    
    public function feedback(Request $f)
    {
       if($f->get('send'))
       { 
          $data=new Feedback();
          $this->validate($f, [
                "name"=>"required|regex:/^[a-zA-Z ]+$/",
              "message"=>"required"
            ],
                    [
                       'name.required'=>'Please Enter Name.',
                       'message.required'=>'Please Enter Feedback.',
                       'name.regex'=>'Please Enter Valide Name.',
                        
                    ]);
         
          $data->name=$f->name;
          $data->message=$f->message;
          $data->save();
       }
        return view('feedback');
    }
    public function submit(Request $r)
    {
        if($r->get('paysub'))
        {    
            if(session()->get("user")!="")
            {
                $provider_id = $_POST['provider_id']; 
                $number = $_POST['number'];
                $amount = $_POST['amount'];
                $client_id = "010"; 

                $api_token = "TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb";  
//                $api_token = "";  
                $ch = curl_init();
                $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$number&provider_id=$provider_id&amount=$amount&client_id=$client_id";
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = json_decode(curl_exec($ch));
                curl_close($ch);


                if($response->status=="success")
                {
                    $data=new Recharge();
                    $data->pay_id=$response->payid;
                    $data->register_id= session()->get("user");
                    $data->date=date('Y-m-d');
                    $data->time=date('h:i:s');
                    $data->number=$number;
                    $data->operator=$provider_id;
                    $data->amount=$amount;
                    $data->type="mobile";
                    $data->status=$response->status;
                    $data->save();

                     $d['number']=$number;
                     $d['amount']=$amount;
                     $d['pid']=$response->payid;
                     $d['oid']=$provider_id;
                     return view('success', compact('d'));

                }
                else
                {

                    return view('failure');
                }
            }
            else
            {
                echo "login not user";
                die;
            }
        }
     
    
    }
    public function dth(Request $d)
    {
        if($d->get('paydth'))
       {    
            if(session()->get("user")!="")
            {
                $provider_id = $_POST['provider_id']; 
                $customer_number = $_POST['number'];
                $amount = $_POST['amount'];
                $client_id = "010";
//                $api_token = ""; 
                $api_token ="TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
                $ch = curl_init();
                $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$customer_number&provider_id=$provider_id&amount=$amount&client_id=$client_id";
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $r= explode(",", $response);
                if($r[2]=="failure")
                {
                    $data=new Recharge();
                    $data->pay_id=$response->payid;
                    $data->register_id= session()->get("user");
                    $data->date=date('Y-m-d');
                    $data->time=date('h:i:s');
                    $data->number=$number;
                    $data->operator=$provider_id;
                    $data->amount=$amount;
                    $data->type="dth";
                    $data->status=$response->status;
                    $data->save();
                    return view('success', compact('d'));
                }
                else
                {
                 return view('failure');   
                }
            }
       }
    }
        public function electricity(Request $e)
        {

           if($e->get('payele'))
           {    
            if(session()->get("user")!="")
            { 
                    $provider_id = $_POST['provider_id']; 
                    $customer_number = $_POST['number'];
                    $amount = $_POST['amount'];
                    $client_id = "010";


                    $optional1="";
                    $optional2="";
                    $optional3="";
//                    $api_token = ""; 
                    $api_token ="TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
                    $ch = curl_init();
                    $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$customer_number&provider_id=$provider_id&amount=$amount&client_id=$client_id&optional1=$optional1&optional2=$optional2&optional3=$optional3";
                    
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $response = curl_exec($ch);
                    print_r($response);
                    die;
                    curl_close($ch);
                    $r= explode(",", $response);

                    if($r[2]=="failure")
                    {
                        $data=new Recharge();
                        $data->pay_id=$response->payid;
                        $data->register_id= session()->get("user");
                        $data->date=date('Y-m-d');
                        $data->time=date('h:i:s');
                        $data->number=$number;
                        $data->operator=$provider_id;
                        $data->amount=$amount;
                        $data->type="electricity";
                        $data->status=$response->status;
                        $data->save();
                        return view('success', compact('d'));
                    }
                    else
                    {
                     return view('failure');   
                    }
                }
           }
    }
    
    public function ges(Request $g)
    {
        
       if($g->get('payges'))
       {  
        if(session()->get("user")!="")
        {
            $provider_id = $_POST['provider_id']; 

            $customer_number = $_POST['number'];
            $amount = $_POST['amount'];
            $client_id = "010";

            $cnumber="";
            $emailid="";
//            $api_token = ""; 
            $api_token ="TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
            $ch = curl_init();

            $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$customer_number&provider_id=$provider_id&amount=$amount&client_id=$client_id&cnumber=$cnumber&cemail=$emailid";

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
            $r= explode(",", $response);

            if($r[2]=="failure")
            {
                $data=new Recharge();
                $data->pay_id=$response->payid;
                $data->register_id= session()->get("user");
                $data->date=date('Y-m-d');
                $data->time=date('h:i:s');
                $data->number=$number;
                $data->operator=$provider_id;
                $data->amount=$amount;
                $data->type="ges";
                $data->status=$response->status;
                $data->save();
                return view('success', compact('d'));
            }
            else
            {
             return view('failure');   
            }
        }
 else {
     echo "hii";
       die;
 }
        
       } 
    }
//    public function success()
//    {
//        $d['number']="9512255056";
//        $d['amount']="35";
//        $d['pid']="458549863";
//        
//        return view('success', compact('d'));
//    }
//    public function failure()
//    {
//        return view('failure', compact('d'));
//        
//    }
//        public function emailsend()
//        {
//            $email="mohitn54321@gmail.com";
//            Mail::send('email',[], function($message)use($email) {
////                   echo "<pre>";
////                    print_r($message);die;
//                    $message->to($email, 'Forgot Password')->subject('Email Subscribe');
//                    $message->from('gaadidekho007@gmail.com','QuickPay');
//                   
//        });
//        return view('email');
//        }
 
   
    public  function successbook()
    {
        return view('successbook');
    }
}
