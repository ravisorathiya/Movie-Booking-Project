<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Crypt;
use Cookie;
use App\model\Location;
use App\model\Movie_type;
use App\model\Banner;
use App\model\Cast_type;
use App\model\Caste;
use App\model\Login;
use App\model\Theater;
use App\model\user\Feedback;
use App\model\user\Support;
use App\model\user\Subscriber;
use App\model\screen;
use App\model\Movie;
use App\model\Showtime;
use App\model\Promocode;

class Admin extends Controller
{
    public function __construct()
    {
        
        date_default_timezone_set('Asia/kolkata');
    }
    
    public function index() 
    {
        return view('Admin/home');
    }
    
    public function support() 
    {
        return view('Admin/support');
    }
    
    public function feedback() 
    {
        return view('Admin/feedback');
    }
    
    public function login(Request $l) 
    {
        if($l->get('login'))
        {
            $email = $l->get('email');
            $ps = $l->get('password');
            $data = DB::table('tbl_admin_login')->where('email','=',$email)->get();
           
            if(count($data)==1)
            {
                $ops =$data[0]->password;
                if($ops == $ps)
                {
                    if($l->get('svp'))
                    {
                        Cookie::queue('admin_email',$email,365 * 24 * 60);
                        Cookie::queue('admin_pass',$ps,365 * 24 * 60);                        
                    }
                    else { 
                            Cookie::queue('admin_email',$email,-1);
                        Cookie::queue('admin_pass',$ps,-1);      
                    }
                   
                    session()->put('admin',$data[0]->admin_id);
                    session()->put('admin_last_login',date('y-m-d h:i:s'));
                                      
                    return redirect('Admin-Dashboard');
                }
                else
                {
                    $data['error']="Invalid Email Or password.";
                }
            }
            else 
            {
               $data['error']="Invalid Email Or password.";
            }
         }
             return view('Admin/login', compact('data'));
    }
    
    public function logout(Request $r)
    {
        $a = Login::find(session()->get('admin'));
        $a['last_login']=session()->get('admin_last_login');
        $a->save();
        session()->forget('admin');
        session()->forget('admin_last_login');
    
        return redirect('Admin-Authentication');
    }
    
     public function manage_setting(Request $ch) 
    {
         if($ch->get('save'))
         {
            
            $a = Login::find(session()->get('admin'));
            $filename=$a->path;
           
            
            $this->validate($ch, [

              "photo"=>"required|mimes:jpeg,png,jpg|max:2048",
            ],[
             
                'photo.required'=>'Please Select Photo.',
              
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',   
                ]);
              
              
            $id=$a->admin_id;
            $b=(int)$id-1;
//            echo $a;die;
            $image=$ch->file('photo');
             $ex=$image->getClientOriginalExtension();
             $size=$image->getClientSize();
            
            $name="photo_$b.".$ex;
        
             $serverpath="public/Admin_assets/profile/";
            $a->path=$serverpath.$name;
            
            unlink($filename);
            
            $image->move($serverpath,$name);            
            if($a->save())
            {
                $data['success']=" Add Succesfully.";
            }
           
         }
        if($ch->get('change'))
        {    
            
            $data = DB::table('tbl_admin_login')->where('password','=',$ch->get('cp'))->get();
            
            if(count($data)==1)
            {
                 if($data[0]->password==$ch->get('cp'))
                 {
                     if($ch->get('np')!==" ")
                     {
                        if(!($ch->get('cp')==$ch->get('np')))
                        {
                            if($ch->get('np')==$ch->get('rp'))
                             {
                                $a = Login::find(session()->get('admin'));
                                $a['password']=$ch->get('np');
                                $a->save();
                                return redirect('/');
                             }
                             else 
                             {
                                 $msg['error']="Invalid password.";
                             }
                         }
                         else 
                         {
                             $msg['error']="Invalid password.";
                         }
                    }
                    else 
                    {
                         $msg['error']="Invalid password.";
                    }
                }
                 else 
                 {
                     $msg['error']="Invalid password.";
                 }
            }
            else 
            {
                     $msg['error']="Invalid password.";
            }
        }
        
        return view('Admin/managesetting', compact('msg'));
    }
    
    public function emailsub(Request $e) 
    {
        if($e->get("send"))
        {
            $this->validate($e, [

                "name"=>"required|regex:/^[a-zA-Z ]+$/",
                "message"=>"required",
            ],[
                        'name.regex'=>'Please Enter Valide Subject.',
                       'name.required'=>'Please Enter Subject.',
                       'message.required'=>'Please Enter Message.',
                    ]); 
            
        }
        return view('Admin/email_subscribe');
    }
    
    public function manage_user() 
    {
        return view('Admin/manageuser');
    }
    
    public function manage_state(Request $s) 
    {
       $msg = [];
       $data=new Location();
       
       if($s->get('add'))
       {
            $this->validate($s, [

                "state"=>"required|regex:/^[a-zA-Z ]+$/"
            ],[
                       'state.required'=>'Please Enter State.',
                       'state.regex'=>'Please Enter Valide State.',
                    ]);
            
           $c= DB::table('tbl_location')->where('name', '=' ,$s->get('state'))->count();
           $statename= DB::table('tbl_location')->select('name')->where('name', '=' ,$s->get('state'))->get();
           
           if($c==0)
           {
               $data->name=$s->get('state');
               $data->parent_id='0';
               $data->label='state';
               if($data->save())
               {
                   $msg['success']=$s->get('state')."Add Succesfully.";
               }
            }
            else
            {
                   $msg['error']=$statename[0]->name." Already Added.";
            }
        }
            return view('Admin/managestate')->with($msg);
    }
    
    public function manage_city(Request $s) 
    { 
       
        $data=new Location();
        
        if($s->get('add'))
        {
            $this->validate($s, [
                "city"=>"required|regex:/^[a-zA-Z ]+$/",
                "state"=>"required"
            ],[
                
               'state.required'=>'Please Select State.',
               'city.required'=>'Please Enter city.',
               'city.regex'=>'Please Enter Valide State.',
                   
                ]);
            
            $c= DB::table('tbl_location')->where('name', '=' ,$s->get('city'))->count();
            $cityname= DB::table('tbl_location')->select('name')->where('name', '=' ,$s->get('city'))->get();
           
           if($c==0)
           {
               
               $data->name=$s->get('city');
               $data->parent_id=$s->get('state');
               $data->label='city';
               if($data->save())
               {
                   $msg['success']=$s->get('city')." Add Succesfully.";
               }
            }
            else
            {
                   $msg['error']=$cityname[0]->name." Already.";
            }
            
        }
        return view('Admin/managecity', compact('msg'));
    }
    
    public function manage_movietype(Request $m) 
    {
        $msg=[];
        $data=new Movie_type();
        if($m->get('add'))
        {
            $this->validate($m, [
                "movie"=>"required|regex:/^[a-zA-Z ]+$/"
            ],
                    [
                       'movie.required'=>'Please Enter Movie type.',
                       'movie.regex'=>'Please Enter Valide Movie type.',
                        
                    ]);
            
            $c= DB::table('tbl_movie_type')->where('name', '=' ,$m->get('movie'))->count();
            $moviename= DB::table('tbl_movie_type')->select('name')->where('name', '=' ,$m->get('movie'))->get();
            
            if($c==0)
            {
               $data->name=$m->get('movie');
               $data->parent_id='0';
               $data->label='main';
               if($data->save())
               {
                   $msg['success']=$m->get('movie')." Add Succesfully.";
               }
            }
            else
            {
                $msg['error']=$moviename[0]->name." Already.";
            }
        }
            return view('Admin/managemovietype')->with($msg);
    }
    public function manage_moviesub(Request $s) 
   {
        $msg = [];
        $data=new Movie_type();
        if($s->get('add'))
        {
            $this->validate($s, [
                "movie"=>"required|regex:/^[a-zA-Z ]+$/",
                "movietype"=>"required"
            ],
                    [
                       'movietype.required'=>'Please Select Movie Type.',
                       'movie.required'=>'Please Enter movie.',
                       'movie.regex'=>'Please Enter Valid Movie.',
                        
                    ]);
            
           $c= DB::table('tbl_movie_type')->where('name', '=' ,$s->get('movietype'))->count();
           $moviename= DB::table('tbl_movie_type')->select('name')->where('name', '=' ,$s->get('movie'))->get();
           
           if($c==0)
           {               
                   $data->name=$s->get('movie');
                   $data->parent_id=$s->get('movietype');
                   $data->label='sub';
                   if($data->save())
                   {
                       
                       $msg['success']=$s->get('movie')." Add Succesfully.";
                   }
            }
            else
            {
                $msg['error']=$moviename[0]->name." Already.";
            }
        }
        return view('Admin/moviesubtype', compact('msg'));
    }
    
    public function manage_casttype(Request $c) 
    {
        $msg = [];
        $data=new Cast_type();
        if($c->get('add'))
        {
            $this->validate($c, [
                "cast"=>"required|regex:/^[a-zA-Z ]+$/"
            ],
            [
               'cast.required'=>'Please Enter Cast',
               'cast.regex'=>'Please Enter Valid Cast ',

             ]);
            
           $count= DB::table('tbl_cast_type')->where('type', '=' ,$c->get('cast'))->count();
           if($count==0)
           {
                   $data->type=$c->get('cast');
                  
                   if($data->save())
                   {
                       $msg['success']=$c->get('cast')." Add Succesfully.";
                   }
            }
            else
             {
                   $msg['error']=$c->get('cast')." Already.";
            }
        }
            return view('Admin/managecasttype')->with($msg);
    }
    
    public function manage_cast(Request $c) 
    {
        if($c->get('add'))
        {
            $this->validate($c, [
                "cast"=>"required|regex:/^[a-zA-Z ]+$/",
                "casttype"=>"required",
                "photo"=>"required|image|mimes:jpeg,png,jpg|max:2048",
                
            ],[
                'casttype.required'=>'Please Select State.',
                'cast.required'=>'Please Enter Cast.',
                'cast.regex'=>'Please Enter Valid Cast. ',
                
                'photo.required'=>'Please Select Photo.',
                'photo.image'=>'Please Select only image.',
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',
                'msg.required'=>'Please Enter Description.',
             ]);
            $data = new Caste;  
            
            $image=$c->file('photo');
            
            
            $ex=$image->getClientOriginalExtension();
            $size=$image->getClientSize();
            $max=DB::table('tbl_caste')->max('cast_id');
            if($max!="")
            {
                $name="photo_$max.".$ex;
            }
            else
            {
                $name="photo_0.".$ex;
            }
            $serverpath="public/Admin_assets/cast/";
            $image->move($serverpath,$name);
            $data->name = $c->get('cast');
            $data->profile =$serverpath.$name;
            $data->description = $c->get('msg');
            $data->type_id =$c->get('casttype');
            if($data->save())
            {
                $msg['success']=" Add Succesfully.";
            }
                        
        }
        return view('Admin/managecast', compact('msg'));
    }
    
    public function manage_banner(Request $f) 
    {
        if($f->get('upload'))
        {
           if($_FILES['photo']['name'][0]!="")
           {
               $c= count($f->file('photo'));
               for($i=0;$i<$c;$i++)
               {
                  $image=$f->file('photo')[$i];
                  $ex=$image->getClientOriginalExtension();
                 
                  if($ex=="jpg"||$ex=="jpeg"||$ex=="png")
                  {
                       
                       $size=$image->getClientSize();
                       $size=(($size/1024)/1024);
                       if($size<=2)
                       {
                            $max=DB::table('tbl_banner')->max('banner_id');
                             
                            if($max!="")
                            {
                                $name="photo_$max.".$ex;
                            }
                            else
                            {
                             
                                $name="photo_0.".$ex;
                            }
                            $data = new Banner();
                           $serverpath="public/Admin_assets/banner/";
                                             
                            $image->move($serverpath,$name);
                            $data->path = $serverpath.$name;
                           
                            if($data->save())
                            {
                               $msg['success']=" Add Succesfully.";
                               
                            }
                           
                            
                       }
                  }
               }
               
           }
        }
        return view('Admin/moviebanner', compact('msg'));
    }
    
    public function manage_theater(Request $t) 
    {
        if($t->get('add'))
        {
            $this->validate($t, [
                
                "name"=>"required|regex:/^[a-zA-Z ]+$/",
                "photo"=>"required|image|mimes:jpeg,png,jpg|max:2048",
                "email" => "required|email",
                'mobile' => "required|numeric|digits:10",
               "city"=>"required",
                "state"=>"required",
                "address"=>"required",
                "map"=>"required",
                
            ],[
                'name.required'=>  "Enter The Name.",
                'name.regex'=>'Please Enter Valid Name. ',
                 'photo.required'=>'Please Select Photo.',
                'photo.image'=>'Please Select only image.',
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',
                 'email.required'=>  "Enter The Email.",
                 'email.email'=>  "Enter The Valid Email.",
              'mobile.required'=>  "Enter Mobile Number",
               'mobile.numeric' =>  "Enter Only Number",
               'mobile.digits'  =>  "Enter Only 10 Digit",
               'state.required' =>  "Please Select State.",
               'address.required' =>  "Please Enter The Address.",
               'city.required'  =>  "Please Select city.",
               'map.required'  =>  "Please Enter The Map Url.",
              
             ]);
             $data = new Theater;  
            
            $image=$t->file('photo');
            $ex=$image->getClientOriginalExtension();
            $size=$image->getClientSize();
            $max=DB::table('tbl_theater')->max('theater_id');
            if($max!="")
            {
                $name="photo_$max.".$ex;
            }
            else
            {
                $name="photo_0.".$ex;
            }
            $serverpath="public/Admin_assets/theater/";
            $image->move($serverpath,$name);
            $data->name = $t->get('name');
            $data->location_id = $t->get('city');
            $data->email = $t->get('email');
            $data->address = $t->get('address');
            $data->contact = $t->get('mobile');
            $data->logo =$serverpath.$name;
            $data->map =$t->get('map');
            if($data->save())
            {
                $msg['success']=" Add Succesfully.";
            }
            
        }
        return view('Admin/managetheater', compact('msg'));
    }
    
    public function manage_screen(Request $t)
    {
        
        if($t->get('add'))
        {
            $this->validate($t, [
                
                "theater"=>"required",
                "screen"=>"required",
                "seat"=>"required|regex:/^[0-9]+$/",
                "dimension"=>"required",
                "sound"=>"required",
                "photo"=>"required|image|mimes:jpeg,png,jpg|max:2048",
               
                
            ],[
                'theater.required'=>  "Enter The Theater Name.",
               
                'screen.required'=>  "Enter The Theater Name.",
                'seat.required'=>  "Enter The Seat Number.",
                'seat.regex'=>'Please Enter Valid Seat Number. ',
                'dimension.required'=>'Enter The Dimension. ',
                'sound.required'=>'Enter The Sound. ',
                 'photo.required'=>'Please Select Photo.',
                'photo.image'=>'Please Select only image.',
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',
                            
             ]);
            if(session()->get("setvalue")!="")
            {
            $data = new screen();  
            
            $image=$t->file('photo');
            $ex=$image->getClientOriginalExtension();
            $size=$image->getClientSize();
            $max=DB::table('tbl_screen')->max('screen_id')+1;
            $name="photo_$max.".$ex;
            $serverpath="public/Admin_assets/moviepicture/";
            $data->picture =$serverpath.$name;
            $image->move($serverpath,$name);
            $data->theater_id = $t->get('theater');
            $data->name = $t->get('screen');
            $data->no_of_seat = $t->get('seat');
            $data->screen_diamention = $t->get('dimension');
            $data->sound = $t->get('sound');
            $data->status=1;
            $data->pattern=session()->get("setvalue");
            
            $data->save();
            session()->forget("setvalue");
            }
            else
            {
                $msg['error']="Select Screen Patten";
            }
            
        }
        return view('Admin/managescreen', compact('msg'));
    }
            
    public function manage_movie(Request $r) 
    {
        $msg=[];
        if($r->add)
        {
          $this->validate($r, [
                "movie"=>"required|regex:/^[a-zA-Z ]+$/",
                "movietype"=>"required",
                "moviesub"=>"required",
                "rdate"=>"required|date",
                "duration"=>"required",
                "message"=>"required",
            ],
                    [
                       'movietype.required'=>'Please Select Movie Type.',
                       'moviesub.required'=>'Please Select Movie Sub Type.',
                       'movie.required'=>'Please Enter movie.',
                       'rdate.required'=>'Please Enter Date.',
                       'rdate.date'=>'Please Enter Valid Date.',
                       'duration.required'=>'Please Enter Duration.',
                       'message.required'=>'Please Enter Description.',
                       'movie.regex'=>'Please Enter Valid Movie.',
                        
                    ]);
          if(session()->get("movie_id"))
          {
             $table= Movie::find(session()->get("movie_id"));
          }
          else
          {
          $table=new Movie();
          }
          $table->type_id=$r->moviesub;
          $table->name=$r->movie;
          $table->relese_date=$r->rdate;
          $table->duration=$r->duration;
          $table->overview=$r->message;
          $table->save();
          session()->put("movie_id",$table->movie_id);
          session()->put("pages",2);
          
        }
        elseif($r->prev1)
        {
            $table= Movie::find(session()->get("movie_id"));
            $table->cast_type_id="";
           $table->cast_id="";
           $table->save();
            session()->put("pages",1);
        }
        elseif($r->next1)
        {
            $ct=DB::table("tbl_cast_type")->get();
            $table= Movie::find(session()->get("movie_id"));
            $cast_type_id="";
            $i=0;
           $table->cast_type_id="";
           $table->cast_id="";
            foreach ($ct as $one)
            {
                if($r->get($one->cast_type_id)!="")
                {
                    if($table->cast_type_id=="")
                    {
                        $table->cast_type_id=$one->cast_type_id;
                    }
                    else
                    {
                     $table->cast_type_id=$table->cast_type_id.",".$one->cast_type_id;
                    }
                    if($table->cast_id=="")
                    {
                        $table->cast_id=implode(",", $r->get($one->cast_type_id));
                    }
                    else 
                    {
                        $table->cast_id=$table->cast_id."|".implode(",", $r->get($one->cast_type_id));
                    }
                    
                }
                
            }
            $table->save();
            session()->put("pages",3);
        }
        elseif($r->prev2)
        {
            
            session()->put("pages",2);
        }
        elseif($r->next2)
        {
             $this->validate($r, [
                "trailer"=>"required",
                "wallpaper"=>"required",
                "song"=>"required",
            ],
                    [
                       'trailer.required'=>'Please Enter Trailer.',
                       'wallpaper.required'=>'Please Select Atlist One Wallpaper.',
                       'song.required'=>'Please Enter Song URL.',
                    ]);
                $max= Movie::find(session()->get("movie_id"));
                $pre=$max->name;
                 if($_FILES['wallpaper']['name'][0]!="")
                {
                     for($i=0;$i< count($r->file('wallpaper'));$i++)
                    {
                        $image=$r->file('wallpaper')[$i];
                        $ex=$image->getClientOriginalExtension();

                        if($ex=="jpg"||$ex=="jpeg"||$ex=="png")
                        {

                             $size=$image->getClientSize();
                             $size=(($size/1024)/1024);
                             if($size<=2)
                             {

                                $name=$pre.$i.".".$ex;
                                $serverpath="public/Admin_assets/movie/";
                                $image->move($serverpath,$name);
                                if($i==0)
                                {
                                 $max->poster=$serverpath.$name;
                                }
                                else
                                {$max->poster=$max->poster.",".$serverpath.$name;

                                }
                                  $max->trailer=$r->trailer;
                                    $max->songs=$r->song;
                                    $max->save();
                                    session()->forget("movie_id");
                                    session()->forget("pages");
                                 }
                        }

                    }
                }
                else
                {
                   $msg['abc']="Please Select Atlist One Wallpaper.";
                }
        }
        return view('Admin/managemovie')->with($msg);
    }
    public function showtime(Request $r)
    {
        
        if($r->add)
        {
            
             $this->validate($r, [
                "movietype"=>"required",
                 "moviesub"=>"required",
                 "movie"=>"required",
                 "sdate"=>"required",
                 "stime"=>"required",
                 "state"=>"required",
                 "city"=>"required",
                 "theater"=>"required",
                 "screen"=>"required",
                 "price"=>"required|regex:/^[0-9]+$/",
                 ],
                     [
                     "movietype.required"=>"Plaese Select Movie Type",
                     "moviesub.required"=>"Plaese Select Sub type",
                     "movie.required"=>"Plaese Select Movie",
                     "sdate.required"=>"Plaese Select date",
                     "stime.required"=>"Plaese Select time",
                     "state.required"=>"Plaese Select State",
                     "city.required"=>"Plaese Select City",
                     "theater.required"=>"Plaese Select Theater",
                     "screen.required"=>"Plaese Select  Screen",
                     "price.required"=>"Plaese Select  Screen",
                     "price.regex"=>"Plaese Enter Only Digit",
                 ]);
              $data = new Showtime();
              $data->theater_id = $r->get('theater');
              $data->screen_id = $r->get('screen');
              $data->movie_id = $r->get('movie');
              $data->date = $r->get('sdate');
              $data->time = $r->get('stime');
              $data->price = $r->get('price');

              if($data->save())
              {
                  $data['success']=" Add Succesfully.";
              }
        }
            
        return view('Admin/showtime',compact('data'));
    }
    public function manage_review() 
    {
        return view('Admin/managereview');
    }
   
    public function delete($action , $id) 
    {
        if($action == "state")
        {
            Location::destroy($id);
            return redirect('Manage-State');
        }
        
        if($action == "movie")
        {
            Movie_type::destroy($id);
            return redirect('Movie-Type');
        }
        
        if($action == "banner")
        {
            Banner::destroy($id);
            return redirect('Manage-Banner');
        }
        
        if($action == "cast")
        {
            
            $data = DB::table('tbl_caste')->select('profile')->where("cast_id","=",$id)->get();
            $path = $data[0]->profile;
            unlink($path);
            Caste::destroy($id);
            return redirect('Manage-Cast');
        }
        if($action == "casttype")
        {
            Cast_type::destroy($id);
            return redirect('Manage-Cast-Type');
        }
        
        if($action == "location")
        {
            Location::destroy($id);
            return redirect('Manage-City');
        }
       
        if($action == "movietype")
        {
            Movie_type::destroy($id);
            return redirect('Movie-Sub-Type');
        }
        
        if($action == "feedback")
        {
            Feedback::destroy($id);
            return redirect('Manage-Feedback');
        }
        if($action == "support")
        {
            Support::destroy($id);
            return redirect('Manage-Support');
        }
        if($action == "subscribe")
        {
            Subscriber::destroy($id);
            return redirect('Manage-Email-Subscribe');
        }
        if($action == "theater")
        {
            $data = DB::table('tbl_theater')->select('logo')->where("theater_id","=",$id)->get();
            $path = $data[0]->logo;
            unlink($path);
            Theater::destroy($id);
            return redirect('Manage-Theater');
        }
        if($action == "showtime")
        {
            Showtime::destroy($id);
            return redirect('Manage-Show-Time');
        }
    }
    public function managebooking(Request $p)
    {
        if($p->get('add'))
        {
            $this->validate($p, [
             "promo"=>"required",
             "price"=>"required",
             "bill"=>"required", ],
             [
             "promo.required"=>"Plaese Enter Promo Code",
             "price.required"=>"Plaese Enter Promo Code Price",
             "bill.required"=>"Plaese Enter Promo Code Minimum Proce",
            ]);
            $data=new Promocode();
            $data->code=$p->get('promo');
            $data->price=$p->get('price');
            $data->minimum=$p->get('bill');
            $data->status="1";
            if($data->save())
            {
                $data['success']=" Add Succesfully.";
            }
           
            
        }
        return view('Admin/managebooking', compact('data'));
    }
    public function status(Request $r)
    {
       $table= Promocode::find($r->id);
       if($table->status==0)
       {
           $table->status=1;
       }
       else
       {
           $table->status=0;
       }
       $table->save();
        $code=DB::table('tbl_promocode')->get();

        
        $i=0;
        foreach($code as $val)
        {
            ?>
        
        <tr>
            <td><?php echo ++$i;  ?></td>
            <td align="center"><?php echo $val->code;  ?></td>
            <td align="center"><?php echo $val->price;  ?></td>
            <td align="center"><?php echo $val->minimum;  ?></td>
        <?php
        if($val->status==1)
        {
        ?>
        <td><i class="fa fa-toggle-on" style="font-size: 14px;color:#0071cc;cursor: pointer" onclick="chnage('promo','<?php echo $val->promocode_id;  ?>','<?php echo csrf_token();  ?>')" title="Deactive"/></td>
         <?php
         }
        else
        {
         ?>

         <td><i class="fa fa-toggle-off" style="font-size: 14px;color:#0071cc;cursor: pointer" onclick="chnage('promo','<?php echo $val->promocode_id;  ?>','<?php echo csrf_token();  ?>')" title="Active"/></td>
        <?php
         }
        ?>

     </tr>
     <?php
        }
    }
    public function viewticket()
    {
        return view('Admin/viewticket');
        
    }
    
}
