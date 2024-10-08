@include('frontend.partials.navbar')
{{--<header class="header-area header-style-three" >--}}
{{--    <div class="header-carousel-two">--}}
{{--        @foreach($all_header_slider as $data)--}}
{{--            <div class="single-header-carosuel-two-item"--}}
{{--                 @if(file_exists('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image))--}}
{{--                 style="background-image: url({{ asset('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)}})"--}}
{{--                    @endif--}}
{{--            >--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <div class="header-inner">--}}
{{--                                <h1 class="title">--}}
{{--                                    @php--}}
{{--                                        $title = str_replace('{color}','<span class="base-color">',$data->title);--}}
{{--                                        $title = str_replace('{/color}','</span>',$title);--}}
{{--                                    @endphp--}}
{{--                                    {!! $title !!}--}}
{{--                                </h1>--}}
{{--                                <p>{{$data->description}}</p>--}}
{{--                                <div class="btn-wrapper">--}}
{{--                                    @if(!empty($data->btn_01_status))--}}
{{--                                        <a href="{{$data->btn_01_url}}" class="boxed-btn">{{$data->btn_01_text}}</a>--}}
{{--                                    @endif--}}
{{--                                    @if(!empty($data->btn_02_status))--}}
{{--                                        <a href="{{$data->btn_02_url}}" class="boxed-btn blank">{{$data->btn_02_text}}</a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--</header>--}}
<header class="header-area header-style-three">

      <div id="home" class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" style="height: 100vh;">
          <div class="owl-stage-outer">
              <div class="owl-stage">

                  <!-- Carousel Slide 1 -->
                  <div class="owl-item position-relative pt-5" style="background-image: url({{asset('assets/frontend/img/slide-one-page-1-1.jpg')}}); background-size: cover; background-position: center; background-color: #35383d;">
                      <div class="container position-relative z-index-3 h-100">
                          <div class="row justify-content-center align-items-center h-100">
                              <div class="col-lg-6">
                                  <div class="d-flex flex-column align-items-center">
                                      <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{asset('assets/frontend/img/slide-title-border.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" />
													</span>
                                          WE WORK HARD AND PORTO HAS
                                          <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" />
													</span>
                                      </h3>
                                      <h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                          THE <span class="position-relative">BEST<span class="position-absolute left-50pct transform3dx-n50 bottom-0"><img src="img/slides/slide-blue-line-big.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" /></span></span> DESIGN
                                      </h2>
                                      <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of larest world's MarketPlace</p>
                                      <a href="#" class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET STARTED NOW!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Carousel Slide 2 -->
                  <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" style="background-image: url(img/slides/slide-bg-2.jpg); background-size: cover; background-position: center;">
                      <div class="container position-relative z-index-3 h-100">
                          <div class="row justify-content-center align-items-center h-100">
                              <div class="col-lg-6">
                                  <div class="d-flex flex-column align-items-center">
                                      <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                          WE WORK HARD AND PORTO HAS
                                          <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                      </h3>
                                      <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
                                      <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of larest world's MarketPlace</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Carousel Slide 3 -->
                  <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" style="background-image: url(img/slides/slide-bg-6.jpg); background-size: cover; background-position: center;">
                      <div class="container position-relative z-index-3 h-100">
                          <div class="row justify-content-center align-items-center h-100">
                              <div class="col-lg-6">
                                  <div class="d-flex flex-column align-items-center">
                                      <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                          WE CREATE DESIGNS, WE ARE
                                          <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                      </h3>
                                      <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">PORTO</h2>
                                      <p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Carousel Slide 4 -->
                  <div class="owl-item position-relative video overlay overlay-show overlay-op-8 pt-5" data-video-path="video/memory-of-a-woman" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}">
                      <div class="container position-relative z-index-3 h-100">
                          <div class="row justify-content-center align-items-center h-100">
                              <div class="col-lg-6">
                                  <div class="d-flex flex-column align-items-center">
                                      <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                          WE WORK HARD AND PORTO HAS
                                          <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
                                      </h3>
                                      <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
                                      <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace<strong class="bg-light">Oi oi oi</strong></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <div class="owl-nav">
              <button type="button" role="presentation" class="owl-prev"></button>
              <button type="button" role="presentation" class="owl-next"></button>
          </div>
          <div class="owl-dots mb-5">
              <button role="button" class="owl-dot active"><span></span></button>
              <button role="button" class="owl-dot"><span></span></button>
              <button role="button" class="owl-dot"><span></span></button>
              <button role="button" class="owl-dot"><span></span></button>
          </div>
      </div>


</header>
@if(!empty(get_static_option('home_page_key_feature_section_status')))
    <div class="header-bottom-area ">
        <div class="container">
            <div class="row">
                @foreach($all_key_features as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-header-bottom-item">
                            <div class="icon">
                                <i class="{{$data->icon}}"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">{{$data->title}}</h4>
                                <p>{{$data->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(!empty(get_static_option('home_page_build_dream_section_status')))
    <section class="build-your-dream-area gray-bg style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area">
                        <h3 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_title')}}</h3>
                        <p>{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_description')}}</p>
                        @if(!empty(get_static_option('build_dream_'.get_user_lang().'_section_button_status')))
                            <div class="btn-wrapper">
                                <a href="{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_btn_url')}}" class="btn-boxed">{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_btn_title')}}</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-play-area-two">
                        <div class="img-wrapper">
                            @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image')))
                                <img src="{{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image'))}}" alt="">
                            @endif
                            <div class="hover">
                                <a href="{{get_static_option('home_page_01_'.get_user_lang().'_build_dream_btn_url')}}" class="video-play-btn mfp-iframe"> <i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
@if(!empty(get_static_option('home_page_service_section_status')))
<section class="service-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_service_area_title')}}</h2>
                    <div class="separator">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($all_service as $data)
            <div class="col-lg-4 col-md-6">
                <div class="single-service-item-three">
                    <div class="thumb">
                        @if(file_exists('assets/uploads/services/service-grid-'.$data->id.'.'.$data->image))
                            <img src="{{asset('assets/uploads/services/service-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                        @endif
                        <div class="icon">
                            <i class="{{$data->icon}}"></i>
                        </div>
                    </div>
                    <div class="content">
                        <a href="{{route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"><h4 class="title">{{$data->title}}</h4></a>
                        <div class="post-description">
                            <p>{{$data->excerpt}}</p>
                        </div>
                        <a href="{{route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])}}" class="readmore">{{__('Read More')}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_counterup_section_status')))
    <section class="counterup-area counterup-bg-3"
             @if(file_exists('assets/uploads/'.get_static_option('home_02_counterup_bg_image')))
             style="background-image: url({{asset('assets/uploads/'.get_static_option('home_02_counterup_bg_image'))}})"
            @endif
    >
        <div class="container">
            <div class="row">
                @foreach($all_counterup as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counterup-item black-theme">
                            <div class="icon">
                                <i class="{{$data->icon}}"></i>
                            </div>
                            <div class="content">
                                <div class="count-num">{{$data->number}}</div>
                                <h5 class="name">{{$data->title}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

@if(!empty(get_static_option('home_page_recent_work_section_status')))
    <section class="recent-works-area gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_recent_work_title')}}</h2>
                        <div class="separator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent-work-nav-area">
                        <ul>
                            <li class="active" data-filter="*">{{__('All work')}}</li>
                            @foreach($all_work_category as $data)
                                <li data-filter=".{{Str::slug($data->name)}}">{{$data->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent-work-masonry" >
                        @foreach($all_work as $data)
                            <div class="single-recent-wrok-item col-lg-4  col-md-6 {{get_work_category_by_id($data->id,'slug')}}">
                                <div class="thumb">
                                    @php $img_url = '';@endphp
                                    @if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image))
                                        <img src="{{asset('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                        @php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);@endphp
                                    @endif
                                    <div class="hover">
                                        <ul>
                                            <li><a href="{{$img_url}}" class="image-popup"> <i class="flaticon-image"></i> </a></li>
                                            <li><a href="{{route('frontend.work.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"> <i class="flaticon-link-symbol"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@if(!empty(get_static_option('home_page_price_plan_section_status')))
    <section class="pricing-plan-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_price_plan_section_title')}}</h2>
                        <div class="separator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($all_price_plan as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-price-plan-01">
                            <div class="price-header">
                                <div class="icon">
                                    <i class="{{$data->icon}}"></i>
                                </div>
                                <h4 class="name">{{$data->title}}</h4>
                                <div class="price"> {{$data->price}}</div>
                            </div>
                            <div class="price-body">
                                <ul>
                                    @php
                                        $features = explode(';',$data->features);
                                    @endphp
                                    @foreach($features as $feat)
                                        <li>{{$feat}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="price-footer">
                                @php $button_url = !empty($data->url_status) ? route('frontend.plan.order',$data->id) : $data->btn_url ;  @endphp
                                <a href="{{$button_url}}" class="btn-boxed blank">{{$data->btn_text}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(!empty(get_static_option('home_page_team_member_section_status')))
<div class="team-member-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_team_member_section_title')}}</h2>
                    <div class="separator">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($all_team_members as $data)
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="thumb">
                            @if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image))
                                <img src="{{asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                            @endif
                        </div>
                        <div class="content">
                            <h4 class="name">{{$data->name}}</h4>
                            <span class="post">{{$data->designation}}</span>
                            <p>{{$data->description}}</p>
                            <ul class="social-icon">
                                @if(!empty($data->icon_one) && !empty($data->icon_one_url))
                                    <li><a href="{{$data->icon_one_url}}"><i class="{{$data->icon_one}}"></i></a></li>
                                @endif
                                @if(!empty($data->icon_two) && !empty($data->icon_two_url))
                                    <li><a href="{{$data->icon_two_url}}"><i class="{{$data->icon_two}}"></i></a></li>
                                @endif
                                @if(!empty($data->icon_three) && !empty($data->icon_three_url))
                                    <li><a href="{{$data->icon_three_url}}"><i class="{{$data->icon_three}}"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(!empty(get_static_option('home_page_testimonial_section_status')))
    <section class="testimonial-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_testimonial_title')}}</h2>
                        <div class="separator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="testimonial-carousel">
                        @foreach($all_testimonial as $data)
                            <div class="single-tesitmoial-item">
                                <div class="thumb">
                                    @if(file_exists('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image))
                                        <img src="{{asset('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-content-area">
                        @foreach($all_testimonial as $key => $data)
                            <div class="single-testimonial-quote @if($key == 0) active @endif" data-owl-item="{{$key}}">
                                <p>{{$data->description}}</p>
                                <h4 class="title">{{$data->name}}</h4>
                                <span class="post">{{$data->designation}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
@if(!empty(get_static_option('home_page_latest_news_section_status')))
    <section class="latest-news-area gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_latest_news_title')}}</h2>
                        <div class="separator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($all_blog as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news-grid-item">
                            <div class="thumb">
                                @if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                @endif
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li>{{__('By')}} <a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->user->username}}</a></li>
                                    <li><a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->created_at->diffForHumans()}}</a></li>
                                </ul>
                                <a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"><h4 class="title">{{$data->title}}</h4></a>
                                <div class="post-description">
                                    <p>{{$data->excerpt}}</p>
                                </div>
                                <a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}" class="readmore">{{__('Read more')}} <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@include('frontend.partials.newsletter')