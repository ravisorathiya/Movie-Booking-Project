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
                        <li class="breadcrumb-item"><a href="#"></i>Theater</a></li>

                        <li class="breadcrumb-item active">Screen</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                        @if(isset($data['theater']))
                        <?php
                        
                       
                        $name= $data['theater']->name;
                        $email= $data['theater']->email;
                        $address= $data['theater']->address;
                        $mobile= $data['theater']->contact;
                        $logo= $data['theater']->logo;
                        $map= $data['theater']->map;
                        $l_id = $data['theater']->location_id;
                        

                  
                        ?>
                        @endif
                       
                        
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Screen</h4>

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
                                                            <label for="form_name">Theater</label>
                                                          <?php
                                                          $th=DB::table("tbl_theater")->get();
                                                          $op[""]="Select Theater";
                                                          foreach($th as $t)
                                                          {
                                                              $op[$t->theater_id]=$t->name;
                                                          }
                                                          ?>
                                                           {!! Form::select('theater',$op,'',["class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('theater')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                          <div class="form-group">
                                                            <label for="form_name">Screen</label>
                                                            {!! Form::text('screen','',array('placeholder'=>"Enter screen Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('screen')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                          <div class="form-group">
                                                            <label for="form_name">Number Of Seat</label>
                                                            {!! Form::text('seat','',array('placeholder'=>"Enter Seat No." , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[0-9]+$'))  !!}
                                                             <p class="error">{{ $errors->first('seat')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                     
                                                       

                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                          <div class="form-group">
                                                            <label for="form_name">Picture</label>
                                                         {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                         <p class="error">{{ $errors->first('photo')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                                                                                
                                                       <div class="form-group">
                                                            <label for="form_name">Screen Dimensional</label>
                                                            {!! Form::text('dimension','',array('placeholder'=>"Enter Screen Dimensional" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('dimension')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                       <div class="form-group">
                                                            <label for="form_name">Sound</label>
                                                            {!! Form::text('sound','',array('placeholder'=>"Enter Sound" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('sound')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                       
                                                       
                                                       
                                                            
                                                    </div>
                                                    <div class="col-md-12" style="padding:20px;">
                                                        <div  style="border-radius:5px;padding:5px;">
                                                        <button type="button" name="add" onclick="addseat('seat','{{ csrf_token() }}');"  id='addgal'  class="btn btn-send" style="background: #0071cc;color:white;"></i>&nbsp;Add Seat</button>
                                                        <button type="button" name="add2" onclick="addseat('gallry','{{ csrf_token() }}');"  id='addgal'  class="btn btn-send" style="background: #0071cc;color:white;"></i>&nbsp;Add Gallery</button>
                                                        <button type="button" name="add3" onclick="addseat('enter','{{ csrf_token() }}');" id='enter' class="btn btn-send" style="background: #0071cc;color:white;"><i class=""></i>&nbsp;New Row</button>
                                                        <!--<button type="button" name="add4" onclick="addseat('remove','{{ csrf_token() }}');" id='last' class="btn btn-send" style="background: #0071cc;color:white;"><i class=""></i>&nbsp;Remove Last Seat</button>-->
                                                        <button type="button" class="btn btn-send" onclick="addseat('back','{{ csrf_token() }}');" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear Last Patten</button>
                                                        <button type="button" class="btn btn-send" onclick="addseat('','{{ csrf_token() }}');" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear Patten</button>
                                                        <hr>
                                                         <script>
                                                            var i=65;
                                                            var z=0;
                                                         </script>
                                                    @if(session()->get("setvalue")!="")
                                                     <div  id='preview' style="min-height:40px;">
                                                         <div style="display: inline-block;width: 50px; "><b style='font-size:12px;margin-right:20px;'>A</b></div>
                                                         <?php
                                                         $all=explode(",",session()->get("setvalue"));
                                                         $x=65;
                                                         $z=0;
                                                         ?>
                                                         @foreach($all as $s)
                                                         @if($s==1)
                                                         <a class='seat text-center'>{{ ++$z }}</a>
                                                         @elseif($s==2)
                                                         <a class='seatspace'></a>&nbsp;
                                                         @elseif($s==0)
                                                         @php($x++)
                                                        @php($z=0)
                                                        <br> <div style="display: inline-block;width: 50px; "><b style='font-size:12px;margin-right:20px;'>{{ chr($x) }}</b></div>
                                                         @endif
                                                         @endforeach
                                                         <script>
                                                            var i={{ $x }};
                                                           i++;
                                                            var z={{ $z }};
                                                         </script>
                                                    </div>
                                                    @else
                                                     <div  id='preview' style="min-height:40px;">
                                                         
                                                    </div>
                                                    @endif
                                                        </div>
                                                        <hr>
                                                        <div class="text-center" style="background: #e1e5e9;">SCREEN THIS WAY</div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <br>
                                                        <button type="submit" name="add" value="add" class="btn btn-send" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="reset" class="btn btn-send disabled" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>
                                                      @if( isset($msg['error']) )
                                                        
                                                        
                                                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Oops!</strong> {!! $msg['error'] !!}
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
                     
                     
                        <div class="col-sm-12">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Theater</h4>

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
                                                            <th align="center">Name</th>
                                                            <th align="center">Screen</th>
                                                            <th align="center">Total Seat</th>
                                                            <th align="center">Photo</th>
                                                            <th style="width: 10%;">Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                          <?php
                                                        $screen=DB::table('tbl_screen')->get();
                                                         ?>
                                                   
                                                        @php($i=0)
                                                        @foreach($screen as $val)
                                                        

                                                            <tr>
                                                                <td><?php echo ++$i; ?></td>
                                                                <td align="center">{{ $val->name  }}</td>
                                                                <td align="center">{{ $val->screen_diamention}}</td>
                                                                <td align="center">{{ $val->no_of_seat }}</td>
                                                                <td align="center"><img src="{{asset($val->picture)}}" width="200" height="100"/></td>
                                                                <td><a href="{!!url('Remove/screen/'.$val->screen_id) !!}" onclick="return confirm('Are you sure you want to Delete.')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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
                </section>
                    <!-- /.box -->  
                  </div> 
        </div>
      
   <!-- /.content-wrapper -->

@include('Admin/footer')


@include('Admin/footerlink')

<!--<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js" type="text/javascript"></script>
 
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>-->
<script>
   $('#addseat').on("Click",function (){
       alert();
   });
var select_all = document.getElementById("select_all"); //select all checkbox
var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

//select all checkboxes
select_all.addEventListener("change", function(e){
	for (i = 0; i < checkboxes.length; i++) { 
		checkboxes[i].checked = select_all.checked;
	}
});


for (var i = 0; i < checkboxes.length; i++) {
	checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
		//uncheck "select all", if one of the listed checkbox item is unchecked
		if(this.checked == false){
			select_all.checked = false;
		}
		//check "select all" if all checkbox items are checked
		if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
			select_all.checked = true;
		}
	});
}

</script>
</script>
</body>


</html>