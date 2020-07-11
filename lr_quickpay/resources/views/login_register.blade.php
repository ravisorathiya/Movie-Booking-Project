<html lang="en">
    
    <!---header---->
        @include('headerlink')
    <!---header end---->
     
 <body>
     <!----header--->
        @include('header')
     <!----header- end-->

     <!--login-sign up-->
    <div id="content">
    
    <!-- Page Header
    ============================================= -->
    <section class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>Login &amp; Register</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">Login/Register</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- Page Header end -->
    
    <div class="container">
      <div id="login-signup-page" class="bg-light shadow-md rounded mx-auto p-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a id="login-page-tab" style="font-size: 18px;" class="nav-link text-4 active show" data-toggle="tab" href="#loginPage" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
          <li class="nav-item"> <a id="signup-page-tab" class="nav-link text-4" data-toggle="tab" href="#signupPage" role="tab" aria-controls="signup" aria-selected="false">Register</a> </li>
        </ul>
          
        <div class="tab-content pt-4">
          <div class="tab-pane fade active show" id="loginPage" role="tabpanel" aria-labelledby="login-page-tab">
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="loginMobile" required="" placeholder="Email ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control " id="loginPassword" required="" placeholder="Password">
            
              </div>
              <div class="row mb-4">
                <div class="col-sm">
                  <div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
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
                <button type="button" style="" class="btn btn-block btn-outline-danger">Login with Google</button>
            </div>
          </div>
              
          </div>
          <div class="tab-pane fade" id="signupPage" role="tabpanel" aria-labelledby="signup-page-tab">
            <form id="signupForm" method="post">
             
                <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" required="" placeholder="Name">
              </div>
                 <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required="" placeholder="Email ID">
              </div>
<!--              <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" required="" placeholder="Mobile Number">
              </div>-->
<div>
    <a href="" style="float: right; font-size: 12px;" title="Click Here To Generate Password">Auto Generate Password</a>
</div>
              <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" required="" placeholder="Password">
              </div>                <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" required="" placeholder="Re-Type  Password">
              </div>
<div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label" for="remember-me">I Accept All <a href="T&C.php">Terms & Condition</a></label>
                  </div>
 <br/>

              <button class="btn btn-primary btn-block" type="submit">Register</button>
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
    
     <!--login-sign up  End-->
    

     <!----footer--->
        @include('footer')
     <!---footer-end---->
     
     
     <!----footer link--->
        @include('footerlink')
     <!----footer link- end-->
 </body>
</html>
