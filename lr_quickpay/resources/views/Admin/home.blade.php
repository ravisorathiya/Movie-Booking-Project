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
                        <li class="breadcrumb-item"><a href="#"></i>Dashboard</a></li>
                    </ol>
                    <section class="content">		
	  
	  
	
	  <div class="row">
          <div class="col-md-4 col-lg-2">
              <?php
              $m=DB::table("tbl_registration")->get();
              $mc=count($m);
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-info">	
				  <h6 class="text-fade">Member</h6>
				  <!--<h1 class="mb-0">24<span class="font-size-12">m</span> 13<span class="font-size-12">s</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-down"></i><?php echo $mc; ?>%</span></h2>
			  </div>
		  </div>
                <div class="col-md-4 col-lg-2">
              <?php
              $t=DB::table("tbl_theater")->get();
              $tc=count($t);
              
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-danger">	
				  <h6 class="text-fade">Theater</h6>
				  <!--<h1 class="mb-0">1<span class="font-size-12">h</span> 58<span class="font-size-12">m</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-up"></i> <?php echo $tc; ?>%</span></h2>
			  </div>
		  </div>
          <div class="col-md-4 col-lg-2">
              <?php
              $f=DB::table("tbl_feedback")->get();
              $fc=count($f);
              
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-primary">	
				  <h6 class="text-fade">Feedback</h6>
				  <!--<h1 class="mb-0">20<span class="font-size-12">m</span> 29<span class="font-size-12">s</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-down"></i><?php echo $fc; ?>%</span></h2>
			  </div>
		  </div>
        
          <div class="col-md-4 col-lg-2">
              <?php
              $e=DB::table("tbl_email_subscriber")->get();
              $et=count($t);
              
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-dark">	
				  <h6 class="text-fade">Email Subscriber</h6>
				  <!--<h1 class="mb-0">1.6<span class="font-size-12">t</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-down"></i> <?php echo $et; ?>%</span></h2>
			  </div>
		  </div>
          <div class="col-md-4 col-lg-2">
              <?php
              $b=DB::table("tbl_booking")->get();
              $tb=count($b);
              
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-success">	
				  <h6 class="text-fade">Movie booking</h6>
				  <!--<h1 class="mb-0">45<span class="font-size-12">r</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-down"></i><?php echo $tb; ?>%</span></h2>
			  </div>
		  </div>
          <div class="col-md-4 col-lg-2">
              <?php 
              $cs=DB::table("tbl_caste")->get();
              $ct=count($cs);
              
              
              ?>
			  <div class="box box-body text-center pull-up box-inverse box-warning">	
				  <h6 class="text-fade">Movie Cast</h6>
				  <!--<h1 class="mb-0">28<span class="font-size-12">r</span></h1>-->
				  <h2 class="mt-0"><span class="text-white-80"><i class="fa fa-arrow-circle-o-up"></i> <?php echo $ct; ?>%</span></h2>
			  </div>
		  </div>
	  </div>
	  
      <div class="row">
	    <div class="col-12 col-lg-4">
		  <div class="box box-solid bg-gray">
				<div class="box-header with-border">
					<h4 class="box-title">Recharges</h4>
					
				</div>	

			  <div class="box-body">
				  <div>
                                      <?php
                                      $r=DB::table("tbl_recharge_transaction")->where("type","=","mobile")->get();
                                      $rc=count($r);
                                     
                                      ?>
					  <div class="flexbox">
						  <div>
					  		<p>Mobile</p>
						  </div>
						  <div>
					  		<span class="badge badge-pill badge-info"><?php echo $rc; ?></span>
						  </div>
					  </div>
					  <div class="progress progress-xxs mb-10">
						<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rc ?>%">
						 
						</div>
					  </div>				  
				  </div>
				  <div>
                                      <?php
                                      $r=DB::table("tbl_recharge_transaction")->where("type","=","dth")->get();
                                      $rc=count($r);
                                     
                                      ?>
					  <div class="flexbox">
						  <div>
					  		<p>DTH</p>
						  </div>
						  <div>
					  		<span class="badge badge-pill badge-info"><?php echo $rc; ?></span>
						  </div>
					  </div>
					  <div class="progress progress-xxs mb-10">
						<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rc ?>%">
						 
						</div>
					  </div>				  
				  </div>
				  <div>
                                      <?php
                                      $r=DB::table("tbl_recharge_transaction")->where("type","=","ges")->get();
                                      $rc=count($r);
                                     
                                      ?>
					  <div class="flexbox">
						  <div>
					  		<p>Ges</p>
						  </div>
						  <div>
					  		<span class="badge badge-pill badge-info"><?php echo $rc; ?></span>
						  </div>
					  </div>
					  <div class="progress progress-xxs mb-10">
						<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rc ?>%">
						  
						</div>
					  </div>				  
				  </div>
				  
				  <div>
                                      <?php
                                      $r=DB::table("tbl_recharge_transaction")->where("type","=","electrycity")->get();
                                      $rc=count($r);
                                     
                                      ?>
					  <div class="flexbox">
						  <div>
					  		<p>Electricity</p>
						  </div>
						  <div>
					  		<span class="badge badge-pill badge-info"><?php echo $rc; ?></span>
						  </div>
					  </div>
					  <div class="progress progress-xxs mb-10">
						<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rc ?>%">
						 
						</div>
					  </div>				  
				  </div>
				  
			  </div>
		  </div>			
	    </div>
	    <div class="col-12 col-lg-4">  
          <!-- AREA CHART -->
          <?php  $seven=DB::select("SELECT COUNT(*)as count FROM tbl_booking WHERE DATEDIFF(SYSDATE(),date) <= 7");  
 
          ?>
          <!-- /.box -->
		  <div class="box">				  
			  <div class="box-header with-border">
				  <h4 class="box-title">Last 7 Days Ticket</h4>
				<div class="box-tools pull-right">
					
                                    
				</div>
			  </div>

			  <div class="box-body">
				  <div class="flexbox">
					  <div>
						  <span class="font-size-50 fa fa-ticket text-danger"></span>
						  <h2 class="countnm mb-5"><?php echo $seven[0]->count; ?></h2>
					  </div>
					  <div id="barchart4"><canvas width="96" height="100" style="display: inline-block; width: 96px; height: 100px; vertical-align: top;"></canvas></div>				
				  </div>
			  </div>
		  </div>						
	    </div>
		<div class="col-12 col-lg-4">
            <div class="box box-solid bg-gray">
				<div class="box-header with-border">
					<h4 class="box-title">Booking Ticket In Theater</h4>
				</div>
				<div class="box-body p-0">
				  <div class="media-list media-list-hover media-list-divided">
					<?php 
                                         $y=DB::select("select count(t.name) as cut,t.name from tbl_theater as t,tbl_movie_time as time,tbl_booking as b where time.time_id=b.time_id and t.theater_id=time.theater_id group by t.name");
                                         
                                         foreach ($y as $val)
                                         {
                                        ?>
                                      
					<a class="media media-single" href="#">
					  <span class="title"><?php echo $val->name; ?></span>
					  <span class="badge badge-pill badge-primary"><?php echo $val->cut; ?></span>
					</a>
                                      <?php 
                                         }
					  ?>
				  </div>
			   </div>
            </div>
          </div>
	  </div>
	  		      
	</section>
                </section>
            </div>  
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