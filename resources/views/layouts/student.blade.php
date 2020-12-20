<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EduLearn Scholarship Portal.">
    <meta name="keywords" content="Scholarship">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>Dashboard::Student</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
     <!-- font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/style.css">
    <link id="color" rel="stylesheet" href="../../backend/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../backend/css/responsive.css">
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Edulearn .." name="" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../../appp/images/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper pl-0">
                    <ul class="horizontal-menu">

                        <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Quick Menu</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li><a href="file-manager.html" data-original-title="" title=""> <i data-feather="git-pull-request"></i><span>File manager </span></a></li>
                                <li><a href="#!" data-original-title="" title=""> <i data-feather="users"></i><span>Users</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i data-feather="user"></i><span>User Profile</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="social-app.html" data-original-title="" title=""> <i data-feather="zap"></i><span>Social App </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN
                                        </span></div>
                                </div>
                                <div class="more_lang">
                                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span>
                                                (US)</span></span></div>
                                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>

                                </div>
                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span class="badge badge-pill badge-secondary">0 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>

                                <li>
                                    <p><i class="fa fa-circle-o mr-3 font-danger"></i>No Messages<span class="pull-right">0</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>

                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>


                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 mr-0">
                            <div class="media profile-media"><img class="b-r-10" src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/profile.jpg" alt="">
                                <div class="media-body"><span>Ogbonna Vitalis</span>
                                    <p class="mb-0 font-roboto">Student <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">

                                <li><a href="#"><i data-feather="user"></i><span>Profile </span></a></li>
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <i data-feather="log-in"> </i>{{ __('Logout') }}
                                        </a>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends                -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @include("partials/student/sidebar")
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Edulearn @2020. Crafted by Vivvaa </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../../backend/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../backend/js/popper.min.js"></script>
    <script src="../../backend/js/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="../../backend/js/feather.min.js"></script>
    <script src="../../backend/js/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../backend/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../backend/js/sidebar-menu.js"></script>
   <script src="../../backend/js/chartist.js"></script>
    <script src="../../backend/js/chartist-plugin-tooltip.js"></script>
    <script src="../../backend/js/knob.min.js"></script>
    <script src="../../backend/js/knob-chart.js"></script>
    <script src="../../backend/js/apex-chart.js"></script> 
    <script src="../../backend/js/stock-prices.js"></script>
    <script src="../../backend/js/bootstrap-notify.min.js"></script>
    <script src="../../backend/js/default.js"></script>
    <script src="../../backend/js/index.js"></script>
    
    <script src="../../backend/js/ckeditor.js"></script>
    <script src="../../backend/js/jquery.js"></script>
    <script src="../../backend/js/styles.js"></script>
    <script src="../../backend/js/ckeditor.custom.js"></script>
    <script src="../../backend/js/jquery.dataTables.min.js"></script>
    <script src="../../backend/js/datatable.custom.js"></script>
    <script src="../../backend/js/tooltip-init.js"></script>
    @yield('scripts')
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <!-- <script src="https://admin.pixelstrap.com/cuba/assets/js/script.js"></script> -->
    <!-- <script src="https://admin.pixelstrap.com/cuba/assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>