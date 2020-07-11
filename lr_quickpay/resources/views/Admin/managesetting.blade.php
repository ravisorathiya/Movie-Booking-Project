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
                        <li class="breadcrumb-item"><a href="#"></i>Dashboard</a></li>

                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		
                        
                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Change Profile</h4>

                                </div>
                                <div class="col-12">         
                                    <div>
                                          {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form','enctype'=>'multipart/form-data']) !!}
                                      <div class="messages"></div>
                                                <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name"></label>
                                                            <?php
                                                                $data = DB::table('tbl_admin_login')->where('admin_id','=',session()->get('admin'))->get(); 
                                                                
                                                           ?>
                                                            <center><img src="{{asset($data[0]->path)}}" id="pic" style="border-radius:50%" width="120" height="120" alt="Avatar"></center>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Profile Upload</label>
                                                            <center>
                                                             {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                             
                                                            </center>
                                                            <p class="error">{{ $errors->first('photo')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                        <button type="submit" name="save" value="save" class="btn btn-send disabled " style="background: #0071cc;color:white;width: 100%;">Save Profile</button>
                                                                                             
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                           {!!Form::close() !!}
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
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Change Password</h4>

                                </div>
                                <div class="col-12">         
                                    <div>
                                        <form method="post" novalidate="">
                                            {{csrf_field()}}
                                      <div class="messages"></div>
                                                <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Current Password</label>
                                                            <input id="form_name" type="password" name="cp" class="form-control" placeholder="Enter Current Password" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">New Password</label>
                                                            <input id="form_name" type="password" name="np" class="form-control" placeholder="Enter New Password" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Re-type New Password</label>
                                                            <input id="form_name" type="password" name="rp" class="form-control" placeholder="Enter Re-Type New Password" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                       <input type="submit" name="change" value="Change" class="btn btn-send disabled " style="background: #0071cc;color:white;width:100%"/>                                           
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </form>
                                         @if( isset($msg['error']) ) 
                                                        
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 20px;margin-left: 15px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oops!</strong> {!! $msg['error'] !!}
                                                      </div> 
                                                       @endif
                                        <br/>
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
<script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#pic').attr('src', e.target.result); 
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#photo-btn").change(function() {
  readURL(this);
});
</script>


</html>