<html lang="en">
    
    <!---header---->
       @include('headerlink')
    <!---header end---->
     
 <body>
     <!----header--->
        @include('header')
     <!----header- end-->

     <!-- Page Header
    ============================================= -->
    <section class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>Feedback</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">Feedback</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- Page Header end -->
    
    <!-- Content
    ============================================= -->
     <div id="content">
    <div class="container">
      <div class="bg-light shadow-md rounded p-4">
        
       <h2 class="text-6">Feedback</h2>
            <p>Please fill out the form below and write your feedback.</p>
           {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
              
              <div class="form-group">
              {!! Form::text('name','',array('placeholder'=>"Enter Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
              <p class="error" style="color: red">{{ $errors->first('name')  }}</p>
              </div>
             
            
              <div class="form-group">
                  
                
                {!! Form::textarea('message',null,['class'=>'form-control','rows'=>'5','placeholder'=>"Enter Your Feedback",'required'=>'']) !!}
                <p class="error" style="color: red">{{ $errors->first('message')  }}</p>
              </div>
             
                <input type="submit" name="send" class="btn btn-primary"/>
            </form>
        </div>
      </div>
    </div>
    
  </div><!-- Content end -->
  

     <!----footer--->
         @include('footer')
     <!---footer-end---->
     
     
     <!----footer link--->
       @include('footerlink')
     <!----footer link- end-->
 </body>
</html>