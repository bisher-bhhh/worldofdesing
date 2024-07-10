<?php echo $__env->make('frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div role="main" class="main">
    <div id="home"
         class="owl-carousel  owl-carousel-light owl-carousel-dark-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
         data-plugin-options="{'autoplayTimeout': 7000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="owl-item position-relative pt-5 overlay overlay-show overlay-op-8"
                         style="background-image: url(<?php echo e(asset('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)); ?>); background-size: cover; background-position: center; background-color: #35383d;">

                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation"
                                            data-appear-animation="fadeInDownShorterPlus"
                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo e(asset('assets/frontend/img/slides/slide-title-border.png')); ?>"
                                                             class="w-auto appear-animation"
                                                             data-appear-animation="fadeInRightShorter"
                                                             data-appear-animation-delay="250"
                                                             data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                             alt=""/>
													</span>
                                            WE WORK HARD AND PORTO HAS
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="<?php echo e(asset('assets/frontend/img/slides/slide-title-border.png')); ?>"
                                                             class="w-auto appear-animation"
                                                             data-appear-animation="fadeInLeftShorter"
                                                             data-appear-animation-delay="250"
                                                             data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                             alt=""/>
													</span>
                                        </h3>
                                        <h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation"
                                            data-appear-animation="blurIn" data-appear-animation-delay="500"
                                            data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                            <?php
                                                $title = str_replace('{color}','<span class="base-color">',$data->title);
                                                $title = str_replace('{/color}','</span>',$title);
                                            ?>
                                            <?php echo $title; ?>


                                            <span class="position-relative">

                                                    <span
                                                            class="position-absolute left-50pct transform3dx-n50 bottom-0">







                                                    </span>

                                                </span>

                                        </h2>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                           data-plugin-animated-letters
                                           data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                            
                                            
                                            

                                            <?php echo e($data->description); ?>

                                        </p>
                                        <a href="#"
                                           class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation"
                                           data-appear-animation="fadeInUpShorter"
                                           data-appear-animation-delay="1600"
                                           data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET
                                            STARTED NOW!</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Carousel Slide 2 -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

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


    <section  class="section section-height-4 bg-quaternary border-0 m-0 appear-animation" data-appear-animation="fadeIn"
             id="ourservices">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col text-center">
                    <div class="overflow-hidden">
                        <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation"
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
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php echo e(route('frontend.servicedetails', ['id' => 1])); ?>" class="text-decoration-none simple-ajax-popup">
                            <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="box-content">
                                    <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1"
                                         viewBox="0 0 24 24" width="88px" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>
                                            <path d="M18,11h-5v5h5V11z M15,15h-1v-3h1V15z M17,15h-1v-3h1V15z"/>
                                            <path d="M23,22h-1v-9.2l0.3,0.3c0.4,0.4,1,0.4,1.4,0l0,0c0.4-0.4,0.4-1,0-1.4L12,0L7,5V3c0.6,0,1-0.4,1-1V1c0-0.6-0.4-1-1-1H3   C2.4,0,2,0.4,2,1v1c0,0.6,0.4,1,1,1v6l-2.7,2.7c-0.4,0.4-0.4,1,0,1.4l0,0c0.4,0.4,1,0.4,1.4,0L2,12.8V22H1c-0.6,0-1,0.4-1,1v1h24   v-1C24,22.4,23.6,22,23,22z M12,2.8l8,8V22h-9v-8H6v8H4V10.8L12,2.8z M10,19v3H7v-7h3v3H9v1H10z M4,8V3h2v3L4,8z M3,1h4v1H3V1z"/>
                                        </g></svg>
                                    <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Home
                                        Projects</h3>
                                    <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing eli blandit massa im. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php echo e(route('frontend.servicedetails', ['id' => 2])); ?>"
                           class="text-decoration-none simple-ajax-popup">
                            <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                <div class="box-content">
                                    <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1"
                                         viewBox="0 0 24 24" width="88px" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>
                                            <path d="M23,10h-5V1c0-0.6-0.4-1-1-1H7C6.4,0,6,0.4,6,1v9H1c-0.6,0-1,0.4-1,1v13h24V11C24,10.4,23.6,10,23,10z M2,22V12h4v10H2z    M8,22V11V2h8v9v11H8z M18,22V12h4v10H18z"/>
                                            <rect height="2" width="1" x="4" y="13"/>
                                            <rect height="2" width="1" x="4" y="16"/>
                                            <rect height="2" width="1" x="19" y="13"/>
                                            <rect height="2" width="1" x="19" y="16"/>
                                            <rect height="2" width="1" x="10" y="4"/>
                                            <rect height="2" width="1" x="10" y="7"/>
                                            <rect height="2" width="1" x="10" y="10"/>
                                            <rect height="2" width="1" x="10" y="13"/>
                                            <rect height="2" width="1" x="10" y="16"/>
                                            <rect height="2" width="1" x="13" y="4"/>
                                            <rect height="2" width="1" x="13" y="7"/>
                                            <rect height="2" width="1" x="13" y="10"/>
                                            <rect height="2" width="1" x="13" y="13"/>
                                            <rect height="2" width="1" x="13" y="16"/>
                                        </g></svg>
                                    <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">
                                        Building Projects</h3>
                                    <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing eli blandit massa im. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php echo e(route('frontend.servicedetails',  ['id' => 3])); ?>"
                           class="text-decoration-none simple-ajax-popup">
                            <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                <div class="box-content">
                                    <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1"
                                         viewBox="0 0 24 24" width="88px" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>
                                            <path d="M21,7.2c-0.4,0-0.7,0.1-1,0.2V5c0-2.8-2.2-5-5-5H9C6.2,0,4,2.2,4,5v2.4C3.7,7.3,3.4,7.2,3,7.2c-1.7,0-3,1.3-3,3   c0,1.3,0.8,2.4,2,2.8c0,0,0,7,0,8s1,1,1,1h3v2h4v-2h4v2h4v-2h3c0,0,1,0,1-1s0-8,0-8c1.2-0.4,2-1.5,2-2.8C24,8.5,22.7,7.2,21,7.2z    M6,5c0-1.7,1.3-3,3-3h6c1.7,0,3,1.3,3,3v5v5H6v-5V5z M4,20c0,0,0-6.8,0-7.8s-1-1-1-1c-0.6,0-1-0.4-1-1s0.4-1.1,1-1.1S4,10,4,10h1   v10H4z M9,23H7v-1h2V23z M17,23h-2v-1h2V23z M6,20v-4h12v4H6z M21,11.2c0,0-1,0-1,1s0,7.8,0,7.8h-1V10h1c0,0,0.4-0.9,1-0.9   s1,0.5,1,1S21.6,11.2,21,11.2z"/>
                                        </g></svg>
                                    <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">
                                        Interior Projects</h3>
                                    <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing eli blandit massa im. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php echo e(route('frontend.servicedetails', ['id' => 4])); ?>"
                           class="text-decoration-none simple-ajax-popup">
                            <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <div class="box-content">
                                    <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1"
                                         viewBox="0 0 24 24" width="88px" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path
                                                d="M23,11H3V3c0-1.1,0.9-2,2-2s2,0.9,2,2v1.1C6.6,4.2,6.2,4.6,6.1,5h2.8C8.8,4.6,8.4,4.2,8,4.1V3c0-1.7-1.3-3-3-3S2,1.3,2,3v8  H1c-0.6,0-1,0.4-1,1v4c0,2.2,1.2,4.2,3,5.2V22c0,1.1,0.9,2,2,2s2-0.9,2-2h10c0,1.1,0.9,2,2,2s2-0.9,2-2v-0.8c1.8-1,3-3,3-5.2v-4  C24,11.4,23.6,11,23,11z M5,23c-0.6,0-1-0.4-1-1v-0.3C4.6,21.9,5.3,22,6,22C6,22.6,5.6,23,5,23z M20,22c0,0.6-0.4,1-1,1s-1-0.4-1-1  c0.7,0,1.4-0.1,2-0.3V22z M22,16c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4v-1h20V16z M22,14H2v-1h20V14z"/></svg>
                                    <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">
                                        Custom Projects</h3>
                                    <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing eli blandit massa im. </p>
                                </div>
                            </div>
                        </a>
                    </div>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <div id="projects" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-lg-9 text-center">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-2">Projects</h2>
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

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                <?php $__currentLoopData = $all_work_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" data-option-value=".<?php echo e(Str::slug($data->name)); ?>"><a class="nav-link text-1 text-uppercase" href="#"><?php echo e($data->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
                </div>
            <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200">
                <div class="owl-theme mb-0"
                     data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                    <div class="row  portfolio-list sort-destination" data-sort-id="portfolio">
                        <?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 p-1 isotope-item <?php echo e(get_work_category_by_id($data->id,'slug')); ?>">
                                <div class="portfolio-item">
                                    <a href=<?php echo e(asset('assets/frontend/ajax/portfolio-ajax-project-1.html')); ?> data-ajax-on-modal>
                    <span class="thumb-info thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <?php $img_url = '';?>
                            <?php if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)): ?>
                                <?php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);?>
                            <?php endif; ?>
                            <img src="<?php echo e(asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image)); ?>" class="img-fluid border-radius-0" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner"><?php echo e($data->title); ?></span>
                                <span class="thumb-info-type"><?php echo e(get_work_category_by_id($data->id,'slug')); ?></span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                                    </a>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






















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
             style="background-image: url(<?php echo e(asset('assets/frontend/img/bg-one-page-1-1.jpg')); ?>); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-color-light mb-2">We’re excited about Porto Template</h2>
                    <p class="text-color-light opacity-7">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET
                        OUR CUSTOMERS.</p>
                </div>
            </div>
            <div class="row text-center py-3 my-4">
                <div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0"
                     data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-1.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-2.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-3.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-4.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-5.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-6.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-4.png')); ?>" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('assets/frontend/img/logos/logo-light-2.png')); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0"
                         data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
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
                            <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
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
										<img src="<?php echo e(asset('assets/frontend/img/team/team-1.jpg')); ?>" class="img-fluid"
                                             alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">John Doe</h3>
									<span class="text-2 mb-0">CEO</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="<?php echo e(asset('assets/frontend/img/team/team-2.jpg')); ?>" class="img-fluid"
                                             alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Jessica Doe</h3>
									<span class="text-2 mb-0">DESIGNER</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="<?php echo e(asset('assets/frontend/img/team/team-3.jpg')); ?>" class="img-fluid"
                                             alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Ricki Doe</h3>
									<span class="text-2 mb-0">DEVELOPER</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
            </div>
            <div class="col-sm-6 col-lg-3">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="<?php echo e(asset('assets/frontend/img/team/team-4.jpg')); ?>" class="img-fluid"
                                             alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Melinda Doe</h3>
									<span class="text-2 mb-0">SEO ANALYST</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
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
                    <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div>

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
                                    <input type="text" value="" data-msg-required="Please enter the subject."
                                           maxlength="100" class="form-control" name="subject" placeholder="Subject"
                                           required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message."
                                                  rows="4" class="form-control" name="message" placeholder="Message"
                                                  required></textarea>
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
                                                                           target="_blank"
                                                                           class="text-color-light font-weight-semibold"
                                                                           title="Facebook"><i
                                                    class="me-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
                                <span class="social-icons-twitter ps-3"><a href="http://www.twitter.com/"
                                                                           target="_blank"
                                                                           class="text-color-light font-weight-semibold"
                                                                           title="Twitter"><i
                                                class="me-1 fab fa-twitter"></i> TWITTER</a></span>
                                <span class="social-icons-instagram ps-3"><a href="http://www.linkedin.com/"
                                                                             target="_blank"
                                                                             class="text-color-light font-weight-semibold"
                                                                             title="Linkedin"><i
                                                class="me-1 fab fa-instagram"></i> INSTAGRAM</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH C:\wamp64\www\testbasel\pr\resources\views/frontend/home-pages/home_world.blade.php ENDPATH**/ ?>