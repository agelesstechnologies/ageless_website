<!doctype html>
<html class="@include('partials.tailwind.bootstrap')
@include('partials.tailwind.font-awesome')
@include('partials.tailwind.poppins-font')
@include('partials.tailwind.admin-auth-login-1')
@stack('tailwind_styles')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Ageless</title>

    
    

    
    
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
</head>

<body>

<div class="login-card">

    <div class="brand">
        <div class="brand-icon">A</div>
        <h3>Ageless Admin</h3>
        <p>Login to manage your website</p>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf

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
</html>