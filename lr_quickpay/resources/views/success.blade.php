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
                        <div  style="border: 1px solid #e5e7e9;width: 50%" >
                        <img width="260px" height="200px" alt="" src="{{  asset('public/assets/image/check.gif')}}">
                   
                    <h6>Voila! Recharge Successful!</h6>
                    <p style="font-family: sans-serif">{{  date('d-M-Y') }}</p>
                    <p>Dear <?php echo $name; ?>, Thanks for Transactring With Us. </p>
                   
                        
                        </div>
                    
                    
                    
                     <?php
                    if(isset($d))
                    {
                    
                    ?>    
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
                     
                      
                ?>
                    
                        <table class="" cellpadding="10" cellspacing="10" style="width: 50%;text-align: center">
                        <tr>
                            
                            <td  style="border: 1px solid #e5e7e9"><?php echo $d['number'];  ?><br/></td>
                            <td  style="border: 1px solid #e5e7e9"> <img alt="" style="margin-top: -5px" width="20px" height="25px" src="{{  asset('public/assets/image/sendmoney.png')}}"> <?php echo $d['amount'];  ?></td>
                            
                        </tr>
                        <tr>
                            <td  style="border: 1px solid #e5e7e9" colspan="2">Order Id : <?php echo $d['pid'];  ?></td>
                        </tr>
                    </table>
                        <a href="{{ url('User-Profile') }}" title="Click Here To Watch Recharge History">View Recharge History</a>
                    <?php
                    }
                    
                    ?>
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