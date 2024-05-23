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
                        <h2>About me</h2>
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

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($portfolios as $portfolio)
                            <li data-filter=".{{ $portfolio->type }}">{{ $portfolio->type }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 col-sm-6 mix {{ $portfolio->type }}" data-cat="{{ $portfolio->type }}">
                        <div class="portfolio__item">
                            @if ($portfolio->video_url)
                                <div class="portfolio__item__video set-bg" data-setbg="{{ Voyager::image($portfolio->image) }}">
                                    <a href="{{ $portfolio->video_url }}" class="play-btn video-popup">
                                        <i class="fa fa-play"></i></a>
                                </div>
                            @else
                                <div class="portfolio__item__pic set-bg" data-setbg="{{ Voyager::image($portfolio->image) }}">
                                    <div class="portfolio__item__title">
                                        <h4>{{ $portfolio->title }}</h4>
                                    </div>
                                </div>
                            @endif
                            <div class="portfolio__item__text">
                                <ul>
                                    @foreach (array_map('trim', explode(',', $portfolio->type)) as $t)
                                        <li>{{ $t }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        @if ($portfolios->previousPageUrl())
                            <a href="{{ $portfolios->previousPageUrl() }}" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        @endif
                        @foreach ($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                            <a href="{{ $url }}" class="number__pagination {{ $portfolios->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                        @endforeach
                        @if ($portfolios->nextPageUrl())
                            <a href="{{ $portfolios->nextPageUrl() }}" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
</body>

@endsection