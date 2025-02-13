@extends('home.base')
@section('content')
    @push('css')
        <style>

            small {
                font-size: 14px;
                text-transform: initial;
            }
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #68B44B;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #68B44B;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #68B44B;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #68B44B;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#68B44B;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
        </style>
    @endpush
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-1.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-3 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="main-slider__content">
                                    <div class="main-slider__video-link">
                                        <a href="#" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="main-slider__sub-title">{{ $siteName }}</p>
                                    <h2 class="main-slider__title">Investment in my Future</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('register') }}" class="thm-btn main-slider__btn">Start Investing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-2.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-3 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="main-slider__content">
                                    <div class="main-slider__video-link">
                                        <a href="#" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="main-slider__sub-title"></p>
                                    <h2 class="main-slider__title">Open an Account & Invest Easily</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('register') }}" class="thm-btn main-slider__btn">Open an Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('home/images/backgrounds/main-slider-1-3.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-2 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider-shape-3 float-bob-y">
                        <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="main-slider__content">
                                    <div class="main-slider__video-link">
                                        <a href="#" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="main-slider__sub-title">{{ route('register') }}</p>
                                    <h2 class="main-slider__title">Your Gateway To world Market</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('register') }}" class="thm-btn main-slider__btn">Start Investing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-up-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-up-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About {{$siteName}}</span>
                            <h2 class="section-title__title"><span>Delivering the</span> <span>Best
                                        Investment</span><span>Experience</span></h2>
                        </div>
                        <p class="about-one__left-text">
                            We are an international financial company engaged in investment activities, which are related
                            to trading on financial markets and asset management performed by qualified professionals.
                        </p>
                        <ul class="about-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-strategy-planning"></span>
                                </div>
                                <div class="content">
                                    <h4>Financial Strategy</h4>
                                    <p>
                                        Our Financial management strategy is built on the full understanding of the financial
                                        market and industry, boasting of over 10 years of experience.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-analysis-analytics-business"></span>
                                </div>
                                <div class="content">
                                    <h4>Efficiency And Productivity</h4>
                                    <p>
                                        We provide efficient and effective management strategies which allows
                                        for higher productivity, especially due to combination of Human skills,
                                        and advanced AI analytical prowess.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__bottom">
                            <div class="about-one__bottom-left">
                                <div class="about-one__bottom-img">
                                    <img src="{{asset('home/images/resources/about-one-bottom-1.jpg')}}" alt="">
                                    <div class="about-one__bottom-expert">
                                        <div class="about-one__bottom-expert-count-box">
                                            <h3 class="odometer" data-count="86">00</h3>
                                            <span class="about-one__bottom-expert-plus">+</span>
                                        </div>
                                        <p class="about-one__bottom-expert-text">Consulting <br> Experts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__bottom-text-box">
                                <p class="about-one__bottom-text">With over 80+ financial experts <br> each with over a decade of
                                    experience in the financial world<br> your financial journey is secured,
                                    and assets in good hands.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="about-one__right-img-box wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__right-shape">
                                <img src="{{asset('home/images/shapes/about-one-shape-1.png')}}" alt="">
                            </div>
                            <div class="about-one__right-img-one-box">
                                <div class="about-one__right-img-1">
                                    <img src="{{asset('home/images/resources/about-one-right-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="about-one__right-img-2">
                                <img src="{{asset('home/images/resources/about-one-right-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->





    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Invest on </span>
                            <h2 class="section-title__title"><span>Invest</span> <span>on
                                        Popular</span><span>Market</span></h2>
                        </div>

                        <div class="about-one__bottom">
                            <div class="about-one__bottom-text-box">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                        {
                                            "colorTheme": "dark",
                                            "dateRange": "12M",
                                            "exchange": "US",
                                            "showChart": true,
                                            "locale": "en",
                                            "width": "100%",
                                            "height": "500",
                                            "largeChartUrl": "",
                                            "isTransparent": false,
                                            "showSymbolLogo": false,
                                            "showFloatingTooltip": false,
                                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                            "gridLineColor": "rgba(42, 46, 57, 0)",
                                            "scaleFontColor": "rgba(209, 212, 220, 1)",
                                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url({{asset('home/images/backgrounds/services-one-bg.jpg')}});">
        </div>
        <div class="container">
            <div class="services-one__top text-center">
                <div class="section-title">
                    <span class="section-title__tagline">Our Services</span>
                    <h2 class="section-title__title"><span>Financial Solution</span></h2>
                </div>
                <p class="section-title__text">
                    We offer and are involved in a wide-range of financial solutions that allows for a greater yield
                    with lower risk profile. These sectors and services sum up to become the means we generate your returns.
                </p>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": false,
                        "margin": 30,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                    @foreach($services as $service)
                        <div class="item">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-idea"></span>
                                    </div>
                                    <h3 class="services-one__title"><a href="{{route('service.details',['id'=>$service->id])}}">
                                            {{$service->title}}
                                        </a></h3>
                                    <p class="services-one__text">
                                        {{$service->short}}
                                    </p>
                                    <div class="services-one__arrow">
                                        <a href="{{route('service.details',['id'=>$service->id])}}"><i class="icon-right-arrow-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Cta One start-->
    <div class="cta-one">
        <div class="cta-one__bg-img" style="background-image: url({{asset('home/images/backgrounds/cta-one-bg-1.jpg')}});">
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <div class="cta-one__img-box">
                        <img src="{{asset('home/images/resources/cta-one-1.jpg')}}" alt="">
                    </div>
                    <div class="cta-one__content">
                        <h3 class="cta-one__title">An awesome welcome bonus awaits <br> JOIN US TODAy!</h3>
                        <p class="cta-one__text">With over 47k+ users and over 10 years of experience<br>
                            be assured that your assets, investments are in the hands <br> of experienced experts.</p>
                    </div>
                </div>
                <div class="cta-one__right">
                    <div class="cta-one__right-count">
                        <div class="cta-one__right-count-box">
                            <span class="icon-award-badge-quality cta-one__right-icon"></span>
                            <h3 class="odometer" data-count="7">00</h3>
                            <span class="cta-one__right-expert-plus">+</span>
                        </div>
                        <p class="cta-one__right-text">Awards Won</p>
                    </div>
                    <div class="cta-one__right-button">
                        <a href="{{ route('register') }}" class="thm-btn cta-one__right-btn">Earn Benefit Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cta One end-->

    <!--Why Choose One-->
    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="{{asset('home/images/resources/why-choose-one-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="section-title">
                            <span class="section-title__tagline">Why would you like us</span>
                            <h2 class="section-title__title"><span>Protecting What</span> <span>Matters Most</span>
                            </h2>
                        </div>
                        <div class="why-choose-one__content">
                            <div class="why-choose-one__icon">
                                <span class="icon-analysis-analytics-business"></span>
                            </div>
                            <div class="why-choose-one__text-box">
                                <h3 class="why-choose-one__tagline">No1 Financial Solutions</h3>
                                <p class="why-choose-one__title">
                                    We help you build a portfolio in the forex, stocks, real estate industry, while
                                    offering you the best retirement, and financial planning service.
                                </p>
                            </div>
                        </div>
                        <p class="why-choose-one-text">Still in doubt, get in touch with an expert <br>
                            and let us help you get started with the best</p>
                        <div class="why-choose-one__progress">
                            <div class="why-choose-one__progress-single">
                                <h4 class="why-choose-one__progress-title">Financial Support</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar counted" data-percent="94%">
                                        <div class="count-text">94%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="why-choose-one__contact list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-user"></span>
                                </div>
                                <div class="content">
                                    <h4><a href="{{ route('register') }}">Start Membership</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose End-->


    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="section-title__title"><span>Investment </span> <span>Packages</span></h2>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit: {{$package->roi*$package->numberOfReturns}}%</li>
                                    <li>Profit/Capital Withdrawal: {{$package->capitalDuration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one-bg" style="background-image: url({{asset('home/images/backgrounds/project-one-bg.jpg')}});">
        </div>
        <div class="container">
            <div class="project-one__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="project-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Market Standing</span>
                                <h2 class="section-title__title"><span>Choose an investment product </span> <span>suitable for you</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="project-one__right">
                            <p class="project-one__text">
                                Best market prices available so you can receive excellent conditions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-one__bottom">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                        {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "showChart": true,
                            "locale": "en",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": true,
                            "showFloatingTooltip": false,
                            "width": "100%",
                            "height": "660",
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(106, 109, 120, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                            "tabs": [
                            {
                                "title": "Indices",
                                "symbols": [
                                    {
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "FOREXCOM:NSXUSD",
                                        "d": "US 100"
                                    },
                                    {
                                        "s": "FOREXCOM:DJI",
                                        "d": "Dow 30"
                                    },
                                    {
                                        "s": "INDEX:NKY",
                                        "d": "Nikkei 225"
                                    },
                                    {
                                        "s": "INDEX:DEU40",
                                        "d": "DAX Index"
                                    },
                                    {
                                        "s": "FOREXCOM:UKXGBP",
                                        "d": "UK 100"
                                    }
                                ],
                                "originalTitle": "Indices"
                            },
                            {
                                "title": "Futures",
                                "symbols": [
                                    {
                                        "s": "CME_MINI:ES1!",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "CME:6E1!",
                                        "d": "Euro"
                                    },
                                    {
                                        "s": "COMEX:GC1!",
                                        "d": "Gold"
                                    },
                                    {
                                        "s": "NYMEX:CL1!",
                                        "d": "Crude Oil"
                                    },
                                    {
                                        "s": "NYMEX:NG1!",
                                        "d": "Natural Gas"
                                    },
                                    {
                                        "s": "CBOT:ZC1!",
                                        "d": "Corn"
                                    }
                                ],
                                "originalTitle": "Futures"
                            },
                            {
                                "title": "Bonds",
                                "symbols": [
                                    {
                                        "s": "CME:GE1!",
                                        "d": "Eurodollar"
                                    },
                                    {
                                        "s": "CBOT:ZB1!",
                                        "d": "T-Bond"
                                    },
                                    {
                                        "s": "CBOT:UB1!",
                                        "d": "Ultra T-Bond"
                                    },
                                    {
                                        "s": "EUREX:FGBL1!",
                                        "d": "Euro Bund"
                                    },
                                    {
                                        "s": "EUREX:FBTP1!",
                                        "d": "Euro BTP"
                                    },
                                    {
                                        "s": "EUREX:FGBM1!",
                                        "d": "Euro BOBL"
                                    }
                                ],
                                "originalTitle": "Bonds"
                            },
                            {
                                "title": "Forex",
                                "symbols": [
                                    {
                                        "s": "FX:EURUSD",
                                        "d": "EUR/USD"
                                    },
                                    {
                                        "s": "FX:GBPUSD",
                                        "d": "GBP/USD"
                                    },
                                    {
                                        "s": "FX:USDJPY",
                                        "d": "USD/JPY"
                                    },
                                    {
                                        "s": "FX:USDCHF",
                                        "d": "USD/CHF"
                                    },
                                    {
                                        "s": "FX:AUDUSD",
                                        "d": "AUD/USD"
                                    },
                                    {
                                        "s": "FX:USDCAD",
                                        "d": "USD/CAD"
                                    }
                                ],
                                "originalTitle": "Forex"
                            }
                        ]
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </section>
    <!--Project One end-->

    <!--Testimonial One Start-->
    <section class="testimonials-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Our Testimonial</span>
                <h2 class="section-title__title"><span>What Does our Clients</span> <br> <span>Have to Say?</span>
                </h2>
            </div>
            <div class="testimonials-one__bottom">
                <div class="testimonials-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": false,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__top">
                                <h4 class="testimonials-one__tagline">Amazing Investment</h4>
                                <div class="testimonials-one__icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonials-one__text">
                                Investing with {{$siteName}} has been a game-changer for me. Their investment plans were so
                                tailored to exactly what i needed.
                            </p>
                            <div class="testimonials-one__client-info">
                                <div class="testimonials-one__client-img">
                                    <img src="https://ui-avatars.com/api/?name=Andro+Wilson" alt="">
                                </div>
                                <div class="testimonials-one__client-content">
                                    <h4 class="testimonials-one__client-name">Andro Wilson</h4>
                                    <p class="testimonials-one__client-sub-title">Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__top">
                                <h4 class="testimonials-one__tagline">Awesome Work</h4>
                                <div class="testimonials-one__icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonials-one__text">
                                I have been investing with {{$siteName}} for 3+ years, and have witnessed their
                                growth too, as well and the development. They have been steady with their promise, and
                                all I can say is Awesome work.
                            </p>
                            <div class="testimonials-one__client-info">
                                <div class="testimonials-one__client-img">
                                    <img src="https://ui-avatars.com/api/?name=Lera+Sarah" alt="">
                                </div>
                                <div class="testimonials-one__client-content">
                                    <h4 class="testimonials-one__client-name">Sarah L</h4>
                                    <p class="testimonials-one__client-sub-title">Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__top">
                                <h4 class="testimonials-one__tagline">Super Active Support</h4>
                                <div class="testimonials-one__icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonials-one__text">
                                I has always wanted to have a portfolio in the Real Estate Industry but never knew how, especially
                                as my money was lesser than what was needed to buy a house, and I couldn't afford to mortgage.
                                Then I learnt about {{$siteName}}, chatted their support, and they have been helpful in guiding me.
                            </p>
                            <div class="testimonials-one__client-info">
                                <div class="testimonials-one__client-img">
                                    <img src="https://ui-avatars.com/api/?name=Jeremy+F" alt="">
                                </div>
                                <div class="testimonials-one__client-content">
                                    <h4 class="testimonials-one__client-name">Jeremy F.</h4>
                                    <p class="testimonials-one__client-sub-title">Real Estate Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__top">
                                <h4 class="testimonials-one__tagline">Painless Grant</h4>
                                <div class="testimonials-one__icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonials-one__text">
                                My business was running under, the grants I applied were not forthcoming, then I got introduced
                                to {{$siteName}} where I could secure a stress-free grant, and grow my business.
                            </p>
                            <div class="testimonials-one__client-info">
                                <div class="testimonials-one__client-img">
                                    <img src="https://ui-avatars.com/api/?name=Philip+G" alt="">
                                </div>
                                <div class="testimonials-one__client-content">
                                    <h4 class="testimonials-one__client-name">Philip Guy</h4>
                                    <p class="testimonials-one__client-sub-title">Gym Instructor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--CTA Project Start-->
    <section class="cta-project">
        <div class="cta-project-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url({{asset('home/images/backgrounds/cta-project-bg.jpg')}});">
        </div>
        <div class="container">
            <div class="cta-project__top">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="cta-project__top-left">
                            <p class="cta-project__tagline">Build Financial Agility Throughout <br>
                                Your Planning</p>
                            <h3 class="cta-project__title">Considering or already <br> beginning to transform <br>
                                your
                                wealth?</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="cta-project__top-right">
                            <div class="cta-project__video-link">
                                <a href="#" class="video-popup">
                                    <div class="cta-project__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-project__bottom">
                <div class="cta-project__bottom-inner">
                    <div class="cta-project__bottom-left">
                        <div class="cta-project-counter-shape"
                             style="background-image: url({{asset('home/images/shapes/cta-project-counter-shape.png')}});">
                        </div>
                        <div class="cta-project-counter-bg"
                             style="background-image: url({{asset('home/images/backgrounds/cta-project-counter-bg.jpg')}});">
                        </div>
                        <div class="cta-project__counter">
                            <ul class="list-unstyled cta-project__counter-list">
                                <li>
                                    <div class="cta-project__counter-single">
                                        <div class="cta-project__counter-top">
                                            <div class="cta-project__counter-icon">
                                                <span class="icon-success-achievement-award-medal-winner"></span>
                                            </div>
                                            <div class="cta-project__counter-count-box">
                                                <h3 class="odometer" data-count="10">00</h3>
                                                <span class="cta-project__counter-plus">+</span>
                                            </div>
                                        </div>
                                        <p class="cta-project__counter-text">Years of experience</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta-project__counter-single">
                                        <div class="cta-project__counter-top">
                                            <div class="cta-project__counter-icon">
                                                <span class="icon-medal-award"></span>
                                            </div>
                                            <div class="cta-project__counter-count-box">
                                                <h3 class="odometer" data-count="7">00</h3>
                                            </div>
                                        </div>
                                        <p class="cta-project__counter-text">Awards Received</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cta-project__bottom-right">
                        <p class="cta-project__bottom-text">Our agency manages
                            a vast amount of financial assets and help investors grow their wealth.</p>
                        <div class="cta-project__bottom-img">
                            <img src="{{asset('home/images/resources/cta-project-img-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Project End-->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="blog-one__top">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog List</span>
                    <h2 class="section-title__title"><span>Check Our Latest Blog Post</span> <br> <span>from Blog
                                List</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__content">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                        "feedMode": "market",
                                        "market": "stock",
                                        "isTransparent": false,
                                        "displayMode": "regular",
                                        "width": "100%",
                                        "height": "400",
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Blog One end-->

@endsection
