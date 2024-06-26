@extends('layouts.app')

@section('title', '')

@section('contents')
    <body>

        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="hero__slider owl-carousel">
                @foreach($heroItems as $item)
                    <div class="hero__item set-bg" data-setbg="{{ Voyager::image($item->background_image_url) }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero__text">
                                        <span>{{ $item->subtitle }}</span>
                                        <h2>{{ $item->title }}</h2>
                                        <a href="{{ $item->link_url }}" class="primary-btn">See more about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Hero Section End -->

        <!-- Services Section Begin -->
        <section class="services spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="services__title">
                            <div class="section-title">
                                <span>Our services</span>
                                <h2>What I do?</h2>
                            </div>
                            <p>If you hire me you will get a professional to make a custom
                                web or video for your business and, once the project is over.</p>
                            <a href="{{ route('services') }}" class="primary-btn">View all services</a>
                        </div>
                    </div>
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
            </div>
        </section>
        <!-- Services Section End -->
            
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

        <!-- Call To Action Section Begin -->
        <section class="callto spad set-bg" data-setbg="portfolio_assets/img/bg-lights.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="callto__text">
                            <h2>Fresh Ideas, Fresh Moments Giving Wings to your Projects.</h2>
                            <a href="{{ route('portfolio') }}" class="cta-button">View my portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Section End -->

    </body>

@endsection