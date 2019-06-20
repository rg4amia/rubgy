<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">

    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">CRAC</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                       data-ticon="icon-disc"></i>
                </a>
            </li>
        </ul>

    </div>

    <div class="shadow-bottom"></div>

    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



            <li class="navigation-header"><span></span></li>

            <li class="nav-item">
                <a href="{{ route('eleve.index')}}">
                    <i class="feather icon-video"></i>
                    <span class="menu-title" data-i18n="Videos">Eleves</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-send"></i>
                    <span class="menu-title" data-i18n="Campaigns">Campaigns</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-pie-chart"></i>
                    <span class="menu-title" data-i18n="Analytics">Analytics</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-user-x"></i>
                    <span class="menu-title" data-i18n="Leads">Leads</span>
                </a>
            </li>

            <hr>

            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-activity"></i>
                    <span class="menu-title" data-i18n="Training">Training</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-life-buoy"></i>
                    <span class="menu-title" data-i18n="Help Center">Help Center</span>
                </a>
            </li>

            <li class="nav-item has-sub sidebar-group-active">
                <a href="#">
                    <i class="feather icon-zap"></i>
                    <span class="menu-title" data-i18n="">Integrations</span>
                </a>
                <ul class="menu-content" style="">
                    <li>
                        <a href="#">
                            <i></i><span class="menu-item" data-i18n="Amazon API">Amazon API</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i></i><span class="menu-item" data-i18n="eBay API">eBay API</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i></i><span class="menu-item" data-i18n="Aliexpress API">Aliexpress API</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i></i><span class="menu-item" data-i18n="walmart">Walmart API</span>
                        </a>
                    </li>

                </ul>
            </li>

            <hr>

            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="Team Manager">Team Manager</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-message-square"></i>
                    <span class="menu-title" data-i18n="Manage Clients">Manage Clients</span>
                </a>
            </li>

        </ul>

    </div>

</div>
<!-- END: Main Menu-->
