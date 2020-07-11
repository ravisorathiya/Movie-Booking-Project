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

                        <li class="breadcrumb-item active">Cast Name</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                        @if(isset($data['cast']))
                       <?php
                       $name=$data['cast']->name;
                       $description=$data['cast']->description;
                       $profile=$data['cast']->profile;
                       $typeid=$data['cast']->type_id;
                       
//                      $type=DB::table('tbl_caste')->where("cast_type_id","=",$typeid)->get();
//                      print_r($type);
//                      die();
//                        
                     //    $a=DB::table("tbl_cast_type")->where("cast_type_id","=",$typeid)->get();
                       ?>
                            <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Edit Cast Name</h4>
                                </div>
                                <div class="col-md-12">         
                                    <div>
                                         {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                         <div class="form-group">
                                                            <label for="form_name">Cast Type</label>
                                                            <?php
                                                            $data=DB::table("tbl_cast_type")->get();
                                                            $casttype=DB::table("tbl_cast_type")->where("cast_type_id","=",$typeid)->get();
                                                            $a[$casttype[0]->cast_type_id]=$casttype[0]->type;
                                                           
                                                            $op['']="Select Cast";
                                                            foreach ($data as $v)
                                                            {
                                                                $op[$v->cast_type_id]=$v->type;
                                                            }
                                                            ?>
                                                            {!! Form::select('casttype',$op,$casttype[0]->cast_type_id,["class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('casttype')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="form_name">Cast</label>
                                                        {!! Form::text('cast',$name,array('placeholder'=>"Enter Cast Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                         <p class="error">{{ $errors->first('cast')  }}</p>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="form_name">Profile</label>
                                                      
                                                          {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                           <p class="error">{{ $errors->first('photo')  }}</p>
                                                           <div class="help-block with-errors"></div>
                                                        </div>
                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        
                                                        <div class="form-group" >
                                                            <label for="form_message">Description</label>
                                                            <textarea id="editor1" class="ckeditor" name="msg" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message.">{{$description}}</textarea>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                            
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="update"  value="update" class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-pencil-alt"></i>&nbsp;Edit</button>
                                                         <a href="{!! url('Manage-Cast') !!}" class="btn btn-send" style="background: #e2e6ea;color:black;" ><i class="fa fa-times"></i>&nbsp;Cancel</a>


                                                    </div>
                                                 
                                                  @if( isset($data['error']) ) 
                                                        <?php   echo "hi"; die();  ?>
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;margin-left: 15px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oops!</strong> {!! $data['error'] !!}
                                                      </div> 
                                                       @endif
                                                </div>
                                            </div>
                                        </form>
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
                            <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Cast Name</h4>

                                </div>
                                <div class="col-md-12">         
                                    <div>
                                         {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                         <div class="form-group">
                                                            <label for="form_name">Cast Type</label>
                                                            <?php
                                                            $data=DB::table("tbl_cast_type")->get();
                                                            
                                                            $op['']="Select Cast Type Name";
                                                            foreach ($data as $v)
                                                            {
                                                                $op[$v->cast_type_id]=$v->type;
                                                            }
                                                            ?>
                                                            {!! Form::select('casttype',$op,"",["class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('casttype')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="form_name">Cast</label>
                                                        {!! Form::text('cast','',array('placeholder'=>"Enter Cast Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                         <p class="error">{{ $errors->first('cast')  }}</p>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="form_name">Profile</label>
                                                      
                                                          {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                           <p class="error">{{ $errors->first('photo')  }}</p>
                                                           <div class="help-block with-errors"></div>
                                                        </div>
                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        
                                                        <div class="form-group" >
                                                            <label for="form_message">Description</label>
                                                            <textarea id="editor1" class="ckeditor" name="msg" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message.">{{old('msg')}}</textarea>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                            
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="add"  value="add" class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
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
                                        </form>
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
                        <div class="col-sm-12">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Cast</h4>

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
                                                            <th align="center">Cast Type</th>
                                                            <th align="center">Cast</th>
                                                            <th align="center">Profile</th>
                                                            <th align="center">Description</th>
                                                            <th>Edit</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                      <?php
                                                        $cast=DB::select("select ct.type as ctype,c.name as cast,c.cast_id as c_id,c.profile as pro,c.description as msg  from tbl_cast_type as ct,tbl_caste as c where ct.cast_type_id=c.type_id" );
                                                       
                                                        ?>
                                                   
                                                        @php($i=0)
                                                        @foreach($cast as $val)
                                                        
                                                            <tr>
                                                                <td><?php echo ++$i; ?></td>
                                                                <td align="center">{!! $val->ctype !!}</td>
                                                                <td align="center">{!! $val->cast !!}</td>
                                                                <td><img src="{{asset($val->pro)}}" width="80px" height="50px"alt="Banner"></td>
                                                                  <td align="center">{!! $val->msg !!}</td>
                                                                <td><a href="{!!url('Edit-Cast-Data/'.$val->c_id) !!}"><i class="fas fa-pencil-alt" style="font-size:14px; color: #0071cc"></i></a></td>
                                                                <td><a href="{!!url('Remove/cast/'.$val->c_id) !!}" onclick="return confirm('Are you sure you want to Delete {{ $val->cast  }} ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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