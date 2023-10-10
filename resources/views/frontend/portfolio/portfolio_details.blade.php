@extends('frontend.main_master')
@section('content')
@section('site_title')
    {{ $portfolio->title }}
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
                        <h2 class="page-title"> {{ $portfolio->title }}</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="#"> {{ $portfolio->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<!-- Project-details Section Start !-->
<div class="project-detail-area">
    <div class="container">
        <!-- Image gallery Start -->

        <!-- Image gallery End -->
        <!-- Content section Start -->
        <div class="row mt-65">
            <div class="col-lg-8">
                <div class="image">
                    <img src="{{ asset($portfolio->photo) }}" alt="project-details">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-info-widget">
                    <div class="info-item">
                        <h6>Müşteri </h6>
                        <p>{{ $portfolio->title }}</p>
                    </div>
                    <div class="info-item">
                        <h6>Teknolojiler:</h6>
                        <p>UI/UX Design, Front-end Dev, Back-end Dev, SEO Optimization</p>
                    </div>
                    
                    @if (!empty($portfolio->link))
                        <div class="info-item">
                            <h6>Website Link:</h6>
                            <a href="{{ $portfolio->link }}" class="btn btn-success mt-2" target="_blank">Web Sitesini Ziyaret Et</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <!-- Content section End -->
        <div class="project-details-title">
            <p>{!! $portfolio->description !!}</p>
        </div>
       
        
       
    </div>

</div>
<!-- Project-details Section end -->


@endsection
