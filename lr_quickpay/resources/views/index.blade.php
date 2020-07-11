<html lang="en">
    
    <!---header---->
    @include('headerlink')
    @include('rechrge_api/call_back_url')
    @include('rechrge_api/submit')
 
     <!---header end---->
     
 <body>
    <!-- Preloader -->
        <div id="preloader" style="display: none;"><div data-loader="dual-ring"></div></div>
    <!-- Preloader End -->

    <!-- Document Wrapper   
    ============================================= -->
    <div id="main-wrapper">
        
        @include('header')
   
  <!-- Content
  ============================================= -->
  
  <div id="content">
    
    <!-- Secondary Navigation
    ============================================= -->
   <div id="content">
    <section class="container">
      <div class="row mt-4">
        <div class="col-md-12 col-lg-10">
          <div id="verticalTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;">
            <div class="row no-gutters">
              <div class="col-md-3 my-0 my-md-4">
                <ul class="resp-tabs-list">
                  <li class="resp-tab-item resp-tab-active"aria-controls="tab_item-0" role="tab"><span><i class="fa fa-mobile-alt"></i></span> Mobile</li>
                  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><i class="fa fa-tv"></i></span> DTH</li>
<!--                  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><i class="fa fa-credit-card"></i></span> DataCard</li>
                  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><i class="fa fa-wifi"></i></span> Broadband</li>
                  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span><i class="fa fa-phone"></i></span> Landline</li>
                  <li class="resp-tab-item" aria-controls="tab_item-5" role="tab"><span><i class="fa fa-plug"></i></span> CableTv</li>-->
                  <li class="resp-tab-item" aria-controls="tab_item-6" role="tab"><span><i class="fa fa-lightbulb"></i></span> Electricity</li>
<!--                  <li class="resp-tab-item" aria-controls="tab_item-7" role="tab"><span><i class="fa fa-subway"></i></span> Metro</li>-->
                  <li class="resp-tab-item" aria-controls="tab_item-8" role="tab"><span><i class="fa fa-flask"></i></span> Gas</li>
                  <!--<li class="resp-tab-item" aria-controls="tab_item-9" role="tab"><span><i class="fa fa-tint"></i></span> Water</li>-->
                </ul>
              </div>
              <div class="col-md-9">
                <div class="resp-tabs-container bg-light shadow-md rounded h-100 p-3"> 
                  
                  <!-- Mobile Recharge
                  ============================================= -->
               
                  <div class="resp-tab-content resp-tab-content-active resp-accordion-closed" aria-labelledby="tab_item-0">
                    <h2 class="text-6 mb-4">Mobile Recharge</h2>
                    <form id="recharge-bill" method="post" action="{!! url('Submit') !!}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                      <div class="form-group">
                        <label for="mobileNumber">Mobile Number</label>
                        <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required=""  name="number" placeholder="Enter Mobile Number" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label for="operator">Your Operator</label>

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
                        foreach ($providers as $key => $value) 
                        {
                            if($value->service == "Mobile Recharge")
                            {
		//echo $value->provider_name."<br>";
                                $op[$value->provider_id] = $value->provider_name;
                           }
                        }
                        ?>
                    <select name="provider_id"  class="custom-select" id="operator" required="">
                        <option value="">Select Operator</option>
                            
                    <?php
                    foreach($op as $key => $value){
                            ?>
                            <option value="<?php echo $key ?>" ><?php echo $value ?> </option>
                            <?php
                    }
                    ?>
                    </select>

                      </div>
                      <div class="form-group">
                        <label for="amount">Custom Amount</label>
                        <div class="input-group">
                            <div class="input-group-prepend"> <span class="input-group-text">Rs.</span> </div>
                          <!--<a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans-link">View Plans</a>-->
                          <input class="form-control" id="amount" placeholder="Enter Amount" required="" autocomplete="off" name="amount" type="text">
                        </div>
                      </div>
<button class="btn btn-primary btn-block" type="submit" value="paysub" name="paysub" >Pay Now</button>
                    </form>
                  </div> 
                 <!-- Mobile Recharge end --> 
                  
                  <!-- DTH Recharge
                  ============================================= -->
                  
                 <div class="resp-tab-content" aria-labelledby="tab_item-1">
                     <form id="recharge-bill" method="post" action="{!! url('Dth') !!}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <h2 class="text-6 mb-4">DTH Recharge</h2>
                    
                         <div class="form-group">
                        <label for="mobileNumber">Customer Number</label>
                        <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required=""  name="number" autocomplete="off" placeholder="Enter Mobile Number">
                      </div>
                      <div class="form-group">
                        <label for="DTHoperator">DTH Operator</label>
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
                        foreach ($providers as $key => $value) 
                        {
                            if($value->service == "DTH Recharge")
                            {
		//echo $value->provider_name."<br>";
                                $op[$value->provider_id] = $value->provider_name;
                           }
                        }
                        ?>
                    <select name="provider_id"  class="custom-select" id="operator" required="">
                        <option value="">Select Operator</option>
                            
                    <?php
                    foreach($op as $key => $value){
                            ?>
                            <option value="<?php echo $key ?>" ><?php echo $value ?> </option>
                            <?php
                    }
                    ?>
                    </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="DTHamount">Amount</label>
                        <div class="input-group">
                          <div class="input-group-prepend"> <span class="input-group-text">Rs.</span> </div>
                          <input class="form-control" name="amount" autocomplete="off" id="DTHamount" placeholder="Enter Amount" required="" type="text">
                        </div>
                      </div>
                    <button class="btn btn-primary btn-block" name="paydth" value="paydth" type="submit">Pay Now</button>
                    </form>
                  </div>
                  <!-- DTH Recharge end --> 
                                                    
                  <!-- Electricity Bill
                  ============================================= -->
                  <div class="resp-tab-content" aria-labelledby="tab_item-6">
                    <h2 class="text-6 mb-4">Pay your Electricity Bill</h2>
                    <form id="recharge-bill" method="post" action="{!! url('Electricity') !!}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div class="form-group">
                        <label for="electricityOperator">Electricity</label>
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
                        foreach ($providers as $key => $value) 
                        {
                            if($value->service == "Electricity Payment")
                            {
		
                                $op[$value->provider_id] = $value->provider_name;
                           }
                        }
                        ?>
                    <select name="provider_id"  class="custom-select" id="operator" required="">
                        <option value="">Select Operator</option>
               
                    <?php
                    foreach($op as $key => $value){
                            ?>
                            <option value="<?php echo $key ?>" ><?php echo $value ?> </option>
                            <?php
                    }
                    ?>
                    </select>
     
                      </div>
               
                      <div class="form-group">
                        <label for="serviceNumber">Your Service Number</label>
                        <input type="text" class="form-control" autocomplete="off" data-bv-field="number" name="number" id="serviceNumber" required="" placeholder="Enter Service Number">
                      </div>
                      <div class="form-group">
                        <label for="electricityAmount">Amount</label>
                        <div class="input-group">
                          <div class="input-group-prepend"> <span class="input-group-text">Rs.</span> </div>
                          <input class="form-control" name="amount" autocomplete="off" id="electricityAmount" placeholder="Enter Amount" required="" type="text">
                        </div>
                      </div>
                        <button class="btn btn-primary btn-block" type="submit" name="payele" value="payele">Pay Now</button>
                    </form>
                  </div>
                  <!-- Electricity Bill end --> 
                  
                  <!-- Gas Bill
                  ============================================= -->
                  <div class="resp-tab-content" aria-labelledby="tab_item-8">
                    <h2 class="text-6 mb-4">Pay Your Gas Bill</h2>
                     <form id="recharge-bill" method="post" action="{!! url('Ges') !!}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div class="form-group">
                        <label for="gasOperator">Your Operator</label>
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
                        foreach ($providers as $key => $value) 
                        {
                            if($value->service == "GAS Payment")
                            {
		
                                $op[$value->provider_id] = $value->provider_name;
                           }
                        }
                        ?>
                    <select name="provider_id"  class="custom-select" id="operator" required="">
                        <option value="">Select Operator</option>
               
                    <?php
                    foreach($op as $key => $value){
                            ?>
                            <option value="<?php echo $key ?>" ><?php echo $value ?> </option>
                            <?php
                    }
                    ?>
                    </select>

                      </div>
                      <div class="form-group">
                        <label for="gasConsumerNumber">Consumer Number</label>
                        <input type="text" class="form-control" name="number" autocomplete="off" data-bv-field="number" id="gasConsumerNumber" required="" placeholder="Enter Consumer Number">
                      </div>
                      <div class="form-group">
                        <label for="gasAmount">Amount</label>
                        <div class="input-group">
                          <div class="input-group-prepend"> <span class="input-group-text">Rs.</span> </div>
                          <input class="form-control" name="amount" id="gasAmount" placeholder="Enter Amount" autocomplete="off" required="" type="text">
                        </div>
                      </div>
                        <button class="btn btn-primary btn-block" type="submit" value="payges" name="payges">Pay Now</button>
                    </form>
                  </div>
                  <!-- Gas Bill end --> 
                
                </div>
              </div>
            </div>
          </div>
        </div>
        

        
      </div>
    </section>
  </div>
    
   
    
    <!-- Why choose Quickai ?
    ============================================= -->
 <section class="section bg-light shadow-md" style="margin-top: 3%;">
      <div class="container">
        <h2 class="text-9 font-weight-500 text-center">Why choose QuickPay?</h2>
        <p class="lead text-center mb-5">Save Time and Money</p>
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <div class="row">
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle "> <i class="fa fa-piggy-bank"></i> </div>
                  <h3>Low cost</h3>
                  <p>Always get cheapest price with the best in the industry.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle"> <i class="fa fa-rocket"></i> </div>
                  <h3>Fast</h3>
                  <p>Get your recharge to family and friends in minutes</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle"> <i class="fa fa-file-alt"></i> </div>
                  <h3>Simple</h3>
                  <p>You get Rs.20. You can use these credits to take recharge.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle"> <i class="fa fa-hands-helping"></i> </div>
                  <h3>Trust pay</h3>
                  <p>100% Payment Protection. Easy Return Policy.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle"> <i class="fa fa-lock"></i> </div>
                  <h3>100% Secure Payments</h3>
                  <p>Moving your card details to a much more secured place.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box mb-5 style-3">
                  <div class="featured-box-icon border text-primary rounded-circle"> <i class="fa fa-life-ring"></i> </div>
                  <h3>24X7 Support</h3>
                  <p>We're here to help. Have a query and need help ? </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Refer & Earn
    ============================================= -->
    <div class="container" style="margin-top: 3%;">
      <section class="section bg-light shadow-md rounded px-5">
        <h2 class="text-9 font-weight-600 text-center">Refer &amp; Earn</h2>
        <p class="lead text-center mb-5">Refer your friends and earn up to Rs.20.</p>
        <div class="row">
          <div class="col-md-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fa fa-bullhorn"></i> </div>
              <h3>You Refer Friends</h3>
              <p class="text-3">Share your referral link with friends. They get Rs.10.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fas fa-sign-in-alt"></i> </div>
              <h3>Your Friends Register</h3>
              <p class="text-3">Your friends Register with using your referral link.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon bg-light-4 text-primary rounded-circle"> <i class="fa fa-rupee-sign"></i> </div>
              <h3>Earn You</h3>
              <p class="text-3">You get Rs.20. You can use these credits to take recharge.</p>
            </div>
          </div>
        </div>
        <div class="text-center pt-4"> <a href="#" class="btn btn-primary">Get Started Earn</a> </div>
      </section>
    </div><!-- Refer & Earn end -->
    
    <!-- Mobile App
    ============================================= -->
<!--    <section class="section pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-6 text-center"> <img class="img-fluid" alt="" src="{{  asset('public/assets/image/app-mobile.png')}}"> </div>
          <div class="col-md-7 col-lg-6">
            <h2 class="text-9 font-weight-600 my-4">Download Our QuickPay<br class="d-none d-lg-inline-block">
              Mobile App Now</h2>
            <p class="lead">Download our app for the fastest, most convenient way to send Recharge.</p>
            <p>Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo.</p>
            <ul>
              <li>Recharge</li>
              <li>Bill Payment</li>
              <li>Booking Online</li>
              <li>and much more.....</li>
            </ul>
            <div class="d-flex flex-wrap pt-2"> <a class="mr-4" href=""><img alt="" src="{{  asset('public/assets/images/app-store.png')}}"></a><a href=""><img alt="" src="{{  asset('public/assets/images/google-play-store.png')}}"></a> </div>
          </div>
        </div>
      </div>
    </section> Mobile App end -->
    
  </div><!-- Content end -->
  
  <!-- Footer
  ============================================= -->
  @include('footer')
  
  <!--footer end--->

</div><!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="Back to Top"><i class="fa fa-chevron-up" style="margin-top: 8px;"></i></a>

<!-- Modal Dialog - View Plans
============================================= -->
<div id="view-plans" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Browse Plans</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <form class="form-row mb-4 mb-sm-2" method="post">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="form-group">
              <select class="custom-select" required="">
                <option value="">Select Your Operator</option>
                <option>1st Operator</option>
                <option>2nd Operator</option>
                <option>3rd Operator</option>
                <option>4th Operator</option>
                <option>5th Operator</option>
                <option>6th Operator</option>
                <option>7th Operator</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="form-group">
              <select class="custom-select" required="">
                <option value="">Select Your Circle</option>
                <option>1st Circle</option>
                <option>2nd Circle</option>
                <option>3rd Circle</option>
                <option>4th Circle</option>
                <option>5th Circle</option>
                <option>6th Circle</option>
                <option>7th Circle</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="form-group">
              <select class="custom-select" required="">
                <option value="">All Plans</option>
                <option>Topup</option>
                <option>Full Talktime</option>
                <option>Validity Recharge</option>
                <option>SMS</option>
                <option>Data</option>
                <option>Unlimited Talktime</option>
                <option>STD</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <button class="btn btn-primary btn-block" type="submit">View Plans</button>
          </div>
        </form>
        <div class="plans">
          <div class="table-responsive-md">
            <table class="table table-hover border">
              <tbody>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.10 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">8 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">7 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Talktime Rs.8 &amp; 2 Local &amp; National SMS &amp; Free SMS valid for 2 day(s)</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.15 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">13 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">15 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Regular Talktime</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.50 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">47 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">47 Local Vodafone min free </td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.100 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">92 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Local min 92 &amp; 10 Local &amp; National SMS &amp; Free SMS valid for 
                    7 day(s).</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.150 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">143 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">60 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Talktime Rs.143 &amp; 50 Local &amp; National SMS &amp; Free SMS valid for 
                    15 day(s).</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.220 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">220 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.250 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">250 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime + 50 SMS per day for 7 days.</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.300 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">301 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">64 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.410 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">0 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Unlimited Local,STD &amp; Roaming calls</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.501 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">510 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">180 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 28 days.</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.799 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">820 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">250 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 84 days.</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">Rs.999 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">1099 <span class="text-1 text-muted d-block">Talktime</span></td>
                  <td class="text-3 text-center align-middle">356 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="text-1 text-muted align-middle">Full Talktime + 100 SMS per day for 90 days.</td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none" type="submit">Recharge Now</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Modal Dialog - View Plans end -->

<!-- Modal Dialog - Login/Signup
============================================= -->
<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-sm-3">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
          <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
        </ul>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="loginMobile" required="" placeholder="Mobile or Email ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" required="" placeholder="Password">
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
          </div>
          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form id="signupForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required="" placeholder="Email ID">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" required="" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" required="" placeholder="Password">
              </div>
              <button class="btn btn-primary btn-block" type="submit">Signup</button>
            </form>
          </div>
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
      </div>
    </div>
  </div>
</div><!-- Modal Dialog - Login/Signup end -->

<!----footer link--->
@include('footerlink')

</body>
</html>