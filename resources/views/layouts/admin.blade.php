<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — MAS EduCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        :root { --sidebar-width: 260px; --sidebar-bg: #1A1A2E; --sidebar-accent: #C8102E; --topbar-h: 64px; }
        body { font-family: 'Segoe UI', system-ui, sans-serif; background: #F4F5F7; }
        .sidebar { width: var(--sidebar-width); height: 100vh; background: var(--sidebar-bg); position: fixed; top: 0; left: 0; z-index: 1040; overflow-y: auto; transition: left .3s; display: flex; flex-direction: column; }
        .sidebar-brand { padding: 20px 24px; border-bottom: 1px solid rgba(255,255,255,.08); }
        .sidebar-brand h5 { color: white; margin: 0; font-weight: 700; font-size: 1.15rem; }
        .sidebar-brand span { color: #F4B8C1; }
        .sidebar-nav { flex: 1; padding: 16px 0; }
        .nav-section { padding: 8px 20px 4px; font-size: .72rem; text-transform: uppercase; letter-spacing: 1.5px; color: rgba(255,255,255,.35); font-weight: 600; }
        .sidebar-link { display: flex; align-items: center; gap: 12px; padding: 11px 24px; color: rgba(255,255,255,.7); text-decoration: none; font-size: .9rem; transition: all .2s; border-left: 3px solid transparent; }
        .sidebar-link:hover, .sidebar-link.active { background: rgba(200,16,46,.15); color: white; border-left-color: var(--sidebar-accent); }
        .sidebar-link .bi { font-size: 1.05rem; }
        .sidebar-badge { background: var(--sidebar-accent); color: white; font-size: .72rem; border-radius: 10px; padding: 2px 8px; margin-left: auto; }
        .main-content { margin-left: var(--sidebar-width); min-height: 100vh; }
        .topbar { height: var(--topbar-h); background: white; box-shadow: 0 1px 4px rgba(0,0,0,.08); display: flex; align-items: center; justify-content: space-between; padding: 0 28px; position: sticky; top: 0; z-index: 100; }
        .topbar-title { font-weight: 700; font-size: 1.05rem; color: #1A1A2E; }
        .content-area { padding: 28px; }
        .card-stat { background: white; border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px rgba(0,0,0,.06); border-left: 4px solid var(--sidebar-accent); }
        .card-stat .stat-icon { width: 48px; height: 48px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; }
        .btn-mas { background: #C8102E; color: white; border: none; border-radius: 8px; padding: 8px 18px; font-weight: 600; transition: background .2s; }
        .btn-mas:hover { background: #A00D24; color: white; }
        .btn-mas-outline { border: 2px solid #C8102E; color: #C8102E; background: transparent; border-radius: 8px; padding: 6px 16px; font-weight: 600; transition: all .2s; }
        .btn-mas-outline:hover { background: #C8102E; color: white; }
        .page-card { background: white; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,.06); }
        .page-card-header { padding: 20px 24px; border-bottom: 1px solid #F0F0F0; display: flex; align-items: center; justify-content: space-between; }
        .page-card-body { padding: 24px; }
        .form-label { font-weight: 600; font-size: .9rem; color: #444; }
        .status-badge-new { background: #FFF3CD; color: #856404; border-radius: 20px; padding: 3px 10px; font-size: .78rem; font-weight: 600; }
        .status-badge-contacted { background: #CCE5FF; color: #004085; border-radius: 20px; padding: 3px 10px; font-size: .78rem; font-weight: 600; }
        .status-badge-enrolled { background: #D4EDDA; color: #155724; border-radius: 20px; padding: 3px 10px; font-size: .78rem; font-weight: 600; }
        .status-badge-rejected { background: #F8D7DA; color: #721C24; border-radius: 20px; padding: 3px 10px; font-size: .78rem; font-weight: 600; }
        .alert-success-admin { background: #D4EDDA; border: 1px solid #C3E6CB; color: #155724; border-radius: 8px; padding: 14px 18px; margin-bottom: 20px; }
        @media (max-width: 991px) {
            .sidebar { left: -260px; }
            .sidebar.open { left: 0; }
            .main-content { margin-left: 0; }
        }
    </style>
    @stack('styles')
</head>
<body>

<div class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <h5>MAS <span>EduCare</span></h5>
        <div style="font-size:.78rem;color:rgba(255,255,255,.4);margin-top:2px">Admin Panel</div>
    </div>
    <nav class="sidebar-nav">
        <div class="nav-section">Main</div>
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-fill"></i> Dashboard
        </a>

        <div class="nav-section mt-2">Settings</div>
        <a href="{{ route('admin.settings.show', 'general') }}" class="sidebar-link {{ request()->is('admin/settings/general') ? 'active' : '' }}">
            <i class="bi bi-gear-fill"></i> General
        </a>
        <a href="{{ route('admin.settings.show', 'hero') }}" class="sidebar-link {{ request()->is('admin/settings/hero') ? 'active' : '' }}">
            <i class="bi bi-image-fill"></i> Hero Section
        </a>
        <a href="{{ route('admin.settings.show', 'about') }}" class="sidebar-link {{ request()->is('admin/settings/about') ? 'active' : '' }}">
            <i class="bi bi-person-badge-fill"></i> About / Founder
        </a>
        <a href="{{ route('admin.settings.show', 'courses') }}" class="sidebar-link {{ request()->is('admin/settings/courses') ? 'active' : '' }}">
            <i class="bi bi-book-fill"></i> Courses
        </a>
        <a href="{{ route('admin.settings.show', 'seo') }}" class="sidebar-link {{ request()->is('admin/settings/seo') ? 'active' : '' }}">
            <i class="bi bi-search"></i> SEO
        </a>

        <div class="nav-section mt-2">Content</div>
        <a href="{{ route('admin.team.index') }}" class="sidebar-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i> Team / Senseis
        </a>
        <a href="{{ route('admin.gallery.index') }}" class="sidebar-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
            <i class="bi bi-images"></i> Gallery
        </a>
        <a href="{{ route('admin.testimonials.index') }}" class="sidebar-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
            <i class="bi bi-chat-quote-fill"></i> Testimonials
        </a>

        <div class="nav-section mt-2">CRM</div>
        <a href="{{ route('admin.enrollments.index') }}" class="sidebar-link {{ request()->routeIs('admin.enrollments.*') ? 'active' : '' }}">
            <i class="bi bi-clipboard2-check-fill"></i> Enrollments
            @php $newEnrollCount = \App\Models\CourseEnrollment::where('status','new')->count(); @endphp
            @if($newEnrollCount > 0)<span class="sidebar-badge">{{ $newEnrollCount }}</span>@endif
        </a>
        <a href="{{ route('admin.messages.index') }}" class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
            <i class="bi bi-envelope-fill"></i> Messages
            @php $unreadCount = \App\Models\ContactMessage::where('is_read',false)->count(); @endphp
            @if($unreadCount > 0)<span class="sidebar-badge">{{ $unreadCount }}</span>@endif
        </a>

        <div class="nav-section mt-2">Account</div>
        <a href="{{ route('admin.password.edit') }}" class="sidebar-link {{ request()->routeIs('admin.password.*') ? 'active' : '' }}">
            <i class="bi bi-key-fill"></i> Change Password
        </a>
        <form action="{{ route('logout') }}" method="POST" class="px-2 mt-1">
            @csrf
            <button type="submit" class="sidebar-link w-100 text-start" style="border:none;background:transparent;cursor:pointer;color:rgba(255,255,255,.7)">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </nav>
</div>

<div class="main-content">
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn d-lg-none p-1" id="sidebarToggle" style="border:none"><i class="bi bi-list" style="font-size:1.4rem"></i></button>
            <span class="topbar-title">@yield('page-title', 'Dashboard')</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm" style="border:1px solid #dee2e6;color:#555;border-radius:6px"><i class="bi bi-eye me-1"></i>View Site</a>
            <div style="font-size:.85rem;color:#666">{{ auth()->user()->name }}</div>
        </div>
    </div>

    <div class="content-area">
        @if(session('success'))
        <div class="alert-success-admin"><i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    document.getElementById('sidebarToggle')?.addEventListener('click', () => {
        document.getElementById('sidebar').classList.toggle('open');
    });
    $(document).ready(function() {
        if ($('.datatable').length) {
            $('.datatable').DataTable({ pageLength: 25, order: [[1,'asc']] });
        }
    });
</script>
@stack('scripts')
</body>
</html>