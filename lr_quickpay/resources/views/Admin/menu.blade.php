 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar" style="margin-top: 13px;">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
          <a href="{{ url('Admin-Dashboard')}}">
            <i class="mdi mdi-home-outline"></i> <span style="color:white;">Dashboard</span>
            
          </a>
        </li>

		<li class="treeview">
                    <a href="#">
                        <i class="mdi mdi-file"></i> <span style="color:white;">Pages</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{!! url('Manage-Feedback') !!}"><i class="mdi mdi-menu-right"></i>Feedback</a></li>
              <li><a href="{!! url('Manage-Support') !!}"><i class="mdi mdi-menu-right"></i>Support Request</a></li>
                <li><a href="{!! url('Manage-Email-Subscribe') !!}"><i class="mdi mdi-menu-right"></i>Email Subscriber</a></li>
                <li><a href="{!! url('Manage-Banner') !!}"><i class="mdi mdi-menu-right"></i>Movie Banner</a></li>
                <li><a href="{!! url('Manage-User') !!}"><i class="mdi mdi-menu-right"></i>Member</a></li>
			
          </ul>
        </li>
		
		<li class="treeview">
		  <a href="#"><i class="mdi mdi-map-marker"></i><span style="color:white;">Location </span>
			<span class="pull-right-container">
		  		
			</span>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="{!! url('Manage-State') !!}"><i class="mdi mdi-menu-right"></i>State</a></li>
			<li><a href="{!! url('Manage-City') !!}"><i class="mdi mdi-menu-right"></i>City</a></li>
						  
		  </ul>
		</li>            
		<li class="treeview">
		  <a href="#"><i class="mdi mdi-sitemap"></i><span style="color:white;">Categories</span>
			<span class="pull-right-container">
			 
			</span>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="{!! url('Movie-Type') !!}"><i class="mdi mdi-menu-right"></i>Movie Type</a></li>
			<li><a href="{!! url('Movie-Sub-Type') !!}"><i class="mdi mdi-menu-right"></i>Sub Type</a></li>
					  
		  </ul>
		</li>   		
		<li class="nav-devider"></li>  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-account"></i>
            <span style="color:white;">Cast</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('Manage-Cast-Type') !!}"><i class="mdi mdi-menu-right"></i>Cast Type</a></li>
            <li><a href="{!! url('Manage-Cast') !!}"><i class="mdi mdi-menu-right"></i>Cast</a></li>
          
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-theater"></i>
            <span style="color:white;">Theater</span>
            <span class="pull-right-container">
             
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('Manage-Theater') !!}"><i class="mdi mdi-menu-right"></i>Theater</a></li>
            <li><a href="{!! url('Manage-Screen') !!}"><i class="mdi mdi-menu-right"></i>Screen</a></li>
           

          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-play-circle-outline"></i>
            <span style="color:white;">Movie</span>
            <span class="pull-right-container">
         
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('Manage-Movie') !!}"><i class="mdi mdi-menu-right"></i>Movie</a></li>
            <li><a href="{!! url('Manage-Show-Time') !!}"><i class="mdi mdi-menu-right"></i>Show Time</a></li>
            <!--<li><a href="{!! url('Manage-Review') !!}"><i class="mdi mdi-menu-right"></i>Review</a></li>-->

          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fas fa-database"></i>
            <span style="color:white;">Manage Booking</span>
            <span class="pull-right-container">
         
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('Manage-Booking') !!}"><i class="mdi mdi-menu-right"></i>promo code</a></li>
            

          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fas fa-ticket-alt"></i>
            <span style="color:white;">View Ticket</span>
            <span class="pull-right-container">
         
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('View-Ticket') !!}"><i class="mdi mdi-menu-right"></i>Ticket</a></li>
            

          </ul>
        </li>

      </ul>
        
      <!-- sidebar menu-->
    
    </section>
  </aside>
