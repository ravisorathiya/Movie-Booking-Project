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
                        <li class="breadcrumb-item"><a href="#"></i>Cast</a></li>

                        <li class="breadcrumb-item active">Cast Type</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		

                         @if(isset($data['cast']))
                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Edit Cast Type</h4>

                                </div>
                               <div class="col-12">         
                                    <div>
                                  {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
                                      <div class="messages"></div>
                                                <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Cast Name</label>
                                                          
                                                            {!! Form::text('cast',$data['cast']->type,array('placeholder'=>"Enter Cast Type" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('cast')  }}</p>
                                                           
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                         <button type="submit" name="update"  value="Update "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-pen"></i>&nbsp;Edit</button>
                                                        <a href="{!! url('Manage-Cast-Type') !!}" class="btn btn-send" style="background: #e2e6ea;color:black;" ><i class="fa fa-times"></i>&nbsp;Cancel</a>
                                                         
                                                        @if( isset($data['error']) ) 
                                                        
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oops!</strong> {!! $data['error'] !!}
                                                      </div> 
                                                       @endif
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                             {!! Form::close()  !!}
                                        <br/>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->     
                                </div>  
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->          
                        </div>
                         @else
                            <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Cast Type</h4>

                                </div>
                               <div class="col-12">         
                                    <div>
                                  {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
                                      <div class="messages"></div>
                                                <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Cast Name</label>
                                                          
                                                            {!! Form::text('cast','',array('placeholder'=>"Enter Cast Type" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('cast')  }}</p>
                                                           
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                        <button type="submit" name="add"  value="add "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="reset" class="btn btn-send" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>
                                                        @if( isset($success) )
                                                       
                                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;">
                                                           
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong></strong>{!! $success !!}
                                                      </div>                                                        
                                                        @endif
                                                        @if( isset($error) )
                                                        
                                                        
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oops!</strong> {!! $error !!}
                                                      </div> 
                                                       @endif
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                             {!! Form::close()  !!}
                                        <br/>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->     
                                </div>  
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->          
                        </div>
                         @endif
                        <div class="col-sm-6">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Cast Type</h4>

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
                                                            <th style="padding: 15px 5px 5px 19px;text-align: center" align="center">Cast Type</th>
                                                            <th>Edit</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        <?php
                                                        $state=DB::table('tbl_cast_type')->get();

                                                        ?>
                                                        @php($i=0)
                                                        @foreach($state as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i;  ?></td>
                                                            <td align="center">{!! $val->type !!}</td>
                                                            <td><a href="{!!url('Edit-Casttype-Data/'.$val->cast_type_id) !!}"><i class="fas fa-pencil-alt" style="font-size:14px; color: #0071cc"></i></a></td>
                                                            <td><a href="{!!url('Remove/casttype/'.$val->cast_type_id) !!}" onclick="return confirm('Are you sure you want to Delete {{ $val->type  }} ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

                                                     </tr>

                                                         @endforeach
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