<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="<?php echo e(route('admin.home')); ?>">
                <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="<?php echo e(get_static_option('site_title')); ?>">
                <?php endif; ?>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="<?php echo e(active_menu('admin-home')); ?>">
                        <a href="<?php echo e(route('admin.home')); ?>"
                           aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span><?php echo app('translator')->get('dashboard'); ?></span>
                        </a>
                    </li>
                    <?php if('super_admin' == auth()->user()->role): ?>
                    <li
                        class="
                        <?php echo e(active_menu('admin-home/new-user')); ?>

                        <?php echo e(active_menu('admin-home/all-user')); ?>

                        "
                    >
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i> <span><?php echo e(__('Admin Role Manage')); ?></span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/all-user')); ?>"><a href="<?php echo e(route('admin.all.user')); ?>"><?php echo e(__('All Admin')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/new-user')); ?>"><a href="<?php echo e(route('admin.new.user')); ?>"><?php echo e(__('Add New Admin')); ?></a></li>
                        </ul>
                    </li>
                        
                    <?php endif; ?>
                        
                        
                        
                        

                        
                        
                        
                        <li class="<?php if(request()->is('admin-home/contact-page/*')  ): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Contact Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                
                                
                                <li class="<?php echo e(active_menu('admin-home/contact-page/map')); ?>"><a href="<?php echo e(route('admin.contact.page.map')); ?>"><?php echo e(__('Google Map Area')); ?></a></li>
                            </ul>
                        </li>
                        
                        
                    

                    
                    <li class="
                    <?php if(request()->is('admin-home/works/*')): ?> active <?php endif; ?>
                    <?php echo e(active_menu('admin-home/works')); ?>

                            ">
                        <a href="javascript:void(0)"
                           aria-expanded="true">
                            <i class="ti-layout"></i>
                            <span><?php echo e(__('Works')); ?></span>
                        </a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/work')); ?>"><a href="<?php echo e(route('admin.work')); ?>"><?php echo e(__('New/All Works')); ?></a></li>
                            <li class="<?php echo e(active_menu('admin-home/work/category')); ?>"><a href="<?php echo e(route('admin.work.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    <li class="<?php echo e(active_menu('admin-home/testimonial')); ?>">
                        <a href="<?php echo e(route('admin.testimonial')); ?>" aria-expanded="true"><i class="ti-control-forward"></i> <span><?php echo e(__('Testimonial')); ?></span></a>
                    </li>
                    
                    

                    
                    
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/backend/partials/sidebar.blade.php ENDPATH**/ ?>