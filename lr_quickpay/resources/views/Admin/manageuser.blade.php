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
                        <li class="breadcrumb-item"><a href="#"></i>Pages</a></li>

                        <li class="breadcrumb-item active">Member</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		
                        <div class="col-12">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>Member</h4>

                                </div>
                                <div class="col-12">         
                                    <div class="box box-solid bg-gray">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="example5" class="table table-bordered table-striped" style="width:100%;text-align: center;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Profile</th>
                                                            <th>Email</th>
                                                            <th>Contact No.</th>
                                                            <!--<th>Status</th>-->
                                                            

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
                                                        $banner=DB::table('tbl_registration')->get();
                                                     
                                                        ?>
                                                        @php($i=0)
                                                        @foreach($banner as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i; ?></td>
                                                            @if($val->name!="")
                                                                <td>{!!$val->name!!}</td>
                                                             @else   
                                                             <td><?php echo "Not Specified"; ?></td>   
                                                             @endif
                                                             @if($val->path!="")
                                                             <td><img src="{{asset($val->path)}}"  class="avatar avatar-xl avatar-bordered" style="border-radius:50%" width="100px;" alt="Avatar" /></td>
                                                             @else   
                                                             <td><img src="{{asset('public/Admin_assets/images/user2.png')}}" class="avatar avatar-xl avatar-bordered" style="border-radius:50%" width="100px;" alt="Avatar"></td>   
                                                             @endif
                                                             
                                                            <td>{!!$val->email!!}</td>
                                                            <td>{!!$val->contact_no!!}</td>
                                                          
                                                            <!--<td><i class="fa fa-toggle-on" style="font-size: 14px;color:#0071cc;cursor: pointer" title="Active"/></td>-->

                                                        </tr>

                                                       @endforeach
                                                      

                                                    </tbody>
<!--                                                    <tfoot>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Message</th>
                                                            <td></td>
                                                        </tr>
                                                    </tfoot>-->
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->     
                                </div>  
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->          
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.box -->      
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