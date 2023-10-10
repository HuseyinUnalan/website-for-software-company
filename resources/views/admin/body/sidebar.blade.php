<div class="vertical-menu">
    <div data-simplebar class="h-100">



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Anasayfa</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="far fa-image"></i>
                        <span>Referans İşlemleri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.portfolios') }}">Referans Listesi</a></li>
                        <li><a href="{{ route('add.portfolio') }}">Referans Ekle</a></li>
                    </ul>
                </li>

          


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-shield-user-line"></i>
                        <span>Hakkımızda İşlemleri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.about') }}">Hakkımızda Düzenle</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-3-line"></i>
                        <span>Ayarlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('settings.edit') }}">Genel Ayarlar</a></li>
                        <li><a href="{{ route('all.social.media') }}">Sosyal Medya Ayarlar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-honour-line"></i>
                        <span>Hizmet İşlemleri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.service') }}">Hizmet Listesi</a></li>
                        <li><a href="{{ route('add.service') }}">Hizmet Ekle</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-honour-line"></i>
                        <span>Blog İşlemleri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blogs') }}">Blog Listesi</a></li>
                        <li><a href="{{ route('add.blog') }}">Blog Ekle</a></li>
                    </ul>
                </li>


                <hr>

                @php
                    $message = DB::table('messages')
                        ->where('status', 0)
                        ->count();
                @endphp

                <li>
                    <a href="{{ route('all.message') }}" class=" waves-effect">
                        <i class="fas fa-envelope"></i>
                        <span>Mesajlar</span>
                        @if ($message > 0)
                            @php
                                $unread = $message;
                            @endphp
                            <span class="badge rounded-pill bg-success float-end">{{ $message }}</span>
                        @else
                        @endif
                    </a>
                </li>


             

                <li>
                    <a href="{{ route('/') }}" target="_blank">
                        <i class="ri-earth-fill"></i>
                        <span>Web Sitesi</span>
                    </a>

                </li>







            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
