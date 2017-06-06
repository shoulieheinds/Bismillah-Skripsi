@extends('layouts.landing')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pob') ? ' has-error' : '' }}">
                            <label for="pob" class="col-md-4 control-label">Place of Birth</label>

                            <div class="col-md-6">
                                <input id="pob" type="text" class="form-control" name="pob" value="{{ old('pob') }}" required autofocus>

                                @if ($errors->has('pob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="pob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                            <label for="gender_id" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                            <select class="form-control" name="gender_id" id="gender_id" value="{{old('gender_id')}}" required autofocus>
                                <option value="1"> laki-Laki</option>
                                <option value="2"> Perempuan</option>
                                    {{-- @foreach( $genders as $gender )
                                        <option value="{{old('$gender->id') }}"> {{ $gender->name }}</option>
                                    @endforeach --}}
                              </select>
                                

                            @if ($errors->has('gender_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender_id') }}</strong>
                                </span>
                            @endif
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('religion_id') ? ' has-error' : '' }}">
                            <label for="religion_id" class="col-md-4 control-label">Religion</label>

                            <div class="col-md-6">
                                <input id="religion_id" type="text" class="form-control" name="religion_id" value="{{ old('religion_id') }}" required autofocus>

                                @if ($errors->has('religion_id'))
                                    <span class="help-block">segmentation_id
                                        <strong>{{ $errors->first('religion_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group{{ $errors->has('segmentation_id') ? ' has-error' : '' }}">
                            <label for="segmentation_id" class="col-md-4 control-label">Segmentation</label>

                            <div class="col-md-6">
                                <input id="segmentation_id" type="text" class="form-control" name="segmentation_id" value="{{ old('segmentation_id') }}" required autofocus>

                                @if ($errors->has('segmentation_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('segmentation_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                         <div class="form-group{{ $errors->has('card_id') ? ' has-error' : '' }}">
                            <label for="card_id" class="col-md-4 control-label">Card ID</label>

                            <div class="col-md-6">
                                <input id="card_id" type="text" class="form-control" name="card_id" value="{{ old('card_id') }}" required autofocus>

                                @if ($errors->has('card_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('card_numb') ? ' has-error' : '' }}">
                            <label for="card_numb" class="col-md-4 control-label">Card Number</label>

                            <div class="col-md-6">
                                <input id="card_numb" type="text" class="form-control" name="card_numb" value="{{ old('card_numb') }}" required autofocus>

                                @if ($errors->has('card_numb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_numb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('position_id') ? ' has-error' : '' }}">
                            <label for="position_id" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
                                <input id="position_id" type="text" class="form-control" name="position_id" value="{{ old('position_id') }}" required autofocus>

                                @if ($errors->has('position_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('institution_name') ? ' has-error' : '' }}">
                            <label for="institution_name" class="col-md-4 control-label">Institution Name</label>

                            <div class="col-md-6">
                                <input id="institution_name" type="text" class="form-control" name="institution_name" value="{{ old('institution_name') }}" required autofocus>

                                @if ($errors->has('institution_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institution_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('institution_addr') ? ' has-error' : '' }}">
                            <label for="institution_addr" class="col-md-4 control-label">Institution Addr</label>

                            <div class="col-md-6">
                                <input id="institution_addr" type="text" class="form-control" name="institution_addr" value="{{ old('institution_addr') }}" required autofocus>

                                @if ($errors->has('institution_addr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institution_addr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telp_numb') ? ' has-error' : '' }}">
                            <label for="telp_numb" class="col-md-4 control-label">Telp Number</label>

                            <div class="col-md-6">
                                <input id="telp_numb" type="text" class="form-control" name="telp_numb" value="{{ old('telp_numb') }}" required autofocus>

                                @if ($errors->has('telp_numb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp_numb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('guarantor') ? ' has-error' : '' }}">
                            <label for="guarantor" class="col-md-4 control-label">Guarantor</label>

                            <div class="col-md-6">
                                <input id="guarantor" type="text" class="form-control" name="guarantor" value="{{ old('guarantor') }}" required autofocus>

                                @if ($errors->has('guarantor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('guarantor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="text" class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
