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

                        <li class="breadcrumb-item active">Theater</li>
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
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Edit Theater</h4>

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
                                                            <label for="form_name">Name</label>
                                                            {!! Form::text('name',$name,array('placeholder'=>"Enter Theater Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('name')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Profile</label>
                                                         {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                         <p class="error">{{ $errors->first('photo')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Email</label>
                                                            {!! Form::text('email',$email,array('placeholder'=>"Enter Email" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'))  !!}
                                                             <p class="error">{{ $errors->first('email')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                       <div class="form-group">
                                                            <label for="form_name">Mobile</label>
                                                            {!! Form::text('mobile',$mobile,array('placeholder'=>"Enter Contact No." , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[0-9]{10}+$'))  !!}
                                                             <p class="error">{{ $errors->first('mobile')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>

                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">State</label>
                                                            <?php
                                                            
                                                            $data=DB::table("tbl_location")->where("label","=","state")->get();
                                                           
                                                            $da=DB::select("select st.location_id as state,c.location_id as city from tbl_location as st,tbl_location as c where c.parent_id=st.location_id and c.location_id=$l_id");
                                                            $data1="Select State Name";
                                                     
                                                          $op['']="Select State Name";
                                                            foreach ($data as $v)
                                                            {
                                                                $op[$v->location_id]=$v->name;
                                                            }
                                                            ?>
                                                            
                                                            
                                                              {!! Form::select('state',$op,$data[0]->location_id,["class"=>"form-control",'onchange'=>"set_combo('city',this.value,'".csrf_token()."')"]) !!}
                                                         
                                                             <p class="error">{{ $errors->first('state')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                                                                                
                                                        <div class="form-group">
                                                            <label for="form_name">City</label>
                                                            @if(isset($da[0]->city))
                                                            <?php
                                                            $cdata=DB::table("tbl_location")->where([["label","=","city"],["parent_id","=",$da[0]->state]])->get();
                                                            $cop['']="Select City Name";
                                                            foreach ($cdata as $v)
                                                            {
                                                                $cop[$v->location_id]=$v->name;
                                                            }
                                                            ?>
                                                            {!! Form::select('city',$cop,$da[0]->city,['id'=>'city',"class"=>"form-control"]) !!}
                                                            
                                                            @else
                                                          {!! Form::select('city',[""=>'Select City'],$data[0]->location_id,['id'=>'city',"class"=>"form-control"]) !!}
                                                          @endif
                                                             <p class="error">{{ $errors->first('city')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                        <div class="form-group" >
                                                            <label for="form_message">Address</label>
                                                            <textarea  name="address" class="form-control" placeholder="Address" rows="4" required="required" data-error="Please, leave us a message.">{{$address}}</textarea>
                                                               <p class="error">{{ $errors->first('address')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="form_name">Map</label>
                                                            {!! Form::text('map',$map,array('placeholder'=>"Enter Iframe url" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('map')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                            
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="update" value="update" class="btn btn-send disabled " style="background: #0071cc;color:white;"><i class="fa fa-pencil-alt"></i>&nbsp;Edit</button>
                                                        <a href="{!! url('Manage-Theater') !!}" class="btn btn-send" style="background: #e2e6ea;color:black;" ><i class="fa fa-times"></i>&nbsp;Cancel</a>

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
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Theater</h4>
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
                                                            <label for="form_name">Name</label>
                                                            {!! Form::text('name','',array('placeholder'=>"Enter Theater Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('name')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Profile</label>
                                                         {!! Form::file('photo',['id'=>'photo-btn','class'=>'form-control']) !!}
                                                         <p class="error">{{ $errors->first('photo')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Email</label>
                                                            {!! Form::text('email','',array('placeholder'=>"Enter Email" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('email')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>
                                                       <div class="form-group">
                                                            <label for="form_name">Mobile</label>
                                                            {!! Form::text('mobile','',array('placeholder'=>"Enter Contact No." , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('mobile')  }}</p>
                                                             <div class="help-block with-errors"></div>
                                                        </div>

                                                            
                                                    </div>
                                                   <div class="col-md-6 col-xm-6">
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
                                                           
                                                            {!! Form::select('state',$op,'',["class"=>"form-control",'onchange'=>"set_combo('city',this.value,'".csrf_token()."')"]) !!}
                                                             <p class="error">{{ $errors->first('state')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                                                                                
                                                        <div class="form-group">
                                                            <label for="form_name">City</label>
                                                            
                                                          {!! Form::select('city',[""=>'Select City'],'',['id'=>'city',"class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('city')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        
                                                        <div class="form-group" >
                                                            <label for="form_message">Address</label>
                                                            <textarea  name="address" class="form-control" placeholder="Address" rows="4" required="required" data-error="Please, leave us a message.">{{old('address')}}</textarea>
                                                               <p class="error">{{ $errors->first('address')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="form_name">Map</label>
                                                            {!! Form::text('map','',array('placeholder'=>"Enter Iframe url" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                             <p class="error">{{ $errors->first('map')  }}</p>
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
                                                            <th align="center">Theater Name</th>
                                                            <th align="center">City</th>
                                                            <th align="center">Contact</th>
                                                            <th style="width: 10%;">Edit</th>
                                                            <th style="width: 10%;">Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                          <?php
                                                       // $theater=DB::select("select l.name as city, t.name as theatername,t.theater_id as t_id, t.contact as mobile  from tbl_theater as t ,tbl_location as l where t.location_id=l.location_id" );
                                                        $theater=DB::table('tbl_theater')->get();
                                                         

                                                        ?>
                                                   
                                                        @php($i=0)
                                                        @foreach($theater as $val)
                                                        

                                                            <tr>
                                                                <td><?php echo ++$i; ?></td>
                                                                <td align="center">{{ $val->name  }}</td>
                                                                <td align="center">{{ $val->location_id }}</td>
                                                                <td align="center">{{ $val->contact }}</td>
                                                                <td><a href="{!!url('Edit-Theater-Data/'.$val->	theater_id) !!}" ><i class="fas fa-pencil-alt" style="font-size:14px; color: #0071cc"></i></a></td>
                                                                <td><a href="{!!url('Remove/theater/'.	$val->theater_id) !!} " onclick="return confirm('Are you sure you want to Delete {{ $val->name  }} ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

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