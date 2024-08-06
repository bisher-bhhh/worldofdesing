<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>world of desing</title>

    <meta name="keywords" content="home renovation, interior design, custom interiors, flooring, painting"/>

    <meta name="author" content="Bichr Briaghle">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/frontend/img/word of designs 2 logo.png')); ?>" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/frontend/img/word of designs 2 logo.png')); ?>">
    <script src="https://kit.fontawesome.com/9eaf5f04c1.js" crossorigin="anonymous"></script>


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php echo e(get_static_option('site_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('site_meta_tags')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Web Fonts  -->
    <link id="googleFonts"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/animate/animate.compat.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/magnific-popup/magnific-popup.min.css')); ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/theme-elements.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/theme-blog.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/theme-shop.css')); ?>">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/skins/default.css')); ?>">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/custom.css')); ?>">

    <!-- Head Libs -->
    <script src="<?php echo e(asset('assets/frontend/vendor/modernizr/modernizr.min.js')); ?>"></script>
    <?php if(request()->is('blog/*') || request()->is('singleproject') || request()->is('service/*')): ?>

        <?php echo $__env->yieldContent('og-meta'); ?>
    <?php endif; ?>
</head>

<?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/frontend/header.blade.php ENDPATH**/ ?>