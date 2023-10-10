@extends('frontend.main_master')
@section('content')
@section('site_title')
    Hizmetlerimiz
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
                        <h2 class="page-title">Hizmetlerimiz</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="#">Hizmetlerimiz</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<!-- Project-card wrapper Start -->
<div class="project-card-wrapper">
    <div class="container">


        <div class="row g-4 p-0 m-0 isotope-grid">

            @foreach ($services as $service)
                <div class="col-12 col-md-6 isotope-item userInterface webDesign">
                    <div class="project-card style-1">
                        <div class="portfolio-card style-2">
                            <div class="image">
                                <img src="{{ asset($service->photo) }}" style="width: auto; height: 476px;" alt="portfolio">
                            </div>
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="icon">
                                    <a href="{{ route('service.details', $service->title_slug) }}">
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <h4>{{ $service->title }}</h4>

                            <p class="desc">{!! Str::limit(filter_var($service->description, FILTER_SANITIZE_STRING), 100) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Project-card wrapper End -->
@endsection
