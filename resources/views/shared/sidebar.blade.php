<aside>
    <div id="sidebar" class="nav-collapse md-box-shadowed">
        <!-- sidebar menu start-->
        <div class="leftside-navigation leftside-navigation-scroll">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sidebar-profile">
                    
                    <div class="profile-options-container">
                        <p class="text-right profile-options"><span class="profile-options-close pe-7s-close fa-2x font-bold"></span></p>

                        <div class="profile-options-list animated zoomIn">
                            <p><a href="#">Profile</a></p>
                            <p><a href="#">Settings</a></p>
                            <p><a href="#">Log Out</a></p>
                        </div>
                        
                    </div>
                    
                    <div class="profile-main">
                        <p class="text-right profile-options"><i class="profile-options-open icon-options-vertical fa-2x"></i></p>
                        <p class="image">
                            <img alt="image" src="{{URL::asset('images/profile.jpg')}}" width="80">
                            <span class="status"><i class="fa fa-circle text-success"></i></span>
                        </p>
                        <p>
                            <span class="name">{{Auth::guard('admin')->user()->firstname.' '.Auth::guard('admin')->user()->lastname}}</span><br>
                            <span class="position" style="font-family: monospace;">Administrator</span>
                        </p>
                    </div>

                </li>
                <li>
                    <a href="/admin/dashboard" class="hvr-bounce-to-right-sidebar-parent {{request()->is('admin/dashboard')?'active':''}}"><span class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/users" class="hvr-bounce-to-right-sidebar-parent {{request()->is('users')?'active':''}}"><span class='icon-sidebar icon-screen-desktop fa-2x'></span><span>Users</span></a>
                </li>
                <li>
                    <a href="/members" class="hvr-bounce-to-right-sidebar-parent {{request()->is('members')?'active':''}}"><span class='icon-sidebar icon-screen-desktop fa-2x'></span><span>Members</span></a>
                </li>
                <li>
                    <a href="/loans" class="hvr-bounce-to-right-sidebar-parent {{request()->is('loans')?'active':''}}"><span class='icon-sidebar icon-screen-desktop fa-2x'></span><span>Loans</span></a>
                </li>
                <li>
                    <a href="#" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar icon-screen-desktop fa-2x'></span><span>Reports</span></a>
                </li>
                <li>
                    <a href="#" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar icon-screen-desktop fa-2x'></span><span>Settings</span></a>
                </li>
            </ul>        
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>