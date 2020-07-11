<html lang="en">

    <!---header---->
    @include('headerlink')
    <!---header end---->

    <body>
        <!----header--->
        @include('header')
        <!----header- end-->
        <?php 
        $id = Request::segment(2); 
        $data = DB::table("tbl_movie")->where("movie_id","=",$id)->get()[0];
       
       ?>
        <style>
            .show-time li{
                padding: 20px;
            }
            
/*            .show-time li a{
                color:black;
               border: 1px solid black;
              
            }*/
            .show-time li .active
            {
               border: 1px solid #e5e7e0;
               padding: 12px;
               border-radius: 10%;
               border-bottom: none !important;
               
            }
            
        </style>
        <!-- Page Header
       ============================================= -->
        <section class="page-header page-header-text-light bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>Show Timing  of <?php echo $data->name; ?></h1>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                            <li><a href="Home">Home</a></li>
                            <li class="active">Show Timing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Page Header end -->

        <!-- Content
        ============================================= -->
        <?php 
            $dr= explode(",",$data->poster)
        ?>
        <div style="margin-top:-30px;">
            <a class="youtube-link" youtubeid="{!! $data->trailer !!}" ><img src="{{asset($dr[0])}}" alt="" width="100%" height="100%"/><i class="fa fa-play-circle play"  title="Click to Show Tailer"></i></a>
        </div>
        
        <div id="content">
            <div class="container col-lg-12 col-md-12" style="padding: 0px; margin-top: -200px;">
                <div class="bg-light shadow-md rounded p-4" style="width: 100%;">
                    <div class="bg-light shadow-md rounded">
                        <ul class="nav nav-tabs" role="tablist">
                       
                        @if($data->relese_date > date('Y-m-d'))
                            <!--<li role="presentation" class="active nav-item"><a href="#showtime" class="nav-link text-2 active show" aria-controls="home" role="tab" data-toggle="tab">Showtimes</a></li>-->
                            <li role="presentation" class="active nav-item"><a href="#aboutmovie" class="nav-link text-2" aria-controls="profile" role="tab" data-toggle="tab">About Movie</a></li>
                        @else
                            <li role="presentation" class="active nav-item"><a href="#showtime" class="nav-link text-2 active show" aria-controls="home" role="tab" data-toggle="tab">Showtimes</a></li>
                            <li role="presentation" class="nav-item"><a href="#aboutmovie" class="nav-link text-2" aria-controls="profile" role="tab" data-toggle="tab">About Movie</a></li>
                        @endif
                        </ul>
                            <!-- Tab panes -->
                        <div class="tab-content" >
                         
                        
                            @if($data->relese_date < date('Y-m-d'))
                            
                                <div role="tabpanel" class="tab-pane active" id="showtime">
                                <div class="bg-light shadow-md rounded datemenu">
                                     <ul class="nav nav-tabs show-time" role="tablist">
                                         <?php
                                         $cd=strtotime(date('Y-m-d'));
                                        $sd=date('Y-m-d',$cd+(60*60*24*6));
                                         $show=DB::select("select * from tbl_movie_time where date >= '".date('Y-m-d')."'  and  date < '".$sd. "' and movie_id=".$id." order by date");
                                         $time="";
                                         $i=0;
                                         ?>
                                        @foreach($show as $dt)
                                        @if($time!=$dt->date)
                                        <?php
                                        $time=$dt->date;
                                        ?>
                                        <li role="presentation" ><a href="#a{!! date('d',strtotime($dt->date)) !!}" <?php if($i==0){
                                        echo 'class="active"'; }?>  aria-controls="profile" role="tab" data-toggle="tab"><span>{!! date('d-M',strtotime($dt->date)) !!}</span></a></li>
                                        @endif
                                        @php($i++)
                                        @endforeach
                                        
                                      </ul>
                                     <div class="tab-content">
                                        <?php
                                        
                                        $time="";
                                        $i=0;
                                        
                                        ?>
                                        @foreach($show as $dt)
                                        
                                        @if($time!=$dt->date)
                                        <?php
                                        $time=$dt->date;
                                        $the=DB::select("select * from tbl_movie_time where movie_id=".$id." and date='".$dt->date."' order by theater_id");
                                        $t="" ;
                                        ?>
                                        
                                         <div class="tab-pane <?php if($i==0){
                                        echo 'active'; }?>" aria-controls="profile" role="tab" data-toggle="tab" id="a{!! date('d',strtotime($dt->date)) !!}"> 
                                             @foreach($the as $th)
                                                @if($t!=$th->theater_id)
                                                @php( $t=$th->theater_id)
                                            <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <br>
                                                        <h3 class="moviename">
                                                            
                                                            {!! DB::select("select name from tbl_theater where theater_id=".$th->theater_id)[0]->name !!}
                                                            
                                                        </h3>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 b">
                                                        <div class="row">
                                                            <div class="col-sm-2 col-xs-2">

                                                            </div>
                                                            <br>
                                                            <div class="col-md-12 col-sm-10 col-xs-10">
                                                                <?php
                                                                $tim=DB::select("select * from tbl_movie_time where movie_id=".$id." and theater_id=".$th->theater_id." and date='".$th->date."' order by time");
                                                                ?>
                                                                @foreach($tim as $tym)
                                                                <div class="showtime" >
                                                                    <a href="" onclick="rdi('{!! url('Select-Seat/'.$tym->time_id) !!}');"  title="{!! "EXECUTIVE:".$tym->price."  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;ROYAL :" .($tym->price+80) !!}">{!! date('h:i A',strtotime($tym->time)) !!}</a>
                                                                </div>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                    <hr>
                                                @endif
                                               @endforeach
                                                
                                        </div>
                                        
                                        @endif
                                        @php($i++)
                                        @endforeach
                                        
                                     </div>
                                </div>

                            </div>
                            @endif
                        
                            <br/>
                             @if($data->relese_date < date('Y-m-d'))
                                <div role="tabpanel" class="tab-pane" id="aboutmovie">
                                <div style="font-size: 16px;"><h5>Brief</h5></div>
                                <p style="line-height: 1.7;">{!! $data->overview !!}</p>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Videos</h5></div>    
                                <div class="row">
                                <?php 
                                $dat = explode(",", $data->songs);
                                foreach ($dat as $s)
                                {
                                ?>
                                    <div class="col-md-3"><iframe width="270" height="315" src="{{asset($s)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                
                                <?php
                                }
                                ?>
                                </div>
                                </br>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Posters</h5></div>   
                                <div class="row">
                                        <?php 
                                    $dat = explode(",", $data->poster);
                                    foreach ($dat as $p)
                                    {
                                    ?>
                                        <div class="col-md-3"><img width="270" height="315" src="{{asset($p)}}" alt=""/></div>

                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                                <br/>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Lead Cast</h5></div> 
                                <div class="row">
                                  <?php
                                    $cas = explode("|", $data->cast_id);
                                   
                                     foreach ($cas as $c)
                                    {
                                        $ct = DB::select("select c.name,c.profile,c.type_id,ctype.type from tbl_caste as c,tbl_cast_type as ctype where ctype.cast_type_id=c.type_id and c.cast_id=".$c)[0];
                                   ?>    
                                    <div class="cast" style="margin-top: -25px;">
                                        <img style=" width: 100px; height: 100px;border-radius: 50px;display" src="{{asset($ct->profile)}}" alt=""/>
                                        <p style="text-align: center">{!! $ct->name !!}</p>
                                        <p style="text-align: center;color: blue;margin-top: -20px;">{!! $ct->type !!}</p>
                                        </div> 
                                    <?php        
                                    }
                                    
                                   ?>
                                 </div>
                            </div>
                            @else
                            <div role="tabpanel" class="tab-pane active" id="aboutmovie">
                                <div style="font-size: 16px;"><h5>Brief</h5></div>
                                <p style="line-height: 1.7;">{!! $data->overview !!}</p>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Videos</h5></div>    
                                <div class="row">
                                <?php 
                                $dat = explode(",", $data->songs);
                                foreach ($dat as $s)
                                {
                                ?>
                                    <div class="col-md-3"><iframe width="270" height="315" src="{{asset($s)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                
                                <?php
                                }
                                ?>
                                </div>
                                </br>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Posters</h5></div>   
                                <div class="row">
                                        <?php 
                                    $dat = explode(",", $data->poster);
                                    foreach ($dat as $p)
                                    {
                                    ?>
                                        <div class="col-md-3"><img width="270" height="315" src="{{asset($p)}}" alt=""/></div>

                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                                <br/>
                                <div style="font-size: 16px;padding: 0px 0px 15px;"><h5>Lead Cast</h5></div> 
                                <div class="row">
                                  <?php
                                    $cas = explode("|", $data->cast_id);
                                   
                                     foreach ($cas as $c)
                                    {
                                        $ct = DB::select("select c.name,c.profile,c.type_id,ctype.type from tbl_caste as c,tbl_cast_type as ctype where ctype.cast_type_id=c.type_id and c.cast_id=".$c)[0];
                                   ?>    
                                    <div class="cast" style="margin-top: -25px;">
                                        <img style=" width: 100px; height: 100px;border-radius: 50px;display" src="{{asset($ct->profile)}}" alt=""/>
                                        <p style="text-align: center">{!! $ct->name !!}</p>
                                        <p style="text-align: center;color: blue;margin-top: -20px;">{!! $ct->type !!}</p>
                                        </div> 
                                    <?php        
                                    }
                                    
                                   ?>
                                 </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Content end -->


<!----footer--->
@include('footer')
<!---footer-end---->


<!----footer link--->
@include('footerlink')
<script  type="text/javascript">
    function rdi(path)
    {
    document.location=path;
    }
</script>
<!----footer link- end-->
</body>
</html>

