@extends('frontend.main_master')
@section('content')
@section('site_title')
    Hakkımızda
@endsection


<!-- Page Header Start !-->
<div class="page-breadcrumb-area page-bg">
    <div class="shape">
        <img src="{{ asset('frontend/assets/images/shape/part-of-round.png') }}" alt="breadcrumb">
    </div>
    <div class="shape">
        <img src="{{ asset('frontend/assets/images/shape/part-of-round.png') }}" alt="breadcrumb">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <h2 class="page-title">Hakkımızda</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="#">Hakkımızda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->


<!--why-choose-area  Start !-->
<div class="why-choose-area style-3 overflow-hidden mt-5">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between align-items-center">
            <div class="col-lg-6">
                <div class="about-info-card style-2">
                    <div class="section-title">
                        <div class="short-title">
                            <span>Neden Biz?</span>
                        </div>
                        {!! $about->description !!}
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-image-card style-4">
                    <div class="main-img">
                        <img src="{{ asset('frontend/assets/images/why-choose/image-2.jpg') }}" alt="about-us">
                    </div>
                    <div class="team-card style-2">
                        <h5>Ekip  <br> Üyesi</h5>
                        <div class="users">
                            <span>
                                <img src="{{ asset('frontend/assets/images/about/image.jpg') }}" alt="member">
                            </span>
                            <span>
                                <img src="{{ asset('frontend/assets/images/about/image-1.jpg') }}" alt="member">
                            </span>
                            <span>
                                <img src="{{ asset('frontend/assets/images/about/image-2.jpg') }}" alt="member">
                            </span>
                            <span>
                                <img src="{{ asset('frontend/assets/images/about/image-3.jpg') }}" alt="member">
                            </span>
                            <span>
                                +40
                            </span>
                        </div>
                    </div>
                    <div class="collaboration style-2">
                        <span>
                            <img src="{{ asset('frontend/assets/images/shape/hand-shake.png') }}" alt="collaboration">
                        </span>
                        <h3>25+</h3>
                        <p>İş <br> Ortağı</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--why-choose-area  End !-->
@endsection
