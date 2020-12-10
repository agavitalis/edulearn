<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>Dashboard</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://admin.pixelstrap.com/cuba/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://admin.pixelstrap.com/cuba/assets/css/responsive.css">
</head>

<body onload="startTime()">
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
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="https://admin.pixelstrap.com/cuba/assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="sliders"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper pl-0">
                    <ul class="horizontal-menu">
                        
                        <li class="level-menu outside"><a class="nav-link" href="#!"><i
                                    data-feather="inbox"></i><span>Quick Menu</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li><a href="file-manager.html" data-original-title="" title=""> <i
                                            data-feather="git-pull-request"></i><span>File manager </span></a></li>
                                <li><a href="#!" data-original-title="" title=""> <i
                                            data-feather="users"></i><span>Users</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i
                                                    data-feather="user"></i><span>User Profile</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i
                                                    data-feather="user-minus"></i><span>User Edit</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <i
                                                    data-feather="user-check"></i><span>Users Cards</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="kanban.html" data-original-title="" title=""> <i
                                            data-feather="airplay"></i><span>Kanban Board</span></a></li>
                                <li><a href="bookmark.html" data-original-title="" title=""> <i
                                            data-feather="heart"></i><span>Bookmark</span></a></li>
                                <li><a href="social-app.html" data-original-title="" title=""> <i
                                            data-feather="zap"></i><span>Social App </span></a></li>
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
                                    <div class="lang selected" data-value="en"><i
                                            class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span>
                                                (US)</span></span></div>
                                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                            class="lang-txt">Français</span></div>
                                    
                                </div>
                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge badge-pill badge-secondary">0 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                
                                <li>
                                    <p><i class="fa fa-circle-o mr-3 font-danger"></i>No Messages<span
                                            class="pull-right">0</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        
                        
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 mr-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/profile.jpg" alt="">
                                <div class="media-body"><span>Ogbonna Vitalis</span>
                                    <p class="mb-0 font-roboto">Student <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Profile </span></a></li>
                               
                                <li><a href="#"><i data-feather="log-in"> </i><span>Log out</span></a></li>
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
           @include("partials/appp/sidebar")
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Student</li>
                                    <li class="breadcrumb-item active">Dashboard </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row second-chart-list third-news-update">
                        <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                            <div class="card o-hidden profile-greeting">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="badge-groups w-100">
                                            <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span
                                                    id="txt"></span></div>
                                            <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                                        </div>
                                    </div>
                                    <div class="greeting-user text-center">
                                        <div class="profile-vector"><img class="img-fluid"
                                                src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/welcome.png"
                                                alt=""></div>
                                        <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span
                                                class="right-circle"><i
                                                    class="fa fa-check-circle f-14 middle"></i></span></h4>
                                        <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the
                                                last 24 hours</span></p>
                                        <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                                        <div class="left-icon"><i class="fa fa-bell"> </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                            <div class="row">
                                <div class="col-xl-12 xl-50 chart_data_right second">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body right-chart-content">
                                                    <h4>$95,000<span class="new-box">New</span></h4><span>Number Of
                                                        Scholarships Applied
                                                        Value</span>
                                                </div>
                                                <div class="knob-block text-center">
                                                    <input class="knob1" data-width="50" data-height="70"
                                                        data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round"
                                                        data-angleoffset="0" value="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 alert-sec">
                                    <div class="card bg-img">
                                        <div class="card-header">
                                            <div class="header-top">
                                                <h5 class="m-0">Alert </h5>
                                                <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="body-bottom">
                                                <h6> 10% off For drama lights Couslations...</h6><span
                                                    class="font-roboto">Lorem Ipsum is simply dummy...It is a long
                                                    established fact that a reader will be distracted by </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                            <div class="row">
                                <div class="col-xl-12 appointment">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5 class="m-0">appointment</h5>
                                                <div class="card-header-right-icon">
                                                    <select class="button btn btn-primary">
                                                        <option>Today</option>
                                                        <option>Tomorrow</option>
                                                        <option>Yesterday</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="appointment-table table-responsive">
                                                <table class="table table-bordernone">
                                                    <tbody>
                                                        <tr>
                                                            <td><img class="img-fluid img-40 rounded-circle mb-3"
                                                                    src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                                    alt="Image description">
                                                                <div class="status-circle bg-primary"></div>
                                                            </td>
                                                            <td class="img-content-box"><span class="d-block">Venter
                                                                    Loren</span><span class="font-roboto">Now</span>
                                                            </td>
                                                            <td>
                                                                <p class="m-0 font-primary">28 Sept</p>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="button btn btn-primary">Done<i
                                                                        class="fa fa-check-circle ml-2"></i></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="img-fluid img-40 rounded-circle"
                                                                    src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                                    alt="Image description">
                                                                <div class="status-circle bg-primary"></div>
                                                            </td>
                                                            <td class="img-content-box"><span class="d-block">John
                                                                    Loren</span><span class="font-roboto">11:00</span>
                                                            </td>
                                                            <td>
                                                                <p class="m-0 font-primary">22 Sept</p>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="button btn btn-danger">Pending<i
                                                                        class="fa fa-check-circle ml-2"></i></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Latest Scholarships</h3>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row second-chart-list third-news-update">
                    <div class="col-xl-12 xl-60">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="card">
                      <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://admin.pixelstrap.com/cuba/assets/images/faq/1.jpg" alt=""></div>
                        <div class="col-sm-7">
                          <div class="blog-details">
                            <div class="blog-date"><span>05</span> January 2019</div>
                            <h6>Java Language </h6>
                            <div class="blog-bottom-content">
                              <ul class="blog-social">
                                <li>by: Paige Turner</li>
                                <li>15 Hits</li>
                              </ul>
                              <hr>
                              <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="card">
                      <div class="blog-box blog-list row">
                        <div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://admin.pixelstrap.com/cuba/assets/images/faq/2.jpg" alt=""></div>
                        <div class="col-sm-7">
                          <div class="blog-details">
                            <div class="blog-date"><span>10</span> March 2019</div>
                            <h6>Web Development </h6>
                            <div class="blog-bottom-content">
                              <ul class="blog-social">
                                <li>by: Petey Cruiser</li>
                                <li>34 Hits</li>
                              </ul>
                              <hr>
                              <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>


                       


                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Edulearn  @2020. Crafted by Vivvaa </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="https://admin.pixelstrap.com/cuba/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="https://admin.pixelstrap.com/cuba/assets/js/bootstrap/popper.min.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="https://admin.pixelstrap.com/cuba/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="https://admin.pixelstrap.com/cuba/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="https://admin.pixelstrap.com/cuba/assets/js/sidebar-menu.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/chartist/chartist.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/knob/knob.min.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/knob/knob-chart.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/dashboard/default.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/notify/index.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/typeahead/handlebars.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/typeahead-search/handlebars.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="https://admin.pixelstrap.com/cuba/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <!-- <script src="https://admin.pixelstrap.com/cuba/assets/js/script.js"></script> -->
    <!-- <script src="https://admin.pixelstrap.com/cuba/assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>