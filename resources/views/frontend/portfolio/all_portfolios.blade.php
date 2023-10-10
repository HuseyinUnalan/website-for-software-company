@extends('frontend.main_master')
@section('content')
@section('site_title')
    Referanslar
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
                        <h2 class="page-title">Referanslarımız</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="#">Referanslarımız</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->


<!-- Service-card-area Start -->
<div class="service-card-area style-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-card-wrapper">


                    @foreach ($portfolios as $portfolio)
                        <div class="image-card">
                            <div class="section-title">
                                <div class="short-title">
                                    <span>Referans</span>
                                </div>
                                <h2 class="title">{{ $portfolio->title }}</h2>
                                <p class="desc">
                                    {!! $portfolio->description !!}
                                </p>

                                <div>
                                    <a href="{{ route('portfolio.details', $portfolio->title_slug) }}"
                                        class="theme-btn">
                                        <div class="swip">
                                            <div class="title-wrapper">
                                                <span class="title-1">Devamını Oku</span>
                                                <span class="title-2">Devamını Oku</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="image">
                                <div class="image-inner">
                                    <img src="{{ asset($portfolio->photo) }}" alt="choose-us" />
                                </div>
                            </div>
                        </div>
                    @endforeach





                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service-card-area End -->

@endsection
