{{-- show other journal uploaded by other members, 
designed using list bootstrap with pagination --}}

@extends('mlayouts.app')

@section('main_container')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Research <small>List Recent Research By Other Members</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>


                   
                    {{-- <div class="col-md-9 col-sm-9 col-xs-12"> --}}
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          
                        </ul>
                    {{-- @endforeach --}}
                       {{-- tab panel --}}
                     <div id="myTabContent" class="tab-content">
                       <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                   
                         start recent activity
                         <ul class="messages">
                           <li>
                             <img src="images/img.jpg" class="avatar" alt="Avatar">
                             <div class="message_date">
                               <h3 class="date text-info">24</h3>
                               <p class="month">May</p>
                             </div>
                             <div class="message_wrapper">
                               <h4 class="heading">Desmond Davison</h4>
                               <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                               <br />
                               <p class="url">
                                 <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                 <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                               </p>
                             </div>
                           </li>
                           <li>
                             <img src="images/img.jpg" class="avatar" alt="Avatar">
                             <div class="message_date">
                               <h3 class="date text-error">21</h3>
                               <p class="month">May</p>
                             </div>
                             <div class="message_wrapper">
                               <h4 class="heading">Brian Michaels</h4>
                               <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                               <br />
                               <p class="url">
                                 <span class="fs1" aria-hidden="true" data-icon=""></span>
                                 <a href="#" data-original-title="">Download</a>
                               </p>
                             </div>
                           </li>
                           <li>
                             <img src="images/img.jpg" class="avatar" alt="Avatar">
                             <div class="message_date">
                               <h3 class="date text-info">24</h3>
                               <p class="month">May</p>
                             </div>
                             <div class="message_wrapper">
                               <h4 class="heading">Desmond Davison</h4>
                               <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                               <br />
                               <p class="url">
                                 <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                 <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                               </p>
                             </div>
                           </li>
                           
                         </ul>
                         end recent activity
                   
                       </div>
                       <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                   
                         start user projects
                         <table class="data table table-striped no-margin">
                           <thead>
                             <tr>
                               <th>#</th>
                               <th>Project Name</th>
                               <th>Client Company</th>
                               <th class="hidden-phone">Hours Spent</th>
                               <th>Contribution</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td>1</td>
                               <td>New Company Takeover Review</td>
                               <td>Deveint Inc</td>
                               <td class="hidden-phone">18</td>
                               <td class="vertical-align-mid">
                                 <div class="progress">
                                   <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                 </div>
                               </td>
                             </tr>
                             <tr>
                               <td>2</td>
                               <td>New Partner Contracts Consultanci</td>
                               <td>Deveint Inc</td>
                               <td class="hidden-phone">13</td>
                               <td class="vertical-align-mid">
                                 <div class="progress">
                                   <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                 </div>
                               </td>
                             </tr>
                             <tr>
                               <td>3</td>
                               <td>Partners and Inverstors report</td>
                               <td>Deveint Inc</td>
                               <td class="hidden-phone">30</td>
                               <td class="vertical-align-mid">
                                 <div class="progress">
                                   <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                 </div>
                               </td>
                             </tr>
                             <tr>
                               <td>4</td>
                               <td>New Company Takeover Review</td>
                               <td>Deveint Inc</td>
                               <td class="hidden-phone">28</td>
                               <td class="vertical-align-mid">
                                 <div class="progress">
                                   <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                 </div>
                               </td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                      
        <!-- /page content -->

@endsection
                                     {{-- end user projects  --}}