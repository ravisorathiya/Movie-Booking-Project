<!DOCTYPE html>
<html lang="en">

    @include('Admin/headerlink')


    <style>
       
    </style>
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
                        <li class="breadcrumb-item"><a href="#"></i>Movie</a></li>

                        <li class="breadcrumb-item active">Movie</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                        @if(!session()->get('pages'))
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Movie</h4>

                                </div>
                                <div class="col-md-12">         
                                    <div>
                                         {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Movie Type</label>
                                                           
 <?php
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
                                                            <label for="form_name">Movie Sub Type</label>
                                                             {!! Form::select('moviesub',[""=>'Select Movie Sub Type'],'',['id'=>'moviesub',"class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('moviesub')  }}</p>
                                                        </div>
                                                     
                                                        <div class="form-group">
                                                            <label for="form_name">Movie Name</label>
                                                           
                                                           {!! Form::text('movie','',array('placeholder'=>"Enter Movie Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('movie')  }}</p>
                                                           
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Release Date</label>
                                                            <input id="form_name" type="date" name="rdate" class="form-control" placeholder="" value="{!! old('rdate') !!}" required="required" data-error="Firstname is required.">
                                                           <p class="error">{{ $errors->first('rdate')  }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Duration</label>
                                                           
                                                            {!! Form::text('duration','',array('placeholder'=>"Enter Duration" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('duration')  }}</p>
                                                           
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>

                                                        <div class="form-group" >
                                                            <label for="form_message">Description</label>
                                                            <textarea id="editor1" style="" class="ckeditor" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message."></textarea>

                                                            <p class="error">{{ $errors->first('message')  }}</p>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send  " name='add' value="add" style="background: #0071cc;color:white;">Next&nbsp;<i class="fa fa-angle-right"></i></button>
                                                        <button type="reset" class="btn btn-send " style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>

                                                    </div>

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
                        @elseif(session()->get('pages')==1)
                        <?php
                        $md= App\model\Movie::find(session()->get('movie_id'));
                        ?>
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Movie</h4>

                                </div>
                                <div class="col-md-12">         
                                    <div>
                                         {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Movie Type</label>
                                                           
                                                        <?php
                                                        $da=DB::select("select st.type_id as main,c.type_id as sub from tbl_movie_type as st,tbl_movie_type as c where c.parent_id=st.type_id and c.type_id=".$md->type_id)[0];
                                                        
                                                        $data = DB::table("tbl_movie_type")->where("label", "=", "main")->get();
                                                        
                                                        $op[''] = "Select Movie Type";
                                                        foreach ($data as $v) {
                                                            $op[$v->type_id] = $v->name;
                                                        }
                                                        ?>
                                                        {!! Form::select('movietype',$op,$da->main,["class"=>"form-control",'onchange'=>"set_combo('moviesub',this.value,'".csrf_token()."')"]) !!}
                                                           <p class="error">{{ $errors->first('movietype')  }}</p>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Movie Sub Type</label>
                                                            <?php
                                                            $cdata=DB::table("tbl_movie_type")->where([["label","=","sub"],["parent_id","=",$da->main]])->get();
                                                            $cop['']="Select Movie Sub Type ";
                                                            foreach ($cdata as $v)
                                                            {
                                                                $cop[$v->type_id]=$v->name;
                                                            }
                                                            ?>
                                                             {!! Form::select('moviesub',$cop,$da->sub,['id'=>'moviesub',"class"=>"form-control"]) !!}
                                                             <p class="error">{{ $errors->first('moviesub')  }}</p>
                                                        </div>
                                                     
                                                        <div class="form-group">
                                                            <label for="form_name">Movie Name</label>
                                                           
                                                           {!! Form::text('movie',$md->name,array('placeholder'=>"Enter Movie Name" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('movie')  }}</p>
                                                           
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Release Date</label>
                                                            <input id="form_name" type="date" name="rdate" class="form-control" placeholder="" value="{!!  $md->relese_date !!}" required="required" data-error="Firstname is required.">
                                                           <p class="error">{{ $errors->first('rdate')  }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form_name">Duration</label>
                                                           
                                                            {!! Form::text('duration',$md->duration,array('placeholder'=>"Enter Duration" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                          
                                                            <p class="error">{{ $errors->first('duration')  }}</p>
                                                           
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>

                                                        <div class="form-group" >
                                                            <label for="form_message">Description</label>
                                                            <textarea id="editor1" style="" class="ckeditor" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message.">{!! $md->overview !!}</textarea>

                                                            <p class="error">{{ $errors->first('message')  }}</p>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send  " name='add' value="add" style="background: #0071cc;color:white;">Next&nbsp;<i class="fa fa-angle-right"></i></button>
                                                        <button type="reset" class="btn btn-send " style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>

                                                    </div>

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
                        @elseif(session()->get('pages')==2)
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add New Cast</h4>

                                </div>
                                <div class="col-md-12">         
                                    <div>
                                        {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form']) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <?php
                                                        $ct=DB::table("tbl_cast_type")->get();
                                                               
                                                        ?>
                                                        @foreach($ct as $one)
                                                        <div class="form-group">
                                                            <label for="form_name" style="font-size: 18px;">{!! $one->type !!}</label></br>
                                                            <?php
                                                            $ct1=DB::table("tbl_caste")->where('type_id',"=",$one->cast_type_id)->get();
                                                            ?>
                                                            <div class="checkbox" >
                                                                @foreach($ct1 as $o)
                                                                <label><input type="checkbox" value="{!! $o->cast_id !!}"   name="{!! $one->cast_type_id !!}[]" id="{!! $o->cast_id !!}"><label for="{!! $o->cast_id !!}" style="margin-right: 30px;">{!! $o->name !!}</label></label>
                                                                @endforeach
                                                            </div>
                                                          
                                          
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                     @endforeach

                                                    </div>


                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send disabled " name="prev1" value="p" style="background: #0071cc;color:white;"><i class="fa fa-angle-left"></i>&nbsp;Previous</button>
                                                        <button type="submit" class="btn btn-send disabled " name="next1" value="n" style="background: #0071cc;color:white;">Next&nbsp;<i class="fa fa-angle-right"></i></button>
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
                        @elseif(session()->get('pages')==3)
                        <div class="col-md-12">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Add Movie Banners &  Songs</h4>

                                </div>
                                <div class="col-md-12">         
                                    <div>
                                       {!! Form::open( ['novalidate'=>'' ,'autocomplete'=>'off', 'class'=>'my-form',"enctype"=>"multipart/form-data"]) !!}
                                            <div class="messages"></div>
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12 col-xm-12">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Trailer</label>
                                                            {!! Form::text('trailer','',array('placeholder'=>"Enter Iframe URL" , 'class'=>'form-control', 'required'=>'' , 'pattern'=>'^[a-zA-Z ]+$'))  !!}
                                                            <div class="help-block with-errors"></div>
                                                            <p class="error">{{ $errors->first('trailer')  }}</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>
                                                        <div class="form-group">
                                                            <label for="form_name">Wallpaper</label>
                                                            <input  type="file" id="btn-photo" name="wallpaper[]"  multiple="" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                            <div style="background: #e5e5e5;min-height: 30px;margin-top: 10px;border: 2px dashed gray;padding: 20px;" class="text-center" id="preview" >Preview</div>
                                                            <p class="error">
                                                               
                                                               <?php
                                                               if(isset($abc))
                                                               {
                                                                   echo $abc;
                                                               
                                                               }
                                                               
                                                               ?>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-xm-6">
                                                        <br/>

                                                        <div class="form-group" >
                                                            <label for="form_message">Songs</label>
                                                            <input id="form_name" type="text" name="song" onkeyup="myfun(this.value);" class="form-control" placeholder="Song Url" required="required" data-error="Firstname is required.">
                                                            <div style="background: #e5e5e5;min-height: 30px;margin-top: 10px;border: 2px dashed gray;padding: 20px;" class="text-center" id="ifram" >Preview</div>
                                                            <div class="help-block with-errors"></div>
                                                            <p class="error">{{ $errors->first('song')  }}</p>
                                                        </div>

                                                    </div>


                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send  "  name="prev2" value="p2" style="background: #0071cc;color:white;"><i class="fa fa-angle-left"></i>&nbsp;Previous</button>
                                                        <button type="submit" class="btn btn-send  " name="next2" value="n2" style="background: #0071cc;color:white;"><i class="fa fa-plus"></i>&nbsp;Add</button>
                                                        <button type="submit" class="btn btn-send disabled" style="background: #e2e6ea;color:black;"><i class="fa fa-eraser"></i>&nbsp;Clear</button>

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
                                    <h4>View All Movie</h4>

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
                                                            <th align="center">Member</th>
                                                            <th align="center">Profile</th>
                                                            <th align="center">Movie Name</th>
                                                            <th align="center">Review</th>
                                                            <th align="center">Date</th>
                                                            <th align="center">Status</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        for ($i = 1; $i < 10; $i++) {
                                                            ?>


                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td align="center">Actor</td>
                                                                <td><img src="{{asset('public/Admin_assets/images/user.png')}}" class="avatar avatar-xl avatar-bordered" style="border-radius:50%" width="100px;" alt="Avatar"></td>
                                                                <td>Total Dhamal</td>
                                                                <td align="center">Aju bhai is john Abaram</td>
                                                                <td>5-2-2019</td>
                                                                <td><i class="fa fa-toggle-on" style="font-size: 14px;color:#0071cc;cursor: pointer" title="Active"/></td>
                                                                <td><a href="#"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>

                                                            </tr>

                                                        <?php }
                                                        ?>
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
function myfun(val)
{
    var lastChar = val[val.length -1];
    
        var data=val.split(",");
        $('#ifram').html("");
        for (var i=0;i<data.length;i++)
        {
            if(data[i]!="")
            {
            $('#ifram').append("<iframe src='"+data[i]+"' width='150px;'></iframe>");
            }
        }
        
    
}
</script>
</body>


</html>