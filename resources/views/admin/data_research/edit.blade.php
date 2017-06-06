{{-- for user or member to request new data to admin --}}
@extends('layouts.app')
@section('title', 'Aprroval Data Request')
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
                    <form class="form-horizontal form-label-left" novalidate>
                      <span class="section">Detail Data Request</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_research">Title Research <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="title_research" class="form-control col-md-7 col-xs-12"  data-validate-words="4" name="title_research" placeholder="Judul Penelitian yang diajukan" required="required" type="text">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="purpose"> Sector <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="sector_id" id="sector_id" value="#" required autofocus>
                                <option value="0"> Pilih Sector</option>
                                <option value="1"> Sektor1</option>
                                <option value="2"> Sektor2</option>
                                    
                        </select>
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
                          <textarea id="abstraction" required="required" name="abstraction" placeholder="Abstraksi penelitian yang diajukan" class="form-control col-md-7 col-xs-12"></textarea>
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
                        <select class="form-control col-md-7 col-xs-12" name="regency_id" id="regency_id" value="#" required autofocus>
                                <option value="0"> Pilih Wilayah</option>
                                <option value="1"> Wilayah1</option>
                                <option value="2"> Wilayah2</option>
                                    
                        </select>
                      </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stats_research">Research Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                        New:
                        <input type="radio" class="flat" name="stats_research" id="new" value="new" checked="" required /> Continue:
                        <input type="radio" class="flat" name="stats_research" id="continue" value="continue" />
                      
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
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        
@endsection