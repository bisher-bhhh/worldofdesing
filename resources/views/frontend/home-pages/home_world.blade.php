@include('frontend.navbar')
<div role="main" class="main">
    <div id="home"
        class="owl-carousel  owl-carousel-light owl-carousel-dark-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
        data-plugin-options="{'autoplayTimeout': 11000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                @foreach ($all_header_slider as $data)
                    <div class="owl-item position-relative pt-5 overlay overlay-show overlay-op-8"
                        style="background-image: url({{ asset('assets/uploads/header-sliders/header-slider-image-' . $data->id . '.' . $data->image) }}); background-size: cover; background-position: center; background-color: #35383d;">

                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation"
                                            data-appear-animation="fadeInDownShorterPlus"
                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                            <span
                                                class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{ asset('assets/frontend/img/slides/slide-title-border.png') }}"
                                                    class="w-auto appear-animation"
                                                    data-appear-animation="fadeInRightShorter"
                                                    data-appear-animation-delay="250"
                                                    data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                    alt="" />
                                            </span>
                                            WE WORK HARD AND PORTO HAS
                                            <span
                                                class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{ asset('assets/frontend/img/slides/slide-title-border.png') }}"
                                                    class="w-auto appear-animation"
                                                    data-appear-animation="fadeInLeftShorter"
                                                    data-appear-animation-delay="250"
                                                    data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                    alt="" />
                                            </span>
                                        </h3>
                                        <h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation"
                                            data-appear-animation="blurIn" data-appear-animation-delay="500"
                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                            @php
                                                $title = str_replace(
                                                    '{color}',
                                                    '<span class="base-color">',
                                                    $data->title,
                                                );
                                                $title = str_replace('{/color}', '</span>', $title);
                                            @endphp
                                            {!! $title !!}

                                            <span class="position-relative">

                                                <span class="position-absolute left-50pct transform3dx-n50 bottom-0">
                                                    {{--                                                    <img --}}
                                                    {{--                                                            src="{{asset('assets/frontend/img/slides/slide-blue-line-big.png')}}" --}}
                                                    {{--                                                            class="w-auto appear-animation" --}}
                                                    {{--                                                            data-appear-animation="fadeInLeftShorterPlus" --}}
                                                    {{--                                                            data-appear-animation-delay="1000" --}}
                                                    {{--                                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" --}}
                                                    {{--                                                            alt=""/> --}}
                                                </span>

                                            </span>

                                        </h2>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                            data-plugin-animated-letters
                                            data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                            {{--                                                Trusted by over <strong class="text-color-light">40,000</strong> --}}
                                            {{--                                                satisfied --}}
                                            {{--                                                users, Porto is a huge success in the one of larest world's MarketPlace --}}

                                            {{ $data->description }}
                                        </p>
                                        <a href="#"
                                            class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"
                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET
                                            STARTED NOW!</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach
                <!-- Carousel Slide 2 -->
                {{--                                        <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" --}}
                {{--                                             style="background-image: url({{asset('assets/frontend/img/slides/slide-bg-2.jpg')}}); background-size: cover; background-position: center;"> --}}
                {{--                                            <div class="container position-relative z-index-3 h-100"> --}}
                {{--                                                <div class="row justify-content-center align-items-center h-100"> --}}
                {{--                                                    <div class="col-lg-6"> --}}
                {{--                                                        <div class="d-flex flex-column align-items-center"> --}}
                {{--                                                            <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" --}}
                {{--                                                                data-appear-animation="fadeInDownShorterPlus" --}}
                {{--                                                                data-plugin-options="{'minWindowWidth': 0}"> --}}
                {{--                    													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--                    														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                                                 class="w-auto appear-animation" --}}
                {{--                                                                                 data-appear-animation="fadeInRightShorter" --}}
                {{--                                                                                 data-appear-animation-delay="250" --}}
                {{--                                                                                 data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--                    													</span> --}}
                {{--                                                                WE WORK HARD AND PORTO HAS --}}
                {{--                                                                <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--                    														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                                                 class="w-auto appear-animation" --}}
                {{--                                                                                 data-appear-animation="fadeInLeftShorter" --}}
                {{--                                                                                 data-appear-animation-delay="250" --}}
                {{--                                                                                 data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--                    													</span> --}}
                {{--                                                            </h3> --}}
                {{--                                                            <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" --}}
                {{--                                                                data-appear-animation="blurIn" data-appear-animation-delay="500" --}}
                {{--                                                                data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2> --}}
                {{--                                                            <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" --}}
                {{--                                                               data-plugin-animated-letters --}}
                {{--                                                               data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}"> --}}
                {{--                                                                Trusted by over <strong class="text-color-light">40,000</strong> satisfied --}}
                {{--                                                                users, Porto is a huge success in the one of larest world's MarketPlace</p> --}}
                {{--                                                        </div> --}}
                {{--                                                    </div> --}}
                {{--                                                </div> --}}
                {{--                                            </div> --}}
                {{--                                        </div> --}}

                {{--                    <!-- Carousel Slide 3 --> --}}
                {{--                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" --}}
                {{--                         style="background-image: url({{asset('assets/frontend/img/slides/slide-bg-6.jpg')}}); background-size: cover; background-position: center;"> --}}
                {{--                        <div class="container position-relative z-index-3 h-100"> --}}
                {{--                            <div class="row justify-content-center align-items-center h-100"> --}}
                {{--                                <div class="col-lg-6"> --}}
                {{--                                    <div class="d-flex flex-column align-items-center"> --}}
                {{--                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" --}}
                {{--                                            data-appear-animation="fadeInDownShorterPlus" --}}
                {{--                                            data-plugin-options="{'minWindowWidth': 0}"> --}}
                {{--													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                             class="w-auto appear-animation" --}}
                {{--                                                             data-appear-animation="fadeInRightShorter" --}}
                {{--                                                             data-appear-animation-delay="250" --}}
                {{--                                                             data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--													</span> --}}
                {{--                                            WE CREATE DESIGNS, WE ARE --}}
                {{--                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                             class="w-auto appear-animation" --}}
                {{--                                                             data-appear-animation="fadeInLeftShorter" --}}
                {{--                                                             data-appear-animation-delay="250" --}}
                {{--                                                             data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--													</span> --}}
                {{--                                        </h3> --}}
                {{--                                        <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" --}}
                {{--                                            data-plugin-animated-letters --}}
                {{--                                            data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}"> --}}
                {{--                                            PORTO</h2> --}}
                {{--                                        <p class="text-4 text-color-light font-weight-light text-center mb-0" --}}
                {{--                                           data-plugin-animated-letters --}}
                {{--                                           data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best --}}
                {{--                                            choice for your new website</p> --}}
                {{--                                    </div> --}}
                {{--                                </div> --}}
                {{--                            </div> --}}
                {{--                        </div> --}}
                {{--                    </div> --}}

                {{--                    <!-- Carousel Slide 4 --> --}}
                {{--                    <div class="owl-item position-relative video overlay overlay-show overlay-op-8 pt-5" --}}
                {{--                         data-video-path="video/memory-of-a-woman" data-plugin-video-background --}}
                {{--                         data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}"> --}}
                {{--                        <div class="container position-relative z-index-3 h-100"> --}}
                {{--                            <div class="row justify-content-center align-items-center h-100"> --}}
                {{--                                <div class="col-lg-6"> --}}
                {{--                                    <div class="d-flex flex-column align-items-center"> --}}
                {{--                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" --}}
                {{--                                            data-appear-animation="fadeInDownShorterPlus" --}}
                {{--                                            data-plugin-options="{'minWindowWidth': 0}"> --}}
                {{--													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                             class="w-auto appear-animation" --}}
                {{--                                                             data-appear-animation="fadeInRightShorter" --}}
                {{--                                                             data-appear-animation-delay="250" --}}
                {{--                                                             data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--													</span> --}}
                {{--                                            WE WORK HARD AND PORTO HAS --}}
                {{--                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3"> --}}
                {{--														<img src="{{asset('assets/frontend/img/slides/slide-title-border.png')}}" --}}
                {{--                                                             class="w-auto appear-animation" --}}
                {{--                                                             data-appear-animation="fadeInLeftShorter" --}}
                {{--                                                             data-appear-animation-delay="250" --}}
                {{--                                                             data-plugin-options="{'minWindowWidth': 0}" alt=""/> --}}
                {{--													</span> --}}
                {{--                                        </h3> --}}
                {{--                                        <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" --}}
                {{--                                            data-appear-animation="blurIn" data-appear-animation-delay="500" --}}
                {{--                                            data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2> --}}
                {{--                                        <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" --}}
                {{--                                           data-plugin-animated-letters --}}
                {{--                                           data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}"> --}}
                {{--                                            Trusted by over <strong class="text-color-light">40,000</strong> satisfied --}}
                {{--                                            users, Porto is a huge success in the one of largest world's --}}
                {{--                                            MarketPlace<strong class="bg-light">Oi oi oi</strong></p> --}}
                {{--                                    </div> --}}
                {{--                                </div> --}}
                {{--                            </div> --}}
                {{--                        </div> --}}
                {{--                    </div> --}}

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
        <div class="owl-dots mb-5">

            @foreach ($all_header_slider as $index => $data)
                @if ($index == 0)
                    <button role="button" class="owl-dot active"><span></span></button>
                @else
                    <button role="button" class="owl-dot"><span></span></button>
                @endif
            @endforeach
        </div>
    </div>


    <section class="section section-height-4 bg-quaternary border-0 m-0 appear-animation" data-appear-animation="fadeIn"
        id="ourservices">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col text-center">
                    <div class="overflow-hidden">
                        <span
                            class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation"
                            data-appear-animation="maskUp">WHAT WE DO</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="text-color-light font-weight-bold mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="250">Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
                <div class="row mb-2">
                    @foreach ($all_service as $index=>$data)
                        <div class="col-md-6 col-xl-3">
                            <a href="{{ route('frontend.servicedetails', ['id' => 1]) }}"
                                class="text-decoration-none simple-ajax-popup">
                                <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div class="box-content">
                                        @if($data->id==25)
                                            <img height="87px" src="{{asset('assets/frontend/img/building.png')}}">
                                        @endif
                                            @if($data->id==26)
                                                <img height="87px" src="{{asset('assets/frontend/img/sketch.png')}}">
                                            @endif
                                            @if($data->id==27)
                                                <img height="87px" src="{{asset('assets/frontend/img/save-forest.png')}}">
                                            @endif
                                            @if($data->id==28)
                                                <img height="87px" src="{{asset('assets/frontend/img/staircase.png')}}">
                                            @endif

                                        <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">{{$data->title}}</h3>
                                        <p class="font-weight-light text-color-light opacity-5 mb-0"> {!! $data->description !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#contactus"
                        class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 px-5 py-3 border-width-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>
    {{--    <section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation" --}}
    {{--             data-appear-animation="fadeIn"> --}}
    {{--        <div class="container my-3"> --}}
    {{--            <div class="row mb-5"> --}}
    {{--                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" --}}
    {{--                     data-appear-animation-delay="200"> --}}
    {{--                    <h2 class="font-weight-bold text-color-light mb-2">Services</h2> --}}
    {{--                    <p class="text-color-light opacity-7">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING --}}
    {{--                        ELIT</p> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="row mb-lg-4"> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" --}}
    {{--                     data-appear-animation-delay="300"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-support text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">CUSTOMER SUPPORT</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum --}}
    {{--                                pellentesque imperdiet.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-layers text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">SLIDERS</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" --}}
    {{--                     data-appear-animation-delay="300"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-menu text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">BUTTONS</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="row"> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" --}}
    {{--                     data-appear-animation-delay="300"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-doc text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">HTML5 / CSS3 / JS</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-user text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">ICONS</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum --}}
    {{--                                pellentesque imperdiet.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" --}}
    {{--                     data-appear-animation-delay="300"> --}}
    {{--                    <div class="feature-box feature-box-style-2"> --}}
    {{--                        <div class="feature-box-icon"> --}}
    {{--                            <i class="icons icon-screen-desktop text-color-light"></i> --}}
    {{--                        </div> --}}
    {{--                        <div class="feature-box-info"> --}}
    {{--                            <h4 class="font-weight-bold text-color-light text-4 mb-2">LIGHTBOX</h4> --}}
    {{--                            <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing --}}
    {{--                                elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}

    <div id="projects" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-lg-9 text-center">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-2">Projectssseeeqqqqqqqbisherwwwedfwe</h2>
                    <p class="mb-4">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
                </div>
                <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                    elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris
                    lacus sed leo. vamus suscipit molestie vestibulum.</p>
            </div>
        </div>
        <div class="row pb-5 mb-5">
            <div class="col pb-5">
                <div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>

                    <div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

                </div>

                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center"
                    data-sort-id="portfolio" data-option-key="filter"
                    data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a
                            class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                    @foreach ($all_work_category as $data)
                        <li class="nav-item" data-option-value=".{{ Str::slug($data->name) }}"><a
                                class="nav-link text-1 text-uppercase" href="#">{{ $data->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div class="owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                        <div class="row  portfolio-list sort-destination" data-sort-id="portfolio">
                            @foreach ($all_work as $index => $data)
                                <div
                                    class="col-lg-4 p-1 isotope-item {{ get_work_category_by_id($data->id, 'slug') }}">
                                    <div class="portfolio-item">
                                        <a href={{ route('frontend.portfolioproject', ['id' =>$data->id ]) }}
                                            data-ajax-on-modal>
                                            <span class="thumb-info thumb-info-lighten">
                                                <span class="thumb-info-wrapper">
                                                    @php $img_url = '';@endphp
                                                    @if (file_exists('assets/uploads/works/work-grid-' . $data->id . '.' . $data->image))
                                                        @php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);@endphp
                                                    @endif
                                                    <img src="{{ asset('assets/uploads/works/work-large-' . $data->id . '.' . $data->image) }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner">{{ $data->title }}</span>
                                                        <span
                                                            class="thumb-info-type">{{ get_work_category_by_id($data->id, 'slug') }}</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                                class="fas fa-plus"></i></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{--                        <div class="col-lg-3 p-1 isotope-item apartment"> --}}
                            {{--                            <div class="portfolio-item"> --}}
                            {{--                                <a href="ajax/portfolio-ajax-project.html" data-ajax-on-modal> --}}
                            {{--											<span class="thumb-info thumb-info-lighten"> --}}
                            {{--												<span class="thumb-info-wrapper"> --}}
                            {{--													<img src="{{asset('assets/frontend/img/projects/project.jpg')}}" --}}
                            {{--                                                         class="img-fluid border-radius-0" alt=""> --}}
                            {{--													<span class="thumb-info-title"> --}}
                            {{--														<span class="thumb-info-inner">Presentation</span> --}}
                            {{--														<span class="thumb-info-type">Brand</span> --}}
                            {{--													</span> --}}
                            {{--													<span class="thumb-info-action"> --}}
                            {{--														<span class="thumb-info-action-icon bg-dark opacity-8"><i --}}
                            {{--                                                                    class="fas fa-plus"></i></span> --}}
                            {{--													</span> --}}
                            {{--												</span> --}}
                            {{--											</span> --}}
                            {{--                                </a> --}}
                            {{--                            </div> --}}
                            {{--                        </div> --}}


                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col text-center">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#contactus"
                        class="btn btn-dark btn-outline custom-btn-color-2 font-weight-extra-bold text-color-dark text-3 px-5 py-3 text-hover-light border-width-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">More</a>
                </div>
            </div>

        </div>
    </div>

    <section id="clients"
        class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0"
        style="background-image: url({{ asset('assets/frontend/img/word of designs 2 logo.png') }}); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-color-light mb-2">We’re excited about Porto Template</h2>
                    <p class="text-color-light opacity-7">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET
                        OUR CUSTOMERS.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0"
                        data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                        <div>
                            <div
                                class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                <blockquote>
                                    <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.
                                        Suspendisse potenti.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div
                                class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                <blockquote>
                                    <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.
                                        Suspendisse potenti.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div id="team" class="container pb-4">
        <div class="row pt-5 mt-5 mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="font-weight-bold mb-1">Team</h2>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
            </div>
        </div>
        <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="{{ asset('assets/frontend/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">John Doe</h3>
                        <span class="text-2 mb-0">CEO</span>
                        <span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cras ac ligula mi, non suscipitaccumsan</span>
                        <span class="thumb-info-social-icons">
                            <a target="_blank" href="http://www.facebook.com"><i
                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                            <a href="http://www.linkedin.com"><i
                                    class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="{{ asset('assets/frontend/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Jessica Doe
                        </h3>
                        <span class="text-2 mb-0">DESIGNER</span>
                        <span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cras ac ligula mi, non suscipitaccumsan</span>
                        <span class="thumb-info-social-icons">
                            <a target="_blank" href="http://www.facebook.com"><i
                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                            <a href="http://www.linkedin.com"><i
                                    class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="{{ asset('assets/frontend/img/team/team-3.jpg') }}" class="img-fluid"
                                alt="">
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Ricki Doe
                        </h3>
                        <span class="text-2 mb-0">DEVELOPER</span>
                        <span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cras ac ligula mi, non suscipitaccumsan</span>
                        <span class="thumb-info-social-icons">
                            <a target="_blank" href="http://www.facebook.com"><i
                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                            <a href="http://www.linkedin.com"><i
                                    class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-sm-6 col-lg-3">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="{{ asset('assets/frontend/img/team/team-4.jpg') }}" class="img-fluid"
                                alt="">
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Melinda Doe
                        </h3>
                        <span class="text-2 mb-0">SEO ANALYST</span>
                        <span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cras ac ligula mi, non suscipitaccumsan</span>
                        <span class="thumb-info-social-icons">
                            <a target="_blank" href="http://www.facebook.com"><i
                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                            <a href="http://www.linkedin.com"><i
                                    class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                        </span>
                    </span>
                </span>
            </div>
        </div>
    </div>

    <section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <!-- Google Maps - Settings on footer -->
{{--                    <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div>--}}
                    <iframe
                            width="100%"
                            height="100%"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?q={{get_static_option('contact_page_map_section_latitude')}},{{get_static_option('contact_page_map_section_longitude')}}&hl=en-US&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
                <div class="col-md-6 p-5 my-5">

                    <div class="px-4">
                        <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
                        <p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p>
                        <form class="contact-form form-style-2 pe-xl-5" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row">
                                <div class="form-group col-xl-4">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control" name="name" placeholder="Name"
                                        required>
                                </div>
                                <div class="form-group col-xl-8">
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" value=""
                                        data-msg-required="Please enter the subject." maxlength="100"
                                        class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control"
                                        name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="submit" value="SUBMIT"
                                        class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2"
                                        data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary border-0 m-0">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-start py-4">
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
                        <div class="feature-box-icon">
                            <i class="icon-location-pin icons text-color-light"></i>
                        </div>
                        <div class="feature-box-info ps-1">
                            <h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
                            <p class="text-color-light font-weight-semibold mb-0">MON - FRI: 10:00am - 6:00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="200">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
                        <div class="feature-box-icon">
                            <i class="icon-call-out icons text-color-light"></i>
                        </div>
                        <div class="feature-box-info ps-1">
                            <h5 class="font-weight-light text-color-light opacity-7 mb-0">CALL US NOW</h5>
                            <a href="tel:+8001234567"
                                class="text-color-light font-weight-semibold text-decoration-none">800-123-4567</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="400">
                    <div class="feature-box feature-box-style-2 d-block d-lg-flex">
                        <div class="feature-box-icon">
                            <i class="icon-share icons text-color-light"></i>
                        </div>
                        <div class="feature-box-info ps-1">
                            <h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
                            <p class="mb-0">
                                <span class="social-icons-facebook"><a href="http://www.facebook.com/"
                                        target="_blank" class="text-color-light font-weight-semibold"
                                        title="Facebook"><i class="me-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
                                <span class="social-icons-twitter ps-3"><a href="http://www.twitter.com/"
                                        target="_blank" class="text-color-light font-weight-semibold"
                                        title="Twitter"><i class="me-1 fab fa-twitter"></i> TWITTER</a></span>
                                <span class="social-icons-instagram ps-3"><a href="http://www.linkedin.com/"
                                        target="_blank" class="text-color-light font-weight-semibold"
                                        title="Linkedin"><i class="me-1 fab fa-instagram"></i> INSTAGRAM</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
