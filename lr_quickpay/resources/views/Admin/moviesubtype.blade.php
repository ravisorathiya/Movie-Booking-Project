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
                        <li class="breadcrumb-item"><a href="#"></i>Categories</a></li>

                        <li class="breadcrumb-item active">Movie Sub Type</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                     @if(isset($data))
                        <?php
                       
                       $movietype=$data->parent_id;
                       $movie=$data->name;
                       $msg=$data['error'];
                      
                        ?>
                       
                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Edit Movie Sub Type</h4>

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
                                                        <label for="form_name">Movie Type</label>
                                                        <?php
                                                        $data = DB::table("tbl_movie_type")->where("label", "=", "main")->get();

                                                        $op[''] = "Select Movie Name";
                                                        foreach ($data as $v) {
                                                            $op[$v->type_id] = $v->name;
                                                        }
                                                        ?>
                                                        {!! Form::select('movietype',$op,$movietype,["class"=>"form-control"]) !!}
                                                        <p class="error">{{ $errors->first('movietype')  }}</p>

                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form_name">Movie Sub Type</label>
                                                        {!! Form::text('movie',$movie,array('placeholder'=>"Enter Sub Type" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                        <p class="error">{{ $errors->first('movie')  }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" name="update"  value="update "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-pen"></i>&nbsp;Edit</button>
                                                    <a href="{!! url('Movie-Sub-Type')!!}"class="btn btn-send" style="background: #e2e6ea;color:black;"><i class="fa fa-times"></i>&nbsp;Cancel</a>

                                                </div>
                                                @if( isset($msg) )
                                                
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;margin-left: 15px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oop!</strong> {!! $msg!!}
                                                      </div> 
                                                @endif
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
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
                                    <h4 style="color:black;">Add New Movie Sub Type</h4>

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
                                                        <label for="form_name">Movie Type</label>
                                                        <?php
                                                        $data = DB::table("tbl_movie_type")->where("label", "=", "main")->get();

                                                        $op[''] = "Select Movie Name";
                                                        foreach ($data as $v) {
                                                            $op[$v->type_id] = $v->name;
                                                        }
                                                        ?>
                                                        {!! Form::select('movietype',$op,"",["class"=>"form-control"]) !!}
                                                        <p class="error">{{ $errors->first('movietype')  }}</p>

                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form_name">Movie Sub Type</label>
                                                        {!! Form::text('movie','',array('placeholder'=>"Enter Sub Type" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                        <p class="error">{{ $errors->first('movie')  }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" name="add"  value="add "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                    <button type="reset" class="btn btn-send" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>

                                                </div>
                                                 @if( isset($msg['success']) )
                                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;margin-left: 15px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong></strong> {!! $msg['success'] !!}
                                                      </div> 
                                                @endif
                                                 @if( isset($msg['error']) )
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;margin-left: 15px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oop!</strong> {!! $msg['error'] !!}
                                                      </div> 
                                                @endif

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
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
                                    <h4>View All Movie Sub Type</h4>

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
                                                            <th align="center">Movie Type</th>
                                                            <th align="center">Movie Sub Type</th>
                                                            <th>Edit</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
                                                        $movie = DB::select("SELECT ma.name as main, su.name as sub, su.type_id as m_id from tbl_movie_type as ma, tbl_movie_type as su where su.parent_id = ma.type_id and su.type_id = su.type_id");
                                                        ?>
                                                        @php($i=0)
                                                        @foreach($movie as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i; ?></td>
                                                            <td align="center">{!! $val->main !!}</td>
                                                            <td align="center">{!! $val->sub!!}</td>
                                                            <td><a href="{!!url('Edit-Movie-Type-Data/'.$val->m_id) !!}"><i class="fas fa-pencil-alt" style="font-size:14px; color: #0071cc"></i></a></td>
                                                            <td><a href="{!!url('Remove/movietype/'.$val->m_id) !!}"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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