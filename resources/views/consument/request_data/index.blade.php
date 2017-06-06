{{-- show status request, waiting approval by system --}}
{{-- design: table with button 'download' if aprroved --}}
{{-- id request | title research | date request | status | action | --}}

{{-- preview list of request using datatables by member, or can saying monitoring data request by member on admin user --}}
@extends('mlayouts.app')

@section('main_container')


   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Request <small>My Request Status</small></h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Request</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>During waiting approval, You can read other research as reference.</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          {{-- <th style="width: 1%">No</th> --}}
                          <th style="width: 30%">Research Title</th>
                          <th style="width: 10%">Case Study</th>
                          <th style="width: 10%">Guarantor</th>
                          <th style="width: 10%">Date Approval</th>
                          <th style="width: 5%">Status</th>
                          <th style="width: 5%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($researchs as $research)
                        <tr>
                          {{-- <td>1</td> --}}
                          <td>
                            <a>{{$research->title_research}}</a>
                            <br />
                            
                          </td>
                          <td>
                              <a>{{$research->case_study}}</a>
                            <br />
                            <small>{{$research->regency_id}}</small>
                          </td>
                          
                          <td>
                            <a>{{ucfirst($research->guarantor)}}</a>
                            <br />
                            
                          </td>

                          <td>
                            <a>{{$research->updated_at->toDateString()}}</a>
                            <br />
                             <small>{{$research->updated_at->diffForHumans()}}</small> 
                          </td>

                          <td>
                            <div class="middle">
                              <strong class="btn btn-warning">{{$research->rescstat_id}}</strong>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="btn btn-info" title="File Ready to Download"><i class="fa fa-download"></i> Download </a>
                          </td>
                          
                        </tr>
                        @endforeach
                  </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

