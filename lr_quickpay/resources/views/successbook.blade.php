<html lang="en">

    <!---header---->
    @include('headerlink')
    <!---header end---->

    <body>
        <!----header--->
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
      </div>
    </div>
       </header>
        <!----header- end-->

        <!-- Page Header
       ============================================= -->

        <!-- Content
        ============================================= -->
    <br/>
        <div id="content">
            <div class="container">
                <div class="bg-light shadow-md rounded p-4" style="width: 50.5%; margin-left: 25%;" >
                      <?php
                      if(session()->get('user'))
                      {
                        $data = DB::table('tbl_registration')->where('register_id','=',session()->get('user'))->get();
                        
                        $name=$data[0]->name;
                        
                     
                      }
//         ?>
                    
                    <center>
                        <div  style="border: 1px solid #e5e7e9;width: 60%" >
                        <img width="260px" height="200px" alt="" src="{{  asset('public/assets/image/check.gif')}}">
                    <p>Dear <?php echo $name; ?></p>
                    <h6>Voila! Your Ticket Is Confirm !</h6>
                    <p style="font-family: sans-serif">{{  date('d-M-Y') }}</p>
                   
                   
                        
                        </div>
                    
                    
                      <a href="{{ url('User-Profile') }}" title="Click Here To Watch Book Ticket">View Recharge History</a>
                </div>
            </div>
        </div>

   <!-- Content end -->
  


    <!----footer--->
    
    <!---footer-end---->


    <!----footer link--->
    @include('footerlink')
    <!----footer link- end-->
</body>
</html>