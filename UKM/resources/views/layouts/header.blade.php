<header class="header-top navbar fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle side-nav-toggle">
            <i class="ti-align-left"></i>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo-w.svg')}}">
            <span>Pengukuran Kinerja UKM</span>
        </a>
        <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
            <li>
                <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                    <i class="sli-user"></i>
                </a>
            </li>
        </ul>   <!-- END: Responsive Top Right tool bar -->
    </div>

    <div class="collapse navbar-collapse" id="headerNavbarCollapse">

        <ul class="nav navbar-nav">

            <li class="hidden-xs">
                <a href="javascript:;" class="sidenav-size-toggle">
                    <i class="ti-align-left"></i>
                </a>
            </li>

            {{-- <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="sli-bell"></i>
                    <div class="new-alert active"></div>
                </a>
                <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                    <li class="no-link">4 New Notifications</li>
                    <li>
                        <a href="#">
                            <div class="user-list-wrap">
                                <div class="profile-pic profile-icon"><i class="ti-file"></i></div>
                                <div class="detail">
                                    <span class="text-normal">Ricky Palmer</span>
                                    <span class="time">3 hrs ago</span>
                                    <p class="font-11 no-m-b text-overflow">Sent you a file</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="user-profile dropdown">
                <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('images/user/avatar.png')}}" alt="" class="hidden-sm">
                    <div class="user-name">Admin <small class="fa fa-angle-down"></small></div>
                </a>
                <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                    <li><a href="user-profile.html"><i class="sli-user"></i> My Profile</a></li>
                    <li><a href="msg-inbox.html"><i class="fa fa-envelope-o"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="sli-logout"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>
                </ul>
            </li>

        </ul>

    </div><!-- END: Navbar-collapse -->

</header>   <!-- END: Header -->
