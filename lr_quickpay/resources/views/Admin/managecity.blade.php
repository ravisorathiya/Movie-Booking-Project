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
                        <li class="breadcrumb-item"><a href="#"></i>Location</a></li>

                        <li class="breadcrumb-item active">City</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                    @if(isset($data))
                        <?php
                            $editstate = $data->parent_id;
                           $editcity=$data->name;
                             $msg=$data['error'];
                   
                        ?>
                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Edit City</h4>

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
                                                            <label for="form_name">State</label>
                                                            <?php
                                                            $data=DB::table("tbl_location")->where("label","=","state")->get();
                                                           
                                                            
                                                            $op['']="Select State Name";
                                                            foreach ($data as $v)
                                                            {
                                                                $op[$v->location_id]=$v->name;
                                                            }
                                                            ?>
                                                            {!! Form::select('state',$op,$editstate,["class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('state')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">City</label>
                                                       
                                                            {!! Form::text('city',$editcity,array('placeholder'=>"Enter City Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                         <p class="error">{{ $errors->first('city')  }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                      <button type="submit" name="update"  value="add "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-pen"></i>&nbsp;Edit</button>
                                                       
                                                        <a href="{!! url('Manage-City')!!}" class="btn btn-send" style="background: #e2e6ea;color:black;"><i class="fa fa-times"></i>&nbsp;Cancel</a>
                                                        @if(isset($msg) )
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;" >
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oop!</strong> {!! $msg !!}
                                                         </div> 
                                                       @endif
                                                    </div>

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
                                    <h4 style="color:black;">Add New City</h4>

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
                                                            <label for="form_name">State</label>
                                                            <?php
                                                            $data=DB::table("tbl_location")->where("label","=","state")->get();
                                                            
                                                            $op['']="Select State Name";
                                                            foreach ($data as $v)
                                                            {
                                                                $op[$v->location_id]=$v->name;
                                                            }
                                                            ?>
                                                            {!! Form::select('state',$op,"",["class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('state')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">City</label>
                                                        {!! Form::text('city','',array('placeholder'=>"Enter City Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                         <p class="error">{{ $errors->first('city')  }}</p>
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
                                                        <strong>Oops!</strong> {!! $msg['error'] !!}
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
                                    <h4>View All City</h4>

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
                                                            <th align="center">State</th>
                                                            <th align="center">City</th>
                                                            <th>Edit</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                         <?php
                                                        $movie=DB::select("select st.name as state, c.name as city,c.location_id as l_id from tbl_location as st,tbl_location as c where st.location_id=c.parent_id" );
                                                        
                                                        ?>
                                                        @php($i=0)
                                                        @foreach($movie as $val)
                                                        
                                                            <tr>
                                                                <td><?php echo ++$i; ?></td>
                                                                <td align="center">{!! $val->state !!}</td>
                                                                <td align="center">{!! $val->city!!}</td>
                                                                <td><a href="{!!url('Edit-City-Data/'.$val->l_id) !!}"><i class="fas fa-pencil-alt" style="font-size:14px; color: #0071cc"></i></a></td>
                                                                <td><a href="{!!url('Remove/location/'.$val->l_id) !!}" onclick="return confirm('Are you sure you want to Delete {{ $val->city  }} ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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