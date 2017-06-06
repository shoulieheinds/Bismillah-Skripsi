@extends('mlayouts.app')

@section('main_container')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Account Detail <small>Profile Information</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ URL::asset('gentelella/production/images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ucfirst(Auth::user()->name)}}</h3>
                      
                      {{-- @foreach($users as $user) --}}
                       {{-- {{$user->name}} --}}
                      <ul class="list-unstyled user_data">
                       <li><i class="fa fa-calendar user-profile-icon"></i> {{ucfirst(Auth::user()->dob)}} </li>
                       <li><i class="fa fa-map-marker user-profile-icon"></i>  {{ucfirst(Auth::user()->address)}}</li>
                        
                        {{-- @foreach($User->segmentation as $segmetation_id) --}}
                        <li><i class="fa fa-briefcase user-profile-icon"></i>  {{ucfirst(Auth::user()->segmentation_id)}}</li>
                        {{-- @endforeach --}}

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i> {{Auth::user()->email}}
                          
                        </li>
                      </ul>
                      <a class="btn btn-success"><i class="fa fa-edit m-right"></i> Change Photo</a>
                      <br /> 
                    
                    </div>
<div class="col-md-9 col-sm-9 col-xs-12 form-group offset-2">
  <div class="panel panel-success">
    <div class="panel-heading "><strong>Account Information</strong></div>
        <div class="panel-title"><h4 align="center"> Make sure use your real identity, cause you never change your information anymore. </h4></div>
 <hr>

<div class="panel-body">
<form class="col-md-12 col-sm-12 col-xs-12 form-horizontal" role="form">

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="name" class="col-md-4 control-label">Name</label>
    <div class="col-md-8">
    <label for="name" class="form-control">{{ucfirst(Auth::user()->name)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="pob" class="col-md-4 control-label">Place of Birth</label>
    <div class="col-md-8">
        <label for="pob" class="form-control">{{ucfirst(Auth::user()->pob)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="pob" class="col-md-4 control-label">Date of Birth</label>
    <div class="col-md-8">
        <label for="dob" class="form-control">{{ucfirst(Auth::user()->dob)}} </label>
    </div>
</div>

    

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
<label for="gender_id" class="col-md-4 control-label">Gender</label>
    <div class="col-md-8">
  
  <label for="gender_id" class="form-control"> {{ucfirst(Auth::user()->gender()->name)}}  </label>
  {{-- <label for="gender_id" class="form-control"> {{ Auth::user()->gender_id }}  </label> --}}
  
  {{--   <label for="gender_id" class="form-control"> {{ucfirst(Auth::user()->gender_id)}}  </label> --}}
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="religion_id" class="col-md-4 control-label">Religion</label>
    <div class="col-md-8">
        <label for="religion_id" name="religion_id" class="form-control"> {{ucfirst(Auth::user()->religion_id)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="segmentation_id" class="col-md-4 control-label">Segmentation</label>
    <div class="col-md-8">
   <label for="segmentation_id" name="segmentation_id" class="form-control"> {{ucfirst(Auth::user()->segmentation_id)}} </label>
    </div>
</div>


 <div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="card_id" class="col-md-4 control-label">Card ID</label>
    <div class="col-md-8">
      <label for="card_id" name="card_id" class="form-control"> {{ucfirst(Auth::user()->card_id)}} </label>
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="card_numb" class="col-md-4 control-label">Card Number</label>
    <div class="col-md-8">
        <label for="card_numb" class="form-control">{{ucfirst(Auth::user()->card_numb)}} </label>
      </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="position_id" class="col-md-4 control-label">Position</label>
    <div class="col-md-8">
      <label for="position_id" class="form-control">{{ucfirst(Auth::user()->position_id)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="address" class="col-md-4 control-label">Address </label>
    <div class="col-md-8">
        <label for="address" class="form-control">{{ucfirst(Auth::user()->address)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="telp_numb" class="col-md-4 control-label">Telp Number</label>
    <div class="col-md-8">
        <label for="telp_numb" class="form-control">{{ucfirst(Auth::user()->telp_numb)}} </label>
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-8">
        <label for="email" class="form-control">{{strtolower(Auth::user()->email)}} </label>
    </div>
</div>

    </form>
 </div>
</div>

  {{-- <div class="panel-footer" align="center"></div>  --}}
</div>
  </div>




                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection