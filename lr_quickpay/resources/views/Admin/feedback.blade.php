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
                        <li class="breadcrumb-item active">Feedback</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                        <div class="col-12">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Feedback</h4>
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
                                                            <th>Message</th>
                                                            <th>Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $feedback=DB::table('tbl_feedback')->get();
                                                    ?>
                                                        @php($i=0)
                                                        @foreach($feedback as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i;  ?></td>
                                                            <td align="center">{!! $val->name !!}</td>
                                                            <td align="center">{!! $val->message !!}</td>
                                                            <td><a href="{!!url('Remove/feedback/'.$val->feedback_id) !!}" onclick="return confirm('Are you sure you want to Delete {{$val->name }} ')" ><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>
                                                        </tr>

                                                         @endforeach
                                                    </tbody> 
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