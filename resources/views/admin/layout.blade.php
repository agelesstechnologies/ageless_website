<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Ageless</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 270px;
            background: #0f172a;
            color: #fff;
            padding: 24px 18px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            box-shadow: 8px 0 30px rgba(15, 23, 42, .12);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px 28px;
            border-bottom: 1px solid rgba(255,255,255,.1);
            margin-bottom: 22px;
        }

        .brand-icon {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: linear-gradient(135deg, #f59e0b, #f97316);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 22px;
        }

        .brand-text h4 {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand-text small {
            color: #94a3b8;
            font-size: 12px;
        }

        .menu-title {
            color: #64748b;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 18px 12px 10px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #cbd5e1;
            text-decoration: none;
            padding: 13px 14px;
            border-radius: 14px;
            margin-bottom: 7px;
            font-weight: 600;
            transition: .25s ease;
        }

        .sidebar a i {
            width: 20px;
            text-align: center;
            color: #f59e0b;
        }

        .sidebar a:hover {
            background: rgba(245, 158, 11, .15);
            color: #fff;
            transform: translateX(4px);
        }

        .logout-box {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 22px;
        }

        .logout-btn {
            height: 46px;
            border-radius: 14px;
            background: rgba(239, 68, 68, .12);
            border: 1px solid rgba(239, 68, 68, .35);
            color: #fecaca;
            font-weight: 700;
        }

        .logout-btn:hover {
            background: #ef4444;
            color: #fff;
        }

        .main {
            margin-left: 270px;
            width: calc(100% - 270px);
            padding: 26px;
        }

        .topbar {
            background: #fff;
            border-radius: 22px;
            padding: 22px 26px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, .07);
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 26px;
        }

        .topbar h3 {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
        }

        .topbar small {
            color: #64748b;
        }

        .date-pill {
            padding: 10px 16px;
            background: #fff7ed;
            color: #c2410c;
            border-radius: 30px;
            font-weight: 800;
            border: 1px solid #fed7aa;
        }

        .content-card,
        .card {
            border: 0;
            border-radius: 22px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(15, 23, 42, .07);
        }

        .card-header {
            background: transparent;
            border-bottom: 1px solid #e5e7eb;
            padding: 18px 22px;
            font-weight: 800;
        }

        .card-body {
            padding: 22px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f59e0b, #f97316);
            border: 0;
            border-radius: 12px;
            font-weight: 700;
            padding: 10px 18px;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #d97706, #ea580c);
        }

        .btn-danger,
        .btn-warning,
        .btn-success,
        .btn-secondary {
            border-radius: 12px;
            font-weight: 700;
        }

        .table {
            vertical-align: middle;
        }

        .table thead th {
            background: #f8fafc;
            color: #475569;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .7px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #fff7ed;
        }

        .form-control,
        .form-select {
            height: 44px;
            border-radius: 12px;
            border: 1px solid #d1d5db;
        }

        textarea.form-control {
            height: auto;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 4px rgba(245, 158, 11, .15);
        }

        label {
            font-weight: 700;
            color: #334155;
            margin-bottom: 7px;
        }

        .alert {
            border-radius: 16px;
            border: 0;
        }

        @media (max-width: 992px) {
            .admin-layout {
                display: block;
            }

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                bottom: auto;
            }

            .logout-box {
                position: relative;
                left: auto;
                right: auto;
                bottom: auto;
                margin-top: 20px;
            }

            .main {
                width: 100%;
                margin-left: 0;
                padding: 18px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }
    </style>
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