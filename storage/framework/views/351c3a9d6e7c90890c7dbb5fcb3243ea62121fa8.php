<?php $__env->startSection('content'); ?>

    <div class="body">
        <div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-12 font-weight-semibold">Our Projects</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="<?php echo e(route('homepage')); ?>">Home</a></li>
                                <li class="active">Pages</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="container">
                <div class="row justify-content-center pt-5 mt-5">
                    <div class="col-lg-9 text-center">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                            <h2 class="font-weight-bold mb-2">Projects</h2>
                            <p class="mb-4">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
                        </div>
                        <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nunc in enim laoreet ornare. Nullam tincidunt tempor ligula eu dignissim. Nam semper dui quis congue mollis. Nam at tellus ultricies, tincidunt quam non, rhonus mauris. Nullam gravida molestie lorem, et euismod metus feugiat ac.
                        </p>
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
                    <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                                    <section class="section section-height-3 bg-light border-0 m-0">
                                        <div class="container container-xl-custom">
                                            <div class="row portfolio-list sort-destination mb-8" data-sort-id="portfolio">

                                                <?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-lg-4 isotope-item <?php echo e(get_work_category_by_id($data->id,'slug')); ?>">
                                                    <div class="portfolio-item">
                                                        <a href="<?php echo e(asset('assets/frontend/ajax/portfolio-ajax-project-1.html')); ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
											<span class="thumb-info-wrapper">
                                                   <?php $img_url = '';?>
                                                <?php if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)): ?>
                                                    <?php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);?>
                                                <?php endif; ?>
												<img src="<?php echo e(asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image)); ?>" class="img-fluid" alt="">
												<span class="thumb-info-title text-start">
												<span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3"><?php echo e($data->title); ?></span>
													<span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5"><?php echo e(get_work_category_by_id($data->id,'slug')); ?> </span>

												</span>
                                            </span>
											</span>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\testbasel\pr\resources\views/frontend/allprojects.blade.php ENDPATH**/ ?>