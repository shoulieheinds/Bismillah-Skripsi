@extends('layouts.landing')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group offset-2 ">
            <div class="panel panel-primary">
                <div class="panel-heading "><strong>Member Registration Form</strong></div>
 <div class="panel-title"><h4 align="center">Please fill in the blank with Original Identity! </h4></div>
 {{-- <hr> --}}
                <div class="panel-body">
                

<form class="col-md-12 col-sm-12 col-xs-12 form-horizontal" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>
    <div class="col-md-8">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('pob') ? ' has-error' : '' }}">
    <label for="pob" class="col-md-4 control-label">Place of Birth</label>
    <div class="col-md-8">
        <input id="pob" type="text" class="form-control" name="pob" value="{{ old('pob') }}" required autofocus>
        @if ($errors->has('pob'))
            <span class="help-block">
                <strong>{{ $errors->first('pob') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
    <label for="pob" class="col-md-4 control-label">Date of Birth</label>
    <div class="col-md-8">
        <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
        @if ($errors->has('dob'))
            <span class="help-block">
                <strong>{{ $errors->first('dob') }}</strong>
            </span>
        @endif
    </div>
</div>
    
<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
<label for="gender_id" class="col-md-4 control-label">Gender</label>
    <div class="col-md-8">
    <select id="gender_id" name="gender_id" class="form-control">
        <option value="0" disabled selected> Pilih Jenis Kelamin </option>
            @foreach($genders as $key=>$gender_id)
            <option value="{{$key}}" @if(old('gender_id') == $key) {{'selected'}} @endif>{{ $gender_id }}</option>
            @endforeach
    </select>
    @if ($errors->has('gender_id'))
        <span class="help-block">
            <strong>{{ $errors->first('gender_id') }}</strong>
        </span>
    @endif
    </div>
</div>
   


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('religion_id') ? ' has-error' : '' }}">
    <label for="religion_id" class="col-md-4 control-label">Religion</label>
    <div class="col-md-8">
        <select id="religion_id" name="religion_id" class="form-control">
            <option value="0" disabled selected> Pilih Agama </option>
            @foreach($religions as $key=>$religion_id)
                <option value="{{$key}}" @if(old('religion_id') == $key) {{'selected'}} @endif>{{ $religion_id }}</option>
            @endforeach
        </select>
         @if ($errors->has('religion_id'))
        <span class="help-block">
            <strong>{{ $errors->first('religion_id') }}</strong>
        </span>
    @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('segmentation_id') ? ' has-error' : '' }}">
    <label for="segmentation_id" class="col-md-4 control-label">Segmentation</label>
    <div class="col-md-8">
        <select class="form-control" name="segmentation_id" id="segmentation_id">
        <option value="0" disabled selected> Pilih Jenis Segmentasi </option>
                @foreach($segmentations as $key=>$segmentation_id)
                    <option value="{{$key}}" @if(old('segmentation_id') == $key) {{'selected'}} @endif>{{ $segmentation_id }}</option>
                @endforeach
        </select>
        @if ($errors->has('segmentation_id'))
            <span class="help-block">
                <strong>{{ $errors->first('segmentation_id') }}</strong>
            </span>
        @endif
    </div>
</div>


 <div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('card_id') ? ' has-error' : '' }}">
    <label for="card_id" class="col-md-4 control-label">Card ID</label>
    <div class="col-md-8">
        <select class="form-control" name="card_id" id="card_id">
        <option value="0" disabled selected> Pilih Jenis Identitas </option>
                @foreach($cards as $key=>$card_id)
                    <option value="{{$key}}" @if(old('card_id') == $key) {{'selected'}} @endif>{{ $card_id }}</option>
                @endforeach
      </select>
        @if ($errors->has('card_id'))
            <span class="help-block">
                <strong>{{ $errors->first('card_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('card_numb') ? ' has-error' : '' }}">
    <label for="card_numb" class="col-md-4 control-label">Card Number</label>
    <div class="col-md-8">
        <input id="card_numb" type="text" class="form-control" name="card_numb" value="{{ old('card_numb') }}" required autofocus>
        @if ($errors->has('card_numb'))
            <span class="help-block">
                <strong>{{ $errors->first('card_numb') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('position_id') ? ' has-error' : '' }}">
    <label for="position_id" class="col-md-4 control-label">Position</label>
    <div class="col-md-8">
       <select class="form-control" name="position_id" id="position_id">
        <option value="0" disabled selected> Pilih Jabatan </option>
                @foreach($positions as $key=>$position_id)
                    <option value="{{$key}}" @if(old('position_id') == $key) {{'selected'}} @endif>{{ $position_id }}</option>
                @endforeach
      </select>
        @if ($errors->has('position_id'))
            <span class="help-block">
                <strong>{{ $errors->first('position_id') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-md-4 control-label">Address </label>
    <div class="col-md-8">
        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('telp_numb') ? ' has-error' : '' }}">
    <label for="telp_numb" class="col-md-4 control-label">Telp Number</label>
    <div class="col-md-8">
        <input id="telp_numb" type="text" class="form-control" name="telp_numb" value="{{ old('telp_numb') }}" required autofocus>
        @if ($errors->has('telp_numb'))
            <span class="help-block">
                <strong>{{ $errors->first('telp_numb') }}</strong>
            </span>
        @endif
    </div>
</div>


{{-- sample upload input group
<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
    <label for="photo" class="col-md-4 control-label">Photo</label>
    <div class=" input-group col-md-8" style="margin:auto;" >
        <input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>
        <span class="input-group-addon" style="background-color: gray;" role="button">
            <span id="filter" onclick="submitForm();" style="color:black">
            <i class="fa fa-upload"></i>
        </span>
        </span>

        @if ($errors->has('photo'))
            <span class="help-block">
                <strong>{{ $errors->first('photo') }}</strong>
            </span>
        @endif
    </div>
</div> --}}


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
    <label for="photo" class="col-md-4 control-label">Photo</label>
    <div class="col-md-8">
        <input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>

        @if ($errors->has('photo'))
            <span class="help-block">
                <strong>{{ $errors->first('photo') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-8">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>
    <div class="col-md-8">
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-8">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary col-md-12">
                    <strong>Register</strong>  <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>
        </div>
    </form>
 </div>


<div class="panel-footer" align="center"><a href="/">ISYRES</a> - Information Systems Research Service. <i class="fa fa-copyright"> {{date('Y')}}</i></div> 
   
</div>
</div>
</div>
</div>

@endsection
