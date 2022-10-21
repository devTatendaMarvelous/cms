   <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a class="open-navbar-container"><i class="ft-more-vertical"></i></a></span><a id="navbar-fullscreen" href="javascript:;" class="mr-2 display-inline-block apptogglefullscreen"><i class="ft-maximize blue-grey darken-4 toggleClass"></i>
              <p class="d-none">fullscreen</p></a>
              {{-- <a class="ml-2 display-inline-block"><i class="ft-shopping-cart blue-grey darken-4"></i> --}}
              
          
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                
               

               
                <li class="nav-item mt-1 d-none d-lg-block"><a id="navbar-notification-sidebar" href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="icon-equalizer blue-grey darken-4"></i>
                    <p class="d-none">Notifications Sidebar</p></a></li>

               <li class="nav-item mt-1 navbar-search text-left dropdown">{{ auth::user()->name }} <br>
                    <small><center>{{ auth::user()->role }} </center> </small>
                  
                </li>
                    {{-- User Profile --}}
                <li class="dropdown nav-item mr-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle"><span class="avatar avatar-online"><img id="navbar-avatar" src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo): asset('nomedia.png')}}" alt="avatar"/></span>
                    <p class="d-none">User Settings</p></a>
                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right">
                         

                      <a href="javascript:;" class="dropdown-item"></a>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ft-power mr-2"></i><span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                    </div>
                  </div>
                </li>


              </ul>
            </div>
          </div>
        </div>
      </nav>