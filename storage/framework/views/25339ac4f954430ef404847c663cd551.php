<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Ageless</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: #f4f7fb;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-card {
            width: 430px;
            background: #fff;
            border-radius: 26px;
            padding: 38px;
            box-shadow: 0 20px 50px rgba(15, 23, 42, .12);
        }

        .brand {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 64px;
            height: 64px;
            border-radius: 20px;
            background: linear-gradient(135deg, #f59e0b, #f97316);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 900;
            margin: 0 auto 14px;
        }

        .brand h3 {
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .brand p {
            color: #64748b;
            margin: 0;
            font-size: 14px;
        }

        label {
            font-weight: 700;
            color: #334155;
            margin-bottom: 7px;
        }

        .form-control {
            height: 48px;
            border-radius: 14px;
            border: 1px solid #d1d5db;
        }

        .form-control:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 4px rgba(245, 158, 11, .15);
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 18px 0 24px;
            font-size: 14px;
        }

        .options a {
            color: #f97316;
            text-decoration: none;
            font-weight: 700;
        }

        .btn-login {
            height: 50px;
            border-radius: 14px;
            background: linear-gradient(135deg, #f59e0b, #f97316);
            border: 0;
            color: #fff;
            font-weight: 800;
            width: 100%;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #d97706, #ea580c);
            color: #fff;
        }

        .alert {
            border-radius: 14px;
            border: 0;
        }
    </style>
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