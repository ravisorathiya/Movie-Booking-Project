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
                        <li class="breadcrumb-item"><a href="#"></i>Movie </a></li>

                        <li class="breadcrumb-item active">Show Time</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                       
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add Show Time</h4>
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
                                                            <label for="form_name">Movie Type</label>
                                                            
                                                             <?php
//                                                             $data = DB::table('tbl_movie_type')->where("label","=","main")->get();
//                                                             print_r($data);
//                                                             die;
//                                                        $da=DB::select("select st.type_id as main,c.type_id as sub from tbl_movie_type as st,tbl_movie_type as c where c.parent_id=st.type_id and c.type_id=".$md->type_id)[0];
                                                        
                                                        $data = DB::table("tbl_movie_type")->where("label", "=", "main")->get();
                                                        
                                                        $op[''] = "Select Movie Type";
                                                        foreach ($data as $v) {
                                                            $op[$v->type_id] = $v->name;
                                                        }
                                                        ?>
                                                            
                                                      {!! Form::select('movietype',$op,'',["class"=>"form-control",'onchange'=>"set_combo('moviesub',this.value,'".csrf_token()."')"]) !!}
                                                           <p class="error">{{ $errors->first('movietype')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Sub Type</label>
                                                      {!! Form::select('moviesub',[""=>'Select Movie Sub Type'],'',['id'=>'moviesub',"class"=>"form-control"]) !!}
                                                          
                                                           <p class="error">{{ $errors->first('moviesub')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                        <?php 
                                                        $data=DB::table('tbl_movie')->get();
                                                        
                                                        $movie[''] = "Select Movie Name";
                                                        foreach ($data as $v) 
                                                        {
                                                            $movie[$v->movie_id] = $v->name;
                                                            
                                                        }
                                                        
                                                        ?>
                                                            <label for="form_name">Movie</label>
                                                      {!! Form::select('movie',$movie,'',["class"=>"form-control"]) !!}
                                                           <p class="error">{{ $errors->first('movie')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                       <div class="form-group">
                                                            <label for="form_name">Show Date</label>
                                                            <input id="form_name" type="date" name="sdate" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                                           <p class="error">{{ $errors->first('sdate')  }}</p>
                                                        </div>
                                                       <div class="form-group">
                                                            <label for="form_name">Show Time</label>
                                                            <input id="form_name" type="time" name="stime" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                                           <p class="error">{{ $errors->first('stime')  }}</p>
                                                        </div>

                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                       <div class="form-group">
                                                            <label for="form_name">State</label>
                                                            <?php
                                                            $dat=DB::table("tbl_location")->where("label","=","state")->get();
                                                            
                                                            $opt['']="Select State Name";
                                                            foreach ($dat as $v)
                                                            {
                                                                $opt[$v->location_id]=$v->name;
                                                            }
                                                            ?>
                                                           
                                                            {!! Form::select('state',$opt,'',["class"=>"form-control",'onchange'=>"set_combo('city',this.value,'".csrf_token()."')"]) !!}
                                                             <p class="error">{{ $errors->first('state')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                                                                                
                                                        <div class="form-group">
                                                            <label for="form_name">City</label>
                                                            
                                                          {!! Form::select('city',[""=>'Select City'],'',['id'=>'city',"class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('city')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="form_name">Theater</label>
                                                            <?php
                                                            $theater=DB::table("tbl_theater")->get();
                                                            
                                                            $th['']="Select Theater Name";
                                                            foreach ($theater as $v)
                                                            {
                                                                $th[$v->theater_id]=$v->name;
                                                            }
                                                            ?>
                                                      {!! Form::select('theater',$th,'',["class"=>"form-control",'onchange'=>"set_combo('screen',this.value,'".csrf_token()."')"]) !!}
                                                           <p class="error">{{ $errors->first('theater')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Screen</label>
                                                      {!! Form::select('screen',[''=>'Select Screen'],'',["class"=>"form-control","id"=>"screen"]) !!}
                                                           <p class="error">{{ $errors->first('screen')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Price</label>
                                                            {!! Form::text('price','',array('placeholder'=>"Enter Movie ticket Price" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('price')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                         
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="add" value="add" class="btn btn-send disabled " style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="reset" class="btn btn-send disabled" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>

                                                    </div>

                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                        
                                        
                                        @if( isset($data['success']) ) 
                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;margin-left: 15px;">
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
                                                            <th align="center">Movie</th>
                                                            <th align="center">Theater</th>
                                                            <th align="center">Screen</th>
                                                            <th align="center">Date</th>
                                                            <th align="center">Time</th>
                                                            <th style="width: 10%;">Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                          <?php
                                                        $showtime=DB::select("select t.name as tname,s.name as sname,m.name as mname,mt.date as date,mt.time as time,mt.time_id as t_id from tbl_theater as t,tbl_screen as s,tbl_movie as m,tbl_movie_time as mt where t.theater_id=mt.theater_id and m.movie_id=mt.movie_id and s.screen_id=mt.screen_id " );
                                                        
                                                         ?>
                                                   <?php
                                                  
                                                        ?>
                                                        @php($i=0)
                                                        @foreach($showtime as $val)
                                                        
                                                        <tr>
                                                                <td><?php echo ++$i; ?></td>
                                                                <td align="center">{{ $val->mname  }}</td>
                                                                <td align="center">{{ $val->tname }}</td>
                                                                <td align="center">{{ $val->sname }}</td>
                                                                <td align="center">{{ $val->date }}</td>
                                                                <td align="center">{{ $val->time }}</td>
                                                                <td><a href="{!!url('Remove/showtime/'.$val->t_id) !!} " onclick="return confirm('Are you sure you want to Delete ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>
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