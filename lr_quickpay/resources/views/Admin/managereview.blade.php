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
                        <li class="breadcrumb-item"><a href="#"></i>Movie</a></li>

                        <li class="breadcrumb-item active">Review</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		

                        <div class="col-sm-12">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Movie Review</h4>

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
                                                            <th align="center">Member</th>
                                                            <th align="center">Profile</th>
                                                            <th align="center">Movie Name</th>
                                                            <th align="center">Review</th>
                                                            <th align="center">Date</th>
                                                            <th align="center">Status</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        for ($i = 1; $i < 10; $i++) {
                                                            ?>


                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td align="center">Mohit</td>
                                                                <td><img src="{{asset('public/Admin_assets/images/user.png')}}" class="avatar avatar-xl avatar-bordered" style="border-radius:50%" width="100px;" alt="Avatar"></td>
                                                                <td>Total Dhamal</td>
                                                                  <td align="center">Bov j Mast Movie ch</td>
                                                                <td>5-2-2019</td>
                                                                 <td><i class="fa fa-toggle-on" style="font-size: 14px;color:#0071cc;cursor: pointer" title="Active"/></td>
                                                                <td><a href="#"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

                                                            </tr>

                                                        <?php }
                                                        ?>
                                                        </tfoot>
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