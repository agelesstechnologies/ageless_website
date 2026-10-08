<!doctype html>
<html class="@include('partials.tailwind.bootstrap')
@include('partials.tailwind.font-awesome')
@include('partials.tailwind.poppins-font')
@include('partials.tailwind.admin-layout-1')
@stack('tailwind_styles')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Ageless</title>

    
    

    
    
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
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

        <a href="{{ route('admin.products.index') }}">
            <i class="fa-solid fa-box"></i>
            Products
        </a>
             <a href="{{ route('admin.projects.index') }}">
        <i class="fa-solid fa-project-diagram"></i>
        Projects
    </a>

        <a href="{{ route('admin.blogs.index') }}">
            <i class="fa-solid fa-newspaper"></i>
            Blog
        </a>

        <a href="{{ route('admin.faqs.index') }}">
            <i class="fa-solid fa-circle-question"></i>
            FAQs
        </a>
 <a href="{{ route('admin.contacts.index') }}">
            <i class="fa-solid fa-envelope"></i>
            Contact Enquiries
        </a>

       
  

        <div class="logout-box">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
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

            <strong class="date-pill">{{ date('d M Y') }}</strong>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</div>

</body>
</html>