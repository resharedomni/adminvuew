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
    <link href="./admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./admin/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./admin/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="./admin/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="./admin/lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./admin/css/bracket.css">
</head>

<body>
    {{-- <div id="app">
        <div class="container"> --}}

            <!-- Right Side Of Navbar -->

            <!-- Authentication Links -->
            @guest @else {{--
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
                <a href="index.html" class="br-menu-link active">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="mailbox.html" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Mailbox</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="card-dashboard.html" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Cards &amp; Widgets</span>
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
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                    <span class="menu-item-label">Navigation</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="navigation.html" class="nav-link">Basic Nav</a></li>
                  <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Charts</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
                  <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
                  <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
                  <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
                  <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
                  <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
                  <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Forms</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
                  <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
                  <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
                  <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
                  <li class="nav-item"><a href="form-editor-code.html" class="nav-link">Code Editor</a></li>
                  <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                    <span class="menu-item-label">Tables</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
                  <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
                    <span class="menu-item-label">Maps</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
                  <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
                  <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
                </ul>
                <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
                    <span class="menu-item-label">Utilities</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
                  <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
                  <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
                  <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
                  <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
                  <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
                  <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
                  <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
                </ul>
                <a href="pages.html" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                    <span class="menu-item-label">Apps &amp; Pages</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="layouts.html" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
                    <span class="menu-item-label">Layouts</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="sitemap.html" class="br-menu-link">
                  <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
                    <span class="menu-item-label">Sitemap</span>
                  </div><!-- menu-item -->
                </a><!-- br-menu-link -->
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
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
                <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    {{-- </div> --}}
    <script src="./admin/lib/jquery/jquery.js"></script>
    <script src="./admin/lib/popper.js/popper.js"></script>
    <script src="./admin/lib/bootstrap/bootstrap.js"></script>
    <script src="./admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./admin/lib/moment/moment.js"></script>
    <script src="./admin/lib/jquery-ui/jquery-ui.js"></script>
    <script src="./admin/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./admin/lib/peity/jquery.peity.js"></script>
    <script src="./admin/lib/chartist/chartist.js"></script>
    <script src="./admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="./admin/lib/d3/d3.js"></script>
    <script src="./admin/lib/rickshaw/rickshaw.min.js"></script>
    <script src="./admin/js/bracket.js"></script>
    <script src="./admin/js/ResizeSensor.js"></script>
    <script src="./admin/js/dashboard.js"></script>
    @yield('js')
</body>

</html>