<html>
    <head>
        <style>
            #emailsub
            {
                /*border: 1px solid gray;*/
                height: 500px;
                /*margin: 0px 270px;*/
            }
            img
            {
                margin-top: 30px;
            }
            hr
            {
                width: 500px;
            }


        </style>
    </head>
    <body>
        <div id="emailsub">
            <center>
                <div class="logo" style="background: white">
             <p title="QuickPay - Pay Without Cash"><h1 style="color:#0071cc;margin-top: 4%; font-family: sans-serif"><b style="font-family: sans-serif">Q</b>uick<b>P</b>ay</h1></p>
          </div>
                <h2>Welcome To QuickPay</h2>
                    <?php
               
//               echo session()->get('forgot');
               $forgot=DB::table("tbl_registration")->where("email","=",session()->get('forgot'))->get();
               
               ?>
                    
                    <h4>Hello,<?php echo $forgot[0]->email; ?></h4>
                 
                    <fieldset style="width: 50%">
                        <legend><h4>Forgot Password</h4></legend>
                        <p>Password : <?php echo $forgot[0]->password; ?></p>
                    </fieldset>
               
                    <p> <br>  </p>
                    <hr>
                    <p>Best regards,<br> QuickPay Team.</p>
                    <h6>
                        -  ALL RIGHTS RESERVED BY  -<br>
                        QUICKPAY<?php echo date('Y') ?>

                    </h6>
            </center>   
        </div>
    </body>
</html>