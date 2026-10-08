<!doctype html>
<html class="<?php echo $__env->make('partials.tailwind.bootstrap', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.font-awesome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.poppins-font', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.admin-layout-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Ageless</title>

    
    

    
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>

<body>

<div class="admin-layout">

    <aside class="sidebar">
        <div class="brand">
            <div class="brand-icon">A</div>
            <div class="brand-text">
                <h4>Ageless</h4>
                <small>Admin Dashboard</small>
            </div>
        </div>

        <div class="menu-title">Main Menu</div>

        <a href="<?php echo e(route('admin.products.index')); ?>">
            <i class="fa-solid fa-box"></i>
            Products
        </a>
             <a href="<?php echo e(route('admin.projects.index')); ?>">
        <i class="fa-solid fa-project-diagram"></i>
        Projects
    </a>

        <a href="<?php echo e(route('admin.blogs.index')); ?>">
            <i class="fa-solid fa-newspaper"></i>
            Blog
        </a>

        <a href="<?php echo e(route('admin.faqs.index')); ?>">
            <i class="fa-solid fa-circle-question"></i>
            FAQs
        </a>
 <a href="<?php echo e(route('admin.contacts.index')); ?>">
            <i class="fa-solid fa-envelope"></i>
            Contact Enquiries
        </a>

       
  

        <div class="logout-box">
            <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                <?php echo csrf_field(); ?>
                <button class="btn logout-btn w-100">
                    <i class="fa-solid fa-right-from-bracket me-2"></i>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="main">
        <div class="topbar">
            <div>
                <h3>Admin Panel</h3>
                <small>Manage Ageless website content easily</small>
            </div>

            <strong class="date-pill"><?php echo e(date('d M Y')); ?></strong>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\layout.blade.php ENDPATH**/ ?>