<!-- Sidebar Nav -->
    <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
      <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
        
        <!-- Dashboard -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
          <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ url('home') }}">
            <span class="d-flex align-self-center g-font-size-18 g-mr-18">
              <i class="hs-admin-desktop"></i>
            </span>
            <span class="media-body align-self-center">Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard -->

        <!-- User Profile -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
          <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ url('privateviews/users/profile') }}">
            <span class="d-flex align-self-center g-font-size-18 g-mr-18">
              <i class="hs-admin-user"></i>
            </span>
            <span class="media-body align-self-center">Profile</span>
          </a>
        </li>
        <!-- End User profile -->

        <!-- Layouts Settings -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
          <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu2">
            <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
              <i class="hs-admin-desktop"></i>
            </span>
            <span class="media-body align-self-center">Services</span>
            <span class="d-flex align-self-center u-side-nav--control-icon">
              <i class="hs-admin-angle-right"></i>
            </span>
            <span class="u-side-nav--has-sub-menu__indicator"></span>
          </a>

          <!-- Layouts Settings: Submenu-1 -->
          <ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
            <!-- Header Static -->
            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
              <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/header-static.html">
                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                  <i class="hs-admin-layout-media-center-alt"></i>
                </span>
                <span class="media-body align-self-center">Header Static</span>
              </a>
            </li>
            <!-- End Header Static -->

          </ul>
          <!-- End Layouts Settings: Submenu-1 -->
        </li>
        <!-- End Layouts Settings -->


        <!-- Packages -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
          <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="packages.html">
            <span class="d-flex align-self-center g-font-size-18 g-mr-18">
              <i class="hs-admin-medall"></i>
            </span>
            <span class="media-body align-self-center">Packages</span>
          </a>
        </li>
        <!-- End Packages -->

        <!-- Logout -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
          <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="d-flex align-self-center g-font-size-18 g-mr-18">
              <i class="hs-admin-power-off"></i>
            </span>
            <span class="media-body align-self-center">Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </a>
        </li>
        <!-- End Logout -->

      </ul>
    </div>
    <!-- End Sidebar Nav -->