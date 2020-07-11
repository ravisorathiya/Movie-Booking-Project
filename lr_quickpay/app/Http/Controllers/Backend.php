<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\model\user\Subscriber;
use App\model\user\Register;
use DB;
use Validator;
use Crypt;
use Mail;
use Cookie;

class Backend extends Controller
{
     public function __construct()
    {
        date_default_timezone_set('Asia/kolkata');
    }
    public function email(Request $e)
   {
        $email = $e->get('email');
        $data = DB::table('tbl_email_subscriber')->where("email", "=", $email)->get();

        if (count($data) == 0) 
        {

            $sub = new Subscriber();

            $sub->email = $email;

            if ($sub->save())
            {
                echo "Thanks For Subscribe.";
            }
        }
        else 
        {
            echo "You'r Alerdy  Subscribe.";
        }
    }

    public function city(Request $r) 
    {
        $id = $r->get('id');
        $state = DB::table('tbl_location')->where('parent_id', '=', $id)->get();
        echo "<option value=''>Select City</option>";
        foreach ($state as $single) 
        {
            echo "<option value=" . $single->location_id . ">" . $single->name . "</option>";
        }
    }
    public function moviesub(Request $r) 
    {
        $id = $r->get('id');
        $state = DB::table('tbl_movie_type')->where([['parent_id', '=', $id],['label','=','sub']])->get();
        echo "<option value=''>Movie Sub Type</option>";
        foreach ($state as $single) 
        {
            echo "<option value=" . $single->type_id . ">" . $single->name . "</option>";
        }
    }
    
    public function screen(Request $s)
    {
        $id=$s->get('id');
        
        $data =DB::table('tbl_screen')->where('theater_id','=',$id)->get();
        echo "<option value=''>Select Screen</option>";
        foreach ($data as $single) 
        {
            echo "<option value=".$single->screen_id.">".$single->name."</option>";
        }
    }

    public function register(Request $i)
    {
        $email = $i->get('email');
        $mobile = $i->get('mobile');
        $password = $i->get('password');
        $data = new Register();
        $data->email = $email;
        $data->contact_no = $mobile;
//        $ps=Crypt::encrypt($password);
        $data->password = $password;
        $data->register_date=date('Y-m-d h:i:s');
        
        $data->status = '1';
        if($data->save())
        {
            echo "Success Fully Register";
        }
        
    }

    public function login(Request $l)
    {
        $email = $l->get('email');
        $password = $l->get('password');
        $svp = $l->get('svp');
        $data = DB::table('tbl_registration')->where("email", "=", $email)->get();

        if (count($data) == 1) 
        {
            $ops = $data[0]->password;
//           $ps=Crypt::decrypt($ops);
           
            if ($ops == $password)
            {
                if ($l->get('svp') == "check")
                {
                    
                    Cookie::queue('user_email', $email, 365 * 24 * 60);
                    Cookie::queue('user_pass', $password, 365 * 24 * 60);
                } 
                else 
                {
                    Cookie::queue('user_email', $email, -1);
                    Cookie::queue('user_pass', $password, -1);
                }
                if($data[0]->status == "1")
                {
                    session()->put('user', $data[0]->register_id);
                    session()->put('user_last_login', date('y-m-d h:i:s'));
                    echo "2";
                }
                else
                {
                    echo " Your Acoount is De-activated,for more detail contact admin.";
                }
              
            } 
            else 
            {
                echo " Email Or password Invalid.";
            }
        } 
        else 
        {
            echo "Email Or password Invalid.";
        }
    }
    public  function pupdate(Request $u)
    {
        $data= Register::find(session()->get('user'));
             
        $name = $u->get('name');
        $mobile = $u->get('mobile');
        $email = $u->get('email');
        $male = $u->get('gender');
        $dob= $u->get('dob');
        $city= $u->get('city');
        $data->name=$name;
        $data->contact_no=$mobile;
        $data->gender=$male;
        $data->location_id=$city;
        $data->dob=$dob;
        $data->save();
        echo "Update Successfully."; 
    }
    public function seating(Request $u)
    {
        
        if($u->id=="back")
        {
            $a= explode(",",session()->get("setvalue"));
            $x=[];
            for($i=0;$i<count($a)-1;$i++)
            {
                $x[$i]=$a[$i];
            }
            session()->put("setvalue", implode(",", $x));
            
        }
        else
        {
            if(session()->get("setvalue")=="")
            {
                session()->put("setvalue",$u->id);
            }
            else
            {
                session()->put("setvalue",session()->get("setvalue").",".$u->id);
            }
        if($u->id=="")
        {
            session()->forget("setvalue");
        }
      }
        
   }
    public  function change(Request $c)
    {
        $op=$c->get('epass');
        $np=$c->get('npass');
        
        $a = Register::find(session()->get("user"));
        if($op!=$np)
        {
            $a->password=$np;
            if($a->save())
            {
                echo "true";
            }
        }
        else {
            echo "already exits..";
        }
        
    }
    public function seat(Request $t) 
    {
        if($t->name=="select")
        {
         if(session()->get("seat")=="")
         {
                session()->put("seat",$t->val);
         }
         else
         {
                
             session()->put("seat",session()->get("seat").",".$t->val);
         }
        }
        elseif($t->name=="disselect")
        {
            $a= explode(",",session()->get("seat"));
            $x=[];
            for($i=0;$i<count($a);$i++)
            {
                if($a[$i]!=$t->val)
                {
                    $x[$i]=$a[$i];
                }
                
            }
            session()->put("seat", implode(",", $x));
        }
    
        echo session()->get('seat');  
    }
    public function promo(Request $t)
    {
       $promo=DB::table('tbl_promocode')->where("promocode_id","=",$t->id)->get()[0];
       if($t->rs >= $promo->minimum)
       {
           echo $t->rs - $promo->price;
       }
       else
       {
           echo 0;
       }
       
    }
    
    public  function forgot(Request $f)
    {
          $email =$f->get('email');
         
         session()->put("forgot",$email);
       
        
        $email = $f->get('email');
        $data=DB::table('tbl_registration')->where("email","=",$email)->get();
        $c= count($data);
        
        if($c==1)
        {
           
            Mail::send('forgot',[], function($message)use($email) {
                 
                    $message->to($email, 'Forgot Password')->subject('Forogt Password');
                    $message->from('gaadidekho007@gmail.com','QuickPay');
            });
            
        }
        else
        {
            echo "2";
        }
        
    }
    
    public function autopss()
    {
       $num= rand(11111111,99999999);
       echo $num;
        
    }
    
    public function checkemail()
    {
      $nm = "hhiii";
      echo $nm;
     
        
    }
   
    
}
