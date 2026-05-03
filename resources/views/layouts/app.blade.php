<!DOCTYPE html>
@php $locale = app()->getLocale(); @endphp
<html lang="{{ $locale }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', setting('seo.meta_title', 'MAS EduCare — Japanese Language Center Bangladesh'))</title>
    <meta name="description" content="@yield('description', setting('seo.meta_description'))">
    <meta property="og:title" content="@yield('title', setting('seo.meta_title'))">
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{ url()->current() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Hind+Siliguri:wght@400;500;600;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
    <style>
        :root {
            --mas-crimson: #C8102E; --mas-crimson-dark: #A00D24;
            --mas-ink: #1A1A2E; --mas-ink-light: #2D2D44;
            --mas-warm-white: #FAFAF7; --mas-sakura: #F4B8C1;
            --mas-gold: #C9A84C; --mas-gray: #6C757D;
            --mas-light-bg: #F5F5F0;
            --font-display: 'Playfair Display', 'Noto Serif JP', serif;
            --font-body: 'Hind Siliguri', sans-serif;
            --radius: 8px; --shadow: 0 4px 24px rgba(26,26,46,0.10);
            --shadow-hover: 0 8px 40px rgba(200,16,46,0.18);
        }
        body { font-family: var(--font-body); background: var(--mas-warm-white); color: var(--mas-ink); }
        h1,h2,h3,h4,h5 { font-family: var(--font-display); }
        .navbar-mas { background: rgba(26,26,46,0.97); backdrop-filter: blur(10px); }
        .navbar-mas .navbar-brand { color: white; font-family: var(--font-display); font-size: 1.4rem; font-weight: 700; }
        .navbar-mas .nav-link { color: rgba(255,255,255,0.85) !important; font-weight: 500; transition: color .2s; }
        .navbar-mas .nav-link:hover, .navbar-mas .nav-link.active { color: var(--mas-sakura) !important; }
        .btn-enroll { background: var(--mas-crimson); color: white !important; border-radius: 25px; padding: 8px 22px !important; font-weight: 600; transition: background .2s, transform .2s; }
        .btn-enroll:hover { background: var(--mas-crimson-dark) !important; transform: translateY(-1px); }
        .lang-switcher .dropdown-toggle { color: rgba(255,255,255,.85) !important; font-size:.85rem; padding:6px 10px !important; border:1px solid rgba(255,255,255,.25); border-radius:20px; }
        .lang-switcher .dropdown-toggle::after { display:none; }
        .lang-switcher .dropdown-menu { min-width:130px; border:none; box-shadow:0 8px 24px rgba(0,0,0,.2); border-radius:10px; }
        .lang-switcher .dropdown-item { font-size:.88rem; padding:8px 16px; }
        .lang-switcher .dropdown-item.active, .lang-switcher .dropdown-item:active { background:var(--mas-crimson); color:white; }
        .section-title { font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 900; color: var(--mas-ink); }
        .section-subtitle { color: var(--mas-gray); font-size: 1.05rem; }
        .title-divider { width: 60px; height: 3px; background: var(--mas-crimson); border-radius: 2px; margin: 12px auto 30px; }
        .title-divider.left { margin-left: 0; }
        .feature-card { border: none; border-radius: var(--radius); box-shadow: var(--shadow); padding: 32px 28px; transition: transform .3s, box-shadow .3s, border-left-color .3s; border-left: 4px solid transparent; background: white; height: 100%; }
        .feature-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); border-left-color: var(--mas-crimson); }
        .feature-icon { font-size: 2.4rem; color: var(--mas-crimson); margin-bottom: 16px; }
        .course-card { border: none; border-radius: 12px; box-shadow: var(--shadow); overflow: hidden; transition: transform .3s, box-shadow .3s; height: 100%; }
        .course-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-hover); }
        .course-card-header { background: var(--mas-crimson); color: white; padding: 28px; }
        .course-level-badge { background: rgba(255,255,255,0.25); border-radius: 20px; padding: 4px 14px; font-size: .85rem; font-weight: 600; display: inline-block; margin-bottom: 8px; }
        .step-circle { width: 60px; height: 60px; border-radius: 50%; background: var(--mas-crimson); color: white; font-size: 1.3rem; font-weight: 700; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; box-shadow: 0 4px 16px rgba(200,16,46,.3); }
        .testimonial-card { background: white; border-radius: 12px; padding: 28px; box-shadow: var(--shadow); border-top: 4px solid var(--mas-crimson); }
        .achievement-badge { background: var(--mas-crimson); color: white; font-size: .78rem; border-radius: 20px; padding: 3px 12px; display: inline-block; }
        .gallery-item { position: relative; overflow: hidden; border-radius: var(--radius); }
        .gallery-item img { width: 100%; height: 220px; object-fit: cover; transition: transform .4s; }
        .gallery-item:hover img { transform: scale(1.06); }
        .gallery-overlay { position: absolute; inset: 0; background: rgba(26,26,46,.6); display: flex; align-items: flex-end; padding: 16px; opacity: 0; transition: opacity .3s; }
        .gallery-item:hover .gallery-overlay { opacity: 1; }
        .cta-banner { background: linear-gradient(135deg, var(--mas-crimson), var(--mas-crimson-dark)); padding: 70px 0; }
        .footer-mas { background: var(--mas-ink); color: rgba(255,255,255,.8); padding: 60px 0 0; }
        .footer-title { color: white; font-size: 1.1rem; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--mas-crimson); padding-bottom: 10px; display: inline-block; }
        .footer-mas a { color: rgba(255,255,255,.7); text-decoration: none; transition: color .2s; }
        .footer-mas a:hover { color: var(--mas-sakura); }
        .footer-social a { display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,.1); color: white; margin-right: 8px; font-size: 1.1rem; transition: background .2s; }
        .footer-social a:hover { background: var(--mas-crimson); }
        .footer-bottom { background: rgba(0,0,0,.3); margin-top: 40px; padding: 16px 0; font-size: .88rem; }
        .whatsapp-float { position: fixed; bottom: 24px; right: 24px; z-index: 9999; background: #25D366; color: white; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; box-shadow: 0 4px 16px rgba(37,211,102,.4); transition: transform .2s; text-decoration: none; }
        .whatsapp-float:hover { transform: scale(1.1); color: white; }
        .stat-badge { background: rgba(255,255,255,.12); backdrop-filter: blur(8px); border-radius: 8px; padding: 12px 20px; text-align: center; border: 1px solid rgba(255,255,255,.2); }
        .stat-badge .stat-number { font-size: 1.5rem; font-weight: 700; color: var(--mas-gold); }
        .stat-badge .stat-label { font-size: .78rem; color: rgba(255,255,255,.85); }
        .filter-tab { border: 2px solid var(--mas-crimson); color: var(--mas-crimson); border-radius: 25px; padding: 6px 18px; font-size: .9rem; cursor: pointer; transition: all .2s; background: transparent; text-decoration: none; display: inline-block; margin: 4px; }
        .filter-tab:hover, .filter-tab.active { background: var(--mas-crimson); color: white; }
        .bg-light-bg { background: var(--mas-light-bg); }
        .text-crimson { color: var(--mas-crimson) !important; }
        .bg-crimson { background: var(--mas-crimson) !important; }
        .founder-quote-mark { font-size: 6rem; color: var(--mas-sakura); line-height: 0.5; font-family: Georgia, serif; opacity: .6; }
    </style>
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-mas sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            @if(setting('general.logo'))
                <img src="{{ asset(setting('general.logo')) }}" alt="{{ setting('general.site_name') }}" height="40" class="me-2">
            @else
                MAS <span style="color:var(--mas-sakura)">EduCare</span>
            @endif
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <i class="bi bi-list" style="color:white;font-size:1.6rem"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navMain">
            <ul class="navbar-nav gap-1">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('messages.nav.home') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('messages.nav.about') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('courses') ? 'active' : '' }}" href="{{ route('courses') }}">{{ __('messages.nav.courses') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('visa') ? 'active' : '' }}" href="{{ route('visa') }}">{{ __('messages.nav.visa') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">{{ __('messages.nav.gallery') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('messages.nav.contact') }}</a></li>
            </ul>
        </div>
        <div class="d-none d-lg-flex align-items-center gap-2">
            {{-- Language Switcher --}}
            <div class="dropdown lang-switcher">
                <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    @if($locale === 'bn') 🇧🇩 বাংলা
                    @else 🇬🇧 EN
                    @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item {{ $locale === 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">🇬🇧 {{ __('messages.nav.lang_en') }}</a></li>
                    <li><a class="dropdown-item {{ $locale === 'bn' ? 'active' : '' }}" href="{{ route('lang.switch', 'bn') }}">🇧🇩 {{ __('messages.nav.lang_bn') }}</a></li>
                </ul>
            </div>
            <a href="{{ route('courses') }}" class="nav-link btn-enroll ms-1">{{ __('messages.nav.apply') }}</a>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer-mas">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                @if(setting('general.footer_logo'))
                    <img src="{{ asset(setting('general.footer_logo')) }}" alt="{{ setting('general.site_name', 'MAS EduCare') }}" style="max-height:60px;max-width:180px;object-fit:contain;margin-bottom:12px">
                @else
                    <div class="footer-title">{{ setting('general.site_name', 'MAS EduCare') }}</div>
                @endif
                <p class="mt-3" style="line-height:1.9">{{ setting('general.tagline') }}</p>
                <div class="footer-social mt-3">
                    @if(setting('general.facebook_url'))<a href="{{ setting('general.facebook_url') }}" target="_blank"><i class="bi bi-facebook"></i></a>@endif
                    @if(setting('general.youtube_url'))<a href="{{ setting('general.youtube_url') }}" target="_blank"><i class="bi bi-youtube"></i></a>@endif
                    @if(setting('general.whatsapp_number'))<a href="https://wa.me/{{ preg_replace('/[^0-9]/','',setting('general.whatsapp_number')) }}" target="_blank"><i class="bi bi-whatsapp"></i></a>@endif
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-title">{{ __('messages.footer.quick_links') }}</div>
                <ul class="list-unstyled mt-3" style="line-height:2.4">
                    <li><a href="{{ route('home') }}">{{ __('messages.nav.home') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('messages.footer.about_us') }}</a></li>
                    <li><a href="{{ route('courses') }}">{{ __('messages.nav.courses') }}</a></li>
                    <li><a href="{{ route('visa') }}">{{ __('messages.footer.visa_process') }}</a></li>
                    <li><a href="{{ route('gallery') }}">{{ __('messages.nav.gallery') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('messages.nav.contact') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-title">{{ __('messages.footer.our_courses') }}</div>
                <ul class="list-unstyled mt-3" style="line-height:2.4">
                    <li><a href="{{ route('courses') }}">JLPT N5 Course</a></li>
                    <li><a href="{{ route('courses') }}">JLPT N4 Course</a></li>
                    <li><a href="{{ route('visa') }}">{{ __('messages.footer.visa_process') }}</a></li>
                    <li><a href="{{ route('courses') }}">{{ __('messages.footer.interview_prep') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-title">{{ __('messages.footer.contact_info') }}</div>
                <ul class="list-unstyled mt-3" style="line-height:2.4">
                    <li><i class="bi bi-geo-alt-fill text-crimson me-2"></i><a href="https://maps.app.goo.gl/iAUZDX1T5rQa8yko9" target="_blank" rel="noopener" style="color:inherit;text-decoration:none">{{ setting('general.address') }} <i class="bi bi-box-arrow-up-right" style="font-size:.7rem;opacity:.7"></i></a></li>
                    <li><i class="bi bi-telephone-fill text-crimson me-2"></i><a href="tel:{{ setting('general.phone') }}">{{ setting('general.phone') }}</a></li>
                    <li><i class="bi bi-envelope-fill text-crimson me-2"></i><a href="mailto:{{ setting('general.email') }}">{{ setting('general.email') }}</a></li>
                    <li><i class="bi bi-clock-fill text-crimson me-2"></i>{{ setting('general.office_hours') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <span>&copy; {{ date('Y') }} {{ setting('general.site_name', 'MAS EduCare') }}. {{ __('messages.footer.all_rights') }}</span>
            <span>{{ __('messages.footer.dev_by') }} <strong> <a href="https://abid.com.bd" target="_blank">Abid Hasan</a> </strong></span>
        </div>
    </div>
</footer>

@php $wa = setting('general.whatsapp_number', '8801867888667'); @endphp
<a href="https://wa.me/{{ preg_replace('/[^0-9]/','', $wa) }}" class="whatsapp-float" target="_blank" title="WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>GLightbox({ selector: '.glightbox' });</script>
@stack('scripts')
</body>
</html>
