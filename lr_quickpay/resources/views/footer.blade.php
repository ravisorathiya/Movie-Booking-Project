<footer id="footer">
    <section class="section bg-light shadow-md pt-4 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon"> <i class="fa fa-lock"></i> </div>
                        <h4>100% Secure Payments</h4>
                        <p>Moving your card details to a <br/>much more secured place.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon"> <i class="fa fa-thumbs-up"></i> </div>
                        <h4>Trust pay</h4>
                        <p>100% Payment Protection. Easy Return Policy.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon"> <i class="fa fa-bullhorn"></i> </div>
                        <h4>Refer &amp; Earn</h4>
                        <p>Invite a friend to sign up and earn up to Rs.100</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon"> <i class="fa fa-life-ring"></i> </div>
                        <h4>24X7 Support</h4>
                        <p>We're here to help. Have a query and need help ?</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon"> <i class="fa fa-film"></i> </div>
                        <h4>Booking Movie Ticket</h4>
                        <p>Booking movie ticket with <br/>interactive  Offers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <p>Payment</p>
                <ul class="payments-types">
                    <li><a href="" target="_blank"> <img data-toggle="tooltip" src="{{  asset('public/assets/image/payment/visa.png')}}" alt="visa" title="" data-original-title="Visa"></a></li>
                    <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{  asset('public/assets/image/payment/discover.png')}}" alt="discover" title="" data-original-title="Discover"></a></li>
                    <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{  asset('public/assets/image/payment/paypal.png')}}"  alt="paypal" title="" data-original-title="PayPal"></a></li>
                    <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{  asset('public/assets/image/payment/american.png')}}"  alt="american express" title="" data-original-title="American Express"></a></li>
                    <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{  asset('public/assets/image/payment/mastercard.png')}}"  alt="Master" title="" data-original-title="Discover"></a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                  {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form',   ]) !!}
                <p>Subscribe</p>
                 
                <div class="input-group newsletter">
                    
                      {!! Form::text('subemail','',array('placeholder'=>"Your Email Address" ,'id'=>'subemail' ,'class'=>'form-control', 'required'=>'' , 'pattern'=>''))  !!}
             
                    <span class="input-group-append">
                        <input type="button" id="btn" onclick="email();"  name="emailsub" class="btn btn-secondary" value="Subscribe" />
                    </span>    
                      <p class="error">{{ $errors->first('subemail')  }}</p>
                    <br/>
                    
              {!! Form::close()!!}
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-md-end flex-column">
                <p style="margin-right: 50px">Keep in touch</p>
                <ul class="social-icons">
                    <li class="social-icons-facebook"> <a data-toggle="tooltip" href="https://www.facebook.com/QuickPay-225244651697951/?epa=SEARCH_BOX" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a data-toggle="tooltip" href="https://twitter.com/QuickPay4" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-google"><a data-toggle="tooltip" href="https://plus.google.com/u/1/discover" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li></a>
                    <li class="social-icons-instagram"><a data-toggle="tooltip" href="https://www.instagram.com/quickpay123/" target="_blank" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <p id="msg" style="margin-left: 35%;color:red"></p>
        </div>
    </div>
    <br/>
    <hr/>
    <div class="container">
        <div class="footer-copyright">
            <ul class="nav justify-content-center">
                <li class="nav-item"> <a class="nav-link active" href="About-Us">About Us</a> </li>
                <li class="nav-item"> <a class="nav-link active" href="Faqs">FAQ's</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Contact-Us">Contact</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Support">Support</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Tearms-And-Condition">Terms & Condition</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Privacy-Policy">Privacy Policy</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Recharge-Partner">Recharge Partner</a> </li>
                <!--<li class="nav-item"> <a class="nav-link" href="Partner-With-Us">Partner with us</a> </li>-->
                <li class="nav-item"> <a class="nav-link" href="Feedback">Feedback</a> </li>
            </ul>
            <p class="copyright-text">Copyright © <?php echo date('Y'); ?>. All Rights Reserved.  | Develop By : <a href="http://www.novaoneclicksolution.in">Nova One Click Solution</a></p>
        </div>
    </div>
</footer><!-- Footer end -->


<!--login model----->
<!--<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
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
                               
                                <input type="password" name="password" id="lpassword" placeholder="Password" class="form-control" value="{!!request()->cookie('user_pass')!!}"/>
                            </div>
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
                                <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
                            </div>
                            
                             <input type="button" id="btn" onclick="login()"  name="register" class="btn btn-primary btn-block" value="Login" />
                         {!! Form::close()!!}
                         <div class="d-flex align-items-center my-4">
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
                        </div>
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
                                <a href="" style="margin-left: 1%; font-size: 12px; float: right;" title="Click Here To Generate Password">Auto Generate Password</a>
                            </div>
                            <div class="form-group">
                                {!! Form::password('password',['placeholder'=>'Password','class'=>'form-control','id'=>'password']) !!}
                                 <p id="passmsg" style="color:red"></p>
                            </div>
                            <div class="form-group">
                               {!! Form::password('repassword',['placeholder'=>'Re-Type Password','class'=>'form-control','id'=>'cpassword']) !!}
                                <p id="cpassmsg" style="color:red"></p>
                            </div>
                            <div class="form-check custom-control custom-checkbox">
                                
                              
                                {!! Form::checkbox('name', 'value', false, ['class' => 'custom-control-input','id'=>'tc']); !!}
                                <label class="custom-control-label" for="remember-me">I Accept All <a href="T&C.php">Tearms & Condition</a></label>
                            </div>
                            <br/>

                                <input type="button" id="btn" onclick="insert()"  name="register" class="btn btn-primary btn-block" value="Signup" />
                        {!! Form::close()!!}

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
