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

                        <li class="breadcrumb-item active">Movie Banner</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <section class="content">
                    <div class="row">		
                        
                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Banner</h4>

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
                                                            <label for="form_name">Select Banner</label><br/>
                                                            <div id="preview" style="width: 500px;;background: #e2e6ea;margin: 2px;padding-left: 60px;"></div>
                                                            <input id="btn-photo" type="file" name="photo[]"  multiple="">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send disabled " value="upload" name="upload" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="submit" class="btn btn-send disabled" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                             {!!Form::close() !!}
                                              @if( isset($msg['success']) ) 
                                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong></strong> {!! $msg['success'] !!}
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
                        <div class="col-sm-6">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Banner</h4>

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
                                                            <th>Banner</th>
                                                           
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                      <?php
                                                        $banner=DB::table('tbl_banner')->get();
                                                        
                                                        ?>
                                                        @php($i=0)
                                                        @foreach($banner as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i; ?></td>                                                          
                                                            <td><img src="{{asset($val->path)}}" width="150px" height="80"  alt="Banner"></td>
                                                            <td><a href="{!!url('Remove/banner/'.$val->banner_id) !!}" onclick="return confirm('Are you sure you want to Delete Banner ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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
        <script type="text/javascript">
   
    function previewImages() {

  var $preview = $('#preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
      return alert(file.name +" is not an image");
    } // else...
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview.append($("<img/>", {src:this.result, style:"width:200px;padding:5px;"}));
    });

    reader.readAsDataURL(file);
    
  }

}

$('#btn-photo').on("change", previewImages);
    
</script>
</body>

</html>