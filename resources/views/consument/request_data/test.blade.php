@extends('layouts.app')

@section('main_container')

   <!-- page content -->
        <div class="right_col" role="main">
          {{-- <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="clearfix"></div>

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

                    {{-- <form class="form-horizontal form-label-left" novalidate> --}}

        <form class="form-horizontal form-label-left" action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                    
            <!-- SmartWizard html -->
            <div id="smartwizard">
                <ul>
                    <li><a href="#step-1">Step 1<br /><small>Email Address</small></a></li>
                    <li><a href="#step-2">Step 2<br /><small>Name</small></a></li>
                    <li><a href="#step-3">Step 3<br /><small>Address</small></a></li>
                    <li><a href="#step-4">Step 4<br /><small>Terms and Conditions</small></a></li>
                </ul>
                
                <div>
                    <div id="step-1">
                        <h2>Your Email Address</h2>
                        <div id="form-step-0" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>
                                <div class="help-block with-errors"></div>
                            </div>
                                <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>
                                <div class="help-block with-errors"></div>
                            </div>
                                <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div id="step-2">
                        <h2>Your Name</h2>
                        <div id="form-step-1" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <h2>Your Address</h2>
                        <div id="form-step-2" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div id="step-4" class="">
                        <h2>Terms and Conditions</h2>
                        <p>
                            Terms and conditions: Keep your smile :) 
                        </p>
                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="terms">I agree with the T&C</label>
                                <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>  
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            </form>
             </div>
              
      
    </div>
    </div>
    </div>
    </div>


  
@endsection