<html lang="en">
    
    <!---header---->
        @include('headerlink')
    <style>
        .list ul li span{
            color: #002752;
            font-weight: 420;
            margin-left: 10px;
            
           
        }
       .list ul li p{
            margin-left: 10px;
            color:gray;
            font-weight: 400;
        }
        .list ul li{
            list-style: decimal;  
             color: #002752;
            font-weight: 430;
            padding: 7px;
         
        }
        </style>
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
            <h1>Terms & Condiction</h1>
          </div>
          <div class="col-md-4">
            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
              <li><a href="Home">Home</a></li>
              <li class="active">Terms & Condiction</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- Page Header end -->
    
    <!-- Content
    ============================================= -->
    
    <div id="content">
    <div class="container list">
      <div class="bg-light shadow-md rounded p-4 cursor">
        
          <ul>  
          
            <li id="flip2" title="click here" ><span>Card payment declined</span>
                <p id="panel2" style="display: none;">Please check with your bank if you have sufficient balance in your card and if your card is currently invalidity.
                    OR try with a different card / bank account again.</p>
            </li>
            
            <li id="flip3" title="click here"><span>Can I pay by Cash?</span>
                <p id="panel3" style="display: none;">We currently do not support this facility. Kindly initiate your payment though our mobile app.</p>
            </li>
            
            <li id="flip4" title="click here" > <span>What are the various payment options offered by QuickPay ?</span>
               <p id="panel4" style="display: none;">You can make your booking using any of the following payment options -Credit / Debit Card (Visa and Master)
                    Diners Club
                    Maestro Card EMI (CITI Bank)
                    American Express Card
                    Net Banking (Domestic / International)
                    We now also accept international cards for payment though our website</p>
            </li>
            
            <li id="flip5" title="click here"><span>Can I make offline payments?</span>
                <p id="panel5" style="display: none;">we currently do not support this facility.
                    Kindly initiate your payment online though our mobile app.</p>
            </li>
            
            <li id="flip6" title="click here" ><span>Can I make payments through my mobile?</span>
                <p id="panel6" style="display: none;">Yes, our site is accessible on mobile website, Android, iPhone and Windows and you can make your bookings and complete your transactions through your mobile phone.</p>
            </li>
          
            <li id="flip10" title="click here" ><span>While I was paying by net banking, my session expired. Why so?</span>
                <p id="panel10" style="display: none;">Your session expired due to security reasons.
                    This happens when you take too long to make the direct debit payment and done manage it in the specified amount of time.
                    Please go back to the booking page and start over.</p>
            </li>
            
            <li id="flip11" title="click here"><span>What are the modes of receiving refunds from QuickPay ?</span>
                <p id="panel11" style="display: none;">While Cancelling/Rescheduling any of your booking, you can opt to get refund in your original mode of payment of via goCash:
                    1. Refund to original source of payment - will get credited with the refund amount within 5-14 working days.OR
                    2. You can take the refund as goCash (You will receive the money instantly)</p>
            </li>
            
            <li id="flip12" title="click here" ><span>By when can I receive my refund in my account after cancellation of my booking?</span>
                <p id="panel12" style="display: none;">All refunds are processed by the method of payment used in the initial transaction.
                    Once you have cancelled your booking, the refund is processed by Goibibo within max 14 business days.
                    An e-mail confirmation of the refund amount will be sent to the email address given to us at the time of booking.
                    However, for the amount to reflect in your bank or credit card account is dependent on the time taken by your bank thereon.
                    For any discrepancies and delays, kindly check directly with your bank or credit card company.
                    Where the User has cancelled his/her booking directly with the airlines, he/she will need to inform Goibibo with valid documentation to initiate the refund process.
                    It is advisable to contact Goibibo within 48 hours of the cancellation request.</p>
            </li>
            
            <li id="flip13" title="click here" ><span>My money has been deducted, and I have not received any confirmation mail or booking ID from your side. What should I do?</span>
                <p id="panel13" style="display: none;">Such cases though rare usually happen and are usually the result of a slow internet connection.
                    To know why this can happen, it's better to know a little: Once Customer selects the mode of payment and hits the Pay Securely button, the Goibibo app redirects the customer to banks website where he makes the payment.
                    Once the payment is done, customer will be re-directed to Goibibo's app, where the booking is done after the payment is verified. Once this is done, the confirmation page is displayed and the voucher sent to the customer's email id provided at the time of making the booking.
                    What goes wrong? Well, for a booking to be made, it is necessary that you are redirected back to our app for it is important for us to know that the payment has been made.
                    If during this stage something goes wrong (i.e., power failure, or a slow internet connection) and the connection breaks down, our system wont know that the payment has been made and your account is debited.
                    In such a scenario the booking wont be generated. However, you need not despair; do let us know via 24*7 goCare Support - Visit the Quick Help section - Click on Booking Issue.
                    We will check the issue and revert to you with the resolution.</p>
            </li>
            
            <li id="flip14" title="click here" ><span>By when can I expect my refund against the cancellation of my booking?</span>
                <p id="panel14" style="display: none;">While Cancelling/Rescheduling any of your booking, you can opt to get refund (if applicable)in your original mode of payment or in goCash:
                    1. Refund to original source of payment - will get credited with the refund amount within 5-14 working days.OR
                    2. You can take the refund as goCash (You will receive the money instantly)</p>
            </li>
            
            <li id="flip15" title="click here" ><span>Can I pay with two different credit cards?</span>
                <p id="panel15" style="display: none;">Online: Unfortunately we only accept 1 credit card as payment per bookings.
                    Offline: Yes you can make the payment using 2 credit cards.</p>
            </li>
            
            <li id="flip16" title="click here" ><span>I want to book online but don't have any credit or debit cards. Can I still book online?</span>
                <p id="panel16" style="display: none;">You can make your booking using any of the following payment options -
                    Diners Club
                    Maestro Card EMI (CITI Bank)
                    American Express Card
                    Net Banking (Domestic / International)
                    UPI
                    TEZ</p>
            </li>
            
            <li id="flip17" title="click here" > <span>Can I use my card to make a booking in someone else's name?</span>
                <p id="panel17" style="display: none;">Yes, you can, but do make sure that under 'Traveller Name' you mention the name of the person who will be traveling.
                    You are required to enter your name and your billing address while on the Payment Page.</p>
            </li>
            
            <li id="flip18" title="click here" ><span>While trying to book a ticket, I filled in and submitted my payment details and then nothing happened/ the website did not respond/I could not proceed with the booking. What do I do?</span>
                <p id="panel18" style="display: none;">We suggest that you check with your bank if payment has been deducted from your account/charged to your card.
                    In case, payment has been deducted or charged to your account we would automatically refund the full amount and same would reflect in your account/card statement within 5-14 working days.
                    If you do not receive the refund, you may write to us by logging in your Goibibo account-click on Manage Booking-got to Quick Help Section and click on Additional Questions.</p>
            </li>
            
            <li id="flip19" title="click here" ><span>Is my credit card information secure and safe?</span>
                <p id="panel19" style="display: none;">Yes. Goibibo is a secure application.
                    It follows the best security practices and the most stringent safety protocols adopted by major online travel companies.
                    Any information you enter when transacting with Goibibo is sent in an encrypted format to protect you against unintentional disclosure to third parties.</p>
            </li>
            
            <li id="flip20" title="click here" ><span>After submitting my details and payment information, nothing happened. I just see a blank page. What do I do?</span>
                <p id="panel20" style="display: none;">There is nothing you need to do except check your email and mobile for a confirmation SMS.
                    In case we receive confirmation of your payment, we would generate your e-ticket and mail it to your email address and send across a SMS to your mobile phone as well.
                    In case you do not receive any communication from us, and money has been deducted from your bank account/cash card or charged to your credit card, you need not do anything.
                    We will automatically refund the full amount back to your credit card/debit card/cash card/net banking account.
                    The same will reflect in your card/bank statement within 5 to 14 working days.
                    You can safely go ahead and make a fresh booking.</p>
            </li>
            
            <li id="flip21" title="click here" ><span>Can I save my credit card details for future use?</span>
                <p id="panel21" style="display: none;">Yes, you may save your credit card details like card number, name on card, expiry date, billing address to avoid filling these details every time you book a ticket.
                    Thus whenever you wish to pay with your stored card simply choose 'Pay by using Previous Used Card' as a payment option.</p>
            </li>
            
            <li id="flip22" title="click here" ><span>What's the Card Verification Number (CVV) on my credit card?</span>
                <p id="panel22" style="display: none;">VV is an important security feature that reduces the risk of online fraud.
                    This number never appears on sales receipts or billing statements and it is only found on the physical card itself.
                    We ask you to enter the CVV code during your transaction to make sure that the card is, in fact, in your possession.</p>
            </li>
         </ul>
      </div>
    </div>
</div>

     <!----footer--->
         @include('footer')
     <!---footer-end---->
     
     
     <!----footer link--->
        @include('footerlink')
     <!----footer link- end-->
  
<script> 
  
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip5").click(function(){
    $("#panel5").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip6").click(function(){
    $("#panel6").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip7").click(function(){
    $("#panel7").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip8").click(function(){
    $("#panel8").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip9").click(function(){
    $("#panel9").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip10").click(function(){
    $("#panel10").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip11").click(function(){
    $("#panel11").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip12").click(function(){
    $("#panel12").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip13").click(function(){
    $("#panel13").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip14").click(function(){
    $("#panel14").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip15").click(function(){
    $("#panel15").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip16").click(function(){
    $("#panel16").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip17").click(function(){
    $("#panel17").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip18").click(function(){
    $("#panel18").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip19").click(function(){
    $("#panel19").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip20").click(function(){
    $("#panel20").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip21").click(function(){
    $("#panel21").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#flip22").click(function(){
    $("#panel22").slideToggle("slow");
  });
});
</script> 
 </body>
</html>