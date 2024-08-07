<?php $__env->startSection('content'); ?>
<body data-plugin-page-transition>
<div class="body">

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-12 font-weight-semibold">Meet our Team</h1>
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

        <div class="container py-4">
            <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"><?php echo e($data->name); ?></h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500"><?php echo e($data->designation); ?></p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"><?php echo e($data->description); ?></p>

                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                            <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                        </div>
                        <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                            <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                            <ul class="social-icons float-lg-end">
                                <li class="social-icons-facebook"><a href="<?php echo e($data->icon_one_url); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="<?php echo e($data->icon_two_url); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="<?php echo e($data->icon_three_url); ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <?php if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)): ?>
                        <img src="<?php echo e(asset('assets/frontend/img/a68c6225-d2f8-497a-ab4c-070dc9f13a46.jpg')); ?>" alt="<?php echo e(__($data->name)); ?>" class="img-fluid"
                        >
                    <?php endif; ?>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="col ps-md-5">
            <h2 class="font-weight-bolder text-6 mb-3">
                <strong class="font-weight-extra-bold">About</strong> World of Design
            </h2>
            <p class="text-4">
                <span class="alternative-font">World of Design</span> is a Burlington-based renovation and remodeling company with over a decade of expertise in transforming commercial and residential spaces across Ontario. They offer a wide range of services, including bathroom and kitchen remodeling, home improvement, drywall installation, flooring, deck building, painting, interior and exterior design, building construction, and landscaping. Their home renovation services enhance the functionality and beauty of living spaces, while their commercial design solutions improve the aesthetic and operational aspects of business environments.
            </p>
            <p class="text-4">
                Clients have experienced transformative changes, such as modernizing outdated kitchens into stylish, functional spaces with increased storage, and converting living rooms into cozy, modern areas with expert drywall work and beautiful new flooring. World of Designs is known for its client-focused approach, offering affordable pricing, igniting creativity, and delivering exceptional results within the expected timeframe. Personalized consultations are provided to understand the client’s vision and preferences, then expertise is applied to design and implement transformative landscapes that captivate and inspire.
            </p>
            <p class="text-4">
                This company also offers home design, building, and development. Comprehensive solutions are provided to turn clients’ visions into reality, from initial planning to final delivery. Services include home design according to the latest trends and engineering standards, home building with high-quality materials, and home development with modern specifications that meet clients’ aspirations. The company also excels in framing services, ensuring durability and sustainability for each project.
            </p>
            <p class="text-4">
                Basel, the company’s lead designer, provides clients with tailored solutions that meet their needs and desires, making World of Designs a trusted partner for any renovation or remodeling project. The team’s industry connections and knowledge ensure seamless project execution, using high-quality materials and maintaining a clean, respectful work environment, even when clients are present during renovations. Recognized for its excellence, World of Designs won the Landscape Architectural Design Competition in 2021, highlighting their commitment to innovation and quality. With a reputation built on trust and excellence, World of Designs continues to inspire and deliver remarkable results, turning client visions into reality with precision and care.
            </p>
            <p class="text-4">
                Our team’s expertise spans residential, commercial, and industrial sectors, ensuring each project is executed with the utmost professionalism and attention to detail. Partner with us to turn your vision into reality, leveraging our commitment to excellence for outstanding results.
            </p>
        </div>
        <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0">Word of Designs <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> House!</h2>
                            <p class="mb-0">Contact Us</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="<?php echo e(route('frontend.contactus')); ?>" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/frontend/clients.blade.php ENDPATH**/ ?>