@extends('frontend.layouts.master')
@section('title')
    Welcome
@endsection
@section('content')
    <!-- banner-area -->
    <section class="banner">
        <div class="container ">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="banner__img text-center text-xxl-end">
                        <img src="{{ asset(asset($slider->image)) }}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="banner__content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">I'M,</h4>
                        <h5 class="title wow fadeInUp" data-wow-delay=".2s">{{ $slider->title }}</h5>
                        <p class="wow fadeInUp" data-wow-delay=".4s">{{ $slider->short_description }}</p>
                        <a href="{{ route('front.about') }}" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll__down">
            <a href="#aboutSection" class="scroll__link">Scroll down</a>
        </div>
        {{-- <div class="banner__video">
            <a href="{{ $slider->link }}" class="popup-video"><i class="fas fa-play"></i></a>
       </div> --}}
    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section id="aboutSection" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="about__icons__wrap">
                        @foreach ($aboutImages as $aboutImage)
                        <li>
                            <img class="light" src="{{ asset($aboutImage->image) }}" alt="XD">
                            <img class="dark" src="{{ asset($aboutImage->image) }}" alt="XD">
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">{{ $about->title }}</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img class="mx-auto" src="{{ asset('/') }}frontend/assets/img/icons/about_icon.png" alt="">
                            </div>
                            <div class="about__exp__content">
                                <p>{{ $about->long_title }}</p>
                            </div>
                        </div>
                        <p class="desc">{{ $about->short_description }}</p>
                        <a href="about.html" class="btn">Download my resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    {{-- -------------------------------------------------------------------------------------------------------------------------
        ----------------------------------------Serveice Area will add there------------------------------------------------- --}}
    <!-- services-area-end -->

    <!-- work-process-area -->
    <section class="work__process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center">
                        <span class="sub-title">03 - Working Process</span>
                        <h2 class="title">A clear product design process is the basis of success</h2>
                    </div>
                </div>
            </div>
            <div class="row work__process__wrap">
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 01</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/wp_light_icon01.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/wp_icon01.png" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Discover</h4>
                            <p>Initial ideas or inspiration & Establishment of user needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 02</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/wp_light_icon02.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/wp_icon02.png" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Define</h4>
                            <p>Interpretation & Alignment of findings to project objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 03</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/wp_light_icon03.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/wp_icon03.png" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Develop</h4>
                            <p>Design-Led concept and Proposals hearted & assessed</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="work__process__item">
                        <span class="work__process_step">Step - 04</span>
                        <div class="work__process__icon">
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/wp_light_icon04.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/wp_icon04.png" alt="">
                        </div>
                        <div class="work__process__content">
                            <h4 class="title">Deliver</h4>
                            <p>Process outcomes finalised & Implemented</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center">
                        <span class="sub-title">04 - Portfolio</span>
                        <h2 class="title">All creative work</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                                role="tab" aria-controls="all" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
                                role="tab" aria-controls="website" aria-selected="false">website</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="portfolioTabContent">

            <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col">
                            <div class="portfolio__active">
                                @foreach ($projects as $project)
                                    <div class="portfolio__item">
                                    <div class="portfolio__thumb">
                                        <img src="{{ asset($project->image) }}" alt="">
                                    </div>
                                    <div class="portfolio__overlay__content">
                                        <span>{{ $project->category->name }}</span>
                                        <h4 class="title"><a href="portfolio-details.html">{{ $project->name }}</a></h4>
                                        <a href="{{ route('front.portfolio-details', ['id' =>$project->id]) }}" class="link">Case Study</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col">
                            <div class="portfolio__active">
                                <div class="portfolio__item">
                                    <div class="portfolio__thumb">
                                        <img src="{{ asset('/') }}frontend/assets/img/portfolio/portfolio_img07.jpg" alt="">
                                    </div>
                                    <div class="portfolio__overlay__content">
                                        <span>Web Development</span>
                                        <h4 class="title"><a href="portfolio-details.html">Nature of Business Strategy System</a></h4>
                                        <a href="portfolio-details.html" class="link">Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- portfolio-area-end -->

    <!-- partner-area -->
    <section class="partner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="partner__logo__wrap">
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light01.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_01.png" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light02.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_02.png" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light03.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_03.png" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light04.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_04.png" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light05.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_05.png" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('/') }}frontend/assets/img/icons/partner_light06.png" alt="">
                            <img class="dark" src="{{ asset('/') }}frontend/assets/img/icons/partner_06.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="partner__content">
                        <div class="section__title">
                            <span class="sub-title">05 - partners</span>
                            <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                        </div>
                        <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                        <a href="contact.html" class="btn">Start a conversation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial" style="display: none">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <ul class="testimonial__avatar__img">
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img01.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img02.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img03.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img04.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img05.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img06.png" alt=""></li>
                        <li><img src="{{ asset('/') }}frontend/assets/img/images/testi_img07.png" alt=""></li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial__wrap">
                        <div class="section__title">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Happy clients feedback</h2>
                        </div>
                        <div class="testimonial__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog" style="display: none">
        <div class="container">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="blog-details.html"><img src="{{ asset('/') }}frontend/assets/img/blog/blog_post_thumb01.jpg" alt=""></a>
                            <div class="blog__post__tags">
                                <a href="blog.html">Story</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="blog-details.html"><img src="{{ asset('/') }}frontend/assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
                            <div class="blog__post__tags">
                                <a href="blog.html">Social</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="blog-details.html"><img src="{{ asset('/') }}frontend/assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
                            <div class="blog__post__tags">
                                <a href="blog.html">Work</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__button text-center">
                <a href="blog.html" class="btn">more blog</a>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- contact-area -->
    
    <!-- contact-area-end -->
@endsection