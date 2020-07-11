<?php
$new=DB::select("select * from tbl_movie_time where time_id=".$id);
if(count($new)==0)
{
    return redirect("Book-Ticket");
}
$new=$new[0];
$movi=DB::select("select * from tbl_movie where movie_id=".$new->movie_id)[0];
?>
<html lang="en">

    <!---header---->
   @include('headerlink')
    <!---header end---->
    <style>
     
    </style>
    <body>
        <!----header--->
        @include('header')
        <!----header- end-->
        <section class="page-header page-header-text-light bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>Show Timing  of {{ $movi->name }}</h1>
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
         <center style='margin-top: -28px;'>
                <div class="seatmenu" >
                    <div class="col-md-8 col-sm-12 b">
                        <div class="row" style="padding-top:18px;margin-bottom: 12px">
                            <div class="col-sm-3 col-xs-3" style="border-right: 1px solid #e5e7e9;padding-top: 10px">
                                
                                {{ strtoupper(date("d-F",strtotime($new->date))) }}
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6" style="padding-top: 5px;">
                                <div class="showtime" style="padding-top: 5px" >
                                    <a href="seat.php"  >{{ date('h:i A',strtotime($new->time)) }}</a>
                                </div>
                                
                             </div>
                            
                            </div>
                        
                        </div>
                       <div class="col-sm-4 col-xs-3">
                           {!! Form::open() !!}
                           
                           <button  type="submit" name="add"  value="add" id="bookbtn" style="display: none;"  class="btn btn-primary">Book Now</button>
                            {!! Form::close() !!}
                       </div>
                    </div>
                </div>

                </div>
            </center>
        <!-- Header end -->



        <div id="content">
            <div class="container">
                <div class="bg-light shadow-md rounded p-4" style="margin-top: 15px;">

                    <div class="table-responsive-lg" style="height: 700px;" >
<!--                        <center style="position: absolute;left:42%"><b>ROYAL - ₹ 200</b></center><br>
                        <hr style="width: 75%;margin-bottom: 20px;position: absolute;"/>-->
                        <center>
                            <?php
                            $bs=DB::Select("select * from tbl_booking where time_id=".$id);
                           $bookset=[];
                           $i=0;
                           foreach ($bs as $x)
                           {
                               $a= explode(",", $x->seat_no);
                               foreach ($a as $n)
                               {
                                   $bookset[$i]=$n;
                                   $i++;
                               }
                           }
//                           print_r($bookset);
//                            die();
                            $screend=DB::select("Select * from tbl_screen where screen_id=".$new->screen_id);
                            $seat=DB::select("select * from tbl_booking")[0];
                            $s=$seat->seat_no;
                            $sn=explode(",", $s);
                                                       
                            ?>
                                <div  id='preview' style="min-height:40px;">
                                    <center style="position: absolute;left:42%;font-size: 16px;"><b>ROYAL - ₹ {!! $new->price+80 !!}</b></center><br><hr>
                                    <div style="display: inline-block;width: 50px; "><b style='font-size:12px;margin-right:20px;'>A</b></div>
                                    <?php
                                    $all=explode(",",$screend[0]->pattern);
                                   
                                    $x=65;
                                    $z=0;
                                    $b=0;
                                    ?>
                                    @foreach($all as $s)
                                        
                                    @if($s==1)
                                    @if(in_array(chr($x).($z+1),$bookset))
                                    <a class='seat text-center' style="font-size: 10px;background: gray;color:white"  id='{{ chr($x).($z+1) }}' >{{ ++$z }}</a>
                                    @else
                                    <a class='seat text-center' style="font-size: 10px;"  id='{{ chr($x).($z+1) }}' onclick="booking('{{ chr($x).($z+1) }}','select');">{{ ++$z }}</a>
                                   @endif
                                    @elseif($s==2)
                                    <a class='seatspace' style="color:white;border: white;background: white" ></a>&nbsp;
                                    @elseif($s==0)
                                    
                                    @php($x++)
                                    @if($b==2)
                                    <br><br>
                                    <center style="position: absolute;left:42%;font-size: 16px;"><b>EXECUTIVE - ₹ {!! $new->price !!} </b></center><br><hr>
                                    @endif
                                      
                                    @php($b++)
                                   @php($z=0)
                                   
                                   <br> <div style="display: inline-block;width: 50px; "><b style='font-size:12px;margin-right:20px;'>{{ chr($x) }}</b></div>
                                  
                                   
                                    @endif
                                   
                                    @endforeach
                                    
                               </div>
                        </center>


                    </div>

                </div>
            </div>


        </div><!-- Content end -->
        
        <div id="myModal" class="mymodal" >
            <div class="mymodal-content" style="background: white;">
                <span class="myclose" style="margin-top: 257px;margin-right: 470px;cursor:pointer;">&times;</span>
                <div class="container text-center" style="padding:6px 0px;background: #0071cc;font-size: 13px;" ><h6 style="color:#fff;margin-top: 10px;">Warning</h6></div>
                <div class="container text-center" style="padding:8px;" >
                    <h6 style="font-size: 13px;padding: 20px">You Cannot Select More Then 10 Seats Per Booking.</h6>
                </div>
            </div>
       </div>
        <!----footer--->

        <!---footer-end---->

        <div class="screenfooter"<div class="_26cA">SCREEN THIS WAY</div></div>
        <!----footer link--->
        @include('footerlink')
        <!----footer link- end-->
        <script>
            
             var modal = document.getElementById('myModal');
            
            var span = document.getElementsByClassName("myclose")[0];
            var img = document.getElementById('img');
            span.onclick = function () {
            modal.style.display = "none";
            }
            window.onclick = function (event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
            }
         
        </script>
    </body>
</html>
