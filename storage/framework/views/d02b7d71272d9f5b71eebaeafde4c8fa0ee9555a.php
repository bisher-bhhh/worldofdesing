<?php echo $__env->make('frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div role="main" class="main">
    <div id="home"
        class="owl-carousel  owl-carousel-light owl-carousel-dark-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
        data-plugin-options="{'autoplayTimeout': 11000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <!-- Carousel Slide 1 -->
                <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($index == 1): ?>
                        <div class="owl-item position-relative  overlay overlay-show overlay-op-8"
                             style="background-size: cover; background-position: center; background-color: #35383d;">
                            <video autoplay muted loop class="position-absolute w-100 h-100" style="object-fit: cover;">
                                <source src="<?php echo e(asset('assets/frontend/img/VID_20240211_140757_668.mp4 (1).mov')); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php elseif($index==2): ?>
                                <div class="owl-item position-relative  overlay overlay-show overlay-op-8"
                                     style="background-size: cover; background-position: center; background-color: #35383d;">
                                <video autoplay muted loop class="position-absolute w-100 h-100"width="640" height="360" style="object-fit: cover;">
                                    <source src="<?php echo e(asset('assets/frontend/img/moza_20230518_202725 (1).mp4')); ?>" type="video/mp4" >
                                    Your browser does not support the video tag.
                                </video>
                            <?php else: ?>
                                <div class="owl-item position-relative pt-5 overlay overlay-show overlay-op-8"
                                     style="background-image: url(<?php echo e(asset('assets/uploads/header-sliders/header-slider-image-' . $data->id . '.' . $data->image)); ?>); background-size: cover; background-position: center; background-color: #35383d;">
                                    <?php endif; ?>
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
                                         alt="" />
                                </span>
                                                        Welcome to World of Designs
                                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                    <img src="<?php echo e(asset('assets/frontend/img/slides/slide-title-border.png')); ?>"
                                         class="w-auto appear-animation"
                                         data-appear-animation="fadeInLeftShorter"
                                         data-appear-animation-delay="250"
                                         data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                         alt="" />
                                </span>
                                                    </h3>
                                                    <h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation"
                                                        style="text-align: center"
                                                        data-appear-animation="blurIn" data-appear-animation-delay="500"
                                                        data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                                        <?php
                                                            $title = str_replace('{color}', '<span class="base-color">', $data->title);
                                                            $title = str_replace('{/color}', '</span>', $title);
                                                        ?>
                                                        <?php echo $title; ?>

                                                        <span class="position-relative">
                                    <span class="position-absolute left-50pct transform3dx-n50 bottom-0">
                                    </span>
                                </span>
                                                    </h2>
                                                    <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                                       data-plugin-animated-letters
                                                       data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                                        <?php echo e($data->description); ?>

                                                    </p>
                                                    <a href="<?php echo e(route('frontend.contactus')); ?>"
                                                       class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation"
                                                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"
                                                       data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET STARTED NOW!</a>
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

            <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($index == 0): ?>
                    <button role="button" class="owl-dot active"><span></span></button>
                <?php else: ?>
                    <button role="button" class="owl-dot"><span></span></button>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1" >
                <div class="row mb-2">
                    <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-8 col-xl-3 ">
                            <a href="<?php echo e(route('frontend.servicedetails', ['id' => $data->id])); ?>"
                                class="text-decoration-none simple-ajax-popup">
                                <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div class="box-content">
                                        <?php if($data->id==25): ?>
                                            <img height="87px" src="<?php echo e(asset('assets/frontend/img/thumbs-up.png')); ?>">
                                        <?php endif; ?>
                                            <?php if($data->id==26): ?>
                                                <img height="87px" src="<?php echo e(asset('assets/frontend/img/briefcase.png')); ?>">
                                            <?php endif; ?>
                                            <?php if($data->id==27): ?>
                                                <img height="87px" src="<?php echo e(asset('assets/frontend/img/calculator.png')); ?>">
                                            <?php endif; ?>
                                            <?php if($data->id==28): ?>
                                                <img height="87px" src="<?php echo e(asset('assets/frontend/img/staircase.png')); ?>">
                                            <?php endif; ?>
                                        <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3"><?php echo e($data->title); ?></h3>
                                        <p class="font-weight-light text-color-light opacity-5 mb-0"> <?php echo $data->description; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo e(route('frontend.contactus')); ?>"
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
                    <p class="mb-4">Our renovation projects highlight exceptional craftsmanship and design expertise.<br>
                        Each transformation reflects our dedication to quality and innovation.
                    </p>
                </div>
                <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    We believe in the potential of great renovations to inspire and enhance. With every project, we aim to enhance both the beauty and functionality of spaces. Explore our work and discover how we bring new life to existing structures.</p>
            </div>
        </div>
        <div class="row pb-5 mb-5">
            <div class="col pb-5">
                <div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                        <div class="bounce3"></div>
                    </div>

                    <div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

                </div>

                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center"
                    data-sort-id="portfolio" data-option-key="filter"
                    data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a
                            class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                    <?php $__currentLoopData = $all_work_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item" data-option-value=".<?php echo e(Str::slug($data->name)); ?>"><a
                                class="nav-link text-1 text-uppercase" href="#"><?php echo e($data->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div class="owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                        <div class="row  portfolio-list sort-destination" data-sort-id="portfolio">
                            <?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index<=5): ?>
                                <div
                                    class="col-lg-4 p-1 isotope-item <?php echo e(get_work_category_by_id($data->id, 'slug')); ?>">
                                    <div class="portfolio-item">
                                        <a href=<?php echo e(route('frontend.singleproject', ['id' => $data->id])); ?>

                                            data-ajax-on-modal>
                                            <span class="thumb-info thumb-info-lighten">
                                                <span class="thumb-info-wrapper">
                                                    <?php $img_url = '';?>
                                                    <?php if(file_exists('assets/uploads/works/work-grid-' . $data->id . '.' . $data->image)): ?>
                                                        <?php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);?>
                                                    <?php endif; ?>
                                                    <img src="<?php echo e(asset('assets/uploads/works/work-large-' . $data->id . '.' . $data->image)); ?>"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner"><?php echo e($data->title); ?></span>
                                                        <span
                                                            class="thumb-info-type"><?php echo e(get_work_category_by_id($data->id, 'slug')); ?></span>
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
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            


                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col text-center">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo e(route('frontend.allprojects')); ?>"
                        class="btn btn-dark btn-outline custom-btn-color-2 font-weight-extra-bold text-color-dark text-3 px-5 py-3 text-hover-light border-width-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">More</a>
                </div>
            </div>

        </div>
    </div>

    <section id="clients"
        class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0"
        style="background-image: url(<?php echo e(asset('assets/frontend/img/word of designs 2 logo.png')); ?>); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-color-light mb-2">Testimonials</h2>
                    <p class="text-color-light opacity-7">See how our solutions have elevated their projects and transformed their visions</p>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0"
                        data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                        <?php $__currentLoopData = $all_testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div
                                        class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                    <blockquote>
                                        <p class="text-5 line-height-5 mb-0"><?php echo e($data-> description); ?></p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- <?php echo e($data->name); ?></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>

                </div>
            </div>
        </div>
    </section>
    <div id="team" class="container pb-4">
        <div class="row pt-5 mt-5 mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="font-weight-bold mb-1">Team</h2>
                <p>At World of design, our expert architectural team delivers innovative,<br> sustainable designs with exceptional attention to detail, transforming visions into reality.</p>
            </div>
        </div>
        <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <a href="<?php echo e(route('frontend.ourTeam')); ?>">
                             <?php if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>" class="img-fluid"
                                     >
                            <?php endif; ?>


                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0"><?php echo e($data->name); ?></h3>
                        <span class="text-2 mb-0"><?php echo e($data->designation); ?></span>
                        <span class="thumb-info-caption-text pt-1" style="display: block; white-space: nowrap;line-height: 1.5;overflow: hidden;text-overflow: ellipsis;"><?php echo e($data->description); ?></span>
                        <span class="thumb-info-social-icons">
                                <?php if(!empty($data->icon_one) && !empty($data->icon_one_url)): ?>

                                <a target="_blank" href="<?php echo e($data->icon_one_url); ?>"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            <?php endif; ?>



                                         <?php if(!empty($data->icon_two) && !empty($data->icon_two_url)): ?>
                                        
                                        <a target="_blank" href="<?php echo e($data->icon_two_url); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($data->icon_three) && !empty($data->icon_three_url)): ?>
                                        
                                        <a target="_blank" href="<?php echo e($data->icon_three_url); ?>"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                        </span>
                    </span>
                </span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
























        </div>
    </div>

    <section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <!-- Google Maps - Settings on footer -->

                    <iframe
                            width="100%"
                            height="100%"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?q=<?php echo e(get_static_option('contact_page_map_section_latitude')); ?>,<?php echo e(get_static_option('contact_page_map_section_longitude')); ?>&hl=en-US&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
                <div class="col-md-6 p-5 my-5">

                    <div class="px-4">
                        <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
                        <p class="text-3 mb-4">We’re here to help. Reach out with any questions!</p>
                        <form class=" form-style-2 pe-xl-5" action="https://formsubmit.co/info@worldofdesigns.ca" method="POST">
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
                            <input type="hidden" name="_template" value="box">
                            <input type="hidden" name="_autoresponse" value="Thank you for sending the email. The support team from Bwa Creative Art Solutions will contact you">
                            <input type="hidden" name="_next" value="info@worldofdesigns.ca/contactus">
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
                            <a href="tel:+1 519-998-3406"
                                class="text-color-light font-weight-semibold text-decoration-none">+1 519-998-3406</a>
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
                                <span class="social-icons-facebook"><a href="https://www.facebook.com/profile.php?id=100088148767303"
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
<?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/frontend/home-pages/home_world.blade.php ENDPATH**/ ?>