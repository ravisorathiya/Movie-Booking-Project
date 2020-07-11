<html lang="en">
    
    <!---header---->
        @include('headerlink')
    <!---header end---->
     
 <body>
     <!----header--->
        @include('header')
     <!----header- end-->

     <!---support page header -->
     <section class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>Support</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">Support</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!---support page header end-->
    <!----support--->
     <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="bg-light shadow-md rounded p-4">
            <h2 class="text-6">Send a Request</h2>
            <p>Please fill out the form below and we promise you to get back to you within a couple of hours.</p>
           {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
              
              <div class="form-group">
                  
                   {!! Form::text('name','',array('placeholder'=>"Enter Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                   <p class="error" style="color: red">{{ $errors->first('name')  }}</p>
              </div>
              <div class="form-group">
                  {!! Form::text('email','',array('placeholder'=>"Enter Email" , 'class'=>'form-control', 'required'=>'' , ))  !!}
              <p class="error" style="color: red">{{ $errors->first('email')  }}</p>
              </div>
                
              <div class="form-group">
                 
                   {!! Form::text('mobile','',array('placeholder'=>"Enter Mobile Number" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[0-9]+$'))  !!}
              <p class="error" style="color: red">{{ $errors->first('mobile')  }}</p>
              </div>
                <div class="form-group">
                   
                     {!! Form::select('subject',array(""=>"Select Subject",'MobileReachrge'=>"Mobile Recharge",'DTHReachrge'=>"DTH Recharge",'GesBill'=>"Ges Bill",'Electricity'=>"Electricity",'Other'=>"Other"),'',["class"=>"form-control"]) !!}
               <p class="error" style="color: red"> {{ $errors->first('subject')  }}</p>
                </div>
              <div class="form-group">
                 {!! Form::textarea('message',null,['class'=>'form-control','rows'=>'5','placeholder'=>"Enter Your Problem",'required'=>'']) !!}
               <p class="error" style="color: red">{{ $errors->first('message')  }}</p>
              </div>
                <input type="submit" name="send" class="btn btn-primary"/>
            </form>
            @if( isset($data['error']) )
            <br/>
            <br/>
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oop!</strong> {!! $data['error'] !!}
          </div> 
           @endif
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="bg-light shadow-md rounded p-4">
            <h2 class="text-6">FAQ's</h2>
            <div class="accordion accordion-alternate" id="accordion">
              <div class="card">
                <div class="card-header" id="heading2">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Is there any registration fee?</a> </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                  <div class="card-body">  No,You not Pay any registration fees.  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading3">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Is my account information safe?</a> </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                  <div class="card-body"> Yes, Your Account information Safe. </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading5">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">I did not receive the cashback</a> </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                  <div class="card-body"> According to RBI guidelines restrict P2P payments from the e-wallet. And one who want to avail this services must have to complete the KYC process.. </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading6">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Forgot my password! What next?</a> </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                  <div class="card-body"> In Login Pages Click on Forgot Password Enter Your Detail Which Enter During registration Time After Enter New Password. </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading7">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">Closing Your Account</a> </h5>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                  <div class="card-body"> Go to My Profile And Click on Logout. </div>
                </div>
              </div>
            </div>
            <a href="Faqs" class="btn btn-link btn-block btn-sm"><u>Click Here for more FAQ</u></a> </div>
        </div>
      </div>
    </div>
  </div>
    <!----support--end->
     
      <!----footer--->
         @include('footer')
     <!---footer-end---->
     
     
     <!----footer link--->
        @include('footerlink')
     <!----footer link- end-->
 </body>
</html>