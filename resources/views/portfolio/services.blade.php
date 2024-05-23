@extends('layouts.app')

@section('title', '')

@section('contents')

<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="portfolio_assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Sevices</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="{{ Voyager::image($service->image) }}" alt="{{ $service->title }}">
                            </div>
                            <h4>{{ $service->title }}</h4>
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="img/neon.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>CREATE AWESOME WEBSITES AND VIDEOS WITH MY POWERFUL FEATURES</h2>
                            <p>Combines all the features you need to easily create professional Websites and Videos</p>
                            <a href="#">Start your project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

</body>

@endsection