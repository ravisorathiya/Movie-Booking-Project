<!DOCTYPE html>
<html lang="en">

    @include('Admin/headerlink')



    <body class="hold-transition skin-purple sidebar-mini sidebar-collapse">
        <div class="wrapper">

            @include('Admin/header')

            <!-- Left side column. contains the logo and sidebar -->
            @include('Admin/menu')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"></i>Ticket</a></li>

                        <li class="breadcrumb-item active">View Book Ticket</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		
                        <div class="col-sm-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">View Book Ticket</h4>
                                </div>
                               <div class="col-12">         
                                   <div class="col-lg-12">
                    
                            <?php
                           
                                
                                $t=DB::select("select t.name as theater, b.seat_no as seat,b.no_of_seat as total,b.booking_id as book_id, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s,tbl_booking as b, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = b.time_id and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id  order by b.booking_id desc" );
                               $ct =count($t);
                               
                            if($ct!=0) 
                            {    
                                foreach($t as $tt)
                                {
                                    ?>
                                        <div id="myticket" class=" rounded p-3 mb-4 mb-lg-0" style="background:white;border: 1px solid #e3e7e9;width:362px;margin-right: 10px; margin-top: 10px;height: 230px;float:left; border-radius:10px; " class="col-md-6" >
                                            <div style="padding: 0px;im">
                                            <div style="display: inline-block;float: left"><img class="ml-auto" src="{{ asset($tt->poster) }}" style="margin-top: 15px;"  width="75px" height="85px" alt="visa" title=""></div>
                                            <div style="display: inline-block;"><p style="margin-top: 10px;margin-left: 10px;letter-spacing: 0.2"><b>{{$tt->movie}}</b></p>
                                                <div style="margin-top: -21px;"><p style="margin-top: 10px;margin-left: 10px;letter-spacing: 0.2;display: inline-block;">{!! date('D, d-M',strtotime($tt->time)) !!}</p>
                                                       <p style="margin-left: 10px;letter-spacing: 0.2;display: inline-block;">{!! date('h:i A',strtotime($tt->time)) !!}</p></div>
                                                       <div style="margin-top: -15px;"><p style="margin-left: 10px;letter-spacing: 0.2;">{!! $tt->theater !!}</p></div>
                                            </div>
                                             </div>
                                            <hr/>
                                            <div >
                                                <div style="display: inline-block;float: left" class="text-center col-md-2">
                                                    <h2>{{ $tt->total }}</h2>
                                                    <p>Ticket</p>
                                                </div>
                                                <div  style="display: inline-block"  class="col-md-10">
                                                    <p>Exclusive : {{ $tt->seat }}</p>
                                                </div>
                                            </div>
                                        </div>
                     <?php
                            
                                }
                            }
                            else {
                           ?>
                                <div style="padding: 70px;border: 1px solid #e5e7e9;">
                                    <h5 style="color:#e5e7e9;text-align: center">Not Ticket Generated</h5>
                                </div>
                       <?php             
                        }
                        
//                $q = "SELECT t.name as theater, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = 140 and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id";
//                $t=DB::select("SELECT t.name as theater, s.name as screen, m.name as movie,m.poster as poster,mt.date as date, mt.time as time from tbl_theater as t, tbl_screen as s, tbl_movie as m, tbl_movie_time as mt WHERE mt.time_id = 140 and mt.theater_id = t.theater_id and mt.screen_id = s.screen_id and mt.movie_id = m.movie_id");
                 ?>
                  </div>
                                </div> <br/> 
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->          
                        </div>
                    </div>
                     
                </section></div>  


            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('Admin/footer')

<!-- Control Sidebar -->

<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('Admin/footerlink')

</body>


</html>