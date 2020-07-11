<html>
      @include('headerlink')
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
    <body style="background: white">
        <div id="emailsub">
            <center>
                <div class="logo" style="background: white">
             <p title="QuickPay - Pay Without Cash"><h1 style="color:#0071cc;margin-top: 4%; font-family: sans-serif"><b style="font-family: sans-serif">Q</b>uick<b>P</b>ay</h1></p>
          </div>
               {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                   
                <fieldset style="width: 500px">
                    <legend> <h5>Forgot Password</h5>
                        
                    </legend>
                    <br/>
                    
                     <div class="form-group" id="otp">
                         
                         <input type="text" name="otp"  placeholder="Verify OTP"   class="form-control"/>
                            </div>
                    <br/>
                    <div>
                        <input type="submit" style="width: 150px;float: right"   class="btn btn-primary btn-block" value="Next"/>                    </div>
                </fieldset>
                   
            </center>   
        </div>
    </body>
</html>
