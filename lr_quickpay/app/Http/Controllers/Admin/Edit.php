<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Crypt;
use App\model\Location;
use App\model\Movie_type;
use App\model\Theater;
use App\model\Cast_type;
use App\model\Caste;

class Edit extends Controller
{
    public function state(Request $s , $id)
    {
        $data['state']=Location::find($id);
        if($s->get('update'))
        {
            $this->validate($s, [
                "state"=>"required|regex:/^[a-zA-Z ]+$/"
            ],
                    [
                       'state.required'=>'Please Enter State.',
                       'state.regex'=>'Please Enter Valide State. ',
                    ]);
            
            $c= DB::table('tbl_location')->where('name', '=' ,$s->get('state'))->count();
            $statename= DB::table('tbl_location')->select('name')->where('name', '=' ,$s->get('state'))->get();
            
            if($c==0)
            {
               $data['state']->name=$s->get('state');
               if($data['state']->save())
               {
                   return redirect('Manage-State');
               }
            }
            else
             {
                $data['error']= $statename[0]->name. " Already Added";
            }
        }
            return view('Admin/managestate', compact('data'));
    }
    
    public function city(Request $s , $id)
    {
        $data=Location::find($id);
        
        if($s->get('update'))
        {
            $this->validate($s, [
                "city"=>"required|regex:/^[a-zA-Z ]+$/",
                "state"=>"required"
            ],
                    [
                       'state.required'=>'Please Enter State.',
                       'citye.required'=>'Please Enter City.',
                       'city.regex'=>'Please Enter Valide State. ',
                    ]);
            
            $c= DB::table('tbl_location')->where('name', '=' ,$s->get('city'))->count();
            $cityname= DB::table('tbl_location')->select('name')->where('name', '=' ,$s->get('city'))->get();
            
            if($c==0)
            {
               $data->name=$s->get('city');
               $data->parent_id=$s->get('state');
               $data->save();
               return redirect('Manage-City');
            }
            else
            {
              $data['error']= $cityname[0]->name. " Already Added";
            }
        }
            return view('Admin/managecity', compact('data'));
    }
        
    public function movie(Request $m , $id)
    {
        $data['movie']= Movie_type::find($id);
                  
        if($m->get('update'))
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
               $data['movie']->name=$m->get('movie');
               if($data['movie']->save())
               {
                   return redirect('Movie-Type');
               }
            }
            else
            {
                $data['error']= $moviename[0]->name. " Already Added.";
            }
        }        
            return view('Admin/managemovietype', compact('data'));
    }
           
    public function movietype(Request $mt ,$id)
    {
        $data= Movie_type::find($id);
        
        if($mt->get('update'))
        {
           $this->validate($mt, [
                "movie"=>"required|regex:/^[a-zA-Z ]+$/",
                "movietype"=>"required"
            ],
                    [
                       'movietype.required'=>'Please Select Movie Type.',
                       'movie.required'=>'Please Enter Movie.',
                       'movie.regex'=>'Please Enter Valide Movie. ',
                    ]);
           
            $c= DB::table('tbl_movie_type')->where('name', '=' ,$mt->get('movie'))->count();
            $moviename= DB::table('tbl_movie_type')->select('name')->where('name', '=' ,$mt->get('movie'))->get();
            
            if($c==0)
            {
                $data->name=$mt->get('movie');
                $data->parent_id=$mt->get('movietype');
                $data->save();
                return redirect('Movie-Sub-Type');
            }
            else
            {
                $data['error']= $moviename[0]->name. " Already Added.";
            }
        
        }
            return view('Admin/moviesubtype', compact('data'));
    }
    
    public function casttype(Request $c , $id)
   {
        $msg = [];
        $data['cast']=Cast_type::find($id);
        if($c->get('update'))
        {
            $this->validate($c, [
                "cast"=>"required|regex:/^[a-zA-Z ]+$/"
            ],[
               'cast.required'=>'Please Enter Cast',
               'cast.regex'=>'Please Enter Valide Cast',
                ]);
            
            $count= DB::table('tbl_cast_type')->where('type', '=' ,$c->get('cast'))->count();
            $castname= DB::table('tbl_cast_type')->select('type')->where('type', '=' ,$c->get('cast'))->get();
            if($count==0)
            {
               $data['cast']->type=$c->get('cast');
               if($data['cast']->save())
               {
                  return redirect('Manage-Cast-Type');
               }
            }
            else
            {
                   $data['error']= $castname[0]->type. " Already.";
            }
        }
            return view('Admin/managecasttype', compact('data'));
    }
    
    public function cast(Request $c , $id)
    {
        
        $data['cast']=Caste::find($id);
       
        if($c->get('update'))
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
            $count= DB::table('tbl_caste')->where('name', '=' ,$c->get('cast'))->count();
           
           
            if($count!=0)
            { 
             
                $filename= $data['cast']->profile;
                unlink($filename);  
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
                $data['cast']->name = $c->get('cast');
                $data['cast']->profile =$serverpath.$name;
                $data['cast']->description = $c->get('msg');
                $data['cast']->type_id =$c->get('casttype');
               if($data['cast']->save())
               {
                  return redirect('Manage-Cast');
               }
            }
            else
            {
                
                   $data['error']= " Already.";
            }
        }
        
    return view('Admin/managecast', compact('data'));
    }
    
    public function theater(Request $t , $id)
    {
        $data['theater']= Theater::find($id);
      
         
         if($t->get('update'))
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
            $filename= $data['theater']->logo;
             unlink($filename);  
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
            $data['theater']->name = $t->get('name');
            $data['theater']->location_id = $t->get('city');
            $data['theater']->email = $t->get('email');
            $data['theater']->address = $t->get('address');
            $data['theater']->contact = $t->get('mobile');
            $data['theater']->logo =$serverpath.$name;
            $data['theater']->map =$t->get('map');
            if($data['theater']->save())
            {
                 return redirect('Manage-Theater');
            }  
             else
            {
                   $data['error']= " Already.";
            }
        }
        return view('Admin/managetheater', compact('data'));
    }
    public function profile()
      {
        if($ch->get('save'))
         {
              $this->validate($ch, [

              "photo"=>"required|mimes:jpeg,png,jpg|max:2048",
            ],[
             
                'photo.required'=>'Please Select Photo.',
              
                'photo.mimes'=>'Please Select Only jpg or png or jpeg photo.',
                'photo.max'=>'Maximum 2 MB Size Photo Allowed',   
                ]);
              
              $data = new Login;  
            
            $image=$ch->file('photo');
            
            
            $ex=$image->getClientOriginalExtension();
            $size=$image->getClientSize();
            $max=DB::table('tbl_admin_login')->max('admin_id');
            if($max!="")
            {
                $name="photo_$max.".$ex;
            }
            else
            {
                $name="photo_0.".$ex;
            }
            $serverpath="public/Admin_assets/profile/";
            $image->move($serverpath,$name);            
            $data->path =$serverpath.$name;
            if($data->save())
            {
                $data['success']=" Add Succesfully.";
            }
         }
    }
}
