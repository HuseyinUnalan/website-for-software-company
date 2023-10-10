@extends('frontend.main_master')
@section('content')
@section('site_title')
    İletişim
@endsection

<!-- Page Header Start !-->
<div class="page-breadcrumb-area page-bg">
    <div class="shape">
        <img src="{{ asset('frontend/assets/images/shape/part-of-round.png') }}" alt="breadcrumb">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <h2 class="page-title">İletişim</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="">İletişim</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<!-- Contact-info Section Start !-->
<div class="contact-info-area">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="icon-card-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="icon-card style-3">
                        <div class="sketch">
                            <img src="{{ asset('frontend/assets/images/shape/wave.png') }}" alt="shape">
                        </div>
                        <div class="icon secondary">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="content">
                            <h2 class="title">
                                Telefon Numaramız
                            </h2>
                        </div>
                        <div class="contact-info">
                            <h6>
                                <a href="tel:{{ $settings->whatsapp }}">
                                    {{ $settings->whatsapp }}
                                </a>
                            </h6>
                            <h6>
                                <a href="tel:{{ $settings->phone }}">
                                    {{ $settings->phone }}
                                </a>
                            </h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="icon-card style-3">
                        <div class="sketch">
                            <img src="{{ asset('frontend/assets/images/shape/wave.png') }}" alt="shape">
                        </div>
                        <div class="icon primary">
                            <i class="icon-user"></i>
                        </div>
                        <div class="content">
                            <h2 class="title">
                                E-mail
                            </h2>
                        </div>
                        <div class="contact-info">
                            <h6>
                                <a href="mailto:{{ $settings->email }}">
                                    {{ $settings->email }}
                                </a>
                            </h6>

                            <h6>
                                <a href="mailto:osmanaktas@istanbulyazilim.net">
                                    osmanaktas@istanbulyazilim.net
                                </a>
                            </h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="icon-card style-3">
                        <div class="sketch">
                            <img src="{{ asset('frontend/assets/images/shape/wave.png') }}" alt="shape">
                        </div>
                        <div class="icon">
                            <i class="icon-analysis"></i>
                        </div>
                        <div class="content">
                            <h2 class="title"> Adres </h2>
                        </div>
                        <div class="contact-info">
                            <h6>
                                {{ $settings->address }}
                            </h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact-info Section End -->
<!-- Contact Form Section Start -->
<div class="contact-form-area">
    <!-- Submit form Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="video-popup-card">
                    <div class="video-popup-image">
                        <img src="{{ asset('frontend/assets/images/video-popup/popup-img-2.jpg') }}"
                            alt="popup image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Comment Form Start -->
                <div class="comment-respond">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('store.message') }}" method="POST">
                        @csrf
                        <div class="row g-6 ">
                            <div class="col-md-6">
                                <div class="contacts-name">
                                    <label>Ad Soyad</label>
                                    <input name="name" type="text" placeholder="Ad Soyad">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-email">
                                    <label>Email</label>
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-name">
                                    <label>Telefon Numarası</label>
                                    <input name="phone" type="text" placeholder="Telefon Numarası">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-email">
                                    <label>Konu</label>
                                    <input name="subject" type="text" placeholder="Konu">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contacts-message">
                                    <label>Mesajınız</label>
                                    <textarea name="message" cols="20" rows="3" placeholder="Mesajınız"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="theme-btn">
                                    <div class="swip">
                                        <div class="title-wrapper">
                                            <span class="title-1">Gönder</span>
                                            <span class="title-2">Gönder</span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>
        </div>
    </div>
    <!-- Submit form End -->
</div>
<!-- Contact Form Section End -->
@endsection
