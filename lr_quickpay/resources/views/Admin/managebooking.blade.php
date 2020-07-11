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
                        <li class="breadcrumb-item"><a href="#"></i>Manage Booking</a></li>

                        <li class="breadcrumb-item active">Promo code</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		

                            <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Promo code</h4>

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
                                                            <label for="form_name">Promo Code</label>
                                                           {!! Form::text('promo','',array('placeholder'=>"Enter Promo Code" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z0-9 ]+$'))  !!}
                                                            <p class="error">{{ $errors->first('promo')  }}</p>
                                                        </div>
                                                          <div class="form-group">
                                                            <label for="form_name">Promo Code Price</label>
                                                           {!! Form::text('price','',array('placeholder'=>"Enter Promo Code Price" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z0-9 ]+$'))  !!}
                                                            <p class="error">{{ $errors->first('price')  }}</p>
                                                        </div>
                                                          <div class="form-group">
                                                            <label for="form_name">Minimum Bill Price</label>
                                                           {!! Form::text('bill','',array('placeholder'=>"Enter Minimum Bill Price" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z0-9 ]+$'))  !!}
                                                            <p class="error">{{ $errors->first('bill')  }}</p>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                        <button type="submit" name="add"  value="add "class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="reset" class="btn btn-send" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>
                                                        @if( isset($data['success']) )
                                                       
                                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;">
                                                           
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong></strong>{!! $data['success'] !!}
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
                                                            <th>Promo Code</th>
                                                            <th>Price</th>
                                                            <th>Minimum Bill Price</th>
                                                            <th>Status</th>
                                                           

                                                        </tr>
                                                    </thead>
                                                    <tbody id='promo'>
                                                      
                                                        <?php
                                                        $code=DB::table('tbl_promocode')->get();

                                                        ?>
                                                        @php($i=0)
                                                        @foreach($code as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i;  ?></td>
                                                            <td align="center">{!! $val->code !!}</td>
                                                            <td align="center">{!! $val->price !!}</td>
                                                            <td align="center">{!! $val->minimum !!}</td>
                                                            @if($val->status==1)
                                                           <td><i class="fa fa-toggle-on" style="font-size: 14px;color:#0071cc;cursor: pointer" onclick="chnage('promo','{!! $val->promocode_id !!}','{!!  csrf_token() !!}')" title="Active"/></td>
                                                           @else
                                                            <td><i class="fa fa-toggle-off" style="font-size: 14px;color:#0071cc;cursor: pointer" onclick="chnage('promo','{!! $val->promocode_id !!}','{!!  csrf_token() !!}')" title="Active"/></td>
                                                           @endif
                                                            

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