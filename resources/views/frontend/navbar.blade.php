

    <header id="header" class="header-transparent header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 110}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{route('homepage')}}">
                                    <img alt="Porto" width="150" height="100" style="padding-top: 5px"
                                         src="{{asset('assets/frontend/img/word of designs 2 logo.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a data-hash class="nav-link" href="{{route('homepage')}}">
                                                    Home
                                                </a>
                                                {{--                                                <ul class="dropdown-menu">--}}
                                                {{--                                                    <li><a class="nav-link" href="index-classic.html">Default Home</a>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                    <li><a class="nav-link" href="index-one-page.html">One Page--}}
                                                {{--                                                            Website</a></li>--}}
                                                {{--                                                </ul>--}}
{{--                                                --}}
{{--                                                {{route('frontend.projects_test')}}--}}
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="68" href="{{route('frontend.services')}}">Services</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="68" href="{{route('frontend.allprojects')}}">Projects</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="68" href="{{route('frontend.ourTeam')}}">Meet the Team</a>
                                            </li>
{{--                                            <li>--}}
{{--                                                <a class="nav-link" data-hash data-hash-offset="0"--}}
{{--                                                   data-hash-offset-lg="68" href="">Meet the Team</a>--}}
{{--                                            </li>--}}
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="68" href="{{route('frontend.contactus')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
