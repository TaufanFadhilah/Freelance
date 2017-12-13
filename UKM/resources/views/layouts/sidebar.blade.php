<aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
    <div class="sidenav-inner">

        <ul class="side-nav magic-nav">

            <li class="side-nav-header">Navigasi</li>

            <li>
                <a href="{{route('home')}}"><i class="sli-dashboard"></i> <span class="nav-text">Beranda</span></a>
            </li>


            <li class="has-submenu">
                <a href="#submenuOne" data-toggle="collapse" aria-expanded="false">
                    <i class="fs-grid-6"></i>
                    <span class="nav-text">UKM</span>
                </a>
                <div class="sub-menu collapse secondary" id="submenuOne">
                    <ul>
                        <li><a href="{{route('Estimation')}}">Estimasi</a></li>
                        <li><a href="{{route('list.UKM',['cat' => 1])}}">UKM Kecil</a></li>
                        <li><a href="{{route('list.UKM',['cat' => 2])}}">UKM Sedang</a></li>
                        <li><a href="{{route('list.UKM',['cat' => 3])}}">UKM Besar</a></li>
                        <li><a href="{{route('listAll.UKM')}}">Seluruh UKM</a></li>
                    </ul>
                </div>
            </li>

        </ul>

    </div><!-- END: sidebar-inner -->

</aside>    <!-- END: Side Navigation -->
