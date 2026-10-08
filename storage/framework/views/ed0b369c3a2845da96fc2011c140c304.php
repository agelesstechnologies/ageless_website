<header class="main-header wonder-nav-header">
        <div class="container">
            <div class="nav-capsule-wrapper">
                <div class="site-logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset("assets/img/nlogo.png")); ?>" alt="Ageless Logo"></a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li>
                            <a href="<?php echo e(url('/')); ?>">
                                <i class="las la-home nav-item-icon"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/about-company')); ?>">
                                <i class="las la-building nav-item-icon"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/projects')); ?>">
                                <i class="las la-layer-group nav-item-icon"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/products')); ?>">
                                <i class="las la-cubes nav-item-icon"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="<?php echo e(route('blog.index')); ?>">
                                <i class="las la-newspaper nav-item-icon"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/contact')); ?>">
                                <i class="las la-envelope nav-item-icon"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-actions">
                    <a href="tel:+917025777755" class="nav-call-btn">
                        <span class="call-icon-wrap"><i class="las la-phone-volume"></i></span>
                        <span>Call Us</span>
                    </a>
                    <button type="button" class="mobile-menu-icon ![border:0] ![background:transparent] ![padding:0]" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-navigation">
                        <span class="burger-menu" aria-hidden="true">
                            <span class="line-menu line-half first-line"></span>
                            <span class="line-menu"></span>
                            <span class="line-menu line-half last-line"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\partials\navigation.blade.php ENDPATH**/ ?>