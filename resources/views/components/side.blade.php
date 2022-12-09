 <div data-active-color="white" data-background-color="crystal-clear" data-image="{{ asset('assets/img/sidebar-bg/08.jpg')}}" class="app-sidebar">
        <div class="sidebar-header">
         
         
              
              
          <div class="logo clearfix"><a href="/home" class="logo-text float-left">
              <div class="log o-img" style="transform:scale(.8); margin-left:-15%"><img src="{{ asset('logo.webp')}}" alt="CMS"/>
                <br><br> Canteen
              </div>
            </a>
              <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="has- sub nav-item"><a href="home"><i class="icon-home"></i><span  class="menu-title">Dashboard</span></a>
           
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="icon-map"></i><span data-i18n="" class="menu-title">Menus</span></a>
                <ul class="menu-content">
                  <li><a href="/menus" class="menu-item">Available Menus</a>
                  </li>
                  <li><a href="/menus/create" class="menu-item">Add Menu</a>
                  </li>
                  
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="icon-layers"></i><span data-i18n="" class="menu-title">Orders</span></a>
                <ul class="menu-content">
                  <li><a href="/orders" class="menu-item">All Orders</a>
                  </li>
                  
                  
                </ul>
              </li>
               @if (auth::user()->role=='Admin' or  auth::user()->role  =='SuperAdmin ')
                 <li class="has-sub nav-item"><a href="#"><i class="icon-users"></i><span data-i18n="" class="menu-title">Users</span></a>
                <ul class="menu-content">
                  <li><a href="/users" class="menu-item">All Users</a>
                  </li>
                  <li><a href="/users/create" class="menu-item">Add User</a>
                  </li>
                  
                </ul>
              </li>
               @endif
               


            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div>