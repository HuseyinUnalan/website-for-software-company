<header class="header-area">
    <!-- Header Nav Menu Start -->
    <div class="header-menu-area sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-6 d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ route('/') }}" class="standard-logo">
                            <img src="{{ asset($settings->logo) }}" alt="logo" />
                        </a>
                        <a href="{{ route('/') }}" class="sticky-logo">
                            <img src="{{ asset($settings->logo) }}" alt="logo" />
                        </a>
                        <a href="{{ route('/') }}" class="retina-logo">
                            <img src="{{ asset($settings->logo) }}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div
                    class="col-xl-9 col-lg-9 col-md-6 col-6 d-flex align-items-center justify-content-end justify-content-xxl-between">
                    <div class="menu d-inline-block">
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li><a href="{{ route('/') }}">Anasayfa</a></li>
                                <li><a href="{{ route('home.about') }}">Hakkımızda</a></li>
                                <li><a href="{{ route('home.portfolios') }}">Referanslarımız</a></li>
                                <li><a href="{{ route('home.services') }}">Hizmetlerimiz</a></li>
                                <li><a href="{{ route('home.blog') }}">Bloglarımız</a></li>
                                <li><a href="{{ route('home.contact') }}">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Mobile Menu Toggle Button Start !-->
                    <div class="mobile-menu-bar d-lg-none text-end">
                        <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                    </div>
                    <!-- Mobile Menu Toggle Button End !-->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav Menu End -->
</header>

<!-- Menu Sidebar Section Start -->
<div class="menu-sidebar-area">
    <div class="menu-sidebar-wrapper">
        <div class="menu-sidebar-close">
            <button class="menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="menu-sidebar-content">
            <div class="menu-sidebar-logo">
                <a href="index.html">
                    <img src="{{ asset($settings->logo) }}" alt="logo" />
                </a>
            </div>
            <div class="mobile-nav-menu"></div>
            <div class="menu-sidebar-content">
                <div class="menu-sidebar-single-widget">
                    <h5 class="menu-sidebar-title">Contact Info</h5>
                    <div class="header-contact-info">
                        <span><i class="fa-solid fa-location-dot"></i> {{ $settings->address }}</span>
                        <span><a href="mailto:{{ $settings->email }}"><i
                                    class="fa-solid fa-envelope"></i>{{ $settings->email }}</a> </span>
                        <span><a href="tel:{{ $settings->phone }}"><i
                                    class="fa-solid fa-phone"></i>{{ $settings->phone }}</a></span>
                    </div>
                    <div class="social-profile">
                        @foreach ($socailmedia as $item)
                           <a href="{{ $item->link }}">{!! $item->icon !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu Sidebar Section Start -->
