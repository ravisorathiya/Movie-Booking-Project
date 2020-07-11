<html lang="en">
    
    <!---header---->
        @include('headerlink')
    <!---header end---->
     
 <body>
     <!----header--->
         @include('header')
     <!----header- end-->

     <!---contact us -->
      <div class="page-header page-header-text-light bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>FAQ's</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">FAQ's</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
        
        <div id="content">
    <div class="container">
      <div class="bg-light shadow-md rounded p-4">
        <h3 class="text-6">Get answers to your queries</h3>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Recharge &amp; Bill</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordion">
          <div class="card">
            <div class="card-header" id="heading1">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1">Recharge not done but my money deducted.</a> </h5>
            </div>
            <div id="faq1" class="collapse" aria-labelledby="heading1" data-parent="#accordion" style="">
              <div class="card-body"> In such cases, our systems continue to follow-up with the bank/gateway for the next 4 hrs. In case we don’t get confirmation for transaction success from your bank/gateway within the next 4 hrs, the transaction fails. In case money was deducted from your account, your bank could take 7–14 days to credit the refund in your account. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading2">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">I was recharging and got this message: ‘Pending State’</a> </h5>
            </div>
            <div id="faq2" class="collapse" aria-labelledby="heading2" data-parent="#accordion" style="">
              <div class="card-body"> Share your transaction id with the screenshot of pending transaction after some time you receive your money. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading3">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">I was not able to recharge</a> </h5>
            </div>
            <div id="faq3" class="collapse" aria-labelledby="heading3" data-parent="#accordion" style="">
              <div class="card-body">According to some reports it is said that due to some ‘ Security issue’ they are stopping them from allowing QuickPay for their users, however, the issue is still unexplained. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading4">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4">I recharged on a wrong number.</a> </h5>
            </div>
            <div id="faq4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
              <div class="card-body"> You have to contact the Service Provider (Vodafone, Airtel, Idea, etc.). QuickPay can't do anything in such a scenario. They are just middlemen. </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Booking</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionBooking">
          <div class="card">
            <div class="card-header" id="heading5">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5">How can i cancel my booking?</a> </h5>
            </div>
            <div id="faq5" class="collapse" aria-labelledby="heading5" data-parent="#accordionBooking">
                <div class="card-body">1. You need to log on to QuickPay account <br/> 2. Go to Profile and locate the booking <br/> 3. Click Cancel button</div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading6">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6">How do I print my e-ticket? </a> </h5>
            </div>
            <div id="faq6" class="collapse" aria-labelledby="heading6" data-parent="#accordionBooking">
              <div class="card-body"> I guess you don’t need to print it out either if they identify you by your name. They will either enter it manually or have some OCR software that should handle reading it from a phone.</div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading8">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8"> Why are seats priced differently on the same theater?</a> </h5>
            </div>
            <div id="faq8" class="collapse" aria-labelledby="heading8" data-parent="#accordionBooking">
              <div class="card-body"> Ticket price depend on the seat type. which type of seat you select. </div>
            </div>
          </div>          
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Payments</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionPayments">
          <div class="card">
            <div class="card-header" id="heading9">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="faq9">How do I pay?</a> </h5>
            </div>
            <div id="faq9" class="collapse" aria-labelledby="heading9" data-parent="#accordionPayments">
              <div class="card-body">Usin Credit/Debite card or some other card you can make payments. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading10">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="false" aria-controls="faq10">How do I pay using a credit/debit card?</a> </h5>
            </div>
            <div id="faq10" class="collapse" aria-labelledby="heading10" data-parent="#accordionPayments">
              <div class="card-body"> First enter card number after enter expire month/year and last enter CVV number and pay on payment button. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading11">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="false" aria-controls="faq11">Can I use my bank's Internet Banking feature to make a payment?</a> </h5>
            </div>
            <div id="faq11" class="collapse" aria-labelledby="heading11" data-parent="#accordionPayments">
              <div class="card-body">Yes , You can use your net banking to make payments. </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">My Account</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionAccount">
          <div class="card">
            <div class="card-header" id="heading13">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq13" aria-expanded="false" aria-controls="faq13">Is there any registration fee?</a> </h5>
            </div>
            <div id="faq13" class="collapse" aria-labelledby="heading13" data-parent="#accordionAccount" style="">
              <div class="card-body"> No,You not Pay any registration fees. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading14">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq14" aria-expanded="false" aria-controls="faq14">Is my account information safe?</a> </h5>
            </div>
            <div id="faq14" class="collapse" aria-labelledby="heading14" data-parent="#accordionAccount">
              <div class="card-body">Yes, Your Account information Safe. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading16">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq16" aria-expanded="false" aria-controls="faq16">I did not receive the cashback</a> </h5>
            </div>
            <div id="faq16" class="collapse" aria-labelledby="heading16" data-parent="#accordionAccount">
              <div class="card-body">According to RBI guidelines restrict P2P payments from the e-wallet. And one who want to avail this services must have to complete the KYC process. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading17">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq17" aria-expanded="false" aria-controls="faq17">Forgot my password! What next?</a> </h5>
            </div>
            <div id="faq17" class="collapse" aria-labelledby="heading17" data-parent="#accordionAccount">
              <div class="card-body">In Login Pages Click on Forgot Password Enter Your Detail Which Enter During registration Time After Enter New Password.   </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading18">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq18" aria-expanded="false" aria-controls="faq18">Closing Your Account</a> </h5>
            </div>
            <div id="faq18" class="collapse" aria-labelledby="heading18" data-parent="#accordionAccount">
              <div class="card-body">Go to My Profile And Click on Logout.  </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="text-center my-3 my-md-5">
          <p class="text-4 mb-3">Can't find what you're looking for? Our customer care team are here to help</p>
          <a href="Support" class="btn btn-primary">Contact Customer Care</a> </div>
      </div>    
    </div>
  </div>
     <!---contact us-- end-->

     <!----footer--->
         @include('footer')
     <!---footer-end---->
     
     
     <!----footer link--->
       @include('footerlink')
     <!----footer link- end-->
 </body>
</html>