        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                           
              <a href="{{ url('/admin') }}" class="site_title"><i class="fa fa-leaf"></i> <span>{{config('app.name')}}</span></a>
            
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ URL::asset('gentelella/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ucfirst(Auth::user()->name)}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Data Record <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/data_archive')}}">Data Archive</a></li>
                      <li><a href="{{url('/data_area')}}">Data Area</a></li>
                      <li><a href="{{url('/data_member')}}">Data Member</a></li>
                      <li><a href="{{url('/data_sector')}}">Data Sector</a></li>
                      <li><a href="{{url('/data_segment')}}">Data Segment</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Requests <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="{{ route('approval.request') }}">Data Request</a></li>
                      <li><a href="{{ url('/reqdata') }}">Request Data</a></li>
                      <li><a href="form_validation.html">Validation Requests</a></li>
                      <li><a href="form_advanced.html">Approve Requests</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Research Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/data_research')}}">List Research</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                  
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Sectors Persentage</a></li>
                      <li><a href="chartjs2.html">Researchs Persentage</a></li>
                      <li><a href="chartjs2.html">Members Persentage</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Report Research</a></li>
                      <li><a href="fixed_footer.html">Report Cosument</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-bookmark"></i> FAQ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.faq')}}"></a></li>
                      <li><a href="{{route('admin.contactus')}}">Contact Us</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
             <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
                
                {{-- if we use method post in a href, we have to create new property as method as an object  --}}
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             {{ csrf_field() }}
             </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
