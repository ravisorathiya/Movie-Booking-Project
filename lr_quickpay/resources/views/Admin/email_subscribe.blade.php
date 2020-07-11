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
                         <li class="breadcrumb-item active">Email Subscribe</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">		
                        <div class="col-sm-8">         
                            <div class="box box-solid bg-gray">
                                <div class="box-header">
                                    <h4>View All Subscribe</h4>
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
                                                            <!--<th style="padding: 15px 5px 5px 35px;" align="center"><input type="checkbox" style="display: block;zoom: 1.3;position: static;opacity: 1" class="" id="select_all"> </th>-->
                                                            <th>Email</th>
                                                            <th>Remove</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     <?php
                                                        $email=DB::table('tbl_email_subscriber')->get();
                                                     ?>
                                                        @php($i=0)
                                                        @foreach($email as $val)
                                                      
                                                        <tr>
                                                            <td><?php echo ++$i;  ?></td>                                                       
                                                            <!--<td align="center"><input type="checkbox" onclick="checkemail()" class="checkbox" name="check[]" style="display: block;zoom: 1.3;position: static;opacity: 1;" class="" id=""></td>-->
                                                            <td align="center">{!! $val->email !!}</td>
                                                            <td><a href="{!!url('Remove/subscribe/'.$val->subscriber_id) !!}" onclick="return confirm('Are you sure you want to Delete {{$val->email }} ')"><i class="fa fa-trash" style="font-size:14px; color: #0071cc"></i></a></td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
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
<!--                        <div class="col-sm-6">         
                            <div class="box box-solid" >
                                <div class="box-header" style="height: 60px;background:#f8f8f8">
                                    <h4 style="color:black;">Send Email</h4>
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
                                                            <label for="form_name">Subject</label>
                                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Subject Here" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                             <p class="error">{{ $errors->first('name')  }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="form_message">Message</label>
                                                            <textarea id="editor1" class="ckeditor" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                            <div class="help-block with-errors"></div>
                                                             <p class="error">{{ $errors->first('message')  }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit" name="send" class="btn btn-send disabled" style="background: #0071cc;color:white;"value="Send message">
                                                    </div>
                                                </div>
                                                </div>
                                           {!! Form::close() !!}
                                        <br/>
                                         /.box-body 
                                    </div>
                                     /.box      
                                </div>  
                                 /.box-body 
                            </div>
                             /.box           
                        </div>-->
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