<html lang="en">
    
    <!---header---->
        @include('headerlink')
    <!---header end---->
     
 <body>
     <!----header--->
        @include('header')
     <!----header- end-->

      <!---profile -->
      
     <section class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>My Profile</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">My Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
       <?php
        
                      if(session()->get('user'))
                      {
                        $data = DB::table('tbl_registration')->where('register_id','=',session()->get('user'))->get();
                       
                      
                       $time=$data[0]->last_login;
                       $rdate=$data[0]->register_date;
                       if($data[0]->location_id==0)
                       {
                       $l_id=$data[0]->location_id;
                      $da=DB::select("select st.location_id as state,c.location_id as city from tbl_location as st,tbl_location as c where c.parent_id=st.location_id and c.location_id=$l_id");
                       }
                      }
                      
         ?>
      
    <div id="content">
    <div class="container">
      <div class="bg-light shadow-md rounded p-4">
        <div class="row">
          <div class="col-md-3">
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
              <!--<li class="nav-item"> <a class="nav-link" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="false">My Dashboeard</a> </li>-->
              <li class="nav-item"> <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profiletab" role="tab" aria-controls="profiletab" aria-selected="true">My Profile</a> </li>
              <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false">Change Password</a> </li>
              <li class="nav-item"> <a class="nav-link" id="third-tab" data-toggle="tab" href="#thirdTab" role="tab" aria-controls="thirdTab" aria-selected="false">My Recharge History</a> </li>
              <!--<li class="nav-item"> <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourthTab" role="tab" aria-controls="fourthTab" aria-selected="false">Cards</a> </li>-->
              <li class="nav-item"> <a class="nav-link" id="five-tab" data-toggle="tab" href="#fiveTab" role="tab" aria-controls="fiveTab" aria-selected="false">My Ticket</a> </li>
            </ul>
          </div>
          <div class="col-md-9">
            <div class="tab-content my-3" id="myTabContentVertical">
              <div class="tab-pane fade  " id="firstTab" role="tabpanel" aria-labelledby="first-tab">
                <div class="row">
                  <div class="col-lg-8">
                    <h4 class="mb-4">Hi</h4>
                    
                  </div>
                  
                </div>
              </div>
                   <div class="tab-pane fade show active" id="profiletab" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                   
                  <div class="col-lg-7">
                    <h4 class="mb-4">Personal Information</h4>
                    
                    {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                        
                     
                      <div class="form-group">
                        <label for="fullName">Full Name</label>
                          {!! Form::text('fullname',$data[0]->name,array('placeholder'=>"Enter Name" ,'id'=>'name', 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                      </div>
                      <div class="form-group">
                        <label for="mobileNumber">Mobile Number</label>
                          {!! Form::text('mobile',$data[0]->contact_no,array('placeholder'=>"Enter Mobile Number" ,'id'=>'mobile' ,'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[0-9]{10}+$'))  !!}
                      </div>
                      <div class="form-group">
                        <label for="emailID">Email ID</label>
                         {!! Form::text('email',$data[0]->email,array('placeholder'=>"Enter Email" ,'readonly', 'id'=>'email','class'=>'form-control', 'required'=>'' , 'pattern'=>'^[]+$'))  !!}
                      </div>
                         <label for="fullName">Gender</label>
                         <div class="mb-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="male" name="profile" onclick="mcheck();" class="custom-control-input" value=""<?php
                            if($data[0]->gender=="male")
                            {
                                echo "checked";
                            }
                            ?>  required="" type="radio">
                          <label class="custom-control-label" for="male">Male</label>
                         
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="female" name="profile" onclick="fcheck();" <?php
                            if($data[0]->gender=="female")
                            {
                                echo "checked";
                            }
                            ?> class="custom-control-input" required="" type="radio">
                          <label class="custom-control-label" for="female">Female</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="birthDate">Date of Birth</label>
                        
                        <input id="birthdate"  value="<?php echo $data[0]->dob; ?>" type="date" class="form-control" required="" placeholder="Date of Birth">
                       
                      </div>
                      <div class="form-group">
                        <label for="inputCountry">State</label>
                        <?php
                            $data=DB::table("tbl_location")->where("label","=","state")->get();
                            if(isset($da[0]->city)){
                            $data1=DB::table("tbl_location")->where("location_id","=",$da[0]->city)->get();
                            }
                           
                            $op['']="Select State Name";
                            foreach ($data as $v)
                            {
                                $op[$v->location_id]=$v->name;
                            }
                            ?>
                        @if(isset($da[0]->city))
                        
                            {!! Form::select('state',$op,$data[0]->location_id,["class"=>"form-control",'id'=>'state','onchange'=>"set_combo('city',this.value,'".csrf_token()."')"]) !!}
                            @else
                            {!! Form::select('state',$op,"",["class"=>"form-control",'id'=>'state','onchange'=>"set_combo('city',this.value,'".csrf_token()."')"]) !!}
                     @endif
                      </div>
                         <div class="form-group">
                       <label for="form_name">City</label>
                    @if(isset($da[0]->city))
                                <?php
                                $cdata=DB::table("tbl_location")->where([["label","=","city"],["parent_id","=",$da[0]->state]])->get();
                                $cop['']="Select City Name";
                                foreach ($cdata as $v)
                                {
                                    $cop[$v->location_id]=$v->name;
                                }
                                ?>
                                {!! Form::select('city',$cop,$da[0]->city,['id'=>'city',"class"=>"form-control"]) !!}

                                @else
                              {!! Form::select('city',[""=>'Select City'],$data[0]->location_id,['id'=>'city',"class"=>"form-control"]) !!}
                              @endif
                                 <p class="error">{{ $errors->first('city')  }}</p>
                                <div class="help-block with-errors"></div>
                            </div>
                                                        
                        
                     
                        <input type="button"  onclick="pupdate()"  name="update" class="btn btn-primary" value="Update Now" />
                    </form>
                  </div>
                  <div class="col-lg-5 mt-4 mt-lg-0 ">
                      
                    <div class="card bg-light-3 p-3">
                        
                        <label><b>Last Login :</b> <?php echo date('d-m-Y h:i:s' ,strtotime($time)); ?></label>
                        <label><b>Register Date :</b> <?php echo date('d-m-Y h:i:s' ,strtotime($rdate)); ; ?></label>
                    </div>
                      {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                      <div>
                         {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control','hidden']) !!}
                         <?php
                        $data = DB::table('tbl_registration')->where('register_id','=',session()->get('user'))->get();
                        

                        ?>
                          @if($data[0]->path!="")
                                <img src="{{asset($data[0]->path)}}" id="pic" class="avatar avatar-xl avatar-bordered" style="border-radius:50%;position: absolute; margin-left: 80px;margin-top: 20px;" width="155px" height="150px" alt="Avatar">
                             @else   
                             <img src="{{asset('public/Admin_assets/images/user2.jpeg')}}" id="pic" class="avatar avatar-xl avatar-bordered" style="border-radius:50%;position: absolute; margin-left: 80px;margin-top: 20px;" width="155px" height="150px" alt="Avatar">
                             @endif
                        
                            <label title="Choose Profile " for="photo-btn" style="margin-left: 185px; margin-top: 125px; z-index: 1;position: relative;" >
                                 <div  style="background-color: #0071cc;width: 40px;height: 40px;border-radius: 50%;"><i class="fas fa-camera" style="font-size: 20px;color:white;margin: 9px"></i></div>
                            
                            </label>
                          <p class="error" style="color: red">{{ $errors->first('photo')  }}</p>
                      </div>
                      </br>
                            <div class="col-md-12">
                                <button type="submit" name="change" value="btn" class="btn btn-send"  style="background: #0071cc;color:white;width: 100%;">Save Profile</button>
                               <!--<center><p id="pupdate" style="margin-top: 10px;color:green;"></p></center>-->
                                                                                             
                       </div>
                  {!! Form::close() !!}
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">
                <div class="row">
                  <div class="col-lg-8">
                    <h4 class="mb-4">Change Password</h4>
                    <form id="changePassword" novalidate="" method="post">
                       
                      <div class="form-group">
                          {!! Form::password('epassword',['placeholder'=>'Existing Password','class'=>'form-control','id'=>'epassword']) !!}
                      </div>
                      <div class="form-group">
                       {!! Form::password('npassword',['placeholder'=>'New Password','class'=>'form-control','id'=>'npassword']) !!}
                      </div>
                      <div class="form-group">
                         {!! Form::password('rpassword',['placeholder'=>'Confirm Password','class'=>'form-control','id'=>'rpassword']) !!}
                      </div>
                        <input class="btn btn-primary" type="button"  onclick="myfunction();" value="Change Password" name="change">
                       
                         <div class="form-group">
                           <p id="pmsg" name="pmsg" style="margin-top: 10px;color:red"></p>
                      </div>
                    </form>
                    @if( isset($data['error']) ) 
                    <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 20px;margin-left: 15px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Oops!</strong> {!! $data['error'] !!}
                    </div> 
                   @endif
                   {!! Form::close() !!}
                  </div>
                 
                </div>
              </div>
                <?php
                $ch = curl_init();
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_URL, 'https://www.pay2all.in/web-api/get-provider?api_token=TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb');
                        $result = curl_exec($ch);
                        curl_close($ch);
                        $obj = json_decode($result);
                        $op = array();
                        $providers = $obj->providers;
                        
//                         $providers[2]->provider_name;
                          foreach ($providers as $key => $value) 
                        {
                            if($value->service == "Mobile Recharge")
                            {
                                //echo $value->provider_name."<br>";
                                $op[$value->provider_id] = $value->provider_name;
                               
                           }
                        }
//                      $d=DB::table("tbl_recharge_transaction")->where("register_id","=", session()->get("user"))->get();
                        $rid=session()->get("user");
                      $d =DB::select("select * from tbl_recharge_transaction  where register_id=$rid order by transaction_id desc");
                     $c= count($d);
                  
                ?>
              <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="third-tab">
                <h4 class="mb-4">My Recharge History</h4>
                <div class="table-responsive-lg">
                  <table class="table table-hover border">
                    <tbody>
                      
                        
                            <?php
                        if($c!=0)
                        {
                            foreach ($providers as $k=>$v) 
                            {
                                foreach($d as $a)
                                {
                                    if($v->provider_id==$a->operator)
                                    {
                               ?>  
                            <tr> 
                                <td class="text-center align-middle"><img class=" rounded bg-light" src="<?php echo $v->provider_image; ?>" alt=""></td>
                                <td class="text-center align-middle"><?php echo $a->number; ?></td>
                                <td class="text-center align-middle"><?php echo $v->provider_name; ?></td> 
                                <td class="text-center align-middle"><?php echo $a->date; ?></td> 
                                <td class="text-center align-middle"><?php echo $a->amount; ?></td> 
                                <td class="text-center align-middle">
                                    <?php
                                    if($a->status == "success")
                                    {
                                    echo "<p  style='color:green;margin-top: 17px;'>$a->status</p>"; 
                                    
                                    }
                                    elseif($a->status == "failure")
                                    {
                                        echo "<p  style='color:red;margin-top: 17px;'>$a->status</p>"; 
                                    }
                                    
                                    ?></td> 
                                <td>Transaction Id  : <?php echo $a->pay_id ?></td>
                              </tr>
                                 <!--<a class="btn btn-sm btn-outline-primary shadow-none" href="{!!url('/Home/') !!}">Recharge Now</a>-->
                                  <!--<button class="btn btn-sm btn-outline-secondary shadow-none ml-1" type="submit" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></button></div></td>-->
                        <?php
                                    }
                                }
                           }
                        }
                        else {
                           ?>
                                    <tr>
                                        <td style="padding: 70px;"><h5 style="color:#e5e7e9;text-align: center">Not Recharge Add.</h5></td>
                                    </tr>        
                       <?php             
                        }
                            ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="fourthTab" role="tabpanel" aria-labelledby="fourth-tab">
                <div class="row">
                  <div class="col-lg-5">
                    <h4 class="mb-4">Your Saved Cards</h4>
                    <div id="savedCard" class="bg-light-4 rounded p-3 mb-4 mb-lg-0">
                      <h4 class="mb-3">XXXX-XXXX-XXXX-7248</h4>
                      <p>Expiry Date<br>
                        <small>07/2029</small></p>
                      <p class="d-flex m-0"> 
                      <a class="mr-2" href="#"><i class="fas fa-edit"></i> Edit</a> 
                      <a href="#"><i class="fas fa-minus-circle"></i> Remove</a>
                      <img class="ml-auto" src="{{asset('public/assets/image/payment/visa.png')}}" alt="visa" title="">
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <h4>Add New Credit/Debit Card</h4>
                    <p>For experience a faster checkout experience</p>
                    <form id="payment" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" data-bv-field="cardnumber" id="cardNumber" required="" placeholder="Card Number">
                      </div>
                      <div class="form-row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <select class="custom-select" required="">
                              <option value="">Expiry Month</option>
                              <option>January</option>
                              <option>February</option>
                              <option>March</option>
                              <option>April</option>
                              <option>May</option>
                              <option>June</option>
                              <option>July</option>
                              <option>August</option>
                              <option>September</option>
                              <option>October</option>
                              <option>November</option>
                              <option>December</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <select class="custom-select" required="">
                              <option value="">Expiry Year</option>
                              <option>2018</option>
                              <option>2019</option>
                              <option>2020</option>
                              <option>2021</option>
                              <option>2022</option>
                              <option>2023</option>
                              <option>2024</option>
                              <option>2025</option>
                              <option>2026</option>
                              <option>2027</option>
                              <option>2028</option>
                              <option>2029</option>
                              <option>2030</option>
                              <option>2031</option>
                              <option>2032</option>
                              <option>2033</option>
                              <option>2034</option>
                         
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" data-bv-field="cvvnumber" id="cvvNumber" required="" placeholder="CVV Number">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" data-bv-field="cardholdername" id="cardHolderName" required="" placeholder="Card Holder Name">
                      </div>
                      <button class="btn btn-primary" type="submit">Add Card</button>
                    </form>
                  </div>
                </div>
              </div>
              
              
                 <div class="tab-pane fade" id="fiveTab" role="tabpanel" aria-labelledby="five-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb-4">My Ticket</h4>
                
                            <?php
                           
                                $rid=session()->get("user");
                                $t=DB::select("select t.name as theater, b.seat_no as seat,b.no_of_seat as total,b.booking_id as book_id, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s,tbl_booking as b, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = b.time_id and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id and b.register_id =$rid order by b.booking_id desc" );
                               $ct =count($t);
                               
                            if($ct!=0) 
                            {    
                                foreach($t as $tt)
                                {
                                    ?>
                                        <div id="myticket" class=" rounded p-3 mb-4 mb-lg-0" style="background:white;border: 1px solid #e3e7e9;width:390px;margin-right: 10px; margin-top: 10px;height: 230px;float:left; border-radius:10px; " class="col-md-6" >
                                            <div style="padding: 0px;im">
                                            <div style="display: inline-block;float: left"><img class="ml-auto" src="{{ asset($tt->poster) }}" style="margin-top: 15px;"  width="75px" height="85px" alt="visa" title=""></div>
                                            <div style="display: inline-block;"><p style="margin-top: 10px;margin-left: 10px;letter-spacing: 0.2"><b>{{$tt->movie}}</b></p>
                                                <div style="margin-top: -21px;"><p style="margin-top: 10px;margin-left: 10px;letter-spacing: 0.2;display: inline-block;">{!! date('D, d-M',strtotime($tt->time)) !!}</p>
                                                       <p style="margin-left: 10px;letter-spacing: 0.2;display: inline-block;">{!! date('h:i A',strtotime($tt->time)) !!}</p></div>
                                                       <div style="margin-top: -15px;"><p style="margin-left: 10px;letter-spacing: 0.2;">{!! $tt->theater !!}</p></div>
                                            </div>
                                             </div>
                                            <hr/>
                                            <div >
                                                <div style="display: inline-block;float: left" class="text-center col-md-2">
                                                    <h2>{{ $tt->total }}</h2>
                                                    <p>Ticket</p>
                                                </div>
                                                <div  style="display: inline-block"  class="col-md-10">
                                                    <p>Exclusive : {{ $tt->seat }}</p>
                                                </div>
                                            </div>
                                        </div>
                     <?php
                            
                                }
                            }
                            else {
                           ?>
                                <div style="padding: 70px;border: 1px solid #e5e7e9;">
                                    <h5 style="color:#e5e7e9;text-align: center">Not Ticket Generated</h5>
                                </div>
                       <?php             
                        }
                        
//                $q = "SELECT t.name as theater, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = 140 and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id";
//                $t=DB::select("SELECT t.name as theater, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = 140 and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id");
                 ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
      <!---profile end-->

     <!----footer--->
         @include('footer')
     <!---footer-end---->
 
     
     <!----footer link--->
        @include('footerlink')
     <!----footer link- end-->
 </body>
 <script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#pic').attr('src', e.target.result); 
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#photo-btn").change(function() {
  readURL(this);
});
</script>

</html>
