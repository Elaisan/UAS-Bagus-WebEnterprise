<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sleepy Panda')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    @yield('css')
    <!-- <style>
        :root {
            --primary: #3b82f6;
            --secondary: #ec4899;
            --bg-dark: #161b2e;
            --surface-dark: #1f243a;
            --input-dark: #2a304a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-dark);
            color: #f3f4f6;
            overflow-x: hidden;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--input-dark);
            border-radius: 4px;
        }
        .navbar {
            background-color: var(--surface-dark);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar .btn-menu {
            background: none;
            border: none;
            color: #9ca3af;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s;
        }
        .navbar .btn-menu:hover {
            background-color: var(--input-dark);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
        }

        .logo-text {
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
        }

        .search-box {
            max-width: 400px;
            width: 100%;
        }

        .search-box input {
            background-color: var(--input-dark);
            border: none;
            color: #f3f4f6;
            padding: 0.625rem 1rem 0.625rem 2.5rem;
            border-radius: 0.5rem;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .search-box input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--primary);
        }

        .search-box input::placeholder {
            color: #6b7280;
        }

        .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid transparent;
            transition: border-color 0.3s;
            cursor: pointer;
        }

        .user-avatar:hover {
            border-color: var(--primary);
        }

        .user-name {
            font-size: 0.875rem;
            color: #f3f4f6;
            font-weight: 500;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 280px;
            background-color: var(--surface-dark);
            padding: 2rem 1.5rem;
            z-index: 1050;
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }

        .sidebar-overlay.show {
            display: block;
        }

        .sidebar-title {
            color: #fff;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 0.75rem;
        }

        .sidebar-menu a {
            display: block;
            padding: 0.875rem 1.25rem;
            color: #9ca3af;
            text-decoration: none;
            border-radius: 0.5rem;
            border: 2px solid transparent;
            transition: all 0.3s;
            font-weight: 500;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        /* Main Content */
        .main-content {
            padding: 2rem;
            max-width: 1600px;
            margin: 0 auto;
        }

        /* Chart Cards */
        .chart-card {
            background-color: var(--surface-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            padding: 1.5rem;
            height: 320px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .chart-title {
            font-size: 1.125rem;
            font-weight: 500;
            color: #fff;
        }

        .chart-legend {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            font-size: 0.625rem;
            color: #9ca3af;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .legend-dot.female {
            background-color: var(--secondary);
        }

        .legend-dot.male {
            background-color: var(--primary);
        }

        /* Bar Chart */
        .bar-chart {
            display: flex;
            align-items: flex-end;
            height: 220px;
            gap: 0.5rem;
            padding-left: 2rem;
            position: relative;
        }

        .y-axis {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-size: 0.625rem;
            color: #6b7280;
        }

        .bar-group {
            flex: 1;
            height: 100%;
            justify-content: flex-end;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .bar-pair {
            flex: 1; 
            display: flex;
            gap: 0.25rem;
            align-items: flex-end;
            width: 100%;
            justify-content: center;
            padding-bottom: 5px;
        }

        .bar {
            width: 8px;
            border-radius: 3px 3px 0 0;
            animation: growUp 1s ease-out forwards;
            transform-origin: bottom;
            transform: scaleY(0);
        }

        @keyframes growUp {
            to { transform: scaleY(1); }
        }

        .bar.female {
            background-color: var(--secondary);
        }

        .bar.male {
            background-color: var(--primary);
        }

        .bar-label {
            font-size: 0.625rem;
            color: #6b7280;
        }

        /* Stats Cards */
        .stats-card {
            background-color: var(--surface-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stats-card:hover {
            border-color: var(--primary);
        }

        .stats-info h3 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            color: #fff;
        }

        .stats-info p {
            margin: 0;
            color: #9ca3af;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--input-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #9ca3af;
            transition: all 0.3s;
        }

        .stats-card:hover .stats-icon {
            background-color: var(--primary);
            color: #fff;
        }

        /* Line Chart */
        .line-chart-card {
            background-color: var(--surface-dark);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .line-chart-container {
            position: relative;
            width: 100%;
            height: 300px;
            margin-top: 1rem;
        }

        .chart-grid {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 1.5rem;
        }

        .grid-line {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            height: 100%;
            display: flex;
            align-items: flex-start;
            font-size: 0.625rem;
            color: #6b7280;
        }

        .x-axis-labels {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 2rem;
            font-size: 0.625rem;
            color: #6b7280;
        }

        .line-chart-svg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 1rem 1.5rem 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .search-box {
                display: none;
            }

            .user-name {
                display: none;
            }

            .bar {
                width: 6px;
            }
        }
    </style> -->
    
</head>
<body>
    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="sidebar-title">Admin Site</h4>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="#" class="{{ Route::is('dashboard') ? 'active' : '' }}">Jurnal</a></li>
            <li><a href="{{ route('report') }}" class="{{ Route::is('report') ? 'active' : '' }}">Report</a></li>
            <li><a href="{{ route('user') }}" class="{{ Route::is('user') ? 'active' : '' }}">Database User</a></li>
            @if (route::is('user'))
                <li><a href="#" class="">Database User</a></li>
                <li><a href="#" class="">Update Data</a></li>
                <li><a href="#" class="">Reset Password</a></li>
            @endif
        </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
                <button class="btn-menu" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="logo-container">
                    <img src="{{ asset('images/ico.png') }}" alt="Logo" class="logoapp">
                    <img src="{{ asset('images/text.png') }}" alt="Sleepy Panda" class="ltext">
                </div>
                <div class="search-box position-relative mx-auto">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="user-profile">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY-4PIHDB2J89xHlAJjrC5BCfNcIWwvP1KDG6gzrfSKoj_diWGbayJjl0O8o0tZmH4a7tAUl8_qHbyQWv8JTcx6Lg6e678s_rmoVUazsAPGTrDE8QBIu2Dz9fvH4TZrwLbFf4m0932GLq_dClPW_5VkJQ0fUCAk_A-W_6GqoZy6nXVZIIEtyTSoTPRG-PjkBGCqThM1hG6y1G_tRyAli_F3Yz1mZ9PvFkzOD_MTmJPs7hm1gtP6u0LBCYjES4QCRrFhet6VJaY" alt="User" class="user-avatar">
                <span class="user-name">Halo, {{ Auth::user()->email }}</span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('show');
            sidebarOverlay.classList.toggle('show');
        });

        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
        });
    </script>
</body>
</html>