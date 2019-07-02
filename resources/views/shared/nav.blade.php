<header class="header fixed-top clearfix">

    <!--logo start-->
    <div class="brand">

        <a href="../index.html" class="logo">
            LMS Dashboard
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->

    <!-- 
        *****************************
        ** Start of top navigation **
        *****************************
     -->
    <div class="top-nav">

        <ul class="nav navbar-nav navbar-left" style="margin-left:30px;">
            <li>
                <a href="javascript:void(0)" class="btn-menu-grid" title="Menu Grid">
                    <span class="icon-grid"></span>
                </a>
            </li>
            {{-- <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    <span class=" fa fa-angle-down" style="font-size:12px;"></span>
                </a>
                <ul class="dropdown-menu animated fadeInUp pull-right">
                    <li>
                        <a href="javascript:void(0);" class="hvr-bounce-to-right">  Submenu 1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="hvr-bounce-to-right">
                            <span class="badge bg-red pull-right">20%</span>
                            <span>Submenu 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="hvr-bounce-to-right">Submenu 3</a>
                    </li>
                    <li><a href="login.html" class="hvr-bounce-to-right">Submenu 4</a>
                    </li>
                </ul>
            </li> --}}
        </ul>    
        
        <ul class="nav navbar-nav navbar-right">
            <li class="search-box">
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <li role="presentation" class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <span class="pe-7s-mail" style="font-size:22.9px;"></span>
                    <span class="badge bg-color label-danger">6</span>
                </a>
                <ul id="menu" class="dropdown-menu list-unstyled msg_list animated fadeInUp" role="menu">
                    <li>
                        <a class="hvr-bounce-to-right">
                            <span class="image">
                                <img src="../../../assets/images/profile.jpg" alt="Profile Image" />
                            </span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where... 
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="hvr-bounce-to-right">
                            <span class="image">
                                <img src="../../../assets/images/profile.jpg" alt="Profile Image" />
                            </span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where... 
                            </span>
                        </a>
                    </li>
                    <li class='top-nav-li-see-all-alerts'>
                        <div class="text-center">
                            <a href="inbox.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::asset('images/profile.jpg')}}" alt="image">John Doe
                    <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInUp pull-right">
                    <li>
                        <a href="../app-pages/page-profile-dashboard.html" class="hvr-bounce-to-right">  Profile</a>
                    </li>
                    <li>
                        <a href="../app-pages/page-profile-settings.html" class="hvr-bounce-to-right">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="hvr-bounce-to-right">Help</a>
                    </li>
                    <li><a href="../app-pages/page-login-2.html" class="hvr-bounce-to-right"><i class=" icon-login pull-right"></i> Log Out</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>

    <!-- 
        *****************************
        *** End of top navigation ***
        *****************************
     -->

</header>