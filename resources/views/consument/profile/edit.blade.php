@extends('mlayouts.app')

@section('main_container')

 <!-- page content -->
        <div class="right_col" role="main">
         
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Profile <small>Change Profile Information</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> --}}
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="panel panel-success">
    <div class="panel-heading "><strong>Account Information</strong></div>
        <div class="panel-title"><h4 align="center"> Make sure use your real identity, cause you never change your information anymore. </h4></div>
 <hr>

<div class="panel-body">
                    <form class="form-horizontal form-label-left"> {{-- id="demo-form2" data-parsley-validate --}}
                     <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" value=" {{ucfirst(Auth::user()->address)}}" name="address" required="required">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=" no_telp">No Telp
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_telp" value=" {{ucfirst(Auth::user()->telp_numb)}}" name=" no_telp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                     
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="new_password" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>

</div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                      </form>
                      </div>
                        <div class="panel-footer" align="right"><i class="fa fa-warning" style="color:red"> if you don't change password, leave it empty</i></div> 
                  </div>
                </div>
              </div>
            </div>
 			</div>
          </div>
        </div>
        <!-- /page content -->
@endsection