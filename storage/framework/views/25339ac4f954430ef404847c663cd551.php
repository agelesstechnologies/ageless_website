<!doctype html>
<html class="<?php echo $__env->make('partials.tailwind.bootstrap', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.font-awesome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.poppins-font', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.admin-auth-login-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Ageless</title>

    
    

    
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>

<body>

<div class="login-card">

    <div class="brand">
        <div class="brand-icon">A</div>
        <h3>Ageless Admin</h3>
        <p>Login to manage your website</p>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('admin.login.post')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Email</label>
            <input 
                class="form-control"
                name="email"
                type="email"
                placeholder="Enter your email"
                required
            >
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input 
                class="form-control"
                name="password"
                type="password"
                placeholder="Enter password"
                required
            >
        </div>

        <div class="options">
            <label class="d-flex align-items-center gap-2 mb-0">
                <input type="checkbox" name="remember">
                Remember me
            </label>

         
        </div>

        <button class="btn btn-login">
            <i class="fa-solid fa-right-to-bracket me-2"></i>
            Login
        </button>
    </form>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\auth\login.blade.php ENDPATH**/ ?>