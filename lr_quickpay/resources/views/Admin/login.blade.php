<!DOCTYPE html>
<html lang="en">
@include('Admin/headerlink')

<body class="hold-transition bg-gray-light">
	<div class="container" style="width: 1000px;" >
		<div class="row align-items-center justify-content-md-center h-p100" >
		    <div class="col-lg-5 col-md-8 col-12" style="margin-top: 90px;">
                        <div>
                            <h1 style="font-family: sans-serif;color: #0071cc;text-align: center;">QuickPay</h1>
                        </div>
                        <div class="p-40 mt-10 bg-white content-bottom box-shadowed" style="border-radius: 10px;">
                            <h5 style="text-align: center">Welcome To Administrator Department</h5>
                            <br/>
                            <form action="" method="post" autocomplete="off">
                                             {{ csrf_field() }}
						<div class="form-group">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
								<span class="input-group-text bg-primary border-primary"><i class="ti-email"></i></span>
							</div>
                                                            <input type="text" name="email" class="form-control" value="{!! request()->cookie('admin_email') !!}" placeholder="Email">
							</div>
						</div>
                                            
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
                                                                    <span class="input-group-text bg-primary border-primary" ><i class="ti-lock" ></i></span>
								</div>
                                                            <input type="password" name="password" value="{!! request()->cookie('admin_pass') !!}" class="form-control" placeholder="Password">
							</div>
						</div>
						 <div class="row">
							<div class="col-6">
							 @if(request()->cookie('admin_email'))
                                                           <div class="checkbox">
                                                               <input type="checkbox" name="svp" id="basic_checkbox_1" checked="" value="yes" >
                                                            <label for="basic_checkbox_1">Save Password</label>
                                                           </div>
                                                        @else
                                                           <div class="checkbox">
                                                               <input type="checkbox" name="svp" id="basic_checkbox_1"   >
                                                                <label for="basic_checkbox_1">Save Password</label>
                                                            </div>
                                                        @endif
                                                        </div>
							<!-- /.col -->
							<div class="col-6">
                                                             <div class="fog-pwd text-right">
                                                                    <a href="javascript:void(0)">Forgot password?</a><br>
                                                              </div>
							</div>
							<!-- /.col -->
							<div class="col-12 text-center">
                                                            <input type="submit" name="login" value="SIGN IN" class="btn btn-primary-outline btn-block mt-10 btn-rounded"/>
                                                        </div>
                                                        @if( isset($data['error']) ) 
                                                            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 20px; margin-left: 50px; ">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <strong>Oops!</strong> {!! $data['error'] !!}
                                                            </div> 
                                                       @endif
							<!-- /.col -->
						  </div>
					</form>	
				</div>
			</div>
		</div>
	</div>

@include('Admin/footerlink')

</body>
</html>