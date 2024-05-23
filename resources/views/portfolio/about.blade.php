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
                            <h2>About Me</h2>
                            <div class="breadcrumb__links">
                                <a href="{{ route('index') }}">Home</a>
                                <span>About</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- About Section Begin -->
        <section class="about spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__pic">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about__pic__item about__pic__item--large set-bg"
                                        data-setbg="{{ asset('portfolio_assets/img/about/js.jpg') }}"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="about__pic__item set-bg" data-setbg="{{ asset('portfolio_assets/img/about/about-2.jpg') }}"></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="about__pic__item set-bg" data-setbg="{{ asset('portfolio_assets/img/about/about-3.jpg') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__text">
                            <div class="section-title">
                                <span>About Developing and Editing</span>
                                <h2>What I do</h2>
                            </div>
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="services__item">
                                            <div class="services__item__icon">
                                                <img src="{{ asset('portfolio_assets/img/icons/si-' . $loop->iteration . '.png') }}" alt="">
                                            </div>
                                            <h4>{{ $service->title }}</h4>
                                            <p>{!! $service->description !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Testimonial Section Begin -->
        <section class="testimonial spad set-bg" data-setbg="{{ asset('portfolio_assets/img/bg-lights.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <span>Loved By Clients</span>
                            <h2>What clients say?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimonial__slider owl-carousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-lg-4">
                                <div class="testimonial__item">
                                    <div class="testimonial__text">
                                        <p>{{ $testimonial->testimonial }}</p>
                                    </div>
                                    <div class="testimonial__author">
                                        <div class="testimonial__author__pic">
                                            <img src="{{ Voyager::image($testimonial->image) }}" alt="{{ $testimonial->name }}">
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5>{{ $testimonial->name }}</h5>
                                            <span>{{ $testimonial->role }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->
        
        <!-- Counter Section Begin -->
        <section class="counter">
            <div class="container">
                <div class="counter__content">
                    <div class="row">
                        @foreach ($counters as $counter)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="counter__item {{ $loop->index % 2 === 0 ? 'second__item' : '' }}">
                                    <div class="counter__item__text">
                                        <img src="{{ Voyager::image($counter->icon) }}" alt="{{ $counter->title }}">
                                        <h2 class="counter_num">{{ $counter->number }}</h2>
                                        <p>{{ $counter->title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section End -->

    </body>

@endsection