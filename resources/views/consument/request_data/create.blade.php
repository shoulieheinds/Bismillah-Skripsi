{{-- for user or member to request new data to admin --}}
@extends('mlayouts.app')
@section('title', 'Form Data Request')
@section('main_container')

{{-- @foreach($errors ->all() as $error) <p>{{$error}}</p> @endforeach --}}

 <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Request <small>Fill in the blank with your data request</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     {{--  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

{{-- <div class="x_content"> --}}
   <div class="panel panel-info">
    <div class="panel-heading "><strong>Detail Request for Data Research</strong></div>

<div class="panel-body">
<form class="form-horizontal form-label-left" enctype="multipart/form-data" action="{{route('consument.request.data')}}" > {{--id="demo-form2" data-parsley-validate novalidate --}}
{{csrf_field()}}
  
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_id">Member ID <span class="required" disabled="true">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="user_id" class="form-control col-md-7 col-xs-12" value="{{Auth::user()->id}}" name="user_id" placeholder="Judul Penelitian yang diajukan" required="required" type="text" disabled="true">
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_research">Title Research <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="title_research" class="form-control col-md-7 col-xs-12" name="title_research" placeholder="Judul Penelitian yang diajukan" required="required" type="text">
    </div>
  </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="purpose">Purpose <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="purpose" class="form-control col-md-7 col-xs-12" name="purpose" placeholder="Tujuan Penelitian yang diajukan" required="required" type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sector_id"> Sector <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="sector_id" id="sector_id">

                            <option value="0" disabled selected> Pilih Sektor Penelitian </option>
                                    @foreach($sectors as $key=>$sector_id)
                                        <option value="{{$key}}" @if(old('sector_id') == $key) {{'selected'}} @endif>{{ $sector_id }}</option>
                                    @endforeach
                          </select>
                            @if ($errors->has('sector_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sector_id') }}</strong>
                                </span>
                            @endif
                      </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="purpose">Case Study <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="case_study" class="form-control col-md-7 col-xs-12" name="case_study" placeholder="Studi kasus Penelitian yang diajukan" required="required" type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="abstraction">Abstraction <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="abstraction" name="abstraction" placeholder="Abstraksi penelitian yang diajukan" class="form-control col-md-7 col-xs-12" required="required"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="guarantor">Guarantor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="guarantor" class="form-control col-md-7 col-xs-12" name="guarantor" placeholder="Penanggung jawab Penelitian" required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="regency_id"> Area <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="regency_id" id="regency_id" required autofocus>
                                <option value="0" disabled selected> Pilih Wilayah Penelitian </option>
                                    @foreach($regencys as $key=>$regency_id)
                                        <option value="{{$key}}" @if(old('regency_id') == $key) {{'selected'}} @endif>{{ $regency_id }}</option>
                                    @endforeach
                          </select>
                            @if ($errors->has('regency_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('regency_id') }}</strong>
                                </span>
                            @endif
                      </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reqstat_id">Research Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="reqstat_id" id="reqstat_id" required autofocus>
                                    <option value="0" disabled selected> Status Pengajuan Penelitian </option>
                                        @foreach($reqstats as $key=>$reqstat_id)
                                            <option value="{{$key}}" @if(old('reqstat_id') == $key) {{'selected'}} @endif>{{ $reqstat_id }}</option>
                                        @endforeach
                          </select>
                            @if ($errors->has('reqstat_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reqstat_id') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>

                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reqstat_id">Request Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="rescstat_id" class="form-control col-md-7 col-xs-12" name="rescstat_id" value="1" required="required" type="text" disabled="true">

                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proposal_file">Proposal File <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="proposal_file" class="form-control col-md-7 col-xs-12" name="proposal_file" placeholder="Lampiran Proposal Penelitian yang diajukan" required="required" type="file">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="data_requested">Describtion Data Request <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="data_requested" required="required" name="data_requested" placeholder="Sebutkan Data Yang Dibutuhkan" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                      </div>

                
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                    </div>
                    </div>
                    <div class="panel-footer" align="right"><i class="fa fa-warning" style="color:red">WARNING!!! By clicking Submit, You Agree give a feedback for us.</i></div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        
@endsection