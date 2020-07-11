<?php
$new=DB::select("select * from tbl_movie_time where time_id=".$id);
if(count($new)==0)
{
    return redirect("Book-Ticket");
}
$new=$new[0];
$movi=DB::select("select * from tbl_movie where movie_id=".$new->movie_id)[0];
$path= explode(",", $movi->poster)[0];
  

?>
<html lang="en">

    <!---header---->
   @include('headerlink')
    <!---header end---->
    <style>
        .slect
        {
            background:#0071cc;color:white;border:1px;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 10000; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal-content {
            /*background-color: #fefefe;*/
            margin: auto;
            margin-top: 10%;
            /*padding: 20px;*/
            border: 1px solid #888;
            width: 40%;
            height: auto;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            right: -5px;
            top:-10px;
           
           
            z-index: 111111;
            font-size: 28px;       
            /*border-radius: 100px;*/
            /*font-weight: bold;*/
            margin-top: 22px;
            margin-right: 15px;
            opacity: 1;
            padding: 0px 5px;

        }

       
        .fa-file-image{
            opacity: 0.3;
        }
        .fa-file-image:hover{
            cursor: pointer;
            opacity: 0.7;
        }
        #img{
                        box-shadow: 0px 0px 20px black;
        }
    </style>
    <body>
        <!----header--->
        @include('header')
        <!----header- end-->
        <section class="page-header page-header-text-light bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>BOOKING</h1>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                            <li><a href="Home">Home</a></li>
                            <li class="active">Show Timing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!----header- end-->

        <!----support--->
        <div id="content" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bg-light shadow-md rounded p-4">
                            <h6 class="text-4">Movie Detail</h6>
                            <hr/>
                            <div style="display: inline-block;width: 250px;float: left;" >
                                <img src="{{ asset($path) }}" width="250" height="300" alt=""/>
                            </div>
                            <div style="display: inline-block;width: 45%;margin-left: 25px;">
                                 <h6 class="text-2" style="display: inline-block">{!! $movi->name !!}</h6>
                                <?php
                                $x=DB::select("select m.name  from tbl_movie_type as t,tbl_movie_type as m where t.parent_id=m.type_id and t.type_id=".$movi->type_id);

                                ?>
                                @if($x[0]->name=="Bollywood")
                                <p >Hindi</p>
                                @elseif($x[0]->name=="Hollywood")
                                <p >English</p>
                                @else
                                <p >Tamil</p>
                                @endif
                                 <table cellpadding="10">
                                    <tr >
                                      <td>Date</td>
                                      <td>:</td>
                                      <td>{!! date("d F , Y",strtotime($new->date)) !!}</td>
                                    </tr>
                                    <tr >
                                      <td>Time</td>
                                      <td>:</td>
                                      <td>{{ date('h:i A',strtotime($new->time)) }}</td>
                                    </tr>
                                    <tr >
                                      <td>Theater</td>
                                      <td>:</td>
                                      <td>{{ DB::select("select * from tbl_theater where theater_id=".$new->theater_id)[0]->name }}</td>
                                    </tr>
                                    <tr >
                                      <td>Screen</td>
                                      <td>:</td>
                                      <td>{{ DB::select("select * from tbl_screen where screen_id=".$new->screen_id)[0]->name }}</td>
                                    </tr>
                                    <tr >
                                      <td>Ticket</td>
                                      <td>:</td>
                                      <td>{!! session()->get("seat") !!}</td>
                                    </tr>
                                     <tr >
                                      <td>Address</td>
                                      <td>:</td>
                                      <td>{{ DB::select("select * from tbl_theater where theater_id=".$new->theater_id)[0]->address }}</td>
                                    </tr>
                                  </table>
                                

                            </div>  
                           

                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="bg-light shadow-md rounded p-4">
                          <h6 class="text-4">Payment Summary</h6>
                          <hr/>
                          <p>Movie Ticket</p>
                           <?php
                              $arr= explode(",",session()->get("seat"));
                              $r=[];
                              $cr=0;
                              $er=0;
                              $e=[];
                              
                              for($i=0;$i<count($arr);$i++)
                              {
                                 if(substr($arr[$i],0,1)=="A" || substr($arr[$i],0,1)=="B"  || substr($arr[$i],0,1)=="C"  )
                                 {
                                     $r[$cr]=$arr[$i];
                                     $cr++;
                                 }
                                 else
                                 {
                                     $e[$er]=$arr[$i];
                                     $er++;
                                 }
                              }
                               
                               $t=array_merge($r,$e); 
                              
                               
                              session()->put("total",count($t));
                              
                              ?>
                          <div>
                          @if(count($r)>0)
                         
                           <p style="float: right;">₹ {{ $new->price+80 }}</p>
                          <p style="">{{ count($r) }} x ROYAL Seats</p>
                         
                          @endif
                          @if(count($e)>0)
                           <p style="float: right;"> ₹ {{ $new->price}}</p>
                           <p style="">{!! count($e) !!} x EXECUTIVE Seats</p>
                          
                          @endif
                          
                          
                          </div>
                          <div>
                          <p style="display: inline-block">Convenience Fess</p>
                          <p style="float: right;display: inline-block"> ₹ 50<p>
                          </div>
                          <hr/>
                          <div>
                          <h6 class="text-3" style="display: inline-block">Total</h6>
                          <p style="float: right;display: inline-block"> ₹ {{ 50+(count($e)*$new->price)+(count($r)*($new->price+80)) }} <p>
                          </div>
                          <br>
                          <a style="color:red;display: none;" id="error">Invalid Promo.</a>
                          <a style="color:green;" id="success"></a><br>
                          <a onclick="promo();" style="cursor: pointer;color:blue">Have A PromoCode?</a>
                          <hr/>
                         {!! Form::open() !!}
                              <button type="submit" name="book" value="book" class="btn" style="background: #0071cc;color:white;width: 100%;" id="btn-price">Click To Pay Rs.{{ 50+ (count($e)*$new->price) + (count($r)*($new->price+80)) }}</button>
                          {!! Form::close() !!}
                          
                    </div>
                        <div id="myModal" class="modal"  >
                        <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="container text-center" style="padding:6px 0px;background: #0071cc;font-size: 13px;" ><h6 style="color:#fff;margin-top: 10px;">Promo code</h6></div>
                        <div class="container text-center" style="padding:8px;" >
                            <?php
                            $promo=DB::table('tbl_promocode')->get();

                            foreach($promo as $p)
                            {
                            ?>
                            <div><h6 style="font-size: 13px;padding: 15px;display: inline-block">Use <b><?php echo $p->code;  ?></b> Promo Code and get up to  <b>Rs.<?php echo $p->price; ?></b> Off</h6><input onclick="apply('{{ $p->promocode_id }}','{{ 50+ (count($e)*$new->price) + (count($r)*($new->price+80)) }}','{{ csrf_token() }}','<?php echo $p->code; ?>','<?php echo $p->price; ?>')" type="button" value="APPLY" style="background: white;color: #0071cc;border: 2px solid #0071cc;border-radius:4px;display: inline-block;cursor: pointer"/></div>

                            <?php
                            }
                            ?>
                            
                           
            </div>
       </div>
                </div>
            </div>
        </div>
        <!----support--end->
         
        <!----footer--->

        <!---footer-end---->

        <!----footer link--->
        @include('footerlink')
        <!----footer link- end-->
        <script>
             var modal = document.getElementById('myModal');
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function () {
            modal.style.display = "none";
            }
            window.onclick = function (event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
            }
         function promo()
         {
              modal.style.display = "block";
         }
        
        </script>
    </body>
</html>

