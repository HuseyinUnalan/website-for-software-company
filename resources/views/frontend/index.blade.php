@extends('frontend.main_master')
@section('content')
@section('site_title')
    {{ $settings->site_title }}
@endsection

<!-- Slider Section Start !-->
<div class="hero-area style-1" style="background: url({{ asset('frontend/assets/images/hero/bg.jpg') }})">
    <div class="sketch">
        <img src="{{ asset('frontend/assets/images/shape/star.png') }}" alt="sketch">
    </div>
    <div class="sketch-2">
        <img src="{{ asset('frontend/assets/images/shape/single-star.png') }}" alt="sketch">
    </div>
    <div class="container">
        <div class="row h-100 justify-content-between">
            <div class="col-lg-6 col-xl-5 align-self-center">
                <div class="content-wrapper">
                    <div class="hero-title">
                        <div class="short-title">
                            <span>İstanbul Yazılım</span>
                        </div>
                        <h1 class="title">Kullanıcı deneyimi yüksek <span class="underline">
                                <img src="{{ asset('frontend/assets/images/shape/underline.png') }}" alt="underline">web
                                sitesi</span> tasarımları
                        </h1>
                        <p class="desc">MARKA VE ŞİRKETLER İÇİN DİJİTAL ÇÖZÜMLER HAZIRLIYORUZ</p>
                    </div>
                    <div class="btn-wrapper">
                        <a href="tel:{{ $settings->phone }}" class="theme-btn">
                            <div class="swip">
                                <div class="title-wrapper">
                                    <span class="title-1">Bize Ulaşın</span>
                                    <span class="title-2">Hemen Arayın</span>
                                </div>
                            </div>
                        </a>
                        {{-- <div class="video-popup-btn">
                            <a href="https://www.youtube.com/watch?v=SZEflIVnhH8" class="mfp-iframe video-play">
                                <span class="icon"><i class="icon-play" aria-hidden="true"></i></span>
                                <div class="swip">
                                    <div class="title-wrapper">
                                        <span class="title-1 text">Watch video</span>
                                        <span class="title-2 text">Watch video</span>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 align-self-end">
                <div class="hero-image">
                    <div class="main-img">
                        <img src="{{ asset('frontend/assets/images/hero/hero-1.jpg') }}" alt="feature image" />
                    </div>
                    <div class="work-activity">
                        <img src="{{ asset('frontend/assets/images/hero/work-activity.png') }}" alt="work-activity">
                    </div>
                    <div class="profits">
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                        <div class="content">
                            <span>Hizmet</span>
                            <h5>+700</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End !-->
<!-- Service-area style-1 Start-->
<div class="service-area style-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-6">
                <div class="section-title text-center ">
                    <div class="short-title">
                        <span>Hizmetlerimiz</span>
                    </div>
                    <h2 class="title">Büyük Fikirler, <span class="underline"> <img
                                src="{{ asset('frontend/assets/images/shape/underline.png') }}" alt="underline">
                            yaratıcı</span>
                        insanlar, yeni teknoloji.</h2>
                </div>
            </div>
        </div>
        <div class="icon-card-wrapper">
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 mt-3">
                        <div class="icon-card style-2">
                            <div class="sketch">
                                <img src="{{ asset('frontend/assets/images/shape/wave.png') }}" alt="shape">
                            </div>
                            <div class="icon secondary">
                                <i class="icon-flash"></i>
                            </div>
                            <div class="content">
                                <h2 class="title">
                                    <a href="{{ route('service.details', $service->title_slug) }}">
                                        {{ $service->title }}
                                    </a>
                                </h2>
                                <p class="desc">
                                    {!! Str::limit(filter_var($service->description, FILTER_SANITIZE_STRING), 100) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
<!-- Service-area style-1 End-->
<!-- Support-banner start -->
<div class="support-banner">
    <div class="container p-0">
        <div class="support-card">
            <p>Sizlere <span> 40+</span> ekip üyemiz ile hizmet vermekteyiz.</p>
        </div>
    </div>
</div>
<!-- Support-banner end -->
<!-- About Us Area Start !-->
<div class="about-us-area style-1 overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-5">
                <div class="about-image-card"
                    style="background-image: url({{ asset('frontend/assets/images/about/bg.png') }});">
                    <div class="sketch">
                        <img src="{{ asset('frontend/assets/images/shape/horn.png') }}" alt="sketch">
                    </div>
                    <div class="main-img ">
                        <img src="{{ asset($about->photo) }}" alt="about-us">
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-info-card">
                    <div class="section-title">
                        <div class="short-title">
                            <span>Hakkımzda</span>
                        </div>
                        <h2 class="title"><span class="underline"> <img
                                    src="{{ asset('frontend/assets/images/shape/underline.png') }}" alt="underline">
                                {{ $about->title }}</span></h2>
                        <p class="desc"> {!! Str::limit(filter_var($about->description, FILTER_SANITIZE_STRING), 425) !!}</p>
                        <div class="bd-section__btn-wrapper">
                            <a href="hakkimizda" class="bd-btn">Devamını Oku <span><i
                                        class="fa-regular fa-angle-right"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us Area End !-->

<!-- portfolio-slider-area style-1 Start -->
<div class="portfolio-slider-area style-1">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title">
                <div class="short-title">
                    <span>Referanslarımız</span>
                </div>
                <h2 class="title">Bizi Tercih Eden Müşterilerimizden
                    <span class="underline"><img src="{{ asset('frontend/assets/images/shape/underline.png') }}"
                            alt="underline"> Bazıları
                    </span>
                </h2>
            </div>
            <div>
                <a href="{{ route('home.portfolios') }}" class="theme-btn">
                    <div class="swip">
                        <div class="title-wrapper">
                            <span class="title-1">Diğer Referanslarımız</span>
                            <span class="title-2">Referanslarımız</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="portfolio-slider">

        @foreach ($portfolios as $portfolio)
            <div class="portfolio-card">
                <div class="image">
                    <img src="{{ asset($portfolio->photo) }}" alt="portfolio">
                </div>
                <div class="overlay"></div>
                <div class="content">
                    <div class="icon">
                        <a href="{{ route('portfolio.details', $portfolio->title_slug) }}">
                            <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h4>{{ $portfolio->title }}</h4>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
<!-- portfolio-slider-area style-1 End -->

 <!-- Latest-post-area Style-1 Start -->
    <div class="latest-post-area style-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="section-title text-center">
                        <div class="short-title">
                            <span>Bloglarımız</span>
                        </div>
                        <h2 class="title">İlginizi çekebilecek <span class="underline"><img
                                    src="{{ asset('frontend/assets/images/shape/underline.png') }}" alt="underline">
                                bloglarımız </span> </h2>

                    </div>
                </div>
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single-post-card start -->
                            <div class="post-card">
                                <div class="image">
                                    <img src="{{ asset($blog->photo) }}" alt="post-1">
                                </div>
                                <div class="content">
                                    {{-- <div class="tag-wrapper">
                                    <a href="#" class="tag-item">
                                        Branding
                                    </a>
                                </div> --}}
                                    <h4 class="title">
                                        <a href="{{ route('blog.details', $blog->title_slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                    {{-- <div class="post-meta">
                                    <a href="#">
                                        <span class="date">
                                            <i class="icon-calendar"></i>
                                            April 22, 2022
                                        </span>
                                    </a>
                                    <span class="time">
                                        <i class="fa-solid fa-circle"></i>
                                        <a href="#">5 min read</a>
                                    </span>
                                </div> --}}
                                </div>
                            </div>
                            <!-- Single-post-card End-->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Latest-post-area Style-1 End -->
    </div>

    @endsection
