<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('/admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/lib/chartist/chartist.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ url('/admin/css/bracket.css') }}">
</head>

<body>
    {{-- <div id="app">
        <div class="container"> --}}

            <!-- Right Side Of Navbar -->

            <!-- Authentication Links -->
            @guest 
            @else {{--
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul> --}}
            <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
            <div class="br-sideleft overflow-y-auto">
              <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
              <div class="br-sideleft-menu">
                <a href="{{ url('/home') }}" class="br-menu-link active">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                
                <a href="{{ url('/user') }}" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">User Management</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">UI Elements</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
                  <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
                  <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
                  <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
                  <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
                  <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
                  <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                  <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
                  <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
                  <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
                  <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                </ul>
                
              </div><!-- br-sideleft-menu -->
        
              <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>
        
              <br>
            </div><!-- br-sideleft -->
            <!-- ########## END: LEFT PANEL ########## -->
        
            <!-- ########## START: HEAD PANEL ########## -->
            <div class="br-header">
              <div class="br-header-left">
                <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
                <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
                
              </div><!-- br-header-left -->
              <div class="br-header-right">
                <nav class="nav">
                 
                  <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                      <span class="logged-name hidden-md-down">Katherine</span>
                      <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                      <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                      <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                        <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                      </ul>
                    </div><!-- dropdown-menu -->
                  </div><!-- dropdown -->
                </nav>
              </div><!-- br-header-right -->
            </div><!-- br-header -->
            <!-- ########## END: HEAD PANEL ########## -->
        
        
            <!-- ########## START: MAIN PANEL ########## -->
            <div class="br-mainpanel">
             
              </div>
             @endguest

        {{-- </div> --}}
        <main class="py-4">
            @yield('content')
        </main>
      
        <footer class="br-footer">
            
        </footer>
    </div>
  </div>
    <script src="{{ url('/admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ url('/admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ url('/admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ url('/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ url('/admin/lib/moment/moment.js') }}"></script>
    <script src="{{ url('/admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ url('/admin/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ url('/admin/lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ url('/admin/lib/chartist/chartist.js') }}"></script>
    <script src="{{ url('/admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('/admin/lib/d3/d3.js') }}"></script>
    <script src="{{ url('/admin/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ url('/admin/js/bracket.js') }}"></script>
    <script src="{{ url('/admin/js/ResizeSensor.js') }}"></script>
    <script src="{{ url('/admin/js/dashboard.js') }}"></script>
    @yield('js')
</body>

</html>