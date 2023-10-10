@extends('frontend.main_master')
@section('content')
@section('site_title')
    {{ $blog->title }}
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
                        <h2 class="page-title">{{ $blog->title }}</h2>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('/') }}">Anasayfa</a></li>
                            <li class="active"><a href="#">{{ $blog->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  blog-details-wrapper">
                <!-- Post Details Start -->
                <article class="single-post-item" style="text-align: -webkit-center">
                    <div class="post-thumbnail col-md-8 ">
                        <a href="#">
                          <img src="{{ asset($blog->photo) }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="post-content-wrapper">
                        {{-- <div class="content-header">
                            <div class="post-meta">
                                <span> <img src="images/blog/single-post-meta.png" alt="blog"> John doe</span>
                            </div>
                            <div class="info">
                                <span>
                                    <i class="fa-solid fa-circle"></i>
                                    April 22, 2022
                                </span>
                                <span>
                                    <i class="fa-solid fa-circle"></i>
                                    5 min read
                                </span>
                            </div>
                            <div class="tag-wrapper">
                                <a href="#">
                                    <span class="tag">Branding</span>
                                </a>
                            </div>
                        </div> --}}
                        <h3 class="post-title">
                            <a href="">
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <div class="post-content">
                            <p>
                                {!! $blog->description !!}
                            </p>



                        </div>

                    </div>
                </article>


                <!-- Post Details End -->
            </div>

        </div>
    </div>
</div>
<!--- Blog End !-->


@endsection
