 <footer class="footer" style="background-image: url({{ asset('frontend/assets/images/footer-gridient.png') }});">
     <div class="footer-sec">
         <span class="ball style-1"></span>
         <span class="ball style-2"></span>
         <span class="ball style-3"></span>
         <span class="ball style-4"></span>
         <div class="container">

             <div class="row">
                 <div class="col-xxl-6 col-xl-3 col-lg-3 col-md-6">
                     <div class="footer-widget">
                         <div class="footer-widget-info">
                             <div class="footer-logo">
                                 <a href="index.html"><img src="images/logo/footer-logo.png" alt="Footer Logo" /></a>
                             </div>
                             {!! Str::limit(filter_var($about->description, FILTER_SANITIZE_STRING), 400) !!}
                             <a href="{{ route('home.about') }}">Devamını Oku</a>
                             <div class="social-profile">
                                 @foreach ($socailmedia as $item)
                                     <a href="{{ $item->link }}">{!! $item->icon !!}</a>
                                     < @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-6">
                     <div class="row">
                         <div class="col-6">
                             <div class="footer-widget widget_nav_menu">
                                 <h2 class="footer-widget-title">Hızlı Linkler</h2>
                                 <ul class="menu">
                                     <li><a href="{{ route('/') }}">Anasayfa</a></li>
                                     <li><a href="{{ route('home.about') }}">Hakkımızda</a></li>
                                     <li><a href="{{ route('home.portfolios') }}">Referanslarımız</a></li>
                                     <li><a href="{{ route('home.services') }}">Hizmetlerimiz</a></li>
                                     <li><a href="{{ route('home.blog') }}">Bloglarımız</a></li>
                                     <li><a href="{{ route('home.contact') }}">İletişim</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                     <div class="footer-widget">
                         <h2 class="footer-widget-title">Bloglar</h2>
                         <div class="widget_latest_post">
                             <ul>

                                 @foreach ($blogs as $blog)
                                     <li>
                                         <div class="latest-post-thumb">
                                             <img src="{{ asset($blog->photo) }}" alt="">
                                         </div>
                                         <div class="latest-post-desc">

                                             <h3 class="latest-post-title"><a
                                                     href="{{ route('blog.details', $blog->title_slug) }}">
                                                     {{ $blog->title }}
                                                 </a>
                                             </h3>
                                         </div>
                                     </li>
                                 @endforeach

                             </ul>
                         </div>
                     </div>
                 </div>


             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="footer-bottom-border"></div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom-area">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="copyright-text">
                         <p>Copyright &copy; 2023 <a href="">İstanbul Yazılım</a> Tüm Hakları Saklıdır
                         </p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </footer>
