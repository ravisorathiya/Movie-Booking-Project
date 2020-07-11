<header class="main-header" style="background: #0071cc;">
    <!-- Logo -->
    <a href="Admin-Dashboard" class="logo">
      <!-- mini logo -->
	  <b class="logo-mini">
              <span class="light-logo"><img src="{{asset('public/Admin_assets/images/icon.png')}}"  width="30px" height="28px;" style="margin-top: -2px;" alt="logo"></span>
          </b>
      <!-- logo-->
        <span class="logo-lg" style="">
          <h1 style="color: white;margin-top: 0px;font-size: 22px;">QuickPay</h1>
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="mdi mdi-menu" style="font-size: 18px;" ></i><span class="sr-only">Toggle navigation</span>
            </a>
         <?php
                        $data = DB::table('tbl_admin_login')->where('admin_id','=',session()->get('admin'))->get();
         ?>
    <div style="background: white;width: auto;height: 50px;border-radius: 30px;margin-right: 20px; ">
         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav" style="margin-right: 15px;text-align: right;">
                <li class="user user-menu focus"> <img src="{{asset($data[0]->path)}}" class="user-image rounded-circle b-2" style="margin-left: 10px;width: 40px;height: 40px;" alt="User Image"></li>
		  <!-- User Account-->
                <li class="dropdown user user-menu" style="margin-top: -8px;">
                    <a href="#" class="dropdown-toggle" data-toggle ="dropdown">
                   
                        <span class="font-size-14" style="line-height: 0;color: #0071cc;margin-top: 10px;">Administration Department</span></a>
                        <span class="font-size-12" style="display: block;color:gray;text-align: center;margin-top: -5px;">{{ date('d-m-Y h:i:s',strtotime($data[0]->last_login)) }}</span><br/>

                    <ul class="dropdown-menu scale-up">
                      <!-- Menu Body -->
                        <li class="user-body bt-0">
                            <div class="row no-gutters">                
                            <div class="col-12 text-left">
                                <a href="Manage-Setting"><i class="mdi mdi-settings"></i> Setting</a>
                            </div>
                            <div role="separator" class="divider col-12"></div>
                            <div class="col-12 text-left">
                                <a href="Admin-Logout"><i class="mdi mdi-power-settings"></i> Logout</a>
                            </div>				
                            </div>
                        <!-- /.row -->
                      </li>
                    </ul>
                </li>
          <!-- Control Sidebar Toggle Button -->
            </ul>
      </div>
    </div>
    </nav>
</header>