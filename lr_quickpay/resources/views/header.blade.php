  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo">
             <a href="{!! url('/') !!}" title="QuickPay - Pay Without Cash"><h1 style="color:#0071cc;margin-top: 4%; font-family: sans-serif"><b style="font-family: sans-serif">Q</b>uick<b>P</b>ay</h1></a>
          </div><!-- Logo end -->
        </div>
        
          
          
          
          <div class="header-column justify-content-end">
        
          <!-- Primary Navigation
          ============================================= primary-menu-->
        <nav class="navbar navbar-expand-lg primary-menu ">
            <div id="header-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav" style="font-size: 13px;">
                      <?php
                      if(session()->get('user'))
                      {
                        $data = DB::table('tbl_registration')->where('register_id','=',session()->get('user'))->get();
                        
                        $name=$data[0]->name;
                     
                      }
//         ?>
                <li class="dropdown active"> <a class="dropdown-toggle" href="{!! url('/') !!}">Home</a></li>
                <li class="dropdown"> <a class="dropdown-toggle" href="{!! url('Book-Ticket') !!}">Booking Movie</a></li>
                <li class="dropdown"> <a class="dropdown-toggle" href="{!! url('Contact-Us') !!}">Contact Us<i class="arrow"></i></a></li>
                <?php 
                if(session()->get('user'))
                {
                    
                    if($name=="")
                    {
                   ?> 
                     <li class="dropdown"> <a class="dropdown-toggle" href="{!! url('User-Profile') !!}">Hi, Welcome User<i class="arrow"></i></a></li>
                <?php
                    }
                    else
                    {
                  ?>      
                    <li class="dropdown"> <a class="dropdown-toggle" href="{!! url('User-Profile') !!}">Hi, <?php echo $name;  ?><i class="arrow"></i></a></li>
                <?php
                    }
                ?>
                <!--<li class="dropdown"> <a class="dropdown-toggle" href="{!! url('User-Profile') !!}">Hi, <?php echo $name;  ?><i class="arrow"></i></a></li>-->
                <li class="dropdown login-signup ml-lg-2"> <a class="dropdown-toggle pl-lg-4 pr-0" href="{!! url('Logout') !!}">Logout<i class="arrow"></i></a></li>
                
                <?php 
                }
                else
                {
                ?>
                <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0" data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Login / Register <span class="d-none d-lg-inline-block"><i class="fas fa-user" style="margin-top: 8px;"></i></span></a></li>
             <?php
                }
                ?>
               </ul>
            </div>
          </nav><!-- Primary Navigation end --> 
          
        </div> 
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header>
  
  <!-- Header end -->
  
  <!--login model----->
<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-sm-3">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
                    <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Register</a> </li>
                </ul>
                <div class="tab-content pt-4">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        
                            {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','id'=>'loginForm'   ]) !!}
                            <div class="form-group">
                                
                                 {!! Form::email('email', request()->cookie('user_email'),array('placeholder'=>"Email Id" ,'id'=>'lemail' ,'class'=>'form-control', 'required'=>'' , 'pattern'=>'/^[a-z ]+$/'))  !!}
                            </div>
                            
                            <div class="form-group">
                               
                               <input type="password" name="password" id="lpassword" placeholder="Password" class="form-control" value="{!!request()->cookie('user_pass')!!}"/></label>
                           <!--<label style="float: right"> <input type="checkbox" onclick="myFunction()">Show Password</label>-->
                            <i class="fas fa-eye" onclick="myFunction()" style="margin-left: 330px;margin-top: -30px;cursor: pointer"></i>
                            </div>
                            <br/>
                            <div class="row mb-4">
                                <div class="col-sm">
                                    @if(request()->cookie('user_email'))
                                       <div class="form-check custom-control custom-checkbox">
                                           <input id="remember-me" name="svp" class="custom-control-input" value="" checked="" type="checkbox">
                                       
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                    @else
                                       <div class="form-check custom-control custom-checkbox">
                                        <input id="remember-me" name="svp" class="custom-control-input" value=""  onclick="check()"  type="checkbox">
                                       
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                    @endif
                                 
                                </div>
                                <div class="col-sm text-right"> <a class="justify-content-en" onclick="forgot()" >Forgot Password ?</a> </div>
                            </div>
                            
                             <input type="button" id="btn" onclick="login()"  name="register" class="btn btn-primary btn-block" value="Login" />
                             <center><p id="lmsg" style="margin-top: 10px;color:red;"></p></center>
                             <center><p id="emsg" style="margin-top: 10px;color:red;"></p></center>
                         {!! Form::close()!!}
<!--                         <div class="d-flex align-items-center my-4">
                            <hr class="flex-grow-1">
                            <span class="mx-2">OR</span>
                            <hr class="flex-grow-1">
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
                            </div>
                        </div>-->
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                       
                            {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','id'=>'signup'   ]) !!}
                            <div class="form-group">
                                 {!! Form::email('email','',array('placeholder'=>"Email Id" ,'id'=>'email' ,'class'=>'form-control', 'required'=>'' , 'pattern'=>'/^[a-z ]+$/'))  !!}
                            <p id="emailmsg" style="color:red"></p>
                            </div>
                           
                            <div class="form-group">
                                
                            {!! Form::text('mobile','',['placeholder'=>'Mobile Number','class'=>'form-control','id'=>'mobile'])!!}
                             <p id="mobilemsg" style="color:red"></p>
                            </div>
                            <div>
                                <p style="margin-left: 1%; font-size: 12px; float: right;cursor: pointer" onclick="autopass();" title="Click Here To Generate Password">Auto Generate Password</p>
                            </div>
                            <div class="form-group">
                                {!! Form::password('password',['placeholder'=>'Password','class'=>'form-control','id'=>'password']) !!}
                                <i class="fas fa-eye" onclick="myFunction()" style="margin-left: 330px;margin-top: -30px;cursor: pointer"></i>
                                 <p id="passmsg" style="color:red"></p>
                            </div>
                            <div class="form-group">
                               {!! Form::password('repassword',['placeholder'=>'Re-Type Password','class'=>'form-control','id'=>'cpassword']) !!}
                                <p id="cpassmsg" style="color:red"></p>
                            </div>
                           
                            <br/>

                                <input type="button" id="btn" onclick="insert()"  name="register" class="btn btn-primary btn-block" value="Signup" />
                                <center><p id="done" style="margin-top: 10px;color:green;"></p></center>
                            {!! Form::close()!!}
                            
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script>
      function myFunction() {
  var x = document.getElementById("lpassword");
  var y = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
      </script>

  