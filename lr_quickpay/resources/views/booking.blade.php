

@include('headerlink')
@include('header')

<!--slider over-->
<section class="page-header page-header-text-light bg-secondary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1>Booking Movie</h1>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                    <li><a href="Home">Home</a></li>
                    <li class="active">Booking Movie</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--slider-->
<div class="col-lg-12 col-md-12" style="margin-top: -30px;padding: 0px;height: auto;">
    <div class="owl-carousel owl-theme slideshow single-slider owl-loaded owl-drag"  >
        <div class="owl-stage-outer" style="height: 300px;">
            <div class="owl-stage" style="transform: translate3d(-1436px, 0px, 0px); transition: all 0s ease 0s; width: 4308px;height: 300px;">
                <?php
                $banners = DB::table('tbl_banner')->get();
                ?>
                @foreach($banners as $b)
                <div class="owl-item " style="width: 718px;height: auto;">
                    <div class="item"><a href="#"><img alt="CITIFRIDAY" src="{!! asset($b->path)!!}" role="presentation" ></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="owl-nav" style="display: none">
        <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button>
        <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button>
    </div>
</div>

</br>
<div id="content" style="padding:0px;">
    <div class="container-fluid">
        <div class="bg-light shadow-md rounded p-4" >
            <div class="row">
                <div class="col-xl-12  col-md-12 mymovie">

                    <nav class="navbar navbar-expand-lg primary-menu " style="">
                       
                        <div id="booking-menu" class="collapse navbar-collapse mymovie center-modal " style="margin-left: 33.5%;"> 
                            <center>
                            <input type="button"  style="margin-right: 20px;width: 200px;font-size: 14px;text-align: center;padding: 10px;background:#007bff; color:white" id="btn1"  name="now" class="btn"    value="Currently Showing"/>
                            <input type="button"  id="btn2" name="up" class="btn btn-outline" style="width: 200px;font-size: 14px;text-align: center;padding: 10px;"  value="Upcoming Movies"/>
                            </center>
                            
                        </div>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#booking-menu"> <span></span> <span></span> <span></span> </button>
                    </nav>

                </div>
                <div class="container-fluid movie col-xl-12 col-lg-12 col-sm-6" id="now" style="margin-top: 20px;">
                    <ul class="pl-xs-15">
                        <?php
                        $datas=DB::select("select * from tbl_movie");
                        
                        ?>
                        @foreach($datas as $d)
                            @if($d->relese_date <= date('Y-m-d'))
                                <?php
                                $path= explode(",", $d->poster);
                                ?>
                                <li class="mb-xs-20" >
                                    <div class="size" style="margin: 20px 0px;">
                                        <a href="{!!url('Movie-Show/'.$d->movie_id) !!}">
                                            <img src="{{  asset($path[0])}}" alt="" style="margin-bottom: 10px;"/>
                                            
                                            <b style="color:black; margin-left: 15px;">{!! $d->name !!}
                                            </b>
                                            <?php
                                            $x=DB::select("select m.name  from tbl_movie_type as t,tbl_movie_type as m where t.parent_id=m.type_id and t.type_id=".$d->type_id);

                                            ?>
                                            @if($x[0]->name=="Bollywood")
                                            <p style="margin-left: 15px;">Hindi</p>
                                            @elseif($x[0]->name=="Hollywood")
                                            <p style="margin-left: 15px;">English</p>
                                            @else
                                            <p style="margin-left: 15px;">Tamil</p>
                                            @endif
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    <ul>   
                </div>
                <div class="container-fluid movie col-xl-12 col-lg-12 col-sm-6" id="up"  style="margin-top: 20px;display: none;">
                    <ul class="pl-xs-15">
                        @foreach($datas as $d)
                            @if($d->relese_date > date('Y-m-d'))
                                <?php
                                $path= explode(",", $d->poster);
                                ?>
                                <li class="mb-xs-20" >
                                    <div class="size" style="margin: 20px 0px;">
                                        <a href="{!!url('Movie-Show/'.$d->movie_id) !!}">
                                            <img src="{{  asset($path[0])}}" alt="" style="margin-bottom: 10px;"/>
                                            
                                            <b style="color:black; margin-left: 15px;">{!! $d->name !!}
                                            </b>
                                            <?php
                                            $x=DB::select("select m.name  from tbl_movie_type as t,tbl_movie_type as m where t.parent_id=m.type_id and t.type_id=".$d->type_id);

                                            ?>
                                            @if($x[0]->name=="Bollywood")
                                            <p style="margin-left: 15px;">Hindi</p>
                                            @elseif($x[0]->name=="Hollywood")
                                            <p style="margin-left: 15px;">English</p>
                                            @else
                                            <p style="margin-left: 15px;">Gujarati</p>
                                            @endif
                                        </a>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    <ul>   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content end -->
 @include('footer')
@include('footerlink')

<script type="text/javascript">
$(function(){
 $('#btn1').on('click',function(){
   $('#up').hide();
   $('#now').show();
 });
 $('#btn2').on('click',function(){
   $('#up').show();
   $('#now').hide();
 });
});

$(document).ready(function(){
        $("#btn1").click(function(){
            $('#btn1').css('color', 'black');
            $('#btn2').css('color', 'black');
            $(this).css('background-color', '#007bff');
            $(this).css('color', '#fff');
            $('#btn2').css('background-color', '#e7e9ed');
        });
        $("#btn2").click(function(){
             $('#btn1').css('color', 'black');
            $('#btn2').css('color', 'black');
            $(this).css('background-color', '#007bff');
            $(this).css('color', '#fff');
            $('#btn1').css('background-color', '#e7e9ed');
        });
    });
</script>
